<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SearchHistory extends Model {

    protected $table = 'au_user_saved_history';
    protected $guarded = ['id'];
    public  $timestamps = false;

    public function getBrands($id =0){
        $ret = '';
        if($id == 0) $id = $this->id;
         $info = SearchHistory::find($id);
         if(!isset($info['id'])) return $ret;

    }

    public function makeSearchUrl($id =0){
        if($id == 0) $id = $this->id;
        $info = SearchHistory::find($id);
        if(!isset($info['id'])){
            $ret = "javascript:void(0)";
        }else{
            $url = "front/find_products?search_key=".$info['search_key']."&brand_key=".$info['brands'];
            $price_a = explode(",",$info['price']);
            $url .= "&price_from_key=".$price_a[0]."&price_to_key=".$price_a[1];
            $url .= "&category_id=".$info['category_id'];
            $ret = url($url);
        }
        return $ret;
    }



}
