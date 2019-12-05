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
                    <!-- summary -->
                    <div class="col-md-10 my-ebay-content col-xs-12 pl-0 pr-0 active" id="summary">
                        <p class="header-gray mb-0">Bidding</p>
                        <div class="bg-white-wrapper">
                            <span>Show:</span>
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Not hidden</span>
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">All items</span>
                        </div>
                        <div class="standard-wrapper" style="padding-bottom:40px;">
                            <div class="row ml-0 mr-0">
                                <div class="col-md-6 pl-0">
                                    <input type="checkbox" class="checkbox-inline mt-0"><button type="button" class="btn btn-default ml-10 btn-sm ebay-control">Hide</button>
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
                            <div class="row ml-0 mr-0 mt-20">
                                <div class="col-md-6 pl-0 display-flex">
                                    <div class="display-inline top-align">
                                        <input type="checkbox" class="checkbox-inline mt-0">
                                    </div>
                                    <div class="display-inline ml-20">
                                        <img class="border-rect size-150" src="{{url("uploads/product/small/1.jpg")}}">
                                        <p class="text-right font-10">1 of 4 images</p>
                                    </div>
                                    <div class="display-inline top-align ml-20">
                                        <p class="color-blue font-12 mb-0">Apple Iphone Xs Max Display Model Dummy Phone</p>
                                        <p class="font-10 mb-0">( 1704198799344 )</p>
                                        <span class="color-blue font-10">m1q123michal</span>
                                        <span class="font-10 mlr-5">|</span>
                                        <span class="color-blue font-10">171</span>
                                        <span class="font-10 mlr-5">|</span>
                                        <span class="font-10">100%</span>
                                        <p class="font-10 mb-0">Your max bid: US $7.00</p>
                                    </div>
                                </div>
                                <div class="col-md-6 text-right">
                                    <div class="display-inline ml-10 top-align">
                                        <p class="bold color-black font-12 mb-0 text-right">4d 7h left</p>
                                        <p class="font-12 mb-0 text-right">Sunday,</p>
                                        <p class="font-12 mb-0 text-right">05:45 AM AST</p>
                                    </div>
                                    <div class="display-inline ml-20 top-align">
                                        <p class="font-14 bold color-green mb-0 text-right">RMB 46.32</p>
                                        <p class="font-10 color-blue mb-0 text-right">3 bids</p>
                                        <p class="font-10 color-blue mb-0 text-right">Calulate</p>
                                    </div>
                                    <div class="display-inline ml-20 top-align">
                                        <div class="row ml-0 mr-0">
                                            <button class="visit-btn">Visit seller's store</button>
                                        </div>
                                        <div class="row ml-0 mr-0">
                                            <a class="font-10 color-blue">View seller's other items</a>
                                        </div>
                                        <div class="row ml-0 mr-0">
                                            <select class="font-10 border-none pr-0">
                                                <option>More actions</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="font-10 mt-10">If you have been outbid, you may still become the high bidder if, for example, the seller cancels a bid received by another bidder or lowers a reserve price.</p>
                            <div class="row ml-0 mr-0">
                                <div class="col-md-3 border-rect pt-10 pb-10">
                                    <p class="font-12 color-black bold">Item you bid on</p>
                                    <div class="row ml-0 mr-0 text-center mt-10"><img src="{{url("uploads/product/small/1.jpg")}}" class="size-150"></div>
                                    <p class="font-12 color-black bold mt-10">Apple Iphone Xs Max Display Model Dummy</p>
                                </div>
                                <div class="col-md-9 border-rect similar-item pt-10 pb-10" style="height:256px;">
                                    <p class="font-12 color-black bold">Similar Sponsored items</p>
                                    No recommendations found for your selection. Please select next item.
                                </div>
                            </div>
                        </div>
                        <p class="header-gray mb-0 mt-20">Selling Activity</p>
                        <div class="standard-wrapper text-center pt-20 pb-20 mt-10">
                            <div class="display-inline top-align">
                                <img class="size-30" src="{{url("uploads/product/small/1.jpg")}}">
                            </div>
                            <div class="display-inline text-left">
                                <span>Looking for your selling activity?Go To </span><a class="font-12 color-blue cursor">All Selling</a>
                                <br><span>to access your listings and sales!</span>
                            </div>
                        </div>
                    </div>
                    <!-- End of summary -->
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