@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Form Elements
    @parent
    @stop

    {{-- page level styles --}}
    @section('header_styles')
    <link href="{{ asset('assets/css/pages/formelements.css') }}" rel="stylesheet" />

@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>
            Advanced Form Elements
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
                Form Elements
            </li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <!--main content-->
        <div class="row">
            <div class="col-md-6">
                <!-- credit card section -->
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="credit-card" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Credit Card
                        </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <div class="box-body">
                            <div class="card-wrapper"></div>
                            <br />
                            <div id="card">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Card Number</label>
                                        <div class="col-md-9">
                                            <input name="number" required type="text" placeholder="" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Name on Card</label>
                                        <div class="col-md-9">
                                            <input name="name" type="text" class="form-control" maxlength="40" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">CVV</label>
                                        <div class="col-md-9">
                                            <input name="cvc" required type="text" placeholder="" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Expiry Date</label>
                                        <div class="col-md-9">
                                            <input name="expiry" placeholder="" class="form-control" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="lab" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i> Auto Grow
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body auto_block">
                        <div class="form-group">
                            <label>
                                Auto Grow Basic
                            </label>
                            <div class="input-group">
                                <textarea placeholder="Write something here..." data-autogrow class="form-control resize_vertical autogrow_area" rows="3" cols="80"></textarea>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label>
                                Heavy padding
                            </label>
                            <div class="input-group">
                                <textarea placeholder="Write something here..." class="form-control pd-45 resize_vertical autogrow_area" rows="5" cols="80"></textarea>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label>
                                Medium padding with border
                            </label>
                            <div class="input-group">
                                <textarea placeholder="Write something here..." class="form-control scroll pd resize_vertical autogrow_area" rows="5" cols="80"></textarea>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label>
                                Initially hidden
                            </label>
                            <div class="input-group">
                                <div class="span4">
                                    <textarea placeholder="Write something here..." class="form-control display-no autogrow_area resize_vertical" data-autogrow rows="3" cols="80"></textarea>
                                    <a onclick="$(this).closest('.span4').find('textarea').toggle(); $(this).text(this.text=='Hide'?'Show':'Hide');return false;" href="#">Show</a>
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                </div>
                <!-- credit card section ends -->
            </div>
            <div class="col-md-6">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="gear" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Bootstrap Input MaxLength
                        </h3>
                    </div>
                    <div class="panel-body">
                        <!--max length starts-->
                        <div class="form-group">
                            <label for="defaultconfig" class="control-label">
                                Default MaxLength
                            </label>
                            <input maxlength="25" name="defaultconfig" id="defaultconfig" type="text" class="form-control" placeholder="Placeholder text">
                        </div>
                        <div class="form-group">
                            <label for="thresholdconfig" class="control-label">
                                Threshold value
                            </label>
                            <input type="text" maxlength="25" name="thresholdconfig" class="form-control" id="thresholdconfig" />
                        </div>
                        <div class="form-group">
                            <label for="moreoptions" class="control-label">Options</label>
                            <input type="text" class="form-control" maxlength="25" name="moreoptions" id="moreoptions" />
                        </div>
                        <div class="form-group">
                            <label for="alloptions" class="control-label">
                                All the options
                            </label>
                            <input type="text" class="form-control" maxlength="25" name="alloptions" id="alloptions" />
                        </div>
                        <div class="form-group">
                            <label for="textarea" class="control-label">Text Area</label>
                            <textarea id="textarea" class="form-control resize_vertical " maxlength="225" rows="2" placeholder="This textarea has a limit of 225 chars."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="placement" class="control-label">Position</label>
                            <input type="text" class="form-control" maxlength="25" name="placement" id="placement" />
                        </div>
                        <!--min length ends-->
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

    <!-- InputMask -->
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" ></script>
    <!-- date-range-picker -->
    <script src="{{ asset('assets/js/pages/autogrow.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/card/lib/js/jquery.card.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/formelements.js') }}"  type="text/javascript"></script>
@stop
