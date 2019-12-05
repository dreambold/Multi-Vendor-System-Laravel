<?php namespace App\Http\Controllers\Front;

use\App\Http\Controllers\JoshController;
use App\Product;
use Illuminate\Http\Request;
use Mail;
use Reminder;
use Sentinel;
use URL;
use Validator;
use View;
use App\UserProductHistory;
use App\SearchHistory;

class MySellerController extends JoshController
{

	public function __construct(){
		parent::__construct();
	}

    public function messages(Request $request){
        $user = Sentinel::getUser();
        view()->share("top_menu", "messages");
        view()->share("user", $user);
        return view("front/front_seller/messages");
    }

    public function activity_index(Request $request){
        return redirect("front/my/seller/activity_recent_view");

    }

    public function activity_summary(Request $request){
        $user = Sentinel::getUser();
        view()->share("top_menu", "activity");
        view()->share("left_menu", "summary");
        view()->share("user", $user);
        return view("front/front_seller/activity_summary");
    }

    public function activity_recent_view(Request $request){
        $user = Sentinel::getUser();
        view()->share("top_menu", "activity");
        view()->share("left_menu", "recent_view");
        view()->share("user", $user);
        $where = "user_id = ".$this->getUserId();
        $pageParam = $this->getPageParam(12);
        $model = new UserProductHistory();
        $model->orderBy("id", "DESC");
        $model = $model->whereRaw($where);
        $count = $model->count();
        $list = $model->skip($pageParam["start"])->take($pageParam["perPageSize"])->get();
        $pageParam = $this->setPageParam($pageParam, $count);
        view()->share('pageParam', $pageParam);
        view()->share("list", $list);
        view()->share("count", $count);
        return view("front/front_seller/activity_recent_view");
    }

    public function activity_buying(Request $request){
        $user = Sentinel::getUser();
        view()->share("top_menu", "activity");
        view()->share("left_menu", "buying");
        view()->share("user", $user);
        return view("front/front_seller/activity_buying");
    }
    public function activity_watching(Request $request){
        $user = Sentinel::getUser();
        view()->share("top_menu", "activity");
        view()->share("left_menu", "watching");
        view()->share("user", $user);
        return view("front/front_seller/activity_watching");
    }

    public function activity_saved_searches(Request $request){
        $user = Sentinel::getUser();
        view()->share("top_menu", "activity");
        view()->share("left_menu", "searches");
        view()->share("user", $user);
        $where = "user_id = ".$this->getUserId();
        $pageParam = $this->getPageParam();
        $model = new SearchHistory();
        $model->orderBy("id", "DESC");
        $model = $model->whereRaw($where);
        $count = $model->count();
        $list = $model->skip($pageParam["start"])->take($pageParam["perPageSize"])->get();
        $pageParam = $this->setPageParam($pageParam, $count);
        view()->share('pageParam', $pageParam);
        view()->share("list", $list);
        view()->share("count", $count);

        return view("front/front_seller/activity_saved_searches");
    }

    public function activity_selling_overview(Request $request){
        $user = Sentinel::getUser();
        view()->share("top_menu", "activity");
        view()->share("left_menu", "selling");
        view()->share("left_menu2", "overview");
        view()->share("user", $user);
        return view("front/front_seller/activity_selling_overview");
    }

    public function activity_selling_discount(Request $request){
        $user = Sentinel::getUser();
        view()->share("top_menu", "activity");
        view()->share("left_menu", "selling");
        view()->share("left_menu2", "discount");
        view()->share("user", $user);
        return view("front/front_seller/activity_selling_discount");
    }

    public function activity_selling_drafts(Request $request){
        $user = Sentinel::getUser();
        view()->share("top_menu", "activity");
        view()->share("left_menu", "selling");
        view()->share("left_menu2", "drafts");
        view()->share("user", $user);
        $where = "seller_id = ".$this->getUserId()." AND state = 0 ";
        $pageParam = $this->getPageParam();
        $model = new Product();
        $model->orderBy("id", "DESC");
        $model = $model->whereRaw($where);
        $count = $model->count();
        $list = $model->skip($pageParam["start"])->take($pageParam["perPageSize"])->get();
        $pageParam = $this->setPageParam($pageParam, $count);
        view()->share('pageParam', $pageParam);
        view()->share("list", $list);
        return view("front/front_seller/activity_selling_drafts");
    }

    public function activity_selling_product(){
        $user = Sentinel::getUser();
        view()->share("top_menu", "activity");
        view()->share("left_menu", "selling");
        view()->share("left_menu2", "sell_product");
        view()->share("user", $user);
        $where = "seller_id = ".$this->getUserId()." AND state = 1 ";
        $pageParam = $this->getPageParam();
        $model = new Product();
        $model->orderBy("id", "DESC");
        $model = $model->whereRaw($where);
        $count = $model->count();
        $list = $model->skip($pageParam["start"])->take($pageParam["perPageSize"])->get();
        $pageParam = $this->setPageParam($pageParam, $count);
        view()->share('pageParam', $pageParam);
        view()->share("list", $list);
        return view("front/front_seller/activity_selling_product");
    }



    public function activity_selling_deliver(Request $request){
        $user = Sentinel::getUser();
        view()->share("top_menu", "activity");
        view()->share("left_menu", "selling");
        view()->share("left_menu2", "deliver");
        view()->share("user", $user);
        return view("front/front_seller/activity_selling_deliver");
    }

    public function activity_selling_complete(Request $request){
        $user = Sentinel::getUser();
        view()->share("top_menu", "activity");
        view()->share("left_menu", "selling");
        view()->share("left_menu2", "complete");
        view()->share("user", $user);
        return view("front/front_seller/activity_selling_complete");
    }





}