<?php namespace App\Http\Controllers\Front;

use App\Attr;
use App\AttrVal;
use\App\Http\Controllers\JoshController;
use App\Http\Requests\ConfirmPasswordRequest;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Illuminate\Database\Eloquent\Model;
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
use App\ProductVariant;
use App\Brand;
use App\ProductDescription;
use App\User;
use App\OrderDetail;
use App\Order;
use App\ProductImg;
use App\ProductHistory;
use App\SearchHistory;


class ProductController extends JoshController{
    private $productModel;
    private $categoryModel;
    private $productDescriptionModel;
    private $brandModel;
    private $userModel;
    private $orderDetailModel;
    private $productVariantModel;
    private $productImgModel;
    private $productHistoryModel;
    private $searchHistoryModel;
    private $attrModel;
    private $attrValModel;

    public function __construct(){
        parent::__construct();
        $this->productModel = new Product();
        $this->categoryModel = new ProductCategory();
        $this->productDescriptionModel = new ProductDescription();
        $this->brandModel = new Brand();
        $this->userModel = new User();
        $this->orderDetailModel = new OrderDetail();
        $this->productImgModel = new ProductImg();
        $this->productVariantModel = new ProductVariant();
        $this->productHistoryModel = new ProductHistory();
        $this->searchHistoryModel = new SearchHistory();
        $this->attrModel = new Attr();
        $this->attrValModel = new AttrVal();
    }



    public function showProduct(Request $request, $id){
        $productInfo = $this->productModel->find($id);
        if(!isset($productInfo['title']))
            return view('404');
        $category_id = $productInfo["category_id"];
        $parentPath = ProductCategory::getCategoryPath($category_id);
        $commentInfo = $this->productModel->getCommonPropertierStr($id);
        $request->session()->put("curl", "front/product/".$id);

        $userInfo = $this->userModel->find($productInfo['seller_id']);
        $userInfo["full_name"] = $this->userModel->getFullNameAttribute();
        $orderCount = $this->orderDetailModel->where("product_id", $productInfo["id"])->count();
        $productDescription = $this->productDescriptionModel->find($productInfo["id"]);
        $productImgInfo = $this->productImgModel->where("product_id", $productInfo["id"])->orderBy("order_num")->get();
        $productVariant = array();
        $productVariantInfo = $this->productVariantModel->where("product_id", $productInfo["id"])->get();
        $i = 0;
        foreach($productVariantInfo as $info){
            $variant_val_ids = @explode(",", $info["varient_val_ids"]);
            $productVariant[$i]["variantInfo"] = $info;
            $attrVal = "";
            foreach($variant_val_ids as $val_id){
                $variant_attr_item = @explode("_", $val_id);
                $attr = $this->attrModel->find($variant_attr_item[0]);
                $productVariant[$i]["attr"] = $attr;
                $val =$this->attrValModel->find($variant_attr_item[1]);
                $attrVal = ($attrVal == "") ? $val['val'] : $attrVal.",".$val['val'];
            }
            $productVariant[$i]["attrVal"] = $attrVal;
            $i++;
        }
        // log user product history
        if(Sentinel::getUser()){
            $productHistory = array();
            $productHistory["user_id"] = $this->getUserId();
            $productHistory["product_id"] = $id;
            $history_count = $this->productHistoryModel->where("user_id", $productHistory["user_id"])->
            where("product_id", $id)->count();
            if($history_count == 0){
                $this->productHistoryModel->insert($productHistory);
            }else{
                $this->productHistoryModel->where("user_id", $productHistory["user_id"])->where("product_id", $id)->update($productHistory);
            }
        }



        return view("/front/product_detail")
            ->with("productInfo", $productInfo)
            ->with("parentPath", $parentPath)
            ->with("commentInfo", $commentInfo)
            ->with("userInfo", $userInfo)
            ->with("orderCount", $orderCount)
            ->with("productDescription", $productDescription)
            ->with("productImgInfo", $productImgInfo)
            ->with("productVariant", $productVariant);
    }

    public function showProductList(Request $request, $categoryId){
        $categoryInfo = $this->categoryModel->find($categoryId);
        $productList = $this->productModel->where("category_id", $categoryId)->where("state", "1")->get();
        return view("/front/product_list")
            ->with("categoryInfo", $categoryInfo)
            ->with("selectedCategory", $categoryId)
            ->with("productList", $productList);
    }

