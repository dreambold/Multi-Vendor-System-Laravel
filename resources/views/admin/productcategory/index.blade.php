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



    <link href="{{ asset('assets/css/pages/sortable_list.css')}}" rel="stylesheet">




@stop

{{-- Montent --}}
@section('content')
<section class="content-header">
    <h1>Product Category List</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                @lang('general.dashboard')
            </a>
        </li>
        <li><a href="#">Product Manage</a></li>
        <li class="active">Product Category</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary" id="hidepanel6">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Category Tree List
                    </h3>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Category Tree</label>
                        <div id = "categoryTree" style = "min-height:765px !important;"></div>
                        <p class="help-block">Product category-tree view here.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-success" id="hidepanel1">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="save" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Edit Category
                    </h3>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" id = "updateCategoryForm" method = "post" action="{{url("admin/product/category/ajaxSaveCategory")}}">
                        {{ csrf_field() }}
                        <input type = "hidden" name = "is_leaved" value = "0"/>
                        <input type = "hidden" name = "id" value = "0"/>
                        <input type = "hidden" name = "is_main" value = "0"/>
                        <input type = "hidden" name = "brand_ids" value = ""/>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Title</label>
                            <div class="col-md-9">
                                <input name="title"  placeholder="Title" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Path</label>
                            <div class="col-md-9">
                                <input id="path" readonly  class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Image</label>
                            <div class="col-md-9">
                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <div class="form-control" data-trigger="fileinput">
                                        <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                        <span class="fileinput-filename"></span>
                                    </div>
                                    <span class="input-group-addon btn btn-default btn-file">
                                                        <span class="fileinput-new">Select file</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="imgFile">
                                    </span>
                                    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Order Num</label>
                            <div class="col-md-9">
                                <input name="order_num"  placeholder="Order Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Terminal</label>
                            <div class="col-md-9">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="custom-checkbox" id = "is_leaved">&nbsp; LEAVED
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">State</label>
                            <div class="col-md-9">
                                <div class="radio-inline">
                                    <label>
                                        <input type="radio" name = "state" value = "0" class="custom-radio">&nbsp; UNUSED
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label>
                                        <input type="radio"  name = "state" value = "1" class="custom-radio">&nbsp; USED
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Main Show</label>
                            <div class="col-md-9">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="custom-checkbox" id = "is_main">&nbsp; Show
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Top Brands</label>
                            <div class="col-md-9">
                                <div id="filter">
                                    <div class="block__list block__list_words">
                                        <ul id="editable" class="list-unstyled">
                                        </ul>
                                        <button type = "button" onclick = "addBrand('0')" class="btn btn-success btn-sm btn-block editable_add">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-position">
                            <div class="col-md-6 text-left">
                                <button type="button" class="btn btn-responsive btn-danger btn-sm" onclick = "deleteItem()">Delete</button>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-responsive btn-primary btn-sm">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel panel-success" id="hidepanel2">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="save" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Add Category
                    </h3>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" id = "addCategoryForm" method = "post" action="{{url("admin/product/category/ajaxSaveCategory")}}">
                        {{ csrf_field() }}
                        <input type = "hidden" name = "is_leaved" value = "0"/>
                        <input type = "hidden" name = "is_main" value = "0"/>
                        <input type = "hidden" name = "parent_id" value = "0"/>
                        <input type = "hidden" name = "brand_ids" value = ""/>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Parent Title</label>
                            <div class="col-md-9">
                                <input id="parent_title" readonly placeholder="Parent Title" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Image</label>
                            <div class="col-md-9">
                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <div class="form-control" data-trigger="fileinput">
                                        <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                        <span class="fileinput-filename"></span>
                                    </div>
                                    <span class="input-group-addon btn btn-default btn-file">
                                                        <span class="fileinput-new">Select file</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="imgFile">
                                    </span>
                                    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Title</label>
                            <div class="col-md-9">
                                <input name="title"  placeholder="Title" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Order Num</label>
                            <div class="col-md-9">
                                <input name="order_num"  placeholder="Order Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Terminal</label>
                            <div class="col-md-9">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="custom-checkbox" id = "is_leaved">&nbsp; LEAVED
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">State</label>
                            <div class="col-md-9">
                                <div class="radio-inline">
                                    <label>
                                        <input type="radio" name = "state" value = "0" class="custom-radio">&nbsp; UNUSED
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label>
                                        <input type="radio"  name = "state" value = "1" class="custom-radio">&nbsp; USED
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Main Show</label>
                            <div class="col-md-9">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="custom-checkbox" id = "is_main">&nbsp; Show
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Top Brands</label>
                            <div class="col-md-9">
                                <div id="filter">
                                    <div class="block__list block__list_words">
                                        <ul id="editable1" class="list-unstyled">
                                        </ul>
                                        <button type = "button" onclick = "addBrand('1')" class="btn btn-success btn-sm btn-block editable_add">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-position">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-responsive btn-primary btn-sm">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include("admin/productcategory/add_brand_dlg")
</section>


