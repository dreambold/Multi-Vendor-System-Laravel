@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Buttons
@parent
@stop

{{-- page level styles --}}
@section('header_styles')    
    
    <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/pages/buttons.css') }}" />
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Buttons</h1>
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
                    <li class="active">Buttons</li>
                </ol>
            </section>
            <!--section ends-->
<section class="content">
    <!--main content-->
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Basic Buttons
                    </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                </div>
                <div class="panel-body">
                    <button type="button" class="btn btn-responsive button-alignment btn-primary" style="margin-bottom:7px;" data-toggle="button">Button 1</button>
                    <button type="button" class="btn btn-responsive button-alignment btn-success" style="margin-bottom:7px;" data-toggle="button">Button 2</button>
                    <button type="button" class="btn btn-responsive button-alignment btn-info" style="margin-bottom:7px;" data-toggle="button">Button 3</button>
                    <button type="button" class="btn btn-responsive button-alignment btn-warning" style="margin-bottom:7px;" data-toggle="button">Button 4</button>
                    <button type="button" class="btn btn-responsive button-alignment btn-danger" style="margin-bottom:7px;" data-toggle="button">Button 5</button>
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="check" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Custom buttons
                    </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                </div>
                <div class="panel-body">
                    <div class="tags">
                        <a href="#" class="success">CSS</a>
                        <a href="#" class="primary">Java Script</a>
                        <a href="#" class="info">jQuery</a>
                        <a href="#" class="danger">HTML5</a>
                        <a href="#" class="warning">CSS3</a>
                        <a href="#" class="success">WORDPRESS</a>
                        <a href="#" class="danger">ORACLE</a>
                        <a href="#" class="info">ASP.Net</a>
                        <a href="#" class="primary">C#</a>
                        <a href="#" class="warning">JOOMLA</a>
                        <a href="#" class="primary">JAVA</a>
                        <a href="#" class="success">Bootstrap</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="sky-dish" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Wells
                    </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="well well-sm">Look, I'm in a small well!</div>
                        <div class="well">Look, I'm in a well!</div>
                        <div class="well well-lg">Look, I'm in a large well!</div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="sandglass" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Icon picker
                    </h3>
                                <span class="pull-right clickable">
                                <i class="glyphicon glyphicon-chevron-up"></i>
                            </span>
                </div>
                <div class="panel-body">
                    <div id="wraper1">
                        <div class="row">
                            <form method="post">
                                <input type="text" name="someName" class="icon-picker" placeholder="Click on icon and then search........ " />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="eye-open" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Button Size
                    </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                </div>
                <div class="panel-body">
                    <div class="btn-group btn-group-lg">
                        <button type="button" class="btn btn-primary btn_sizes">Button 1</button>
                        <button type="button" class="btn btn-success btn_sizes">Button 2</button>
                        <button type="button" class="btn btn-danger btn_sizes">Button 3</button>
                        <button type="button" class="btn btn-warning btn_sizes">Button 4</button>
                    </div>
                    <br/>
                    <br/>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn_sizes">Button 1</button>
                        <button type="button" class="btn btn-success btn_sizes">Button 2</button>
                        <button type="button" class="btn btn-danger btn_sizes">Button 3</button>
                        <button type="button" class="btn btn-warning btn_sizes">Button 4</button>
                    </div>
                    <br/>
                    <br/>
                    <div class="btn-group btn-group-sm">
                        <button type="button" class="btn btn-primary btn_sizes">Button 1</button>
                        <button type="button" class="btn btn-success btn_sizes">Button 2</button>
                        <button type="button" class="btn btn-danger btn_sizes">Button 3</button>
                        <button type="button" class="btn btn-warning btn_sizes">Button 4</button>
                    </div>
                    <br/>
                    <br/>
                    <div class="btn-group btn-group-xs">
                        <button type="button" class="btn btn-primary btn_sizes">Button 1</button>
                        <button type="button" class="btn btn-success btn_sizes">Button 2</button>
                        <button type="button" class="btn btn-danger btn_sizes">Button 3</button>
                        <button type="button" class="btn btn-warning btn_sizes">Button 4</button>
                    </div>
                </div>
            </div>
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="notebook" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Breadcrumbs
                    </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                </div>
                <div class="panel-body">
                    <div class="bs-example">
                        <ol class="breadcrumb">
                            <li class="next">
                                <a href="#">
                                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Home
                                </a>
                            </li>
                            <li class="next">
                                <a href="#">UI Features</a>
                            </li>
                            <li>Pickers</li>
                        </ol>
                        <ul class="breadcrumb">
                            <li class="next1">
                                <a href="#">
                                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
                                </a>
                            </li>
                            <li>Tables</li>
                        </ul>
                        <ul class="breadcrumb" style="margin-bottom: 5px;">
                            <li class="next2">
                                <a href="#">
                                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
                                </a>
                            </li>
                            <li class="next2">
                                <a href="#">Tables</a>
                            </li>
                            <li>Data Tables</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="trophy" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Poll
                    </h3>
                                <span class="pull-right clickable">
                                <i class="glyphicon glyphicon-chevron-up"></i>
                            </span>
                </div>
                <div class="panel-body">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="hand-right" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                Who will win this year Football?
                            </h3>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="custom-checkbox" value="">&nbsp; Brazil</label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="custom-checkbox" value="">&nbsp; Netherlands</label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="custom-checkbox" value="">&nbsp; France</label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="custom-checkbox" value="">&nbsp; Germany</label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="custom-checkbox" value="">&nbsp; Others</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-footer text-center">
                            <button type="button" class="btn btn-primary btn-block btn-sm">Vote</button>
                            <a href="#" class="small">View Result</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- content -->
        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('assets/js/pages/custom_buttons.js') }}"></script>
    <!--icon picker-->
@stop
