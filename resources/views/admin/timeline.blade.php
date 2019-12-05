@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Timeline
@parent
@stop

{{-- page level styles --}}
@section('header_styles')    
    
	<link href="{{ asset('assets/css/pages/timeline.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/pages/timeline2.css') }}" rel="stylesheet" />
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Timeline</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">UI Components</a>
                    </li>
                    <li class="active">Timeline</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <!--main content-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="share" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Timeline
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!--timeline-->
                                <div class="row">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge">
                                                <i class="livicon" data-name="users" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                                            </div>
                                            <div class="timeline-panel" style="display:inline-block;">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">We are a multi national company now</h4>
                                                    <p>
                                                        <small class="text-muted">
                                                            <i class="livicon" data-name="bell" data-c="#F89A14" data-hc="#F89A14" data-size="18" data-loop="true"></i>
                                                            11 hours ago via Twitter
                                                        </small>
                                                    </p>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>
                                                        Lorem Ipsum is simply dummy, vidis lio, in elementis mé pra quem é amistosis quis leo..
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-inverted">
                                            <div class="timeline-badge danger">
                                                <i class="livicon" data-name="trophy" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">We won best website award</h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Lorem Ipsum is simply dummy, vidis litro abertis.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-badge info">
                                                <i class="livicon" data-name="user" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">Hired our first employee</h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>
                                                        Lorem Ipsum is simply dummy, vidis litro abertis. Consetis adipiscings elitis. Pra uium u num gostis.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-inverted">
                                            <div class="timeline-badge  ">
                                                <i class="livicon" data-name="home" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">Rented an office space</h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>
                                                        Lorem Ipsum is simply dummy, vidis litro abertis. Cais bolis eu num gostis.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-badge primary">
                                                <i class="livicon" data-name="hammer" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">Planning to open an office</h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>
                                                        Lorem Ipsum is simply dummy, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, s mé pra quem é amistosis.
                                                    </p>
                                                    <hr>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                                            <i class="livicon" data-name="gear" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="#">Action</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Another action</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Something else here</a>
                                                            </li>
                                                            <li class="divider"></li>
                                                            <li>
                                                                <a href="#">Separated link</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--timeline ends-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--timeline2-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="sky-dish" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Timeline 2
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <ul class="timeline2">
                                        <li>
                                            <div class="timeline2-badge">
                                                <a>
                                                    <i class="glyphicon glyphicon-record invert" rel="tooltip" title="7Hours ago via Facebook"></i>
                                                </a>
                                            </div>
                                            <div class="timeline2-panel">
                                                <div class="timeline2-body">
                                                    <p>I Proposed and She said......</p>
                                                </div>
                                                <div class="timeline2-footer">
                                                    <a>
                                                        <i class="livicon" data-name="thumbs-up" data-loop="true" data-color="#337ab7" data-hovercolor="#23528E" data-size="14"></i>
                                                    </a>
                                                    <a>
                                                        <i class="livicon" data-name="share" data-loop="true" data-color="#337ab7" data-hovercolor="#23527c" data-size="14"></i>
                                                    </a>
                                                    <a href="#" class="pull-right">Read more</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline2-inverted">
                                            <div class="timeline2-badge">
                                                <a>
                                                    <i class="glyphicon glyphicon-record invert" rel="tooltip" title="2 Days ago via Facebook"></i>
                                                </a>
                                            </div>
                                            <div class="timeline2-panel">
                                                <div class="timeline2-heading">
                                                    <img data-src="holder.js/580x160/#00BC8C:#fff" class='img-responsive' alt="image">
                                                </div>
                                                <div class="timeline2-body">
                                                    <p>We went out for Dinner and then long Drive</p>
                                                </div>
                                                <div class="timeline2-footer">
                                                    <a>
                                                        <i class="livicon" data-name="thumbs-up" data-loop="true" data-color="#337ab7" data-hovercolor="#23528E" data-size="14"></i>
                                                    </a>
                                                    <a>
                                                        <i class="livicon" data-name="share" data-loop="true" data-color="#337ab7" data-hovercolor="#23527c" data-size="14"></i>
                                                    </a>
                                                    <a href="#" class="pull-right">Read more</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline2-badge">
                                                <a>
                                                    <i class="glyphicon glyphicon-record" rel="tooltip" title="5 Days ago via Facebook"></i>
                                                </a>
                                            </div>
                                            <div class="timeline2-panel">
                                                <div class="timeline2-heading">
                                                    <img data-src="holder.js/580x160/#418bca:#fff" class='img-responsive' alt="image">
                                                </div>
                                                <div class="timeline2-body">
                                                    <p>I asked her contact number and She Gave IT!!</p>
                                                </div>
                                                <div class="timeline2-footer">
                                                    <a>
                                                        <i class="livicon" data-name="thumbs-up" data-loop="true" data-color="#337ab7" data-hovercolor="#23528E" data-size="14"></i>
                                                    </a>
                                                    <a>
                                                        <i class="livicon" data-name="share" data-loop="true" data-color="#337ab7" data-hovercolor="#23527c" data-size="14"></i>
                                                    </a>
                                                    <a href="#" class="pull-right">Read more</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline2-inverted">
                                            <div class="timeline2-badge">
                                                <a>
                                                    <i class="glyphicon glyphicon-record invert" rel="tooltip" title="6 Days ago via Facebook"></i>
                                                </a>
                                            </div>
                                            <div class="timeline2-panel">
                                                <div class="timeline2-body">
                                                    <p>I asked her for a cup of coffee and She said Yes!!</p>
                                                </div>
                                                <div class="timeline2-footer">
                                                    <a>
                                                        <i class="livicon" data-name="thumbs-up" data-loop="true" data-color="#337ab7" data-hovercolor="#23528E" data-size="14"></i>
                                                    </a>
                                                    <a>
                                                        <i class="livicon" data-name="share" data-loop="true" data-color="#337ab7" data-hovercolor="#23527c" data-size="14"></i>
                                                    </a>
                                                    <a href="#" class="pull-right">Read more</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline2-badge">
                                                <a>
                                                    <i class="glyphicon glyphicon-record" rel="tooltip" title="7 Days ago via Facebook"></i>
                                                </a>
                                            </div>
                                            <div class="timeline2-panel">
                                                <div class="timeline2-heading">
                                                    <img data-src="holder.js/580x160/#5bc0de:#fff" class='img-responsive' alt="image">
                                                </div>
                                                <div class="timeline2-body">
                                                    <p>She accepted my friend Request on facebook</p>
                                                </div>
                                                <div class="timeline2-footer">
                                                    <a>
                                                        <i class="livicon" data-name="thumbs-up" data-loop="true" data-color="#337ab7" data-hovercolor="#23528E" data-size="14"></i>
                                                    </a>
                                                    <a>
                                                        <i class="livicon" data-name="share" data-loop="true" data-color="#337ab7" data-hovercolor="#23527c" data-size="14"></i>
                                                    </a>
                                                    <a href="#" class="pull-right">Read more</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline2-inverted">
                                            <div class="timeline2-badge">
                                                <a>
                                                    <i class="glyphicon glyphicon-record invert" rel="tooltip" title="9 Days ago via Facebook"></i>
                                                </a>
                                            </div>
                                            <div class="timeline2-panel">
                                                <div class="timeline2-heading">
                                                    <img data-src="holder.js/580x160/#00bc8c:#fff" class='img-responsive' alt="image">
                                                </div>
                                                <div class="timeline2-body">
                                                    <p>I said HI she too said HI</p>
                                                </div>
                                                <div class="timeline2-footer">
                                                    <a>
                                                        <i class="livicon" data-name="thumbs-up" data-loop="true" data-color="#337ab7" data-hovercolor="#23528E" data-size="14"></i>
                                                    </a>
                                                    <a>
                                                        <i class="livicon" data-name="share" data-loop="true" data-color="#337ab7" data-hovercolor="#23527c" data-size="14"></i>
                                                    </a>
                                                    <a href="#" class="pull-right">Read more</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline2-badge">
                                                <a>
                                                    <i class="glyphicon glyphicon-record invert" rel="tooltip" title="11 Days ago via Facebook"></i>
                                                </a>
                                            </div>
                                            <div class="timeline2-panel">
                                                <div class="timeline2-body">
                                                    <p>I Smile at her and she smiled Back</p>
                                                </div>
                                                <div class="timeline2-footer">
                                                    <a>
                                                        <i class="livicon" data-name="thumbs-up" data-loop="true" data-color="#337ab7" data-hovercolor="#23528E" data-size="14"></i>
                                                    </a>
                                                    <a>
                                                        <i class="livicon" data-name="share" data-loop="true" data-color="#337ab7" data-hovercolor="#23527c" data-size="14"></i>
                                                    </a>
                                                    <a href="#" class="pull-right">Read more</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix" style="float: none;"></li>
                                    </ul>
                                </div>
                                <!--timeline ends-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--main content ends-->
            </section>
            <!-- content -->
        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    
    <script type="text/javascript">
    $(document).ready(function() {
        var my_posts = $("[rel=tooltip]");

        var size = $(window).width();
        for (i = 0; i < my_posts.length; i++) {
            the_post = $(my_posts[i]);

            if (the_post.hasClass('invert') && size >= 767) {
                the_post.tooltip({
                    placement: 'left'
                });
                the_post.css("cursor", "pointer");
            } else {
                the_post.tooltip({
                    placement: 'rigth'
                });
                the_post.css("cursor", "pointer");
            }
        }
    });
    </script>
    
@stop
