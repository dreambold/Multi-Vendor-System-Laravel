<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model {

    protected $table = 'au_order_detail';
    protected $guarded = ['id'];
    public  $timestamps = false;

    static public  function isDelete($id){
        return true;
    }

    public function product() {
        return $this->hasOne('App\Product', 'id', 'product_id');
    }

    public function getVariantAttrStr(){
        $ret = "";
        if($this->sku_id *1 != 0){
            $ret = ProductVariant::getVariantAttrStr($this->sku_id);
        }
        return $ret;
    }
}
