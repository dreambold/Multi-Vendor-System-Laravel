@extends('admin/layouts/default')

{{-- Web site Title --}}
@section('title')
    @lang('blogcategory/title.management')
    @parent
@stop
@section('header_styles')
    <link href="{{ asset('assets/vendors/summernote/summernote.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset("assets/tree/dtree.css")}}">
    <script src="{{asset("assets/tree/dtree.js")}}"></script>
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/pages/editor.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/pages/buttons.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/pages/advbuttons.css') }}" rel="stylesheet" type="text/css"/>
@stop

{{-- Montent --}}
@section('content')
    <section class="content-header">
        <h1>Banner Information</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    @lang('general.dashboard')
                </a>
            </li>
            <li><a href="#">Home Manage</a></li>
            <li class="active">Banner</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary" id="hidepanel6">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Banner Information
                        </h3>
                        <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up clickable"></i>
                    </span>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" id = "infoForm" action="{{url("admin/banner/ajaxSaveInfo")}}" method = "post">
                            <input type = "hidden" name = "_token" value = "{!! csrf_token() !!}"/>
                            <input type = "hidden" name = "id" value = "{{$id}}"/>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Title</label>
                                <div class="col-md-9">
                                    <input name="title" type="text" placeholder="Brand title" class="form-control" value = "{{$info['title']}}"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Link URL</label>
                                <div class="col-md-9">
                                    <input name="url"  placeholder="Brand title" class="form-control" value = "{{$info['url']}}"></div>
                            </div>
                            <div class = "form-group">
                                <label class="col-md-3 control-label" for="name">Log image</label>
                                <div class="col-md-9">
                                    <button type="button" class="btn btn-responsive btn-sm" onclick = "onClickFilgDlg('#logImg');">File</button>
                                </div>
                            </div>
                            <div class = "form-group">
                                <div class = "col-md-9 col-md-offset-3">
                                    <img id = "logImg_img" class = "logImg"  ratio = "2.72" style = "width:217px; height:80px;" @if($info['log_img'] != '') src = "{{correctImgPath1($info['img'])}}" @endif/>
                                    <input type = "hidden" id = "logImg_val"  @if($info['img'] != '')  value = "{{correctImgPath1($info['img'])}}" @endif/>
                                    <div class = "@if($info['img'] == '') hidden @endif delBtnWrapper" style = "position:absolute; width:30px; left:250px;height: 30px; bottom:0" onclick = "delImage(this)">
                                        <i class = "fa fa-close cursor" ></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Category</label>
                                <div class="col-md-9">
                                    <select name = "category" class = "form-control">
                                        <option value = "0">Top Banner</option>
                                        <option value = "1">Daily Deal</option>
                                        <option value = "2">Middle Top Banner</option>
                                        <option value = "3">Middle Bottom Banner</option>
                                        <option value = "4">Bottom Banner</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-position " >
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-responsive btn-primary btn-sm">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include("dlg/crop_dlg")
    </section>

@stop
{{-- Body Bottom confirm modal --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" ></script>
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script  src="{{ asset('assets/vendors/summernote/summernote.min.js') }}"  type="text/javascript"></script>
    <script>
        $(document).ready(function() {

            $(".logImg").hover(function(){
                $(this).parent().next().removeClass("hidden");
            }, function(e){
                if(!$(e.relatedTarget).hasClass("delBtnWrapper")){
                    $(this).parent().next().addClass("hidden");
                }
            })

        });

        $("#infoForm").validate({
            rules: {
                title: "required",
                url: "required",
                category: "required",
            },
            messages: {
            },
            errorPlacement: function (error, element) {
                if($(element).closest('div').children().filter("div.error-div").length < 1)
                    $(element).closest('div').append("<div class='error-div'></div>");
                $(element).closest('div').children().filter("div.error-div").append(error);
            },
            submitHandler: function(form){
                var datas = new FormData();
                datas.append('_token', _token);
                datas.append("log_img_val", $("#logImg_val").val());
                var url = $(form).attr("action");
                url += "?"+$(form).serialize();
                $.ajax({
                    url: url,
                    data: datas,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    type: 'POST',
                    beforeSend: function (data, status) {
                    },
                    success: function (data) {
                        if (data.status == 1) {
                            successMsg(data.msg, function(){
                                goBack();
                            });
                        } else {
                            errorMsg(data.msg);
                            return false
                        }
                    },
                    error: function (data, status, e) {
                        errorMsg("errors happens");
                        return false;
                    }
                });
                return false;
            }
        });

        function delImage(obj){
            $("#logImg_img").attr("src", "");
            $("#logImg_val").val("");
            $(obj).addClass("hidden");

        }
    </script>
@stop

