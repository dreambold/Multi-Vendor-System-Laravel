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
        <h1>Brand Information</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    @lang('general.dashboard')
                </a>
            </li>
            <li><a href="#">Product Manage</a></li>
            <li class="active">Brand</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary" id="hidepanel6">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Brand Information
                        </h3>
                        <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up clickable"></i>
                    </span>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" id = "infoForm" action="{{url("admin/brand/ajaxSaveBrand")}}" method = "post">
                            <input type = "hidden" name = "_token" value = "{!! csrf_token() !!}"/>
                            <input type = "hidden" name = "id" value = "{{$id}}"/>
                            <input type = "hidden" name = "is_hot" value = "0"/>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Title</label>
                                <div class="col-md-9">
                                    <input name="title" type="text" placeholder="Brand title" class="form-control" value = "{{$info['title']}}"></div>
                            </div>
                            <div class = "form-group">
                                <label class="col-md-3 control-label" for="name">Log image</label>
                                <div class="col-md-9">
                                    <button type="button" class="btn btn-responsive btn-sm" onclick = "onClickFilgDlg('#logImg');">File</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Is hot</label>
                                <div class="col-md-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" @if($info['is_hot']*1 == 1) checked @endif class="custom-checkbox" id = "is_hot">&nbsp; Is Hot
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class = "form-group">
                                <div class = "col-md-9 col-md-offset-3">
                                    <img id = "logImg_img" class = "logImg" style = "width:80px; height:80px;" @if($info['log_img'] != '') src = "{{correctImgPath1($info['log_img'])}}" @endif/>
                                    <input type = "hidden" id = "logImg_val"  @if($info['log_img'] != '')  value = "{{correctImgPath1($info['log_img'])}}" @endif/>
                                    <div class = "@if($info['log_img'] == '') hidden @endif delBtnWrapper" style = "position:absolute; width:30px; left:100px;height: 30px; bottom:0" onclick = "delImage(this)">
                                        <i class = "fa fa-close cursor" ></i>
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
                var is_hot = 0;
                if($("#is_hot").prop("checked")){
                    is_hot = 1;
                }

                $("input[name='is_hot']").val(is_hot);
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
        });
    </script>
@stop

