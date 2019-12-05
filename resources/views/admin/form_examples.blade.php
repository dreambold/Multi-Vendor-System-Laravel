@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Form Examples
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
@stop
{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Form Examples</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Forms</a>
            </li>
            <li class="active">Form Examples</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <!--main content-->
        <div class="row">
            <!--row starts-->
            <div class="col-md-6">
                <!--lg-6 starts-->
                <!--basic form starts-->
                <div class="panel panel-primary" id="hidepanel1">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Basic Form 1
                        </h3>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="#">
                            <!-- CSRF Token -->
                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">Name</label>
                                    <div class="col-md-9">
                                        <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                </div>
                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">Your E-mail</label>
                                    <div class="col-md-9">
                                        <input id="email" name="email" type="text" placeholder="Your email" class="form-control"></div>
                                </div>
                                <!-- Message body -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="message">Your message</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control resize_vertical" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">File Upload</label>
                                    <div class="col-md-9">
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput">
                                                <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                <span class="fileinput-filename"></span>
                                            </div>
                                                    <span class="input-group-addon btn btn-default btn-file">
                                                        <span class="fileinput-new">Select file</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="..."></span>
                                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Form actions -->
                                <div class="form-position">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-responsive btn-primary btn-sm">Submit</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
                <!--basic form 2 starts-->
                <div class="panel panel-info" id="hidepanel2">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="help" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Basic Form 2
                        </h3>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="#" method="">
                            <!-- CSRF Token -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <fieldset>
                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name1">E-mail Address</label>
                                    <div class="col-md-9">
                                        <input id="name1" name="name" type="text" placeholder="Enter your Email" class="form-control"></div>
                                </div>
                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="password">Password</label>
                                    <div class="col-md-9">
                                        <input id="password" name="password" type="password" placeholder="Enter your Password" class="form-control"></div>
                                </div>
                                <div class="checkbox" style="margin-left:130px;">
                                    <label>
                                        <input type="checkbox" class="custom-checkbox">&nbsp; Stay signed in</label>
                                </div>
                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-responsive btn-info btn-sm">Sign in</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <!--panel body ends--> </div>
                <!--input form starts-->
                <div class="panel panel-warning" id="hidepanel5">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Form Inputs
                        </h3>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" placeholder="User name"></div>
                            <div class="form-group input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>
                            <div class="form-group input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-eur"></i>
                                        </span>
                                <input type="text" class="form-control" placeholder="Font Awesome Icon"></div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>
                            <div class="form-group input-group">
                                <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                            </div>
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                <div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="..."></span>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--md-6 ends-->
            <div class="col-md-6">
                <!--md-6 starts-->
                <!--form control starts-->
                <div class="panel panel-success" id="hidepanel6">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="share" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Form Controls
                        </h3>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group">
                                <label>Text Input</label>
                                <input class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Text Input with Placeholder</label>
                                <input class="form-control" placeholder="Enter text"></div>
                            <div class="form-group">
                                <label>Static Control</label>
                                <p class="form-control-static">email@example.com</p>
                            </div>
                            <div class="form-group">
                                <label>Text area</label>
                                <textarea class="form-control resize_vertical" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Checkboxes</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="custom-checkbox" value="">&nbsp; Checkbox 1</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="custom-checkbox" value=""> &nbsp; Checkbox 2</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="custom-checkbox" value="">&nbsp;Checkbox 3</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Inline Checkboxes</label>
                                <label class="checkbox-inline">
                                    &nbsp;<input type="checkbox" class="custom-checkbox" >&nbsp;1</label>
                                <label class=" checkbox-inline">
                                    <input type="checkbox" class="custom-checkbox" >&nbsp;2</label>
                                <label class="checkbox-inline">
                                    <input type="checkbox"  class="custom-checkbox" >&nbsp;3</label>
                            </div>
                            <div class="form-group">
                                <label>Radio Buttons</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" class="custom-radio" id="optionsRadios1" value="option1">&nbsp; Radio 1</label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" class="custom-radio" id="optionsRadios2" value="option2">&nbsp; Radio 2</label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" class="custom-radio" id="optionsRadios3" value="option3">&nbsp; Radio 3</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Inline Radio Buttons</label>
                                <label class="radio-inline">
                                    &nbsp;<input type="radio" class="custom-radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" >&nbsp; 1</label>
                                <label class="radio-inline">
                                    <input type="radio" class="custom-radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">&nbsp;2</label>
                                <label class="radio-inline">
                                    <input type="radio"  class="custom-radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">&nbsp; 3</label>
                            </div>
                            <div class="form-group">
                                <label>Select</label>
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Multiple Selects</label>
                                <select multiple class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                    <div>
                                                <span class="btn btn-default btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="..."></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-responsive btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-responsive btn-default" id="reset">Reset Button</button>
                        </form>
                    </div>
                </div>
            </div>
            <!--md-6 ends-->
        </div>
        <div class="row">
            <div class="col-md-6">
                <!--md-6 starts-->
                <!--validation states starts-->
                <div class="panel panel-danger" id="hidepanel4">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Validation States
                        </h3>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group has-success">
                                <label class="control-label" for="inputSuccess">Input with success</label>
                                <input type="text" class="form-control" id="inputSuccess"></div>
                            <div class="form-group has-warning">
                                <label class="control-label" for="inputWarning">Input with warning</label>
                                <input type="text" class="form-control" id="inputWarning"></div>
                            <div class="form-group has-error">
                                <label class="control-label" for="inputError">Input with error</label>
                                <input type="text" class="form-control" id="inputError"></div>
                        </form>
                    </div>
                </div>
            </div>
            <!--md-6 ends-->
            <div class="col-md-6">
                <div class="panel panel-default" id="hidepanel3">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="leaf" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Disabled Fieldsets
                        </h3>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="disabledSelect">Disabled input</label>
                                    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled></div>
                                <div class="form-group">
                                    <label for="disabledSelect">Disabled select menu</label>
                                    <select id="disabledSelect" class="form-control">
                                        <option>Disabled select</option>
                                    </select>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="custom-checkbox" disabled>&nbsp; Disabled Checkbox</label>
                                </div>
                                <button type="submit" class="btn btn-responsive ">Disabled Button</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--main content ends--> </section>
    <!-- content -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" ></script>
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form_examples.js') }}"></script>

@stop
