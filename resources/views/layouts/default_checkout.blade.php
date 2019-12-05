<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <title>
    	@section('title')
        | Mega buy
        @show
    </title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/lib.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/common.css') }}">
    <link rel="shortcut icon" href="{{asset("favicon.png")}}">

    <script type="text/javascript" src="{{ asset('assets/js/frontend/lib.js') }}"></script>
    <script src="{{ asset('assets/jquery.validate.js') }}" type="text/javascript"></script>
    <link href="{{asset("assets/swal/css/waves.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/swal/css/animate.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/swal/css/sweetalert.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/swal/css/all-themes.css")}}" rel="stylesheet" />
    <script src="{{asset('assets/swal/js/waves.js')}}"></script>
    <script src="{{asset('assets/swal/js/sweetalert-dev.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/common.js') }}"></script>
    <!--end of global css-->
    <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->
</head>
<script>
    var root_path = "{{url("/")}}";
    var _token =  "{{ csrf_token() }}";
</script>
<body>

    
    <!-- slider / breadcrumbs section -->
    @yield('top')

    <!-- Content -->
    @yield('content')

    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!--global js starts-->
    <script type="text/javascript" src="{{ asset('assets/js/frontend/lib.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/common.js') }}"></script>

    <!--global js end-->
    <!-- begin page level js -->
    @yield('footer_scripts')
    <!-- end page level js -->
</body>

</html>
