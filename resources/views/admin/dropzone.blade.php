@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Drop Zone
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('assets/vendors/dropzone/css/dropzone.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .dropzone .dz-preview .dz-image img {
            width :100%;
        }
    </style>
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <h1>File Drop Zone</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li><a href="#">Laravel Examples</a></li>
            <li class="active">File Drop Zone</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    This plugins works only on Latest Chrome, Firefox, Safari, Opera & Internet Explorer 10.
                </div>
                <!-- First Basic Table strats here-->
                <div class="panel panel-info" style="overflow-y:auto; overflow-x: hidden">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="upload-alt" data-size="20" data-loop="true" data-c="#fff" data-hc="white"></i>
                            File Drop Zone
                        </h3>
                    </div>
                    <div class="panel-body" style="padding:0px !important;">
                        <div class="col-md-12" style="padding:30px;">
                            {!! Form::open(array('url' => URL::to('admin/file/create'), 'method' => 'post', 'id'=>'myDropzone','class' => 'dropzone', 'files'=> true)) !!}
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript" src="{{ asset('assets/vendors/dropzone/js/dropzone.js') }}" ></script>
    <script>
        var FormDropzone = function() {
            return {
                //main function to initiate the module
                init: function() {
                    Dropzone.options.myDropzone = {
                        init: function() {
                            this.on("success", function(file,responseText) {
                                var obj = jQuery.parseJSON(responseText);
                                file.id = obj.id;
                                file.filename = obj.filename;
                                // Create the remove button
                                var removeButton = Dropzone.createElement("<button style='margin: 10px 0 0 15px;'>Remove file</button>");

                                // Capture the Dropzone instance as closure.
                                var _this = this;

                                // Listen to the click event
                                removeButton.addEventListener("click", function(e) {
                                    // Make sure the button click doesn't submit the form:
                                    e.preventDefault();
                                    e.stopPropagation();

                                    $.ajax({
                                        url: "file/delete",
                                        type: "DELETE",
                                        data: { "id" : file.id, "_token": '{{ csrf_token() }}' }
                                    });
                                    // Remove the file preview.
                                    _this.removeFile(file);
                                });

                                // Add the button to the file preview element.
                                file.previewElement.appendChild(removeButton);

                            });

                        }
                    }
                }
            };
        }();
        jQuery(document).ready(function() {

            FormDropzone.init();
        });
    </script>

@stop
