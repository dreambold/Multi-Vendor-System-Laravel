@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    News
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/pages/news.css') }}"/>
    <!-- end of page level css -->
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>News</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-c="#000" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">News</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <!--main content-->
        <div class="row">
            <div class="col-md-12 news-page">
                <h1 id="recent_news_margl">Recent News</h1>

                <div class="row">
                    <div class="col-md-5">
                        <div id="myCarousel" class="carousel image-carousel slide">
                            <div class="carousel-inner">
                                <div class="active item">
                                    <img data-src="holder.js/1900x278/#00bc8c:#fff" class="img-responsive" alt="">
                                </div>
                                <div class="item">
                                    <img data-src="holder.js/1900x278/#5bc0de:#fff" class="img-responsive" alt="">
                                </div>
                                <div class="item">
                                    <img data-src="holder.js/1900x278/#00BC8C:#fff" class="img-responsive" alt="">
                                </div>
                            </div>
                            <!-- Carousel nav -->
                            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                <i class="m-icon-big-swapleft m-icon-white"></i>
                            </a>
                            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                <i class="m-icon-big-swapright m-icon-white"></i>
                            </a>
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                        </div>
                        <div class="top-news margin-top-10">
                            <a href="#" class="btn-red">
                                <span>Featured News</span>
                                <em><i class="fa fa-tags"></i>
                                    USA, Business, Apple</em>
                                <i class="fa fa- icon-bullhorn top-news-icon"></i>
                            </a>
                        </div>
                        <div class="news-blocks">
                            <h3>
                                <a href="{{ URL::to('admin/news_item') }}">Older Stories go lower</a>
                            </h3>

                            <div class="news-block-tags">
                                <strong>CA, USA</strong>
                                <em>3 hours ago</em>
                            </div>
                            <p>
                                <img class="news-block-img pull-right" data-src="holder.js/70x70/#EF6F6C:#fff" alt="">The
                                front page layout can be mixed and matched to fit your content in the best possible way
                                - by making extensive use of images the content engages readers.
                            </p>
                            <a href="{{ URL::to('admin/news_item') }}" class="news-block-btn">
                                Read more
                                <i class="m-icon-swapright m-icon-black"></i>
                            </a>
                        </div>
                        <div class="news-blocks">
                            <h3>
                                <a href="{{ URL::to('admin/news_item') }}">
                                    China national charged in hacking plot to steal US military data
                                </a>
                            </h3>

                            <div class="news-block-tags">
                                <strong>China</strong>
                                <em>7 hours ago</em>
                            </div>
                            <p>
                                <img class="news-block-img pull-right" data-src="holder.js/70x70/#418bca:#fff" alt="">Su
                                Bin, who was arrested in Canada last month, is accused of working with two other
                                suspects to steal data about military projects and sell it to China.
                            </p>
                            <a href="{{ URL::to('admin/news_item') }}" class="news-block-btn">
                                Read more
                                <i class="m-icon-swapright m-icon-black"></i>
                            </a>
                        </div>
                        <div class="news-blocks">
                            <h3>
                                <a href="{{ URL::to('admin/news_item') }}">U.S. surges past Canada at World Lacrosse games</a>
                            </h3>

                            <div class="news-block-tags">
                                <strong>CANADA, US</strong>
                                <em>3 hours ago</em>
                            </div>
                            <p>
                                <img class="news-block-img pull-right" data-src="holder.js/70x70/#A9B6BC:#fff" alt="">COMMERCE
                                CITY, Colo. — After digging a 3-0 hole, the United States went on an eight-goal run to
                                defeat Canada 10-7 before 11,447 fans at Dick’s Sporting Goods Park in the opening game
                                of the 2014 Federation of International Lacrosse World Championship.
                            </p>
                            <a href="{{ URL::to('admin/news_item') }}" class="news-block-btn">
                                Read more
                                <i class="m-icon-swapright m-icon-black"></i>
                            </a>
                        </div>
                    </div>
                    <!--end col-md-5-->
                    <div class="col-md-4 ">
                        <div class="news-blocks">
                            <img data-src="holder.js/2000x203/#5bc0de:#fff" class="img-responsive" alt="image"/>

                            <h3>
                                <a href="">Germany Basks in 4th World Cup After 24-Year Wait</a>
                            </h3>
                            <strong>Germany</strong>
                            <em>2 hours ago</em>

                            <p>
                                The Die Welt newspaper celebrated Monday with a three-word headline in the national
                                colors of black, red and gold that read simply: "It is true," while Der Spiegel
                                magazine's website listed Germany's titles: "1954. 1974. 1990. 2014!"
                            </p>
                            <a href="{{ URL::to('admin/news_item') }}">
                                Read more..
                                <i class="m-icon-swapright m-icon-black"></i>
                            </a>
                            <!-- /.featured-text -->
                        </div>
                        <div class="news-blocks">
                            <img data-src="holder.js/2000x203/#418bca:#fff" class="img-responsive" alt="image">

                            <h3>
                                <a href="">
                                    News
                                    World news
                                    Paris
                                    Anti-Israeli protesters attack Paris synagogue
                                </a>
                            </h3>
                            <strong>Paris</strong>
                            <em>2 hours ago</em>

                            <p class="">
                                A synagogue near the Bastille was under police guard on Monday after more than 100
                                youths chanting "Israel murderer" tried to storm the building following a march
                                demanding an end to Israeli air strikes on Gaza.
                            </p>
                            <a href="{{ URL::to('admin/news_item') }}">
                                Read more..
                                <i class="m-icon-swapright m-icon-black"></i>
                            </a>
                            <!-- /.featured-text -->
                        </div>
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-3">
                        <div class="news-blocks">
                            <h3>
                                <a href="{{ URL::to('admin/news_item') }}">Futures Game: Gallo gives US 3-2 win over World</a>
                            </h3>

                            <div class="news-block-tags">
                                <strong>US</strong>
                            </div>
                            <p>
                                <img class="news-block-img pull-right" data-src="holder.js/70x70/#00bc8c:#fff" alt="">MINNEAPOLIS
                                (AP) — Texas Rangers prospect Joey Gallo showed off his power with a soaring two-run
                                homer in the sixth inning to give the U.S. team the lead for good in a 3-2 victory over
                                the World squad Sunday at the All-Star Futures Game for baseball's best minor leaguers.
                            </p>
                            <a href="{{ URL::to('admin/news_item') }}" class="news-block-btn">
                                Read more
                                <i class="m-icon-swapright m-icon-black"></i>
                            </a>
                        </div>
                        <div class="news-blocks">
                            <h3>
                                <a href="{{ URL::to('admin/news_item') }}">World Cup 2014: 11 things the tournament taught us</a>
                            </h3>

                            <div class="news-block-tags">
                                <strong>US</strong>
                                <em>3 hours ago</em>
                            </div>
                            <p>
                                <img class="news-block-img pull-right" data-src="holder.js/70x70/#67cc5df:#fff" alt="">Plenty
                                of sides tried free-flowing, pacey Latin football this summer – even England had their
                                moments. A moment. But Argentina stayed functional. They haven’t conceded once in the
                                knockouts, they’ve not been behind in any game, and they don’t mind a lack of respect.
                                Coach Alejandro “The Sloth” Sabella says his side are “sore, beaten and tired after the
                                war [with Holland]. But with work, humility and seriousness, we’ll get there”; Pablo
                                Zabaleta says their strengths are spoiling, staying “compact and tight”, “closing down”
                                and feeding on negativity.
                            </p>
                            <a href="{{ URL::to('admin/news_item') }}" class="news-block-btn">
                                Read more
                                <i class="m-icon-swapright m-icon-black"></i>
                            </a>
                        </div>
                    </div>
                    <!--end col-md-3-->
                </div>
                <div class="space20"></div>
                <h3 id="news_option_margl">News Option</h3>

                <div class="row">
                    <div class="col-md-3">
                        <div class="news-blocks">
                            <h3>
                                <a href="{{ URL::to('admin/news_item') }}">Egypt proposes Israel-Gaza ceasefire</a>
                            </h3>

                            <div class="news-block-tags">
                                <strong>Egypt</strong>
                                <em>2 hours ago</em>
                            </div>
                            <p>
                                <img class="news-block-img pull-right" data-src="holder.js/70x70/#00BC8C:#fff" alt="">Egypt
                                proposes a ceasefire to end days of cross-border fire between the Gaza Strip and Israel
                                that has left at least 185 Palestinians dead....
                            </p>
                            <a href="{{ URL::to('admin/news_item') }}" class="news-block-btn">
                                Read more
                                <i class="m-icon-swapright m-icon-black"></i>
                            </a>
                        </div>
                        <div class="news-blocks">
                            <h3>
                                <a href="{{ URL::to('admin/news_item') }}">Hague quits as foreign secretary</a>
                            </h3>

                            <div class="news-block-tags">
                                <strong>UK</strong>
                                <em>6 hours ago</em>
                            </div>
                            <p>
                                William Hague has stood down as David Cameron mounted a “cull of the middle-aged white
                                men” in his biggest reshuffle since becoming Prime Minister. Mr Cameron fired the
                                starting gun for the general election by sacking or moving at least six Cabinet members
                                to make way for a series of young women, who will be promoted on...
                            </p>
                            <a href="{{ URL::to('admin/news_item') }}" class="news-block-btn">
                                Read more
                                <i class="m-icon-swapright m-icon-black"></i>
                            </a>
                        </div>
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-3">
                        <div class="news-blocks">
                            <h3>
                                <a href="{{ URL::to('admin/news_item') }}">Murder victim's family want answers</a>
                            </h3>

                            <div class="news-block-tags">
                                <strong>ENGLAND</strong>
                                <em>3 hours ago</em>
                            </div>
                            <p>
                                <img class="news-block-img pull-right" data-src="holder.js/70x70/#A9B6BC:#fff" alt="">The
                                family of a man who was beaten to death and had his body set on fire say they "can't
                                wait any longer" for the results of a police watchdog inquiry...
                            </p>
                            <a href="{{ URL::to('admin/news_item') }}" class="news-block-btn">
                                Read more
                                <i class="m-icon-swapright m-icon-black"></i>
                            </a>
                        </div>
                        <div class="news-blocks">
                            <h3>
                                <a href="{{ URL::to('admin/news_item') }}">Brooks Irish shows will not go ahead</a>
                            </h3>

                            <div class="news-block-tags">
                                <strong>NORTHERN IRELAND</strong>
                                <em>3 hours ago</em>
                            </div>
                            <p>
                                Mr Brooks said his heart was broken and he is crushed over the failure to stage the five
                                events. Ticket refunds will go ahead as planned for the 400,000 fans from 9am on
                                Thursday. Mr Brooks had been scheduled to play five concerts at the venue on
                                consecutive...
                            </p>
                            <a href="{{ URL::to('admin/news_item') }}" class="news-block-btn">
                                Read more
                                <i class="m-icon-swapright m-icon-black"></i>
                            </a>
                        </div>
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="news-blocks">
                                    <h3>
                                        <a href="{{ URL::to('admin/news_item') }}">Dying patients 'bewildered by array of services'</a>
                                    </h3>

                                    <div class="news-block-tags">
                                        <strong>SCOTLAND</strong>
                                        <em>3 hours ago</em>
                                    </div>
                                    <p>
                                        <img class="news-block-img pull-right" data-src="holder.js/70x70/#418bca:#fff"
                                             alt="">The study into multimorbidity - several illnesses at the same time -
                                        found care for patients in Scotland and England "is not joined up". Researchers
                                        carried out interviews with 37 people suffering from multimorbidity and 17
                                        family members. They described complicated, confusing and sometimes unresponsive
                                        services.
                                    </p>
                                    <a href="{{ URL::to('admin/news_item') }}" class="news-block-btn">
                                        Read more
                                        <i class="m-icon-swapright m-icon-black"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="news-blocks">
                                    <h3>
                                        <a href="{{ URL::to('admin/news_item') }}">All aboard: China's railway dream</a>
                                    </h3>

                                    <div class="news-block-tags">
                                        <strong>China</strong>
                                        <em>3 hours ago</em>
                                    </div>
                                    <p>
                                        At Asia's biggest rail cargo base in Chengdu in south-west China, the cranes are
                                        hard at work, swinging containers from trucks onto a freight train. The
                                        containers are filled with computers, clothes, even cars. Until last year, all
                                        of it would have first gone more than 1,000 miles east to Shanghai and then to
                                        Europe by sea.
                                    </p>
                                    <a href="{{ URL::to('admin/news_item') }}" class="news-block-btn">
                                        Read more
                                        <i class="m-icon-swapright m-icon-black"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="news-blocks">
                                    <h3>
                                        <a href="{{ URL::to('admin/news_item') }}">Record number of data complaints made to ICO</a>
                                    </h3>

                                    <div class="news-block-tags">
                                        <strong>CA, USA</strong>
                                        <em>3 hours ago</em>
                                    </div>
                                    <p>
                                        The UK's information commissioner has called for better funding for the
                                        country's data regulator amid a record number of cases. Ahead of the release of
                                        the Information Commissioner's Office (ICO) annual report, Christopher Graham
                                        said the body needed "stronger powers".
                                    </p>
                                    <a href="{{ URL::to('admin/news_item') }}" class="news-block-btn">
                                        Read more
                                        <i class="m-icon-swapright m-icon-black"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-md-6-->
                </div>
                <div class="space20"></div>
            </div>
        </div>
        <!--main content ends-->
    </section>
    <!-- content -->

    @stop

    {{-- page level scripts --}}
    @section('footer_scripts')

            <!--tags-->
    <script src="{{ asset('assets/vendors/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>

@stop
