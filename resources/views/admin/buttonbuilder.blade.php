@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Buttons Builder
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    
    <link href="{{ asset('assets/css/pages/buttonbuilder2.css') }}" rel="stylesheet"/>
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Button Builder</h1>
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
                    <li class="active">Button Builder</li>
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
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="vector-square" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Button Builder
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!-- button Builder. -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="lead">Generated code</p>
                                        <div class="well">
                                            <div id="result">
                                                <div id="button">
                                                    <a href="#" class="btn btn-sm btn-primary">
                                                        <span class="glyphicon glyphicon-check"></span>
                                                        Default text here
                                                    </a>
                                                </div>
                                                <br>
                                                <p>
                                                    Generated Code
                                                    <input id="output" type="text" class="form-control input-block-level" placeholder="Output"></p>
                                            </div>
                                        </div>
                                        <p></p>
                                        <div id="carbonads-container"></div>
                                        <p></p>
                                        <hr></div>
                                    <div class="col-md-6">
                                        <p class="lead">Button text :</p>
                                        <p id="input">
                                            <input id="name" autocomplete="off" class="form-control" type="text" placeholder="Please enter your button name"></p>
                                        <p class="lead">Color :</p>
                                        <div id="types" class="btn-group">
                                            <button name="color" type="button" class="btn btn-default" value="btn-default">Default</button>
                                            <button name="color" type="button" class="btn btn-primary" value="btn-primary">Primary</button>
                                            <button name="color" type="button" class="btn btn-info" value="btn-info">Info</button>
                                            <button name="color" type="button" class="btn btn-success" value="btn-success">Success</button>
                                            <button name="color" type="button" class="btn btn-warning" value="btn-warning">Warning</button>
                                            <button name="color" type="button" class="btn btn-danger" value="btn-danger">Danger</button>
                                        </div>
                                        <p class="lead">Size :</p>
                                        <div id="sizes">
                                            <p>
                                                <button class="btn btn-xs btn-primary" value="btn-xs" type="button">Mini</button>
                                                <button class="btn btn-sm btn-primary" value="btn-sm" type="button">Small</button>
                                                <button class="btn btn-md btn-primary" value="btn-md" type="button">Default</button>
                                                <button class="btn btn-primary btn-lg" value="btn-lg" type="button">Large</button>
                                            </p>
                                            <p>
                                                <a href="#" class="btn btn-primary btn-block" data-toggle="button">Full width button</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="icons">
                                            <p class="lead">Icon :</p>
                                            <div class="row">
                                                <div class="col-md-2 m-b-5">Search icons :</div>
                                                <div class="col-md-4 m-b-5">
                                                    <input id="search" type="text" autocomplete="off" placeholder="Search icon" class="typeahead form-control"></div>
                                                <div class="col-md-6 m-b-5">
                                                    Icon position :
                                                    <div id="icon-position" class="btn-group">
                                                        <button class="btn btn-default" value="left" type="button">
                                                            <span class="glyphicon glyphicon-arrow-left"></span>
                                                            &nbsp; &nbsp;Left
                                                        </button>
                                                        <button class="btn btn-default" value="right" type="button">
                                                            Right &nbsp; &nbsp;
                                                            <span class="glyphicon glyphicon-arrow-right"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul class="bs-glyphicons">
                                                        <li>
                                                            <a href="d#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-adjust"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-align-center"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-align-justify"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-align-left"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-align-right"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-arrow-left"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-arrow-right"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-asterisk"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-backward"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-ban-circle"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-barcode"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-bell"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-bold"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-book"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-bookmark"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-briefcase"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-bullhorn"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-camera"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-certificate"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-check"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-chevron-down"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-chevron-up"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-circle-arrow-down"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-circle-arrow-left"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-circle-arrow-right"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-circle-arrow-up"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-cloud"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-cloud-download"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-cloud-upload"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-cog"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-collapse-down"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-collapse-up"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-comment"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-compressed"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-copyright-mark"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-credit-card"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-cutlery"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-dashboard"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-download"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-download-alt"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-earphone"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-edit"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-eject"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-envelope"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-euro"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-exclamation-sign"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-expand"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-export"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-eye-close"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-eye-open"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-facetime-video"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-fast-backward"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-fast-forward"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-file"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-film"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-filter"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-fire"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-flag"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-flash"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-floppy-disk"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-floppy-open"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-floppy-remove"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-floppy-save"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-floppy-saved"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-folder-close"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-folder-open"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-font"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-forward"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-fullscreen"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-gbp"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-gift"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-glass"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-globe"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-hand-down"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-hand-left"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-hand-right"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-hand-up"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-hd-video"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-hdd"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-header"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-headphones"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-heart"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-heart-empty"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-home"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-import"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-inbox"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-indent-left"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-indent-right"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-info-sign"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-italic"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-leaf"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-link"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-list"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-list-alt"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-lock"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-log-in"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-log-out"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-magnet"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-map-marker"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-minus"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-minus-sign"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-move"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-music"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-new-window"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-off"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-ok"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-ok-circle"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-ok-sign"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-open"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-paperclip"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-pause"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-pencil"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-phone"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-phone-alt"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-picture"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-plane"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-play"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-play-circle"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-plus"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-plus-sign"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-print"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-pushpin"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-qrcode"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-question-sign"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-random"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-record"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-refresh"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-registration-mark"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-remove"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-remove-circle"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-remove-sign"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-repeat"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-resize-full"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-resize-horizontal"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-resize-small"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-resize-vertical"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-retweet"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-road"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-save"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-saved"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-screenshot"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-sd-video"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-search"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-send"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-share"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-share-alt"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-signal"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-sort"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-sort-by-alphabet"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-sort-by-attributes"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-sort-by-attributes-alt"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-sort-by-order"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-sort-by-order-alt"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-sound-5-1"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-sound-6-1"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-sound-7-1"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-sound-dolby"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-sound-stereo"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-star"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-star-empty"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-stats"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-step-backward"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-step-forward"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-stop"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-subtitles"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-tag"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-tags"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-tasks"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-text-height"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-text-width"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-th"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-th-large"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-th-list"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-thumbs-down"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-thumbs-up"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-time"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-tint"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-tower"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-transfer"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-trash"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-tree-conifer"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-tree-deciduous"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-unchecked"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-upload"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-usd"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-user"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-volume-down"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-volume-off"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-volume-up"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-warning-sign"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-wrench"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-zoom-in"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn btn-default">
                                                                <span class="glyphicon glyphicon-zoom-out"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--button builder ends--> </div>
                        </div>
                    </div>
                </div>
                <!--main content ends--> </section>
            <!-- content --> 
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    
    <script src="{{ asset('assets/js/pages/scripts.min.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/underscore/js/underscore-min.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/backbone/js/backbone-min.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/buttonbuilder.js') }}"  type="text/javascript"></script>
    
@stop
