<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Attr;
use App\AttrVal;
use App\ProductAttrVal;
use App\ProductVariant;
use DB;

class Product extends Model {

    protected $table = 'au_product';
    protected $guarded = ['id'];
    public  $timestamps = true;

    static public  function isDelete($id){
        return true;
    }

    public function getHomeStatisticsInfo($now, $lastWeek, $lastMonth){
        $ret = array();
        $where = "DATE_FORMAT(created_at, '%Y-%m-%d') = '".$now."'";
        $nowCount = $this->whereRaw($where)->count();
        $ret['nowCount'] = $nowCount;
        $where = "DATE_FORMAT(created_at, '%Y-%m-%d') >= '".$lastWeek[2]."' AND DATE_FORMAT(created_at, '%Y-%m-%d') <= '".$now."'";
        $weekCount = $this->whereRaw($where)->count();
        $ret['weekCount'] = $weekCount;
        $where = "DATE_FORMAT(created_at, '%Y-%m-%d') >= '".$lastMonth[2]."' AND DATE_FORMAT(created_at, '%Y-%m-%d') <= '".$now."'";
        $monthCount = $this->whereRaw($where)->count();
        $ret['monthCount'] = $monthCount;
        return $ret;
    }

    public function getProductStatisticsTimeLineData(){
        $ret = array();
        for($i = 5; $i<22; $i++){
            $H = sprintf("%02d", $i);
            $where = "DATE_FORMAT(created_at, '%H')='".$H."'";
            $count = $this->whereRaw($where)->count();
            array_push($ret, $count);
        }
        return $ret;
    }

    public function getAttrList($categoryId, $id = 0){
        $ret = array();
        $requireList = Attr::where(array("category_id"=>$categoryId, "is_variant"=>0,"is_require"=>1))->whereRaw("FIND_IN_SET(product_id, '0,".$id."')")->orderBy("product_id")->orderBy("order_num")->get();
        array_push($ret, $requireList);
        $additionalList = Attr::where(array("category_id"=>$categoryId, "is_variant"=>0,"is_require"=>0,))->whereRaw("FIND_IN_SET(product_id, '0,".$id."')")->orderBy("product_id")->orderBy("order_num")->get();
        array_push($ret, $additionalList);
        foreach($ret as $key => $eleList){
            foreach($eleList as $key1 => $item){
                $where = array("attr_id"=>$item['id'], "product_id"=>$id);
                $productAttrValInfo = ProductAttrVal::where($where)->first();
                if($item['attr_type']*1 == 0){
                    if(isset($productAttrValInfo['id'])){
                        $ret[$key][$key1]['textVal']= $productAttrValInfo['text_val'];
                    }else{
                        $ret[$key][$key1]['textVal']= '';
                    }
                }else{
                    $where = array("attr_id"=>$item['id']);
                    $valList = AttrVal::where($where)->get();
                    foreach($valList as $key2 => $item2){
                        $checked = 0;
                        if(isset($productAttrValInfo['id'])){
                            if(in_array($item2['id'], explode(",", $productAttrValInfo['val_ids']))){
                                $checked = 1;
                            }
                        }
                        $valList[$key2]['checked'] = $checked;
                    }
                    $ret[$key][$key1]['valList'] = $valList;

                }
            }
        }
        return $ret;
    }

    public function getVariantFieldList($product_id){
        $variantList = ProductVariant::where(array("product_id"=>$product_id, "state"=>1))->get();
        $ret = array();
        if(count($variantList)==0) return $ret;
        $item = $variantList[0];
        $varient_val_ids = $item['varient_val_ids'];
        if($varient_val_ids == null) return $ret;
        $varient_val_ids_a = explode(",", $varient_val_ids);
        foreach($varient_val_ids_a as $item1){
            $item1_a = explode("_", $item1);
            $attr_id = $item1_a[0];
            $attrInfo = Attr::find($attr_id);
            if(isset($attrInfo['id'])){
                array_push($ret, array('title'=>$attrInfo['title'], 'id'=>$attrInfo['id']));
            }
        }

        return $ret;
    }

