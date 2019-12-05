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
                    <div class="col-md-10  col-xs-12 pl-0 pr-0" id="history">
                        <p class="header-gray mb-0 mt-20">Unpaid Items</p>
                        <div class="bg-white-wrapper">
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Not hidden</span>
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Show hidden items</span>
                            <div class="clear border-bottom mt-10"></div>
                            <div class="row mt-20 ml-0 mr-0">
                                <p class="font-12 color-black bold pl-10">You do not have any ready for payment items to display in this view</p>
                            </div>
                            <div class="row ml-0 mr-0 text-right per-page-wrapper">
                                <span class="font-10">Items per page</span>
                                <span class="per-page-item">10</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item active">25</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">50</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">75</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">100</span>
                            </div>
                        </div>
                        <p class="header-gray mb-0 mt-20">Unpaid Invoices</p>
                        <div class="bg-white-wrapper">
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Not hidden</span>
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Show hidden items</span>
                            <div class="clear border-bottom mt-10"></div>
                            <div class="row mt-20 ml-0 mr-0">
                                <p class="font-12 color-black bold pl-10">You do not have any invoices to display in this view</p>
                            </div>
                            <div class="row ml-0 mr-0 text-right per-page-wrapper">
                                <span class="font-10">Items per page</span>
                                <span class="per-page-item">10</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item active">25</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">50</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">75</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">100</span>
                            </div>
                        </div>
                        <p class="header-gray mb-0 mt-20">Orders</p>
                        <div class="bg-white-wrapper">
                            <div class="row ml-0 mr-0">
                                <div class="col-md-4 pl-0">
                                    <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Not hidden</span>
                                    <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Show hidden items</span>
                                </div>
                                <div class="col-md-8 text-right font-10">
                                    <span>See orders from</span>
                                    <select class="select-small color-blue ml-10 ebay-control" style="width:100px">
                                        <option>The last 60 days</option>
                                    </select>
                                    <span class="ml-10">Filter by</span>
                                    <select class="select-small color-blue ml-10 ebay-control" style="width:200px">
                                        <option>All</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clear border-bottom mt-10"></div>
                            <div class="row mt-20 ml-0 mr-0">
                                <p class="font-12 color-black bold pl-10">You do not have any Orders to display in this view</p>
                                <p class="font-12 color-black bold pl-10">TIP:change the view using the filters at the top of the section</p>
                            </div>
                            <div class="row ml-0 mr-0 text-right per-page-wrapper">
                                <span class="font-10">Items per page</span>
                                <span class="per-page-item">10</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item active">25</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">50</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">75</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">100</span>
                            </div>
                        </div>
                        <p class="header-gray mb-0 mt-20">Canceled items</p>
                        <div class="bg-white-wrapper">
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Not hidden</span>
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Show hidden items</span>
                            <div class="clear border-bottom mt-10"></div>
                            <div class="row mt-20 ml-0 mr-0">
                                <p class="font-12 color-black bold pl-10">You do not have any canceld unpaid items to display in this view</p>
                            </div>
                            <div class="row ml-0 mr-0 text-right per-page-wrapper">
                                <span class="font-10">Items per page</span>
                                <span class="per-page-item">10</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item active">25</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">50</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">75</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">100</span>
                            </div>
                        </div>
                        <p class="header-gray mb-0 mt-20">Canceled invoices</p>
                        <div class="bg-white-wrapper">
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Not hidden</span>
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Show hidden items</span>
                            <div class="clear border-bottom mt-10"></div>
                            <div class="row mt-20 ml-0 mr-0">
                                <p class="font-12 color-black bold pl-10">You do not have any canceld invoices to display in this view</p>
                            </div>
                            <div class="row ml-0 mr-0 text-right per-page-wrapper">
                                <span class="font-10">Items per page</span>
                                <span class="per-page-item">10</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item active">25</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">50</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">75</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">100</span>
                            </div>
                        </div>
                        <p class="header-gray mb-0 mt-20">Returns and canceled orders</p>
                        <div class="bg-white-wrapper">
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Not hidden</span>
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Show hidden items</span>
                            <div class="clear border-bottom mt-10"></div>
                            <div class="row mt-20 ml-0 mr-0">
                                <p class="font-12 color-black bold pl-10">You do not have any returned orders to display in this view</p>
                                <p class="font-12 color-black bold pl-10">TIP:change the view using the filters at the top of the section</p>
                            </div>
                            <div class="row ml-0 mr-0 text-right per-page-wrapper">
                                <span class="font-10">Items per page</span>
                                <span class="per-page-item">10</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item active">25</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">50</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">75</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">100</span>
                            </div>
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