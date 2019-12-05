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
            <span class="font-24 color-black bold">Mega Buy Selling Overview</span><span class="font-12 ml-10 pull-right">switch to classic view</span>
        </div>
        <div class="row ml-0 mr-0">
            @include("front/front_seller/top_menu")
            <div class="tab-content mt-10">
                <div class="tab-pane fade active in" id="activity">
                    @include("front/front_seller/left_menu")
                    <div class="col-md-10 col-xs-12 pl-0 pr-0">
                        <div class="row ml-0 mr-0 bg-gray pt-20 pb-20">
                            <div class="col-md-6 pl-20 pr-20">
                                <div class="col-xs-4 text-center">
                                    <div class="row font-18 color-black pl-0 pr-0 bold">0</div>
                                    <div class="row font-14 color-blue pl-0 pr-0">Active</div>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <div class="row font-18 color-black pl-0 pr-0 bold">0</div>
                                    <div class="row font-14 color-blue pl-0 pr-0">Active</div>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <div class="row font-18 color-black pl-0 pr-0 bold">0</div>
                                    <div class="row font-14 color-blue pl-0 pr-0">Active</div>
                                </div>
                            </div>
                            <div class="col-md-6 pl-20 pr-20">
                                <div class="col-xs-5 text-center">
                                    <p class="color-black font-20 bold text-center">CNY0.00</p>
                                    <h6 class="color-black mb-0">60-day total</h6>
                                </div>
                                <div class="col-xs-7">
                                    <button type="button" class="btn-bg-light-blue mt-10">List an item</button>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-0 mr-0 text-center pb-20" style="padding-top:50px;">
                            <div class="row ml-0 mr-0">
                                <img src="{{asset('assets/images/check-task.png')}}">
                            </div>
                            <p class="color-black font-18 bold text-center pt-20">Your tasks will live here</p>
                            <p class="font-16 text-center pt-10 mb-0">Once you start selling, you'll be able to see your to-do list</p>
                            <p class="font-16 text-center mb-0">where you can see the items you need to take action on.</p>
                        </div>
                        <p class="font-20 color-black bold">Selling Promotinos</p>
                        <div class="row ml-0 mr-0">
                            <div class="col-md-6 mt-10 pl-0">
                                <div class="row ml-0 mr-0 bg-gray sell-statistics-wrapper">
                                    <div class="col-xs-5">
                                        <div class="green-circle size-100 mt-10 mb-10 pt-20">
                                            <p class="font-16 color-black bold text-center mt-10 mb-0">50</p>
                                            <p class="font-10 text-center">Remaing</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-7 pt-20">
                                        <p class="font-14 color-black bold">List 50 of your items for FREE-make money today!</p>
                                        <p class="font-10">Pay no insertion fees auction-style or fixed price listings. Buy It Now is free to.<a class="color-blue">Learn More</a></p>
                                        <p class="pt-10">
                                            <span class="font-12 color-black bold">Starts</span><span class="ml-10 font-12">Jan 1</span>
                                            <span class="font-12 color-black bold ml-10">Ends</span><span class="ml-10 font-12">Jan 1</span>
                                            <i class="font-12 fa fa-info-circle"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-10 bg-gray pl-0">
                                <div class="row ml-0 mr-0 sell-statistics-wrapper">
                                    <div class="col-xs-5">
                                        <div class="green-circle size-100 mt-10 mb-10 pt-20">
                                            <p class="font-16 color-black bold text-center mt-10 mb-0">50</p>
                                            <p class="font-10 text-center">Remaing</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-7 pt-20">
                                        <p class="font-14 color-blue">Vehicle - National Listings</p>
                                        <p class="font-10">Get free insertions for first 6 vehicle listins in a year</p>
                                        <p class="pt-10">
                                            <span class="font-12 color-black bold">Starts</span><span class="ml-10 font-12">Jan 1</span>
                                            <span class="font-12 color-black bold ml-10">Ends</span><span class="ml-10 font-12">Jan 1</span>
                                            <i class="font-12 fa fa-info-circle"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="font-12 text-center" style="margin-top:60px;">Use your free listings or other promo offers before they expire</p>
                        <div class="row ml-0 mr-0 mt-20 text-center">
                            <button type="button" class="btn-bg-light-blue">List an item</button>
                        </div>
                        <p class="font-20 color-black bold mt-30">Quick links</p>
                        <div class="row ml-0 mr-0">
                            <div class="col-md-4 mt-20 pl-0">
                                <p class="font-10">Your seller account</p>
                                <p><a class="font-12 color-blue cursor">Check your selling fee balance</a></p>
                                <p><a class="font-12 color-blue cursor">View seller dashboard</a></p>
                                <p><a class="font-12 color-blue cursor">View service modules</a></p>
                            </div>
                            <div class="col-md-4 mt-20 pl-0">
                                <p class="font-10">eBay Authenticate</p>
                                <p><a class="font-12 color-blue cursor">Check your account status</a></p>
                                <p><a class="font-12 color-blue cursor">Learn more</a></p>
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
    <script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.circliful.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/slick/slick.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/index.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/common.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/elevatezoom.js') }}"></script>
@stop