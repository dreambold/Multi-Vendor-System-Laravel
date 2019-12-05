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
        <p class="font-24">Tell us what you're selling</p>
        <div class="row ml-0 mr-0 mt-10">
            <input type="text" class="selling-search" placeholder="Enter UPC,ISBN,ePID,part number,or product name">
            <button type="button" class="btn-selling-search">Get started</button>
        </div>
        <p class="mb-0 mt-10"><span class="font-14 color-black cursor" onclick="showCategoryWrapper()">Browse categories</span></p>
        <div class="category-box">
            <div class="row ml-0 mr-0">
                <label class="font-12" id="category-path"></label>
                <span class="pull-right font-24 cursor" onclick="closeCategoryWrapper()" style="font-weight:100;">×</span>
            </div>
            <div class="row ml-0 mr-0">
                <div class="col-md-3 pl-0 pr-0">
                    <ul class="category-wrapper" id="category-first">
                        <li>Antiques ></li>
                        <li>Art ></li>
                        <li>Baby ></li>
                        <li>Books ></li>
                        <li>Business & Industrial ></li>
                        <li>Cameras & Photo ></li>
                        <li>Cell Phones & Accessories ></li>
                        <li>Clothing, Shoes & Accessories ></li>
                    </ul>
                    <span class="next-wrapper font-20 bold">></span>
                </div>
                <div class="col-md-3 pl-0 pr-0">
                    <ul class="category-wrapper" id="category-second">
                        <li>Catalogs ></li>
                        <li>Childeren ></li>
                        <li>Baby ></li>
                        <li>Books ></li>
                        <li>Business & Industrial ></li>
                        <li>Cameras & Photo ></li>
                        <li>Cell Phones & Accessories ></li>
                        <li>Clothing, Shoes & Accessories ></li>
                    </ul>
                    <span class="next-wrapper font-20 bold">></span>
                </div>
                <div class="col-md-3 pl-0 pr-0">
                    <ul class="category-wrapper" id="category-third">
                        <li>Antiques ></li>
                        <li>Art ></li>
                        <li>Baby ></li>
                        <li>Books ></li>
                        <li>Business & Industrial ></li>
                        <li>Cameras & Photo ></li>
                        <li>Cell Phones & Accessories ></li>
                        <li>Clothing, Shoes & Accessories ></li>
                    </ul>
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
    <script>
        $("#category-first>li").on('click', function(){
            $("#category-first>li").removeClass("active");
            $(this).addClass("active");
            var path = "<span>" + $(this).html() + "&nbsp" + "</span>";
            $("#category-path").html(path);
            // get second categories with ajax and append to category-second
        });
        $("#category-second>li").on('click', function(){
            $("#category-second>li").removeClass("active");
            $(this).addClass("active");
            var path = "<span>" + $("#category-first>li.active").html() + "&nbsp" + $(this).html() +  "&nbsp" + "</span>";
            $("#category-path").html(path);
            // get third categories with ajax and append to category-third
        });
        $("#category-third>li").on('click', function(){
            $("#category-third>li").removeClass("active");
            $(this).addClass("active");
            var path = "<span>" + $("#category-first>li.active").html() + "&nbsp" + $("#category-second>li.active").html() +  "&nbsp" + $(this).html() + "</span>";
            $("#category-path").html(path);
            // go to product list
        });

        function closeCategoryWrapper(){
            $(".category-box").slideUp("slow");
        }
        function showCategoryWrapper(){
            $(".category-box").slideDown("slow");
            // get list of first category with ajax and append to category-first
        }
    </script>
@stop