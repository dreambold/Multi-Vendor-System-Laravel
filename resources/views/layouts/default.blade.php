<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <title>
    	@section('title')
        | MegaBuy
        @show
    </title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/lib.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/common.css') }}">
    <!--end of global css-->
    <!--page level css-->

    <link rel="shortcut icon" href="{{asset("favicon.png")}}">
    <link href="{{asset("assets/swal/css/waves.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/swal/css/animate.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/swal/css/sweetalert.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/swal/css/all-themes.css")}}" rel="stylesheet" />
    <script src="{{asset('assets/swal/js/waves.js')}}"></script>
    <script src="{{asset('assets/swal/js/sweetalert-dev.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/lib.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/lib.js') }}"></script>
    <script src="{{ asset('assets/jquery.validate.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/js/common.js') }}"></script>
    @yield('header_styles')
    <!--end of page level css-->
</head>
<script>
    var root_path = "{{url("/")}}";
    var _token =  "{{ csrf_token() }}";
</script>
<body>
    <header id="gh" role="banner" class="gh-w gh-simpleH">
    <input type = "file" id = "cropFileInput" class = "hidden" accept="image/*" />
    <table class="gh-tbl" role="presentation">
        <tbody>
        <tr>
            <td class="gh-td">
                <h1 id="gh-l-h1">
                    <!--[if lt IE 9]>
                    <a href="{{url("/")}}" _sp="m570.l2586" id="gh-la">
                        Mega Buy Logo
                        <img role="presentation" width=117 height=120 style='clip:rect(47px, 118px, 95px, 0px); position:absolute; top:-47px;left:0'
                             alt="eBay ogo" src="{{asset("assets/img/logo.png")}}" id="gh-logo">
                    </a>
                    <![endif]-->
                    <a href="{{url("/")}}" _sp="m570.l2586" id="gh-la">
                        Mega Buy Logo
                        <img role="presentation" style=" position:absolute; top:2px;left:-8px;width:136px;" alt="eBay Logo" src="{{asset("assets/img/logo.png")}}" id="gh-logo">
                    </a>
                </h1>
            </td>
            <td class="gh-td">
                <div id="gh-shop" class="gh-hide-if-nocss">
                    <button id="gh-shop-a" aria-expanded="false" class="gh-control" aria-controls="gh-sbc-o">
                        Shop by category<i id="gh-shop-ei" class="gh-sprRetina"></i>
                    </button>
                    <div id="gh-sbc-o" class="gh-o" style="display: none;">
                        <h2 class="gh-ar-hdn">Shop by category</h2>
                        <table id="gh-sbc" role="presentation">
                            <tbody>
                            <tr>
                                @if(isset($searchCategoryList))
                                @for($i = 0; $i < count($searchCategoryList); $i = $i + 3)
                                    <td>
                                        @for($j = 0; $j < 3; $j++)
                                            @if(isset($searchCategoryList[$i + $j]))
                                                <h3 class="gh-sbc-parent">
                                                    <a title="" href="{{url("/front/category/".$searchCategoryList[$i + $j]['id']."/0")}}">
                                                        {{$searchCategoryList[$i + $j]['title']}}<i class="gh-sbc-h3i gh-sprRetina"></i>
                                                    </a>
                                                </h3>
                                                <ul>
                                                    @foreach($searchCategoryList[$i + $j]['leavedCategoryList'] as $leavedCategory)
                                                        <li><a class="scnd" href="{{url("/front/product_list/".$leavedCategory["id"])}}">{{$leavedCategory['title']}}</a></li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @endfor
                                    </td>
                                @endfor
                                @endif
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </td>
            <td class="gh-td-s">
                <table class="gh-tbl2" role="presentation">
                    <tbody>
                    <tr>
                        <td class="gh-td-s">
                            <div id="gh-ac-box">
                                <div id="gh-ac-box2">
                                    <label for="gh-ac" class="gh-ar-hdn">Enter your search keyword</label>
                                    <input type="text" class="gh-tb ui-autocomplete-input" size="50" maxlength="300"
                                           placeholder="Search for anything" id="gh-ac"
                                    @if(isset($searchKey))
                                        value="{{$searchKey}}"
                                    @endif>
                                    <input type="hidden" id="search_brand_key"
                                    @if(isset($brand_key))
                                        value = "{{$brand_key}}"
                                    @endif>
                                    <input type="hidden" id="search_condition_key"
                                           @if(isset($condition_key))
                                           value = "{{$condition_key}}"
                                           @endif>
                                    <input type="hidden" id="search_price_from_key"
                                           @if(isset($price_from_key))
                                           value = "{{$price_from_key}}"
                                            @endif>
                                    <input type="hidden" id="search_price_to_key"
                                           @if(isset($price_to_key))
                                           value = "{{$price_to_key}}"
                                            @endif>
                                    <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                                </div>
                            </div>
                            <div id="gAC">
                                <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all"
                                    id="ui-id-1" role="listbox" tabindex="-1" style="display: none; width: 678px;"></ul>
                            </div>
                        </td>
                        <td class="gh-td" id="gh-cat-td">
                            <div id="gh-cat-box">
                                <select class="gh-sb gh-sprRetina" size="1" id="gh-cat" name="_sacat" onchange="onChangeAllCategories(this);">
                                    <option value="0">All Categories</option>
                                    @if(isset($allCategoryList))
                                    @foreach($allCategoryList as $category)
                                        <option value="{{$category['id']}}"
                                                @if(isset($selectedCategory))
                                                @if($selectedCategory == $category['id'])
                                                selected
                                                @endif
                                                @endif>
                                            {{$category['title']}}
                                        </option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </td>
                        <td class="gh-td gh-sch-btn"><input type="submit" class="btn btn-prim gh-spr" id="gh-btn" value="Search" onclick="onSearchProduct();"></td>
                        <td class="gh-td" id="gh-as-td"><a title="Advanced Search" href="{{url("/front/all_categories/0")}}" _sp="m570.l2614" id="gh-as-a">Advanced</a></td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
    <div id="gh-top" class="gh-hide-if-nocss" role="navigation" aria-label="Account">
        <ul id="gh-topl">
            <li class="gh-t" id="gh-eb-u">
                <span id="gh-ug" class="gh-ug-guest" aria-expanded="false">
                    Hi!
                    @if(Sentinel::getUser())
                        <span id="gh-ug-flex">{{Sentinel::getUser()->getFullNameAttribute()}}</span>
                    @else
                        <a class = "color-sign-a" href="{{url("/login")}}">Sign in</a>&nbsp;
                        <span id="gh-ug-flex">or
                        <a class = "color-sign-a" href="{{url("/register")}}" _sp="m570.l2621">register</a>
                        </span>
                    @endif
                </span>
            </li>
            <li class="gh-t gh-divider-l hidden" id="gh-p-1"><a href="{{url("/globaldeals")}}" _sp="m570.l3188" data-sp="m570.l3188" class="gh-p"> Daily Deals</a></li>
            @if((Sentinel::getUser() != null) && (Sentinel::getUser()->getUserRoleName()=='seller'))
            <li class="gh-t gh-divider-l" id="gh-p-2"><a href="{{url("/front/sell")}}" _sp="m570.l1528" data-sp="m570.l1528" class="gh-p"> Sell</a></li>
            @endif
            <li class="gh-t gh-divider-l" id="gh-p-3"><a href="{{url("/aboutus")}}" _sp="m570.l1545" data-sp="m570.l1545" class="gh-p"> Help &amp; Contact</a></li>
        </ul>
        <ul id="gh-eb">
            <li id="gh-shipto-click" class="gh-eb-li ">
                <div class="gh-menu">
                    <button title="Ship to" class="gh-eb-li-a gh-icon hidden" aria-expanded="false" aria-controls="gh-shipto-click-o">
                        <i class="flgspr flaemp"></i><span>Ship to</span>
                    </button>
                    <div class="gh-sublayer gh-modal__menu" id="gh-shipto-click-modal">
                        <div id="gh-shipto-click-body">
                            <div class="gh-shipto-click-body-cnt" id="gh-shipto-click-body-cnt"></div>
                            <div class="gh-throbber">
                                <span class="gh-spinner"></span><span class="gh-state" tabindex="-1">Loading...</span>
                            </div>
                            <section class="gh-status gh-status-attention"
                                id="gh-shipto-click-body-status" aria-lablledby="gh-shipto-click-body-status_icon">
                                <span id="gh-shipto-click-body-status_icon" class="gh-status-icon" aria-label="attention" role="img"></span>
                                <div class="status_cnt exit" tabindex="-1"><span>Error: Try Again</span>
                                    <button class="gh-btn" id="gh-shipto-click-body-status-exit">Ok</button>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div id="gh-shipto-click-mask" class="gh-modal__mask"></div>
                </div>
            </li>
            <li id="gh-eb-My" class="gh-eb-li gh-dd rt hidden" data-imp="10">
                <div class="gh-menu">
                    <a href1="/" class="gh-eb-li-a">My Mega Buy</a>
                    <a href="/#gh-eb-My" role="button" aria-expanded="false" aria-controls="gh-eb-My-o" class="gh-acc-exp-a gh-acc-a2 gh-control ">
                        Expand Mega Buy
                    </a>
                    <div class="gh-submenu gh-eb-o" id="gh-eb-My-o" style="display: none;">
                        <ul role="navigation">
                            <li><a href="{{url("/my_ebay?menu=summary")}}" class="gh-eb-oa thrd"> Summary</a></li>
                            <li><a href="{{url("/my_ebay?menu=recently")}}" class="gh-eb-oa thrd"> Recently Viewed</a></li>
                            <li><a href="{{url("/my_ebay?menu=offers")}}" class="gh-eb-oa thrd"> Bids/Offers</a></li>
                            <li><a href="{{url("/my_ebay?menu=watching")}}" class="gh-eb-oa thrd"> Watch List</a></li>
                            <li><a href="{{url("/my_ebay?menu=history")}}" class="gh-eb-oa thrd"> Purchase History</a></li>
                            <li>
                                <a href="{{url("/my_ebay?menu=sell")}}" class="gh-eb-oa thrd"> Selling</a></li>
                            <li><a href="{{url("/my_ebay?menu=searches")}}" class="gh-eb-oa thrd"> Saved Searches</a></li>
                            <li><a href="{{url("/my_ebay?menu=sellers")}}" class="gh-eb-oa thrd"> Saved Sellers</a></li>
                            <li><a href="0" class="gh-eb-oa thrd"> Messages</a></li>
                            <li id="gh-eb-sub-li-cpn"></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li id="gh-eb-My" class="gh-eb-li gh-dd rt" data-imp="10">
                <div class="gh-menu">
                    <a class = "color-black" style = "font-size:12px;" href = "{{url("front/my/activity_index")}}">My Mega Buy</a>
                </div>
            </li>
            @if(Sentinel::getUser())
            <li id="gh-eb-My" class="gh-eb-li gh-dd rt" data-imp="10">
                <div class="gh-menu">

                    <a class = "color-black" style = "font-size:12px;" href = "{{url("logout")}}">Logout</a>
                </div>
            </li>
            <li id="gh-cart" class="gh-eb-li rt"><a href="{{url("/front/basket/index")}}" style = "position:relative;" class="gh-eb-li-a">
                    <svg class="gh-cart-icon">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#gh-icon-cart"></use>
                        <svg id="gh-icon-cart" viewBox="0 0 40 32">
                            <path d="M35.0390625,6.8515625 C36.4453195,6.8515625 37.4674447,7.20312148 38.1054688,7.90625 C38.7434928,8.60937852 39.0625,9.66405547 39.0625,11.0703125 L39.0625,18.9609375 C39.0625,20.2369855 38.7434928,21.226559 38.1054688,21.9296875 C37.4674447,22.632816 36.4322988,22.984375 35,22.984375 L31.484375,22.984375 C29.3749895,22.984375 27.0898561,22.9778646 24.6289063,22.9648438 C22.1679564,22.9518229 19.9349059,22.9453125 17.9296875,22.9453125 L14.921875,22.9453125 L6.8359375,4.8203125 L0.859375,4.8203125 L0.8203125,0.7578125 L8.90625,0.7578125 L12.9296875,6.8515625 L35.0390625,6.8515625 Z M34.0625,18.9609375 C34.322918,18.9609375 34.5507803,18.8632822 34.7460938,18.6679688 C34.9414072,18.4726553 35.0390625,18.2317723 35.0390625,17.9453125 C35.0390625,17.6588527 34.9414072,17.4179697 34.7460938,17.2226562 C34.5507803,17.0273428 34.322918,16.9296875 34.0625,16.9296875 L17.9296875,16.9296875 C17.6692695,16.9296875 17.4414072,17.0273428 17.2460938,17.2226562 C17.0507803,17.4179697 16.953125,17.6588527 16.953125,17.9453125 C16.953125,18.2317723 17.0507803,18.4726553 17.2460938,18.6679688 C17.4414072,18.8632822 17.6692695,18.9609375 17.9296875,18.9609375 L34.0625,18.9609375 Z M34.0625,12.90625 C34.322918,12.90625 34.5507803,12.8085947 34.7460938,12.6132812 C34.9414072,12.4179678 35.0390625,12.1770848 35.0390625,11.890625 C35.0390625,11.630207 34.9414072,11.3958344 34.7460938,11.1875 C34.5507803,10.9791656 34.322918,10.875 34.0625,10.875 L15.9375,10.875 C15.6510402,10.875 15.4101572,10.9791656 15.2148438,11.1875 C15.0195303,11.3958344 14.921875,11.630207 14.921875,11.890625 C14.921875,12.1770848 15.0195303,12.4179678 15.2148438,12.6132812 C15.4101572,12.8085947 15.6510402,12.90625 15.9375,12.90625 L34.0625,12.90625 Z M34.0234375,24.8984375 C34.8828168,24.8984375 35.6249969,25.1979137 36.25,25.796875 C36.8750031,26.3958363 37.1875,27.1249957 37.1875,27.984375 C37.1875,28.8437543 36.8750031,29.5729137 36.25,30.171875 C35.6249969,30.7708363 34.8828168,31.0703125 34.0234375,31.0703125 C33.1640582,31.0703125 32.4283885,30.7708363 31.8164062,30.171875 C31.204424,29.5729137 30.8984375,28.8437543 30.8984375,27.984375 C30.8984375,27.1249957 31.204424,26.3958363 31.8164062,25.796875 C32.4283885,25.1979137 33.1640582,24.8984375 34.0234375,24.8984375 Z M19.8828125,24.8984375 C20.7421918,24.8984375 21.4778615,25.1979137 22.0898438,25.796875 C22.701826,26.3958363 23.0078125,27.1249957 23.0078125,27.984375 C23.0078125,28.8437543 22.701826,29.5729137 22.0898438,30.171875 C21.4778615,30.7708363 20.7421918,31.0703125 19.8828125,31.0703125 C19.0234332,31.0703125 18.2877635,30.7708363 17.6757812,30.171875 C17.063799,29.5729137 16.7578125,28.8437543 16.7578125,27.984375 C16.7578125,27.1249957 17.063799,26.3958363 17.6757812,25.796875 C18.2877635,25.1979137 19.0234332,24.8984375 19.8828125,24.8984375 Z"></path>
                        </svg>
                    </svg>
                    <?php $cartCount = Sentinel::getUser()->getCartCount();?>
                    @if($cartCount > 0)
                    <span class="badge badge-sea rounded-x" style = "position: absolute;top: calc(50% - 17px);">{{$cartCount}}</span>
                    @endif
                </a>
            </li>
            @endif
        </ul>
    </div>
    <!--[if lt IE 9]></div><![endif]-->
