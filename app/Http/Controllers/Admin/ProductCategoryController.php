<?php namespace App\Http\Controllers\Admin;

use App\ProductCategory;
use App\Brand;
use Sentinel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $brandList = Brand::all();
        view()->share("brandList", $brandList);
        return view('admin.productcategory.index');
    }

    public function ajaxCategoryTree(){
        $categoyList = ProductCategory::all();
        return json_encode(array('status'=>1, 'categoryList'=>$categoyList));
    }

    public function ajaxGetCategoryTopBrandList($id){
        $categoryInfo = ProductCategory::find($id);
        $list = array();
        if(isset($categoryInfo['id'])){
            $brand_ids = $categoryInfo['brand_ids'];
            if($brand_ids != ""){
                $brand_ids_a = explode(",", $brand_ids);
                foreach ($brand_ids_a as $brandId){
                    $brandInfo = Brand::find($brandId);
                    if(isset($brandInfo['id'])){
                        array_push($list, array('id'=>$brandInfo['id'], 'title'=>$brandInfo['title']));
                    }
                }
            }
        }
        view()->share("list", $list);
        return view("admin.productcategory.brand_list");
    }

    public function ajaxSaveCategory(Request $request){
        $id = $request->get("id");
        $info = ProductCategory::find($id);
        if(isset($info['id'])){
            $this->getBoClass($info, $request);
        }else{
            $info = new ProductCategory();
            $ret = $this -> getBoClass($info,$request, 'au_product_category');
            $info = $ret['model'];
            $info['path'] = $info->getParentPath($info['parent_id']).$info['title'];
            $info['parent_ids'] = $info->getParentIds($info['parent_id']);
            if($info['brand_ids'] == ''){
                unset($info['brand_ids']);
            }
        }
        if ($request->hasFile('imgFile')) {
            $fileData = $request->file('imgFile');
            $filename = $fileData->getClientOriginalName();
            $ext = $fileData->getClientOriginalExtension();
            $filepath = makeUploadFileName().'.'.$ext;
            $fileData->move(public_path('uploads/category'), $filepath);
            $info['img'] = '/uploads/category/'.$filepath;
            $info['img_filename'] = $filename;
        }

        $info->save();
        return json_encode(array('status'=>1));
    }

    public function ajaxDeleteCategory(Request $request){
        $id = $request->get("id");
        if(ProductCategory::isDelete($id)){
            productCategory::deleteItem($id);
            return json_encode(array('status' => 1));
        }else{
            return json_encode(array('status' => 0, 'msg'=> 'Can not delete this item'));
        }
    }


}