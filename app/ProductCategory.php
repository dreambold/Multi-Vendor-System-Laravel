<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model {

    protected $table = 'au_product_category';
    protected $guarded = ['id'];
    public  $timestamps = true;

    public function getParentPath($parent_id){
        $parentInfo = ProductCategory::find($parent_id);
        if(!isset($parentInfo['id'])){
            return "";
        }else{
            return $parentInfo['path'].">";
        }
    }
    public function getParentIds($parent_id){
        $parentInfo = ProductCategory::find($parent_id);
        if(!isset($parentInfo['id'])){
            return "";
        }else{
            return $parentInfo['parent_ids'].",".$parent_id;
        }
    }

    static public function getCategoryPath($category_id){
        $categoryInfo = ProductCategory::find($category_id);
        $ret = array();
        $parentIds = explode(",", $categoryInfo["parent_ids"]);
        $i = 0;
        foreach ($parentIds as $parent){
            $parentInfo = ProductCategory::find($parent);
            $ret[$i]["id"] = $parentInfo["id"];
            $ret[$i]["title"] = $parentInfo["title"];
        }
        return $ret;
    }
    static public  function isDelete($id){
        return true;
    }

    static public  function deleteItem($id){
        ProductCategory::whereRaw("FIND_IN_SET('".$id."', parent_ids)")->delete();
        ProductCategory::where(array("id"=>$id))->delete();
    }

    public function getCategoryAllList(){
        $list = $this->where("parent_id", 0)->get();
        foreach($list as $key => $rootCategory){
            $id = $rootCategory["id"];
            $leavedCategoryList = $this
                ->whereRaw("FIND_IN_SET($id, parent_ids)")
                ->where("is_leaved", 1)
                ->get();
            $list[$key]["leavedCategoryList"] = $leavedCategoryList;
        }
        return $list;
    }

}
