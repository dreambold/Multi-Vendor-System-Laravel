@extends('layouts/default')

{{-- Page title --}}
@section('title')
Blank
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
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
                    <a href="#">All Categories</a>
                </li>
            </ol>
        </div>
    </div>
    @stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <div class = "row">
            <div class = "hidden-xs col-lg-4" style = "padding-left:0px; padding-right:150px;">
                <h3>All Categories</h3>
                <ul class = "categories-ul">
                    <li>
                        <span>eBay Motors</span>
                        <i class = "fa fa-check" style = "float:right;"></i>
                    </li>
                    <li><span>Fashion</span></li>
                    <li><span>Books Movies&Music</span></li>
                    <li><span>Electronics</span></li>
                    <li><span>Collectibles & Art </span></li>
                    <li><span>Home &Garden </span></li>
                    <li><span>Sporting Goods </span></li>
                    <li><span>Toy & Hobbies </span></li>
                </ul>
            </div>
            <div class = "col-xs-12 col-lg-8">
                <h3>eBay Motors</h3>
                <div class = "row">
                    @for($i=0;$i<=10;$i++)
                        <div class = "col-xs-3 col-lg-4" style = "padding-left:10px;padding-right:10px;">
                            <div class = "row">
                                <div class = "category-title">
                                    Automotive Tools & Supplies
                                </div>
                                <div class = "category-img-rect">
                                    <img src = "{{asset("/assets/images/cart/small/3.jpg")}}"/>
                                </div>
                                <ul class = "category-ul">
                                    @for($j=0; $j<=7; $j++)
                                    <li><span>Autommotive Care & Detailing</span></li>
                                    @endfor
                                    <li><a href = "{{url("/categories")}}">view all in Autommotive Care & Detailing</a></li>
                                </ul>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
