@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Toastr
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('assets/vendors/toastr/css/toastr.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/pages/toastr.css') }}" rel="stylesheet"/>

@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <h1>Toastr Notification</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">UI features</a>
            </li>
            <li class="active">Toastr Notification</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="bell" data-c="#fff" data-hc="white" data-size="18"
                               data-loop="true"></i> Toastr Notification
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="title">Title</label>
                                        <input id="title" type="text" class="form-control" value="Toastr Notifications"
                                               placeholder="Enter a title ...">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="message">Message</label>
                                        <textarea class="form-control resize_vertical" id="message" rows="3"
                                                  placeholder="Enter a message ...">Gnome &amp; Growl type non-blocking notifications</textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox-list">
                                            <label for="closeButton">
                                                        <span class="checker" id="uniform-closeButton">
                                                            <input id="closeButton" type="checkbox" value="checked"
                                                                   checked="" class="input-small custom-checkbox"> Close Button
                                                        </span>
                                            </label>
                                            <label for="addBehaviorOnToastClick">
                                                        <span class="checker" id="uniform-addBehaviorOnToastClick">
                                                            <input id="addBehaviorOnToastClick" type="checkbox"
                                                                   value="checked" class="input-small custom-checkbox">Add behavior on toast click
                                                        </span>
                                            </label>
                                            <label for="debugInfo">
                                                        <span class="checker" id="uniform-debugInfo">
                                                            <input id="debugInfo" type="checkbox" value="checked"
                                                                   class="input-small custom-checkbox"> Debug
                                                        </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group" id="toastTypeGroup">
                                        <label class="toast-type">Toast Type</label>
                                        <div class="radio-list padding-right10">
                                            <label>
                                                        <span class="checked">
                                                            <input type="radio" name="toasts" class="custom-radio"
                                                                   value="success"
                                                                   checked=""></span> Success
                                            </label>
                                            <label>
                                                        <span>
                                                            <input type="radio" name="toasts" class="custom-radio"
                                                                   value="info"></span> Info
                                            </label>
                                            <label>
                                                        <span>
                                                            <input type="radio" name="toasts" class="custom-radio"
                                                                   value="warning"></span> Warning
                                            </label>
                                            <label>
                                                        <span>
                                                            <input type="radio" name="toasts" class="custom-radio"
                                                                   value="error"></span> Error
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group" id="positionGroup">
                                        <label class="position-type">Position</label>
                                        <div class="radio-list">
                                            <label>
                                                <span class="checked">
                                                    <input type="radio" class="custom-radio" name="positions"
                                                           value="toast-top-right" checked=""></span> Top Right
                                            </label>
                                            <label>
                                                <span>
                                                    <input type="radio" class="custom-radio" name="positions"
                                                           value="toast-top-left"></span> Top Left
                                            </label>
                                            <label>
                                                <span>
                                                    <input type="radio" class="custom-radio" name="positions"
                                                           value="toast-top-full-width"></span> Top Full Width
                                            </label>
                                            <label>
                                                <span>
                                                    <input type="radio" class="custom-radio" name="positions"
                                                           value="toast-bottom-full-width"></span> Bottom Full
                                                Width
                                            </label>
                                            <label>
                                                <span>
                                                    <input type="radio" class="custom-radio" name="positions"
                                                           value="toast-bottom-right"></span> Bottom Right
                                            </label>
                                            <label>
                                                <span>
                                                    <input type="radio" class="custom-radio" name="positions"
                                                           value="toast-bottom-left"></span> Bottom Left
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="controls">
                                        <div class="form-group">
                                            <label class="control-label" for="showEasing">Show Easing</label>
                                            <select class="form-control input-small" id="showEasing">
                                                <option>swing</option>
                                                <option>linear</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="hideEasing">Hide Easing</label>
                                            <select id="hideEasing" class="form-control input-small">
                                                <option>swing</option>
                                                <option>linear</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="showMethod">Show Method</label>
                                            <select id="showMethod" class="form-control input-small">
                                                <option value="show">show</option>
                                                <option value="fadeIn">fadeIn</option>
                                                <option value="slideDown">slideDown</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="hideMethod">Hide Method</label>
                                            <select class="form-control input-small" id="hideMethod">
                                                <option value="">hide</option>
                                                <option value="fadeOut">fadeOut</option>
                                                <option value="slideUp">slideUp</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="controls">
                                        <div class="form-group">
                                            <label class="control-label" for="showDuration">Show Duration</label>
                                            <input id="showDuration" type="text" placeholder="ms"
                                                   class="form-control input-small" value="1000">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="hideDuration">Hide Duration</label>
                                            <input id="hideDuration" type="text" placeholder="ms"
                                                   class="form-control input-small" value="1000">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="timeOut">Time out</label>
                                            <input id="timeOut" type="text" placeholder="ms"
                                                   class="form-control input-small" value="5000">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="timeOut">Extended time out</label>
                                            <input id="extendedTimeOut" type="text" placeholder="ms"
                                                   class="form-control input-small" value="1000">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-default btn-raised toastrshow" id="showtoast">
                                        Show Toast
                                    </button>
                                    <button type="button" class="btn btn-default btn-raised toastrshow"
                                            id="cleartoasts">
                                        Clear Toasts
                                    </button>
                                    <button type="button" class="btn btn-default btn-raised toastrshow"
                                            id="clearlasttoast">Clear Last Toast
                                    </button>
                                </div>
                            </div>
                            <br/>
                            <div class="row margin-top-10">
                                <div class="col-md-12">
                                    <pre id="toastrOptions">Code... </pre>
                                </div>
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

    <script src="{{ asset('assets/vendors/toastr/js/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/toastr/js/pages/ui-toastr.js') }}"></script>
@stop
