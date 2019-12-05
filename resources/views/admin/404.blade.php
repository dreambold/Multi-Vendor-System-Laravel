<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>404 page | Josh Admin Template</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- global level js-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- end of globallevel js-->
    <!-- page level styles-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/404.css') }}"/>
    <!-- end of page level styles-->
</head>

<body>
    <div id="animate" class="row">
        <div class="number">4</div>
        <div class="icon"> <i class="livicon" data-name="pacman" data-size="105" data-c="#f6c500" data-hc="#f1b21d" data-eventtype="click" data-iteration="15"></i>
        </div>
        <div class="number">4</div>

    </div>
    <div class="hgroup">
        <h1>Page Not Found</h1>
        <h2>It seems that page you are looking for no longer exists.</h2>
        <a href="{{ route('admin.dashboard') }}">
            <button type="button" class="btn btn-responsive button-alignment">Home</button>
        </a>
    </div>
    <!-- global js -->
    <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!--livicons-->
    <script src="{{ asset('assets/js/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/js/livicons-1.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/holder.js') }}"></script>
    <!-- end of global js -->
    <!-- begining of page level js-->
    <script src="{{ asset('assets/js/404.js') }}"></script>
    <!-- end of page level js-->
</body>
</html>
