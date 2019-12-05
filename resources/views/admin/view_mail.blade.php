@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
View Mail
@parent
@stop

{{-- page level styles --}}
@section('header_styles')    
    <!--page level css starts here-->
	<link href="{{ asset('assets/css/pages/mail_box.css') }}" rel="stylesheet" type="text/css" />
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>Single Mail</h1>
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
                    <li class="active">Single Mail</li>
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
                                                    <strong>Single Mail</strong>
                                                </h4>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="4">
                                            <div class="row no-padding">
                                                <div class="col-md-7 col-lg-9 col-xs-12">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-toolbar" data-toggle="tooltip" data-placement="top" title="Inbox">
                                                            <i class="livicon" data-n="message-in" data-c="#418bca" data-s="28"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-toolbar" data-toggle="tooltip" data-placement="top" title="Delete Message">
                                                            <i class="livicon" data-n="message-remove" data-c="#f56954" data-s="28"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-toolbar" data-toggle="tooltip" data-placement="top" title="Flag">
                                                            <i class="livicon" data-n="message-flag" data-c="#01BC8C" data-s="28"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default  btn-toolbar" data-toggle="tooltip" data-placement="top" title="Reload">
                                                            <i class="livicon" data-n="refresh" data-s="28" data-c="#F89A14"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-lg-3 col-xs-12">
                                                    <div class="pull-right">
                                                        <ul class="pagination no-padding">
                                                            <li class="">
                                                                <a href="#">&laquo;</a>
                                                            </li>
                                                            <li>
                                                                <a>1 of 228</a>
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
                                    <tr>
                                        <td colspan="4">
                                            <div>
                                                <div class="col-md-2 col-lg-1 col-sm-2 col-xs-3">
                                                    <a href="#">
                                                        <img data-src="holder.js/42x42/#000:#fff" class="img-responsive" alt="riot" />
                                                    </a>
                                                </div>
                                                <div col-xs-11>
                                                    <a href="#" class="graytext">
                                                        <strong>Riot Zeast Captain</strong>
                                                        <br>&lt;riot@joshadmin.com&gt;</a>
                                                </div>
                                                <div>10 June 2014</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <strong>New server for datacenter needed</strong>
                                                    <br>
                                                    <p>
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                    </p>
                                                    <p>
                                                        Remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="images">
                                            <div class="col-md-6 col-lg-3 col-sm-6 col-xs-8">
                                                <br>
                                                <a href="#">
                                                    <img data-src="holder.js/153x114/#000:#fff" class="img-responsive" alt="riot" />
                                                </a>
                                                <div class=" nopadmar">
                                                    <br>
                                                    <div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 no-padding">
                                                        <button type="button" class="btn btn-success btn-sm">View</button>
                                                    </div>
                                                    <div class="col-md-6 col-sm-3 col-lg-6 col-xs-4 margin_left">
                                                        <button type="button" class="btn btn-success btn-sm">Download</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-sm-6 col-xs-8">
                                                <br>
                                                <a href="#">
                                                    <img data-src="holder.js/153x114/#000:#fff" class="img-responsive" alt="riot" />
                                                </a>
                                                <div class=" nopadmar">
                                                    <br>
                                                    <div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 no-padding">
                                                        <button type="button" class="btn btn-success btn-sm">View</button>
                                                    </div>
                                                    <div class="col-md-6 col-sm-3 col-lg-6 col-xs-4 margin_left">
                                                        <button type="button" class="btn btn-success btn-sm">Download</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-sm-6 col-xs-8">
                                                <br>
                                                <a href="#">
                                                    <img data-src="holder.js/153x114/#000:#fff" class="img-responsive" alt="riot" />
                                                </a>
                                                <div class=" nopadmar">
                                                    <br>
                                                    <div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 no-padding">
                                                        <button type="button" class="btn btn-success btn-sm">View</button>
                                                    </div>
                                                    <div class="col-md-6 col-sm-3 col-lg-6 col-xs-4 margin_left">
                                                        <button type="button" class="btn btn-success btn-sm">Download</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-sm-6 col-xs-8">
                                                <br>
                                                <a href="#">
                                                    <img data-src="holder.js/153x114/#000:#fff" class="img-responsive" alt="riot" />
                                                </a>
                                                <div class=" nopadmar">
                                                    <br>
                                                    <div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 no-padding">
                                                        <button type="button" class="btn btn-success btn-sm">View</button>
                                                    </div>
                                                    <div class="col-md-6 col-sm-3 col-lg-6 col-xs-4 margin_left">
                                                        <button type="button" class="btn btn-success btn-sm">Download</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="nopadmar">
                                                    <div class="col-xs-6 col-sm-4 no-padding col-md-3 col-lg-2">
                                                        <a href="{{ URL::to('admin/reply') }}" class="btn btn-sm btn-primary">
                                                            <span class="livicon" data-n="redo" data-s="12" data-c="white" data-hc="white"></span>
                                                            &nbsp;&nbsp;Reply
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-4 no-padding col-md-3 col-lg-2">
                                                        <a href="{{ URL::to('admin/forward') }}" class="btn btn-sm btn-success">
                                                            <span class="livicon" data-n="upload" data-s="12" data-c="white" data-hc="white"></span>
                                                            &nbsp;&nbsp;Forward
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                                        <a href="{{ URL::to('admin/inbox') }}" class="btn btn-sm btn-warning">
                                                            <span class="livicon" data-n="trash" data-s="12" data-c="white" data-hc="white"></span>
                                                            &nbsp;&nbsp;Discard
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
@stop
