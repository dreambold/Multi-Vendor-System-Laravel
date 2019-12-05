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
        <h2>
            {{$search_title}}
        </h2>
        <div class = "hidden-xs col-lg-2">
            <div class = "row">
                <h3>Shop by category</h3>
                @foreach($categoryList as $key => $category)
                <div class = "find_product_category_title cursor"  onclick = "categoryClick(this)">
                    {{$category['title']}}
                </div>
                <ul class = "find_product_category_ul  @if(isset($selCategory) && (find_in_set($category['id'],$selCategory['parent_ids'] ))) active @else hidden @endif">
                    @foreach($category['leavedCategoryList'] as $item)
                    <li class = "@if(isset($selCategory) && $selCategory['id'] == $item['id']) active @endif cursor find_product_category_ul_item" data-id = "{{$item['id']}}" onclick = "categoryItemClick(this)">{{$item['title']}}</li>
                    @endforeach
                </ul>
                @endforeach
            </div>
            <div class = "row">
                <h3>Brand<span class = "check-all hidden">See all</span></h3>
                @foreach($brandList as $brand)
                    <div class = "col-xs-12">
                        <input type = "checkbox" class="brand-check" value="{{$brand['id']}}" name="brand_key"
                        @if(in_array($brand['id'],explode(",", $brand_key)))
                            checked
                        @endif>&nbsp;&nbsp;{{$brand["title"]}}
                    </div>
                @endforeach
            </div>
            <div class = "row hidden">
                <h3>Most Suitable For<span class = "check-all hidden">See all</span></h3>
                <div class = "col-xs-12">
                    <input type = "checkbox">Casual Computing
                </div>
            </div>
            <div class = "row">
                <h3>Condition<span class = "check-all hidden">See all</span></h3>
                @foreach($conditionList as $key => $value)
                <div class = "col-xs-12">
                    <input type = "checkbox" class="condition-check" value="{{$key}}" name="condition_key"
                           @if(in_array(trim($key),explode(",", $condition_key)))
                        checked
                    @endif>&nbsp;&nbsp;{{$value}}
                </div>
                @endforeach
            </div>
            <div class = "row">
                <h3>Price</h3>
                <div class = "col-xs-12" style = "padding-right:0px;">
                    <span>$</span><input class = "find_search_price_input" value = "{{number_format($price_from_key, 2)}}" id="price_from_key">&nbsp;&nbsp;-&nbsp;&nbsp;<span>$</span><input class = "find_search_price_input"  value = "{{number_format($price_to_key, 2)}}" id="price_to_key">
                    <i class = "fa  fa-chevron-right cursor" onclick="onSearchByPrice()"></i>
                </div>
            </div>
            <div class = "row hidden">
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
            <div class = "row hidden">
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
            <div class = "row hidden">
                <h3>Delivery<span class = "check-all">See all</span></h3>
                <div class = "col-xs-12">
                    <input type = "checkbox" />&nbsp;&nbsp;Free information Shipping
                </div>
            </div>
            <div class = "row hidden">
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
            @if(Sentinel::getUser())
            <div class = "row mt-20">
                <button class="btn btn-responsive button-alignment btn-primary" onclick="onSaveSearch()">Save Search</button>
                {{--<a href="javascript:void(0);" onclick="moreSearch()"><h3 class="color-black">More refinements...</h3></a>--}}
            </div>
             @endif
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
                    <div class = "pull-left hidden">
                        <div class="btn-group">
                            <a  href = "{{url("/find_products")}}" class="btn btn-default active">All Listings</a>
                            <a href = "{{url("/find_products_auction")}}" class="btn btn-default">Auction</a>
                            <a href = "#" class="btn btn-default">Buy It Now</a>
                        </div>
                    </div>
                    <div class = "pull-right hidden">
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
                <h3>{{$total_count}} items found MegaBay international sellers</h3>
                <ul class = "find_product_ul">
                    @foreach($productList as $product)
                    <li onclick="gotoProductDetail('{{$product['id']}}')" class="cursor">
                        <div class = "row">
                            <div class = "col-xs-4 ">
                                <div class = "find_product_img">
                                    @if($product['img'] != "")
                                        <img src="{{asset($product['img'])}}">
                                    @else
                                        <img src="{{asset('assets/images/default_no_image.jpg')}}">
                                    @endif
                                </div>
                            </div>
                            <div class = "col-xs-8">
                                <h3>{{$product["title"]}}</h3>
                                <div class = "row" style = "margin-left:0px; margin-right:0px;">
                                    <span class = "product-detail">
                                        {{$product["subtitle"]}}
                                    </span>
                                </div>
                                <div class = "row" style = "margin-left:0px; margin-right:0px; margin-top: 10px;">
                                    <div class = "col-xs-6">
                                        <div class = "row">
                                            <span class = "big-price-span">$ {{number_format($product['price'], 2)}}</span>
                                        </div>
                                        <div class = "row">
                                            <span>Quantity: <span style = "color:darkblue;">{{$product['quantity']-$product['sell_count']}}</span> Remain</span>
                                        </div>
                                    </div>
                                    <div class = "col-xs-6">
                                        <div class = "row">
                                            <i class = "fa fa-money" style = "color: #5a3610;"></i> Top Rated Seller
                                        </div>
                                        @if(isset($product["brand"]["title"]))
                                        <div class = "row">
                                            Brand: {{$product["brand"]["title"]}}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    <div class = "text-right" style = "margin-top:10px;">
                        <?php $searchFun = "searchProduct";?>
                        @include("layouts/pagination")
                    </div>
                </ul>
            </div>
        </div>
    </div>
    <div class="modal fade" id="more-search" tabindex="-1" role="dialog" aria-hidden="true">
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
                            @foreach($brandList as $brand)
                                <div class="col-xs-6">
                                    <div class="row pl-0 pr-0"><input type="checkbox"><span class="pl-10">{{$brand['title']}}</span></div>
                                </div>
                            @endforeach
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
                            <ul class="selected-filters-wrapper row ml-0 mr-0" id="filter-items">
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
                            <li id="sample-filter-item">
                                <div class="filter-item">
                                    <span>Apple</span>
                                    <span onclick="closeFilterItem(this)" target="Apple-filter-item"><i class="fa fa-close cursor pull-right"></i></span>
                                </div>
                            </li>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="pull-right filter-action color-blue" href="javascript:void(0);" id="filter-apply">Apply</a>
                    <span class="pull-right color-blue" style="padding-top:5px;">|</span>
                    <a class="pull-right filter-action color-blue" href="javascript:void(0);" id="filter-cancel">Cancel</a>
                </div>
            </div>
        </div>
    </div>


