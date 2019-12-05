@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Portlet Draggable
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    
	<link rel="stylesheet" href="{{ asset('assets/css/pages/portlet.css') }}" />


@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>Draggable Portlets</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="12" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">UI features</a>
                    </li>
                    <li class="active">Draggable Portlets</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row ui-sortable" id="sortable_portlets">
                    <div class="col-md-4 column sortable">
                        <!-- BEGIN Portlet PORTLET-->
                        <div class=" portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-c="#fff" data-hc="#fff" data-name="gift" data-size="18" data-loop="true"></i>
                                    Portlet
                                </div>
                                <div class="actions">
                                    <button href="#" class="btn btn-default btn-sm">
                                        <i class="fa fa-plus"></i>
                                        Add
                                    </button>
                                    <button href="#" class="btn btn-default btn-sm">
                                        <i class="fa fa-pencil"></i>
                                        Edit
                                    </button>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div>
                                    Tom loves Canada. Angela and Tom met. Angela and Tom want to play. Angela and Tom want to jump. Angela and Tom want to yell. Angela and Tom play, jump and yell.
                                </div>
                            </div>
                        </div>
                        <!-- END Portlet PORTLET-->
                        <!-- BEGIN Portlet PORTLET-->
                        <div class=" portlet box warning">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-c="#fff" data-hc="#fff" data-name="gift" data-size="18" data-loop="true"></i>
                                    Portlet
                                </div>
                                <div class="actions">
                                    <button href="#" class="btn btn-default btn-sm">
                                        <i class="fa fa-plus"></i>
                                        Add
                                    </button>
                                    <button href="#" class="btn btn-default btn-sm">
                                        <i class="fa fa-pencil"></i>
                                        Edit
                                    </button>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div>
                                    Tom loves Canada. Angela and Tom met. Angela and Tom want to play. Angela and Tom want to jump. Angela and Tom want to yell. Angela and Tom play, jump and yell.
                                </div>
                            </div>
                        </div>
                        <!-- END Portlet PORTLET-->
                        <!-- BEGIN Portlet PORTLET-->
                        <div class=" portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-c="#fff" data-hc="#fff" data-name="gift" data-size="18" data-loop="true"></i>
                                    Portlet
                                </div>
                                <div class="actions">
                                    <button href="#" class="btn btn-default btn-sm">
                                        <i class="fa fa-plus"></i>
                                        Add
                                    </button>
                                    <button href="#" class="btn btn-default btn-sm">
                                        <i class="fa fa-pencil"></i>
                                        Edit
                                    </button>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div>
                                    Tom loves Canada. Angela and Tom met. Angela and Tom want to play. Angela and Tom want to jump. Angela and Tom want to yell. Angela and Tom play, jump and yell.
                                </div>
                            </div>
                        </div>
                        <!-- END Portlet PORTLET-->
                    </div>
                    <div class="col-md-4 column sortable">
                        <!-- BEGIN Portlet PORTLET-->
                        <div class=" portlet box success">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-c="#fff" data-hc="#fff" data-name="gift" data-size="18" data-loop="true"></i>
                                    Portlet
                                </div>
                                <div class="actions">
                                    <button href="#" class="btn btn-default btn-sm">
                                        <i class="fa fa-plus"></i>
                                        Add
                                    </button>
                                    <button href="#" class="btn btn-default btn-sm">
                                        <i class="fa fa-pencil"></i>
                                        Edit
                                    </button>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div>
                                    Tom loves Canada. Angela and Tom met. Angela and Tom want to play. Angela and Tom want to jump. Angela and Tom want to yell. Angela and Tom play, jump and yell.
                                </div>
                            </div>
                        </div>
                        <!-- END Portlet PORTLET-->
                        <!-- BEGIN Portlet PORTLET-->
                        <div class="portlet box danger">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-c="#fff" data-hc="#fff" data-name="gift" data-size="18" data-loop="true"></i>
                                    Portlet
                                </div>
                                <div class="actions">
                                    <button href="#" class="btn btn-default btn-sm">
                                        <i class="fa fa-plus"></i>
                                        Add
                                    </button>
                                    <button href="#" class="btn btn-default btn-sm">
                                        <i class="fa fa-pencil"></i>
                                        Edit
                                    </button>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div>
                                    Tom loves Canada. Angela and Tom met. Angela and Tom want to play. Angela and Tom want to jump. Angela and Tom want to yell. Angela and Tom play, jump and yell.
                                </div>
                            </div>
                        </div>
                        <!-- END Portlet PORTLET-->
                        <!-- BEGIN Portlet PORTLET-->
                        <div class=" portlet box success">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-c="#fff" data-hc="#fff" data-name="gift" data-size="18" data-loop="true"></i>
                                    Portlet
                                </div>
                                <div class="actions">
                                    <button href="#" class="btn btn-default btn-sm">
                                        <i class="fa fa-plus"></i>
                                        Add
                                    </button>
                                    <button href="#" class="btn btn-default btn-sm">
                                        <i class="fa fa-pencil"></i>
                                        Edit
                                    </button>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div>
                                    Tom loves Canada. Angela and Tom met. Angela and Tom want to play. Angela and Tom want to jump. Angela and Tom want to yell. Angela and Tom play, jump and yell.
                                </div>
                            </div>
                        </div>
                        <!-- END Portlet PORTLET-->
                    </div>
                    <div class="col-md-4 column sortable">
                        <!-- BEGIN Portlet PORTLET-->
                        <div class=" portlet box info">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-c="#fff" data-hc="#fff" data-name="gift" data-size="18" data-loop="true"></i>
                                    Portlet
                                </div>
                                <div class="actions">
                                    <button href="#" class="btn btn-default btn-sm">
                                        <i class="fa fa-plus"></i>
                                        Add
                                    </button>
                                    <button href="#" class="btn btn-default btn-sm">
                                        <i class="fa fa-pencil"></i>
                                        Edit
                                    </button>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div>
                                    Tom loves Canada. Angela and Tom met. Angela and Tom want to play. Angela and Tom want to jump. Angela and Tom want to yell. Angela and Tom play, jump and yell.
                                </div>
                            </div>
                        </div>
                        <!-- END Portlet PORTLET-->
                        <!-- BEGIN Portlet PORTLET-->
                        <div class=" portlet box warning">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-c="#fff" data-hc="#fff" data-name="gift" data-size="18" data-loop="true"></i>
                                    Portlet
                                </div>
                                <div class="actions">
                                    <button href="#" class="btn btn-default btn-sm">
                                        <i class="fa fa-plus"></i>
                                        Add
                                    </button>
                                    <button href="#" class="btn btn-default btn-sm">
                                        <i class="fa fa-pencil"></i>
                                        Edit
                                    </button>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div>
                                    Tom loves Canada. Angela and Tom met. Angela and Tom want to play. Angela and Tom want to jump. Angela and Tom want to yell. Angela and Tom play, jump and yell.
                                </div>
                            </div>
                        </div>
                        <!-- END Portlet PORTLET-->
                        <!-- BEGIN Portlet PORTLET-->
                        <div class=" portlet box info">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-c="#fff" data-hc="#fff" data-name="gift" data-size="18" data-loop="true"></i>
                                    Portlet
                                </div>
                                <div class="actions">
                                    <button href="#" class="btn btn-default btn-sm">
                                        <i class="fa fa-plus"></i>
                                        Add
                                    </button>
                                    <button href="#" class="btn btn-default btn-sm">
                                        <i class="fa fa-pencil"></i>
                                        Edit
                                    </button>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div>
                                    Tom loves Canada. Angela and Tom met. Angela and Tom want to play. Angela and Tom want to jump. Angela and Tom want to yell. Angela and Tom play, jump and yell.
                                </div>
                            </div>
                        </div>
                        <!-- END Portlet PORTLET-->
                    </div>
                </div>
            </section>
            <!-- content -->
        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- begining of page level js-->
    <script>
        jQuery(document).ready(function() {

            $("#sortable_portlets").find('.column').sortable({
                connectWith: "#sortable_portlets .column",
                items: ".portlet",
                opacity: 0.8,
                coneHelperSize: true,
                placeholder: 'sortable-box-placeholder round-all',
                forcePlaceholderSize: true,
                tolerance: "pointer"
            });

            $(".column").disableSelection();
        });
    </script>
    <!-- end of page level js-->
@stop