</header>
    
    <!-- slider / breadcrumbs section -->
    @yield('top')

    <!-- Content -->
    @yield('content')

    <div id="hlGlobalFooter"><!--[if lt IE 9]>
        <div id="glbfooter" role="contentinfo" class="gh-w gh-flex"><![endif]-->
        <footer id="glbfooter" role="contentinfo" class="gh-w">
            <div>
                <div id="rtm_html_1650"></div>
                <div id="rtm_html_1651"></div>
            </div>
            <h2 class="gh-ar-hdn">Additional site navigation</h2>
            <div id="gf-BIG" class="gffoot">
                <table class="gf-t hidden" role="presentation">
                    <tbody>
                    <tr>
                        <td>
                            <ul>
                                <li class="gf-li">
                                    <h3 class="gf-bttl">
                                        <a href="{{url("/all_categories")}}" class="gf-bttl thrd">Buy</a>
                                    </h3>
                                </li>
                                <li class="gf-li">
                                    <a href="https://pages.ebay.com/help/account/registration.html" class="thrd">Registration</a>
                                </li>
                                <li class="gf-li">
                                    <a href="https://pages.ebay.com/ebay-money-back-guarantee/" class="thrd">
                                        eBay Money Back  Guarantee
                                    </a>
                                </li>
                                <li class="gf-li">
                                    <a href="https://pages.ebay.com/help/buy/basics.html" class="thrd">Bidding &amp; buying help</a>
                                </li>
                                <li class="gf-li">
                                    <a href="http://stores.ebay.com/" class="thrd">Stores</a>
                                </li>
                                <li class="gf-li">
                                    <a href="http://www.ebay.com/local" class="thrd">eBay Local</a>
                                </li>
                                <li class="gf-li">
                                    <a href="http://www.ebay.com/gds" class="thrd">eBay guides</a>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li class="gf-li">
                                    <h3 class="gf-bttl">
                                        <a href="http://csr.ebay.com/cse/sell.jsf"  class="gf-bttl thrd">Sell</a>
                                    </h3>
                                </li>
                                <li class="gf-li">
                                    <a href="#" class="thrd">Start selling</a>
                                </li>
                                <li class="gf-li">
                                    <a  href="" class="thrd">Learn to sell</a>
                                </li>
                                <li class="gf-li">
                                    <a href="" class="thrd">Business sellers</a>
                                </li>
                                <li class="gf-li">
                                    <a href="" class="thrd">Affiliates</a>
                                </li>
                                <li class="gf-li" style="padding-top:8px;">
                                    <h3 class="gf-bttl">Tools &amp; apps</h3>
                                </li>
                                <li class="gf-li">
                                    <a href=""  class="thrd">Developers</a>
                                </li>
                                <li class="gf-li">
                                    <a href="" class="thrd">
                                        Security  center
                                    </a>
                                </li>
                                <li class="gf-li">
                                    <a href="" class="thrd">
                                        eBay official time
                                    </a>
                                </li>
                                <li class="gf-li">
                                    <a href=""  class="thrd">Site map</a>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li class="gf-li"><h3 class="gf-bttl">eBay companies</h3></li>
                                <li class="gf-li"><a href="" class="thrd">eBay Classifieds</a></li>
                                <li class="gf-li"><a href=""  class="thrd">StubHub</a>
                                </li>
                                <li class="gf-li"><a href=""  class="thrd">Close5</a>
                                </li>
                                <li class="gf-li"><a href=""  class="thrd">See all companies</a></li>
                                <li class="gf-li" style="padding-top:8px;">
                                    <h3 class="gf-bttl">Stay connected</h3>
                                </li>
                                <li class="gf-li">
                                    <a href="/stories/" class="thrd">eBay's Blogs</a></li>
                                <li class="gf-li">
                                    <a href="https://www.facebook.com/eBay" class="thrd gf-i">
                                        <i class="gspr icfbg"></i>Facebook</a>
                                </li>
                                <li class="gf-li">
                                    <a href="https://twitter.com/eBay" class="thrd gf-i"><i class="gspr ictwg"></i>Twitter</a>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li class="gf-li">
                                    <h3 class="gf-bttl">
                                        <a href="https://www.ebayinc.com/" class="gf-bttl thrd">
                                            About eBay
                                        </a>
                                    </h3>
                                </li>
                                <li class="gf-li">
                                    <a href="https://www.ebayinc.com/our-company/" class="thrd">Company info</a></li>
                                <li class="gf-li"><a href="https://www.ebayinc.com/stories/news/" class="thrd">News</a></li>
                                <li class="gf-li"><a href="https://investors.ebayinc.com/" class="thrd">Investors</a></li>
                                <li class="gf-li"><a href="https://careers.ebayinc.com/" class="thrd">Careers</a></li>
                                <li class="gf-li"><a href="https://www.ebaymainstreet.com/" class="thrd">Government relations</a></li>
                                <li class="gf-li"><a href="https://cc.ebay.com/"  class="thrd">
                                        Advertise with us</a>
                                </li>
                                <li class="gf-li">
                                    <a href="" data-sp="m571.l2910" class="thrd">Policies</a>
                                </li>
                                <li class="gf-li">
                                    <a href="" class="thrd">
                                        Verified Rights Owner (VeRO) Program
                                    </a>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li class="gf-li">
                                    <h3 class="gf-bttl"><a href="" class="gf-bttl thrd">Help &amp; Contact</a></h3>
                                </li>
                                <li class="gf-li">
                                    <a href=""  class="thrd">Resolution Center</a>
                                </li>
                                <li class="gf-li">
                                    <a href="" class="thrd">
                                        Seller Information Center
                                    </a>
                                </li>
                                <li class="gf-li"><a href="https://ocsnext.ebay.com/ocs/cuhome" _sp="m571.l2911"
                                                     data-sp="m571.l2911" class="thrd">Contact us</a></li>
                                <li class="gf-li" style="padding-top:8px;"><h3 class="gf-bttl"><a
                                                href="http://community.ebay.com/" _sp="m571.l2912" data-sp="m571.l2912"
                                                class="gf-bttl thrd">Community</a></h3></li>
                                <li class="gf-li"><a href="http://announcements.ebay.com/" _sp="m571.l2913"
                                                     data-sp="m571.l2913" class="thrd">Announcements</a></li>
                                <li class="gf-li"><a href="https://pages.ebay.com/community/answercenter/index.html"
                                                     _sp="m571.l2914" data-sp="m571.l2914" class="thrd">Answer
                                        center</a></li>
                                <li class="gf-li"><a href="http://forums.ebay.com/" _exsp="m571.l2939" class="thrd">Discussion
                                        boards</a></li>
                                <li class="gf-li"><a href="https://givingworks.ebay.com/" _exsp="m571.l3271"
                                                     class="thrd">eBay Giving Works</a></li>
                                <li class="gf-li"><a href="https://givingworks.ebay.com/browse/celebrities"
                                                     _exsp="m571.l3272" class="thrd">eBay Celebrity</a></li>
                                <li class="gf-li"><a href="http://groups.ebay.com/groups/EbayGroups/1?redirected=1"
                                                     _exsp="m571.l2941" class="thrd">Groups</a></li>
                                <li class="gf-li"><a href="http://www.ebay.com/ets/eBayTopShared" _sp="m571.l2916"
                                                     data-sp="m571.l2916" class="thrd">eBay top shared</a></li>
                                <li class="gf-li" style="padding-top:8px;"><h3 class="gf-bttl">eBay Sites</h3></li>
                                <li class="gf-li">
                                    <div class="gf-flags-wpr"><a aria-expanded="false" aria-controls="gf-f"
                                                                 role="button" class="thrd" title="eBay country sites"
                                                                 _sp="m571.l2586" href="/" id="gf-fbtn"
                                                                 aria-label="United States">United States<b
                                                    class="gf-if gspr flus"></b><b id="gf-fbtn-arr"
                                                                                   class="gh-sprRetina"></b></a>
                                        <div id="gf-f" class="gf_sd" style="display: none;">
                                            <ul class="gf-ful" role="menu">
                                                <li role="menuitem" class="gf-f-li0"><a href="https://ar.ebay.com/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Argentina"><b
                                                                class="flar gf-if gspr"></b>
                                                        <p>Argentina</p></a></li>
                                                <li role="menuitem" class="gf-f-li0"><a href=".au/" class="gf-if-a"
                                                                                        title="eBay Australia"><b
                                                                class="flau gf-if gspr"></b>
                                                        <p>Australia</p></a></li>
                                                <li role="menuitem" class="gf-f-li0"><a href="https://www.ebay.at/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Austria"><b
                                                                class="flat gf-if gspr"></b>
                                                        <p>Austria</p></a></li>
                                                <li role="menuitem" class="gf-f-li0"><a href="https://by.ebay.com/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Belarus"><b
                                                                class="flby gf-if gspr"></b>
                                                        <p>Belarus</p></a></li>
                                                <li role="menuitem" class="gf-f-li0"><a href="http://www.ebay.be/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Belgium"><b
                                                                class="flbe gf-if gspr"></b>
                                                        <p>Belgium</p></a></li>
                                                <li role="menuitem" class="gf-f-li0"><a href="https://bo.ebay.com/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Bolivia"><b
                                                                class="flbo gf-if gspr"></b>
                                                        <p>Bolivia</p></a></li>
                                                <li role="menuitem" class="gf-f-li0"><a href="https://br.ebay.com/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Brazil"><b
                                                                class="flbr gf-if gspr"></b>
                                                        <p>Brazil</p></a></li>
                                                <li role="menuitem" class="gf-f-li0"><a href="https://www.ebay.ca/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Canada"><b
                                                                class="flca gf-if gspr"></b>
                                                        <p>Canada</p></a></li>
                                                <li role="menuitem" class="gf-f-li0"><a href="https://cl.ebay.com/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Chile"><b
                                                                class="flcl gf-if gspr"></b>
                                                        <p>Chile</p></a></li>
                                                <li role="menuitem" class="gf-f-li1 gf-f-li-top"><a
                                                            href="http://www.ebay.cn/" class="gf-if-a"
                                                            title="eBay China"><b class="flcn gf-if gspr"></b>
                                                        <p>China</p></a></li>
                                                <li role="menuitem" class="gf-f-li1"><a href="https://co.ebay.com/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Colombia"><b
                                                                class="flco gf-if gspr"></b>
                                                        <p>Colombia</p></a></li>
                                                <li role="menuitem" class="gf-f-li1"><a href="https://cr.ebay.com/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Costa Rica"><b
                                                                class="flcr gf-if gspr"></b>
                                                        <p>Costa Rica</p></a></li>
                                                <li role="menuitem" class="gf-f-li1"><a href="https://do.ebay.com/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Dominican Republic"><b
                                                                class="fldo gf-if gspr"></b>
                                                        <p>Dominican Republic</p></a></li>
                                                <li role="menuitem" class="gf-f-li1"><a href="https://ec.ebay.com/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Ecuador"><b
                                                                class="flec gf-if gspr"></b>
                                                        <p>Ecuador</p></a></li>
                                                <li role="menuitem" class="gf-f-li1"><a href="https://sv.ebay.com/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay El Salvador"><b
                                                                class="flsv gf-if gspr"></b>
                                                        <p>El Salvador</p></a></li>
                                                <li role="menuitem" class="gf-f-li1"><a href="https://www.ebay.fr/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay France"><b
                                                                class="flfr gf-if gspr"></b>
                                                        <p>France</p></a></li>
                                                <li role="menuitem" class="gf-f-li1"><a href="https://www.ebay.de/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Germany"><b
                                                                class="flde gf-if gspr"></b>
                                                        <p>Germany</p></a></li>
                                                <li role="menuitem" class="gf-f-li1"><a href="https://gt.ebay.com/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Guatemala"><b
                                                                class="flgt gf-if gspr"></b>
                                                        <p>Guatemala</p></a></li>
                                                <li role="menuitem" class="gf-f-li2 gf-f-li-top"><a
                                                            href="https://hn.ebay.com/" class="gf-if-a"
                                                            title="eBay Honduras"><b class="flhn gf-if gspr"></b>
                                                        <p>Honduras</p></a></li>
                                                <li role="menuitem" class="gf-f-li2"><a href=".hk/" class="gf-if-a"
                                                                                        title="eBay Hong Kong"><b
                                                                class="flhk gf-if gspr"></b>
                                                        <p>Hong Kong</p></a></li>
                                                <li role="menuitem" class="gf-f-li2"><a href="https://www.ebay.in/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay India"><b
                                                                class="flin gf-if gspr"></b>
                                                        <p>India</p></a></li>
                                                <li role="menuitem" class="gf-f-li2"><a href="https://www.ebay.ie/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Ireland"><b
                                                                class="flie gf-if gspr"></b>
                                                        <p>Ireland</p></a></li>
                                                <li role="menuitem" class="gf-f-li2"><a href="https://il.ebay.com/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Israel"><b
                                                                class="flil gf-if gspr"></b>
                                                        <p>Israel</p></a></li>
                                                <li role="menuitem" class="gf-f-li2"><a href="https://www.ebay.it/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Italy"><b
                                                                class="flit gf-if gspr"></b>
                                                        <p>Italy</p></a></li>
                                                <li role="menuitem" class="gf-f-li2"><a href="https://www.ebay.co.jp/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Japan"><b
                                                                class="fljp gf-if gspr"></b>
                                                        <p>Japan</p></a></li>
                                                <li role="menuitem" class="gf-f-li2"><a href="https://kz.ebay.com/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Kazakhstan"><b
                                                                class="flkz gf-if gspr"></b>
                                                        <p>Kazakhstan</p></a></li>
                                                <li role="menuitem" class="gf-f-li2"><a
                                                            href="http://global.gmarket.co.kr/Home/Main" class="gf-if-a"
                                                            title="eBay Korea"><b class="flkr gf-if gspr"></b>
                                                        <p>Korea</p></a></li>
                                                <li role="menuitem" class="gf-f-li3 gf-f-li-top"><a href=".my/"
                                                                                                    class="gf-if-a"
                                                                                                    title="eBay Malaysia"><b
                                                                class="flmy gf-if gspr"></b>
                                                        <p>Malaysia</p></a></li>
                                                <li role="menuitem" class="gf-f-li3"><a href="https://mx.ebay.com/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Mexico"><b
                                                                class="flmx gf-if gspr"></b>
                                                        <p>Mexico</p></a></li>
                                                <li role="menuitem" class="gf-f-li3"><a href="https://www.ebay.nl/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Netherlands"><b
                                                                class="flnl gf-if gspr"></b>
                                                        <p>Netherlands</p></a></li>
                                                <li role="menuitem" class="gf-f-li3"><a href="https://ni.ebay.com/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Nicaragua"><b
                                                                class="flni gf-if gspr"></b>
                                                        <p>Nicaragua</p></a></li>
                                                <li role="menuitem" class="gf-f-li3"><a href="https://pa.ebay.com/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Panama"><b
                                                                class="flpa gf-if gspr"></b>
                                                        <p>Panama</p></a></li>
                                                <li role="menuitem" class="gf-f-li3"><a href="https://py.ebay.com/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Paraguay"><b
                                                                class="flpy gf-if gspr"></b>
                                                        <p>Paraguay</p></a></li>
                                                <li role="menuitem" class="gf-f-li3"><a href="https://pe.ebay.com/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Peru"><b
                                                                class="flpe gf-if gspr"></b>
                                                        <p>Peru</p></a></li>
                                                <li role="menuitem" class="gf-f-li3"><a href="https://www.ebay.ph/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Philippines"><b
                                                                class="flph gf-if gspr"></b>
                                                        <p>Philippines</p></a></li>
                                                <li role="menuitem" class="gf-f-li3"><a href="https://www.ebay.pl/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Poland"><b
                                                                class="flpl gf-if gspr"></b>
                                                        <p>Poland</p></a></li>
                                                <li role="menuitem" class="gf-f-li4 gf-f-li-top"><a
                                                            href="https://pt.ebay.com/" class="gf-if-a"
                                                            title="eBay Portugal"><b class="flpt gf-if gspr"></b>
                                                        <p>Portugal</p></a></li>
                                                <li role="menuitem" class="gf-f-li4"><a href="https://pr.ebay.com/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Puerto Rico"><b
                                                                class="flpr gf-if gspr"></b>
                                                        <p>Puerto Rico</p></a></li>
                                                <li role="menuitem" class="gf-f-li4"><a href="https://ru.ebay.com/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Russia"><b
                                                                class="flru gf-if gspr"></b>
                                                        <p>Russia</p></a></li>
                                                <li role="menuitem" class="gf-f-li4"><a href=".sg/" class="gf-if-a"
                                                                                        title="eBay Singapore"><b
                                                                class="flsg gf-if gspr"></b>
                                                        <p>Singapore</p></a></li>
                                                <li role="menuitem" class="gf-f-li4"><a href="https://www.ebay.es/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Spain"><b
                                                                class="fles gf-if gspr"></b>
                                                        <p>Spain</p></a></li>
                                                <li role="menuitem" class="gf-f-li4"><a href="http://www.ebay.se/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Sweden"><b
                                                                class="flse gf-if gspr"></b>
                                                        <p>Sweden</p></a></li>
                                                <li role="menuitem" class="gf-f-li4"><a href="https://www.ebay.ch/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Switzerland"><b
                                                                class="flch gf-if gspr"></b>
                                                        <p>Switzerland</p></a></li>
                                                <li role="menuitem" class="gf-f-li4"><a href="http://www.ebay.com.tw/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Taiwan"><b
                                                                class="fltw gf-if gspr"></b>
                                                        <p>Taiwan</p></a></li>
                                                <li role="menuitem" class="gf-f-li4"><a href="http://www.ebay.co.th/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Thailand"><b
                                                                class="flth gf-if gspr"></b>
                                                        <p>Thailand</p></a></li>
                                                <li role="menuitem" class="gf-f-li5 gf-f-li-top"><a
                                                            href="https://www.gittigidiyor.com/" class="gf-if-a"
                                                            title="eBay Turkey"><b class="fltr gf-if gspr"></b>
                                                        <p>Turkey</p></a></li>
                                                <li role="menuitem" class="gf-f-li5"><a href="https://www.ebay.co.uk/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay United Kingdom"><b
                                                                class="flgb gf-if gspr"></b>
                                                        <p>United Kingdom</p></a></li>
                                                <li role="menuitem" class="gf-f-li5"><a href="https://uy.ebay.com/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Uruguay"><b
                                                                class="fluy gf-if gspr"></b>
                                                        <p>Uruguay</p></a></li>
                                                <li role="menuitem" class="gf-f-li5"><a href="https://ve.ebay.com/"
                                                                                        class="gf-if-a"
                                                                                        title="eBay Venezuela"><b
                                                                class="flve gf-if gspr"></b>
                                                        <p>Venezuela</p></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div id="gf-t-box">
                <table class="gf-t" role="presentation">
                    <tbody>
                    <tr>
                        <td colspan="2">
                            <ul id="gf-l" class="gf-lb">
                                <li class="gf-li"><a href="https://www.ebayinc.com/" _exsp="m571.l2602"
                                                     class="thrd gf-bar-a">About eBay</a></li>
                                <li class="gf-li"><a href="http://announcements.ebay.com/" _exsp="m571.l2935"
                                                     class="thrd gf-bar-a">Announcements</a></li>
                                <li class="gf-li"><a href="http://community.ebay.com/" _exsp="m571.l1540"
                                                     class="thrd gf-bar-a">Community</a></li>
                                <li class="gf-li"><a href="https://pages.ebay.com/securitycenter/index.html"
                                                     _exsp="m571.l2616" class="thrd gf-bar-a">Security Center</a></li>
                                <li class="gf-li"><a href="https://resolutioncenter.ebay.com/" _sp="m571.l1619"
                                                     data-sp="m571.l1619" class="thrd gf-bar-a">Resolution Center</a>
                                </li>
                                <li class="gf-li"><a href="http://pages.ebay.com/sellerinformation/index.html"
                                                     _exsp="m571.l1613" class="thrd gf-bar-a">Seller Information
                                        Center</a></li>
                                <li class="gf-li"><a href="https://pages.ebay.com/help/policies/overview.html"
                                                     _exsp="m571.l2604" class="thrd gf-bar-a">Policies</a></li>
                                <li class="gf-li"><a
                                            href="https://www.ebaypartnernetwork.com/files/hub/en-US/index.html"
                                            _exsp="m571.l3947" class="thrd gf-bar-a">Affiliates</a></li>
                                <li class="gf-li"><a href="https://ocsnext.ebay.com/ocs/home" _sp="m571.l1545"
                                                     data-sp="m571.l1545" class="thrd gf-bar-a">Help &amp; Contact</a>
                                </li>
                                <li class="gf-li"><a href="https://pages.ebay.com/sitemap.html" _exsp="m571.l2909"
                                                     class="thrd gf-bar-a">Site Map</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr valign="top">
                        <td class="gf-legal">Copyright © 1995-2019 Mega Bay Inc. All Rights Reserved. <a
                                    href="javascript:void(0)">Accessibility,</a> <a
                                    href="javascript:void(0)">User Agreement,</a>
                            <a href="javascript:void(0)">Privacy,</a> <a
                                    href="javascript:void(0)">Cookies</a> and
                            <a href="javascript:void(0)" id="gf-AdChoice">AdChoice</a></td>
                        <td nowrap="" align="center"><a title="Verify site's SSL certificate" _exsp="m571.l3943"
                                                        href="https://trustsealinfo.websecurity.norton.com/splash?form_file=fdf/splash.fdf&amp;dn=www.ebay.com&amp;lang=en"
                                                        onclick="this.href='https://trustsealinfo.websecurity.norton.com/splash?form_file=fdf/splash.fdf&amp;dn=#D#&amp;lang=en'.replace(/#D#/,location.host);return true"
                                                        rel="noreferrer"><i id="gf-norton">Norton Secured - powered by
                                    Verisign</i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!--[if lt IE 9]></div><![endif]--></footer>

    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!--global js starts-->
        <script type="text/javascript" nonce=""> (function(){ if(typeof(GH) !== 'undefined' && typeof(GH.add ) === 'function' ){ GH.add("GHModal__INIT_DATA", { ajaxURL: "/gh/shipto?modules=SHIP_TO_LOCATION", clickTriggerId: "gh-shipto-click", fetchMaxTimeOut: 6000, modalTitleId: "gh-shipto-label" }); } })(); (function(){ if(typeof(GH) !== 'undefined' && typeof(GH.add ) === 'function' ){ GH.add("GHShipTo__INIT_DATA", { clickTriggerId: "gh-shipto-click" }); } })(); if(typeof GH!="undefined"&&GH){GH.urls={ autocomplete_js:"https://ir.ebaystatic.com/rs/v/daenj4np1ezs3msxgbj3z4t2pu5.js",fnet_js:"https://c.paypal.com/da/r/efb.js",ie8_js:"http://ir.ebaystatic.com/f/rbezfuzpu20wfd2kvejeb5adxyg.js",scandal_js:"https://ir.ebaystatic.com/cr/v/c1/ScandalJS-1.2.0-v4.min.js",widget_delivery_platform:"https://ir.ebaystatic.com/cr/v/c1/globalheader_widget_platform-792c17d2.js" }; GH.GHSW={ raptor:0,sandbox:0,emp:0,ac1:0,ac2:0,ac3:0,ac4:0,ac5:0,ac6:0,hideMobile:"true",langSwitch:0,pool:0,ALERT_POPUPOFF:0,NEWALERT_POPUPOFF:0,newprofile:0,desktop_new_profile_service:"true",UNLOAD_Firefox:0,UNLOAD_Chrome:0,UNLOAD_IE:0,UNLOAD_Safari:0,ENABLE_HTTPS:"true",SEARCH_PROM:0,MINICART:0 };} if(typeof GH!="undefined" && GH){GH_config={"siteId":"900","geoLang":"[]","suppressGeoUserUpdateInfo":"false","lng":"en-US","env":"production",sin:0,ct:0,pageId:2380057,geoul:'KR',langs:1,fn:"",id:""};GH.init();}
    </script>
    <!--global js end-->
    <!-- begin page level js -->
    @yield('footer_scripts')
    <script type="text/javascript">
        function onChangeAllCategories(obj){
            if($(obj).val() == 0){

            }else{
                window.location.href = "{{url("/front/product_list")}}/" + $(obj).val();
            }
        }
        function searchProduct(page){
            var pageNo;
            if(page ==undefined){
                pageNo = 1;
            }else{
                pageNo = page;
            }
            var brand_key = $("#search_brand_key").val();
            var condition_key = $("#search_condition_key").val();
            var price_from_key = $("#search_price_from_key").val();
            var price_to_key = $("#search_price_to_key").val();
            if(price_from_key > price_to_key){
                errorMsg("Please input correct price");
                return;
            }
            var category_id = 0;
            if($(".find_product_category_ul_item.active").length>0){
                category_id = $(".find_product_category_ul_item.active").attr("data-id");
            }
            window.location.href = "{{url("front/find_products?search_key=")}}" + $("#gh-ac").val()
                + "&brand_key=" + brand_key
                + "&condition_key=" + condition_key
                + "&price_from_key=" + price_from_key
                + "&price_to_key=" + price_to_key + "&page="+pageNo
                + "&category_id="+category_id    ;
        }
        function onSearchProduct(){
            if($("#gh-ac").val() == ""){
                errorMsg("Please input search key");
                return;
            }
            searchProduct();
        }
        $("#gh-ac").on("keypress", function(e){
            if (e.keyCode == 13) {
                if($("#gh-ac").val() == ""){
                    errorMsg("Please input search key");
                    return;
                }
                searchProduct();
            }
        });


    </script>
    <!-- end page level js -->
</body>

</html>
