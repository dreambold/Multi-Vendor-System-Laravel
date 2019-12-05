@extends('layouts.default')

{{-- Page title --}}
@section('title')
    Home
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/tabbular.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/jquery.circliful.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl_carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl_carousel/css/owl.theme.css') }}">
    <!--end of page level css-->
@stop

{{-- slider --}}
@section('top')

@stop

{{-- content --}}
@section('content')
    <div class="container">
        <div class="row ml-0 mr-0">
            @include("front/front_seller/top_menu")
            <div class="tab-content mt-10">
                <div class="tab-pane fade active in" id="activity">
                    @include("front/front_seller/left_menu")
                    <form id = "searchForm" action = "{{url("front/my/seller/activity_saved_searches")}}" >
                        <input type = "hidden" name = "page" value = "{{$pageParam['pageNo']}}"/>
                    </form>
                    <div class="col-md-10  col-xs-12 pl-0 pr-0" id="searches">
                        <p class="header-dark-gray mb-0 mt-20 color-white">Saved searches</p>
                        <div class="border-left border-right">
                            <div class="row ml-0 mr-0 border-bottom pt-10 pb-10">
                                <div class="col-xs-3"><span class="font-12 bold">Search Date</span></div>
                                <div class="col-xs-3"><span class="font-12 bold">Search Key</span></div>
                                <div class="col-xs-2"><span class="font-12 bold">Conditions</span></div>
                                <div class="col-xs-2"><span class="font-12 bold">Price settings</span></div>
                                <div class="col-xs-2"><span class="font-12 bold">Actions</span></div>
                            </div>
                            @foreach($list as $item)
                                <div class="row ml-0 mr-0 border-bottom" style="padding-bottom: 4px; padding-top:4px;">
                                    <div class="col-xs-3"><span class="font-10">{{$item['search_date']}}</span></div>
                                    <div class="col-xs-3"><span class="font-10">{{$item['search_key']}}</span></div>
                                    <div class="col-xs-2"><span class="font-10">{{getProductConditionTitles($item['conditions'])}}</span></div>
                                    <div class="col-xs-2"><span class="font-10">{{getSavedSearchPrice($item['price'])}}</span></div>
                                    <div class="col-xs-2">
                                        <p class="mb-0 "><a class="color-blue font-10" href="{{$item->makeSearchUrl()}}">View items</a></p>
                                        <p class="mb-0 "><a class="color-blue font-10" href="javascript:void(0)" onclick = "deleteItem(this)" data-id = "{{$item['id']}}">delete</a></p>
                                        <p class="mb-0 hidden"><a class="color-blue font-10" href="javascript:void(0)">Edit search</a></p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class = "text-right" style = "margin-top:10px;">
                            @include("layouts/pagination")
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer_scripts')
    <!-- page level js starts-->
    {{--<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>--}}
    <script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.circliful.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/slick/slick.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/index.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/common.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/elevatezoom.js') }}"></script>
    <!--page level js ends-->
    <script>
        function deleteItem(obj){
            confirmMsg("Do you sure the operation!", function(){
                setTimeout(function(){
                    var id = $(obj).attr("data-id");
                    var url = "{{url("front/my/ajaxDeleteSaveHistory")}}"+"/"+id;
                    var param = new Object();
                    param._token = _token;
                    $.post(url, param, function(data){
                        if(data.status == "1"){
                            successMsg(data.msg, function(){
                                window.location.reload();
                            })
                        }else{
                            errorMsg(data.msg);
                        }
                    }, "json");
                }, 1000);
            });
        }
    </script>
@stop