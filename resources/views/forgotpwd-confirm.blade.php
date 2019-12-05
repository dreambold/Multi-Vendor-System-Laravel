<!DOCTYPE html>
<html>
<head>
    {{--<meta charset="utf-8">--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot_password | Welcome to Josh Frontend</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <!--end of global css-->
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/forgot.css') }}">
    <!--end of page level css-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="box animation flipInX">
            <img src="{{ asset('assets/images/josh-new.png') }}" alt="logo" class="img-responsive mar">
            <h3 class="text-primary">Reset your Password</h3>
            <p>Enter your new password details</p>
            <div id="notific">
            @include('notifications')
            </div>
            <form action="{{ route('forgot-password-confirm',compact(['userId','passwordResetCode'])) }}" class="omb_loginForm pwd_validation"  autocomplete="off" method="POST">
                {!! Form::token() !!}
                <label class="sr-only"> New Password</label>
                <input type="password" class="form-control" name="password" placeholder="New Password">
                <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                <label class="sr-only">Confirm Password</label>
                <input type="password" class="form-control mt-15" name="password_confirm" placeholder="Confirm New Password">
                <span class="help-block">{{ $errors->first('password_confirm', ':message') }}</span>
                <input type="submit" class="btn btn-block btn-primary" value="Submit to Reset Password" style="margin-top:10px;">
            </form>
        </div>
    </div>
</div>
<!--global js starts-->
<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!--global js end-->
</body>
</html>