    public function getVariantFieldList1($product_id = 0 , $variantList = array()){
        if(count($variantList) == 0){
            $variantList = ProductVariant::where(array("product_id"=>$product_id, "state"=>1))->get();
        }
        $ret = array();
        if(count($variantList)==0) return $ret;
        $item = $variantList[0];
        $varient_val_ids = $item['varient_val_ids'];
        if($varient_val_ids == null) return $ret;
        $varient_val_ids_a = explode(",", $varient_val_ids);
        foreach($varient_val_ids_a as $item1){
            $item1_a = explode("_", $item1);
            $attr_id = $item1_a[0];
            $attrInfo = Attr::find($attr_id);
            if(isset($attrInfo['id'])){
                array_push($ret, array('title'=>$attrInfo['title'], 'id'=>$attrInfo['id']));
            }
        }

        return $ret;
    }


    public function getVariantValKeyArray($product_id){
        $variantList = ProductVariant::where(array("product_id"=>$product_id, "state"=>1))->get();
        $ret = array();
        if(count($variantList)==0) return $ret;
        foreach($variantList as $item) {
            $varient_val_ids = $item['varient_val_ids'];
            if ($varient_val_ids == null) continue;
            $varient_val_ids_a = explode(",", $varient_val_ids);
            foreach ($varient_val_ids_a as $item1) {
                $item1_a = explode("_", $item1);
                $val_id = $item1_a[1];
                $attrValInfo = AttrVal::find($val_id);
                if (isset($attrValInfo['id'])) {
                    $ret[$attrValInfo['id']] = $attrValInfo['val'];
                }
            }
        }
        return $ret;
    }

    public function getVariantValKeyArray1($product_id = 0,$variantList = array() ){
        if(count($variantList) ==0){
            $variantList = ProductVariant::where(array("product_id"=>$product_id, "state"=>1))->get();
        }
        $ret = array();
        if(count($variantList)==0) return $ret;
        foreach($variantList as $item) {
            $varient_val_ids = $item['varient_val_ids'];
            if ($varient_val_ids == null) continue;
            $varient_val_ids_a = explode(",", $varient_val_ids);
            foreach ($varient_val_ids_a as $item1) {
                $item1_a = explode("_", $item1);
                $val_id = $item1_a[1];
                $attrValInfo = AttrVal::find($val_id);
                if (isset($attrValInfo['id'])) {
                    $ret[$attrValInfo['id']] = $attrValInfo['val'];
                }
            }
        }
        return $ret;
    }

    static public function getProductPrice($product_id, $sku_id){
        if($sku_id*1 ==0){
           $info = Product::find($product_id);
           return $info['price'];
        }else{
            $info = ProductVariant::find($sku_id);
            return $info['price'];
        }
    }

    public function getCommonPropertierStr($product_id = 0){
        if(isset($this->id)) $product_id = $this->id;
        $ret = '';
        $valList = ProductAttrVal::where(array("product_id"=>$product_id))->get();
        foreach($valList as $item){
            $attrTitle = Attr::getAttrTitle($item['attr_id']);
            if($item['text_val'] != ''){
                $val = $item['text_val'];
            }else{
                $val = AttrVal::getAttrVals($item['val_ids']);
            }

            $ret.= ($ret == ""? "": ","). $attrTitle.":".$val;
        }
        return $ret;
    }

    public function category() {
        return $this->hasOne('App\ProductCategory', 'id', 'category_id');
    }

    public function brand() {
        return $this->hasOne('App\Brand', 'id', 'brand_id');
    }

    public function getVariantCount($id){
        $cnt = ProductVariant::where(array("product_id"=>$id))->count();
        return $cnt;
    }

    public function seller(){
        return  $this->hasOne('App\User', 'id', 'seller_id');
    }

    public function getMinMax(){
        $info = ProductVariant::select(DB::raw("IFNULL(MIN(price),0) minPrice,IFNULL(MAX(price),0) maxPrice"))->whereRaw("product_id =".$this->id)->first();
        if($info['minPrice']==$info['maxPrice']){
            return null;
        }

        return $info;

    }

    static public function deleteItem($id){
        Product::where(array("id"=>$id))->delete();
        ProductVariant::where(array("product_id"=>$id))->delete();
        ProductDescription::where(array("id"=>$id))->delete();
        Attr::where(array("product_id"=>$id))->delete();
        AttrVal::where(array("product_id"=>$id))->delete();
        ProductImg::where(array("product_id"=>$id))->delete();
    }





}
