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
    <link href="{{asset('assets/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('assets/slick/slick-theme.css')}}" rel="stylesheet">
    <!--end of page level css-->
@stop
{{-- slider --}}
@section('top')

@stop

{{-- content --}}
@section('content')
    <div class="container">
        <div class="hl-cat-nav hidden" data-marko="{&quot;onmouseleave&quot;:&quot;onMouseLeave s0-0-2 false&quot;}">
            <ul class="hl-cat-nav__container"
                data-marko="{&quot;onmouseout&quot;:&quot;onTabMouseOut s0-0-2 false&quot;,&quot;onmouseover&quot;:&quot;onTabMouseOver s0-0-2 false&quot;,&quot;onfocusout&quot;:&quot;onTabMouseOut s0-0-2 false&quot;,&quot;onclick&quot;:&quot;onExpandClick s0-0-2 false&quot;}">
                @foreach($categoryMenuList as $category)
                    <li class="hl-cat-nav__js-tab"><a href="{{url("front/category")}}/{{$category['id']}}/0">{{$category['title']}}</a></li>
                @endforeach
                <li class="hl-cat-nav__more hl-cat-nav__js-tab">
                    <span>More
                        <svg class="icon icon--chevron-down-bold svg-icon hl-cat-nav__more-arrow" focusable="false" aria-hidden="true">
                            <defs></defs>
                            <use href="#icon-chevron-down-bold"></use>
                        </svg>
                    </span>
                    <div class="hl-cat-nav__expander">
                        <button aria-haspopup="true">Expand: More</button>
                    </div>
                    <div class="hl-cat-nav__flyout">
                        <a href="/b/Electronics/bn_7000259124">Electronics</a>
                        <a href="/b/Fashion/bn_7000259856">Fashion</a>
                        <a href="/b/Beauty/bn_7000259123">Health &amp; Beauty</a>
                        <a href="/rpp/geo-parts-accessories-motors">Motors</a>
                        <a href="/b/Collectibles-Art/bn_7000259855">Collectibles</a>
                        <a href="/b/Sporting-Goods/888/bn_1865031">Sports</a>
                        <a href="/b/Home-Garden/11700/bn_1853126">Home &amp; Garden</a>
                        <a href="/globaldeals">Deals</a>
                        <a href="/b/Under-10/bn_7001623770">Under $10</a>
                    </div>
                </li>
            </ul>
        </div>
        <div id="owl-demo" class="owl-carousel owl-theme">
            @foreach($topBannerList as $banner)
            <div class="item">
                <img src="{{ asset($banner['img']) }}" alt="slider-image" onclick="window.open('{{$banner['url']}}')">
            </div>
            @endforeach
        </div>
        <section class="purchas-main">
            <div class="hl-card-header">
                <div class="hl-card-header__header-container clearfix">
                    <div class="hl-card-header__title">
                        <h2 class="hl-card-header__headline">
                            <a href="#">Daily Deals<span class="clipped"> - Carousel</span></a>
                        </h2>
                    </div>
                    <div class="hl-card-header__seeall">
                        <a href="#" aria-label="See All Deals">See all
                            <svg class="icon icon--arrow-right-bold hl-card-header__large-arrow" focusable="false"
                                 data-ebayui="" aria-hidden="true">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xlink:href="#icon-arrow-right-bold">
                                </use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="owl-carousel owl-theme" id="carousel3">
                @foreach($dealsBannerList as $banner)
                <div class="item">
                    <img src="{{ asset($banner['img']) }}"  alt="image1" onclick="window.open('{{$banner['url']}}')"> </div>
                @endforeach
            </div>
            <div class="hl-module hl-popular-destinations off-card hl-atf-module-js" id="destinations_list1">
                <div class="hl-card-header">
                    <div class="hl-card-header__header-container clearfix">
                        <div class="hl-card-header__title"><h2 class="hl-card-header__headline">Product categories</h2></div>
                    </div>
                </div>
                @if(isset($searchCategoryList))
                @foreach($searchCategoryList as $root_category)
                <div class = "row ml-0 mr-0 mb-10">
                    <div class = "categories-title">
                        <label class = "title-label">{{$root_category['title']}}</label>
                    </div>
                    <div class = "categories-item-wrapper">
                        <ul class="sub-nav-box sp">
                            @foreach($root_category['leavedCategoryList'] as $leavedItem)
                            <li><a href="{{url("front/product_list")}}/{{$leavedItem['id']}}">{{$leavedItem['title']}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
            <div class="hl-module hl-popular-destinations off-card hl-atf-module-js" id="destinations_list1">
                <div class="hl-card-header">
                    <div class="hl-card-header__header-container clearfix">
                        <div class="hl-card-header__title"><h2 class="hl-card-header__headline">Popular Brand</h2></div>
                    </div>
                </div>
                <ul class="hl-popular-destinations-elements">
                    @foreach($brandList as $brand)
                    <li class="hl-popular-destinations-element">
                        <a class="hl-popular-destinations-link" href="{{url("/front/brand/".$brand['id'])}}" >
                            <div class="hl-popular-destinations-image-spacer">
                                <div class="hl-image hl-image-js js-only hl-popular-destinations-image hl-image__fill"
                                     data-size="200"
                                     style="background-image: url({{asset($brand['log_img'])}});">
                                    <div class="hl-image__background" style="opacity: 0;">
                                    </div>
                                </div>
                            </div>
                            <h3 class="hl-popular-destinations-name">{{$brand['title']}}</h3>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="hl-module hl-popular-destinations off-card hl-atf-module-js" id="destinations_list2">
                <div class="hl-card-header">
                    <div class="hl-card-header__header-container clearfix">
                        <div class="hl-card-header__title"><h2 class="hl-card-header__headline">Top Category</h2></div>
                    </div>
                </div>
                <ul class="hl-popular-destinations-elements">
                    @foreach($categoryList as $category)
                    <li class="hl-popular-destinations-element">
                        <a class="hl-popular-destinations-link" href="{{url("/front/category/".$category['id']."/0")}}">
                            <div class="hl-popular-destinations-image-spacer">
                                <div class="hl-image hl-image-js js-only hl-popular-destinations-image hl-image__fill" data-size="200" style="background-image: url({{asset($category['img'])}});">
                                    <div class="hl-image__background" style="opacity: 0;"></div>
                                </div>
                            </div>
                            <h3 class="hl-popular-destinations-name">{{$category['title']}}</h3></a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="owl-carousel owl-theme" id="carousel4">
                @foreach($middleTopBannerList as $banner)
                <div class="item">
                    <img src="{{ asset($banner['img']) }}" onclick="window.open('{{$banner['url']}}')">
                </div>
                @endforeach
            </div>

            <div class="owl-carousel owl-theme" id="carousel5">
                @foreach($middleBottomBannerList as $banner)
                <div class="item">
                    <img src="{{ asset($banner['img']) }}" onclick="window.open('{{$banner['url']}}')">
                </div>
                @endforeach
            </div>

            <div class="hl-module hl-custom-card hl-atf-module-js" id="rtm_list4">
                <div class="hl-custom-card__side-text">
                    <h2 class="hl-custom-card__headline">
                        <a style="color:#d23608;" href="#">
                            <div style="color:#d23608;" class="ebayui-ellipsis-2">
                                <span style="color:#d23608;">더욱 빠르게</span>
                            </div>
                        </a>
                    </h2>
                    <div class="hl-custom-card__subheadline secondary-text">
                        <div style="color:#d23608;" class="ebayui-ellipsis-2">
                            <span style="color:#d23608;">탑 스니커즈 상품을 만나보세요.</span>
                        </div>
                    </div>
                    <div class="hl-cta hl-custom-card__see-all"
                         onfocusin="this.querySelector('.hl-cta__default-js').onmouseover()"
                         onfocusout="this.querySelector('.hl-cta__default-js').onmouseout()">
                        <a href="#">
                            <div class="hl-cta__text-only" style="color:#d23608;">
                                Shop Now
                                <svg class="icon icon--arrow-right-bold hl-cta__arrow" style="fill:currentColor;"
                                     focusable="false" data-ebayui="" aria-hidden="true">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xlink:href="#icon-arrow-right-bold"></use>
                                </svg>
                            </div>
                            <div class="hl-cta__default hl-cta__default-js hl-custom-card__see-all"
                                 style="color: rgb(210, 54, 8); border-color: rgb(210, 54, 8); box-shadow: rgb(210, 54, 8) 0px 0px 0px 0px inset;"
                                 onmouseover="this.style.color='#26cfca'; this.style['border-color']='#d23608'; this.style['box-shadow']='#d23608 0 0px 0px 70px inset'; this.querySelectorAll('.hl-cta__arrow').item(0).style['stroke']='#26cfca'"
                                 onmouseout="this.style.color='#d23608'; this.style['border-color']='#d23608'; this.style['box-shadow']='#d23608 0 0px 0px 0px inset'; this.querySelectorAll('.hl-cta__arrow').item(0).style['stroke']='#d23608'">
                                Shop Now
                                <svg class="icon icon--arrow-right-bold hl-cta__arrow"
                                     style="fill: currentcolor; stroke: rgb(210, 54, 8);" focusable="false"
                                     data-ebayui="" aria-hidden="true">
                                    <defs></defs>
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xlink:href="#icon-arrow-right-bold"></use>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="hl-custom-card__image-container">
                    <div id = "carousel6">
                        @foreach($bottomBannerList as $banner)
                        <div class="item">
                            <img src="{{ asset($banner['img']) }}"  alt="image1" onclick="window.open('{{$banner['url']}}')">
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </section>
    </div>
@stop
{{-- footer scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.circliful.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/slick/slick.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/index.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/js/common.js') }}"></script>
    <!--page level js ends-->
@stop
