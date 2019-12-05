<!DOCTYPE html>
<html>

<head>
    <title>Register | Josh Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <link href="{{ asset('assets/css/pages/login2.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendors/iCheck/css/minimal/blue.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
    <!-- styles of the page ends-->
</head>

<body>
<div class="container">
    <div class="row vertical-offset-100">
        <div class=" col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Register</h3>
                </div>
                <div class="panel-body">
                    <!-- display all errors here -->
                    <form accept-charset="UTF-8" id="register_here" role="form" action="{{ route('register2') }}" method="post">
                        <!-- CSRF Token -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <fieldset>
                            <div class="form-group {{ $errors->first('first_name', 'has-error') }}">
                                <div class=" input-group ">
                                    <div class="input-group-addon">
                                        <i class="livicon" data-name="user" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                    </div>
                                    <input class="form-control" placeholder="First Name" name="first_name" type="text"
                                           value="{!! old('first_name') !!}"/>
                                </div>
                                {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
                            </div>
                            <div class="form-group  {{ $errors->first('last_name', 'has-error') }}">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="livicon" data-name="user" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                    </div>
                                    <input class="form-control" placeholder="Last Name" name="last_name" type="text"
                                           value="{!! old('last_name') !!}"/>
                                </div>
                                {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
                            </div>
                            <div class="form-group  {{ $errors->first('email', 'has-error') }}">
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i class="livicon" data-name="mail" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                    </div>
                                    <input class="form-control" placeholder="E-mail" name="email" type="email"
                                           value="{!! old('email') !!}"/>
                                </div>
                                {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                            </div>
                            <div class="form-group  {{ $errors->first('email_confirm', 'has-error') }}">
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i class="livicon" data-name="mail" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                    </div>
                                    <input class="form-control" placeholder="Confirm E-mail" name="email_confirm"
                                           type="email" value="{!! old('email_confirm') !!}"/>
                                </div>
                                {!! $errors->first('email_confirm', '<span class="help-block">:message</span>') !!}
                            </div>
                            <div class="form-group  {{ $errors->first('password', 'has-error') }}">
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i class="livicon" data-name="key" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                    </div>
                                    <input class="form-control" placeholder="Password" name="password" type="password"
                                           value="{!! old('password') !!}"/>
                                </div>
                                {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                            </div>
                            <div class="form-group  {{ $errors->first('password_confirm', 'has-error') }}">
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i class="livicon" data-name="key" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                    </div>
                                    <input class="form-control" placeholder="Confirm Password" name="password_confirm"
                                           type="password" value="{!! old('password_confirm') !!}"/>
                                </div>
                                {!! $errors->first('password_confirm', '<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group">
                                <label>
                                    <input id="activate" name="activate" type="checkbox" value="1"
                                           class="minimal-blue" {!! old('terms')?"checked='checked'":"" !!}>
                                    I agree for terms & conditions
                                </label>
                            </div>
                            <input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js-->
<script src="{{ asset('assets/js/TweenLite.min.js') }}"></script>
<script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/pages/register2.js') }}" type="text/javascript"></script>
<!-- end of page level js-->
</body>
</html>