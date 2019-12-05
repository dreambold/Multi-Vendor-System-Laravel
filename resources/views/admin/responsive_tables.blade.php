@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Responsive Datatables
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
	<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />

    <!-- end of page level css-->
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
    <!--section starts-->
    <h1>Responsive Datatables</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="18" data-loop="true"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="#">DataTables</a>
        </li>
        <li class="active">Responsive Datatables</li>
    </ol>
</section>
<!--section ends-->
<section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Responsive Flip Table
                                </div>
                            </div>
                            <div class="portlet-body flip-scroll">
                                <table class="table table-bordered table-striped table-condensed flip-content" >
                                    <thead class="flip-content">
                                        <tr>
                                            <th>Code</th>
                                            <th>Company</th>
                                            <th class="numeric">Price</th>
                                            <th class="numeric">Change</th>
                                            <th class="numeric">Change %</th>
                                            <th class="numeric">Open</th>
                                            <th class="numeric">High</th>
                                            <th class="numeric">Low</th>
                                            <th class="numeric">Volume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>AAC</td>
                                            <td>AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                                            <td class="numeric">$1.38</td>
                                            <td class="numeric">-0.01</td>
                                            <td class="numeric">-0.36%</td>
                                            <td class="numeric">$1.39</td>
                                            <td class="numeric">$1.39</td>
                                            <td class="numeric">$1.38</td>
                                            <td class="numeric">9,395</td>
                                        </tr>
                                        <tr>
                                            <td>AAD</td>
                                            <td>ARDENT LEISURE GROUP</td>
                                            <td class="numeric">$1.15</td>
                                            <td class="numeric">+0.02</td>
                                            <td class="numeric">1.32%</td>
                                            <td class="numeric">$1.14</td>
                                            <td class="numeric">$1.15</td>
                                            <td class="numeric">$1.13</td>
                                            <td class="numeric">56,431</td>
                                        </tr>
                                        <tr>
                                            <td>AAX</td>
                                            <td>AUSENCO LIMITED</td>
                                            <td class="numeric">$4.00</td>
                                            <td class="numeric">-0.04</td>
                                            <td class="numeric">-0.99%</td>
                                            <td class="numeric">$4.01</td>
                                            <td class="numeric">$4.05</td>
                                            <td class="numeric">$4.00</td>
                                            <td class="numeric">90,641</td>
                                        </tr>
                                        <tr>
                                            <td>ABC</td>
                                            <td>ADELAIDE BRIGHTON LIMITED</td>
                                            <td class="numeric">$3.00</td>
                                            <td class="numeric">+0.06</td>
                                            <td class="numeric">2.04%</td>
                                            <td class="numeric">$2.98</td>
                                            <td class="numeric">$3.00</td>
                                            <td class="numeric">$2.96</td>
                                            <td class="numeric">862,518</td>
                                        </tr>
                                        <tr>
                                            <td>ABP</td>
                                            <td>ABACUS PROPERTY GROUP</td>
                                            <td class="numeric">$1.91</td>
                                            <td class="numeric">0.00</td>
                                            <td class="numeric">0.00%</td>
                                            <td class="numeric">$1.92</td>
                                            <td class="numeric">$1.93</td>
                                            <td class="numeric">$1.90</td>
                                            <td class="numeric">595,701</td>
                                        </tr>
                                        <tr>
                                            <td>ABY</td>
                                            <td>ADITYA BIRLA MINERALS LIMITED</td>
                                            <td class="numeric">$0.77</td>
                                            <td class="numeric">+0.02</td>
                                            <td class="numeric">2.00%</td>
                                            <td class="numeric">$0.76</td>
                                            <td class="numeric">$0.77</td>
                                            <td class="numeric">$0.76</td>
                                            <td class="numeric">54,567</td>
                                        </tr>
                                        <tr>
                                            <td>ACR</td>
                                            <td>ACRUX LIMITED</td>
                                            <td class="numeric">$3.71</td>
                                            <td class="numeric">+0.01</td>
                                            <td class="numeric">0.14%</td>
                                            <td class="numeric">$3.70</td>
                                            <td class="numeric">$3.72</td>
                                            <td class="numeric">$3.68</td>
                                            <td class="numeric">191,373</td>
                                        </tr>
                                        <tr>
                                            <td>ADU</td>
                                            <td>ADAMUS RESOURCES LIMITED</td>
                                            <td class="numeric">$0.72</td>
                                            <td class="numeric">0.00</td>
                                            <td class="numeric">0.00%</td>
                                            <td class="numeric">$0.73</td>
                                            <td class="numeric">$0.74</td>
                                            <td class="numeric">$0.72</td>
                                            <td class="numeric">8,602,291</td>
                                        </tr>
                                        <tr>
                                            <td>AGG</td>
                                            <td>ANGLOGOLD ASHANTI LIMITED</td>
                                            <td class="numeric">$7.81</td>
                                            <td class="numeric">-0.22</td>
                                            <td class="numeric">-2.74%</td>
                                            <td class="numeric">$7.82</td>
                                            <td class="numeric">$7.82</td>
                                            <td class="numeric">$7.81</td>
                                            <td class="numeric">148</td>
                                        </tr>
                                        <tr>
                                            <td>AGK</td>
                                            <td>AGL ENERGY LIMITED</td>
                                            <td class="numeric">$13.82</td>
                                            <td class="numeric">+0.02</td>
                                            <td class="numeric">0.14%</td>
                                            <td class="numeric">$13.83</td>
                                            <td class="numeric">$13.83</td>
                                            <td class="numeric">$13.67</td>
                                            <td class="numeric">846,403</td>
                                        </tr>
                                        <tr>
                                            <td>AGO</td>
                                            <td>ATLAS IRON LIMITED</td>
                                            <td class="numeric">$3.17</td>
                                            <td class="numeric">-0.02</td>
                                            <td class="numeric">-0.47%</td>
                                            <td class="numeric">$3.11</td>
                                            <td class="numeric">$3.22</td>
                                            <td class="numeric">$3.10</td>
                                            <td class="numeric">5,416,303</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END SAMPLE TABLE PORTLET-->
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box default">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="pencil" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Basic Responsive Table
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-responsive">
                                <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Header 1</th>
                                                <th>Header 2</th>
                                                <th>Header 3</th>
                                                <th>Header 4</th>
                                                <th>Header 5</th>
                                                <th>Header 6</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>row 1, cell 1</td>
                                                <td>row 2, cell 2</td>
                                                <td>row 3, cell 3</td>
                                                <td>row 4, cell 4</td>
                                                <td>row 5, cell 5</td>
                                                <td>row 6, cell 6</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>row 1, cell 1</td>
                                                <td>row 2, cell 2</td>
                                                <td>row 3, cell 3</td>
                                                <td>row 4, cell 4</td>
                                                <td>row 5, cell 5</td>
                                                <td>row 6, cell 6</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>row 1, cell 1</td>
                                                <td>row 2, cell 2</td>
                                                <td>row 3, cell 3</td>
                                                <td>row 4, cell 4</td>
                                                <td>row 5, cell 5</td>
                                                <td>row 6, cell 6</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END SAMPLE TABLE PORTLET-->
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box warning">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="magic-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Bordered Responsive Table
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-responsive">
                                <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Header 1</th>
                                                <th>Header 2</th>
                                                <th>Header 3</th>
                                                <th>Header 4</th>
                                                <th>Header 5</th>
                                                <th>Header 67</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>row 1, cell 1</td>
                                                <td>row 2, cell 2</td>
                                                <td>row 3, cell 3</td>
                                                <td>row 4, cell 4</td>
                                                <td>row 5, cell 5</td>
                                                <td>row 6, cell 6</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>row 1, cell 1</td>
                                                <td>row 2, cell 2</td>
                                                <td>row 3, cell 3</td>
                                                <td>row 4, cell 4</td>
                                                <td>row 5, cell 5</td>
                                                <td>row 6, cell 6</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>row 1, cell 1</td>
                                                <td>row 2, cell 2</td>
                                                <td>row 3, cell 3</td>
                                                <td>row 4, cell 4</td>
                                                <td>row 5, cell 5</td>
                                                <td>row 6, cell 6</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END SAMPLE TABLE PORTLET-->
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box info">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Responsive Table
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Header 1</th>
                                                <th>Header 2</th>
                                                <th>Header 3</th>
                                                <th>Header 4</th>
                                                <th>Header 5</th>
                                                <th>Header 6</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>row 1, cell 1</td>
                                                <td>row 2, cell 2</td>
                                                <td>row 3, cell 3</td>
                                                <td>row 4, cell 4</td>
                                                <td>row 5, cell 5</td>
                                                <td>row 6, cell 6</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>row 1, cell 1</td>
                                                <td>row 2, cell 2</td>
                                                <td>row 3, cell 3</td>
                                                <td>row 4, cell 4</td>
                                                <td>row 5, cell 5</td>
                                                <td>row 6, cell 6</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>row 1, cell 1</td>
                                                <td>row 2, cell 2</td>
                                                <td>row 3, cell 3</td>
                                                <td>row 4, cell 4</td>
                                                <td>row 5, cell 5</td>
                                                <td>row 6, cell 6</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END SAMPLE TABLE PORTLET-->
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box danger">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Horizontal Scrollable
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-scrollable" >
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width:450px !important">Table Header 1</th>
                                                <th scope="col">Table Header 2</th>
                                                <th scope="col">Table Header 3</th>
                                                <th scope="col">Table Header 4</th>
                                                <th scope="col">Table Header 5</th>
                                                <th scope="col">Table Header 6</th>
                                                <th scope="col">Table Header 7</th>
                                                <th scope="col">Table Header 8</th>
                                                <th scope="col">Table Header 9</th>
                                                <th scope="col">Table Header 10</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                            </tr>
                                            <tr>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                            </tr>
                                            <tr>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                            </tr>
                                            <tr>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                            </tr>
                                            <tr>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                            </tr>
                                            <tr>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                                <td>Cell Content</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END SAMPLE TABLE PORTLET-->
                    </div>
                </div>
            </section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.responsive.js') }}" ></script>
    <script src="{{ asset('assets/js/pages/table-responsive.js') }}"></script>
@stop
