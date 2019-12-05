@extends('layouts/default')

{{-- Page title --}}
@section('title')
Deals
@parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/globaldeals.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/tabbular.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/jquery.circliful.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl_carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl_carousel/css/owl.theme.css') }}">
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
        <div class="navigation-desktop">
            <h1><a href="{{url("/globaldeals")}}">Deals</a></h1>
            <nav role="tablist">
                <ul class="ebayui-refit-nav-ul" role="menubar">
                    <li class="selected navigation-desktop-with-flyout" role="menu" aria-label="Featured Current View">
                        <a class="navigation-desktop-menu-link" href="{{url("/globaldeals")}}" id="nav_164137"><span>Featured</span></a>
                        <button class="navigation-desktop-menu-linkexp" aria-disabled="false">Expand Featured</button>
                        <div class="navigation-desktop-flyout navigation-desktop-flyout-col2" style="">
                            <div class="navigation-desktop-flyout-col">
                                <a href="{{url("/globaldeals")}}#more-featured-deals" class="navigation-desktop-flyout-link" aria-describedby="nav_164137">
                                    More Featured Deals</a>
                                <a href="{{url("/globaldeals")}}#the-best-of-tech" class="navigation-desktop-flyout-link"
                                                         aria-describedby="nav_164137">The Best of Tech</a>
                                <a href="{{url("/globaldeals")}}#best-of-home-garden"
                                        class="navigation-desktop-flyout-link" aria-describedby="nav_164137">
                                    Best of Home &amp; Garden</a>
                                <a href="{{url("/globaldeals")}}#puma-styles-under-50"
                                                            class="navigation-desktop-flyout-link"
                                                            aria-describedby="nav_164137">Puma Styles Under $50</a>
                                <a href="{{url("/globaldeals")}}#save-big-on-your-favorite-natural-products"
                                        class="navigation-desktop-flyout-link" aria-describedby="nav_164137">Save Big on
                                    Your Favorite Natural Products</a>
                            </div>
                            <div class="navigation-desktop-flyout-col">
                                <a href="{{url("/globaldeals")}}#top-steals-in-tech"
                                        class="navigation-desktop-flyout-link">Top Steals in Tech</a>
                                <a href="{{url("/globaldeals")}}#fashion-finds-up-to-70-off"
                                        class="navigation-desktop-flyout-link">Fashion Finds Up to 70% Off</a>
                                <a href="{{url("/globaldeals")}}#best-of-sporting-goods"
                                        class="navigation-desktop-flyout-link">Best of Sporting Goods</a>
                                <a href="{{url("/globaldeals")}}#best-of-motors"
                                        class="navigation-desktop-flyout-link">Best of Motors</a>
                                <a href="{{url("/globaldeals")}}#best-of-health-beauty"
                                        class="navigation-desktop-flyout-link">Best of Health &amp; Beauty</a>
                            </div>
                        </div>
                    </li>
                    <li role="menu" aria-label="Tech" class="navigation-desktop-with-flyout">
                        <a class="navigation-desktop-menu-link" href="{{url("/globaldeals")}}"><span>Tech</span></a>
                        <button class="navigation-desktop-menu-linkexp" aria-disabled="false">Expand Tech</button>
                        <div class="navigation-desktop-flyout navigation-desktop-flyout-col2" style="">
                            <div class="navigation-desktop-flyout-col"><a
                                        href="{{url("/globaldeals")}}/tech/cell-phones"
                                        class="navigation-desktop-flyout-link" aria-describedby="nav_164138">Cell
                                    Phones</a><a href="{{url("/globaldeals")}}/tech/laptops-netbooks"
                                                 class="navigation-desktop-flyout-link" aria-describedby="nav_164138">Laptops
                                    &amp; Netbooks</a><a href="{{url("/globaldeals")}}/tech/tv-video-home-audio"
                                                         class="navigation-desktop-flyout-link"
                                                         aria-describedby="nav_164138">TV, Video &amp; Home Audio</a><a
                                        href="{{url("/globaldeals")}}/tech/cameras-photo"
                                        class="navigation-desktop-flyout-link" aria-describedby="nav_164138">Cameras
                                    &amp; Photo</a><a href="{{url("/globaldeals")}}/tech/video-games-consoles"
                                                      class="navigation-desktop-flyout-link"
                                                      aria-describedby="nav_164138">Video Games &amp; Consoles</a></div>
                            <div class="navigation-desktop-flyout-col"><a
                                        href="{{url("/globaldeals")}}/tech/ipads-tablets-ereaders"
                                        class="navigation-desktop-flyout-link">iPads, Tablets &amp; eReaders</a><a
                                        href="{{url("/globaldeals")}}/tech/phone-cases-accessories"
                                        class="navigation-desktop-flyout-link">Phone Cases &amp; Accessories</a><a
                                        href="{{url("/globaldeals")}}/tech/memory-drives-storage"
                                        class="navigation-desktop-flyout-link">Memory Drives &amp; Storage</a><a
                                        href="{{url("/globaldeals")}}/tech/headphones-portable-audio"
                                        class="navigation-desktop-flyout-link">Headphones &amp; Portable Audio</a><a
                                        href="{{url("/globaldeals")}}/tech/printers-printer-supplies"
                                        class="navigation-desktop-flyout-link">Printers &amp; Printer Supplies</a></div>
                            <a class="navigation-desktop-flyout-viewall" href="{{url("/globaldeals")}}/tech"><span>See All Tech</span><i
                                        class="icon-deals-caret"></i></a></div>
                    </li>
                    <li role="menu" aria-label="Fashion" class="navigation-desktop-with-flyout"><a
                                class="navigation-desktop-menu-link" href="{{url("/globaldeals")}}"
                                id="nav_164139"><span>Fashion</span></a>
                        <button class="navigation-desktop-menu-linkexp" aria-disabled="false">Expand Fashion</button>
                        <div class="navigation-desktop-flyout navigation-desktop-flyout-col2" style="">
                            <div class="navigation-desktop-flyout-col"><a
                                        href="{{url("/globaldeals")}}/fashion/mens-shoes"
                                        class="navigation-desktop-flyout-link" aria-describedby="nav_164139">Men's
                                    Shoes</a><a href="{{url("/globaldeals")}}/fashion/womens-shoes"
                                                class="navigation-desktop-flyout-link" aria-describedby="nav_164139">Women's
                                    Shoes</a><a href="{{url("/globaldeals")}}/fashion/watches"
                                                class="navigation-desktop-flyout-link" aria-describedby="nav_164139">Watches</a><a
                                        href="{{url("/globaldeals")}}/fashion/mens-clothing"
                                        class="navigation-desktop-flyout-link" aria-describedby="nav_164139">Men's
                                    Clothing</a><a href="{{url("/globaldeals")}}/fashion/womens-clothing"
                                                   class="navigation-desktop-flyout-link" aria-describedby="nav_164139">Women's
                                    Clothing</a></div>
                            <div class="navigation-desktop-flyout-col"><a
                                        href="{{url("/globaldeals")}}/fashion/handbags-and-accessories"
                                        class="navigation-desktop-flyout-link">Handbags and accessories</a><a
                                        href="{{url("/globaldeals")}}/fashion/mens-accessories"
                                        class="navigation-desktop-flyout-link">Men's accessories</a><a
                                        href="{{url("/globaldeals")}}/fashion/fine-jewelry"
                                        class="navigation-desktop-flyout-link">Fine Jewelry</a><a
                                        href="{{url("/globaldeals")}}/fashion/beauty"
                                        class="navigation-desktop-flyout-link">Beauty</a><a
                                        href="{{url("/globaldeals")}}/fashion/health"
                                        class="navigation-desktop-flyout-link">Health</a></div>
                            <a class="navigation-desktop-flyout-viewall"
                               href="{{url("/globaldeals")}}/fashion"><span>See All Fashion</span><i
                                        class="icon-deals-caret"></i></a></div>
                    </li>
                    <li role="menu" aria-label="Home &amp; Garden" class="navigation-desktop-with-flyout"><a
                                class="navigation-desktop-menu-link" href="{{url("/globaldeals")}}"
                                id="nav_164140"><span>Home &amp; Garden</span></a>
                        <button class="navigation-desktop-menu-linkexp" aria-disabled="false">Expand Home &amp; Garden
                        </button>
                        <div class="navigation-desktop-flyout navigation-desktop-flyout-col2" style="">
                            <div class="navigation-desktop-flyout-col"><a
                                        href="{{url("/globaldeals")}}/home-garden/kitchen-dining-bar"
                                        class="navigation-desktop-flyout-link" aria-describedby="nav_164140">Kitchen,
                                    Dining &amp; Bar</a><a href="{{url("/globaldeals")}}/home-garden/tools"
                                                           class="navigation-desktop-flyout-link"
                                                           aria-describedby="nav_164140">Tools</a><a
                                        href="{{url("/globaldeals")}}/home-garden/heating-cooling-air"
                                        class="navigation-desktop-flyout-link" aria-describedby="nav_164140">Heating,
                                    Cooling &amp; Air</a><a href="{{url("/globaldeals")}}/home-garden/vacuums"
                                                            class="navigation-desktop-flyout-link"
                                                            aria-describedby="nav_164140">Vacuums</a><a
                                        href="{{url("/globaldeals")}}/home-garden/major-appliances"
                                        class="navigation-desktop-flyout-link" aria-describedby="nav_164140">Major
                                    Appliances</a></div>
                            <div class="navigation-desktop-flyout-col"><a
                                        href="{{url("/globaldeals")}}/home-garden/yard-garden-outdoor-living"
                                        class="navigation-desktop-flyout-link">Yard, Garden &amp; Outdoor Living</a><a
                                        href="{{url("/globaldeals")}}/home-garden/bedding"
                                        class="navigation-desktop-flyout-link">Bedding</a><a
                                        href="{{url("/globaldeals")}}/home-garden/pet-supplies"
                                        class="navigation-desktop-flyout-link">Pet Supplies</a><a
                                        href="{{url("/globaldeals")}}/home-garden/crafts"
                                        class="navigation-desktop-flyout-link">Crafts</a><a
                                        href="{{url("/globaldeals")}}/home-garden/baby"
                                        class="navigation-desktop-flyout-link">Baby</a></div>
                            <a class="navigation-desktop-flyout-viewall"
                               href="{{url("/globaldeals")}}/home-garden"><span>See All Home &amp; Garden</span><i
                                        class="icon-deals-caret"></i></a></div>
                    </li>
                    <li role="menu" aria-label="Sporting Goods" class="navigation-desktop-with-flyout"><a
                                class="navigation-desktop-menu-link" href="{{url("/globaldeals")}}"
                                id="nav_164141"><span>Sporting Goods</span></a>
                        <button class="navigation-desktop-menu-linkexp" aria-disabled="false">Expand Sporting Goods
                        </button>
                        <div class="navigation-desktop-flyout navigation-desktop-flyout-col2" style="">
                            <div class="navigation-desktop-flyout-col"><a
                                        href="{{url("/globaldeals")}}/sporting-goods/hunting"
                                        class="navigation-desktop-flyout-link" aria-describedby="nav_164141">Hunting</a><a
                                        href="{{url("/globaldeals")}}/sporting-goods/golf"
                                        class="navigation-desktop-flyout-link" aria-describedby="nav_164141">Golf</a><a
                                        href="{{url("/globaldeals")}}/sporting-goods/cycling"
                                        class="navigation-desktop-flyout-link" aria-describedby="nav_164141">Cycling</a><a
                                        href="{{url("/globaldeals")}}/sporting-goods/winter-sports"
                                        class="navigation-desktop-flyout-link" aria-describedby="nav_164141">Winter
                                    Sports</a><a href="{{url("/globaldeals")}}/sporting-goods/archery"
                                                 class="navigation-desktop-flyout-link" aria-describedby="nav_164141">Archery</a>
                            </div>
                            <div class="navigation-desktop-flyout-col"><a
                                        href="{{url("/globaldeals")}}/sporting-goods/camping-hiking"
                                        class="navigation-desktop-flyout-link">Camping &amp; Hiking</a><a
                                        href="{{url("/globaldeals")}}/sporting-goods/equestrian"
                                        class="navigation-desktop-flyout-link">Equestrian</a><a
                                        href="{{url("/globaldeals")}}/sporting-goods/exercise-fitness"
                                        class="navigation-desktop-flyout-link">Exercise &amp; Fitness</a><a
                                        href="{{url("/globaldeals")}}/sporting-goods/fishing"
                                        class="navigation-desktop-flyout-link">Fishing</a><a
                                        href="{{url("/globaldeals")}}/sporting-goods/water-sports"
                                        class="navigation-desktop-flyout-link">Water Sports</a></div>
                            <a class="navigation-desktop-flyout-viewall"
                               href="{{url("/globaldeals")}}/sporting-goods"><span>See All Sporting Goods</span><i
                                        class="icon-deals-caret"></i></a></div>
                    </li>
                    <li role="menu" aria-label="Automotive" class="navigation-desktop-with-flyout open-left"><a
                                class="navigation-desktop-menu-link" href="{{url("/globaldeals")}}"
                                id="nav_164142"><span>Automotive</span></a>
                        <button class="navigation-desktop-menu-linkexp" aria-disabled="false">Expand Automotive</button>
                        <div class="navigation-desktop-flyout navigation-desktop-flyout-col2" style="">
                            <div class="navigation-desktop-flyout-col"><a
                                        href="{{url("/globaldeals")}}/automotive/automotive-tools"
                                        class="navigation-desktop-flyout-link" aria-describedby="nav_164142">Automotive
                                    Tools</a><a href="{{url("/globaldeals")}}/automotive/garage-shop-equipment"
                                                class="navigation-desktop-flyout-link" aria-describedby="nav_164142">Garage
                                    &amp; Shop Equipment</a><a
                                        href="{{url("/globaldeals")}}/automotive/car-care-essentials"
                                        class="navigation-desktop-flyout-link" aria-describedby="nav_164142">Car Care
                                    Essentials</a><a
                                        href="{{url("/globaldeals")}}/automotive/performance-custom-parts"
                                        class="navigation-desktop-flyout-link" aria-describedby="nav_164142">Performance
                                    &amp; Custom Parts</a><a
                                        href="{{url("/globaldeals")}}/automotive/car-accessories"
                                        class="navigation-desktop-flyout-link" aria-describedby="nav_164142">Car
                                    Accessories</a></div>
                            <div class="navigation-desktop-flyout-col"><a
                                        href="{{url("/globaldeals")}}/automotive/truck-accessories"
                                        class="navigation-desktop-flyout-link">Truck Accessories</a><a
                                        href="{{url("/globaldeals")}}/automotive/motorcycle-parts"
                                        class="navigation-desktop-flyout-link">Motorcycle Parts</a><a
                                        href="{{url("/globaldeals")}}/automotive/tires-wheels"
                                        class="navigation-desktop-flyout-link">Tires &amp; Wheels</a><a
                                        href="{{url("/globaldeals")}}/automotive/atv-sxs-utv-parts"
                                        class="navigation-desktop-flyout-link">ATV, SXS &amp; UTV Parts</a><a
                                        href="{{url("/globaldeals")}}/automotive/apparel-merchandise"
                                        class="navigation-desktop-flyout-link">Apparel &amp; Merchandise</a></div>
                            <a class="navigation-desktop-flyout-viewall"
                               href="{{url("/globaldeals")}}/automotive"><span>See All Automotive</span><i
                                        class="icon-deals-caret"></i></a></div>
                    </li>
                    <li role="menu" aria-label="Other Deals" class="navigation-desktop-with-flyout open-left"><a
                                class="navigation-desktop-menu-link" href="{{url("/globaldeals")}}"
                                id="nav_164143"><span>Other Deals</span></a>
                        <button class="navigation-desktop-menu-linkexp" aria-disabled="false">Expand Other Deals
                        </button>
                        <div class="navigation-desktop-flyout navigation-desktop-flyout-col2" style="">
                            <div class="navigation-desktop-flyout-col"><a
                                        href="{{url("/globaldeals")}}/other-deals/toys"
                                        class="navigation-desktop-flyout-link" aria-describedby="nav_164143">Toys</a><a
                                        href="{{url("/globaldeals")}}/other-deals/coins"
                                        class="navigation-desktop-flyout-link" aria-describedby="nav_164143">Coins</a><a
                                        href="{{url("/globaldeals")}}/other-deals/collectibles"
                                        class="navigation-desktop-flyout-link" aria-describedby="nav_164143">Collectibles</a><a
                                        href="{{url("/globaldeals")}}/other-deals/gift-cards"
                                        class="navigation-desktop-flyout-link" aria-describedby="nav_164143">Gift
                                    Cards</a><a href="{{url("/globaldeals")}}/other-deals/music-gear"
                                                class="navigation-desktop-flyout-link" aria-describedby="nav_164143">Music
                                    &amp; Gear</a></div>
                            <div class="navigation-desktop-flyout-col"><a
                                        href="{{url("/globaldeals")}}/other-deals/luggage-travel"
                                        class="navigation-desktop-flyout-link">Luggage &amp; Travel</a><a
                                        href="{{url("/globaldeals")}}/other-deals/sports-fan-shop"
                                        class="navigation-desktop-flyout-link">Sports Fan Shop</a><a
                                        href="{{url("/globaldeals")}}/other-deals/dvds-movies"
                                        class="navigation-desktop-flyout-link">DVDs &amp; Movies</a><a
                                        href="{{url("/globaldeals")}}/other-deals/packing-shipping"
                                        class="navigation-desktop-flyout-link">Packing &amp; Shipping</a><a
                                        href="{{url("/globaldeals")}}/other-deals/office-furniture-supplies"
                                        class="navigation-desktop-flyout-link">Office Furniture &amp; Supplies</a></div>
                            <a class="navigation-desktop-flyout-viewall"
                               href="{{url("/globaldeals")}}/other-deals"><span>See All Other Deals</span><i
                                        class="icon-deals-caret"></i></a></div>
                    </li>
                    <li role="menu" aria-label="Sales &amp; Events"><a class="navigation-desktop-menu-link"
                                                                       href="{{url("/globaldeals")}}"
                                                                       id="nav_164144"><span>Sales &amp; Events</span></a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="sections-container">
            <div class="ebayui-dne-featured-card ebayui-dne-featured-with-padding">
                <div class="ebayui-dne-summary-card card ebayui-dne-item-featured-card--topDeals ebayui-dne-featured-with-carousel">
                    <h2><span>Spotlight Deal</span></h2>
                    <div class="ebayui-dne-summary-card__wrapper">
                        <div class="dne-itemtile dne-itemtile-xlarge" itemscope="itemscope"
                             data-listing-id="232422807292" itemtype="https://schema.org/Product">
                            <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                <div class="slashui-image-cntr"><img
                                            src="{{asset("/uploads")}}/product/s-l400.jpg"
                                            alt="VERA WANG Men 3.4 oz EDT eau de toilette Spray Cologne Tester 100 ml New 3.3">
                                </div>
                            </div>
                            <div class="dne-itemtile-detail" role="text">
                                <h3 class="dne-itemtile-title ellipse-3"title="VERA WANG Men 3.4 oz EDT eau de toilette Spray Cologne Tester 100 ml New 3.3">
                                    <a href="#"
                                       itemprop="url"><span class="ebayui-ellipsis-3" itemprop="name">VERA WANG Men 3.4 oz EDT eau de toilette Spray Cologne Tester 100 ml New 3.3</span></a>
                                </h3>
                                <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                     class="dne-itemtile-price">
                                    <meta itemprop="priceCurrency" content="USD">
                                    <span itemprop="price" class="first">US $17.99</span><span itemprop="availability"
                                                                                               content="https://schema.org/InStock"></span>
                                </div>
                                <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                     class="itemtile-price-strikethrough">US $85.00 </span><span
                                                class="aria-hide">Previous price: US $85.00</span><span
                                                class="itemtile-price-default">| </span><span
                                                class="itemtile-price-bold">78% off</span></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ebayui-dne-carousel filmstrip-centered ebayui-dne-carousel ebayui-dne-trending-widget filmstrip-1"
                     _sp="p2344380.m3266.l5"><h2 class="ebayui-dne-carousel-heading" role="link"
                                                 aria-label="Trending Deals - carousel" aria-disabled="false"><span>Trending Deals</span><a
                                href="{{url("/globaldeals")}}/trending/all" aria-disabled="">See all trending
                            deals</a></h2>
                    <button class="ebayui-dne-carousel-prev icon-deals-left-arrow"
                            aria-label="Trending Deals - Move Previous" aria-disabled="true"
                            disabled="disabled"></button>
                    <div class="carousel-container">
                        <ul style="transition: transform 0.4s ease-out 0s; transform: translate3d(0%, 0px, 0px);">
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="202481171334" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s-l300.jpg"
                                                    alt="Nautica Classic Cologne by Nautica, 3.4 oz EDT Spray for Men NEW">
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="Nautica Classic Cologne by Nautica, 3.4 oz EDT Spray for Men NEW">
                                            <a href="#"
                                               itemprop="url" tabindex="0" aria-disabled="false"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">Nautica Classic Cologne by Nautica, 3.4 oz EDT Spray for Men NEW</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $8.73</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="0"
                                                    aria-disabled="false">See all trending deals</a></div>
                                        <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                             class="itemtile-price-strikethrough">US $65.00 </span><span
                                                        class="aria-hide">Previous price: US $65.00</span><span
                                                        class="itemtile-price-default">| </span><span
                                                        class="itemtile-price-bold">86% off</span></span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="401124134917" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s-l300(1).jpg"
                                                    alt="Alpine Swiss Mens Flip Flops Beach Sandals Lightweight EVA Sole Comfort Thongs">
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="Alpine Swiss Mens Flip Flops Beach Sandals Lightweight EVA Sole Comfort Thongs">
                                            <a href="/itm/Alpine-Swiss-Mens-Flip-Flops-Beach-Sandals-Lightweight-EVA-Sole-Comfort-Thongs/401124134917?_trkparms=5373%3A0%7C5374%3AFeatured"
                                               itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">Alpine Swiss Mens Flip Flops Beach Sandals Lightweight EVA Sole Comfort Thongs</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $7.99</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                             class="itemtile-price-strikethrough">US $18.50 </span><span
                                                        class="aria-hide">Previous price: US $18.50</span><span
                                                        class="itemtile-price-default">| </span><span
                                                        class="itemtile-price-bold">56% off</span></span></div>
                                        <span><a href="/itm/Alpine-Swiss-Mens-Flip-Flops-Beach-Sandals-Lightweight-EVA-Sole-Comfort-Thongs/401124134917?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                 class="dne-itemtile-more-options" target="" tabindex="-1"
                                                 aria-disabled="true">More options</a></span></div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="193050492969" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s-l300(2).jpg"
                                                    alt="zTech Over the Ear Wireless Bluetooth Headphones "></div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="zTech Over the Ear Wireless Bluetooth Headphones"><a
                                                    href="/itm/zTech-Over-the-Ear-Wireless-Bluetooth-Headphones/193050492969?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                    itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">zTech Over the Ear Wireless Bluetooth Headphones</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $9.99</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                             class="itemtile-price-strikethrough">US $59.99 </span><span
                                                        class="aria-hide">Previous price: US $59.99</span><span
                                                        class="itemtile-price-default">| </span><span
                                                        class="itemtile-price-bold">83% off</span></span></div>
                                        <span><a href="/itm/zTech-Over-the-Ear-Wireless-Bluetooth-Headphones/193050492969?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                 class="dne-itemtile-more-options" target="" tabindex="-1"
                                                 aria-disabled="true">More options</a></span></div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="162740679540" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s-l300(3).jpg"
                                                    alt="iTD Gear Wall Outlet Coverplate w/ LED Night Lights (Auto on/off)">
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="iTD Gear Wall Outlet Coverplate w/ LED Night Lights (Auto on/off)">
                                            <a href="/itm/iTD-Gear-Wall-Outlet-Coverplate-w-LED-Night-Lights-Auto-on-off/162740679540?_trkparms=5373%3A0%7C5374%3AFeatured"
                                               itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">iTD Gear Wall Outlet Coverplate w/ LED Night Lights (Auto on/off)</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $2.38</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                             class="itemtile-price-strikethrough">US $2.88 </span><span
                                                        class="aria-hide">Previous price: US $2.88</span><span
                                                        class="itemtile-price-default">| </span><span
                                                        class="itemtile-price-bold">17% off</span></span></div>
                                        <span><span class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                    </div>
                                    <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="302390570943" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s-l300(4).jpg"
                                                    alt="3 x Tactical 18650 Flashlight Ultrafire T6 High Powered 5Modes Zoomable Aluminum">
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="3 x Tactical 18650 Flashlight Ultrafire T6 High Powered 5Modes Zoomable Aluminum">
                                            <a href="/itm/3-x-Tactical-18650-Flashlight-Ultrafire-T6-High-Powered-5Modes-Zoomable-Aluminum/302390570943?_trkparms=5373%3A0%7C5374%3AFeatured"
                                               itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">3 x Tactical 18650 Flashlight Ultrafire T6 High Powered 5Modes Zoomable Aluminum</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $9.95</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="223028500328" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s-l300(5).jpg"
                                                    alt="OEM iPhone 6 6s 7 8 Plus Lcd Accembly Digitizer Complete Set Screen Replacement ">
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="OEM iPhone 6 6s 7 8 Plus Lcd Accembly Digitizer Complete Set Screen Replacement">
                                            <a href="/itm/OEM-iPhone-6-6s-7-8-Plus-Lcd-Accembly-Digitizer-Complete-Set-Screen-Replacement/223028500328?_trkparms=5373%3A0%7C5374%3AFeatured"
                                               itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">OEM iPhone 6 6s 7 8 Plus Lcd Accembly Digitizer Complete Set Screen Replacement</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $9.99</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <span><a href="/itm/OEM-iPhone-6-6s-7-8-Plus-Lcd-Accembly-Digitizer-Complete-Set-Screen-Replacement/223028500328?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                 class="dne-itemtile-more-options" target="" tabindex="-1"
                                                 aria-disabled="true">More options</a></span></div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="392108708270" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s-l300(6).jpg"
                                                    alt="Silicone Sport Band Strap for Apple Watch iWatch Series 4 3 2 1 38/40mm 42/44mm">
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="Silicone Sport Band Strap for Apple Watch iWatch Series 4 3 2 1 38/40mm 42/44mm">
                                            <a href="/itm/Silicone-Sport-Band-Strap-for-Apple-Watch-iWatch-Series-4-3-2-1-38-40mm-42-44mm/392108708270?_trkparms=5373%3A0%7C5374%3AFeatured"
                                               itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">Silicone Sport Band Strap for Apple Watch iWatch Series 4 3 2 1 38/40mm 42/44mm</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $3.99</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <span><a href="/itm/Silicone-Sport-Band-Strap-for-Apple-Watch-iWatch-Series-4-3-2-1-38-40mm-42-44mm/392108708270?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                 class="dne-itemtile-more-options" target="" tabindex="-1"
                                                 aria-disabled="true">More options</a></span></div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="153309513311" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s-l300(7).jpg"
                                                    alt="Hybrid Shockproof Thin Clear TPU Bumper Case Fits iPhone X 6 7 8 Plus XR XS MAX">
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="Hybrid Shockproof Thin Clear TPU Bumper Case Fits iPhone X 6 7 8 Plus XR XS MAX">
                                            <a href="/itm/Hybrid-Shockproof-Thin-Clear-TPU-Case-Fits-iPhone-11-Pro-X-6-7-8-Plus-XR-XS-MAX/153309513311?_trkparms=5373%3A0%7C5374%3AFeatured"
                                               itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">Hybrid Shockproof Thin Clear TPU Bumper Case Fits iPhone X 6 7 8 Plus XR XS MAX</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $5.97</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <span><a href="/itm/Hybrid-Shockproof-Thin-Clear-TPU-Case-Fits-iPhone-11-Pro-X-6-7-8-Plus-XR-XS-MAX/153309513311?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                 class="dne-itemtile-more-options" target="" tabindex="-1"
                                                 aria-disabled="true">More options</a></span></div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="133123498020" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                    alt="Nautica Mens V-Neck Short Sleeve T-Shirt" data-comp="lazyload"
                                                    >
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="Nautica Mens V-Neck Short Sleeve T-Shirt"><a
                                                    href="/itm/Nautica-Mens-V-Neck-Short-Sleeve-T-Shirt/133123498020?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                    itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">Nautica Mens V-Neck Short Sleeve T-Shirt</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $11.99</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                             class="itemtile-price-strikethrough">US $19.50 </span><span
                                                        class="aria-hide">Previous price: US $19.50</span><span
                                                        class="itemtile-price-default">| </span><span
                                                        class="itemtile-price-bold">38% off</span></span></div>
                                        <span><a href="/itm/Nautica-Mens-V-Neck-Short-Sleeve-T-Shirt/133123498020?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                 class="dne-itemtile-more-options" target="" tabindex="-1"
                                                 aria-disabled="true">More options</a></span></div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="391920245175" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                    alt="Qi Wireless Charger Charging Pad for iPhone XS/Max/XR/8/X Galaxy Note 9/10/S10 +"
                                                    data-comp="lazyload"
                                                    data-config-src="{{asset("/uploads")}}/product/s-l300.jpg">
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="Qi Wireless Charger Charging Pad for iPhone XS/Max/XR/8/X Galaxy Note 9/10/S10 +">
                                            <a href="/itm/Qi-Wireless-Charger-Charging-Pad-for-iPhone-11-Pro-Max-XS-8-Galaxy-Note-10-S10/391920245175?_trkparms=5373%3A0%7C5374%3AFeatured"
                                               itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">Qi Wireless Charger Charging Pad for iPhone XS/Max/XR/8/X Galaxy Note 9/10/S10 +</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $6.49</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                             class="itemtile-price-strikethrough">US $19.99 </span><span
                                                        class="aria-hide">Previous price: US $19.99</span><span
                                                        class="itemtile-price-default">| </span><span
                                                        class="itemtile-price-bold">67% off</span></span></div>
                                        <span><a href="/itm/Qi-Wireless-Charger-Charging-Pad-for-iPhone-11-Pro-Max-XS-8-Galaxy-Note-10-S10/391920245175?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                 class="dne-itemtile-more-options" target="" tabindex="-1"
                                                 aria-disabled="true">More options</a></span></div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="293204501948" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr">
                                            <img src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                    alt="Adidas Golf Men's Ultimate 2.0 All Day Polo Shirt, New">
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="Adidas Golf Men's Ultimate 2.0 All Day Polo Shirt, New"><a
                                                    href="/itm/Adidas-Golf-Mens-Ultimate-2-0-All-Day-Polo-Shirt-New/293204501948?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                    itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">Adidas Golf Men's Ultimate 2.0 All Day Polo Shirt, New</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $17.59</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                             class="itemtile-price-strikethrough">US $65.00 </span><span
                                                        class="aria-hide">Previous price: US $65.00</span><span
                                                        class="itemtile-price-default">| </span><span
                                                        class="itemtile-price-bold">72% off</span></span></div>
                                        <span><a href="/itm/Adidas-Golf-Mens-Ultimate-2-0-All-Day-Polo-Shirt-New/293204501948?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                 class="dne-itemtile-more-options" target="" tabindex="-1"
                                                 aria-disabled="true">More options</a></span></div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="202131538733" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr">
                                            <img src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                    alt="For iPhone X XS 8 7 6 Plus 5 Case Silicone Crystal Clear Bumper Gel Soft Cover">
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="For iPhone X XS 8 7 6 Plus 5 Case Silicone Crystal Clear Bumper Gel Soft Cover">
                                            <a href="/itm/For-iPhone-X-XS-8-7-6-Plus-5-Case-Silicone-Crystal-Clear-Bumper-Gel-Soft-Cover/202131538733?_trkparms=5373%3A0%7C5374%3AFeatured"
                                               itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">For iPhone X XS 8 7 6 Plus 5 Case Silicone Crystal Clear Bumper Gel Soft Cover</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $1.99</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <span><a href="/itm/For-iPhone-X-XS-8-7-6-Plus-5-Case-Silicone-Crystal-Clear-Bumper-Gel-Soft-Cover/202131538733?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                 class="dne-itemtile-more-options" target="" tabindex="-1"
                                                 aria-disabled="true">More options</a></span></div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="333178477117" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr">
                                            <img src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                    alt="Solar Powered 30 LED String Light Garden Path Yard Decor Lamp Outdoor Waterproof">
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text">
                                        <h3 class="dne-itemtile-title ellipse-2"
                                                title="Solar Powered 30 LED String Light Garden Path Yard Decor Lamp Outdoor Waterproof">
                                            <a href="/itm/Solar-Powered-30-LED-String-Light-Garden-Path-Yard-Decor-Lamp-Outdoor-Waterproof/333178477117?_trkparms=5373%3A0%7C5374%3AFeatured"
                                               itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">Solar Powered 30 LED String Light Garden Path Yard Decor Lamp Outdoor Waterproof</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $9.95</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="223273993366" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                    alt="DEWALT DCD996B 20V 20 Volt Lithium Ion  Brushless 1/2&quot; Hammer Drill New DCD995B"
                                                    >
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="DEWALT DCD996B 20V 20 Volt Lithium Ion  Brushless 1/2&quot; Hammer Drill New DCD995B">
                                            <a href="/itm/DEWALT-DCD996B-20V-20-Volt-Lithium-Ion-Brushless-1-2-Hammer-Drill-New-DCD995B/223273993366?_trkparms=5373%3A0%7C5374%3AFeatured"
                                               itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">DEWALT DCD996B 20V 20 Volt Lithium Ion  Brushless 1/2" Hammer Drill New DCD995B</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $78.99</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                             class="itemtile-price-strikethrough">US $149.99 </span><span
                                                        class="aria-hide">Previous price: US $149.99</span><span
                                                        class="itemtile-price-default">| </span><span
                                                        class="itemtile-price-bold">47% off</span></span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="301991398787" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                    alt="BlueDri ONE-29 Air Mover Carpet Dryer Floor Blower Fan High CFM Low Amps, Blue"
                                                    >
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="BlueDri ONE-29 Air Mover Carpet Dryer Floor Blower Fan High CFM Low Amps, Blue">
                                            <a href="/itm/BlueDri-ONE-29-Air-Mover-Carpet-Dryer-Floor-Blower-Fan-High-CFM-Low-Amps-Blue/301991398787?_trkparms=5373%3A0%7C5374%3AFeatured"
                                               itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">BlueDri ONE-29 Air Mover Carpet Dryer Floor Blower Fan High CFM Low Amps, Blue</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $106.95</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                             class="itemtile-price-strikethrough">US $149.00 </span><span
                                                        class="aria-hide">Previous price: US $149.00</span><span
                                                        class="itemtile-price-default">| </span><span
                                                        class="itemtile-price-bold">28% off</span></span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="401421706770" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                    alt="For Fitbit Charge 2 Strap Replacement Silicone Watch Band Fitness Wristband"
                                                    >
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="For Fitbit Charge 2 Strap Replacement Silicone Watch Band Fitness Wristband">
                                            <a href="/itm/For-Fitbit-Charge-2-Strap-Replacement-Silicone-Watch-Band-Fitness-Wristband/401421706770?_trkparms=5373%3A0%7C5374%3AFeatured"
                                               itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">For Fitbit Charge 2 Strap Replacement Silicone Watch Band Fitness Wristband</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $3.29</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                             class="itemtile-price-strikethrough">US $5.99 </span><span
                                                        class="aria-hide">Previous price: US $5.99</span><span
                                                        class="itemtile-price-default">| </span><span
                                                        class="itemtile-price-bold">45% off</span></span></div>
                                        <span><a href="/itm/For-Fitbit-Charge-2-Strap-Replacement-Silicone-Watch-Band-Fitness-Wristband/401421706770?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                 class="dne-itemtile-more-options" target="" tabindex="-1"
                                                 aria-disabled="true">More options</a></span></div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="323826399384" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                    alt="Mens Superdry Tshirts Selection - Various Styles &amp; Colours 220519"
                                                    >
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="Mens Superdry Tshirts Selection - Various Styles &amp; Colours 220519">
                                            <a href="/itm/Mens-Superdry-Tshirts-Selection-Various-Styles-Colours-220519/323826399384?_trkparms=5373%3A0%7C5374%3AFeatured"
                                               itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">Mens Superdry Tshirts Selection - Various Styles &amp; Colours 220519</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $13.34</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <span><a href="/itm/Mens-Superdry-Tshirts-Selection-Various-Styles-Colours-220519/323826399384?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                 class="dne-itemtile-more-options" target="" tabindex="-1"
                                                 aria-disabled="true">More options</a></span></div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="401798534910" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                    alt="Bluetooth Wireless Headphones Headsets Earphone Neckband Earbuds with Mic USA"
                                                    >
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="Bluetooth Wireless Headphones Headsets Earphone Neckband Earbuds with Mic USA">
                                            <a href="/itm/Bluetooth-Wireless-Headphones-Headsets-Earphone-Neckband-Earbuds-with-Mic-USA/401798534910?_trkparms=5373%3A0%7C5374%3AFeatured"
                                               itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">Bluetooth Wireless Headphones Headsets Earphone Neckband Earbuds with Mic USA</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $8.99</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="264421133301" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                    alt="Samsung Galaxy Note 10/ Note 10 Plus Case Ringke [FUSION] Clear Shockproof Cover"
                                                    >
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="Samsung Galaxy Note 10/ Note 10 Plus Case Ringke [FUSION] Clear Shockproof Cover">
                                            <a href="/itm/Samsung-Galaxy-Note-10-Note-10-Plus-Case-Ringke-FUSION-Clear-Shockproof-Cover/264421133301?_trkparms=5373%3A0%7C5374%3AFeatured"
                                               itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">Samsung Galaxy Note 10/ Note 10 Plus Case Ringke [FUSION] Clear Shockproof Cover</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $9.89</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                             class="itemtile-price-strikethrough">US $10.99 </span><span
                                                        class="aria-hide">Previous price: US $10.99</span><span
                                                        class="itemtile-price-default">| </span><span
                                                        class="itemtile-price-bold">10% off</span></span></div>
                                        <span><a href="/itm/Samsung-Galaxy-Note-10-Note-10-Plus-Case-Ringke-FUSION-Clear-Shockproof-Cover/264421133301?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                 class="dne-itemtile-more-options" target="" tabindex="-1"
                                                 aria-disabled="true">More options</a></span></div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="323815920637" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                    alt="Mens Superdry Polo Shirts Selection - Various Styles &amp; Colours 220519"
                                                    >
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="Mens Superdry Polo Shirts Selection - Various Styles &amp; Colours 220519">
                                            <a href="/itm/Mens-Superdry-Polo-Shirts-Selection-Various-Styles-Colours-220519/323815920637?_trkparms=5373%3A0%7C5374%3AFeatured"
                                               itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">Mens Superdry Polo Shirts Selection - Various Styles &amp; Colours 220519</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $13.80</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <span><a href="/itm/Mens-Superdry-Polo-Shirts-Selection-Various-Styles-Colours-220519/323815920637?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                 class="dne-itemtile-more-options" target="" tabindex="-1"
                                                 aria-disabled="true">More options</a></span><span><span
                                                    class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                    </div>
                                    <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="401764636841" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                    alt="Clear Silicone Bumper Case For Samsung Galaxy S10e S10 S9 S8 Plus S7 Note 9 8 A6"
                                                    >
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="Clear Silicone Bumper Case For Samsung Galaxy S10e S10 S9 S8 Plus S7 Note 9 8 A6">
                                            <a href="/itm/Clear-Silicone-Bumper-Case-For-Samsung-Galaxy-S10-S9-S8-Plus-S7-Note-9-8-A6-5G/401764636841?_trkparms=5373%3A0%7C5374%3AFeatured"
                                               itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">Clear Silicone Bumper Case For Samsung Galaxy S10e S10 S9 S8 Plus S7 Note 9 8 A6</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $1.95</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <span><span class="dne-itemtile-delivery">Free shipping</span></span><span><a
                                                    href="/itm/Clear-Silicone-Bumper-Case-For-Samsung-Galaxy-S10-S9-S8-Plus-S7-Note-9-8-A6-5G/401764636841?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                    class="dne-itemtile-more-options" target="" tabindex="-1"
                                                    aria-disabled="true">More options</a></span></div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="132476596030" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                    alt="Portable Rolling Clothes Rack Single Hanging Garment Bar Heavy Duty Hanger"
                                                    data-comp="lazyload"
                                                    data-config-src="https://i.ebayimg.com/images/g/oRoAAOSwEYBaYPyA/s-l300.jpg">
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="Portable Rolling Clothes Rack Single Hanging Garment Bar Heavy Duty Hanger">
                                            <a href="/itm/Portable-Rolling-Clothes-Rack-Single-Hanging-Garment-Bar-Heavy-Duty-Hanger/132476596030?_trkparms=5373%3A0%7C5374%3AFeatured"
                                               itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">Portable Rolling Clothes Rack Single Hanging Garment Bar Heavy Duty Hanger</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $8.99</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                             class="itemtile-price-strikethrough">US $12.99 </span><span
                                                        class="aria-hide">Previous price: US $12.99</span><span
                                                        class="itemtile-price-default">| </span><span
                                                        class="itemtile-price-bold">30% off</span></span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="323775885453" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                    alt="New Balance Men's 623V3 Shoes White With Navy"
                                                    data-comp="lazyload"
                                                    data-config-src="https://i.ebayimg.com/images/g/MsQAAOSw011bmU3u/s-l300.jpg">
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="New Balance Men's 623V3 Shoes White With Navy"><a
                                                    href="/itm/New-Balance-Mens-623V3-Shoes-White-With-Navy/323775885453?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                    itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">New Balance Men's 623V3 Shoes White With Navy</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $36.99</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                             class="itemtile-price-strikethrough">US $69.99 </span><span
                                                        class="aria-hide">Previous price: US $69.99</span><span
                                                        class="itemtile-price-default">| </span><span
                                                        class="itemtile-price-bold">47% off</span></span></div>
                                        <span><a href="/itm/New-Balance-Mens-623V3-Shoes-White-With-Navy/323775885453?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                 class="dne-itemtile-more-options" target="" tabindex="-1"
                                                 aria-disabled="true">More options</a></span></div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="183514934791" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                    alt="Tissot Luxury Automatic Silver Dial Men's Watch T086.408.22.036.00"
                                                    data-comp="lazyload"
                                                    data-config-src="https://i.ebayimg.com/images/g/p-sAAOSwNqRcClTp/s-l300.jpg">
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="Tissot Luxury Automatic Silver Dial Men's Watch T086.408.22.036.00">
                                            <a href="/itm/Tissot-Luxury-Automatic-Silver-Dial-Mens-Watch-T086-408-22-036-00/183514934791?_trkparms=5373%3A0%7C5374%3AFeatured"
                                               itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">Tissot Luxury Automatic Silver Dial Men's Watch T086.408.22.036.00</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $477.44</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                             class="itemtile-price-strikethrough">US $1,450.00 </span><span
                                                        class="aria-hide">Previous price: US $1,450.00</span><span
                                                        class="itemtile-price-default">| </span><span
                                                        class="itemtile-price-bold">67% off</span></span></div>
                                        <span><span class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                    </div>
                                    <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="192597617218" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                    alt="Obsession Cologne by Calvin Klein, 4 oz EDT Spray for Men NEW IN BOX"
                                                    data-comp="lazyload"
                                                    data-config-src="https://i.ebayimg.com/images/g/ybcAAOSwXoJbSMO~/s-l300.jpg">
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="Obsession Cologne by Calvin Klein, 4 oz EDT Spray for Men NEW IN BOX">
                                            <a href="/itm/Obsession-Cologne-by-Calvin-Klein-4-oz-EDT-Spray-for-Men-NEW-IN-BOX/192597617218?_trkparms=5373%3A0%7C5374%3AFeatured"
                                               itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">Obsession Cologne by Calvin Klein, 4 oz EDT Spray for Men NEW IN BOX</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $20.23</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                             class="itemtile-price-strikethrough">US $82.00 </span><span
                                                        class="aria-hide">Previous price: US $82.00</span><span
                                                        class="itemtile-price-default">| </span><span
                                                        class="itemtile-price-bold">75% off</span></span></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="252544929633" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                    alt="For iPhone 6 / 6S Plus | Ringke [FUSION] Clear Shockproof Protective Case Cover"
                                                    data-comp="lazyload"
                                                    data-config-src="https://i.ebayimg.com/images/g/EbwAAOSwGq5cEUpG/s-l300.jpg">
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="For iPhone 6 / 6S Plus | Ringke [FUSION] Clear Shockproof Protective Case Cover">
                                            <a href="/itm/For-iPhone-6-6S-Plus-Ringke-FUSION-Clear-Shockproof-Protective-Case-Cover/252544929633?_trkparms=5373%3A0%7C5374%3AFeatured"
                                               itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">For iPhone 6 / 6S Plus | Ringke [FUSION] Clear Shockproof Protective Case Cover</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $7.99</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <span><a href="/itm/For-iPhone-6-6S-Plus-Ringke-FUSION-Clear-Shockproof-Protective-Case-Cover/252544929633?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                 class="dne-itemtile-more-options" target="" tabindex="-1"
                                                 aria-disabled="true">More options</a></span></div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="162945559973" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                    alt="Testosterone Booster Monster Test All Natural For Men 6000mg of Power + Tribulus"
                                                    data-comp="lazyload"
                                                    data-config-src="https://i.ebayimg.com/images/g/wTYAAOSwiahckSy1/s-l300.jpg">
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="Testosterone Booster Monster Test All Natural For Men 6000mg of Power + Tribulus">
                                            <a href="/itm/Testosterone-Booster-Monster-Test-All-Natural-For-Men-6000mg-of-Power-Tribulus/162945559973?_trkparms=5373%3A0%7C5374%3AFeatured"
                                               itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">Testosterone Booster Monster Test All Natural For Men 6000mg of Power + Tribulus</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $9.19</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                             class="itemtile-price-strikethrough">US $14.99 </span><span
                                                        class="aria-hide">Previous price: US $14.99</span><span
                                                        class="itemtile-price-default">| </span><span
                                                        class="itemtile-price-bold">38% off</span></span></div>
                                        <span><span class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                    </div>
                                    <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="143087681827" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                    alt="Crocs Unisex Athens Flip" data-comp="lazyload"
                                                    data-config-src="https://i.ebayimg.com/images/g/gz8AAOSwkCZcfl5f/s-l300.jpg">
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2" title="Crocs Unisex Athens Flip"><a
                                                    href="/itm/Crocs-Unisex-Athens-Flip/143087681827?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                    itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">Crocs Unisex Athens Flip</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $18.49</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                             class="itemtile-price-strikethrough">US $39.99 </span><span
                                                        class="aria-hide">Previous price: US $39.99</span><span
                                                        class="itemtile-price-default">| </span><span
                                                        class="itemtile-price-bold">53% off</span></span></div>
                                        <span><a href="/itm/Crocs-Unisex-Athens-Flip/143087681827?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                 class="dne-itemtile-more-options" target="" tabindex="-1"
                                                 aria-disabled="true">More options</a></span></div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="372734490393" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                    alt="Adidas Golf Men's Advantage Color Block Polo Shirt, Brand New"
                                                    data-comp="lazyload"
                                                    data-config-src="https://i.ebayimg.com/images/g/x6oAAOSwRtNbjaFx/s-l300.jpg">
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2"
                                                title="Adidas Golf Men's Advantage Color Block Polo Shirt, Brand New"><a
                                                    href="/itm/Adidas-Golf-Mens-Advantage-Color-Block-Polo-Shirt-Brand-New/372734490393?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                    itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">Adidas Golf Men's Advantage Color Block Polo Shirt, Brand New</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $15.99</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                             class="itemtile-price-strikethrough">US $55.00 </span><span
                                                        class="aria-hide">Previous price: US $55.00</span><span
                                                        class="itemtile-price-default">| </span><span
                                                        class="itemtile-price-bold">70% off</span></span></div>
                                        <span><a href="/itm/Adidas-Golf-Mens-Advantage-Color-Block-Polo-Shirt-Brand-New/372734490393?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                 class="dne-itemtile-more-options" target="" tabindex="-1"
                                                 aria-disabled="true">More options</a></span><span><span
                                                    class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                    </div>
                                    <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                                </div>
                            </li>
                            <li>
                                <div class="dne-itemtile dne-itemtile-large dne-skip-focus" itemscope="itemscope"
                                     data-listing-id="173807846556" itemtype="https://schema.org/Product">
                                    <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                        <div class="slashui-image-cntr"><img
                                                    src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                    alt="Reebok Men's WOR Tech Top" data-comp="lazyload"
                                                    data-config-src="https://i.ebayimg.com/images/g/eLkAAOSwgO9dX2yh/s-l300.jpg">
                                        </div>
                                    </div>
                                    <div class="dne-itemtile-detail" role="text"><h3
                                                class="dne-itemtile-title ellipse-2" title="Reebok Men's WOR Tech Top">
                                            <a href="/itm/Reebok-Mens-WOR-Tech-Top/173807846556?_trkparms=5373%3A0%7C5374%3AFeatured"
                                               itemprop="url" tabindex="-1" aria-disabled="true"><span
                                                        class="ebayui-ellipsis-2" itemprop="name">Reebok Men's WOR Tech Top</span></a>
                                        </h3>
                                        <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                             class="dne-itemtile-price">
                                            <meta itemprop="priceCurrency" content="USD">
                                            <span itemprop="price" class="first">US $14.00</span><span
                                                    itemprop="availability" content="https://schema.org/InStock"></span><a
                                                    href="{{url("/globaldeals")}}/trending/all"
                                                    class="dne-itemtile-price__see-all" tabindex="-1"
                                                    aria-disabled="true">See all trending deals</a></div>
                                        <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                             class="itemtile-price-strikethrough">US $25.00 </span><span
                                                        class="aria-hide">Previous price: US $25.00</span><span
                                                        class="itemtile-price-default">| </span><span
                                                        class="itemtile-price-bold">44% off</span></span></div>
                                        <span><a href="/itm/Reebok-Mens-WOR-Tech-Top/173807846556?_trkparms=5373%3A0%7C5374%3AFeatured"
                                                 class="dne-itemtile-more-options" target="" tabindex="-1"
                                                 aria-disabled="true">More options</a></span><span><span
                                                    class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                    </div>
                                    <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <button class="ebayui-dne-carousel-next icon-deals-right-arrow"
                            aria-label="Trending Deals - Move Next" aria-disabled="false"></button>
                </div>
                <div class="ebayui-dne-banner-text"><h2><span>Featured Deals</span></h2></div>
                <div class="ebayui-dne-item-featured-card ebayui-dne-item-featured-card" _sp="p2344380.m3940.l4">
                    <div class="row">
                        <div class="col">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="254352188761" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s-l225.jpg"
                                                alt="For iPhone 11 / 11 Pro / 11 Pro Max Case Ringke [FUSION] Clear Shockproof Cover">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="For iPhone 11 / 11 Pro / 11 Pro Max Case Ringke [FUSION] Clear Shockproof Cover">
                                        <a href="/itm/For-iPhone-11-11-Pro-11-Pro-Max-Case-Ringke-FUSION-Clear-Shockproof-Cover/254352188761?_trkparms=5373%3A0%7C5374%3AFeatured"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">For iPhone 11 / 11 Pro / 11 Pro Max Case Ringke [FUSION] Clear Shockproof Cover</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $8.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $29.99 </span><span
                                                    class="aria-hide">Previous price: US $29.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">70% off</span></span></div>
                                    <span><a href="/itm/For-iPhone-11-11-Pro-11-Pro-Max-Case-Ringke-FUSION-Clear-Shockproof-Cover/254352188761?_trkparms=5373%3A0%7C5374%3AFeatured"
                                             class="dne-itemtile-more-options" target="">More options</a></span></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="163851517189" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s-l225(1).jpg"
                                                alt="Lenovo ThinkPad T470, 14.0&quot; HD, i5-6300U, 8GB RAM, 256GB SSD, Win10 Pro, FPR">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Lenovo ThinkPad T470, 14.0&quot; HD, i5-6300U, 8GB RAM, 256GB SSD, Win10 Pro, FPR">
                                        <a href="/itm/Lenovo-ThinkPad-T470-14-0-HD-i5-6300U-8GB-RAM-256GB-SSD-Win10-Pro-FPR/163851517189?_trkparms=5373%3A0%7C5374%3AFeatured"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Lenovo ThinkPad T470, 14.0" HD, i5-6300U, 8GB RAM, 256GB SSD, Win10 Pro, FPR</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $469.00</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $1,299.00 </span><span
                                                    class="aria-hide">Previous price: US $1,299.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">63% off</span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="291421228431" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s-l225(2).jpg"
                                                alt="Powerbuilt 3 Jaw Oil Filter Wrench, 2-1/2&quot; to 3-7/8&quot; Range, Auto-Adjust, 648659">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Powerbuilt 3 Jaw Oil Filter Wrench, 2-1/2&quot; to 3-7/8&quot; Range, Auto-Adjust, 648659">
                                        <a href="/itm/Powerbuilt-3-Jaw-Oil-Filter-Wrench-2-1-2-to-3-7-8-Range-Auto-Adjust-648659/291421228431?_trkparms=5373%3A0%7C5374%3AFeatured"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Powerbuilt 3 Jaw Oil Filter Wrench, 2-1/2" to 3-7/8" Range, Auto-Adjust, 648659</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $9.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $29.99 </span><span
                                                    class="aria-hide">Previous price: US $29.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">66% off</span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="183585431319" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s-l225(3).jpg"
                                                alt="Silpada 'Turquoise Burst' Compressed Turquoise Pendant, Silver &amp; Brass, 16&quot; + 2&quot;">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Silpada 'Turquoise Burst' Compressed Turquoise Pendant, Silver &amp; Brass, 16&quot; + 2&quot;">
                                        <a href="/itm/Silpada-Turquoise-Burst-Compressed-Turquoise-Pendant-Silver-Brass-16-2/183585431319?_trkparms=5373%3A0%7C5374%3AFeatured"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Silpada 'Turquoise Burst' Compressed Turquoise Pendant, Silver &amp; Brass, 16" + 2"</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $17.00</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $69.00 </span><span
                                                    class="aria-hide">Previous price: US $69.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">75% off</span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="153613831241" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s-l225(4).jpg"
                                                alt="HP Wireless Keyboard and Mouse 300 - Save $12 instantly"></div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="HP Wireless Keyboard and Mouse 300 - Save $12 instantly">
                                        <a href="/itm/HP-Wireless-Keyboard-and-Mouse-300-Save-12-instantly/153613831241?_trkparms=5373%3A0%7C5374%3AFeatured"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">HP Wireless Keyboard and Mouse 300 - Save $12 instantly</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $17.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $29.99 </span><span
                                                    class="aria-hide">Previous price: US $29.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">40% off</span></span></div>
                                    <span><span class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                </div>
                                <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="302691392250" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s-l225(5).jpg"
                                                alt="Rockville EBT35 GunMetal Magnetic Bluetooth EarBuds In-Ear Sport Headphones/IPX5">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Rockville EBT35 GunMetal Magnetic Bluetooth EarBuds In-Ear Sport Headphones/IPX5">
                                        <a href="/itm/Rockville-EBT35-GunMetal-Magnetic-Bluetooth-EarBuds-In-Ear-Sport-Headphones-IPX5/302691392250?_trkparms=5373%3A0%7C5374%3AFeatured"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Rockville EBT35 GunMetal Magnetic Bluetooth EarBuds In-Ear Sport Headphones/IPX5</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $16.95</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $69.99 </span><span
                                                    class="aria-hide">Previous price: US $69.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">75% off</span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="390964694680" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s-l225(6).jpg"
                                                alt="4 Pack LED Night Light Plug in with Auto Sensor Photocell, White">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="4 Pack LED Night Light Plug in with Auto Sensor Photocell, White">
                                        <a href="/itm/4-Pack-LED-Night-Light-Plug-in-with-Auto-Sensor-Photocell-White/390964694680?_trkparms=5373%3A0%7C5374%3AFeatured"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">4 Pack LED Night Light Plug in with Auto Sensor Photocell, White</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $13.49</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $24.99 </span><span
                                                    class="aria-hide">Previous price: US $24.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">46% off</span></span></div>
                                    <span><span class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                </div>
                                <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="111736675898" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s-l225(7).jpg"
                                                alt="1800 Pillow Case Set Queen (standard) or King Pillowcase Set of 2 Pillow Cases">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="1800 Pillow Case Set Queen (standard) or King Pillowcase Set of 2 Pillow Cases">
                                        <a href="/itm/1800-Pillow-Case-Set-Queen-standard-or-King-Pillowcase-Set-of-2-Pillow-Cases/111736675898?_trkparms=5373%3A0%7C5374%3AFeatured"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">1800 Pillow Case Set Queen (standard) or King Pillowcase Set of 2 Pillow Cases</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $4.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $29.99 </span><span
                                                    class="aria-hide">Previous price: US $29.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">83% off</span></span></div>
                                    <span><a href="/itm/1800-Pillow-Case-Set-Queen-standard-or-King-Pillowcase-Set-of-2-Pillow-Cases/111736675898?_trkparms=5373%3A0%7C5374%3AFeatured"
                                             class="dne-itemtile-more-options" target="">More options</a></span></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="153312496539" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s-l225(8).jpg"
                                                alt="HP X3000 Wireless Mouse - Save $5 instantly"></div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="HP X3000 Wireless Mouse - Save $5 instantly">
                                        <a href="/itm/HP-X3000-Wireless-Mouse-Save-5-instantly/153312496539?_trkparms=5373%3A0%7C5374%3AFeatured"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">HP X3000 Wireless Mouse - Save $5 instantly</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $11.50</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $16.50 </span><span
                                                    class="aria-hide">Previous price: US $16.50</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">30% off</span></span></div>
                                    <span><span class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                </div>
                                <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ebayui-dne-item-pattern-card  ebayui-dne-item-pattern-card-with-padding"
                 _sp="p2344380.m2735.l9"><h2 class="dne-pattern-title" id="more-featured-deals"><span>More Featured Deals</span>
                </h2>
                <div class="row">
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="142197783647" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Red Wing Irish Setter Men's Mesabi Logger Work Boot 83829"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/tCwAAOSwImRYQGUY/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Red Wing Irish Setter Men's Mesabi Logger Work Boot 83829">
                                        <a href="/itm/Red-Wing-Irish-Setter-Mens-Mesabi-Logger-Work-Boot-83829/142197783647?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000003158"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Red Wing Irish Setter Men's Mesabi Logger Work Boot 83829</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $134.95</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <span><a href="/itm/Red-Wing-Irish-Setter-Mens-Mesabi-Logger-Work-Boot-83829/142197783647?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000003158"
                                             class="dne-itemtile-more-options"
                                             target="">More options</a></span><span><span
                                                class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                </div>
                                <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="323888518293" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Cuisinart CHW-12 Coffee+ 12-Cup Programmable Coffeemaker w/ Hot Water System"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/7iwAAOSwnYpdWtYu/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Cuisinart CHW-12 Coffee+ 12-Cup Programmable Coffeemaker w/ Hot Water System">
                                        <a href="/itm/Cuisinart-CHW-12-Coffee-12-Cup-Programmable-Coffeemaker-w-Hot-Water-System/323888518293?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000003158"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Cuisinart CHW-12 Coffee+ 12-Cup Programmable Coffeemaker w/ Hot Water System</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $36.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $99.95 </span><span
                                                    class="aria-hide">Previous price: US $99.95</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">62% off</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-large dne-itemtile-double" itemscope="itemscope"
                                 data-listing-id="362453081913" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Netgear Arlo Go 4030 HD Indoor Outdoor Security Verizon with Battery and Charger"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/d5sAAOSwOTNZ05cQ/s-l300.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Netgear Arlo Go 4030 HD Indoor Outdoor Security Verizon with Battery and Charger">
                                        <a href="/itm/Netgear-Arlo-Go-4030-HD-Indoor-Outdoor-Security-Verizon-with-Battery-and-Charger/362453081913?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000003158"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Netgear Arlo Go 4030 HD Indoor Outdoor Security Verizon with Battery and Charger</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $249.95</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $400.00 </span><span
                                                    class="aria-hide">Previous price: US $400.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">37% off</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="232484710054" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="1 oz Gold American Eagle | Random Date US Mint Coin"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/R-wAAOSwUBlZtpKV/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="1 oz Gold American Eagle | Random Date US Mint Coin">
                                        <a href="/itm/1-oz-Gold-American-Eagle-Random-Date-US-Mint-Coin/232484710054?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000003158"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">1 oz Gold American Eagle | Random Date US Mint Coin</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $1,581.38</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <span><span class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                </div>
                                <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-show-more dne-skip-focus dne-show-more-without-link">
                                <div class="dne-image-previews">
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/GV2-By-Gevril-Mens-1306-Motorcycle-Sport-Automatic-Leather-Watch/273964615408?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000003158">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="GV2 By Gevril Men's 1306 Motorcycle Sport Automatic Leather Watch"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/V5AAAOSwJNpdU-EF/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Alienware-m15-15-6-Gaming-Notebook-i7-8750H-16GB-RAM-1TB-HHD-8GB-SSHD-GTX-1060/293171243843?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000003158">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Alienware m15 15.6 Gaming Notebook i7-8750H 16GB RAM 1TB HHD 8GB SSHD GTX 1060"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/0wAAAOSwc-BdQSLE/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Bestway-93208E-Barbie-Malibu-Indoor-Inflatable-Activity-Center-Playhouse-Pink/352562713368?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000003158">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Bestway 93208E Barbie Malibu Indoor Inflatable Activity Center Playhouse, Pink"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/3XsAAOSworNcM21Q/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Samsonite-Pivot-3-Piece-Set-Luggage/123884489490?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000003158">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Samsonite Pivot 3 Piece Set - Luggage" data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/6-gAAOSwPeBdgBuK/s-l96.jpg">
                                            </div>
                                        </a></div>
                                </div>
                                <div class="dne-show-more-link">
                                    <button>
                                        <div class="dne-show-more-text"><span><span
                                                        class="dne-see-more-count-text">Show</span><span
                                                        class="dne-see-more-count-text emphasis">85</span><span
                                                        class="dne-see-more-count-text">more</span></span></div>
                                        <div class="dne-show-more-text dne-see-more-type-text"><span><span
                                                        class="dne-see-more-type-text-span">More Featured Deals</span></span>
                                        </div>
                                        <i class="icon-deals-double-down-arrow" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section _sp="p2344380.m3839.l10" class="ebayui-dne-event-summary-card ebayui-dne-events-desktop">
                <div>
                    <section class="ebayui-dne-event-banner" aria-role="group"><a
                                href="/rpp/electronics/HP-BOGO-Ink-9-12-Event-Module?_trkparams=5373%3A0%7C5374%3AFeatured"><span
                                    class="ebayui-dne-event-image"><div class="slashui-image-cntr"><img
                                            src="{{asset("/uploads")}}/product/s_1x2.gif"
                                            alt="Rely on Original HP Ink" data-comp="lazyload"
                                            data-config-src="https://i.ebayimg.com/images/g/3QoAAOSwnflcuZZn/s-l1600.jpg"></div></span>
                            <div class="ebayui-dne-event-banner-content">
                                <div class="ebayui-dne-event-banner-content-title"><h3>HP 950/951 Ink, Quality Every
                                        Time You Print</h3></div>
                                <div class="ebayui-dne-event-banner-hotness">
                                    <div class="ebayui-event-banner-timer"><span class="ebayui-countdown-timer"><span
                                                    class="ebayui-countdown-ends-in">Ends In </span><span
                                                    class="ebayui-countdown-time">17h</span><span
                                                    class="ebayui-countdown-time">38m</span></span></div>
                                    <span class="icon-deals-hotness" aria-hidden="true"></span></div>
                            </div>
                        </a></section>
                </div>
            </section>
            <div class="ebayui-dne-item-pattern-card  ebayui-dne-item-pattern-card-with-padding"
                 _sp="p2344380.m2735.l12"><h2 class="dne-pattern-title" id="the-best-of-tech">
                    <span>The Best of Tech</span></h2>
                <div class="row">
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="392421952519" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Dell UltraSharp U2414H 23.8&quot; Full HD 1080p LED Monitor"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/NRcAAOSwMSZdeWP0/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Dell UltraSharp U2414H 23.8&quot; Full HD 1080p LED Monitor">
                                        <a href="/itm/Dell-UltraSharp-U2414H-23-8-Full-HD-1080p-LED-Monitor/392421952519?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000001691"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Dell UltraSharp U2414H 23.8" Full HD 1080p LED Monitor</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $149.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $249.99 </span><span
                                                    class="aria-hide">Previous price: US $249.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">40% off</span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="143357209694" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Samsung Galaxy A50 64GB Black Verizon Smartphone SM-A50"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/o~QAAOSwJ8JdVeDN/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Samsung Galaxy A50 64GB Black Verizon Smartphone SM-A50">
                                        <a href="/itm/Samsung-Galaxy-A50-64GB-Black-Verizon-Smartphone-SM-A50/143357209694?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000001691"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Samsung Galaxy A50 64GB Black Verizon Smartphone SM-A50</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $259.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $399.99 </span><span
                                                    class="aria-hide">Previous price: US $399.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">35% off</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-large dne-itemtile-double" itemscope="itemscope"
                                 data-listing-id="192885530655" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Canon EOS 2000D / Rebel T7 24.1MP DSLR Camera + 18-55mm Lens + All You Need Kit"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/UWYAAOSwaHlcrLQc/s-l300.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Canon EOS 2000D / Rebel T7 24.1MP DSLR Camera + 18-55mm Lens + All You Need Kit">
                                        <a href="/itm/Canon-EOS-2000D-Rebel-T7-24-1MP-DSLR-Camera-18-55mm-Lens-All-You-Need-Kit/192885530655?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000001691"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Canon EOS 2000D / Rebel T7 24.1MP DSLR Camera + 18-55mm Lens + All You Need Kit</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $340.98</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $479.99 </span><span
                                                    class="aria-hide">Previous price: US $479.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">28% off</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="123902312775" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Xbox One S 1TB Gears 5 Console Bundle + Extra Xbox Wireless Controller White"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/H0kAAOSwfVJddsDn/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Xbox One S 1TB Gears 5 Console Bundle + Extra Xbox Wireless Controller White">
                                        <a href="/itm/Xbox-One-S-1TB-Gears-5-Console-Bundle-Extra-Xbox-Wireless-Controller-White/123902312775?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000001691"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Xbox One S 1TB Gears 5 Console Bundle + Extra Xbox Wireless Controller White</span></a>
                                    </h3>
                                    <div class="dne-itemtile-display-price-message"><span>See details</span></div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $348.00 </span><span
                                                    class="aria-hide">Previous price: US $348.00</span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-show-more dne-skip-focus dne-show-more-without-link">
                                <div class="dne-image-previews">
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Microsoft-Xbox-One-S-Wireless-Controller-Red/163482597534?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000001691">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Microsoft Xbox One S Wireless Controller - Red"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/RBwAAOSwcXhcOScc/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Sony-WH-1000XM3-Wireless-Noise-Canceling-Over-Ear-Headphones-w-Google-Assistant/263986612395?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000001691">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Sony WH-1000XM3 Wireless Noise Canceling Over-Ear Headphones w/ Google Assistant"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/emUAAOSwvFhbwJqK/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Xbox-One-S-1TB-NBA-2K19-Bundle-Gears-5-Standard-Edition/123902302440?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000001691">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Xbox One S 1TB NBA 2K19 Bundle+Gears 5 Standard Edition"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/8BoAAOSwhBhddr1O/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/DELL-XPS-XPS9370-7002SLV-Intel-Core-i7-8550U-8-GB-Memory-256-GB-PCIe-SSD/302760268970?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000001691">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="DELL XPS9370-7002SLV 13.3&quot; Laptop Intel Core i7 8th Gen 8550U (1.80 GHz) 8 GB Me"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/088AAOSwqMxc48dm/s-l96.jpg">
                                            </div>
                                        </a></div>
                                </div>
                                <div class="dne-show-more-link">
                                    <button>
                                        <div class="dne-show-more-text"><span><span
                                                        class="dne-see-more-count-text">Show</span><span
                                                        class="dne-see-more-count-text emphasis">85</span><span
                                                        class="dne-see-more-count-text">more</span></span></div>
                                        <div class="dne-show-more-text dne-see-more-type-text"><span><span
                                                        class="dne-see-more-type-text-span">The Best of Tech</span></span>
                                        </div>
                                        <i class="icon-deals-double-down-arrow" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ebayui-dne-item-pattern-card  ebayui-dne-item-pattern-card-with-padding"
                 _sp="p2344380.m2735.l14"><h2 class="dne-pattern-title" id="best-of-home-garden"><span>Best of Home &amp; Garden</span>
                </h2>
                <div class="row">
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="303192978711" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Ecovacs DEEBOT SLIM DA60 Vacuum Cleaning Robot for Bare Floors &amp; Hardwood"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/5oYAAOSwyvldCPww/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Ecovacs DEEBOT SLIM DA60 Vacuum Cleaning Robot for Bare Floors &amp; Hardwood">
                                        <a href="/itm/Ecovacs-DEEBOT-SLIM-DA60-Vacuum-Cleaning-Robot-for-Bare-Floors-Hardwood/303192978711?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000003710"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Ecovacs DEEBOT SLIM DA60 Vacuum Cleaning Robot for Bare Floors &amp; Hardwood</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $79.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $199.99 </span><span
                                                    class="aria-hide">Previous price: US $199.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">60% off</span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="133062792359" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="KitchenAid® Refurbished Artisan® Mini 3.5 Quart Tilt-Head Stand Mixer, RKSM33XX"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/e5UAAOSwQZFdCuxC/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="KitchenAid® Refurbished Artisan® Mini 3.5 Quart Tilt-Head Stand Mixer, RKSM33XX">
                                        <a href="/itm/KitchenAid-Refurbished-Artisan-Mini-3-5-Quart-Tilt-Head-Stand-Mixer-RKSM33XX/133062792359?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000003710"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">KitchenAid® Refurbished Artisan® Mini 3.5 Quart Tilt-Head Stand Mixer, RKSM33XX</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $159.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <span><a href="/itm/KitchenAid-Refurbished-Artisan-Mini-3-5-Quart-Tilt-Head-Stand-Mixer-RKSM33XX/133062792359?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000003710"
                                             class="dne-itemtile-more-options" target="">More options</a></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-large dne-itemtile-double" itemscope="itemscope"
                                 data-listing-id="391001017225" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Black 48&quot; 2 Door Pet Cage Folding Dog w/Divider Cat Crate Cage Kennel w/Tray DC"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/iA4AAOSwUfVb9ROd/s-l300.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Black 48&quot; 2 Door Pet Cage Folding Dog w/Divider Cat Crate Cage Kennel w/Tray DC">
                                        <a href="/itm/Black-48-2-Door-Pet-Cage-Folding-Dog-w-Divider-Cat-Crate-Cage-Kennel-w-Tray-DC/391001017225?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000003710"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Black 48" 2 Door Pet Cage Folding Dog w/Divider Cat Crate Cage Kennel w/Tray DC</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $42.07</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $48.07 </span><span
                                                    class="aria-hide">Previous price: US $48.07</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">12% off</span></span></div>
                                    <span><span class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                </div>
                                <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="223533259853" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Crane- Infrared smartHEATER, Space Heater, WIFI, Quartz Heating Element, White"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/XmgAAOSwszJc7X-2/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Crane- Infrared smartHEATER, Space Heater, WIFI, Quartz Heating Element, White">
                                        <a href="/itm/Crane-Infrared-Heater-Space-Heater-with-Quartz-Heating-Element-White/223533259853?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000003710"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Crane- Infrared smartHEATER, Space Heater, WIFI, Quartz Heating Element, White</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $46.95</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $171.95 </span><span
                                                    class="aria-hide">Previous price: US $171.95</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">72% off</span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-show-more dne-skip-focus dne-show-more-without-link">
                                <div class="dne-image-previews">
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/ECOVACS-OZMO-601-Self-Charging-Robot-Mop-Vacuum-Smart-App-Auto-Clean-Mode/153531838797?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000003710">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="ECOVACS OZMO 601 Self-Charging Robot Mop &amp; Vacuum Smart App Auto-Clean Mode"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/aAYAAOSwqbZdB64I/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/ECOVACS-DEEBOT-M81Pro-Robotic-Vacuum-Cleaner-with-Strong-Suction/153531818428?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000003710">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="ECOVACS DEEBOT M81Pro Robotic Vacuum Cleaner with Strong Suction"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/ClsAAOSwbPVdB6jD/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/80-ct-Double-Donut-Coffee-K-Cups-for-Keurig-25-Cents-A-Cup-Choose-Your-Flavor/264413520230?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000003710">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="80-Count Double Donut Coffee K-Cups for Keurig - $.25 Per Cup"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/ZqwAAOSwlQddOx2s/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/100-30x36-Ultra-Heavy-Absorbency-Dog-Puppy-Training-Wee-Wee-Pee-Pads-MEDICAL-GRD/120813617479?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000003710">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="100-Count 30 x 36-Inch Ultra Heavy Absorbency Dog / Puppy Training Pee Pads"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/dBoAAOSwBfJde8ax/s-l96.jpg">
                                            </div>
                                        </a></div>
                                </div>
                                <div class="dne-show-more-link">
                                    <button>
                                        <div class="dne-show-more-text"><span><span
                                                        class="dne-see-more-count-text">Show</span><span
                                                        class="dne-see-more-count-text emphasis">85</span><span
                                                        class="dne-see-more-count-text">more</span></span></div>
                                        <div class="dne-show-more-text dne-see-more-type-text"><span><span
                                                        class="dne-see-more-type-text-span">Best of Home &amp; Garden</span></span>
                                        </div>
                                        <i class="icon-deals-double-down-arrow" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section _sp="p2344380.m3839.l15" class="ebayui-dne-event-summary-card ebayui-dne-events-desktop">
                <div>
                    <section class="ebayui-dne-event-banner" aria-role="group"><a
                                href="/e/home-garden/tailgating-grills-090219?_trkparams=5373%3A0%7C5374%3AFeatured"><span
                                    class="ebayui-dne-event-image"><div class="slashui-image-cntr"><img
                                            src="{{asset("/uploads")}}/product/s_1x2.gif"
                                            alt="Up to 50% off grills." data-comp="lazyload"
                                            data-config-src="https://i.ebayimg.com/images/g/sY8AAOSwKvddXtHN/s-l1600.jpg"></div></span>
                            <div class="ebayui-dne-event-banner-content">
                                <div class="ebayui-dne-event-banner-content-title"><h3>Dominate Your Tailgate</h3>
                                    <p>Up to 50% off grills and more.</p></div>
                            </div>
                        </a></section>
                </div>
            </section>
            <div class="ebayui-dne-item-pattern-card  ebayui-dne-item-pattern-card-with-padding"
                 _sp="p2344380.m2735.l16"><h2 class="dne-pattern-title" id="puma-styles-under-50"><span>Puma Styles Under $50</span>
                </h2>
                <div class="row">
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="283580166688" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="PUMA Flourish FS Women's Training Shoes Women Shoe Training"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/aD0AAOSw-NBdU5xL/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="PUMA Flourish FS Women's Training Shoes Women Shoe Training">
                                        <a href="/itm/PUMA-Flourish-FS-Womens-Training-Shoes-Women-Shoe-Training/283580166688?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006578"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">PUMA Flourish FS Women's Training Shoes Women Shoe Training</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $39.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $70.00 </span><span
                                                    class="aria-hide">Previous price: US $70.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">42% off</span></span></div>
                                    <span><a href="/itm/PUMA-Flourish-FS-Womens-Training-Shoes-Women-Shoe-Training/283580166688?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006578"
                                             class="dne-itemtile-more-options" target="">More options</a></span></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="283119638176" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="PUMA Tazon 6 Luxe Women's Sneakers Women Shoe Running"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/efAAAOSwmydc4p4M/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="PUMA Tazon 6 Luxe Women's Sneakers Women Shoe Running">
                                        <a href="/itm/PUMA-Tazon-6-Luxe-Womens-Sneakers-Women-Shoe-Running/283119638176?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006578"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">PUMA Tazon 6 Luxe Women's Sneakers Women Shoe Running</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $39.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $70.00 </span><span
                                                    class="aria-hide">Previous price: US $70.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">42% off</span></span></div>
                                    <span><a href="/itm/PUMA-Tazon-6-Luxe-Womens-Sneakers-Women-Shoe-Running/283119638176?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006578"
                                             class="dne-itemtile-more-options" target="">More options</a></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-large dne-itemtile-double" itemscope="itemscope"
                                 data-listing-id="273445497933" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="PUMA Essentials Men's Fleece Hoodie Men Sweat Basics"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/e54AAOSw~oddJXdz/s-l300.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="PUMA Essentials Men's Fleece Hoodie Men Sweat Basics">
                                        <a href="/itm/PUMA-Essentials-Mens-Fleece-Hoodie-Men-Sweat-Basics/273445497933?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006578"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">PUMA Essentials Men's Fleece Hoodie Men Sweat Basics</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $24.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $45.00 </span><span
                                                    class="aria-hide">Previous price: US $45.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">44% off</span></span></div>
                                    <span><a href="/itm/PUMA-Essentials-Mens-Fleece-Hoodie-Men-Sweat-Basics/273445497933?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006578"
                                             class="dne-itemtile-more-options" target="">More options</a></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="273973067599" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="PUMA BMW M Motorsport Men's Logo Tee Men Tee Auto"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/5RkAAOSwOKldW~6K/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="PUMA BMW M Motorsport Men's Logo Tee Men Tee Auto">
                                        <a href="/itm/PUMA-BMW-M-Motorsport-Mens-Logo-Tee-Men-Tee-Auto/273973067599?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006578"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">PUMA BMW M Motorsport Men's Logo Tee Men Tee Auto</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $24.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $40.00 </span><span
                                                    class="aria-hide">Previous price: US $40.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">37% off</span></span></div>
                                    <span><a href="/itm/PUMA-BMW-M-Motorsport-Mens-Logo-Tee-Men-Tee-Auto/273973067599?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006578"
                                             class="dne-itemtile-more-options" target="">More options</a></span></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-show-more dne-skip-focus dne-show-more-without-link">
                                <div class="dne-image-previews">
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Licence-Men-s-Liner-Socks-3-Pack-Men-Socks-3-Pack/273826624379?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006578">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Licence Men’s Liner Socks (3 Pack) Men Socks - 3-Pack"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/ZdoAAOSwqNJc4p2a/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Licence-Women-s-Invisible-No-Show-Socks-3-Pack-Women-Socks-3-Pack/273826624378?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006578">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Licence Women’s Invisible No Show Socks (3 Pack) Women Socks - 3-Pack"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/sTEAAOSwczNc4p4T/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/PUMA-Enzo-Heather-Women-s-Sneakers-Women-Shoe-Running/283581346784?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006578">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="PUMA Enzo Heather Women’s Sneakers Women Shoe Running"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/7dkAAOSw~BxdVQ80/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/PUMA-FLYER-RUNNER-Unisex-Shoe-Running/273925564907?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006578">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="PUMA FLYER RUNNER Unisex Shoe Running" data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/qtcAAOSwLW5dJ9~O/s-l96.jpg">
                                            </div>
                                        </a></div>
                                </div>
                                <div class="dne-show-more-link">
                                    <button>
                                        <div class="dne-show-more-text"><span><span
                                                        class="dne-see-more-count-text">Show</span><span
                                                        class="dne-see-more-count-text emphasis">30</span><span
                                                        class="dne-see-more-count-text">more</span></span></div>
                                        <div class="dne-show-more-text dne-see-more-type-text"><span><span
                                                        class="dne-see-more-type-text-span">Puma Styles Under $50</span></span>
                                        </div>
                                        <i class="icon-deals-double-down-arrow" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ebayui-dne-item-pattern-card  ebayui-dne-item-pattern-card-with-padding"
                 _sp="p2344380.m2735.l18"><h2 class="dne-pattern-title" id="save-big-on-your-favorite-natural-products">
                    <span>Save Big on Your Favorite Natural Products</span></h2>
                <div class="row">
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="301292413688" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="CAUDALIE Vinosource Moisturizing Matifying Fluid 1.3oz,40ml Moisturizer #10768"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/dfAAAOSwzPBdd87k/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="CAUDALIE Vinosource Moisturizing Matifying Fluid 1.3oz,40ml Moisturizer #10768">
                                        <a href="/itm/CAUDALIE-Vinosource-Moisturizing-Matifying-Fluid-1-3oz-40ml-Moisturizer-10768/301292413688?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006574"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">CAUDALIE Vinosource Moisturizing Matifying Fluid 1.3oz,40ml Moisturizer #10768</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $29.90</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $37.00 </span><span
                                                    class="aria-hide">Previous price: US $37.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">19% off</span></span></div>
                                    <span><span class="dne-itemtile-delivery">Free shipping</span></span><span><span
                                                class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                </div>
                                <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="390918403567" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="1 PC CAUDALIE Vinosource Moisturizing Sorbet 1.3oz,40ml Skincare Moist #10770"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/ad0AAOSwqYZdd88U/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="1 PC CAUDALIE Vinosource Moisturizing Sorbet 1.3oz,40ml Skincare Moist #10770">
                                        <a href="/itm/1-PC-CAUDALIE-Vinosource-Moisturizing-Sorbet-1-3oz-40ml-Skincare-Moist-10770/390918403567?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006574"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">1 PC CAUDALIE Vinosource Moisturizing Sorbet 1.3oz,40ml Skincare Moist #10770</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $26.90</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $37.00 </span><span
                                                    class="aria-hide">Previous price: US $37.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">27% off</span></span></div>
                                    <span><span class="dne-itemtile-delivery">Free shipping</span></span><span><span
                                                class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                </div>
                                <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-large dne-itemtile-double" itemscope="itemscope"
                                 data-listing-id="390655268638" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="1 PC CAUDALIE Instant Foaming Cleanser Skincare Cleansers All Skin Type 150ml"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/2RcAAOSwoc5dd88v/s-l300.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="1 PC CAUDALIE Instant Foaming Cleanser Skincare Cleansers All Skin Type 150ml">
                                        <a href="/itm/1-PC-CAUDALIE-Instant-Foaming-Cleanser-Skincare-Cleansers-All-Skin-Type-150ml/390655268638?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006574"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">1 PC CAUDALIE Instant Foaming Cleanser Skincare Cleansers All Skin Type 150ml</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $25.90</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $30.00 </span><span
                                                    class="aria-hide">Previous price: US $30.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">13% off</span></span></div>
                                    <span><span class="dne-itemtile-delivery">Free shipping</span></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="271234153811" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="1 PC CAUDALIE Gentle Cleansing Milk 6.7oz, 200ml Skincare Cleanser NEW #7505"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/B6UAAOSwY0Jdd89N/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="1 PC CAUDALIE Gentle Cleansing Milk 6.7oz, 200ml Skincare Cleanser NEW #7505">
                                        <a href="/itm/1-PC-CAUDALIE-Gentle-Cleansing-Milk-6-7oz-200ml-Skincare-Cleanser-NEW-7505/271234153811?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006574"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">1 PC CAUDALIE Gentle Cleansing Milk 6.7oz, 200ml Skincare Cleanser NEW #7505</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $23.90</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $30.00 </span><span
                                                    class="aria-hide">Previous price: US $30.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">20% off</span></span></div>
                                    <span><span class="dne-itemtile-delivery">Free shipping</span></span><span><span
                                                class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                </div>
                                <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-show-more dne-skip-focus dne-show-more-without-link">
                                <div class="dne-image-previews">
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/2X-CAUDALIE-Gentle-Cleansing-Milk-6-7oz-200ml/302887752123?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006574">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="2X CAUDALIE Gentle Cleansing Milk 6.7oz, 200ml"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/2hEAAOSwnmxdd89k/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/1-PC-CAUDALIE-Moisturizing-Toner-For-All-Skin-Types-Facial-Skincare-200ml/271969871819?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006574">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="1 PC CAUDALIE Moisturizing Toner (For All Skin Types) Facial Skincare  200ml"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/MVoAAOSw9m5dd8-Q/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/1-x-CAUDALIE-Moisturizing-Mask-All-Skin-Types-75ml-Skincare-Face/271093894892?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006574">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="1 x CAUDALIE Moisturizing Mask All Skin Types 75ml Skincare Face"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/ADMAAOSwug9dd8-s/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/CAUDALIE-Grape-Water-200ml-Skincare-Toner-Soothe-Moisturize-Refresh-100-Organic/391674024169?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006574">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="CAUDALIE Grape Water 200ml Skincare Toner Soothe Moisturize Refresh 100% Organic"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/7OAAAOSwEMNdd8~X/s-l96.jpg">
                                            </div>
                                        </a></div>
                                </div>
                                <div class="dne-show-more-link">
                                    <button>
                                        <div class="dne-show-more-text"><span><span
                                                        class="dne-see-more-count-text">Show</span><span
                                                        class="dne-see-more-count-text emphasis">85</span><span
                                                        class="dne-see-more-count-text">more</span></span></div>
                                        <div class="dne-show-more-text dne-see-more-type-text"><span><span
                                                        class="dne-see-more-type-text-span">Save Big on Your Favorite Natural Products</span></span>
                                        </div>
                                        <i class="icon-deals-double-down-arrow" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ebayui-dne-item-pattern-card  ebayui-dne-item-pattern-card-with-padding"
                 _sp="p2344380.m2735.l20"><h2 class="dne-pattern-title" id="top-steals-in-tech">
                    <span>Top Steals in Tech</span></h2>
                <div class="row">
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="153633539821" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Samsung Gear Fit2 Pro (Small) Black Aluminum Case Red Sport Band SM-R365NZRNXAR"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/gvwAAOSwlWldcmiW/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Samsung Gear Fit2 Pro (Small) Black Aluminum Case Red Sport Band SM-R365NZRNXAR">
                                        <a href="/itm/Samsung-Gear-Fit2-Pro-Small-Black-Aluminum-Case-Red-Sport-Band-SM-R365NZRNXAR/153633539821?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006494"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Samsung Gear Fit2 Pro (Small) Black Aluminum Case Red Sport Band SM-R365NZRNXAR</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $109.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $179.99 </span><span
                                                    class="aria-hide">Previous price: US $179.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">38% off</span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="193076189790" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Retro Mirror Bluetooth Nostalgia Wireless LED Vintage Speaker"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/jUIAAOSw0tJdaToZ/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Retro Mirror Bluetooth Nostalgia Wireless LED Vintage Speaker">
                                        <a href="/itm/Retro-Mirror-Bluetooth-Nostalgia-Wireless-LED-Vintage-Speaker/193076189790?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006494"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Retro Mirror Bluetooth Nostalgia Wireless LED Vintage Speaker</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $13.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $29.99 </span><span
                                                    class="aria-hide">Previous price: US $29.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">53% off</span></span></div>
                                    <span><a href="/itm/Retro-Mirror-Bluetooth-Nostalgia-Wireless-LED-Vintage-Speaker/193076189790?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006494"
                                             class="dne-itemtile-more-options" target="">More options</a></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-large dne-itemtile-double" itemscope="itemscope"
                                 data-listing-id="352623255181" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Apple iPhone X - 64GB 256GB - Factory GSM Unlocked (AT&amp;T / T-Mobile) Smartphone"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/q-sAAOSwW2RdUXi9/s-l300.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Apple iPhone X - 64GB 256GB - Factory GSM Unlocked (AT&amp;T / T-Mobile) Smartphone">
                                        <a href="/itm/Apple-iPhone-X-64GB-256GB-Factory-GSM-Unlocked-AT-T-T-Mobile-Smartphone/352623255181?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006494"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Apple iPhone X - 64GB 256GB - Factory GSM Unlocked (AT&amp;T / T-Mobile) Smartphone</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $517.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $949.99 </span><span
                                                    class="aria-hide">Previous price: US $949.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">45% off</span></span></div>
                                    <span><a href="/itm/Apple-iPhone-X-64GB-256GB-Factory-GSM-Unlocked-AT-T-T-Mobile-Smartphone/352623255181?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006494"
                                             class="dne-itemtile-more-options" target="">More options</a></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="192673364584" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Nikon Z 7 Mirrorless Digital Camera with 24-70mm Lens"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/uW4AAOSw7wJdUXhW/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Nikon Z 7 Mirrorless Digital Camera with 24-70mm Lens">
                                        <a href="/itm/Nikon-Z-7-Mirrorless-Digital-Camera-with-24-70mm-Lens/192673364584?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006494"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Nikon Z 7 Mirrorless Digital Camera with 24-70mm Lens</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $2,702.23</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $3,999.95 </span><span
                                                    class="aria-hide">Previous price: US $3,999.95</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">32% off</span></span></div>
                                    <span><span class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                </div>
                                <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-show-more dne-skip-focus dne-show-more-without-link">
                                <div class="dne-image-previews">
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Nikon-D7500-Digital-Camera-18-55mm-VR-70-300mm-500mm-Top-Accessory-Bundle/123005170006?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006494">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Nikon D7500 Digital Camera + 18-55mm VR + 70-300mm +500mm + Top Accessory Bundle"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/DW8AAOSwIildG5Zq/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Apple-MacBook-Air-Core-i5-1-6GHz-8GB-RAM-128GB-SSD-13-MMGF2LL-A/113816064446?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006494">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Apple MacBook Air Core i5 1.6GHz 8GB RAM 128GB SSD 13&quot; - MMGF2LL/A"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/VocAAOSwdS1dKQ1F/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Apple-iPad-6th-Generation-9-7-32GB-128GB-WiFi-UNLOCKED-LTE-Cellular-Tablet/232923032215?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006494">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Apple iPad 6th Generation 9.7&quot; 32GB 128GB WiFi UNLOCKED LTE Cellular Tablet"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/mA8AAOSwpcBdcXUl/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Klipsch-S3M-White-HP-In-ear-Headphone-White-Openbox-New/163855085777?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006494">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Klipsch S3M-White-HP In-ear Headphone, White - Openbox New"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/K~wAAOSwOC1ddso3/s-l96.jpg">
                                            </div>
                                        </a></div>
                                </div>
                                <div class="dne-show-more-link">
                                    <button>
                                        <div class="dne-show-more-text"><span><span
                                                        class="dne-see-more-count-text">Show</span><span
                                                        class="dne-see-more-count-text emphasis">85</span><span
                                                        class="dne-see-more-count-text">more</span></span></div>
                                        <div class="dne-show-more-text dne-see-more-type-text"><span><span
                                                        class="dne-see-more-type-text-span">Top Steals in Tech</span></span>
                                        </div>
                                        <i class="icon-deals-double-down-arrow" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ebayui-dne-item-pattern-card  ebayui-dne-item-pattern-card-with-padding"
                 _sp="p2344380.m2735.l22"><h2 class="dne-pattern-title" id="fashion-finds-up-to-70-off"><span>Fashion Finds Up to 70% Off</span>
                </h2>
                <div class="row">
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="264163051782" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="1 ct Diamond Stud Earrings in 14K White Gold" data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/ZZAAAOSwxXZc1JCS/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="1 ct Diamond Stud Earrings in 14K White Gold">
                                        <a href="/itm/1-ct-Diamond-Stud-Earrings-in-14K-White-Gold/264163051782?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006577"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">1 ct Diamond Stud Earrings in 14K White Gold</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $889.00</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $2,599.00 </span><span
                                                    class="aria-hide">Previous price: US $2,599.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">65% off</span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="153606675059" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="adidas Originals Superstar Shoes Women's" data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/8nwAAOSwN-FdXW2T/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="adidas Originals Superstar Shoes Women's">
                                        <a href="/itm/adidas-Originals-Superstar-Shoes-Womens/153606675059?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006577"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">adidas Originals Superstar Shoes Women's</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $56.00</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $100.00 </span><span
                                                    class="aria-hide">Previous price: US $100.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">44% off</span></span></div>
                                    <span><a href="/itm/adidas-Originals-Superstar-Shoes-Womens/153606675059?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006577"
                                             class="dne-itemtile-more-options" target="">More options</a></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-large dne-itemtile-double" itemscope="itemscope"
                                 data-listing-id="312412108595" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="New With Tags Men's Reebok Athletic Gym Muscle Pants Joggers Tech Sweatpants"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/Y3wAAOSwjthcLRhl/s-l300.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="New With Tags Men's Reebok Athletic Gym Muscle Pants Joggers Tech Sweatpants">
                                        <a href="/itm/New-With-Tags-Mens-Reebok-Athletic-Gym-Muscle-Pants-Joggers-Tech-Sweatpants/312412108595?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006577"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">New With Tags Men's Reebok Athletic Gym Muscle Pants Joggers Tech Sweatpants</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $17.49</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $65.00 </span><span
                                                    class="aria-hide">Previous price: US $65.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">73% off</span></span></div>
                                    <span><a href="/itm/New-With-Tags-Mens-Reebok-Athletic-Gym-Muscle-Pants-Joggers-Tech-Sweatpants/312412108595?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006577"
                                             class="dne-itemtile-more-options" target="">More options</a></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="183728643298" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Salvatore Ferragamo Women's Butterfly Sunglasses w/ Gradient Lens - SF781S 001"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/kbcAAOSwdkxdXWZo/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Salvatore Ferragamo Women's Butterfly Sunglasses w/ Gradient Lens - SF781S 001">
                                        <a href="/itm/Salvatore-Ferragamo-Womens-Butterfly-Sunglasses-w-Gradient-Lens-SF781S-001/183728643298?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006577"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Salvatore Ferragamo Women's Butterfly Sunglasses w/ Gradient Lens - SF781S 001</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $64.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $375.00 </span><span
                                                    class="aria-hide">Previous price: US $375.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">82% off</span></span></div>
                                    <span><span class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                </div>
                                <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-show-more dne-skip-focus dne-show-more-without-link">
                                <div class="dne-image-previews">
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/New-Balance-Mens-623V3-Shoes-Black/202562458164?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006577">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="New Balance Men's 623V3 Shoes Black" data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/LFgAAOSwwFNcN1zK/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Bulova-Mens-Quartz-Swarovski-Crystals-Pave-Dial-Two-Tone-35mm-Watch-98C109/264266392511?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006577">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Bulova Men's Quartz Swarovski Crystals Pave Dial Two Tone 35mm Watch 98C109"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/efMAAOSwASRco40M/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/adidas-Originals-Coast-Star-Shoes-Mens/153580528407?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006577">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="adidas Originals Coast Star Shoes Men's"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/DigAAOSwlfhdeCAH/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/baggallini-Womens-Antalya-Top-Zip-Flap-Crossbody-Bag-Nylon-Mult-Colors/382968597071?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006577">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="baggallini Women's Antalya Top Zip Flap Crossbody Bag, Nylon, Mult. Colors"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/FTcAAOSwV69c5rXs/s-l96.jpg">
                                            </div>
                                        </a></div>
                                </div>
                                <div class="dne-show-more-link">
                                    <button>
                                        <div class="dne-show-more-text"><span><span
                                                        class="dne-see-more-count-text">Show</span><span
                                                        class="dne-see-more-count-text emphasis">85</span><span
                                                        class="dne-see-more-count-text">more</span></span></div>
                                        <div class="dne-show-more-text dne-see-more-type-text"><span><span
                                                        class="dne-see-more-type-text-span">Fashion Finds Up to 70% Off</span></span>
                                        </div>
                                        <i class="icon-deals-double-down-arrow" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section _sp="p2344380.m3839.l23" class="ebayui-dne-event-summary-card ebayui-dne-events-desktop">
                <div class="event-doorways">
                    <div class="col">
                        <section class="ebayui-dne-event-banner no-description-timer" aria-role="group"><a
                                    href="/e/fashion/outerwear-090219?_trkparams=5373%3A0%7C5374%3AFeatured"><span
                                        class="ebayui-dne-event-image"><div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Up to 50% Off Light Jackets" data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/OSsAAOSw2QtdaCUH/s-l400.jpg"></div></span>
                                <div class="ebayui-dne-event-banner-content">
                                    <div class="ebayui-dne-event-banner-content-title"><h3>Up to 50% Off Light
                                            Jackets</h3>
                                        <p>Transitional styles from Superdry, and more.</p></div>
                                </div>
                            </a></section>
                    </div>
                    <div class="col">
                        <section class="ebayui-dne-event-banner no-description-timer" aria-role="group"><a
                                    href="/e/fashion/bo-hanes-090219?_trkparams=5373%3A0%7C5374%3AFeatured"><span
                                        class="ebayui-dne-event-image"><div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Up to 60% off Hanes " data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/Oa4AAOSwxX9daXZQ/s-l400.jpg"></div></span>
                                <div class="ebayui-dne-event-banner-content">
                                    <div class="ebayui-dne-event-banner-content-title"><h3>Hanes</h3>
                                        <p>Up to 60% off, direct from brand. </p></div>
                                </div>
                            </a></section>
                    </div>
                    <div class="col">
                        <section class="ebayui-dne-event-banner no-description-timer" aria-role="group"><a
                                    href="/e/fashion/bo4-adidas-091619?_trkparams=5373%3A0%7C5374%3AFeatured"><span
                                        class="ebayui-dne-event-image"><div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="adidas starting at 30% off" data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/znAAAOSwzJlde81O/s-l400.jpg"></div></span>
                                <div class="ebayui-dne-event-banner-content">
                                    <div class="ebayui-dne-event-banner-content-title"><h3>adidas</h3>
                                        <p>Starting at 30% off, direct from brand.</p></div>
                                </div>
                            </a></section>
                    </div>
                </div>
            </section>
            <div class="ebayui-dne-item-pattern-card  ebayui-dne-item-pattern-card-with-padding"
                 _sp="p2344380.m2735.l24"><h2 class="dne-pattern-title" id="best-of-sporting-goods"><span>Best of Sporting Goods</span>
                </h2>
                <div class="row">
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="251980155379" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Genuine Fitbit Flex Activity and Sleep Tracker Wristband Bluetooth"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/e-YAAOSweCpcQOaj/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Genuine Fitbit Flex Activity and Sleep Tracker Wristband Bluetooth">
                                        <a href="/itm/Genuine-Fitbit-Flex-Activity-and-Sleep-Tracker-Wristband-Bluetooth/251980155379?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000001506"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Genuine Fitbit Flex Activity and Sleep Tracker Wristband Bluetooth</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $14.09</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $59.99 </span><span
                                                    class="aria-hide">Previous price: US $59.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">76% off</span></span></div>
                                    <span><a href="/itm/Genuine-Fitbit-Flex-Activity-and-Sleep-Tracker-Wristband-Bluetooth/251980155379?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000001506"
                                             class="dne-itemtile-more-options" target="">More options</a></span></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="133013103688" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="ATN Thor 4 384x288 1.25-5x Smart HD Thermal Rifle Scope - TIWST4381A"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/rYUAAOSw4apbTLEV/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="ATN Thor 4 384x288 1.25-5x Smart HD Thermal Rifle Scope - TIWST4381A">
                                        <a href="/itm/ATN-Thor-4-384x288-1-25-5x-Smart-HD-Thermal-Rifle-Scope-TIWST4381A/133013103688?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000001506"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">ATN Thor 4 384x288 1.25-5x Smart HD Thermal Rifle Scope - TIWST4381A</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $1,639.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $2,499.99 </span><span
                                                    class="aria-hide">Previous price: US $2,499.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">34% off</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-large dne-itemtile-double" itemscope="itemscope"
                                 data-listing-id="293182221065" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Adidas Men's Tour 360 EQT Boa Golf Shoes,  Brand New"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/0xIAAOSwOwJdGjke/s-l300.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Adidas Men's Tour 360 EQT Boa Golf Shoes,  Brand New">
                                        <a href="/itm/Adidas-Mens-Tour-360-EQT-Boa-Golf-Shoes-Brand-New/293182221065?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000001506"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Adidas Men's Tour 360 EQT Boa Golf Shoes,  Brand New</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $88.66</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $220.00 </span><span
                                                    class="aria-hide">Previous price: US $220.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">59% off</span></span></div>
                                    <span><a href="/itm/Adidas-Mens-Tour-360-EQT-Boa-Golf-Shoes-Brand-New/293182221065?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000001506"
                                             class="dne-itemtile-more-options" target="">More options</a></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="131996663090" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="20L Portable Camping Toilet Flush Porta Travel Outdoor Vehicle Boat Toilet Potty"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/9eIAAOSwEgZZftvc/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="20L Portable Camping Toilet Flush Porta Travel Outdoor Vehicle Boat Toilet Potty">
                                        <a href="/itm/20L-Portable-Camping-Toilet-Flush-Porta-Travel-Outdoor-Vehicle-Boat-Toilet-Potty/131996663090?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000001506"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">20L Portable Camping Toilet Flush Porta Travel Outdoor Vehicle Boat Toilet Potty</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $56.69</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $99.99 </span><span
                                                    class="aria-hide">Previous price: US $99.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">43% off</span></span></div>
                                    <span><span class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                </div>
                                <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-show-more dne-skip-focus dne-show-more-without-link">
                                <div class="dne-image-previews">
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Free-2-Day-Delivery-Minn-Kota-Ultrex-Combo-80-45-Universal-Sonar2-iPilot-Minn/372642505563?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000001506">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Free 2 Day Delivery! Minn Kota Ultrex Combo 80 45&quot; Universal Sonar2 iPilot Minn "
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/-UQAAOSwf5FcybTQ/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Carbon-Express-PileDriver-390-Crossbow-Package-w-Cranking-Device-20310/272836939898?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000001506">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Carbon Express PileDriver 390 Crossbow Package w/ Cranking Device - 20310"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/lqwAAOSw2QtdTeK9/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Wildgame-Innovations-Mirage-16-Lightsout-16MP-Game-Camera-w-SD-Card-Batteries/352528633374?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000001506">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Wildgame Innovations Mirage 16 Lightsout 16MP Game Camera w/ SD Card &amp; Batteries"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/vYYAAOSwsPNb~UZk/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Barnett-Whitetail-Hunter-STR-4x32-Scope-375FPS-MO-Camo-Crossbow-Package-78263/372678709395?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000001506">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Barnett Whitetail Hunter STR 4x32 Scope 375FPS MO Camo Crossbow Package 78263"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/fQ0AAOSw~G5c7Bl-/s-l96.jpg">
                                            </div>
                                        </a></div>
                                </div>
                                <div class="dne-show-more-link">
                                    <button>
                                        <div class="dne-show-more-text"><span><span
                                                        class="dne-see-more-count-text">Show</span><span
                                                        class="dne-see-more-count-text emphasis">85</span><span
                                                        class="dne-see-more-count-text">more</span></span></div>
                                        <div class="dne-show-more-text dne-see-more-type-text"><span><span
                                                        class="dne-see-more-type-text-span">Best of Sporting Goods</span></span>
                                        </div>
                                        <i class="icon-deals-double-down-arrow" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ebayui-dne-item-pattern-card  ebayui-dne-item-pattern-card-with-padding"
                 _sp="p2344380.m2735.l26"><h2 class="dne-pattern-title" id="best-of-motors"><span>Best of Motors</span>
                </h2>
                <div class="row">
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="401594275019" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="JEGS 86065 Portable Generator 5000W Surge Watts 4250W Rated Watts 9 Hr. Run Time"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/DZcAAOSw3OhczcdU/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="JEGS 86065 Portable Generator 5000W Surge Watts 4250W Rated Watts 9 Hr. Run Time">
                                        <a href="/itm/JEGS-86065-Portable-Generator-5000W-Surge-Watts-4250W-Rated-Watts-9-Hr-Run-Time/401594275019?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000000126"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">JEGS 86065 Portable Generator 5000W Surge Watts 4250W Rated Watts 9 Hr. Run Time</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $373.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $399.99 </span><span
                                                    class="aria-hide">Previous price: US $399.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">6% off</span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="293195329224" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Powerbuilt Inverter Generator 3500 Watts, Super Quiet, Electric Start - 240064"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/t10AAOSwBVpdXCej/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Powerbuilt Inverter Generator 3500 Watts, Super Quiet, Electric Start - 240064">
                                        <a href="/itm/Powerbuilt-Inverter-Generator-3500-Watts-Super-Quiet-Electric-Start-240064/293195329224?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000000126"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Powerbuilt Inverter Generator 3500 Watts, Super Quiet, Electric Start - 240064</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $742.25</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $1,099.99 </span><span
                                                    class="aria-hide">Previous price: US $1,099.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">32% off</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-large dne-itemtile-double" itemscope="itemscope"
                                 data-listing-id="312040238131" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="JEGS Performance Products 81963 Inverter Generator 1600W Surge Watts 2000W Rated"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/sNUAAOSwlxxbrNhy/s-l300.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="JEGS Performance Products 81963 Inverter Generator 1600W Surge Watts 2000W Rated">
                                        <a href="/itm/JEGS-Performance-Products-81963-Inverter-Generator-1600W-Surge-Watts-2000W-Rated/312040238131?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000000126"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">JEGS Performance Products 81963 Inverter Generator 1600W Surge Watts 2000W Rated</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $392.69</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $429.99 </span><span
                                                    class="aria-hide">Previous price: US $429.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">8% off</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="232169553365" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="U-Pol Products 0820 RAPTOR Black Truck Bed Liner Kit - 4 Liter Upol"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/yHsAAOSwWMhaXio6/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="U-Pol Products 0820 RAPTOR Black Truck Bed Liner Kit - 4 Liter Upol">
                                        <a href="/itm/U-Pol-Products-0820-RAPTOR-Black-Truck-Bed-Liner-Kit-4-Liter-Upol/232169553365?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000000126"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">U-Pol Products 0820 RAPTOR Black Truck Bed Liner Kit - 4 Liter Upol</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $114.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $132.24 </span><span
                                                    class="aria-hide">Previous price: US $132.24</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">13% off</span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-show-more dne-skip-focus dne-show-more-without-link">
                                <div class="dne-image-previews">
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/4-New-Multi-mile-Trail-Guide-All-Terrain-P265-75r16-Tires-2657516-265-75-16/263395851546?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000000126">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="4 New Multi-mile Trail Guide All Terrain  - P265/75r16 Tires 2657516 265 75 16"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/eLsAAOSw6kBdgQTi/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/83-Piece-Tools-2-Go-Tool-Set-with-Roll-Up-Pouch-Motorcycle-Auto-ATV-240119/273598358537?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000000126">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="83 Piece Tools-2-Go Tool Set with Roll-Up Pouch Motorcycle, Auto, ATV - 240119"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/-VgAAOSwLNxcCctc/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/JEGS-81420-JEGS-Rolling-Work-Table-200-lb-Capacity/113750862295?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000000126">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="JEGS 81420 JEGS Rolling Work Table 200 lb. Capacity"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/9AAAAOSwH6Rc3FxT/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/JEGS-65012-Magnetic-Fender-Cover-Protect-your-Car-or-Truck-while-you-work/310716764447?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000000126">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="JEGS 65012 Magnetic Fender Cover, Protect your Car or Truck while you work"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/TlEAAOSwFixbrL7c/s-l96.jpg">
                                            </div>
                                        </a></div>
                                </div>
                                <div class="dne-show-more-link">
                                    <button>
                                        <div class="dne-show-more-text"><span><span
                                                        class="dne-see-more-count-text">Show</span><span
                                                        class="dne-see-more-count-text emphasis">85</span><span
                                                        class="dne-see-more-count-text">more</span></span></div>
                                        <div class="dne-show-more-text dne-see-more-type-text"><span><span
                                                        class="dne-see-more-type-text-span">Best of Motors</span></span>
                                        </div>
                                        <i class="icon-deals-double-down-arrow" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ebayui-dne-item-pattern-card  ebayui-dne-item-pattern-card-with-padding"
                 _sp="p2344380.m2735.l28"><h2 class="dne-pattern-title" id="best-of-health-beauty"><span>Best of Health &amp; Beauty</span>
                </h2>
                <div class="row">
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="163706205605" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Peppermint Hemp Oil Extract for Pain Relief, Stress, Anxiety, Sleep - (3 PACK)"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/Pk4AAOSwj9xdgQ6T/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Peppermint Hemp Oil Extract for Pain Relief, Stress, Anxiety, Sleep - (3 PACK)">
                                        <a href="/itm/Peppermint-Hemp-Oil-Extract-for-Pain-Relief-Stress-Anxiety-Sleep-3-PACK/163706205605?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000005848"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Peppermint Hemp Oil Extract for Pain Relief, Stress, Anxiety, Sleep - (3 PACK)</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $22.49</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $49.98 </span><span
                                                    class="aria-hide">Previous price: US $49.98</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">55% off</span></span></div>
                                    <span><span class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                </div>
                                <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="112485504082" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="SoClean 2 CPAP Cleaner &amp; Sanitizer -PLUS- ResMed AirSense 10/AirCurve 10 Adapter"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/Jm4AAOSwpcpc3chs/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="SoClean 2 CPAP Cleaner &amp; Sanitizer -PLUS- ResMed AirSense 10/AirCurve 10 Adapter">
                                        <a href="/itm/SoClean-2-CPAP-Cleaner-Sanitizer-PLUS-ResMed-AirSense-10-AirCurve-10-Adapter/112485504082?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000005848"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">SoClean 2 CPAP Cleaner &amp; Sanitizer -PLUS- ResMed AirSense 10/AirCurve 10 Adapter</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $298.00</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $398.00 </span><span
                                                    class="aria-hide">Previous price: US $398.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">25% off</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-large dne-itemtile-double" itemscope="itemscope"
                                 data-listing-id="273605974730" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Dyson Supersonic Hair Dryer | Refurbished" data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/6ZkAAOSwFcJdf6zg/s-l300.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Dyson Supersonic Hair Dryer | Refurbished">
                                        <a href="/itm/Dyson-Supersonic-Hair-Dryer-Refurbished/273605974730?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000005848"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Dyson Supersonic Hair Dryer | Refurbished</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $219.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $399.99 </span><span
                                                    class="aria-hide">Previous price: US $399.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">45% off</span></span></div>
                                    <span><a href="/itm/Dyson-Supersonic-Hair-Dryer-Refurbished/273605974730?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000005848"
                                             class="dne-itemtile-more-options"
                                             target="">More options</a></span><span><span
                                                class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                </div>
                                <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="223623575770" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Anastasia Beverly Hills - Liquid Lipstick - Mini Set 3pc"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/0dEAAOSwZtBdcSqX/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Anastasia Beverly Hills - Liquid Lipstick - Mini Set 3pc">
                                        <a href="/itm/Anastasia-Beverly-Hills-Liquid-Lipstick-Mini-Set-3pc/223623575770?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000005848"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Anastasia Beverly Hills - Liquid Lipstick - Mini Set 3pc</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $10.00</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $15.00 </span><span
                                                    class="aria-hide">Previous price: US $15.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">33% off</span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-show-more dne-skip-focus dne-show-more-without-link">
                                <div class="dne-image-previews">
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Omega-XL-60ct-by-Great-HealthWorks-Small-Potent-Joint-Pain-Relief-Omega-3/292461027132?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000005848">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Omega XL 60ct by Great HealthWorks: Small, Potent, Joint Pain Relief - Omega-3"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/hJAAAOSw4S1cdwc3/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/High-T-Black-Testosterone-Booster-Supplement-120-Capsules/302665166371?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000005848">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="High T Black- Testosterone Booster Supplement- 120 Capsules"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/fUkAAOSwX4FdG6ha/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/NAUTICA-BLUE-Cologne-for-Men-3-4-oz-Eau-de-Toilette-BRAND-NEW-IN-BOX/201848157306?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000005848">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="NAUTICA BLUE  * Cologne for Men * 3.4 oz Eau de Toilette* BRAND NEW IN BOX"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/qQQAAOSwfVpYwx5Y/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/GutProtect-Gut-Health-Formula-Immune-Support-EpiCor-and-Probiotic-DE111/253830261920?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000005848">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="GutProtect - Gut Health Formula &amp; Immune Support - EpiCor and Probiotic DE111"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/Z6AAAOSw~91bgDmb/s-l96.jpg">
                                            </div>
                                        </a></div>
                                </div>
                                <div class="dne-show-more-link">
                                    <button>
                                        <div class="dne-show-more-text"><span><span
                                                        class="dne-see-more-count-text">Show</span><span
                                                        class="dne-see-more-count-text emphasis">85</span><span
                                                        class="dne-see-more-count-text">more</span></span></div>
                                        <div class="dne-show-more-text dne-see-more-type-text"><span><span
                                                        class="dne-see-more-type-text-span">Best of Health &amp; Beauty</span></span>
                                        </div>
                                        <i class="icon-deals-double-down-arrow" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section _sp="p2344380.m3839.l29" class="ebayui-dne-event-summary-card ebayui-dne-events-desktop">
                <div class="event-doorways">
                    <div class="col">
                        <section class="ebayui-dne-event-banner no-description-timer" aria-role="group"><a
                                    href="/e/fashion/vision-care-052719?_trkparams=5373%3A0%7C5374%3AFeatured"><span
                                        class="ebayui-dne-event-image"><div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Stylish Frames " data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/~gkAAOSwpcpc5cmn/s-l400.jpg"></div></span>
                                <div class="ebayui-dne-event-banner-content">
                                    <div class="ebayui-dne-event-banner-content-title"><h3>Stylish Frames From Top
                                            Brands</h3>
                                        <p>Ray-Ban and more up to 60% off.</p></div>
                                </div>
                            </a></section>
                    </div>
                    <div class="col">
                        <section class="ebayui-dne-event-banner no-description-timer" aria-role="group"><a
                                    href="/e/fashion/beauty-week-091619?_trkparams=5373%3A0%7C5374%3AFeatured"><span
                                        class="ebayui-dne-event-image"><div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Save Big On Your Beauty Tool" data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/Q6wAAOSwkNldeCBT/s-l400.jpg"></div></span>
                                <div class="ebayui-dne-event-banner-content">
                                    <div class="ebayui-dne-event-banner-content-title"><h3>Save Big On Your Beauty
                                            Toolkit</h3>
                                        <p>Up to 70% off Dyson and more.</p></div>
                                </div>
                            </a></section>
                    </div>
                    <div class="col">
                        <section class="ebayui-dne-event-banner no-description-timer" aria-role="group"><a
                                    href="/e/fashion/health-massage-090919?_trkparams=5373%3A0%7C5374%3AFeatured"><span
                                        class="ebayui-dne-event-image"><div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Up to 70% off massage " data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/HQ4AAOSwFVFdZauC/s-l400.jpg"></div></span>
                                <div class="ebayui-dne-event-banner-content">
                                    <div class="ebayui-dne-event-banner-content-title"><h3>Take a Break and Relax</h3>
                                        <p>Up to 70% off massage equipment.</p></div>
                                </div>
                            </a></section>
                    </div>
                </div>
            </section>
            <div class="ebayui-dne-item-pattern-card  ebayui-dne-item-pattern-card-with-padding"
                 _sp="p2344380.m2735.l30"><h2 class="dne-pattern-title" id="home-garden-september-savings-up-to-70-off">
                    <span>Home &amp; Garden September Savings Up to 70% Off</span></h2>
                <div class="row">
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="222463330398" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Danby 5000 BTU Window Air Conditioner, Cools up to 150sqft w/2 Fan Speeds, White"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/K7gAAOSwAANY49ag/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Danby 5000 BTU Window Air Conditioner, Cools up to 150sqft w/2 Fan Speeds, White">
                                        <a href="/itm/Danby-5000-BTU-Window-Air-Conditioner-Cools-up-to-150sqft-w-2-Fan-Speeds-White/222463330398?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006557"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Danby 5000 BTU Window Air Conditioner, Cools up to 150sqft w/2 Fan Speeds, White</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $138.00</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $249.99 </span><span
                                                    class="aria-hide">Previous price: US $249.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">44% off</span></span></div>
                                    <span><span class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                </div>
                                <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="352344699740" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="iRobot Roomba 960 App-Controlled Self-Charging Robot Vacuum - Gray"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/8z8AAOSwizpcjmIW/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="iRobot Roomba 960 App-Controlled Self-Charging Robot Vacuum - Gray">
                                        <a href="/itm/iRobot-Roomba-960-App-Controlled-Self-Charging-Robot-Vacuum-Gray/352344699740?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006557"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">iRobot Roomba 960 App-Controlled Self-Charging Robot Vacuum - Gray</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $349.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $699.99 </span><span
                                                    class="aria-hide">Previous price: US $699.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">50% off</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-large dne-itemtile-double" itemscope="itemscope"
                                 data-listing-id="293223481152" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="iRobot Roomba 6 Series Automatic Robotic Vacuum w/ No Virtual Wall"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/onMAAOSw4CRdeWpg/s-l300.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="iRobot Roomba 6 Series Automatic Robotic Vacuum w/ No Virtual Wall">
                                        <a href="/itm/iRobot-Roomba-6-Series-Automatic-Robotic-Vacuum-w-No-Virtual-Wall/293223481152?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006557"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">iRobot Roomba 6 Series Automatic Robotic Vacuum w/ No Virtual Wall</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $120.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $249.99 </span><span
                                                    class="aria-hide">Previous price: US $249.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">51% off</span></span></div>
                                    <span><a href="/itm/iRobot-Roomba-6-Series-Automatic-Robotic-Vacuum-w-No-Virtual-Wall/293223481152?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006557"
                                             class="dne-itemtile-more-options" target="">More options</a></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="392026651453" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="iRobot Roomba 980 App-Controlled Self-Charging Vacuum with Wi-Fi Connectivity"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/xsoAAOSwdHpbzfRt/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="iRobot Roomba 980 App-Controlled Self-Charging Vacuum with Wi-Fi Connectivity">
                                        <a href="/itm/iRobot-Roomba-980-App-Controlled-Self-Charging-Vacuum-with-Wi-Fi-Connectivity/392026651453?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006557"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">iRobot Roomba 980 App-Controlled Self-Charging Vacuum with Wi-Fi Connectivity</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $419.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $899.99 </span><span
                                                    class="aria-hide">Previous price: US $899.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">53% off</span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-show-more dne-skip-focus dne-show-more-without-link">
                                <div class="dne-image-previews">
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/KitchenAid-Stand-Mixer-tilt-5-QT-RRK150-Artisan-Tilt-Choose-From-Many-Colors/361965760562?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006557">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="KitchenAid Stand Mixer tilt 5-QT RRK150 Artisan Tilt Choose From Many Colors"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/E6sAAOSw8OFb94RM/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Black-5-Tier-Layer-Shelf-Adjustable-Wire-Metal-Shelving-Rack-Heavy-Duty-Garage/372403870723?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006557">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Black 5-Tier Layer Shelf Adjustable Wire Metal Shelving Rack Heavy Duty Garage"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/L1wAAOSwsspbdTdf/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Six-Size-Hydroponics-Grow-Tent-100-Reflective-Mylar-Non-Toxic-Indoor-w-Window/132462004153?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006557">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Six Size Hydroponics Grow Tent 100% Reflective Mylar Non Toxic Indoor /w Window"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/2XMAAOSwCtJac~7u/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/RolliCool-Portable-Air-Conditioner-12-000-BTU-Mobile-APP-w-Heater-Fan-AC-Unit/223508377174?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006557">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="RolliCool Portable Air Conditioner 12,000 BTU Mobile APP w/ Heater Fan AC Unit "
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/sQgAAOSwmu5c0pVU/s-l96.jpg">
                                            </div>
                                        </a></div>
                                </div>
                                <div class="dne-show-more-link">
                                    <button>
                                        <div class="dne-show-more-text"><span><span
                                                        class="dne-see-more-count-text">Show</span><span
                                                        class="dne-see-more-count-text emphasis">85</span><span
                                                        class="dne-see-more-count-text">more</span></span></div>
                                        <div class="dne-show-more-text dne-see-more-type-text"><span><span
                                                        class="dne-see-more-type-text-span">Home &amp; Garden September Savings Up to 70% Off</span></span>
                                        </div>
                                        <i class="icon-deals-double-down-arrow" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ebayui-dne-item-pattern-card  ebayui-dne-item-pattern-card-with-padding"
                 _sp="p2344380.m2735.l32"><h2 class="dne-pattern-title"
                                              id="vinyl-obsession-week-exclusive-bundles-and-deals"><span>Vinyl Obsession Week Exclusive Bundles and Deals</span>
                </h2>
                <div class="row">
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="142935201174" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Chris Stapleton Studio Albums Collection Vinyl Bundle  [Vinyl New]"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/gC4AAOSwWlFbmElL/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Chris Stapleton Studio Albums Collection Vinyl Bundle  [Vinyl New]">
                                        <a href="/itm/Chris-Stapleton-Studio-Albums-Collection-Vinyl-Bundle-Vinyl-New/142935201174?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006581"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Chris Stapleton Studio Albums Collection Vinyl Bundle  [Vinyl New]</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $58.49</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $68.98 </span><span
                                                    class="aria-hide">Previous price: US $68.98</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">15% off</span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="132780257938" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Lana Del Rey - Born to Die, Paradise and Ultraviolence Vinyl Bundle [Vinyl New]"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/0SMAAOSwiZZbn6qr/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Lana Del Rey - Born to Die, Paradise and Ultraviolence Vinyl Bundle [Vinyl New]">
                                        <a href="/itm/Lana-Del-Rey-Born-to-Die-Paradise-and-Ultraviolence-Vinyl-Bundle-Vinyl-New/132780257938?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006581"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Lana Del Rey - Born to Die, Paradise and Ultraviolence Vinyl Bundle [Vinyl New]</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $52.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $58.98 </span><span
                                                    class="aria-hide">Previous price: US $58.98</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">10% off</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-large dne-itemtile-double" itemscope="itemscope"
                                 data-listing-id="132780257900" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Metallica - Cliff Burton Vinyl Bundle  [Vinyl New]"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/uvcAAOSwlHNbn6q4/s-l300.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Metallica - Cliff Burton Vinyl Bundle  [Vinyl New]">
                                        <a href="/itm/Metallica-Cliff-Burton-Vinyl-Bundle-Vinyl-New/132780257900?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006581"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Metallica - Cliff Burton Vinyl Bundle  [Vinyl New]</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $55.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $59.98 </span><span
                                                    class="aria-hide">Previous price: US $59.98</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">6% off</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="133160825670" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Vinyls From The 2019 - Vinyls From The 2019 Top 40 [New Vinyl]"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/xW8AAOSw7nldcB6o/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Vinyls From The 2019 - Vinyls From The 2019 Top 40 [New Vinyl]">
                                        <a href="/itm/Vinyls-From-The-2019-Top-40-Vinyl-Bundle-New-Vinyl/133160825670?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006581"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Vinyls From The 2019 - Vinyls From The 2019 Top 40 [New Vinyl]</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $59.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $73.94 </span><span
                                                    class="aria-hide">Previous price: US $73.94</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">18% off</span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-show-more dne-skip-focus dne-show-more-without-link">
                                <div class="dne-image-previews">
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Audio-Technica-AT-LP2X-Record-Player-Gray/362743695384?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006581">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Audio-Technica AT-LP2X Record Player Gray"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/BeEAAOSwefJdblmn/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/The-Beatles-The-Beatles-Vinyl-Bundle-New-Vinyl/362744804704?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006581">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="The Beatles - The Beatles Vinyl Bundle [New Vinyl]"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/jhAAAOSw5HBdcB6r/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Fleetwood-Mac-Rumours-New-Vinyl/131598476222?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006581">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Fleetwood Mac - Rumours [New Vinyl]" data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/980AAOSwls5Y7B7q/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Nirvana-Nevermind-New-Vinyl/361592337112?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006581">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Nirvana - Nevermind [New Vinyl]" data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/AfMAAOSwc49Y7TKW/s-l96.jpg">
                                            </div>
                                        </a></div>
                                </div>
                                <div class="dne-show-more-link">
                                    <button>
                                        <div class="dne-show-more-text"><span><span
                                                        class="dne-see-more-count-text">Show</span><span
                                                        class="dne-see-more-count-text emphasis">85</span><span
                                                        class="dne-see-more-count-text">more</span></span></div>
                                        <div class="dne-show-more-text dne-see-more-type-text"><span><span
                                                        class="dne-see-more-type-text-span">Vinyl Obsession Week Exclusive Bundles and Deals</span></span>
                                        </div>
                                        <i class="icon-deals-double-down-arrow" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ebayui-dne-item-pattern-card  ebayui-dne-item-pattern-card-with-padding"
                 _sp="p2344380.m2735.l34"><h2 class="dne-pattern-title" id="hot-deals-on-home-tech"><span>Hot Deals on Home Tech</span>
                </h2>
                <div class="row">
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="183709997240" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Samsung QN82Q60R 82 inc Smart QLED 4K Ultra HD TV with HDR"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/~gEAAOSw0KhceVeG/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Samsung QN82Q60R 82 inc Smart QLED 4K Ultra HD TV with HDR">
                                        <a href="/itm/Samsung-QN82Q60R-82-inc-Smart-QLED-4K-Ultra-HD-TV-with-HDR/183709997240?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006580"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Samsung QN82Q60R 82 inc Smart QLED 4K Ultra HD TV with HDR</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $2,279.00</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $5,999.00 </span><span
                                                    class="aria-hide">Previous price: US $5,999.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">62% off</span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="351885086628" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Yamaha R-S202BL Stereo Receiver with Bluetooth"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/9TEAAOSw9mpaAcyc/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Yamaha R-S202BL Stereo Receiver with Bluetooth">
                                        <a href="/itm/Yamaha-R-S202BL-Stereo-Receiver-with-Bluetooth/351885086628?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006580"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Yamaha R-S202BL Stereo Receiver with Bluetooth</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $149.95</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $179.95 </span><span
                                                    class="aria-hide">Previous price: US $179.95</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">16% off</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-large dne-itemtile-double" itemscope="itemscope"
                                 data-listing-id="254195700125" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="LG OLED55C9P 55&quot; 4K HDR Smart AI OLED TV w/ ThinQ - OLED55C9PUA (2019 model)"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/oZcAAOSw6IlckRm7/s-l300.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="LG OLED55C9P 55&quot; 4K HDR Smart AI OLED TV w/ ThinQ - OLED55C9PUA (2019 model)">
                                        <a href="/itm/LG-OLED55C9P-55-4K-HDR-Smart-AI-OLED-TV-w-ThinQ-OLED55C9PUA-2019-model/254195700125?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006580"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">LG OLED55C9P 55" 4K HDR Smart AI OLED TV w/ ThinQ - OLED55C9PUA (2019 model)</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $1,399.00</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $2,999.00 </span><span
                                                    class="aria-hide">Previous price: US $2,999.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">53% off</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="183901994971" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Google Home Hub with Google Assistant - GA00515-US"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/EZgAAOSwmrVdLeTq/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Google Home Hub with Google Assistant - GA00515-US">
                                        <a href="/itm/Google-Home-Hub-with-Google-Assistant-GA00515-US/183901994971?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006580"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Google Home Hub with Google Assistant - GA00515-US</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $69.95</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-show-more dne-skip-focus dne-show-more-without-link">
                                <div class="dne-image-previews">
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/LG-OLED65E9P-65-4K-HDR-Smart-AI-OLED-TV-w-ThinQ-OLED65E9PUA/254195704102?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006580">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="LG OLED65E9P 65&quot; 4K HDR Smart AI OLED TV w/ ThinQ  OLED65E9PUA "
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/Ry4AAOSwzsNcriZY/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Rockville-RHB70-Home-Theater-Compact-Powered-Speaker-System-w-Bluetooth-USB-FM/391948561584?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006580">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Rockville RHB70 Home Theater Compact Powered Speaker System w Bluetooth/USB/FM"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/Xa0AAOSwk-9bty2E/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/2-Rockville-RHTSB-36-Inch-Bookshelf-Speaker-Stands-Surround-Sound-Home-Theater/391917880046?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006580">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="2) Rockville RHTSB 36&quot; Inch Bookshelf Speaker Stands Surround Sound Home Theater"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/20wAAOSwCgtcUrky/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/2-Rockville-RockSlim-White-Home-Theater-5-25-240w-Easy-Wall-Mount-Slim-Speakers/352461493639?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006580">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="2 Rockville RockSlim White Home Theater 5.25&quot; 240w Easy Wall Mount Slim Speakers"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/kfgAAOSwwD5dbn4N/s-l96.jpg">
                                            </div>
                                        </a></div>
                                </div>
                                <div class="dne-show-more-link">
                                    <button>
                                        <div class="dne-show-more-text"><span><span
                                                        class="dne-see-more-count-text">Show</span><span
                                                        class="dne-see-more-count-text emphasis">85</span><span
                                                        class="dne-see-more-count-text">more</span></span></div>
                                        <div class="dne-show-more-text dne-see-more-type-text"><span><span
                                                        class="dne-see-more-type-text-span">Hot Deals on Home Tech</span></span>
                                        </div>
                                        <i class="icon-deals-double-down-arrow" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ebayui-dne-item-pattern-card  ebayui-dne-item-pattern-card-with-padding"
                 _sp="p2344380.m2735.l36"><h2 class="dne-pattern-title" id="hot-savings-on-handbags-accessories-more">
                    <span>Hot Savings on Handbags, Accessories &amp; More</span></h2>
                <div class="row">
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="332161523378" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="1/2Ct Round Genuine Diamond Studs Earrings in 14K White Or Yellow Gold"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/RVIAAOSwWAhcBtmt/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="1/2Ct Round Genuine Diamond Studs Earrings in 14K White Or Yellow Gold">
                                        <a href="/itm/1-2Ct-Round-Genuine-Diamond-Studs-Earrings-in-14K-White-Or-Yellow-Gold/332161523378?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006576"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">1/2Ct Round Genuine Diamond Studs Earrings in 14K White Or Yellow Gold</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $174.07</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $666.63 </span><span
                                                    class="aria-hide">Previous price: US $666.63</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">73% off</span></span></div>
                                    <span><a href="/itm/1-2Ct-Round-Genuine-Diamond-Studs-Earrings-in-14K-White-Or-Yellow-Gold/332161523378?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006576"
                                             class="dne-itemtile-more-options" target="">More options</a></span></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="264369638929" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Created Emerald &amp; White Topaz Teardrop Pendant in Sterling Silver, 18&quot;"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/hcsAAOSwytpdC2SW/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Created Emerald &amp; White Topaz Teardrop Pendant in Sterling Silver, 18&quot;">
                                        <a href="/itm/Created-Emerald-White-Topaz-Teardrop-Pendant-in-Sterling-Silver-18/264369638929?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006576"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Created Emerald &amp; White Topaz Teardrop Pendant in Sterling Silver, 18"</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $18.79</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $89.00 </span><span
                                                    class="aria-hide">Previous price: US $89.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">78% off</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-large dne-itemtile-double" itemscope="itemscope"
                                 data-listing-id="233251721512" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Michael Kors Jet Set Double Zip Wristlet Phone Wallet Pink Brown Floral "
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/z9UAAOSwk0tdXJay/s-l300.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Michael Kors Jet Set Double Zip Wristlet Phone Wallet Pink Brown Floral">
                                        <a href="/itm/Michael-Kors-Jet-Set-Double-Zip-Wristlet-Phone-Wallet-Pink-Brown-Floral/233251721512?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006576"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Michael Kors Jet Set Double Zip Wristlet Phone Wallet Pink Brown Floral</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $49.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $178.00 </span><span
                                                    class="aria-hide">Previous price: US $178.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">71% off</span></span></div>
                                    <span><a href="/itm/Michael-Kors-Jet-Set-Double-Zip-Wristlet-Phone-Wallet-Pink-Brown-Floral/233251721512?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006576"
                                             class="dne-itemtile-more-options" target="">More options</a></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="333248525956" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Technomarine TM-118123 Cruise Men's 46mm Chronograph Gold-Tone Black Dial Watch"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/3YsAAOSwsXxdE6bM/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Technomarine TM-118123 Cruise Men's 46mm Chronograph Gold-Tone Black Dial Watch">
                                        <a href="/itm/Technomarine-TM-118123-Cruise-Mens-46mm-Chronograph-Gold-Tone-Black-Dial-Watch/333248525956?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006576"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Technomarine TM-118123 Cruise Men's 46mm Chronograph Gold-Tone Black Dial Watch</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $97.86</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $490.00 </span><span
                                                    class="aria-hide">Previous price: US $490.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">80% off</span></span></div>
                                    <span><span class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                </div>
                                <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-show-more dne-skip-focus dne-show-more-without-link">
                                <div class="dne-image-previews">
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Michael-Kors-Medium-Carryall-Tote-Jet-Set-Travel/192918206012?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006576">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Michael Kors Medium Carryall Tote Jet Set Travel"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/TggAAOSwv-Bc3Ml-/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/1-2ct-Solitaire-Round-Diamond-White-Gold-New-Pendant-Womens-Necklace/332680609176?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006576">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="1/2ct Solitaire Round Diamond White Gold New Pendant Womens Necklace"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/bA4AAOSw1xVbIrIj/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Kenneth-Cole-Reaction-Womens-Square-Crystal-Seafood-Sunglass-KC1285-93C/332832584650?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006576">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Kenneth Cole Reaction Women's Square Crystal Seafood Sunglass KC1285 93C"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/D40AAOSwkFZcBYIo/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/XOXO-Tennis-Bracelet-with-Blue-Diamond-in-Sterling-Silver-Plated-Brass-7-1-4/262896588166?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006576">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="XOXO Tennis Bracelet with Blue Diamond in Sterling Silver-Plated Brass, 7 1/4&quot;"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/PfcAAOSwSiVc0xDC/s-l96.jpg">
                                            </div>
                                        </a></div>
                                </div>
                                <div class="dne-show-more-link">
                                    <button>
                                        <div class="dne-show-more-text"><span><span
                                                        class="dne-see-more-count-text">Show</span><span
                                                        class="dne-see-more-count-text emphasis">85</span><span
                                                        class="dne-see-more-count-text">more</span></span></div>
                                        <div class="dne-show-more-text dne-see-more-type-text"><span><span
                                                        class="dne-see-more-type-text-span">Hot Savings on Handbags, Accessories &amp; More</span></span>
                                        </div>
                                        <i class="icon-deals-double-down-arrow" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section _sp="p2344380.m3839.l37" class="ebayui-dne-event-summary-card ebayui-dne-events-desktop">
                <div class="event-doorways">
                    <div class="col">
                        <section class="ebayui-dne-event-banner no-description-timer" aria-role="group"><a
                                    href="/e/fashion/gold-jewelry-061019?_trkparams=5373%3A0%7C5374%3AFeatured"><span
                                        class="ebayui-dne-event-image"><div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Up to 70% Off." data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/EAgAAOSwtjRc-Upm/s-l400.jpg"></div></span>
                                <div class="ebayui-dne-event-banner-content">
                                    <div class="ebayui-dne-event-banner-content-title"><h3>Up to 70% Off. That's Solid
                                            Gold!</h3>
                                        <p>Save on chains, rings, and more.</p></div>
                                </div>
                            </a></section>
                    </div>
                    <div class="col">
                        <section class="ebayui-dne-event-banner no-description-timer" aria-role="group"><a
                                    href="/e/fashion/bo4-louis-vuitton-091619?_trkparams=5373%3A0%7C5374%3AFeatured"><span
                                        class="ebayui-dne-event-image"><div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Up to 10% off Louis Vuitton" data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/cKAAAOSwuhNdf-GC/s-l400.jpg"></div></span>
                                <div class="ebayui-dne-event-banner-content">
                                    <div class="ebayui-dne-event-banner-content-title"><h3>Louis Vuitton</h3>
                                        <p>Up to 10% off.</p></div>
                                </div>
                            </a></section>
                    </div>
                    <div class="col">
                        <section class="ebayui-dne-event-banner no-description-timer" aria-role="group"><a
                                    href="/e/fashion/bo4-citizen-091619?_trkparams=5373%3A0%7C5374%3AFeatured"><span
                                        class="ebayui-dne-event-image"><div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Citizen starting at 60% off" data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/ZTAAAOSwKRFdf-XM/s-l400.jpg"></div></span>
                                <div class="ebayui-dne-event-banner-content">
                                    <div class="ebayui-dne-event-banner-content-title"><h3>Citizen</h3>
                                        <p>Starting at 60% off.</p></div>
                                </div>
                            </a></section>
                    </div>
                </div>
            </section>
            <div class="ebayui-dne-item-pattern-card  ebayui-dne-item-pattern-card-with-padding"
                 _sp="p2344380.m2735.l38"><h2 class="dne-pattern-title" id="fabulous-5-finds">
                    <span>Fabulous $5 Finds</span></h2>
                <div class="row">
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="352605349215" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Cosmetic Beauty Makeup Bag Case Organizer Zipper Holder Handbag Travel Toiletry"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/W68AAOSw9r1V8c8D/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Cosmetic Beauty Makeup Bag Case Organizer Zipper Holder Handbag Travel Toiletry">
                                        <a href="/itm/Cosmetic-Beauty-Makeup-Bag-Case-Organizer-Zipper-Holder-Handbag-Travel-Toiletry/352605349215?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006350"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Cosmetic Beauty Makeup Bag Case Organizer Zipper Holder Handbag Travel Toiletry</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $3.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <span><a href="/itm/Cosmetic-Beauty-Makeup-Bag-Case-Organizer-Zipper-Holder-Handbag-Travel-Toiletry/352605349215?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006350"
                                             class="dne-itemtile-more-options" target="">More options</a></span></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="391826293924" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="USB-C 3.1 Type-C 10ft Nylon Braided Rope Data Sync Charger Charging Cable Cord"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/IysAAOSwtC5cwC6a/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="USB-C 3.1 Type-C 10ft Nylon Braided Rope Data Sync Charger Charging Cable Cord">
                                        <a href="/itm/USB-C-3-1-Type-C-10ft-Nylon-Braided-Rope-Data-Sync-Charger-Charging-Cable-Cord/391826293924?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006350"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">USB-C 3.1 Type-C 10ft Nylon Braided Rope Data Sync Charger Charging Cable Cord</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $4.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $19.99 </span><span
                                                    class="aria-hide">Previous price: US $19.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">75% off</span></span></div>
                                    <span><a href="/itm/USB-C-3-1-Type-C-10ft-Nylon-Braided-Rope-Data-Sync-Charger-Charging-Cable-Cord/391826293924?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006350"
                                             class="dne-itemtile-more-options" target="">More options</a></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-large dne-itemtile-double" itemscope="itemscope"
                                 data-listing-id="323826506233" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="18K White Gold Plated Square Earrings with Crystals from Swarovski®"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/FTkAAOSwAmJcLml0/s-l300.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="18K White Gold Plated Square Earrings with Crystals from Swarovski®">
                                        <a href="/itm/18K-White-Gold-Plated-Halo-Pave-Square-Earrings-with-Crystals-from-Swarovski/323826506233?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006350"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">18K White Gold Plated Square Earrings with Crystals from Swarovski®</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $4.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $75.55 </span><span
                                                    class="aria-hide">Previous price: US $75.55</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">93% off</span></span></div>
                                    <span><span class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                </div>
                                <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="401764636841" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Clear Silicone Bumper Case For Samsung Galaxy S10e S10 S9 S8 Plus S7 Note 9 8 A6"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/FN8AAOSw2PhdTYcW/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Clear Silicone Bumper Case For Samsung Galaxy S10e S10 S9 S8 Plus S7 Note 9 8 A6">
                                        <a href="/itm/Clear-Silicone-Bumper-Case-For-Samsung-Galaxy-S10-S9-S8-Plus-S7-Note-9-8-A6-5G/401764636841?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006350"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Clear Silicone Bumper Case For Samsung Galaxy S10e S10 S9 S8 Plus S7 Note 9 8 A6</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $1.95</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <span><span class="dne-itemtile-delivery">Free shipping</span></span><span><a
                                                href="/itm/Clear-Silicone-Bumper-Case-For-Samsung-Galaxy-S10-S9-S8-Plus-S7-Note-9-8-A6-5G/401764636841?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006350"
                                                class="dne-itemtile-more-options" target="">More options</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-show-more dne-skip-focus dne-show-more-without-link">
                                <div class="dne-image-previews">
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Travel-3D-Eye-Mask-Sleep-Soft-Padded-Shade-Cover-Rest-Relax-Sleeping-Blindfold/301894617836?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006350">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Travel 3D Eye Mask Sleep Soft Padded Shade Cover Rest Relax Sleeping Blindfold"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/baIAAOSw8j1dOxat/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/High-Speed-Gold-Plated-Mini-HDMI-Type-C-to-HDMI-Type-A-Cable-Brand-New/301431620675?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006350">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="High Speed Gold Plated Mini HDMI (Type C) to HDMI (Type A) Cable!! Brand New!!"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/kBAAAOSwVEhc2YE9/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Mobile-Phone-Shooter-Controller-Gamepad-Game-Trigger-Fire-Button-Handle-for-PUBG/352477100966?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006350">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Mobile Phone Shooter Controller Gamepad Game Trigger Fire Button Handle for PUBG"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/JxwAAOSwUaZc-z6u/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/5-For-Apple-Watch-Tempered-Glass-Screen-Protector-iWatch-Sport-42mm-Series-3-2-1/122408158440?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006350">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="5 For Apple Watch Tempered Glass Screen Protector iWatch Sport 42mm Series 3 2 1"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/JrcAAOSwGzhaFmZS/s-l96.jpg">
                                            </div>
                                        </a></div>
                                </div>
                                <div class="dne-show-more-link">
                                    <button>
                                        <div class="dne-show-more-text"><span><span
                                                        class="dne-see-more-count-text">Show</span><span
                                                        class="dne-see-more-count-text emphasis">85</span><span
                                                        class="dne-see-more-count-text">more</span></span></div>
                                        <div class="dne-show-more-text dne-see-more-type-text"><span><span
                                                        class="dne-see-more-type-text-span">Fabulous $5 Finds</span></span>
                                        </div>
                                        <i class="icon-deals-double-down-arrow" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ebayui-dne-item-pattern-card  ebayui-dne-item-pattern-card-with-padding"
                 _sp="p2344380.m2735.l40"><h2 class="dne-pattern-title" id="deals-under-10"><span>Deals Under $10</span>
                </h2>
                <div class="row">
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="392156781342" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="For Apple iPhone XS Max/XR/X Rugged Case 360° Belt Clip Holster+Tempered Glass"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/yGAAAOSwm3lb0cNk/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="For Apple iPhone XS Max/XR/X Rugged Case 360° Belt Clip Holster+Tempered Glass">
                                        <a href="/itm/For-Apple-iPhone-XS-Max-XR-X-Rugged-Case-360-Belt-Clip-Holster-Tempered-Glass/392156781342?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000004752"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">For Apple iPhone XS Max/XR/X Rugged Case 360° Belt Clip Holster+Tempered Glass</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $6.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <span><a href="/itm/For-Apple-iPhone-XS-Max-XR-X-Rugged-Case-360-Belt-Clip-Holster-Tempered-Glass/392156781342?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000004752"
                                             class="dne-itemtile-more-options" target="">More options</a></span></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="391933082942" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Men's Nylon Crossbody Shoulder Bags Chest Cycle Sling Pack Daily Travel Backpack"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/eX8AAOSw-8BbVUMr/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Men's Nylon Crossbody Shoulder Bags Chest Cycle Sling Pack Daily Travel Backpack">
                                        <a href="/itm/Mens-Nylon-Crossbody-Shoulder-Bags-Chest-Cycle-Sling-Pack-Daily-Travel-Backpack/391933082942?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000004752"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Men's Nylon Crossbody Shoulder Bags Chest Cycle Sling Pack Daily Travel Backpack</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $8.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $29.99 </span><span
                                                    class="aria-hide">Previous price: US $29.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">70% off</span></span></div>
                                    <span><a href="/itm/Mens-Nylon-Crossbody-Shoulder-Bags-Chest-Cycle-Sling-Pack-Daily-Travel-Backpack/391933082942?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000004752"
                                             class="dne-itemtile-more-options" target="">More options</a></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-large dne-itemtile-double" itemscope="itemscope"
                                 data-listing-id="323400760070" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="14K Rose Gold Love Knot Stud Earrings with Swarovski Crystals Made in ITALY"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/1iUAAOSwusdcVkDn/s-l300.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="14K Rose Gold Love Knot Stud Earrings with Swarovski Crystals Made in ITALY">
                                        <a href="/itm/14K-Rose-Gold-Love-Knot-Stud-Earrings-with-Swarovski-Crystals-Made-in-ITALY/323400760070?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000004752"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">14K Rose Gold Love Knot Stud Earrings with Swarovski Crystals Made in ITALY</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $9.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $75.55 </span><span
                                                    class="aria-hide">Previous price: US $75.55</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">86% off</span></span></div>
                                    <span><span class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                </div>
                                <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="362688437092" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Gaming Mouse 7 Button USB Wired LED Breathing Fire Button 3200 DPI Laptop PC"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/8TEAAOSwQIZdFOjp/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Gaming Mouse 7 Button USB Wired LED Breathing Fire Button 3200 DPI Laptop PC">
                                        <a href="/itm/Gaming-Mouse-7-Button-USB-Wired-LED-Breathing-Fire-Button-3200-DPI-Laptop-PC/362688437092?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000004752"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Gaming Mouse 7 Button USB Wired LED Breathing Fire Button 3200 DPI Laptop PC</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $6.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-show-more dne-skip-focus dne-show-more-without-link">
                                <div class="dne-image-previews">
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/New-Womens-Classic-Cat-Eye-Designer-Fashion-Shades-Sunglasses/381903756437?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000004752">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="New Women's Classic Cat Eye Designer Fashion Shades Sunglasses"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/e3gAAOSw03lY5uzz/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Hybrid-Shockproof-Thin-Clear-TPU-Case-Fits-iPhone-11-Pro-X-6-7-8-Plus-XR-XS-MAX/153309513311?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000004752">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Hybrid Shockproof Thin Clear TPU Bumper Case Fits iPhone X 6 7 8 Plus XR XS MAX"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/qkQAAOSwK5Fb-azr/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Mens-Slip-On-Sport-Slide-Sandals-Flip-Flop-Shower-Shoes-Slippers-House-Pool-Gym/323128125578?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000004752">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Mens Slip On Sport Slide Sandals Flip Flop Shower Shoes Slippers House Pool Gym"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/K8UAAOSw-OFa6Ofz/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Alpine-Swiss-Mens-Thin-Bifold-Wallet-Top-Grain-Leather-EZ-Access-Outer-Card-Slot/361239378143?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000004752">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Alpine Swiss Mens Thin Bifold Wallet Top Grain Leather EZ Access Outer Card Slot"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/e88AAOSwhu9b0Yjc/s-l96.jpg">
                                            </div>
                                        </a></div>
                                </div>
                                <div class="dne-show-more-link">
                                    <button>
                                        <div class="dne-show-more-text"><span><span
                                                        class="dne-see-more-count-text">Show</span><span
                                                        class="dne-see-more-count-text emphasis">85</span><span
                                                        class="dne-see-more-count-text">more</span></span></div>
                                        <div class="dne-show-more-text dne-see-more-type-text"><span><span
                                                        class="dne-see-more-type-text-span">Deals Under $10</span></span>
                                        </div>
                                        <i class="icon-deals-double-down-arrow" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ebayui-dne-item-pattern-card  ebayui-dne-item-pattern-card-with-padding"
                 _sp="p2344380.m2735.l42"><h2 class="dne-pattern-title" id="under-25-steals">
                    <span>Under 25 Steals</span></h2>
                <div class="row">
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="312366816349" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="N Logitech G230 Stereo Gaming Noise-cancelling Wired Headset (981-000541)"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/ZJ0AAOSwx2dYCQBz/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="N Logitech G230 Stereo Gaming Noise-cancelling Wired Headset (981-000541)">
                                        <a href="/itm/N-Logitech-G230-Stereo-Gaming-Noise-cancelling-Wired-Headset-981-000541/312366816349?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000005439"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">N Logitech G230 Stereo Gaming Noise-cancelling Wired Headset (981-000541)</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $22.89</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $59.99 </span><span
                                                    class="aria-hide">Previous price: US $59.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">61% off</span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="263465638056" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Caravelle New York Men's 45B142 Quartz White Analog Dial Black Nylon 41mm Watch"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/algAAOSw3q5aV6H0/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Caravelle New York Men's 45B142 Quartz White Analog Dial Black Nylon 41mm Watch">
                                        <a href="/itm/Caravelle-New-York-Mens-45B142-Quartz-White-Analog-Dial-Black-Nylon-41mm-Watch/263465638056?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000005439"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Caravelle New York Men's 45B142 Quartz White Analog Dial Black Nylon 41mm Watch</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $19.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $100.00 </span><span
                                                    class="aria-hide">Previous price: US $100.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">80% off</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-large dne-itemtile-double" itemscope="itemscope"
                                 data-listing-id="253251788980" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="For Samsung Galaxy S8 Active Armor Case With Kickstand Clip + Screen Protector"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/s84AAOSwdsBdXbm2/s-l300.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="For Samsung Galaxy S8 Active Armor Case With Kickstand Clip + Screen Protector">
                                        <a href="/itm/For-Samsung-Galaxy-S8-Active-Armor-Case-With-Kickstand-Clip-Screen-Protector/253251788980?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000005439"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">For Samsung Galaxy S8 Active Armor Case With Kickstand Clip + Screen Protector</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $4.98</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $9.98 </span><span
                                                    class="aria-hide">Previous price: US $9.98</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">50% off</span></span></div>
                                    <span><a href="/itm/For-Samsung-Galaxy-S8-Active-Armor-Case-With-Kickstand-Clip-Screen-Protector/253251788980?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000005439"
                                             class="dne-itemtile-more-options" target="">More options</a></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="302621613572" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Caravelle Women's Quartz Crystal Accent Date Ivory Plastic 28mm Watch 43M109 "
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/bZ0AAOSwkNtaa2aW/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Caravelle Women's Quartz Crystal Accent Date Ivory Plastic 28mm Watch 43M109">
                                        <a href="/itm/Caravelle-Womens-Quartz-Crystal-Accent-Date-Ivory-Plastic-28mm-Watch-43M109/302621613572?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000005439"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Caravelle Women's Quartz Crystal Accent Date Ivory Plastic 28mm Watch 43M109</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $15.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $125.00 </span><span
                                                    class="aria-hide">Previous price: US $125.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">87% off</span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-show-more dne-skip-focus dne-show-more-without-link">
                                <div class="dne-image-previews">
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Crystaluxe-Halloween-Jack-OLantern-Pendant-with-Swarovski-Crystals-Silver/263530629169?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000005439">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Crystaluxe Halloween Jack O'Lantern Pendant with Swarovski Crystals, Silver"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/R3YAAOSwQglam7G6/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/WORX-WA3575-20V-MaxLithium-Poweshare-Battery-for-Trimmer-Hedge-Trimmer-Blower/254230380133?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000005439">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="WORX WA3575 20V MaxLithium Poweshare Battery for Trimmer, Hedge Trimmer, Blower	"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/e0UAAOSworhbsmvC/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Heavy-Duty-Tarp-Poly-Canopy-Tent-Shelter-Reinforced-Resistant-Cover-Tarpaulin/382112977494?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000005439">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Heavy Duty Tarp Poly Canopy Tent Shelter Reinforced Resistant Cover Tarpaulin"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/5soAAOSwp7tagzVq/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Witch-Hat-Broom-Pendant-with-Swarovski-Crystals-in-Sterling-Silver/263540331941?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000005439">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Witch Hat &amp; Broom Pendant with Swarovski Crystals in Sterling Silver"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/W6cAAOSwrXdaonTM/s-l96.jpg">
                                            </div>
                                        </a></div>
                                </div>
                                <div class="dne-show-more-link">
                                    <button>
                                        <div class="dne-show-more-text"><span><span
                                                        class="dne-see-more-count-text">Show</span><span
                                                        class="dne-see-more-count-text emphasis">85</span><span
                                                        class="dne-see-more-count-text">more</span></span></div>
                                        <div class="dne-show-more-text dne-see-more-type-text"><span><span
                                                        class="dne-see-more-type-text-span">Under 25 Steals</span></span>
                                        </div>
                                        <i class="icon-deals-double-down-arrow" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ebayui-dne-item-pattern-card  ebayui-dne-item-pattern-card-with-padding"
                 _sp="p2344380.m2735.l44"><h2 class="dne-pattern-title" id="bullion-bundles-sale"><span>Bullion Bundles Sale</span>
                </h2>
                <div class="row">
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="122959830425" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Bank Wire Payment. South Africa 1 oz Gold Krugerrand (Random) Lot of 10"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/DlsAAOSwtCJdVvVn/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Bank Wire Payment. South Africa 1 oz Gold Krugerrand (Random) Lot of 10">
                                        <a href="/itm/SPECIAL-PRICE-BANK-WIRE-South-Africa-1-oz-Gold-Krugerrand-Random-Lot-of-10/122959830425?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000000123"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Bank Wire Payment. South Africa 1 oz Gold Krugerrand (Random) Lot of 10</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $15,134.90</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $17,175.00 </span><span
                                                    class="aria-hide">Previous price: US $17,175.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">11% off</span></span></div>
                                    <span><span class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                </div>
                                <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="193074780365" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="1,000 Silver American Eagle 1oz Coins in 2 US 500 Coin Sealed Boxes WIRE ONLY"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/KQ4AAOSw-B9daBkk/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="1,000 Silver American Eagle 1oz Coins in 2 US 500 Coin Sealed Boxes WIRE ONLY">
                                        <a href="/itm/1-000-Silver-American-Eagle-1oz-Coins-in-2-US-500-Coin-Sealed-Boxes-WIRE-ONLY/193074780365?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000000123"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">1,000 Silver American Eagle 1oz Coins in 2 US 500 Coin Sealed Boxes WIRE ONLY</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $19,744.50</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $20,525.00 </span><span
                                                    class="aria-hide">Previous price: US $20,525.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">3% off</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-large dne-itemtile-double" itemscope="itemscope"
                                 data-listing-id="112609605904" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Great Britain Gold Sovereign Avg Circ (Random) - SKU #152287"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/CBgAAOSwTJhc8JNK/s-l300.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Great Britain Gold Sovereign Avg Circ (Random) - SKU #152287">
                                        <a href="/itm/SPECIAL-PRICE-Great-Britain-Gold-Sovereign-Avg-Circ-Random-SKU-152287/112609605904?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000000123"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Great Britain Gold Sovereign Avg Circ (Random) - SKU #152287</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $366.09</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $425.00 </span><span
                                                    class="aria-hide">Previous price: US $425.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">13% off</span></span></div>
                                    <span><span class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                </div>
                                <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="122959745607" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Bank Wire Payment. 1 oz Gold American Eagle BU Random Year Lot of 20"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/B-MAAOSwfxtc0E2o/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Bank Wire Payment. 1 oz Gold American Eagle BU Random Year Lot of 20">
                                        <a href="/itm/SPECIAL-PRICE-BANK-WIRE-1-oz-Gold-American-Eagle-BU-Random-Year-Lot-of-20/122959745607?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000000123"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Bank Wire Payment. 1 oz Gold American Eagle BU Random Year Lot of 20</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $30,259.80</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $34,300.00 </span><span
                                                    class="aria-hide">Previous price: US $34,300.00</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">11% off</span></span></div>
                                    <span><span class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                </div>
                                <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-show-more dne-skip-focus dne-show-more-without-link">
                                <div class="dne-image-previews">
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/SilverTowne-Stackables-Trademark-Prospector-5oz-999-Silver-Medallion-2pc/302199942850?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000000123">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="SilverTowne Stackables Trademark Prospector 5oz .999 Silver Medallion (2pc)"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/OhoAAOSw9GhYf9gp/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Cancer-Awareness-Ribbon-Silver-Medallion-Silver-American-Eagle-2pc-Set/293026745668?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000000123">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Cancer Awareness Ribbon Silver Medallion &amp; Silver American Eagle 2pc Set"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/lYsAAOSwNDZdcUAX/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/10-x-2oz-Silver-STACKER-ROUNDS-by-Scottsdale-Mint-20-oz-999-Silver-A330/311596420652?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000000123">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="10 x 2oz Silver STACKER ROUNDS by Scottsdale Mint - 20 oz .999 Silver #A330"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/gFMAAOSwD2pXF74R/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/10-oz-Scottsdale-STACKER-999-Silver-Bar-w-Black-Canvas-Bag-A182/312611242930?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000000123">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="10 oz Scottsdale STACKER® .999 Silver Bar w/ Black Canvas Bag #A182"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/dOcAAOSw~vxc3IxC/s-l96.jpg">
                                            </div>
                                        </a></div>
                                </div>
                                <div class="dne-show-more-link">
                                    <button>
                                        <div class="dne-show-more-text"><span><span
                                                        class="dne-see-more-count-text">Show</span><span
                                                        class="dne-see-more-count-text emphasis">85</span><span
                                                        class="dne-see-more-count-text">more</span></span></div>
                                        <div class="dne-show-more-text dne-see-more-type-text"><span><span
                                                        class="dne-see-more-type-text-span">Bullion Bundles Sale</span></span>
                                        </div>
                                        <i class="icon-deals-double-down-arrow" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ebayui-dne-item-pattern-card  ebayui-dne-item-pattern-card-with-padding"
                 _sp="p2344380.m2735.l46"><h2 class="dne-pattern-title" id="fall-prep-in-full-swing"><span>Fall Prep in Full Swing</span>
                </h2>
                <div class="row">
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="264234705928" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Apple iPhone 8 Plus 64GB Unlocked Great Condition"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/s3EAAOSwYvNchnKE/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Apple iPhone 8 Plus 64GB Unlocked Great Condition">
                                        <a href="/itm/Apple-iPhone-8-Plus-64GB-Unlocked-Great-Condition/264234705928?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006509"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Apple iPhone 8 Plus 64GB Unlocked Great Condition</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $434.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <span><a href="/itm/Apple-iPhone-8-Plus-64GB-Unlocked-Great-Condition/264234705928?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006509"
                                             class="dne-itemtile-more-options"
                                             target="">More options</a></span><span><span
                                                class="dne-itemcard-hotness itemcard-hotness-red">Almost gone</span></span>
                                </div>
                                <div class="dne-itemcard-hotness-icon icon-deals-hotness" aria-hidden="true"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="372269125774" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Magnum Work Foreman 6&quot; Insulated Waterproof Leather Boots - 7817"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/KNkAAOSw-btaxVJO/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Magnum Work Foreman 6&quot; Insulated Waterproof Leather Boots - 7817">
                                        <a href="/itm/Magnum-Work-Foreman-6-Insulated-Waterproof-Leather-Boots-7817/372269125774?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006509"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Magnum Work Foreman 6" Insulated Waterproof Leather Boots - 7817</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $36.95</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <span><a href="/itm/Magnum-Work-Foreman-6-Insulated-Waterproof-Leather-Boots-7817/372269125774?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006509"
                                             class="dne-itemtile-more-options" target="">More options</a></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-large dne-itemtile-double" itemscope="itemscope"
                                 data-listing-id="202638269096" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Samsung UN55RU7100 55&quot; PurColor Smart 4K Ultra HD LED TV with 120 Motion Rate"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/0RAAAOSwH4lcnSga/s-l300.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Samsung UN55RU7100 55&quot; PurColor Smart 4K Ultra HD LED TV with 120 Motion Rate">
                                        <a href="/itm/Samsung-UN55RU7100-55-PurColor-Smart-4K-Ultra-HD-LED-TV-with-120-Motion-Rate/202638269096?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006509"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Samsung UN55RU7100 55" PurColor Smart 4K Ultra HD LED TV with 120 Motion Rate</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $447.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $899.95 </span><span
                                                    class="aria-hide">Previous price: US $899.95</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">50% off</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="183501923341" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Buffalo Plaid Reversible Down Alternative Comforter Set"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/JGwAAOSwwYldOIf9/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Buffalo Plaid Reversible Down Alternative Comforter Set">
                                        <a href="/itm/Buffalo-Plaid-Reversible-Down-Alternative-Comforter-Set/183501923341?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006509"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Buffalo Plaid Reversible Down Alternative Comforter Set</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $31.49</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $92.99 </span><span
                                                    class="aria-hide">Previous price: US $92.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">66% off</span></span></div>
                                    <span><a href="/itm/Buffalo-Plaid-Reversible-Down-Alternative-Comforter-Set/183501923341?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006509"
                                             class="dne-itemtile-more-options" target="">More options</a></span></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-show-more dne-skip-focus dne-show-more-without-link">
                                <div class="dne-image-previews">
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/NCAA-Official-Football-Jersey-Collection-By-Adidas-Gen-2-Toddler-Size-2T-4T/302398404838?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006509">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="NCAA Official Football Jersey Collection By Adidas, Gen 2 Toddler Size (2T-4T)"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/qokAAOSwutFZgfNA/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Womens-Oversized-Tartan-Plaid-Blanket-Scarf-Large-Checked-Wrap-Shawl-Winter-Warm/352605361865?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006509">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Womens Oversized Tartan Plaid Blanket Scarf Large Checked Wrap Shawl Winter Warm"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/6rwAAOSwSrNZ97zW/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/750W-1500W-Electric-Wall-Mounted-Fireplace-Heater-2-in-1-35-Adjustable-Curve-35/132360799101?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006509">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="750W/1500W Electric Wall Mounted Fireplace Heater 2-in-1 35&quot; Adjustable Curve 35"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/38gAAOSw5ZJbyB-l/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/8ft-LED-Outdoor-Halloween-Inflatable-Decoration-Dead-Tree-with-Ghost-on-Top/352765645260?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006509">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="8ft  LED Outdoor Halloween Inflatable Decoration - Dead Tree with Ghost on Top"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/7lcAAOSwxOBdX9Uh/s-l96.jpg">
                                            </div>
                                        </a></div>
                                </div>
                                <div class="dne-show-more-link">
                                    <button>
                                        <div class="dne-show-more-text"><span><span
                                                        class="dne-see-more-count-text">Show</span><span
                                                        class="dne-see-more-count-text emphasis">65</span><span
                                                        class="dne-see-more-count-text">more</span></span></div>
                                        <div class="dne-show-more-text dne-see-more-type-text"><span><span
                                                        class="dne-see-more-type-text-span">Fall Prep in Full Swing</span></span>
                                        </div>
                                        <i class="icon-deals-double-down-arrow" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ebayui-dne-item-pattern-card  ebayui-dne-item-pattern-card-with-padding"
                 _sp="p2344380.m2735.l48"><h2 class="dne-pattern-title" id="toy-clearance-deals"><span>Toy Clearance Deals</span>
                </h2>
                <div class="row">
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="323833276232" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Star Wars Force Link 2.0 TIE Fighter and TIE Fighter Pilot Figure"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/jaQAAOSwqzJdAg9c/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Star Wars Force Link 2.0 TIE Fighter and TIE Fighter Pilot Figure">
                                        <a href="/itm/Star-Wars-Force-Link-2-0-TIE-Fighter-and-TIE-Fighter-Pilot-Figure/323833276232?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006579"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Star Wars Force Link 2.0 TIE Fighter and TIE Fighter Pilot Figure</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $23.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $39.99 </span><span
                                                    class="aria-hide">Previous price: US $39.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">40% off</span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="303153598867" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="FUNKO POP! TELEVISION: Stranger Things - Erica [New Toys] Vinyl Figure"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/gOYAAOSwESNc7dRH/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="FUNKO POP! TELEVISION: Stranger Things - Erica [New Toys] Vinyl Figure">
                                        <a href="/itm/FUNKO-POP-TELEVISION-Stranger-Things-Erica-New-Toys-Vinyl-Figure/303153598867?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006579"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">FUNKO POP! TELEVISION: Stranger Things - Erica [New Toys] Vinyl Figure</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $9.55</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $11.99 </span><span
                                                    class="aria-hide">Previous price: US $11.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">20% off</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-large dne-itemtile-double" itemscope="itemscope"
                                 data-listing-id="352690191910" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="Razor Power Core Electric Kids Toy Motorized Scooter and Youth Helmet, Black  "
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/IBsAAOSwtLpdAPEn/s-l300.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="Razor Power Core Electric Kids Toy Motorized Scooter and Youth Helmet, Black">
                                        <a href="/itm/Razor-Power-Core-Electric-Kids-Toy-Motorized-Scooter-and-Youth-Helmet-Black/352690191910?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006579"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">Razor Power Core Electric Kids Toy Motorized Scooter and Youth Helmet, Black</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $168.99</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $254.99 </span><span
                                                    class="aria-hide">Previous price: US $254.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">33% off</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope"
                                 data-listing-id="392258582923" itemtype="https://schema.org/Product">
                                <div class="dne-itemtile-imagewrapper" aria-hidden="true">
                                    <div class="slashui-image-cntr"><img
                                                src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                alt="LEGO Technic 42077 2 in 1 Rally Car and Dune Buggy 109 Piece Block Building Kit"
                                                data-comp="lazyload"
                                                data-config-src="https://i.ebayimg.com/images/g/Mx4AAOSw9P1ciQ8Y/s-l225.jpg">
                                    </div>
                                </div>
                                <div class="dne-itemtile-detail" role="text"><h3 class="dne-itemtile-title ellipse-2"
                                                                                 title="LEGO Technic 42077 2 in 1 Rally Car and Dune Buggy 109 Piece Block Building Kit">
                                        <a href="/itm/LEGO-Technic-42077-2-in-1-Rally-Car-and-Dune-Buggy-109-Piece-Block-Building-Kit/392258582923?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006579"
                                           itemprop="url"><span class="ebayui-ellipsis-2" itemprop="name">LEGO Technic 42077 2 in 1 Rally Car and Dune Buggy 109 Piece Block Building Kit</span></a>
                                    </h3>
                                    <div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers"
                                         class="dne-itemtile-price">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" class="first">US $109.95</span><span
                                                itemprop="availability" content="https://schema.org/InStock"></span>
                                    </div>
                                    <div class="dne-itemtile-original-price"><span><span aria-hidden="true"
                                                                                         class="itemtile-price-strikethrough">US $146.99 </span><span
                                                    class="aria-hide">Previous price: US $146.99</span><span
                                                    class="itemtile-price-default">| </span><span
                                                    class="itemtile-price-bold">25% off</span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dne-itemtile dne-show-more dne-skip-focus dne-show-more-without-link">
                                <div class="dne-image-previews">
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Summerhill-Wooden-Swing-Set-Playset-by-KidKraft/401814070618?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006579">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Summerhill Wooden Swing Set / Playset by KidKraft"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/OOAAAOSwdg5dKOQK/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/FUNKO-POP-TELEVISION-The-Office-Toby-Michael-2PK-New-Toys-Vinyl-Figure/303232996891?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006579">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="FUNKO POP! TELEVISION: The Office - Toby &amp; Michael 2PK [New Toys] Vinyl Figure"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/xHkAAOSwnYpdXFYV/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/BCP-Set-of-3-Friction-Powered-Toy-Construction-Trucks-Yellow/382897447663?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006579">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="BCP Set of 3 Friction-Powered Toy Construction Trucks - Yellow"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/8HsAAOSw4BBcsEGM/s-l96.jpg">
                                            </div>
                                        </a></div>
                                    <div class="dne-image-previews-container"><a
                                                href="/itm/Parrot-Mambo-Fly-with-Flypad-and-Free-Extra-Battery-with-External-Charger/153279878994?_trkparms=5373%3A0%7C5374%3AFeatured%7C5079%3A6000006579">
                                            <div class="slashui-image-cntr"><img
                                                        src="{{asset("/uploads")}}/product/s_1x2.gif"
                                                        alt="Parrot Mambo Fly with Flypad and Free Extra Battery with External Charger"
                                                        data-comp="lazyload"
                                                        data-config-src="https://i.ebayimg.com/images/g/udsAAOSwMO9b~Vtz/s-l96.jpg">
                                            </div>
                                        </a></div>
                                </div>
                                <div class="dne-show-more-link">
                                    <button>
                                        <div class="dne-show-more-text"><span><span
                                                        class="dne-see-more-count-text">Show</span><span
                                                        class="dne-see-more-count-text emphasis">85</span><span
                                                        class="dne-see-more-count-text">more</span></span></div>
                                        <div class="dne-show-more-text dne-see-more-type-text"><span><span
                                                        class="dne-see-more-type-text-span">Toy Clearance Deals</span></span>
                                        </div>
                                        <i class="icon-deals-double-down-arrow" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

    </script>
@stop
{{-- footer scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.circliful.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/index.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/common.js') }}"></script>
    <!--page level js ends-->
@stop
