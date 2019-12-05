@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Mail Box
@parent
@stop

{{-- page level styles --}}
@section('header_styles')    
    
	<link href="{{ asset('assets/css/pages/mail_box.css') }}" rel="stylesheet" type="text/css" />
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>Draft</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('admin/inbox') }}">Email</a>
                    </li>
                    <li class="active">Draft</li>
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
                                <li>
                                    <a href="{{ URL::to('admin/inbox') }}">
                                        <i class="livicon" data-n="inbox" data-s="16" data-c="gray"></i>
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
                                <li class="active">
                                    <a href="{{ URL::to('admin/draft') }}">
                                        <i class="livicon" data-n="unlink" data-s="16" data-c="white"></i>
                                        &nbsp; &nbsp; Draft (10)
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-8">
                        <div class="whitebg">
                            <table class="table table-striped table-advance table-hover" id="inbox-check">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="col-md-8">
                                                <h4>
                                                    <strong>Draft</strong>
                                                </h4>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="6">
                                            <div class="row no-padding">
                                                <div class="col-md-9 col-lg-9 col-xs-12">
                                                    <div class="btn-group pull-left table-bordered paddingrightleft_10 paddingtopbottom_5px">
                                                        <input type="checkbox" id="checkall">
                                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                            <span class="caret"></span>
                                                        </a>
                                                        <ul class="dropdown-menu ul">
                                                            <!-- dropdown menu links -->
                                                            <li>
                                                                <a href="#">All</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">None</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Read</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">UnRead</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Starred</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Unstarred</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="btn-group pull-left table-bordered paddingrightleft_10 paddingtopbottom_5px margin_left">
                                                        <i class="livicon" data-n="refresh" data-s="17"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xs-12">
                                                    <div class="pull-right">
                                                        <ul class="pagination no-padding">
                                                            <li class="">
                                                                <a href="#">&laquo;</a>
                                                            </li>
                                                            <li>
                                                                <a>1 - 10 of 1</a>
                                                            </li>
                                                            <li class="">
                                                                <a href="#">&raquo;</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-messageid="1" class="unread">
                                        <td width="7%" class="inbox-small-cells">
                                            <div class="checker">
                                                <span>
                                                    <input type="checkbox" class="mail-checkbox">
                                                </span>
                                            </div>
                                        </td>
                                        <td width="2%" class="inbox-small-cells">&nbsp;</td>
                                        <td width="22%" class="btn-link">Draft</td>
                                        <td width="56%" class="view-message ">
                                            <a href="{{ URL::to('admin/view_mail') }}">Fwd: Make changes as needed</a>
                                        </td>
                                        <td width="3%" class="view-message inbox-small-cells">&nbsp;</td>
                                        <td width="13%" class="view-message text-right">
                                            <a href="{{ URL::to('admin/view_mail') }}">16:30 PM</a>
                                        </td>
                                    </tr>
                                    <tr data-messageid="2" class="unread">
                                        <td class="inbox-small-cells">
                                            <div class="checker">
                                                <span>
                                                    <input type="checkbox" class="mail-checkbox">
                                                </span>
                                            </div>
                                        </td>
                                        <td class="inbox-small-cells">&nbsp;</td>
                                        <td class="view-message">
                                            <span class="btn-link">Draft</span>
                                        </td>
                                        <td class="view-message">
                                            <a href="{{ URL::to('admin/view_mail') }}">Ya comin' to our July webinar?</a>
                                        </td>
                                        <td class="view-message inbox-small-cells">&nbsp;</td>
                                        <td class="view-message text-right">
                                            <a href="{{ URL::to('admin/view_mail') }}">June 15</a>
                                        </td>
                                    </tr>
                                    <tr data-messageid="3">
                                        <td class="inbox-small-cells">
                                            <div class="checker">
                                                <span>
                                                    <input type="checkbox" class="mail-checkbox">
                                                </span>
                                            </div>
                                        </td>
                                        <td class="inbox-small-cells">&nbsp;</td>
                                        <td class="view-message">
                                            <span class="btn-link">Draft</span>
                                        </td>
                                        <td class="view-message">
                                            <a href="{{ URL::to('admin/view_mail') }}">Mobile-First Type & Layout</a>
                                        </td>
                                        <td class="view-message inbox-small-cells">&nbsp;</td>
                                        <td class="view-message text-right">
                                            <a href="{{ URL::to('admin/view_mail') }}">June 15</a>
                                        </td>
                                    </tr>
                                    <tr data-messageid="4">
                                        <td class="inbox-small-cells">
                                            <div class="checker">
                                                <span>
                                                    <input type="checkbox" class="mail-checkbox">
                                                </span>
                                            </div>
                                        </td>
                                        <td class="inbox-small-cells">&nbsp;</td>
                                        <td class="view-message">
                                            <span class="btn-link">Draft</span>
                                        </td>
                                        <td class="view-message">
                                            <a href="{{ URL::to('admin/view_mail') }}">This looks like borrows page</a>
                                        </td>
                                        <td class="view-message inbox-small-cells">&nbsp;</td>
                                        <td class="view-message text-right">
                                            <a href="{{ URL::to('admin/view_mail') }}">June 14</a>
                                        </td>
                                    </tr>
                                    <tr data-messageid="5">
                                        <td class="inbox-small-cells">
                                            <div class="checker">
                                                <span>
                                                    <input type="checkbox" class="mail-checkbox">
                                                </span>
                                            </div>
                                        </td>
                                        <td class="inbox-small-cells">&nbsp;</td>
                                        <td class="view-message">
                                            <span class="btn-link">Draft</span>
                                        </td>
                                        <td class="view-message">
                                            <a href="{{ URL::to('admin/view_mail') }}">Ya comin' to our July webinar?</a>
                                        </td>
                                        <td class="view-message inbox-small-cells">&nbsp;</td>
                                        <td class="view-message text-right">
                                            <a href="{{ URL::to('admin/view_mail') }}">June 15</a>
                                        </td>
                                    </tr>
                                    <tr data-messageid="6">
                                        <td class="inbox-small-cells">
                                            <div class="checker">
                                                <span>
                                                    <input type="checkbox" class="mail-checkbox">
                                                </span>
                                            </div>
                                        </td>
                                        <td class="inbox-small-cells">&nbsp;</td>
                                        <td class="view-message">
                                            <span class="btn-link">Draft</span>
                                        </td>
                                        <td class="view-message">
                                            <a href="{{ URL::to('admin/view_mail') }}">Analysis on Views</a>
                                        </td>
                                        <td class="view-message inbox-small-cells">&nbsp;</td>
                                        <td class="view-message text-right">
                                            <a href="{{ URL::to('admin/view_mail') }}">June 14</a>
                                        </td>
                                    </tr>
                                    <tr data-messageid="7">
                                        <td class="inbox-small-cells">
                                            <div class="checker">
                                                <span>
                                                    <input type="checkbox" class="mail-checkbox">
                                                </span>
                                            </div>
                                        </td>
                                        <td class="inbox-small-cells">&nbsp;</td>
                                        <td class="view-message">
                                            <span class="btn-link">Draft</span>
                                        </td>
                                        <td class="view-message">
                                            <a href="{{ URL::to('admin/view_mail') }}">Ya comin' to our July webinar?</a>
                                        </td>
                                        <td class="view-message inbox-small-cells">&nbsp;</td>
                                        <td class="view-message text-right">
                                            <a href="{{ URL::to('admin/view_mail') }}">June 15</a>
                                        </td>
                                    </tr>
                                    <tr data-messageid="8">
                                        <td class="inbox-small-cells">
                                            <div class="checker">
                                                <span>
                                                    <input type="checkbox" class="mail-checkbox">
                                                </span>
                                            </div>
                                        </td>
                                        <td class="inbox-small-cells">&nbsp;</td>
                                        <td class="view-message">
                                            <span class="btn-link">Draft</span>
                                        </td>
                                        <td class="view-message view-message">
                                            <a href="{{ URL::to('admin/view_mail') }}">Analysis on Views</a>
                                        </td>
                                        <td class="view-message inbox-small-cells">&nbsp;</td>
                                        <td class="view-message text-right">
                                            <a href="{{ URL::to('admin/view_mail') }}">June 14</a>
                                        </td>
                                    </tr>
                                    <tr data-messageid="9">
                                        <td class="inbox-small-cells">
                                            <div class="checker">
                                                <span>
                                                    <input type="checkbox" class="mail-checkbox">
                                                </span>
                                            </div>
                                        </td>
                                        <td class="inbox-small-cells">&nbsp;</td>
                                        <td class="view-message">
                                            <span class="btn-link">Draft</span>
                                        </td>
                                        <td class="view-message view-message">
                                            <a href="{{ URL::to('admin/view_mail') }}">Mobile-First Type & Layout</a>
                                        </td>
                                        <td class="view-message inbox-small-cells">&nbsp;</td>
                                        <td class="view-message text-right">
                                            <a href="{{ URL::to('admin/view_mail') }}">June 15</a>
                                        </td>
                                    </tr>
                                    <tr data-messageid="10">
                                        <td class="inbox-small-cells">
                                            <div class="checker">
                                                <span>
                                                    <input type="checkbox" class="mail-checkbox">
                                                </span>
                                            </div>
                                        </td>
                                        <td class="inbox-small-cells">&nbsp;</td>
                                        <td class="view-message">
                                            <span class="btn-link">Draft</span>
                                        </td>
                                        <td class="view-message view-message">
                                            <a href="{{ URL::to('admin/view_mail') }}">Make changes as needed</a>
                                        </td>
                                        <td class="view-message inbox-small-cells">&nbsp;</td>
                                        <td class="view-message text-right">
                                            <a href="{{ URL::to('admin/view_mail') }}">June 14</a>
                                        </td>
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
    <script type="text/javascript">
    $('#slimscrollside').slimscroll({
        height: '700px',
        size: '3px',
        color: 'black',
        opacity: .3
    });
    </script>
    <script>
    $(document).ready(function() {
        $("#inbox-check #checkall").click(function() {

            if ($("#inbox-check #checkall").is(':checked')) {
                $("#inbox-check input[type=checkbox]").each(function() {
                    $(this).prop("checked", true);
                });
            } else {
                $("#inbox-check input[type=checkbox]").each(function() {
                    $(this).prop("checked", false);
                });
            }
        });
    });
    </script>
    <!-- end of page level js-->
@stop
