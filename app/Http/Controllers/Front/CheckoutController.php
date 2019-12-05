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
////////////////////////////////

use PayMoney\Api\Payer;
use PayMoney\Api\Amount;
use PayMoney\Api\Transaction;
use PayMoney\Api\RedirectUrls;
use PayMoney\Api\Payment;

class CheckoutController extends JoshController{

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $immeditaly_type = $this->getParam("immeditaly_type", "0");
        $basketList = UserBasket::getBasketList($immeditaly_type);
        view()->share('basketList', $basketList);
        $shipInfo = UserReceiveAddress::getShippingAddress();
        view()->share("shipInfo", $shipInfo);
        view()->share('countries', $this->countries);
        view()->share('immeditaly_type',$immeditaly_type);
        return view("front/checkout");

    }

    public function createOrder(){
        $immeditaly_type = $this->getParam("immeditaly_type", "0");
        $user_id = $this->getUserId();
        $userReceiveAddressCount = UserReceiveAddress::where(array("user_id"=>$user_id, "is_active"=>'1'))->count();
        // if($userReceiveAddressCount == 0){
        //     echo json_encode(array("status"=>"0", "msg"=>'Receive Address is Empty!'));
        //     return;
        // }
        //Payer Object
        $payer = new Payer();

        $paymentMethods = array(
            0 => 'PayMoney',
            1 => 'PayMoney'
        );
        $payer->setPaymentMethod($paymentMethods); //preferably, your system name, example - PayMoney

        //Amount Object
        $amountIns = new Amount();

        $totalPrices = array(
            0 => 20,
            1 => 30
        ); 

        $currencies = array(
            0 => 'USD',
            1 => 'USD'
        ); 
        $amountIns->setTotal($totalPrices)->setCurrency($currencies); //must give a valid currency code and must exist in merchant wallet list

        //Transaction Object
        $trans = new Transaction();
        $trans->setAmount($amountIns);

        //RedirectUrls Object
        $urls = new RedirectUrls();
        $urls->setSuccessUrl('https://megapay.hk/login') //success url - the merchant domain page,
        ->setCancelUrl('https://megapay.hk/'); //cancel url - the merchant domain page, to redirect after

        //Payment Object
        $payment = new Payment();
        
        $mecharnts = array();
        $mecharnts = array( //'merchant id' => 'merchant credential'-----2019-11-30
            "iQmp8RGxg0KOOJIYEX6UX61aClTubk" => "kPLTUVOBuEXq5r00HfhetJmbNY3YJ4hJglhJSrDkZfErlPS116eFzsWmKnithxTYrmRoNpNvYzmMqj3gnpTJCFrDULhauLQEr88j",
            "TzARXNT6LyJUkMJomtpbw1m7py1RSC" => "FnUiwzuBDLKLAOnRTdNFO6tcBxm2D91u87DWrriLQ9a74lBxZVW1i0z2aW6XQWTMxHC1kaah8eV96z4IaGF1y9ET6RYnAlHZCUUA"
        );
        
        $payment->setCredentials($mecharnts)->setRedirectUrls($urls)
            ->setPayer($payer)
            ->setTransaction($trans);

        try {

            $payment->create(); //create payment
            //=============  2019-12-01 demo ==============================
            $urls = $payment->getApprovedUrl();
            header("Location: ".$payment->getApprovedUrl()); //checkout url
            exit;
        } catch (\Exception $ex) {
            print $ex;
            exit;
        }
        // $orderIds = UserBasket::createOrder($immeditaly_type);

        // echo json_encode(array("status"=>"1", "orderIds" => $orderIds));
    }

    public function createTransLog(){
        $order_ids = $this->getParam("order_ids", "");
        $trans_type = $this->getParam("trans_type", "");
        $ret = UserTransLog::createTransLog($order_ids, $trans_type);
        echo json_encode(array("status"=>"1", "transId" => $ret['id'], "transMoney" =>$ret['money'] ));
    }

}