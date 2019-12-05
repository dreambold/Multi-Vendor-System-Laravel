@extends('layouts/default')

{{-- Page title --}}
@section('title')
News
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/news.css') }}">
<link href="{{ asset('assets/vendors/animate/animate.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/timeline.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" />
    <!--end of page level css-->
@stop

{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">News</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="responsive-menu" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> News
            </div>
        </div>
    </div>
    @stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <div class="row news">
            <div class="col-md-8">
                <!-- News1 Section Start -->
                <div class="blog thumbnail wow slideInLeft" data-wow-duration="3.5s">
                    <label>
                        <a href="{{ URL::to('news_item') }}"><h3 class="primary news_headings">Jelly-o sesame snaps halvah croissant oat cake cookie</h3></a>
                    </label>
                    <img src="{{ asset('assets/images/img_b2.jpg') }}" alt="image" class="img-responsive">
                    <div class="news_item_text_1">
                        <p>
                            But they got diff'rent strokes. It takes diff'rent strokes - it takes diff'rent strokes to move the world. Go Speed Racer. Go Speed Racer. Go Speed Racer go! That this group would somehow form a family that's the way we all became the Brady Bunch. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Well we're movin' on up to the east side to a deluxe apartment in the sky. These Happy Days are yours and mine Happy Days. And we know Flipper lives in a world full of wonder flying there-under under the sea. Baby if you've ever wondered - wondered whatever became of me. I'm living on the air in Cincinnati. Cincinnati WKRP. It's time to put on makeup. It's time to dress up right. It's time to raise the curtain on the Muppet Show tonight.
                        </p>
                        <p class="text-right">
                            <a href="{{ URL::to('news_item') }}" class="btn btn-primary text-white">
                                Read more
                            </a>
                        </p>
                    </div>
                </div>
                <!-- //News1 Section End -->
                <!-- New2 Section Start -->
                <div class="blog thumbnail wow slideInLeft" data-wow-duration="3.5s">
                    <label>
                        <a href="{{ URL::to('news_item') }}"><h3 class="primary news_headings">Fishing cayenne bisque cayenne viens ci red beans </h3></a>
                    </label>
                    <img src="{{ asset('assets/images/img_b1.jpg') }}" alt="image" class="img-responsive">
                    <div class="news_item_text_1">
                        <p>
                            But they got diff'rent strokes. It takes diff'rent strokes - it takes diff'rent strokes to move the world. Go Speed Racer. Go Speed Racer. Go Speed Racer go! That this group would somehow form a family that's the way we all became the Brady Bunch. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Well we're movin' on up to the east side to a deluxe apartment in the sky. These Happy Days are yours and mine Happy Days. And we know Flipper lives in a world full of wonder flying there-under under the sea. Baby if you've ever wondered - wondered whatever became of me. I'm living on the air in Cincinnati. Cincinnati WKRP. It's time to put on makeup. It's time to dress up right. It's time to raise the curtain on the Muppet Show tonight.
                        </p>
                        <p class="text-right">
                            <a href="{{ URL::to('news_item') }}" class="btn btn-primary text-white">
                                Read more
                            </a>
                        </p>
                    </div>
                </div>
                <!-- //News2 Section  End-->
                <!-- New3 Section Start -->
                <div class="blog thumbnail wow slideInLeft" data-wow-duration="3.5s">
                    <label>
                        <a href="{{ URL::to('news_item') }}"><h3 class="primary news_headings">Come along, Pond. Allons-y! Have a jelly baby </h3></a>
                    </label>
                    <img src="{{ asset('assets/images/img_b3.jpg') }}" alt="image" class="img-responsive">
                    <div class="news_item_text_1">
                        <p>
                            But they got diff'rent strokes. It takes diff'rent strokes - it takes diff'rent strokes to move the world. Go Speed Racer. Go Speed Racer. Go Speed Racer go! That this group would somehow form a family that's the way we all became the Brady Bunch. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Well we're movin' on up to the east side to a deluxe apartment in the sky. These Happy Days are yours and mine Happy Days. And we know Flipper lives in a world full of wonder flying there-under under the sea. Baby if you've ever wondered - wondered whatever became of me. I'm living on the air in Cincinnati. Cincinnati WKRP. It's time to put on makeup. It's time to dress up right. It's time to raise the curtain on the Muppet Show tonight.
                        </p>
                        <p class="text-right">
                            <a href="{{ URL::to('news_item') }}" class="btn btn-primary text-white">
                                Read more
                            </a>
                        </p>
                    </div>
                </div>
                <!-- //News3 Section End -->
            </div>
            <div class="col-md-4 ">
                <!-- Tabbable-Panel Start -->
                <div class="tabbable-panel wow slideInDown" data-wow-duration="3.5s">
                    <!-- Tabbablw-line Start -->
                    <div class="tabbable-line">
                        <!-- Nav Nav-tabs Start -->
                        <ul class="nav nav-tabs ">
                            <li class="active">
                                <a href="#tab_default_1" data-toggle="tab">
                                Popular </a>
                            </li>
                            <li>
                                <a href="#tab_default_2" data-toggle="tab">
                                Recent </a>
                            </li>
                        </ul>
                        <!-- //Nav Nav-tabs End -->
                        <!-- Tab-content Start -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_default_1">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="{{ asset('assets/images/image_13.jpg') }}" alt="image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">
                                            <h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5></a><span class="text-danger">May 10, 2015</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="{{ asset('assets/images/image_14.jpg') }}" alt="image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">
                                            <h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5></a><span class="text-danger">May 8, 2015</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="{{ asset('assets/images/image_15.jpg') }}" alt="image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">
                                            <h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5></a><span class="text-danger">May5, 2015</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_default_2">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="{{ asset('assets/images/image_15.jpg') }}" alt="image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">
                                            <h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5></a><span class="text-danger">May 13, 2015</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="{{ asset('assets/images/image_13.jpg') }}" alt="image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">
                                            <h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5></a><span class="text-danger">May 12, 2015</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object " src="{{ asset('assets/images/image_14.jpg') }}" alt="image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">
                                            <h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5> </a>
                                        <span class="text-danger">Feb 28, 2015</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comments wow slideInRight" data-wow-duration="1.5s" data-wow-delay="0.5s">
                    <h3>Comments</h3>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="{{ asset('assets/images/image_13.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">
                                <h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5> </a>
                            <span class="text-danger">Feb 28, 2015</span>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="{{ asset('assets/images/image_14.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">
                                <h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5></a><span class="text-danger">May 11, 2015</span>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="{{ asset('assets/images/image_15.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">
                                <h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5></a><span class="text-danger">Feb 28, 2015</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tab-content End -->
        </div>
        <!-- //Tabbablw-line End -->
    </div>
    <!-- Tabbable_panel End -->
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- begining of page level js -->
    <!--tags-->
    <script src="{{ asset('assets/vendors/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" type="text/javascript"></script>
    <script>
        jQuery(document).ready(function () {
            new WOW().init();
        });
    </script>
    <!-- end of page level js -->

@stop
