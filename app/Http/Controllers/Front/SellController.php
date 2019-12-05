<?php namespace App\Http\Controllers\Front;

use\App\Http\Controllers\JoshController;
use App\Http\Requests\ConfirmPasswordRequest;
use App\ProductHistory;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Mail;
use Reminder;
use Sentinel;
use URL;
use Validator;
use View;
use App\Http\Requests\UserRequest;
use App\Http\Requests\ForgotRequest;
use stdClass;
use App\Mail\ForgotPassword;

use App\Product;
use App\ProductCategory;
use App\ProductDescription;
use App\Attr;
use App\AttrVal;
use App\ProductAttrVal;
use App\ProductVariant;
use App\ProductImg;

class SellController extends JoshController
{
    private $productModel;
	private $categoryModel; // product category model
	private $attrModel; // attribute of category model
    private $attrValModel;
    private $productAttrValModel;
	public function __construct(){
		parent::__construct();
		$this->categoryModel = new ProductCategory();
		$this->attrModel = new Attr();
		$this->attrValModel = new AttrVal();
		$this->productModel = new Product();
		$this->productAttrValModel = new ProductAttrVal();
	}
    public function index(Request $request){
	    $id = $request->get("id", "");
	    if($id != ""){
            $action = "update";
	        $product = $this->productModel->find($id);
            $product = $this->convertAttrToArray($product);
            $category = $this->categoryModel->find($product['category_id']);
            $parentCategory = $category["parent_ids"];
            $productAttrValList = $this->productAttrValModel->where("product_id", $id)->get();
            $productAttrValList = $this->convertAttrToArray($productAttrValList);
            $requireAttrList = $this->attrModel
                ->where("category_id", $product['category_id'])
                ->where("is_require", 1)
                ->orderBy("order_num")->get();
            $requireAttrList = $this->convertAttrToArray($requireAttrList);
            for($i = 0; $i < count($requireAttrList); $i++){
                $attrValList = $this->attrValModel->where("attr_id", $requireAttrList[$i]['id'])->get();
                $attrValList = $this->convertAttrToArray($attrValList);
                $requireAttrList[$i]['val'] = $attrValList;

            }
            $additionalAttrList = $this->attrModel
                ->where("category_id", $product['category_id'])
                ->where("is_require", 0)
                ->orderBy("order_num")->get();
            $additionalAttrList = $this->convertAttrToArray($additionalAttrList);
            for($i = 0; $i < count($additionalAttrList); $i++){
                $attrValList = $this->attrValModel->where("attr_id", $additionalAttrList[$i]['id'])->get();
                $attrValList = $this->convertAttrToArray($attrValList);
                $additionalAttrList[$i]['val'] = $attrValList;
            }

            $imgList = ProductImg::where(array("product_id"=>$id))->orderBy("order_num")->get();
            $imgList1 = array();
            for($i=0;$i<=12;$i++){
                $imgList1[$i] = '';
            }
            $imgList1[0] = $product['img'];

            foreach($imgList as $item){
                $imgList1[$item['order_num']] = $item['img'];
            }
            view()->share("imgList", $imgList1);
            $description = '';
            $descriptionInfo = ProductDescription::find($id);
            if(isset($descriptionInfo['id'])){
                $description = $descriptionInfo['description'];
            }
            view()->share("description", $description);
            return view("front/product_edit")
                ->with("action", $action)
                ->with("product", $product)
                ->with("parentCategory",$parentCategory)
                ->with("productAttrValList", $productAttrValList)
                ->with("requireAttrList", $requireAttrList)
                ->with("additionalAttrList", $additionalAttrList);
            // to do here add code to get product image
        }else{
	        $action = "insert";
            $imgList1 = array();
            for($i=0;$i<=12;$i++){
                $imgList1[$i] = '';
            }
            view()->share("description", "");
            view()->share("imgList", $imgList1);
            return view("front/product_edit")
                ->with("action", $action);
        }
    }

    public function ajaxCategoryTree(Request $request){
    	$category_parent_id = $request->get("parent", "0");
    	$category_no		= $request->get("no", "1");
    	$depth				= $request->get("depth", "0");
    	if($category_parent_id == "0"){
    		$where = array("is_leaved"=>0, "state"=>1, "parent_id"=>$category_parent_id);
    	}else{
    		$where = array("state"=>1, "parent_id"=>$category_parent_id);
    	}
    	$categoryList = $this->categoryModel->where($where)->get();
    	return view("/front/category_wrapper")
    			->with("depth", $depth)
    			->with("no", $category_no)
    			->with("parent", $category_parent_id)
    			->with("categoryList", $categoryList);
    }

