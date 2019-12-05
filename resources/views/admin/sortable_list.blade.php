@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Sortable List
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('assets/css/pages/sortable_list.css')}}" rel="stylesheet">
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>Sortable List</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-c="#000" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">UI features</a>
                    </li>
                    <li class="active">Sortable List</li>
                </ol>
            </section>
            <!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Sortable List1
                    </h3>
                            <span class="pull-right">
                                <i class="fa fa-fw fa-chevron-up clickable"></i>
                                <i class="fa fa-fw fa-times removepanel clickable"></i>
                            </span>
                </div>
                <div class="panel-body">
                    <div data-force="30" class="layer block">
                        <ul id="foo" class="block__list block__list_words" >
                            <li>List1</li>
                            <li>List2</li>
                            <li>List3</li>
                            <li>List4</li>
                            <li>List5</li>
                            <li>List6</li>
                            <li>List7</li>
                            <li>List8</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Sortable List2
                    </h3>
                    <span class="pull-right">
                        <i class="fa fa-fw fa-chevron-up clickable"></i>
                        <i class="fa fa-fw fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div data-force="18" class="layer block">
                        <ul id="bar" class="block__list block__list_tags">
                            <li class="btn btn-raised btn-primary">Item1
                                <div class="ripple-container"></div>
                            </li>
                            <li class="btn btn-raised btn-primary">Item2
                                <div class="ripple-container"></div>
                            </li>
                            <li class="btn btn-raised btn-primary">Item3
                                <div class="ripple-container"></div>
                            </li>
                            <li class="btn btn-raised btn-primary">Item4
                                <div class="ripple-container"></div>
                            </li>
                            <li class="btn btn-raised btn-primary">Item5
                                <div class="ripple-container"></div>
                            </li>
                            <li class="btn btn-raised btn-primary">Item6
                                <div class="ripple-container"></div>
                            </li>
                            <li class="btn btn-raised btn-primary">Item7
                                <div class="ripple-container"></div>
                            </li>
                            <li class="btn btn-raised btn-primary">Item8
                                <div class="ripple-container"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Addable list
                    </h3>
                    <span class="pull-right">
                        <i class="fa fa-fw fa-chevron-up clickable"></i>
                        <i class="fa fa-fw fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div id="filter">
                        <div class="block__list block__list_words">
                            <ul id="editable" class="list-unstyled">
                                <li>List1<i class="js-remove">✖</i></li>
                                <li>List2<i class="js-remove">✖</i></li>
                                <li>List3<i class="js-remove">✖</i></li>
                            </ul>
                            <button data-target="#myModal" data-toggle="modal" class="btn btn-primary btn-block editable_add">Add</button>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">New List</h4>
                            </div>
                            <div class="modal-body">
                                <form action="#" method="post" class="form" id="myform">
                                    <div class="form-group">
                                        <label class="control-label" for="list-name">name:</label>
                                        <input type="text" class="form-control" id="list-name" required>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="save">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Multi list
                    </h3>
                    <span class="pull-right">
                        <i class="fa fa-fw fa-chevron-up clickable"></i>
                        <i class="fa fa-fw fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div id="multi">
                        <div class="layer tile" data-force="30">
                            <div class="tile__name">Group A</div>
                            <div class="tile__list">
                                <img src="{{ asset('assets/img/authors/avatar.jpg') }}"/>
                                <img src="{{ asset('assets/img/authors/avatar1.jpg') }}"/>
                                <img src="{{ asset('assets/img/authors/avatar2.jpg') }}"/>
                                <img src="{{ asset('assets/img/authors/avatar3.jpg') }}"/>
                            </div>
                        </div>
                        <div class="layer tile" data-force="25">
                            <div class="tile__name">Group B</div>
                            <div class="tile__list">
                                <img src="{{ asset('assets/img/authors/avatar4.jpg') }}"/>
                                <img src="{{ asset('assets/img/authors/avatar5.jpg') }}"/>
                                <img src="{{ asset('assets/img/authors/avatar6.jpg') }}"/>
                            </div>
                        </div>
                        <div class="layer tile" data-force="20">
                            <div class="tile__name">Group C</div>
                            <div class="tile__list">
                                <img src="{{ asset('assets/img/authors/avatar7.jpg') }}"/>
                                <img src="{{ asset('assets/img/authors/avatar.jpg') }}"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Advanced groups
                    </h3>
                    <span class="pull-right">
                        <i class="fa fa-fw fa-chevron-up clickable"></i>
                        <i class="fa fa-fw fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div id="advanced">
                        <div class="col-lg-4">
                            <div  class="block__list block__list_words">
                                <h4 class="block__list-title">pull & put</h4>
                                <ul id="advanced-1" class="list-unstyled">
                                    <li>Meat</li>
                                    <li>Potato</li>
                                    <li>Tea</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="block__list block__list_words">
                                <h4 class="block__list-title">only pull (clone) no&nbsp;reordering</h4>
                                <ul id="advanced-2" class="list-unstyled">
                                    <li>Sex</li>
                                    <li>Drugs</li>
                                    <li>Rock'n'roll</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="block__list block__list_words">
                                <h4 class="block__list-title ">only put</h4>
                                <ul id="advanced-3" class="list-unstyled">
                                    <li>Money</li>
                                    <li>Force</li>
                                    <li>Agility</li>
                                </ul>
                            </div>
                        </div>
                        <div style="clear: both"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12"><div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Drag handle and selectable text
                    </h3>
                    <span class="pull-right">
                        <i class="fa fa-fw fa-chevron-up clickable"></i>
                        <i class="fa fa-fw fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div id="handle">
                        <div class="block__list_words">
                            <ul id="handle-1">
                                <li><span class="drag-handle">&#9776;</span>List Item 1</li>
                                <li><span class="drag-handle">&#9776;</span>List Item2</li>
                                <li><span class="drag-handle">&#9776;</span>List Item 3</li>
                            </ul>
                        </div>
                        <div style="clear: both"></div>
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

    <script src="{{ asset('assets/vendors/Sortable/js/Sortable.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/sortable_list.js') }}" type="text/javascript"></script>

    
@stop
