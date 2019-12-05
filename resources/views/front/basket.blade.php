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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/slick/slick-theme.css') }}">
    <!--end of page level css-->
@stop

{{-- slider --}}
@section('top')

@stop
<style>
    #relationSlick{
        height:130px;
    }
</style>
{{-- content --}}
@section('content')
    <div class="container">
        <div class="row ml-0 mr-0 mt-20">
            <span class="font-24 bold color-black">Shopping cart ({{$basketList['itemCount']}} item)</span>
            <span class="font-14 color-blue bold pull-right hidden" style="padding-right:14px;">Send Us Your Commnets</span>
        </div>
        <div class="row ml-0 mr-0 mt-10">
            <div class="col-md-8 col-xs-12 pl-0 mt-10">
                <div id = "basket-list-wrapper">
                    @foreach($basketList as $key =>$item)
                        @if(is_numeric($key))
                            <div class="standard-wrapper">
                                <div class="row ml-0 mr-0 pb-10 border-bottom">
                                    <span class="font-18 color-black bold">Seller <u>{{$item[0]['seller']['first_name']}}@if($item[0]['seller']['first_name'] != "")  @endif {{$item[0]['seller']['last_name']}}</u></span>
                                    <span class="font-14 pull-right color-black">Request total <i class="fa fa-info-circle"></i>&nbsp;{{count($item)}}</span>
                                </div>
                                @foreach($item as $key1 => $item1)
                                    <div class="row ml-0 mr-0 mt-10 border-bottom">
                                        <div class="col-md-6 col-xs-12 pl-0 pr-0" style="float:left;">
                                            <div class="float-left">
                                                <img src="{{correctImgPath($item1['img'])}}" class="product-img-md">
                                            </div>
                                            <div class="float-left pl-10 product-detail-md mt-10">
                                                <div class="row ml-0 mr-0">
                                                    <span class="color-black font-12 bold">{{$item1['title']}}</span>
                                                </div>
                                                <div class="row ml-0 mr-0">
                                                    <span class="font-12">{{$item1['subtitle']}}</span>
                                                </div>
                                                <div class="row ml-0 mr-0 mt-10">
                                                    <span class="font-12">{{$item1['varirant_str']}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 pl-0 pr-0 mt-10">
                                            <div class="col-xs-6 pl-0 pr-0">
                                                <div class="row ml-0 mr-0 width-100">
                                                    <input class="input-small pull-right text-center basket-product" onchange="changeQty(this)" data-id = "{{$item1['basketId']}}" data-price = "{{$item1['price']}}"  type = "number" value = "{{$item1['product_count']}}">


                                                    <span class="font-14 bold pull-right">Qty</span>
                                                </div>
                                                <div class="row ml-0 mr-0 mt-10 width-100">
                                                    <span class="font-12 pull-right">Economy International</span>
                                                </div>
                                                <div class="row ml-0 mr-0"><span class="font-12 pull-right">Shipping</span></div>
                                            </div>
                                            <div class="col-xs-6 pl-0 pr-0">
                                                <div class="row ml-0 mr-0 width-100">
                                                    <span class="font-18 bold color-black pull-right">US ${{$item1['totalPrice']}}</span>
                                                </div>
                                                <div class="row ml-0 mr-0 mt-10 width-100">
                                                    <span class="font-12 pull-right">Free shipping</span>
                                                </div>
                                                <div class="row ml-0 mr-0 width-100" style="margin-top:100px;">
                                                    <a href="javascript:void(0)" class="pull-right font-14 color-blue" onclick = "delInfo(this)" data-id = "{{$item1['basketId']}}" >Remove</a>
                                                    <span class="font-14 pull-right pl-10 pr-10 hidden">|</span>
                                                    <a href="#" class="pull-right font-14 color-blue hidden">Save for later</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="standard-wrapper mt-20">
                    <div class="row ml-0 mr-0 pb-10">
                        <span class="font-18 color-black bold">Related Sponsored Items</span>
                    </div>
                    <div class="row ml-0 mr-0 mt-10">
                        <div id = "relationSlick">
                        @foreach($relationList as $item)
                            <div class="float-left pr-10">
                                <a href = "{{url("front/product/".$item['id'])}}" >
                                    <img src="{{correctImgPath($item['img'])}}" class="product-img-md">
                                </a>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 mt-10">
                <div class="standard-wrapper">
                    <div class="row text-center ml-0 mr-0">
                        <input type="button" class="btn-checkout" onclick = "window.location.href = '{{url("/front/checkout/index")}}?immeditaly_type={{$immeditaly_type}}'" value="Go to checkout">
                    </div>
                    <div class="row ml-0 mr-0 mt-10">
                        <span class="font-12">Item {{$basketList['itemCount']}}</span>
                        <span class="font-12 pull-right">US ${{$basketList['totalPrice']}}</span>
                    </div>
                    <div class="row ml-0 mr-0 pb-10 border-bottom mt-10">
                        <span class="font-12">Shipping <i class="fa fa-info-circle"></i></span>
                        <span class="font-12 pull-right">Free</span>
                    </div>
                    <div class="row ml-0 mr-0 mt-10">
                        <span class="font-16 bold">Total</span>
                        <span class="font-16 bold pull-right">US ${{$basketList['basketPrice']}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
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
        param.immeditaly_type = "{{$immeditaly_type}}";
        $.post("{{url("front/basket/ajaxSaveBasketInfo")}}", param, function(data){
            if(data.status == "1"){
                window.location.reload();
            }else{
                if(num >1){
                    $(obj).val(num-1);
                }
                errorMsg(data.msg);

            }
        }, "json");
    }

    function delInfo(obj){
        confirmMsg("Do you sure delete!", function(){
            var id = $(obj).attr("data-id");
            var param = new Object();
            param._token = _token;
            param.id = id;
            $.post("{{url("front/basket/ajaxDeleteInfo")}}", param, function(data){
                if(data.status == "1"){
                    window.location.reload();
                }else{
                    errorMsg(data.msg);
                }
            }, "json");
        })

    }
</script>

@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.circliful.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" ></script>
    <script type="text/javascript" src="{{asset('assets/slick/slick.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/index.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/common.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/basket.js') }}"></script>
    <!--page level js ends-->
@stop