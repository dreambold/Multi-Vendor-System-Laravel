@extends('admin/layouts/default')

{{-- Web site Title --}}
@section('title')
@lang('blogcategory/title.management')
@parent
@stop
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset("assets/tree/dtree.css")}}">
    <script src="{{asset("assets/tree/dtree.js")}}"></script>
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
@stop

{{-- Montent --}}
@section('content')
<section class="content-header">
    <h1>Product Category Attribute</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                @lang('general.dashboard')
            </a>
        </li>
        <li><a href="#">Product Manage</a></li>
        <li class="active">Product Category Attribute</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary" id="hidepanel6">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Category List
                    </h3>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class = "row">
                         <div class = "col-md-12">
                            <label>Categories</label>
                             <span class = "pull-right">
                                <input class = "form-control inline-block w-120" placeholder="search" name = "search"/>
                            </span>
                        </div>
                        </div>
                        <div class = "form-control" style = "height:500px !important; overflow: auto;">
                            <ul class = "admin-ul-list" id = "category-wrapper">
                                @include("admin/productcategoryattr/category_list")
                            </ul>
                        </div>
                        <p class="help-block">Product category view here.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-success" id="hidepanel1">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="save" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Attribute List
                    </h3>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div class = "row">
                        <div class = "col-sm-12 text-right">
                            <button type="button" class="btn btn-responsive button-alignment btn-success" onclick = "editAttr(0)" style="margin-bottom:7px;" data-toggle="button">Add</button>
                        </div>
                    </div>
                    <div class="table-scrollable " style = "height:515px; overflow: auto;">
                        <table class="table table-bordered table-hover table-last-bottom">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title </th>
                                <th>Type</th>
                                <th>Variant Property</th>
                                <th>Order</th>
                                <th width="200px;"></th>
                            </tr>
                            </thead>
                            <tbody id = "attr-wrapper">
                            @include("admin/productcategoryattr/attr_list")
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="attr-edit-dialog" class="modal fade in"  tabindex="-1" role="dialog" aria-hidden="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Attribute Info</h4>
                </div>
                <form class="form-horizontal" id = "editAttrForm" method = "post" action="{{url("admin/product/categoryAttr/ajaxSaveAttr")}}">
                <div class="modal-body" id = "content">
                    @include("admin/productcategoryattr/attr_dlg");
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>

        </div>
    </div>
    <div id="attr-val-list-dialog" class="modal fade in" tabindex="-1" role="dialog" aria-hidden="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Attribute Info</h4>
                </div>
                <form class="form-horizontal" id = "editAttrForm" method = "post" action="{{url("admin/product/categoryAttr/ajaxSaveAttr")}}">
                    <div class="modal-body" id = "content">
                        @include("admin/productcategoryattr/attr_val_list_dlg");
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <div id="attr-val-edit-dialog" class="modal fade in"  tabindex="-1" role="dialog" aria-hidden="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Attribute Val Info</h4>
                </div>
                <form class="form-horizontal" id = "editAttrValForm" method = "post" action="{{url("admin/product/categoryAttr/ajaxSaveAttrVal")}}">
                    <div class="modal-body" id = "content">
                        @include("admin/productcategoryattr/attr_val_dlg");
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

@stop
{{-- Body Bottom confirm modal --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" ></script>
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>

    <script>
        var currentCategoryId = 0;
        $("input[name='search']").keypress(function(e) {
            if ( e.keyCode == 13){
                initCategory();
            }
        })
        $(document).ready(function() {
            $('input[type="checkbox"].custom-checkbox, input[type="radio"].custom-radio').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue',
                increaseArea: '20%'
            });
            initCategory();
        });

        function editAttr(id){
            if(id == "0"){
                if(parseInt(currentCategoryId) == 0){
                    errorMsg("Please choose category!");
                    return;
                }
            }
            var param = new Object();
            param._token = _token;
            param.id = id;
            $.post("{{url("admin/product/categoryAttr/ajaxCategoryAttrInfo")}}", param,function(html){
               $("#attr-edit-dialog #content").html(html);
                $("#attr-edit-dialog").modal("show");
            });
        }

        function deleteAttr(id){
            confirmMsg('Do you sure delete this item!', function(){
                setTimeout(function(){
                    var param = new Object();
                    param._token = _token;
                    param.id = id;
                    $.post("{{url("admin/product/category/ajaxDeleteAttr")}}", param, function(data){
                        if(data.status == "1"){
                            successMsg(data.msg, function(){
                                initAttr();
                            });
                        }else{
                            errorMsg();
                        }
                    }, "json");
                }, 300);
            })
        }

        function editAttrValList(attrId){
            var param = new Object();
            param._token = _token;
            param.attrId = attrId;
            $.post("{{url("admin/product/categoryAttr/ajaxCategoryAttrValList")}}", param, function(html){
                $("#attr-val-list-dialog #content").html(html);
                $("#attr-val-list-dialog").modal("show");
            })
        }

        function editAttrVal(id, attr_id){
            var param = new Object();
            param._token = _token;
            param.attr_id = attr_id;
            param.id = id;
            $.post("{{url("admin/product/categoryAttr/ajaxGetAttrVal")}}", param, function(html){
                $("#attr-val-edit-dialog #content").html(html);
                $("#attr-val-edit-dialog").modal("show");
            })
        }

        function deleteAttrVal(id, attrId){
            confirmMsg('Do you sure delete this item!', function(){
                setTimeout(function(){
                    var param = new Object();
                    param._token = _token;
                    param.id = id;
                    $.post("{{url("admin/product/category/ajaxDeleteAttrVal")}}", param, function(data){
                        if(data.status == "1"){
                            successMsg(data.msg, function(){
                                initAttrValList(attrId);
                            });
                        }else{
                            errorMsg();
                        }
                    }, "json");
                }, 300);
            })
        }

        function initAttrValList(attrId){
            var param = new Object();
            param._token = _token;
            param.attrId = attrId;
            $.post("{{url("admin/product/categoryAttr/ajaxCategoryAttrValList")}}", param, function(html){
                $("#attr-val-list-dialog #content").html(html);
            })
        }

        function initCategory(){
            var param = new Object();
            param._token = _token;
            param.search = $("input[name='search']").val();
            $.post("{{url("admin/product/categoryAttr/ajaxCategoryList")}}", param, function(html){
                $("#category-wrapper").html(html);
            })
        }

        function initAttr(){
            var obj =$("#category-wrapper li.active");
            if(obj.length == 0) return;
            var param = new Object();
            param._token = _token;
            param.categoryId = obj.attr("data-category-id");
            currentCategoryId = param.categoryId;
            $.post("{{url("admin/product/categoryAttr/ajaxCategoryAttrList")}}", param, function(html){
                $("#attr-wrapper").html(html);
            })
        }
    </script>
    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="blogcategory_delete_confirm_title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div>
    <div class="modal fade" id="blogcategory_exists" tabindex="-2" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    @lang('blogcategory/message.blogcategory_have_blog')
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});
        $(document).on("click", ".blogcategory_exists", function () {

            var group_name = $(this).data('name');
            $(".modal-header h4").text( group_name+" blog category" );
        });</script>
@stop

