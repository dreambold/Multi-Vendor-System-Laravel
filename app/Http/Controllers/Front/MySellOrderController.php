<?php namespace App\Http\Controllers\Front;

use\App\Http\Controllers\JoshController;
use Illuminate\Http\Request;
use Mail;
use Reminder;
use Sentinel;
use URL;
use Validator;
use View;
use \App\Order;

class MySellOrderController extends JoshController
{

	public function __construct(){
		parent::__construct();
	}

    public function order_discount_list(){
        $pageParam = $this->getPageParam(5);
        $model = new Order();
        $discount_state = $this->getParam("discount_state", "0");
        $user_id = $this->getUserId();
        $where = "seller_id = ".$user_id ." AND state = 0 ";

        if($discount_state != "0"){
            $where .= " AND discount_state = ".$discount_state;
        }else{
            $where .= " AND FIND_IN_SET(discount_state, '1,2,3,4')";
        }
        view()->share("discount_state", $discount_state);
        $model = $model->whereRaw($where);
        $model->orderBy("id", "DESC");

        $count = $model->count();
        $list = $model->skip($pageParam["start"])->take($pageParam["perPageSize"])->get();
        $pageParam = $this->setPageParam($pageParam, $count);
        view()->share('pageParam', $pageParam);
        view()->share("list", $list);
        view()->share("countries", $this->countries);
	    return view("front/front_seller/order_discount_list");
    }

    public function discount_seller_proposal(){

        $order_id = $this->getParam("order_id", "0");
        $order_info = Order::find($order_id);
        view()->share("info", $order_info);
        $viewName = "front/front_seller/discount_dlg_seller_content";
        view()->share("id", $order_id);
        return view($viewName);
    }

    public function ajax_sell_discount_proposal(Request $request){
        $id = $this->getParam("id", "0");
        $order = Order::find($id);
        if(!isset($order['id'])){
            echo json_encode(array('status'=>'0', "msg"=>'order info is novalidation!'));
            return;
        }

        $discount_state = $this->getParam("discount_state", "0");
        if($discount_state*1 == 2){
            $pass_price = $this->getParam("pass_price", "0");
            $order['org_price'] = $order['total_price'];
            $order['total_price'] = $pass_price;
        }
        $this->getBoClass($order, $request);
        $order->save();

        echo json_encode(array('status'=>'1', "msg"=>'The operation is successful'));
    }

    public function order_list(){
        $pageParam = $this->getPageParam(5);
        $model = new Order();
        $state = $this->getParam("state", "");
        $user_id = $this->getUserId();

        $where = "seller_id = ".$user_id;
        if($state != ''){
            if(count(explode(",",$state)) > 1){
                $where .= " AND FIND_IN_SET(state, '".$state."')";
            }else{
                $where .= " AND state = ".$state;
            }
        }


        $model = $model->whereRaw($where);
        $model->orderBy("id", "DESC");

        $count = $model->count();
        $list = $model->skip($pageParam["start"])->take($pageParam["perPageSize"])->get();
        $pageParam = $this->setPageParam($pageParam, $count);
        view()->share('pageParam', $pageParam);
        view()->share("list", $list);
        view()->share("countries", $this->countries);
        return view("front/front_seller/order_list");
    }

    public function ajax_sell_update_order(Request $request){
        $id = $this->getParam("id", "0");
        $order = Order::find($id);
        if(!isset($order['id'])){
            echo json_encode(array('status'=>'0', "msg"=>'order info is novalidation!'));
            return;
        }
        $state = $this->getParam("state", "0");
        $this->getBoClass($order, $request);
        switch($state){
            case "2":
                $order['delivery_time'] = date("Y-m-d h:i:s");
                break;
        }
        $order->save();

        echo json_encode(array('status'=>'1', "msg"=>'The operation is successful'));
    }


}