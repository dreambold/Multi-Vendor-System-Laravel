@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Form Builder
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    
    <link href="{{ asset('assets/vendors/bootstrap-form-builder/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/pages/formbuilder.css') }}" rel="stylesheet" />
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
            <!--section starts-->
            <h1>Form Builder</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">Builders</a>
                </li>
                <li class="active">Form Builder</li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <!--main content-->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissable visible-xs visible-md">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        May not work properly in touch enabled devices as it as requires drag and drop.
                    </div>
                    <!--form builder-->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="help" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                Drag & Drop components
                            </h3>
                            <span class="pull-right clickable">
                                <i class="glyphicon glyphicon-chevron-up"></i>
                            </span>
                        </div>
                        <div class="panel-body ">
                            <div class="row clearfix">
                                <!-- Components -->
                                <div class="col-md-7">
                                    <div class="tabbable">
                                        <ul class="nav nav-tabs" id="formtabs">
                                            <!-- Tab nav --> </ul>
                                        <form class="form-horizontal" id="components" role="form">
                                            <fieldset>
                                                <div class="tab-content">
                                                    <!-- Tabs of snippets go here --> </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <!-- / Components -->
                                <!-- Building Form. -->
                                <div class="col-md-5">
                                    <div class="clearfix">
                                        <p class="padding_p">Drag elements here</p>
                                        <hr class="hr-ddd">
                                        <div id="build">
                                            <form id="target" class="form-horizontal"></form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / Building Form. --> </div>
                    <!-- / Components --> </div>
                <!--form builder ends--> </div>
        </section>
        <!--main content ends--> 
@stop

{{-- page level scripts --}}
@section('footer_scripts')

<script data-main="{{ asset('assets/vendors/bootstrap-form-builder/js/main-built.js') }}" src="{{ asset('assets/vendors/bootstrap-form-builder/js/lib/require.js') }}" ></script>

@stop
