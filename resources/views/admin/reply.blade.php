@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Mail Box replay
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <!-- page level css -->
    <link href="{{ asset('assets/css/pages/alertmessage.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendors/summernote/summernote.css') }}" rel="stylesheet" media="screen" />
    <link href="{{ asset('assets/css/pages/mail_box.css') }}" rel="stylesheet" type="text/css" />
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>Reply</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('admin/inbox') }}">Mail Box</a>
                    </li>
                    <li class="active">Reply</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row web-mail">
                    <div class="col-lg-2 col-md-3 col-sm-4">
                        <div class="whitebg">
                            <ul>
                                <li class="compose">
                                    <a href="{{ URL::to('admin/compose') }}">
                                        <i class="livicon" data-n="pen" data-s="16" data-c="white"></i>
                                        &nbsp; &nbsp;Compose
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="{{ URL::to('admin/inbox') }}">
                                        <i class="livicon" data-n="inbox" data-s="16" data-c="white"></i>
                                        &nbsp; &nbsp;Inbox
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('admin/sent') }}">
                                        <i class="livicon" data-n="check-circle" data-s="16" data-c="gray"></i>
                                        &nbsp; &nbsp; Sent
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('admin/trash') }}">
                                        <i class="livicon" data-n="trash" data-s="16" data-c="gray"></i>
                                        &nbsp; &nbsp; Trash
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('admin/spam') }}">
                                        <i class="livicon" data-n="eye-close" data-s="16" data-c="gray"></i>
                                        &nbsp; &nbsp; Spam
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('admin/draft') }}">
                                        <i class="livicon" data-n="unlink" data-s="16" data-c="gray"></i>
                                        &nbsp; &nbsp; Draft (10)
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-8">
                        <div class="whitebg">
                            <table class="table table-striped table-advance">
                                <thead>
                                    <tr>
                                        <td colspan="4">
                                            <div class="col-md-8">
                                                <h4>
                                                    <strong>Reply</strong>
                                                </h4>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="4">
                                            <div class="compose row">
                                                <label class="col-xs-2 hidden-xs" for="email">To:</label>
                                                <input type="text" class="col-xs-9" id="email" value="zeast@joshadmin.com, " tabindex="1">
                                                <div class="clear"></div>
                                                <label class="col-xs-2 hidden-xs" for="sub">Subject:</label>
                                                <input type="text" class="col-xs-9" id="sub" tabindex="1" value="Re: New server for datacenter needed ">
                                                <div class="clear"></div>
                                                <div id="ccb">
                                                    <label class="col-xs-2 hidden-xs" for="cc">Cc:</label>
                                                </div>
                                                <div class="clear"></div>
                                                <div id="cci" style="display:none">
                                                    <label class="col-xs-2 hidden-xs" for="cc">Cc:</label>
                                                    <input type="text" class="col-xs-9" id="cc" placeholder="Cc:" tabindex="1">
                                                </div>
                                                <div class="clear"></div>
                                                <div id="bccb">
                                                    <label class="col-xs-2 hidden-xs" for="bcc">Bcc:</label>
                                                </div>
                                                <div class="clear"></div>
                                                <div id="bcci" style="display:none">
                                                    <label class="col-xs-2 hidden-xs" for="bcc">Bcc:</label>
                                                    <input type="text" class="col-xs-9" id="bcc" tabindex="1" placeholder="Bcc:">
                                                </div>
                                                <div class='box-body pad col-sm-12'>
                                                    <div id="summernote"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td width="100%">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="col-md-4">
                                                        <a href="{{ URL::to('admin/inbox') }}" class="btn btn-sm btn-primary">
                                                            <span class="livicon" data-n="external-link" data-s="12" data-c="white" data-hc="white"></span>
                                                            Send
                                                        </a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="{{ URL::to('admin/inbox') }}" class="btn btn-sm btn-success">
                                                            <span class="livicon" data-n="briefcase" data-s="12" data-c="white" data-hc="white"></span>
                                                            Draft
                                                        </a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="{{ URL::to('admin/inbox') }}" class="btn btn-sm btn-warning">
                                                            <span class="livicon" data-n="trash" data-s="12" data-c="white" data-hc="white"></span>
                                                            Discard
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td width="3%"></td>
                                        <td width="13%" class="view-message text-right">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- content -->
        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- begining of page level js-->
    <script  src="{{ asset('assets/vendors/summernote/summernote.min.js') }}"  type="text/javascript"></script>
    <script type="text/javascript">
        $('#summernote').summernote({
            fontNames: ['Lato', 'Arial', 'Courier New']
        });
        $('body').on('click', '.btn-codeview', function (e) {

            if ( $('.note-editor').hasClass("fullscreen") ) {
                var windowHeight = $(window).height();
                $('.note-editable').css('min-height',windowHeight);
            }else{
                $('.note-editable').css('min-height','300px');
            }
        });
        $('body').on('click','.btn-fullscreen', function (e) {
            setTimeout (function(){
                if ( $('.note-editor').hasClass("fullscreen") ) {
                    var windowHeight = $(window).height();
                    $('.note-editable').css('min-height',windowHeight);
                }else{
                    $('.note-editable').css('min-height','300px');
                }
            },500);

        });
        $('.note-link-url').on('keyup', function() {
            if($('.note-link-text').val() != '') {
                $('.note-link-btn').attr('disabled', false).removeClass('disabled');
            }
        });

        $('#slimscrollside').slimscroll({
            height: '700px',
            size: '3px',
            color: 'black',
            opacity: .3

        });
        $("#ccb").click(function() {
            $("#cci").toggle(500);
            $("#ccb").hide();

        });
        $("#bccb").click(function() {
            $("#bcci").toggle(500);
            $("#bccb").hide();

        });
    </script>
    <!-- end of page level js-->
    
@stop
