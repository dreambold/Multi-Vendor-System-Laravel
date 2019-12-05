@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Animated Icons
@parent
@stop

{{-- page level styles --}}
@section('header_styles')    
    
	<link href="{{ asset('assets/css/pages/icon.css') }}" rel="stylesheet" type="text/css" />
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Animated Icons</h1>
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
                    <li class="active">Animated Icons</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content paddingleft_right15">
                <!--main content-->

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="brightness-down" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Animated Icons
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="adjust" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="alarm" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="apple" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="balance" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="ban" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="globe" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="barchart" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="beer" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="bell" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="biohazard" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="bolt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="bookmark" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="briefcase" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="brush" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="bug" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="calendar" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="camcoder" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="camera" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="camera-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="car" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="cellphone" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="certificate" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="check" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="check-circle" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="check-circle-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="checked-off" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="checked-on" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="circle" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="circle-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="clapboard" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="clip" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="clock" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="cloud" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="cloud-bolts" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="cloud-rain" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="cloud-snow" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="cloud-sun" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="cloud-down" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="cloud-up" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="code" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="comment" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="comments" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="compass" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="credit-card" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="css3" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="dashboard" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="desktop" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="doc-landscape" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="doc-portrait" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="download" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="download-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="drop" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="edit" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="eye-close" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="eye-open" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="film" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="filter" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="fire" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="flag" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="gear" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="gears" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="ghost" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="gift" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="glass" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="globe" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="hammer" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="heart" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="heart-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="help" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="home" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="html5" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="image" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="inbox" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="info" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="key" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="calender" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="lab" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="laptop" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="leaf" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="legal" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="linechart" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="link" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="location" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="lock" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="magic" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="magic-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="magnet" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="mail" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="mail-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="map" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="minus" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="minus-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="money" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="more" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="move" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="music" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>

                                <!--jareena -->

                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="notebook" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="pacman" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="pen" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="pencil" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="phone" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="piechart" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="piggybank" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="plane-down" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="plane-up" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="plus" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="plus-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="presentation" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="printer" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="qrcode" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="question" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="quote-left" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="quote-right" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="remove" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="remove-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="remove-circle" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="responsive" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="responsive-menu" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="retweet" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="rocket" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="sandglass" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="scissors" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="screenshot" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="search" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="settings" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="share" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="shield" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="shopping-cart" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="shuffle" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="sign-in" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="sign-out" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="signal" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="sitemap" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="sky-dish" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="sort" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="sort-down" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="sort-up" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="star-empty" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="star-full" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="star-half" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="stopwatch" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="sun" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="tablet" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="tag" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="tags" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="tasks" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="thermo-down" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="thermo-up" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="thumbs-up" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="thumbs-down" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="trash" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="tree" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="trophy" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="truck" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="umbrella" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="unlock" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="upload" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="upload-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="user" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="users" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="warning" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="warning-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="wrench" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="zoom-in" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="zoom-out" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>

                                <!--Arrows and Directional Icons -->
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="angle-down" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="angle-left" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="angle-right" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="angle-up" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="angle-double-down" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="angle-double-left" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="angle-double-right" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="angle-double-up" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="angle-wide-down" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="arrow-down" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="arrow-left" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="arrow-right" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="arrow-up" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="arrow-circle-down" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="arrow-circle-left" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="arrow-circle-right" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="arrow-circle-up" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="caret-down" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="caret-left" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="caret-right" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="caret-up" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="chevron-down" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="chevron-left" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="chevron-right" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="chevron-up" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="exchange" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="external-link" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="hand-down" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="hand-left" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="hand-right" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="hand-up" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="recycled" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="redo" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="refresh" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="resize-big" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="resize-big-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="resize-horizontal" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="resize-horizontal-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="resize-small" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="resize-small-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="resize-vertical" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="resize-vertical-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="rotate-left" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="rotate-right" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="undo" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>

                                <!-- Text Control Icons -->

                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="align-center" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="align-justify" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="align-left" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="align-right" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="bold" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="columns" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="font" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="italic" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="list" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="list-ol" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="list-ul" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="table" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="underline" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>

                                <!-- Video Player Icons -->

                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="video-play" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="video-play-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="video-stop" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="video-pause" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="video-eject" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="video-backward" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="video-step-backward" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="video-fast-backward" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="video-forward" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="video-step-forward" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="video-fast-forward" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="screen-full" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="screen-full-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="screen-small" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="screen-small-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="speaker" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <!-- Socials, OSs, Browsers, JS libs and others Icons (not animated) - Just Static    -->
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="dropbox" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="facebook" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="facebook-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="flickr" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="flickr-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="google-plus" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="google-plus-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="linkedin" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="linkedin-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="myspace" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="pinterest" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="pinterest-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="rss" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="skype" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="stumbleupon" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="stumbleupon-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="twitter" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="twitter-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="wordpress" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="wordpress-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="youtube" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="android" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="ios" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="windows" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="windows8" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="chrome" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="firefox" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="ie" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="safari" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="bootstrap" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="jquery" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="raphael" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="paypal" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="livicon" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <!--Spinner Icons -->
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="spinner-one" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="spinner-two" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="spinner-three" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="spinner-four" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="spinner-five" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="spinner-six" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="spinner-seven" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <!-- Morphs Icons-->

                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="morph-c-s" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="morph-c-o" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="morph-s-c" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="morph-s-o" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="morph-o-c" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="morph-o-s" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="morph-c-t-up" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="morph-s-t-up" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="morph-o-t-up" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="morph-t-up-c" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="morph-t-up-s" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="morph-t-up-o" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="morph-c-t-right" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="morph-s-t-right" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="morph-o-t-right" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="morph-t-right-c" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="morph-t-right-s" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="morph-t-right-o" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="morph-c-t-down" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="morph-s-t-down" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="morph-o-t-down" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="morph-t-down-c" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="morph-t-down-s" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="morph-t-down-o" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="morph-c-t-left" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="morph-s-t-left" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="morph-o-t-left" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="morph-t-left-c" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="morph-t-left-s" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="morph-t-left-o" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <!-- NEW in LivIcons (v1.3 of jQuery plugin and v1.1 of WP plugin)-->
                                <!-- New animated icons-->
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="connect" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="disconnect" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="collapse-down" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="collapse-up" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="expand-left" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="expand-right" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="battery" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="medal" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="servers" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <!-- New static (Brand) icons-->
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="apple-logo" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="bing" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="bitbucket" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="blogger" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="concrete5" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="deviantart" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="dribbble" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="github" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="github-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="instagram" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="opera" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="reddit" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="soundcloud" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="tumblr" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="vimeo" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="vk" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="xing" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="yahoo" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <!-- New in LivIcons (v1.2 of jQuery plugin and v1.0 of WP plugin)-->
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="address-book" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="albums" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="anchor" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="archive-add" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="archive-extract" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="asterisk" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="bluetooth" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="brightness-down" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="brightness-up" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="crop" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="eyedropper" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="file-export" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="file-import" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="folder-add" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="folder-flag" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="folder-lock" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="folder-new" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="folder-open" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="folder-remove" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="inbox-empty" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="inbox-in" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="inbox-out" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="indent-left" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="indent-right" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="message-add" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="message-flag" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="message-lock" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="message-new" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="message-in" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="message-remove" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="message-out" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="microphone" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="moon" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="new-window" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="pin-off" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="pin-on" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="playlist" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="save" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="shopping-cart-in" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="shopping-cart-out" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="striked" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="text-decrease" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="text-height" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="text-increase" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="text-size" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="text-width" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="thumbnails-big" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="thumbnails-small" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="timer" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="unlink" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="user-add" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="user-ban" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="user-flag" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="user-remove" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="users-add" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="users-ban" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="users-remove" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="vector-circle" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="vector-curve" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l1">
                                    <i class="livicon" data-name="vector-line" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l2">
                                    <i class="livicon" data-name="vector-polygon" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l3">
                                    <i class="livicon" data-name="vector-square" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l4">
                                    <i class="livicon" data-name="webcam" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l5">
                                    <i class="livicon" data-name="wifi" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center l6">
                                    <i class="livicon" data-name="wifi-alt" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true"></i>
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
    
    <script type="text/javascript">
    $(window).load(function() {
        $(".loader").fadeOut("slow");
    })
    </script>
    
@stop
