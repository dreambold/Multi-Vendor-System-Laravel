@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Form Validation
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('assets/css/pages/form2.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/pages/form3.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
    <!-- include the BotDetect layout stylesheet -->

    <style>
        .iti-flag {
            background-image: url("{{ asset('assets/vendors/intl-tel-input/flags.png') }}");
        }
        @media (max-width: 992px){
            .form-horizontal .control-label {
                text-align: left;
            }
            }
    </style>
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Form Validations</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="#">Forms</a>
            </li>
            <li class="active">Form Validations</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <!--main content-->
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="wrench" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Registration Validation
                        </h3>
                                <span class="pull-right clickable">
                                        <i class="glyphicon glyphicon-chevron-up"></i>
                                    </span>
                    </div>
                    <div class="panel-body">
                        <form method="post" id="example-form">
                            <div class="form-group">
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    Press tab for validation after entering input.
                                </div>
                                <label for="validate-text">Validate Text</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="validateText" id="validate-text" placeholder="Enter Validate Text" required>
                                            <span class="input-group-addon danger">
                                                    <span class="glyphicon glyphicon-remove"></span>
                                            </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="validate-optional">Optional</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="validate-optional" id="validate-optional" placeholder="Optional">
                                            <span class="input-group-addon info">
                                                    <span class="glyphicon glyphicon-asterisk"></span>
                                            </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="validate-email">Validate Email</label>
                                <div class="input-group" data-validate="email">
                                    <input type="text" class="form-control" name="validateEmail" id="validate-email" placeholder="Enter Validate Email" required>
                                            <span class="input-group-addon danger">
                                                    <span class="glyphicon glyphicon-remove"></span>
                                            </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="validate-phone">Validate Phone Number</label>
                                <div class="input-group" data-validate="phone">
                                    <input type="text" class="form-control" name="validatePhone" id="validate-phone" placeholder="(814) 555-1234" required>
                                            <span class="input-group-addon danger">
                                                    <span class="glyphicon glyphicon-remove"></span>
                                            </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="validate-length">Maximum Length</label>
                                <div class="input-group" data-validate="length" data-length="5">
                                    <input type="text" class="form-control" name="validateLength" id="validate-length" maxlength="5" placeholder="Maximum length 5 characters" required>
                                            <span class="input-group-addon danger">
                                                    <span class="glyphicon glyphicon-remove"></span>
                                            </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="validate-select">Validate Select</label>
                                <div class="input-group">
                                    <select class="form-control" name="validate-select" id="validate-select" required>
                                        <option value="">Select an item</option>
                                        <option value="item_1">Item 1</option>
                                        <option value="item_2">Item 2</option>
                                        <option value="item_3">Item 3</option>
                                    </select>
                                            <span class="input-group-addon danger">
                                                    <span class="glyphicon glyphicon-remove"></span>
                                            </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="validate-number">Validate Number</label>
                                <div class="input-group" data-validate="phone">
                                    <input type="text" class="form-control" name="validate-number" id="validate-number" placeholder="Validate Number" required>
                                            <span class="input-group-addon danger">
                                                    <span class="glyphicon glyphicon-remove"></span>
                                            </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="search" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Form Validation
                        </h3>
                                <span class="pull-right clickable">
                                        <i class="glyphicon glyphicon-chevron-up"></i>
                                    </span>
                    </div>
                    <div class="panel-body">
                        <form method="get" name="frmOnline" id='form_validation' onsubmit="return Validation()" enctype="multipart/form-data" action="#">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="txtName" id="txtName" class="form-control input-md" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="last_name" id="txtlastname" class="form-control input-md" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="txtEmail" id="txtEmail" class="form-control input-md" placeholder=" Email Address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="display_name" id="txtAddress1" class="form-control input-md" placeholder="Address line1">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="display_name1" id="txtAddress2" class="form-control input-md" placeholder="Address line2">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="e1" class="control-label">Select Your State</label>
                                    <select id="e1" class="form-control select2" name="select_state">
                                        <option value="">Select a State</option>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="txtPhone" id="txtPhone" class="form-control input-md" placeholder="Your phone number">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-8">
                                    <label class="padding7" for="activate">
                                        <input class="custom_icheck custom-checkbox pos-rel p-l-30" type="checkbox" id="activate" name="activate">&nbsp;I agree</label>
                                </div>
                            </div>
                            <div class="col-md-12 mar-10">
                                <div class="col-xs-6 col-md-6">
                                    <input type="submit" name="btnSubmit" id="btnSubmit" value="Register" class="btn btn-primary btn-block btn-md btn-responsive">
                                </div>
                                <div class="col-xs-6 col-md-6">
                                    <input type="button" value="Reset" id="reset" class=" btn btn-success btn-block btn-md btn-responsive">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Password Validation
                        </h3>
                                <span class="pull-right clickable">
                                        <i class="glyphicon glyphicon-chevron-up"></i>
                                    </span>
                    </div>
                    <div class="panel-body">
                        <form method="post" id="passwordForm">
                            <input type="password" class="input-md form-control" name="password1" id="password1" placeholder="New Password" autocomplete="off">
                            <div class="row">
                                <div class="col-sm-6 padding">
                                    <span id="8char" class="glyphicon glyphicon-remove color-pwd"></span> 8 Characters Long
                                    <br>
                                    <span id="ucase" class="glyphicon glyphicon-remove color-pwd"></span> One Uppercase Letter
                                </div>
                                <div class="col-sm-6 padding">
                                    <span id="lcase" class="glyphicon glyphicon-remove color-pwd"></span> One Lowercase Letter
                                    <br>
                                    <span id="num" class="glyphicon glyphicon-remove color-pwd"></span> One Number
                                </div>
                            </div>
                            <input type="password" class="input-md form-control" name="password2" id="password2" placeholder="Repeat Password" autocomplete="off">
                            <div class="row">
                                <div class="col-sm-12 padding">
                                    <span id="pwmatch" class="glyphicon glyphicon-remove color-pwd"></span> Passwords Match
                                </div>
                            </div>
                            <div class="col-sm-12 mar-25">
                                <a href="#" class="col-xs-12 btn btn-primary btn-load btn-md" role="button">Change Password
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Form Validation in Modal
                        </h3>
                                <span class="pull-right clickable">
                                        <i class="glyphicon glyphicon-chevron-up"></i>
                                    </span>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <button type="button" class="btn btn-primary btn-lg center-block" data-toggle="modal" data-target="#myModal">
                                Click to open form in modal
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close resetModal" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Form Modal</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" id="form-validation3">

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" name="first_name" id="first_name" class="form-control input-md" placeholder="First Name" tabindex="1" data-error="First name must be entered" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" name="last_name" id="last_name" class="form-control input-md" placeholder="Last Name" tabindex="2" data-error="Last name must be entered" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" name="display_name" id="display_name" class="form-control input-md" placeholder="Display Name" tabindex="3" data-error="Username must be enetered" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control input-md" placeholder="Email Address" tabindex="4" data-error="that email address is invalid" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <input type="password" name="password" id="password" class="form-control input-md" placeholder="Password" tabindex="5" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <input type="password" name="confirmpassword" class="form-control input-md" placeholder="Confirm Password" data-match="#password" data-match-error="conform passwork should be same as password" tabindex="6" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="checkbox">
                                                                <label for="terms">
                                                                    <input type="checkbox" name="terms" id="terms" class="custom-checkbox"> I Agree
                                                                </label>
                                                            </div>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p class="margin-top">
                                                            By clicking on the
                                                            <strong class="label label-primary">Register</strong> , you agree the following
                                                            <a href="#">Terms and Conditions</a>
                                                            liability as set out in this site, including our Cookie Use.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row marginTop">
                                                    <div class="col-xs-6 col-md-6">
                                                        <input type="submit" id="btncheck" value="Register" class="btn btn-primary btn-block btn-md btn-responsive" tabindex="7">
                                                    </div>
                                                    <div class="col-xs-6 col-md-6">
                                                        <a class="btn btn-danger btn-block btn-md btn-responsive resetModal" >Reset</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </div>
                    </div>
                </div>
                <!--image upload -->
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="pacman" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Validation
                        </h3>
                                <span class="pull-right clickable">
                                        <i class="glyphicon glyphicon-chevron-up"></i>
                                    </span>
                    </div>
                    <div class="panel-body">
                        <form id="tryitForm" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Full name</label>
                                <div class="col-md-4 col-xs-6 col-sm-6">
                                    <input type="text" class="form-control" name="firstName" placeholder="Enter First Name" />
                                </div>
                                <div class="col-md-4 col-xs-6 col-sm-6">
                                    <input type="text" class="form-control" name="lastName" placeholder="Enter Last Name" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Email Address</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="email" placeholder="Enter Email Address" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Gender</label>
                                <div class="col-md-6">
                                    <div class="radio" style="padding-left:0;">
                                        <label>
                                            <input type="radio" class="custom-radio" name="gender" value="other" />&nbsp; Other
                                        </label>
                                    </div>
                                    <div class="radio " style="padding-left:0;">
                                        <label>
                                            <input type="radio" class="custom-radio" name="gender" value="male" />&nbsp; Male
                                        </label>
                                    </div>
                                    <div class="radio" style="padding-left:0;">
                                        <label>
                                            <input type="radio" class="custom-radio" name="gender" value="female" />&nbsp; Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-8">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!--row ends-->
    </section>
    <!-- content -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')

    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('assets/js/pages/validation.js') }}" type="text/javascript"></script>
@stop
