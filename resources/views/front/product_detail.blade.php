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
            <ol class="breadcrumb breadcrumb-path">
                <li class="hidden-xs"><a href = "javascript:void(0);" href1="/front/index">MegaBuy</a></li>
                @foreach($parentPath as $parent)
                    <li class="hidden-xs"><i class="fa fa-chevron-right" style="font-size: 10px;"></i><a href = "javascript:void(0);" href1="{{url("/front/category/")}}{{$parent['id']}}/0">{{$parent["title"]}}</a></li>
                @endforeach
            </ol>
            <div class="pull-right hidden">
                <a class="color-blue font-14 bold" href="javascript:void(0);">Share</a>
            </div>
        </div>
        <div class="row ml-0 mr-0">
            <p class="product-title">
                {{$productInfo['title']}}
            </p>
        </div>
        @if($productInfo['seller'])
        <div class="row ml-0 mr-0">
            <div class="product-rate font-14">
                <?php $avg_mark = $productInfo['seller']->getAvgMark();?>
                @for($i=1; $i<=5; $i++)
                <i class="fa <?php if($avg_mark*1 >= $i ) echo "fa-star" ; else echo "fa-star-o"; ?> text-brown"></i>
                @endfor
                <a class="color-blue pl-10">{{$productInfo['seller']->getProductCount()}} product ratings</a>
                <span class="pl-10 color-blue hidden">|</span>
                <a class="color-blue pl-10 hidden">About this product</a>
            </div>
        </div>
        @endif
        <div class="row ml-0 mr-0 mt-10 product-brand">
            <div class="tabbable-line">
                <ul class="nav nav-tabs hidden">
                    <li class="active brand-tab">
                        <a href="#brand1" class="bg-white brand-link" data-toggle="tab"> Your pick ${{$productInfo["price"]}}</a>
                    </li>
                    <li class="brand-tab hidden">
                        <a href="#brand2" class="bg-white brand-link" data-toggle="tab"> Brand new RMB 838.46 </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="brand1">
                        <div class="col-md-5 col-xs-12">
                            <div class="product-small-image-wrapper" id="gal1">
                                <div class="product-small-image">
                                    @if($productInfo['img'] == "")
                                        <a href="javascript:void(0);" data-image="{{asset("assets/images/default_no_image.jpg")}}" data-zoom-image="{{asset("assets/images/default_no_image.jpg")}}">
                                            <img id="img_01" src="{{asset("assets/images/default_no_image.jpg")}}" class="img-responsive" />
                                        </a>
                                    @else
                                        <a href="javascript:void(0);" data-image="{{asset($productInfo['img'])}}" data-zoom-image="{{asset($productInfo['img'])}}">
                                            <img id="img_01" src="{{asset($productInfo['img'])}}" class="img-responsive" />
                                        </a>
                                    @endif
                                </div>
                                @foreach($productImgInfo as $productImg)
                                    <div class="product-small-image">
                                        @if($productImg['img'] == "")
                                            <a href="javascript:void(0);" onclick="" data-image="{{asset("assets/images/default_no_image.jpg")}}" data-zoom-image="{{asset("assets/images/default_no_image.jpg")}}">
                                                <img id="img_02" src="{{asset("assets/images/default_no_image.jpg")}}" class="img-responsive" />
                                            </a>
                                        @else
                                            <a href="javascript:void(0);" onclick="" data-image="{{asset($productImg['img'])}}" data-zoom-image="{{asset($productImg['img'])}}">
                                                <img id="img_02" src="{{asset($productImg['img'])}}" class="img-responsive" />
                                            </a>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                            <div class="product_wrapper product-image-wrapper">
                                <div class="product-hint hidden">11 watches</div>
                                @if($productInfo['img'] == "")
                                    <img id="zoom_09" src="{{asset("assets/images/default_no_image.jpg")}}" data-zoom-image="{{asset("assets/images/default_no_image.jpg")}}" class="img-responsive" />
                                @else
                                    <img id="zoom_09" src="{{asset($productInfo['img'])}}" data-zoom-image="{{asset($productInfo['img'])}}" class="img-responsive" />
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12 mt-10">
                            <div class="row ml-0 mr-0"><span class="font-16 bold">Your pick</span></div>
                            <div class="row ml-0 mr-0"><span class="font-30 bold" id="product-price">$ {{$productInfo["price"]}}</span> @if($productInfo['retail_price']*1 !=0)<del style="margin-left: 30px;color: darkred;">$ {{$productInfo['retail_price']}}</del>@endif</div>
                            <div class="row ml-0 mr-0"><span class="font-14 bold ">{{$productInfo['sell_count']}} Shipping </span></div>
                            <div class="row ml-0 mr-0"><span class="font-14 bold ">{{$productInfo['quantity']-$productInfo['sell_count']}} Remain</span></div>
                            <div class="row ml-0 mr-0"><span class="font-14 bold hidden">US $119.00</span></div><br>
                            <div class="row ml-0 mr-0"><span class="font-14 bold hidden">Get it by Thu, Sep 19-Tue, Oct 29 from Huntington, New York</span></div>
                            <ul class="product-condition-wrapper">
                                <li>
                                    <span class="font-12 bold">
                                        @if($productInfo["condition"] == 0) general with tags condition @endif
                                        @if($productInfo["condition"] == 1) new with tags condition @endif
                                        @if($productInfo["condition"] == 2) unused with tags condition @endif
                                    </span>
                                </li>
                                <li class = "hidden"><span class="font-12 bold" >No returns, but backed by </span><a href="#"><span class="color-blue bold">MegaBuy Moeny back guarantee</span></a></li>
                            </ul>
                            <div class="row ml-0 mr-0 hidden">
                                <span class="font-14 bold font-italic" style="word-break:break-all;">
                                    "{{$commentInfo}}"
                                </span>
                            </div>
                            <div class="row ml-0 mr-0 variant-wrapper">
                                @foreach($productVariant as $key => $variant)
                                    <button price="{{$variant['variantInfo']['price']}}" data-id="{{$variant['variantInfo']['id']}}" class="variant-btn mt-10
                                        @if($key == 0)
                                            active
                                        @endif">{{$variant['attrVal']}}</button>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12 mt-10 pr-0">
                            <form id="cart_form">
                                <input type="text" class="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="product_id" value="{{$productInfo['id']}}">
                                <input type="hidden" name="sku_id"
                                       @if(isset($productVariant[0])))
                                        value="{{$productVariant[0]['variantInfo']['id']}}"
                                       @else
                                        value="0"
                                       @endif
                                       id="sku_id">
                                <input type="hidden" name="supplier_id" value="{{$productInfo['seller_id']}}">
                                <input type="hidden" name="immeditaly_type" value="0" id="immeditaly_type">
                                <div class="row ml-0 mr-0"><span class="font-16 bold pull-right">Quantity</span></div>
                                <input type="number" class="form-control mt-10" name="product_count" id="product_count" value = "1">
                                <input type="button" class="product-act-btn mt-20" onclick = "onBuyProduct()" value="Buy It Now">
                                <input type="button" class="product-act-btn mt-20" value="Add to Cart" onclick="onAddCart()">
                                <div class="row ml-0 mr-0 mt-20 hidden"><span class="font-14 bold">Sold by</span></div>
                                <div class="row ml-0 mr-0 hidden"><span class="font-14 bold color-blue">{{$userInfo['full_name']}} ({{$orderCount}})</span></div>
                                <div class="row ml-0 mr-0 hidden"><span class="font-14 bold">100.0% Positive feedback</span></div>
                                <div class="row ml-0 mr-0 hidden"><a href="#"><span class="font-14 bold color-blue">Contact seller</span></a></div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane active" id="brand2">

                    </div>
                </div>
            </div>
        </div>
        <div class="row ml-0 mr-0 mt-10 product-brand">
            <div class="tabbable-line">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#description-tab" class="bg-white color-blue font-16" data-toggle="tab"> Description </a>
                    </li>
                    <li class="color-blue">
                        <a href="#shipping-tab" class="bg-white color-blue font-16" data-toggle="tab"> Attributes </a>
                    </li>
                    <li class="color-blue">
                        <a href="#review-tab" class="bg-white color-blue font-16" data-toggle="tab">Review</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="description-tab">
                        {!!  $productDescription["description"] !!}
                        <ul class="hidden">
                            <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#555555" data-hc="#555555"></i> White dwarf extraplanetary</li>
                            <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#555555" data-hc="#555555"></i>Worldlets, white dwarf</li>
                            <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#555555" data-hc="#555555"></i>Cambrian explosion, hydrogen</li>
                            <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#555555" data-hc="#555555"></i>Euclid Sea of Tranquility</li>
                        </ul>
                        <p class="hidden">Coffin quarter pipe NoMeansNo switch Sponsored hospital flip. Fastplant 270 skater boned out yeah. Stoked boardslide hardware air nose-bump. Manual hang ten ledge Vision Streetwear backside hang-up. Streets on Fire wall ride nose grab rail speed wobbles hang ten. Invert hand rail snake skate key hurricane. Hanger concave rail no comply rail slide. Nose bump gnarly 180 soul skate shinner. Jason Dill Japan air hang ten camel back goofy footed frontside air. Melancholy axle set handplant kickflip Donger fakie.</p>
                    </div>
                    <div class="tab-pane" id="shipping-tab">
                        <div class="row ml-0 mr-0">
                            {{$commentInfo}}
                        </div>
                        <div class="shipping-wrapper hidden">
                            <div class="row ml-0 mr-0"><span class="font-20 bold">Shipping and handling</span></div><br>
                            <div class="row ml-0 mr-0"><span class="font-12">Item location:</span><span class="font-12 bold">London, United Kingdom</span></div>
                            <div class="row ml-0 mr-0 mt-10">
                                <div class="col-md-8 col-xs-12 pl-0">
                                    <span>
                                        Content
                                    </span>
                                </div>
                                <div class="col-md-4 col-xs-12 pl-0 pr-0">
                                    <img src="#">
                                    <span>This item will be shipped through the Global Shipping Program and includes international tracking</span>
                                    <a href="#" class="color-blue">Learn more</a>
                                </div>
                            </div>

                            <div class="row ml-0 mr-0 mt-10">
                                <span class="font-12">Change country : </span>
                                <select class="select-small">
                                    <option value="0">China</option>
                                    <option value="0">Japan</option>
                                </select>
                            </div>

                            <ul class="detail-header hidden-xs mt-20">
                                <li class="font-12 color-black" style="width:13%;">Shipping and handling</li>
                                <li class="font-12 color-black" style="width:20%;">import charges</li>
                                <li class="font-12 color-black" style="width:5%;">To</li>
                                <li class="font-12 color-black" style="width:30%;">Service</li>
                                <li class="font-12 color-black" style="width:30%;">Delivery *</li>
                            </ul>
                            <ul class="hidden-xs detail-content">
                                <li class="font-12 color-black" style="width:13%;">GBP 42.32</li>
                                <li class="font-12 color-black" style="width:20%;">See import charges at checkout</li>
                                <li class="font-12 color-black" style="width:5%;">China</li>
                                <li class="font-12 color-black" style="width:30%;">Expedited Shopping (International Priority Shipping)</li>
                                <li class="font-12 color-black" style="width:30%;">Estimated between Wed,Sep 25 and Wed, Oct 2</li>
                            </ul>

                            <ul class="detail-header mt-20">
                                <li class="font-12 color-black" style="width:100%;">Domestic handling time</li>
                            </ul>
                            <ul class="detail-content">
                                <li class="font-12 color-black" style="width:100%;">
                                    Will usually ship with 1 business day of <a href="#" class="color-blue">receiving cleared payment</a>
                                </li>
                            </ul>

                            <ul class="detail-header mt-20">
                                <li class="font-12 color-black" style="width:100%;">Taxes</li>
                            </ul>
                            <ul class="detail-content">
                                <li class="font-12 color-black" style="width:100%;">
                                    Taxes may be applicatable at checkout.<a href="#" class="color-blue">Learn more</a>
                                </li>
                            </ul>
                        </div>
                        <div class="shipping-wrapper hidden">
                            <div class="row ml-0 mr-0"><span class="font-20 bold">Payment Details</span></div><br>
                            <ul class="detail-header mt-20">
                                <li class="font-12 color-black" style="width:100%;">Payment methods</li>
                            </ul>
                            <ul class="detail-content">
                                <li class="font-12 color-black" style="width:100%;">
                                    Taxes may be applicatable at checkout.<a href="#" class="color-blue">Learn more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane" id="review-tab">
                        <div class="row ml-0 mr-0">
                           <div id = "review-wrpper">

                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type = "hidden" id = "remain_count" value = "{{$productInfo['quantity']-$productInfo['sell_count']}}"/>
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
    <script>
        $(document).ready(function(){
            $("#zoom_09").elevateZoom();
            //initiate the plugin and pass the id of the div containing gallery images
            $("#zoom_09").elevateZoom({gallery:'gal1', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true});
            //pass the images to Fancybox
            $("#zoom_09").bind("click", function(e) {
                var ez =   $('#zoom_09').data('elevateZoom');
                return false;
            });

            searchOrderReviewList(1);
        });

        function searchOrderReviewList(page){
            var param = new Object();
            param._token = _token;
            param.page = page;
            param.seller_id = "{{$productInfo['seller_id']}}";
            var url = "{{url("front/product/ajax_order_review_list")}}";
            $.post(url, param, function(html){
               $("#review-wrpper").html(html);
            });
        }

        $("input[name='product_count']").change(function(){
            var product_count = $("input[name='product_count']").val();
            product_count = parseInt(product_count);
            if(isNaN(product_count)){
                $("input[name='product_count']").val("1");
                return;
            }
            if(product_count <= 0){
                $("input[name='product_count']").val("1");
                return;
            }
        })
        $(".variant-btn").on('click', function(){
            $(".variant-btn").removeClass("active");
            $(this).addClass("active");
            var price = $(this).attr("price");
            $("#product-price").html("$ " + price);
            var data_id = $(this).attr("data-id");
            $("#sku_id").val(data_id);
        });

        function onAddCart(){
            if($("#product_count").val() == ""){
                errorMsg("Please input product count");
                return;
            }
            var remain_count = $("#remain_count").val();
            remain_count = parseInt(remain_count);
            if(isNaN(remain_count)){
                errorMsg("Product remain quantity undefined!");
                return;
            }
            var product_count = $("#product_count").val();
            product_count = parseInt(product_count);
            if(isNaN(product_count)){
                errorMsg("quantity only number!");
                return;
            }

            if(product_count > remain_count){
                errorMsg("quantity number is small then product remain number!");
                return;
            }

            $("#immeditaly_type").val(0);
            var param = $("#cart_form").serialize();
            $.post("{{url("front/saveCart")}}", param, function(data){
                if(data.status == "1"){
                    successMsg("The product is added to cart successfully", function(){
                        window.location.reload();
                    });
                }else{
                    errorMsg(" Do you first login!", function(){
                        window.location.href = "{{url("/login")}}";
                    });
                }

            }, "json");
        }
        function onBuyProduct(){
            if($("#product_count").val() == ""){
                errorMsg("Please input product count");
                return;
            }
            var remain_count = $("#remain_count").val();
            remain_count = parseInt(remain_count);
            if(isNaN(remain_count)){
                errorMsg("Product remain quantity undefined!");
                return;
            }
            var product_count = $("#product_count").val();
            product_count = parseInt(product_count);
            if(isNaN(product_count)){
                errorMsg("quantity only number!");
                return;
            }

            if(product_count > remain_count){
                errorMsg("quantity number is small then product remain number!");
                return;
            }
            $("#immeditaly_type").val(1);
            var param = $("#cart_form").serialize();
            $.post("{{url("front/saveCart")}}", param, function(data){
                if(data.status == "1")
                    successMsg("The operation is success", function(){
                        window.location.href = "{{url("front/basket/index")}}?immeditaly_type=1";
                    });
                else{
                    errorMsg(" Do you first login!", function(){
                        window.location.href = "{{url("/login")}}";
                    });
                }
            }, "json");
        }
    </script>
@stop