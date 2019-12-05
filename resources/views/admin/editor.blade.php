@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Form Editors
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('assets/vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css') }}"  rel="stylesheet" media="screen"/>
    <link href="{{ asset('assets/css/pages/editor.css') }}" rel="stylesheet" type="text/css"/>

@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <h1>Form Editors</h1>
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
            <li class="active">Editors</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content paddingleft_right15">
        <!--main content-->
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="text-muted bootstrap-admin-box-title editor-clr">
                        <i class="livicon" data-name="tag" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        CKEditor Standard
                    </div>
                </div>
                <div class="bootstrap-admin-panel-content">
                    <textarea id="ckeditor_standard"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="text-muted bootstrap-admin-box-title editor-clr">
                        <i class="livicon" data-name="thermo-down" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        CKEditor Full
                    </div>
                </div>
                <div class="bootstrap-admin-panel-content">
                    <textarea id="ckeditor_full"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="text-muted bootstrap-admin-box-title editor-clr">
                        <i class="livicon" data-name="thermo-up" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        TinyMCE Basic
                    </div>
                </div>
                <div class="bootstrap-admin-panel-content">
                    <textarea id="tinymce_basic"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <div class="text-muted bootstrap-admin-box-title editor-clr">
                        <i class="livicon" data-name="umbrella" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        TinyMCE Full
                    </div>
                </div>
                <div class="bootstrap-admin-panel-content">
                    <textarea id="tinymce_full"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="panel panel-default filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Inline editing
                    </h3>
                </div>
                <div class="panel-body">
                    <div id="container">
                        <div id="header">
                            <div id="headerLeft">
                                <h2 id="sampleTitle" contenteditable="true">
                                    CKEditor
                                    <br>Goes Inline!</h2>
                                <h3 contenteditable="true">
                                    Lorem ipsum dolor sit amet dolor duis blandit vestibulum faucibus a, tortor.
                                </h3>
                            </div>
                            <div id="headerRight">
                                <div contenteditable="true">
                                    <p>
                                        Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies.
                                    </p>
                                    <p>
                                        Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum in, dolor. Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="columns">
                            <div id="column1">
                                <div contenteditable="true">
                                    <h3>Fusce vitae porttitor</h3>
                                    <p>
                                        <strong>Lorem ipsum dolor sit amet dolor. Duis blandit vestibulum faucibus a, tortor.</strong>
                                    </p>
                                    <p>
                                        Proin nunc justo felis mollis tincidunt, risus risus pede, posuere cubilia Curae, Nullam euismod, enim. Etiam nibh ultricies dolor ac dignissim erat volutpat. Vivamus fermentum
                                        <a href="http://ckeditor.com/">nisl nulla sem in</a>
                                        metus. Maecenas wisi. Donec nec erat volutpat.
                                    </p>
                                    <blockquote>
                                        <p>
                                            Fusce vitae porttitor a, euismod convallis nisl, blandit risus tortor, pretium. Vehicula vitae, imperdiet vel, ornare enim vel sodales rutrum
                                        </p>
                                    </blockquote>
                                    <blockquote>
                                        <p>
                                            Libero nunc, rhoncus ante ipsum non ipsum. Nunc eleifend pede turpis id sollicitudin fringilla. Phasellus ultrices, velit ac arcu.
                                        </p>
                                    </blockquote>
                                </div>
                            </div>
                            <div id="column2">
                                <div contenteditable="true">
                                    <h3>Integer condimentum sit amet</h3>
                                    <p>
                                        <strong>Aenean nonummy a, mattis varius. Cras aliquet.</strong>
                                        Praesent
                                        <a href="http://ckeditor.com/">magna non mattis ac, rhoncus nunc</a>
                                        , rhoncus eget, cursus pulvinar mollis.
                                    </p>
                                    <p>
                                        Proin id nibh. Sed eu libero posuere sed, lectus. Phasellus dui gravida gravida feugiat mattis ac, felis.
                                    </p>
                                    <p>
                                        Integer condimentum sit amet, tempor elit odio, a dolor non ante at sapien. Sed ac lectus. Nulla ligula quis eleifend mi, id leo velit pede cursus arcu id nulla ac lectus. Phasellus vestibulum. Nunc viverra enim quis diam.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--main content ends--> </section>
    <!-- content -->
    @stop

    {{-- page level scripts --}}
    @section('footer_scripts')

            <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('assets/vendors/tinymce/tinymce.min.js')}}" type="text/javascript"></script>
    <script  src="{{ asset('assets/vendors/ckeditor/js/ckeditor.js') }}"  type="text/javascript"></script>
    <script  src="{{ asset('assets/vendors/ckeditor/js/jquery.js') }}"  type="text/javascript" ></script>
    <script  src="{{ asset('assets/vendors/ckeditor/js/config.js') }}"  type="text/javascript"></script>

            <script src="{{ asset('assets/vendors/ckedit_res/js/plugin.js') }}" type="text/javascript"></script>
            <script src="{{ asset('assets/js/pages/editor.js') }}" type="text/javascript"></script>

@stop
