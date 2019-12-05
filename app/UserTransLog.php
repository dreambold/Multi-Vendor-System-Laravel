<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sentinel;
use DB;

class UserTransLog extends Model {

    protected $table = 'au_user_trans_log';
    protected $guarded = ['id'];
    public  $timestamps = false;

    static public  function isDelete($id){
        return true;
    }

    static public function createTransLog($order_ids, $trans_type = 0){
        $user =  Sentinel::getUser();
        $user_id = $user['id'];
        $totalInfo = Order::whereRaw("FIND_IN_SET(id, '".$order_ids."')")->select(DB::raw("IFNULL(SUM(total_price),0) totalPrice"))->first();
        $trans_money = $totalInfo['totalPrice'];
        $transLog = new UserTransLog();
        $transLog['user_id'] = $user_id;
        $transLog['trans_type'] = $trans_type;
        $transLog['trans_money'] = $trans_money;
        $transLog['trans_time'] = date("Y-m-d H:i:s");
        $transLog['order_ids'] = $order_ids;
        $transLog->save();
        return array("id" => $transLog['id'],"money" =>$trans_money );
    }

    static public function paySuccess($trans_id){
        $transInfo= UserTransLog::find($trans_id);
        $now = date("Y-m-d H:i:s");
        if(!isset($transInfo['id'])) return;
        $transInfo['trans_state'] = 1;
        $transInfo['pay_time'] = $now;
        $transInfo->save();
        $orderIds = $transInfo['order_ids'];

        $orderList = Order::whereRaw("FIND_IN_SET(id, '".$orderIds."')")->get();
        foreach($orderList as $order){
            $order['state'] = "1";
            $order['update_time'] = $now;
            $order->save();
        }

    }
}
