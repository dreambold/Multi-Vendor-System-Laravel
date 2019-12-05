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
                            <p class="header-gray mb-0">Discount Request Order</p>
                            <div class="bg-white-wrapper row ml-0 mr-0">
                                <div class="bg-white-wrapper">
                                    <span>Show:</span>
                                    <input type="radio" name = "discount_state" value = "0" onclick = "searchDiscountList(0)" class="ml-10 checkbox-inline mt-0" checked><span class="color-black">All items</span>
                                    <input type="radio" name = "discount_state" value = "1" onclick = "searchDiscountList(0)" class="ml-10 checkbox-inline mt-0"><span class="color-black">User Proposal</span>
                                    <input type="radio" name = "discount_state" value = "3" onclick = "searchDiscountList(0)" class="ml-10 checkbox-inline mt-0"><span class="color-black">Seller Proposal</span>
                                    <input type="radio" name = "discount_state" value = "2" onclick = "searchDiscountList(0)" class="ml-10 checkbox-inline mt-0"><span class="color-black">Agree</span>
                                    <input type="radio" name = "discount_state" value = "4" onclick = "searchDiscountList(0)" class="ml-10 checkbox-inline mt-0"><span class="color-black">Canceled</span>
                                </div>
                            </div>
                            <div class="standard-wrapper" id = "discount_order_list_wrapper" style="padding-bottom:40px;">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("front/front_buyer/discount_dlg")
    <script>
        $(function(){
            searchDiscountList(0);
        });

        var curPage = 0;
        function searchDiscountList(page){
            curPage = page;
            var param = new Object();
            param._token = _token;
            param.page = page;
            var discount_state = $("input[name='discount_state']:checked").val();
            param.discount_state = discount_state;
            $.post("{{url("front/my/sell_order/order_discount_list")}}", param, function(html){
                $("#discount_order_list_wrapper").html(html);
            });
        }
        function refreshDiscountPage(){
            searchDiscountList(curPage);
        }

        function discountSellerProposal(obj){
            var order_id = $(obj).attr("data-order-id");
            var param = new Object();
            param._token = _token;
            param.order_id = order_id
            $.post("{{url("front/my/sell_order/discount_seller_proposal")}}", param, function(html){
                $("#discount_dlg #content").html(html);
                $("#discount_dlg ").modal("show");
            })
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