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
    <link href="{{asset('assets/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('assets/slick/slick-theme.css')}}" rel="stylesheet">
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
                <li class="hidden-xs"><a href="index.html">eBay</a></li>
                <li class="hidden-xs"><i class="fa fa-chevron-right" style="font-size: 10px;"></i><a href="javascript:void(0);">Jewelry&Watches</a></li>
                <li class="hidden-xs"><i class="fa fa-chevron-right" style="font-size: 10px;"></i><a href="javascript:void(0);">Watches, Parts&Accessories</a></li>
                <li class="hidden-xs"><i class="fa fa-chevron-right" style="font-size: 10px;"></i><a href="javascript:void(0);">Wristwatches</a></li>
            </ol>
            <div class="pull-right">
                <a class="color-blue font-14 bold" href="javascript:void(0);">Share</a>
            </div>
        </div>
        <div class="row ml-0 mr-0 mt-10 product-brand">
            <div class = "row">
                <div class="alert alert-info alert-dismissable" style = "background:#BBE7A1 !important; color:black !important;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    You're the highest bidder | <input type="button" class="btn-bg-blue large-button" style = "width:200px;" onclick = "onHigherBidClick()" value="Increase max bid">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="row">
                        <div class="product_wrapper">
                            <img id="zoom_09" src="{{ asset('assets/images/cart/small/1.jpg') }}" data-zoom-image="{{ asset('assets/images/cart/big/1.jpg') }}" class="img-responsive" />
                        </div>
                    </div>
                    <div class="row">
                        <!--individual products in product view-->
                        <div id="gal1" class = "product_auction_detail_gal1">
                            <a href="#" data-image="{{ asset('assets/images/cart/small/1.jpg') }}" data-zoom-image="{{ asset('assets/images/cart/big/1.jpg') }}">
                                <img id="img_01" src="{{ asset('assets/images/cart/small/1.jpg') }}" class="img-responsive" />
                            </a>
                            <a href="#" data-image="{{ asset('assets/images/cart/small/2.jpg') }}" data-zoom-image="{{ asset('assets/images/cart/big/2.jpg') }}">
                                <img id="img_01" src="{{ asset('assets/images/cart/small/2.jpg') }}" class="img-responsive" />
                            </a>
                            <a href="#" data-image="{{ asset('assets/images/cart/small/3.jpg') }}" data-zoom-image="{{ asset('assets/images/cart/big/3.jpg') }}">
                                <img id="img_01" src="{{ asset('assets/images/cart/small/3.jpg') }}" class="img-responsive" />
                            </a>
                            <a href="#" data-image="{{ asset('assets/images/cart/small/4.jpg') }}" data-zoom-image="{{ asset('assets/images/cart/big/4.jpg') }}">
                                <img id="img_01" src="{{ asset('assets/images/cart/small/4.jpg') }}" class="img-responsive" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-xs-12">
                    <div class="row ml-0 mr-0 pb-10" style="border-bottom:1px #ddd solid;"><span class="font-18 bold">Apple Iphone Xs Max Display Model Dummy Phone</span></div>

                    <div class="row ml-0 mr-0 mt-10 pl-20">
                        <span class="font-12">Condition:</span><span class="font-12 bold pl-10" >Used</span>
                    </div>
                    <div class="row ml-0 mr-0 mt-10 pl-20">
                        <span class="font-12" style="padding-left:6px;">Time left:</span>
                        <span class="font-12 bold pl-10" >4d 07h Saturday 2:45 pm </span>
                    </div>
                    <div class="detail-header row ml-0 mr-0 mt-10">
                        <div class="row ml-0 mr-0">
                            <div class="col-xs-6">
                                <div class="row ml-0 mr-0 text-center">
                                    <span class="font-12">Current Bid:</span>
                                    <span class="font-14 color-black bold">US $134.54</span>
                                </div>
                                <div class="row ml-0 mr-0 pull-right">
                                    <span class="font-12">Approximately RMB 958.50</span>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="row ml-0 mr-0 mt-10 text-center color-blue">
                                    1 &nbsp;bid
                                </div>
                            </div>
                        </div>
                        <div class="row ml-0 mr-0">
                            <div class="col-xs-6">
                                <div class="row ml-0 mr-0 mt-10">
                                    <input class = "form-control">
                                </div>
                                <div class="row ml-0 mr-0 mt-10 text-center">
                                    <span>Enter US  $5.24 or more</span>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="row ml-0 mr-0 mt-10"><input type="button" class="btn-bg-blue large-button"  onclick = "onBidClick()" value="Place bid"></div>
                                <div class="row ml-0 mr-0 mt-30">
                                    <a href="#">
                                        <i class="fa fa-eye color-blue"></i>
                                        <span class="font-12 color-blue">Add to watchlist</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-0 mr-0">
                            <div class="detail-tab-item mt-10">Longtime member</div>
                            <div class="detail-tab-item mt-10">Free Shipping</div>
                            <div class="detail-tab-item mt-10">Returns accepted</div>
                        </div>
                    </div>
                    <div class="pay-only-wrapper">
                        <img src="#">
                        <span class="font-14">Pay only</span>
                        <span class="font-14 bold">$124.54</span>
                        <span>[</span><a href="#" class="color-blue">Show me how</a><span>]</span>
                    </div>
                    <div class="row ml-0 mr-0  mt-20">
                        <div class="font-14" style = "width: 80px;display: inline-block;vertical-align: top;">Shipping:</div>
                        <div style = "display: inline-block;width: calc(100% - 85px);"><span><b>$29.13 (approx. RMB 207.58) </b> Economy International Shipping | <a href="#">See Details</a></span></div>
                    </div>
                    <div class="row ml-0 mr-0 mt-20">
                        <div class="font-14" style = "width: 80px;display: inline-block;vertical-align: top;">Deliver:</div>
                        <div style = "display: inline-block;width: calc(100% - 85px);"><span>Extimated between <b>Sat . Oct. 12 and Fri.Oct .18</b> <i class = "fa fa-question-circle"></i></span></div>
                    </div>
                    <div class="row ml-0 mr-0 ">
                        <div class="font-14" style = "width: 80px;display: inline-block;vertical-align: top;"></div>
                        <div style = "display: inline-block;width: calc(100% - 85px);"><span>Includes International tracking</span></div>
                    </div>
                    <div class="row ml-0 mr-0 mt-20">
                        <div class="font-14" style = "width: 80px;display: inline-block;vertical-align: middle;">Payment:</div>
                        <div style = "display: inline-block;width: calc(100% - 85px);"><img src="{{asset("/assets")}}/img/mastercard.png" style="width:51px;margin-right:10px;"><img src="{{asset("/assets")}}/img/paypal2.png" style="width:51px;margin-right:10px;"><img src="{{asset("/assets")}}/img/american-express.png" style="width:51px;margin-right:10px;"></div>
                    </div>
                    <div class="row ml-0 mr-0">
                        <div class="font-14" style = "width: 80px;display: inline-block;vertical-align: middle;"></div>
                        <div style = "display: inline-block;width: calc(100% - 85px);"><span>Array International shipping</span></div>
                    </div>
                    <div class="row ml-0 mr-0  mt-20">
                        <div class="font-14" style = "width: 80px;display: inline-block;vertical-align: top;">Returns:</div>
                        <div style = "display: inline-block;width: calc(100% - 85px);"><span> Seller does not accept returns | <a href="#">See Details</a></span></div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="standard-wrapper">
                        <div class="row ml-0 mr-0">
                            <span class="font-14 bold">Shop with confidence</span>
                        </div>
                        <div class="row border-bottom ml-0 mr-0 pb-10 mt-10">
                            <div class="col-xs-2">

                            </div>
                            <div class="col-xs-10">
                                <span class="row ml-0 mr-0 font-14 bold">eBay Money Back Guarantee</span>
                                <span class="row ml-0 mr-0 font-12">
                                Get the item you ordered or get your money back
                                <a href="#" class="font-12 color-blue">Learn more</a>
                            </span>
                            </div>
                        </div>
                        <div class="row ml-0 mr-0 pb-10 mt-10">
                            <div class="col-xs-2"></div>
                            <div class="col-xs-10">
                                <span class="row ml-0 mr-0 font-14 bold">eBay Money Back Guarantee</span>
                                <span class="row ml-0 mr-0 font-12">
                                Trusted seller, fast shipping returns.
                                <a href="#" class="font-12 color-blue">Learn more</a>
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="standard-wrapper mt-20 pl-10">
                        <div class="row ml-0 mr-0">
                            <span class="font-14 bold">Seller information</span>
                        </div>
                        <div class="row ml-0 mr-0">
                            <span class="font-12 color-blue bold">kriswatches</span>
                            <span class="font-12">(</span><span class="font-12 color-blue">2992 <i class="fa fa-star text-brown"></i></span><span class="font-12">)</span>
                        </div>
                        <div class="row ml-0 mr-0 pb-10 border-dot-bottom">
                            <span class="font-12">100% Positive feedback</span>
                        </div>
                        <div class="row ml-0 mr-0 mt-10">
                            <a href="#" class="color-blue"><i class="fa fa-heart-o"></i><span class="font-12 pl-10">Save this seller</span></a>
                        </div>
                        <div class="row ml-0 mr-0 mt-10">
                            <a href="#" class="color-blue"><span class="font-12">Contact seller</span></a>
                        </div>
                        <div class="row ml-0 mr-0 mt-10">
                            <a href="{{url("/visit_store")}}" class="color-blue"><span class="font-12">Visit Store</span></a>
                        </div>
                        <div class="row ml-0 mr-0 mt-10">
                            <a href="#" class="color-blue"><span class="font-12">See other items</span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class = "row ">
            <div id = "carousel-products">
                @for($i=0; $i<=10; $i++)
                <div class="item">
                    <div style = "padding:10px;">
                    <img src="{{ asset('assets/img/parallax/photo1.jpg') }}"  alt="image1">
                    <div style = "width:100%"><span>Panser Glasfolie for Apple Xs Max aus Hart Glas Protecttion..</span></div>
                    <div style = "width:100%; margin-top:20px"><span class = "font-14 font-bold">RMB 30.56</span></div>
                    <div style = "width:100%; "><span class = "font-12 font-bold">I read shipping</span></div>
                    </div>
                </div>
               @endfor
            </div>
        </div>
        <div class="row ml-0 mr-0 mt-10 product-brand">
            <div class="tabbable-line">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#description-tab" class="bg-white color-blue font-16" data-toggle="tab"> Description </a>
                    </li>
                    <li class="color-blue">
                        <a href="#shipping-tab" class="bg-white color-blue font-16" data-toggle="tab"> Shipping and Payments </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="description-tab">
                        <p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering animata corpora quaeritis. Summus brains sit​​, morbo vel maleficia? De apocalypsi gorger omero undead survivor dictum mauris. Hi mindless mortuis soulless creaturas, imo evil stalking monstra adventus resi dentevil vultus comedat cerebella viventium. Qui animated corpse, cricket bat max brucks terribilem incessu zomby. The voodoo sacerdos flesh eater, suscitat mortuos comedere carnem virus.</p>
                        <ul>
                            <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#555555" data-hc="#555555"></i> White dwarf extraplanetary</li>
                            <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#555555" data-hc="#555555"></i>Worldlets, white dwarf</li>
                            <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#555555" data-hc="#555555"></i>Cambrian explosion, hydrogen</li>
                            <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#555555" data-hc="#555555"></i>Euclid Sea of Tranquility</li>
                        </ul>
                        <p>Coffin quarter pipe NoMeansNo switch Sponsored hospital flip. Fastplant 270 skater boned out yeah. Stoked boardslide hardware air nose-bump. Manual hang ten ledge Vision Streetwear backside hang-up. Streets on Fire wall ride nose grab rail speed wobbles hang ten. Invert hand rail snake skate key hurricane. Hanger concave rail no comply rail slide. Nose bump gnarly 180 soul skate shinner. Jason Dill Japan air hang ten camel back goofy footed frontside air. Melancholy axle set handplant kickflip Donger fakie.</p>
                    </div>
                    <div class="tab-pane" id="shipping-tab">
                        <div class="row ml-0 mr-0"><span class="font-12">Seller assumes all responsibility for this listing.</span></div>
                        <div class="shipping-wrapper">
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
                        <div class="shipping-wrapper">
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
                </div>
            </div>
        </div>
        <div class = "row ">
            <div id = "carousel-products1">
                @for($i=0; $i<=10; $i++)
                    <div class="item">
                        <div style = "padding:10px;">
                            <img src="{{ asset('assets/img/parallax/photo2.jpg') }}"  alt="image1">
                            <div style = "width:100%"><span>Panser Glasfolie for Apple Xs Max aus Hart Glas Protecttion..</span></div>
                            <div style = "width:100%; margin-top:20px"><span class = "font-14 font-bold">RMB 30.56</span></div>
                            <div style = "width:100%; "><span class = "font-12 font-bold">RMB 14 Shipping</span></div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>

@stop
@include('dlg.bid_confirm')
@include('dlg.higher_bid')

@section('footer_scripts')
    <!-- page level js starts-->
    {{--<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>--}}
    <script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.circliful.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" ></script>
    <script type="text/javascript" src="{{asset('assets/slick/slick.js')}}"></script>
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
        });

        function onBidClick(){
            $("#bid_confirm_dlg").modal("show");
        }

        function onHigherBidClick(){
            $("#higher_bid_dlg").modal("show");
        }

        $(function(){
            $('#carousel-products')
                .slick({
                    autoplay: true,
                    autoplaySpeed: 1000,
                    dots: false,
                    arrows: true,
                    slidesToShow: 4,
                    slidesToScroll: 2,
                    infinite:false,
                    responsive: [
                        {
                            breakpoint: 1023,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }]});
            $('#carousel-products1')
                .slick({
                    autoplay: true,
                    autoplaySpeed: 1000,
                    dots: false,
                    arrows: true,
                    slidesToShow: 4,
                    slidesToScroll: 2,
                    infinite:false,
                    responsive: [
                        {
                            breakpoint: 1023,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }]});
        })
    </script>
@stop

