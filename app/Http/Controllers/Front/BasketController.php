<?php namespace App\Http\Controllers\Front;

use\App\Http\Controllers\JoshController;
use App\Http\Requests\ConfirmPasswordRequest;
use App\User;
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

class BasketController extends JoshController{

    private $userBasketModel;
    public function __construct()
    {
        parent::__construct();
        $this->userBasketModel = new UserBasket();
    }

    public function index(Request $request)
    {
        $immeditaly_type = $this->getParam("immeditaly_type", "0");
        $basketList = UserBasket::getBasketList($immeditaly_type);
        view()->share('basketList', $basketList);
        $relationList = UserBasket::getBasketRelativeProductList();
        view()->share('relationList', $relationList);
        view()->share("immeditaly_type",$immeditaly_type);
        return view("front/basket");

    }

    public function ajaxSaveBasketInfo(Request $request){
        $id = $request->get("id");
        $info = UserBasket::find($id);
        if(isset($info['id'])){
            $product_id = $info['product_id'];
            $productInfo = Product::find($product_id);
            if(!isset($productInfo['id'])){
                return json_encode(array('status' => 0, 'msg'=>'product information is incorrect!'));
            }
            $quantity = $productInfo['quantity'];
            $sell_count = $productInfo['sell_count'];
            $basket_old_count = $info['product_count'];
            $basket_new_count = $this->getParam("product_count", "0");
            if($quantity-$sell_count+$basket_old_count-$basket_new_count <0){
                return json_encode(array('status' => 0, 'msg'=>'product number is over remain number!'));
            }

            $productInfo->decrement('sell_count',$basket_old_count);
            $productInfo->increment('sell_count',$basket_new_count);
            $this->getBoClass($info, $request);
        }else{
            $info = new UserBasket();
            $product_id = $this->getParam("product_id", "0");
            $productInfo = Product::find($product_id);
            $quantity = $productInfo['quantity'];
            $sell_count = $productInfo['sell_count'];
            $product_count = $this->getParam("product_count", "0");
            if($quantity-$sell_count-$product_count <0){
                return json_encode(array('status' => 0, 'msg'=>'product number is over remain number!'));
            }

            $ret = $this -> getBoClass($info,$request, 'au_user_basket');
            $info = $ret['model'];
        }
        $info->save();

        return json_encode(array('status' => 1));
    }

    public function ajaxDeleteInfo(Request $request)
    {
        $id = $request->get("id");
        $info = UserBasket::find($id);
        if(!isset($info['id'])){
            return json_encode(array('status' => 0, 'msg' => 'The information is incorrect'));
        }

        if (UserBasket::isDelete($id)) {
            UserBasket::where(array("id" => $id))->delete();
            $product_info = Product::find($info['product_id']);
            if(isset($product_info['id'])){
                $product_info->decrement('sell_count',$info['product_count']);
            }
            return json_encode(array('status' => 1));
        } else {
            return json_encode(array('status' => 0, 'msg' => 'Can not delete this item'));
        }
    }

    public function insertCart(Request $request){
        if($this->getUserId() == ""){
            return json_encode(array('status' => 0, 'msg' => 'session is not created'));
        }

        $user_id = $this->getUserId();
        $product_id = $this->getParam("product_id", "0");
        $productInfo = Product::find($product_id);
        if(!isset($productInfo['id'])){
            return json_encode(array('status' => 0, 'msg' => 'product info is incorrect!'));

        }
        $productInfo->increment("sell_count", $this->getParam("product_count", "0")*1);
        $sku_id = $this->getParam("sku_id", "0");
        $immeditaly_type = $this->getParam("immeditaly_type", "0");
        if($immeditaly_type*1 == 1){
            $model = UserBasket::where(array("user_id"=>$user_id, "immeditaly_type"=>$immeditaly_type))->first();
        }else{
            $model = UserBasket::where(array("user_id"=>$user_id, "product_id"=>$product_id, "sku_id"=>$sku_id,"immeditaly_type"=>$immeditaly_type))->first();
        }


        if(isset($model['id'])){
            if($immeditaly_type*1 == 1){
                $model['product_id'] = $product_id;
                $model['sku_id'] = $sku_id;
                $model['product_count'] = $this->getParam("product_count", "0")*1;
                $model['supplier_id'] = $this->getParam("supplier_id", "0")*1;
                $model['immeditaly_type'] = $immeditaly_type;
            }else{
                $model['product_count'] += $this->getParam("product_count", "0")*1;
            }
            $model->save();
        }else{
            $this->getBoClass($this->userBasketModel, $request,"au_user_basket");
            $this->userBasketModel['user_id'] = $this->getUserId();
            $this->userBasketModel->save();
        }
        return json_encode(array('status' => 1, 'msg' => 'The operation is success'));
    }
}