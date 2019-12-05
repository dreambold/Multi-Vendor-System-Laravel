@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Gallery
@parent
@stop

{{-- page level styles --}}
@section('header_styles')    
    
	<link href="{{ asset('assets/css/pages/animated-masonry-gallery.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/fancybox/jquery.fancybox.css') }}" media="screen" />
    <style>
        .mb-10{
            margin-bottom: 10px;
        }
    </style>
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>Masonry Gallery</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Gallery</a>
                    </li>
                    <li class="active">Masonry Gallery</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="content gallery">
                    <div class="row" id="slim">
                        <div id="gallery">
                            <div class="col-md-5 col-xs-12" id="gallery-header-center-left-title">All Galleries</div>
                            <div class="pull-right">
                                <div class="col-xs-12 mb-10">
                                    <button type="button" id="filter-all" class="btn btn-responsive btn-info btn-xs">All</button>
                                    <button type="button" id="filter-studio" class="btn btn-responsive btn-primary btn-xs">Studio</button>
                                    <button type="button" id="filter-landscape" class="btn btn-responsive btn-success btn-xs">Landscape</button>
                                </div>
                            </div>
                            <div id="gallery-content ">
                                <div class="row" id="gallery-content-center">
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/big/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/big/1.jpg') }}" class="img-responsive all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/small/2.jpg') }}" class="img-responsive all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/big/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/big/2.jpg') }}" class="img-responsive all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/small/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/small/1.jpg') }}" class="img-responsive all studio" alt="gallery">
                                    </a>

                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/big/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/big/1.jpg') }}" class="img-responsive all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/small/2.jpg') }}" class="img-responsive all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/big/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/big/1.jpg') }}" class="img-responsive all studio" alt="gallery">
                                    </a>

                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/small/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/small/1.jpg') }}" class="img-responsive all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/big/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/big/1.jpg') }}" class="img-responsive all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/small/2.jpg') }}" class="img-responsive all studio" alt="gallery">
                                    </a>

                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/small/2.jpg') }}" class="img-responsive all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/big/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/big/1.jpg') }}" class="img-responsive all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/small/2.jpg') }}" class="img-responsive all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/small/2.jpg') }}" class="img-responsive all studio" alt="gallery">
                                    </a>

                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/big/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/big/2.jpg') }}" class="img-responsive all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/small/2.jpg') }}" class="img-responsive all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/400-x-699.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/small/1.jpg') }}" class="img-responsive all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/small/2.jpg') }}" class="img-responsive all studio" alt="gallery">
                                    </a>

                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/small/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/small/1.jpg') }}" class="img-responsive all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/small/2.jpg') }}" class="img-responsive all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/small/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/small/1.jpg') }}" class="img-responsive all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/big/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/big/1.jpg') }}" class="img-responsive all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/small/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/small/1.jpg') }}" class="img-responsive all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/small/2.jpg') }}" class="img-responsive all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/small/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/small/1.jpg') }}" class="img-responsive all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/small/2.jpg') }}" class="img-responsive all studio" alt="gallery">
                                    </a>

                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/small/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/small/1.jpg') }}" class="img-responsive all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder//small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/small/2.jpg') }}" class="img-responsive all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/small/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/small/1.jpg') }}" class="img-responsive all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/big/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/big/1.jpg') }}" class="img-responsive all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/big/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/big/2.jpg') }}" class="img-responsive all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/big/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/big/1.jpg') }}" class="img-responsive all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/big/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/big/2.jpg') }}" class="img-responsive all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-responsive" href="{{ asset('assets/img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('assets/img/img_holder/small/2.jpg') }}" class="img-responsive all studio" alt="gallery">
                                    </a>
                                </div>
                            </div>
                            <!-- .images-box -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- content -->
        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    
    <script type="text/javascript" src="{{ asset('assets/js/pages/jquery.isotope.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/animated-masonry-gallery.js') }}" ></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="{{ asset('assets/vendors/fancybox/jquery.fancybox.js') }}" ></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.fancybox').fancybox();
    });
    </script>
    
@stop