    public function ajaxCategoryAttr(Request $request){
    	$category_id = $request->get("category_id", "0");
    	$requireAttrList = $this->attrModel
    					->where("category_id", $category_id)
    					->where("is_require", 1)
    					->orderBy("order_num")->get();
        $requireAttrList = $this->convertAttrToArray($requireAttrList);
        for($i = 0; $i < count($requireAttrList); $i++){
            $attrValList = $this->attrValModel->where("attr_id", $requireAttrList[$i]['id'])->get();
            $attrValList = $this->convertAttrToArray($attrValList);
            $requireAttrList[$i]['val'] = $attrValList;
        }
    	$additionalAttrList = $this->attrModel
    					->where("category_id", $category_id)
    					->where("is_require", 0)
    					->orderBy("order_num")->get();
		$additionalAttrList = $this->convertAttrToArray($additionalAttrList);
        for($i = 0; $i < count($additionalAttrList); $i++){
            $attrValList = $this->attrValModel->where("attr_id", $additionalAttrList[$i]['id'])->get();
            $attrValList = $this->convertAttrToArray($attrValList);
            $additionalAttrList[$i]['val'] = $attrValList;
        }
    	return view("/front/spec_wrapper")
                ->with("action", "insert")
    			->with("requireAttrList", $requireAttrList)
    			->with("additionalAttrList", $additionalAttrList);
    }

    public function ajaxSaveSellDetail(Request $request){


        $this->getBoClass($this->productModel, $request,"au_product");
        $product_detail = $this->productModel->attributesToArray();
        if(isset($product_detail['id']) && ($product_detail['id']*1 > 0)){
            // check change status of category id
            $detail = $this->productModel->find($product_detail['id']);
            $is_category_changed = false;
            if($product_detail['category_id'] != $detail['category_id']){
                // delete original product attribute values
                $this->productAttrValModel->where("product_id", $product_detail['id'])->delete();
                $is_category_changed = true;
            }
            $this->productModel->where("id", $product_detail['id'])->update($product_detail);
            $lastId = $product_detail['id'];
        }else{

            $this->productModel['seller_id'] = $this->getUserId();
            $this->productModel['state'] = 0;
            unset($product_detail['id']);
            $this->productModel->save($product_detail);
            $lastId = $this->productModel['id'];

        }
        $description = $this->getParam("description", "");
        $productDescription = ProductDescription::find($lastId);
        if(!isset($productDescription['id'])){
            $productDescription = new ProductDescription();
            $productDescription['id'] = $lastId;
            $productDescription['description'] = $description;
        }else{
            $productDescription['description'] = $description;
        }
        $productDescription->save();

        $attr_id_list = $request->input('attr_id');
        $val_ids_list = $request->input("val_ids");
        $text_val_list = $request->input("text_val");
        if(isset($product_detail['id'])){ // update
            if($is_category_changed){ // if category of this product is changed, we will delete all attribute values and save new values
                for($i = 0; $i < count($attr_id_list); $i++){
                    $attr_id = $attr_id_list[$i];
                    $productAttrValModel = new ProductAttrVal();
                    $productAttrValModel['product_id'] = $lastId;
                    $productAttrValModel['attr_id'] = $attr_id;
                    if(!isset($val_ids_list[$attr_id])){
                        $productAttrValModel['val_ids'] = "";
                    }else if(is_array($val_ids_list[$attr_id])){
                        $productAttrValModel['val_ids'] = @implode(",", $val_ids_list[$attr_id]);
                    }else{
                        $productAttrValModel['val_ids'] = $val_ids_list[$attr_id];
                    }
                    $productAttrValModel['text_val'] = isset($text_val_list[$attr_id]) ? $text_val_list[$attr_id] : "";
                    if($productAttrValModel['val_ids'] == "" && $productAttrValModel['text_val'] == "")
                        continue;
                    $productAttrValModel->save();
                }
            }else{ // update attribute values
                for($i = 0; $i < count($attr_id_list); $i++){
                    $attr_id = $attr_id_list[$i];
                    $productAttrValArr = array();
                    $productAttrValArr['product_id'] = $lastId;
                    $productAttrValArr['attr_id'] = $attr_id;
                    if(!isset($val_ids_list[$attr_id])){
                        $productAttrValArr['val_ids'] = "";
                    }else if(is_array($val_ids_list[$attr_id])){
                        $productAttrValArr['val_ids'] = @implode(",", $val_ids_list[$attr_id]);
                    }else{
                        $productAttrValArr['val_ids'] = $val_ids_list[$attr_id];
                    }
                    $this->productAttrValModel['text_val'] = isset($text_val_list[$attr_id]) ? $text_val_list[$attr_id] : "";
                    if($productAttrValArr['val_ids'] == "" && $this->productAttrValModel['text_val'] == "")
                    {
                        $this->productAttrValModel->where("product_id", $lastId)
                            ->where("attr_id", $attr_id)
                            ->delete();
                        continue;
                    }
                    $this->productAttrValModel->where("product_id", $lastId)
                        ->where("attr_id", $attr_id)
                        ->update($productAttrValArr);
                }
            }
        }else{// insert
            for($i = 0; $i < count($attr_id_list); $i++){
                $attr_id = $attr_id_list[$i];
                $productAttrValModel = new ProductAttrVal();
                $productAttrValModel['product_id'] = $lastId;
                $productAttrValModel['attr_id'] = $attr_id;
                if(!isset($val_ids_list[$attr_id])){
                    $productAttrValModel['val_ids'] = "";
                }else if(is_array($val_ids_list[$attr_id])){
                    $productAttrValModel['val_ids'] = @implode(",", $val_ids_list[$attr_id]);
                }else{
                    $productAttrValModel['val_ids'] = $val_ids_list[$attr_id];
                }
                $productAttrValModel['text_val'] = isset($text_val_list[$attr_id]) ? $text_val_list[$attr_id] : "";
                if($productAttrValModel['val_ids'] == "" && $productAttrValModel['text_val'] == "")
                    continue;
                $productAttrValModel->save();
            }
        }

        $this->uploadProductImage($request, $lastId);


        $product_variant_arr = $this->getParam("variantList","");

        $product_variant_arr = json_decode($product_variant_arr,1);
        $this->removeProductVariantVal($product_variant_arr, $lastId);

        foreach($product_variant_arr as $item){
            $product_variant_val = ProductVariant::where(array("product_id"=>$lastId,"varient_val_ids"=>$item['varient_val_ids']))->first();
            if(!isset($product_variant_val['id'])){
                $product_variant_val = new ProductVariant();
            }
            $product_variant_val['product_id'] = $lastId;
            foreach($item as $key => $val){
                $product_variant_val[$key] = $val;
            }
            $product_variant_val->save();
        }
        echo json_encode(array("status"=>"1", "msg"=>"Success save"));
    }