    public function showSellerProductList(Request $request, $sellerId){
        $sellerInfo = User::find($sellerId);
        $productList = $this->productModel->where("seller_id", $sellerId)->where("state", "1")->get();
        return view("/front/seller_product_list")
            ->with("sellerInfo", $sellerInfo)
            ->with("productList", $productList);
    }

    public function findProducts(Request $request){
        $search_key = $request->get("search_key", "");
        $brand_key = $request->get("brand_key", "");
        $condition_key = $request->get("condition_key", "");
        $price_from_key = $request->get("price_from_key", "");
        $price_to_key = $request->get("price_to_key", "");
        $category_id = $request->get("category_id", "0");

        view()->share("category_id", $category_id);

        $categoryList = $this->categoryModel->getCategoryAllList();
        view()->share("categoryList", $categoryList);

        $pageParam = $this->getPageParam(5);

        $where = " state = 1 AND title like '%$search_key%'";
        if($brand_key != "")
            $where .= " AND FIND_IN_SET(brand_id, '$brand_key')";
        if($condition_key != "")
            $where .= " AND FIND_IN_SET(au_product.condition, '$condition_key')";
        if($price_from_key != "" && $price_to_key != "" && $price_to_key * 1 != 0)
            $where .= " AND price >= $price_from_key AND price <= $price_to_key";
        if($category_id*1 != 0){
            $where .= " AND category_id =".$category_id;
            view()->share("selCategory", $this->categoryModel->find($category_id));
        }
        $count = $this->productModel->whereRaw($where)->count();
        view()->share("total_count", $count);

        $productList = $this->productModel
            ->whereRaw($where)
            ->skip($pageParam["start"])->take($pageParam["perPageSize"])->get();

        $pageParam = $this->setPageParam($pageParam, $count);
        view()->share('pageParam', $pageParam);

        $brandList = $this->brandModel->all();
        $conditionList = array("0"=>"none", "1"=>"new", "2"=>"unused");
        for($i = 0; $i < count($productList); $i++){
            $detail = $this->productDescriptionModel->find($productList[$i]["id"]);
            $productList[$i]["detail"] = $detail;
            $brand = $this->brandModel->find($productList[$i]["brand_id"]);
            $productList[$i]["brand"] = $brand;
        }

        $search_title = "";
        if($brand_key != ""){
            foreach ($brandList as $item) {
                if(strpos($brand_key, trim($item['id'])) !== false){

                    $search_title = ($search_title == "") ? $item['title']: $search_title.",".$item['title'];
                }
            }
        }
        $search_title = ($search_title != "" && $condition_key != "" ) ? $search_title." & " : $search_title;
        $count = 0;
        if($condition_key != ""){
            foreach ($conditionList as $key => $value) {
                if(strpos($condition_key, trim($key)) !== false){
                    $search_title = ($count == 0) ? $search_title.$value : $search_title.",".$value;
                    $count++;
                }
            }
        }
        if($search_title == "")
            $search_title = $search_key." search result";
        if($price_from_key != "")
            $search_title .= " between ".$price_from_key." and ".$price_to_key;

	    return view("/front/find_products")
            ->with("productList", $productList)
            ->with("searchKey", $search_key)
            ->with("brand_key", $brand_key)
            ->with("condition_key", $condition_key)
            ->with("price_from_key", $price_from_key)
            ->with("price_to_key", $price_to_key)
            ->with("brandList", $brandList)
            ->with("conditionList", $conditionList)
            ->with("search_title", $search_title);
    }
    public function saveSearch(Request $request){
        $search_key = $request->get("search_key", "");
        $brand_key = $request->get("brand_key", "");
        $condition_key = $request->get("condition_key", "");
        $price_from_key = $request->get("price_from_key", "");
        $price_to_key = $request->get("price_to_key", "");
        $category_id = $request->get("category_id", "0");
        // log search history
        $userId = $this->getUserId();
        $searchHistory = array();
        $searchHistory["user_id"] = $userId;
        if($userId == ""){
            echo json_encode(array('status'=>'0', "msg"=>'The operation is failed'));
            return;
        }
        $searchHistory["brands"] = $brand_key;
        $searchHistory["conditions"] = $condition_key;
        $searchHistory["price"] = $price_from_key.",".$price_to_key;
        $searchHistory["search_key"] = $search_key;
        $searchHistory["search_date"] = date("Y-m-d");
        $searchHistory["category_id"] = $category_id;
        $this->searchHistoryModel->insert($searchHistory);
        /*$history_count = $this->searchHistoryModel->where("user_id", $userId)->count();
        if($history_count != 0){
            $this->searchHistoryModel->where("user_id", $userId)->update($searchHistory);
        }else{
            $this->searchHistoryModel->insert($searchHistory);
        }*/
        echo json_encode(array('status'=>'1', "msg"=>'The operation is successful'));
    }
    public function ajaxUpdateProductInfo(Request $request){
        $id = $this->getParam("id", "0");
        $info = Product::find($id);
        if(!isset($info['id'])){
            echo json_encode(array('status'=>'0', "msg"=>'product info is novalidation!'));
            return;
        }

        $this->getBoClass($info, $request);
        $info->save();

        echo json_encode(array('status'=>'1', "msg"=>'The operation is successful'));
    }

