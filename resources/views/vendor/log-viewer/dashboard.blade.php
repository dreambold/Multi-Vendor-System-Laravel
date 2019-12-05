@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Logger View
    @parent
@stop
@section('header_styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/log_viewer.css') }}">
<link href="{{ asset('assets/vendors/sweetalert/css/sweetalert.css') }}" rel="stylesheet"/>
@stop
@section('content')

    <section class="content-header">
        <h1>Logger Views</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    @lang('general.dashboard')
                </a>
            </li>
            <li class="active">Logger view</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <!--main content-->
        <div class="row">
                <div class="col-xs-12">

                <div class="panel panel-primary">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title pull-left">
                            <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Logger View
                        </h4>
                        <div class="pull-right">
                            <a href="{{  URL::to('admin/log_viewers/logs') }}" class="btn btn-sm btn-default m-r-5"><span class="glyphicon glyphicon-plus"></span> Logs</a>
                            <span class=" clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            @if(($percents))
                                <div class="col-lg-3 col-sm-5">
                                    <canvas id="stats-doughnut-chart" height="300" width="300px"></canvas>
                                </div>
                                <div class="col-lg-9  col-sm-7">
                                    <section class="box-body">
                                        <div class="row">
                                            @foreach($percents as $level => $item)
                                                <div class="col-lg-4 col-md-12  ">
                                                    <div class="info-box level level-{{ $level }} {{ $item['count'] === 0 ? 'level-empty' : '' }}">
                                <span class="info-box-icon">
                                    {!! log_styler()->icon($level) !!}
                                </span>

                                                        <div class="info-box-content">
                                                            <span class="info-box-text">{{ $item['name'] }}</span>
                                                            <span class="info-box-number">
                                        {{ $item['count'] }} entries - {!! $item['percent'] !!} %
                                    </span>
                                                            <div class="progress">
                                                                <div class="progress-bar" style="width: {{ $item['percent'] }}%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </section>
                                </div>
                                @else
                                <h4>Currently there is no logs </h4>
                            @endif
                        </div>
                    </div>
                </div>
                </div>
        </div>
        <!--main content ends-->
    </section>
@endsection

@section('footer_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/sweetalert/js/sweetalert.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/sweetalert/js/sweetalert-dev.js') }}"></script>
    <script>
        Chart.defaults.global.responsive      = true;
        Chart.defaults.global.scaleFontFamily = "'Source Sans Pro'";
        Chart.defaults.global.animationEasing = "easeOutQuart";
    </script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: '{{ url('admin/log_viewers/logcheck') }}',
                type: 'GET',

                success: function (result) {
                    console.log(result);
                    if (result.status == false) {
                        swal({
                            title: 'error',
                            text: result.message,
                            type: "error",
                            closeOnConfirm: false,
                            showLoaderOnConfirm: true
                        });
                    }
                }
            });
        });
        $(function() {
            new Chart($('canvas#stats-doughnut-chart'), {
                type: 'doughnut',
                data: {!! $chartData !!},
                options: {
                    legend: {
                        position: 'bottom'
                    }
                }
            });
        });

    </script>
@endsection
