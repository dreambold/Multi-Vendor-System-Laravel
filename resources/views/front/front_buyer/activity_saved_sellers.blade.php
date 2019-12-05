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
                    <form id = "searchForm" action = "{{url("front/my/activity_saved_sellers")}}" >
                        <input type = "hidden" name = "page" value = "{{$pageParam['pageNo']}}"/>
                    </form>
                    <div class="col-md-10  col-xs-12 pl-0 pr-0" id="sellers">
                        <p class="header-dark-gray mb-0 mt-20">
                            <span class="color-white">Saved sellers</span>
                            <span class="color-white font-10 cursor pull-right" style="padding-top:3px; padding-right:3px;">Edit<i class="fa fa-angle-down"></i></span>
                        </p>
                        <div class="border-left border-right">
                            <div class="row ml-0 mr-0 border-bottom pt-10 pb-10">
                                <div class="col-xs-6"><span class="font-12 bold">Seller/Store</span></div>
                                <div class="col-xs-2"><span class="font-12 bold">Added</span></div>
                                <div class="col-xs-2"><span class="font-12 bold">Subscriptions</span></div>
                                <div class="col-xs-2"><span class="font-12 bold">Actions</span></div>
                            </div>
                            @foreach($list as $item)
                                <div class="row ml-0 mr-0 border-bottom" style="padding-bottom: 4px; padding-top:4px;">
                                    <div class="col-xs-6">
                                        <img class="size-30" src="{{correctImgPath("uploads/users/".$item['seller']['pic'])}}">
                                        <span class="color-blue font-10">{{$item['seller']->getFullNameAttribute()}}</span>
                                        <span class="font-10">(</span><span class="color-blue font-10">{{number_format($item['seller']->getAvgMark())}}<i class="fa fa-star color-red"></i></span><span class="font-10">)</span>
                                        <span class="font-10">{{$item['seller']->getProductCount()}}</span>
                                    </div>
                                    <div class="col-xs-2"><span class="font-10">{{date("Y-m-d",strtotime($item['log_date']))}}</span></div>
                                    <div class="col-xs-2"><span class="font-10">{{$item['msg']}}</span></div>
                                    <div class="col-xs-2">
                                        <p class="mb-0"><a class="color-blue font-10" href="{{url("front/seller_product_list/".$item['seller']['id'])}}">View seller's items</a></p>
                                        <p class="mb-0 hidden"><a class="color-blue font-10" href="javascript:void(0)">Contact seller</a></p>
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
@stop