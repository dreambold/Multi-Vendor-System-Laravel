@extends('layouts/default_checkout')

{{-- Page title --}}
@section('title')
Find product
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link href="{{asset('assets/css/checkout.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/checkbox.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/slick/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/slick/slick-theme.css') }}">
@stop
{{-- breadcrumb --}}
@section('top')

@stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <h2><a href = "{{url("/")}}"><img role="presentation" width="200" height="60"  alt="Mega Bay Logo" src="{{asset("/assets")}}/img/logo.png" id="gh-logo"></a> Checkout</h2>
        <div class = "row">
            <div class = "container-wrapper">
                <div class = "pay_type_title_wrapper">
                    Pay with
                </div>
                <h3>Credit or debit card</h3>
                <ul class = "pay_type_wrapper">
                    <li>
                        <label>
                            <input type="checkbox" class="ace" name = "pay_type" value = "0">
                            <span class="lbl"><img src = "{{asset("/assets")}}/img/mastercard.png" style = "width:51px;"> Mega buy payment</span>
                        </label>
                    </li>
                    <li style = "height:70px; line-height:70px;">
                        * If you would discount the product buying, you do not check these items
                    </li>
                </ul>
            </div>
            <div class = "container-wrapper">
                <div class = "title_wrapper">
                    Ship to
                </div>
                <div class = "row ml-0 mr-0" id = "ship_info_wrapper" >
                    @include("front/checkout/ship_info")
                </div>
                <div style = "width:100%;"><a href = "javascript:void(0);"  class = "color-blue" onclick = "manageReceiveAddress();">change</a></div>
            </div>
            <div class = "container-wrapper">
                <div class = "title_wrapper">
                    Review item and shipping
                </div>
                @foreach($basketList as $key =>$item)
                    @if(is_numeric($key))
                        <div style = "padding-top:10px; padding-bottom:10px;">
                            <span style = "color:#989898;">Seller:&nbsp;{{$item[0]['seller']['first_name']}}@if($item[0]['seller']['first_name'] != "")  @endif {{$item[0]['seller']['last_name']}} &nbsp;&nbsp;| &nbsp;&nbsp;</span><a>Message to seller</a>
                        </div>
                        @foreach($item as $key1 => $item1)
                            <div class = "row border-bottom" style = "padding-bottom:10px; margin-bottom:10px;">
                                <div class = "col-xs-3 text-center">
                                    <img src = "{{correctImgPath($item1['img'])}}" style = "width:80px;">
                                </div>
                                <div class = "col-xs-9">
                                    <div class = "ship_description_wrapper">
                                        <span>
                                            {{$item1['title']}}
                                        </span>
                                    </div>
                                    <div class = "ship_price_wrapper">
                                        <span>US ${{number_format($item1['price']*$item1['product_count'],2)}}</span>
                                    </div>
                                    <div>
                                        <span>Quantity</span>
                                        <input type = "number" value = "{{$item1['product_count']}}" onchange="changeQty(this)" data-id = "{{$item1['basketId']}}" data-price = "{{$item1['price']}}" style = "width:80px; margin-left:10px;">
                                    </div>
                                    @if($item1['varirant_str'] <>'')
                                    <div style = "padding-top:10px; padding-bottom:10px;color:black; font-weight: bold;">
                                        Variant
                                    </div>
                                    <label>
                                        {{$item1['varirant_str']}}
                                    </label>
                                    @endif
                                    <div class = "hidden" style = "padding-top:10px;color:black; font-weight: bold;">
                                        Shipping
                                    </div>
                                    <label class = "hidden">
                                        <input type="radio" class="ace" name = "shipping_price">
                                        <span class="lbl">Economy international Shipping<br><span style = "margin-left:35px;">Free</span></span>
                                    </label>
                                    <label class = "hidden">
                                        <input type="radio" class="ace" name = "shipping_price">
                                        <span class="lbl">Economy international Shipping<br><span style = "margin-left:35px;">US $22.00</span></span>
                                    </label>
                                </div>
                            </div>
                        @endforeach
                        <div class = "hidden" style = "height:1px; background: #e2e2e2; "></div>
                    @endif
                @endforeach
            </div>
            <div class = "container-wrapper hidden">
                <div class = "title_wrapper">
                    Add coupons
                </div>
                <div class = "coupon_check_wrapper">
                    <label>
                        <input type="radio" class="ace" name = "shipping_price">
                        <span class="lbl">Coupon PCB163YHQ3<br><span style = "margin-left:30px;">Available : US $10.00</span></span>
                    </label>
                    <div>
                        <input class = "noborder" placeholder = "Enter code">
                        <button type = "button" >Apply</button>
                    </div>
                </div>
            </div>
            <div class = "container-wrapper hidden">
                <div style = "font-size: 16px; font-weight: bold;color: #5d5b5b; margin-bottom: 10px;">
                    <span>Donate to charity(optional)</span>
                </div>
                <div style = "font-size: 14px;  margin-bottom: 10px;">
                    <span>CureSearch for Children's Cancer</span>
                </div>
                <div>
                    <span>Donate S1 to CureSearch and help support children's cancer research</span>
                </div>
                <div style = "margin-top:20px;">
                    <span >Select amount</span>
                    <select class = "form-control" style = "width: 120px; display: inline-block;margin-left: 10px;">
                        <option value = "">none</option>
                    </select>
                </div>
            </div>
        </div>
        <div class = "row" style = "margin-left: 0px;margin-top: 30px;">
            copyright @ 1995-2009 mega buy All Right Reserve.
        </div>


    </div>

    <div class = "checkout_btn_wrapper">
        <div class="row text-right">
            <span>To add more items ,</span><a href = "{{url("front/basket/index")}}" style = "color:darkblue">go to cart</a>
        </div>
        <div class = "row">
            <div class = "first_wrapper">
                <div>
                    <span>Subtotal({{$basketList['itemCount']}} item)</span>
                    <span style = "float:right">US ${{$basketList['totalPrice']}}</span>
                </div>
                <div>
                    <span>Shipping</span>
                    <span style = "float:right">Free</span>
                </div>
            </div>
            <div class = "second_wrapper">
                <div>
                    <span>Order total</span>
                    <span style = "float:right">US ${{number_format($basketList['totalPrice']+$basketList['transPrice'],2)}}</span>
                </div>
            </div>
            <div class = "three_wrapper text-center">
                <button type = "button" onclick = "createOrder()" style = "width:90%; height:40px; line-height:40px;"><i class = "fa fa-lock"></i> Confirm and play</button>
            </div>
        </div>
    </div>
    <script>
        function changeQty(obj){
            var id = $(obj).attr("data-id");
            var num = $(obj).val();
            if(isNaN(num)) return;
            if(num <=0 ) {
                num = 1;
            }
            var param = new Object();
            param._token = _token;
            param.id = id;
            param.product_count = num;
            $.post("{{url("front/basket/ajaxSaveBasketInfo")}}", param, function(data){
                if(data.status == "1"){
                    window.location.reload();
                }else{
                    errorMsg(data.msg);
                }
            }, "json");
        }



        function refreshShipAddress(){
            var param = new Object();
            param._token = _token;
            $.post("{{url("front/user_receive_address/ajaxGetActiveInfo")}}", param, function(html){
                $("#ship_info_wrapper").html(html);
            });
        }

        function manageReceiveAddress(){
            var param = new Object();
            param._token = _token;
            $.post("{{url("front/user_receive_address/ajaxList")}}", param, function(html){
                $("#user_receive_address_dlg #content").html(html);
                $("#user_receive_address_dlg").modal("show");
            });

        }

        function refreshUserReceiveAddressList(){
            var param = new Object();
            param._token = "{{csrf_token()}}";
            $.post("{{url("front/user_receive_address/ajaxList")}}", param, function(html){
                $("#user_receive_address_dlg #content").html(html);
                $("#user_receive_address_edit_dlg").modal("hide");
            });
        }

        function onDelUserReceiveAddress(id){
            confirmMsg("Do you sure Delete!", function(){
                var param = new Object();
                param._token = _token;
                param.id =id;
                $.post("{{url("front/user_receive_address/ajaxDeleteInfo")}}", param, function(data){
                    setTimeout(function(){
                        if(data.status == "1"){
                            refreshUserReceiveAddressList();
                        }else{
                            errorMsg(data.msg);
                        }
                    },1000);
                },"json");
            })
        }

        function onUserReceiveAddressSetActive(id){
            var param = new Object();
            param._token = _token;
            param.id =id;
            $.post("{{url("front/user_receive_address/ajaxSetActive")}}", param, function(data){
                if(data.status == "1"){
                    refreshShipAddress();
                    refreshUserReceiveAddressList();
                }else{
                    errorMsg(data.msg);
                }
            },"json");
        }

        function createOrder(){

            confirmMsg("Do you sure create order!", function(){
                var param = new Object();
                param._token = _token;
                param.immeditaly_type = "{{$immeditaly_type}}";
                var orderIds = "";
                $.post("{{url("front/checkout/createOrder")}}", param, function(data){
                    console.log(3);
                    setTimeout(function(){
                        if(data.status == "1"){
                            orderIds = data.orderIds;
                            var pay_type = $("input[name='pay_type']:checked").val();
                            if(pay_type==undefined){
                                successMsg("your orders has created move  to order page !", function(){
                                   window.location.href = "{{url("front/my/activity_purchase_history")}}";
                                });
                            }else{
                                setTimeout(function(){
                                    confirmMsg1("Do you sure continue  pay to order!", function(){
                                        alert("here pay module");
                                        payOrder(orderIds, pay_type);
                                    }, function(){
                                        window.location.href = "{{url("front/my/activity_purchase_history")}}";
                                    });
                                }, 1000);
                            }
                           
                        }else{
                            errorMsg(data.msg);
                        }
                    },1000);
                },"json");
            })
        }

    </script>
    @include("front/user_receive_address/user_receive_address_dlg");
    @include("front/checkout/pay");
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/js/common.js') }}"></script>
@stop
