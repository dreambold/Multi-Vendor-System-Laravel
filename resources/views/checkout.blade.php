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
@stop
{{-- breadcrumb --}}
@section('top')

@stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <h2><img role="presentation" width="129" height="60"  alt="mega bay Logo" src="{{asset("/assets")}}/img/logo.png" id="gh-logo"> Checkout</h2>
        <div class = "row">
            <div class = "container-wrapper">
                <div class = "pay_type_title_wrapper">
                    Pay with
                </div>
                <h3>Credit or debit card</h3>
                <ul class = "pay_type_wrapper">
                    <li>
                        <label>
                            <input type="radio" class="ace" name = "pay_type">
                            <span class="lbl"><img src = "{{asset("/assets")}}/img/mastercard.png" style = "width:51px;"></span>
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="radio" class="ace" name = "pay_type">
                            <span class="lbl"><img src = "{{asset("/assets")}}/img/paypal2.png" style = "width:51px;"></span>
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="radio" class="ace" name = "pay_type">
                            <span class="lbl"><img src = "{{asset("/assets")}}/img/american-express.png" style = "width:51px;"></span>
                        </label>
                    </li>
                </ul>
            </div>
            <div class = "container-wrapper">
                <div class = "title_wrapper">
                    Ship to
                </div>
                <ul class = "ship_ul">
                    <li>jin weiguo</li>
                    <li>beilu</li>
                    <li>shanghai 上海 20063</li>
                    <li>China</li>
                    <li>13xxxxx25</li>
                    <li><a>change</a></li>
                </ul>
            </div>
            <div class = "container-wrapper">
                <div class = "title_wrapper">
                    Review item and shipping
                </div>
                <div style = "padding-top:10px; padding-bottom:10px;">
                    <span style = "color:#989898;">Seller:&nbsp;kriswatches &nbsp;&nbsp;| &nbsp;&nbsp;</span><a>Message to seller</a>
                </div>
                <div class = "row">
                    <div class = "col-xs-3 text-center">
                        <img src = "{{asset("/assets")}}/images/cart/big/1.jpg" style = "width:80px;">
                    </div>
                    <div class = "col-xs-9">
                        <div class = "ship_description_wrapper">
                            <span>
                                Citizen NH 8354-58A Men Automatic Stainless Steel Analog White Day Date Watch
                            </span>
                        </div>
                        <div class = "ship_price_wrapper">
                            <span>US $134.54</span>
                        </div>
                        <div>
                            <span>Quantity</span>
                            <input type = "number" value = "1" style = "width:80px; margin-left:10px;">
                        </div>
                        <div style = "padding-top:10px; padding-bottom:10px;color:black; font-weight: bold;">
                            Shipping
                        </div>
                        <label>
                            <input type="radio" class="ace" name = "shipping_price">
                            <span class="lbl">Economy international Shipping<br><span style = "margin-left:35px;">Free</span></span>
                        </label>
                        <label>
                            <input type="radio" class="ace" name = "shipping_price">
                            <span class="lbl">Economy international Shipping<br><span style = "margin-left:35px;">US $22.00</span></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class = "container-wrapper">
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
            <div class = "container-wrapper">
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
            <span>To add more items ,</span><a href = "{{url("/cart")}}" style = "color:darkblue">go to cart</a>
        </div>
        <div class = "row">
            <div class = "first_wrapper">
                <div>
                    <span>Subtotal(1 item)</span>
                    <span style = "float:right">US $17.99</span>
                </div>
                <div>
                    <span>Shipping</span>
                    <span style = "float:right">Free</span>
                </div>
            </div>
            <div class = "second_wrapper">
                <div>
                    <span>Order total</span>
                    <span style = "float:right">US $17.99</span>
                </div>
            </div>
            <div class = "three_wrapper text-center">
                <button type = "button" style = "width:90%; height:40px; line-height:40px;"><i class = "fa fa-lock"></i> Confirm and play</button>
            </div>
        </div>
    </div>
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