@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script>
        function categoryItemClick(obj){
            $(".find_product_category_ul_item").removeClass("active");
            $(obj).addClass("active");
            searchProduct();
        }
        function categoryClick(obj){
            var ulObj = $(obj).next();
            if(ulObj.hasClass("hidden")){
                ulObj.removeClass("hidden");
            }else{
                ulObj.addClass("hidden");
            }
        }
        $("#filter-cancel").on('click', function(){
            $("#more-search").modal("toggle");
        });
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
        // @param : filter name - ex) Apple
        function onSelectFilter(filter){
            var id = filter + "-filter-item";
            $("#filter-items").append($("#sample-filter-item").clone().attr("id",id));
            $("#" + id + " span:first-child").html(filter);
            $("#" + id + " span").attr("target", id);
        }

        function gotoProductDetail(id){
            window.location.href = "{{url("front/product")}}/" + id;
        }

        function onSearchByPrice(){
            $("#search_price_from_key").val($("#price_from_key").val());
            $("#search_price_to_key").val($("#price_to_key").val());
            searchProduct();
        }
        function onSaveSearch(){
            var brand_key = $("#search_brand_key").val();
            var condition_key = $("#search_condition_key").val();
            var price_from_key = $("#search_price_from_key").val();
            var price_to_key = $("#search_price_to_key").val();
            var category_id = 0;
            if($(".find_product_category_ul_item.active").length>0){
                category_id = $(".find_product_category_ul_item.active").attr("data-id");
            }

            if(price_from_key > price_to_key){
                errorMsg("Please input correct price");
                return;
            }
            $.post("{{url("front/save_search")}}", {
                "_token" : _token,
                "search_key":$("#gh-ac").val(),
                "brand_key" : brand_key,
                "condition_key":condition_key,
                "price_from_key" : price_from_key,
                "price_to_key" : price_to_key,
                "category_id" : category_id
            }, function(resp){
                if(resp.status == "1"){
                    successMsg("Search is saved successfully");
                }else{
                    errorMsg("The operation is failed.");
                }
            }, "json");
        }
        $(".brand-check").on("click", function(e){
            var value = "";
            $(".brand-check").each(function(obj){
                if($(this).prop("checked")){
                    if(value == "")
                        value = $(this).val();
                    else{
                        value = value + "," + $(this).val();
                    }
                }
            });
            $("#search_brand_key").val(value);
            searchProduct();
        });

        $(".condition-check").on("click", function(e){
            var value = "";
            $(".condition-check").each(function(obj){
                if($(this).prop("checked")){
                    if(value == "")
                        value = $(this).val();
                    else{
                        value = value + "," + $(this).val();
                    }
                }
            });
            $("#search_condition_key").val(value);
            searchProduct();
        });


    </script>
@stop
