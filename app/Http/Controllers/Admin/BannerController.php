<?php namespace App\Http\Controllers\Admin;

use App\Banner;
use Sentinel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $pageParam = $this->getPageParam();
        $search = $this->getParam("search", "");
        view()->share('search', $search);
        $category = $this->getParam("category", "0");
        view()->share('category', $category);
        $model = new Banner();
        $model = $model->where(array('category'=>$category));
        if($search != ''){
            $model = $model->whereRaw("title LIKE '%".$search."%'");
        }

        $count = $model->count();
        $list = $model->skip($pageParam["start"])->take($pageParam["perPageSize"])->get();
        $pageParam = $this->setPageParam($pageParam, $count);
        view()->share('pageParam', $pageParam);
        view()->share("list", $list);
        return view('admin.banner.index');
    }

    public function  getInfo($id){
        view()->share("id", $id);
        $info = Banner::find($id);
        if(!isset($info['id'])) {$info = new Banner();}

        view()->share("info", $info);
        return view('admin.banner.info');
    }

    public function ajaxSaveInfo(Request $request){
        $id = $request->get("id");
        $info = Banner::find($id);
        if(isset($info['id'])){
            $this->getBoClass($info, $request);
        }else{
            $info = new Banner();
            $ret = $this -> getBoClass($info,$request, 'au_banner');
            $info = $ret['model'];
        }
        $img = $request->get("log_img_val","");
        if($img != '' && 0 !== strpos($img, 'http')){
            $img = $this->genImage($img);
        }

        if(!isset($img)){
            $img ='';
        }
        $info['img'] = $img;
        $info->save();
        return json_encode(array('status'=>1));
    }

    public function ajaxDeleteInfo(Request $request){
        $id = $request->get("id");
        if(Banner::isDelete($id)){
            Banner::where(array("id"=>$id))->delete();
            return json_encode(array('status' => 1));
        }else{
            return json_encode(array('status' => 0, 'msg'=> 'Can not delete this item'));
        }
    }




}