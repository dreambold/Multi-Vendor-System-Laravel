@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    JS Charts
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link rel="stylesheet" href="http://www.jtable.org/Scripts/jtable/themes/metro/blue/jtable.css" />
    <link rel="stylesheet" href="http://www.jtable.org/Content/themes/metroblue/jquery-ui.css" />
    {{--<link rel="stylesheet" href="http://www.jtable.org/Content/highlight.css"/>--}}
    {{--<link rel="stylesheet" href="http://www.jtable.org/Scripts/syntaxhighligher/styles/shCore.css" />--}}

@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>JSCharts</h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li><a href="#"> Charts</a></li>
            <li class="active">JS Charts</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <!-- Basic charts strats here-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="barchart" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Bar Chart
                        </h4>
                        <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <!-- Container for jTable -->
                        <div id="StudentTableContainer">
                        </div>
                        <!-- An area to show selected rows (for demonstration) -->
                        <br />
                        <button id="DeleteAllButton">
                            Delete all selected records</button>
                        <br />
                        <br />
                        Selected rows (refreshed on <b>selectionChanged</b> event):
                        <div id="SelectedRowList">
                            No row selected! Select rows to see here...
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </section>
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <script src="http://www.jtable.org/Scripts/jtable/jquery.jtable.js"></script>
    <script src="http://www.jtable.org/Scripts/jtablesite.js"></script>
<script src="http://www.jtable.org/Scripts/syntaxhighligher/shCore.js"></script>

    <script type="text/javascript">
        var cities;
        $.ajax({
            url: "{{ url('assets/jtable_data/cityOptions.json') }}",
            async: false,
            success: function (data){
                cities =  data.Options;
            }
        });

        $(document).ready(function () {

            //Prepare jtable plugin
            $('#StudentTableContainer').jtable({
                title: 'Student List',
                paging: true,
                sorting: true,
                defaultSorting: 'Name ASC',
                selecting: true, //Enable selecting
                multiselect: true, //Allow multiple selecting
                selectingCheckboxes: true, //Show checkboxes on first column
                //selectOnRowClick: false, //Enable this to only select using checkboxes
                ajaxSettings: {
                    type: 'GET',
                    dataType: 'json'
                },
                actions: {
                    listAction:  "{{ url('assets/jtable_data/jtable.json') }}",
                    deleteAction: function (postData) {
                        console.log("deleting from custom function...");
                        return $.Deferred(function ($dfd) {
                            $.ajax({
                                url: "{{ url('assets/jtable_data/delete.json') }}",
                                type: 'POST',
                                dataType: 'json',
                                data: postData,
                                success: function (data) {
                                    $dfd.resolve(data);
                                },
                                error: function () {
                                    $dfd.reject();
                                }
                            });
                        });
                    },
                    updateAction: "{{ url('assets/jtable_data/update.json') }}",
                    createAction: function (postData) {
                        console.log("creating from custom function...");
                        console.log(postData);
                        return $.Deferred(function ($dfd) {
                            $.ajax({
                                url: "{{ url('assets/jtable_data/create.json') }}",
                                type: 'POST',
                                dataType: 'json',
                                data: postData,
                                success: function (data) {
                                    console.log('success');
                                    $dfd.resolve(data);
                                },
                                error: function () {
                                    console.log('error');
                                    $dfd.reject();
                                }
                            });
                        });
                    }
                },
                fields: {
                    StudentId: {
                        key: true,
                        create: false,
                        edit: false,
                        list: false
                    },
                    Name: {
                        title: 'Name',
                        width: '23%',
                        inputClass: 'validate[required]'
                    },
                    EmailAddress: {
                        title: 'Email address',
                        width: '15%',
                        inputClass: 'validate[required,custom[email]]'
                    },

                    Gender: {
                        title: 'Gender',
                        width: '13%',
                        options: { 'M': 'Male', 'F': 'Female' }
                    },
                    CityId: {
                        title: 'City',
                        width: '12%',
                        options: cities

                    },
                    BirthDate: {
                        title: 'Birth date',
                        width: '15%',
                        type: 'date',
                        displayFormat: 'yy-mm-dd',
                        inputClass: 'validate[required,custom[date]]'
                    },
                    Education: {
                        title: 'Education',
                        list: false,
                        type: 'radiobutton',
                        options: { '1': 'Primary school', '2': 'High school', '3': 'University' },
                        inputClass: 'validate[required]'
                    },
                    About: {
                        title: 'About this person',
                        type: 'textarea',
                        list: false
                    },
                    IsActive: {
                        title: 'Status',
                        width: '12%',
                        type: 'checkbox',
                        values: { 'false': 'Passive', 'true': 'Active' },
                        defaultValue: 'true'
                    },
                    RecordDate: {
                        title: 'Record date',
                        width: '15%',
                        type: 'date',
                        displayFormat: 'yy-mm-dd',
                        create: false,
                        edit: false,
                        sorting: false
                    }
                },
                //Register to selectionChanged event to hanlde events
                selectionChanged: function () {
                    //Get all selected rows
                    var $selectedRows = $('#StudentTableContainer').jtable('selectedRows');

                    $('#SelectedRowList').empty();
                    if ($selectedRows.length > 0) {
                        //Show selected rows
                        $selectedRows.each(function () {
                            var record = $(this).data('record');
                            $('#SelectedRowList').append(
                                '<b>StudentId</b>: ' + record.StudentId +
                                '<br /><b>Name</b>:' + record.Name + '<br /><br />'
                            );
                        });
                    } else {
                        //No rows selected
                        $('#SelectedRowList').append('No row selected! Select rows to see here...');
                    }
                },
                rowInserted: function (event, data) {
                    if (data.record.Name.indexOf('Andrew') >= 0) {
                        $('#StudentTableContainer').jtable('selectRows', data.row);
                    }
                }
            });

            //Load student list from server
            $('#StudentTableContainer').jtable('load');

            //Delete selected students
            $('#DeleteAllButton').button().click(function () {
                var $selectedRows = $('#StudentTableContainer').jtable('selectedRows');
                $('#StudentTableContainer').jtable('deleteRows', $selectedRows);
            });

        });

    </script>

@stop