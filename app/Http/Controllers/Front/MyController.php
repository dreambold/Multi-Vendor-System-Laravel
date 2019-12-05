<?php namespace App\Http\Controllers\Front;

use\App\Http\Controllers\JoshController;
use App\ProductHistory;
use Illuminate\Http\Request;
use Mail;
use Reminder;
use Sentinel;
use URL;
use Validator;
use View;
use App\UserProductHistory;
use App\UserSaveSeller;
use App\SearchHistory;
use DB;


class MyController extends JoshController
{

	public function __construct(){
		parent::__construct();
	}

	public function getBrowserHistoryList(){
        $browserHistoryList = UserProductHistory::where(array("user_id"=>$this->getUserId()))->orderBy("id", "DESC")->take(5)->get();
        view()->share("browserHistoryList", $browserHistoryList);
    }

    public function index(Request $request){
        $user = Sentinel::getUser();
        $roleName = $user->getUserRoleName();
        if($roleName == ""){
           return  redirect("login");
        }
        switch($roleName){
            case  "admin":
                return redirect("admin");
                break;
            case "buyer":
                view()->share("top_menu", "account");
                $countries = $this->countries;
                view()->share("user", $user);
                view()->share("countries", $countries);
                return view("front/front_buyer/account");
                break;
            case "seller":
                view()->share("top_menu", "account");
                $countries = $this->countries;
                view()->share("user", $user);
                view()->share("countries", $countries);
                return view("front/front_seller/account");
                break;
        }
    }

    public function messages(Request $request){
        $user = Sentinel::getUser();
        $roleName = $user->getUserRoleName();
        if($roleName == ""){
            return  redirect("login");
        }

        switch($roleName){
            case  "admin":
                return redirect("admin");
                break;
            case "buyer":
                view()->share("top_menu", "messages");
                view()->share("user", $user);
                return view("front/front_buyer/messages");
                break;
            case "seller":
                return view("front/front_seller/messages");
                break;
        }
    }

    public function activity_index(Request $request){
        $user = Sentinel::getUser();
        $roleName = $user->getUserRoleName();
        if($roleName == ""){
            return  redirect("login");
        }

        switch($roleName){
            case  "admin":
                return redirect("admin");
                break;
            case "buyer":
                return redirect("front/my/activity_recent_view");
                break;
            case "seller":
                return redirect("front/my/seller/activity");
                break;
        }
    }

    public function activity_summary(Request $request){
        $user = Sentinel::getUser();
        view()->share("top_menu", "activity");
        view()->share("left_menu", "summary");
        view()->share("user", $user);
        return view("front/front_buyer/activity_summary");
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
        $this->getBrowserHistoryList();
        return view("front/front_buyer/activity_recent_view");
    }

    public function activity_purchase_history(Request $request){
        $user = Sentinel::getUser();
        view()->share("top_menu", "activity");
        view()->share("left_menu", "history");
        view()->share("user", $user);
        $this->getBrowserHistoryList();
        return view("front/front_buyer/activity_purchase_history");
    }
    public function activity_watching(Request $request){
        $user = Sentinel::getUser();
        view()->share("top_menu", "activity");
        view()->share("left_menu", "watching");
        view()->share("user", $user);
        return view("front/front_buyer/activity_watching");
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
        $this->getBrowserHistoryList();
        return view("front/front_buyer/activity_saved_searches");
    }

    public function activity_saved_sellers(Request $request){
        $user = Sentinel::getUser();
        view()->share("top_menu", "activity");
        view()->share("left_menu", "sellers");
        view()->share("user", $user);
        $where = "user_id = ".$this->getUserId();
        $pageParam = $this->getPageParam();
        $model = new UserSaveSeller();
        $model->orderBy("id", "DESC");
        $model = $model->whereRaw($where);
        $count = $model->count();
        $list = $model->skip($pageParam["start"])->take($pageParam["perPageSize"])->get();
        $pageParam = $this->setPageParam($pageParam, $count);
        view()->share('pageParam', $pageParam);
        view()->share("list", $list);
        view()->share("count", $count);
        $this->getBrowserHistoryList();
        return view("front/front_buyer/activity_saved_sellers");
    }

    public function activity_sell(Request $request){
        $user = Sentinel::getUser();
        view()->share("top_menu", "activity");
        view()->share("left_menu", "sell");
        view()->share("user", $user);
        return view("front/front_buyer/activity_sell");
    }

    public function ajaxClearProductHistory(){
        $user_id = $this->getUserId();
        UserProductHistory::where(array("user_id"=>$user_id))->delete();
        echo json_encode(array('status'=>"1", 'msg' => "The operation successful"));
        return;
    }

    public function ajaxSaveSeller(Request $request){
        $user_id = $this->getUserId();
        $userSaveSeller = new UserSaveSeller();
        $info = $this->getBoClass($userSaveSeller, $request, "au_user_save_seller");
        $userSaveSeller = $info['model'];
        $userSaveSeller['user_id'] = $user_id;
        $userSaveSeller['log_date'] = date("Y-m-d H:i:s");
        $userSaveSeller->save();
        echo json_encode(array('status'=>"1", 'msg' => "The operation successful"));

    }

    public function ajaxDeleteSaveHistory($id=0){
        $user_id = $this->getUserId();
        SearchHistory::where(array("id"=>$id))->delete();
        echo json_encode(array('status'=>"1", 'msg' => "The operation successful"));
        return;
    }

}