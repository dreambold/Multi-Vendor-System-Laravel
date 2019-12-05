<?php namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;
use Sentinel;
use View;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use Yajra\DataTables\DataTables;

class MyEbayController extends Controller {
    public function showMyEbay(Request $request){
        $menu = $request->get("menu", "summary");
        $page = "my_ebay_".$menu;
        return view($page);
    }
}