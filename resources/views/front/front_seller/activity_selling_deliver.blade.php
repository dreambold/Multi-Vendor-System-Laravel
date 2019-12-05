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
                        <div class = "row ml-0 mr-0 mt-20">
                            <p class="header-gray mb-0">Delivery Order</p>
                            <div class="bg-white-wrapper row ml-0 mr-0">
                                <div class="bg-white-wrapper">
                                    <span>Show:</span>
                                    <input type="radio" name = "state" value = "1,2" onclick = "searchOrderList(0)" class="ml-10 checkbox-inline mt-0" checked><span class="color-black">All items</span>
                                    <input type="radio" name = "state" value = "1" onclick = "searchOrderList(0)" class="ml-10 checkbox-inline mt-0"><span class="color-black">Before Deliver</span>
                                    <input type="radio" name = "state" value = "2" onclick = "searchOrderList(0)" class="ml-10 checkbox-inline mt-0"><span class="color-black">After Deliver</span>
                                </div>
                            </div>
                            <div class="standard-wrapper" id = "order_list_wrapper" style="padding-bottom:40px;">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("front/front_seller/order_function")
    <script>
        $(function(){
            searchOrderList(0);
        });

        var curPage = 0;
        function searchOrderList(page){
            curPage = page;
            var param = new Object();
            param._token = _token;
            param.page = page;
            var state = $("input[name='state']:checked").val();
            param.state = state;
            $.post("{{url("front/my/sell_order/order_list")}}", param, function(html){
                $("#order_list_wrapper").html(html);
            });
        }
        function refreshOrderList(){
            searchOrderList(curPage);
        }
    </script>
@stop

@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.circliful.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/slick/slick.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/index.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/common.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/elevatezoom.js') }}"></script>

@stop