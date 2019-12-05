@extends('layouts/default')

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
            <span class="font-24 color-black bold">Mega Buy Selling Sold</span><span class="font-12 ml-10 pull-right">switch to classic view</span>
        </div>
        <div class="row ml-0 mr-0">
            @include("front/front_seller/top_menu")
            <div class="tab-content mt-10">
                <div class="tab-pane fade active in" id="activity">
                    @include("front/front_seller/left_menu")
                    <div class="col-md-10 my-ebay-content col-xs-12 pl-0 pr-0 active">
                        <div class="row ml-0 mr-0 ml-10 mt-10">
                            <button type="button" class="btn btn-color-blue radius-20 pb-10 pt-10">All categories (2)</button>
                            <button type="button" class="btn btn-color-blue radius-20 pb-10 pt-10">Cell Phone Accessories (1)</button>
                            <button type="button" class="btn btn-color-blue radius-20 pb-10 pt-10">Portable Audio & Headphones (1)</button>
                        </div>
                        @for($i = 0; $i < 5; $i++)
                        <div class="row ml-0 mr-0 mt-20">
                            <div class="col-md-6 pl-0 display-flex">
                                <div class="display-inline top-align">
                                    <input type="checkbox" class="checkbox-inline mt-0">
                                </div>
                                <div class="display-inline ml-20">
                                    <img class="border-rect size-150 cursor" src="{{url("uploads/product/small/1.jpg")}}">
                                    <p class="text-right font-10">1 of 4 images</p>
                                </div>
                                <div class="display-inline top-align ml-20">
                                    <p class="color-blue font-12 mb-0">SoundPEATS TWS Bluetooth 5.0 Headset True Wireless Headphones Earbuds Earphones</p>
                                    <p class="font-10 mb-0">( 1704198799344 )</p>
                                    <span class="color-blue font-10">soundpeats</span>
                                    <span class="font-10 mlr-5">|</span>
                                    <span class="color-blue font-10">378</span>
                                    <span class="font-10 mlr-5">|</span>
                                    <span class="font-10">99.5%</span>
                                    <p class="font-10 mb-0">Your max bid: US $7.00</p>
                                    <p class="font-10 color-red mb-0">Over 370 sold</p>
                                </div>
                            </div>
                            <div class="col-md-6 text-right">
                                <div class="display-inline ml-10 top-align">
                                    <p class="color-black font-12 mb-0 text-right">Oct-16,</p>
                                    <p class="font-12 mb-0 text-right">12:00 AM CST</p>
                                </div>
                                <div class="display-inline ml-20 top-align">
                                    <p class="font-14 bold color-green mb-0 text-right">RMB 214.08</p>
                                    <p class="font-10 text-right">Buy It Now or Best offer</p>
                                    <p class="font-10 mb-0 text-right">Free shipping</p>
                                </div>
                                <div class="display-inline ml-20 top-align">
                                    <div class="row ml-0 mr-0">
                                        <button class="visit-btn">Buy It Now</button>
                                    </div>
                                    <div class="row ml-0 mr-0">
                                        <a class="font-10 color-blue">Make Best offer</a>
                                    </div>
                                    <div class="row ml-0 mr-0">
                                        <select class="font-10 border-none pr-0">
                                            <option>More actions</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.circliful.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/slick/slick.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/index.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/common.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/elevatezoom.js') }}"></script>

@stop