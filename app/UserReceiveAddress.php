<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sentinel;
use DB;

class UserReceiveAddress extends Model {

    protected $table = 'au_user_receive_address';
    protected $guarded = ['id'];
    public  $timestamps = false;

    static public  function isDelete($id){
        return true;
    }

    static public function getShippingAddress(){
        $user =  Sentinel::getUser();
        $user_id = $user['id'];
        $info = UserReceiveAddress::where(array("user_id"=>$user_id, 'is_active'=>'1'))->first();
        return $info;
    }

    static public function getUserReceiveAddressList(){
        $user =  Sentinel::getUser();
        $user_id = $user['id'];
        $list = UserReceiveAddress::where(array("user_id"=>$user_id))->orderBy("id")->get();
        return $list;

    }

}
