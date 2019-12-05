@extends('layouts/default')

{{-- Page title --}}
@section('title')
Deals
@parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/globaldeals.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/tabbular.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/jquery.circliful.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl_carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl_carousel/css/owl.theme.css') }}">
    <!--end of page level css-->
@stop

{{-- slider --}}
@section('top')

    <!--Carousel Start -->

    <!-- //Carousel End -->
@stop

{{-- content --}}
@section('content')
    <div class="container">
        <div class="navigation-desktop">
            <h1><a href="javascript:void(0)">{{$title}}</a></h1>
            <nav role="tablist">
                <ul class="ebayui-refit-nav-ul" role="menubar">
                    <li class="
                        @if($brandId == 0)
                            selected
                        @endif navigation-desktop-with-flyout" role="menu" aria-label="Featured Current View">
                        <a class="navigation-desktop-menu-link hidden" href="{{url("front/category/".$id."/0")}}"><span>All</span></a>
                    </li>
                    @foreach($brandIdList as $brand)
                        <li role="menu" class="navigation-desktop-with-flyout
                                @if($brandId == $brand['id'])
                                    selected
                                @endif">
                            <a class="navigation-desktop-menu-link" href="{{url("/front/category/".$id."/".$brand['id'])}}"><span>{{$brand['title']}}</span></a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
        <div class="sections-container">
            @foreach($productArr as $list)
                @if(count($list['productList']) > 0)
                    <div class="ebayui-dne-featured-card ebayui-dne-featured-with-padding">
                        <div class="ebayui-dne-banner-text"><h2><span>{{ $list['category']['title'] }}</span></h2></div>
                        <div class="ebayui-dne-item-featured-card ebayui-dne-item-featured-card">
                            <div class="row">
                                @foreach($list['productList'] as $product)
                                    <div class="col" onclick="location.href='{{url("front/product/".$product["id"])}}'">
                                        <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                             data-listing-id="254352188761" itemtype="https://schema.org/Product">
                                            <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                                <div class="slashui-image-cntr">
                                                    <img src="
                                            @if($product['img'] != "")
                                                    {{asset($product['img'])}}
                                                    @else
                                                    {{asset('assets/images/default_no_image.jpg')}}
                                                    @endif">
                                                </div>
                                            </div>
                                            <div class="dne-itemtile-detail" role="text">
                                                <h3 class="dne-itemtile-title ellipse-2">
                                                    <a href=""><span class="ebayui-ellipsis-2">{{$product['title']}}</span></a>
                                                </h3>
                                                <div class="dne-itemtile-price">
                                                    <span class="first">US ${{$product['price']}}</span>
                                                </div>
                                                <div class="dne-itemtile-original-price">
                                        <span>
                                            <?php $minMax = $product->getMinMax();?>
                                            @if($minMax !=null)
                                            <span class="itemtile-price-bold">min: $ {{$minMax['minPrice']}}</span>
                                            <span class="itemtile-price-default">| </span>
                                            <span class="itemtile-price-bold">max: $ {{$minMax['maxPrice']}}</span>
                                            @else
                                                    <span class="itemtile-price-bold"> no variant</span>
                                            @endif
                                        </span>
                                                </div>
                                                <span>
                                        <a href="" class="dne-itemtile-more-options" target="">More options</a>
                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@stop
{{-- footer scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.circliful.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/index.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/common.js') }}"></script>
    <!--page level js ends-->
@stop
