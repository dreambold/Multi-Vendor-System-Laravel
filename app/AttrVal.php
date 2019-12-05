<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class AttrVal extends Model {

    protected $table = 'au_attr_val';
    protected $guarded = ['id'];
    public  $timestamps = false;

    static public  function isDelete($id){
        return true;
    }

    static public function getAttrVals($ids){
        $ret = "";
        $info = AttrVal::whereRaw("FIND_IN_SET(id, '".$ids."')")->select(DB::raw("IFNULL(GROUP_CONCAT(val),'') title "))->first();
        $ret = $info['title'];
        return $ret;
    }
}
