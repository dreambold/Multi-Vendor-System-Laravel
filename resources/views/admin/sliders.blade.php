@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Sliders
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" href="{{ asset('assets/vendors/ion_rangeslider/css/ion.rangeSlider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/ion_rangeslider/css/ion.rangeSlider.skinFlat.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-slider/css/bootstrap-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pages/ion.css') }}" />
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Sliders</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">UI Components</a>
                    </li>
                    <li class="active">Sliders</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <!--main content-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="download" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Ion Range Sliders
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body" id="slim1">
                                <!--ion-->
                                <div class="row">
                                    <form role="form" class="form-horizontal form-bordered">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Basic Slider</label>
                                                <div class="col-md-10">
                                                    <input id="example_1" class="form-control" type="text" name="" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Money Range</label>
                                                <div class="col-md-10">
                                                    <input id="example_2" type="text" name="" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Gold Range</label>
                                                <div class="col-md-10">
                                                    <input id="example_3" type="text" name="" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Temperature Slider</label>
                                                <div class="col-md-10">
                                                    <input id="example_4" type="text" name="" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Month Slider</label>
                                                <div class="col-md-10">
                                                    <input id="example_5" type="text" name="" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Year Range</label>
                                                <div class="col-md-10">
                                                    <input id="example_6" type="text" name="" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Year Slider</label>
                                                <div class="col-md-10">
                                                    <input id="example_7" type="text" name="" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group last">
                                                <label class="col-md-2 control-label">Ion range Slider</label>
                                                <div class="col-md-10">
                                                    <input id="example_8" type="text" name="" value="" />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--ion ends-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="globe" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Bootstrap Sliders
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body" id="slim2">
                                <!--slider-->
                                <div class="row">
                                    <form role="form" class="form-horizontal form-bordered">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Basic Slider</label>
                                                <div class="col-md-10">
                                                    <input id="ex1" data-slider-id='ex1Slider' type="text" class="slider form-control" data-slider-handle="square" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Money Range</label>
                                                <div class="col-md-10"> <b style="margin-right: 15px;">€ 10</b>
                                                    <input id="ex2" type="text" data-slider-id='ex2' class="slider form-control" data-slider-handle="square" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]"/> <b style="margin-left: 15px;">€ 1000</b>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Color Range</label>
                                                <div class="col-md-10">
                                                    <div class="well">
                                                        <p>
                                                            <b  style="margin-right: 15px;">R</b>
                                                            <input type="text" class="slider form-control" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="RC" id="R" data-slider-tooltip="hide" data-slider-handle="square" />
                                                        </p>
                                                        <p>
                                                            <b style="margin-right: 15px;">G</b>
                                                            <input type="text" class="slider form-control" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="GC" id="G" data-slider-tooltip="hide" data-slider-handle="round" />
                                                        </p>
                                                        <p>
                                                            <b style="margin-right: 15px;">B</b>
                                                            <input type="text" class="slider form-control" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="BC" id="B" data-slider-tooltip="hide" data-slider-handle="triangle" />
                                                        </p>
                                                        <div id="RGB"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Vertical Slider</label>
                                                    <div class="col-md-10">
                                                        <input id="ex4" type="text" class="slider form-control" data-slider-id='ex4' data-slider-handle="square" data-slider-min="-5" data-slider-max="20" data-slider-step="1" data-slider-value="-3" data-slider-orientation="vertical" />
                                                    </div>
                                                    </div>
                                                    <div class="form-group destroy-margt">
                                                        <label class="col-md-2 control-label">Destroy</label>
                                                        <div class="col-md-10">
                                                            <input id="ex5"  type="text" data-slider-min="-5" data-slider-max="20" data-slider-step="1" data-slider-handle="square" data-slider-value="0" />
                                                            <button type="button" id="destroyEx5Slider" class='btn btn-danger'>Click to Destroy</button>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Current Range</label>
                                                        <div class="col-md-10">
                                                            <input id="ex6" type="text" class="slider form-control" data-slider-id='ex6' data-slider-min="-5" data-slider-handle="square" data-slider-max="20" data-slider-step="1" data-slider-value="3" />
                                                            <span id="ex6CurrentSliderValLabel" style="margin-left: 10px;">
                                                                Current Slider Value:
                                                                <span id="ex6SliderVal">3</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Enable Slider</label>
                                                        <div class="col-md-10">
                                                            <input id="ex7" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="5" data-slider-enabled="false" data-slider-handle="square" data-slider-id="RED"/>
                                                            <input id="ex7-enabled" type="checkbox" style="margin-left: 10px;"/> Enabled
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Tooltip Slider</label>
                                                        <div class="col-md-10">
                                                            <input id="ex8" class="slider form-control" data-slider-id='ex8' type="text" data-slider-min="0" data-slider-handle="square" data-slider-max="20" data-slider-step="1" data-slider-value="14" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group last">
                                                        <label class="col-md-2 control-label">Precision Slider</label>
                                                        <div class="col-md-10">
                                                            <input id="ex9" class="slider form-control" data-slider-id='ex9' data-slider-handle="square" type="text" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    </form>
                                </div>
                                <!--slider ends-->
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
    <script src="{{ asset('assets/vendors/ion_rangeslider/js/ion.rangeSlider.js') }}" ></script>
    <script src="{{ asset('assets/vendors/bootstrap-slider/js/bootstrap-slider.js') }}" ></script>
    <script src="{{ asset('assets/vendors/ion_rangeslider/js/ion.rangeSlider.js') }}" ></script>
    <script src="{{ asset('assets/vendors/bootstrap-slider/js/bootstrap-slider.js') }}" ></script>
    <script src="{{ asset('assets/js/pages/sliders.js') }}"></script>
@stop
