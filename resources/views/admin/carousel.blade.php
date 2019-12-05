@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Carousel
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('assets/vendors/owl_carousel/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendors/owl_carousel/css/owl.theme.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendors/owl_carousel/css/owl.transitions.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/pages/carousel.css') }}" rel="stylesheet" />
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Carousel</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">UI Features</a>
                    </li>
                    <li class="active">Carousel</li>
                </ol>
            </section>
            <!--section ends-->
<section class="content">
    <!--main content-->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="shuffle" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Owl Carousel with single image
                    </h3>
                    <span class="pull-right clickable">
                        <i class="glyphicon glyphicon-chevron-up"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="owl-carousel owl-theme" id="carousel3">
                        <div class="item">
                            <img src="{{ asset('assets/img/parallax/photo1.jpg') }}"  alt="image1"> </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/parallax/photo2.jpg') }}"  alt="image2"> </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/parallax/photo3.jpg') }}"  alt="image3"> </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/parallax/photo1.jpg') }}"  alt="image4"> </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/parallax/photo2.jpg') }}"  alt="image5"> </div>
                    </div>
                    <!-- End Carousel -->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="tablet" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Owl Carousel with Autogrow
                    </h3>
                    <span class="pull-right clickable">
                        <i class="glyphicon glyphicon-chevron-up"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="box-body">
                        <!--carousel starts-->
                        <div class="owl-carousel owl-theme" id="carousel1">
                            <div class="item">
                                <img src="{{ asset('assets/img/parallax/photo1.jpg') }}"  alt="image1"> </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/parallax/photo2.jpg') }}"  alt="image2"> </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/parallax/photo3.jpg') }}"  alt="image3"> </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/parallax/photo1.jpg') }}"  alt="image4"> </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/parallax/photo2.jpg') }}"  alt="image5"> </div>
                        </div>
                        <!--carousel ends-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="shuffle" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Owl Carousel with multiple image
                    </h3>
                    <span class="pull-right clickable">
                        <i class="glyphicon glyphicon-chevron-up"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="owl-carousel owl-theme" id="carousel4">
                        <div class="item">
                            <img src="{{ asset('assets/img/parallax/photo1.jpg') }}"  alt="image1"> </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/parallax/photo2.jpg') }}"  alt="image2"> </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/parallax/photo3.jpg') }}"  alt="image3"> </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/parallax/photo1.jpg') }}"  alt="image4"> </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/parallax/photo2.jpg') }}"  alt="image5"> </div>
                    </div>
                    <!-- End Carousel -->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="shuffle" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Tabbed Slider Carousel
                    </h3>
                    <span class="pull-right clickable">
                        <i class="glyphicon glyphicon-chevron-up"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{ asset('assets/img/parallax/photo1.jpg') }}"  class="img-responsive" alt="image1">
                                    <div class="carousel-caption">
                                        <h3>Headline</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr<span class="hidden-xs">  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</span>.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <div class="item">
                                    <img src="{{ asset('assets/img/parallax/photo2.jpg') }}"  class="img-responsive" alt="image1">
                                    <div class="carousel-caption">
                                        <h3>Headline</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr<span class="hidden-xs">  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</span>.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <div class="item">
                                    <img src="{{ asset('assets/img/parallax/photo3.jpg') }}"  class="img-responsive" alt="image1">
                                    <div class="carousel-caption">
                                        <h3>Headline</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr<span class="hidden-xs">  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam voluptua. Lorem ipsum dolor sit amet consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</span>.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <div class="item">
                                    <img src="{{ asset('assets/img/parallax/photo1.jpg') }}"  class='img-responsive' alt="image">
                                    <div class="carousel-caption">
                                        <h3>Headline</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr<span class="hidden-xs">  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</span>.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Item -->
                            </div>
                            <!-- End Carousel Inner -->
                            <ul class="nav nav-pills nav-justified">
                                <li data-target="#myCarousel" data-slide-to="0" class="active">
                                    <a href="#">About</a>
                                </li>
                                <li data-target="#myCarousel" data-slide-to="1">
                                    <a href="#">Projects</a>
                                </li>
                                <li data-target="#myCarousel" data-slide-to="2">
                                    <a href="#">Portfolio</a>
                                </li>
                                <li data-target="#myCarousel" data-slide-to="3">
                                    <a href="#">Services</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Carousel -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--main content ends-->
</section>
<!-- content -->
        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/owl_carousel/js/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/carousel.js') }}" type="text/javascript"></script>
@stop
