@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Advanced Data Tables
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/colReorder.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/rowReorder.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/scroller.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/tables.css') }}" />
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Advanced Data Tables</h1>
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
                    <li class="active">Advanced Data Tables</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary filterable">
                            <div class="panel-heading clearfix  ">
                                <div class="panel-title pull-left">
                                       <div class="caption">
                                    <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    TableTools
                                </div>
                                </div>
                            </div>
                            <div class="panel-body table-responsive">
                                <table class="table table-striped table-bordered" id="table1" width="100%">
                                    <thead>
                                        <tr>

                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>User Name</th>
                                            <th>
                                                User E-mail
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Markotto</td>
                                            <td>
                                                Markotto@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                JacobThornton
                                            </td>
                                            <td>
                                                JacobThornton@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Markotto</td>
                                            <td>
                                                Markotto@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                JacobThornton
                                            </td>
                                            <td>
                                                JacobThornton@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Markotto</td>
                                            <td>
                                                Markotto@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                JacobThornton
                                            </td>
                                            <td>
                                                JacobThornton@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Markotto</td>
                                            <td>
                                                Markotto@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                JacobThornton
                                            </td>
                                            <td>
                                                JacobThornton@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Markotto</td>
                                            <td>
                                                Markotto@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                JacobThornton
                                            </td>
                                            <td>
                                                JacobThornton@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Markotto</td>
                                            <td>
                                                Markotto@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                JacobThornton
                                            </td>
                                            <td>
                                                JacobThornton@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Markotto</td>
                                            <td>
                                                Markotto@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                JacobThornton
                                            </td>
                                            <td>
                                                JacobThornton@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Markotto</td>
                                            <td>
                                                Markotto@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                JacobThornton
                                            </td>
                                            <td>
                                                JacobThornton@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Markotto</td>
                                            <td>
                                                Markotto@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                JacobThornton
                                            </td>
                                            <td>
                                                JacobThornton@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success filterable" style="overflow:auto;">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                     <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Re-order Columns
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="table2"
                                       width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>User Name</th>
                                            <th>
                                                User E-mail
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                JacobThornton
                                            </td>
                                            <td>
                                                JacobThornton@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>13.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>14.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>16.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>17.</td>
                                            <td>Larryss</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-info filterable">
                            <div class="panel-heading clearfix">
                                <h3 class="panel-title pull-left">
                                     <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Add / Remove rows
                                </h3>
                                <div class="pull-right">

                                    <button type="button" class="btn btn-primary btn-sm" id="addButton">Add row</button>
                                    <button type="button" class="btn btn-danger btn-sm" id="delButton">Delete row</button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table" id="table3" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>User Name</th>
                                            <th>
                                                User E-mail
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                JacobThornton
                                            </td>
                                            <td>
                                                JacobThornton@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>13.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>14.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>16.</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>17.</td>
                                            <td>Larryss</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-warning filterable">
                            <div class="panel-heading clearfix">
                                <h3 class="panel-title pull-left">
                                     <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                   Scroller
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-hover" id="sample_5" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th class="hidden-xs">Platform(s)</th>
                                            <th class="hidden-xs">Engine version</th>
                                            <th class="hidden-xs">CSS grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet Explorer 4.0</td>
                                            <td>Win 95+</td>
                                            <td>4</td>
                                            <td>X</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet Explorer 5.0</td>
                                            <td>Win 95+</td>
                                            <td>5</td>
                                            <td>C</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet Explorer 5.5</td>
                                            <td>Win 95+</td>
                                            <td>5.5</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet Explorer 6</td>
                                            <td>Win 98+</td>
                                            <td>6</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet Explorer 7</td>
                                            <td>Win XP SP2+</td>
                                            <td>7</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>AOL browser (AOL desktop)</td>
                                            <td>Win XP</td>
                                            <td>6</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Firefox 1.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.7</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Firefox 1.5</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Firefox 2.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Firefox 3.0</td>
                                            <td>Win 2k+ / OSX.3+</td>
                                            <td>1.9</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Camino 1.0</td>
                                            <td>OSX.2+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Camino 1.5</td>
                                            <td>OSX.3+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Netscape 7.2</td>
                                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                                            <td>1.7</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Netscape Browser 8</td>
                                            <td>Win 98SE+</td>
                                            <td>1.7</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Netscape Navigator 9</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.0</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.1</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.1</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.2</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.2</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.3</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.3</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.4</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.4</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.5</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.5</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.6</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.6</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.7</td>
                                            <td>Win 98+ / OSX.1+</td>
                                            <td>1.7</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.8</td>
                                            <td>Win 98+ / OSX.1+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Seamonkey 1.1</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Epiphany 2.20</td>
                                            <td>Gnome</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Webkit</td>
                                            <td>Safari 1.2</td>
                                            <td>OSX.3</td>
                                            <td>125.5</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Webkit</td>
                                            <td>Safari 1.3</td>
                                            <td>OSX.3</td>
                                            <td>312.8</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Webkit</td>
                                            <td>Safari 2.0</td>
                                            <td>OSX.4+</td>
                                            <td>419.3</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Webkit</td>
                                            <td>Safari 3.0</td>
                                            <td>OSX.4+</td>
                                            <td>522.1</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Webkit</td>
                                            <td>OmniWeb 5.5</td>
                                            <td>OSX.4+</td>
                                            <td>420</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Webkit</td>
                                            <td>iPod Touch / iPhone</td>
                                            <td>iPod</td>
                                            <td>420.1</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Webkit</td>
                                            <td>S60</td>
                                            <td>S60</td>
                                            <td>413</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Presto</td>
                                            <td>Opera 7.0</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>-</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Presto</td>
                                            <td>Opera 7.5</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td>-</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Presto</td>
                                            <td>Opera 8.0</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td>-</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Presto</td>
                                            <td>Opera 8.5</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td>-</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Presto</td>
                                            <td>Opera 9.0</td>
                                            <td>Win 95+ / OSX.3+</td>
                                            <td>-</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Presto</td>
                                            <td>Opera 9.2</td>
                                            <td>Win 88+ / OSX.3+</td>
                                            <td>-</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Presto</td>
                                            <td>Opera 9.5</td>
                                            <td>Win 88+ / OSX.3+</td>
                                            <td>-</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Presto</td>
                                            <td>Opera for Wii</td>
                                            <td>Wii</td>
                                            <td>-</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Presto</td>
                                            <td>Nokia N800</td>
                                            <td>N800</td>
                                            <td>-</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Presto</td>
                                            <td>Nintendo DS browser</td>
                                            <td>Nintendo DS</td>
                                            <td>8.5</td>
                                            <td>
                                                C/A
                                                <sup>1</sup>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary filterable table-tools">
                            <div class="panel-heading clearfix  ">
                                <div class="panel-title pull-left">
                                    <div class="caption">
                                        <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Inline Edit
                                    </div>
                                </div>
                                <div class="tools pull-right"></div>
                            </div>
                            <div class="panel-body table-responsive">
                                <table class="table table-striped table-bordered" id="inline_edit" width="100%">
                                    <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>User Name</th>
                                        <th>User E-mail</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Markotto</td>
                                        <td>Markotto@test.com</td>
                                    </tr>
                                    <tr>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>JacobThornton</td>
                                        <td>JacobThornton@test.com</td>
                                    </tr>
                                    <tr>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>Larrythe Bird</td>
                                        <td>LarrytheBird@test.com</td>
                                    </tr>
                                    <tr>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>Larrythe Bird</td>
                                        <td>LarrytheBird@test.com</td>
                                    </tr>
                                    <tr>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Markotto</td>
                                        <td>Markotto@test.com</td>
                                    </tr>
                                    <tr>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>JacobThornton</td>
                                        <td>JacobThornton@test.com</td>
                                    </tr>
                                    <tr>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>Larrythe Bird</td>
                                        <td>LarrytheBird@test.com</td>
                                    </tr>
                                    <tr>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>Larrythe Bird</td>
                                        <td>LarrytheBird@test.com</td>
                                    </tr>
                                    <tr>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Markotto</td>
                                        <td>Markotto@test.com</td>
                                    </tr>
                                    <tr>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>JacobThornton</td>
                                        <td>JacobThornton@test.com</td>
                                    </tr>
                                    <tr>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>Larrythe Bird</td>
                                        <td>LarrytheBird@test.com</td>
                                    </tr>
                                    <tr>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>Larrythe Bird</td>
                                        <td>LarrytheBird@test.com</td>
                                    </tr>
                                    <tr>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Markotto</td>
                                        <td>Markotto@test.com</td>
                                    </tr>
                                    <tr>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>JacobThornton</td>
                                        <td>JacobThornton@test.com</td>
                                    </tr>
                                    <tr>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>Larrythe Bird</td>
                                        <td>LarrytheBird@test.com</td>
                                    </tr>
                                    <tr>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>Larrythe Bird</td>
                                        <td>LarrytheBird@test.com</td>
                                    </tr>
                                    <tr>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Markotto</td>
                                        <td>Markotto@test.com</td>
                                    </tr>
                                    <tr>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>JacobThornton</td>
                                        <td>JacobThornton@test.com</td>
                                    </tr>
                                    <tr>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>Larrythe Bird</td>
                                        <td>LarrytheBird@test.com</td>
                                    </tr>
                                    <tr>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>Larrythe Bird</td>
                                        <td>LarrytheBird@test.com</td>
                                    </tr>
                                    <tr>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Markotto</td>
                                        <td>Markotto@test.com</td>
                                    </tr>
                                    <tr>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>JacobThornton</td>
                                        <td>JacobThornton@test.com</td>
                                    </tr>
                                    <tr>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>Larrythe Bird</td>
                                        <td>LarrytheBird@test.com</td>
                                    </tr>
                                    <tr>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>Larrythe Bird</td>
                                        <td>LarrytheBird@test.com</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Third Basic Table Ends Here-->
                <!--delete modal starts here-->
                <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title custom_align" id="Heading">
                                    Delete this entry
                                </h4>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-warning">
                                    <span class="glyphicon glyphicon-warning-sign"></span>
                                    Are you sure you want to delete this Record?
                                </div>
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-warning">
                                    <span class="glyphicon glyphicon-ok-sign"></span>
                                    Yes
                                </button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal">
                                    <span class="glyphicon glyphicon-remove"></span>
                                    No
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.modal ends here -->
            </section>
            <!-- content -->

    @stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/jeditable/js/jquery.jeditable.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.buttons.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.colReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.responsive.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.rowReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.colVis.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.html5.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/pdfmake.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/vfs_fonts.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.scroller.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/table-advanced.js') }}" ></script>
@stop
