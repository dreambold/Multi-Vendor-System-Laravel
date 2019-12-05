<?php

namespace App\Http\Controllers;

use Activation;
use App\Http\Requests;
use App\Http\Requests\PasswordResetRequest;
use App\Http\Requests\UserRequest;
use App\Http\Requests\FrontendRequest;
use App\User;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use File;
use Hash;
use Illuminate\Http\Request;
use Mail;
use Redirect;
use Reminder;
use Validator;
use Sentinel;
use URL;
use View;
use stdClass;
use App\Mail\Contact;
use App\Mail\ForgotPassword ;
use App\EmailVerifyCode;


class FrontEndController extends JoshController
{

    /*
     * $user_activation set to false makes the user activation via user registered email
     * and set to true makes user activated while creation
     */
    private $user_activation = true;

    /**
     * Account sign in.
     *
     * @return View
     */

    public function send_email(){
        $email = $this->getParam("email", "");
        $info = EmailVerifyCode::where(array("email"=>$email))->first();
        if(!isset($info['id'])){
            $info = new EmailVerifyCode();
            $info['email'] = $email;
        }


        $info['verify_code'] = rand_str(5);
        $info->save();
        // email send module
        $data = array();
        $data['status'] = '1';
        echo json_encode($data);
    }

    public function getLogin()
    {
        // Is the user logged in?
        if (Sentinel::check()) {
            return Redirect::route('my-account');
        }
        // Show the login page
        return view('login');
    }

    /**
     * Account sign in form processing.
     *
     * @return Redirect
     */
    public function postLogin(Request $request)
    {
        
        try {
            // Try to log the user in
            if ($user=  Sentinel::authenticate($request->only('email', 'password'), $request->get('remember-me', 0))) {
                //Activity log for login
                activity($user->full_name)
                    ->performedOn($user)
                    ->causedBy($user)
                    ->log('LoggedIn');

                //return Redirect::route("my-account")->with('success', trans('auth/message.login.success'));
                $value = $request->session()->get("curl");
                if(isset($value)){
                    return redirect($value);
                }
                return redirect("front/my/account")->with('success', trans('auth/message.login.success'));
            } else {
                return redirect('login')->with('error', 'Email or password is incorrect.');
                //return Redirect::back()->withInput()->withErrors($validator);
            }

        } catch (UserNotFoundException $e) {
            $this->messageBag->add('email', trans('auth/message.account_not_found'));
        } catch (NotActivatedException $e) {
            $this->messageBag->add('email', trans('auth/message.account_not_activated'));
        } catch (UserSuspendedException $e) {
            $this->messageBag->add('email', trans('auth/message.account_suspended'));
        } catch (UserBannedException $e) {
            $this->messageBag->add('email', trans('auth/message.account_banned'));
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            $this->messageBag->add('email', trans('auth/message.account_suspended', compact('delay')));
        }

        // Ooops.. something went wrong
        return Redirect::back()->withInput()->withErrors($this->messageBag);
    }

    /**
     * get user details and display
     */
    public function myAccount(User $user)
    {
        $user = Sentinel::getUser();
        $countries = $this->countries;
        return view('user_account', compact('user', 'countries'));
    }

    /**
     * update user details and display
     * @param Request $request
     * @param User $user
     * @return Return Redirect
     */
    public function update(User $user, FrontendRequest $request)
    {
        $user = Sentinel::getUser();
        //update values
        $user->update($request->except('password','pic','password_confirm'));

        if ($password = $request->get('password')) {
            $user->password = Hash::make($password);
        }
        // is new image uploaded?
        if ($file = $request->file('pic')) {
            $extension = $file->extension()?: 'png';
            $folderName = '/uploads/users/';
            $destinationPath = public_path() . $folderName;
            $safeName = str_random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);

            //delete old pic if exists
            if (File::exists(public_path() . $folderName . $user->pic)) {
                File::delete(public_path() . $folderName . $user->pic);
            }
            //save new file path into db
            $user->pic = $safeName;

        }

        // Was the user updated?
        if ($user->save()) {
            // Prepare the success message
            $success = trans('users/message.success.update');
            //Activity log for update account
            activity($user->full_name)
                ->performedOn($user)
                ->causedBy($user)
                ->log('User Updated successfully');
            // Redirect to the user page
            return Redirect::route('front-account')->with('success', $success);
        }

        // Prepare the error message
        $error = trans('users/message.error.update');


