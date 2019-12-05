@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Simple Tables
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!-- page level css -->
    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Simple Tables</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">DataTables</a>
                    </li>
                    <li class="active">Simple Tables</li>
                </ol>
            </section>
            <!--section ends-->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet box primary">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Simple Table
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Airi Satou</td>
                                <td>Kelly</td>
                                <td>Satou124</td>
                                <td>
                                    <span class="label label-sm label-success">Approved</span>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Angelica</td>
                                <td>Ramos</td>
                                <td>Angelica343</td>
                                <td>
                                    <span class="label label-sm label-info">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ashton</td>
                                <td>Cox</td>
                                <td>Cox111</td>
                                <td>
                                    <span class="label label-sm label-warning">Suspended</span>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Bradley</td>
                                <td>Greer</td>
                                <td>Bradley</td>
                                <td>
                                    <span class="label label-sm label-danger">Blocked</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
        <div class="col-md-6">
            <!-- BEGIN BORDERED TABLE PORTLET-->
            <div class="portlet box danger">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="livicon" data-name="wifi" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Bordered Table
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Airi Satou</td>
                                <td>Kelly</td>
                                <td>Satou124</td>
                                <td>
                                    <span class="label label-sm label-success">Approved</span>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Angelica</td>
                                <td>Ramos</td>
                                <td>Angelica343</td>
                                <td>
                                    <span class="label label-sm label-info">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ashton</td>
                                <td>Cox</td>
                                <td>Cox111</td>
                                <td>
                                    <span class="label label-sm label-warning">Suspended</span>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Bradley</td>
                                <td>Greer</td>
                                <td>Bradley</td>
                                <td>
                                    <span class="label label-sm label-danger">Blocked</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END BORDERED TABLE PORTLET-->
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet box info">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="livicon" data-name="timer" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Striped Rows Table
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Airi Satou</td>
                                <td>Kelly</td>
                                <td>Satou124</td>
                                <td>
                                    <span class="label label-sm label-success">Approved</span>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Angelica</td>
                                <td>Ramos</td>
                                <td>Angelica343</td>
                                <td>
                                    <span class="label label-sm label-info">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ashton</td>
                                <td>Cox</td>
                                <td>Cox111</td>
                                <td>
                                    <span class="label label-sm label-warning">Suspended</span>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Bradley</td>
                                <td>Greer</td>
                                <td>Bradley</td>
                                <td>
                                    <span class="label label-sm label-danger">Blocked</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
        <div class="col-md-6">
            <!-- BEGIN CONDENSED TABLE PORTLET-->
            <div class="portlet box warning">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="livicon" data-name="film" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Condensed Table
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-condensed table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Airi Satou</td>
                                <td>Kelly</td>
                                <td>Satou124</td>
                                <td>
                                    <span class="label label-sm label-success">Approved</span>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Angelica</td>
                                <td>Ramos</td>
                                <td>Angelica343</td>
                                <td>
                                    <span class="label label-sm label-info">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ashton</td>
                                <td>Cox</td>
                                <td>Cox111</td>
                                <td>
                                    <span class="label label-sm label-warning">Suspended</span>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Bradley</td>
                                <td>Greer</td>
                                <td>Bradley</td>
                                <td>
                                    <span class="label label-sm label-danger">Blocked</span>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Bradley</td>
                                <td>Greer</td>
                                <td>Bradley</td>
                                <td>
                                    <span class="label label-sm label-danger">Blocked</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END CONDENSED TABLE PORTLET-->
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet box danger">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="livicon" data-name="lab" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Color Rows
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Class Name</th>
                                <th>Column</th>
                                <th>Column</th>
                                <th>Column</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="active">
                                <td>1</td>
                                <td>active</td>
                                <td>Column heading</td>
                                <td>Column heading</td>
                                <td>Column heading</td>
                            </tr>
                            <tr class="success">
                                <td>2</td>
                                <td>success</td>
                                <td>Column heading</td>
                                <td>Column heading</td>
                                <td>Column heading</td>
                            </tr>
                            <tr class="warning">
                                <td>3</td>
                                <td>warning</td>
                                <td>Column heading</td>
                                <td>Column heading</td>
                                <td>Column heading</td>
                            </tr>
                            <tr class="danger">
                                <td>4</td>
                                <td>danger</td>
                                <td>Column heading</td>
                                <td>Column heading</td>
                                <td>Column heading</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
        <div class="col-md-6">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet box default">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="livicon" data-name="pen" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Advanced Table
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-advance table-hover">
                            <thead>
                            <tr>
                                <th>
                                    <i class="livicon" data-name="briefcase" data-size="16" data-c="#666666" data-hc="#666666" data-loop="true"></i>

                                    From
                                </th>
                                <th>
                                    <i class="livicon" data-name="doc-portrait" data-size="16" data-c="#666666" data-hc="#666666" data-loop="true"></i>
                                    Descrition
                                </th>
                                <th>
                                    <i class="fa fa-bookAiri Satou"></i> Total
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="#">Pixel Ltd</a>
                                </td>
                                <td>Server Purchase</td>
                                <td>
                                    52560.10$
                                    <span class="label label-sm label-success label-mini">Paid</span>
                                </td>
                                <td>
                                    <a href="#" class="btn default btn-xs green-stripe">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">Smart House</a>
                                </td>
                                <td>Furniture Purchase</td>
                                <td>
                                    5760.00$
                                    <span class="label label-sm label-warning label-mini">Pending</span>
                                </td>
                                <td>
                                    <a href="#" class="btn default btn-xs yellow-stripe">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">FoodMaster Ltd</a>
                                </td>
                                <td>Annual Expenses</td>
                                <td>
                                    12400.00$
                                    <span class="label label-sm label-primary label-mini">Paid</span>
                                </td>
                                <td>
                                    <a href="#" class="btn default btn-xs blue-stripe">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">WaterPure Ltd</a>
                                </td>
                                <td>Payment 2013</td>
                                <td>
                                    610.50$
                                    <span class="label label-sm label-danger label-mini">Overdue</span>
                                </td>
                                <td>
                                    <a href="#" class="btn default btn-xs red-stripe">View</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet box primary">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="livicon" data-name="screenshot" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Columns Tables
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Column</th>
                                <th>Column</th>
                                <th>Column</th>
                                <th>Column</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td class="active">active</td>
                                <td class="success">success</td>
                                <td class="warning">warning</td>
                                <td class="danger">danger</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="active">active</td>
                                <td class="success">success</td>
                                <td class="warning">warning</td>
                                <td class="danger">danger</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="active">active</td>
                                <td class="success">success</td>
                                <td class="warning">warning</td>
                                <td class="danger">danger</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="active">active</td>
                                <td class="success">success</td>
                                <td class="warning">warning</td>
                                <td class="danger">danger</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
        <div class="col-md-6">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet box danger">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="livicon" data-name="pencil" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Bootstrap Table
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-striped table-bordered table-advance table-hover">
                            <thead>
                            <tr>
                                <th>
                                    <i class="livicon" data-name="briefcase" data-size="16" data-c="#666666" data-hc="#666666" data-loop="true"></i>
                                    Company
                                </th>
                                <th>
                                    <i class="livicon" data-name="user" data-size="16" data-c="#666666" data-hc="#666666" data-loop="true"></i>
                                    Contact
                                </th>
                                <th>
                                    <i class="livicon" data-name="shopping-cart-in" data-size="16" data-c="#666666" data-hc="#666666" data-loop="true"></i>
                                    Total
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="highlight">
                                    <div class="success"></div>
                                    <a href="#">HP</a>
                                </td>
                                <td>Ramos</td>
                                <td>2560.60$</td>
                                <td>
                                    <a href="#" class="btn default btn-xs purple">
                                        <i class="livicon" data-name="pen" data-loop="true" data-color="#000" data-hovercolor="black" data-size="14"></i>
                                        Edit
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="highlight">
                                    <div class="info"></div>
                                    <a href="#">Google</a>
                                </td>
                                <td>Adam</td>
                                <td>560.60$</td>
                                <td>
                                    <a href="#" class="btn default btn-xs black">
                                        <i class="livicon" data-name="trash" data-loop="true" data-color="#000" data-hovercolor="black" data-size="14"></i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="highlight">
                                    <div class="success"></div>
                                    <a href="#">Apple</a>
                                </td>
                                <td>Daniel</td>
                                <td>3460.60$</td>
                                <td>
                                    <a href="#" class="btn default btn-xs purple">
                                        <i class="livicon" data-name="pen" data-loop="true" data-color="#000" data-hovercolor="black" data-size="14"></i>
                                        Edit
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="highlight">
                                    <div class="warning"></div>
                                    <a href="#">Microsoft</a>
                                </td>
                                <td>Nick</td>
                                <td>2560.60$</td>
                                <td>
                                    <a href="#" class="btn default btn-xs blue">
                                        <i class="livicon" data-name="share" data-loop="true" data-color="#000" data-hovercolor="black" data-size="14"></i>
                                        Share
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>
</section>
<!-- content -->
        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
@stop
