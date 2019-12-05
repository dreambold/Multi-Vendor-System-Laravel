@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    GUI CRUD Builder
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendors/sweetalert/css/sweetalert.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/pages/custom_gui_builder.css') }}" rel="stylesheet" />
    <style>
        .hidden{
            display: none;
        }
        .txtFieldName{
        text-transform: capitalize;
        }
    </style>
@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>GUI CRUD Generator</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-c="#000"></i>
                    Dashboard
                </a>
            </li>
            <li><a href="#">GUI CRUD Generator</a></li>
            <li class="active">Generator Builder</li>
        </ol>
    </section>
    <section class="content paddingleft_right15">
        <div id="info" style="display: none"></div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="box-title">Laravel Generator Builder</h4>
            </div>
            <div class="panel-body">
                <form id="form">
                    <input type="hidden" name="_token" id="token" value="{!! csrf_token() !!}"/>
                    <div class="row">
                    <div class="form-group col-md-4">
                        <label for="txtModelName">Model Name<span class="required">*</span></label>
                        <input type="text" class="form-control text-capitalize" required name="model_name" id="txtModelName" placeholder="Enter name" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="drdCommandType">Command Type</label>
                        <select id="drdCommandType" class="form-control" style="width: 100%">
                            <option value="infyom:scaffold">Scaffold Generator</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="txtCustomTblName">Table Name</label> <i class="fa fa-info" data-toggle="tooltip" title="Following Laravel Table Convention"></i>
                        <input type="text" class="form-control" id="txtCustomTblName" placeholder="Enter table name">
                    </div>
                    </div>

                    <div class="form-group col-md-8">
                        <label for="txtModelName">Options</label>

                        <div class="form-inline form-group" style="border-color: transparent">
                            <div class="checkbox chk-align">
                                <label>
                                    <input type="checkbox" class="flat-red" id="chkDelete"><span
                                            class="chk-label-margin"> Soft Delete </span>
                                </label>
                            </div>

                            <div class="checkbox chk-align" id="chDataTable">
                                <label>
                                    <input type="checkbox" class="flat-red" id="chkDataTable" checked> <span
                                            class="chk-label-margin">Datatables</span>
                                </label>
                            </div>
                            <div class="checkbox chk-align" id="chMigrate">
                                <label>
                                    <input type="checkbox" class="flat-red" id="chkMigrate" checked> <span
                                            class="chk-label-margin">Migrate</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="txtPrefix">Prefix</label>
                        <input type="text" class="form-control" id="txtPrefix" placeholder="Enter prefix">
                    </div>

                    <div class="form-group col-md-1">
                        <label for="txtPaginate">Paginate</label>
                        <input type="number" class="form-control" value="10" id="txtPaginate" placeholder="" min="1">
                    </div>

                   {{-- <div class="form-group col-md-6">
                        <label for="leftMenuIcons">Icons</label>
                        <input type="text" name="icon_name" class="form-control" data-toggle="modal"
                               data-target="#iconsModal" id="leftMenuIcons" placeholder="Select your icon">
                    </div>--}}

                    <div class="col-md-12">
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            The Primary key <code>id</code> and timestamps <code>created_at</code> and <code>updated_at</code> will be created automatically!
                        </div>
                    </div>

                    <div class="table-responsive col-md-12">
                        <table class="table table-striped table-bordered" id="table">
                            <thead class="no-border">
                            <tr>
                                <th>Field Name</th>
                                <th>DB Type</th>
                                <th>Validations</th>
                                <th>Html Type</th>
                                <th style="width: 68px">Primary</th>
                                <th style="width: 87px">Searchable</th>
                                <th style="width: 63px">Fillable</th>
                                <th style="width: 65px">In Form</th>
                                <th style="width: 67px">In Index</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody id="container" class="no-border-x no-border-y ui-sortable">
                            <tr class="item" style="display: table-row;">
                                <td style="vertical-align: middle">
                                    <input type="text" style="width: 100%" required class="form-control txtFieldName"/>
                                </td>
                                <td style="vertical-align: middle">
                                    {{--<input type="text" class="form-control txtdbType" required/>--}}
                                    <select class="form-control txtdbType">
                                              <option value="increments">INCREMENTS</option>
                                              <option value="bigIncrements">BIG INCREMENTS</option>
                                              <option value="timestamps">TIME STAMPS</option>
                                              <option value="softDeletes">SOFT DELETES</option>
                                              <option value="rememberToken">REMEMBER TOKEN</option>
                                              <option disabled="disabled">-</option>
                                              <option value="string" selected="selected">STRING</option>
                                              <option value="text" class="text">TEXT</option>
                                              <option disabled="disabled">-</option>
                                              <option value="tinyInteger">TINY INTEGER</option>
                                              <option value="smallInteger">SMALL INTEGER</option>
                                              <option value="mediumInteger">MEDIUM INTEGER</option>
                                              <option value="integer">INTEGER</option>
                                              <option value="bigInteger">BIG INTEGER</option>
                                              <option disabled="disabled">-</option>
                                              <option value="float">FLOAT</option>
                                              <option value="decimal">DECIMAL</option>
                                              <option value="boolean">BOOLEAN</option>
                                              <option disabled="disabled">-</option>
                                              <option value="enum">ENUM</option>
                                              <option disabled="disabled">-</option>
                                              <option value="date">DATE</option>
                                        {{--      <option value="datetime">DATETIME</option>--}}
                                        {{--      <option value="time">TIME</option>--}}
                                              <option value="timestamp">TIMESTAMP</option>
                                              <option disabled="disabled">-</option>
                                              <option value="binary">BINARY</option>
                                            </select>

                                </td>
                                <td style="vertical-align: middle">
                                    {{--<input type="text" class="form-control txtValidation"/>--}}
                                    <select class="form-control txtValidation" multiple name="txtValidation" style="width:100%">
                                        <option value="required" class="required">Required</option>
                                        <option value="email" class="email">Email</option>
                                        {{--<option value="image">Image</option>--}}
                                        <option value="date" class="date">Date</option>
                                        <option value="integer" class="integer">Integer</option>
                                        <option value="boolean" class="boolean">Boolean</option>
                                    </select>
                                </td>
                                <td style="vertical-align: middle">
                                    <select class="form-control drdHtmlType" style="width: 100%">
                                        <option value="text">Text</option>
                                        <option value="email">Email</option>
                                        <option value="number">Number</option>
                                        <option value="date"  class="date">Date</option>
                                        <option value="file">File</option>
                                        <option value="password">Password</option>
                                        <option value="select">Select</option>
                                        <option value="radio">Radio</option>
                                        <option value="checkbox" class="checkbox">Checkbox</option>
                                        <option value="textarea" class="textarea">TextArea</option>
                                    </select>
                                    <input type="text" class="form-control htmlValue txtHtmlValue" style="display: none"
                                           placeholder=""/>
                                </td>
                                <td style="vertical-align: middle">
                                    <div class="checkbox" style="text-align: center">
                                        <label style="padding-left: 0px">
                                            <input type="checkbox" style="margin-left: 0px!important;" class="flat-red chkPrimary"/>
                                        </label>
                                    </div>
                                </td>
                                <td style="vertical-align: middle">
                                    <div class="checkbox" style="text-align: center">
                                        <label style="padding-left: 0px">
                                            <input type="checkbox" style="margin-left: 0px!important;" class="flat-red chkSearchable" checked/>
                                        </label>
                                    </div>
                                </td>
                                <td style="vertical-align: middle">
                                    <div class="checkbox" style="text-align: center">
                                        <label style="padding-left: 0px">
                                            <input type="checkbox" style="margin-left: 0px!important;" class="flat-red chkFillable" checked/>
                                        </label>
                                    </div>
                                </td>
                                <td style="vertical-align: middle">
                                    <div class="checkbox" style="text-align: center">
                                        <label style="padding-left: 0px">
                                            <input type="checkbox" style="margin-left: 0px!important;" class="flat-red chkInForm" checked/>
                                        </label>
                                    </div>
                                </td>
                                <td style="vertical-align: middle">
                                    <div class="checkbox" style="text-align: center">
                                        <label style="padding-left: 0px">
                                            <input type="checkbox" style="margin-left: 0px!important;" class="flat-red chkInIndex" checked/>
                                        </label>
                                    </div>
                                </td>
                                <td style="text-align: center;vertical-align: middle">
                                    <i onclick="removeItem(this)" class="livicon remove" data-name="remove-alt"
                                       data-size="18" data-loop="true" data-c="#f56954"
                                       data-hc="#f56954" style="cursor:pointer"
                                       ></i>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="form-inline col-md-12" style="padding-top: 10px">
                        <div class="form-group chk-align" style="border-color: transparent;">
                            <button type="button" class="btn btn-primary btn-flat" id="btnAdd"> Add Field
                            </button>
                        </div>
                    </div>

                    <div class="form-inline col-md-12 div_gnr_rst">
                        <div class="form-group btn_generate">
                            <button type="submit" class="btn btn-success btn-flat" id="btnGenerate">Generate
                            </button>
                        </div>
                        <div class="form-group btn_generate">
                            <button type="button" class="btn btn-default btn-flat" id="btnReset" data-toggle="modal"
                                    data-target="#confirm-delete"> Reset
                            </button>
                        </div>
                    </div>


                    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Confirm Reset</h4>
                                </div>

                                <div class="modal-body">
                                    <p style="font-size: 16px">This will reset all of your fields. Do you want to
                                        proceed?</p>

                                    <p class="debug-url"></p>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-flat btn-default" data-dismiss="modal">No
                                    </button>
                                    <a id="btnModalReset" class="btn btn-flat btn-danger btn-ok" data-dismiss="modal">Yes</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </section>

    <div class="modal fade" id="iconsModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Select Icon</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <i class="livicon" data-name="home" data-size="28" data-c="#418bca" data-hc="#418bca" ></i>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <i class="livicon" data-name="info" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="trash" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="edit" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="dashboard" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="desktop" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="bell" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="bank" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="servers" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="shield" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="gear" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="globe" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="image" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="users" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="list" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="thumbnails-big" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="user" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="wrench" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="map" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="col-md-3 col-sm-4 ">
                            <i class="livicon" data-name="paper-plane" data-size="28" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@stop
