@extends('layouts/default')

{{-- Page title --}}
@section('title')
Find product
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link href="{{asset('assets/css/find_products.css')}}" rel="stylesheet">
@stop
{{-- breadcrumb --}}
@section('top')

@stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <h2>Acer Casual Computing Laptops & Netbooks between RMB 2,500.00 and 2,528.00</h2>
        <div class = "hidden-xs col-lg-2">
            <div class = "row">
                <h3>Shop by category</h3>
                <div class = "find_product_category_title">
                    Computers, Tablets & Networks Hardware
                </div>
                <ul class = "find_product_category_ul">
                    <li class = "active">Laptops & Netbooks</li>
                    <li>Apple Laptops</li>
                    <li>PC Laptops & Netbooks</li>
                </ul>
            </div>
            <div class = "row">
                <h3>Brand<span class = "check-all">See all</span></h3>
                <div class = "col-xs-12">
                    <input type = "checkbox" checked />&nbsp;&nbsp;Acer
                </div>
            </div>
            <div class = "row">
                <h3>Most Suitable For<span class = "check-all">See all</span></h3>
                <div class = "col-xs-12">
                    <input type = "checkbox" checked />&nbsp;&nbsp;Casual Computing
                </div>
            </div>
            <div class = "row">
                <h3>Condition<span class = "check-all">See all</span></h3>
                <div class = "col-xs-12">
                    <input type = "checkbox" checked/>&nbsp;&nbsp;New
                </div>
            </div>
            <div class = "row">
                <h3>Price</h3>
                <div class = "col-xs-12" style = "padding-right:0px;">
                    <span>RMB</span><input class = "find_search_price_input" value = "2,500"/>&nbsp;&nbsp;-&nbsp;&nbsp;<span>RMB</span><input class = "find_search_price_input"  value = "2,528"/>
                    <i class = "fa  fa-chevron-right cursor"></i>
                </div>
            </div>
            <div class = "row">
                <h3>Buying Format<span class = "check-all">See all</span></h3>
                <div class = "col-xs-12">
                    <input type = "radio" checked/>&nbsp;&nbsp;All Listings
                </div>
                <div class = "col-xs-12">
                    <input type = "radio" />&nbsp;&nbsp;Auction
                </div>
                <div class = "col-xs-12">
                    <input type = "radio" />&nbsp;&nbsp;Buy it Now
                </div>
            </div>
            <div class = "row">
                <h3>Item Location<span class = "check-all">See all</span></h3>
                <div class = "col-xs-12">
                    <input type = "radio" />&nbsp;&nbsp;on Ebay.com
                </div>
                <div class = "col-xs-12">
                    <input type = "radio" />&nbsp;&nbsp;US Only
                </div>
                <div class = "col-xs-12">
                    <input type = "radio" />&nbsp;&nbsp;North America
                </div>
                <div class = "col-xs-12">
                    <input type = "radio" />&nbsp;&nbsp;Europe
                </div>
                <div class = "col-xs-12">
                    <input type = "radio" checked/>&nbsp;&nbsp;Asia
                </div>
            </div>
            <div class = "row">
                <h3>Delivery<span class = "check-all">See all</span></h3>
                <div class = "col-xs-12">
                    <input type = "checkbox" />&nbsp;&nbsp;Free information Shipping
                </div>
            </div>
            <div class = "row">
                <h3>Show only<span class = "check-all">See all</span></h3>
                <div class = "col-xs-12">
                    <input type = "checkbox" />&nbsp;&nbsp;Returns Accepted
                </div>
                <div class = "col-xs-12">
                    <input type = "checkbox" />&nbsp;&nbsp;Completed Items
                </div>
                <div class = "col-xs-12">
                    <input type = "checkbox" />&nbsp;&nbsp;Sold Accepted
                </div>
                <div class = "col-xs-12">
                    <input type = "checkbox" />&nbsp;&nbsp;Authorized Seller
                </div>
                <div class = "col-xs-12">
                    <input type = "checkbox" />&nbsp;&nbsp;Authenticity Verified
                </div>
            </div>
            <div class = "row">
                <a href="javascript:void(0);" onclick="moreSearch()"><h3 class="color-black">More refinements...</h3></a>
            </div>
        </div>
        <div class = "col-xs-12 col-lg-10" style = "padding-left:40px; padding-right:20px;">
            <div class = "row hidden">
                <div class = "my-alert-wrapper">
                    <span class = "my-info-span">i</span>
                    0 result found. try <a>Laptops & Netbooks</a>
                </div>
            </div>
            <div class = "row find_product_wrapper ">
                <div class = "header_find_products_wrapper mt-10">
                    <div class = "pull-left">
                        <div class="btn-group">
                            <a  href = "{{url("/find_products")}}" class="btn btn-default">All Listings</a>
                            <a href = "{{url("/find_products_auction")}}" class="btn btn-default active">Auction</a>
                            <a href = "#" class="btn btn-default">Buy It Now</a>
                        </div>
                    </div>
                    <div class = "pull-right">
                        <span style = "margin-right:10px;"> Sort</span>
                        <select class = "form-control" style = "display:inline-block; width:150px;">
                            <option value = "0">Best Match</option>
                            <option value = "1">Best Price</option>
                        </select>
                        <div class="input-group-btn" style = "display:inline-block;">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <span class = "fa fa-th-list"></span>
                                <span class="fa fa-caret-down"></span></button>
                            <ul class="dropdown-menu" style = "min-width:50px;">
                                <li><a href="#"><span class = "fa fa-list-ul"></span></a></li>
                                <li><a href="#"><span class = "fa fa-list"></span></a></li>
                                <li><a href="#"><span class = "fa fa-list-ol"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class = "clearfix"></div>
                <h3>3 items found eBay international sellers</h3>
                <ul class = "find_product_ul">
                    @for($i=0; $i <=2 ; $i++)
                    <li data-bid = "1">
                        <div class = "row">
                            <div class = "col-xs-4 ">
                                <div class = "find_product_img">
                                    <img src = "{{asset("/assets")}}/images/cart/big/1.jpg"/>
                                </div>
                            </div>
                            <div class = "col-xs-8">
                                <h3> <small class="badge badge-default">NEW LISTING </small>  Apple Iphone Xs Max Display Model Dummy Phone</h3>
                                <div class = "row" style = "margin-left:0px; margin-right:0px;">
                                    <span class = "product-detail">
                                        Condition is Used. Again this is not a working iPhone. this is for display purpose only
                                    </span>
                                </div>
                                <div class = "row" style = "margin-left:0px; margin-right:0px; margin-top: 10px;">
                                    <div class = "col-xs-4">
                                        <div class = "row">
                                            <span class = "big-price-span color-black" >RMB 35.56</span>
                                        </div>
                                        <div class = "row">
                                            <span>RMB 204.59 shipping</span>
                                        </div>
                                        <div class = "row color-blue mt-10 font-14">
                                            <span class = "fa fa-heart-o" ></span>
                                            <span>Watch</span>
                                        </div>
                                    </div>
                                    <div class = "col-xs-8">
                                        <div class = "row" style = "padding-bottom:5px;">1 bid</div>
                                        <div class = "row" style = "padding-bottom:5px;">4d 8h</div>
                                        <div class = "row" style = "padding-bottom:5px;">Brand:Apple</div>
                                        <div class = "row" style = "padding-bottom:5px;">Model:Apple iPhone XS Max</div>
                                        <div class = "row" style = "padding-bottom:5px;">Customs services and international tracking provided</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endfor
                </ul>
            </div>
        </div>
    </div>
    <div class="modal fade" id="more-search" tabindex="-1" role="dialog" aria-labelledby="addDlg" aria-hidden="true">
        <div class="modal-dialog modal-md " role="document">
            <div class="modal-content">
                <!--<div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div> -->
                <div class="modal-body row">
                    <div class="col-xs-3 pl-0 pr-0">
                        <ul class="more-search-option-wrapper">
                            <li class="more-search-option active" onclick="selectFilter(this)" target="brand-filter">
                                <i class="fa fa-check"></i><span>Brand</span>
                            </li>
                            <li class="more-search-option" onclick="selectFilter(this)" target="model-filter">
                                <i class="fa fa-check"></i><span>Model</span>
                            </li>
                            <li class="more-search-option" onclick="selectFilter(this)" target="condition-filter">
                                <i class="fa fa-check"></i><span>Condition</span>
                            </li>
                            <li class="more-search-option" onclick="selectFilter(this)" target="price-filter">
                                <i class="fa fa-check"></i><span>Price</span>
                            </li>
                            <li class="more-search-option" onclick="selectFilter(this)" target="format-filter">
                                <i class="fa fa-check"></i><span>Buying Format</span>
                            </li>
                            <li class="more-search-option" onclick="selectFilter(this)" target="location-filter">
                                <i class="fa fa-check"></i><span>Item Location</span>
                            </li>
                            <li class="more-search-option" onclick="selectFilter(this)" target="delivery-filter">
                                <i class="fa fa-check"></i><span>Delivery Options</span>
                            </li>
                            <li class="more-search-option" onclick="selectFilter(this)" target="show-filter">
                                <i class="fa fa-check"></i><span>Show only</span>
                            </li>
                            <li class="more-search-option" onclick="selectFilter(this)" target="seller-filter">
                                <i class="fa fa-check"></i><span>Seller</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-9 pt-10 pl-0 pr-0">
                        <div class="row ml-0 mr-0 pr-10">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="font-30" style="font-weight:100;">×</span>
                            </button>
                        </div>
                        <div class="row ml-0 mr-0 filter-content active" id="brand-filter">
                            <div class="col-xs-6">
                                <div class="row pl-0 pr-0"><input type="checkbox"><span class="pl-10">Apple</span></div>
                                <div class="row pl-0 pr-0"><input type="checkbox"><span class="pl-10">AT&T</span></div>
                                <div class="row pl-0 pr-0"><input type="checkbox"><span class="pl-10">BlackBerry</span></div>
                                <div class="row pl-0 pr-0"><input type="checkbox"><span class="pl-10">HTC</span></div>
                                <div class="row pl-0 pr-0"><input type="checkbox"><span class="pl-10">Huawei</span></div>
                                <div class="row pl-0 pr-0"><input type="checkbox"><span class="pl-10">LG</span></div>
                            </div>
                            <div class="col-xs-6">
                                <div class="row pl-0 pr-0"><input type="checkbox"><span class="pl-10">Nokia</span></div>
                                <div class="row pl-0 pr-0"><input type="checkbox"><span class="pl-10">Samsung</span></div>
                                <div class="row pl-0 pr-0"><input type="checkbox"><span class="pl-10">Sony Ericsson</span></div>
                                <div class="row pl-0 pr-0"><input type="checkbox"><span class="pl-10">Unbranded</span></div>
                                <div class="row pl-0 pr-0"><input type="checkbox"><span class="pl-10">ZTE</span></div>
                                <div class="row pl-0 pr-0"><input type="checkbox"><span class="pl-10">Not Specified</span></div>
                            </div>
                        </div>
                        <div class="row ml-0 mr-0 filter-content" id="model-filter">

                        </div>
                        <div class="row ml-0 mr-0 filter-content" id="condition-filter">

                        </div>
                        <div class="row ml-0 mr-0 filter-content" id="price-filter">

                        </div>
                        <div class="row ml-0 mr-0 filter-content" id="format-filter">
                            <div class="row pl-20 pr-10">
                                <div class="row pl-0 pr-0"><input type="radio"><span class="pl-10">All Listings</span></div>
                                <div class="row pl-0 pr-0"><input type="radio"><span class="pl-10">Best Offer</span></div>
                                <div class="row pl-0 pr-0"><input type="radio"><span class="pl-10">Auction</span></div>
                                <div class="row pl-0 pr-0"><input type="radio"><span class="pl-10">Buy it Now</span></div>
                                <div class="row pl-0 pr-0"><input type="radio"><span class="pl-10">Classified Ads</span></div>
                            </div>
                        </div>
                        <div class="row ml-0 mr-0 filter-content" id="location-filter">

                        </div>
                        <div class="row ml-0 mr-0 filter-content" id="delivery-filter">

                        </div>
                        <div class="row ml-0 mr-0 filter-content" id="show-filter">

                        </div>
                        <div class="row ml-0 mr-0 filter-content" id="seller-filter">

                        </div>
                        <div class="row ml-0 mr-0">
                            <ul class="filters-count-wrapper row ml-0 mr-0">
                                <li class="active pull-right color-blue">(2) Filter(s) selected <i class="fa fa-angle-double-down"></i></li>
                            </ul>
                            <ul class="selected-filters-wrapper row ml-0 mr-0">
                                <li id="Apple-filter-item">
                                    <div class="filter-item">
                                        <span>Apple</span>
                                        <span onclick="closeFilterItem(this)" target="Apple-filter-item"><i class="fa fa-close cursor pull-right"></i></span>
                                    </div>
                                </li>
                                <li id="Auction-filter-item">
                                    <div class="filter-item">
                                        <span>Auction</span>
                                        <span onclick="closeFilterItem(this)" target="Auction-filter-item"><i class="fa fa-close cursor pull-right"></i></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="pull-right filter-action color-blue">Apply</a>
                    <span class="pull-right color-blue" style="padding-top:5px;">|</span>
                    <a class="pull-right filter-action color-blue">Cancel</a>
                </div>
            </div>
        </div>
    </div>


@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script>
        function moreSearch(){
            if (!$("#more-search").hasClass("show")){
                $("#more-search").modal("toggle");
            }
        }
        function selectFilter(filter){
            $(".more-search-option").removeClass("selected");
            if($(filter).hasClass("active")){
                $(filter).removeClass("active");
            }else{
                $(filter).addClass("active");
                $(filter).addClass("selected");
            }
            var target = $(filter).attr("target");
            $(".filter-content").hide();
            $("#" + target).show();
        }
        function closeFilterItem(item){
            var target = $(item).attr("target");
            $("#" + target).remove();
        }
    </script>
@stop
