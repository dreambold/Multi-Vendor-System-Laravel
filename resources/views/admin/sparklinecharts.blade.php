@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Sparkline Charts
@parent
@stop

{{-- page level styles --}}
@section('header_styles')    
    
	<link href="{{ asset('assets/css/pages/sparklinecharts.css') }}" rel="stylesheet" type="text/css" />
    <!-- end of page level css -->
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>Sparkline Charts</h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-color="#333" data-hovercolor="#333"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">Charts</a>
                    </li>
                    <li class="active">
                        <a href="#">Sparkline Charts</a>
                    </li>
                </ol>
            </section>
            <!-- breadcrumb-->
            <!-- Main content -->
            <section class="content paddingleft_right15">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="spinner-five" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                           Sparkline Charts
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6 col-xs-12 col-sm-6 spark-chart">
                                <div class="minichart-box">Line Chart</div>
                                <span id="sparklineline">5,6,7,9,9,5,3,2,2,4,6,7</span>
                                <div class="minichart-txt">This Month Sales</div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-6 spark-chart">
                                <div class="minichart-box">Bar Chart</div>
                                <span id="sparklinebar">3,9,16,8,13,7,2</span>
                                <div class="minichart-txt">This Week Sales</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12 col-sm-6 spark-chart">
                                <div class="minichart-box">Bullet Chart</div>
                                <span id="sparklinebullet">10,12,12,9,7</span>
                                <div class="minichart-txt">Bounce Rate</div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-6 spark-chart">
                                <div class="minichart-box">Discrete Chart</div>
                                <span id="sparklinediscrete">1,1,0,1,-1,-1,1,-1,0,0,1,1</span>
                                <div class="minichart-txt">Quarterly Report</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12 col-sm-6 spark-chart">
                                <div class="minichart-box">Tristate Chart</div>
                                <span id="sparklinetristate">1,1,0,1,-1,-1,1,-1,0,0,1,1</span>
                                <div class="minichart-txt">Success/Lose Rate</div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-6 spark-chart">
                                <div class="minichart-box">Pie Chart</div>
                                <span id="sparklinepie" style="padding-left:70px;">1,2,3</span>
                                <div class="minichart-txt">
                                    1. Unique Visitors
                                    <br />2. New Visitors
                                    <br />3. Total Visitors
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12 col-sm-6 spark-chart">
                                <div class="minichart-box">Box Chart</div>
                                <span id="sparklinebox">4,27,34,52,54,59,61,68,78,82,85,87,91,93,100</span>
                                <div class="minichart-txt">This Week Sales</div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-6 spark-chart">
                                <div class="minichart-box">Multi Bar Chart</div>
                                <span id="sparklinebarcolor">1:3,2:9,4:16,3:8</span>
                                <div class="minichart-txt">Unique VS New Visitors</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    
    <script src="{{ asset('assets/vendors/sparklinecharts/jquery.sparkline.js') }}"  type="text/javascript"></script>
    <script  src="{{ asset('assets/js/pages/sparkline.js') }}"  type="text/javascript"></script>
    
@stop
