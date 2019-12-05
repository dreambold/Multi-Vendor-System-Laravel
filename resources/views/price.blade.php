@extends('layouts/default')

{{-- Page title --}}
@section('title')
Price
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/price.css') }}">
<link href="{{ asset('assets/vendors/animate/animate.min.css') }}" rel="stylesheet" type="text/css"/>
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
                    <a href="#">Price</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="money" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Price
            </div>
        </div>
    </div>
    @stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <div class="row">
            <h2 id="pricing_tables_title"> PRICING TABLES</h2>
            <!-- Vestibulizzle Section Start -->
            <div class="col-md-3 col-sm-6 wow flipInY" data-wow-duration="3.5s">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3 class="text-white">Vestibulizzle</h3>
                    </div>
                    <div class="panel-body text-center">
                        <div class="box_round_symboll">
                            $19
                        </div>
                        <h4 class="success">Per Month</h4>
                        <ul style="text-align: justify;">
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                        </ul>
                        <a class="btn price-btn" href="#">Sign up
                        </a>
                    </div>
                </div>
            </div>
            <!-- //Vestibulizzle Section End -->
            <!-- Best Package Section Start -->
            <div class="col-md-3 col-sm-6 wow flipInY" data-wow-duration="3s" data-wow-delay="0.7s">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3 class="text-white">Best Package</h3>
                    </div>
                    <div class="panel-body">
                        <div class="box_round_symboll">
                            $25
                        </div>
                        <h4 class="success">Per Month</h4>
                        <ul style="text-align: justify;">
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                        </ul>
                        <a class="btn price-btn" href="#">Sign up </a>
                    </div>
                </div>
            </div>
            <!-- Best Package Section End -->
            <!-- Suscipizzle Section Start -->
            <div class="col-md-3 col-sm-6 wow flipInY" data-wow-duration="3s" data-wow-delay="1.2s">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3 class="text-white">Suscipizzle</h3>
                    </div>
                    <div class="panel-body">
                        <div class="box_round_symboll">
                            $38
                        </div>
                        <h4 class="success">Per Month</h4>
                        <ul style="text-align: justify;">
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                        </ul>
                        <a class="btn price-btn " href="#">
                            Sign up
                        </a>
                    </div>
                </div>
            </div>
            <!-- //Suscipizzle Section End -->
            <!-- Pretium Section Start -->
            <div class="col-md-3 col-sm-6 wow flipInY" data-wow-duration="3s" data-wow-delay="1.6s">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3 class="text-white">Pretium</h3>
                    </div>
                    <div class="panel-body">
                        <div class="box_round_symboll">
                            $42
                        </div>
                        <h4 class="success">Per Month</h4>
                        <ul style="text-align: justify;">
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li>
                                Lorem Ipsum Dolor Lorem
                            </li>
                        </ul>
                        <a class="btn price-btn" href="#"> Sign up
                        </a>
                    </div>
                </div>
            </div>
            <!-- //Pretium Section End -->
        </div>
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
