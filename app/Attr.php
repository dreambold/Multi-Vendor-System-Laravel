<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attr extends Model {

    protected $table = 'au_attr';
    protected $guarded = ['id'];
    public  $timestamps = false;

    static public  function isDelete($id){
        return true;
    }

    static public function getAttrTitle($id){
        $ret  = "";
        $info = Attr::find($id);
        if(isset($info['id'])){
            $ret = $info['title'];
        }
        return $ret;
    }
}
