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
    <link href="{{asset('assets/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('assets/slick/slick-theme.css')}}" rel="stylesheet">



    <!--end of page level css-->
@stop

{{-- slider --}}
@section('top')

    <!--Carousel Start -->

    <!-- //Carousel End -->
@stop

{{-- content --}}
@section('content')
    <div class="container">
        <div class="hl-cat-nav" data-marko="{&quot;onmouseleave&quot;:&quot;onMouseLeave s0-0-2 false&quot;}">
            <ul class="hl-cat-nav__container"
                data-marko="{&quot;onmouseout&quot;:&quot;onTabMouseOut s0-0-2 false&quot;,&quot;onmouseover&quot;:&quot;onTabMouseOver s0-0-2 false&quot;,&quot;onfocusout&quot;:&quot;onTabMouseOut s0-0-2 false&quot;,&quot;onclick&quot;:&quot;onExpandClick s0-0-2 false&quot;}">
                <li class="hl-cat-nav__active"><span>Home</span></li>
                <li class="saved"><a href="{{url("/categories")}}">Saved</a></li>
                <li class="hl-cat-nav__js-tab" data-hover-track="p2481888.m1379.l6435"><a
                            href="{{url("/categories")}}" _sp="p2481888.m1379.l3250">Electronics</a>
                    <div class="hl-cat-nav__expander">
                        <button aria-haspopup="true">Expand: Electronics</button>
                    </div>
                    <div class="hl-cat-nav__flyout">
                        <div class="hl-cat-nav__sub-cats">
                            <div class="hl-cat-nav__sub-cat-col"><span>Top Categories</span>
                                <ul>
                                    <li>
                                        <a href="/b/Cell-Phones-Smart-Watches-Accessories/15032/bn_1865441"
                                           _sp="p2481888.m1379.l3251" class="hl-cat-nav__js-link">Cell Phones &amp;
                                            Accessories</a></li>
                                    <li><a href="/b/Smart-Watches/178893/bn_152365"
                                           _sp="p2481888.m1379.l3252" class="hl-cat-nav__js-link">Smart Watches</a></li>
                                    <li><a href="/b/Video-Games-Consoles/1249/bn_1850232"
                                           _sp="p2481888.m1379.l3253" class="hl-cat-nav__js-link">Video Games &amp;
                                            Accessories</a></li>
                                    <li>
                                        <a href="/b/Computers-Tablets-Network-Hardware/58058/bn_1865247"
                                           _sp="p2481888.m1379.l3254" class="hl-cat-nav__js-link">Computers &amp;
                                            Tablets</a></li>
                                    <li><a href="/b/Cameras-Photo/625/bn_1865546"
                                           _sp="p2481888.m1379.l3255" class="hl-cat-nav__js-link">Digital Cameras &amp;
                                            Photo</a></li>
                                    <li><a href="/b/Camera-Drones/179697/bn_89951"
                                           _sp="p2481888.m1379.l3256" class="hl-cat-nav__js-link">Camera Drones</a></li>
                                    <li><a href="/globaldeals/tech" _sp="p2481888.m1379.l3257"
                                           class="hl-cat-nav__js-link">Deals</a></li>
                                </ul>
                            </div>
                            <div class="hl-cat-nav__sub-cat-col"><span>Other Categories</span>
                                <ul>
                                    <li><a href="/b/Apple-iPhone/9355/bn_319682"
                                           _sp="p2481888.m1379.l3258" class="hl-cat-nav__js-link">iPhone</a></li>
                                    <li>
                                        <a href="/b/Samsung-Cell-Phones-and-Smartphones/9355/bn_352130"
                                           _sp="p2481888.m1379.l3259" class="hl-cat-nav__js-link">Samsung</a></li>
                                    <li><a href="/b/Portable-Audio-Headphones/15052/bn_1642614"
                                           _sp="p2481888.m1379.l3260" class="hl-cat-nav__js-link">Portable Audio &amp;
                                            Headphones</a></li>
                                    <li>
                                        <a href="/b/TV-Video-Home-Audio-Electronics/32852/bn_1648392"
                                           _sp="p2481888.m1379.l3261" class="hl-cat-nav__js-link">TV, Video &amp; Home
                                            Audio</a></li>
                                    <li><a href="/b/Vehicle-Electronics-GPS/3270/bn_887004"
                                           _sp="p2481888.m1379.l3262" class="hl-cat-nav__js-link">Vehicle Electronics
                                            &amp; GPS</a></li>
                                    <li><a href="/b/Smart-Home/bn_7000880931"
                                           _sp="p2481888.m1379.l3263" class="hl-cat-nav__js-link">Smart Home</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="hl-cat-nav__rtm">
                            <iframe scrolling="no" frameborder="no" border="0" src="./home_files/19392.html"></iframe>
                        </div>
                    </div>
                </li>
                <li class="hl-cat-nav__js-tab" data-hover-track="p2481888.m1380.l6435"><a
                            href="{{url("/categories")}}">Fashion</a>
                    <div class="hl-cat-nav__expander">
                        <button aria-haspopup="true">Expand: Fashion</button>
                    </div>
                    <div class="hl-cat-nav__flyout">
                        <div class="hl-cat-nav__sub-cats">
                            <div class="hl-cat-nav__sub-cat-col"><span>Top Categories</span>
                                <ul>
                                    <li><a href="/b/Womens-Clothing/15724/bn_661783"
                                           _sp="p2481888.m1380.l3251" class="hl-cat-nav__js-link">Women's Clothing</a>
                                    </li>
                                    <li><a href="/b/Womens-Shoes/3034/bn_740022"
                                           _sp="p2481888.m1380.l3252" class="hl-cat-nav__js-link">Women's Shoes</a></li>
                                    <li><a href="/b/Mens-Clothing/1059/bn_696958"
                                           _sp="p2481888.m1380.l3253" class="hl-cat-nav__js-link">Men's Clothing</a>
                                    </li>
                                    <li><a href="/b/Mens-Shoes/93427/bn_61999"
                                           _sp="p2481888.m1380.l3254" class="hl-cat-nav__js-link">Men's Shoes</a></li>
                                    <li><a href="/b/Watches-Parts-Accessories/14324/bn_2408535"
                                           _sp="p2481888.m1380.l3255" class="hl-cat-nav__js-link">Watches, Parts &amp;
                                            Accessories</a></li>
                                    <li><a href="/globaldeals/fashion" _sp="p2481888.m1380.l3256"
                                           class="hl-cat-nav__js-link">Deals</a></li>
                                </ul>
                            </div>
                            <div class="hl-cat-nav__sub-cat-col"><span>Other Categories</span>
                                <ul>
                                    <li><a href="/b/Fine-Jewelry/4196/bn_2408477"
                                           _sp="p2481888.m1380.l3257" class="hl-cat-nav__js-link">Fine Jewelry</a></li>
                                    <li><a href="/b/Jewelry/bn_7000259126"
                                           _sp="p2481888.m1380.l3258" class="hl-cat-nav__js-link">Fashion Jewelry</a>
                                    </li>
                                    <li><a href="/b/Mens-Accessories/4250/bn_1642245"
                                           _sp="p2481888.m1380.l3259" class="hl-cat-nav__js-link">Men's Accessories</a>
                                    </li>
                                    <li><a href="/b/Womens-Bags-Handbags/169291/bn_738272"
                                           _sp="p2481888.m1380.l3260" class="hl-cat-nav__js-link">Women's Handbags &amp;
                                            Bags</a></li>
                                    <li>
                                        <a href="/b/Kids-Clothing-Shoes-Accessories/171146/bn_1642843"
                                           _sp="p2481888.m1380.l3261" class="hl-cat-nav__js-link">Kids' Clothing, Shoes
                                            &amp; Accs</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="hl-cat-nav__rtm">
                            <iframe scrolling="no" frameborder="no" border="0" src="./home_files/19393.html"></iframe>
                        </div>
                    </div>
                </li>
                <li class="hl-cat-nav__js-tab" data-hover-track="p2481888.m1381.l6435"><a
                            href="{{url("/categories")}}" _sp="p2481888.m1381.l3250">Health &amp;
                        Beauty</a>
                    <div class="hl-cat-nav__expander">
                        <button aria-haspopup="true">Expand: Health &amp; Beauty</button>
                    </div>
                    <div class="hl-cat-nav__flyout">
                        <div class="hl-cat-nav__sub-cats">
                            <div class="hl-cat-nav__sub-cat-col"><span>Top Categories</span>
                                <ul>
                                    <li><a href="/b/Makeup-Products/31786/bn_1865570"
                                           _sp="p2481888.m1381.l3251" class="hl-cat-nav__js-link">Makeup</a></li>
                                    <li><a href="/b/Health/bn_7000259659" _sp="p2481888.m1381.l3252"
                                           class="hl-cat-nav__js-link">Health Care</a></li>
                                    <li><a href="/b/Fragrances/180345/bn_1853074"
                                           _sp="p2481888.m1381.l3253" class="hl-cat-nav__js-link">Fragrances</a></li>
                                    <li>
                                        <a href="/b/Manicure-Pedicure-Nail-Care-Products/47945/bn_223038"
                                           _sp="p2481888.m1381.l3254" class="hl-cat-nav__js-link">Nail Care, Manicure
                                            &amp; Pedicure</a></li>
                                    <li><a href="/b/Hair-Care-Styling-Products/11854/bn_1855355"
                                           _sp="p2481888.m1381.l3255" class="hl-cat-nav__js-link">Hair Care &amp;
                                            Styling</a></li>
                                    <li><a href="/globaldeals/fashion/beauty"
                                           _sp="p2481888.m1381.l3256" class="hl-cat-nav__js-link">Deals</a></li>
                                </ul>
                            </div>
                            <div class="hl-cat-nav__sub-cat-col"><span>Other Categories</span>
                                <ul>
                                    <li><a href="/b/Skin-Care-Products/11863/bn_1856572"
                                           _sp="p2481888.m1381.l3257" class="hl-cat-nav__js-link">Skin Care</a></li>
                                    <li><a href="/b/Vitamins-Dietary-Supplements/180959/bn_7203746"
                                           _sp="p2481888.m1381.l3258" class="hl-cat-nav__js-link">Vitamins &amp; Dietary
                                            Supplements</a></li>
                                    <li><a href="/b/Shaving-Hair-Removal-Products/31762/bn_223821"
                                           _sp="p2481888.m1381.l3259" class="hl-cat-nav__js-link">Shaving &amp; Hair
                                            Removal</a></li>
                                    <li><a href="/b/Vision-Care-Products/31414/bn_1865451"
                                           _sp="p2481888.m1381.l3260" class="hl-cat-nav__js-link">Vision Care</a></li>
                                    <li><a href="/b/Bath-Body-Products/11838/bn_1850348"
                                           _sp="p2481888.m1381.l3261" class="hl-cat-nav__js-link">Bath &amp; Body</a>
                                    </li>
                                    <li><a href="/b/Oral-Care-Products/31769/bn_695503"
                                           _sp="p2481888.m1381.l3262" class="hl-cat-nav__js-link">Oral Care</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="hl-cat-nav__rtm">
                            <iframe scrolling="no" frameborder="no" border="0" src="./home_files/19394.html"></iframe>
                        </div>
                    </div>
                </li>
                <li class="hl-cat-nav__js-tab" data-hover-track="p2481888.m1382.l6435"><a
                            href="{{url("/categories")}}" _sp="p2481888.m1382.l3250">Motors</a>
                    <div class="hl-cat-nav__expander">
                        <button aria-haspopup="true">Expand: Motors</button>
                    </div>
                    <div class="hl-cat-nav__flyout">
                        <div class="hl-cat-nav__sub-cats">
                            <div class="hl-cat-nav__sub-cat-col"><span>Top Categories</span>
                                <ul>
                                    <li><a href="/rpp/geo-parts-accessories-motors"
                                           _sp="p2481888.m1382.l3251" class="hl-cat-nav__js-link">Car &amp; Truck
                                            Parts</a></li>
                                    <li><a href="/b/Motorcycle-Parts/10063/bn_557636"
                                           _sp="p2481888.m1382.l3252" class="hl-cat-nav__js-link">Motorcycle Parts</a>
                                    </li>
                                    <li>
                                        <a href="/b/ATV-Side-by-Side-UTV-Parts-Accessories/43962/bn_562707"
                                           _sp="p2481888.m1382.l3253" class="hl-cat-nav__js-link">ATV Parts</a></li>
                                    <li><a href="/b/Scooter-Parts-Accessories/84149/bn_16582008"
                                           _sp="p2481888.m1382.l3254" class="hl-cat-nav__js-link">Scooter Parts</a></li>
                                    <li><a href="/b/Snowmobile-Parts-in-Motors/100448/bn_579671"
                                           _sp="p2481888.m1382.l3255" class="hl-cat-nav__js-link">Snowmobile Parts</a>
                                    </li>
                                    <li><a href="/globaldeals/more/automotive"
                                           _sp="p2481888.m1382.l3256" class="hl-cat-nav__js-link">Deals</a></li>
                                </ul>
                            </div>
                            <div class="hl-cat-nav__sub-cat-col"><span>Other Categories</span>
                                <ul>
                                    <li><a href="/b/Motorcycle-Street-Gear/177099/bn_55168230"
                                           _sp="p2481888.m1382.l3257" class="hl-cat-nav__js-link">Motorcycle Apparel</a>
                                    </li>
                                    <li><a href="/b/Snowmobile-Apparel-Merchandise/100440/bn_561549"
                                           _sp="p2481888.m1382.l3258" class="hl-cat-nav__js-link">Snowmobile Apparel</a>
                                    </li>
                                    <li><a href="/b/Motorcycle-Accessories/25622/bn_78211228"
                                           _sp="p2481888.m1382.l3259" class="hl-cat-nav__js-link">Motorcycle
                                            Accessories</a></li>
                                    <li><a href="/b/Performance-Racing-Parts/107057/bn_568110"
                                           _sp="p2481888.m1382.l3260" class="hl-cat-nav__js-link">Performance &amp;
                                            Racing Parts</a></li>
                                    <li><a href="/b/Vintage-Car-Truck-Parts/10073/bn_558746"
                                           _sp="p2481888.m1382.l3261" class="hl-cat-nav__js-link">Vintage Car &amp;
                                            Truck Parts</a></li>
                                    <li><a href="/b/Car-Electronics/38635/bn_562662"
                                           _sp="p2481888.m1382.l3262" class="hl-cat-nav__js-link">Car Electronics</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="hl-cat-nav__rtm">
                            <iframe scrolling="no" frameborder="no" border="0" src="./home_files/19395.html"></iframe>
                        </div>
                    </div>
                </li>
                <li class="hl-cat-nav__js-tab" data-hover-track="p2481888.m1383.l6435"><a
                            href="{{url("/categories")}}" _sp="p2481888.m1383.l3250">Collectibles</a>
                    <div class="hl-cat-nav__expander">
                        <button aria-haspopup="true">Expand: Collectibles</button>
                    </div>
                    <div class="hl-cat-nav__flyout">
                        <div class="hl-cat-nav__sub-cats">
                            <div class="hl-cat-nav__sub-cat-col"><span>Top Categories</span>
                                <ul>
                                    <li><a href="/b/Action-Figures/246/bn_1648288"
                                           _sp="p2481888.m1383.l3251" class="hl-cat-nav__js-link">Action Figures</a>
                                    </li>
                                    <li><a href="/b/Coins-Paper-Money/11116/bn_1857806"
                                           _sp="p2481888.m1383.l3252" class="hl-cat-nav__js-link">Coins and Paper
                                            Money</a></li>
                                    <li><a href="/b/Stamps/260/bn_1865095"
                                           _sp="p2481888.m1383.l3253" class="hl-cat-nav__js-link">Stamps</a></li>
                                    <li><a href="/b/Collectible-Postcards/914/bn_1865516"
                                           _sp="p2481888.m1383.l3254" class="hl-cat-nav__js-link">Postcards</a></li>
                                    <li><a href="/b/Entertainment-Memorabilia/45100/bn_1859756"
                                           _sp="p2481888.m1383.l3255" class="hl-cat-nav__js-link">Autographed
                                            Memorabilia</a></li>
                                    <li>
                                        <a href="/b/Sports-Memorabilia-Fan-Shop-Sports-Cards/64482/bn_1857919"
                                           _sp="p2481888.m1383.l3256" class="hl-cat-nav__js-link">Sport Memorabilia</a>
                                    </li>
                                    <li><a href="/b/Collectibles/1/bn_1858810"
                                           _sp="p2481888.m1383.l3257" class="hl-cat-nav__js-link">Collectibles</a></li>
                                </ul>
                            </div>
                            <div class="hl-cat-nav__sub-cat-col"><span>Other Categories</span>
                                <ul>
                                    <li><a href="/b/Art/550/bn_1853728" _sp="p2481888.m1383.l3258"
                                           class="hl-cat-nav__js-link">Arts</a></li>
                                    <li><a href="/b/Antiques/20081/bn_1851017"
                                           _sp="p2481888.m1383.l3259" class="hl-cat-nav__js-link">Antiques</a></li>
                                    <li>
                                        <a href="/b/Collectible-Pens-Writing-Instruments/966/bn_1865414"
                                           _sp="p2481888.m1383.l3260" class="hl-cat-nav__js-link">Pens &amp; Writing
                                            Instruments</a></li>
                                    <li><a href="/b/TV-Movie-Character-Toys/2624/bn_1865498"
                                           _sp="p2481888.m1383.l3261" class="hl-cat-nav__js-link">TV, Movie &amp;
                                            Character Toys</a></li>
                                    <li><a href="/b/Diecast-Toy-Vehicles/222/bn_1850842"
                                           _sp="p2481888.m1383.l3262" class="hl-cat-nav__js-link">Toy Vehicles</a></li>
                                    <li><a href="/b/Collectible-Comics/63/bn_1865459"
                                           _sp="p2481888.m1383.l3263" class="hl-cat-nav__js-link">Comics</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="hl-cat-nav__rtm">
                            <iframe scrolling="no" frameborder="no" border="0" src="./home_files/19396.html"></iframe>
                        </div>
                    </div>
                </li>
                <li class="hl-cat-nav__js-tab" data-hover-track="p2481888.m1384.l6435"><a
                            href="{{url("/categories")}}" _sp="p2481888.m1384.l3250">Sports</a>
                    <div class="hl-cat-nav__expander">
                        <button aria-haspopup="true">Expand: Sports</button>
                    </div>
                    <div class="hl-cat-nav__flyout">
                        <div class="hl-cat-nav__sub-cats">
                            <div class="hl-cat-nav__sub-cat-col"><span>Top Categories</span>
                                <ul>
                                    <li><a href="/b/Cycling-Equipment/7294/bn_1848937"
                                           _sp="p2481888.m1384.l3251" class="hl-cat-nav__js-link">Cycling</a></li>
                                    <li><a href="/b/Outdoor-Sports/159043/bn_1855398"
                                           _sp="p2481888.m1384.l3252" class="hl-cat-nav__js-link">Outdoor Sports</a>
                                    </li>
                                    <li><a href="/b/Hunting-Equipment/7301/bn_1865054"
                                           _sp="p2481888.m1384.l3253" class="hl-cat-nav__js-link">Hunting</a></li>
                                    <li><a href="/b/Fishing-Equipment-Supplies/1492/bn_1851047"
                                           _sp="p2481888.m1384.l3254" class="hl-cat-nav__js-link">Fishing</a></li>
                                    <li><a href="/b/Fitness-Running-Yoga-Equipment/15273/bn_1855426"
                                           _sp="p2481888.m1384.l3255" class="hl-cat-nav__js-link">Fitness, Running &amp;
                                            Yoga</a></li>
                                    <li><a href="/globaldeals/home/sporting-goods"
                                           _sp="p2481888.m1384.l3256" class="hl-cat-nav__js-link">Deals</a></li>
                                </ul>
                            </div>
                            <div class="hl-cat-nav__sub-cat-col"><span>Other Categories</span>
                                <ul>
                                    <li><a href="/b/Tennis-Racquet-Sports/159134/bn_1865461"
                                           _sp="p2481888.m1384.l3257" class="hl-cat-nav__js-link">Tennis</a></li>
                                    <li><a href="/b/Swimming-Equipment/74050/bn_1968654"
                                           _sp="p2481888.m1384.l3258" class="hl-cat-nav__js-link">Swimming</a></li>
                                    <li><a href="/b/Water-Sports/159136/bn_1855031"
                                           _sp="p2481888.m1384.l3259" class="hl-cat-nav__js-link">Water Sports</a></li>
                                    <li><a href="/b/Winter-Sports/36259/bn_1853285?"
                                           _sp="p2481888.m1384.l3260" class="hl-cat-nav__js-link">Winter Sports</a></li>
                                    <li><a href="/b/Team-Sports/159049/bn_1865097"
                                           _sp="p2481888.m1384.l3261" class="hl-cat-nav__js-link">Team Sports</a></li>
                                    <li><a href="/b/Fitness-Technology/44075/bn_1944181"
                                           _sp="p2481888.m1384.l3262" class="hl-cat-nav__js-link">Fitness Technology</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="hl-cat-nav__rtm">
                            <iframe scrolling="no" frameborder="no" border="0" src="./home_files/19397.html"></iframe>
                        </div>
                    </div>
                </li>
                <li class="hl-cat-nav__js-tab" data-hover-track="p2481888.m1385.l6435"><a
                            href="{{url("/categories")}}" _sp="p2481888.m1385.l3250">Home
                        &amp; Garden</a>
                    <div class="hl-cat-nav__expander">
                        <button aria-haspopup="true">Expand: Home &amp; Garden</button>
                    </div>
                    <div class="hl-cat-nav__flyout">
                        <div class="hl-cat-nav__sub-cats">
                            <div class="hl-cat-nav__sub-cat-col"><span>Top Categories</span>
                                <ul>
                                    <li><a href="/b/Tools-Workshop-Equipment/631/bn_1851815"
                                           _sp="p2481888.m1385.l3251" class="hl-cat-nav__js-link">Tools &amp; Workshop
                                            Equipment</a></li>
                                    <li>
                                        <a href="/b/Yard-Garden-Outdoor-Living-Items/159912/bn_1853607"
                                           _sp="p2481888.m1385.l3252" class="hl-cat-nav__js-link">Yard, Garden &amp;
                                            Outdoor Living</a></li>
                                    <li><a href="/b/Home-Improvement/159907/bn_1851980"
                                           _sp="p2481888.m1385.l3253" class="hl-cat-nav__js-link">Home Improvement</a>
                                    </li>
                                    <li><a href="/b/Baby/2984/bn_1854104" _sp="p2481888.m1385.l3254"
                                           class="hl-cat-nav__js-link">Baby</a></li>
                                    <li><a href="/b/Kitchen-Dining-Bar-Supplies/20625/bn_1865564"
                                           _sp="p2481888.m1385.l3255" class="hl-cat-nav__js-link">Kitchen, Dining &amp;
                                            Bar</a></li>
                                    <li><a href="/b/Lamps-Lighting-Ceiling-Fans/20697/bn_818527"
                                           _sp="p2481888.m1385.l3256" class="hl-cat-nav__js-link">Lamps, Lighting &amp;
                                            Ceiling Fans</a></li>
                                    <li><a href="/globaldeals/home" _sp="p2481888.m1385.l3257"
                                           class="hl-cat-nav__js-link">Deals</a></li>
                                </ul>
                            </div>
                            <div class="hl-cat-nav__sub-cat-col"><span>Other Categories</span>
                                <ul>
                                    <li><a href="/b/Home-Decor/10033/bn_1849733"
                                           _sp="p2481888.m1385.l3258" class="hl-cat-nav__js-link">Home Décor</a></li>
                                    <li><a href="/b/Home-Organization-Supplies/43502/bn_2311028"
                                           _sp="p2481888.m1385.l3259" class="hl-cat-nav__js-link">Home Organization
                                            Supplies</a></li>
                                    <li><a href="/b/Art-Craft-Supplies/14339/bn_1851051"
                                           _sp="p2481888.m1385.l3260" class="hl-cat-nav__js-link">Art &amp; Craft
                                            Supplies</a></li>
                                    <li><a href="/b/Beads-Jewelry-Making-Supplies/31723/bn_1860484"
                                           _sp="p2481888.m1385.l3261" class="hl-cat-nav__js-link">Beads &amp; Jewelry
                                            Making Supplies</a></li>
                                    <li><a href="/b/Art-Supplies/11783/bn_1855076"
                                           _sp="p2481888.m1385.l3262" class="hl-cat-nav__js-link">Art Supplies</a></li>
                                    <li>
                                        <a href="/b/Scrapbooking-Paper-Craft-Supplies/11788/bn_1849898"
                                           _sp="p2481888.m1385.l3263" class="hl-cat-nav__js-link">Scrapbooking &amp;
                                            Paper Crafts</a></li>
                                    <li><a href="/b/Pet-Supplies/1281/bn_1853597"
                                           _sp="p2481888.m1385.l3264" class="hl-cat-nav__js-link">Pets Supplies</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="hl-cat-nav__rtm">
                            <iframe scrolling="no" frameborder="no" border="0" src="./home_files/19398.html"></iframe>
                        </div>
                    </div>
                </li>
                <li class="hl-cat-nav__js-tab" data-hover-track="p2481888.m1386.l6435"><a
                            href="/globaldeals" _sp="p2481888.m1386.l3250">Deals</a>
                    <div class="hl-cat-nav__expander">
                        <button aria-haspopup="true">Expand: Deals</button>
                    </div>
                    <div class="hl-cat-nav__flyout">
                        <div class="hl-cat-nav__sub-cats">
                            <div class="hl-cat-nav__sub-cat-col"><span>Top Categories</span>
                                <ul>
                                    <li><a href="/globaldeals" _sp="p2481888.m1386.l3251"
                                           class="hl-cat-nav__js-link">Daily Deals</a></li>
                                    <li><a href="/globaldeals/tech" _sp="p2481888.m1386.l3252"
                                           class="hl-cat-nav__js-link">Tech Deals</a></li>
                                    <li><a href="/globaldeals/fashion" _sp="p2481888.m1386.l3253"
                                           class="hl-cat-nav__js-link">Fashion Deals</a></li>
                                    <li><a href="/globaldeals/fashion/beauty"
                                           _sp="p2481888.m1386.l3254" class="hl-cat-nav__js-link">Health and Beauty
                                            Deals</a></li>
                                    <li><a href="/globaldeals/home" _sp="p2481888.m1386.l3255"
                                           class="hl-cat-nav__js-link">Home and Garden Deals</a></li>
                                    <li><a href="/globaldeals/home/sporting-goods"
                                           _sp="p2481888.m1386.l3256" class="hl-cat-nav__js-link">Sporting Goods
                                            Deals</a></li>
                                </ul>
                            </div>
                            <div class="hl-cat-nav__sub-cat-col"><span>Other Categories</span>
                                <ul>
                                    <li><a href="/globaldeals/tech/cell-phones"
                                           _sp="p2481888.m1386.l3257" class="hl-cat-nav__js-link">Cellphone Deals</a>
                                    </li>
                                    <li><a href="/globaldeals/tech/cameras-photo"
                                           _sp="p2481888.m1386.l3258" class="hl-cat-nav__js-link">Camera Deals</a></li>
                                    <li><a href="/globaldeals/fashion/watches"
                                           _sp="p2481888.m1386.l3259" class="hl-cat-nav__js-link">Watches Deals</a></li>
                                    <li><a href="/globaldeals/fashion/fashion-jewelry"
                                           _sp="p2481888.m1386.l3260" class="hl-cat-nav__js-link">Jewelry Deals</a></li>
                                    <li><a href="/globaldeals/tech/tech-with-free-shipping"
                                           _sp="p2481888.m1386.l3261" class="hl-cat-nav__js-link">Tech with Free
                                            shipping</a></li>
                                    <li><a href="/globaldeals/fashion/fashion-with-free-shipping"
                                           _sp="p2481888.m1386.l3262" class="hl-cat-nav__js-link">Fashion with Free
                                            shipping</a></li>
                                    <li><a href="/globaldeals/featured/hot-picks-of-the-week"
                                           _sp="p2481888.m1386.l3263" class="hl-cat-nav__js-link">Hot trends of the
                                            week</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="hl-cat-nav__rtm">
                            <iframe scrolling="no" frameborder="no" border="0" src="./home_files/19399.html"></iframe>
                        </div>
                    </div>
                </li>
                <li class="hl-cat-nav__js-tab hl-cat-nav__no-sub" data-hover-track="p2481888.m1387.l6435"><a
                            href="{{url("/categories")}}" _sp="p2481888.m1387.l3250">Under
                        $10</a></li>
                <li class="hl-cat-nav__more hl-cat-nav__js-tab"><span>More <svg
                                class="icon icon--chevron-down-bold svg-icon hl-cat-nav__more-arrow" focusable="false"
                                data-ebayui="" aria-hidden="true"><defs></defs><use
                                    href="#icon-chevron-down-bold"></use></svg></span>
                    <div class="hl-cat-nav__expander">
                        <button aria-haspopup="true">Expand: More</button>
                    </div>
                    <div class="hl-cat-nav__flyout"><a href="/b/Electronics/bn_7000259124"
                                                       _sp="p2481888.m1379.l3250">Electronics</a><a
                                href="/b/Fashion/bn_7000259856"
                                _sp="p2481888.m1380.l3250">Fashion</a><a
                                href="/b/Beauty/bn_7000259123" _sp="p2481888.m1381.l3250">Health
                            &amp; Beauty</a><a href="/rpp/geo-parts-accessories-motors"
                                               _sp="p2481888.m1382.l3250">Motors</a><a
                                href="/b/Collectibles-Art/bn_7000259855" _sp="p2481888.m1383.l3250">Collectibles</a><a
                                href="/b/Sporting-Goods/888/bn_1865031" _sp="p2481888.m1384.l3250">Sports</a><a
                                href="/b/Home-Garden/11700/bn_1853126" _sp="p2481888.m1385.l3250">Home
                            &amp; Garden</a><a href="/globaldeals"
                                               _sp="p2481888.m1386.l3250">Deals</a><a
                                href="/b/Under-10/bn_7001623770" _sp="p2481888.m1387.l3250">Under
                            $10</a></div>
                </li>
            </ul>
        </div>
        <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item">
                <img src="{{ asset('assets/images/slide_1.jpg') }}" alt="slider-image">
            </div>
            <div class="item"><img src="{{ asset('assets/images/slide_2.jpg') }}" alt="slider-image">
            </div>
            <div class="item"><img src="{{ asset('assets/images/slide_4.png') }}" alt="slider-image">
            </div>
        </div>
        <section class="purchas-main">
            <div class="hl-card-header">
                <div class="hl-card-header__header-container clearfix">
                    <div class="hl-card-header__title"><h2 class="hl-card-header__headline"><a
                                    href="/globaldeals?_trkparms=pageci%3A7a791f14-da14-11e9-bb8d-74dbd180a863%7Cparentrq%3A4476f63416d0a4b7b6f8ca31ff99efec%7Ciid%3A1"
                                    _sp="p2481888.m2615.l9803"
                                    data-click="{&quot;eventFamily&quot;:&quot;HOMEPAGE&quot;,&quot;eventAction&quot;:&quot;ACTN&quot;,&quot;actionKind&quot;:&quot;NAVSRC&quot;,&quot;operationId&quot;:&quot;2481888&quot;,&quot;flushImmediately&quot;:false,&quot;eventProperty&quot;:{&quot;moduledtl&quot;:&quot;mi:2615|iid:1|li:9803&quot;,&quot;parentrq&quot;:&quot;4476f63416d0a4b7b6f8ca31ff99efec&quot;,&quot;pageci&quot;:&quot;7a791f14-da14-11e9-bb8d-74dbd180a863&quot;}}">Daily
                                Deals<span class="clipped"> - Carousel</span></a></h2></div>
                    <div class="hl-card-header__seeall"><a
                                href="/globaldeals?_trkparms=pageci%3A7a791f14-da14-11e9-bb8d-74dbd180a863%7Cparentrq%3A4476f63416d0a4b7b6f8ca31ff99efec%7Ciid%3A1"
                                _sp="p2481888.m2615.l8342"
                                data-click="{&quot;eventFamily&quot;:&quot;HOMEPAGE&quot;,&quot;eventAction&quot;:&quot;ACTN&quot;,&quot;actionKind&quot;:&quot;NAVSRC&quot;,&quot;operationId&quot;:&quot;2481888&quot;,&quot;flushImmediately&quot;:false,&quot;eventProperty&quot;:{&quot;moduledtl&quot;:&quot;mi:2615|iid:1|li:8342&quot;,&quot;parentrq&quot;:&quot;4476f63416d0a4b7b6f8ca31ff99efec&quot;,&quot;pageci&quot;:&quot;7a791f14-da14-11e9-bb8d-74dbd180a863&quot;}}"
                                aria-label="See All Deals">See all
                            <svg class="icon icon--arrow-right-bold hl-card-header__large-arrow" focusable="false"
                                 data-ebayui="" aria-hidden="true">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xlink:href="#icon-arrow-right-bold"></use>
                            </svg>
                        </a></div>
                </div>
            </div>
            <div class="owl-carousel owl-theme" id="carousel3">
                <div class="item">
                    <img src="{{ asset('assets/img/parallax/photo1.jpg') }}"  alt="image1"> </div>
                <div class="item">
                    <img src="{{ asset('assets/img/parallax/photo2.jpg') }}"  alt="image2"> </div>
                <div class="item">
                    <img src="{{ asset('assets/img/parallax/photo3.jpg') }}"  alt="image3"> </div>
                <div class="item">
                    <img src="{{ asset('assets/img/parallax/photo1.jpg') }}"  alt="image4"> </div>
                <div class="item">
                    <img src="{{ asset('assets/img/parallax/photo2.jpg') }}"  alt="image5"> </div>
            </div>
            <div class="hl-module hl-popular-destinations off-card hl-atf-module-js" id="destinations_list1">
                <div class="hl-card-header">
                    <div class="hl-card-header__header-container clearfix">
                        <div class="hl-card-header__title"><h2 class="hl-card-header__headline">Popular Brand</h2></div>
                    </div>
                </div>
                <ul class="hl-popular-destinations-elements">
                    <li class="hl-popular-destinations-element">
                        <a class="hl-popular-destinations-link" href="{{url("/brand")}}" >
                            <div class="hl-popular-destinations-image-spacer">
                                <div class="hl-image hl-image-js js-only hl-popular-destinations-image hl-image__fill"
                                     data-size="200"
                                     style="background-image: url(&quot;{{asset("/uploads/product/s-l200.webp")}}&quot;);">
                                    <div class="hl-image__background" style="opacity: 0;"></div>
                                </div>
                            </div>
                            <h3 class="hl-popular-destinations-name">Titleist</h3></a></li>
                    <li class="hl-popular-destinations-element">
                        <a class="hl-popular-destinations-link" href="{{url("/brand")}}">
                            <div class="hl-popular-destinations-image-spacer">
                                <div class="hl-image hl-image-js js-only hl-popular-destinations-image hl-image__fill"
                                     data-size="200"
                                     style="background-image: url(&quot;{{asset("/uploads/product/s-l200.webp")}}&quot;);">
                                    <div class="hl-image__background" style="opacity: 0;"></div>
                                </div>
                            </div>
                            <h3 class="hl-popular-destinations-name">Dyson</h3>
                        </a>
                    </li>
                    <li class="hl-popular-destinations-element">
                        <a class="hl-popular-destinations-link" href="{{url("/brand")}}">
                            <div class="hl-popular-destinations-image-spacer">
                                <div class="hl-image hl-image-js js-only hl-popular-destinations-image hl-image__fill"
                                     data-size="200"
                                     style="background-image: url(&quot;{{asset("/uploads/product/s-l200.webp")}}&quot;);">
                                    <div class="hl-image__background" style="opacity: 0;"></div>
                                </div>
                            </div>
                            <h3 class="hl-popular-destinations-name">Apple</h3></a>
                    </li>
                    <li class="hl-popular-destinations-element">
                        <a class="hl-popular-destinations-link"  href="/brand">
                            <div class="hl-popular-destinations-image-spacer">
                                <div class="hl-image hl-image-js js-only hl-popular-destinations-image hl-image__fill"
                                     data-size="200"
                                     style="background-image: url(&quot;{{asset("/uploads/product/s-l200.webp")}}&quot;);">
                                    <div class="hl-image__background" style="opacity: 0;"></div>
                                </div>
                            </div>
                            <h3 class="hl-popular-destinations-name">Nintendo</h3></a>
                    </li>
                    <li class="hl-popular-destinations-seperator" role="presentation"></li>
                    <li class="hl-popular-destinations-element">
                        <a class="hl-popular-destinations-link"  href="{{url("/brand")}}">
                            <div class="hl-popular-destinations-image-spacer">
                                <div class="hl-image hl-image-js js-only hl-popular-destinations-image hl-image__fill"
                                     data-size="200"
                                     style="background-image: url(&quot;{{asset("/uploads/product/s-l200.webp")}}&quot;);">
                                    <div class="hl-image__background" style="opacity: 0;"></div>
                                </div>
                            </div>
                            <h3 class="hl-popular-destinations-name">Nike </h3></a>
                    </li>
                    <li class="hl-popular-destinations-element">
                        <a class="hl-popular-destinations-link" href="{{url("/brand")}}">
                            <div class="hl-popular-destinations-image-spacer">
                                <div class="hl-image hl-image-js js-only hl-popular-destinations-image hl-image__fill"
                                     data-size="200"
                                     style="background-image: url(&quot;{{asset("/uploads/product/s-l200.webp")}}&quot;);">
                                    <div class="hl-image__background" style="opacity: 0;"></div>
                                </div>
                            </div>
                            <h3 class="hl-popular-destinations-name">adidas</h3></a>
                    </li>
                    <li class="hl-popular-destinations-element">
                        <a class="hl-popular-destinations-link" href="{{url("/brand")}}">
                            <div class="hl-popular-destinations-image-spacer">
                                <div class="hl-image hl-image-js js-only hl-popular-destinations-image hl-image__fill"
                                     data-size="200"
                                     style="background-image: url(&quot;{{asset("/uploads/product/s-l200.webp")}}&quot;);">
                                    <div class="hl-image__background" style="opacity: 0;"></div>
                                </div>
                            </div>
                            <h3 class="hl-popular-destinations-name">Microsoft</h3></a></li>
                </ul>
            </div>
            <div class="hl-module hl-popular-destinations off-card hl-atf-module-js" id="destinations_list2">
                <div class="hl-card-header">
                    <div class="hl-card-header__header-container clearfix">
                        <div class="hl-card-header__title"><h2 class="hl-card-header__headline">Top Category</h2></div>
                    </div>
                </div>
                <ul class="hl-popular-destinations-elements">
                    <li class="hl-popular-destinations-element">
                        <a class="hl-popular-destinations-link" href="{{url("/brand")}}">
                            <div class="hl-popular-destinations-image-spacer">
                                <div class="hl-image hl-image-js js-only hl-popular-destinations-image hl-image__fill"
                                     data-size="200"
                                     style="background-image: url(&quot;{{asset("/uploads/product/s-l200.webp")}}&quot;);">
                                    <div class="hl-image__background" style="opacity: 0;"></div>
                                </div>
                            </div>
                            <h3 class="hl-popular-destinations-name">진공청소기 </h3></a></li>
                    <li class="hl-popular-destinations-element">
                        <a class="hl-popular-destinations-link" href="{{url("/brand")}}">
                            <div class="hl-popular-destinations-image-spacer">
                                <div class="hl-image hl-image-js js-only hl-popular-destinations-image hl-image__fill"
                                     data-size="200"
                                     style="background-image: url(&quot;{{asset("/uploads/product/s-l200.webp")}}&quot;);">
                                    <div class="hl-image__background" style="opacity: 0;"></div>
                                </div>
                            </div>
                            <h3 class="hl-popular-destinations-name">손목시계 </h3></a>
                    </li>
                    <li class="hl-popular-destinations-element">
                        <a class="hl-popular-destinations-link" href="{{url("/brand")}}">
                            <div class="hl-popular-destinations-image-spacer">
                                <div class="hl-image hl-image-js js-only hl-popular-destinations-image hl-image__fill"
                                     data-size="200"
                                     style="background-image: url(&quot;{{asset("/uploads/product/s-l200.webp")}}&quot;);">
                                    <div class="hl-image__background" style="opacity: 0;"></div>
                                </div>
                            </div>
                            <h3 class="hl-popular-destinations-name"> 골프채 &amp; 장비 </h3></a>
                    </li>
                    <li class="hl-popular-destinations-element">
                        <a class="hl-popular-destinations-link" href="{{url("/brand")}}">
                            <div class="hl-popular-destinations-image-spacer">
                                <div class="hl-image hl-image-js js-only hl-popular-destinations-image hl-image__fill"
                                     data-size="200"
                                     style="background-image: url(&quot;{{asset("/uploads/product/s-l200.webp")}}&quot;);">
                                    <div class="hl-image__background" style="opacity: 0;"></div>
                                </div>
                            </div>
                            <h3 class="hl-popular-destinations-name">코트 &amp; 재킷 </h3></a>
                    </li>
                    <li class="hl-popular-destinations-seperator" role="presentation"></li>
                    <li class="hl-popular-destinations-element">
                        <a class="hl-popular-destinations-link" href="{{url("/brand")}}">
                            <div class="hl-popular-destinations-image-spacer">
                                <div class="hl-image hl-image-js js-only hl-popular-destinations-image hl-image__fill"
                                     data-size="200"
                                     style="background-image: url(&quot;{{asset("/uploads/product/s-l200.webp")}}&quot;);">
                                    <div class="hl-image__background" style="opacity: 0;"></div>
                                </div>
                            </div>
                            <h3 class="hl-popular-destinations-name">스포츠화 </h3></a></li>
                    <li class="hl-popular-destinations-element">
                        <a class="hl-popular-destinations-link" href="{{url("/brand")}}">
                            <div class="hl-popular-destinations-image-spacer">
                                <div class="hl-image hl-image-js js-only hl-popular-destinations-image hl-image__fill"
                                     data-size="200"
                                     style="background-image: url(&quot;{{asset("/uploads/product/s-l200.webp")}}&quot;);">
                                    <div class="hl-image__background" style="opacity: 0;"></div>
                                </div>
                            </div>
                            <h3 class="hl-popular-destinations-name">오피스 소프트웨어 </h3></a></li>
                    <li class="hl-popular-destinations-element">
                        <a class="hl-popular-destinations-link" href="{{url("/brand")}}">
                            <div class="hl-popular-destinations-image-spacer">
                                <div class="hl-image hl-image-js js-only hl-popular-destinations-image hl-image__fill"
                                     data-size="200"
                                     style="background-image: url(&quot;{{asset("/uploads/product/s-l200.webp")}}&quot;);">
                                    <div class="hl-image__background" style="opacity: 0;"></div>
                                </div>
                            </div>
                            <h3 class="hl-popular-destinations-name">중고 음향 &amp; 영상 기기 </h3></a></li>
                </ul>
            </div>
            <div class="owl-carousel owl-theme" id="carousel4">
                <div class="item">
                    <img src="{{ asset('assets/img/parallax/photo1.jpg') }}"  alt="image1"> </div>
                <div class="item">
                    <img src="{{ asset('assets/img/parallax/photo2.jpg') }}"  alt="image2"> </div>
                <div class="item">
                    <img src="{{ asset('assets/img/parallax/photo3.jpg') }}"  alt="image3"> </div>
                <div class="item">
                    <img src="{{ asset('assets/img/parallax/photo1.jpg') }}"  alt="image4"> </div>
                <div class="item">
                    <img src="{{ asset('assets/img/parallax/photo2.jpg') }}"  alt="image5"> </div>
            </div>

            <div class="owl-carousel owl-theme" id="carousel5">
                <div class="item">
                    <img src="{{ asset('assets/img/parallax/photo1.jpg') }}"  alt="image1"> </div>
                <div class="item">
                    <img src="{{ asset('assets/img/parallax/photo2.jpg') }}"  alt="image2"> </div>
                <div class="item">
                    <img src="{{ asset('assets/img/parallax/photo3.jpg') }}"  alt="image3"> </div>
                <div class="item">
                    <img src="{{ asset('assets/img/parallax/photo1.jpg') }}"  alt="image4"> </div>
                <div class="item">
                    <img src="{{ asset('assets/img/parallax/photo2.jpg') }}"  alt="image5"> </div>
            </div>

            <div class="hl-module hl-custom-card hl-atf-module-js" id="rtm_list4">
                <div class="hl-custom-card__side-text">
                    <h2 class="hl-custom-card__headline"><a style="color:#d23608;"
                                                            href="https://svcs.ebay.com/delstats/clk/rtm?url=https%3A%2F%2Fwww.ebay.com%2Fe%2Feditors-picks%2Fgoing-fast&amp;p=100006&amp;mc=Z3VpZD00NDc2ZjYzZDE2ZDBhNGI3YjZmZWFkNmNmZmY2ZWE5Mnx1bD1lbi1VU3xidz1MQVJHRXx0ZHQ9aWlkOjYwNzI5NDUxMTI1MzE3MjczNzMsY2xraWQ6NjA3Mjk0NTExMjUzMTcyNzM3MnxwbG10PShjaWQ6MjQ0MzIgZ2JoOmNvbS5lYmF5Lm1hcmtldGluZy5ydG0uY29tcG9uZW50cy5zZWdtZW50LmdldGh1Lm1vZGVscy5TZWdtZW50QDFmOGQgaWlkOjYwNzI5NDUxMTI1MzE3MjczNzMgbWlkOjM1MjE2IHBpZDoxMDAwMDYgc2lkOi0xIHRpZDphMDIxODQ2Mi1iMmM0LTQ0NDMtYTQzZi1lNDhhNTYzYzg4M2EgdHR5cGU6SE9NRV9QQUdFX0JBTk5FUl9NU0UgdmlkOnBoYzZjcDV1dmk1eHd1b25qdzV0OTdteHpmOWRjdHZ6ZnFpdzBwOXNpZnh6ZGR2N3hvNGllODUyb2VodGRha3EpfHVjPTExMXxtPTM1MjE2fGJzPTIyNnwxMj0w&amp;_trkparms=pageci%3A7a791f14-da14-11e9-bb8d-74dbd180a863%7Cparentrq%3A4476f63416d0a4b7b6f8ca31ff99efec%7Ciid%3A1"
                                                            _sp="p2481888.m4520.l5349.c1"
                                                            data-click="{&quot;eventFamily&quot;:&quot;HOMEPAGE&quot;,&quot;eventAction&quot;:&quot;ACTN&quot;,&quot;actionKind&quot;:&quot;NAVSRC&quot;,&quot;operationId&quot;:&quot;2481888&quot;,&quot;flushImmediately&quot;:false,&quot;eventProperty&quot;:{&quot;moduledtl&quot;:&quot;mi:4520|iid:1|li:5349|luid:1|c:1&quot;,&quot;ammiid&quot;:&quot;6072945112531727373&quot;,&quot;amdata&quot;:&quot;guid=4476f63d16d0a4b7b6fead6cfff6ea92|ul=en-US|bw=LARGE|tdt=iid:6072945112531727373,clkid:6072945112531727372|plmt=(cid:24432 gbh:com.ebay.marketing.rtm.components.segment.gethu.models.Segment@1f8d iid:6072945112531727373 mid:35216 pid:100006 sid:-1 tid:a0218462-b2c4-4443-a43f-e48a563c883a ttype:HOME_PAGE_BANNER_MSE vid:phc6cp5uvi5xwuonjw5t97mxzf9dctvzfqiw0p9sifxzddv7xo4ie852oehtdakq)|uc=111|m=35216|bs=226|12=0&quot;,&quot;parentrq&quot;:&quot;4476f63416d0a4b7b6f8ca31ff99efec&quot;,&quot;pageci&quot;:&quot;7a791f14-da14-11e9-bb8d-74dbd180a863&quot;,&quot;ampid&quot;:&quot;MADRONA&quot;}}"
                                                            aria-label="T&amp;C">
                            <div style="color:#d23608;" class="ebayui-ellipsis-2"><span
                                        style="color:#d23608;">더욱 빠르게</span></div>
                        </a></h2>
                    <div class="hl-custom-card__subheadline secondary-text">
                        <div style="color:#d23608;" class="ebayui-ellipsis-2"><span style="color:#d23608;">탑 스니커즈 상품을 만나보세요.</span>
                        </div>
                    </div>
                    <div class="hl-cta hl-custom-card__see-all"
                         onfocusin="this.querySelector('.hl-cta__default-js').onmouseover()"
                         onfocusout="this.querySelector('.hl-cta__default-js').onmouseout()"><a
                                href="https://svcs.ebay.com/delstats/clk/rtm?url=https%3A%2F%2Fwww.ebay.com%2Fe%2Feditors-picks%2Fgoing-fast&amp;p=100006&amp;mc=Z3VpZD00NDc2ZjYzZDE2ZDBhNGI3YjZmZWFkNmNmZmY2ZWE5Mnx1bD1lbi1VU3xidz1MQVJHRXx0ZHQ9aWlkOjYwNzI5NDUxMTI1MzE3MjczNzMsY2xraWQ6NjA3Mjk0NTExMjUzMTcyNzM3MnxwbG10PShjaWQ6MjQ0MzIgZ2JoOmNvbS5lYmF5Lm1hcmtldGluZy5ydG0uY29tcG9uZW50cy5zZWdtZW50LmdldGh1Lm1vZGVscy5TZWdtZW50QDFmOGQgaWlkOjYwNzI5NDUxMTI1MzE3MjczNzMgbWlkOjM1MjE2IHBpZDoxMDAwMDYgc2lkOi0xIHRpZDphMDIxODQ2Mi1iMmM0LTQ0NDMtYTQzZi1lNDhhNTYzYzg4M2EgdHR5cGU6SE9NRV9QQUdFX0JBTk5FUl9NU0UgdmlkOnBoYzZjcDV1dmk1eHd1b25qdzV0OTdteHpmOWRjdHZ6ZnFpdzBwOXNpZnh6ZGR2N3hvNGllODUyb2VodGRha3EpfHVjPTExMXxtPTM1MjE2fGJzPTIyNnwxMj0w&amp;_trkparms=pageci%3A7a791f14-da14-11e9-bb8d-74dbd180a863%7Cparentrq%3A4476f63416d0a4b7b6f8ca31ff99efec%7Ciid%3A1"
                                _sp="p2481888.m4520.l5352.c1"
                                data-click="{&quot;eventFamily&quot;:&quot;HOMEPAGE&quot;,&quot;eventAction&quot;:&quot;ACTN&quot;,&quot;actionKind&quot;:&quot;NAVSRC&quot;,&quot;operationId&quot;:&quot;2481888&quot;,&quot;flushImmediately&quot;:false,&quot;eventProperty&quot;:{&quot;moduledtl&quot;:&quot;mi:4520|iid:1|li:5352|luid:1|c:1&quot;,&quot;ammiid&quot;:&quot;6072945112531727373&quot;,&quot;amdata&quot;:&quot;guid=4476f63d16d0a4b7b6fead6cfff6ea92|ul=en-US|bw=LARGE|tdt=iid:6072945112531727373,clkid:6072945112531727372|plmt=(cid:24432 gbh:com.ebay.marketing.rtm.components.segment.gethu.models.Segment@1f8d iid:6072945112531727373 mid:35216 pid:100006 sid:-1 tid:a0218462-b2c4-4443-a43f-e48a563c883a ttype:HOME_PAGE_BANNER_MSE vid:phc6cp5uvi5xwuonjw5t97mxzf9dctvzfqiw0p9sifxzddv7xo4ie852oehtdakq)|uc=111|m=35216|bs=226|12=0&quot;,&quot;parentrq&quot;:&quot;4476f63416d0a4b7b6f8ca31ff99efec&quot;,&quot;pageci&quot;:&quot;7a791f14-da14-11e9-bb8d-74dbd180a863&quot;,&quot;ampid&quot;:&quot;MADRONA&quot;}}">
                            <div class="hl-cta__text-only" style="color:#d23608;">Shop Now
                                <svg class="icon icon--arrow-right-bold hl-cta__arrow" style="fill:currentColor;"
                                     focusable="false" data-ebayui="" aria-hidden="true">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xlink:href="#icon-arrow-right-bold"></use>
                                </svg>
                            </div>
                            <div class="hl-cta__default hl-cta__default-js hl-custom-card__see-all"
                                 style="color: rgb(210, 54, 8); border-color: rgb(210, 54, 8); box-shadow: rgb(210, 54, 8) 0px 0px 0px 0px inset;"
                                 onmouseover="this.style.color='#26cfca'; this.style['border-color']='#d23608'; this.style['box-shadow']='#d23608 0 0px 0px 70px inset'; this.querySelectorAll('.hl-cta__arrow').item(0).style['stroke']='#26cfca'"
                                 onmouseout="this.style.color='#d23608'; this.style['border-color']='#d23608'; this.style['box-shadow']='#d23608 0 0px 0px 0px inset'; this.querySelectorAll('.hl-cta__arrow').item(0).style['stroke']='#d23608'">
                                Shop Now
                                <svg class="icon icon--arrow-right-bold hl-cta__arrow"
                                     style="fill: currentcolor; stroke: rgb(210, 54, 8);" focusable="false"
                                     data-ebayui="" aria-hidden="true">
                                    <defs></defs>
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xlink:href="#icon-arrow-right-bold"></use>
                                </svg>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="hl-custom-card__image-container">
                    <div id = "carousel6">
                        <div class="item">
                            <img src="{{ asset('assets/img/parallax/photo1.jpg') }}"  alt="image1"> </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/parallax/photo2.jpg') }}"  alt="image2"> </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/parallax/photo3.jpg') }}"  alt="image3"> </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/parallax/photo1.jpg') }}"  alt="image4"> </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/parallax/photo2.jpg') }}"  alt="image5"> </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@stop
{{-- footer scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.circliful.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/slick/slick.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/index.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/js/common.js') }}"></script>
    <!--page level js ends-->
@stop