@section('footer_scripts')
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/select2/js/select2.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/sweetalert/js/sweetalert.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/sweetalert/js/sweetalert-dev.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}"
            type="text/javascript"></script>
    <script>


//        $('.left-side').addClass('collapse-left');
//        $('.right-side').addClass('strech');
$(".wrapper").addClass("hide_menu");
        $(document).ready(function() {
            $('#form4').bootstrapValidator({
                fields: {
                    model_name: {
                        validators: {
                            notEmpty: {
                                message: 'Model name is required'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z']*$/,
                                message: 'The modal name can consist of characters only'
                            }
                        }
                    }
                }
            });


            $(document.body).on("change",".txtdbType",function(){
                $('this').closest('tr').find('.txtdbType .date').attr('disabled', true);
                $('.txtdbType').closest('tr').find('.textarea').attr('disabled', true);
                var db_type = $(this).val();
                if( db_type == 'text'  ){
                    $('.txtdbType').closest('tr').find('.date').attr('disabled', false);
                    $('.txtdbType').closest('tr').find('.textarea').attr('disabled', false);
                }
            });
            $(document.body).on("change",".drdHtmlType",function(){
                var html_radio = $(this).val();
                if(html_radio == 'radio' || html_radio == 'select' || html_radio == 'checkbox'){
                    $(this).closest('td').find('.htmlValue').css('display','block');
                }else{
                    $(this).closest('td').find('.htmlValue').css('display','none');
                }

            });


        });

        $(".txtValidation").select2({
            tags: true,
            maximumSelectionLength: 2,
            dropdownAutoWidth: true,
            closeOnSelect: false
        });
        $(".txtdbType").select2({
            width: '100%'
        });
        $(".drdHtmlType").select2({
            width: '100%'
        });
