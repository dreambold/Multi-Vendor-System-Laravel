@extends('layouts/default')

{{-- Page title --}}
@section('title')
Advanced Features
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/panel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/features.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/timeline.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/vendors/switchery/css/switchery.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-switch/css/bootstrap-switch.css') }}">
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
                    <a href="#">Advanced Features</a>
                </li>
            </ol>
            <div class="pull-right hidden-xs">
                <i class="livicon icon3" data-name="rocket" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Advanced Features
            </div>
            <div class="pull-right hidden-sm hidden-md hidden-lg">
                <i class="livicon icon3" data-name="rocket" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Adv. Features
            </div>
        </div>
    </div>
@stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <!-- Row Advanced Section Start -->
        <div class="row advanced">
            <!-- Button Section Start -->
            <div class="col-md-6">
                <h3>Buttons</h3>
                <button type="button" class="btn btn-responsive button-alignment btn-default" data-toggle="button">Submit</button>
                <button type="button" class="btn btn-responsive button-alignment btn-success" data-toggle="button">Submit</button>
                <button type="button" class="btn btn-responsive button-alignment btn-primary" data-toggle="button">Submit</button>
                <button type="button" class="btn btn-responsive button-alignment btn-warning" data-toggle="button">Submit</button>
                <button type="button" class="btn btn-responsive button-alignment btn-danger" data-toggle="button">Submit</button>
            </div>
            <!-- //Button Section End -->
            <!-- Switch Section Start -->
            <div class="col-md-6">
                <h3><label>Switches</label></h3>
                <input class="make-switch" data-on-text="YES" data-off-text="NO" type="checkbox" data-size="small">
                <input type="checkbox" class="js-switch2" checked />
            </div>
            <!-- //Switch Section End -->
        </div>
        <!-- //Row Advaced Section End -->
        <!-- Tab panels Section Start -->
        <div class="row">
            <h3 style="margin-left: 10px;">Tab Panels</h3>
            <div class="col-md-6">
                <div class="bs-example">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#home" data-toggle="tab">Home</a>
                        </li>
                        <li>
                            <a href="#profile" data-toggle="tab">Profile</a>
                        </li>
                        <li class="disabled">
                            <a>Disabled</a>
                        </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="home">
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                            </p>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <p>
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="dropdown1">
                            <p>
                                Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="dropdown2">
                            <p>
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="tabbable-panel bs-example">
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs ">
                            <li class="active">
                                <a href="#tab_default_1" data-toggle="tab">
                           Tab1</a>
                            </li>
                            <li>
                                <a href="#tab_default_2" data-toggle="tab">
                            Tab2 </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_default_1">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"  class="text-success" >
                                                    <span class=" glyphicon glyphicon-minus"></span>
                                                    <span>Tab1-1</span></a>
                                                </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <p>In 1972 a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"   class="text-success" >
                                                <span class=" glyphicon glyphicon-plus"></span>
                                                <span >Tab1-2</span></a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>
                                                    Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Here's the story of a man named Brady who was busy with three boys of his own.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_default_2">
                                <div class="panel-group" id="accordion1">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion1" href="#collapsethree"  class="text-success" >
                                                    <span class=" glyphicon glyphicon-minus"></span>
                                                    <span>Tab2-1</span></a>
                                                </h4>
                                        </div>
                                        <div id="collapsethree" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <p>In 1972 a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapsefour"   class="text-success" >
                                                <span class=" glyphicon glyphicon-plus"></span>
                                                <span>Tab2-2</span></a>
                                            </h4>
                                        </div>
                                        <div id="collapsefour" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>
                                                    Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Here's the story of a man named Brady who was busy with three boys of his own.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Tab panels Section End -->
        <!-- Panel Section Start -->
        <div class="row">
            <h3 style="margin-left: 13px;">Panels</h3>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">Blue Header Panel</h4>
                        <span class="pull-right clickable">
                                <i class="glyphicon glyphicon-chevron-up"></i>
                            </span>
                    </div>
                    <div class="panel-body">
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4 class="panel-title">Green Header Panel</h4>
                        <span class="pull-right clickable">
                                <i class="glyphicon glyphicon-chevron-up"></i>
                            </span>
                    </div>
                    <div class="panel-body">
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h4 class="panel-title">Red Header Panel</h4>
                        <span class="pull-right clickable">
                                <i class="glyphicon glyphicon-chevron-up"></i>
                            </span>
                    </div>
                    <div class="panel-body">
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h4 class="panel-title">Orange Header Panel</h4>
                        <span class="pull-right clickable">
                                <i class="glyphicon glyphicon-chevron-up"></i>
                            </span>
                    </div>
                    <div class="panel-body">
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Panels Section End -->
        <!-- Tool Tips Section Start -->
        <div class="row">
            <!-- Tool Tips Start -->
            <div class="col-md-6 tooltips">
                <h3>Tool Tips</h3>
                <p>
                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>

                    <button type="button" class="btn btn-default tooltip_middle" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
                </p>
            </div>
            <!-- Tool tips End -->
            <!-- Popover start -->
            <div class="col-md-6 pop">
                <h3>Popover</h3>
                <button type="button" class="btn btn-warning " title="Popover title" data-container="body" data-toggle="popover" data-placement="right" data-content="Popover on right">Popover on right</button>

                <button type="button" class="btn btn-primary " title="Popover title" data-container="body" data-toggle="popover" data-placement="top" data-content=" Popover on top">Popover on top</button>
                <button type="button" class="btn btn-success " title="Popover title" data-container="body" data-toggle="popover" data-placement="bottom" data-content=" Popover on bottom">Popover bottom</button>
                <button type="button" class="btn btn-default tooltip_middle " title="Popover title" data-container="body" data-toggle="popover" data-placement="left" data-content=" Popover on left">Popover on left</button>
            </div>
            <!-- Popover End -->
        </div>
        <!-- //Tool tip Section End -->
    </div>
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/vendors/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/modal/js/classie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/modal/js/modalEffects.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/switchery/js/switchery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/bootstrap-switch/js/bootstrap-switch.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/advfeatures.js') }}"></script>
    <!--page level js ends-->

@stop
