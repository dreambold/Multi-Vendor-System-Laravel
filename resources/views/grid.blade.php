@extends('layouts/default')

{{-- Page title --}}
@section('title')
Grid
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/features.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/panel.css') }}">
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
                    <a href="#">Grid</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="responsive-menu" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Grid System
            </div>
        </div>
    </div>
    @stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <!-- Grid Section Start -->
        <div class="row">
            <h2 style="margin-left: 10px;">Grid System</h2>
            <form class="grid">
                <div class="form-group row">
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 form_padding">
                        <input class="form-control" placeholder=".col-lg-1" type="text">
                    </div>
                    <!-- /.col-lg-1 -->
                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                        <input class="form-control" placeholder=".col-lg-11" type="text">
                    </div>
                    <!-- /.col-lg-11 -->
                </div>
                <div class="form-group row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <input class="form-control" placeholder=".col-lg-2" type="text">
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <input class="form-control" placeholder=".col-lg-10" type="text">
                    </div>
                    <!-- /.col-lg-10 -->
                </div>
                <div class="form-group row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <input class="form-control" placeholder=".col-lg-3" type="text">
                    </div>
                    <!-- /.col-lg-3 -->
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                        <input class="form-control" placeholder=".col-lg-9" type="text">
                    </div>
                    <!-- /.col-lg-9 -->
                </div>
                <div class="form-group row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <input class="form-control" placeholder=".col-lg-4" type="text">
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <input class="form-control" placeholder=".col-lg-8" type="text">
                    </div>
                    <!-- /.col-lg-8 -->
                </div>
                <div class="form-group row">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <input class="form-control" placeholder=".col-lg-5" type="text">
                    </div>
                    <!-- /.col-lg-5 -->
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                        <input class="form-control" placeholder=".col-lg-7" type="text">
                    </div>
                    <!-- /.col-lg-7 -->
                </div>
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <input class="form-control" placeholder=".col-lg-6" type="text">
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <input class="form-control" placeholder=".col-lg-6" type="text">
                    </div>

                    <!-- /.col-lg-6 -->
                </div>
                <div class="form-group row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <input class="form-control" placeholder=".col-lg-4" type="text">
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <input class="form-control" placeholder=".col-lg-4" type="text">
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <input class="form-control" placeholder=".col-lg-4" type="text">
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <div class="form-group row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <input class="form-control" placeholder=".col-lg-3" type="text">
                    </div>
                    <!-- /.col-lg-3 -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <input class="form-control" placeholder=".col-lg-4" type="text">
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <input class="form-control" placeholder=".col-lg-5" type="text">
                    </div>
                    <!-- /.col-lg-5 -->
                </div>
            </form>
        </div>
        <!-- //Grid Section End -->
        <!-- Bootstrap Grid Section Start -->
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="star-half" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Bootstrap grid Examples
                        </h3>
                    </div>
                    <div class="panel-body" id="slim1">
                        <p>
                            we created some grid samples now you can examine in your browser. This first grid is using all 4 grid sizes combined in a single row. second grid indicates xs Grid,Third grid indicates sm Grid,fourth grid indicates md,fifth grid indicates lg.
                        </p>
                        <div class="panel-heading">
                            <p class="visible-lg">
                                lg indicates that the large grid displaying. The grid stacks horizontally &lt; 1200px.
                            </p>
                            <p class="visible-md">
                                md indicates that the medium grid displaying. The grid stacks horizontally &lt; 992px.
                            </p>
                            <p class="visible-sm">
                                sm indicates that the small grid displaying. The grid stacks horizontally &lt; 768px.
                            </p>
                            <p class="visible-xs">
                                xs indicates that the extra small grid displaying. This grid is always horizontal.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-1 col-sm-2 col-xs-5 text-center bar-primary lg-grid">
                                <span class="visible-lg">.col-lg-4</span>
                                <span class="visible-md">.col-md-1</span>
                                <span class="visible-sm">.col-sm-2</span>
                                <span class="visible-xs">.col-xs-5</span>
                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-4 col-xs-4 text-center bar-success lg-grid">
                                <span class="visible-lg">.col-lg-4</span>
                                <span class="visible-md">.col-md-5</span>
                                <span class="visible-sm">.col-sm-4</span>
                                <span class="visible-xs">.col-xs-4</span>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-3 text-center bar-danger lg-grid">
                                <span class="visible-lg">.col-lg-4</span>
                                <span class="visible-md">.col-md-6</span>
                                <span class="visible-sm">.col-sm-6</span>
                                <span class="visible-xs">.col-xs-3</span>
                            </div>
                        </div>
                        <div class="row">
                            <h3>xs Grid</h3>
                            <div class="col-xs-5 text-center bar-primary">
                                <p>.col-xs-5</p>
                            </div>
                            <div class="col-xs-4 text-center bar-success">
                                <p>.col-xs-4</p>
                            </div>
                            <div class="col-xs-3 text-center bar-danger">
                                <p>.col-xs-3</p>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <h3>sm Grid</h3>
                            <div class="col-sm-2 text-center bar-primary">
                                <p>.col-sm-2</p>
                            </div>
                            <div class="col-sm-4 text-center bar-success">
                                <p>.col-sm-4</p>
                            </div>
                            <div class="col-sm-6 text-center bar-danger">
                                <p>.col-sm-6</p>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row">

                            <h3 class="sub">md Grid</h3>
                            <div class="col-md-1 text-center bar-primary">
                                <p>.col-md-1</p>
                            </div>
                            <div class="col-md-5 text-center bar-success">
                                <p>.col-md-5</p>
                            </div>
                            <div class="col-md-6 text-center bar-danger">
                                <p>.col-md-6</p>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <h3>lg Grid</h3>
                            <div class="col-lg-4 text-center bar-primary">
                                <p>.col-lg-4</p>
                            </div>
                            <div class="col-lg-4 text-center bar-success">
                                <p>.col-lg-4</p>
                            </div>
                            <div class="col-lg-4 text-center bar-danger">
                                <p>.col-lg-4</p>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div>
        <!-- //Bootstrap Grid Section End -->
    </div>
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
