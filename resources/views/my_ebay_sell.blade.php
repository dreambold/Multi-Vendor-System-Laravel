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
                            <li target="recently">Recently viewed</li>
                            <li target="offers">Bids/Offers</li>
                            <li target="history">Purchase history</li>
                            <li target="watching">Watching</li>
                            <li target="searches">Saved searches</li>
                            <li target="sellers">Saved sellers</li>
                            <li class="active" target="sell">Sell</li>
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
                    <!-- saved searches -->
                    <div class="col-md-10 my-ebay-content col-xs-12 pl-0 pr-0 active" id="searches">
                        <p class="header-dark-gray mb-0 mt-20 color-white">Saved searches</p>
                        <div class="border-left border-right">
                            <div class="row ml-0 mr-0 border-bottom pt-10 pb-10">
                                <div class="col-xs-6"><span class="font-12 bold">Search name</span></div>
                                <div class="col-xs-2"><span class="font-12 bold">Keyword</span></div>
                                <div class="col-xs-2"><span class="font-12 bold">Email settings</span></div>
                                <div class="col-xs-2"><span class="font-12 bold">Actions</span></div>
                            </div>
                            @for($i = 0; $i < 10; $i++)
                                <div class="row ml-0 mr-0 border-bottom" style="padding-bottom: 4px; padding-top:4px;">
                                    <div class="col-xs-6">
                                        <img class="size-30" src="uploads/product/small/1.jpg">
                                        <span class="font-10">headphone</span>
                                    </div>
                                    <div class="col-xs-2"><span class="font-10">headphone</span></div>
                                    <div class="col-xs-2"><span class="font-10">Subscribed</span></div>
                                    <div class="col-xs-2">
                                        <p class="mb-0"><a class="color-blue font-10" href="javascript:void(0)">View items</a></p>
                                        <p class="mb-0"><a class="color-blue font-10" href="javascript:void(0)">Edit search</a></p>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <!-- End of saved searches -->
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
    <script>
        $(".left-side-menu>li").on("click", function(){
            var target = $(this).attr("target");
            window.location.href="my_ebay?menu=" + target;
        });
    </script>
@stop