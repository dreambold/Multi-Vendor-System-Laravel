@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Home
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/tabbular.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/jquery.circliful.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl_carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl_carousel/css/owl.theme.css') }}">
    <!--end of page level css-->
@stop

{{-- slider --}}
@section('top')

@stop

{{-- content --}}
@section('content')
    <div class="container">
        <div class="row ml-0 mr-0">
            <span class="font-20 color-black">Mega Buy: Summary</span><span class="color-blue font-14 ml-10">longlyov_90(0)</span>
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#activity" data-toggle="tab">Activty</a>
                </li>
                <li>
                    <a href="#messages" data-toggle="tab">Messages (1)</a>
                </li>
                <li>
                    <a href="#account" data-toggle="tab">Account</a>
                </li>
                <span class="font-10 pull-right mt-20"> is your Mega Buy Homepage</span>
                <span class="mt-20 pull-right bold font-10">Summary&nbsp</span>
            </ul>
            <div class="tab-content mt-10">
                <div class="tab-pane fade active in" id="activity">
                    <div class="col-md-2 hidden-xs pl-0" style="padding-right:2px;">
                        <ul class="left-side-menu pl-0">
                            <li class="active" target="summary">Summary</li>
                            <li target="recently">Recently viewed</li>
                            <li target="bids-offers">Bids/Offers</li>
                            <li target="history">Purchase history</li>
                            <li target="watching">Watching</li>
                            <li target="searches">Saved searches</li>
                            <li target="sellers">Saved sellers</li>
                            <li target="sell">Sell</li>
                        </ul>
                        <h3 class="border-bottom pb-10">Recently viewed items</h3>
                        <div class="col-md-offset-3">
                            @for($i = 0; $i < 5; $i++)
                            <div class="left-side-recently-item">
                                <img src="uploads/product/small/1.jpg">
                                <p class="color-blue font-10 mb-0">Apple Iphone Xs Max Display Model Dum...</p>
                                <p class="font-14 bold color-black mb-0">RMB 46.32</p>
                                <p class="font-10 mb-0">3 bids</p>
                            </div>
                            @endfor
                        </div>
                        <p class="mb-0 font-12 bold color-black mt-20">Announcements</p>
                        <a href="javascript:void(0);" class="color-blue font-12">See all eBay announcements</a>
                    </div>
                    <!-- summary -->
                    <div class="col-md-10 my-ebay-content col-xs-12 pl-0 pr-0 active" id="summary">
                        <p class="header-gray mb-0">Bidding</p>
                        <div class="bg-white-wrapper">
                            <span>Show:</span>
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Not hidden</span>
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">All items</span>
                        </div>
                        <div class="standard-wrapper" style="padding-bottom:40px;">
                            <div class="row ml-0 mr-0">
                                <div class="col-md-6 pl-0">
                                    <input type="checkbox" class="checkbox-inline mt-0"><button type="button" class="btn btn-default ml-10 btn-sm ebay-control">Hide</button>
                                </div>
                                <div class="col-md-6 text-right">
                                    <span>Status</span>
                                    <select class="select-small color-blue ml-10 ebay-control" style="width:100px">
                                        <option>All(1)</option>
                                    </select>
                                    <span class="ml-10">Sort</span>
                                    <select class="select-small color-blue ml-10 ebay-control" style="width:200px">
                                        <option>Time left: ending soonset</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row ml-0 mr-0 mt-20">
                                <div class="col-md-6 pl-0 display-flex">
                                    <div class="display-inline top-align">
                                        <input type="checkbox" class="checkbox-inline mt-0">
                                    </div>
                                    <div class="display-inline ml-20">
                                        <img class="border-rect size-150" src="uploads/product/small/1.jpg">
                                        <p class="text-right font-10">1 of 4 images</p>
                                    </div>
                                    <div class="display-inline top-align ml-20">
                                        <p class="color-blue font-12 mb-0">Apple Iphone Xs Max Display Model Dummy Phone</p>
                                        <p class="font-10 mb-0">( 1704198799344 )</p>
                                        <span class="color-blue font-10">m1q123michal</span>
                                        <span class="font-10 mlr-5">|</span>
                                        <span class="color-blue font-10">171</span>
                                        <span class="font-10 mlr-5">|</span>
                                        <span class="font-10">100%</span>
                                        <p class="font-10 mb-0">Your max bid: US $7.00</p>
                                    </div>
                                </div>
                                <div class="col-md-6 text-right">
                                    <div class="display-inline ml-10 top-align">
                                        <p class="bold color-black font-12 mb-0 text-right">4d 7h left</p>
                                        <p class="font-12 mb-0 text-right">Sunday,</p>
                                        <p class="font-12 mb-0 text-right">05:45 AM AST</p>
                                    </div>
                                    <div class="display-inline ml-20 top-align">
                                        <p class="font-14 bold color-green mb-0 text-right">RMB 46.32</p>
                                        <p class="font-10 color-blue mb-0 text-right">3 bids</p>
                                        <p class="font-10 color-blue mb-0 text-right">Calulate</p>
                                    </div>
                                    <div class="display-inline ml-20 top-align">
                                        <div class="row ml-0 mr-0">
                                            <button class="visit-btn">Visit seller's store</button>
                                        </div>
                                        <div class="row ml-0 mr-0">
                                            <a class="font-10 color-blue">View seller's other items</a>
                                        </div>
                                        <div class="row ml-0 mr-0">
                                            <select class="font-10 border-none pr-0">
                                                <option>More actions</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="font-10 mt-10">If you have been outbid, you may still become the high bidder if, for example, the seller cancels a bid received by another bidder or lowers a reserve price.</p>
                            <div class="row ml-0 mr-0">
                                <div class="col-md-3 border-rect pt-10 pb-10">
                                    <p class="font-12 color-black bold">Item you bid on</p>
                                    <div class="row ml-0 mr-0 text-center mt-10"><img src="uploads/product/small/1.jpg" class="size-150"></div>
                                    <p class="font-12 color-black bold mt-10">Apple Iphone Xs Max Display Model Dummy</p>
                                </div>
                                <div class="col-md-9 border-rect similar-item pt-10 pb-10" style="height:256px;">
                                    <p class="font-12 color-black bold">Similar Sponsored items</p>
                                    No recommendations found for your selection. Please select next item.
                                </div>
                            </div>
                        </div>
                        <p class="header-gray mb-0 mt-20">Selling Activity</p>
                        <div class="standard-wrapper text-center pt-20 pb-20 mt-10">
                            <div class="display-inline top-align">
                                <img class="size-30" src="uploads/product/small/1.jpg">
                            </div>
                            <div class="display-inline text-left">
                                <span>Looking for your selling activity?Go To </span><a class="font-12 color-blue cursor">All Selling</a>
                                <br><span>to access your listings and sales!</span>
                            </div>
                        </div>
                    </div>
                    <!-- End of summary -->
                    <!-- recently viewed -->
                    <div class="col-md-10 my-ebay-content col-xs-12 pl-0 pr-0" id="recently">
                        <div class="bg-white-wrapper">
                            <span class="font-14 ml-10">Recently viewed</span>
                            <a class="pull-right font-12 color-blue mr-10" href="javascript:void(0)">Clear all</a>
                        </div>
                        <div class="row border-left ml-0 mr-0">
                            @for($i = 0; $i<8; $i++)
                            <div class="col-md-4 col-xs-6 border-bottom border-right pt-10 cursor">
                                <div class="row ml-0 mr-0 text-center">
                                    <img src="uploads/product/small/1.jpg" class="size-150">
                                </div>
                                <div class="row ml-0 mr-0">
                                    <p class="color-blue font-12 mb-0">Apple Iphone Xs Max Display Model Dummy Phone</p>
                                    <span class="color-black bold font-12">RMB 46.32</span><span class="font-10">3 Bids</span>
                                    <p class="mb-0 font-10 bold color-black">+ RMB 204.87</p>
                                    <p class="font-10">4d 7h</p>
                                </div>
                            </div>
                            @endfor
                        </div>
                        <div class="row ml-0 mr-0 mt-20">
                            <span class="ml-20 font-10">8 items total</span>
                        </div>
                    </div>
                    <!-- End of recently viewed -->
                    <!-- Bids/offers -->
                    <div class="col-md-10 my-ebay-content col-xs-12 pl-0 pr-0" id="bids-offers">
                        <div class="bg-white-wrapper pb-10" style="border-top:2px green solid;">
                            <span class="font-12 ml-10 bold">Items you didn't win will now show in the <a class="color-blue" href="javascript:void(0)">Didn't Win</a> section of this page</span>
                        </div>
                        <p class="header-gray mb-0">Bidding</p>
                        <div class="bg-white-wrapper">
                            <span>Show:</span>
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Not hidden</span>
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">All items</span>
                        </div>
                        <div class="standard-wrapper" style="padding-bottom:40px;">
                            <div class="row ml-0 mr-0">
                                <div class="col-md-6 pl-0">
                                    <input type="checkbox" class="checkbox-inline mt-0"><button type="button" class="btn btn-default ml-10 btn-sm ebay-control">Hide</button>
                                </div>
                                <div class="col-md-6 text-right">
                                    <span>Status</span>
                                    <select class="select-small color-blue ml-10 ebay-control" style="width:100px">
                                        <option>All(1)</option>
                                    </select>
                                    <span class="ml-10">Sort</span>
                                    <select class="select-small color-blue ml-10 ebay-control" style="width:200px">
                                        <option>Time left: ending soonset</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row ml-0 mr-0 mt-20">
                                <div class="col-md-6 pl-0 display-flex">
                                    <div class="display-inline top-align">
                                        <input type="checkbox" class="checkbox-inline mt-0">
                                    </div>
                                    <div class="display-inline ml-20">
                                        <img class="border-rect size-150" src="uploads/product/small/1.jpg">
                                        <p class="text-right font-10">1 of 4 images</p>
                                    </div>
                                    <div class="display-inline top-align ml-20">
                                        <p class="color-blue font-12 mb-0">Apple Iphone Xs Max Display Model Dummy Phone</p>
                                        <p class="font-10 mb-0">( 1704198799344 )</p>
                                        <span class="color-blue font-10">m1q123michal</span>
                                        <span class="font-10 mlr-5">|</span>
                                        <span class="color-blue font-10">171</span>
                                        <span class="font-10 mlr-5">|</span>
                                        <span class="font-10">100%</span>
                                        <p class="font-10 mb-0">Your max bid: US $7.00</p>
                                    </div>
                                </div>
                                <div class="col-md-6 text-right">
                                    <div class="display-inline ml-10 top-align">
                                        <p class="bold color-black font-12 mb-0 text-right">4d 7h left</p>
                                        <p class="font-12 mb-0 text-right">Sunday,</p>
                                        <p class="font-12 mb-0 text-right">05:45 AM AST</p>
                                    </div>
                                    <div class="display-inline ml-20 top-align">
                                        <p class="font-14 bold color-green mb-0 text-right">RMB 46.32</p>
                                        <p class="font-10 color-blue mb-0 text-right">3 bids</p>
                                        <p class="font-10 color-blue mb-0 text-right">Calulate</p>
                                    </div>
                                    <div class="display-inline ml-20 top-align">
                                        <div class="row ml-0 mr-0">
                                            <button class="visit-btn">Visit seller's store</button>
                                        </div>
                                        <div class="row ml-0 mr-0">
                                            <a class="font-10 color-blue">View seller's other items</a>
                                        </div>
                                        <div class="row ml-0 mr-0">
                                            <select class="font-10 border-none pr-0">
                                                <option>More actions</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="font-10 mt-10">If you have been outbid, you may still become the high bidder if, for example, the seller cancels a bid received by another bidder or lowers a reserve price.</p>
                            <div class="row ml-0 mr-0">
                                <div class="col-md-3 border-rect pt-10 pb-10">
                                    <p class="font-12 color-black bold">Item you bid on</p>
                                    <div class="row ml-0 mr-0 text-center mt-10"><img src="uploads/product/small/1.jpg" class="size-150"></div>
                                    <p class="font-12 color-black bold mt-10">Apple Iphone Xs Max Display Model Dummy</p>
                                </div>
                                <div class="col-md-9 border-rect similar-item pt-10 pb-10" style="height:256px;">
                                    <p class="font-12 color-black bold">Similar Sponsored items</p>
                                    No recommendations found for your selection. Please select next item.
                                </div>
                            </div>
                        </div>
                        <p class="header-gray mb-0 mt-20">Offers</p>
                        <div class="standard-wrapper text-center mt-10">
                            <p class="font-10 color-black bold mb-0">You don't have any offers now</p>
                            <p class="font-10 mb-0">To see items you had offers on that have ended. go to
                                <a href="javascript:void(0)" class="color-blue"><u>Purchase History</u></a> or <a href="javascript:void(0)" class="color-blue"><u>Didn't win</u></a>
                            </p>
                        </div>
                        <p class="header-gray mb-0 mt-20">Didn't Win</p>
                        <div class="standard-wrapper" style="padding-bottom:40px;">
                            <div class="row ml-0 mr-0">
                                <div class="col-md-6 pl-0">
                                    <input type="checkbox" class="checkbox-inline mt-0"><button type="button" class="btn btn-default ml-10 btn-sm ebay-control">Delete</button>
                                </div>
                                <div class="col-md-6 text-right">
                                    <span>Filter by</span>
                                    <select class="select-small color-blue ml-10 ebay-control" style="width:100px">
                                        <option>Bids(1)</option>
                                    </select>
                                    <span class="ml-10">Sort</span>
                                    <select class="select-small color-blue ml-10 ebay-control" style="width:200px">
                                        <option>Time ended: recent first</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row ml-0 mr-0 mt-20">
                                <div class="col-md-6 pl-0 display-flex">
                                    <div class="display-inline top-align">
                                        <input type="checkbox" class="checkbox-inline mt-0">
                                    </div>
                                    <div class="display-inline ml-20">
                                        <img class="border-rect size-150" src="uploads/product/small/2.jpg">
                                        <p class="text-right font-10">1 of 6 images</p>
                                    </div>
                                    <div class="display-inline top-align ml-20">
                                        <p class="color-blue font-12 mb-0">Apple MacBook Pro Retina 13" 2013. 2.8ghz Core i7,8gb, 512gb ssd - Excellent! </p>
                                        <p class="font-10 mb-0">( 1704198799344 )</p>
                                        <span class="color-blue font-10">geeks-and-beats-ltd</span>
                                        <span class="font-10 mlr-5">|</span>
                                        <span class="color-blue font-10">452</span>
                                        <span class="font-10 mlr-5">|</span>
                                        <span class="font-10">100%</span>
                                        <p class="font-10 mb-0">Your max bid: US $7.00</p>
                                    </div>
                                </div>
                                <div class="col-md-6 text-right">
                                    <div class="display-inline ml-10 top-align">
                                        <p class="bold color-black font-12 mb-0 text-right">4d 7h left</p>
                                        <p class="font-12 mb-0 text-right">Sunday,</p>
                                        <p class="font-12 mb-0 text-right">05:45 AM AST</p>
                                    </div>
                                    <div class="display-inline ml-20 top-align">
                                        <p class="font-14 bold color-green mb-0 text-right">RMB 46.32</p>
                                        <p class="font-10 color-blue mb-0 text-right">3 bids</p>
                                        <p class="font-10 color-blue mb-0 text-right">Calulate</p>
                                    </div>
                                    <div class="display-inline ml-20 top-align">
                                        <div class="row ml-0 mr-0">
                                            <button class="visit-btn">View seller's other items</button>
                                        </div>
                                        <div class="row ml-0 mr-0">
                                            <a class="font-10 color-blue">View seller's other items</a>
                                        </div>
                                        <div class="row ml-0 mr-0">
                                            <select class="font-10 border-none pr-0">
                                                <option>More actions</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ml-0 mr-0">
                                <div class="col-md-3 border-rect pt-10 pb-10">
                                    <p class="font-12 color-black bold">Item you didn't win</p>
                                    <div class="row ml-0 mr-0 text-center mt-10"><img src="uploads/product/small/1.jpg" class="size-150"></div>
                                    <p class="font-12 color-black bold mt-10">Apple MacBook Pro Retina 13" 2013,2,8gh...</p>
                                </div>
                                <div class="col-md-9 border-rect similar-item pt-10 pb-10" style="height:256px;">
                                    <p class="font-12 color-black bold">Similar Sponsored items</p>
                                    No recommendations found for your selection. Please select next item.
                                </div>
                            </div>
                            <div class="row ml-0 mr-0 text-right per-page-wrapper">
                                <span class="font-10">Items per page</span>
                                <span class="per-page-item">10</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item active">25</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">50</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">75</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">100</span>
                            </div>
                        </div>
                    </div>
                    <!-- End of Bids/offers -->
                    <!-- purchase history -->
                    <div class="col-md-10 my-ebay-content col-xs-12 pl-0 pr-0" id="history">
                        <p class="header-gray mb-0 mt-20">Unpaid Items</p>
                        <div class="bg-white-wrapper">
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Not hidden</span>
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Show hidden items</span>
                            <div class="clear border-bottom mt-10"></div>
                            <div class="row mt-20 ml-0 mr-0">
                                <p class="font-12 color-black bold pl-10">You do not have any ready for payment items to display in this view</p>
                            </div>
                            <div class="row ml-0 mr-0 text-right per-page-wrapper">
                                <span class="font-10">Items per page</span>
                                <span class="per-page-item">10</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item active">25</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">50</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">75</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">100</span>
                            </div>
                        </div>
                        <p class="header-gray mb-0 mt-20">Unpaid Invoices</p>
                        <div class="bg-white-wrapper">
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Not hidden</span>
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Show hidden items</span>
                            <div class="clear border-bottom mt-10"></div>
                            <div class="row mt-20 ml-0 mr-0">
                                <p class="font-12 color-black bold pl-10">You do not have any invoices to display in this view</p>
                            </div>
                            <div class="row ml-0 mr-0 text-right per-page-wrapper">
                                <span class="font-10">Items per page</span>
                                <span class="per-page-item">10</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item active">25</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">50</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">75</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">100</span>
                            </div>
                        </div>
                        <p class="header-gray mb-0 mt-20">Orders</p>
                        <div class="bg-white-wrapper">
                            <div class="row ml-0 mr-0">
                                <div class="col-md-4 pl-0">
                                    <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Not hidden</span>
                                    <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Show hidden items</span>
                                </div>
                                <div class="col-md-8 text-right font-10">
                                    <span>See orders from</span>
                                    <select class="select-small color-blue ml-10 ebay-control" style="width:100px">
                                        <option>The last 60 days</option>
                                    </select>
                                    <span class="ml-10">Filter by</span>
                                    <select class="select-small color-blue ml-10 ebay-control" style="width:200px">
                                        <option>All</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clear border-bottom mt-10"></div>
                            <div class="row mt-20 ml-0 mr-0">
                                <p class="font-12 color-black bold pl-10">You do not have any Orders to display in this view</p>
                                <p class="font-12 color-black bold pl-10">TIP:change the view using the filters at the top of the section</p>
                            </div>
                            <div class="row ml-0 mr-0 text-right per-page-wrapper">
                                <span class="font-10">Items per page</span>
                                <span class="per-page-item">10</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item active">25</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">50</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">75</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">100</span>
                            </div>
                        </div>
                        <p class="header-gray mb-0 mt-20">Canceled items</p>
                        <div class="bg-white-wrapper">
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Not hidden</span>
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Show hidden items</span>
                            <div class="clear border-bottom mt-10"></div>
                            <div class="row mt-20 ml-0 mr-0">
                                <p class="font-12 color-black bold pl-10">You do not have any canceld unpaid items to display in this view</p>
                            </div>
                            <div class="row ml-0 mr-0 text-right per-page-wrapper">
                                <span class="font-10">Items per page</span>
                                <span class="per-page-item">10</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item active">25</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">50</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">75</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">100</span>
                            </div>
                        </div>
                        <p class="header-gray mb-0 mt-20">Canceled invoices</p>
                        <div class="bg-white-wrapper">
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Not hidden</span>
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Show hidden items</span>
                            <div class="clear border-bottom mt-10"></div>
                            <div class="row mt-20 ml-0 mr-0">
                                <p class="font-12 color-black bold pl-10">You do not have any canceld invoices to display in this view</p>
                            </div>
                            <div class="row ml-0 mr-0 text-right per-page-wrapper">
                                <span class="font-10">Items per page</span>
                                <span class="per-page-item">10</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item active">25</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">50</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">75</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">100</span>
                            </div>
                        </div>
                        <p class="header-gray mb-0 mt-20">Returns and canceled orders</p>
                        <div class="bg-white-wrapper">
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Not hidden</span>
                            <input type="radio" class="ml-10 checkbox-inline mt-0"><span class="color-black">Show hidden items</span>
                            <div class="clear border-bottom mt-10"></div>
                            <div class="row mt-20 ml-0 mr-0">
                                <p class="font-12 color-black bold pl-10">You do not have any returned orders to display in this view</p>
                                <p class="font-12 color-black bold pl-10">TIP:change the view using the filters at the top of the section</p>
                            </div>
                            <div class="row ml-0 mr-0 text-right per-page-wrapper">
                                <span class="font-10">Items per page</span>
                                <span class="per-page-item">10</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item active">25</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">50</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">75</span>
                                <span class="mlr-5">|</span>
                                <span class="per-page-item">100</span>
                            </div>
                        </div>
                    </div>
                    <!-- End of purchase history -->
                    <!-- watching -->
                    <div class="col-md-10 my-ebay-content col-xs-12 pl-0 pr-0" id="watching">
                        <div class="row ml-0 mr-0 pl-20">
                            <div class="input-group-btn open" style="display:inline-block;">
                                <button type="button" class="btn dropdown-toggle bg-white font-14" data-toggle="dropdown" aria-expanded="true">
                                    Watchlist
                                    <span class="fa fa-chevron-up"></span></button>
                                <ul class="dropdown-menu" style="min-width:50px;">
                                    <li><a href="javascript:void(0);" onclick="createNewList();">Create a new list</a></li>
                                    <li><a href="#">123</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row ml-0 mr-0 pl-10">
                            <div class="col-md-6 pl-0">
                                <input type="checkbox" class="checkbox-inline mt-0"><button type="button" class="btn btn-default ml-10 btn-sm ebay-control">Delete</button>
                            </div>
                            <div class="col-md-6 text-right">
                                <span>Status</span>
                                <select class="select-small color-blue ml-10 ebay-control" style="width:100px">
                                    <option>All(1)</option>
                                </select>
                                <span class="ml-10">Sort</span>
                                <select class="select-small color-blue ml-10 ebay-control" style="width:200px">
                                    <option>Time left: ending soonset</option>
                                </select>
                            </div>
                        </div>
                        <div class="border-bottom mt-10 ml-10"></div>
                        <div class="row ml-0 mr-0 ml-10 mt-10">
                            <button type="button" class="btn btn-color-blue radius-20">All categories (1)</button>
                            <button type="button" class="btn btn-color-blue radius-20">Iphone Accessories (1)</button>
                        </div>
                        <div class="border-bottom mt-10 ml-10"></div>
                        <div class="row ml-0 mr-0 pl-10 mt-20">
                            <div class="col-md-2">
                                <input type="checkbox"><img class="size-100 border-rect" src="uploads/product/small/2.jpg">
                            </div>
                            <div class="col-md-7">
                                <p class="font-12 color-black bold mb-0">SoundPETAS TWS Bluetooth5.0 Headset True Wireless Headphones Ea...</p>
                                <p class="mb-0">Condition:New</p>
                                <div class="row ml-0 mr-0 mt-10">
                                    <div class="col-md-3 col-xs-4 border-right pl-0">
                                        <p class="font-12 mb-0">ITEM PRICE:</p>
                                        <p class="font-12 color-black bold mb-0">US $299.99</p>
                                        <p class="font-12 mb-0">Free Shipping</p>
                                    </div>
                                    <div class="col-md-3 col-xs-4 border-right">
                                        <p class="font-12 mb-0">TIME ENDS:</p>
                                        <p class="font-12 color-black bold mb-0">Oct 16,</p>
                                        <p class="font-12 mb-0">00:00 CST</p>
                                    </div>
                                    <div class="col-md-6 col-xs-4">
                                        <p class="font-12 mb-0">SELLER:</p>
                                        <p class="font-12 color-blue bold mb-0">soundpeats(355)</p>
                                        <p class="font-12 mb-0">100% positive feedback</p>
                                    </div>
                                </div>
                                <p class="mt-10 mb-0 color-red bold">Over 290 sold</p>
                            </div>
                            <div class="col-md-3">
                                <input type="button" class="product-act-btn" onclick = "window.location.href = '{{url("/cart")}}'" value="Buy It Now">
                                <input type="button" class="product-act-btn mt-20" value="Add to Cart">
                                <input type="button" class="product-act-btn mt-20" value="Watch">
                            </div>
                        </div>
                    </div>
                    <!-- End of watching -->
                    <!-- saved searches -->
                    <div class="col-md-10 my-ebay-content col-xs-12 pl-0 pr-0" id="searches">
                        <p class="header-dark-gray mb-0 mt-20 color-white">Saved searches</p>
                        <div class="border-left border-right">
                            <div class="row ml-0 mr-0 border-bottom pt-10 pb-10">
                                <div class="col-xs-6"><span class="font-12 bold">Search name</span></div>
                                <div class="col-xs-2"><span class="font-12 bold">Keyword</span></div>
                                <div class="col-xs-2"><span class="font-12 bold">Email settings</span></div>
                                <div class="col-xs-2"><span class="font-12 bold">Actions</span></div>
                            </div>
                            @for($i = 0; $i < 10; $i++)
                                <div class="row ml-0 mr-0 border-bottom" style="padding-bottom: 4px; padding-top:4px;">
                                    <div class="col-xs-6">
                                        <img class="size-30" src="uploads/product/small/1.jpg">
                                        <span class="font-10">headphone</span>
                                    </div>
                                    <div class="col-xs-2"><span class="font-10">headphone</span></div>
                                    <div class="col-xs-2"><span class="font-10">Subscribed</span></div>
                                    <div class="col-xs-2">
                                        <p class="mb-0"><a class="color-blue font-10" href="javascript:void(0)">View items</a></p>
                                        <p class="mb-0"><a class="color-blue font-10" href="javascript:void(0)">Edit search</a></p>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <!-- End of saved searches -->
                    <!-- saved sellers -->
                    <div class="col-md-10 my-ebay-content col-xs-12 pl-0 pr-0" id="sellers">
                        <p class="header-dark-gray mb-0 mt-20">
                            <span class="color-white">Saved sellers</span>
                            <span class="color-white font-10 cursor pull-right" style="padding-top:3px; padding-right:3px;">Edit<i class="fa fa-angle-down"></i></span>
                        </p>
                        <div class="border-left border-right">
                            <div class="row ml-0 mr-0 border-bottom pt-10 pb-10">
                                <div class="col-xs-6"><span class="font-12 bold">Seller/Store</span></div>
                                <div class="col-xs-2"><span class="font-12 bold">Added</span></div>
                                <div class="col-xs-2"><span class="font-12 bold">Subscriptions</span></div>
                                <div class="col-xs-2"><span class="font-12 bold">Actions</span></div>
                            </div>
                            @for($i = 0; $i < 10; $i++)
                                <div class="row ml-0 mr-0 border-bottom" style="padding-bottom: 4px; padding-top:4px;">
                                    <div class="col-xs-6">
                                        <img class="size-30" src="uploads/product/small/1.jpg">
                                        <span class="color-blue font-10">pim4542</span>
                                        <span class="font-10">(</span><span class="color-blue font-10">907<i class="fa fa-star color-red"></i></span><span class="font-10">)</span>
                                        <span class="font-10">100%</span>
                                    </div>
                                    <div class="col-xs-2"><span class="font-10">09/24/19</span></div>
                                    <div class="col-xs-2"><span class="font-10">Subscribed</span></div>
                                    <div class="col-xs-2">
                                        <p class="mb-0"><a class="color-blue font-10" href="javascript:void(0)">View seller's items</a></p>
                                        <p class="mb-0"><a class="color-blue font-10" href="javascript:void(0)">Contact seller</a></p>
                                    </div>
                                </div>
                            @endfor
                        </div>
                        <p class="bg-white-wrapper color-blue font-10">Top picks saved sellers</p>
                    </div>
                    <!-- End of saved sellers -->
                    <!-- sell -->
                    <div class="col-md-10 my-ebay-content col-xs-12 pl-0 pr-0" id="sell">

                    </div>
                    <!-- End of sell -->
                </div>
                <div class="tab-pane fade" id="messages">

                </div>
                <div class="tab-pane fade" id="account">
                    <input type="button" class="product-act-btn" value="cancel" onclick="closeCreateModal()">
                    <input type="button" class="product-act-btn" value="Create">
                </div>
            </div>
        </div>
    </div>
    <!-- Craete new list modal -->
    <div class="modal fade" id="create-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md " role="document">
            <div class="modal-content">
                <div class="modal-header border-none">
                    <span class="font-24 color-black bold">Create a new list</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="font-12 mb-0">Add a name to your list</p>
                    <input class="dlg-input form-control" placeholder="New list">
                    <div class="row ml-0 mr-0 text-right">
                        <span class="font-12">0/68</span>
                    </div>
                    <div class="row ml-0 mr-0 text-right mt-10">
                        <input type="button" class="product-act-btn dlg-act-btn" value="Cancel" onclick="closeCreateModal()">
                        <input type="button" class="product-act-btn dlg-act-btn" value="Create" style="width: 100px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Craete new list modal -->
@stop

@section('footer_scripts')
    <!-- page level js starts-->
    {{--<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>--}}
    <script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.circliful.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/slick/slick.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/index.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/common.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/elevatezoom.js') }}"></script>
    <!--page level js ends-->
    <script>
        $(".left-side-menu>li").on("click", function(){
            $(".left-side-menu>li").removeClass("active");
            $(this).addClass("active");
            var target = $(this).attr("target");
            $(".my-ebay-content").removeClass("active");
            $("#" + target).addClass("active");
        });

        function createNewList(){
            if (!$("#create-modal").hasClass("show")){
                $("#create-modal").modal("toggle");
            }
        }
        function closeCreateModal(){
            $("#create-modal").modal("toggle");
        }
    </script>
@stop