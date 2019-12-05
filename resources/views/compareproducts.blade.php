@extends('layouts/default')

{{-- Page title --}}
@section('title')
Compare Products
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!-- page level css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/shopping.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- end of page level css -->
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
                    <a href="#">Compare Product</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Compare Product
            </div>
        </div>
    </div>
    @stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <!--Content Section Start -->
        <h3>Compare Products</h3>
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="bg-default">
                                <th>
                                    <h4>Name</h4></th>
                                <th>
                                    <h4>Curabitur pharetra faucibus congue</h4></th>
                                <th>
                                    <h4>Aenean luctus dolor et purus </h4></th>
                                <th>
                                    <h4>Quisque ullamcorper ante lectus </h4></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- image section Start -->
                            <tr>
                                <td style="vertical-align: middle;">Image</td>
                                <td>
                                    <a href="#"><img src="{{ asset('assets/images/compare1.jpg') }}"></a>
                                </td>
                                <td>
                                    <a href="#"><img src="{{ asset('assets/images/compare2.jpg') }}"></a>
                                </td>
                                <td>
                                    <a href="#"><img src="{{ asset('assets/images/compare3.jpg') }}"></a>
                                </td>
                            </tr>
                            <!-- //image section end -->
                            <!-- price section start -->
                            <tr>
                                <td style="vertical-align: middle;">Price</td>
                                <td>
                                    <del class="text-danger">$1150</del>
                                    <br /> Now Only $1000</td>
                                <td>
                                    <del class="text-danger">$750</del>
                                    <br /> Now Only $500</td>
                                <td>
                                    <del class="text-danger">$800</del>
                                    <br /> Now Only $600</td>
                            </tr>
                            <!-- //price section end -->
                            <!-- model section start -->
                            <tr>
                                <td style="vertical-align: middle;">Model</td>
                                <td>Class aptent taciti sociosqu ad litora torquent per conubia nostra</td>
                                <td>Cras ullamcorper nisl non odio congue accumsan</td>
                                <td>Class aptent taciti sociosqu ad litora torquent per conubia nostra</td>
                            </tr>
                            <!-- //model section end -->
                            <!-- brand section start -->
                            <tr>
                                <td style="vertical-align: middle;">Brand</td>
                                <td>One</td>
                                <td>Two</td>
                                <td>Three</td>
                            </tr>
                            <!-- //brand section start -->
                            <!-- Availbility section start -->
                            <tr>
                                <td style="vertical-align: middle;">Availbility</td>
                                <td>In Stock</td>
                                <td>In Stock</td>
                                <td>In Stock</td>
                            </tr>
                            <!-- //Availbility section end -->
                            <!-- rating section start -->
                            <tr>
                                <td style="vertical-align: middle;">Rating</td>
                                <td>
                                    <i class="fa fa-star text-primary"></i>
                                    <i class="fa fa-star text-primary"></i>
                                    <i class="fa fa-star text-primary"></i>
                                    <i class="fa fa-star text-primary"></i>
                                    <i class="fa fa-star text-primary"></i>
                                </td>
                                <td>
                                    <i class="fa fa-star text-primary"></i>
                                    <i class="fa fa-star text-primary"></i>
                                    <i class="fa fa-star text-primary"></i>
                                    <i class="fa fa-star text-primary"></i>
                                    <i class="fa fa-star-o"></i>
                                </td>
                                <td>
                                    <i class="fa fa-star text-primary"></i>
                                    <i class="fa fa-star text-primary"></i>
                                    <i class="fa fa-star text-primary"></i>
                                    <i class="fa fa-star text-primary"></i>
                                    <i class="fa fa-star-half-o text-primary"></i>
                                </td>
                            </tr>
                            <!-- //rating section end -->
                            <!-- description section start -->
                            <tr>
                                <td style="vertical-align: middle;">Description</td>
                                <td class="description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pharetra faucibus congue. Aenean luctus dolor et purus malesuada luctus. Quisque ullamcorper ante viverra lectus fermentum quis rutrum erat sollicitudin. Fusce tortor massa.
                                    </p>
                                    <P>
                                        Cras ullamcorper nisl non odio congue accumsan. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
                                    </p>
                                </td>
                                <td class="description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pharetra faucibus congue. Aenean luctus dolor et purus malesuada luctus. Quisque ullamcorper ante viverra lectus fermentum quis rutrum erat sollicitudin. Fusce tortor massa.
                                    </p>
                                    <P>
                                        Cras ullamcorper nisl non odio congue accumsan. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
                                    </p>
                                </td>
                                <td class="description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pharetra faucibus congue. Aenean luctus dolor et purus malesuada luctus. Quisque ullamcorper ante viverra lectus fermentum quis rutrum erat sollicitudin. Fusce tortor massa.
                                    </p>
                                    <P>
                                        Cras ullamcorper nisl non odio congue accumsan. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
                                    </p>
                                </td>
                            </tr>
                            <!-- description section end -->
                            <!-- add cart section start -->
                            <tr>
                                <td></td>
                                <td><span class="btn btn-primary"><a href="#" class="text-white">Add to Cart</a></span></td>
                                <td><span class="btn btn-primary"><a href="#" class="text-white">Add to Cart</a></span></td>
                                <td><span class="btn btn-primary"><a href="#" class="text-white">Add to Cart</a></span></td>
                            </tr>
                            <!-- //add cart section end -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- //Content Section End -->
    </div>
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
