@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
   Radio And Checkbox
    @parent
    @stop

    {{-- page level styles --}}
    @section('header_styles')
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iCheck/css/all.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iCheck/css/line/line.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap-switch/css/bootstrap-switch.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/switchery/css/switchery.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/awesomeBootstrapCheckbox/awesome-bootstrap-checkbox.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/formelements.css') }}"/>
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>
            Radio and Checkbox
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Forms</a>
            </li>
            <li class="active">
                Radio and checkbox
            </li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <!--main content-->

        <div class="row">
            <div class="col-md-6">
                <!--checkbox picker-->
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="alarm" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="white"></i>
                            iCheck - Checkbox Inputs
                        </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <div class="box-body">
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" class="flat-red" checked/>
                                </label>
                                <label>
                                    <input type="checkbox" class="flat-red"/>
                                </label>
                                <label>
                                    <input type="checkbox" class="flat-red" disabled/>
                                </label>
                                <label>Flat red skin checkbox</label>
                            </div>
                            <!-- checkbox -->
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" class="square" checked/>
                                </label>
                                <label>
                                    <input type="checkbox" class="square"/>
                                </label>
                                <label>
                                    <input type="checkbox" class="square" disabled/>
                                </label>
                                <label>Square skin checkbox</label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" class="minimal-blue" checked/>
                                </label>
                                <label>
                                    <input type="checkbox" class="minimal-blue"/>
                                </label>
                                <label>
                                    <input type="checkbox" class="minimal-blue" disabled/>
                                </label>
                                <label>Minimal skin checkbox</label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" class="polaris" checked/>
                                </label>
                                <label>
                                    <input type="checkbox" class="polaris"/>
                                </label>
                                <label>
                                    <input type="checkbox" class="polaris" disabled/>
                                </label>
                                <label>Polaris skin checkbox</label>
                            </div>

                            <!-- Minimal red style -->
                            <!-- checkbox -->
                            <div class="form-group">
                                <label>Line checkbox</label>
                                <input type="checkbox" class="line mar-t5" checked/>
                                <label>Checkbox1
                                </label>
                                <input type="checkbox" class="line mar-t5"/>
                                <label>Checkbox2
                                </label>
                                <input type="checkbox" class="line mar-t5" disabled/>
                                <label>Disable
                                </label>

                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>
            <!--col-md-6 ends-->
            <div class="col-md-6">
                <!--checkbox picker-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="alarm" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="white"></i>
                            iCheck - Radio Inputs
                        </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <div class="box-body">
                            <!-- radio -->
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="r3" class="flat-red" checked/>
                                </label>
                                <label>
                                    <input type="radio" name="r3" class="flat-red"/>
                                </label>
                                <label>
                                    <input type="radio" name="r3" class="flat-red" disabled/>
                                </label>
                                <label> Flat red skin radio</label>
                            </div>
                            <!-- radio -->
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="r1" class="square" checked/>
                                </label>
                                <label>
                                    <input type="radio" name="r1" class="square"/>
                                </label>
                                <label>
                                    <input type="radio" name="r1" class="square" disabled/>
                                </label>
                                <label>Square skin radio</label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="r4" class="minimal-blue" checked/>
                                </label>
                                <label>
                                    <input type="radio" name="r4" class="minimal-blue"/>
                                </label>
                                <label>
                                    <input type="radio" name="r4" class="minimal-blue" disabled/>
                                </label>
                                <label>Minimal skin radio</label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="r5" class="polaris" checked/>
                                </label>
                                <label>
                                    <input type="radio" name="r5" class="polaris"/>
                                </label>
                                <label>
                                    <input type="radio" name="r5" class="polaris" disabled/>
                                </label>
                                <label>Polaris skin radio</label>
                            </div>

                            <!-- Minimal red style -->
                            <!-- radio -->
                            <div class="form-group">
                                <label>Line radio</label>
                                <input type="radio" name="r2" class="line" checked/>
                                <label>Radio button1
                                </label>
                                <input type="radio" name="r2" class="line"/>
                                <label>Radio button2
                                </label>
                                <input type="radio" name="r2" class="line" disabled/>
                                <label>Disabled
                                </label>

                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!--col-md-6 ends-->
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="magnet" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="white"></i>
                            Bootstrap Switch
                        </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <!--switch -->
                        <div class="form-group">
                            <label>Default Sizes</label>

                            <div class="form-group">
                                <input type="checkbox" name="my-checkbox" data-size="mini" checked>
                                <input type="checkbox" name="my-checkbox" data-size="small" checked>
                                <input type="checkbox" name="my-checkbox" data-size="normal" checked>
                                <input type="checkbox" name="my-checkbox" data-size="large">
                            </div>
                        </div>
                        <!-- /.form group -->
                        <!--switch -->
                        <div class="form-group">
                            <label>Color Switch</label>

                            <div class="form-group">
                                <input type="checkbox" name="my-checkbox" checked data-on-color="primary"
                                       data-off-color="info">
                                <input type="checkbox" name="my-checkbox" checked data-on-color="success"
                                       data-off-color="warning">
                                <input type="checkbox" name="my-checkbox" checked data-on-color="warning"
                                       data-off-color="danger">
                            </div>
                        </div>
                        <!-- /.form group -->
                        <!--switch -->
                        <div class="form-group">
                            <label>Animate</label>

                            <div class="form-group">
                                <input type="checkbox" name="my-checkbox" data-on-color="info"
                                       data-off-color="primary" data-animate>
                                <input type="checkbox" name="my-checkbox" checked data-on-color="danger"
                                       data-off-color="warning" data-animate>
                                <input type="checkbox" name="my-checkbox" checked data-on-color="warning"
                                       data-off-color="success" data-animate>
                            </div>
                        </div>
                        <!-- /.form group -->
                        <!--switch -->
                        <div class="form-group">
                            <label>Disabled / Readonly</label>

                            <div class="form-group">
                                <input type="checkbox" checked disabled name="my-checkbox"/>
                                <input type="checkbox" name="my-checkbox" readonly/>
                            </div>
                        </div>
                        <!-- /.form group -->
                    </div>
                </div>
                <!--select-->
            </div>
            <!--col-md-6 ends-->
            <div class="col-md-6">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="magnet" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="white"></i>
                            Switchery
                        </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <!--switch -->
                        <div class="form-group">
                            <div class="color">
                                <label>Switchery Sizes</label></div>
                            <input type="checkbox" class="js-switch" checked/> Small &nbsp;
                            <input type="checkbox" class="js-switch2" checked/> Medium &nbsp;
                            <input type="checkbox" class="js-switch3" checked/> Big
                        </div>
                        <div class="form-group">
                            <div class="color">
                                <label>Switchery Colors</label></div>
                            <input type="checkbox" class="js-switch4" checked/>
                            <input type="checkbox" class="js-switch5" checked/>
                            <input type="checkbox" class="js-switch6" checked/>
                        </div>
                        <div class="form-group">
                            <div class="color">
                                <label>Multiple switches</label></div>
                            <input type="checkbox" class="js-switch7"/>
                            <input type="checkbox" class="js-switch8" checked/>
                            <input type="checkbox" class="js-switch9"/>
                        </div>
                        <!-- /.form group -->
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <!--checkbox picker-->
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="alarm" data-size="16" data-loop="true" data-c="#fff"
                           data-hc="white"></i>
                       Advanced Check boxes
                    </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                </div>
                <div class="panel-body">
                    <div class="box-body">
                        <div class="form-group">
                            <p><b>Checkboxes with indeterminate state :</b></p>
                            <div class="checkbox checkbox-primary">

                                <input id="indeterminateCheckbox" class="styled" type="checkbox" onclick="changeState(this)">
                                <label></label>
                            </div>
                            <p><b>Checkboxes without label text : </b></p>
                            <div class="checkbox checkbox-primary">
                                <input type="checkbox" class="styled" id="singleCheckbox1" value="option1" aria-label="Single checkbox One">
                                <label></label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input type="checkbox" class="styled styled-primary" id="singleCheckbox2" value="option2"  aria-label="Single checkbox Two">
                                <label></label>
                            </div>
                        </div>


                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
        <!--main content ends-->
    </section>
    <!-- content -->

    @stop

    {{-- page level scripts --}}
    @section('footer_scripts')
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/bootstrap-switch/js/bootstrap-switch.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/switchery/js/switchery.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/card/lib/js/jquery.card.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/js/pages/radio_checkbox.js') }}"></script>

    @stop
