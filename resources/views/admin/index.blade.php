@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Josh Admin Template
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('assets/vendors/fullcalendar/css/fullcalendar.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/pages/calendar_custom.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" media="all" href="{{ asset('assets/vendors/bower-jvectormap/css/jquery-jvectormap-1.2.2.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/only_dashboard.css') }}"/>
    <meta name="_token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}">

@stop
<link rel="shortcut icon" href="{{asset("favicon.png")}}">
<input type = "hidden" name = "product_now_count" value = "{{$productStatisticsInfo['nowCount']}}"/>
<input type = "hidden" name = "product_week_count" value = "{{$productStatisticsInfo['weekCount']}}"/>
<input type = "hidden" name = "product_month_count" value = "{{$productStatisticsInfo['monthCount']}}"/>

<input type = "hidden" name = "order_now_count" value = "{{$orderStatisticsInfo['nowCount']}}"/>
<input type = "hidden" name = "order_week_count" value = "{{$orderStatisticsInfo['weekCount']}}"/>
<input type = "hidden" name = "order_month_count" value = "{{$orderStatisticsInfo['monthCount']}}"/>

<input type = "hidden" name = "seller_now_count" value = "{{$sellerStatisticsInfo['nowCount']}}"/>
<input type = "hidden" name = "seller_week_count" value = "{{$sellerStatisticsInfo['weekCount']}}"/>
<input type = "hidden" name = "seller_month_count" value = "{{$sellerStatisticsInfo['monthCount']}}"/>

<input type = "hidden" name = "user_now_count" value = "{{$userStatisticsInfo['nowCount']}}"/>
<input type = "hidden" name = "user_week_count" value = "{{$userStatisticsInfo['weekCount']}}"/>
<input type = "hidden" name = "user_month_count" value = "{{$userStatisticsInfo['monthCount']}}"/>

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <h1>Welcome to Dashboard</h1>
        <ol class="breadcrumb">
            <li class="active">
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                    Dashboard
                </a>
            </li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInLeftBig">
                <!-- Trans label pie charts strats here-->
                <div class="lightbluebg no-radius">
                    <div class="panel-body squarebox square_boxs">
                        <div class="col-xs-12 pull-left nopadmar">
                            <div class="row">
                                <div class="square_box col-xs-7 text-right">
                                    <span>Today's product</span>

                                    <div class="number" id="myTargetElement1"></div>
                                </div>
                                <i class="livicon  pull-right" data-name="eye-open" data-l="true" data-c="#fff"
                                   data-hc="#fff" data-s="70"></i>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <small class="stat-label">Last Week</small>
                                    <h4 id="myTargetElement1.1"></h4>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <small class="stat-label">Last Month</small>
                                    <h4 id="myTargetElement1.2"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInUpBig">
                <!-- Trans label pie charts strats here-->
                <div class="redbg no-radius">
                    <div class="panel-body squarebox square_boxs">
                        <div class="col-xs-12 pull-left nopadmar">
                            <div class="row">
                                <div class="square_box col-xs-7 pull-left">
                                    <span>Today's Sales</span>

                                    <div class="number" id="myTargetElement2"></div>
                                </div>
                                <i class="livicon pull-right" data-name="piggybank" data-l="true" data-c="#fff"
                                   data-hc="#fff" data-s="70"></i>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <small class="stat-label">Last Week</small>
                                    <h4 id="myTargetElement2.1"></h4>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <small class="stat-label">Last Month</small>
                                    <h4 id="myTargetElement2.2"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6 margin_10 animated fadeInDownBig">
                <!-- Trans label pie charts strats here-->
                <div class="goldbg no-radius">
                    <div class="panel-body squarebox square_boxs">
                        <div class="col-xs-12 pull-left nopadmar">
                            <div class="row">
                                <div class="square_box col-xs-7 pull-left">
                                    <span>Users</span>

                                    <div class="number" id="myTargetElement3"></div>
                                </div>
                                <i class="livicon pull-right" data-name="archive-add" data-l="true" data-c="#fff"
                                   data-hc="#fff" data-s="70"></i>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <small class="stat-label">Last Week</small>
                                    <h4 id="myTargetElement3.1"></h4>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <small class="stat-label">Last Month</small>
                                    <h4 id="myTargetElement3.2"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
                <!-- Trans label pie charts strats here-->
                <div class="palebluecolorbg no-radius">
                    <div class="panel-body squarebox square_boxs">
                        <div class="col-xs-12 pull-left nopadmar">
                            <div class="row">
                                <div class="square_box col-xs-7 pull-left">
                                    <span>Sellers</span>

                                    <div class="number" id="myTargetElement4"></div>
                                </div>
                                <i class="livicon pull-right" data-name="users" data-l="true" data-c="#fff"
                                   data-hc="#fff" data-s="70"></i>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <small class="stat-label">Last Week</small>
                                    <h4 id="myTargetElement4.1"></h4>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <small class="stat-label">Last Month</small>
                                    <h4 id="myTargetElement4.2"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/row-->
        <div class="row ">
            <div class="col-md-8 col-sm-6">
                <div class="panel panel-border">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="dashboard" data-size="20" data-loop="true" data-c="#F89A14"
                               data-hc="#F89A14"></i>
                           Order Status
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div id="line-chart" style="height:350px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel blue_gradiant_bg">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="white"></i>
                            Time Stats
                            <small class="white-text">- Days Report</small>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="sparkline-chart">
                                    <div class="number" id="sparkline_bar"></div>
                                    <h3 class="title">Products</h3>
                                </div>
                            </div>
                            <div class="margin-bottom-10 visible-sm"></div>
                            <div class="margin-bottom-10 visible-sm"></div>
                            <div class="col-sm-6">
                                <div class="sparkline-chart">
                                    <div class="number" id="sparkline_line"></div>
                                    <h3 class="title">Orders</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BEGIN Percentage monitor -->
                <div class="panel green_gradiante_bg ">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="spinner-six" data-size="16" data-loop="false" data-c="#fff"
                               data-hc="white"></i>
                            Cancel vs Complete
                        </h3>
                    </div>
                    <div class="panel-body nopadmar">
                        <div class="row">
                            <div class="col-sm-6 text-center">
                                <h4 class="small-heading">Cancel</h4>
                            <span class="chart cir chart-widget-pie widget-easy-pie-1" data-percent="{{$orderCancelComplete['cancel']}}"><span
                                        class="percent">{{$orderCancelComplete['cancel']}}</span>
                            </span>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-6 text-center">
                                <h4 class="small-heading">Complete</h4>
                            <span class="chart cir chart-widget-pie widget-easy-pie-3" data-percent="{{$orderCancelComplete['complete']}}">
                                <span class="percent">{{$orderCancelComplete['complete']}}</span>
                            </span>
                            </div>
                            <!-- /.col-sm-4 -->
                        </div>

                        <!-- /.row -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- END BEGIN Percentage monitor-->
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="panel panel-success panel-border">
                    <div class="panel-heading  border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Recent Orders
                        </h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-scrollable">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th class = "text-left">#</th>
                                    <th class = "text-left">Order No</th>
                                    <th class = "text-left">Total Price</th>
                                    <th class = "text-left">Product Count</th>
                                    <th class = "text-left">Username</th>
                                    <th class = "text-left">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($recentOrders as $key => $item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item['order_number']}}</td>
                                    <td>{{$item['total_price']}}</td>
                                    <td>{{$item['quantity']}}</td>
                                    <td>{{$item['buyer']['full_name']}}</td>
                                    <td>

                                        <span class="label label-sm {{getOrderStateClass($item['state'])}}">{{getOrderState($item['state'])}}</span>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="panel panel-info panel-border">
                    <div class="panel-heading  border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Recent Sellers
                        </h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-scrollable">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th class = "text-left">#</th>
                                    <th class = "text-left">First Name</th>
                                    <th class = "text-left">Last Name</th>
                                    <th class = "text-left">Bio</th>
                                    <th class = "text-left">Register Time</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($recentSellers as $key => $item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item['user']['first_name']}}</td>
                                    <td>{{$item['user']['last_name']}}</td>
                                    <td>{{$item['user']['bio']}}</td>
                                    <td>
                                        {{$item['user']['created_at']}}
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="panel panel-warning panel-border">
                    <div class="panel-heading  border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Recent Users
                        </h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-scrollable">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th class = "text-left">#</th>
                                    <th class = "text-left">First Name</th>
                                    <th class = "text-left">Last Name</th>
                                    <th class = "text-left">Email</th>
                                    <th class = "text-left">Register Time</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($recentUsers as $key => $item)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$item['user']['first_name']}}</td>
                                        <td>{{$item['user']['last_name']}}</td>
                                        <td>{{$item['user']['email']}}</td>
                                        <td>
                                            {{$item['user']['created_at']}}
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/vendors/moment/js/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>

    <!-- EASY PIE CHART JS -->
    <script src="{{ asset('assets/vendors/bower-jquery-easyPieChart/js/easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bower-jquery-easyPieChart/js/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bower-jquery-easyPieChart/js/jquery.easingpie.js') }}"></script>
    <!--for calendar-->
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/fullcalendar/js/fullcalendar.min.js') }}" type="text/javascript"></script>
    <!--   Realtime Server Load  -->
    <script src="{{ asset('assets/vendors/flotchart/js/jquery.flot.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/flotchart/js/jquery.flot.resize.js') }}" type="text/javascript"></script>
    <!--Sparkline Chart-->
    <script src="{{ asset('assets/vendors/sparklinecharts/jquery.sparkline.js') }}"></script>
    <!-- Back to Top-->
    <script type="text/javascript" src="{{ asset('assets/vendors/countUp_js/js/countUp.js') }}"></script>
    <!--   maps -->
    <script src="{{ asset('assets/vendors/bower-jvectormap/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bower-jvectormap/js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!--  todolist-->
    <script src="{{ asset('assets/js/pages/todolist.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}" type="text/javascript"></script>

    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/flotchart/js/jquery.flot.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/flotchart/js/jquery.flot.stack.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/flotchart/js/jquery.flot.crosshair.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/flotchart/js/jquery.flot.time.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/flotchart/js/jquery.flot.selection.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/flotchart/js/jquery.flot.symbol.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/flotchart/js/jquery.flot.resize.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/flotchart/js/jquery.flot.categories.js') }}"  ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/splinecharts/jquery.flot.spline.js') }}"  ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/flot_tooltip/js/jquery.flot.tooltip.js') }}"  ></script>

@stop