<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $pageSize = 10;

    public function genImage($imageData){
        $path = "uploads/product";
        if (!file_exists($path))
            mkdir($path, 0644);
        $path .= "/".date('Ymd');
        if (!file_exists($path))
            mkdir($path, 0644);

        $path.="/".date('His').rand(1111, 9999).".png";
        $image = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imageData));
        file_put_contents(public_path($path), $image);
        return $path;

    }

    protected function getBoClass(Model $model, Request $request, $table = ''){
        $flag = 0;
        $items = $model->getAttributes();

        foreach($items as $key=>$value){
            if(($request->get($key) != null) && ($request->get($key) != '' && $request->get($key) != $value)  ){
                $model[$key] = $request->get($key);
                $flag = 1;
            }
        }

        if(count($items) == 0){
            foreach($request->all() as $key => $value){
                if(Schema::hasColumn($table,$key)){
                    $model[$key] = $value;
                    $flag=1;
                }
            }
        }
        return array('flag'=> $flag, 'model' => $model);
    }

    protected function getBoClass1(Model $model,  $param, $table = ''){
        $flag = 0;
        $items = $model->getAttributes();

        foreach($items as $key=>$value){
            if((isset($param[$key])) && ($param[$key] != '' && $param[$key] != $value)){
                $model[$key] = $param[$key];
                $flag = 1;
            }
        }
        
        if(count($items) == 0){
            foreach($param as $key => $value){
                if(Schema::hasColumn($table,$key)){
                    $model[$key] = $value;
                    $flag=1;
                }
            }
        }
        return array('flag'=> $flag, 'model' => $model);
    }

    public function getParam($key, $default){
        if(!isset($_REQUEST[$key])) return $default;
        return $_REQUEST[$key];
    }
    public  function getPageParam($perPageSize = 10,$pageKey = "page"){
        $page =  $this->getParam($pageKey, '1') * 1;
        if($page < 1){
            $page = 1;
        }

        $this->pageSize = $perPageSize;
        $start = ($page-1)*$this->pageSize;
        $pageParam["pageNo"] = $page;
        $pageParam["start"] = $start;
        $pageParam["perPageSize"] = $this->pageSize;
        return $pageParam;
    }

    public function assign($key, $value){
        view()->share($key, $value);
    }
    public  function setPageParam($pageParam , $totalCount){
        if(empty($pageParam))
            return array();
        $ret = array();
        $pageNo = $pageParam["pageNo"];
        $ret["pageNo"] = $pageNo;
        $iPageNo =  $pageNo;
        $startStep =  $iPageNo - $iPageNo % 10;
        $ret["startStep"] = $startStep;
        $ret["perPageSize"] = $pageParam["perPageSize"];
        $pageCount = ceil($totalCount/$pageParam["perPageSize"]);
        $ret["pageCount"] = $pageCount;
        $ret["startNumber"] = $pageParam["start"];
        return $ret;
    }
}
