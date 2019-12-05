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
                    @foreach($rootCategoryList as $category)
                    <li data-id="{{$category["id"]}}" @if($category["id"] == $id)
                           class="active"
                         @endif>
                        <span>{{$category["title"]}}</span>
                        <i class = "fa fa-check" style = "float:right;"></i>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class = "col-xs-12 col-lg-8">
                <h3>{{$title}}</h3>
                <div class = "row">
                    @foreach($categoryList as $category)
                        <div class = "col-xs-3 col-lg-4" style = "padding-left:10px;padding-right:10px;">
                            <div class = "row">
                                <div class = "category-title">
                                    {{$category["title"]}}
                                </div>
                                <div class = "category-img-rect">
                                    @if($category['img'] == "")
                                        <img src = "{{asset("assets/images/default_no_image.jpg")}}"/>
                                    @else
                                        <img src = "{{asset($category['img'])}}"/>
                                    @endif
                                </div>
                                <ul class = "category-ul">
                                    <div class="row ml-0 mr-0">
                                        <span class="pull-right">{{$category["productCount"]}} products</span>
                                    </div>
                                    <div class="row ml-0 mr-0">
                                        <a href = "{{url("/front/product_list/".$category['id'])}}" class="pull-right color-blue">view all</a>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script>
    $(".categories-ul>li").on('click', function(){
        var id = $(this).attr("data-id");
        window.location.href="{{url("front/all_categories")}}/" + id;
    })
</script>
@stop
