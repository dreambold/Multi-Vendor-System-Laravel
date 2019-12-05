<?php namespace App\Http\Controllers\Front;

use\App\Http\Controllers\JoshController;
use App\Http\Requests\ConfirmPasswordRequest;
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
use App\Brand;

class CategoryController extends JoshController{
    private $categoryModel;
    private $productModel;
    private $brandModel;
    public function __construct()
    {
        parent::__construct();
        $this->categoryModel = new ProductCategory();
        $this->productModel = new Product();
        $this->brandModel = new Brand();
    }

    public function showCategory(Request $request, $id, $brandId = 0)
    {
        $productArr = array();
        if($id == ""){
            return view("404");
        }else{
            $categoryList = $this->categoryModel
                ->whereRaw("FIND_IN_SET($id, parent_ids)")
                ->where("is_leaved", 1)
                ->get();

            $categoryInfo = $this->categoryModel
                ->find($id);
            $categoryinfo = $this->convertStdClassToArray($categoryInfo);
            $title = $categoryinfo["title"];
            $brandIds = @explode(",", $categoryinfo['brand_ids']);
            $brandArr = array();
            $i = 0;
            foreach($brandIds as $bi){
                if($i > 10) // display 10 brands on menu
                    break;
                $brand = $this->brandModel->find($bi);
                $brandArr[$i] = $brand;
                $i++;
            }
            $categoryList = $this->convertStdClassToArray($categoryList);
            $i = 0;
            foreach ($categoryList as $category){
                if($brandId != 0){
                    $productList = $this->productModel
                        ->where('category_id', $category['id'])
                        ->where('brand_id', $brandId)
                        ->paginate(20);
                }else{
                    $productList = $this->productModel
                        ->where('category_id', $category['id'])
                        ->paginate(20);
                }
                $productArr[$i]['category'] = $category;
                $productArr[$i]['productList'] = $productList;
                $i++;
            }
            return view("/front/categories")
                ->with("productArr", $productArr)
                ->with("brandIdList", $brandArr)
                ->with("id", $id)
                ->with("brandId", $brandId)
                ->with("title", $title);
        }
    }

    public function showAllCategories(Request $request, $id){
        $rootCategories = $this->categoryModel
            ->where("parent_id", 0)
            ->get();
        if($id == 0){
            $id = $rootCategories[0]["id"];
            $title = $rootCategories[0]['title'];
        }else{
            foreach ($rootCategories as $category){
                if($category["id"] == $id){
                    $title = $category["title"];
                    break;
                }
            }
        }
        $categoryList = $this->categoryModel
            ->where("is_leaved", 1)
            ->whereRaw("FIND_IN_SET($id, parent_ids)")
            ->get();
        $i = 0;
        foreach($categoryList as $category){
            $productCount = $this->productModel
                ->where("category_id", $category["id"])->count();
            $categoryList[$i]["productCount"] = $productCount;
            $i++;
        }

        return view("/front/all_categories")
            ->with("id", $id)
            ->with("rootCategoryList", $rootCategories)
            ->with("categoryList", $categoryList)
            ->with("title", $title);
    }
}