@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Accordion Tabs
@parent
@stop

{{-- page level styles --}}
@section('header_styles')    
    
	<link rel="stylesheet" href="{{ asset('assets/css/pages/tab.css') }}" />
    <style>
        @media (min-width:320px) and (max-width:425px){
            .popover.left{
                width:100px !important;
            }
        }
    </style>
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Tabs and Accordions</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">UI Features</a>
                    </li>
                    <li class="active">Tabs and Accordions</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <!--main content-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="printer" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Tabs
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="bs-example">
                                    <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                                        <li class="active">
                                            <a href="#home" data-toggle="tab">Home</a>
                                        </li>
                                        <li>
                                            <a href="#profile" data-toggle="tab">Profile</a>
                                        </li>
                                        <li class="disabled">
                                            <a>Disabled</a>
                                        </li>
                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        <div class="tab-pane fade active in" id="home">
                                            <p class="m-r-6">
                                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="profile">
                                            <p  class="m-r-6">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="dropdown1">
                                            <p class="m-r-6">
                                                Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="dropdown2">
                                            <p class="m-r-6">
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="signal" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Default Accordions
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body"><div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <h4 class="panel-title">Accordion1</h4>
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <h4 class="panel-title">
                                                    Accordion2
                                                </h4>
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <h4 class="panel-title"> Accordion3</h4>
                                            </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- nav-tabs-custom -->
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="signal" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Custom Tabs
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!-- Custom Tabs -->
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_1" data-toggle="tab">Tab 1</a>
                                        </li>
                                        <li>
                                            <a href="#tab_2" data-toggle="tab">Tab 2</a>
                                        </li>
                                        <li class="pull-right">
                                            <a href="#" class="text-muted">
                                                <i class="fa fa-gear"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="slim2">
                                        <div class="tab-pane active" id="tab_1">
                                            <p  class="m-r-6">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            </p>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_2">
                                            <p  class="m-r-6">
                                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                            </p>
                                        </div>
                                        <!-- /.tab-pane -->
                                    </div>
                                    <!-- /.tab-content -->
                                </div>
                                <!-- nav-tabs-custom -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="question" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Pills
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="bs-example">
                                    <ul class="nav nav-pills">
                                        <li class="active">
                                            <a href="#">Home</a>
                                        </li>
                                        <li>
                                            <a href="#">Profile</a>
                                        </li>
                                        <li class="disabled">
                                            <a href="#">Disabled</a>
                                        </li>
                                    </ul>
                                </div>
                                <br>
                                <div class="bs-example">
                                    <ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
                                        <li class="active">
                                            <a href="#">Home</a>
                                        </li>
                                        <li>
                                            <a href="#">Profile</a>
                                        </li>
                                        <li class="disabled">
                                            <a href="#">Disabled</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="tree" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Accordions
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!--tab starts-->
                                <!-- Nav tabs category -->
                                <ul class="nav nav-tabs faq-cat-tabs">
                                    <li class="active">
                                        <a href="#faq-cat-1" data-toggle="tab">Tab 1</a>
                                    </li>
                                    <li>
                                        <a href="#faq-cat-2" data-toggle="tab">Tab 2</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content faq-cat-content">
                                    <div class="tab-pane active in fade" id="faq-cat-1">
                                        <div class="panel-group" id="accordion-cat-1">
                                            <div class="panel panel-default panel-faq">
                                                <div class="panel-heading">
                                                    <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-1">
                                                        <h4 class="panel-title">
                                                            Item Tab 1-1
                                                            <span class="pull-right"></span>
                                                        </h4>
                                                    </a>
                                                </div>
                                                <div id="faq-cat-1-sub-1" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default panel-faq">
                                                <div class="panel-heading">
                                                    <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-2">
                                                        <h4 class="panel-title">
                                                            Item Tab 1-2
                                                            <span class="pull-right"></span>
                                                        </h4>
                                                    </a>
                                                </div>
                                                <div id="faq-cat-1-sub-2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="faq-cat-2">
                                        <div class="panel-group" id="accordion-cat-2">
                                            <div class="panel panel-default panel-faq">
                                                <div class="panel-heading">
                                                    <a data-toggle="collapse" data-parent="#accordion-cat-2" href="#faq-cat-2-sub-1">
                                                        <h4 class="panel-title">
                                                            Item Tab 2-1
                                                            <span class="pull-right"></span>
                                                        </h4>
                                                    </a>
                                                </div>
                                                <div id="faq-cat-2-sub-1" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default panel-faq">
                                                <div class="panel-heading">
                                                    <a data-toggle="collapse" data-parent="#accordion-cat-2" href="#faq-cat-2-sub-2">
                                                        <h4 class="panel-title">
                                                            Item Tab 2-2
                                                            <span class="pull-right"></span>
                                                        </h4>
                                                    </a>
                                                </div>
                                                <div id="faq-cat-2-sub-2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--tab ends-->
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="piggybank" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Panel with Tabs
                                </h3>
                                <div class=" kal pull-right">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li class="active">
                                            <a href="#tab1" data-toggle="tab">Tab 1</a>
                                        </li>
                                        <li>
                                            <a href="#tab2" data-toggle="tab">Tab 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="tab-content" id="slim1">
                                    <div class="tab-pane text-justify active" id="tab1">
                                        <h4> This is Tab1</h4>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. AtLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. AtLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. AtLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                                    </div>
                                    <div class="tab-pane text-justify" id="tab2">
                                        <h4> This is Tab2</h4>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="tasks" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Tool Tips
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <p>
                                    <span class="bs-example tooltip-demo">
                                        <button class="btn tooltips btn-primary btn-lg" data-toggle="tooltip" data-tooltip="tooltip" data-placement="top" data-original-title="Tooltip in top" style="margin-bottom:10px;">Top</button>
                                    </span>
                                    <span class="bs-example tooltip-demo">
                                        <button class="btn tooltips btn-success btn-lg" data-toggle="tooltip" data-tooltip="tooltip" data-placement="left" data-original-title="Tooltip in left" style="margin-bottom:10px;">Left</button>
                                    </span>
                                    <span class="bs-example tooltip-demo">
                                        <button class="btn tooltips btn-info btn-lg" data-toggle="tooltip" data-tooltip="tooltip" data-placement="right" data-original-title="Tooltip in right" style="margin-bottom:10px;">Right</button>
                                    </span>
                                    <span class="bs-example tooltip-demo">
                                        <button class="btn tooltips btn-warning btn-lg" data-toggle="tooltip" data-tooltip="tooltip" data-placement="bottom" data-original-title="Tooltip in bottom" style="margin-bottom:10px;">Bottom</button>
                                    </span>
                                </p>
                                <div class="bs-example">
                                    <ul class="tooltip-examples list-inline">
                                        <li>
                                            <a href="#" data-toggle="tooltip" data-original-title="hi">Tooltip</a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" data-original-title="hello!!">small tooltip</a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" data-original-title="A much longer tooltip to demonstrate the max-width of the Bootstrp tooltip.">Large tooltip</a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" data-original-title="Bye!">Last tooltip</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="tags" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Popover
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 hidden-xs hidden-sm">
                                        <button type="button" class="btn btn-default" title="Popover title" data-container="body" data-toggle="popover" data-placement="left" data-content="Some content in Popover on left" style="margin-bottom:10px;margin-left:10px;">Popover on left</button>
                                        <button type="button" class="btn btn-primary" title="Popover title" data-container="body" data-toggle="popover" data-placement="top" data-content="Some content in Popover on top" style="margin-bottom:10px;margin-left:10px;">Popover on top</button>
                                        <button type="button" class="btn btn-success" title="Popover title" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Some content in Popover on bottom" style="margin-bottom:10px;margin-left:10px;">Popover on bottom</button>
                                        <button type="button" class="btn btn-warning" title="Popover title" data-container="body" data-toggle="popover" data-placement="right" data-content="Some content in Popover on right" style="margin-bottom:10px;margin-left:10px;">Popover on right</button>

                                    </div>
                                    <div class="col-md-12 visible-xs text-center">
                                        <button type="button" class="btn btn-default" title="Popover title" data-container="body" data-toggle="popover" data-placement="left" data-content="Some content in Popover on left" style="margin-bottom:10px;margin-left:10px;">Popover on left</button>
                                        <button type="button" class="btn btn-primary" title="Popover title" data-container="body" data-toggle="popover" data-placement="top" data-content="Some content in Popover on top" style="margin-bottom:10px;margin-left:10px;">Popover on top</button>
                                        <button type="button" class="btn btn-success" title="Popover title" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Some content in Popover on bottom" style="margin-bottom:10px;margin-left:10px;">Popover on bottom</button>
                                        <button type="button" class="btn btn-warning" title="Popover title" data-container="body" data-toggle="popover" data-placement="right" data-content="Some content in Popover on right" style="margin-bottom:10px;margin-left:10px;">Popover on right</button>

                                    </div>
                                    <div class="col-md-12 visible-sm">
                                        <button type="button" class="btn btn-default" title="Popover title" data-container="body" data-toggle="popover" data-placement="top" data-content="Some content in Popover on top" style="margin-bottom:10px;margin-left:10px;">Popover on top</button>
                                        <button type="button" class="btn btn-primary" title="Popover title" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Some content in Popover on bottom" style="margin-bottom:10px;margin-left:10px;">Popover on bottom</button>
                                        <button type="button" class="btn btn-success" title="Popover title" data-container="body" data-toggle="popover" data-placement="left" data-content="Some content in Popover on left" style="margin-bottom:10px;margin-left:10px;">Popover on left</button>
                                        <button type="button" class="btn btn-warning" title="Popover title" data-container="body" data-toggle="popover" data-placement="right" data-content="Some content in Popover on right" style="margin-bottom:10px;margin-left:10px;">Popover on right</button>

                                    </div>
                                    <div class="po-markup">
                                        <br>
                                        <a href="http://www.fifa.com/" class="po-link">fifa.com</a>
                                        ← popover on link so you can get site information.
                                        <div class="po-content hidden">
                                            <div class="po-title">
                                                <img src="{{ asset('assets/img/football.png') }}" alt="Google" width="20" height="20" />Foot Ball world cup
                                            </div>
                                            <!-- ./po-title -->
                                            <div class="po-body">
                                                <p>
                                                    Football refers to a number of sports that involve, to varying degrees, kicking a ball with the foot to score a goal. The most popular of these sports worldwide is
                                                    <strong>association football</strong>
                                                    , more commonly known as just "football" or "soccer".
                                                </p>
                                            </div>
                                            <!-- ./po-body -->
                                        </div>
                                        <!-- ./po-content -->
                                    </div>
                                    <!-- ./po-markup -->
                                </div>
                                <!-- ./col-md6 -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--main content ends-->
            </section>
            <!-- content -->
        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('assets/js/pages/tabs_accordions.js') }}" type="text/javascript"></script>
@stop