@stop
{{-- Body Bottom confirm modal --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" ></script>
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('assets/vendors/Sortable/js/Sortable.js') }}" type="text/javascript"></script>

    <script>
        $(function(){
            var editableList = Sortable.create($('#editable')[0], {
                animation: 150,
                filter: '.js-remove',
                onFilter: function (evt) {
                    evt.item.parentNode.removeChild(evt.item);
                }
            });
            var editableList1 = Sortable.create($('#editable1')[0], {
                animation: 150,
                filter: '.js-remove',
                onFilter: function (evt) {
                    evt.item.parentNode.removeChild(evt.item);
                }
            });
        });

        function addBrand(type){
            $("#add-brand-dialog #type").val(type);
            $("#add-brand-dialog").modal("show");
        }
        var currentTreeId = 0;
        $(document).ready(function() {
            $('input[type="checkbox"].custom-checkbox, input[type="radio"].custom-radio').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue',
                increaseArea: '20%'
            });
            initTree();
            initAddForm();

        });

        function deleteItem(){
            if(currentTreeId == '0'){
                errorMsg('Please choose delete item!');
                return;
            }
            confirmMsg('Do you sure delete this item!', function(){
                setTimeout(function(){
                    var param = new Object();
                    param._token = _token;
                    param.id = currentTreeId;
                    $.post("{{url("admin/product/category/ajaxDeleteCategory")}}", param, function(data){
                        if(data.status == "1"){
                            successMsg(data.msg, function(){
                                currentTreeId = 0;
                                initTree();
                                initAddForm();
                                initUpdateForm();
                            });
                        }else{
                            errorMsg();
                        }
                    }, "json");
                }, 300);
            });
        }

        function itemClick(id, title, img_filename, order_num, is_leaved, state, is_main, path ){
            currentTreeId = id;
            if(id == '0'){
                $("#addCategoryForm input[name='parent_id']").val("0");
                return;
            }
            var param = new Object();
            param__token = _token;
            $.post("{{url("admin/product/category/ajaxGetCategoryTopBrandList")}}/"+id, param, function(html){
                $("#updateCategoryForm #editable").html(html);
                $("#updateCategoryForm input[name='id']").val(id);
                $("#updateCategoryForm input[name='title']").val(title);
                $("#updateCategoryForm .fileinput-filename").text(img_filename);
                $("#updateCategoryForm input[name='order_num']").val(order_num);
                $("#updateCategoryForm #path").val(path);
                if(is_leaved == "0"){
                    $("#updateCategoryForm #is_leaved").prop("checked", false);
                    $("#updateCategoryForm #is_leaved").parent().removeClass("checked");
                }else{
                    $("#updateCategoryForm #is_leaved").prop("checked", true);
                    $("#updateCategoryForm #is_leaved").parent().addClass("checked");
                }

                if(is_leaved == "0"){
                    $("#updateCategoryForm input[name='state']").eq(0).prop("checked", true);
                    $("#updateCategoryForm input[name='state']").eq(0).parent().addClass("checked");
                    $("#updateCategoryForm input[name='state']").eq(1).prop("checked", false);
                    $("#updateCategoryForm input[name='state']").eq(1).parent().removeClass("checked");
                }else{
                    $("#updateCategoryForm input[name='state']").eq(1).prop("checked", true);
                    $("#updateCategoryForm input[name='state']").eq(1).parent().addClass("checked");
                    $("#updateCategoryForm input[name='state']").eq(0).prop("checked", false);
                    $("#updateCategoryForm input[name='state']").eq(0).parent().removeClass("checked");
                }

                if(is_main == "0"){
                    $("#updateCategoryForm #is_main").prop("checked", false);
                    $("#updateCategoryForm #is_main").parent().removeClass("checked");
                }else{
                    $("#updateCategoryForm #is_main").prop("checked", true);
                    $("#updateCategoryForm #is_main").parent().addClass("checked");
                }

                $("#addCategoryForm #parent_title").val(title);
                $("#addCategoryForm input[name='parent_id']").val(id);
            });


        }



        $("#updateCategoryForm").validate({
            rules: {
                title: "required",
                order_num: "required",
                state: "required",
            },
            messages: {

            },
            errorPlacement: function (error, element) {
                if($(element).closest('div').children().filter("div.error-div").length < 1)
                    $(element).closest('div').append("<div class='error-div'></div>");
                $(element).closest('div').children().filter("div.error-div").append(error);
            },
            submitHandler: function(form){
                var is_leaved = 0;
                if($("#updateCategoryForm #is_leaved").prop("checked")){
                    is_leaved = 1;
                }
                $("#updateCategoryForm input[name='is_leaved']").val(is_leaved);

                var is_main = 0;
                if($("#updateCategoryForm #is_main").prop("checked")){
                    is_main = 1;
                }
                $("#updateCategoryForm input[name='is_main']").val(is_main);

                var datas = new FormData();
                var files = $("#updateCategoryForm input[name='imgFile']")[0].files;
                if(files != undefined && files.length > 0){
                    datas.append('imgFile', files[0]);
                }
                var brand_ids = "";
                $("#editable li").each(function(){
                    brand_ids += (""==brand_ids ? "":",") + $(this).attr("data-id");
                });

                $("#updateCategoryForm input[name='brand_ids']").val(brand_ids);
                var uploadUrl = $(form).attr("action") + "?" + $(form).serialize();

                $.ajax({
                    url: uploadUrl,
                    data: datas,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    type: 'POST',
                    beforeSend: function (data, status) {
                    },
                    success: function (data, status) {
                        if (data.status == 1) {
                            successMsg(data.msg, function(){
                                initTree();
                            });
                        } else {
                            errorMsg(data.status);
                        }
                    },
                    error: function (data, status, e) {
                        errorMsg();
                    }
                });
                return false;
            }
        });

        $("#addCategoryForm").validate({
            rules: {
                title: "required",
                order_num: "required",
                state: "required",
            },
            messages: {

            },
            errorPlacement: function (error, element) {
                if($(element).closest('div').children().filter("div.error-div").length < 1)
                    $(element).closest('div').append("<div class='error-div'></div>");
                $(element).closest('div').children().filter("div.error-div").append(error);
            },
            submitHandler: function(form){
                var is_leaved = 0;
                if($("#addCategoryForm #is_leaved").prop("checked")){
                    is_leaved = 1;
                }
                $("#addCategoryForm input[name='is_leaved']").val(is_leaved);

                var is_main = 0;
                if($("#addCategoryForm #is_main").prop("checked")){
                    is_main = 1;
                }
                $("#addCategoryForm input[name='is_main']").val(is_main);

                var datas = new FormData();
                var files = $("#addCategoryForm input[name='imgFile']")[0].files;
                if(files != undefined && files.length > 0){
                    datas.append('imgFile', files[0]);
                }
                var brand_ids = "";
                $("#editable1 li").each(function(){
                    brand_ids += (""==brand_ids ? "":",") + $(this).attr("data-id");
                });

                $("#addCategoryForm input[name='brand_ids']").val(brand_ids);

                var uploadUrl = $(form).attr("action") + "?" + $(form).serialize();


                $.ajax({
                    url: uploadUrl,
                    data: datas,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    type: 'POST',
                    beforeSend: function (data, status) {
                    },
                    success: function (data, status) {
                        if (data.status == 1) {
                            successMsg(data.msg, function(){
                                initTree();
                                initAddForm();
                            });
                        } else {
                            alert(data.msg);
                        }
                    },
                    error: function (data, status, e) {
                        errorMsg();
                    }
                });
                return false;
            }
        });

        function initAddForm(){
            $("#addCategoryForm input[name='parent_id']").val("0");
            $("#addCategoryForm input[name='title']").val("");
            $("#addCategoryForm input[name='order_num']").val("");
            $("#addCategoryForm #parent_title").val("Category");
            $("#addCategoryForm .input-group-addon").click();
            $("#addCategoryForm input[type='checkbox']").prop("checked", false);
            $("#addCategoryForm input[type='checkbox']").each(function(){
                $(this).parent().removeClass("checked");
            })
            $("#addCategoryForm input[name='state']").eq(1).prop("checked", true);
            $("#addCategoryForm input[name='state']").eq(1).parent().addClass("checked");
            $("#addCategoryForm input[name='state']").eq(0).prop("checked", false);
            $("#addCategoryForm input[name='state']").eq(0).parent().removeClass("checked");
        }

        function initUpdateForm(){
            $("#updateCategoryForm input[name='id']").val("0");
            $("#updateCategoryForm input[name='title']").val("");
            $("#updateCategoryForm input[name='order_num']").val("");
            $("#updateCategoryForm #path").val("");
            $("#updateCategoryForm .input-group-addon").click();
            $("#updateCategoryForm input[type='checkbox']").prop("checked", false);
            $("#updateCategoryForm input[type='checkbox']").each(function(){
                $(this).parent().removeClass("checked");
            })
            $("#updateCategoryForm input[name='state']").eq(1).prop("checked", true);
            $("#updateCategoryForm input[name='state']").eq(1).parent().addClass("checked");
            $("#updateCategoryForm input[name='state']").eq(0).prop("checked", false);
            $("#updateCategoryForm input[name='state']").eq(0).parent().removeClass("checked");
        }


        function initTree(){
            $("#categoryTree").html("");
            var param = new Object();
            param._token = _token;
            $.post("{{url("admin/product/category/ajaxCategoryTree")}}", param, function(data){
               if(data.status == "1"){
                   d = new dTree('d');
                   d.config.check = 0;
                   d.config.useStatusText = true;
                   d.add(0,-1,' <strong>Category</strong>','javascript:itemClick(0)');
                   var list = data.categoryList;
                   var item ;
                   for(var i =0 ; i < list.length; i++){
                       item = list[i];
                       d.add(item.id,item.parent_id,item.title,"javascript:itemClick('"+item.id+"', '"+item.title+"', '"+item.img_filename+"','"+item.order_num+"', '"+item.is_leaved+"','"+item.state+"', '"+item.is_main+"','"+item.path+"')");
                   }
                   $("#categoryTree").html(d.toString());
                   d.s(currentTreeId);
                   d.openAll();
               }
            },"json");

        }
    </script>
@stop

