@extends('layouts/default_login')
@section('title')
    Login
    @parent
@stop

@section('content')
    <div class = "login-wrapper">
        <div class = "text-center">
            <h2 class = "title">Login</h2>
        </div>
        <div class = "text-center">
            <span class = "font-16">Sign in to Mega Buy or <a class = "color-blue" href = "{{url("/register")}}">create acount</a></span>
        </div>
        <div id="notific">
            @include('notifications')
        </div>
        <form action="{{ route('login') }}" class="omb_loginForm"  autocomplete="off" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class = "row mt-10">
                <div class = "col-lg-6 col-xs-12" style = "border-right: 1px solid #e2e2e2;">
                    <div class="form-group">
                        <label for="defaultconfig" class="control-label">
                            Email or username
                        </label>
                        <input type = "email" name = "email" class="form-control input-border-bottom" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="defaultconfig" class="control-label">
                            password
                        </label>
                        <input type = "password"  name = "password" class="form-control input-border-bottom" placeholder="Password">

                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <div class="form-group text-center hidden">
                        <a href = "#" class = "color-blue">Text a temporary password</a>
                    </div>
                    <div class="form-group text-center hidden">
                        <a href = "#" class = "color-blue">reset password</a>
                    </div>
                </div>
                <div class = "col-lg-6 col-xs-12 " style = "margin-top:100px;">
                    <div class="form-group">
                        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                            Facebook</a>
                    </div>
                    <div class = "form-group">
                        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                            Google+</a>
                    </div>
                </div>
            </div>
        </form>
        <div class = "row text-center hidden">
            <input type = "checkbox" style = "width:20px;"/> Stay signed if
        </div>
        <div class = "row text-center hidden">
            <span>Using a public or shared device?</span>
        </div>
        <div class = "row text-center hidden">
            <span>Uncheck to protect your account. <a href = "#">Learn more</a></span>
        </div>
    </div>
@stop