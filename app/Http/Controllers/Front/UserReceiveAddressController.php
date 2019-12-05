<?php namespace App\Http\Controllers\Front;

use\App\Http\Controllers\JoshController;
use App\Http\Requests\ConfirmPasswordRequest;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Mail;
use Reminder;
use Sentinel;
use URL;
use Validator;
use View;
use App\Http\Requests\UserRequest;
use App\Http\Requests\ForgotRequest;
use stdClass;
use App\Mail\ForgotPassword;

use App\Product;
use App\ProductCategory;
use App\UserReceiveAddress;

class UserReceiveAddressController extends JoshController{

    public function __construct()
    {
        parent::__construct();

    }

    public function ajaxList(Request $request)
    {
        $addressList = UserReceiveAddress::getUserReceiveAddressList();
        view()->share('addressList', $addressList);
        view()->share('countries', $this->countries);
        return view("front/user_receive_address/user_receive_address_list");

    }

    public function ajaxInfo(Request $request)
    {
        $id = $request->input("id", "0");
        $info = UserReceiveAddress::find($id);
        view()->share('info', $info);
        view()->share('id', $id);
        view()->share('countries', $this->countries);
        return view("front/user_receive_address/user_receive_address_edit_content");

    }

    public function ajaxGetActiveInfo(Request $request)
    {
        $user_id = $this->getUserId();
        $info = UserReceiveAddress::where(array("user_id"=>$user_id, "is_active"=>'1'))->first();
        view()->share('shipInfo', $info);
        view()->share('countries', $this->countries);
        return view("front/checkout/ship_info");

    }

    public function ajaxSaveInfo(Request $request){
        $id = $request->get("id");
        $info = UserReceiveAddress::find($id);
        $user_id = $this->getUserId();
        if(isset($info['id'])){
            $this->getBoClass($info, $request);
        }else{
            $info = new UserReceiveAddress();
            $ret = $this -> getBoClass($info,$request, 'au_user_receive_address');
            $info = $ret['model'];
            $info['user_id'] =$user_id;
        }

        $count = UserReceiveAddress::where(array("user_id"=>$user_id, "is_active"=>1))->count();
        if($count == 0){
            $info['is_active'] = "1";
        }
        $info->save();

        return json_encode(array('status' => 1));
    }

    public function ajaxDeleteInfo(Request $request)
    {
        $id = $request->get("id");
        if (UserReceiveAddress::isDelete($id)) {
            UserReceiveAddress::where(array("id" => $id))->delete();
            return json_encode(array('status' => 1));
        } else {
            return json_encode(array('status' => 0, 'msg' => 'Can not delete this item'));
        }
    }

    public function ajaxSetActive(Request $request)
    {
        $id = $request->get("id");
        $user_id = $this->getUserId();
        UserReceiveAddress::where(array("user_id" => $user_id))->update(array("is_active"=>"0"));
        UserReceiveAddress::where(array("id" => $id))->update(array("is_active"=>"1"));
        return json_encode(array('status' => 1));
    }
}