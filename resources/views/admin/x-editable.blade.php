    @extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
X-Editable
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
        <!-- page level css -->
        <link href="{{ asset('assets/vendors/x-editable/css/x-select.css') }}" type="text/css" rel="stylesheet" />
        <link href="{{ asset('assets/vendors/x-editable/css/bootstrap-editable.css') }}" type="text/css" rel="stylesheet" />
        <link href="{{ asset('assets/vendors/x-editable/css/x-selectbootstrap.css') }}" type="text/css" rel="stylesheet" />
        <link href="{{ asset('assets/vendors/x-editable/css/typeahead.js-bootstrap.css') }}" type="text/css" rel="stylesheet" />
        <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/pages/inlinedit.css') }}" rel="stylesheet" />
        <!-- end of page level css -->
    @stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                    <h1> X-Editable</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                                Dashboard
                            </a>
                        </li>
                        <li><a href="#">UI Components</a></li>
                        <li class="active">X-editable</li>
                    </ol>
                </section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading buttons">
                    <div class="col-md-6 btns">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="star-full" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> X-Editable
                        </h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <form method="get" id="frm" class="form-inline" action="#">
                            <label>
                                <select name="c" id="c" class="select2 xedit_opt">
                                    <option value="popup">Popup</option>
                                    <option value="inline">Inline</option>
                                </select>
                            </label>
                            <button type="submit" class="btn btn-raised btn-responsive btn-primary btn-sm btn_refresh">Refresh</button>
                        </form>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <div class="checkbox col-md-12 txt-align">
                            <label>
                                <input class="custom-checkbox" type="checkbox" id="autoopen">&nbsp; auto-open next field
                            </label>
                            <button id="enable" class="btn btn-success btn-raised btn-sm enable-btn">Enable / Disable</button>
                        </div>
                        <table id="user" class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <td>Simple text field</td>
                                <td>
                                    <a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username" class="editable editable-click" data-original-title="" title="">Superuser</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Empty text field, required</td>
                                <td>
                                    <a href="#" id="firstname" data-type="text" data-pk="1" data-placement="top" data-placeholder="Required" data-title="Enter your firstname" class="editable editable-click editable-empty" data-original-title="" title="">Change It</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Select, local array, custom display</td>
                                <td>
                                    <a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex" class="editable editable-click" data-original-title="" title="">not selected</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Select, remote array, no buttons</td>
                                <td>
                                    <a href="#" id="group" data-type="select" data-pk="1" data-value="5" data-source="/groups" data-title="Select group" class="editable editable-click" data-original-title="" title="">Admin</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Select, error while loading</td>
                                <td>
                                    <a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status" class="editable editable-click">Active</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Combodate (date)</td>
                                <td>
                                    <a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth" class="editable editable-click">15/05/1984</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Combodate (datetime)</td>
                                <td>
                                    <a href="#" id="event" data-type="combodate" data-placement="top" data-template="D MMM YYYY  HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1" data-title="Setup event date and time" class="editable editable-click editable-empty">Empty</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Textarea</td>
                                <td>
                                    <a href="#" id="comments" data-type="textarea" data-placeholder="Your comments here..." data-title="Enter comments" class="editable editable-pre-wrapped editable-click">Awesome user!</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Twitter typeahead.js</td>
                                <td>
                                    <a href="#" id="state2" data-type="typeaheadjs" data-placement="top" data-title="Start typing State.." class="editable editable-click">California</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Checklist</td>
                                <td>
                                    <a href="#" id="fruits" data-type="checklist" data-value="2,3" data-title="Select fruits" class="editable editable-click">
                                        Peach
                                        <br>Apple</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Custom input, several fields</td>
                                <td>
                                    <a id="address" data-type="address" data-pk="1" data-title="Please, fill address" class="editable editable-click" data-original-title="" title=""> <b>Moscow</b> , Lenina st., bld. 12
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
            
        @stop

{{-- page level scripts --}}
@section('footer_scripts')
        
    <script src="{{ asset('assets/vendors/jquery-mockjax/js/jquery.mockjax.js') }}" ></script>
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" ></script>
    <script>var f = 'bootstrap3';</script>
    <script src="{{ asset('assets/vendors/x-editable/js/bootstrap-editable.js') }}" ></script>
    <script src="{{ asset('assets/vendors/x-editable/js/typeahead.js') }}" ></script>
    <script src="{{ asset('assets/vendors/x-editable/js/typeaheadjs.js') }}" ></script>
    <script src="{{ asset('assets/vendors/x-editable/js/address.js') }}" ></script>
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>

    <script>
        var c = window.location.href.match(/c=inline/i) ? 'inline' : 'popup';
        $.fn.editable.defaults.mode = c === 'inline' ? 'inline' : 'popup';

        $(function() {
            $('#f').val(f);
            $('#c').val(c);


        });
    </script>
    <script src="{{ asset('assets/js/pages/demo-mock.js') }}" ></script>
    <script src="{{ asset('assets/js/pages/demo.js') }}" ></script>
    <!-- end of page level scripts-->
@stop
