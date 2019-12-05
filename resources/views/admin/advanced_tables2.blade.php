@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Advanced Datatables
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/tables.css') }}" />
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Advanced Datatables2</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">DataTables</a>
                    </li>
                    <li class="active">Advanced Datatables2</li>
                </ol>
            </section>
            <!--section ends-->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-success filterable" style="overflow:auto;">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Dropdown column searching
                    </h3>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-striped table-bordered" id="table1">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>User Name</th>
                            <th>User E-mail</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>19</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>
                                JacobThornton
                            </td>
                            <td>
                                JacobThornton@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>31</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>35</td>
                            <td>Larryss</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>User Name</th>
                            <th>User E-mail</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info filterable">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">
                        <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Child rows
                    </h3>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-striped table-bordered" id="table2">
                        <thead>
                        <tr>
                            <th></th>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>User E-mail</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>
                                JacobThornton
                            </td>
                            <td>
                                JacobThornton@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>11.</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>12.</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>13.</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>14.</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>15.</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>16.</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        <tr>
                            <td>17.</td>
                            <td>Larryss</td>
                            <td>the Bird</td>
                            <td>
                                Larrythe Bird
                            </td>
                            <td>
                                LarrytheBird@test.com
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading  clearfix">
                    <h3 class="panel-title">
                        <i class="fa fa-fw fa-th"></i> Show / Hide Columns
                    </h3>
                    <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                </div>
                <div class="panel-body table-responsive">
                    <strong>
                        Toggle column:
                    </strong>
                    <div class="btn-group" style="margin:10px 0;">
                        <button type="button" class="toggle-vis btn btn-default" data-column="0">Name</button>
                        <button type="button" class="toggle-vis btn btn-default" data-column="1">User Name
                        </button>
                        <button type="button" class="toggle-vis btn btn-default" data-column="2">Email</button>
                        <button type="button" class="toggle-vis btn btn-default" data-column="3">Department
                        </button>
                        <button type="button" class="toggle-vis btn btn-default" data-column="4">Contact
                        </button>
                    </div>
                    <table class="table table-striped table-bordered" id="example">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Department</th>
                            <th>Contact</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Sarah Leannon</td>
                            <td>Sarah22</td>
                            <td>Sarah.Leannon13@hotmail.com</td>
                            <td>Toys</td>
                            <td>269-277-7340</td>
                        </tr>
                        <tr>
                            <td>Prudence Braun</td>
                            <td>Prudence.Braun</td>
                            <td>Prudence_Braun99@yahoo.com</td>
                            <td>Home</td>
                            <td>259-294-8730</td>
                        </tr>
                        <tr>
                            <td>Frederik Beier</td>
                            <td>Frederik_Beier71</td>
                            <td>Frederik_Beier88@yahoo.com</td>
                            <td>Health</td>
                            <td>115-781-3501</td>
                        </tr>
                        <tr>
                            <td>Devyn Heathcote</td>
                            <td>Devyn.Heathcote</td>
                            <td>Devyn.Heathcote@yahoo.com</td>
                            <td>Garden</td>
                            <td>030-811-3564</td>
                        </tr>
                        <tr>
                            <td>Mellie Kuhic</td>
                            <td>Mellie83</td>
                            <td>Mellie_Kuhic73@yahoo.com</td>
                            <td>Clothing</td>
                            <td>341-136-6740</td>
                        </tr>
                        <tr>
                            <td>Nova Sauer</td>
                            <td>Nova33</td>
                            <td>Nova_Sauer@hotmail.com</td>
                            <td>Music</td>
                            <td>243-061-3771</td>
                        </tr>
                        <tr>
                            <td>Demetrius Mills</td>
                            <td>Demetrius33</td>
                            <td>Demetrius.Mills@gmail.com</td>
                            <td>Kids</td>
                            <td>254-829-7615</td>
                        </tr>
                        <tr>
                            <td>Hope Hessel</td>
                            <td>Hope25</td>
                            <td>Hope_Hessel@gmail.com</td>
                            <td>Books</td>
                            <td>767-138-4997</td>
                        </tr>
                        <tr>
                            <td>Jackeline Champlin</td>
                            <td>Jackeline.Champlin</td>
                            <td>Jackeline.Champlin58@yahoo.com</td>
                            <td>Jewelery</td>
                            <td>059-603-4311</td>
                        </tr>
                        <tr>
                            <td>Meaghan Renner</td>
                            <td>Meaghan_Renner</td>
                            <td>Meaghan20@gmail.com</td>
                            <td>Automotive</td>
                            <td>939-379-9525</td>
                        </tr>
                        <tr>
                            <td>Peggie Kassulke</td>
                            <td>Peggie_Kassulke</td>
                            <td>Peggie_Kassulke@hotmail.com</td>
                            <td>Clothing</td>
                            <td>039-431-8024</td>
                        </tr>
                        <tr>
                            <td>Paige Walsh</td>
                            <td>Paige_Walsh</td>
                            <td>Paige.Walsh@gmail.com</td>
                            <td>Health</td>
                            <td>129-485-9542</td>
                        </tr>
                        <tr>
                            <td>Lamont Hettinger</td>
                            <td>Lamont.Hettinger77</td>
                            <td>Lamont75@yahoo.com</td>
                            <td>Automotive</td>
                            <td>056-955-2547</td>
                        </tr>
                        <tr>
                            <td>Giovanni Mosciski</td>
                            <td>Giovanni.Mosciski77</td>
                            <td>Giovanni14@yahoo.com</td>
                            <td>Music</td>
                            <td>013-913-2683</td>
                        </tr>
                        <tr>
                            <td>Gregoria Baumbach</td>
                            <td>Gregoria21</td>
                            <td>Gregoria_Baumbach@gmail.com</td>
                            <td>Shoes</td>
                            <td>613-910-1426</td>
                        </tr>
                        <tr>
                            <td>Orval Howe</td>
                            <td>Orval84</td>
                            <td>Orval_Howe64@hotmail.com</td>
                            <td>Grocery</td>
                            <td>679-519-4414</td>
                        </tr>
                        <tr>
                            <td>Angelica Conroy</td>
                            <td>Angelica_Conroy</td>
                            <td>Angelica.Conroy44@gmail.com</td>
                            <td>Industrial</td>
                            <td>360-505-8432</td>
                        </tr>
                        <tr>
                            <td>Gillian Hickle</td>
                            <td>Gillian.Hickle30</td>
                            <td>Gillian57@gmail.com</td>
                            <td>Home</td>
                            <td>159-164-6997</td>
                        </tr>
                        <tr>
                            <td>Willa Feeney</td>
                            <td>Willa58</td>
                            <td>Willa.Feeney17@hotmail.com</td>
                            <td>Games</td>
                            <td>939-683-3718</td>
                        </tr>
                        <tr>
                            <td>Elyse Cassin</td>
                            <td>Elyse.Cassin</td>
                            <td>Elyse.Cassin72@hotmail.com</td>
                            <td>Outdoors</td>
                            <td>584-891-5946</td>
                        </tr>
                        <tr>
                            <td>Miracle Hessel</td>
                            <td>Miracle.Hessel</td>
                            <td>Miracle.Hessel@gmail.com</td>
                            <td>Shoes</td>
                            <td>549-158-1206</td>
                        </tr>
                        <tr>
                            <td>Ethyl Pfannerstill</td>
                            <td>Ethyl_Pfannerstill</td>
                            <td>Ethyl_Pfannerstill@gmail.com</td>
                            <td>Shoes</td>
                            <td>643-622-2951</td>
                        </tr>
                        <tr>
                            <td>Adah Ortiz</td>
                            <td>Adah95</td>
                            <td>Adah48@gmail.com</td>
                            <td>Tools</td>
                            <td>270-691-3304</td>
                        </tr>
                        <tr>
                            <td>Berniece Klein</td>
                            <td>Berniece_Klein</td>
                            <td>Berniece_Klein63@yahoo.com</td>
                            <td>Health</td>
                            <td>211-699-9576</td>
                        </tr>
                        <tr>
                            <td>Jordi Breitenberg</td>
                            <td>Jordi59</td>
                            <td>Jordi.Breitenberg@yahoo.com</td>
                            <td>Sports</td>
                            <td>694-292-9691</td>
                        </tr>
                        <tr>
                            <td>Adalberto Satterfield</td>
                            <td>Adalberto94</td>
                            <td>Adalberto77@yahoo.com</td>
                            <td>Books</td>
                            <td>095-203-5357</td>
                        </tr>
                        <tr>
                            <td>Reese Turner</td>
                            <td>Reese21</td>
                            <td>Reese27@hotmail.com</td>
                            <td>Tools</td>
                            <td>225-264-1503</td>
                        </tr>
                        <tr>
                            <td>Tad Maggio</td>
                            <td>Tad17</td>
                            <td>Tad41@hotmail.com</td>
                            <td>Baby</td>
                            <td>238-050-3173</td>
                        </tr>
                        <tr>
                            <td>Arlo Smitham</td>
                            <td>Arlo_Smitham</td>
                            <td>Arlo_Smitham@hotmail.com</td>
                            <td>Movies</td>
                            <td>797-948-0375</td>
                        </tr>
                        <tr>
                            <td>Orlando Pfannerstill</td>
                            <td>Orlando20</td>
                            <td>Orlando17@yahoo.com</td>
                            <td>Sports</td>
                            <td>683-899-2503</td>
                        </tr>
                        <tr>
                            <td>Susan Hessel</td>
                            <td>Susan_Hessel88</td>
                            <td>Susan.Hessel60@gmail.com</td>
                            <td>Home</td>
                            <td>004-134-6430</td>
                        </tr>
                        <tr>
                            <td>Luigi Veum</td>
                            <td>Luigi_Veum</td>
                            <td>Luigi75@hotmail.com</td>
                            <td>Toys</td>
                            <td>846-211-9311</td>
                        </tr>
                        <tr>
                            <td>Emmie Rau</td>
                            <td>Emmie_Rau7</td>
                            <td>Emmie_Rau@hotmail.com</td>
                            <td>Games</td>
                            <td>151-075-1800</td>
                        </tr>
                        <tr>
                            <td>Jessika Johns</td>
                            <td>Jessika66</td>
                            <td>Jessika_Johns19@yahoo.com</td>
                            <td>Beauty</td>
                            <td>850-092-7783</td>
                        </tr>
                        <tr>
                            <td>Elmore Hartmann</td>
                            <td>Elmore_Hartmann</td>
                            <td>Elmore_Hartmann@gmail.com</td>
                            <td>Computers</td>
                            <td>821-435-4775</td>
                        </tr>
                        <tr>
                            <td>Liliana Schowalter</td>
                            <td>Liliana67</td>
                            <td>Liliana56@gmail.com</td>
                            <td>Tools</td>
                            <td>615-363-6678</td>
                        </tr>
                        <tr>
                            <td>Elmira Zboncak</td>
                            <td>Elmira_Zboncak</td>
                            <td>Elmira_Zboncak45@yahoo.com</td>
                            <td>Music</td>
                            <td>313-074-4827</td>
                        </tr>
                        <tr>
                            <td>Domenic Larkin</td>
                            <td>Domenic_Larkin32</td>
                            <td>Domenic_Larkin@gmail.com</td>
                            <td>Computers</td>
                            <td>463-196-1446</td>
                        </tr>
                        <tr>
                            <td>Josh Wolff</td>
                            <td>Josh_Wolff</td>
                            <td>Josh_Wolff@yahoo.com</td>
                            <td>Automotive</td>
                            <td>302-250-6870</td>
                        </tr>
                        <tr>
                            <td>Cullen Rosenbaum</td>
                            <td>Cullen_Rosenbaum</td>
                            <td>Cullen.Rosenbaum6@yahoo.com</td>
                            <td>Grocery</td>
                            <td>928-465-2210</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary filterable">
                <div class="panel-heading clearfix  ">
                    <div class="panel-title pull-left">
                        <div class="caption">
                            <i class="livicon" data-name="tablet" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Form fields inside the table
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="panel-body table-responsive">
                        <table class="table table-striped table-bordered" id="table4">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Position</th>
                                <th>Office</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Position</th>
                                <th>Office</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>
                                    <input type="text" class="form-control" id="row-1-age" name="row-1-age" value="61">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-1-position" name="row-1-position" value="System Architect">
                                </td>
                                <td>
                                    <select size="1" id="row-1-office" name="row-1-office">
                                        <option value="Edinburgh" selected="selected">Edinburgh</option>
                                        <option value="London">London</option>
                                        <option value="New York">New York</option>
                                        <option value="San Francisco">San Francisco</option>
                                        <option value="Tokyo">Tokyo</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>
                                    <input type="text" class="form-control" id="row-2-age" name="row-2-age" value="63">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-2-position" name="row-2-position" value="Accountant">
                                </td>
                                <td>
                                    <select size="1" id="row-2-office" name="row-2-office">
                                        <option value="Edinburgh">Edinburgh</option>
                                        <option value="London">London</option>
                                        <option value="New York">New York</option>
                                        <option value="San Francisco">San Francisco</option>
                                        <option value="Tokyo" selected="selected">Tokyo</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>
                                    <input type="text" class="form-control" id="row-3-age" name="row-3-age" value="66">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-3-position" name="row-3-position" value="Junior Technical Author">
                                </td>
                                <td>
                                    <select size="1" id="row-3-office" name="row-3-office">
                                        <option value="Edinburgh">Edinburgh</option>
                                        <option value="London">London</option>
                                        <option value="New York">New York</option>
                                        <option value="San Francisco" selected="selected">San Francisco</option>
                                        <option value="Tokyo">Tokyo</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>
                                    <input type="text" class="form-control" id="row-4-age" name="row-4-age" value="22">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-4-position" name="row-4-position" value="Senior Javascript Developer">
                                </td>
                                <td>
                                    <select size="1" id="row-4-office" name="row-4-office">
                                        <option value="Edinburgh" selected="selected">Edinburgh</option>
                                        <option value="London">London</option>
                                        <option value="New York">New York</option>
                                        <option value="San Francisco">San Francisco</option>
                                        <option value="Tokyo">Tokyo</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>
                                    <input type="text" class="form-control" id="row-5-age" name="row-5-age" value="33">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-5-position" name="row-5-position" value="Accountant">
                                </td>
                                <td>
                                    <select size="1" id="row-5-office" name="row-5-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo" selected="selected">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>
                                    <input type="text" class="form-control" id="row-6-age" name="row-6-age" value="61">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-6-position" name="row-6-position" value="Integration Specialist">
                                </td>
                                <td>
                                    <select size="1" id="row-6-office" name="row-6-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York" selected="selected">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>
                                    <input type="text" class="form-control" id="row-7-age" name="row-7-age" value="59">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-7-position" name="row-7-position" value="Sales Assistant">
                                </td>
                                <td>
                                    <select size="1" id="row-7-office" name="row-7-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco" selected="selected">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>
                                    <input type="text" class="form-control" id="row-8-age" name="row-8-age" value="55">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-8-position" name="row-8-position" value="Integration Specialist">
                                </td>
                                <td>
                                    <select size="1" id="row-8-office" name="row-8-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo" selected="selected">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>
                                    <input type="text" class="form-control" id="row-9-age" name="row-9-age" value="39">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-9-position" name="row-9-position" value="Javascript Developer">
                                </td>
                                <td>
                                    <select size="1" id="row-9-office" name="row-9-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco" selected="selected">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>
                                    <input type="text" class="form-control" id="row-10-age" name="row-10-age" value="23">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-10-position" name="row-10-position" value="Software Engineer">
                                </td>
                                <td>
                                    <select size="1" id="row-10-office" name="row-10-office">
                                        <option value="Edinburgh" selected="selected">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>
                                <td>
                                    <input type="text" class="form-control" id="row-11-age" name="row-11-age" value="30">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-11-position" name="row-11-position" value="Office Manager">
                                </td>
                                <td>
                                    <select size="1" id="row-11-office" name="row-11-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London" selected="selected">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Quinn Flynn</td>
                                <td>
                                    <input type="text" class="form-control" id="row-12-age" name="row-12-age" value="22">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-12-position" name="row-12-position" value="Support Lead">
                                </td>
                                <td>
                                    <select size="1" id="row-12-office" name="row-12-office">
                                        <option value="Edinburgh" selected="selected">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Charde Marshall</td>
                                <td>
                                    <input type="text" class="form-control" id="row-13-age" name="row-13-age" value="36">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-13-position" name="row-13-position" value="Regional Director">
                                </td>
                                <td>
                                    <select size="1" id="row-13-office" name="row-13-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco" selected="selected">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Haley Kennedy</td>
                                <td>
                                    <input type="text" class="form-control" id="row-14-age" name="row-14-age" value="43">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-14-position" name="row-14-position" value="Senior Marketing Designer">
                                </td>
                                <td>
                                    <select size="1" id="row-14-office" name="row-14-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London" selected="selected">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Tatyana Fitzpatrick</td>
                                <td>
                                    <input type="text" class="form-control" id="row-15-age" name="row-15-age" value="19">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-15-position" name="row-15-position" value="Regional Director">
                                </td>
                                <td>
                                    <select size="1" id="row-15-office" name="row-15-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London" selected="selected">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Michael Silva</td>
                                <td>
                                    <input type="text" class="form-control" id="row-16-age" name="row-16-age" value="66">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-16-position" name="row-16-position" value="Marketing Designer">
                                </td>
                                <td>
                                    <select size="1" id="row-16-office" name="row-16-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London" selected="selected">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Paul Byrd</td>
                                <td>
                                    <input type="text" class="form-control" id="row-17-age" name="row-17-age" value="64">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-17-position" name="row-17-position" value="Chief Financial Officer">
                                </td>
                                <td>
                                    <select size="1" id="row-17-office" name="row-17-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York" selected="selected">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Gloria Little</td>
                                <td>
                                    <input type="text" class="form-control" id="row-18-age" name="row-18-age" value="59">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-18-position" name="row-18-position" value="Systems Administrator">
                                </td>
                                <td>
                                    <select size="1" id="row-18-office" name="row-18-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York" selected="selected">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Bradley Greer</td>
                                <td>
                                    <input type="text" class="form-control" id="row-19-age" name="row-19-age" value="41">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-19-position" name="row-19-position" value="Software Engineer">
                                </td>
                                <td>
                                    <select size="1" id="row-19-office" name="row-19-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London" selected="selected">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Dai Rios</td>
                                <td>
                                    <input type="text" class="form-control" id="row-20-age" name="row-20-age" value="35">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-20-position" name="row-20-position" value="Personnel Lead">
                                </td>
                                <td>
                                    <select size="1" id="row-20-office" name="row-20-office">
                                        <option value="Edinburgh" selected="selected">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Jenette Caldwell</td>
                                <td>
                                    <input type="text" class="form-control" id="row-21-age" name="row-21-age" value="30">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-21-position" name="row-21-position" value="Development Lead">
                                </td>
                                <td>
                                    <select size="1" id="row-21-office" name="row-21-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York" selected="selected">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Yuri Berry</td>
                                <td>
                                    <input type="text" class="form-control" id="row-22-age" name="row-22-age" value="40">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-22-position" name="row-22-position" value="Chief Marketing Officer (CMO)">
                                </td>
                                <td>
                                    <select size="1" id="row-22-office" name="row-22-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York" selected="selected">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Caesar Vance</td>
                                <td>
                                    <input type="text" class="form-control" id="row-23-age" name="row-23-age" value="21">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-23-position" name="row-23-position" value="Pre-Sales Support">
                                </td>
                                <td>
                                    <select size="1" id="row-23-office" name="row-23-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York" selected="selected">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Doris Wilder</td>
                                <td>
                                    <input type="text" class="form-control" id="row-24-age" name="row-24-age" value="23">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-24-position" name="row-24-position" value="Sales Assistant">
                                </td>
                                <td>
                                    <select size="1" id="row-24-office" name="row-24-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Angelica Ramos</td>
                                <td>
                                    <input type="text" class="form-control" id="row-25-age" name="row-25-age" value="47">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-25-position" name="row-25-position" value="Chief Executive Officer (CEO)">
                                </td>
                                <td>
                                    <select size="1" id="row-25-office" name="row-25-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London" selected="selected">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Gavin Joyce</td>
                                <td>
                                    <input type="text" class="form-control" id="row-26-age" name="row-26-age" value="42">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-26-position" name="row-26-position" value="Developer">
                                </td>
                                <td>
                                    <select size="1" id="row-26-office" name="row-26-office">
                                        <option value="Edinburgh" selected="selected">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Jennifer Chang</td>
                                <td>
                                    <input type="text" class="form-control" id="row-27-age" name="row-27-age" value="28">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-27-position" name="row-27-position" value="Regional Director">
                                </td>
                                <td>
                                    <select size="1" id="row-27-office" name="row-27-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Brenden Wagner</td>
                                <td>
                                    <input type="text" class="form-control" id="row-28-age" name="row-28-age" value="28">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-28-position" name="row-28-position" value="Software Engineer">
                                </td>
                                <td>
                                    <select size="1" id="row-28-office" name="row-28-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco" selected="selected">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Fiona Green</td>
                                <td>
                                    <input type="text" class="form-control" id="row-29-age" name="row-29-age" value="48">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-29-position" name="row-29-position" value="Chief Operating Officer (COO)">
                                </td>
                                <td>
                                    <select size="1" id="row-29-office" name="row-29-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco" selected="selected">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Shou Itou</td>
                                <td>
                                    <input type="text" class="form-control" id="row-30-age" name="row-30-age" value="20">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-30-position" name="row-30-position" value="Regional Marketing">
                                </td>
                                <td>
                                    <select size="1" id="row-30-office" name="row-30-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo" selected="selected">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Michelle House</td>
                                <td>
                                    <input type="text" class="form-control" id="row-31-age" name="row-31-age" value="37">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-31-position" name="row-31-position" value="Integration Specialist">
                                </td>
                                <td>
                                    <select size="1" id="row-31-office" name="row-31-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Suki Burks</td>
                                <td>
                                    <input type="text" class="form-control" id="row-32-age" name="row-32-age" value="53">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-32-position" name="row-32-position" value="Developer">
                                </td>
                                <td>
                                    <select size="1" id="row-32-office" name="row-32-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London" selected="selected">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Prescott Bartlett</td>
                                <td>
                                    <input type="text" class="form-control" id="row-33-age" name="row-33-age" value="27">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-33-position" name="row-33-position" value="Technical Author">
                                </td>
                                <td>
                                    <select size="1" id="row-33-office" name="row-33-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London" selected="selected">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Gavin Cortez</td>
                                <td>
                                    <input type="text" class="form-control" id="row-34-age" name="row-34-age" value="22">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-34-position" name="row-34-position" value="Team Leader">
                                </td>
                                <td>
                                    <select size="1" id="row-34-office" name="row-34-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco" selected="selected">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Martena Mccray</td>
                                <td>
                                    <input type="text" class="form-control" id="row-35-age" name="row-35-age" value="46">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-35-position" name="row-35-position" value="Post-Sales support">
                                </td>
                                <td>
                                    <select size="1" id="row-35-office" name="row-35-office">
                                        <option value="Edinburgh" selected="selected">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Unity Butler</td>
                                <td>
                                    <input type="text" class="form-control" id="row-36-age" name="row-36-age" value="47">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-36-position" name="row-36-position" value="Marketing Designer">
                                </td>
                                <td>
                                    <select size="1" id="row-36-office" name="row-36-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco" selected="selected">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Howard Hatfield</td>
                                <td>
                                    <input type="text" class="form-control" id="row-37-age" name="row-37-age" value="51">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-37-position" name="row-37-position" value="Office Manager">
                                </td>
                                <td>
                                    <select size="1" id="row-37-office" name="row-37-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco" selected="selected">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Hope Fuentes</td>
                                <td>
                                    <input type="text" class="form-control" id="row-38-age" name="row-38-age" value="41">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-38-position" name="row-38-position" value="Secretary">
                                </td>
                                <td>
                                    <select size="1" id="row-38-office" name="row-38-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco" selected="selected">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Vivian Harrell</td>
                                <td>
                                    <input type="text" class="form-control" id="row-39-age" name="row-39-age" value="62">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-39-position" name="row-39-position" value="Financial Controller">
                                </td>
                                <td>
                                    <select size="1" id="row-39-office" name="row-39-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco" selected="selected">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Timothy Mooney</td>
                                <td>
                                    <input type="text" class="form-control" id="row-40-age" name="row-40-age" value="37">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-40-position" name="row-40-position" value="Office Manager">
                                </td>
                                <td>
                                    <select size="1" id="row-40-office" name="row-40-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London" selected="selected">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Jackson Bradshaw</td>
                                <td>
                                    <input type="text" class="form-control" id="row-41-age" name="row-41-age" value="65">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-41-position" name="row-41-position" value="Director">
                                </td>
                                <td>
                                    <select size="1" id="row-41-office" name="row-41-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York" selected="selected">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Olivia Liang</td>
                                <td>
                                    <input type="text" class="form-control" id="row-42-age" name="row-42-age" value="64">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-42-position" name="row-42-position" value="Support Engineer">
                                </td>
                                <td>
                                    <select size="1" id="row-42-office" name="row-42-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Bruno Nash</td>
                                <td>
                                    <input type="text" class="form-control" id="row-43-age" name="row-43-age" value="38">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-43-position" name="row-43-position" value="Software Engineer">
                                </td>
                                <td>
                                    <select size="1" id="row-43-office" name="row-43-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London" selected="selected">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Sakura Yamamoto</td>
                                <td>
                                    <input type="text" class="form-control" id="row-44-age" name="row-44-age" value="37">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-44-position" name="row-44-position" value="Support Engineer">
                                </td>
                                <td>
                                    <select size="1" id="row-44-office" name="row-44-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo" selected="selected">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Thor Walton</td>
                                <td>
                                    <input type="text" class="form-control" id="row-45-age" name="row-45-age" value="61">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-45-position" name="row-45-position" value="Developer">
                                </td>
                                <td>
                                    <select size="1" id="row-45-office" name="row-45-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York" selected="selected">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Finn Camacho</td>
                                <td>
                                    <input type="text" class="form-control" id="row-46-age" name="row-46-age" value="47">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-46-position" name="row-46-position" value="Support Engineer">
                                </td>
                                <td>
                                    <select size="1" id="row-46-office" name="row-46-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco" selected="selected">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Serge Baldwin</td>
                                <td>
                                    <input type="text" class="form-control" id="row-47-age" name="row-47-age" value="64">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-47-position" name="row-47-position" value="Data Coordinator">
                                </td>
                                <td>
                                    <select size="1" id="row-47-office" name="row-47-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Zenaida Frank</td>
                                <td>
                                    <input type="text" class="form-control" id="row-48-age" name="row-48-age" value="63">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-48-position" name="row-48-position" value="Software Engineer">
                                </td>
                                <td>
                                    <select size="1" id="row-48-office" name="row-48-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York" selected="selected">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Zorita Serrano</td>
                                <td>
                                    <input type="text" class="form-control" id="row-49-age" name="row-49-age" value="56">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-49-position" name="row-49-position" value="Software Engineer">
                                </td>
                                <td>
                                    <select size="1" id="row-49-office" name="row-49-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco" selected="selected">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Jennifer Acosta</td>
                                <td>
                                    <input type="text" class="form-control" id="row-50-age" name="row-50-age" value="43">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-50-position" name="row-50-position" value="Junior Javascript Developer">
                                </td>
                                <td>
                                    <select size="1" id="row-50-office" name="row-50-office">
                                        <option value="Edinburgh" selected="selected">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Cara Stevens</td>
                                <td>
                                    <input type="text" class="form-control" id="row-51-age" name="row-51-age" value="46">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-51-position" name="row-51-position" value="Sales Assistant">
                                </td>
                                <td>
                                    <select size="1" id="row-51-office" name="row-51-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York" selected="selected">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Hermione Butler</td>
                                <td>
                                    <input type="text" class="form-control" id="row-52-age" name="row-52-age" value="47">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-52-position" name="row-52-position" value="Regional Director">
                                </td>
                                <td>
                                    <select size="1" id="row-52-office" name="row-52-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London" selected="selected">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Lael Greer</td>
                                <td>
                                    <input type="text" class="form-control" id="row-53-age" name="row-53-age" value="21">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-53-position" name="row-53-position" value="Systems Administrator">
                                </td>
                                <td>
                                    <select size="1" id="row-53-office" name="row-53-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London" selected="selected">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Jonas Alexander</td>
                                <td>
                                    <input type="text" class="form-control" id="row-54-age" name="row-54-age" value="30">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-54-position" name="row-54-position" value="Developer">
                                </td>
                                <td>
                                    <select size="1" id="row-54-office" name="row-54-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco" selected="selected">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Shad Decker</td>
                                <td>
                                    <input type="text" class="form-control" id="row-55-age" name="row-55-age" value="51">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-55-position" name="row-55-position" value="Regional Director">
                                </td>
                                <td>
                                    <select size="1" id="row-55-office" name="row-55-office">
                                        <option value="Edinburgh" selected="selected">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Michael Bruce</td>
                                <td>
                                    <input type="text" class="form-control" id="row-56-age" name="row-56-age" value="29">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-56-position" name="row-56-position" value="Javascript Developer">
                                </td>
                                <td>
                                    <select size="1" id="row-56-office" name="row-56-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Donna Snider</td>
                                <td>
                                    <input type="text" class="form-control" id="row-57-age" name="row-57-age" value="27">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="row-57-position" name="row-57-position" value="Customer Support">
                                </td>
                                <td>
                                    <select size="1" id="row-57-office" name="row-57-office">
                                        <option value="Edinburgh">
                                            Edinburgh
                                        </option>
                                        <option value="London">
                                            London
                                        </option>
                                        <option value="New York" selected="selected">
                                            New York
                                        </option>
                                        <option value="San Francisco">
                                            San Francisco
                                        </option>
                                        <option value="Tokyo">
                                            Tokyo
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row-->
    <!-- Third Basic Table Ends Here-->
</section>
<!-- content -->

    @stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.responsive.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/select2/js/select2.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/table-advanced2.js') }}" ></script>

@stop