    public function removeProductAttrVal($product_attr_val_arr, $product_id){
        $attr_ids = "";
        foreach($product_attr_val_arr as $item){
            $attr_ids .= ("" == $attr_ids ? "":",").$item['attr_id'];
        }

        ProductAttrVal::whereRaw("!FIND_IN_SET(attr_id, '".$attr_ids."')")->where("product_id", $product_id)->delete();

    }

    public function removeProductVariantVal($product_variant_arr, $product_id){
        $varient_val_ids_s = "";
        foreach($product_variant_arr as $item){
            $varient_val_ids_s .= ("" == $varient_val_ids_s ? "":",").$item['varient_val_ids'];
        }

        ProductVariant::whereRaw("!FIND_IN_SET(varient_val_ids, '".$varient_val_ids_s."')")->where("product_id", $product_id)->delete();

    }

    private function convertAttrToArray($class){
    	$classStr = json_encode($class);
        $ret = json_decode($classStr,1);
        return $ret;
    }

    public function uploadProductImage(Request $request, $product_id){
        $mainProductImg_val = $request->get('mainProductImg0_val','');
        $path = $mainProductImg_val;
        if($mainProductImg_val != '' && false !== strpos($mainProductImg_val,'data:image')){
            $path = $this->genImage($mainProductImg_val);
        }
        $product = Product::find($product_id);
        $product['img'] = $path;
        $product->save();
        for($i=1; $i<13 ; $i++){
            $img = $request->get('mainProductImg'.$i.'_val', '');
            $path = $img;
            if($img != '' && false !== strpos($img,'data:image')){
                $path = $this->genImage($img);
            }
            if(trim($path) == ''){
                ProductImg::where(array('product_id'=>$product_id, 'order_num'=>$i))->delete();
            }else{
                $productImg = ProductImg::where(array('product_id'=>$product_id, 'order_num'=>$i))->first();
                if(!isset($productImg['id'])){
                    $productImg = new ProductImg();
                }

                $productImg['product_id'] = $product_id;
                $productImg['img'] = $path;
                $productImg['order_num'] = $i;
                $productImg->save();
            }
        }
    }
}