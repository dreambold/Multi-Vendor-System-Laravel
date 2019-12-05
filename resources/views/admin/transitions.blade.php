@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Transitions
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendors/hover/css/hover-min.css') }}" />
    <link href="{{ asset('assets/css/pages/transitions.css') }}" rel="stylesheet"/>
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Transitions</h1>
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
                    <li class="active">Transitions</li>
                </ol>
            </section>
            <!--section ends-->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="lab" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Flat Buttons
                    </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                </div>
                <div class="panel-body">
                    <div class="flatbuttons">
                        <div class="text-left">
                            2D Transitions
                            <br/>
                            <ul>
                                <li>
                                    <a href="#" class="btn btn-raised btn-default hvr-hang">Hang</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-raised btn-primary hvr-skew">Skew</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-raised btn-success hvr-wobble-horizontal">Horizontal</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-raised btn-info hvr-wobble-vertical">Vertical</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-raised btn-warning hvr-bounce-in">Bounce In</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-raised btn-danger hvr-rotate">rotate</a>
                                </li>
                            </ul>
                        </div>
                        <div class="text-left">
                            Background Transitions
                            <br/>
                            <ul>
                                <li>
                                    <a href="#" class="btn btn-raised btn-info hvr-sweep-to-right">Sweep right</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-raised btn-info hvr-sweep-to-left">Sweep left</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-raised btn-info hvr-radial-out">Radial out</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-raised btn-info hvr-radial-in">Radial in</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-raised btn-info hvr-shutter-in-horizontal">Shutter In</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-raised btn-info hvr-shutter-out-horizontal">Shutter Out</a>
                                </li>
                            </ul>
                        </div>
                        <div class="text-left">
                            Speech Bubbles
                            <br/>
                            <ul>
                                <li>
                                    <a href="#" class="btn btn-raised btn-default hvr-bubble-top">Bubble top</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-raised btn-default hvr-bubble-right">Bubble right</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-raised btn-default hvr-bubble-float-top">Float top</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-raised btn-default  hvr-bubble-float-bottom">Float bottom</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-raised btn-default hvr-bubble-float-right">Float right</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-raised btn-default  hvr-bubble-float-left">Float left</a>
                                </li>
                            </ul>
                        </div>
                        <div class="text-left">
                            Curls
                            <br/>
                            <ul>
                                <li>
                                    <a href="#" class="btn btn-raised btn-default hvr-curl-top-left">Top left</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-raised btn-info hvr-curl-top-right">Top right</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-raised btn-success hvr-curl-bottom-left">bottom left</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-raised btn-primary hvr-curl-bottom-right">bottom right</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--main content-->
    <div class="row animated fadeInDown">
        <!--row starts-->
        <div class="col-md-6">
            <!--md starts-->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="stopwatch" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Attention Seekers
                    </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                </div>
                <div class="panel-body text-center">
                    <!--content starts-->
                    <div class="wrap">
                                    <span id="animationSandbox1" style="display: block;" class="">
                                        <span class="site__title mega">JOSH</span>
                                    </span>
                    </div>
                    <div class="wrap">
                        <p>
                            <select id="s1" class="js--animations form-control" onchange="testAnim(this.value,1);">
                                <optgroup label="Attention Seekers">
                                    <option value="bounce">bounce</option>
                                    <option value="flash">flash</option>
                                    <option value="pulse">pulse</option>
                                    <option value="rubberBand">rubberBand</option>
                                    <option value="shake">shake</option>
                                    <option value="swing">swing</option>
                                    <option value="tada">tada</option>
                                    <option value="wobble">wobble</option>
                                </optgroup>
                            </select>
                            <button class="butt js--triggerAnimation" onclick="testAnim1(1);">Animate it</button>
                        </p>
                    </div>
                    <!--content ends-->
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="shield" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Bouncing Entrances
                    </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                </div>
                <div class="panel-body text-center">
                    <!--content starts-->
                    <div class="wrap">
                                    <span id="animationSandbox2" style="display: block" class="">
                                        <span class="site__title mega">JOSH</span>
                                    </span>
                    </div>
                    <div class="wrap">
                        <p>
                            <select id="s2" class="js--animations form-control" onchange="testAnim(this.value,2);">
                                <optgroup label="Bouncing Entrances">
                                    <option value="bounceIn">bounceIn</option>
                                    <option value="bounceInDown">bounceInDown</option>
                                    <option value="bounceInLeft">bounceInLeft</option>
                                    <option value="bounceInRight">bounceInRight</option>
                                    <option value="bounceInUp">bounceInUp</option>
                                </optgroup>
                            </select>
                            <button class="butt js--triggerAnimation" onclick="testAnim1(2);">Animate it</button>
                        </p>
                    </div>
                    <!--content ends-->
                </div>
            </div>
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="quote-left" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Bouncing Exits
                    </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                </div>
                <div class="panel-body text-center">
                    <!--content starts-->
                    <div class="wrap">
                                    <span id="animationSandbox3" style="display: block;" class="">
                                        <span class="site__title mega">JOSH</span>
                                    </span>
                    </div>
                    <div class="wrap">
                        <p>
                            <select id="s3" class="js--animations form-control" onchange="testAnim(this.value,3);">
                                <optgroup label="Bouncing Exits">
                                    <option value="bounceOut">bounceOut</option>
                                    <option value="bounceOutDown">bounceOutDown</option>
                                    <option value="bounceOutLeft">bounceOutLeft</option>
                                    <option value="bounceOutRight">bounceOutRight</option>
                                    <option value="bounceOutUp">bounceOutUp</option>
                                </optgroup>
                            </select>
                            <button class="butt js--triggerAnimation" onclick="testAnim1(3);">Animate it</button>
                        </p>
                    </div>
                    <!--content ends-->
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="qrcode" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Fading Entrances
                    </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                </div>
                <div class="panel-body text-center">
                    <!--content starts-->
                    <div class="wrap">
                                    <span id="animationSandbox4" style="display: block;" class="">
                                        <span class="site__title mega">JOSH</span>
                                    </span>
                    </div>
                    <div class="wrap">
                        <p>
                            <select id="s4" class="js--animations form-control" onchange="testAnim(this.value,4);">
                                <optgroup label="Fading Entrances">
                                    <option value="fadeIn">fadeIn</option>
                                    <option value="fadeInDown">fadeInDown</option>
                                    <option value="fadeInDownBig">fadeInDownBig</option>
                                    <option value="fadeInLeft">fadeInLeft</option>
                                    <option value="fadeInLeftBig">fadeInLeftBig</option>
                                    <option value="fadeInRight">fadeInRight</option>
                                    <option value="fadeInRightBig">fadeInRightBig</option>
                                    <option value="fadeInUp">fadeInUp</option>
                                    <option value="fadeInUpBig">fadeInUpBig</option>
                                </optgroup>
                            </select>
                            <button class="butt js--triggerAnimation" onclick="testAnim1(4);">Animate it</button>
                        </p>
                    </div>
                    <!--content ends-->
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="shuffle" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Fading Exits
                    </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                </div>
                <div class="panel-body text-center">
                    <!--content starts-->
                    <div class="wrap">
                                    <span id="animationSandbox5" style="display: block;" class="">
                                        <span class="site__title mega">JOSH</span>
                                    </span>
                    </div>
                    <div class="wrap">
                        <p>
                            <select id="s5" class=" js--animations form-control" onchange="testAnim(this.value,5);">
                                <optgroup label="Fading Exits">
                                    <option value="fadeOut">fadeOut</option>
                                    <option value="fadeOutDown">fadeOutDown</option>
                                    <option value="fadeOutDownBig">fadeOutDownBig</option>
                                    <option value="fadeOutLeft">fadeOutLeft</option>
                                    <option value="fadeOutLeftBig">fadeOutLeftBig</option>
                                    <option value="fadeOutRight">fadeOutRight</option>
                                    <option value="fadeOutRightBig">fadeOutRightBig</option>
                                    <option value="fadeOutUp">fadeOutUp</option>
                                    <option value="fadeOutUpBig">fadeOutUpBig</option>
                                </optgroup>
                            </select>
                            <button class="butt js--triggerAnimation" onclick="testAnim1(5);">Animate it</button>
                        </p>
                    </div>
                    <!--content ends-->
                </div>
            </div>
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="sitemap" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Flippers
                    </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                </div>
                <div class="panel-body text-center">
                    <!--content starts-->
                    <div class="wrap">
                                    <span id="animationSandbox6" style="display: block;" class="">
                                        <span class="site__title mega">JOSH</span>
                                    </span>
                    </div>
                    <div class="wrap">
                        <p>
                            <select id="s6" class=" js--animations form-control" onchange="testAnim(this.value,6);">
                                <optgroup label="Flippers">
                                    <option value="flip">flip</option>
                                    <option value="flipInX">flipInX</option>
                                    <option value="flipInY">flipInY</option>
                                    <option value="flipOutX">flipOutX</option>
                                    <option value="flipOutY">flipOutY</option>
                                </optgroup>
                            </select>
                            <button class="butt js--triggerAnimation" onclick="testAnim1(6);">Animate it</button>
                        </p>
                    </div>
                    <!--content ends-->
                </div>
            </div>
        </div>
        <!--md ends-->
        <div class="col-md-6">
            <!--md starts-->
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="tag" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Lightspeed
                    </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                </div>
                <div class="panel-body text-center">
                    <!--content starts-->
                    <div class="wrap">
                                    <span id="animationSandbox7" style="display: block;" class="">
                                        <span class="site__title mega">JOSH</span>
                                    </span>
                    </div>
                    <div class="wrap">
                        <p>
                            <select id="s7" class=" js--animations form-control" onchange="testAnim(this.value,7);">
                                <optgroup label="Lightspeed">
                                    <option value="lightSpeedIn">lightSpeedIn</option>
                                    <option value="lightSpeedOut">lightSpeedOut</option>
                                </optgroup>
                            </select>
                            <button class="butt js--triggerAnimation" onclick="testAnim1(7);">Animate it</button>
                        </p>
                    </div>
                    <!--content ends-->
                </div>
            </div>
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="umbrella" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Rotating Entrances
                    </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                </div>
                <div class="panel-body text-center">
                    <!--content starts-->
                    <div class="wrap">
                                    <span id="animationSandbox8" style="display: block;" class="">
                                        <span class="site__title mega">JOSH</span>
                                    </span>
                    </div>
                    <div class="wrap">
                        <p>
                            <select id="s8" class=" js--animations form-control" onchange="testAnim(this.value,8);">
                                <optgroup label="Rotating Entrances">
                                    <option value="rotateIn">rotateIn</option>
                                    <option value="rotateInDownLeft">rotateInDownLeft</option>
                                    <option value="rotateInDownRight">rotateInDownRight</option>
                                    <option value="rotateInUpLeft">rotateInUpLeft</option>
                                    <option value="rotateInUpRight">rotateInUpRight</option>
                                </optgroup>
                            </select>
                            <button class="butt js--triggerAnimation" onclick="testAnim1(8);">Animate it</button>
                        </p>
                    </div>
                    <!--content ends-->
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="warning" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Rotate Exits
                    </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                </div>
                <div class="panel-body text-center">
                    <!--content starts-->
                    <div class="wrap">
                                    <span id="animationSandbox9" style="display: block;" class="">
                                        <span class="site__title mega">JOSH</span>
                                    </span>
                    </div>
                    <div class="wrap">
                        <p>
                            <select id="s9" class=" js--animations form-control" onchange="testAnim(this.value,9);">
                                <optgroup label="Rotating Exits">
                                    <option value="rotateOut">rotateOut</option>
                                    <option value="rotateOutDownLeft">rotateOutDownLeft</option>
                                    <option value="rotateOutDownRight">rotateOutDownRight</option>
                                    <option value="rotateOutUpLeft">rotateOutUpLeft</option>
                                    <option value="rotateOutUpRight">rotateOutUpRight</option>
                                </optgroup>
                            </select>
                            <button class="butt js--triggerAnimation" onclick="testAnim1(9);">Animate it</button>
                        </p>
                    </div>
                    <!--content ends-->
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="lab" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Sliders
                    </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                </div>
                <div class="panel-body text-center">
                    <!--content starts-->
                    <div class="wrap">
                                    <span id="animationSandbox10" style="display: block;" class="">
                                        <span class="site__title mega">JOSH</span>
                                    </span>
                    </div>
                    <div class="wrap">
                        <p>
                            <select id="s10" class=" js--animations form-control" onchange="testAnim(this.value,10);">
                                <optgroup label="Sliders">
                                    <option value="slideInDown">slideInDown</option>
                                    <option value="slideInLeft">slideInLeft</option>
                                    <option value="slideInRight">slideInRight</option>
                                    <option value="slideOutLeft">slideOutLeft</option>
                                    <option value="slideOutRight">slideOutRight</option>
                                    <option value="slideOutUp">slideOutUp</option>
                                </optgroup>
                            </select>
                            <button class="butt js--triggerAnimation" onclick="testAnim1(10);">Animate it</button>
                        </p>
                    </div>
                    <!--content ends-->
                </div>
            </div>
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="gear" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Specials
                    </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                </div>
                <div class="panel-body text-center">
                    <!--content starts-->
                    <div class="wrap">
                                    <span id="animationSandbox11" style="display: block;" class="">
                                        <span class="site__title mega">JOSH</span>
                                    </span>
                    </div>
                    <div class="wrap">
                        <p>
                            <select id="s11" class=" js--animations form-control" onchange="testAnim(this.value,11);">
                                <optgroup label="Specials">
                                    <option value="hinge">hinge</option>
                                    <option value="rollIn">rollIn</option>
                                    <option value="rollOut">rollOut</option>
                                </optgroup>
                            </select>
                            <button class="butt js--triggerAnimation" onclick="testAnim1(11);">Animate it</button>
                        </p>
                    </div>
                    <!--content ends-->
                </div>
            </div>
        </div>
        <!--md ends-->
    </div>
    <!--row ends-->
    <!--main content ends-->
</section>
<!-- content -->
        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    
    <script src="{{ asset('assets//vendors/select2/js/select2.js') }}" ></script>
    <!--panel js-->
    <script src="{{ asset('assets/js/pages/transitions.js') }}" type="text/javascript"></script>
    
@stop
