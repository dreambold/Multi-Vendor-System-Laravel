<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Order extends Model {

    protected $table = 'au_order';
    protected $guarded = ['id'];
    public  $timestamps = false;


    public function getHomeStatisticsInfo($now, $lastWeek, $lastMonth){
        $ret = array();
        $where = "DATE_FORMAT(order_time, '%Y-%m-%d') = '".$now."'";
        $nowCountInfo = $this->whereRaw($where)->select(DB::raw("IFNULL(SUM(total_price),0) totalPrice"))->first();
        $ret['nowCount'] = $nowCountInfo['totalPrice'];
        $where = "DATE_FORMAT(order_time, '%Y-%m-%d') >= '".$lastWeek[2]."' AND DATE_FORMAT(order_time, '%Y-%m-%d') <= '".$now."'";
        $weekCountInfo = $this->whereRaw($where)->select(DB::raw("IFNULL(SUM(total_price),0) totalPrice"))->first();
        $ret['weekCount'] = $weekCountInfo['totalPrice'];
        $where = "DATE_FORMAT(order_time, '%Y-%m-%d') >= '".$lastMonth[2]."' AND DATE_FORMAT(order_time, '%Y-%m-%d') <= '".$now."'";
        $monthCountInfo = $this->whereRaw($where)->select(DB::raw("IFNULL(SUM(total_price),0) totalPrice"))->first();
        $ret['monthCount'] = $monthCountInfo['totalPrice'];
        return $ret;
    }

    public function getCancelAndCompleteCount(){
        $cancel =$this->where(array("state"=>'-1'))->count();
        $complete =$this->whereRaw("FIND_IN_SET(state,'3,4')")->count();
        $all = $this->whereRaw("FIND_IN_SET(state,'-1,1,2,3,4')")->count();
        return array('cancel'=>$cancel*100/$all, 'complete'=> $complete*100/$all);

    }


    public function getOrderStatisticsLineData(){
        $date_a = array();
        $date_a[] = date("Y-m-d",strtotime("-1 year"));
        $date_a[] = date("Y-m-d",strtotime("-6 month"));
        $date_a[] = date("Y-m-d",strtotime("-3 month"));
        $date_a[] = date("Y-m-d",strtotime("-1 month"));
        $date_a[] = date("Y-m-d",strtotime("-15 day"));
        $date_a[] = date("Y-m-d",strtotime("-1 week"));
        $date_a[] = date("Y-m-d",strtotime("-5 day"));
        $date_a[] = date("Y-m-d",strtotime("-4 day"));
        $date_a[] = date("Y-m-d",strtotime("-3 day"));
        $date_a[] = date("Y-m-d",strtotime("-2 day"));
        $date_a[] = date("Y-m-d",strtotime("-1 day"));
        $date_a[] = date("Y-m-d");
        $data1 = array();
        $data2 = array();
        foreach($date_a as $key =>$date){
            $where = "FIND_IN_SET(state, '3,4') ";
            if($key == 0){
                $where1 = " AND DATE_FORMAT(complete_time, '%Y-%m-%d') <= '".$date_a[$key]."'";
            }else{
                $where1 = " AND DATE_FORMAT(complete_time, '%Y-%m-%d') <= '".$date_a[$key]."' AND DATE_FORMAT(complete_time, '%Y-%m-%d') > '".$date_a[$key-1]."'";
            }

            $sql = "SELECT IFNULL(SUM(total_price),0) totalPrice FROM au_order WHERE ".$where.$where1;
            $info = DB::select($sql);
            array_push($data1, $info[0]->totalPrice);
            $where = " state >=0";
            if($key == 0){
                $where1 = " AND DATE_FORMAT(order_time, '%Y-%m-%d') <= '".$date_a[$key]."'";
            }else{
                $where1 = " AND DATE_FORMAT(order_time, '%Y-%m-%d') <= '".$date_a[$key]."' AND DATE_FORMAT(complete_time, '%Y-%m-%d') > '".$date_a[$key-1]."'";
            }
            $sql = "SELECT IFNULL(SUM(total_price),0) totalPrice FROM au_order WHERE ".$where.$where1;
            $info = DB::select($sql);
            array_push($data2, $info[0]->totalPrice);
        }
        return array("data1"=>$data1, "data2"=>$data2);

    }


    public function getOrderStatisticsTimeLineData(){
        $ret = array();
        for($i = 5; $i<=22; $i++){
            $H = sprintf("%02d", $i);
            $where = "DATE_FORMAT(order_time, '%H')='".$H."'";
            $count = $this->whereRaw($where)->count();
            array_push($ret, $count);
        }
        return $ret;
    }


    static public  function isDelete($id){
        return true;
    }

    public function orderDetailList() {
        return $this->hasMany('App\OrderDetail', 'order_id', 'id');
    }

    public function transLog(){
        $info = UserTransLog::whereRaw("FIND_IN_SET('".$this->id."',order_ids )")->first();
        return $info;
    }

    public function getDetailNum(){
        return OrderDetail::where(array("order_id"=>$this->id))->count();
    }

    public function isSavedSeller($id = 0){
        if($id *1 == 0){
            $id = $this->id;
        }
        $info = Order::find($id);
        if(!isset($info['id'])) return false;
        $user_id = $info['user_id'];
        $seller_id = $info['seller_id'];
        $count = UserSaveSeller::where(array("user_id"=>$user_id, "seller_id"=>$seller_id))->count();
        $ret = false;
        if($count > 0){
            $ret = true;
        }
        return $ret;

    }

    public function buyer(){
        return  $this->hasOne('App\User', 'id', 'user_id');
    }

    public function recentOrders(){
        return $this->whereRaw("state >= 0")->orderBy("id", "DESC")->take(20)->get();
    }
}
