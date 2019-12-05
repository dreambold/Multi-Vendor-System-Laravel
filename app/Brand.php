<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model {

    protected $table = 'au_brand';
    protected $guarded = ['id'];
    public  $timestamps = false;

    static public  function isDelete($id){
        $count = Product::where(array('brand_id'=>$id))->count();
        if($count >0) return false;
        return true;
    }
}
