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
use App\Banner;

class HomeController extends JoshController
{
    private $categoryModel;
    private $productModel;
    private $brandModel;
    private $bannerModel;

    public function __construct()
    {
        parent::__construct();
        $this->categoryModel = new ProductCategory();
        $this->productModel = new Product();
        $this->brandModel = new Brand();
        $this->bannerModel = new Banner();
    }
    public function index(){
        $categoryMenuList = $this->categoryModel
            ->where("parent_id", 0)
            ->where("is_main", 1)
            ->orderBy("order_num")
            ->paginate(10);

        $categoryList = $this->categoryModel
            ->where("parent_id", 0)
            ->where("is_main", 1)
            ->orderBy("order_num")
            ->paginate(20);

        $topBannerList = $this->bannerModel
            ->where("category", 0)
            ->get();

        $dealsBannerList = $this->bannerModel
            ->where("category", 1)
            ->get();

        $middleTopBannerList = $this->bannerModel
            ->where("category", 2)
            ->get();

        $middleBottomBannerList = $this->bannerModel
            ->where("category", 3)
            ->get();

        $bottomBannerList = $this->bannerModel
            ->where("category", 3)
            ->get();

        $brandList = $this->brandModel
            ->where("is_hot", 1)
            ->paginate(20);

        return view("front/index")
            ->with("categoryMenuList", $categoryMenuList)
            ->with("topBannerList", $topBannerList)
            ->with("dealsBannerList", $dealsBannerList)
            ->with("middleTopBannerList", $middleTopBannerList)
            ->with("middleBottomBannerList", $middleBottomBannerList)
            ->with("bottomBannerList", $bottomBannerList)
            ->with("brandList", $brandList)
            ->with("categoryList", $categoryList);
    }
}