@extends('layouts/default')

{{-- Page title --}}
@section('title')
Products
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/shopping.css') }}">
    <link href="{{ asset('assets/vendors/animate/animate.min.css') }}" rel="stylesheet" type="text/css"/>
@stop

{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Products</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Products
            </div>
        </div>
    </div>
@stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <!--Content Section Start -->
        <!-- Best Deal Section Start -->
        <div class="row">
            <h3 id="title">BEST DEALS</h3>
            <div class="col-sm-6 col-md-3 wow flipInX" data-wow-duration="3.5s">
                <div class="thumbnail text-center">
                    <a href="{{ URL::to('single_product') }}"><img src="{{ asset('assets/images/cart/htc.jpg') }}" class="img-responsive" alt="htc image"></a>
                    <br/>
                    <h5 class="text-primary">HTC Desire 816G Plus - (Blue)</h5>
                    <ul>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Android v4.4.2 (KitKat)</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> 13 MP,Autofocus, LED flash</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> 5.5 Inch Screen</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> 1080HD Video</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> 16M colors</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Octa-core 1.7 GHz Cortex-</li>
                    </ul>
                    <h4 class="text-primary">Rs. 17,826 <del class="text-danger">Rs. 21,990</del> </h4>
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 wow flipInX" data-wow-duration="3s" data-wow-delay="0.5s">
                <div class=" thumbnail text-center">
                    <a href="{{ URL::to('single_product') }}"><img src="{{ asset('assets/images/cart/sony.jpg') }}" class="img-responsive" alt="sony image"></a>
                    <br/>
                    <h5 class="text-primary">Sony Xperia C3 - (Black)</h5>
                    <ul>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Android v4.4.2 (KitKat)</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> 8 MP autofocus LED flash</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> 5.0 Inch Screen </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> TFT capacitive touchscreen </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> 16M colors</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Quad-core 1.2 GHz</li>
                    </ul>
                    <h4 class="text-primary">Rs. 18,088 <del class="text-danger">Rs. 21,990</del> </h4>
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 wow flipInX" data-wow-duration="3s" data-wow-delay="0.9s">
                <div class=" thumbnail text-center">
                    <a href="{{ URL::to('single_product') }}"><img src="{{ asset('assets/images/cart/karbon.jpg') }}" class="img-responsive" alt="karbon image"></a>
                    <br/>
                    <h5 class="text-primary">Karbonn Titanium Octane Plus</h5>
                    <ul>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Android OS, v5.0.2 (Lollipop)</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> 16 MP,Autofocus, LED flash</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> 5.0 inch Screen </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Nano Sim</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Quad 2.1GHz + Quad </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> LCD capacitive touchscreen,</li>
                    </ul>
                    <h4 class="text-primary">Rs. 7,700 <del class="text-danger">Rs. 13,990</del></h4>
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 wow flipInX" data-wow-duration="3s" data-wow-delay="1.4s">
                <div class=" thumbnail text-center">
                    <a href="{{ URL::to('single_product') }}"><img src="{{ asset('assets/images/cart/nokia.jpg') }}" class="img-responsive" alt="nokia image"></a>
                    <br/>
                    <h5 class="text-primary">Microsoft Lumia 535 Dual SIM </h5>
                    <ul>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Microsoft Windows Phone 8.1</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> 5 MP, Camera </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> autofocus, LED flash </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> 5.0 inch Screen </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> 16M colors</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Dual Sim</li>
                    </ul>
                    <h4 class="text-primary">Rs. 8,571 <del class="text-danger">Rs. 10,299</del> </h4>
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
                </div>
            </div>
            <nav>
                <ul class="pagination pull-right">
                    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">3 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#" aria-label="Previous"><span aria-hidden="true">&raquo;</span></a></li>
                </ul>
            </nav>
        </div>
        <!-- //Best Deal Section End -->
        <!-- New Launches Section Start -->
        <div class="row">
            <h3 id="title">NEW LAUNCHES </h3>
            <div class="col-sm-6 col-md-3 wow flipInX" data-wow-duration="3.5s">
                <div class="thumbnail text-center">
                    <a href="{{ URL::to('single_product') }}"><img src="{{ asset('assets/images/cart/samsung balck.jpg') }}" class="img-responsive" alt="samsung black image"></a>
                    <br/>
                    <h5 class="text-primary">Samsung Galaxy S6 32 GB - (Black)</h5>
                    <ul>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Android OS, v5.0.2 (Lollipop)</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> 16 MP, 3456 x 4608 pixels</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> 5.1 inches </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Nano Sim</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Quad 2.1GHz + Quad </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Internal 32 GB </li>
                    </ul>
                    <h4 class="text-primary">Rs. 49,900</h4>
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 wow flipInX" data-wow-duration="3s" data-wow-delay="0.5s">
                <div class=" thumbnail text-center">
                    <a href="{{ URL::to('single_product') }}"><img src="{{ asset('assets/images/cart/samsung.jpg') }}" class="img-responsive" alt="samsung image"></a>
                    <br/>
                    <h5 class="text-primary">Samsung Galaxy S6 64 GB - (White)</h5>
                    <ul>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Android OS, v5.0.2 (Lollipop)</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> 16 MP, 3456 x 4608 pixels</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> 5.1 inches </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Nano Sim</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Quad 2.1GHz + Quad </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Internal 64 GB </li>
                    </ul>
                    <h4 class="text-primary">Rs. 55,900</h4>
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 wow flipInX" data-wow-duration="3s" data-wow-delay="0.9s">
                <div class=" thumbnail text-center">
                    <a href="{{ URL::to('single_product') }}"><img src="{{ asset('assets/images/cart/samsung balck.jpg') }}" class="img-responsive" alt="samsung black image"></a>
                    <br/>
                    <h5 class="text-primary">Samsung Galaxy S6 Edge 32 GB</h5>
                    <ul>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Android OS, v5.0.2 (Lollipop)</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> 16 MP, 3456 x 4608 pixels</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> 5.1 inches </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Nano Sim</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Quad 2.1GHz + Quad </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Internal 32 GB </li>
                    </ul>
                    <h4 class="text-primary">Rs. 58,900</h4>
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 wow flipInX" data-wow-duration="3s" data-wow-delay="1.4s">
                <div class=" thumbnail text-center">
                    <a href="{{ URL::to('single_product') }}"><img src="{{ asset('assets/images/cart/samsung.jpg') }}" class="img-responsive" alt="samsung image"></a>
                    <br/>
                    <h5 class="text-primary">Samsung Galaxy S6 Edge 64 GB </h5>
                    <ul>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Android OS, v5.0.2 (Lollipop)</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> 16 MP, 3456 x 4608 pixels</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> 5.1 inches </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Nano Sim</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Quad 2.1GHz + Quad </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Internal 64 GB </li>
                    </ul>
                    <h4 class="text-primary">Rs. 64,900</h4>
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
                </div>
            </div>
            <nav>
                <ul class="pagination pull-right">
                    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">3 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#" aria-label="Previous"><span aria-hidden="true">&raquo;</span></a></li>
                </ul>
            </nav>
        </div>
        <!-- //New Launches Section End -->
        <!-- Womens Section Start -->
        <div class="row">
            <h3 id="title">WOMENS </h3>
            <div class="col-sm-6 col-md-3 wow flipInX" data-wow-duration="3.5s">
                <div class="thumbnail text-center">
                    <a href="{{ URL::to('single_product') }}"><img src="{{ asset('assets/images/cart/saree.jpg') }}" class="img-responsive" alt="saree image"></a>
                    <br/>
                    <h5 class="text-primary"> Vichitra Multi Colour Will Make Your Day Floral Printed Saree</h5>
                    <ul>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Product Type - Women's Saree</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Color - Multi Colour</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Pattern - Printed</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Fabric - Georgette</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Care - Machine/Hand Wash</li>
                    </ul>
                    <h4 class="text-primary">Rs. 1198.00<del class="text-danger">Rs. 1599.00</del> </h4>
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 wow flipInX" data-wow-duration="3s" data-wow-delay="0.5s">
                <div class="thumbnail text-center">
                    <a href="{{ URL::to('single_product') }}"><img src="{{ asset('assets/images/cart/saree2.jpg') }}" class="img-responsive" alt="saree2 image"></a>
                    <br/>
                    <h5 class="text-primary">  Diva Fashion Brown Vibrant Saree With Mixed Print</h5>
                    <ul>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Product Type - Women's Saree</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Color - Multi Colour</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Pattern - Printed</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Fabric - Jacquard</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Care - Machine/Hand Wash</li>
                    </ul>
                    <h4 class="text-primary">Rs. 1078.00<del class="text-danger">Rs. 1349.00</del> </h4>
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
                </div>
            </div>
            <div class="clearfix visible-sm"></div>
            <div class="col-sm-6 col-md-3 wow flipInX" data-wow-duration="3s" data-wow-delay="0.9s">
                <div class="thumbnail text-center">
                    <a href="{{ URL::to('single_product') }}"><img src="{{ asset('assets/images/cart/saree3.jpg') }}" class="img-responsive" alt="saree3 image"></a>
                    <br/>
                    <h5 class="text-primary">  Bunkar Purple Ethnic Motif Resham Work Saree</h5>
                    <ul>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Product Type - Women's Saree</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Color - Multi Colour</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Pattern - Printed</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Fabric - Georgette</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Care - Machine/Hand Wash</li>
                    </ul>
                    <h4 class="text-primary">Rs. 1348.00<del class="text-danger">Rs. 1799.00</del> </h4>
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 wow flipInX" data-wow-duration="3s" data-wow-delay="1.4s">
                <div class="thumbnail text-center">
                    <a href="{{ URL::to('single_product') }}"><img src="{{ asset('assets/images/cart/saree4.jpg') }}" class="img-responsive" alt="saree4 image"></a>
                    <br/>
                    <h5 class="text-primary">    Silk Bazaar Silk Casual Wear Saree - Rust Work Saree</h5>
                    <ul>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Product Type - Women's Saree</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Color - Pink</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Pattern - Printed</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Length(in mtr) - 6.3 Meter </li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Care - Dry Clean Only</li>
                    </ul>
                    <h4 class="text-primary">Rs. 1139.00<del class="text-danger">Rs. 1425.00</del> </h4>
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
                </div>
            </div>
            <h5><a href="{{ URL::to('category') }}">More items</a></h5>
        </div>
        <!-- //Womens Section End -->
        <!-- Mens Section Start -->
        <div class="row">
            <h3 id="title">MENS </h3>
            <div class="col-sm-6 col-md-3 wow flipInX" data-wow-duration="3.5s">
                <div class="thumbnail text-center">
                    <a href="{{ URL::to('single_product') }}"><img src="{{ asset('assets/images/cart/men.jpg') }}" class="img-responsive" alt="men image"></a>
                    <br/>
                    <h5 class="text-primary">  Mario Solid Shirt</h5>
                    <ul>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Product - Men's Club Wear</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Color - Blue</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Fabric - Cotton</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Care - Machine Wash </li>
                    </ul>
                    <h4 class="text-primary">Rs. 1699.00<del class="text-danger">Rs. 1999.00</del> </h4>
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 wow flipInX" data-wow-duration="3s" data-wow-delay="0.5s">
                <div class="thumbnail text-center">
                    <a href="{{ URL::to('single_product') }}"><img src="{{ asset('assets/images/cart/men2.jpg') }}" class="img-responsive" alt="men2 image"></a>
                    <br/>
                    <h5 class="text-primary">  Inmark White Linen Crafted Shirt</h5>
                    <ul>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Product -Men's Club Wear</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Fabric - Cotton</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Color - White</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Care - Machine/Hand Wash</li>
                    </ul>
                    <h4 class="text-primary">Rs. 1899.00<del class="text-danger">Rs. 1999.00</del> </h4>
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 wow flipInX" data-wow-duration="3s" data-wow-delay="0.9s">
                <div class="thumbnail text-center">
                    <a href="{{ URL::to('single_product') }}"><img src="{{ asset('assets/images/cart/men3.jpg') }}" class="img-responsive" alt="men3 image"></a>
                    <br/>
                    <h5 class="text-primary"> Andrew Solid Shirt</h5>
                    <ul>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Product -Men's Club Wear</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Fabric - Cotton</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Color - Mehroon</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Care - Machine/Hand Wash</li>
                    </ul>
                    <h4 class="text-primary">Rs. 1599.00<del class="text-danger">Rs. 1999.00</del> </h4>
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 wow flipInX" data-wow-duration="3s" data-wow-delay="1.4s">
                <div class="thumbnail text-center">
                    <a href="{{ URL::to('single_product') }}"><img src="{{ asset('assets/images/cart/men4.jpg') }}" class="img-responsive" alt="men4 image"></a>
                    <br/>
                    <h5 class="text-primary"> Atelier Check Shirt</h5>
                    <ul>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Product -Men's Club Wear</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Fabric - Cotton</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Color - Multi Color</li>
                        <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878" data-hc="787878"></i> Care - Machine/Hand Wash</li>
                    </ul>
                    <h4 class="text-primary">Rs. 1499.00<del class="text-danger">Rs. 1999.00</del> </h4>
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
                </div>
            </div>
            <h5><a href="{{ URL::to('category') }}">More items</a></h5>
        </div>
        <!-- //Mens Section End -->
        <!-- //Content Section End -->
    </div>
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" type="text/javascript"></script>
    <script>
        jQuery(document).ready(function () {
            new WOW().init();
        });
    </script>
@stop
