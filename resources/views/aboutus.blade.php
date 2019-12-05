@extends('layouts/default')

{{-- Page title --}}
@section('title')
About us
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/aboutus.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/animate/animate.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl_carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl_carousel/css/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/devicon/devicon.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/devicon/devicon-colors.css') }}">
    <!--end of page level css-->
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
                    <a href="#">About Us</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="users" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> About Us
            </div>
        </div>
    </div>
    @stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <!-- Slider Section Start -->
        <div class="row">
            <!-- Left Heading Section Start -->
            <div class="col-md-7 col-sm-12 wow bounceInLeft" data-wow-duration="5s">
                <h2><label>Welcome to Josh</label></h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem
                </p>
            </div>
            <!-- //Left Heaing Section End -->
            <!-- Slider Start -->
            <div class="col-md-5 col-sm-12 slider wow fadeInRightBig" data-wow-duration="5s">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item"><img src="{{ asset('assets/images/image_16.jpg') }}" alt="slider-image">
                    </div>
                    <div class="item"><img src="{{ asset('assets/images/image_17.jpg') }}" alt="slider-image">
                    </div>
                    <div class="item"><img src="{{ asset('assets/images/image_16.jpg') }}" alt="slider-image">
                    </div>
                </div>
            </div>
            <!-- //Slider End -->
        </div>
        <!-- //Slider Section End -->
        <!-- Services Section Start -->
        <div class="row">
            <div class="text-center">
                <h3 class="border-success"><span class="heading_border bg-success" >Services</span></h3>
            </div>
            <!-- left Section Start -->
            <div class="col-md-6 col-sm-12">
                <!-- Responsive Section Start -->
                <div class="col-sm-6 col-md-6 wow zoomIn" data-wow-duration="3s">
                    <div class="box">
                        <div class="box-icon">
                            <i class="livicon icon1" data-name="desktop" data-size="55" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                        </div>
                        <div class="info">
                            <h3 class="success text-center">Responsive</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!</p>
                            <div class="text-right primary"><a href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Responsive Section End -->
                <!-- Easy to Use Section Start -->
                <div class="col-sm-6 col-md-6 wow zoomIn" data-wow-duration="3s">
                    <div class="box">
                        <div class="box-icon box-icon1">
                            <i class="livicon icon1" data-name="gears" data-size="55" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="info">
                            <h3 class="primary text-center">Easy to Use</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!</p>
                            <div class="text-right primary"><a href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Easy to use Section End -->
            </div>
            <!-- Left Section End -->
            <div class="col-md-6 col-sm-12 wow bounceInRight" data-wow-duration="3s">
                <!-- Pnael group section Start -->
                <div class="margin-t30 hidden-xs hidden-sm"></div>
                <div class="panel-group" id="accordion">
                    <!--Php Section Start -->
                    <div class="panel panel-default">
                        <div class="panel-heading text_bg">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                <span class=" glyphicon glyphicon-minus success"></span>
                                <span class="success">PHP</span></a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="media">
                                    <div class="media-left media-top">
                                        <a href="#">
                                        <i class="devicon-php-plain colored font100" ></i>
                                    </a>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //Php Section End -->
                    <!-- Html Section Start -->
                    <div class="panel panel-default">
                        <div class="panel-heading text_bg">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class=" glyphicon glyphicon-plus success"></span>
                                <span class="success">HTML</span></a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="media">
                                    <div class="media-left media-top">
                                        <a href="#">
                                            <i class="devicon-html5-plain colored font100"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //Html Section End -->
                    <!-- Jquery Section Start -->
                    <div class="panel panel-default">
                        <div class="panel-heading text_bg">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class=" glyphicon glyphicon-plus success"></span>
                                <span class="success">JQUERY</span></a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="media">
                                    <div class="media-left media-top">
                                        <a href="#">
                                            <i class="devicon-jquery-plain colored font100" ></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //Jquery Section End -->
                </div>
                <!-- //Panel group Section End -->
            </div>
        </div>
        <!-- // Services Section End -->
        <!-- Our Team Section Start -->
        <div class="row">
            <!-- Our Team Heading Start -->
            <div class="text-center">
                <h3 class="border-danger"><span class="heading_border bg-danger" >Our Team</span></h3>
            </div>
            <!-- //Our Team Heading End -->
            <!-- Image1 Section Start -->
            <div class="col-md-3 col-sm-5 col-xs-10 profile wow zoomIn" data-wow-duration="3.5s">
                <div class="thumbnail bg-white  text-center">
                    <img src="{{ asset('assets/images/img_3.jpg') }}" alt="team-image" class="img-responsive">
                    <div class="caption">
                        <b>John Doe</b>
                        <br /> Founder &amp; Partner
                        <br />
                        <div class="divide">
                            <a href="#" class="divider"> <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795" data-hc="#3a5795"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee" data-hc="#55acee"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32" data-hc="#d73d32"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd" data-hc="#1b86bd"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Image1 Section End -->
            <!-- Image2 Section Start -->
            <div class="col-md-3 col-sm-5 col-xs-10 profile wow zoomIn" data-wow-duration="3s" data-wow-delay="0.8s">
                <div class="thumbnail bg-white text-center">
                    <img src="{{ asset('assets/images/img_5.jpg') }}" alt="team-image">
                    <div class="caption">
                        <b>Francina Steinberg</b>
                        <br /> CEO
                        <br />
                        <div class="divide">
                            <a href="#" class="divider"> <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795" data-hc="#3a5795"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee" data-hc="#55acee"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32" data-hc="#d73d32"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd" data-hc="#1b86bd"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Image2 Section End -->
            <!-- Image3 Section Start -->
            <div class="col-md-3 col-sm-5 col-xs-10 profile wow zoomIn" data-wow-duration="3s" data-wow-delay="0.8s">
                <div class="thumbnail bg-white  text-center">
                    <img src="{{ asset('assets/images/img_4.jpg') }}" alt="team-image" class="img-responsive">
                    <div class="caption">
                        <b>Audrey Sheldon</b>
                        <br /> Executive Manager
                        <br />
                        <div class="divide">
                            <a href="#" class="divider"> <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795" data-hc="#3a5795"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee" data-hc="#55acee"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32" data-hc="#d73d32"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd" data-hc="#1b86bd"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Image3 Section End -->
            <!-- Image4 Section Star -->
            <div class="col-md-3 col-sm-5 col-xs-10 profile wow zoomIn" data-wow-duration="3s" data-wow-delay="0.8s">
                <div class="thumbnail bg-white text-center">
                    <img src="{{ asset('assets/images/img_6.jpg') }}" alt="team-image">
                    <div class="caption">
                        <b>Sam Bellows</b>
                        <br /> Manager
                        <br />
                        <div class="divide">
                            <a href="#" class="divider"> <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795" data-hc="#3a5795"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee" data-hc="#55acee"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32" data-hc="#d73d32"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd" data-hc="#1b86bd"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Image4 Section End -->
        </div>
        <!-- //Our Team Section End -->
    </div>
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/aboutus.js') }}"></script>
    <!--page level js ends-->
@stop
