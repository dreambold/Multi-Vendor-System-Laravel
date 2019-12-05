@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Notifications
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('assets/css/pages/fluid.css') }}"  rel="stylesheet"/>
    <link href="{{ asset('assets/css/pages/toastr.css') }}" rel="stylesheet" />
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>Notifications</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-c="#000" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">UI features</a>
                    </li>
                    <li class="active">Notifications</li>
                </ol>
            </section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Notifications
                    </h3>
                </div>
                <div class="portlet-body">
                    <div id="layouts">
                        <div class="g1 layout-demo">&nbsp;</div>
                        <div class="g1 layout-demo">
                            <h6>
                                <span class="lay-title">Top</span>
                                <span class="runner runner_default" data-layout="top" data-type="alert">Alert</span>
                                <span class="runner runner_success" data-layout="top" data-type="success">Success</span>
                                <span class="runner runner_danger" data-layout="top" data-type="error">Error</span>
                                <br>
                                <span class="runner runner_warning" data-layout="top" data-type="warning">Warning</span>
                                <span class="runner runner_info" data-layout="top" data-type="information">Information</span>
                                <span class="runner runner_primary" data-layout="top" data-type="confirm">Confirm</span>
                            </h6>
                        </div>
                        <div class="g1 layout-demo">&nbsp;</div>
                        <div class="cf"></div>
                        <div class="g1 layout-demo">
                            <h6>
                                <span class="lay-title">TopLeft</span>
                                <span class="runner runner_default" data-layout="topLeft" data-type="alert">Alert</span>
                                <span class="runner runner_success" data-layout="topLeft" data-type="success">Success</span>
                                <span class="runner runner_danger" data-layout="topLeft" data-type="error">Error</span>
                                <br>
                                <span class="runner runner_warning" data-layout="topLeft" data-type="warning">Warning</span>
                                <span class="runner runner_info" data-layout="topLeft" data-type="information">Information</span>
                                <span class="runner runner_primary" data-layout="topLeft" data-type="confirm">Confirm</span>
                            </h6>
                        </div>
                        <div class="g1 layout-demo">
                            <h6>
                                <span class="lay-title">TopCenter</span>
                                <span class="runner runner_default" data-layout="topCenter" data-type="alert">Alert</span>
                                <span class="runner runner_success" data-layout="topCenter" data-type="success">Success</span>
                                <span class="runner runner_danger" data-layout="topCenter" data-type="error">Error</span>
                                <br>
                                <span class="runner runner_warning" data-layout="topCenter" data-type="warning">Warning</span>
                                <span class="runner runner_info" data-layout="topCenter" data-type="information">Information</span>
                                <span class="runner runner_primary" data-layout="topCenter" data-type="confirm">Confirm</span>
                            </h6>
                        </div>
                        <div class="g1 layout-demo">
                            <h6>
                                <span class="lay-title">TopRight</span>
                                <span class="runner runner_default" data-layout="topRight" data-type="alert">Alert</span>
                                <span class="runner runner_success" data-layout="topRight" data-type="success">Success</span>
                                <span class="runner runner_danger" data-layout="topRight" data-type="error">Error</span>
                                <br>
                                <span class="runner runner_warning" data-layout="topRight" data-type="warning">Warning</span>
                                <span class="runner runner_info" data-layout="topRight" data-type="information">Information</span>
                                <span class="runner runner_primary" data-layout="topRight" data-type="confirm">Confirm</span>
                            </h6>
                        </div>
                        <div class="cf"></div>
                        <div class="g1 layout-demo">
                            <h6>
                                <span class="lay-title">CenterLeft</span>
                                <span class="runner runner_default" data-layout="centerLeft" data-type="alert">Alert</span>
                                <span class="runner runner_success" data-layout="centerLeft" data-type="success">Success</span>
                                <span class="runner runner_danger" data-layout="centerLeft" data-type="error">Error</span>
                                <br>
                                <span class="runner runner_warning" data-layout="centerLeft" data-type="warning">Warning</span>
                                <span class="runner runner_info" data-layout="centerLeft" data-type="information">Information</span>
                                <span class="runner runner_primary" data-layout="centerLeft" data-type="confirm">Confirm</span>
                            </h6>
                        </div>
                        <div class="g1 layout-demo">
                            <h6>
                                <span class="lay-title">Center</span>
                                <span class="runner runner_default" data-layout="center" data-type="alert">Alert</span>
                                <span class="runner runner_success" data-layout="center" data-type="success">Success</span>
                                <span class="runner runner_danger" data-layout="center" data-type="error">Error</span>
                                <br>
                                <span class="runner runner_warning" data-layout="center" data-type="warning">Warning</span>
                                <span class="runner runner_info" data-layout="center" data-type="information">Information</span>
                                <span class="runner runner_primary" data-layout="center" data-type="confirm">Confirm</span>
                            </h6>
                        </div>
                        <div class="g1 layout-demo">
                            <h6>
                                <span class="lay-title">CenterRight</span>
                                <span class="runner runner_default" data-layout="centerRight" data-type="alert">Alert</span>
                                <span class="runner runner_success" data-layout="centerRight" data-type="success">Success</span>
                                <span class="runner runner_danger" data-layout="centerRight" data-type="error">Error</span>
                                <br>
                                <span class="runner runner_warning" data-layout="centerRight" data-type="warning">Warning</span>
                                <span class="runner runner_info" data-layout="centerRight" data-type="information">Information</span>
                                <span class="runner runner_primary" data-layout="centerRight" data-type="confirm">Confirm</span>
                            </h6>
                        </div>
                        <div class="cf"></div>
                        <div class="g1 layout-demo">
                            <h6>
                                <span class="lay-title">BottomLeft</span>
                                <span class="runner runner_default" data-layout="bottomLeft" data-type="alert">Alert</span>
                                <span class="runner runner_success" data-layout="bottomLeft" data-type="success">Success</span>
                                <span class="runner runner_danger" data-layout="bottomLeft" data-type="error">Error</span>
                                <br>
                                <span class="runner runner_warning" data-layout="bottomLeft" data-type="warning">Warning</span>
                                <span class="runner runner_info" data-layout="bottomLeft" data-type="information">Information</span>
                                <span class="runner runner_primary" data-layout="bottomLeft" data-type="confirm">Confirm</span>
                            </h6>
                        </div>
                        <div class="g1 layout-demo">
                            <h6>
                                <span class="lay-title">BottomCenter</span>
                                <span class="runner runner_default" data-layout="bottomCenter" data-type="alert">Alert</span>
                                <span class="runner runner_success" data-layout="bottomCenter" data-type="success">Success</span>
                                <span class="runner runner_danger" data-layout="bottomCenter" data-type="error">Error</span>
                                <br>
                                <span class="runner runner_warning" data-layout="bottomCenter" data-type="warning">Warning</span>
                                <span class="runner runner_info" data-layout="bottomCenter" data-type="information">Information</span>
                                <span class="runner runner_primary" data-layout="bottomCenter" data-type="confirm">Confirm</span>
                            </h6>
                        </div>
                        <div class="g1 layout-demo">
                            <h6>
                                <span class="lay-title">BottomRight</span>
                                <span class="runner runner_default" data-layout="bottomRight" data-type="alert">Alert</span>
                                <span class="runner runner_success" data-layout="bottomRight" data-type="success">Success</span>
                                <span class="runner runner_danger" data-layout="bottomRight" data-type="error">Error</span>
                                <br>
                                <span class="runner runner_warning" data-layout="bottomRight" data-type="warning">Warning</span>
                                <span class="runner runner_info" data-layout="bottomRight" data-type="information">Information</span>
                                <span class="runner runner_primary" data-layout="bottomRight" data-type="confirm">Confirm</span>
                            </h6>
                        </div>
                        <div class="cf"></div>
                        <div class="g1 layout-demo">&nbsp;</div>
                        <div class="g1 layout-demo">
                            <h6>
                                <span class="lay-title">Bottom</span>
                                <span class="runner runner_default" data-layout="bottom" data-type="alert">Alert</span>
                                <span class="runner runner_success" data-layout="bottom" data-type="success">Success</span>
                                <span class="runner runner_danger" data-layout="bottom" data-type="error">Error</span>
                                <br>
                                <span class="runner runner_warning" data-layout="bottom" data-type="warning">Warning</span>
                                <span class="runner runner_info" data-layout="bottom" data-type="information">Information</span>
                                <span class="runner runner_primary" data-layout="bottom" data-type="confirm">Confirm</span>
                            </h6>
                        </div>
                        <div class="g1 layout-demo">&nbsp;</div>
                        <div class="cf"></div>
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

    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" ></script>
    <script src="{{ asset('assets/vendors/noty/js/jquery.noty.packaged.min.js') }}" ></script>
    <script src="{{ asset('assets/js/pages/noty_script.js') }}" ></script>
    {{--<script type="text/javascript" src="{{ asset('assets/vendors/noty/script.js') }}" ></script>--}}


  
    
@stop