    public function ajax_order_review_list(){
        $pageParam = $this->getPageParam();
        $seller_id = $this->getParam("seller_id", "0");
        $where = "eval_msg != '' AND seller_id=".$seller_id;
        $model = new Order();
        $model->orderBy("id", "DESC");
        $model = $model->whereRaw($where);
        $count = $model->count();
        $list = $model->skip($pageParam["start"])->take($pageParam["perPageSize"])->get();
        $pageParam = $this->setPageParam($pageParam, $count);
        view()->share('pageParam', $pageParam);
        view()->share("list", $list);
        return view("front/product/order_review");
    }

    public function ajaxDeleteProductInfo(Request $request){
        $id = $this->getParam("id", "0");
        $info = Product::find($id);
        if(!isset($info['id'])){
            echo json_encode(array('status'=>'0', "msg"=>'product info is novalidation!'));
            return;
        }

        Product::deleteItem($id);
        echo json_encode(array('status'=>'1', "msg"=>'The operation is successful'));
    }

    public function ajaxGetProductVariantList(){
        $id = $this->getParam("id", "0");
        $variantList = ProductVariant::where(array("product_id"=>$id, "state"=>1))->get();
        $product = new Product();
        view()->share("variantList", $variantList);
        view()->share("variantFieldList", $product->getVariantFieldList($id));
        view()->share("variantValKeyArray", $product->getVariantValKeyArray($id));
        return view("front/product/variant_product_list");
    }

    public function customize_variant_content(Request $request){
        $data = $request->get('data');
        $data = json_decode($data,1);
        view()->share('data', $data);
        return view('front.product.customize_variant_content');
    }

    public function ajaxVariantTableList(Request $request){
        $attrList = $request->get("attrList", '');
        $product_id = $request->get('product_id', '0');
        $attrList = json_decode($attrList,1);
        $variant_val_ids_a = array();
        foreach($attrList as $key1 => $item1){
            $variant_val_ids_first = $item1['attr_id'];
            if(count($variant_val_ids_a) == 0){
                foreach($item1['list'] as $item2) {
                    $variant_val_ids_seconde = $item2;
                    array_push($variant_val_ids_a, $variant_val_ids_first . "_" . $variant_val_ids_seconde);
                }
            }else{
                $variant_val_ids_a1 = $variant_val_ids_a;
                $variant_val_ids_a = array();
                foreach($variant_val_ids_a1 as $item2){
                    foreach($item1['list'] as $item3) {
                        $variant_val_ids_seconde = $item3;
                        array_push($variant_val_ids_a, $item2.",".$variant_val_ids_first . "_" .$variant_val_ids_seconde );
                    }
                }
            }
        }
        $variant_val_ids_a1 = array();
        foreach($variant_val_ids_a as $item){
            $item1 = ProductVariant::where(array("product_id"=>$product_id,'varient_val_ids'=>$item))->first();
            if(!isset($item1['id'])){
                $item1 = new ProductVariant();
            }
            $item1['varient_val_ids'] = $item;
            array_push($variant_val_ids_a1, $item1);
        }
        $product = new Product();
        view()->share("variantList", $variant_val_ids_a1);
        view()->share("variantFieldList", $product->getVariantFieldList1($product_id, $variant_val_ids_a1));
        view()->share("variantValKeyArray", $product->getVariantValKeyArray1($product_id,$variant_val_ids_a1));
        return view("front.product.variant_product_list");
    }
}