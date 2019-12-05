@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Form Layouts
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/pages/form_layouts.css') }}" rel="stylesheet" type="text/css"/>
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Form Layouts</h1>
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
                    <li class="active">Form Layouts</li>
                </ol>
            </section>
            <!--section ends-->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <ul class="nav  nav-tabs ">
                <li class="active">
                    <a href="#tab1" data-toggle="tab">Form Actions</a>
                </li>
                <li>
                    <a href="#tab2" data-toggle="tab">2 Columns</a>
                </li>
                <li>
                    <a href="#tab3" data-toggle="tab">Form Striped</a>
                </li>
                <li>
                    <a href="#tab4" data-toggle="tab">Form Full Example</a>
                </li>
            </ul>
            <div class="tab-content mar-top">
                <div id="tab1" class="tab-pane fade active in">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Form Actions On Top
                                    </h3>
                                                <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                </div>
                                <div class="panel-body">
                                    <form action="#" class="form-horizontal">
                                        <div class="form-position">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                &nbsp;
                                                <button type="button" class="btn btn-danger">Cancel</button>
                                                &nbsp;
                                                <input type="reset" class="btn btn-default hidden-xs" value="Reset">
                                            </div>
                                        </div>
                                        <div class="form-body">
                                            <div class="form-group pad-top40">
                                                <label for="inputUsername" class="col-md-3 control-label">
                                                    Username
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="user" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                    </span>
                                                        <input type="text" class="form-control" placeholder="Username">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-md-3 control-label">
                                                    Email
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="mail" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                    </span>
                                                        <input type="text" placeholder="Email Address" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">
                                                    Password
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                                    </span>
                                                        <input type="password" placeholder="Password" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputnumber" class="col-md-3 control-label">
                                                    Phone Number
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="cellphone" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                    </span>
                                                        <input type="text" placeholder="Phone Number" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress" class="col-md-3 control-label">
                                                    Address
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="doc-portrait" data-c="#000" data-hc="#000" data-size="18" data-loop="true"></i>
                                                                    </span>
                                                        <input type="text" class="form-control" id="inputAddress" placeholder=" Address">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputContent" class="col-md-3 control-label">Message</label>
                                                <div class="col-md-9">
                                                    <textarea id="inputContent" rows="3" class="form-control resize_vertical "></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Form Actions On Bottom
                                    </h3>
                                                <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                </div>
                                <div class="panel-body">
                                    <form action="#" class="form-horizontal">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="inputUsername" class="col-md-3 control-label">
                                                    Username
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="user" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                    </span>
                                                        <input type="text" class="form-control " id="inputUsername" placeholder="Username">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-md-3 control-label">
                                                    Email
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="mail" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                    </span>
                                                        <input type="text" placeholder="Email Address" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">
                                                    Password
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                                    </span>
                                                        <input type="password" placeholder="Password" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputnumber" class="col-md-3 control-label">
                                                    Phone Number
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="cellphone" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                    </span>
                                                        <input type="text" placeholder="Phone Number" id="inputnumber" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress" class="col-md-3 control-label">
                                                    Address
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="doc-portrait" data-c="#000" data-hc="#000" data-size="18" data-loop="true"></i>
                                                                    </span>
                                                        <input type="text" class="form-control" placeholder=" Address">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputContent1" class="col-md-3 control-label">Message</label>
                                                <div class="col-md-9">
                                                    <textarea id="inputContent1" rows="3" class="form-control resize_vertical "></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                &nbsp;
                                                <button type="button" class="btn btn-danger">Cancel</button>
                                                &nbsp;
                                                <input type="reset" class="btn btn-default hidden-xs" value="Reset">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Form Actions On Top & Bottom
                                    </h3>
                                                <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                </div>
                                <div class="panel-body">
                                    <form action="#" class="form-horizontal">
                                        <div class="form-position">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                &nbsp;
                                                <button type="button" class="btn btn-danger">Cancel</button>
                                                &nbsp;
                                                <input type="reset" class="btn btn-default hidden-xs" value="Reset">
                                            </div>
                                        </div>
                                        <div class="form-body">
                                            <div class="form-group pad-top40">
                                                <label for="inputUsername" class="col-md-3 control-label">
                                                    Username
                                                </label>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="user" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                    </span>
                                                        <input type="text" class="form-control" placeholder="Username">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-md-3 control-label">
                                                    Email
                                                </label>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="mail" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                    </span>
                                                        <input type="text" placeholder="Email Address" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">
                                                    Password
                                                </label>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                                    </span>
                                                        <input type="password" placeholder="Password" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputnumber" class="col-md-3 control-label">
                                                    Phone Number
                                                </label>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="cellphone" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                    </span>
                                                        <input type="text" placeholder="Phone Number" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress" class="col-md-3 control-label">
                                                    Address
                                                </label>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="doc-portrait" data-c="#000" data-hc="#000" data-size="18" data-loop="true"></i>
                                                                    </span>
                                                        <input type="text" class="form-control" placeholder=" Address">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputContent2" class="col-md-3 control-label">Message</label>
                                                <div class="col-md-6">
                                                    <textarea id="inputContent2" rows="3" class="form-control resize_vertical "></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                &nbsp;
                                                <button type="button" class="btn btn-danger">Cancel</button>
                                                &nbsp;
                                                <input type="reset" class="btn btn-default hidden-xs" value="Reset">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Left Aligned
                                    </h3>
                                                <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                </div>
                                <div class="panel-body">
                                    <form action="#">
                                        <div class="form-position ">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            &nbsp;
                                            <button type="button" class="btn btn-danger">Cancel</button>
                                            &nbsp;
                                            <input type="reset" class="btn btn-default hidden-xs" value="Reset">
                                        </div>
                                        <div class="form-body">
                                            <div class="form-group mar-top">
                                                <label for="inputUsername" class="control-label">
                                                    Username
                                                </label>
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="livicon" data-name="user" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                </span>
                                                    <input type="text" class="form-control" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label">
                                                    Email
                                                </label>
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="livicon" data-name="mail" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                </span>
                                                    <input type="text" placeholder="Email Address" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Password
                                                </label>
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                                </span>
                                                    <input type="password" placeholder="Password" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputnumber" class="control-label">
                                                    Phone Number
                                                </label>
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="livicon" data-name="cellphone" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                </span>
                                                    <input type="text" placeholder="Phone Number" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Address
                                                </label>
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="livicon" data-name="doc-portrait" data-c="#000" data-hc="#000" data-size="18" data-loop="true"></i>
                                                                </span>
                                                    <input type="text" class="form-control" placeholder=" Address">
                                                </div>
                                            </div>
                                            <div class="form-group mbn">
                                                <label for="inputContent3" class="control-label">Message</label>
                                                <textarea id="inputContent3" rows="3" class="form-control resize_vertical "></textarea>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            &nbsp;
                                            <button type="button" class="btn btn-danger">Cancel</button>
                                            &nbsp;
                                            <input type="reset" class="btn btn-default hidden-xs" value="Reset">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Right Aligned
                                    </h3>
                                                <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                </div>
                                <div class="panel-body">
                                    <form action="#">
                                        <div class="form-position text-right ">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            &nbsp;
                                            <button type="button" class="btn btn-danger">Cancel</button>
                                            &nbsp;
                                            <input type="reset" class="btn btn-default hidden-xs" value="Reset">
                                        </div>
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="inputUsername" class="control-label">
                                                    Username
                                                </label>
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="livicon" data-name="user" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                </span>
                                                    <input type="text" class="form-control" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail" class="control-label">
                                                    Email
                                                </label>
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="livicon" data-name="mail" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                </span>
                                                    <input type="text" placeholder="Email Address" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Password
                                                </label>
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                                </span>
                                                    <input type="password" placeholder="Password" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Phone Number
                                                </label>
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="livicon" data-name="cellphone" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                </span>
                                                    <input type="text" placeholder="Phone Number" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Address
                                                </label>
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="livicon" data-name="doc-portrait" data-c="#000" data-hc="#000" data-size="18" data-loop="true"></i>
                                                                </span>
                                                    <input type="text" class="form-control" placeholder=" Address">
                                                </div>
                                            </div>
                                            <div class="form-group mbn">
                                                <label for="inputContent4" class="control-label">Message</label>
                                                <textarea id="inputContent4" rows="3" class="form-control resize_vertical "></textarea>
                                            </div>
                                        </div>
                                        <div class="form-actions text-right ">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            &nbsp;
                                            <button type="button" class="btn btn-danger">Cancel</button>
                                            &nbsp;
                                            <input type="reset" class="btn btn-default hidden-xs" value="Reset">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab2" class="tab-pane fade">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Form 2 Columns Default
                                    </h3>
                                                <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form class="form-horizontal">
                                                <div class="form-group has-success">
                                                    <label class="col-md-3 control-label" for="form2inputSuccess">First Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="form2inputSuccess" class="form-control" placeholder="Input with success">
                                                        <span class="help-block">First name is too small</span>
                                                    </div>
                                                </div>
                                                <div class="form-group has-warning">
                                                    <label class="col-md-3 control-label" for="form2inputWarning">Password</label>
                                                    <div class="col-md-9">
                                                        <input type="password" id="form2inputWarning" class="form-control" placeholder="Input with warning">
                                                        <span class="help-block">Password strength: Weak</span>
                                                    </div>
                                                </div>
                                                <div class="form-group has-error">
                                                    <label class="col-md-3 control-label" for="form2inputError">Email</label>
                                                    <div class="col-md-9">
                                                        <input type="email" id="form2inputError" class="form-control" placeholder="Input with error">
                                                        <span class="help-block">Please enter a valid email address</span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-6">
                                            <form class="form-horizontal">
                                                <div class="form-group has-success has-feedback">
                                                    <label class="col-md-3 control-label" for="inputSuccess1">Second Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="inputSuccess1" class="form-control" placeholder="Input with success">
                                                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                                        <span class="help-block">Second name is too small</span>
                                                    </div>
                                                </div>
                                                <div class="form-group has-warning has-feedback">
                                                    <label class="col-md-3 control-label" for="inputWarning1">Confirm Password</label>
                                                    <div class="col-md-9">
                                                        <input type="password" id="inputWarning1" class="form-control" placeholder="Input with warning">
                                                        <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                                                        <span class="help-block">Password mis-match</span>
                                                    </div>
                                                </div>
                                                <div class="form-group has-error has-feedback">
                                                    <label class="col-md-3 control-label" for="inputError1">Confirm Email</label>
                                                    <div class="col-md-9">
                                                        <input type="email" id="inputError1" class="form-control" placeholder="Input with error">
                                                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                                        <span class="help-block">Email mis-match</span>
                                                    </div>
                                                </div>
                                                <div class="form-group text-right">
                                                    <div class="col-md-offset-2 col-md-10">
                                                        <button type="submit" class="btn btn-primary">Signup</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Personal Details Horizontal
                                    </h3>
                                                <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <form  class="form-horizontal">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="first_Name">First Name:</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="first_Name" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="input_Email">Email:</label>
                                                    <div class="col-md-9">
                                                        <input type="email" class="form-control" id="input_Email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="input_Password">Password:</label>
                                                    <div class="col-md-9">
                                                        <input type="password" class="form-control" id="input_Password" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Date of Birth:</label>
                                                    <div class="col-md-3 select_margin ">
                                                        <select class="form-control">
                                                            <option>Date</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                            <option>13</option>
                                                            <option>14</option>
                                                            <option>15</option>
                                                            <option>16</option>
                                                            <option>17</option>
                                                            <option>18</option>
                                                            <option>19</option>
                                                            <option>20</option>
                                                            <option>21</option>
                                                            <option>22</option>
                                                            <option>23</option>
                                                            <option>24</option>
                                                            <option>25</option>
                                                            <option>26</option>
                                                            <option>27</option>
                                                            <option>28</option>
                                                            <option>29</option>
                                                            <option>30</option>
                                                            <option>31</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 select_margin ">
                                                        <select class="form-control">
                                                            <option>Month</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 select_margin ">
                                                        <select class="form-control">
                                                            <option>Year</option>
                                                            <option>1991</option>
                                                            <option>1992</option>
                                                            <option>1993</option>
                                                            <option>1994</option>
                                                            <option>1995</option>
                                                            <option>1996</option>
                                                            <option>1997</option>
                                                            <option>1998</option>
                                                            <option>1999</option>
                                                            <option>2000</option>
                                                            <option>2001</option>
                                                            <option>2002</option>
                                                            <option>2003</option>
                                                            <option>2004</option>
                                                            <option>2005</option>
                                                            <option>2006</option>
                                                            <option>2007</option>
                                                            <option>2008</option>
                                                            <option>2009</option>
                                                            <option>2000</option>
                                                            <option>2011</option>
                                                            <option>2012</option>
                                                            <option>2013</option>
                                                            <option>2014</option>
                                                            <option>2015</option>
                                                            <option>2016</option>
                                                            <option>2017</option>
                                                            <option>2018</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="Zip_Code">Zip Code:</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="Zip_Code" placeholder="Zip Code">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="city">City:</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="city" placeholder="City">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <label class="checkbox-inline mar-left5">
                                                            <input type="checkbox" value="news" class="square-blue"> Send me latest news and updates.</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="last_Name">Last Name:</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="last_Name" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="phone_Number">Phone:</label>
                                                    <div class="col-md-9">
                                                        <input type="tel" class="form-control" id="phone_Number" placeholder="Phone Number">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="confirm_Password">Confirm Password:</label>
                                                    <div class="col-md-9">
                                                        <input type="password" class="form-control" id="confirm_Password" placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="postal_Address">Address:</label>
                                                    <div class="col-md-9">
                                                        <textarea rows="3" class="form-control resize_vertical" id="postal_Address" placeholder="Postal Address"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Gender:</label>
                                                    <div class="col-md-4">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="genderRadios" class="radio-blue"> Male</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="genderRadios" class="radio-blue" value="female"> Female</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <label class="checkbox-inline mar-left5">
                                                            <input type="checkbox" value="agree" class="square-blue"> I agree to the
                                                            <a href="#">Terms and Conditions</a>
                                                            .
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" class="btn btn-success ">Submit</button>
                                                            <button type="reset" class="btn btn-effect-ripple btn-default">Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Form 2 Columns Readonly
                                        </h3>
                                                    <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                    </div>
                                    <div class="panel-body">
                                        <form action="#" class="form-horizontal">
                                            <div class="form-body">
                                                <h3>Personal</h3>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">First Name :</label>
                                                            <div class="col-sm-8">
                                                                <p class="form-control-static">Jenny</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Last Name :</label>
                                                            <div class="col-sm-8">
                                                                <p class="form-control-static">Kerry</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Email :</label>
                                                            <div class="col-sm-8">
                                                                <p class="form-control-static">
                                                                    <a href="mailto:whisfat1935@jourrapide.com">Jenny321@example.com</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Gender :</label>
                                                            <div class="col-sm-8">
                                                                <p class="form-control-static">Female</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Birthday :</label>
                                                            <div class="col-sm-8">
                                                                <p class="form-control-static">10.11.1980</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Phone :</label>
                                                            <div class="col-sm-8">
                                                                <p class="form-control-static">321-333-5432</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3>Address</h3>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Address 1 :</label>
                                                            <div class="col-sm-8">
                                                                <p class="form-control-static">1219 Quiet Subdivision</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Address 2 :</label>
                                                            <div class="col-sm-8">
                                                                <p class="form-control-static">3536 Petunia Way</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">States :</label>
                                                            <div class="col-sm-8">
                                                                <p class="form-control-static">Canada</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">City :</label>
                                                            <div class="col-sm-8">
                                                                <p class="form-control-static">Canada</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Post Code :</label>
                                                            <div class="col-sm-8">
                                                                <p class="form-control-static">7987678</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Conditions :</label>
                                                            <div class="col-sm-8">
                                                                <p class="form-control-static">True</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab3" class="tab-pane fade">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="livicon" data-name="bell" data-loop="true" data-color="#fff" data-hovercolor="#fff" data-size="18"></i> Form Bordered Striped
                                    </h3>
                                                <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                </div>
                                <div class="panel-body border">
                                    <form  enctype="multipart/form-data" class="form-horizontal form-bordered">
                                        <div class="form-group striped-col">
                                            <label class="col-md-3 control-label">Static</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">Static text</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="form-text-input">Text</label>
                                            <div class="col-md-6">
                                                <input type="text" id="form-text-input" name="example-text-input" class="form-control" placeholder="Text">

                                            </div>
                                        </div>
                                        <div class="form-group striped-col">
                                            <label class="col-md-3 control-label" for="form-email">Email</label>
                                            <div class="col-md-6">
                                                <input type="email" id="form-email" name="example-email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="form-password">Password</label>
                                            <div class="col-md-6">
                                                <input type="password" id="form-password" name="example-password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group striped-col">
                                            <label class="col-md-3 control-label" for="form-disabled">Disabled</label>
                                            <div class="col-md-6">
                                                <input type="text" id="form-disabled" name="example-disabled" class="form-control" placeholder="Disabled" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="form-textarea-input">Textarea</label>
                                            <div class="col-md-6">
                                                <textarea id="form-textarea-input" name="example-textarea-input" rows="7" class="form-control resize_vertical" placeholder="Description.."></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group striped-col">
                                            <label class="col-md-3 control-label" for="form-select">Select</label>
                                            <div class="col-md-6">
                                                <select id="form-select" name="example-select" class="form-control" size="1">
                                                    <option value="0">Please select</option>
                                                    <option value="1">Bootstrap</option>
                                                    <option value="2">CSS</option>
                                                    <option value="3">Javascript</option>
                                                    <option value="4">HTML</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="form-multiple-select">Multiple</label>
                                            <div class="col-md-6">
                                                <select id="form-multiple-select" name="example-multiple-select" class="form-control" size="5" multiple>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                    <option value="4">Option #4</option>
                                                    <option value="5">Option #5</option>
                                                    <option value="6">Option #6</option>
                                                    <option value="7">Option #7</option>
                                                    <option value="8">Option #8</option>
                                                    <option value="9">Option #9</option>
                                                    <option value="10">Option #10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group striped-col">
                                            <label class="col-md-3 control-label">Radios</label>
                                            <div class="col-md-9">
                                                <div class="radio mar-left5">
                                                    <label for="form-radio1">
                                                        <input type="radio" id="form-radio1" class="radio-blue" name="example-radios" value="option1"> HTML</label>
                                                </div>
                                                <div class="radio mar-left5">
                                                    <label for="form-radio2">
                                                        <input type="radio" id="form-radio2" class="radio-blue" name="example-radios" value="option2"> CSS</label>
                                                </div>
                                                <div class="radio mar-left5">
                                                    <label for="form-radio3">
                                                        <input type="radio" id="form-radio3" class="radio-blue" name="example-radios" value="option3"> Javascript</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Inline Radios</label>
                                            <div class="col-md-9">
                                                <label class="radio-inline " for="form-inline-radio1">
                                                    <input type="radio" id="form-inline-radio1" class="radio-blue" name="example-inline-radios" value="option1"> HTML</label>
                                                <label class="radio-inline" for="form-inline-radio2">
                                                    <input type="radio" id="form-inline-radio2" class="radio-blue" name="example-inline-radios" value="option2"> CSS</label>
                                                <label class="radio-inline" for="form-inline-radio3">
                                                    <input type="radio" id="form-inline-radio3" class="radio-blue" name="example-inline-radios" value="option3"> Javascript</label>
                                            </div>
                                        </div>
                                        <div class="form-group striped-col">
                                            <label class="col-md-3 control-label">Checkboxes</label>
                                            <div class="col-md-9">
                                                <div class="checkbox mar-left5">
                                                    <label for="form-checkbox1">
                                                        <input type="checkbox" id="form-checkbox1" name="example-checkbox1" value="option1" class="square-blue"> HTML</label>
                                                </div>
                                                <div class="checkbox mar-left5">
                                                    <label for="form-checkbox2">
                                                        <input type="checkbox" id="form-checkbox2" name="example-checkbox2" value="option2" class="square-blue"> CSS</label>
                                                </div>
                                                <div class="checkbox mar-left5">
                                                    <label for="form-checkbox3">
                                                        <input type="checkbox" id="form-checkbox3" name="example-checkbox3" value="option3" class="square-blue"> Javascript</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Inline Checkboxes</label>
                                            <div class="col-md-9">
                                                <label class="checkbox-inline mar-left5" for="form-inline-checkbox1">
                                                    <input type="checkbox" id="form-inline-checkbox1" name="example-inline-checkbox1" value="option1" class="square-blue"> HTML</label>
                                                <label class="checkbox-inline mar-left5" for="form-inline-checkbox2">
                                                    <input type="checkbox" id="form-inline-checkbox2" name="example-inline-checkbox2" value="option2" class="square-blue"> CSS</label>
                                                <label class="checkbox-inline mar-left5" for="form-inline-checkbox3">
                                                    <input type="checkbox" id="form-inline-checkbox3" name="example-inline-checkbox3" value="option3" class="square-blue"> Javascript</label>
                                            </div>
                                        </div>
                                        <div class="form-group striped-col ">
                                            <label class="col-md-3 control-label" for="form-file-input">File</label>
                                            <div class="col-md-9 pad-top20 ">
                                                <input type="file" id="form-file-input" name="example-file-input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="form-file-multiple-input">Multiple File</label>
                                            <div class="col-md-9 pad-top20">
                                                <input type="file" id="form-file-multiple-input" name="example-file-multiple-input" multiple>
                                            </div>
                                        </div>
                                        <div class="form-group form-actions">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-effect-ripple btn-primary">Submit</button>
                                                <button type="reset" class="btn btn-effect-ripple btn-default">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="livicon" data-name="bell" data-loop="true" data-color="#fff" data-hovercolor="#fff" data-size="18"></i> Form Seperated Row Striped
                                    </h3>
                                                <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                </div>
                                <div class="panel-body border">
                                    <form action="#"  enctype="multipart/form-data" class="form-horizontal form-bordered-row">
                                        <div class="form-group striped-col">
                                            <label class="col-md-3 control-label">Static</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">Static text</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="row-text-input">Text</label>
                                            <div class="col-md-6">
                                                <input type="text" id="row-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                            </div>
                                        </div>
                                        <div class="form-group striped-col">
                                            <label class="col-md-3 control-label" for="row-email">Email</label>
                                            <div class="col-md-6">
                                                <input type="email" id="row-email" name="example-email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="row-password">Password</label>
                                            <div class="col-md-6">
                                                <input type="password" id="row-password" name="example-password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group striped-col">
                                            <label class="col-md-3 control-label" for="row-disabled">Disabled</label>
                                            <div class="col-md-6">
                                                <input type="text" id="row-disabled" name="example-disabled" class="form-control" placeholder="Disabled" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="row-textarea-input">Textarea</label>
                                            <div class="col-md-6">
                                                <textarea id="row-textarea-input" name="example-textarea-input" rows="7" class="form-control resize_vertical" placeholder="Description.."></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group striped-col">
                                            <label class="col-md-3 control-label" for="row-select">Select</label>
                                            <div class="col-md-6">
                                                <select id="row-select" name="example-select" class="form-control" size="1">
                                                    <option value="0">Please select</option>
                                                    <option value="1">Bootstrap</option>
                                                    <option value="2">CSS</option>
                                                    <option value="3">Javascript</option>
                                                    <option value="4">HTML</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="row-multiple-select">Multiple</label>
                                            <div class="col-md-6">
                                                <select id="row-multiple-select" name="example-multiple-select" class="form-control" size="5" multiple>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                    <option value="4">Option #4</option>
                                                    <option value="5">Option #5</option>
                                                    <option value="6">Option #6</option>
                                                    <option value="7">Option #7</option>
                                                    <option value="8">Option #8</option>
                                                    <option value="9">Option #9</option>
                                                    <option value="10">Option #10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group striped-col">
                                            <label class="col-md-3 control-label">Radios</label>
                                            <div class="col-md-9">
                                                <div class="radio mar-left5">
                                                    <label for="row-radio1">
                                                        <input type="radio" id="row-radio1" class="radio-blue" name="example-radios" value="option1"> HTML</label>
                                                </div>
                                                <div class="radio mar-left5">
                                                    <label for="row-radio2">
                                                        <input type="radio" id="row-radio2" class="radio-blue" name="example-radios" value="option2"> CSS</label>
                                                </div>
                                                <div class="radio mar-left5">
                                                    <label for="row-radio3">
                                                        <input type="radio" id="row-radio3" class="radio-blue" name="example-radios" value="option3"> Javascript</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Inline Radios</label>
                                            <div class="col-md-9">
                                                <label class="radio-inline " for="row-inline-radio1">
                                                    <input type="radio" id="row-inline-radio1" class="radio-blue" name="example-inline-radios" value="option1"> HTML</label>
                                                <label class="radio-inline" for="row-inline-radio2">
                                                    <input type="radio" id="row-inline-radio2" class="radio-blue" name="example-inline-radios" value="option2"> CSS</label>
                                                <label class="radio-inline" for="row-inline-radio3">
                                                    <input type="radio" id="row-inline-radio3" class="radio-blue" name="example-inline-radios" value="option3"> Javascript</label>
                                            </div>
                                        </div>
                                        <div class="form-group striped-col">
                                            <label class="col-md-3 control-label">Checkboxes</label>
                                            <div class="col-md-9">
                                                <div class="checkbox mar-left5">
                                                    <label for="row-checkbox1">
                                                        <input type="checkbox" id="row-checkbox1" name="example-checkbox1" value="option1" class="square-blue"> HTML</label>
                                                </div>
                                                <div class="checkbox mar-left5">
                                                    <label for="row-checkbox2">
                                                        <input type="checkbox" id="row-checkbox2" name="example-checkbox2" value="option2" class="square-blue"> CSS</label>
                                                </div>
                                                <div class="checkbox mar-left5">
                                                    <label for="row-checkbox3">
                                                        <input type="checkbox" id="row-checkbox3" name="example-checkbox3" value="option3" class="square-blue"> Javascript</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Inline Checkboxes</label>
                                            <div class="col-md-9">
                                                <label class="checkbox-inline mar-left5" for="row-inline-checkbox1">
                                                    <input type="checkbox" id="row-inline-checkbox1" name="example-inline-checkbox1" value="option1" class="square-blue"> HTML</label>
                                                <label class="checkbox-inline mar-left5" for="row-inline-checkbox2">
                                                    <input type="checkbox" id="row-inline-checkbox2" name="example-inline-checkbox2" value="option2" class="square-blue"> CSS</label>
                                                <label class="checkbox-inline mar-left5" for="row-inline-checkbox3">
                                                    <input type="checkbox" id="row-inline-checkbox3" name="example-inline-checkbox3" value="option3" class="square-blue"> Javascript</label>
                                            </div>
                                        </div>
                                        <div class="form-group striped-col ">
                                            <label class="col-md-3 control-label" for="row-file-input">File</label>
                                            <div class="col-md-9 pad-top20">
                                                <input type="file" id="row-file-input" name="example-file-input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="row-file-multiple-input">Multiple File</label>
                                            <div class="col-md-9 pad-top20">
                                                <input type="file" id="row-file-multiple-input" name="example-file-multiple-input" multiple>
                                            </div>
                                        </div>
                                        <div class="form-group form-actions">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-effect-ripple btn-primary">Submit</button>
                                                <button type="reset" class="btn btn-effect-ripple btn-default">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="livicon" data-name="bell" data-loop="true" data-color="#fff" data-hovercolor="#fff" data-size="18"></i> Form Bordered
                                    </h3>
                                                <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                </div>
                                <div class="panel-body border">
                                    <form action="#"  enctype="multipart/form-data" class="form-horizontal form-bordered">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Static</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">Static text</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="bord-text-input">Text</label>
                                            <div class="col-md-6">
                                                <input type="text" id="bord-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                                <span class="help-block">This is a help text</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="bord-email">Email</label>
                                            <div class="col-md-6">
                                                <input type="email" id="bord-email" name="example-email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="bord-password">Password</label>
                                            <div class="col-md-6">
                                                <input type="password" id="bord-password" name="example-password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="bord-disabled">Disabled</label>
                                            <div class="col-md-6">
                                                <input type="text" id="bord-disabled" name="example-disabled" class="form-control" placeholder="Disabled" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="bord-textarea-input">Textarea</label>
                                            <div class="col-md-6">
                                                <textarea id="bord-textarea-input" name="example-textarea-input" rows="7" class="form-control resize_vertical" placeholder="Description.."></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="bord-select">Select</label>
                                            <div class="col-md-6">
                                                <select id="bord-select" name="example-select" class="form-control" size="1">
                                                    <option value="0">Please select</option>
                                                    <option value="1">Bootstrap</option>
                                                    <option value="2">CSS</option>
                                                    <option value="3">Javascript</option>
                                                    <option value="4">HTML</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="bord-multiple-select">Multiple</label>
                                            <div class="col-md-6">
                                                <select id="bord-multiple-select" name="example-multiple-select" class="form-control" size="5" multiple>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                    <option value="4">Option #4</option>
                                                    <option value="5">Option #5</option>
                                                    <option value="6">Option #6</option>
                                                    <option value="7">Option #7</option>
                                                    <option value="8">Option #8</option>
                                                    <option value="9">Option #9</option>
                                                    <option value="10">Option #10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Radios</label>
                                            <div class="col-md-9">
                                                <div class="radio mar-left5">
                                                    <label for="bord-radio1">
                                                        <input type="radio" id="bord-radio1" class="radio-blue" name="example-radios" value="option1"> HTML</label>
                                                </div>
                                                <div class="radio mar-left5">
                                                    <label for="bord-radio2">
                                                        <input type="radio" id="bord-radio2" class="radio-blue" name="example-radios" value="option2"> CSS</label>
                                                </div>
                                                <div class="radio mar-left5">
                                                    <label for="bord-radio3">
                                                        <input type="radio" id="bord-radio3" class="radio-blue" name="example-radios" value="option3"> Javascript</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Inline Radios</label>
                                            <div class="col-md-9">
                                                <label class="radio-inline " for="bord-inline-radio1">
                                                    <input type="radio" id="bord-inline-radio1" class="radio-blue" name="example-inline-radios" value="option1"> HTML</label>
                                                <label class="radio-inline" for="bord-inline-radio2">
                                                    <input type="radio" id="bord-inline-radio2" class="radio-blue" name="example-inline-radios" value="option2"> CSS</label>
                                                <label class="radio-inline" for="bord-inline-radio3">
                                                    <input type="radio" id="bord-inline-radio3" class="radio-blue" name="example-inline-radios" value="option3"> Javascript</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Checkboxes</label>
                                            <div class="col-md-9">
                                                <div class="checkbox mar-left5">
                                                    <label for="bord-checkbox1">
                                                        <input type="checkbox" id="bord-checkbox1" name="example-checkbox1" value="option1" class="square-blue"> HTML</label>
                                                </div>
                                                <div class="checkbox mar-left5">
                                                    <label for="bord-checkbox2">
                                                        <input type="checkbox" id="bord-checkbox2" name="example-checkbox2" value="option2" class="square-blue"> CSS</label>
                                                </div>
                                                <div class="checkbox mar-left5">
                                                    <label for="bord-checkbox3">
                                                        <input type="checkbox" id="bord-checkbox3" name="example-checkbox3" value="option3" class="square-blue"> Javascript</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Inline Checkboxes</label>
                                            <div class="col-md-9">
                                                <label class="checkbox-inline mar-left5" for="bord-inline-checkbox1">
                                                    <input type="checkbox" id="bord-inline-checkbox1" name="example-inline-checkbox1" value="option1" class="square-blue"> HTML</label>
                                                <label class="checkbox-inline mar-left5" for="bord-inline-checkbox2">
                                                    <input type="checkbox" id="bord-inline-checkbox2" name="example-inline-checkbox2" value="option2" class="square-blue"> CSS</label>
                                                <label class="checkbox-inline mar-left5" for="bord-inline-checkbox3">
                                                    <input type="checkbox" id="bord-inline-checkbox3" name="example-inline-checkbox3" value="option3" class="square-blue"> Javascript</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="bord-file-input">File</label>
                                            <div class="col-md-9 pad-top20">
                                                <input type="file" id="bord-file-input" name="example-file-input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="bord-file-multiple-input">Multiple File</label>
                                            <div class="col-md-9 pad-top20">
                                                <input type="file" id="bord-file-multiple-input" name="example-file-multiple-input" multiple>
                                            </div>
                                        </div>
                                        <div class="form-group form-actions">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-effect-ripple btn-primary">Submit</button>
                                                <button type="reset" class="btn btn-effect-ripple btn-default">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab4" class="tab-pane fade">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <i class="livicon" data-name="bell" data-loop="true" data-color="#fff" data-hovercolor="#fff" data-size="18"></i> Vertical Form Layout
                                            </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                        </div>
                                        <div class="panel-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="formEmail">Email</label>
                                                    <input type="email" class="form-control" id="formEmail" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="formPassword">Password</label>
                                                    <input type="password" class="form-control" id="formPassword" placeholder="Password">
                                                </div>
                                                <div class="checkbox mar-left5">
                                                    <label>
                                                        <input type="checkbox" class="square-blue" style="margin-right: 7px;"> Remember me</label>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Login</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--select2 starts-->
                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Inline Form Layout
                                            </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                        </div>
                                        <div class="panel-body">
                                            <form class="form-inline" role="form">
                                                <div class="form-group">
                                                    <label class="sr-only" for="inputEmail">Email</label>
                                                    <input type="email" class="form-control" id="inlineEmail" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="inputPassword">Password</label>
                                                    <input type="password" class="form-control" id="inlinePassword" placeholder="Password">
                                                </div>
                                                <div class="checkbox ">
                                                    <label class="mar-left5">
                                                        <input type="checkbox" class="square-blue mar-right4">&nbsp;Remember me</label>
                                                </div>
                                                <button type="submit" class="btn btn-primary mar-top">Login</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Static Form Control
                                            </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                        </div>
                                        <div class="panel-body">
                                            <form class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="inputEmail" class="control-label col-xs-2 hidden-xs">Email</label>
                                                    <label for="inputEmail" class="control-label col-xs-2 visible-xs">Mail</label>
                                                    <div class="col-xs-10">
                                                        <p class="form-control-static">harrypotter@mail.com</p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="staticPassword" class="control-label col-xs-2 hidden-xs">Password</label>
                                                    <label for="staticPassword" class="control-label visible-xs  hidden-lg hidden-sm hidden-md col-xs-2">Pwd</label>
                                                    <div class="col-xs-10">
                                                        <input type="password" class="form-control" id="staticPassword" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-offset-2 col-xs-10">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="square-blue"> Remember me</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-offset-2 col-xs-10">
                                                        <button type="submit" class="btn btn-primary">Login</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="panel panel-warning">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Grid sizing of Inputs, Textareas and Select Boxes
                                            </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                        </div>
                                        <div class="panel-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-xs-5">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <textarea class="form-control resize_vertical"></textarea>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <textarea class="form-control resize_vertical"></textarea>
                                                    </div>
                                                    <div class="col-xs-5">
                                                        <textarea class="form-control resize_vertical"></textarea>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <select class="form-control">
                                                            <option>Select</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <select class="form-control">
                                                            <option>Select</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-5">
                                                        <select class="form-control">
                                                            <option>Select</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Creating Button Dropdowns
                                            </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                        </div>
                                        <div class="panel-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 btn_margin_top">
                                                        <div class="input-group">
                                                            <div class="input-group-btn">
                                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                                    Action
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#">Action</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Another action</a>
                                                                    </li>
                                                                    <li class="divider"></li>
                                                                    <li>
                                                                        <a href="#">Separated link</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 btn_margin_top">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control">
                                                            <div class="input-group-btn">
                                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                                    Action
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu pull-right">
                                                                    <li>
                                                                        <a href="#">Action</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Another action</a>
                                                                    </li>
                                                                    <li class="divider"></li>
                                                                    <li>
                                                                        <a href="#">Separated link</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <hr>
                                            <form>
                                                <div class="input-group">
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                                            Action
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
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
                                                    <input type="text" class="form-control">
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                    <input type="text" class="form-control">
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                                            Action
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right">
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
                                            </form>
                                        </div>
                                    </div>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Creating Disabled Inputs
                                            </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                        </div>
                                        <div class="panel-body">
                                            <form>
                                                <input type="text" class="form-control" placeholder="Disabled input" disabled="disabled">
                                            </form>
                                            <hr>
                                            <form class="form-horizontal">
                                                <fieldset disabled="disabled">
                                                    <div class="form-group">
                                                        <label for="createEmail" class="control-label col-xs-2">Email</label>
                                                        <div class="col-xs-10">
                                                            <input type="email" class="form-control" id="createEmail" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="createPassword" class="control-label col-xs-2 hidden-xs">Password</label>
                                                        <label for="createPassword" class="control-label col-xs-2 visible-xs">Pwd</label>
                                                        <div class="col-xs-10">
                                                            <input type="password" class="form-control" id="createPassword" placeholder="Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-xs-offset-2 col-xs-10">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" class="square-blue" disabled> Remember me</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-xs-offset-2 col-xs-10">
                                                            <button type="submit" class="btn btn-primary">Login</button>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Supported Form Controls in Twitter Bootstrap
                                            </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                        </div>
                                        <div class="panel-body">
                                            <form class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="control-label col-xs-3" for="supportEmail">Email:</label>
                                                    <div class="col-xs-9">
                                                        <input type="email" class="form-control" id="supportEmail" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-xs-3 hidden-xs" for="supportPassword">Password:</label>
                                                    <label class="control-label col-xs-3 visible-xs" for="supportPassword">Pwd:</label>
                                                    <div class="col-xs-9">
                                                        <input type="password" class="form-control" id="supportPassword" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-xs-3 hidden-xs" for="supportCPassword">Confirm Password:</label>
                                                    <label class="control-label col-xs-3 visible-xs" for="supportCPassword">Confirm Pwd:</label>                                                    <div class="col-xs-9">
                                                        <input type="password" class="form-control" id="supportCPassword" placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-xs-3" for="firstName">First Name:</label>
                                                    <div class="col-xs-9">
                                                        <input type="text" class="form-control" id="firstName" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-xs-3" for="lastName">Last Name:</label>
                                                    <div class="col-xs-9">
                                                        <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-xs-3" for="phoneNumber">Phone:</label>
                                                    <div class="col-xs-9">
                                                        <input type="tel" class="form-control" id="phoneNumber" placeholder="Phone Number">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-xs-3">Date of Birth:</label>
                                                    <div class="col-xs-3">
                                                        <select class="form-control">
                                                            <option>Date</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                            <option>13</option>
                                                            <option>14</option>
                                                            <option>15</option>
                                                            <option>16</option>
                                                            <option>17</option>
                                                            <option>18</option>
                                                            <option>19</option>
                                                            <option>20</option>
                                                            <option>21</option>
                                                            <option>22</option>
                                                            <option>23</option>
                                                            <option>24</option>
                                                            <option>25</option>
                                                            <option>26</option>
                                                            <option>27</option>
                                                            <option>28</option>
                                                            <option>29</option>
                                                            <option>30</option>
                                                            <option>31</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <select class="form-control">
                                                            <option>Month</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <select class="form-control">
                                                            <option>Year</option>
                                                            <option>Year</option>
                                                            <option>1991</option>
                                                            <option>1992</option>
                                                            <option>1993</option>
                                                            <option>1994</option>
                                                            <option>1995</option>
                                                            <option>1996</option>
                                                            <option>1997</option>
                                                            <option>1998</option>
                                                            <option>1999</option>
                                                            <option>2000</option>
                                                            <option>2001</option>
                                                            <option>2002</option>
                                                            <option>2003</option>
                                                            <option>2004</option>
                                                            <option>2005</option>
                                                            <option>2006</option>
                                                            <option>2007</option>
                                                            <option>2008</option>
                                                            <option>2009</option>
                                                            <option>2000</option>
                                                            <option>2011</option>
                                                            <option>2012</option>
                                                            <option>2013</option>
                                                            <option>2014</option>
                                                            <option>2015</option>
                                                            <option>2016</option>
                                                            <option>2017</option>
                                                            <option>2018</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-xs-3" for="postalAddress">Address:</label>
                                                    <div class="col-xs-9">
                                                        <textarea rows="3" class="form-control resize_vertical" id="postalAddress" placeholder="Postal Address"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-xs-3" for="ZipCode">Zip Code:</label>
                                                    <div class="col-xs-9">
                                                        <input type="text" class="form-control" id="ZipCode" placeholder="Zip Code">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-xs-3">Gender:</label>
                                                    <div class="col-xs-4">
                                                        <label class="radio-inline">
                                                            <input type="radio" class="radio-blue" name="genderRadios" value="male"> Male</label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label class="radio-inline">
                                                            <input type="radio" class="radio-blue" name="genderRadios" value="female"> Female</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-offset-3 col-xs-9">
                                                        <label class="checkbox-inline mar-left5">
                                                            <input type="checkbox" class="square-blue" value="news"> Send me latest news and updates.</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-offset-3 col-xs-9">
                                                        <label class="checkbox-inline mar-left5">
                                                            <input type="checkbox" class="square-blue" value="agree"> I agree to the
                                                            <a href="#">Terms and Conditions</a>
                                                            .
                                                        </label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-xs-offset-3 col-xs-9">
                                                        <input type="submit" class="btn btn-primary" value="Submit">
                                                        <input type="reset" class="btn btn-default" value="Reset">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!--select2 ends-->
                                </div>
                                <div class="col-md-6">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <i class="livicon" data-name="bell" data-loop="true" data-color="#fff" data-hovercolor="#fff" data-size="18"></i> Horizontal Form Layout Example
                                            </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                        </div>
                                        <div class="panel-body">
                                            <form class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="inputEmail" class="control-label col-xs-2">Email</label>
                                                    <div class="col-xs-10">
                                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword" class="control-label hidden-xs col-xs-2">Password</label>
                                                    <label for="inputPassword" class="control-label visible-xs  hidden-lg hidden-sm hidden-md col-xs-2">Pwd</label>
                                                    <div class="col-xs-10">
                                                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-offset-2 col-xs-10">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="square-blue"> Remember me</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-offset-2 col-xs-10">
                                                        <button type="submit" class="btn btn-primary">Login</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="panel panel-warning">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <i class="livicon" data-name="bell" data-loop="true" data-color="#fff" data-hovercolor="#fff" data-size="18"></i> General Controls
                                            </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                        </div>
                                        <div class="panel-body">
                                            <form action="#" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Static</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static">Static text</p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="example-text-input">Text</label>
                                                    <div class="col-md-6">
                                                        <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                                        <span class="help-block">This is a help text</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="example-email">Email</label>
                                                    <div class="col-md-6">
                                                        <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="example-password">Password</label>
                                                    <div class="col-md-6">
                                                        <input type="password" id="example-password" name="example-password" class="form-control" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="example-disabled">Disabled</label>
                                                    <div class="col-md-6">
                                                        <input type="text" id="example-disabled" name="example-disabled" class="form-control" placeholder="Disabled" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="example-textarea-input">Textarea</label>
                                                    <div class="col-md-9">
                                                        <textarea id="example-textarea-input" name="example-textarea-input" rows="7" class="form-control resize_vertical" placeholder="Description.."></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="example-select">Select</label>
                                                    <div class="col-md-6">
                                                        <select id="example-select" name="example-select" class="form-control" size="1">
                                                            <option value="0">Please select</option>
                                                            <option value="1">Bootstrap</option>
                                                            <option value="2">CSS</option>
                                                            <option value="3">Javascript</option>
                                                            <option value="4">HTML</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="example-multiple-select">Multiple</label>
                                                    <div class="col-md-6">
                                                        <select id="example-multiple-select" name="example-multiple-select" class="form-control" size="5" multiple>
                                                            <option value="1">Option #1</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                            <option value="4">Option #4</option>
                                                            <option value="5">Option #5</option>
                                                            <option value="6">Option #6</option>
                                                            <option value="7">Option #7</option>
                                                            <option value="8">Option #8</option>
                                                            <option value="9">Option #9</option>
                                                            <option value="10">Option #10</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Radios</label>
                                                    <div class="col-md-9">
                                                        <div class="radio mar-left5">
                                                            <label for="example-radio1">
                                                                <input type="radio" class="radio-blue" id="example-radio1" name="example-radios" value="option1"> HTML</label>
                                                        </div>
                                                        <div class="radio mar-left5">
                                                            <label for="example-radio2">
                                                                <input type="radio" class="radio-blue" id="example-radio2" name="example-radios" value="option2"> CSS</label>
                                                        </div>
                                                        <div class="radio mar-left5">
                                                            <label for="example-radio3">
                                                                <input type="radio" class="radio-blue" id="example-radio3" name="example-radios" value="option3"> Javascript</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Inline Radios</label>
                                                    <div class="col-md-9">
                                                        <label class="radio-inline " for="example-inline-radio1">
                                                            <input type="radio" id="example-inline-radio1" class="radio-blue" name="example-inline-radios" value="option1"> HTML</label>
                                                        <label class="radio-inline" for="example-inline-radio2">
                                                            <input type="radio" id="example-inline-radio2" class="radio-blue" name="example-inline-radios" value="option2"> CSS</label>
                                                        <label class="radio-inline" for="example-inline-radio3">
                                                            <input type="radio" id="example-inline-radio3" class="radio-blue" name="example-inline-radios" value="option3"> Javascript</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Checkboxes</label>
                                                    <div class="col-md-9">
                                                        <div class="checkbox mar-left5">
                                                            <label for="example-checkbox1">
                                                                <input type="checkbox" id="example-checkbox1" class="square-blue" name="example-checkbox1" value="option1">&nbsp;HTML</label>
                                                        </div>
                                                        <div class="checkbox mar-left5">
                                                            <label for="example-checkbox2">
                                                                <input type="checkbox" id="example-checkbox2" class="square-blue" name="example-checkbox2" value="option2"> CSS</label>
                                                        </div>
                                                        <div class="checkbox mar-left5">
                                                            <label for="example-checkbox3">
                                                                <input type="checkbox" id="example-checkbox3" class="square-blue" name="example-checkbox3" value="option3"> Javascript</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Inline Checkboxes</label>
                                                    <div class="col-md-9">
                                                        <label class="checkbox-inline mar-left5" for="example-inline-checkbox1">
                                                            <input type="checkbox" id="example-inline-checkbox1" class="square-blue" name="example-inline-checkbox1" value="option1"> HTML</label>
                                                        <label class="checkbox-inline mar-left5" for="example-inline-checkbox2">
                                                            <input type="checkbox" id="example-inline-checkbox2" class="square-blue" name="example-inline-checkbox2" value="option2"> CSS</label>
                                                        <label class="checkbox-inline mar-left5" for="example-inline-checkbox3">
                                                            <input type="checkbox" id="example-inline-checkbox3" class="square-blue" name="example-inline-checkbox3" value="option3"> Javascript</label>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="col-md-3 control-label" for="example-file-input">File</label>
                                                    <div class="col-md-9 mar-top">
                                                        <input type="file" id="example-file-input" name="example-file-input">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="example-file-multiple-input">Multiple File</label>
                                                    <div class="col-md-9 mar-top">
                                                        <input type="file" id="example-file-multiple-input" name="example-file-multiple-input" multiple>
                                                    </div>
                                                </div>
                                                <div class="form-group form-actions">
                                                    <div class="col-md-9 col-md-offset-3">
                                                        <button type="submit" class="btn btn-effect-ripple btn-primary">Submit</button>
                                                        <button type="reset" class="btn btn-effect-ripple btn-default">Reset</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Height Sizing of Input Groups
                                            </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                        </div>
                                        <div class="panel-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 btn_margin_top">
                                                        <div class="input-group input-group-lg">
                                                                        <span class="input-group-addon">
                                                                        <i class="livicon" data-name="user" data-size="20" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                        </span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 btn_margin_top">
                                                        <div class="input-group input-group-lg">
                                                                        <span class="input-group-addon">
                                                                            <input type="checkbox" class="square-blue"></span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 btn_margin_top">
                                                        <div class="input-group input-group-lg">
                                                            <div class="input-group-addon ">
                                                                <input type="radio" class="radio-blue">
                                                            </div>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 btn_margin_top">
                                                        <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="livicon" data-name="user" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                        </span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 btn_margin_top">
                                                        <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <input type="checkbox" class="square-blue"></span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 btn_margin_top">
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <input type="radio" class="radio-blue">
                                                            </div>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 btn_margin_top">
                                                        <div class="input-group input-group-sm">
                                                                        <span class="input-group-addon">
                                                                        <i class="livicon" data-name="user" data-size="16" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                        </span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 btn_margin_top">
                                                        <div class="input-group input-group-sm">
                                                                        <span class="input-group-addon">
                                                                            <input type="checkbox" class="square-blue" /></span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 btn_margin_top">
                                                        <div class="input-group input-group-sm">
                                                            <div class="input-group-addon">
                                                                <input type="radio" class="radio-blue">
                                                            </div>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Twitter Bootstrap Form Validation States
                                            </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                        </div>
                                        <div class="panel-body">
                                            <form class="form-horizontal">
                                                <div class="form-group has-success">
                                                    <label class="col-xs-2 control-label" for="inputSuccess">Username</label>
                                                    <div class="col-xs-10">
                                                        <input type="text" id="inputSuccess" class="form-control" placeholder="Input with success">
                                                        <span class="help-block">Username is available</span>
                                                    </div>
                                                </div>
                                                <div class="form-group has-warning">
                                                    <label class="col-xs-2 control-label" for="inputWarning">Password</label>
                                                    <div class="col-xs-10">
                                                        <input type="password" id="inputWarning" class="form-control" placeholder="Input with warning">
                                                        <span class="help-block">Password strength: Weak</span>
                                                    </div>
                                                </div>
                                                <div class="form-group has-error">
                                                    <label class="col-xs-2 control-label" for="inputError">Email</label>
                                                    <div class="col-xs-10">
                                                        <input type="email" id="inputError" class="form-control" placeholder="Input with error">
                                                        <span class="help-block">Please enter a valid email address</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-offset-2 col-xs-10">
                                                        <button type="submit" class="btn btn-primary">Login</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <form class="form-horizontal">
                                                <div class="form-group has-success has-feedback">
                                                    <label class="col-xs-2 control-label" for="inputSuccess3">Username</label>
                                                    <div class="col-xs-10">
                                                        <input type="text" id="inputSuccess3" class="form-control" placeholder="Input with success">
                                                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                                        <span class="help-block">Username is available</span>
                                                    </div>
                                                </div>
                                                <div class="form-group has-warning has-feedback">
                                                    <label class="col-xs-2 control-label" for="inputWarning2">Password</label>
                                                    <div class="col-xs-10">
                                                        <input type="password" id="inputWarning2" class="form-control" placeholder="Input with warning">
                                                        <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                                                        <span class="help-block">Password strength: Weak</span>
                                                    </div>
                                                </div>
                                                <div class="form-group has-error has-feedback">
                                                    <label class="col-xs-2 control-label" for="inputError2">Email</label>
                                                    <div class="col-xs-10">
                                                        <input type="email" id="inputError2" class="form-control" placeholder="Input with error">
                                                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                                        <span class="help-block">Please enter a valid email address</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-offset-2 col-xs-10">
                                                        <button type="submit" class="btn btn-primary">Login</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--min length ends-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Bootstrap Form Inputs
                                            </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form" class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Email Address</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="livicon" data-name="mail" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                        </span>
                                                            <input type="text" class="form-control" placeholder="Email Address">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Password</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="livicon" data-name="key" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                        </span>
                                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group has-success">
                                                    <label class="col-md-2 control-label">Validation Email</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group input-icon right">
                                                                        <span class="input-group-addon">
                                                                            <i class="livicon" data-name="mail" data-size="18" data-c="#01BC8C" data-hc="#01BC8C" data-loop="true"></i>
                                                                        </span>
                                                            <input id="email" class="input-error form-control" type="text" placeholder="Email Address">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group has-error">
                                                    <label class="col-md-2 control-label">Validation Password</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group input-icon right">
                                                                        <span class="input-group-addon">
                                                                            <i class="livicon" data-name="key" data-size="18" data-c="#EF6F6C" data-hc="#EF6F6C" data-loop="true"></i>
                                                                        </span>
                                                            <input type="password" class="input-error form-control" placeholder="Password">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Checkbox Left</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <input type="checkbox" class="square-blue">
                                                            </div>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Checkbox right</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control">
                                                            <div class="input-group-addon">
                                                                <input type="checkbox" class="square-blue">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Radio on left</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <input type="radio" class="radio-blue">
                                                            </div>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Radio on right</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control">
                                                            <div class="input-group-addon">
                                                                <input type="radio" class="radio-blue">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Static Paragraph</label>
                                                    <div class="col-md-8">
                                                        <p class="form-control">email@example.com</p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Readonly</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" placeholder="Readonly" readonly="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <button type="submit" class="btn btn-success btn_margin_top ">Submit</button>
                                                    <button type="reset" class="btn btn-danger btn_margin_top">Cancel</button>
                                                    <button type="reset" class="btn btn-effect-ripple btn-default btn_margin_top">Reset</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- content -->
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form_layouts.js') }}" type="text/javascript"></script>

@stop
