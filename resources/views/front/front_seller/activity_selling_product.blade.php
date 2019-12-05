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
                    <form id = "searchForm" action = "{{url("front/my/seller/activity_selling_drafts")}}" >
                        <input type = "hidden" name = "page" value = "{{$pageParam['pageNo']}}"/>
                    </form>
                    <div class="col-md-10 my-ebay-content col-xs-12 pl-0 pr-0 active">
                        @foreach($list as $item)
                        <div class="row ml-0 mr-0 mt-20">
                            <div class="col-md-6 pl-0 display-flex">
                                <div class="display-inline top-align">
                                    <input type="checkbox" class="checkbox-inline mt-0 hidden">
                                </div>
                                <div class="display-inline ml-20">
                                    <img class="border-rect size-150 cursor" src="{{correctImgPath($item['img'])}}">
                                </div>
                                <div class="display-inline top-align ml-20">
                                    <p class="color-blue font-12 mb-0">{{$item['title']}}</p>
                                    <p class="font-10 mb-0">( {{$item['category']['path']}} )</p>
                                    <span class="color-blue font-10">{{$item['subtitle']}}</span>
                                    <span class="font-10 mlr-5">|</span>
                                    <span class="color-blue font-10">{{$item['quantity']}}</span>
                                    <p class="font-10 mb-0">sku count: {{$item->getVariantCount($item['id'])}}</p>
                                    <p class="font-10 color-red mb-0">Over {{$item['quantity']}} products</p>
                                </div>
                            </div>
                            <div class="col-md-6 text-right">
                                <div class="display-inline ml-10 top-align">
                                    <p class="color-black font-12 mb-0 text-right">{{$item['brand']['title']}}</p>
                                    <p class="font-12 mb-0 text-right">{{getProductConditionTitle($item['condition'])}}</p>
                                </div>
                                <div class="display-inline ml-20 top-align">
                                    <p class="font-14 bold color-green mb-0 text-right">$ {{$item['price']}}</p>
                                    <p class="font-10 text-right">Buy It Now or Best offer</p>
                                    <p class="font-10 mb-0 text-right">Free shipping</p>
                                </div>
                                <div class="display-inline ml-20 top-align">
                                    <div class="row ml-0 mr-0">
                                        <button class="visit-btn" type = "button" data-id = "{{$item['id']}}" onclick = "setOfflineProduct(this)">Offline It Now</button>
                                    </div>
                                    <div class="row ml-0 mr-0 ">
                                        <a href = "{{url("front/sell?id=")}}{{$item['id']}}" class="font-10 color-blue">Edit item</a>
                                        | <a href = "javascript:void(0);" data-id = "{{$item['id']}}" onclick = "deleteProduct(this)" class="font-10 color-blue">Delete item</a>
                                    </div>
                                    <div class="row ml-0 mr-0 hidden">
                                        <select class="font-10 border-none pr-0">
                                            <option>More actions</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class = "text-right" style = "margin-top:10px;">
                            @include("layouts/pagination")
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function setOfflineProduct(obj){
            confirmMsg("Do you sure this operation", function(){
                setTimeout(function(){
                    var url = "{{url("front/product/ajaxUpdateProductInfo")}}";
                    var param = new Object();
                    param._token = _token;
                    param.id = $(obj).attr("data-id");
                    param.state = 0;
                    $.post(url, param, function(data){
                        if(data.status == "1"){
                            successMsg(data.msg, function(){
                                window.location.reload();
                            });
                        }else{
                            errorMsg(data.msg);
                        }
                    }, "json");
                }, 1000);
            });
        }

        function deleteProduct(obj){
            confirmMsg("Do you sure this operation", function(){
                setTimeout(function(){
                    var url = "{{url("front/product/ajaxDeleteProductInfo")}}";
                    var param = new Object();
                    param._token = _token;
                    param.id = $(obj).attr("data-id");
                    $.post(url, param, function(data){
                        if(data.status == "1"){
                            successMsg(data.msg, function(){
                                window.location.reload();
                            });
                        }else{
                            errorMsg(data.msg);
                        }
                    }, "json");
                }, 1000);
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