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
        <div class="row ml-0 mr-0 mt-10">
            <div class="col-md-4 col-xs-12 product-series-wrapper">
                <div id="owl-demo">
                    <div class="item"><img src="{{asset('assets/images/slide_1.jpg')}}" alt="slider-image"></div>
                    <div class="item"><img src="{{asset('assets/images/slide_2.jpg')}}" alt="slider-image"></div>
                    <div class="item"><img src="{{asset('assets/images/slide_3.jpg')}}" alt="slider-image"></div>
                </div>
            </div>
            <div class="col-md-5 col-xs-12">
                <div class="row ml-0 mr-0"><span class="font-18 bold">Citizen NH8354-58A Men Automatic Stainless Steel Analog White Day Date Watch</span></div>
                <div class="row ml-0 mr-0 pb-10" style="border-bottom:1px #ddd solid;">
                    <div class="font-14">
                        <i class="fa fa-star text-brown"></i>
                        <i class="fa fa-star text-brown"></i>
                        <i class="fa fa-star text-brown"></i>
                        <i class="fa fa-star text-brown"></i>
                        <i class="fa fa-star-o text-brown"></i>
                        <span class="pl-10">Be the first to </span>
                        <a class="color-blue pl-10">write a preview</a>
                    </div>
                </div>

                <div class="row ml-0 mr-0 mt-10 pl-20">
                    <span class="font-12">Condition:</span><span class="font-12 bold pl-10" >New with tags</span>
                </div>
                <div class="row ml-0 mr-0 mt-10 pl-20">
                    <span class="font-12" style="padding-left:6px;">Quantity:</span><input type="text" class="input-small pl-10">
                    <span class="font-12">More than 10 available / </span><a href="#"><span class="font-14 color-blue">2 sold</span></a>
                </div>
                <div class="detail-header row ml-0 mr-0 mt-10">
                    <div class="row ml-0 mr-0">
                        <div class="col-xs-6">
                            <div class="row ml-0 mr-0 text-center">
                                <span class="font-12">Price:</span>
                                <span class="font-14 color-black bold">US $134.54</span>
                            </div>
                            <div class="row ml-0 mr-0 pull-right">
                                <span class="font-12">Approximately RMB 958.50</span>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="row ml-0 mr-0 mt-10"><input type="button" class="btn-bg-blue large-button" value="Buy It Now"></div>
                            <div class="row ml-0 mr-0 mt-10"><input type="button" class="btn-bg-blue large-button" value="Add to cart"></div>
                            <div class="row ml-0 mr-0 mt-10">
                                <a href="#">
                                    <i class="fa fa-eye color-blue"></i>
                                    <span class="font-12 color-blue">Add to watchlist</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row ml-0 mr-0">
                        <div class="detail-tab-item mt-10">Longtime member</div>
                        <div class="detail-tab-item mt-10">Free Shipping</div>
                        <div class="detail-tab-item mt-10">Returns accepted</div>
                    </div>
                </div>
                <div class="pay-only-wrapper">
                    <img src="#">
                    <span class="font-14">Pay only</span>
                    <span class="font-14 bold">$124.54</span>
                    <span>[</span><a href="#" class="color-blue">Show me how</a><span>]</span>
                </div>
                <div class="row ml-0 mr-0 text-center mt-20">
                    <span class="font-14">Shipping: <b>FREE </b> Economy International Shipping | <a href="#">See Details</a></span>
                </div>
                <div class="row ml-0 mr-0 mb-10 text-center">
                    <span class="font-10">International items may be subject to customs processing and additional charges.</span>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="standard-wrapper">
                    <div class="row ml-0 mr-0">
                        <span class="font-14 bold">Shop with confidence</span>
                    </div>
                    <div class="row border-bottom ml-0 mr-0 pb-10 mt-10">
                        <div class="col-xs-2">

                        </div>
                        <div class="col-xs-10">
                            <span class="row ml-0 mr-0 font-14 bold">Top Rated Pluse</span>
                            <span class="row ml-0 mr-0 font-12">
                                Trusted seller, fast shipping returns.
                                <a href="#" class="font-12 color-blue">Learn more</a>
                            </span>
                        </div>
                    </div>
                    <div class="row ml-0 mr-0 pb-10 mt-10">
                        <div class="col-xs-2"></div>
                        <div class="col-xs-10">
                            <span class="row ml-0 mr-0 font-14 bold">eBay Money Back Guarantee</span>
                            <span class="row ml-0 mr-0 font-12">
                                Trusted seller, fast shipping returns.
                                <a href="#" class="font-12 color-blue">Learn more</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="standard-wrapper mt-20 pl-10">
                    <div class="row ml-0 mr-0">
                        <span class="font-14 bold">Seller information</span>
                    </div>
                    <div class="row ml-0 mr-0">
                        <span class="font-12 color-blue bold">kriswatches</span>
                        <span class="font-12">(</span><span class="font-12 color-blue">2992 <i class="fa fa-star text-brown"></i></span><span class="font-12">)</span>
                    </div>
                    <div class="row ml-0 mr-0 pb-10 border-dot-bottom">
                        <span class="font-12">100% Positive feedback</span>
                    </div>
                    <div class="row ml-0 mr-0 mt-10">
                        <a href="#" class="color-blue"><i class="fa fa-heart-o"></i><span class="font-12 pl-10">Save this seller</span></a>
                    </div>
                    <div class="row ml-0 mr-0 mt-10">
                        <a href="#" class="color-blue"><span class="font-12">Contact seller</span></a>
                    </div>
                    <div class="row ml-0 mr-0 mt-10">
                        <a href="/visit_store" class="color-blue"><span class="font-12">Visit Store</span></a>
                    </div>
                    <div class="row ml-0 mr-0 mt-10">
                        <a href="#" class="color-blue"><span class="font-12">See other items</span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row ml-0 mr-0 mt-20">
            <span class="font-24 bold color-black">Shopping cart (1 item)</span>
            <span class="font-14 color-blue bold pull-right" style="padding-right:14px;">Send Us Your Commnets</span>
        </div>
        <div class="row ml-0 mr-0 mt-10">
            <div class="col-md-8 col-xs-12 pl-0 mt-10">
                <div class="standard-wrapper">
                    <div class="row ml-0 mr-0 pb-10 border-bottom">
                        <span class="font-18 color-black bold">Seller <u>Kristwatchs</u></span>
                        <span class="font-14 pull-right color-black">Request total <i class="fa fa-info-circle"></i></span>
                    </div>
                    <div class="row ml-0 mr-0 mt-10">
                        <div class="col-md-6 col-xs-12 pl-0 pr-0" style="float:left;">
                            <div class="float-left">
                                <img src="{{asset("/uploads")}}/product/s-l300.jpg" class="product-img-md">
                            </div>
                            <div class="float-left pl-10 product-detail-md mt-10">
                                <div class="row ml-0 mr-0">
                                    <span class="color-black font-12 bold">Citizen NH8354-58A Men Automatic Stainless Steel Analog White Day Date</span>
                                </div>
                                <div class="row ml-0 mr-0">
                                    <span class="font-12">New with tags</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 pl-0 pr-0 mt-10">
                            <div class="col-xs-6 pl-0 pr-0">
                                <div class="row ml-0 mr-0 width-100">
                                    <select class="input-small pull-right">
                                        <option value="0">1</option>
                                    </select>
                                    <span class="font-14 bold pull-right">Qty</span>
                                </div>
                                <div class="row ml-0 mr-0 mt-10 width-100">
                                    <span class="font-12 pull-right">Economy International</span>
                                </div>
                                <div class="row ml-0 mr-0"><span class="font-12 pull-right">Shipping</span></div>
                            </div>
                            <div class="col-xs-6 pl-0 pr-0">
                                <div class="row ml-0 mr-0 width-100">
                                    <span class="font-18 bold color-black pull-right">US $134.54</span>
                                </div>
                                <div class="row ml-0 mr-0 mt-10 width-100">
                                    <span class="font-12 pull-right">Free shipping</span>
                                </div>
                                <div class="row ml-0 mr-0 width-100" style="margin-top:100px;">
                                    <a href="#" class="pull-right font-14 color-blue">Remove</a>
                                    <span class="font-14 pull-right pl-10 pr-10">|</span>
                                    <a href="#" class="pull-right font-14 color-blue">Save for later</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="standard-wrapper mt-20">
                    <div class="row ml-0 mr-0 pb-10">
                        <span class="font-18 color-black bold">Related Sponsored Items</span>
                    </div>
                    <div class="row ml-0 mr-0 mt-10">
                        <div class="float-left pr-10">
                            <img src="{{asset("/uploads")}}/product/s-l300.jpg" class="product-img-md">
                        </div>
                        <div class="float-left pr-10">
                            <img src="{{asset("/uploads")}}/product/s-l300.jpg" class="product-img-md">
                        </div>
                        <div class="float-left pr-10">
                            <img src="{{asset("/uploads")}}/product/s-l300.jpg" class="product-img-md">
                        </div>
                        <div class="float-left pr-10">
                            <img src="{{asset("/uploads")}}/product/s-l300.jpg" class="product-img-md">
                        </div>
                        <div class="float-left pr-10">
                            <img src="{{asset("/uploads")}}/product/s-l300.jpg" class="product-img-md">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 mt-10">
                <div class="standard-wrapper">
                    <div class="row text-center ml-0 mr-0">
                        <input type="button" class="btn-checkout" onclick = "window.location.href = '{{url("/checkout")}}'" value="Go to checkout">
                    </div>
                    <div class="row ml-0 mr-0 mt-10">
                        <span class="font-12">Item 1</span>
                        <span class="font-12 pull-right">US $134.54</span>
                    </div>
                    <div class="row ml-0 mr-0 pb-10 border-bottom mt-10">
                        <span class="font-12">Shipping to 200063 <i class="fa fa-info-circle"></i></span>
                        <span class="font-12 pull-right">Free</span>
                    </div>
                    <div class="row ml-0 mr-0 mt-10">
                        <span class="font-16 bold">Total</span>
                        <span class="font-16 bold pull-right">US $134.54</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.circliful.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" ></script>
    <script type="text/javascript" src="{{asset('assets/slick/slick.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/index.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/common.js') }}"></script>
    <!--page level js ends-->
@stop