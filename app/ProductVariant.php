<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model {

    protected $table = 'au_product_variant';
    protected $guarded = ['id'];
    public  $timestamps = true;

    static public function getVariantAttrStr($id){
        $variantInfo = ProductVariant::find($id);
        if(!isset($variantInfo['id'])){
            return "";
        }
        $varient_val_ids = $variantInfo['varient_val_ids'];
        $varient_val_ids_a = explode(",", $varient_val_ids);
        $ret = "";
        foreach($varient_val_ids_a as $item){
            $item_a = explode("_", $item);
            $attr = Attr::find($item_a[0]);
            if(!isset($attr['id'])) continue;
            $val = AttrVal::find($item_a[1]);
            if(!isset($val['id'])) continue;
            $ret .= (""==$ret ? "":",").$attr['title'].":".$val['val'];
        }
        return $ret;
    }


}
