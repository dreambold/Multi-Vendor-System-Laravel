<?php namespace App\Http\Controllers\Admin;

use App\ProductCategory;
use App\Attr;
use App\AttrVal;
use Sentinel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductCategoryAttrController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.productcategoryattr.index');
    }

    public function ajaxCategoryList(Request $request){
        $search = $request -> get("search");
        $categoyList = ProductCategory::where("is_leaved",1)->whereRaw("path LIKE '%$search%'")->orderBy('parent_id')->orderBy("id")->orderBy("order_num")->get();
        view()->share("categoryList", $categoyList);
        return view('admin.productcategoryattr.category_list');
    }

    public function ajaxCategoryAttrList(Request $request){
        $categoryId = $request->get("categoryId");
        $attrList = Attr::where("category_id", $categoryId)->where("product_id", 0)->orderBy("order_num")->get();
        view()->share("attrList", $attrList);
        return view("admin.productcategoryattr.attr_list");
    }

    public function ajaxCategoryAttrInfo(Request $request){
        $id = $request->get("id");
        if($id*1 ==0){
            $info = new Attr();
        }else{
            $info = Attr::find($id);
        }
        view()->share("attrInfo", $info);
        return view("admin.productcategoryattr.attr_dlg");
    }

    public function ajaxSaveAttr(Request $request){
        $id = $request->get("id");
        $info = Attr::find($id);
        if(isset($info['id'])){
            $this->getBoClass($info, $request);
        }else{
            $info = new Attr();
            $ret = $this -> getBoClass($info,$request, 'au_attr');
            $info = $ret['model'];
        }
        $info->save();
        return json_encode(array('status'=>1));
    }

    public function ajaxDeleteAttr(Request $request){
        $id = $request->get("id");
        if(Attr::isDelete($id)){
            Attr::where("id",$id)->delete();
            AttrVal::where("attr_id",$id)->delete();
            return json_encode(array('status' => 1));
        }else{
            return json_encode(array('status' => 0, 'msg'=> 'Can not delete this item'));
        }
    }

    public function ajaxCategoryAttrValList(Request $request){
        $attrId = $request->get("attrId");
        $valList = AttrVal::where("attr_id", $attrId)->orderBy("id")->get();
        view()->share("attrValList", $valList);
        view()->share("attr_id", $attrId);
        return view("admin.productcategoryattr.attr_val_list_dlg");
    }



    public function ajaxGetAttrVal(Request $request){
        $id = $request->get("id");
        if($id*1 == 0){
            $info = new AttrVal();
            $info['attr_id'] = $request ->get("attr_id");
        }else{
            $info = AttrVal::find($id);
        }
        view()->share("attrValInfo", $info);
        return view("admin.productcategoryattr.attr_val_dlg");
    }

    public function ajaxSaveAttrVal(Request $request){
        $id = $request->get("id");
        $info = AttrVal::find($id);
        if(isset($info['id'])){
            $this->getBoClass($info, $request);
        }else{
            $info = new AttrVal();
            $ret = $this -> getBoClass($info,$request, 'au_attr_val');
            $info = $ret['model'];
        }
        $info->save();
        return json_encode(array('status'=>1));
    }

    public function ajaxDeleteAttrVal(Request $request){
        $id = $request->get("id");
        if(AttrVal::isDelete($id)){
            AttrVal::where("id",$id)->delete();
            return json_encode(array('status' => 1));
        }else{
            return json_encode(array('status' => 0, 'msg'=> 'Can not delete this item'));
        }
    }


}