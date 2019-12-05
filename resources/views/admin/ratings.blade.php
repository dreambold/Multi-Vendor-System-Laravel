@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Ratings
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('assets/vendors/starability/starability-all.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/vendors/bootstrapStarRating/css/star-rating.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/pages/custom_rating.css') }}" rel="stylesheet" type="text/css"/>
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Ratings</h1>
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
            <li class="active">Ratings</li>
        </ol>
    </section>
    <!--section ends-->
    <!-- Main content -->
    <section class="content">
        <!--main content-->
        <div class="row starrate">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="trophy" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Ratings
                        </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="pad10">
                                    <form>
                                        <fieldset class="starability-basic">
                                            <h5>Default star rating:</h5>
                                            <input type="radio" id="rate5" name="rating" value="5" />
                                            <label for="rate5" title="Amazing"></label>
                                            <input type="radio" id="rate4" name="rating" value="4" />
                                            <label for="rate4" title="Very good"></label>
                                            <input type="radio" id="rate3" name="rating" value="3" />
                                            <label for="rate3" title="Average"></label>
                                            <input type="radio" id="rate2" name="rating" value="2" />
                                            <label for="rate2" title="Not good"></label>
                                            <input type="radio" id="rate1" name="rating" value="1" />
                                            <label for="rate1" title="Terrible"></label>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="pad10">
                                    <form>
                                        <fieldset class="starability-slot">
                                            <h5>Slot machine rating:</h5>
                                            <input type="radio" id="slot-rate5" name="rating" value="5" />
                                            <label for="slot-rate5" title="Amazing"></label>
                                            <input type="radio" id="slot-rate4" name="rating" value="4" />
                                            <label for="slot-rate4" title="Very good"></label>
                                            <input type="radio" id="slot-rate3" name="rating" value="3" />
                                            <label for="slot-rate3" title="Average"></label>
                                            <input type="radio" id="slot-rate2" name="rating" value="2" />
                                            <label for="slot-rate2" title="Not good"></label>
                                            <input type="radio" id="slot-rate1" name="rating" value="1" />
                                            <label for="slot-rate1" title="Terrible"></label>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="pad10">
                                    <form>
                                        <fieldset class="starability-grow">
                                            <h5>Growing star rating:</h5>
                                            <input type="radio" id="growing-rate5" name="rating" value="5" />
                                            <label for="growing-rate5" title="Amazing"></label>
                                            <input type="radio" id="growing-rate4" name="rating" value="4" />
                                            <label for="growing-rate4" title="Very good"></label>
                                            <input type="radio" id="growing-rate3" name="rating" value="3" />
                                            <label for="growing-rate3" title="Average"></label>
                                            <input type="radio" id="growing-rate2" name="rating" value="2" />
                                            <label for="growing-rate2" title="Not good"></label>
                                            <input type="radio" id="growing-rate1" name="rating" value="1" />
                                            <label for="growing-rate1" title="Terrible"></label>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="pad10">
                                    <form>
                                        <fieldset class="starability-growRotate">
                                            <h5>Growing & star rating:</h5>
                                            <input type="radio" id="growing-rotating-rate5" name="rating" value="5" />
                                            <label for="growing-rotating-rate5" title="Amazing"></label>
                                            <input type="radio" id="growing-rotating-rate4" name="rating" value="4" />
                                            <label for="growing-rotating-rate4" title="Very good"></label>
                                            <input type="radio" id="growing-rotating-rate3" name="rating" value="3" />
                                            <label for="growing-rotating-rate3" title="Average"></label>
                                            <input type="radio" id="growing-rotating-rate2" name="rating" value="2" />
                                            <label for="growing-rotating-rate2" title="Not good"></label>
                                            <input type="radio" id="growing-rotating-rate1" name="rating" value="1" />
                                            <label for="growing-rotating-rate1" title="Terrible"></label>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="pad10">
                                    <form>
                                        <fieldset class="starability-fade">
                                            <h5>Fading star rating:</h5>
                                            <input type="radio" id="fading-rate5" name="rating" value="5" />
                                            <label for="fading-rate5" title="Amazing"></label>
                                            <input type="radio" id="fading-rate4" name="rating" value="4" />
                                            <label for="fading-rate4" title="Very good"></label>
                                            <input type="radio" id="fading-rate3" name="rating" value="3" />
                                            <label for="fading-rate3" title="Average"></label>
                                            <input type="radio" id="fading-rate2" name="rating" value="2" />
                                            <label for="fading-rate2" title="Not good"></label>
                                            <input type="radio" id="fading-rate1" name="rating" value="1" />
                                            <label for="fading-rate1" title="Terrible"></label>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="pad10">
                                    <form>
                                        <fieldset class="starability-checkmark">
                                            <h5>Checkmark rating:</h5>
                                            <input type="radio" id="checkmark-rate5" name="rating" value="5" />
                                            <label for="checkmark-rate5" title="Amazing"></label>
                                            <input type="radio" id="checkmark-rate4" name="rating" value="4" />
                                            <label for="checkmark-rate4" title="Very good"></label>
                                            <input type="radio" id="checkmark-rate3" name="rating" value="3" />
                                            <label for="checkmark-rate3" title="Average"></label>
                                            <input type="radio" id="checkmark-rate2" name="rating" value="2" />
                                            <label for="checkmark-rate2" title="Not good"></label>
                                            <input type="radio" id="checkmark-rate1" name="rating" value="1" />
                                            <label for="checkmark-rate1" title="Terrible"></label>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="magic" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Movie Rating
                        </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group label-floating is-empty">
                                <h5 for="your_name" class="control-label">Your Name</h5>
                                <input type="text" class="form-control" id="your_name">
                            </div>
                            <div class="form-group label-floating is-empty">
                                <h5 for="movie_name" class="control-label">Movie Name</h5>
                                <input type="text" class="form-control" id="movie_name">
                            </div>
                            <div class="form-group label-floating is-empty">
                                <h5 class="control-label" for="your_review">Your Review</h5>
                                <textarea id="your_review" name="example-textarea-input" rows="4" class="form-control resize_vertical"></textarea>
                            </div>
                            <div class="col-md-12 pad10">
                                <h5 class="control-label">Rate the Movie:</h5>
                                <input id="input-3" name="input-3" class="rating-loading">
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Submit your Rating</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!--select2 starts-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="trophy" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Advanced Ratings
                        </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                    </div>
                    <div class="panel-body adv_rate">
                        <div class="col-md-12 pad10">
                            <h5 class="control-label">Basic Rating:</h5>
                            <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="1">
                        </div>
                        <div class="col-md-12 pad10">
                            <h5 class="control-label">Half Stars Rating:</h5>
                            <input id="input-4" name="input-4" class="rating rating-loading" data-show-clear="false" data-show-caption="true">
                        </div>
                        <div class="col-md-12 pad10">
                            <h5>Fractional Rating:</h5>
                            <input id="input-2" name="input-2" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1">
                        </div>
                    </div>
                    <!--ends-->
                </div>
            </div>
        </div>
    </section>
    <!-- content -->

    @stop

    {{-- page level scripts --}}
    @section('footer_scripts')
    <!-- begining of page level js -->
    <script src="{{ asset('assets/vendors/bootstrapStarRating/js/star-rating.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/custom_rating.js') }}" type="text/javascript"></script>
    <!-- end of page level js -->

@stop