//        $(function () {
//            $('body').bind('click.select2body', function () {
//               alert('asd');
//
//            });
//        });

        $('.txtdbType').closest('tr').find('.textarea').attr('disabled', true);
//        $('.txtdbType').closest('tr').find('.checkbox').attr('disabled', true);
        $(document.body).on("change",".txtdbType",function(){

            $(".drdHtmlType").select2({
                width: '100%'
            });
            var selected_dbtype = $(this).closest('tr').find('.txtValidation').val();
            var db_type = $(this).val();
            var html_type = $(this).closest('tr').find('.drdHtmlType').val();

            if( db_type == 'text'  ){
                $('.txtdbType').closest('tr').find('.textarea').attr('disabled', false);
            }
            if( db_type == 'boolean'  ){
                $(this).closest('tr').find('.drdHtmlType').val('checkbox').change();
                $(this).closest('tr').find(".email").prop('disabled',true);
                $(this).closest('tr').find(".integer").prop('disabled',true);
                $(this).closest('tr').find(".date").prop('disabled',true);
                $(this).closest('tr').find(".text").prop('disabled',true);
                $('.txtdbType').closest('tr').find('.checkbox').attr('disabled', false);
                $(this).closest('tr').find('.drdHtmlType option').not('.checkbox').attr('disabled', true);

            }
            if( db_type == 'date'  ){
                $('.txtdbType').closest('tr').find('.drdHtmlType option').not('.date').attr('disabled', true);
            }
            if( (db_type != 'text' && html_type == 'textarea') || (db_type != 'boolean' && html_type == 'checkbox' ) ){
                $(this).closest('tr').find('.drdHtmlType').val('text').change();
                $(".drdHtmlType").select2({
                    width: '100%'
                });
            }
            if(db_type != 'boolean' && html_type == 'checkbox' ){
                $(this).closest('tr').find('.drdHtmlType').val('text').change();
                $(".drdHtmlType").select2({
                    width: '100%'
                });
            }
        });
        $(document.body).on("change",".txtValidation",function(){
                var selected_validation = $(this).closest('tr').find('.txtValidation').val();
            var data2 = $('.txtValidation').select2('data').map(function(elem){
                return elem.text
            });
            $(".txtValidation").select2({
                maximumSelectionLength: 2,
                dropdownAutoWidth: true
            });
                if(selected_validation == 'email'){
                    $(this).closest('tr').find(".date").prop('disabled',true);
                    $(this).closest('tr').find(".boolean").prop('disabled',true);
                    $(this).closest('tr').find(".integer").prop('disabled',true);
                 }
                else if(selected_validation == 'date'){
                    $(this).closest('tr').find(".email").prop('disabled',true);
                    $(this).closest('tr').find(".boolean").prop('disabled',true);
                    $(this).closest('tr').find(".integer").prop('disabled',true);
                }
                else if(selected_validation == 'integer'){
                    $(this).closest('tr').find(".email").prop('disabled',true);
                    $(this).closest('tr').find(".boolean").prop('disabled',true);
                    $(this).closest('tr').find(".date").prop('disabled',true);
                }
                else if(selected_validation == 'boolean'){
                    $(this).closest('tr').find(".email").prop('disabled',true);
                    $(this).closest('tr').find(".integer").prop('disabled',true);
                    $(this).closest('tr').find(".date").prop('disabled',true);
                }
                else {
                    $(this).closest('tr').find(".email").prop('disabled',false);
                    $(this).closest('tr').find(".integer").prop('disabled',false);
                    $(this).closest('tr').find(".date").prop('disabled',false);
                    $(this).closest('tr').find(".boolean").prop('disabled',false);
                }

        });

        var fieldIdArr = [];
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });

            $("#drdCommandType").on("change", function () {
                if ($(this).val() == "infyom:scaffold") {
                    $('#chSwag').hide();
                    $('#chTest').hide();
                }
                else {
                    $('#chSwag').show();
                    $('#chTest').show();
                }
            });

            $(document).ready(function () {
                var htmlStr = '<tr class="item" style="display: table-row;"></tr>';
                var commonComponent = $(htmlStr).filter("tr").load('{!! url('') !!}/admin/field_template');

                $("#btnAdd").on("click", function () {
                    var item = $(commonComponent).clone();
                    initializeCheckbox(item);
                    $("#container").append(item);
                    //Initializing trash liveicon
                    $('.remove').updateLivicon();
                    $('#table tr:last').find('.textarea').attr('disabled', true);

                });

                $("#btnTimeStamps").on("click", function () {
                    var item_created_at = $(commonComponent).clone();
                    $(item_created_at).find('.txtFieldName').val("created_at");
                    renderTimeStampData(item_created_at);
                    initializeCheckbox(item_created_at);
                    $("#container").append(item_created_at);


                    var item_updated_at = $(commonComponent).clone();
                    $(item_updated_at).find('.txtFieldName').val("updated_at");
                    renderTimeStampData(item_updated_at);
                    initializeCheckbox(item_updated_at);
                    $("#container").append(item_updated_at);
                });

                $("#btnPrimary").on("click", function () {
                    var item = $(commonComponent).clone();
                    renderPrimaryData(item);
                    initializeCheckbox(item);
                    $("#container").append(item);
                });

                $("#btnModalReset").on("click", function () {
                    location.reload();
                });

                function capitalizeFirstLetter(string) {
                    return string.charAt(0).toUpperCase() + string.slice(1);
                }

                $('#txtModelName').on('blur', function(){
                    var modelname = {
                        modelName: capitalizeFirstLetter($('#txtModelName').val())
                    }
                    $.ajax({
                        url: '{{ url('admin/modelCheck') }}',
                        type: 'POST',
                        dataType: 'json',
                        contentType: 'application/json',
                        data: JSON.stringify(modelname),
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (result) {
                            if( result.status == false){
                                swal({title:'error',text: result.message, type: "error",closeOnConfirm: false,showLoaderOnConfirm: true});
                                $('#btnGenerate').prop('disabled', true);
                            }
                            else{
                                $('#btnGenerate').prop('disabled', false);
                            }

                        },
                    });
                });

                $('#btnGenerate').on('click',function() {

                    var fieldArr = [];
                    var validationArray,validationString;
                    $('#btnReset').prop('disabled', true);
                    $('#btnGenerate').prop('disabled', true);
                    $('.item').each(function () {

                        var htmlType = $(this).find('.drdHtmlType');
                        var htmlValue = "";
                        if ($(htmlType).val() == "select" || $(htmlType).val() == "radio" || $(htmlType).val() == "checkbox") {
                            htmlValue = $(this).find('.drdHtmlType').val() + ':' + $(this).find('.txtHtmlValue').val();
                        }
                        else {
                            htmlValue = $(this).find('.drdHtmlType').val();
                        }
                        validationArray = $(this).find('.txtValidation').val();

                        if(validationArray==null){
                            validationString = '';
                        }
                        else
                            validationString = validationArray.join('|');

                        fieldArr.push({
                            fieldInput: $(this).find('.txtFieldName').val() + ':' + $(this).find('.txtdbType').val(),
                            htmlType: htmlValue,
                            validations: validationString,
                            searchable: $(this).find('.chkSearchable').prop('checked'),
                            fillable: $(this).find('.chkFillable').prop('checked'),
                            primary: $(this).find('.chkPrimary').prop('checked'),
                            inForm: $(this).find('.chkInForm').prop('checked'),
                            inIndex: $(this).find('.chkInIndex').prop('checked')
                        });
                    });
                    //check if atleast one field added or not
                    if(fieldArr.length == 0)
                    {
                        swal(
                            'Oops...',
                            'You must add atleast one field!',
                            'error'
                        );
                        throw new Error();
                    }

                    fieldArr.unshift({
                        fieldInput:'id:increments',
                        htmlType : validationString,
                        validations:false,
                        searchable:false,
                        fillable: false,
                        primary:true,
                        inForm:false,
                        inIndex:false
                    });

                    var data = {
                        modelName: capitalizeFirstLetter($('#txtModelName').val()),
                        commandType: $('#drdCommandType').val(),
                        tableName: $('#txtCustomTblName').val(),
                        iconName: $('#leftMenuIcons').val(),
                        prefix: $('#txtPrefix').val(),
                        paginate: $('#txtPaginate').val(),
                        migrate: $('#chkMigrate').prop('checked'),
                        options: {
                            softDelete: $('#chkDelete').prop('checked'),
                            save: $('#chkSave').prop('checked'),
                            swagger: $('#chkSwagger').prop('checked'),
                            tests: $('#chkTestCases').prop('checked'),
                            datatables: $('#chkDataTable').prop('checked')
                        },
                        fields: fieldArr
                    };

                    console.log(data);

                    data['_token'] = $('#token').val();



                    $.ajax({
                        url: '{!! url('') !!}/admin/generator_builder/generate',
                        type: "POST",
                        dataType: 'json',
                        contentType: 'application/json',
                        data: JSON.stringify(data),
                        success: function (result) {
//                            swal('success',result,"success");
                            swal({title:'success',text: result, type: "success",closeOnConfirm: false,showLoaderOnConfirm: true},
                                function(){
                                    setTimeout(function(){location.reload();}, 1500);
                                });
                            $('#btnReset').prop('disabled', false);
                        },
                        error: function () {
                            swal(
                                'Oops...',
                                'Something went wrong!',
                                'error'
                            )
                            $('#btnReset').prop('disabled', false);
                        }
                    });

                    return false;
                });

                function renderPrimaryData(el) {

                    $('.chkPrimary').iCheck(getiCheckSelection(false));

                    $(el).find('.txtFieldName').val("id");
                    $(el).find('.txtdbType').val("increments");
                    $(el).find('.chkSearchable').attr('checked', false);
                    $(el).find('.chkFillable').attr('checked', false);
                    $(el).find('.chkPrimary').attr('checked', true);
                    $(el).find('.chkInForm').attr('checked', false);
                    $(el).find('.chkInIndex').attr('checked', false);
                }

                function renderTimeStampData(el) {
                    $(el).find('.txtdbType').val("timestamp");
                    $(el).find('.chkSearchable').attr('checked', false);
                    $(el).find('.chkFillable').attr('checked', false);
                    $(el).find('.chkPrimary').attr('checked', false);
                    $(el).find('.chkInForm').attr('checked', false);
                    $(el).find('.chkInIndex').attr('checked', false);
                    $(el).find('.drdHtmlType').val('date').trigger('change');
                }

            });

            function initializeCheckbox(el) {
                $(el).find('input:checkbox').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue'
                });
                $(el).find("select").select2({width: '100%'});

                $(el).find(".chkPrimary").on("ifClicked", function () {
                    $('.chkPrimary').each(function () {
                        $(this).iCheck('uncheck');
                    });
                });

                $(el).find(".chkPrimary").on("ifChanged", function () {
                    if ($(this).prop('checked') == true) {
                        $(el).find(".chkSearchable").iCheck('uncheck');
                        $(el).find(".chkFillable").iCheck('uncheck');
                        $(el).find(".chkInForm").iCheck('uncheck');
                    }
                });

                var htmlType = $(el).find('.drdHtmlType');

                $(htmlType).select2().on('change', function () {
                    if ($(htmlType).val() == "select" || $(htmlType).val() == "radio")

                        $(el).find('.htmlValue').show();
                    else
                        $(el).find('.htmlValue').hide();
                });



            }


        });

        function getiCheckSelection(value) {
            if (value == true)
                return 'checked';
            else
                return 'uncheck';
        }

        function removeItem(e) {
            e.parentNode.parentNode.parentNode.removeChild(e.parentNode.parentNode);
        }

        $('#txtModelName').keyup(function(){
            var modalName=$('#txtModelName').val();
            var tableName=modalName.concat('s');
            $('#txtCustomTblName').val(tableName);
            $('#txtCustomTblName').css('text-transform','lowercase');
            if(modalName==''){
                $('#txtCustomTblName').val('');
            }
        });
        $('.livicon').on('click',function(){
            var icon_name=$(this).attr('data-name');
            $('#leftMenuIcons').val(icon_name);
//            $('.close').click();
        });
        $(function() {
            $('.txtHtmlValue').on('keypress', function(e) {
                if (e.which == 32)
                    return false;
            });
            $( "#txtModelName" ).keypress(function(e) {
                var key = e.keyCode;
                if (key >= 48 && key <= 57) {
                    e.preventDefault();
                }
            });
        });

    </script>
@stop
