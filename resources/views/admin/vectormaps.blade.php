@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Vector Maps
@parent
@stop

{{-- page level styles --}}
@section('header_styles')    
    
	<link href="{{ asset('assets/css/pages/jqvmap.css') }}" media="screen" rel="stylesheet" type="text/css" />
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>Vector Maps</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                            Dashboard
                        </a>
                    </li>
                    <li><a href="#"> Maps</a></li>
                    <li class="active">Vector Maps</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h4 class="panel-title">World</h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div id="vmapworld" class="map_size" style="width:100%; height:350px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 class="panel-title">USA</h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div id="vmapusa" class="map_size" style="width:100%; height:350px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h4 class="panel-title">Europe</h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div id="vmapeurope" class="map_size" style="width:100%; height:350px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h4 class="panel-title">Germany</h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div id="vmapgermany" class="map_size" style="width:100%; height:350px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">Russia</h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div id="vmaprussia" class="map_size" style="width:100%; height:350px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row --> 
            </section>
            <!--page wrapper--> 
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    
    <script src="{{ asset('assets/vendors/jqvmap/js/jquery.vmap.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/jqvmap/js/jquery.vmap.world.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/jqvmap/js/jquery.vmap.usa.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/jqvmap/js/jquery.vmap.europe.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/jqvmap/js/jquery.vmap.germany.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/jqvmap/js/jquery.vmap.russia.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/jqvmap/js/jquery.vmap.sampledata.js') }}" ></script>
    <script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#vmapworld').vectorMap({
            map: 'world_en',
            backgroundColor: '#ffffff',
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#045707', '#84F088'],
            normalizeFunction: 'polynomial'
        });
        jQuery('#vmaprussia').vectorMap({
            map: 'russia_en',
            backgroundColor: '#ffffff',
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#094980', '#ACD2F2'],
            normalizeFunction: 'polynomial'
        });
        jQuery('#vmapgermany').vectorMap({
            map: 'germany_en',
            backgroundColor: '#ffffff',
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#d84a38', '#F5B4AB'],
            normalizeFunction: 'polynomial'
        });
        jQuery('#vmapeurope').vectorMap({
            map: 'europe_en',
            backgroundColor: '#ffffff',
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#ffb848', '#F5D5A4'],
            normalizeFunction: 'polynomial'
        });
        jQuery('#vmapusa').vectorMap({
            map: 'usa_en',
            backgroundColor: '#ffffff',
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#5bc0de', '#D6DBDE'],
            normalizeFunction: 'polynomial'
        });
    });
    $('.map_size').closest('.panel-body').on('resize', function () {
        $(window).trigger('resize');
    });
    $('#slim1').slimscroll({
        height: '500px',
        size: '3px',
        color: '#D84A38',
        opacity: 1
    });
    </script>
    
@stop