        // Redirect to the user page
        return Redirect::route('front-account')->withInput()->with('error', $error);


    }

    /**
     * Account Register.
     *
     * @return View
     */
    public function getRegister()
    {
        // Show the page
        return view('register');
    }

    /**
     * Account sign up form processing.
     *
     * @return Redirect
     */
    public function postRegister(UserRequest $request)
    {
        $data = new stdClass();
        $activate = $this->user_activation; //make it false if you don't want to activate user automatically it is declared above as global variable
        try {
            $email = $this->getParam("email", "");
            $verify_code = $this->getParam("verify_code", "");
            $verify_info = EmailVerifyCode::where(array("email"=>$email))->first();
            if(!isset($verify_info['id'])){
                return Redirect::back()->with('error', trans('you must send verify code'));
            }

            if($verify_code != $verify_info['verify_code']){
                return Redirect::back()->with('error', trans('verify code incorrect!'));
            }

            // Register the user
            //$user = Sentinel::register($request->only(['first_name', 'last_name', 'email', 'password', 'gender']), $activate);
            $user = Sentinel::register($request->only(['first_name', 'last_name', 'email', 'password']), $activate);

            //add user to 'User' group
            $role = Sentinel::findRoleByName('buyer');
            $role->users()->attach($user);

            //if you set $activate=false above then user will receive an activation mail
            if (!$activate) {
                // Data to be used on the email view
                $data->user_name =$user->first_name .' '. $user->last_name;
                $data->activationUrl = URL::route('activate', [$user->id, Activation::exists($user)->code]);
                // Send the activation code through email
                Mail::to($user->email)
                    ->send(new Restore($data));
                //Redirect to login page
                return redirect('login')->with('success', trans('auth/message.signup.success'));
            }
            // login user automatically
            Sentinel::login($user, false);
            //Activity log for new account
            activity($user->full_name)
                ->performedOn($user)
                ->causedBy($user)
                ->log('New Account created');
            // Redirect to the home page with success menu
            return Redirect::route("my-account")->with('success', trans('auth/message.signup.success'));

        } catch (UserExistsException $e) {
            $this->messageBag->add('email', trans('auth/message.account_already_exists'));
        }

        // Ooops.. something went wrong
        return Redirect::back()->withInput()->withErrors($this->messageBag);
    }

    public function getRegisterBusiness()
    {
        // Show the page
        return view('register_business');
    }

    public function postBusinessRegister(Requests\SellerRequest $request)
    {
        $data = new stdClass();
        $activate = $this->user_activation; //make it false if you don't want to activate user automatically it is declared above as global variable
        try {
            // Register the user
            //$user = Sentinel::register($request->only(['first_name', 'last_name', 'email', 'password', 'gender']), $activate);
            $email = $this->getParam("email", "");
            $verify_code = $this->getParam("verify_code", "");
            $verify_info = EmailVerifyCode::where(array("email"=>$email))->first();
            if(!isset($verify_info['id'])){
                return Redirect::back()->with('error', trans('you must send verify code'));
            }

            if($verify_code != $verify_info['verify_code']){
                return Redirect::back()->with('error', trans('verify code incorrect!'));
            }

            $user = Sentinel::register($request->only(['first_name', 'last_name', 'email', 'password']), $activate);

            //add user to 'User' group
            $role = Sentinel::findRoleByName('seller');
            $role->users()->attach($user);

            //if you set $activate=false above then user will receive an activation mail
            if (!$activate) {
                // Data to be used on the email view
                $data->user_name =$user->first_name .' '. $user->last_name;
                $data->activationUrl = URL::route('activate', [$user->id, Activation::exists($user)->code]);
                // Send the activation code through email
                Mail::to($user->email)
                    ->send(new Restore($data));
                //Redirect to login page
                return redirect('login')->with('success', trans('auth/message.signup.success'));
            }
            // login user automatically
            Sentinel::login($user, false);
            //Activity log for new account
            activity($user->full_name)
                ->performedOn($user)
                ->causedBy($user)
                ->log('New Account created');
            // Redirect to the home page with success menu
            return Redirect::route("my-account")->with('success', trans('auth/message.signup.success'));

        } catch (UserExistsException $e) {
            $this->messageBag->add('email', trans('auth/message.account_already_exists'));
        }

        // Ooops.. something went wrong
        return Redirect::back()->withInput()->withErrors($this->messageBag);
    }

    /**
     * User account activation page.
     *
     * @param number $userId
     * @param string $activationCode
     *
     */
    public function getActivate($userId, $activationCode)
    {
        // Is the user logged in?
        if (Sentinel::check()) {
            return Redirect::route('my-account');
        }

        $user = Sentinel::findById($userId);

        if (Activation::complete($user, $activationCode)) {
            // Activation was successfull
            return Redirect::route('login')->with('success', trans('auth/message.activate.success'));
        } else {
            // Activation not found or not completed.
            $error = trans('auth/message.activate.error');
            return Redirect::route('login')->with('error', $error);
        }
    }

    /**
     * Forgot password page.
     *
     * @return View
     */
    public function getForgotPassword()
    {
        // Show the page
        return view('forgotpwd');

    }

    /**
     * Forgot password form processing page.
     * @param Request $request
     * @return Redirect
     */
    public function postForgotPassword(Request $request)
    {
        $data = new stdClass();
        try {
            // Get the user password recovery code
            $user = Sentinel::findByCredentials(['email' => $request->email]);
            if (!$user) {
                return Redirect::route('forgot-password')->with('error', trans('auth/message.account_email_not_found'));
            }

            $activation = Activation::completed($user);
            if (!$activation) {
                return Redirect::route('forgot-password')->with('error', trans('auth/message.account_not_activated'));
            }

            $reminder = Reminder::exists($user) ?: Reminder::create($user);
            // Data to be used on the email view

            $data->user_name =$user->first_name .' '. $user->last_name;
            $data->forgotPasswordUrl = URL::route('forgot-password-confirm', [$user->id, $reminder->code]);
            // Send the activation code through email
            Mail::to($user->email)
                ->send(new ForgotPassword($data));

        } catch (UserNotFoundException $e) {
            // Even though the email was not found, we will pretend
            // we have sent the password reset code through email,
            // this is a security measure against hackers.
        }

        //  Redirect to the forgot password
        return back()->with('success', trans('auth/message.forgot-password.success'));
    }

    /**
     * Forgot Password Confirmation page.
     *
     * @param  string $passwordResetCode
     * @return View
     */
    public function getForgotPasswordConfirm(Request $request, $userId, $passwordResetCode = null)
    {
        if (!$user = Sentinel::findById($userId)) {
            // Redirect to the forgot password page
            return Redirect::route('forgot-password')->with('error', trans('auth/message.account_not_found'));
        }

        if($reminder = Reminder::exists($user))
        {
            if($passwordResetCode == $reminder->code)
            {
                return view('forgotpwd-confirm', compact(['userId', 'passwordResetCode']));
            }
            else{
                return 'code does not match';
            }
        }
        else
        {
            return 'does not exists';
        }

    }

    /**
     * Forgot Password Confirmation form processing page.
     *
     * @param  string $passwordResetCode
     * @return Redirect
     */
    public function postForgotPasswordConfirm(PasswordResetRequest $request, $userId, $passwordResetCode = null)
    {

        $user = Sentinel::findById($userId);
        if (!$reminder = Reminder::complete($user, $passwordResetCode, $request->get('password'))) {
            // Ooops.. something went wrong
            return Redirect::route('login')->with('error', trans('auth/message.forgot-password-confirm.error'));
        }

        // Password successfully reseted
        return Redirect::route('login')->with('success', trans('auth/message.forgot-password-confirm.success'));
    }

    /**
     * Contact form processing.
     * @param Request $request
     * @return Redirect
     */
    public function postContact(Request $request)
    {
        $data = new stdClass();

        // Data to be used on the email view
        $data->contact_name = $request->get('contact-name');
        $data->contact_email = $request->get('contact-email');
        $data->contact_msg = $request->get('contact-msg');

        // Send the activation code through email
        Mail::to('email@domain.com')
            ->send(new Contact($data));

        //Redirect to contact page
        return redirect('contact')->with('success', trans('auth/message.contact.success'));
    }

    public function showFrontEndView($name=null)
    {
        if(View::exists($name))
        {
            return view($name);
        }
        else
        {
            abort('404');
        }
    }


    /**
     * Logout page.
     *
     * @return Redirect
     */
    public function getLogout()
    {
        if (Sentinel::check()) {
            //Activity log
            $user = Sentinel::getuser();
            activity($user->full_name)
                ->performedOn($user)
                ->causedBy($user)
                ->log('LoggedOut');
            // Log the user out
            Sentinel::logout();
        }
        // Redirect to the users page
        return redirect('login')->with('success', 'You have successfully logged out!');
    }


}
