@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Font Icons
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    
    <link rel="stylesheet" href="{{ asset('assets/vendors/simple-line-icons/css/simple-line-icons.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/ionicons/css/ionicons.min.css') }}" />
    <link href="{{ asset('assets/css/pages/icon.css') }}" rel="stylesheet" type="text/css" />

@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Font Icons</h1>
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
                    <li class="active">Font Icons</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content paddingleft_right15">
                <!--main content-->

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Icons
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body" id="slim">
                        <div class='row'>
                            <div class='col-xs-12'>
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#fa-icons" data-toggle="tab">Font Awesome</a>
                                        </li>
                                        <li>
                                            <a href="#glyphicons" data-toggle="tab">Glyphicons</a>
                                        </li>
                                        <li>
                                            <a href="#ionicons" data-toggle="tab">Ionicons</a>
                                        </li>
                                        <li>
                                            <a href="#lineicons" data-toggle="tab">Simple Line Icons</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <!-- Font Awesome icons -->
                                        <div class="tab-pane active" id="fa-icons">
                                            <section id="new">
                                                <h4 class="page-header">15 New Icons in 4.0</h4>
                                                <div class="row fontawesome-icon-list">
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-rub"></i>
                                                        fa-rub
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-ruble"></i>
                                                        fa-ruble
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-rouble"></i>
                                                        fa-rouble
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-pagelines"></i>
                                                        fa-pagelines
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-stack-exchange"></i>
                                                        fa-stack-exchange
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-arrow-circle-o-right"></i>
                                                        fa-arrow-circle-o-right
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-arrow-circle-o-left"></i>
                                                        fa-arrow-circle-o-left
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-caret-square-o-left"></i>
                                                        fa-caret-square-o-left
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-toggle-left"></i>
                                                        fa-toggle-left
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-dot-circle-o"></i>
                                                        fa-dot-circle-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-wheelchair"></i>
                                                        fa-wheelchair
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-vimeo-square"></i>
                                                        fa-vimeo-square
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-try"></i>
                                                        fa-try
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-turkish-lira"></i>
                                                        fa-turkish-lira
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-plus-square-o"></i>
                                                        fa-plus-square-o
                                                    </div>
                                                </div>
                                            </section>
                                            <section id="web-application">
                                                <h4 class="page-header">Web Application Icons</h4>
                                                <div class="row fontawesome-icon-list">
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-adjust"></i>
                                                        fa-adjust
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-anchor"></i>
                                                        fa-anchor
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-archive"></i>
                                                        fa-archive
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-arrows"></i>
                                                        fa-arrows
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-arrows-h"></i>
                                                        fa-arrows-h
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-arrows-v"></i>
                                                        fa-arrows-v
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-asterisk"></i>
                                                        fa-asterisk
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-ban"></i>
                                                        fa-ban
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-bar-chart-o"></i>
                                                        fa-bar-chart-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-barcode"></i>
                                                        fa-barcode
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-bars"></i>
                                                        fa-bars
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-beer"></i>
                                                        fa-beer
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-bell"></i>
                                                        fa-bell
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-bell-o"></i>
                                                        fa-bell-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-bolt"></i>
                                                        fa-bolt
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-book"></i>
                                                        fa-book
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-bookmark"></i>
                                                        fa-bookmark
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-bookmark-o"></i>
                                                        fa-bookmark-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-briefcase"></i>
                                                        fa-briefcase
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-bug"></i>
                                                        fa-bug
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-building-o"></i>
                                                        fa-building-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-bullhorn"></i>
                                                        fa-bullhorn
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-bullseye"></i>
                                                        fa-bullseye
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-calendar"></i>
                                                        fa-calendar
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-calendar-o"></i>
                                                        fa-calendar-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-camera"></i>
                                                        fa-camera
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-camera-retro"></i>
                                                        fa-camera-retro
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-caret-square-o-down"></i>
                                                        fa-caret-square-o-down
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-caret-square-o-left"></i>
                                                        fa-caret-square-o-left
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-caret-square-o-right"></i>
                                                        fa-caret-square-o-right
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-caret-square-o-up"></i>
                                                        fa-caret-square-o-up
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-certificate"></i>
                                                        fa-certificate
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-check"></i>
                                                        fa-check
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-check-circle"></i>
                                                        fa-check-circle
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-check-circle-o"></i>
                                                        fa-check-circle-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-check-square"></i>
                                                        fa-check-square
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-check-square-o"></i>
                                                        fa-check-square-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-circle"></i>
                                                        fa-circle
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-circle-o"></i>
                                                        fa-circle-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-clock-o"></i>
                                                        fa-clock-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-cloud"></i>
                                                        fa-cloud
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-cloud-download"></i>
                                                        fa-cloud-download
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-cloud-upload"></i>
                                                        fa-cloud-upload
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-code"></i>
                                                        fa-code
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-code-fork"></i>
                                                        fa-code-fork
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-coffee"></i>
                                                        fa-coffee
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-cog"></i>
                                                        fa-cog
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-cogs"></i>
                                                        fa-cogs
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-comment"></i>
                                                        fa-comment
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-comment-o"></i>
                                                        fa-comment-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-comments"></i>
                                                        fa-comments
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-comments-o"></i>
                                                        fa-comments-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-compass"></i>
                                                        fa-compass
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-credit-card"></i>
                                                        fa-credit-card
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-crop"></i>
                                                        fa-crop
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-crosshairs"></i>
                                                        fa-crosshairs
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-cutlery"></i>
                                                        fa-cutlery
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-dashboard"></i>
                                                        fa-dashboard
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-desktop"></i>
                                                        fa-desktop
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-dot-circle-o"></i>
                                                        fa-dot-circle-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-download"></i>
                                                        fa-download
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-edit"></i>
                                                        fa-edit
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-ellipsis-h"></i>
                                                        fa-ellipsis-h
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-ellipsis-v"></i>
                                                        fa-ellipsis-v
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-envelope"></i>
                                                        fa-envelope
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-envelope-o"></i>
                                                        fa-envelope-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-eraser"></i>
                                                        fa-eraser
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-exchange"></i>
                                                        fa-exchange
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-exclamation"></i>
                                                        fa-exclamation
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-exclamation-circle"></i>
                                                        fa-exclamation-circle
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-exclamation-triangle"></i>
                                                        fa-exclamation-triangle
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-external-link"></i>
                                                        fa-external-link
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-external-link-square"></i>
                                                        fa-external-link-square
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-eye"></i>
                                                        fa-eye
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-eye-slash"></i>
                                                        fa-eye-slash
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-female"></i>
                                                        fa-female
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-fighter-jet"></i>
                                                        fa-fighter-jet
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-film"></i>
                                                        fa-film
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-filter"></i>
                                                        fa-filter
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-fire"></i>
                                                        fa-fire
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-fire-extinguisher"></i>
                                                        fa-fire-extinguisher
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-flag"></i>
                                                        fa-flag
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-flag-checkered"></i>
                                                        fa-flag-checkered
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-flag-o"></i>
                                                        fa-flag-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-flash"></i>
                                                        fa-flash
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-flask"></i>
                                                        fa-flask
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-folder"></i>
                                                        fa-folder
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-folder-o"></i>
                                                        fa-folder-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-folder-open"></i>
                                                        fa-folder-open
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-folder-open-o"></i>
                                                        fa-folder-open-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-frown-o"></i>
                                                        fa-frown-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-gamepad"></i>
                                                        fa-gamepad
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-gavel"></i>
                                                        fa-gavel
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-gear"></i>
                                                        fa-gear
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-gears"></i>
                                                        fa-gears
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-gift"></i>
                                                        fa-gift
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-glass"></i>
                                                        fa-glass
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-globe"></i>
                                                        fa-globe
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-group"></i>
                                                        fa-group
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-hdd-o"></i>
                                                        fa-hdd-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-headphones"></i>
                                                        fa-headphones
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-heart"></i>
                                                        fa-heart
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-heart-o"></i>
                                                        fa-heart-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-home"></i>
                                                        fa-home
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-inbox"></i>
                                                        fa-inbox
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-info"></i>
                                                        fa-info
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-info-circle"></i>
                                                        fa-info-circle
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-key"></i>
                                                        fa-key
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-keyboard-o"></i>
                                                        fa-keyboard-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-laptop"></i>
                                                        fa-laptop
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-leaf"></i>
                                                        fa-leaf
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-legal"></i>
                                                        fa-legal
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-lemon-o"></i>
                                                        fa-lemon-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-level-down"></i>
                                                        fa-level-down
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-level-up"></i>
                                                        fa-level-up
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-lightbulb-o"></i>
                                                        fa-lightbulb-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-location-arrow"></i>
                                                        fa-location-arrow
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-lock"></i>
                                                        fa-lock
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-magic"></i>
                                                        fa-magic
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-magnet"></i>
                                                        fa-magnet
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-mail-forward"></i>
                                                        fa-mail-forward
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-mail-reply"></i>
                                                        fa-mail-reply
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-mail-reply-all"></i>
                                                        fa-mail-reply-all
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-male"></i>
                                                        fa-male
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-map-marker"></i>
                                                        fa-map-marker
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-meh-o"></i>
                                                        fa-meh-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-microphone"></i>
                                                        fa-microphone
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-microphone-slash"></i>
                                                        fa-microphone-slash
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-minus"></i>
                                                        fa-minus
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-minus-circle"></i>
                                                        fa-minus-circle
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-minus-square"></i>
                                                        fa-minus-square
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-minus-square-o"></i>
                                                        fa-minus-square-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-mobile"></i>
                                                        fa-mobile
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-mobile-phone"></i>
                                                        fa-mobile-phone
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-money"></i>
                                                        fa-money
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-moon-o"></i>
                                                        fa-moon-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-music"></i>
                                                        fa-music
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-pencil"></i>
                                                        fa-pencil
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-pencil-square"></i>
                                                        fa-pencil-square
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-pencil-square-o"></i>
                                                        fa-pencil-square-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-phone"></i>
                                                        fa-phone
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-phone-square"></i>
                                                        fa-phone-square
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-picture-o"></i>
                                                        fa-picture-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-plane"></i>
                                                        fa-plane
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-plus"></i>
                                                        fa-plus
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-plus-circle"></i>
                                                        fa-plus-circle
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-plus-square"></i>
                                                        fa-plus-square
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-plus-square-o"></i>
                                                        fa-plus-square-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-power-off"></i>
                                                        fa-power-off
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-print"></i>
                                                        fa-print
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-puzzle-piece"></i>
                                                        fa-puzzle-piece
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-qrcode"></i>
                                                        fa-qrcode
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-question"></i>
                                                        fa-question
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-question-circle"></i>
                                                        fa-question-circle
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-quote-left"></i>
                                                        fa-quote-left
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-quote-right"></i>
                                                        fa-quote-right
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-random"></i>
                                                        fa-random
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-refresh"></i>
                                                        fa-refresh
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-reply"></i>
                                                        fa-reply
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-reply-all"></i>
                                                        fa-reply-all
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-retweet"></i>
                                                        fa-retweet
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-road"></i>
                                                        fa-road
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-rocket"></i>
                                                        fa-rocket
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-rss"></i>
                                                        fa-rss
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-rss-square"></i>
                                                        fa-rss-square
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-search"></i>
                                                        fa-search
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-search-minus"></i>
                                                        fa-search-minus
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-search-plus"></i>
                                                        fa-search-plus
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-share"></i>
                                                        fa-share
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-share-square"></i>
                                                        fa-share-square
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-share-square-o"></i>
                                                        fa-share-square-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-shield"></i>
                                                        fa-shield
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-shopping-cart"></i>
                                                        fa-shopping-cart
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-sign-in"></i>
                                                        fa-sign-in
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-sign-out"></i>
                                                        fa-sign-out
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-signal"></i>
                                                        fa-signal
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-sitemap"></i>
                                                        fa-sitemap
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-smile-o"></i>
                                                        fa-smile-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-sort"></i>
                                                        fa-sort
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-sort-alpha-asc"></i>
                                                        fa-sort-alpha-asc
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-sort-alpha-desc"></i>
                                                        fa-sort-alpha-desc
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-sort-amount-asc"></i>
                                                        fa-sort-amount-asc
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-sort-amount-desc"></i>
                                                        fa-sort-amount-desc
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-sort-asc"></i>
                                                        fa-sort-asc
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-sort-desc"></i>
                                                        fa-sort-desc
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-sort-down"></i>
                                                        fa-sort-down
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-sort-numeric-asc"></i>
                                                        fa-sort-numeric-asc
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-sort-numeric-desc"></i>
                                                        fa-sort-numeric-desc
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-sort-up"></i>
                                                        fa-sort-up
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-spinner"></i>
                                                        fa-spinner
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-square"></i>
                                                        fa-square
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-square-o"></i>
                                                        fa-square-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-star"></i>
                                                        fa-star
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-star-half"></i>
                                                        fa-star-half
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-star-half-empty"></i>
                                                        fa-star-half-empty
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-star-half-full"></i>
                                                        fa-star-half-full
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-star-half-o"></i>
                                                        fa-star-half-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-star-o"></i>
                                                        fa-star-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-subscript"></i>
                                                        fa-subscript
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-suitcase"></i>
                                                        fa-suitcase
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-sun-o"></i>
                                                        fa-sun-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-superscript"></i>
                                                        fa-superscript
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-tablet"></i>
                                                        fa-tablet
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-tachometer"></i>
                                                        fa-tachometer
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-tag"></i>
                                                        fa-tag
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-tags"></i>
                                                        fa-tags
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-tasks"></i>
                                                        fa-tasks
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-terminal"></i>
                                                        fa-terminal
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-thumb-tack"></i>
                                                        fa-thumb-tack
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-thumbs-down"></i>
                                                        fa-thumbs-down
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-thumbs-o-down"></i>
                                                        fa-thumbs-o-down
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-thumbs-o-up"></i>
                                                        fa-thumbs-o-up
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-thumbs-up"></i>
                                                        fa-thumbs-up
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-ticket"></i>
                                                        fa-ticket
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-times"></i>
                                                        fa-times
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-times-circle"></i>
                                                        fa-times-circle
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-times-circle-o"></i>
                                                        fa-times-circle-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-tint"></i>
                                                        fa-tint
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-toggle-down"></i>
                                                        fa-toggle-down
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-toggle-left"></i>
                                                        fa-toggle-left
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-toggle-right"></i>
                                                        fa-toggle-right
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-toggle-up"></i>
                                                        fa-toggle-up
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-trash-o"></i>
                                                        fa-trash-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-trophy"></i>
                                                        fa-trophy
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-truck"></i>
                                                        fa-truck
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-umbrella"></i>
                                                        fa-umbrella
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-unlock"></i>
                                                        fa-unlock
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-unlock-alt"></i>
                                                        fa-unlock-alt
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-unsorted"></i>
                                                        fa-unsorted
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-upload"></i>
                                                        fa-upload
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-user"></i>
                                                        fa-user
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-users"></i>
                                                        fa-users
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-video-camera"></i>
                                                        fa-video-camera
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-volume-down"></i>
                                                        fa-volume-down
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-volume-off"></i>
                                                        fa-volume-off
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-volume-up"></i>
                                                        fa-volume-up
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-warning"></i>
                                                        fa-warning
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-wheelchair"></i>
                                                        fa-wheelchair
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-wrench"></i>
                                                        fa-wrench
                                                    </div>
                                                </div>
                                            </section>
                                            <section id="form-control">
                                                <h4 class="page-header">Form Control Icons</h4>
                                                <div class="row fontawesome-icon-list">
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-check-square"></i>
                                                        fa-check-square
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-check-square-o"></i>
                                                        fa-check-square-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-circle"></i>
                                                        fa-circle
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-circle-o"></i>
                                                        fa-circle-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-dot-circle-o"></i>
                                                        fa-dot-circle-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-minus-square"></i>
                                                        fa-minus-square
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-minus-square-o"></i>
                                                        fa-minus-square-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-plus-square"></i>
                                                        fa-plus-square
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-plus-square-o"></i>
                                                        fa-plus-square-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-square"></i>
                                                        fa-square
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-square-o"></i>
                                                        fa-square-o
                                                    </div>
                                                </div>
                                            </section>
                                            <section id="currency">
                                                <h4 class="page-header">Currency Icons</h4>
                                                <div class="row fontawesome-icon-list">
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-bitcoin"></i>
                                                        fa-bitcoin
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-btc"></i>
                                                        fa-btc
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-cny"></i>
                                                        fa-cny
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-dollar"></i>
                                                        fa-dollar
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-eur"></i>
                                                        fa-eur
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-euro"></i>
                                                        fa-euro
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-gbp"></i>
                                                        fa-gbp
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-inr"></i>
                                                        fa-inr
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-jpy"></i>
                                                        fa-jpy
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-krw"></i>
                                                        fa-krw
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-money"></i>
                                                        fa-money
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-rmb"></i>
                                                        fa-rmb
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-rouble"></i>
                                                        fa-rouble
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-rub"></i>
                                                        fa-rub
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-ruble"></i>
                                                        fa-ruble
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-rupee"></i>
                                                        fa-rupee
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-try"></i>
                                                        fa-try
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-turkish-lira"></i>
                                                        fa-turkish-lira
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-usd"></i>
                                                        fa-usd
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-won"></i>
                                                        fa-won
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-yen"></i>
                                                        fa-yen
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                </div>
                                            </section>
                                            <section id="text-editor">
                                                <h4 class="page-header">Text Editor Icons</h4>
                                                <div class="row fontawesome-icon-list">
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-align-center"></i>
                                                        fa-align-center
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-align-justify"></i>
                                                        fa-align-justify
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-align-left"></i>
                                                        fa-align-left
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-align-right"></i>
                                                        fa-align-right
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-bold"></i>
                                                        fa-bold
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-chain"></i>
                                                        fa-chain
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-chain-broken"></i>
                                                        fa-chain-broken
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-clipboard"></i>
                                                        fa-clipboard
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-columns"></i>
                                                        fa-columns
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-copy"></i>
                                                        fa-copy
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-cut"></i>
                                                        fa-cut
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-dedent"></i>
                                                        fa-dedent
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-eraser"></i>
                                                        fa-eraser
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-file"></i>
                                                        fa-file
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-file-o"></i>
                                                        fa-file-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-file-text"></i>
                                                        fa-file-text
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-file-text-o"></i>
                                                        fa-file-text-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-files-o"></i>
                                                        fa-files-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-floppy-o"></i>
                                                        fa-floppy-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-font"></i>
                                                        fa-font
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-indent"></i>
                                                        fa-indent
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-italic"></i>
                                                        fa-italic
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-link"></i>
                                                        fa-link
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-list"></i>
                                                        fa-list
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-list-alt"></i>
                                                        fa-list-alt
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-list-ol"></i>
                                                        fa-list-ol
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-list-ul"></i>
                                                        fa-list-ul
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-outdent"></i>
                                                        fa-outdent
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-paperclip"></i>
                                                        fa-paperclip
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-paste"></i>
                                                        fa-paste
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-repeat"></i>
                                                        fa-repeat
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-rotate-left"></i>
                                                        fa-rotate-left
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-rotate-right"></i>
                                                        fa-rotate-right
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-save"></i>
                                                        fa-save
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-scissors"></i>
                                                        fa-scissors
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-strikethrough"></i>
                                                        fa-strikethrough
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-table"></i>
                                                        fa-table
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-text-height"></i>
                                                        fa-text-height
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-text-width"></i>
                                                        fa-text-width
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-th"></i>
                                                        fa-th
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-th-large"></i>
                                                        fa-th-large
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-th-list"></i>
                                                        fa-th-list
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-underline"></i>
                                                        fa-underline
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-undo"></i>
                                                        fa-undo
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-unlink"></i>
                                                        fa-unlink
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                </div>
                                            </section>
                                            <section id="directional">
                                                <h4 class="page-header">Directional Icons</h4>
                                                <div class="row fontawesome-icon-list">
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-angle-double-down"></i>
                                                        fa-angle-double-down
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-angle-double-left"></i>
                                                        fa-angle-double-left
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-angle-double-right"></i>
                                                        fa-angle-double-right
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-angle-double-up"></i>
                                                        fa-angle-double-up
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-angle-down"></i>
                                                        fa-angle-down
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-angle-left"></i>
                                                        fa-angle-left
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-angle-right"></i>
                                                        fa-angle-right
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-angle-up"></i>
                                                        fa-angle-up
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-arrow-circle-down"></i>
                                                        fa-arrow-circle-down
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-arrow-circle-left"></i>
                                                        fa-arrow-circle-left
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-arrow-circle-o-down"></i>
                                                        fa-arrow-circle-o-down
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-arrow-circle-o-left"></i>
                                                        fa-arrow-circle-o-left
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-arrow-circle-o-right"></i>
                                                        fa-arrow-circle-o-right
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-arrow-circle-o-up"></i>
                                                        fa-arrow-circle-o-up
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-arrow-circle-right"></i>
                                                        fa-arrow-circle-right
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-arrow-circle-up"></i>
                                                        fa-arrow-circle-up
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-arrow-down"></i>
                                                        fa-arrow-down
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-arrow-left"></i>
                                                        fa-arrow-left
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-arrow-right"></i>
                                                        fa-arrow-right
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-arrow-up"></i>
                                                        fa-arrow-up
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-arrows"></i>
                                                        fa-arrows
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-arrows-alt"></i>
                                                        fa-arrows-alt
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-arrows-h"></i>
                                                        fa-arrows-h
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-arrows-v"></i>
                                                        fa-arrows-v
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-caret-down"></i>
                                                        fa-caret-down
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-caret-left"></i>
                                                        fa-caret-left
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-caret-right"></i>
                                                        fa-caret-right
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-caret-square-o-down"></i>
                                                        fa-caret-square-o-down
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-caret-square-o-left"></i>
                                                        fa-caret-square-o-left
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-caret-square-o-right"></i>
                                                        fa-caret-square-o-right
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-caret-square-o-up"></i>
                                                        fa-caret-square-o-up
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-caret-up"></i>
                                                        fa-caret-up
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-chevron-circle-down"></i>
                                                        fa-chevron-circle-down
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-chevron-circle-left"></i>
                                                        fa-chevron-circle-left
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-chevron-circle-right"></i>
                                                        fa-chevron-circle-right
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-chevron-circle-up"></i>
                                                        fa-chevron-circle-up
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-chevron-down"></i>
                                                        fa-chevron-down
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-chevron-left"></i>
                                                        fa-chevron-left
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-chevron-right"></i>
                                                        fa-chevron-right
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-chevron-up"></i>
                                                        fa-chevron-up
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-hand-o-down"></i>
                                                        fa-hand-o-down
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-hand-o-left"></i>
                                                        fa-hand-o-left
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-hand-o-right"></i>
                                                        fa-hand-o-right
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-hand-o-up"></i>
                                                        fa-hand-o-up
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-long-arrow-down"></i>
                                                        fa-long-arrow-down
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-long-arrow-left"></i>
                                                        fa-long-arrow-left
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-long-arrow-right"></i>
                                                        fa-long-arrow-right
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-long-arrow-up"></i>
                                                        fa-long-arrow-up
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-toggle-down"></i>
                                                        fa-toggle-down
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-toggle-left"></i>
                                                        fa-toggle-left
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-toggle-right"></i>
                                                        fa-toggle-right
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-toggle-up"></i>
                                                        fa-toggle-up
                                                        <span class="text-muted">(alias)</span>
                                                    </div>
                                                </div>
                                            </section>
                                            <section id="video-player">
                                                <h4 class="page-header">Video Player Icons</h4>
                                                <div class="row fontawesome-icon-list">
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-arrows-alt"></i>
                                                        fa-arrows-alt
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-backward"></i>
                                                        fa-backward
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-compress"></i>
                                                        fa-compress
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-eject"></i>
                                                        fa-eject
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-expand"></i>
                                                        fa-expand
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-fast-backward"></i>
                                                        fa-fast-backward
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-fast-forward"></i>
                                                        fa-fast-forward
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-forward"></i>
                                                        fa-forward
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-pause"></i>
                                                        fa-pause
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-play"></i>
                                                        fa-play
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-play-circle"></i>
                                                        fa-play-circle
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-play-circle-o"></i>
                                                        fa-play-circle-o
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-step-backward"></i>
                                                        fa-step-backward
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-step-forward"></i>
                                                        fa-step-forward
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-stop"></i>
                                                        fa-stop
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad-10 ">
                                                        <i class="fa fa-fw fa-youtube-play"></i>
                                                        fa-youtube-play
                                                    </div>
                                                </div>
                                            </section>
                                            <section id="brand">
                                                <h4 class="page-header">Brand Icons</h4>

                                                <!--<div class="alert alert-info">
                                                <ul class="margin-bottom-none padding-left-lg">
                                                    <li>All brand icons are trademarks of their respective owners.</li>
                                                    <li>
                                                        The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.
                                                    </li>
                                                </ul>

                                            </div>
                                            -->
                                            <div class="row fontawesome-icon-list">
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-adn"></i>
                                                    fa-adn
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-android"></i>
                                                    fa-android
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-apple"></i>
                                                    fa-apple
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-bitbucket"></i>
                                                    fa-bitbucket
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-bitbucket-square"></i>
                                                    fa-bitbucket-square
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-bitcoin"></i>
                                                    fa-bitcoin
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-btc"></i>
                                                    fa-btc
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-css3"></i>
                                                    fa-css3
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-dribbble"></i>
                                                    fa-dribbble
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-dropbox"></i>
                                                    fa-dropbox
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-facebook"></i>
                                                    fa-facebook
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-facebook-square"></i>
                                                    fa-facebook-square
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-flickr"></i>
                                                    fa-flickr
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-foursquare"></i>
                                                    fa-foursquare
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-github"></i>
                                                    fa-github
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-github-alt"></i>
                                                    fa-github-alt
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-github-square"></i>
                                                    fa-github-square
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-gittip"></i>
                                                    fa-gittip
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-google-plus"></i>
                                                    fa-google-plus
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-google-plus-square"></i>
                                                    fa-google-plus-square
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-html5"></i>
                                                    fa-html5
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-instagram"></i>
                                                    fa-instagram
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-linkedin"></i>
                                                    fa-linkedin
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-linkedin-square"></i>
                                                    fa-linkedin-square
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-linux"></i>
                                                    fa-linux
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-maxcdn"></i>
                                                    fa-maxcdn
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-pagelines"></i>
                                                    fa-pagelines
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-pinterest"></i>
                                                    fa-pinterest
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-pinterest-square"></i>
                                                    fa-pinterest-square
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-renren"></i>
                                                    fa-renren
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-skype"></i>
                                                    fa-skype
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-stack-exchange"></i>
                                                    fa-stack-exchange
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-stack-overflow"></i>
                                                    fa-stack-overflow
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-trello"></i>
                                                    fa-trello
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-tumblr"></i>
                                                    fa-tumblr
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-tumblr-square"></i>
                                                    fa-tumblr-square
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-twitter"></i>
                                                    fa-twitter
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-twitter-square"></i>
                                                    fa-twitter-square
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-vimeo-square"></i>
                                                    fa-vimeo-square
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-vk"></i>
                                                    fa-vk
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-weibo"></i>
                                                    fa-weibo
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-windows"></i>
                                                    fa-windows
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-xing"></i>
                                                    fa-xing
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-xing-square"></i>
                                                    fa-xing-square
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-youtube"></i>
                                                    fa-youtube
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-youtube-play"></i>
                                                    fa-youtube-play
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-youtube-square"></i>
                                                    fa-youtube-square
                                                </div>
                                            </div>
                                        </section>
                                        <section id="medical">
                                            <h4 class="page-header">Medical Icons</h4>
                                            <div class="row">
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-ambulance"></i>
                                                    fa-ambulance
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-h-square"></i>
                                                    fa-h-square
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-hospital-o"></i>
                                                    fa-hospital-o
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-medkit"></i>
                                                    fa-medkit
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-plus-square"></i>
                                                    fa-plus-square
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-stethoscope"></i>
                                                    fa-stethoscope
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-user-md"></i>
                                                    fa-user-md
                                                </div>
                                                <div class="col-md-3 col-sm-4 pad-10 ">
                                                    <i class="fa fa-fw fa-wheelchair"></i>
                                                    fa-wheelchair
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /#fa-icons -->
                                    <!-- glyphicons-->
                                    <div class="tab-pane" id="glyphicons">
                                        <h4>Bootstrap Glyphicons</h4>
                                        <ul class="bs-glyphicons">
                                            <li>
                                                <span class="glyphicon glyphicon-adjust"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-adjust</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-align-center"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-align-center</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-align-justify"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-align-justify</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-align-left"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-align-left</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-align-right"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-align-right</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-arrow-down</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-arrow-left"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-arrow-left</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-arrow-right"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-arrow-right</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-arrow-up</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-asterisk"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-asterisk</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-backward"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-backward</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-ban-circle"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-ban-circle</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-barcode"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-barcode</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-bell"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-bell</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-bold"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-bold</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-book"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-book</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-bookmark"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-bookmark</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-briefcase"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-briefcase</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-bullhorn"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-bullhorn</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-calendar"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-calendar</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-camera"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-camera</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-certificate"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-certificate</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-check"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-check</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-chevron-down"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-chevron-down</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-chevron-left</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-chevron-right</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-chevron-up"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-chevron-up</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-circle-arrow-down"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-down</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-circle-arrow-left"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-left</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-circle-arrow-right"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-right</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-circle-arrow-up"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-up</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-cloud"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-cloud</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-cloud-download"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-cloud-download</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-cloud-upload"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-cloud-upload</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-cog"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-cog</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-collapse-down"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-collapse-down</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-collapse-up"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-collapse-up</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-comment"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-comment</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-compressed"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-compressed</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-copyright-mark"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-copyright-mark</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-credit-card"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-credit-card</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-cutlery"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-cutlery</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-dashboard"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-dashboard</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-download"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-download</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-download-alt"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-download-alt</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-earphone"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-earphone</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-edit"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-edit</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-eject"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-eject</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-envelope"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-envelope</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-euro"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-euro</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-exclamation-sign"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-exclamation-sign</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-expand"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-expand</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-export"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-export</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-eye-close"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-eye-close</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-eye-open"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-eye-open</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-facetime-video"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-facetime-video</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-fast-backward"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-fast-backward</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-fast-forward"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-fast-forward</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-file"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-file</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-film"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-film</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-filter"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-filter</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-fire"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-fire</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-flag"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-flag</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-flash"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-flash</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-floppy-disk"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-floppy-disk</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-floppy-open"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-floppy-open</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-floppy-remove"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-floppy-remove</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-floppy-save"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-floppy-save</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-floppy-saved"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-floppy-saved</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-folder-close"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-folder-close</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-folder-open"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-folder-open</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-font"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-font</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-forward"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-forward</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-fullscreen"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-fullscreen</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-gbp"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-gbp</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-gift"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-gift</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-glass"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-glass</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-globe"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-globe</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-hand-down"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-hand-down</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-hand-left"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-hand-left</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-hand-right"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-hand-right</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-hand-up"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-hand-up</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-hd-video"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-hd-video</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-hdd"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-hdd</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-header"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-header</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-headphones"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-headphones</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-heart"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-heart</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-heart-empty"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-heart-empty</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-home"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-home</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-import"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-import</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-inbox"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-inbox</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-indent-left"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-indent-left</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-indent-right"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-indent-right</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-info-sign"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-info-sign</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-italic"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-italic</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-leaf"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-leaf</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-link"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-link</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-list"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-list</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-list-alt"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-list-alt</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-lock"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-lock</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-log-in"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-log-in</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-log-out"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-log-out</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-magnet"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-magnet</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-map-marker"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-map-marker</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-minus"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-minus</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-minus-sign"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-minus-sign</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-move"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-move</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-music"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-music</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-new-window"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-new-window</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-off"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-off</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-ok"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-ok</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-ok-circle"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-ok-circle</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-ok-sign"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-ok-sign</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-open"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-open</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-paperclip"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-paperclip</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-pause"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-pause</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-pencil"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-pencil</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-phone"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-phone</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-phone-alt"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-phone-alt</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-picture"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-picture</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-plane"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-plane</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-play"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-play</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-play-circle"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-play-circle</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-plus"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-plus</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-plus-sign"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-plus-sign</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-print"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-print</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-pushpin"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-pushpin</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-qrcode"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-qrcode</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-question-sign"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-question-sign</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-random"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-random</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-record"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-record</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-refresh"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-refresh</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-registration-mark"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-registration-mark</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-remove"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-remove</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-remove-circle"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-remove-circle</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-remove-sign"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-remove-sign</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-repeat"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-repeat</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-resize-full"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-resize-full</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-resize-horizontal"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-resize-horizontal</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-resize-small"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-resize-small</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-resize-vertical"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-resize-vertical</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-retweet"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-retweet</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-road"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-road</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-save"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-save</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-saved"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-saved</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-screenshot"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-screenshot</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sd-video"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sd-video</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-search"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-search</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-send"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-send</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-share"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-share</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-share-alt"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-share-alt</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-shopping-cart</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-signal"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-signal</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sort"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sort</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sort-by-alphabet"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet-alt</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sort-by-attributes"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sort-by-attributes-alt"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes-alt</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sort-by-order"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sort-by-order</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sort-by-order-alt"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sort-by-order-alt</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sound-5-1"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sound-5-1</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sound-6-1"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sound-6-1</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sound-7-1"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sound-7-1</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sound-dolby"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sound-dolby</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sound-stereo"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sound-stereo</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-star</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-star-empty"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-star-empty</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-stats"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-stats</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-step-backward"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-step-backward</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-step-forward"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-step-forward</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-stop"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-stop</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-subtitles"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-subtitles</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-tag"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-tag</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-tags"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-tags</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-tasks"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-tasks</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-text-height"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-text-height</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-text-width"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-text-width</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-th"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-th</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-th-large"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-th-large</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-th-list"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-th-list</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-thumbs-down"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-thumbs-down</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-thumbs-up"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-thumbs-up</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-time"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-time</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-tint"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-tint</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-tower"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-tower</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-transfer"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-transfer</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-trash"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-trash</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-tree-conifer"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-tree-conifer</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-tree-deciduous"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-tree-deciduous</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-unchecked"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-unchecked</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-upload"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-upload</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-usd"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-usd</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-user"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-user</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-volume-down"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-volume-down</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-volume-off"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-volume-off</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-volume-up"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-volume-up</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-warning-sign"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-warning-sign</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-wrench"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-wrench</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-zoom-in"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-zoom-in</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-zoom-out"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-zoom-out</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /#glyphicons -->

                                    <!--ionicons starts-->

                                    <div class="tab-pane" id="ionicons">
                                        <div class="row mar-40 ">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="ion-ionic" data-pack="default" data-tags="badass, framework, sexy, hawt"></i>
                                                    &nbsp; ion-ionic
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-arrow-up-a qwe" data-pack="default" data-tags=""></i>
                                                    &nbsp; ion-arrow-up-a
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-arrow-right-a qwe" data-pack="default" data-tags=""></i>
                                                    &nbsp; ion-arrow-right-a
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-arrow-down-a qwe" data-pack="default" data-tags=""></i>
                                                    &nbsp; ion-arrow-down-a
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-arrow-left-a qwe" data-pack="default" data-tags=""></i>
                                                    &nbsp; ion-arrow-left-a
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-arrow-up-b qwe" data-pack="default" data-tags=""></i>
                                                    &nbsp; ion-arrow-up-b
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-arrow-right-b qwe" data-pack="default" data-tags=""></i>
                                                    &nbsp; ion-arrow-right-b
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-arrow-down-b qwe" data-pack="default" data-tags=""></i>
                                                    &nbsp; ion-arrow-down-b
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-arrow-left-b qwe" data-pack="default" data-tags=""></i>
                                                    &nbsp; ion-arrow-left-b
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-arrow-up-c qwe" data-pack="default" data-tags=""></i>
                                                    &nbsp; ion-arrow-up-c
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-arrow-right-c qwe" data-pack="default" data-tags=""></i>
                                                    &nbsp; ion-arrow-right-c
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-arrow-down-c qwe" data-pack="default" data-tags=""></i>
                                                    &nbsp; ion-arrow-down-c
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-arrow-left-c qwe" data-pack="default" data-tags=""></i>
                                                    &nbsp; ion-arrow-left-c
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-arrow-return-right qwe" data-pack="default" data-tags=""></i>
                                                    &nbsp; ion-arrow-return-right
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-arrow-return-left qwe" data-pack="default" data-tags=""></i>
                                                    &nbsp; ion-arrow-return-left
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-arrow-swap qwe" data-pack="default" data-tags="switch, fip"></i>
                                                    &nbsp; ion-arrow-swap
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-arrow-shrink qwe" data-pack="default" data-tags="pinch"></i>
                                                    &nbsp; ion-arrow-shrink
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-arrow-expand qwe" data-pack="default" data-tags="fullscreen"></i>
                                                    &nbsp; ion-arrow-expand
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-arrow-move qwe" data-pack="default" data-tags="drag"></i>
                                                    &nbsp; ion-arrow-move
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-arrow-resize qwe" data-pack="default" data-tags="drag"></i>
                                                    &nbsp; ion-arrow-resize
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-chevron-up qwe" data-pack="default" data-tags="arrow, up"></i>
                                                    &nbsp; ion-chevron-up
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-chevron-right qwe" data-pack="default" data-tags="arrow, right"></i>
                                                    &nbsp; ion-chevron-right
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-chevron-down qwe" data-pack="default" data-tags="arrow, down"></i>
                                                    &nbsp; ion-chevron-down
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-chevron-left qwe" data-pack="default" data-tags="arrow, left"></i>
                                                    &nbsp; ion-chevron-left
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-navicon-round qwe" data-pack="default" data-tags="menu, hamburger, side menu"></i>
                                                    &nbsp; ion-navicon-round
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-navicon qwe" data-pack="default" data-tags="menu, hamburger, side menu"></i>
                                                    &nbsp; ion-navicon qwe
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-drag qwe" data-pack="default" data-tags="reorder, move, drag"></i>
                                                    &nbsp; ion-drag
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-log-in qwe" data-pack="default" data-tags="sign in, "></i>
                                                    &nbsp; ion-arrow-up-a
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-log-out qwe" data-pack="default" data-tags="sign out"></i>
                                                    &nbsp; ion-log-in
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-checkmark-round qwe" data-pack="default" data-tags="complete, finished, success, on"></i>
                                                    &nbsp; ion-checkmark-round
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-checkmark qwe" data-pack="default" data-tags="complete, finished, success, on"></i>
                                                    &nbsp; ion-checkmark
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-checkmark-circled qwe" data-pack="default" data-tags="complete, finished, success, on"></i>
                                                    &nbsp; ion-checkmark-circled
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-close-round qwe" data-pack="default" data-tags="delete, trash, kill, x"></i>
                                                    &nbsp; ion-close-round
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-close qwe" data-pack="default" data-tags="delete, trash, kill, x"></i>
                                                    &nbsp; ion-close
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-close-circled qwe" data-pack="default" data-tags="delete, trash, kill, x"></i>
                                                    &nbsp; ion-close-circled
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-plus-round qwe" data-pack="default" data-tags="add, include, new, invite, +"></i>
                                                    &nbsp; ion-plus-round
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-plus qwe" data-pack="default" data-tags="add, include, new, invite, +"></i>
                                                    &nbsp; ion-plus
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-plus-circled qwe" data-pack="default" data-tags="add, include, new, invite, +"></i>
                                                    &nbsp; ion-plus-circled
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-minus-round qwe" data-pack="default" data-tags="hide, remove, minimize, -"></i>
                                                    &nbsp; ion-minus-round
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-minus qwe" data-pack="default" data-tags="hide, remove, minimize, -"></i>
                                                    &nbsp; ion-minus
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-minus-circled qwe" data-pack="default" data-tags="hide, remove, minimize, -"></i>
                                                    &nbsp; ion-minus-circled
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-information ion qwe" data-pack="default" data-tags="help, more, tooltip"></i>
                                                    &nbsp; ion-information ion
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-information ion-circled qwe" data-pack="default" data-tags="help, more, tooltip"></i>
                                                    &nbsp; ion-information ion-circled
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-help qwe" data-pack="default qwe" data-tags="questicon ion, ?"></i>
                                                    &nbsp; ion-help
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-help-circled qwe" data-pack="default" data-tags="questicon ion, ?"></i>
                                                    &nbsp; ion-help-circled
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-help-buoy qwe" data-pack="default" data-tags="questicon ion, ?"></i>
                                                    &nbsp; ion-help-buoy
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-asterisk qwe" data-pack="default" data-tags="favorite, mark, star"></i>
                                                    &nbsp; ion-asterisk
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-alert qwe" data-pack="default" data-tags="attenticon ion, warning, notice, !, exclamaticon ion"></i>
                                                    &nbsp; ion-alert
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-alert-circled qwe" data-pack="default" data-tags="attenticon ion, warning, notice, !, exclamaticon ion"></i>
                                                    &nbsp; ion-alert-circled
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-refresh qwe" data-pack="default" data-tags="reload, renew"></i>
                                                    &nbsp; ion-refresh
                                                </span>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-loop qwe" data-pack="default" data-tags="refresh"></i>
                                                    &nbsp; ion-loop
                                                </span>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-shuffle qwe" data-pack="default" data-tags="random"></i>
                                                    &nbsp; ion-shuffle
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-home qwe" data-pack="default" data-tags="house"></i>
                                                    &nbsp; ion-home
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-search qwe" data-pack="default" data-tags="magnifying glass"></i>
                                                    &nbsp; ion-search
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-flag qwe" data-pack="default" data-tags="favorite, mark, star"></i>
                                                    &nbsp; ion-flag
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-star qwe" data-pack="default" data-tags="favorite"></i>
                                                    &nbsp; ion-star
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-heart qwe" data-pack="default" data-tags="love"></i>
                                                    &nbsp; ion-hear
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-heart-broken qwe" data-pack="default" data-tags="love"></i>
                                                    &nbsp; ion-heart-broken
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-gear-a qwe" data-pack="default" data-tags="settings, opticon ions, cog"></i>
                                                    &nbsp; ion-gear-a
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-gear-b qwe" data-pack="default" data-tags="settings, opticon ions, cog"></i>
                                                    &nbsp; ion-gear-b
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-toggle-filled qwe" data-pack="default" data-tags="settings, opticon ions, switch"></i>
                                                    &nbsp; ion-toggle-filled
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-toggle qwe" data-pack="default" data-tags="settings, opticon ions, switch"></i>
                                                    &nbsp; ion-toggle
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-settings qwe" data-pack="default" data-tags="opticon ions, tools"></i>
                                                    &nbsp; ion-settings
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-wrench qwe" data-pack="default" data-tags="settings, opticon ions, tools"></i>
                                                    &nbsp; ion-wrench
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-hammer qwe" data-pack="default" data-tags="settings, opticon ions, tools"></i>
                                                    &nbsp; ion-hammer
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-edit qwe" data-pack="default" data-tags="change, update, write, type, pencil"></i>
                                                    &nbsp; ion-edit
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-trash-a qwe" data-pack="default" data-tags="delete, remove, dump"></i>
                                                    &nbsp; ion-trash-a
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-trash-b qwe" data-pack="default" data-tags="delete, remove, dump"></i>
                                                    &nbsp; ion-trash-b
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-document qwe" data-pack="default" data-tags="paper, file"></i>
                                                    &nbsp; ion-document
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-document-text qwe" data-pack="default" data-tags="paper, file"></i>
                                                    &nbsp; ion-document-text
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-clipboard qwe" data-pack="default" data-tags="write"></i>
                                                    &nbsp; ion-clipboard
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-scissors qwe" data-pack="default" data-tags="cut"></i>
                                                    &nbsp; ion-scissors
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-funnel qwe" data-pack="default" data-tags="sort"></i>
                                                    &nbsp; ion-funnel
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-bookmark qwe" data-pack="default" data-tags="favorite, tag, save"></i>
                                                    &nbsp; ion-bookmark
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-email qwe" data-pack="default" data-tags="snail, mail"></i>
                                                    &nbsp; ion-email
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-folder qwe" data-pack="default" data-tags="snail, mail"></i>
                                                    &nbsp; ion-folder
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-filing qwe" data-pack="default" data-tags="mail"></i>
                                                    &nbsp; ion-filing
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-archive qwe" data-pack="default" data-tags="mail"></i>
                                                    &nbsp; ion-archive
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-reply qwe" data-pack="default" data-tags="mail, undo"></i>
                                                    &nbsp; ion-reply
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-reply-all qwe" data-pack="default" data-tags="mail"></i>
                                                    &nbsp; ion-reply-all
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-forward qwe" data-pack="default" data-tags="mail, redo"></i>
                                                    &nbsp; ion-forward
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-share qwe" data-pack="default" data-tags="outbound"></i>
                                                    &nbsp; ion-share
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-paper-airplane qwe" data-pack="default" data-tags="outbound, mail, letter, send"></i>
                                                    &nbsp; ion-paper-airplane
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-link qwe" data-pack="default" data-tags="chain, anchor, href, attach"></i>
                                                    &nbsp; ion-link
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-paperclip qwe" data-pack="default" data-tags="attach"></i>
                                                    &nbsp; ion-paperclip
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-compose qwe" data-pack="default" data-tags="write, compose, type"></i>
                                                    &nbsp; ion-compose
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-briefcase qwe" data-pack="default" data-tags="store, organize"></i>
                                                    &nbsp; ion-briefcase
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-medkit qwe" data-pack="default" data-tags="health"></i>
                                                    &nbsp; ion-medkit
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-at qwe" data-pack="default" data-tags="@"></i>
                                                    &nbsp; ion-at
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-pound qwe" data-pack="default" data-tags="hashtag, #"></i>
                                                    &nbsp; ion-pound
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-quote qwe" data-pack="default" data-tags="chat, quotaticon ion"></i>
                                                    &nbsp; ion-quote
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-cloud qwe" data-pack="default" data-tags="storage"></i>
                                                    &nbsp; ion-cloud
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-upload qwe" data-pack="default" data-tags="storage, cloud"></i>
                                                    &nbsp; ion-upload
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-more qwe" data-pack="default" data-tags="circles"></i>
                                                    &nbsp; ion-more
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-grid qwe" data-pack="default" data-tags="menu"></i>
                                                    &nbsp; ion-grid
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-calendar qwe" data-pack="default" data-tags="date, time, month, year"></i>
                                                    &nbsp; ion-calendar
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-clock qwe" data-pack="default" data-tags="time, watch, hours, minutes, seconds"></i>
                                                    &nbsp; ion-clock
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-compass qwe" data-pack="default" data-tags="location ion, directicon ions, navigaticon ion"></i>
                                                    &nbsp; ion-compass
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-pinpoint qwe" data-pack="default" data-tags="gps, navigaticon ion"></i>
                                                    &nbsp; ion-pinpoint
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-pin qwe" data-pack="default" data-tags="gps, navigaticon ion"></i>
                                                    &nbsp; ion-pin
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-navigate qwe" data-pack="default" data-tags="gps, location ion pin"></i>
                                                    &nbsp; ion-navigate
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-location ion qwe" data-pack="default" data-tags="gps, navigaticon ion, pin"></i>
                                                    &nbsp; ion-location ion
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-map qwe" data-pack="default" data-tags="gps, navigaticon ion, pin"></i>
                                                    &nbsp; ion-map
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-model-s qwe" data-pack="default" data-tags="navigaticon ion, car, drive, transportaticon ion, tesla, sexy"></i>
                                                    &nbsp; ion-model-s
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-locked qwe" data-pack="default" data-tags="padlock, security"></i>
                                                    &nbsp; ion-locked
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-reply-all qwe" data-pack="default" data-tags="mail"></i>
                                                    &nbsp; ion-reply-all
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-forward qwe" data-pack="default" data-tags="mail, redo"></i>
                                                    &nbsp; ion-forward
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-share qwe" data-pack="default" data-tags="outbound"></i>
                                                    &nbsp; ion-share
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-paper-airplane qwe" data-pack="default" data-tags="outbound, mail, letter, send"></i>
                                                    &nbsp; ion-paper-airplane
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-link qwe" data-pack="default" data-tags="chain, anchor, href, attach"></i>
                                                    &nbsp; ion-link
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-paperclip qwe" data-pack="default" data-tags="attach"></i>
                                                    &nbsp; ion-paperclip
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-compose qwe" data-pack="default" data-tags="write, compose, type"></i>
                                                    &nbsp; ion-compose
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-briefcase qwe" data-pack="default" data-tags="store, organize"></i>
                                                    &nbsp; ion-briefcase
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-medkit qwe" data-pack="default" data-tags="health"></i>
                                                    &nbsp; ion-medkit
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-at qwe" data-pack="default" data-tags="@"></i>
                                                    &nbsp; ion-at
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-pound qwe" data-pack="default" data-tags="hashtag, #"></i>
                                                    &nbsp; ion-pound
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-pound qwe" data-pack="default" data-tags="chat, quotaticon ion"></i>
                                                    &nbsp; ion-pound
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-cloud qwe" data-pack="default" data-tags="storage"></i>
                                                    &nbsp; ion-cloud
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-upload qwe" data-pack="default" data-tags="storage, cloud"></i>
                                                    &nbsp; ion-upload
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-more qwe" data-pack="default" data-tags="circles"></i>
                                                    &nbsp; ion-more
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-grid qwe" data-pack="default" data-tags="menu"></i>
                                                    &nbsp; ion-grid
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-calendar qwe" data-pack="default" data-tags="date, time, month, year"></i>
                                                    &nbsp; ion-calendar
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-clock qwe" data-pack="default" data-tags="time, watch, hours, minutes, seconds"></i>
                                                    &nbsp; ion-clock
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-compass qwe" data-pack="default" data-tags="location ion, directicon ions, navigaticon ion"></i>
                                                    &nbsp; ion-compass
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-pinpoint qwe" data-pack="default" data-tags="gps, navigaticon ion"></i>
                                                    &nbsp; ion-pinpoint
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-pin qwe" data-pack="default" data-tags="gps, navigaticon ion"></i>
                                                    &nbsp; ion-pin
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-navigate qwe" data-pack="default" data-tags="gps, location ion pin"></i>
                                                    &nbsp;ion-navigate
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-location ion qwe" data-pack="default" data-tags="gps, navigaticon ion, pin"></i>
                                                    &nbsp; ion-location ion
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-map qwe" data-pack="default" data-tags="gps, navigaticon ion, pin"></i>
                                                    &nbsp; ion-map
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-model-s qwe" data-pack="default" data-tags="navigaticon ion, car, drive, transportaticon ion, tesla, sexy"></i>
                                                    &nbsp; ion-model-s
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-locked qwe" data-pack="default" data-tags="padlock, security"></i>
                                                    &nbsp; ion-locked
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-unlocked qwe" data-pack="default" data-tags="padlock, security"></i>
                                                    &nbsp; ion-unlocked
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-key qwe" data-pack="default" data-tags="access"></i>
                                                    &nbsp; ion-key
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-arrow-graph-up-right qwe" data-pack="default" data-tags="stats"></i>
                                                    &nbsp; ion-arrow-graph-up-right
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-arrow-graph-down-right qwe" data-pack="default" data-tags="stats"></i>
                                                    &nbsp; ion-arrow-graph-down-right
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-arrow-graph-up-left qwe" data-pack="default" data-tags="stats"></i>
                                                    &nbsp; ion-arrow-graph-up-left
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-arrow-graph-down-left qwe" data-pack="default" data-tags="stats"></i>
                                                    &nbsp;ion-arrow-graph-down-left
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-stats-bars qwe" data-pack="default" data-tags="data"></i>
                                                    &nbsp; ion-stats-bars
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-connection-bars qwe" data-pack="default" data-tags="data, stats"></i>
                                                    &nbsp; ion-connection-bars
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-pie-graph qwe" data-pack="default" data-tags="stats"></i>
                                                    &nbsp; ion-pie-graph
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-chatbubble qwe" data-pack="default" data-tags="talk"></i>
                                                    &nbsp; ion-chatbubble
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-chatbubble-working qwe" data-pack="default" data-tags="talk"></i>
                                                    &nbsp; ion-chatbubble-working
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-chatbubbles qwe" data-pack="default" data-tags="talk"></i>
                                                    &nbsp; ion-chatbubbles
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-chatbox qwe" data-pack="default" data-tags="talk"></i>
                                                    &nbsp; ion-chatbox
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-chatbox-working qwe" data-pack="default" data-tags="talk"></i>
                                                    &nbsp; ion-chatbox-working
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-chatboxes qwe" data-pack="default" data-tags="talk"></i>
                                                    &nbsp; ion-chatboxes
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-person qwe" data-pack="default" data-tags="users, staff, head, human"></i>
                                                    &nbsp; ion-person
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-person-add qwe" data-pack="default" data-tags="users, staff, head, human, member, new"></i>
                                                    &nbsp; ion-person-add
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-person-stalker qwe" data-pack="default" data-tags="people, human, users, staff"></i>
                                                    &nbsp; ion-person-stalker
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-woman qwe" data-pack="default" data-tags="female, lady, girl, dudette"></i>
                                                    &nbsp; ion-woman
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-man qwe" data-pack="default" data-tags="male, guy, boy, dude"></i>
                                                    &nbsp; ion-man
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-female qwe" data-pack="default" data-tags="lady, girl, dudette"></i>
                                                    &nbsp;ion-female
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-male qwe" data-pack="default" data-tags="male, guy, boy, dude"></i>
                                                    &nbsp; ion-male
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-fork qwe" data-pack="default" data-tags="food, drink, eat"></i>
                                                    &nbsp; ion-fork
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-knife qwe" data-pack="default" data-tags="food, drink, eat"></i>
                                                    &nbsp; ion-knife
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-spoon qwe" data-pack="default" data-tags="food, drink, eat"></i>
                                                    &nbsp; ion-spoon
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-beer qwe" data-pack="default" data-tags="food, drink, eat"></i>
                                                    &nbsp; ion-beer
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-wineglass qwe" data-pack="default" data-tags="food, drink, eat"></i>
                                                    &nbsp; ion-wineglass
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-coffee qwe" data-pack="default" data-tags="food, drink, eat, caffeine"></i>
                                                    &nbsp; ion-coffee
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-icecream qwe" data-pack="default" data-tags="food, drink, eat"></i>
                                                    &nbsp; ion-icecream
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-pizza qwe" data-pack="default" data-tags="food, drink, eat"></i>
                                                    &nbsp; ion-pizza
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-power qwe" data-pack="default" data-tags="on, off"></i>
                                                    &nbsp;ion-power
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-mouse qwe" data-pack="default" data-tags="computer"></i>
                                                    &nbsp; ion-mouse
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-battery-full qwe" data-pack="default" data-tags=""></i>
                                                    &nbsp; ion-battery-full
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-battery-half qwe" data-pack="default" data-tags=""></i>
                                                    &nbsp; ion-battery-half
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-battery-low qwe" data-pack="default" data-tags=""></i>
                                                    &nbsp; ion-battery-low
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-battery-empty qwe" data-pack="default" data-tags=""></i>
                                                    &nbsp; ion-battery-empty
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-battery-charging qwe" data-pack="default" data-tags=""></i>
                                                    &nbsp; ion-battery-charging
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-wifi qwe" data-pack="default" data-tags="internet, connection ion"></i>
                                                    &nbsp; ion-wifi
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-bluetooth qwe" data-pack="default" data-tags="connection ion, cloud"></i>
                                                    &nbsp; ion-bluetooth
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-calculator qwe" data-pack="default" data-tags="math, arithmatic, numbers, additicon ion, subtracticon ion"></i>
                                                    &nbsp; ion-calculator
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-camera qwe" data-pack="default" data-tags="photo"></i>
                                                    &nbsp; ion-camera
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-eye qwe" data-pack="default" data-tags="view, see, creeper"></i>
                                                    &nbsp; ion-eye
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-eye-disabled qwe" data-pack="default" data-tags="view, see, creeper"></i>
                                                    &nbsp; ion-eye-disabled
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-flash qwe" data-pack="default" data-tags="ightning, weather, whether"></i>
                                                    &nbsp; ion-flash
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-flash-off qwe" data-pack="default" data-tags=""></i>
                                                    &nbsp; ion-flash-off
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-qr-scanner qwe" data-pack="default" data-tags="reader"></i>
                                                    &nbsp;ion-qr-scanner
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-image qwe" data-pack="default" data-tags="photo"></i>
                                                    &nbsp; ion-image
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-images qwe" data-pack="default" data-tags="photo"></i>
                                                    &nbsp; ion-images
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-contrast qwe" data-pack="default" data-tags="images, levels, ight, dark, settings"></i>
                                                    &nbsp; ion-contrast
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-wand qwe" data-pack="default" data-tags="images, levels, ight, dark, settings"></i>
                                                    &nbsp; ion-wand
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-aperture qwe" data-pack="default" data-tags="images, levels, ight, dark, settings"></i>
                                                    &nbsp; ion-aperture
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-monitor qwe" data-pack="default" data-tags="thunderbolt, screen"></i>
                                                    &nbsp; ion-monitor
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-laptop qwe" data-pack="default" data-tags="macbook, apple, osx"></i>
                                                    &nbsp; ion-laptop
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ipad qwe" data-pack="default" data-tags="tablet, mobile, apple, retina, device"></i>
                                                    &nbsp; ion-ipad
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-iphone qwe" data-pack="default" data-tags="smartphone, mobile, apple, retina, device"></i>
                                                    &nbsp; ion-iphone
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ipod qwe" data-pack="default" data-tags="music, player, apple, retina, device"></i>
                                                    &nbsp;ion-ipod
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-usb qwe" data-pack="default" data-tags="digital, computer"></i>
                                                    &nbsp; ion-usb
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-outlet qwe" data-pack="default" data-tags="digital, computer, electricity"></i>
                                                    &nbsp; ion-outlet
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-bug qwe" data-pack="default" data-tags="develop, program, hacker, error"></i>
                                                    &nbsp; ion-bug
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-code qwe" data-pack="default" data-tags="develop, program, hacker"></i>
                                                    &nbsp; ion-code
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-code-working qwe" data-pack="default" data-tags="develop, program, hacker"></i>
                                                    &nbsp; ion-code-working
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-fork-repo qwe" data-pack="default" data-tags="develop, program, hacker, github"></i>
                                                    &nbsp; ion-fork-repo
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-network qwe" data-pack="default" data-tags="develop, program, hacker, github"></i>
                                                    &nbsp; ion-network
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-pull-request qwe" data-pack="default" data-tags="develop, program, hacker, github"></i>
                                                    &nbsp; ion-pull-request
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-merge qwe" data-pack="default" data-tags="develop, program, hacker, github"></i>
                                                    &nbsp; ion-merge
                                                </span>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-game-controller-b qwe" data-pack="default" data-tags="fun"></i>
                                                    &nbsp; ion-game-controller-b
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-xbox qwe" data-pack="default" data-tags="fun, games"></i>
                                                    &nbsp; ion-xbox
                                                </span>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-steam qwe" data-pack="default" data-tags="fun, games"></i>
                                                    &nbsp; ion-steam
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-closed-captioning qwe" data-pack="default" data-tags="movie, film, televisicon ion"></i>
                                                    &nbsp;ion-closed-captioning
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-videocamera qwe" data-pack="default" data-tags="movie, film, televisicon ion"></i>
                                                    &nbsp; ion-videocamera
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-film-marker qwe" data-pack="default" data-tags="film, cut, acticon ion"></i>
                                                    &nbsp; ion-film-marker
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-disc qwe" data-pack="default" data-tags="cd, vinyl"></i>
                                                    &nbsp; ion-disc
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-headphone qwe" data-pack="default" data-tags="music, earbuds, beats"></i>
                                                    &nbsp; ion-headphone
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-music-note qwe" data-pack="default" data-tags="songs"></i>
                                                    &nbsp; ion-music-note
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-radio-waves qwe" data-pack="default" data-tags="music, sound, speaker"></i>
                                                    &nbsp; ion-radio-waves
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-speakerphone qwe" data-pack="default" data-tags="sound, speaker, loud, ampify"></i>
                                                    &nbsp; ion-speakerphone
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-mic-a qwe" data-pack="default" data-tags="sound, talk, speaker"></i>
                                                    &nbsp; ion-mic-a
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-mic-b qwe" data-pack="default" data-tags="sound, talk, speaker"></i>
                                                    &nbsp; ion-mic-b
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-mic-c qwe" data-pack="default" data-tags="sound, talk, speaker"></i>
                                                    &nbsp;ion-mic-c
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-volume-high qwe" data-pack="default" data-tags="sound, noise"></i>
                                                    &nbsp; ion-volume-high
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-volume-medium qwe" data-pack="default" data-tags="sound"></i>
                                                    &nbsp; ion-volume-medium
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-volume-low qwe" data-pack="default" data-tags="sound"></i>
                                                    &nbsp; ion-volume-low
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-volume-mute qwe" data-pack="default" data-tags="sound"></i>
                                                    &nbsp; ion-volume-mute
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-levels qwe" data-pack="default" data-tags="opticon ions, toggles, sound, mixer"></i>
                                                    &nbsp; ion-levels
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-play qwe" data-pack="default" data-tags="music, watch, arrow, right"></i>
                                                    &nbsp; ion-play
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-pause qwe" data-pack="default" data-tags="music, break, hold, freeze"></i>
                                                    &nbsp; ion-pause
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-stop qwe" data-pack="default" data-tags="music, square, hold, freeze"></i>
                                                    &nbsp; ion-stop
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-record qwe" data-pack="default" data-tags="music, circle"></i>
                                                    &nbsp; ion-record
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-skip-forward qwe" data-pack="default" data-tags="music, next"></i>
                                                    &nbsp; ion-skip-forward
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-skip-backward qwe" data-pack="default" data-tags="music, previous"></i>
                                                    &nbsp; ion-skip-backward
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-eject qwe" data-pack="default" data-tags="music, dvd, remove"></i>
                                                    &nbsp; ion-eject
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-bag qwe" data-pack="default" data-tags="shopping, price, cart, money, container, $"></i>
                                                    &nbsp; ion-bag
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-card qwe" data-pack="default" data-tags="credit, price, debit, money, shopping, cash, dollars, $"></i>
                                                    &nbsp; ion-card
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-cash qwe" data-pack="default" data-tags="credit, price, debit, money, shopping, dollars, $"></i>
                                                    &nbsp; ion-cash
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-pricetag qwe" data-pack="default" data-tags="credit, debit, money, shopping, cash, dollars, $"></i>
                                                    &nbsp; ion-pricetag
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-pricetags qwe" data-pack="default" data-tags="credit, debit, money, shopping, cash, dollars, $"></i>
                                                    &nbsp;ion-pricetags
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-thumbsup qwe" data-pack="default" data-tags="ike, fun, yes"></i>
                                                    &nbsp; ion-thumbsup
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-thumbsdown qwe" data-pack="default" data-tags="disike, boring, no"></i>
                                                    &nbsp; ion-thumbsdown
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-happy qwe" data-pack="default" data-tags="good, ike, fun, yes"></i>
                                                    &nbsp;ion-happy
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-sad qwe" data-pack="default" data-tags="cry, bad, no"></i>
                                                    &nbsp; ion-sad
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-trophy qwe" data-pack="default" data-tags="competiticon ion, compete, win, lose, award"></i>
                                                    &nbsp; ion-trophy
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-podium qwe" data-pack="default" data-tags="competiticon ion, compete, win, lose, award"></i>
                                                    &nbsp; ion-podium
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ribbon-a qwe" data-pack="default" data-tags="competiticon ion, compete, win, lose, award, trophy"></i>
                                                    &nbsp; ion-ribbon-a
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ribbon-b qwe" data-pack="default" data-tags="competiticon ion, compete, win, lose, award, trophy"></i>
                                                    &nbsp; ion-ribbon-b
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-university qwe" data-pack="default" data-tags="graduate, educaticon ion, school, tassle"></i>
                                                    &nbsp; ion-university
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-magnet qwe" data-pack="default" data-tags="sticky, attracticon ion"></i>
                                                    &nbsp;ion-magnet
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-beaker qwe" data-pack="default" data-tags="mixture, poticon ion, flask"></i>
                                                    &nbsp; ion-beaker
                                                </span>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-egg qwe" data-pack="default" data-tags="birth, twitter, bird, baby"></i>
                                                    &nbsp; ion-egg
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-earth qwe" data-pack="default" data-tags="nature, globe, home, planet"></i>
                                                    &nbsp; ion-earth
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-planet qwe" data-pack="default" data-tags="nature, globe, home, planet, space"></i>
                                                    &nbsp; ion-planet
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-lightbulb qwe" data-pack="default" data-tags="idea, new, aha!"></i>
                                                    &nbsp;ion-lightbulb
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-cube qwe" data-pack="default" data-tags="box, square, container"></i>
                                                    &nbsp; ion-cube
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-leaf qwe" data-pack="default" data-tags="green, recycle, plant, nature"></i>
                                                    &nbsp; ion-leaf
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-waterdrop qwe" data-pack="default" data-tags="nature, clean, recycle, fresh, wet, rain"></i>
                                                    &nbsp; ion-waterdrop
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-flame qwe" data-pack="default" data-tags="fire, hot, heat"></i>
                                                    &nbsp; ion-flame
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-fireball qwe" data-pack="default" data-tags="hot, heat"></i>
                                                    &nbsp; ion-fireball
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-bonfire qwe" data-pack="default" data-tags="hot, heat"></i>
                                                    &nbsp;ion-bonfire
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-umbrella qwe" data-pack="default" data-tags="wet, rain, dry, shelter"></i>
                                                    &nbsp; ion-umbrella
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-nuclear qwe" data-pack="default" data-tags="danger, warning, hazard"></i>
                                                    &nbsp; ion-nuclear
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-no-smoking qwe" data-pack="default" data-tags="danger, warning, cigarette, cancer"></i>
                                                    &nbsp; ion-no-smoking
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-thermometer qwe" data-pack="default" data-tags="hot, cold, heat, temperature, mercury"></i>
                                                    &nbsp;ion-thermometer
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-speedometer qwe" data-pack="default" data-tags="travel, accelerate"></i>
                                                    &nbsp; ion-speedometer
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-plane qwe" data-pack="default" data-tags="fly, jet"></i>
                                                    &nbsp; ion-plane
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-jet qwe" data-pack="default" data-tags="fly, plane"></i>
                                                    &nbsp; ion-jet
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-load-a qwe" data-pack="default" data-tags="spinner, waiting, refresh"></i>
                                                    &nbsp; ion-load-a
                                                </span>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-load-b qwe" data-pack="default" data-tags="spinner, waiting, refresh"></i>
                                                    &nbsp; ion-load-b
                                                </span>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-load-c qwe" data-pack="default" data-tags="spinner, waiting, refresh"></i>
                                                    &nbsp; ion-load-c
                                                </span>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-load-d qwe" data-pack="default" data-tags="spinner, waiting, refresh"></i>
                                                    &nbsp; ion-load-d
                                                </span>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-ionic-outline qwe" data-pack="ios7" data-tags="badass, framework, sexy"></i>
                                                    &nbsp; ion-ios7-ionic-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-arrow-back qwe" data-pack="ios7" data-tags="chevron, left"></i>
                                                    &nbsp; ion-ios7-arrow-back
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-arrow-forward qwe" data-pack="ios7" data-tags="chevron, right"></i>
                                                    &nbsp;ion-ios7-arrow-forward
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-arrow-up qwe" data-pack="ios7" data-tags="chevron"></i>
                                                    &nbsp; ion-ios7-arrow-up
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-arrow-right qwe" data-pack="ios7" data-tags="chevron"></i>
                                                    &nbsp; ion-ios7-arrow-right
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-arrow-down qwe" data-pack="ios7" data-tags="chevron"></i>
                                                    &nbsp; ion-ios7-arrow-down
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-arrow-left qwe" data-pack="ios7" data-tags="chevron"></i>
                                                    &nbsp; ion-ios7-arrow-left
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-arrow-thin-up qwe" data-pack="ios7" data-tags="chevron"></i>
                                                    &nbsp; ion-ios7-arrow-thin-up
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-arrow-thin-right qwe" data-pack="ios7" data-tags="chevron"></i>
                                                    &nbsp; ion-ios7-arrow-thin-right
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-arrow-thin-down qwe" data-pack="ios7" data-tags="chevron"></i>
                                                    &nbsp; ion-ios7-arrow-thin-down
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-arrow-thin-left qwe" data-pack="ios7" data-tags="chevron"></i>
                                                    &nbsp;ion-ios7-arrow-thin-left
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-circle-filled qwe" data-pack="ios7" data-tags="checkmark, radio, dot, on, selected, button"></i>
                                                    &nbsp; ion-ios7-circle-filled
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-circle-outline qwe" data-pack="ios7" data-tags="checkmark, radio, dot, off, button"></i>
                                                    &nbsp; ion-ios7-circle-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-checkmark-empty qwe" data-pack="ios7" data-tags="success, confirmed, on, finished, complete"></i>
                                                    &nbsp; on-ios7-checkmark-empty
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-checkmark-outline qwe" data-pack="ios7" data-tags="success, confirmed, on, finished, complete"></i>
                                                    &nbsp; ion-ios7-checkmark-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-checkmark qwe" data-pack="ios7" data-tags="success, confirmed, on, finished, complete"></i>
                                                    &nbsp; ion-ios7-checkmark
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-plus-empty qwe" data-pack="ios7" data-tags="add, include, new, invite, +"></i>
                                                    &nbsp; ion-ios7-plus-empty
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-plus-outline qwe" data-pack="ios7" data-tags="add, include, new, invite, +"></i>
                                                    &nbsp; ion-ios7-plus-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-plus qwe" data-pack="ios7" data-tags="add, include, new, invite, +"></i>
                                                    &nbsp; ion-ios7-plus
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-close-empty qwe" data-pack="ios7" data-tags="delete, remove, trash, end, stop, x"></i>
                                                    &nbsp; ion-ios7-close-empty
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-close-outline qwe" data-pack="ios7" data-tags="delete, remove, trash, end, stop, x"></i>
                                                    &nbsp; ion-ios7-close-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-close qwe" data-pack="ios7" data-tags="delete, remove, trash, end, stop, x"></i>
                                                    &nbsp; ion-ios7-close
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-minus-empty qwe" data-pack="ios7" data-tags="hide, remove, minimize, -"></i>
                                                    &nbsp; ion-ios7-minus-empty
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-minus-outline qwe" data-pack="ios7" data-tags="hide, remove, minimize, -"></i>
                                                    &nbsp; ion-ios7-minus-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-minus qwe" data-pack="ios7" data-tags="hide, remove, minimize, -"></i>
                                                    &nbsp; ion-ios7-minus
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-information ion-empty qwe" data-pack="ios7" data-tags="help, questicon ion"></i>
                                                    &nbsp; ion-ios7-information ion-empty
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-information ion-outline qwe" data-pack="ios7" data-tags="help, questicon ion"></i>
                                                    &nbsp; ion-ios7-information ion-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-information ion qwe" data-pack="ios7" data-tags="help, questicon ion"></i>
                                                    &nbsp; ion-ios7-information ion
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-help-empty qwe" data-pack="ios7" data-tags="questicon ion, information ion, ?"></i>
                                                    &nbsp; ion-ios7-help-empty
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-help-outline qwe" data-pack="ios7" data-tags="questicon ion, information ion, ?"></i>
                                                    &nbsp; ion-ios7-help-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-help qwe" data-pack="ios7" data-tags="questicon ion, information ion, ?"></i>
                                                    &nbsp; ion-ios7-help
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-search qwe" data-pack="ios7" data-tags="find, seek, look, magnifying glass"></i>
                                                    &nbsp; ion-ios7-search
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-search-strong qwe" data-pack="ios7" data-tags="find, seek, look, magnifying glass"></i>
                                                    &nbsp; ion-ios7-search-strong
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-star qwe" data-pack="ios7" data-tags="favorite, rate"></i>
                                                    &nbsp; ion-ios7-star
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-star-half qwe" data-pack="ios7" data-tags="favorite, rate"></i>
                                                    &nbsp; ion-ios7-star-half
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-star-outline qwe" data-pack="ios7" data-tags="favorite, rate"></i>
                                                    &nbsp; ion-ios7-star-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-heart qwe" data-pack="ios7" data-tags="love"></i>
                                                    &nbsp; ion-ios7-heart
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-heart-outline qwe" data-pack="ios7" data-tags="love"></i>
                                                    &nbsp; ion-ios7-heart-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-more qwe" data-pack="ios7" data-tags="menu"></i>
                                                    &nbsp; ion-ios7-more
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-more-outline qwe" data-pack="ios7" data-tags="menu"></i>
                                                    &nbsp; ion-ios7-more-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-home qwe" data-pack="ios7" data-tags="house"></i>
                                                    &nbsp; ion-ios7-home
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-home-outline qwe" data-pack="ios7" data-tags="house"></i>
                                                    &nbsp; ion-ios7-home-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-cloud qwe" data-pack="ios7" data-tags="storage, weather, whether"></i>
                                                    &nbsp; ion-ios7-cloud
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-cloud-outline qwe" data-pack="ios7" data-tags="storage, weather, whether"></i>
                                                    &nbsp; on-ios7-cloud-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-cloud-upload qwe" data-pack="ios7" data-tags="storage"></i>
                                                    &nbsp; ion-ios7-cloud-upload
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-cloud-upload-outline qwe" data-pack="ios7" data-tags="storage"></i>
                                                    &nbsp; ion-ios7-cloud-upload-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-cloud-download qwe" data-pack="ios7" data-tags="storage"></i>
                                                    &nbsp; ion-ios7-cloud-download
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-cloud-download-outline qwe" data-pack="ios7" data-tags="storage"></i>
                                                    &nbsp; ion-ios7-cloud-download-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-upload qwe" data-pack="ios7" data-tags="share, import"></i>
                                                    &nbsp; ion-ios7-upload
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-upload-outline qwe" data-pack="ios7" data-tags="share, import"></i>
                                                    &nbsp; ion-ios7-upload-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-download qwe" data-pack="ios7" data-tags="save, export"></i>
                                                    &nbsp; ion-ios7-download
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-download-outline qwe" data-pack="ios7" data-tags="save, export"></i>
                                                    &nbsp; ion-ios7-download-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-refresh qwe" data-pack="ios7" data-tags="reload, renew, reset"></i>
                                                    &nbsp; ion-ios7-refresh
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-refresh-outline qwe" data-pack="ios7" data-tags="reload, renew, reset"></i>
                                                    &nbsp; on-ios7-refresh-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-refresh-empty qwe" data-pack="ios7" data-tags="reload, renew"></i>
                                                    &nbsp; ion-ios7-refresh-empty
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-reload qwe" data-pack="ios7" data-tags="renew, reset"></i>
                                                    &nbsp; ion-ios7-reload
                                                </span>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-loop-strong qwe" data-pack="ios7" data-tags="reload, renew, reset"></i>
                                                    &nbsp; ion-ios7-loop-strong
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-loop qwe" data-pack="ios7" data-tags="reload, renew, reset"></i>
                                                    &nbsp; ion-ios7-loop
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-bookmarks qwe" data-pack="ios7" data-tags="favorite"></i>
                                                    &nbsp; ion-ios7-bookmarks
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-bookmarks-outline qwe" data-pack="ios7" data-tags="favorite"></i>
                                                    &nbsp; ion-ios7-bookmarks-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-flag qwe" data-pack="ios7" data-tags="marker, favorite"></i>
                                                    &nbsp; ion-ios7-flag
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-flag-outline qwe" data-pack="ios7" data-tags="marker, favorite"></i>
                                                    &nbsp; ion-ios7-flag-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-glasses qwe" data-pack="ios7" data-tags="steve, reading, look, see"></i>
                                                    &nbsp; ion-ios7-glasses
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-glasses-outline qwe" data-pack="ios7" data-tags="steve, reading, look, see"></i>
                                                    &nbsp; ion-ios7-glasses-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-browsers qwe" data-pack="ios7" data-tags="square"></i>
                                                    &nbsp; ion-ios7-browsers
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-browsers-outline qwe" data-pack="ios7" data-tags="square"></i>
                                                    &nbsp; ion-ios7-browsers-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-at qwe" data-pack="ios7" data-tags="@"></i>
                                                    &nbsp; ion-ios7-at
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-at-outline qwe" data-pack="ios7" data-tags="@"></i>
                                                    &nbsp; ion-ios7-at-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-cart qwe" data-pack="ios7" data-tags="shopping, money, items, commerce, $"></i>
                                                    &nbsp; ion-ios7-cart
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-cart-outline qwe" data-pack="ios7" data-tags="shopping, money, items, commerce, $"></i>
                                                    &nbsp; ion-ios7-cart-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-pricetag qwe" data-pack="ios7" data-tags="shopping, money, items, commerce, $"></i>
                                                    &nbsp; ion-ios7-pricetag
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-pricetag-outline qwe" data-pack="ios7" data-tags="shopping, money, items, commerce, $"></i>
                                                    &nbsp; ion-ios7-pricetag-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-pricetags qwe" data-pack="ios7" data-tags="shopping, money, items, commerce, $"></i>
                                                    &nbsp; ion-ios7-pricetags
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-pricetags-outline qwe" data-pack="ios7" data-tags="shopping, money, items, commerce, $"></i>
                                                    &nbsp; ion-ios7-pricetags-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-chatboxes qwe" data-pack="ios7" data-tags="talk"></i>
                                                    &nbsp; ion-ios7-chatboxes
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-chatboxes-outline qwe" data-pack="ios7" data-tags="talk"></i>
                                                    &nbsp; ion-ios7-chatboxes-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-chatbubble qwe" data-pack="ios7" data-tags="talk"></i>
                                                    &nbsp; ion-ios7-chatbubble
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-chatbubble-outline qwe" data-pack="ios7" data-tags="talk"></i>
                                                    &nbsp; ion-ios7-chatbubble-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-cog qwe" data-pack="ios7" data-tags="settings, gear, opticon ions"></i>
                                                    &nbsp; ion-ios7-cog
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-cog-outline qwe" data-pack="ios7" data-tags="settings, gear, opticon ions"></i>
                                                    &nbsp; ion-ios7-cog-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-gear qwe" data-pack="ios7" data-tags="cog, settings, opticon ions"></i>
                                                    &nbsp; ion-ios7-gear
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-gear-outline qwe" data-pack="ios7" data-tags="cog, settings, opticon ions"></i>
                                                    &nbsp; ion-ios7-gear-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-settings qwe" data-pack="ios7" data-tags="cog, settings, opticon ions"></i>
                                                    &nbsp; ion-ios7-settings
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-settings-strong qwe" data-pack="ios7" data-tags="cog, settings, opticon ions"></i>
                                                    &nbsp; ion-ios7-settings-strong
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-toggle qwe" data-pack="ios7" data-tags="settings, opticon ions, switch"></i>
                                                    &nbsp; ion-ios7-toggle
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-toggle-outline qwe" data-pack="ios7" data-tags="settings, opticon ions, switch"></i>
                                                    &nbsp; ion-ios7-toggle-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-analytics qwe" data-pack="ios7" data-tags="metrics, track, data"></i>
                                                    &nbsp; ion-ios7-analytics
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-analytics-outline qwe" data-pack="ios7" data-tags="metrics, track, data"></i>
                                                    &nbsp; ion-ios7-analytics-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-pie qwe" data-pack="ios7" data-tags="cog, settings, opticon ions"></i>
                                                    &nbsp; ion-ios7-pie
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-pie-outline qwe" data-pack="ios7" data-tags="cog, settings, opticon ions"></i>
                                                    &nbsp;ion-ios7-pie-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-pulse qwe" data-pack="ios7" data-tags="ive, hot, rate"></i>
                                                    &nbsp; ion-ios7-pulse
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="ion-ios-pulse-strong qwe" data-pack="ios7" data-tags="ive, hot, rate"></i>
                                                    &nbsp; ion-ios7-pulse-strong
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="ion-ios-filing qwe" data-pack="ios7" data-tags="archive"></i>
                                                    &nbsp; ion-ios7-filing
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-filing-outline qwe" data-pack="ios7" data-tags="archive"></i>
                                                    &nbsp; ion-ios7-filing-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-box qwe" data-pack="ios7" data-tags="archive"></i>
                                                    &nbsp; ion-ios7-box
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-box-outline qwe" data-pack="ios7" data-tags="archive"></i>
                                                    &nbsp; ion-ios7-box-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-compose qwe" data-pack="ios7" data-tags="write, type, create"></i>
                                                    &nbsp; ion-ios7-compose
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-compose-outline qwe" data-pack="ios7" data-tags="write, type, create"></i>
                                                    &nbsp; ion-ios7-compose-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-trash qwe" data-pack="ios7" data-tags="delete, remove, dispose, waste, basket, dump, kill"></i>
                                                    &nbsp; ion-ios7-trash
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-trash-outline qwe" data-pack="ios7" data-tags="delete, remove, dispose, waste, basket, dump, kill"></i>
                                                    &nbsp; ion-ios7-trash-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-copy qwe" data-pack="ios7" data-tags="dupicate, paper"></i>
                                                    &nbsp; ion-ios7-copy
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-copy-outline qwe" data-pack="ios7" data-tags="dupicate, paper"></i>
                                                    &nbsp; ion-ios7-copy-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-email qwe" data-pack="ios7" data-tags="snail, mail"></i>
                                                    &nbsp; ion-ios7-email
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-email-outline qwe" data-pack="ios7" data-tags="snail, mail"></i>
                                                    &nbsp; ion-ios7-email-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-undo qwe" data-pack="ios7" data-tags="reply"></i>
                                                    &nbsp; ion-ios7-undo
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-undo-outline qwe" data-pack="ios7" data-tags="reply"></i>
                                                    &nbsp; ion-ios7-undo-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-redo qwe" data-pack="ios7" data-tags="forward"></i>
                                                    &nbsp; ion-ios7-redo
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-redo-outline qwe" data-pack="ios7" data-tags="forward"></i>
                                                    &nbsp; ion-ios7-redo-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-paperplane qwe" data-pack="ios7" data-tags="send"></i>
                                                    &nbsp; ion-ios7-paperplane
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-paperplane-outline qwe" data-pack="ios7" data-tags="send"></i>
                                                    &nbsp; ion-ios7-paperplane-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-folder qwe" data-pack="ios7" data-tags="file"></i>
                                                    &nbsp; ion-ios7-folder
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-folder-outline qwe" data-pack="ios7" data-tags="file"></i>
                                                    &nbsp; ion-ios7-folder-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-paper qwe" data-pack="ios7" data-tags="feed, paper"></i>
                                                    &nbsp; ion-ios7-paper
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-paper-outline qwe" data-pack="ios7" data-tags="feed, paper"></i>
                                                    &nbsp; ion-ios7-paper-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-world qwe" data-pack="ios7" data-tags="globe, earth"></i>
                                                    &nbsp; ion-ios7-world
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-world-outline qwe" data-pack="ios7" data-tags="globe, earth"></i>
                                                    &nbsp; ion-ios7-world-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-alarm qwe" data-pack="ios7" data-tags="wake, ring"></i>
                                                    &nbsp; ion-ios7-alarm
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-alarm-outline qwe" data-pack="ios7" data-tags="wake, ring"></i>
                                                    &nbsp; ion-ios7-alarm-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-speedometer qwe" data-pack="ios7" data-tags="speed, drive, level"></i>
                                                    &nbsp; ion-ios7-speedometer
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-speedometer-outline qwe" data-pack="ios7" data-tags="speed, drive, level"></i>
                                                    &nbsp; ion-ios7-speedometer-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-stopwatch qwe" data-pack="ios7" data-tags="time, speed"></i>
                                                    &nbsp; ion-ios7-stopwatch
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-stopwatch-outline qwe" data-pack="ios7" data-tags="time, speed"></i>
                                                    &nbsp; ion-ios7-stopwatch-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-timer qwe" data-pack="ios7" data-tags="cooking, alarm, buzz"></i>
                                                    &nbsp; ion-ios7-timer
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-timer-outline qwe" data-pack="ios7" data-tags="cooking, alarm, buzz"></i>
                                                    &nbsp; ion-ios7-timer-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-clock qwe" data-pack="ios7" data-tags="time, date, hours, minutes, seconds, watch"></i>
                                                    &nbsp; ion-ios7-clock
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-clock-outline qwe" data-pack="ios7" data-tags="time, date, hours, minutes, seconds, watch"></i>
                                                    &nbsp; ion-ios7-clock-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-time qwe" data-pack="ios7" data-tags="clock, watch, hour, minute, second"></i>
                                                    &nbsp; ion-ios7-time
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-time-outline qwe" data-pack="ios7" data-tags="clock, watch, hour, minute, second"></i>
                                                    &nbsp; ion-ios7-time-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-calendar qwe" data-pack="ios7" data-tags="date, time, month, year"></i>
                                                    &nbsp; ion-ios7-calendar
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-calendar-outline qwe" data-pack="ios7" data-tags="date, time, month, year"></i>
                                                    &nbsp; ion-ios7-calendar-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-photos qwe" data-pack="ios7" data-tags="images, stills, square"></i>
                                                    &nbsp; ion-ios7-photos
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-photos-outline qwe" data-pack="ios7" data-tags="images, stills, square"></i>
                                                    &nbsp; ion-ios7-photos-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-albums qwe" data-pack="ios7" data-tags="square, boxes, sides"></i>
                                                    &nbsp; ion-ios7-albums
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-albums-outline qwe" data-pack="ios7" data-tags="square, boxes, sides"></i>
                                                    &nbsp; ion-ios7-albums-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-camera qwe" data-pack="ios7" data-tags="picture"></i>
                                                    &nbsp; ion-ios7-camera
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-camera-outline qwe" data-pack="ios7" data-tags="picture"></i>
                                                    &nbsp; ion-ios7-camera-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-reverse-camera qwe" data-pack="ios7" data-tags="picture"></i>
                                                    &nbsp; ion-ios7-reverse-camera
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-reverse-camera-outline qwe" data-pack="ios7" data-tags="picture"></i>
                                                    &nbsp; ion-ios7-reverse-camera-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-eye qwe" data-pack="ios7" data-tags="view, see, exposed, look"></i>
                                                    &nbsp; ion-ios7-eye
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-eye-outline qwe" data-pack="ios7" data-tags="view, see, exposed, look"></i>
                                                    &nbsp; ion-ios7-eye-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-bolt qwe" data-pack="ios7" data-tags="flash, ightning"></i>
                                                    &nbsp; ion-ios7-bolt
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-bolt-outline qwe" data-pack="ios7" data-tags="flash, ightning"></i>
                                                    &nbsp; ion-ios7-bolt-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-barcode qwe" data-pack="ios7" data-tags="reader, camera"></i>
                                                    &nbsp; ion-ios7-barcode
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-barcode-outline qwe" data-pack="ios7" data-tags="reader, camera"></i>
                                                    &nbsp; ion-ios7-barcode-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-briefcase qwe" data-pack="ios7" data-tags="organize, folder"></i>
                                                    &nbsp; ion-ios7-briefcase
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-briefcase-outline qwe" data-pack="ios7" data-tags="organize, folder"></i>
                                                    &nbsp; ion-ios7-briefcase-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-medkit qwe" data-pack="ios7" data-tags="health, case, first aid, sick, disease"></i>
                                                    &nbsp; ion-ios7-medkit
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-medkit-outline qwe" data-pack="ios7" data-tags="health, case, first aid, sick, disease"></i>
                                                    &nbsp; ion-ios7-medkit-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-infinite qwe" data-pack="ios7" data-tags="forever, loop"></i>
                                                    &nbsp; ion-ios7-infinite
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-infinite-outline qwe" data-pack="ios7" data-tags="forever, loop"></i>
                                                    &nbsp; ion-ios7-infinite-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-calculator qwe" data-pack="ios7" data-tags="math, arithmatic"></i>
                                                    &nbsp; ion-ios7-calculator
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-calculator-outline qwe" data-pack="ios7" data-tags="math, arithmatic"></i>
                                                    &nbsp; ion-ios7-calculator-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-keypad qwe" data-pack="ios7" data-tags="type, grid, circle"></i>
                                                    &nbsp; ion-ios7-keypad
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-keypad-outline qwe" data-pack="ios7" data-tags="type, grid, circle"></i>
                                                    &nbsp; ion-ios7-keypad-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-telephone qwe" data-pack="ios7" data-tags="oldschool, call"></i>
                                                    &nbsp; ion-ios7-telephone
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-telephone-outline qwe" data-pack="ios7" data-tags="oldschool, call"></i>
                                                    &nbsp; ion-ios7-telephone-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-drag qwe" data-pack="ios7" data-tags="reorder, move, drag"></i>
                                                    &nbsp; ion-ios7-drag
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-location ion qwe" data-pack="ios7" data-tags="navigaticon ion, map, gps, pin"></i>
                                                    &nbsp; ion-ios7-location ion
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-location ion-outline qwe" data-pack="ios7" data-tags="navigaticon ion, map, gps, pin"></i>
                                                    &nbsp; ion-ios7-location ion-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-navigate qwe" data-pack="ios7" data-tags="location ion, map, gps, pin"></i>
                                                    &nbsp; ion-ios7-navigate
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-navigate-outline qwe" data-pack="ios7" data-tags="location ion, map, gps, pin"></i>
                                                    &nbsp; ion-ios7-navigate-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-locked qwe" data-pack="ios7" data-tags="security, padlock, safe"></i>
                                                    &nbsp; ion-ios7-locked
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-locked-outline qwe" data-pack="ios7" data-tags="security, padlock, safe"></i>
                                                    &nbsp; ion-ios7-locked-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-unlocked qwe" data-pack="ios7" data-tags="security, padlock, safe"></i>
                                                    &nbsp; ion-ios7-unlocked
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-unlocked-outline qwe" data-pack="ios7" data-tags="security, padlock, safe"></i>
                                                    &nbsp; ion-ios7-unlocked-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-monitor qwe" data-pack="ios7" data-tags="thunderbolt, display, screen"></i>
                                                    &nbsp; ion-ios7-monitor
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-monitor-outline qwe" data-pack="ios7" data-tags="thunderbolt, display, screen"></i>
                                                    &nbsp; ion-ios7-monitor-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-printer qwe" data-pack="ios7" data-tags="paper"></i>
                                                    &nbsp; ion-ios7-printer
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-printer-outline qwe" data-pack="ios7" data-tags="paper"></i>
                                                    &nbsp; ion-ios7-printer-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-person qwe" data-pack="ios7" data-tags="users, staff, head, human"></i>
                                                    &nbsp; ion-ios7-person
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-person-outline qwe" data-pack="ios7" data-tags="users, staff, head, human"></i>
                                                    &nbsp; ion-ios7-person-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-personadd qwe" data-pack="ios7" data-tags="users, staff, head, human, new, invite"></i>
                                                    &nbsp; ion-ios7-personadd
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-personadd-outline qwe" data-pack="ios7" data-tags="users, staff, head, human, new, invite"></i>
                                                    &nbsp; ion-ios7-personadd-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-people qwe" data-pack="ios7" data-tags="stalker, person, users, head, human"></i>
                                                    &nbsp; ion-ios7-people
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-people-outline qwe" data-pack="ios7" data-tags="stalker, person, users, head, human"></i>
                                                    &nbsp; ion-ios7-people-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-tennisball qwe" data-pack="ios7" data-tags="play, sports, fun, activity"></i>
                                                    &nbsp; ion-ios7-tennisball
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-tennisball-outline qwe" data-pack="ios7" data-tags="play, sports, fun, activity"></i>
                                                    &nbsp; ion-ios7-tennisball-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-baseball qwe" data-pack="ios7" data-tags="play, sports, fun, activity, mlb"></i>
                                                    &nbsp; ion-ios7-baseball
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-baseball-outline qwe" data-pack="ios7" data-tags="play, sports, fun, activity, mlb"></i>
                                                    &nbsp; ion-ios7-baseball-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-basketball qwe" data-pack="ios7" data-tags="play, sports, fun, activity, mba"></i>
                                                    &nbsp; ion-ios7-basketball
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-basketball-outline qwe" data-pack="ios7" data-tags="play, sports, fun, activity, mba"></i>
                                                    &nbsp; ion-ios7-basketball-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-football qwe" data-pack="ios7" data-tags="play, sports, fun, activity, soccer, gentleman"></i>
                                                    &nbsp; ion-ios7-football
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-football-outline qwe" data-pack="ios7" data-tags="play, sports, fun, activity, soccer, gentleman"></i>
                                                    &nbsp; ion-ios7-football-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-americanfootball qwe" data-pack="ios7" data-tags="play, sports, fun, activity, nfl"></i>
                                                    &nbsp; ion-ios7-americanfootball
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-americanfootball-outline qwe" data-pack="ios7" data-tags="play, sports, fun, activity, nfl"></i>
                                                    &nbsp; ion-ios7-americanfootball-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-paw qwe" data-pack="ios7" data-tags="play, dog, pet"></i>
                                                    &nbsp; ion-ios7-paw
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-paw-outline qwe" data-pack="ios7" data-tags="play, dog, pet"></i>
                                                    &nbsp; ion-ios7-paw-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-sunny qwe" data-pack="ios7" data-tags="weather, whether, ight, sky"></i>
                                                    &nbsp; ion-ios7-sunny
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-sunny-outline qwe" data-pack="ios7" data-tags="weather, whether, ight, sky"></i>
                                                    &nbsp; ion-ios7-sunny-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-partlysunny qwe" data-pack="ios7" data-tags="ight, weather, whether, cloudy"></i>
                                                    &nbsp; ion-ios7-partlysunny
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-partlysunny-outline qwe" data-pack="ios7" data-tags="ight, weather, whether, cloudy"></i>
                                                    &nbsp; ion-ios7-partlysunny-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-cloudy qwe" data-pack="ios7" data-tags="weather, whether, overcast"></i>
                                                    &nbsp; ion-ios7-cloudy
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-cloudy-outline qwe" data-pack="ios7" data-tags="weather, whether, overcast"></i>
                                                    &nbsp; ion-ios7-cloudy-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-rainy qwe" data-pack="ios7" data-tags="whether, weather, water, cloud"></i>
                                                    &nbsp; ion-ios7-rainy
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-rainy-outline qwe" data-pack="ios7" data-tags="whether, weather, water, cloud"></i>
                                                    &nbsp; ion-ios7-rainy-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-thunderstorm qwe" data-pack="ios7" data-tags="whether, weather, sky, ightning, rain, cloudy, overcast, storm"></i>
                                                    &nbsp; ion-ios7-thunderstorm
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-thunderstorm-outline qwe" data-pack="ios7" data-tags="whether, weather, sky, ightning, rain, cloudy, overcast, storm"></i>
                                                    &nbsp; ion-ios7-thunderstorm-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-snowy qwe" data-pack="ios7" data-tags="cold, weather, whether, overcast"></i>
                                                    &nbsp; ion-ios7-snowy
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-moon qwe" data-pack="ios7" data-tags="sky, night, dark"></i>
                                                    &nbsp; ion-ios7-moon
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-moon-outline qwe" data-pack="ios7" data-tags="sky, night, dark"></i>
                                                    &nbsp; ion-ios7-moon-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-cloudy-night qwe" data-pack="ios7" data-tags="weather, whether, overcast"></i>
                                                    &nbsp; ion-ios7-cloudy-night
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-cloudy-night-outline qwe" data-pack="ios7" data-tags="weather, whether, overcast"></i>
                                                    &nbsp; ion-ios7-cloudy-night-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-musical-notes qwe" data-pack="ios7" data-tags="sound, noise, istening, play"></i>
                                                    &nbsp; ion-ios7-musical-notes
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-musical-note qwe" data-pack="ios7" data-tags="sound, noise, istening, play"></i>
                                                    &nbsp; ion-ios7-musical-note
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-bell qwe" data-pack="ios7" data-tags="right, noise, alarm, sound, music"></i>
                                                    &nbsp; ion-ios7-bell
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-bell-outline qwe" data-pack="ios7" data-tags="right, noise, alarm, sound, music"></i>
                                                    &nbsp; ion-ios7-bell-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-mic qwe" data-pack="ios7" data-tags="sound, noise, speaker, talk"></i>
                                                    &nbsp; ion-ios7-mic
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-mic-outline qwe" data-pack="ios7" data-tags="sound, noise, speaker, talk"></i>
                                                    &nbsp; ion-ios7-mic-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-mic-off qwe" data-pack="ios7" data-tags="sound, noise, speaker, talk"></i>
                                                    &nbsp; ion-ios7-mic-off
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-volume-high qwe" data-pack="ios7" data-tags="sound, noise, isten, music"></i>
                                                    &nbsp; ion-ios7-volume-high
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-volume-low qwe" data-pack="ios7" data-tags="sound, noise, isten, music"></i>
                                                    &nbsp; ion-ios7-volume-low
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-play qwe" data-pack="ios7" data-tags="music, watch, arrow, right"></i>
                                                    &nbsp; ion-ios7-play
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-play-outline qwe" data-pack="ios7" data-tags="music, watch, arrow, right"></i>
                                                    &nbsp; ion-ios7-play-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-pause qwe" data-pack="ios7" data-tags="music, break, hold, freeze"></i>
                                                    &nbsp; ion-ios7-pause
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-pause-outline qwe" data-pack="ios7" data-tags="music, break, hold, freeze"></i>
                                                    &nbsp; ion-ios7-pause-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-recording qwe" data-pack="ios7" data-tags="film, tape, voicemail"></i>
                                                    &nbsp; ion-ios7-recording
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-recording-outline qwe" data-pack="ios7" data-tags="film, tape, voicemail"></i>
                                                    &nbsp; ion-ios7-recording-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-fastforward qwe" data-pack="ios7" data-tags="next, skip, jump"></i>
                                                    &nbsp; ion-ios7-fastforward
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-fastforward-outline qwe" data-pack="ios7" data-tags="next, skip, jump"></i>
                                                    &nbsp; ion-ios7-fastforward-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-rewind qwe" data-pack="ios7" data-tags="music, previous, back"></i>
                                                    &nbsp; ion-ios7-rewind
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-rewind-outline qwe" data-pack="ios7" data-tags="music, previous, back"></i>
                                                    &nbsp; ion-ios7-rewind-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-skipbackward qwe" data-pack="ios7" data-tags="music, previous"></i>
                                                    &nbsp; ion-ios7-skipbackward
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-skipbackward-outline qwe" data-pack="ios7" data-tags="music, previous"></i>
                                                    &nbsp; ion-ios7-skipbackward-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-skipforward qwe" data-pack="ios7" data-tags="music, next"></i>
                                                    &nbsp; ion-ios7-skipforward
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-skipforward-outline qwe" data-pack="ios7" data-tags="music, next"></i>
                                                    &nbsp; ion-ios7-skipforward-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-videocam qwe" data-pack="ios7" data-tags="film, movie, camera"></i>
                                                    &nbsp; ion-ios7-videocam
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-videocam-outline qwe" data-pack="ios7" data-tags="film, movie, camera"></i>
                                                    &nbsp; ion-ios7-videocam-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-film qwe" data-pack="ios7" data-tags="movie"></i>
                                                    &nbsp; ion-ios7-film
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-film-outline qwe" data-pack="ios7" data-tags="movie"></i>
                                                    &nbsp; ion-ios7-film-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-lightbulb qwe" data-pack="ios7" data-tags="idea, new, bright, aha!"></i>
                                                    &nbsp; ion-ios7-lightbulb
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-lightbulb-outline qwe" data-pack="ios7" data-tags="idea, new, bright, aha!"></i>
                                                    &nbsp; ion-ios7-lightbulb-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-wineglass qwe" data-pack="ios7" data-tags="alcohol, drink, food, iquid"></i>
                                                    &nbsp; ion-ios7-wineglass
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-ios-wineglass-outline qwe" data-pack="ios7" data-tags="alcohol, drink, food, iquid"></i>
                                                    &nbsp; ion-ios7-wineglass
                                                </span>
                                            </div>


                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-wifi qwe" data-pack="android " data-tags="internet,connection ion, bars"></i>
                                                    &nbsp; ion-android-wifi
                                                </span>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-call qwe" data-pack="android" data-tags="telephone"></i>
                                                    &nbsp; ion-android-call
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-arrow-back qwe" data-pack="android" data-tags="chevron, navigaticon ion"></i>
                                                    &nbsp; ion-android-arrow-back
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-arrow-forward qwe" data-pack="android" data-tags="chevron, navigaticon ion"></i>
                                                    &nbsp; ion-android-arrow-forward
                                                </span>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-settings qwe" data-pack="android" data-tags="opticon ions"></i>
                                                    &nbsp; ion-android-settings
                                                </span>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-star qwe" data-pack="android" data-tags="favorite"></i>
                                                    &nbsp; ion-android-star
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-search qwe" data-pack="android" data-tags="magnifying glass"></i>
                                                    &nbsp; ion-android-search
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-microphone qwe" data-pack="android" data-tags="recorde, speak, noise, music, sound"></i>
                                                    &nbsp; ion-android-microphone
                                                </span>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-add qwe" data-pack="android" data-tags="plus, include, invite"></i>
                                                    &nbsp; ion-android-add
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-remove qwe" data-pack="android" data-tags="minus, subtract"></i>
                                                    &nbsp; ion-android-remove
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-close qwe" data-pack="android" data-tags="delete, remove"></i>
                                                    &nbsp; ion-android-close
                                                </span>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-download qwe" data-pack="android" data-tags="export"></i>
                                                    &nbsp; ion-android-download
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-hand qwe" data-pack="android" data-tags="stop"></i>
                                                    &nbsp; ion-android-hand
                                                </span>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-calendar qwe" data-pack="android" data-tags="date, month, week"></i>
                                                    &nbsp; ion-android-calendar
                                                </span>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-stopwatch qwe" data-pack="android" data-tags=""></i>
                                                    &nbsp; ion-android-stopwatch
                                                </span>
                                            </div>


                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-camera qwe" data-pack="android" data-tags="image, photo"></i>
                                                    &nbsp; ion-android-camera
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-image qwe" data-pack="android" data-tags="camera, photo"></i>
                                                    &nbsp; ion-android-image
                                                </span>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-locate qwe" data-pack="android" data-tags="gps, navigate, maps"></i>
                                                    &nbsp; ion-android-locate
                                                </span>
                                            </div>


                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-playstore qwe" data-pack="android" data-tags=""></i>
                                                    &nbsp; ion-android-playstore
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-share qwe" data-pack="android" data-tags=""></i>
                                                    &nbsp; ion-android-share
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-send qwe" data-pack="android" data-tags="email, paper"></i>
                                                    &nbsp; ion-android-send
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-mail qwe" data-pack="android" data-tags="email"></i>
                                                    &nbsp; ion-android-mail
                                                </span>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-archive qwe" data-pack="android" data-tags="email"></i>
                                                    &nbsp; ion-android-archive
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-folder qwe" data-pack="android" data-tags="file"></i>
                                                    &nbsp; ion-android-folder
                                                </span>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-chat qwe" data-pack="android" data-tags="talk, text"></i>
                                                    &nbsp; ion-android-chat
                                                </span>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-contact qwe" data-pack="android" data-tags="people, social, users"></i>
                                                    &nbsp; ion-android-contact
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-contacts qwe" data-pack="android" data-tags="people, social, users"></i>
                                                    &nbsp; ion-android-contacts
                                                </span>
                                            </div>


                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-android-social qwe" data-pack="android" data-tags="user, person, people, contact, friend"></i>
                                                    &nbsp; ion-android-social
                                                </span>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-twitter qwe" data-pack="social" data-tags="follow, post, share"></i>
                                                    &nbsp; ion-social-twitter
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-twitter-outline qwe" data-pack="social" data-tags="follow, post, share"></i>
                                                    &nbsp; ion-social-twitter-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-facebook qwe" data-pack="social" data-tags="ike, post, share"></i>
                                                    &nbsp; ion-social-facebook
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-facebook-outline qwe" data-pack="social" data-tags="ike, post, share"></i>
                                                    &nbsp; ion-social-facebook-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-googleplus qwe" data-pack="social" data-tags="follow, post, share"></i>
                                                    &nbsp; ion-social-googleplus
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-googleplus-outline qwe" data-pack="social" data-tags="follow, post, share"></i>
                                                    &nbsp; ion-social-googleplus-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-google qwe" data-pack="social" data-tags="follow, post, share"></i>
                                                    &nbsp; ion-social-google
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-google-outline qwe" data-pack="social" data-tags="follow, post, share"></i>
                                                    &nbsp; ion-social-google-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-dribbble qwe" data-pack="social" data-tags="design"></i>
                                                    &nbsp; ion-social-dribbble
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-dribbble-outline qwe" data-pack="social" data-tags="design"></i>
                                                    &nbsp; ion-social-dribbble-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-github qwe" data-pack="social" data-tags="code"></i>
                                                    &nbsp; ion-social-github
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-github-outline qwe" data-pack="social" data-tags="code"></i>
                                                    &nbsp; ion-social-github-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-instagram qwe" data-pack="social" data-tags="photo, camera"></i>
                                                    &nbsp; ion-social-instagram
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-instagram-outline qwe" data-pack="social" data-tags="photo, camera"></i>
                                                    &nbsp; ion-social-instagram-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-foursquare qwe" data-pack="social" data-tags="checkin"></i>
                                                    &nbsp; ion-social-foursquare
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-foursquare-outline qwe" data-pack="social" data-tags="checkin"></i>
                                                    &nbsp; ion-social-foursquare-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-pinterest qwe" data-pack="social" data-tags="social"></i>
                                                    &nbsp; ion-social-pinterest
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-pinterest-outline qwe" data-pack="social" data-tags="social"></i>
                                                    &nbsp; ion-social-pinterest-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-rss qwe" data-pack="social" data-tags="blogging"></i>
                                                    &nbsp; ion-social-rss
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-rss-outline qwe" data-pack="social" data-tags="blogging"></i>
                                                    &nbsp; ion-social-rss-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-tumblr qwe" data-pack="social" data-tags="blogging"></i>
                                                    &nbsp; ion-social-tumblr
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-tumblr-outline qwe" data-pack="social" data-tags="blogging"></i>
                                                    &nbsp; ion-social-tumblr-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-wordpress qwe" data-pack="social" data-tags="blogging"></i>
                                                    &nbsp; ion-social-wordpress
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-wordpress-outline qwe" data-pack="social" data-tags="blogging"></i>
                                                    &nbsp; ion-social-wordpress-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-reddit qwe" data-pack="social" data-tags="news, upvotes, karma"></i>
                                                    &nbsp; ion-social-reddit
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-reddit-outline qwe" data-pack="social" data-tags="news, upvotes, karma"></i>
                                                    &nbsp; ion-social-reddit-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-hackernews qwe" data-pack="social" data-tags="discuss, upvotes, karma"></i>
                                                    &nbsp; ion-social-hackernews
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-hackernews-outline qwe" data-pack="social" data-tags="discuss, upvotes, karma"></i>
                                                    &nbsp; ion-social-hackernews-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-designernews qwe" data-pack="social" data-tags="design, post"></i>
                                                    &nbsp; ion-social-designernews
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-designernews-outline qwe" data-pack="social" data-tags="design, post"></i>
                                                    &nbsp; ion-social-designernews-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-yahoo qwe" data-pack="social" data-tags=""></i>
                                                    &nbsp; ion-social-yahoo
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-yahoo-outline qwe" data-pack="social" data-tags=""></i>
                                                    &nbsp; ion-social-yahoo-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-buffer qwe" data-pack="social" data-tags="share"></i>
                                                    &nbsp; ion-social-buffer
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-buffer-outline qwe" data-pack="social" data-tags="share"></i>
                                                    &nbsp; ion-social-buffer-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-skype qwe" data-pack="social" data-tags="call"></i>
                                                    &nbsp; ion-social-skype
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-skype-outline qwe" data-pack="social" data-tags="call"></i>
                                                    &nbsp; ion-social-skype-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-linkedin qwe" data-pack="social" data-tags="connect"></i>
                                                    &nbsp; ion-social-linkedin
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-linkedin-outline qwe" data-pack="social" data-tags="connect"></i>
                                                    &nbsp; ion-social-linkedin-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-usd qwe" data-pack="social" data-tags="currency, trade, money, cash"></i>
                                                    &nbsp; ion-social-usd
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-usd-outline qwe" data-pack="social" data-tags="currency, trade, money, cash"></i>
                                                    &nbsp; ion-social-usd-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-bitcoin qwe" data-pack="social" data-tags="currency, trade, money"></i>
                                                    &nbsp; ion-social-bitcoin
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-bitcoin-outline qwe" data-pack="social" data-tags="currency, trade, money"></i>
                                                    &nbsp; ion-social-bitcoin-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-vimeo qwe" data-pack="social" data-tags="video, watch, share, view"></i>
                                                    &nbsp; ion-social-vimeo
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-vimeo-outline qwe" data-pack="social" data-tags="video, watch, share, view"></i>
                                                    &nbsp; ion-social-vimeo-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-youtube qwe" data-pack="social" data-tags="video, watch, share, view"></i>
                                                    &nbsp; ion-social-youtube
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-youtube-outline qwe" data-pack="social" data-tags="video, watch, share, view"></i>
                                                    &nbsp; ion-social-youtube-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-dropbox qwe" data-pack="social" data-tags="upload"></i>
                                                    &nbsp; ion-social-dropbox
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-dropbox-outline qwe" data-pack="social" data-tags="upload"></i>
                                                    &nbsp; ion-social-dropbox-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-apple qwe" data-pack="social" data-tags="mac, mobile"></i>
                                                    &nbsp; ion-social-apple
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-apple-outline qwe" data-pack="social" data-tags="mac, mobile"></i>
                                                    &nbsp; ion-social-apple-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-android qwe" data-pack="social" data-tags="mobile"></i>
                                                    &nbsp; ion-social-android
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-android-outline qwe" data-pack="social" data-tags="mobile"></i>
                                                    &nbsp; ion-social-android-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-windows qwe" data-pack="social" data-tags="pc"></i>
                                                    &nbsp; ion-social-windows
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-windows-outline qwe" data-pack="social" data-tags="pc"></i>
                                                    &nbsp; ion-social-windows-outline
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-tux qwe" data-pack="social" data-tags="inux, opensource"></i>
                                                    &nbsp; ion-social-tux
                                                </span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left">
                                                <span class="nav">
                                                    <i class="icon ion-social-freebsd-devil qwe" data-pack="social" data-tags="unix"></i>
                                                    &nbsp; ion-social-freebsd-devil
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--ionicons ends-->
                                    <!--lineicons starts-->

                                    <div class="tab-pane" id="lineicons">
                                        <div class="row mar-40">
                                            <div class="simplelineicons-demo">
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-user"></span>
                                                        &nbsp;icon-user
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-user-female"></span>
                                                        &nbsp;icon-user-female
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-people"></span>
                                                        &nbsp;icon-users
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-user-follow"></span>
                                                        &nbsp;icon-user-follow
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-user-following"></span>
                                                        &nbsp;icon-user-following
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-user-unfollow"></span>
                                                        &nbsp;icon-user-unfollow
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-trophy"></span>
                                                        &nbsp;icon-trophy
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-speedometer"></span>
                                                        &nbsp;icon-speedometer
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-social-youtube"></span>
                                                        &nbsp;icon-social-youtube
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-social-twitter"></span>
                                                        &nbsp;icon-social-twitter
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-social-tumblr"></span>
                                                        &nbsp;icon-social-tumblr
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-social-facebook"></span>
                                                        &nbsp;icon-social-facebook
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-social-dropbox"></span>
                                                        &nbsp;icon-social-dropbox
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-social-dribbble"></span>
                                                        &nbsp;icon-social-dribbble
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-shield"></span>
                                                        &nbsp;icon-shield
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-screen-tablet"></span>
                                                        &nbsp;icon-screen-tablet
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-screen-smartphone"></span>
                                                        &nbsp;icon-screen-smartphone
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-screen-desktop"></span>
                                                        &nbsp;icon-screen-desktop
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-plane"></span>
                                                        &nbsp;icon-plane
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-notebook"></span>
                                                        &nbsp;icon-notebook
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-moustache"></span>
                                                        &nbsp;icon-moustache
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-mouse"></span>
                                                        &nbsp;icon-mouse
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-magnet"></span>
                                                        &nbsp;icon-magnet
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-magic-wand"></span>
                                                        &nbsp;icon-magic-wand
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-hourglass"></span>
                                                        &nbsp;icon-hourglass
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-graduation"></span>
                                                        &nbsp;icon-graduation
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-ghost"></span>
                                                        &nbsp;icon-ghost
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-game-controller"></span>
                                                        &nbsp;icon-game-controller
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-fire"></span>
                                                        &nbsp;icon-fire
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-eyeglasses"></span>
                                                        &nbsp;icon-eyeglasses
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-envelope-open"></span>
                                                        &nbsp;icon-envelope-open
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-envelope-letter"></span>
                                                        &nbsp;icon-envelope-letter
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-energy"></span>
                                                        &nbsp;icon-energy
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-emoticon-smile"></span>
                                                        &nbsp;icon-emoticon-smile
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-disc"></span>
                                                        &nbsp;icon-disc
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-cursor-move"></span>
                                                        &nbsp;icon-cursor-move
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-crop"></span>
                                                        &nbsp;icon-crop
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-credit-card"></span>
                                                        &nbsp;icon-credit-card
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-chemistry"></span>
                                                        &nbsp;icon-chemistry
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-bell"></span>
                                                        &nbsp;icon-bell
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-badge"></span>
                                                        &nbsp;icon-badge
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-anchor"></span>
                                                        &nbsp;icon-anchor
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-action-redo"></span>
                                                        &nbsp;icon-action-redo
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-action-undo"></span>
                                                        &nbsp;icon-action-undo
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-bag"></span>
                                                        &nbsp;icon-bag
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-basket"></span>
                                                        &nbsp;icon-basket
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-basket-loaded"></span>
                                                        &nbsp;icon-basket-loaded
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-book-open"></span>
                                                        &nbsp;icon-book-open
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-briefcase"></span>
                                                        &nbsp;icon-briefcase
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-bubbles"></span>
                                                        &nbsp;icon-bubbles
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-calculator"></span>
                                                        &nbsp;icon-calculator
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-call-end"></span>
                                                        &nbsp;icon-call-end
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-call-in"></span>
                                                        &nbsp;icon-call-in
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-call-out"></span>
                                                        &nbsp;icon-call-out
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-compass"></span>
                                                        &nbsp;icon-compass
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-cup"></span>
                                                        &nbsp;icon-cup
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-diamond"></span>
                                                        &nbsp;icon-diamond
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-direction"></span>
                                                        &nbsp;icon-direction
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-directions"></span>
                                                        &nbsp;icon-directions
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-docs"></span>
                                                        &nbsp;icon-docs
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-drawer"></span>
                                                        &nbsp;icon-drawer
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-drop"></span>
                                                        &nbsp;icon-drop
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-earphones"></span>
                                                        &nbsp;icon-earphones
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-earphones-alt"></span>
                                                        &nbsp;icon-earphones-alt
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-feed"></span>
                                                        &nbsp;icon-feed
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-film"></span>
                                                        &nbsp;icon-film
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-folder-alt"></span>
                                                        &nbsp;icon-folder-alt
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-frame"></span>
                                                        &nbsp;icon-frame
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-globe"></span>
                                                        &nbsp;icon-globe
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-globe-alt"></span>
                                                        &nbsp;icon-globe-alt
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-handbag"></span>
                                                        &nbsp;icon-handbag
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-layers"></span>
                                                        &nbsp;icon-layers
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-map"></span>
                                                        &nbsp;icon-map
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-picture"></span>
                                                        &nbsp;icon-picture
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-pin"></span>
                                                        &nbsp;icon-pin
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-playlist"></span>
                                                        &nbsp;icon-playlist
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-present"></span>
                                                        &nbsp;icon-present
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-printer"></span>
                                                        &nbsp;icon-printer
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-puzzle"></span>
                                                        &nbsp;icon-puzzle
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-speech"></span>
                                                        &nbsp;icon-speech
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-vector"></span>
                                                        &nbsp;icon-vector
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-wallet"></span>
                                                        &nbsp;icon-wallet
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-arrow-down"></span>
                                                        &nbsp;icon-arrow-down
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-arrow-left"></span>
                                                        &nbsp;icon-arrow-left
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-arrow-right"></span>
                                                        &nbsp;icon-arrow-right
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-arrow-up"></span>
                                                        &nbsp;icon-arrow-up
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-bar-chart"></span>
                                                        &nbsp;icon-bar-chart
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-bulb"></span>
                                                        &nbsp;icon-bulb
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-calendar"></span>
                                                        &nbsp;icon-calendar
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-control-end"></span>
                                                        &nbsp;icon-control-end
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-control-forward"></span>
                                                        &nbsp;icon-control-forward
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-control-pause"></span>
                                                        &nbsp;icon-control-pause
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-control-play"></span>
                                                        &nbsp;icon-control-play
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-control-rewind"></span>
                                                        &nbsp;icon-control-rewind
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-control-start"></span>
                                                        &nbsp;icon-control-start
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-cursor"></span>
                                                        &nbsp;icon-cursor
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-dislike"></span>
                                                        &nbsp;icon-dislike
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-equalizer"></span>
                                                        &nbsp;icon-equalizer
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-graph"></span>
                                                        &nbsp;icon-graph
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-grid"></span>
                                                        &nbsp;icon-grid
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-home"></span>
                                                        &nbsp;icon-home
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-like"></span>
                                                        &nbsp;icon-like
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-list"></span>
                                                        &nbsp;icon-list
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-login"></span>
                                                        &nbsp;icon-login
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-logout"></span>
                                                        &nbsp;icon-logout
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-loop"></span>
                                                        &nbsp;icon-loop
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-microphone"></span>
                                                        &nbsp;icon-microphone
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-music-tone"></span>
                                                        &nbsp;icon-music-tone
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-music-tone-alt"></span>
                                                        &nbsp;icon-music-tone-alt
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-note"></span>
                                                        &nbsp;icon-note
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-pencil"></span>
                                                        &nbsp;icon-pencil
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-pie-chart"></span>
                                                        &nbsp;icon-pie-chart
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-question"></span>
                                                        &nbsp;icon-question
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-rocket"></span>
                                                        &nbsp;icon-rocket
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-share"></span>
                                                        &nbsp;icon-share
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-share-alt"></span>
                                                        &nbsp;icon-share-alt
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-shuffle"></span>
                                                        &nbsp;icon-shuffle
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-size-actual"></span>
                                                        &nbsp;icon-size-actual
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-size-fullscreen"></span>
                                                        &nbsp;icon-size-fullscreen
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-support"></span>
                                                        &nbsp;icon-support
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-tag"></span>
                                                        &nbsp;icon-tag
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-trash"></span>
                                                        &nbsp;icon-trash
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-umbrella"></span>
                                                        &nbsp;icon-umbrella
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-wrench"></span>
                                                        &nbsp;icon-wrench
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-ban"></span>
                                                        &nbsp;icon-ban
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-bubble"></span>
                                                        &nbsp;icon-bubble
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-camcorder"></span>
                                                        &nbsp;icon-camcorder
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-camera"></span>
                                                        &nbsp;icon-camera
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-check"></span>
                                                        &nbsp;icon-check
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-clock"></span>
                                                        &nbsp;icon-clock
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-close"></span>
                                                        &nbsp;icon-close
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-cloud-download"></span>
                                                        &nbsp;icon-cloud-download
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-cloud-upload"></span>
                                                        &nbsp;icon-cloud-upload
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-doc"></span>
                                                        &nbsp;icon-doc
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-envelope"></span>
                                                        &nbsp;icon-envelope
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-eye"></span>
                                                        &nbsp;icon-eye
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-flag"></span>
                                                        &nbsp;icon-flag
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-folder"></span>
                                                        &nbsp;icon-folder
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-heart"></span>
                                                        &nbsp;icon-heart
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-info"></span>
                                                        &nbsp;icon-info
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-key"></span>
                                                        &nbsp;icon-key
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-link"></span>
                                                        &nbsp;icon-link
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-lock"></span>
                                                        &nbsp;icon-lock
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-lock-open"></span>
                                                        &nbsp;icon-lock-open
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-magnifier"></span>
                                                        &nbsp;icon-magnifier
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-magnifier-add"></span>
                                                        &nbsp;icon-magnifier-add
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-magnifier-remove"></span>
                                                        &nbsp;icon-magnifier-remove
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-paper-clip"></span>
                                                        &nbsp;icon-paper-clip
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-paper-plane"></span>
                                                        &nbsp;icon-paper-plane
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-plus"></span>
                                                        &nbsp;icon-plus
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-pointer"></span>
                                                        &nbsp;icon-pointer
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-power"></span>
                                                        &nbsp;icon-power
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-refresh"></span>
                                                        &nbsp;icon-refresh
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-reload"></span>
                                                        &nbsp;icon-reload
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-settings"></span>
                                                        &nbsp;icon-settings
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-star"></span>
                                                        &nbsp;icon-star
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-symbol-female"></span>
                                                        &nbsp;icon-symbol-female
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-symbol-male"></span>
                                                        &nbsp;icon-symbol-male
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-target"></span>
                                                        &nbsp;icon-target
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-volume-1"></span>
                                                        &nbsp;icon-volume-1
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-volume-2"></span>
                                                        &nbsp;icon-volume-2
                                                    </span>
                                                </span>
                                                <span class="item-box">
                                                    <span class="item">
                                                        <span aria-hidden="true" class="icon-volume-off"></span>
                                                        &nbsp;icon-volume-off
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--lineicons ends--> </div>
                                <!-- /.tab-content --> </div>
                            <!-- /.nav-tabs-custom --> </div>
                        <!-- /.col --> </div>
                </div>
            </div>
            <!--main content ends--> </section>
        <!-- content --> 
@stop

{{-- page level scripts --}}
@section('footer_scripts')
@stop
