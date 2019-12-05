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

class MyOrderController extends JoshController
{

	public function __construct(){
		parent::__construct();
	}

    public function order_unpaid_list(){
        $pageParam = $this->getPageParam(5);
        $model = new Order();
        $discountState = $this->getParam("discountState", "0");
        $user_id = $this->getUserId();
        $where = "user_id = ".$user_id ." AND state = 0 ";

        if($discountState != "0"){
            $where .= " AND discount_state = ".$discountState;
        }
        view()->share("discountState", $discountState);

        $unpaidSort = $this->getParam("unpaidSort", "1");


        $model = $model->whereRaw($where);

        switch ($unpaidSort){
            case "1";
                $model->orderBy("id", "DESC");
                break;
            case "2";
                $model->orderBy("id");
                break;
        }
        view()->share("unpaidSort", $unpaidSort);

        $count = $model->count();
        $list = $model->skip($pageParam["start"])->take($pageParam["perPageSize"])->get();
        $pageParam = $this->setPageParam($pageParam, $count);
        view()->share('pageParam', $pageParam);
        view()->share("list", $list);
        view()->share("countries", $this->countries);
	    return view("front/front_buyer/order_unpaid_list");
    }

    public function order_paid_list(){
        $pageParam = $this->getPageParam(5);
        $model = new Order();
        $orderState = $this->getParam("orderState", "0");
        $user_id = $this->getUserId();
        $where = "user_id = ".$user_id ;
        if($orderState == "0"){
            $where .= " AND FIND_IN_SET(state , '1,2,3,4')";
        }else{
            $where .= " AND state = ".$orderState;
        }
        view()->share("orderState", $orderState);
        $model = $model->whereRaw($where);
        $model->orderBy("id", "DESC");
        $count = $model->count();
        $list = $model->skip($pageParam["start"])->take($pageParam["perPageSize"])->get();

        $pageParam = $this->setPageParam($pageParam, $count);
        view()->share('pageParam', $pageParam);
        view()->share("list", $list);
        view()->share("countries", $this->countries);
        return view("front/front_buyer/order_paid_list");
    }

    public function discount_buy_proposal(){

        $order_id = $this->getParam("order_id", "0");
        $order_info = Order::find($order_id);
        view()->share("info", $order_info);
        $viewName = "front/front_buyer/discount_dlg_buyer_content";
        view()->share("id", $order_id);
        return view($viewName);
    }


    public function ajax_buy_discount_proposal(Request $request){
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

}