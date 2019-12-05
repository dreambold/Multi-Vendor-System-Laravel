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
            @include("front/front_buyer/top")
            <div class="tab-content mt-10">
                <div class="tab-pane fade active in" id="activity">
                    @include("front/front_buyer/left_menu")
                    <form id = "searchForm" action = "{{url("front/my/activity_recent_view")}}" >
                        <input type = "hidden" name = "page" value = "{{$pageParam['pageNo']}}"/>
                    </form>
                    <div class="col-md-10 col-xs-12 pl-0 pr-0" id="recently">
                        <div class="bg-white-wrapper">
                            <span class="font-14 ml-10">Recently viewed</span>
                            <a class="pull-right font-12 color-blue mr-10" href="javascript:void(0)" onclick = "clearProductHistory()">Clear all</a>
                        </div>
                        <div class="row border-left ml-0 mr-0">
                            @foreach($list as $item)
                                <div class="col-md-4 col-xs-6 border-bottom border-right pt-10 cursor" data-id = "{{$item['product']['id']}}" onclick = "goProductPage(this)">
                                    <div class="row ml-0 mr-0 text-center">
                                        <img src="{{correctImgPath($item['product']['img'])}}" class="size-150">
                                    </div>
                                    <div class="row ml-0 mr-0">
                                        <p class="color-blue font-12 mb-0">{{$item['product']['title']}}</p>
                                        <span class="color-black bold font-12">$ {{$item['product']['price']}}</span>
                                        <p class="mb-0 font-10 bold color-black">{{$item['product']['category']['path']}}</p>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row ml-0 mr-0 mt-20">
                            <span class="ml-20 font-10">{{$count}} items total</span>
                        </div>
                        <div class = "text-right" style = "margin-top:10px;">
                            @include("layouts/pagination")
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function goProductPage(obj){
            var id = $(obj).attr("data-id");
            window.location.href = "<?php echo url("front/product")?>/"+id;
        }

        function clearProductHistory(){
            confirmMsg("Do you sure this operation !", function(){
                setTimeout(function(){
                    var param = new Object();
                    param._token = _token;
                    $.post("{{url("front/my/ajaxClearProductHistory")}}", param,function(data){
                        if(data.status = "1"){
                            window.location.reload();
                        }else{
                            errorMsg(data.msg);
                        }
                    })
                }, 1000);
            })

        }
    </script>
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
@stop