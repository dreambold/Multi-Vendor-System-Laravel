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
                <li class="hidden-xs"><a href="index.html">eBay</a></li>
                <li class="hidden-xs"><i class="fa fa-chevron-right" style="font-size: 10px;"></i><a href="javascript:void(0);">Jewelry&Watches</a></li>
                <li class="hidden-xs"><i class="fa fa-chevron-right" style="font-size: 10px;"></i><a href="javascript:void(0);">Watches, Parts&Accessories</a></li>
                <li class="hidden-xs"><i class="fa fa-chevron-right" style="font-size: 10px;"></i><a href="javascript:void(0);">Wristwatches</a></li>
            </ol>
            <div class="pull-right">
                <a class="color-blue font-14 bold" href="javascript:void(0);">Share</a>
            </div>
        </div>
        <div class="row ml-0 mr-0">
            <p class="product-title">
                Citizen Nh8350-83I Blue Dial Stainless Steel Automatic Mens Watch 40mm
            </p>
        </div>
        <div class="row ml-0 mr-0">
            <div class="product-rate font-14">
                <i class="fa fa-star text-brown"></i>
                <i class="fa fa-star text-brown"></i>
                <i class="fa fa-star text-brown"></i>
                <i class="fa fa-star text-brown"></i>
                <i class="fa fa-star-o text-brown"></i>
                <a class="color-blue pl-10">18 product ratings</a>
                <span class="pl-10 color-blue">|</span>
                <a class="color-blue pl-10">About this product</a>
            </div>
        </div>
        <div class="row ml-0 mr-0 mt-10 product-brand">
            <div class="tabbable-line">
                <ul class="nav nav-tabs">
                    <li class="active brand-tab">
                        <a href="#brand1" class="bg-white brand-link" data-toggle="tab"> Your pick RMB 983.15 </a>
                    </li>
                    <li class="brand-tab">
                        <a href="#brand2" class="bg-white brand-link" data-toggle="tab"> Brand new RMB 838.46 </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="brand1">
                        <div class="col-md-5 col-xs-12">
                            <div class="product-small-image-wrapper" id="gal1">
                                <div class="product-small-image">
                                    <a href="javascript:void(0);" data-image="uploads/product/small/1.jpg" data-zoom-image="uploads/product/big/1.jpg">
                                        <img id="img_01" src="uploads/product/small/1.jpg" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="product-small-image">
                                    <a href="javascript:void(0);" onclick="" data-image="uploads/product/small/2.jpg" data-zoom-image="uploads/product/big/2.jpg">
                                        <img id="img_02" src="uploads/product/small/2.jpg" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="product-small-image">
                                    <a href="javascript:void(0);" onclick="" data-image="uploads/product/small/3.jpg" data-zoom-image="uploads/product/big/3.jpg">
                                        <img id="img_03" src="uploads/product/small/3.jpg" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="product-small-image">
                                    <a href="javascript:void(0);" onclick="" data-image="uploads/product/small/4.jpg" data-zoom-image="uploads/product/big/4.jpg">
                                        <img id="img_04" src="uploads/product/small/4.jpg" class="img-responsive" />
                                    </a>
                                </div>
                            </div>
                            <div class="product_wrapper product-image-wrapper">
                                <div class="product-hint">11 watches</div>
                                <img id="zoom_09" src="uploads/product/small/1.jpg" data-zoom-image="uploads/product/big/1.jpg" class="img-responsive" />
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12 mt-10">
                            <div class="row ml-0 mr-0"><span class="font-16 bold">Your pick</span></div>
                            <div class="row ml-0 mr-0"><span class="font-12">Approx.</span></div>
                            <div class="row ml-0 mr-0"><span class="font-30 bold">RMB 847.79</span></div>
                            <div class="row ml-0 mr-0"><span class="font-14 bold">+RMB 135.36 Shipping</span></div>
                            <div class="row ml-0 mr-0"><span class="font-14 bold">US $119.00</span></div><br>
                            <div class="row ml-0 mr-0"><span class="font-14 bold">Get it by Thu, Sep 19-Tue, Oct 29 from Huntington, New York</span></div>
                            <ul class="product-condition-wrapper">
                                <li><span class="font-12 bold">New with tags condition</span></li>
                                <li><span class="font-12 bold" >No returns, but backed by </span><a href="#"><span class="color-blue bold">eBay Moeny back guarantee</span></a></li>
                            </ul>
                            <div class="row ml-0 mr-0">
                                <span class="font-14 bold font-italic">
                                    "Citizen Automatic, Radiant Blue Dial Watch with Stainless Steel Bracelet #NH8350-83L-New in Box.However, it does not hack. Citizen NH8350-83L Features Brand: Stainless.."
                                </span>
                            </div>
                            <div class="row ml-0 mr-0"><a href="#"><span class="font-14 bold color-blue">See details</span></a></div>
                        </div>
                        <div class="col-md-3 col-xs-12 mt-10 pr-0">
                            <div class="row ml-0 mr-0"><span class="font-16 bold pull-right">MONEY BACK GUARANTEE</span></div>
                            <select class="form-control mt-10">
                                <option value="1">Qty : 1</option>
                                <option value="1">Qty : 2</option>
                            </select>
                            <input type="button" class="product-act-btn mt-20" onclick = "window.location.href = '{{url("/cart")}}'" value="Buy It Now">
                            <input type="button" class="product-act-btn mt-20" value="Add to Cart">
                            <input type="button" class="product-act-btn mt-20" value="Watch">
                            <div class="row ml-0 mr-0 mt-20"><span class="font-14 bold">Sold by</span></div>
                            <div class="row ml-0 mr-0"><span class="font-14 bold color-blue">longislandwatch (3928)</span></div>
                            <div class="row ml-0 mr-0"><span class="font-14 bold">100.0% Positive feedback</span></div>
                            <div class="row ml-0 mr-0"><a href="#"><span class="font-14 bold color-blue">Contact seller</span></a></div>
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
    </div>
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
        });
    </script>
@stop