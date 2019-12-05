@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Page Builder
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    
    <link href="{{ asset('assets/vendors/gridmanager/css/jquery.gridmanager.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendors/gridmanager/css/demo.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/pages/grid_manager.css') }}" rel="stylesheet" />
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>Page Builder</h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">Builders</a>
                    </li>
                    <li class="active">
                       Page Builder
                    </li>
                </ol>
            </section>
            <!-- breadcrumb-->
            <!-- Main content -->
            <section class="content paddingleft_right15">
                <div class="alert alert-success alert-dismissable visible-xs visible-md">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    May not work properly in touch enabled devices as it as requires drag and drop.
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="map" data-size="14" data-loop="true" data-c="white" data-hc="white"></i>
                            Page Builder
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="row pd-30">
                            <div id="mycanvas">
                                <div class='row'>
                                    <div class='column col-md-12'>
                                        <p>
                                            <img data-src="holder.js/1900x100/#418bca:#fff" class='img-responsive'></p>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='column col-md-6'>
                                        <h2>2-Column Row</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque hendrerit lorem sed posuere eleifend. Ut nec tellus sed erat iaculis bibendum ac et diam. Cras convallis tincidunt placerat. Duis posuere leo quis tincidunt iaculis. Vestibulum pulvinar, neque quis cursus rhoncus, justo mi dictum enim, non facilisis ligula justo eleifend felis. Donec velit nibh, egestas eu sapien at, bibendum consectetur urna. Donec tincidunt vitae erat vitae congue.
                                        </p>
                                    </div>
                                    <div class='column col-md-6'>
                                        <h2>2-Column Row</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque hendrerit lorem sed posuere eleifend. Ut nec tellus sed erat iaculis bibendum ac et diam. Cras convallis tincidunt placerat. Duis posuere leo quis tincidunt iaculis. Vestibulum pulvinar, neque quis cursus rhoncus, justo mi dictum enim, non facilisis ligula justo eleifend felis. Donec velit nibh, egestas eu sapien at, bibendum consectetur urna. Donec tincidunt vitae erat vitae congue.
                                        </p>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='column col-md-4'>
                                        <h3>3-Column Row</h3>
                                        <p>
                                            Vivamus faucibus nibh ut aliquam dignissim. Nunc tempus velit sit amet eleifend tempor. Aliquam vel tortor euismod, viverra urna tempus, scelerisque ipsum. Pellentesque at mauris non tortor elementum pretium. Integer rutrum libero at facilisis interdum. Praesent lobortis elit erat, quis elementum justo rhoncus eu. Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                                        </p>
                                    </div>
                                    <div class='column col-md-4'>
                                        <h3>3-Column Row</h3>
                                        <p>
                                            Vivamus faucibus nibh ut aliquam dignissim. Nunc tempus velit sit amet eleifend tempor. Aliquam vel tortor euismod, viverra urna tempus, scelerisque ipsum. Pellentesque at mauris non tortor elementum pretium. Integer rutrum libero at facilisis interdum. Praesent lobortis elit erat, quis elementum justo rhoncus eu. Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                                        </p>
                                    </div>
                                    <div class='column col-md-4'>
                                        <h3>3-Column Row</h3>
                                        <p>
                                            Vivamus faucibus nibh ut aliquam dignissim. Nunc tempus velit sit amet eleifend tempor. Aliquam vel tortor euismod, viverra urna tempus, scelerisque ipsum. Pellentesque at mauris non tortor elementum pretium. Integer rutrum libero at facilisis interdum. Praesent lobortis elit erat, quis elementum justo rhoncus eu. Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                                        </p>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='column col-md-3'>
                                        <p>
                                            <img data-src="holder.js/400x150/#00bc8c:#fff" class='img-responsive'></p>
                                        <h4>4-Column Row</h4>
                                        <p>
                                            Vivamus faucibus nibh ut aliquam dignissim. Nunc tempus velit sit amet eleifend tempor. Aliquam vel tortor euismod, viverra urna tempus, scelerisque ipsum. Pellentesque at mauris non tortor elementum pretium. Integer rutrum libero at facilisis interdum. Praesent lobortis elit erat, quis elementum justo rhoncus eu. Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                                        </p>
                                    </div>
                                    <div class='column col-md-3'>
                                        <p>
                                            <img data-src="holder.js/400x150/#5bc0de:#fff" class='img-responsive'></p>
                                        <h4>4-Column Row</h4>
                                        <p>
                                            Vivamus faucibus nibh ut aliquam dignissim. Nunc tempus velit sit amet eleifend tempor. Aliquam vel tortor euismod, viverra urna tempus, scelerisque ipsum. Pellentesque at mauris non tortor elementum pretium. Integer rutrum libero at facilisis interdum. Praesent lobortis elit erat, quis elementum justo rhoncus eu. Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                                        </p>
                                    </div>
                                    <div class='column col-md-3'>
                                        <p>
                                            <img data-src="holder.js/400x150/#00BC8C:#fff" class='img-responsive'></p>
                                        <h4>4-Column Row</h4>
                                        <p>
                                            Vivamus faucibus nibh ut aliquam dignissim. Nunc tempus velit sit amet eleifend tempor. Aliquam vel tortor euismod, viverra urna tempus, scelerisque ipsum. Pellentesque at mauris non tortor elementum pretium. Integer rutrum libero at facilisis interdum. Praesent lobortis elit erat, quis elementum justo rhoncus eu. Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                                        </p>
                                    </div>
                                    <div class='column col-md-3'>
                                        <p>
                                            <img data-src="holder.js/400x150/#EF6F6C:#fff" class='img-responsive'></p>
                                        <h4>4-Column Row</h4>
                                        <p>
                                            Vivamus faucibus nibh ut aliquam dignissim. Nunc tempus velit sit amet eleifend tempor. Aliquam vel tortor euismod, viverra urna tempus, scelerisque ipsum. Pellentesque at mauris non tortor elementum pretium. Integer rutrum libero at facilisis interdum. Praesent lobortis elit erat, quis elementum justo rhoncus eu. Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                                        </p>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='column col-md-2'>
                                        <h5>6-Column Row</h5>
                                        <p>&nbsp;Ut eu dui lectus. Duis faucibus eu augue ut placerat.</p>
                                    </div>
                                    <div class='column col-md-2'>
                                        <h5>6-Column Row</h5>
                                        <p>&nbsp;Ut eu dui lectus. Duis faucibus eu augue ut placerat.</p>
                                    </div>
                                    <div class='column col-md-2'>
                                        <h5>6-Column Row</h5>
                                        <p>&nbsp;Ut eu dui lectus. Duis faucibus eu augue ut placerat.</p>
                                    </div>
                                    <div class='column col-md-2'>
                                        <h5>6-Column Row</h5>
                                        <p>&nbsp;Ut eu dui lectus. Duis faucibus eu augue ut placerat.</p>
                                    </div>
                                    <div class='column col-md-2'>
                                        <h5>6-Column Row</h5>
                                        <p>&nbsp;Ut eu dui lectus. Duis faucibus eu augue ut placerat.</p>
                                    </div>
                                    <div class='column col-md-2'>
                                        <h5>6-Column Row</h5>
                                        <p>&nbsp;Ut eu dui lectus. Duis faucibus eu augue ut placerat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script src="{{ asset('assets/vendors/gridmanager/js/jquery.gridmanager.js') }}" ></script>
    <script src="{{ asset('assets/js/pages/grid_manager.js') }}" ></script>
    
@stop
