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
                    <div class="col-md-10 my-ebay-content col-xs-12 pl-0 pr-0 active" >
                        <p class="header-gray mb-0">Unpaid Order</p>
                        <div class="bg-white-wrapper row ml-0 mr-0">
                            <div class="col-md-6 pl-0" style = "line-height:30px;">
                            <input type="checkbox" class="checkbox-inline mt-0" onclick = "checkUnpaidAll(this)"> check all
                            </div>
                            <div class="col-md-6 pl-0 text-right">
                                <input type="radio" name = "pay_type" value = "0" style = "vertical-align: middle;">
                                <img src="http://192.168.99.110:9032/assets/img/mastercard.png" style="width:30px;">
                                <input type="radio" name = "pay_type" value = "1" style = "vertical-align: middle;">
                                <img src="http://192.168.99.110:9032/assets/img/paypal2.png" style="width:30px;">
                                <input type="radio" name = "pay_type" value = "2" style = "vertical-align: middle;">
                                <img src="http://192.168.99.110:9032/assets/img/american-express.png" style="width:30px;">
                                <button class="btn btn-responsive btn-info btn-sm" style = "margin-left:20px;" type = "button" onclick = "onPayUnpaidOrder();">pay</button>
                            </div>
                        </div>
                        <div class="standard-wrapper" id = "unpaid_order_list_wrapper" style="padding-bottom:40px;">

                        </div>
                        <p class="header-gray mb-0 mt-20">Paid Order</p>
                        <div class="bg-white-wrapper">
                            <span>Show:</span>
                            <input type="radio" name = "orderState" value = "0" onclick = "searchPaidOrderList(0)" class="ml-10 checkbox-inline mt-0" checked><span class="color-black">All items</span>
                            <input type="radio" name = "orderState" value = "1" onclick = "searchPaidOrderList(0)" class="ml-10 checkbox-inline mt-0"><span class="color-black">Prepare </span>
                            <input type="radio" name = "orderState" value = "2" onclick = "searchPaidOrderList(0)" class="ml-10 checkbox-inline mt-0"><span class="color-black">Delivery </span>
                            <input type="radio" name = "orderState" value = "3" onclick = "searchPaidOrderList(0)" class="ml-10 checkbox-inline mt-0"><span class="color-black">Check </span>
                            <input type="radio" name = "orderState" value = "4" onclick = "searchPaidOrderList(0)" class="ml-10 checkbox-inline mt-0"><span class="color-black">Complete </span>
                        </div>
                        <div class="standard-wrapper" id = "paid_order_list_wrapper" style="padding-bottom:40px;">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("front/front_buyer/discount_dlg")
    @include("front/checkout/pay")
    @include("front/front_buyer/order_function")
    @include("front/front_buyer/order_evaluate_dlg")
    @include("front/front_buyer/order_evaluate_show_dlg")
    @include("front/front_buyer/save_seller_dlg")
    <script>
        $(function(){
            searchUnpaidOrderList(0);
            searchPaidOrderList(0);
        });

        function onSaveSeller(obj){
            var user_id = $(obj).attr("data-user-id");
            var seller_id = $(obj).attr("data-seller-id");
            $("#save_seller_dlg input[name='user_id']").val(user_id);
            $("#save_seller_dlg input[name='seller_id']").val(seller_id);
            $("#save_seller_dlg").modal("show");
        }

        function onEvaluateOrderView(obj){
            var mark = $(obj).attr("data-eval-mark");
            var msg = $(obj).attr("data-eval-msg");
            var i =0;
            $("#order_evaluate_show_dlg .star-ele").each(function(){

                if(parseInt(mark) > i){
                    $(this).removeClass("fa-star-o").addClass("fa-star");
                }else{
                    $(this).removeClass("fa-star").addClass("fa-star-o");
                }
                i++;
            });
            $("#order_evaluate_show_dlg #msg").text(msg);
            $("#order_evaluate_show_dlg").modal("show");
        }

        function onEvaluateOrder(obj){
            var id = $(obj).attr("data-order-id");
            $("#order_evaluate_dlg input[name='id']").val(id);
            $("#order_evaluate_dlg").modal("show");
        }
        function onPayUnpaidOrder(){
            var order_ids = "";
            $(".order-wrapper .order_check").each(function(){
                if($(this).prop("checked")){
                    order_ids += ("" == order_ids ? "": ",")+$(this).val();
                }
            });
            if(order_ids == ""){
                errorMsg("please check pay orders!");
                return;
            }

            var pay_type = $("input[name ='pay_type']:checked").val();
            if(pay_type == undefined){
                errorMsg("please  choose pay type !");
                return;
            }
            confirmMsg("Do you sure   pay to orders!", function(){
                payOrder(order_ids, pay_type);
            });

        }
        function checkUnpaidAll(obj){
            var checked = $(obj).prop("checked");
            $(".order-wrapper .order_check").prop("checked",checked);
        }

        function discountBuyerProposal(obj){
            var order_id = $(obj).attr("data-order-id");
            var param = new Object();
            param._token = _token;
            param.order_id = order_id
            $.post("{{url("front/my/order/discount_buy_proposal")}}", param, function(html){
                $("#discount_dlg #content").html(html);
                $("#discount_dlg ").modal("show");
            })
        }
        var unpaidPage = 0;
        function refreshUnpaidPage(){
            searchUnpaidOrderList(unpaidPage);
        }

        var paidPage = 0;
        function refreshPaidPage(){
            searchPaidOrderList(paidPage);
        }

        function searchUnpaidOrderList(page){
            unpaidPage = page;
            var param = new Object();
            var discountState = "0";
            if($("#unpaidDiscountState").length > 0){
                discountState = $("#unpaidDiscountState").val();
            }
            var unpaidSort = "1";
            if($("#unpaidSort").length > 0){
                unpaidSort = $("#unpaidSort").val();
            }
            param._token = _token;
            param.page = page;
            param.discountState = discountState;
            param.unpaidSort = unpaidSort;
            $.post("{{url("front/my/order/order_unpaid_list")}}", param, function(html){
               $("#unpaid_order_list_wrapper").html(html);
            });
        }

        function searchPaidOrderList(page){
            paidPage = page;
            var param = new Object();
            param._token = _token;
            param.page = page;
            var orderState = $("input[name='orderState']:checked").val();
            param.orderState = orderState;
            $.post("{{url("front/my/order/order_paid_list")}}", param, function(html){
                $("#paid_order_list_wrapper").html(html);
            });
        }
    </script>
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