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
                    <div class="col-md-10  col-xs-12 pl-0 pr-0" id="watching">
                        <div class="row ml-0 mr-0 pl-20">
                            <div class="input-group-btn open" style="display:inline-block;">
                                <button type="button" class="btn dropdown-toggle bg-white font-14" data-toggle="dropdown" aria-expanded="true">
                                    Watchlist
                                    <span class="fa fa-chevron-up"></span></button>
                                <ul class="dropdown-menu" style="min-width:50px;">
                                    <li><a href="javascript:void(0);" onclick="createNewList();">Create a new list</a></li>
                                    <li><a href="#">123</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row ml-0 mr-0 pl-10">
                            <div class="col-md-6 pl-0">
                                <input type="checkbox" class="checkbox-inline mt-0"><button type="button" class="btn btn-default ml-10 btn-sm ebay-control">Delete</button>
                            </div>
                            <div class="col-md-6 text-right">
                                <span>Status</span>
                                <select class="select-small color-blue ml-10 ebay-control" style="width:100px">
                                    <option>All(1)</option>
                                </select>
                                <span class="ml-10">Sort</span>
                                <select class="select-small color-blue ml-10 ebay-control" style="width:200px">
                                    <option>Time left: ending soonset</option>
                                </select>
                            </div>
                        </div>
                        <div class="border-bottom mt-10 ml-10"></div>
                        <div class="row ml-0 mr-0 ml-10 mt-10">
                            <button type="button" class="btn btn-color-blue radius-20">All categories (1)</button>
                            <button type="button" class="btn btn-color-blue radius-20">Iphone Accessories (1)</button>
                        </div>
                        <div class="border-bottom mt-10 ml-10"></div>
                        <div class="row ml-0 mr-0 pl-10 mt-20">
                            <div class="col-md-2">
                                <input type="checkbox"><img class="size-100 border-rect" src="{{url("uploads/product/small/2.jpg")}}">
                            </div>
                            <div class="col-md-7">
                                <p class="font-12 color-black bold mb-0">SoundPETAS TWS Bluetooth5.0 Headset True Wireless Headphones Ea...</p>
                                <p class="mb-0">Condition:New</p>
                                <div class="row ml-0 mr-0 mt-10">
                                    <div class="col-md-3 col-xs-4 border-right pl-0">
                                        <p class="font-12 mb-0">ITEM PRICE:</p>
                                        <p class="font-12 color-black bold mb-0">US $299.99</p>
                                        <p class="font-12 mb-0">Free Shipping</p>
                                    </div>
                                    <div class="col-md-3 col-xs-4 border-right">
                                        <p class="font-12 mb-0">TIME ENDS:</p>
                                        <p class="font-12 color-black bold mb-0">Oct 16,</p>
                                        <p class="font-12 mb-0">00:00 CST</p>
                                    </div>
                                    <div class="col-md-6 col-xs-4">
                                        <p class="font-12 mb-0">SELLER:</p>
                                        <p class="font-12 color-blue bold mb-0">soundpeats(355)</p>
                                        <p class="font-12 mb-0">100% positive feedback</p>
                                    </div>
                                </div>
                                <p class="mt-10 mb-0 color-red bold">Over 290 sold</p>
                            </div>
                            <div class="col-md-3">
                                <input type="button" class="product-act-btn" onclick = "window.location.href = '{{url("/cart")}}'" value="Buy It Now">
                                <input type="button" class="product-act-btn mt-20" value="Add to Cart">
                                <input type="button" class="product-act-btn mt-20" value="Watch">
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