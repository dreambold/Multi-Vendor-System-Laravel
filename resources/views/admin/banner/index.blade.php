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
    <h1>Banner</h1>
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
        <div class="col-md-8">
            <div class="panel panel-success" id="hidepanel1">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="save" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Banner List
                    </h3>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <form id = "searchForm" action = "{{url("admin/banner")}}" method = "post">
                    <input type = "hidden" name = "_token" value = "{!! csrf_token() !!}"/>
                    <div class = "row">
                        <div class = "col-sm-3 text-left">
                            <input class = "form-control searchInput" name = "search" placeholder="Search"  value = "{{$search}}"/>
                        </div>
                        <div class = "col-sm-3 text-left">
                            <select class = "form-control searchInput" name = "category">
                                <option value = "0" @if($category*1==0) selected @endif>Top Banner</option>
                                <option value = "1" @if($category*1==1) selected @endif>Daily Deal</option>
                                <option value = "2" @if($category*1==2) selected @endif>Middle Top Banner</option>
                                <option value = "3" @if($category*1==3) selected @endif>Middle Bottom Banner</option>
                                <option value = "4" @if($category*1==4) selected @endif>Bottom Banner</option>
                            </select>
                        </div>
                        <div class = "col-sm-6 text-right">
                            <button type="button" class="btn btn-responsive button-alignment btn-success" onclick = "editItem(0)" style="margin-bottom:7px;" data-toggle="button">Add</button>
                        </div>
                    </div>
                    </form>

                    <div class="table-scrollable ">
                        <table class="table table-bordered table-hover table-last-bottom">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Image </th>
                                <th>Title</th>
                                <th>Link URL</th>
                                <th>Category</th>
                                <th width="200px;"></th>
                            </tr>
                            </thead>
                            <tbody >
                                @foreach($list as $key=>$item)
                                    <tr>
                                        <td>{{$key+1+$pageParam['startNumber']}}</td>
                                        <td>
                                            <img src = "{{correctImgPath($item['img'])}}" style = "width:80px;" onerror = "noExitImg(this)"/>
                                        </td>
                                        <td>{{$item['title']}}</td>
                                        <td>{{$item['url']}}</td>
                                        <td>{{getBannerCategoryTitle($item['category'])}}</td>
                                        <td>
                                            <a href="javascript:void(0);" onclick = "editItem('{{$item['id']}}')" class="btn default btn-xs purple">
                                                <i class="livicon" data-name="pen" data-loop="true" data-color="#000" data-hovercolor="black" data-size="14"></i>
                                                Edit
                                            </a>
                                            <a href="javascript:void(0);" onclick = "deleteItem('{{$item['id']}}')" class="btn default btn-xs black">
                                                <i class="livicon" data-name="trash" data-loop="true" data-color="#000" data-hovercolor="black" data-size="14"></i>
                                                Delete
                                            </a>
                                        </td>
                                        </td>
                                    </tr>
                                @endforeach
                                @if(count($list) == 0)
                                    <tr>
                                        <td colspan = "9">There is not data</td>
                                    </tr>
                                @endif

                            </tbody>
                        </table>
                        <div class = "text-center">
                            @include("admin.layouts.pagination")
                        </div>
                    </div>

                </div>
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
        $(document).ready(function(){

        });
        $(".searchInput").change(function(){
            searchData(0);
        });
        function editItem(id){
            window.location.href = "{{url("admin/banner")}}"+"/"+id;
        }

        function deleteItem(id){
            confirmMsg('Do you sure delete this item!', function(){
                setTimeout(function(){
                    var param = new Object();
                    param._token = _token;
                    param.id = id;
                    $.post("{{url("admin/banner/ajaxDeleteInfo")}}", param, function(data){
                        if(data.status == "1"){
                            successMsg(data.msg, function(){
                                window.location.reload();
                            });
                        }else{
                            errorMsg(data.msg);
                        }
                    }, "json");
                }, 300);
            });
        }
    </script>

@stop

