@extends('layouts/default')

{{-- Page title --}}
@section('title')
Categories
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/cart.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/tabbular.css') }}">
    <!--end of page level css-->
@stop
<style>
    @media (max-width:425px){
        .div.flip-3d{
            width:100% !important;
        }
    }
</style>

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
                    <a href="#">Categories</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Categories
            </div>
        </div>
    </div>
    @stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <!--recently view item-->
        <div class="row">
            <h2 class="text-primary"> Categories</h2>
            <div class="divider"></div>
            <div class="flip-3d">
                <figure>
                    <img src="{{ asset('assets/images/cart/default/saree1.jpg') }}" alt="product image">
                    <figcaption>
                        <h4 class="text-white">Floral Printed Saree</h4>
                        <ul class="text-white">
                            <li>Product Type - Women's Saree</li>
                            <li>Color - Multi Colour</li>
                        </ul>
                        <h4 class="text-white"><del class="text-danger">Rs. 1599.00</del>  Rs. 1198.00   </h4>
                    </figcaption>
                </figure>
                <div class="text-center mart10">
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary text-white">View</a></div>
            </div>
            <div class="flip-3d">
                <figure>
                    <img src="{{ asset('assets/images/cart/default/saree3.jpg') }}" alt="product image">
                    <figcaption>
                        <h4 class="text-white">Floral Printed Saree</h4>
                        <ul class="text-white">
                            <li>Product Type - Women's Saree</li>
                            <li>Color - Multi Colour</li>
                        </ul>
                        <h4 class="text-white"><del class="text-danger">Rs. 1999.00</del> Rs. 1499.00</h4>
                    </figcaption>
                </figure>
                <div class="text-center mart10">
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary text-white">View</a></div>
            </div>
            <div class="flip-3d">
                <figure>
                    <img src="{{ asset('assets/images/cart/default/saree4.jpg') }}" alt="product image">
                    <figcaption>
                        <h4 class="text-white">Floral Printed Saree</h4>
                        <ul class="text-white">
                            <li>Product Type - Women's Saree</li>
                            <li>Color - Multi Colour</li>
                        </ul>
                        <h4 class="text-white"><del class="text-danger">Rs. 1999.00</del> Rs. 1499.00</h4>
                    </figcaption>
                </figure>
                <div class="text-center mart10">
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary text-white">View</a></div>
            </div>
            <div class="flip-3d">
                <figure>
                    <img src="{{ asset('assets/images/cart/default/saree5.jpg') }}" alt="product image">
                    <figcaption>
                        <h4 class="text-white">Floral Printed Saree</h4>
                        <ul class="text-white">
                            <li>Product Type - Women's Saree</li>
                            <li>Color - Multi Colour</li>
                        </ul>
                        <h4 class="text-white"><del class="text-danger">Rs. 1999.00</del> Rs. 1499.00</h4>
                    </figcaption>
                </figure>
                <div class="text-center mart10">
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary text-white">View</a></div>
            </div>
        </div>
        <div class="row">
            <div class="divider"></div>
            <div class="flip-3d">
                <figure>
                    <img src="{{ asset('assets/images/cart/default/saree6.jpg') }}" alt="product image">
                    <figcaption>
                        <h4 class="text-white">Floral Printed Saree</h4>
                        <ul class="text-white">
                            <li>Product Type - Women's Saree</li>
                            <li>Color - Multi Colour</li>
                        </ul>
                        <h4 class="text-white"><del class="text-danger">Rs. 1999.00</del> Rs. 1499.00</h4>
                    </figcaption>
                </figure>
                <div class="text-center mart10">
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary text-white">View</a></div>
            </div>
            <div class="flip-3d">
                <figure>
                    <img src="{{ asset('assets/images/cart/default/saree7.jpg') }}" alt="product image">
                    <figcaption>
                        <h4 class="text-white">Floral Printed Saree</h4>
                        <ul class="text-white">
                            <li>Product Type - Women's Saree</li>
                            <li>Color - Multi Colour</li>
                        </ul>
                        <h4 class="text-white"><del class="text-danger">Rs. 1999.00</del> Rs. 1499.00</h4>
                    </figcaption>
                </figure>
                <div class="text-center mart10">
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary text-white">View</a></div>
            </div>
            <div class="flip-3d">
                <figure>
                    <img src="{{ asset('assets/images/cart/default/saree8.jpg') }}" alt="product image">
                    <figcaption>
                        <h4 class="text-white">Floral Printed Saree</h4>
                        <ul class="text-white">
                            <li>Product Type - Women's Saree</li>
                            <li>Color - Multi Colour</li>
                        </ul>
                        <h4 class="text-white"><del class="text-danger">Rs. 1999.00</del> Rs. 1499.00</h4>
                    </figcaption>
                </figure>
                <div class="text-center mart10">
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary text-white">View</a></div>
            </div>
            <div class="flip-3d">
                <figure>
                    <img src="{{ asset('assets/images/cart/default/saree9.jpg') }}" alt="product image">
                    <figcaption>
                        <h4 class="text-white">Floral Printed Saree</h4>
                        <ul class="text-white">
                            <li>Product Type - Women's Saree</li>
                            <li>Color - Multi Colour</li>
                        </ul>
                        <h4 class="text-white"><del class="text-danger">Rs. 1999.00</del> Rs. 1499.00</h4>
                    </figcaption>
                </figure>
                <div class="text-center mart10">
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary text-white">View</a></div>
            </div>
        </div>
        <div class="row">
            <div class="divider"></div>
            <div class="flip-3d">
                <figure>
                    <img src="{{ asset('assets/images/cart/default/saree10.jpg') }}" alt="product image">
                    <figcaption>
                        <h4 class="text-white">Floral Printed Saree</h4>
                        <ul class="text-white">
                            <li>Product Type - Women's Saree</li>
                            <li>Color - Multi Colour</li>
                        </ul>
                        <h4 class="text-white"><del class="text-danger">Rs. 1999.00</del> Rs. 1499.00</h4>
                    </figcaption>
                </figure>
                <div class="text-center mart10">
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary text-white">View</a></div>
            </div>
            <div class="flip-3d">
                <figure>
                    <img src="{{ asset('assets/images/cart/default/saree11.jpg') }}" alt="product image">
                    <figcaption>
                        <h4 class="text-white">Floral Printed Saree</h4>
                        <ul class="text-white">
                            <li>Product Type - Women's Saree</li>
                            <li>Color - Multi Colour</li>
                        </ul>
                        <h4 class="text-white"><del class="text-danger">Rs. 1999.00</del> Rs. 1499.00</h4>
                    </figcaption>
                </figure>
                <div class="text-center mart10">
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary text-white">View</a></div>
            </div>
            <div class="flip-3d">
                <figure>
                    <img src="{{ asset('assets/images/cart/default/saree12.jpg') }}" alt="product image">
                    <figcaption>
                        <h4 class="text-white">Floral Printed Saree</h4>
                        <ul class="text-white">
                            <li>Product Type - Women's Saree</li>
                            <li>Color - Multi Colour</li>
                        </ul>
                        <h4 class="text-white"><del class="text-danger">Rs. 1999.00</del> Rs. 1499.00</h4>
                    </figcaption>
                </figure>
                <div class="text-center mart10">
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary text-white">View</a></div>
            </div>
            <div class="flip-3d">
                <figure>
                    <img src="{{ asset('assets/images/cart/default/saree7.jpg') }}" alt="product image">
                    <figcaption>
                        <h4 class="text-white">Floral Printed Saree</h4>
                        <ul class="text-white">
                            <li>Product Type - Women's Saree</li>
                            <li>Color - Multi Colour</li>
                        </ul>
                        <h4 class="text-white"><del class="text-danger">Rs. 1999.00</del> Rs. 1499.00</h4>
                    </figcaption>
                </figure>
                <div class="text-center mart10">
                    <a href="{{ URL::to('single_product') }}" class="btn btn-primary text-white">View</a></div>
            </div>
        </div>
        <!--recently view item end-->
    </div>
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    
@stop
