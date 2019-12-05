@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Charts
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/pages/flot.css') }}" />
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Flot Charts</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Charts</a>
                    </li>
                    <li class="active">Flot Charts</li>
                </ol>
            </section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-6">
            <!-- Stack charts strats here-->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Stacked Bar Chart
                    </h3>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div id="basicFlotLegend" class="flotLegend"></div>
                    <div id="bar-chart-stacked" class="flotChart1"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <!-- toggling series charts strats here-->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Bar Chart
                    </h3>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div id="bar-chart" class="flotChart"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-6">
            <!-- Tracking charts strats here-->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Spline Chart
                    </h3>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div id="basicFlotLegend1" class="flotLegend"></div>
                    <div id="spline-chart" class="flotChart1"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <!-- Stack charts strats here-->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Line Chart
                    </h3>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                </div>
                <div class="panel-body">
                    <div id="line-chart" class="flotChart1"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-6">
            <!-- Real time charts strats here-->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Area Chart
                    </h3>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                </div>
                <div class="panel-body">
                    <div id="area-chart" class="flotChart3"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Spline Area Chart
                    </h3>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                </div>
                <div class="panel-body">
                    <div id="chart-spline" class="flotChart3"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!-- Interacting charts strats here-->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Real Time Chart
                    </h3>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                </div>
                <div class="panel-body">
                    <div id="realtime" class="flotChart3"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->
</section>
<!-- content -->
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/flotchart/js/jquery.flot.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/flotchart/js/jquery.flot.stack.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/flotchart/js/jquery.flot.crosshair.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/flotchart/js/jquery.flot.time.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/flotchart/js/jquery.flot.selection.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/flotchart/js/jquery.flot.symbol.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/flotchart/js/jquery.flot.resize.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/flotchart/js/jquery.flot.categories.js') }}"  ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/splinecharts/jquery.flot.spline.js') }}"  ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/flot_tooltip/js/jquery.flot.tooltip.js') }}"  ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/js/pages/customcharts.js') }}" ></script>
    
@stop
