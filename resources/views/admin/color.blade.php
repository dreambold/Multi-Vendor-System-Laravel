@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Color Picker
@parent
@stop

{{-- page level styles --}}
@section('header_styles')    

<link href="{{ asset('assets/vendors/colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet" type="text/css"/>
<style>
    .colorpicker-right:after {
        top: -16px;
    }
</style>
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Color picker slider</h1>
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
                    <li class="active">Color picker slider</li>
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
                                    <i class="livicon" data-name="eyedropper" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Color Picker
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body" id="panel-bg">
                                <div class="paddingtopbottom_5px">
                                    <div class="form-group">
                                        <label class="control-label">Color picker with Hexa code:</label>
                                        <input type="text" id="picker1" class="form-control" value="#5367ce" />
                                    </div>
                                </div>
                                <div class="paddingtopbottom_5px">
                                    <label class="control-label">color picker with rgba code with Transperancy</label>
                                    <div class="input-group" id="picker2">
                                        <input type="text" value="#85562c" class="form-control" />
                                        <span class="input-group-addon"><i></i></span>
                                    </div>
                                </div>
                                <div class="paddingtopbottom_5px">
                                    <label class="control-label"> Horizontal Transperancy</label>
                                    <div class="input-group" id="picker3">
                                        <input type="text" class="form-control" value="#8fff00"/>
                                        <span class="input-group-addon"><i></i></span>
                                    </div>
                                </div>
                                <div class="paddingtopbottom_5px">
                                    <div class="form-group">
                                        <label class="control-label"> Bootstrap Colors Picker</label>
                                        <input type="text" data-format="hex" class="form-control demo" id="picker4" value="success"/>
                                    </div>
                                </div>
                                <div class="paddingtopbottom_5px">
                                    <a href="#" class="btn small" id="bg-picker" data-color="rgb(255, 255, 255)"><strong>Change
                                            background color</strong></a>
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
    
    <!--color picker slider-->

<script src="{{ asset('assets/vendors/colorpicker/js/bootstrap-colorpicker.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/pages/color-picker.js') }}" type="text/javascript"></script>

    
@stop
