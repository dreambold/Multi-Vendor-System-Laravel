@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
Custom Data Tables
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/colReorder.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/rowReorder.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/scroller.bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-slider/css/bootstrap-slider.min.css') }}" />
    <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/tables.css') }}" />
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Custom Data Tables</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">DataTables</a>
                    </li>
                    <li class="active">Custom Data Tables</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <div class="form-group">

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary filterable">
                            <div class="panel-heading clearfix" >
                                <div class="panel-title pull-left">
                                       <div class="caption">
                                    <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Data Range Table
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    <label class="control-label lab_pad">ID Range :</label><br>
                                    <div> <b class="margin_right15"> {{$min_id}} </b>
                                        <input id="id_range" type="text" data-slider-id='id_range' class="slider form-control" data-slider-handle="square" value="" data-slider-min="{{$min_id}}" data-slider-max="{{$max_id}}" data-slider-step="1" data-slider-value="[{{$min_id}},{{$max_id}}]"/> <b style="margin-left: 15px;">@if(!empty($max_count)){{$max_id}} @else 10 @endif</b>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body ">
                                <div class="table-responsive">
                                <table class="table table-bordered " id="table1">
                                    <thead>
                                    <tr class="filters">
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>User E-mail</th>
                                        <th>Job</th>
                                        <th>Age</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary filterable">
                            <div class="panel-heading clearfix" >
                                <div class="panel-title pull-left">
                                    <div class="caption">
                                        <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                        Radio Selection Filter Table
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                <form>
                                    <label class="control-label">Age :</label><br>
                                    <label class="radio-inline">
                                        &nbsp;<input type="radio" class="custom-radio" name="radioAge[]" id="radio_one" value="35" >&nbsp; Below 35</label>
                                    <label class="radio-inline">
                                        <input type="radio" class="custom-radio" name="radioAge[]" id="radio_two" value="50">&nbsp;Below 50</label>
                                    <label class="radio-inline">
                                        <input type="radio" class="custom-radio" name="radioAge[]" id="radio_three" value="100">&nbsp; Above 50</label>
                                    <label class="radio-inline">
                                        <input type="radio" checked class="custom-radio" name="radioAge[]"
                                               id="radio_four" value="all">&nbsp; All</label>
                                </form>
                            </div>
                                </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                <table class="table table-bordered " id="table2">
                                    <thead>
                                    <tr class="filters">
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>User E-mail</th>
                                        <th>Job</th>
                                        <th>Age</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary filterable">
                            <div class="panel-heading clearfix">
                                <div class="panel-title pull-left">
                                    <div class="caption">
                                        <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                        Selection Filter Table
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <label class="control-label">Profession :</label>
                                {!! Form::select('professions', $professions , null,['class' => 'form-control', 'id' => 'professions', 'placeholder' => 'Please Select One...']) !!}
                            </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                <table class="table table-bordered " id="table3">
                                    <thead>
                                    <tr class="filters">
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>User E-mail</th>
                                        <th>Job</th>
                                        <th>Age</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary filterable">
                            <div class="panel-heading clearfix" >
                                <div class="panel-title pull-left">
                                    <div class="caption">
                                        <i class="livicon" data-name="camera" data-size="16" data-loop="true"
                                           data-c="#fff" data-hc="white"></i>
                                        Button Filter Table
                                    </div>
                                </div>
                                <div class="pull-right" data-toggle="buttons">
                                    <label class="btn btn-default tag"  id="buttonMale">
                                        <input type="radio" name="tags" value="button1" id="buttonMale" autocomplete="off" data-value="male"> Male
                                    </label>
                                    <label class="btn btn-default tag"  id="buttonFemale">
                                        <input type="radio" name="tags" value="button2" id="buttonFemale" autocomplete="off" data-value="female"> Female
                                    </label>
                                    <label class="btn btn-default tag"  id="buttonAll">
                                        <input type="radio" name="tags" value="button3" id="buttonAll" autocomplete="off" data-value="all"> All
                                    </label>
                                </div>

                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                <table class="table table-striped" id="table4">
                                    <thead>
                                    <tr class="filters">
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>User E-mail</th>
                                        <th>Job</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <form action="">
                        <div class="col-lg-12">
                            <div class="panel panel-primary filterable">
                                <div class="panel-heading clearfix" >
                                    <div class="panel-title pull-left">
                                        <div class="caption">
                                            <i class="livicon" data-name="camera" data-size="16" data-loop="true"
                                               data-c="#fff" data-hc="white"></i>
                                            All Custom Filters Table
                                        </div>
                                    </div>
                                    <div class="pull-right" data-toggle="buttons">
                                        <label class="btn btn-default tag" id="buttonMale2">
                                            <input type="radio" name="tags" value="button1" id="buttonMale2" autocomplete="off" data-value="male"> Male
                                        </label>
                                        <label class="btn btn-default tag" id="buttonFemale2">
                                            <input type="radio" name="tags" value="button2" id="buttonFemale2" autocomplete="off" data-value="female"> Female
                                        </label>
                                        <label class="btn btn-default tag" id="buttonAll2">
                                            <input type="radio" name="tags" value="button3" id="buttonAll2" autocomplete="off" data-value="all"> All
                                        </label>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="control-label">ID Range :</label><br>
                                        <div> <b class="margin_right15">{{$min_id}}</b>
                                            <input id="id_range2" type="text" data-slider-id='id_range' class="slider form-control" data-slider-handle="square" value="" data-slider-min="{{$min_id}}" data-slider-max="{{$max_id}}" data-slider-step="1" data-slider-value="[{{$min_id}},{{$max_id}}]"/> <b style="margin-left: 15px;">@if(!empty($max_count)){{$max_id}} @else 10 @endif</b>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <label class="control-label mar150">Age :</label><br>
                                        <label class="radio-inline">
                                            &nbsp;<input type="radio" class="custom-radio2" name="radioAge[]" id="custom_radio_one" value="35" >&nbsp; Below 35</label>
                                        <label class="radio-inline">
                                            <input type="radio" class="custom-radio2" name="radioAge[]" id="custom_radio_two" value="50">&nbsp;Below 50</label>
                                        <label class="radio-inline">
                                            <input type="radio" class="custom-radio2" name="radioAge[]" id="custom_radio_three" value="100">&nbsp; Above 50</label>
                                        <label class="radio-inline">
                                            <input type="radio" checked class="custom-radio2" name="radioAge[]"
                                                   id="radio_four" value="all">&nbsp; All</label>
                                    </div>

                                    <div class="col-md-3">
                                        <label class="control-label">Profession :</label>
                                        {!! Form::select('professions', $professions, null,['class' => 'form-control', 'id' => 'professions2', 'placeholder' => 'Please Select One...']) !!}
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                    <table class="table table-striped" id="table5">
                                        <thead>
                                        <tr class="filters">
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>User E-mail</th>
                                            <th>Job</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- row-->
            </section>
            <!-- content -->
    @stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/jeditable/js/jquery.jeditable.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.buttons.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.colReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.responsive.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.rowReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.colVis.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.html5.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/pdfmake.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/vfs_fonts.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.scroller.js') }}" ></script>
    <script src="{{ asset('assets/vendors/bootstrap-slider/js/bootstrap-slider.js') }}" ></script>
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script>

        $('input[type="radio"].custom-radio').iCheck({
            radioClass: 'iradio_flat-blue',
            increaseArea: '20%'
        });
        $('input[type="radio"].custom-radio2').iCheck({
            radioClass: 'iradio_flat-blue',
            increaseArea: '20%'
        });
        $(function() {
            var jobButton,ageRadio,idSlider,professionSelect;
            var jobButton2,ageRadio2,idSlider2,professionSelect2;
            var table = $('#table1').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! URL::to('admin/custom_datatables/sliderData') !!}',
                    data: function (d) {
                        d.idSlider = idSlider;
                    }
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'firstname', name: 'firstname' },
                    { data: 'lastname', name: 'lastname' },
                    { data: 'email', name: 'email' },
                    { data: 'job', name: 'job' },
                    { data: 'age', name: 'age' }
                ]
            });
            table.on( 'draw', function () {
                $('.livicon').each(function(){
                    $(this).updateLivicon();
                });
            } );

            $('#id_range').bootstrapSlider()
                    .on('slideStop', function(ev){
                        idSlider = $(this).bootstrapSlider('getValue');
                        table.draw();
                    });

            var table2 = $('#table2').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! URL::to('admin/custom_datatables/radioData') !!}',
                    data: function (d) {
                        d.ageRadio=ageRadio;
                    }
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'firstname', name: 'firstname' },
                    { data: 'lastname', name: 'lastname' },
                    { data: 'email', name: 'email' },
                    { data: 'job', name: 'job' },
                    { data: 'age', name: 'age' }
                ]
            });
            table2.on( 'draw', function () {
                $('.livicon').each(function(){
                    $(this).updateLivicon();
                });
            } );
            $("input[type='radio'].custom-radio").on('ifChanged', function (event) {
                ageRadio =  $(this).val();
                table2.draw();
            });
            var table3 = $('#table3').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! URL::to('admin/custom_datatables/selectData') !!}',
                    data: function (d) {
                        d.professionSelect = professionSelect;
                    }
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'firstname', name: 'firstname' },
                    { data: 'lastname', name: 'lastname' },
                    { data: 'email', name: 'email' },
                    { data: 'job', name: 'job' },
                    { data: 'age', name: 'age' }
                ]
            });
            table3.on( 'draw', function () {
                $('.livicon').each(function(){
                    $(this).updateLivicon();
                });
            } );
            $('#professions').click(function () {
                professionSelect = $(this).val();
                table3.draw();

            });

            var table4 = $('#table4').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! URL::to('admin/custom_datatables/buttonData') !!}',
                    data: function (d) {
                        d.jobButton=jobButton
                    }
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'firstname', name: 'firstname' },
                    { data: 'lastname', name: 'lastname' },
                    { data: 'email', name: 'email' },
                    { data: 'job', name: 'job' },
                    { data: 'age', name: 'age' },
                    { data: 'gender', name: 'gender' }
                ]
            });
            table4.on( 'draw', function () {
                $('.livicon').each(function(){
                    $(this).updateLivicon();
                });
            } );
            $('#buttonMale').click(function () {
                jobButton='male';
                table4.draw();
            });
            $('#buttonFemale').click(function () {
                jobButton='female';
                table4.draw();
            });
            $('#buttonAll').click(function () {
                jobButton= null;
                table4.draw();
            });

            $('#id_range2').bootstrapSlider()
                    .on('slideStop', function(ev){
                        idSlider2 = $(this).bootstrapSlider('getValue');
                        table5.draw();
                    });
            $('.custom-radio2').on('ifChanged', function(event){
                ageRadio2 =  $(this).val();
                table5.draw();
            });
            $('#professions2').click(function () {
                professionSelect2 = $(this).val();
                table5.draw();
            });
            $('#buttonMale2').click(function () {
                jobButton2='male';
                table5.draw();
            });
            $('#buttonFemale2').click(function () {
                jobButton2='female';
                table5.draw();
            });
            $('#buttonAll2').click(function () {
                jobButton2= null;
                table5.draw();
            });

            var table5 = $('#table5').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! URL::to('admin/custom_datatables/totalData') !!}',
                    data: function (d) {
                        d.ageRadio2=ageRadio2;
                        d.idSlider2=idSlider2;
                        d.professionSelect2 = professionSelect2;
                        d.jobButton2=jobButton2;
                    }
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'firstname', name: 'firstname' },
                    { data: 'lastname', name: 'lastname' },
                    { data: 'email', name: 'email' },
                    { data: 'job', name: 'job' },
                    { data: 'age', name: 'age' },
                    { data: 'gender', name: 'gender' }
                ]
            });
        });

    </script>
@stop
