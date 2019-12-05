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
            <span class="font-20 color-black">Mega Buy: Summary</span><span class="color-blue font-14 ml-10">longlyov_90(0)</span>
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#activity" data-toggle="tab">Activty</a>
                </li>
                <li>
                    <a href="#messages" data-toggle="tab">Messages (1)</a>
                </li>
                <li>
                    <a href="#account" data-toggle="tab">Account</a>
                </li>
                <span class="font-10 pull-right mt-20"> is your Mega Buy Homepage</span>
                <span class="mt-20 pull-right bold font-10">Summary&nbsp</span>
            </ul>
            <div class="tab-content mt-10">
                <div class="tab-pane fade active in" id="activity">
                    <div class="col-md-2 hidden-xs pl-0" style="padding-right:2px;">
                        <ul class="left-side-menu pl-0">
                            <li target="summary">Summary</li>
                            <li class="active" target="recently">Recently viewed</li>
                            <li target="offers">Bids/Offers</li>
                            <li target="history">Purchase history</li>
                            <li target="watching">Watching</li>
                            <li target="searches">Saved searches</li>
                            <li target="sellers">Saved sellers</li>
                            <li target="sell">Sell</li>
                        </ul>
                        <h3 class="border-bottom pb-10">Recently viewed items</h3>
                        <div class="col-md-offset-3">
                            @for($i = 0; $i < 5; $i++)
                                <div class="left-side-recently-item">
                                    <img src="uploads/product/small/1.jpg">
                                    <p class="color-blue font-10 mb-0">Apple Iphone Xs Max Display Model Dum...</p>
                                    <p class="font-14 bold color-black mb-0">RMB 46.32</p>
                                    <p class="font-10 mb-0">3 bids</p>
                                </div>
                            @endfor
                        </div>
                        <p class="mb-0 font-12 bold color-black mt-20">Announcements</p>
                        <a href="javascript:void(0);" class="color-blue font-12">See all eBay announcements</a>
                    </div>
                    <!-- recently viewed -->
                    <div class="col-md-10 my-ebay-content col-xs-12 pl-0 pr-0 active" id="recently">
                        <div class="bg-white-wrapper">
                            <span class="font-14 ml-10">Recently viewed</span>
                            <a class="pull-right font-12 color-blue mr-10" href="javascript:void(0)">Clear all</a>
                        </div>
                        <div class="row border-left ml-0 mr-0">
                            @for($i = 0; $i<8; $i++)
                                <div class="col-md-4 col-xs-6 border-bottom border-right pt-10 cursor product_detail_div">
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
                    <!-- End of recently viewed -->
                </div>
                <div class="tab-pane fade" id="messages">

                </div>
                <div class="tab-pane fade" id="account">
                    <input type="button" class="product-act-btn" value="cancel" onclick="closeCreateModal()">
                    <input type="button" class="product-act-btn" value="Create">
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
        $(".left-side-menu>li").on("click", function(){
            var target = $(this).attr("target");
            window.location.href="my_ebay?menu=" + target;
        });
    </script>
@stop