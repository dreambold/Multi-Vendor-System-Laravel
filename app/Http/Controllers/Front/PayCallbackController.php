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
use App\UserBasket;
use App\UserReceiveAddress;
use App\UserTransLog;
use DB;

class PayCallbackController extends JoshController{

    public function __construct()
    {


    }

    public function index(Request $request)
    {
        $transId = $request->input("transId", "0");
        UserTransLog::paySuccess($transId);
        echo "OK";

    }



}