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
        <div class="row pb-10 border-bottom">
            <div class="col-xs-3 pl-0 ">
                <img class = "size-200 border-rect" src="{{asset("/assets")}}/images/cart/big/1.jpg">
            </div>
            <div class="col-xs-8">
                <h3>New Acer Aspire E5-576-392H 15.6' FHD Notebook Intel i3-8130U 6GB 1TB Win10</h3>
                <div class="row" style="margin-left:0px; margin-right:0px;">
                                    <span class="product-detail">
                                        Aser Aspire Aspire E5-576-392H 15.6' FHD Notebook Intel i3-8130U Device IEEE 802 11a Gigabit Ethernet Optical Drive Interface .
                                        DVD writer. optical Drive Type.
                                    </span>
                </div>
                <div class="row" style="margin-left:0px; margin-right:0px; margin-top: 10px;">
                    <div class="col-xs-6">
                        <div class="row">
                            <span class="big-price-span">RMB 2,525.49</span>
                        </div>
                        <div class="row">
                            <span>RMB 641.19 shipping</span>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="row">
                            <i class="fa fa-money" style="color: #5a3610;"></i> Top Rated Seller
                        </div>
                        <div class="row">
                            Brand:Acer
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class = "row">
            <div class = "hidden-xs col-lg-3" style = "padding-left:0px; padding-right:150px;">
                <h3>All Categories</h3>
                <ul class = "categories-ul">
                    <li>
                        <span>eBay Motors</span>
                        <i class = "fa fa-check" style = "float:right;"></i>
                    </li>
                    <li><span>Fashion</span></li>
                    <li><span>Books Movies&Music</span></li>
                    <li><span>Electronics</span></li>
                    <li><span>Collectibles & Art </span></li>
                    <li><span>Home &Garden </span></li>
                    <li><span>Sporting Goods </span></li>
                    <li><span>Toy & Hobbies </span></li>
                </ul>
            </div>
            <div class="col-lg-9  col-xs-12 pl-0 pr-0" id="recently">
                <div class="header_find_products_wrapper mt-10">
                    <div class="pull-left">
                        <div class="btn-group">
                            <a href="{{url("/find_products")}}" class="btn btn-default active">All Listings</a>
                            <a href="{{url("/find_products_auction")}}" class="btn btn-default">Auction</a>
                            <a href="#" class="btn btn-default">Buy It Now</a>
                        </div>
                    </div>
                    <div class="pull-right">
                        <span style="margin-right:10px;"> Sort</span>
                        <select class="form-control" style="display:inline-block; width:150px;">
                            <option value="0">Best Match</option>
                            <option value="1">Best Price</option>
                        </select>
                        <div class="input-group-btn" style="display:inline-block;">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <span class="fa fa-th-list"></span>
                                <span class="fa fa-caret-down"></span></button>
                            <ul class="dropdown-menu" style="min-width:50px;">
                                <li><a href="#"><span class="fa fa-list-ul"></span></a></li>
                                <li><a href="#"><span class="fa fa-list"></span></a></li>
                                <li><a href="#"><span class="fa fa-list-ol"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class = "clearfix border-bottom"></div>
                <div class="row border-left ml-0 mr-0 ">
                    @for($i = 0; $i<8; $i++)
                        <div class="col-md-4 col-xs-6 border-bottom border-right pt-10 cursor">
                            <div class="row ml-0 mr-0 text-center">
                                <img src="uploads/product/small/1.jpg" class="size-150">
                            </div>
                            <div class="row ml-0 mr-0">
                                <p class="color-blue font-12 mb-0">Apple Iphone Xs Max Display Model Dummy Phone</p>
                                <span class="color-black bold font-12">RMB 46.32</span><span class="font-10">3 Bids</span>
                                <p class="mb-0 font-10 bold color-black">+ RMB 204.87</p>
                                <p class="font-10">4d 7h</p>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="row ml-0 mr-0 mt-20">
                    <span class="ml-20 font-10">8 items total</span>
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

    </script>
@stop