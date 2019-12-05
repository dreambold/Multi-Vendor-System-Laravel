@extends('layouts/default_login')
@section('title')
    Login
    @parent
@stop

@section('content')
    <div class = "login-wrapper">
        <div id="notific">
            @include('notifications')
        </div>
        <div class = "text-center">
            <h2 class = "title">Create an account</h2>
        </div>
        <div class = "text-center">
            <span class = "font-16">Have a business?<a class = "color-blue" href = "{{url("/register_business")}}">create business account</a></span>
        </div>
        <form action = "{{url("/register")}}" method = "post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class = "row mt-10">
            <div class = "col-lg-6 col-xs-12" style = "border-right: 1px solid #e2e2e2;">
                <div class = "row">
                    <div class = "col-lg-6">
                        <input name = "first_name" class="form-control input-border-bottom" placeholder="First name"/>
                        {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class = "col-lg-6">
                        <input  name = "last_name" class="form-control input-border-bottom" placeholder="Last name"/>
                        {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
                <div class="form-group mt-10">
                    <input name = "email"  class="form-control input-border-bottom" placeholder="Email">
                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                </div>
                <div class = "row">
                    <div class = "col-lg-6">
                        <input name = "verify_code" class="form-control input-border-bottom" placeholder="Verify code"/>
                        {!! $errors->first('verify_code', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class = "col-lg-6">
                        <button type="button" onclick = "sendVerifyCode()" class="btn btn-primary btn-block btn-flat">send</button>
                    </div>
                </div>
                <div class="form-group mt-10" style = "position:relative;">
                    <input type = "password" name ="password"  class="form-control input-border-bottom" placeholder="Password">
                    {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                    <div class = "hidden" style = "position:absolute; right:0px; display:inline-block; top:8px;">
                        <input type = "checkbox"/>show
                    </div>
                </div>
                <div class="form-group mt-10" style = "position:relative;">
                    <input type = "password"  name = "password_confirm" class="form-control input-border-bottom" placeholder="Confirm Password">
                    {!! $errors->first('password_confirm', '<span class="help-block">:message</span>') !!}
                </div>

                <div class="form-group text-center">
                    <span>
                        By creating an account, you agree to our <a href = "#" class = "color-blue"> User Agreement </a> and acknowledge reading our <a href = "#" class = "color-blue"> User Privacy Notice </a>
                    </span>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Create account</button>
                </div>
            </div>
            <div class = "col-lg-6 col-xs-12 " style = "margin-top:100px;">
                <div class="form-group">
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Continue with
                        Facebook</a>
                </div>
                <div class = "form-group">
                    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Continue with
                        Google+</a>
                </div>
            </div>
        </div>
        <div class = "row text-center">
            <span>Already a member ? <a href = "{{url("/login")}}">Sign in</a></span>
        </div>
        </form>
    </div>
    <script>
        function sendVerifyCode(){
            var param = new Object();
            param._token = _token;
            var email = $("input[name='email']").val();
            if(email == ""){
                errorMsg("please input email");
                return;
            }
            if(!checkEmail(email)){
                errorMsg("incorrect email format");
                return;
            }
            param.email = email;
            var url = "{{url("/send_email")}}";
            $.post(url, param, function(data){
                if(data.status == "1"){
                    successMsg("send mail success! Do you wait receive mail.");
                    return;
                }
            }, "json");
        }
    </script>
@stop