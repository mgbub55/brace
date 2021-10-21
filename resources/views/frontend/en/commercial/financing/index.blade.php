@extends('frontend.layouts.app', ['page_title' => 'Business Debit Card - Business Checking | First PREMIER Bank'])

@section('content')
    <div class="container">

        <!--start responsive menu-->
        @include('frontend.layouts.components.header')
        <!-- Main Header -->
        @include('frontend.layouts.components.navbar')

        <div class="row equal-height">
            <div class="block b19block  col-md-12">

                <style>
                    .b19landingpage {
                        height: auto;
                        padding: 40px 0px;
                    }

                </style>
                <script>
                    $(document).ready(function() {
                        if (screen.width < 767) {
                            $('.b19landingpage').css('height', '628px');
                            $('.b19landingpage').css('background', '');
                            $('.b19landingpage').css('background-color', '#1b3e43');
                        } else {
                            $('.b19landingpage').css('background', 'url(/Static/img/svg/green-3.svg) no-repeat');
                        }
                    });

                    $(window).resize(function() {
                        if (screen.width < 767) {
                            $('.b19landingpage').css('height', '628px');
                            $('.b19landingpage').css('background', '');
                            $('.b19landingpage').css('background-color', '#1b3e43');
                        } else {
                            $('.b19landingpage').css('background', 'url(/Static/img/svg/green-3.svg) no-repeat');
                        }
                    });
                </script>


                <div class="b19landingpage row-full" style="padding-bottom:0px;">
                    <div class="container">
                        <h1>Commercial Finance</h1>
                        <div class="xhtml"></div>
                        <div class="b19landingpage_box_main">

                            <div class="col-md-4 col-sm-6 b19landingpage_box">
                                <a
                                    href="../../small-business/loans-and-credit-lines/business-lines-of-credit/index.html"><img
                                        src="../../../globalassets/images/primary-icons/bright/business-finance/bright-business-_-finance-primary-icon-31.png"
                                        title="Lines of Credit" alt="money" border="0" /></a>
                                <div class="clearfix"></div>
                                <span><a
                                        href="../../small-business/loans-and-credit-lines/business-lines-of-credit/index.html">Lines
                                        of Credit</a></span>
                                <div class="xhtml">
                                    <p>Get ready access to cash with a flexible business line of credit.</p>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 b19landingpage_box">
                                <a href="commercial-lending/index.html"><img
                                        src="../../../globalassets/images/primary-icons/gold/business-finance/gold-business-_-finance-primary-icon-2.png"
                                        title="Business Loans" alt="coins dropping into hand" border="0"></a>
                                <div class="clearfix"></div>
                                <span><a href="commercial-lending/index.html">Business Loans</a></span>
                                <div class="xhtml">
                                    <p>Competitive rates and flexible terms on term loans of all sizes</p>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 b19landingpage_box">
                                <a href="commercial-real-estate/index.html"><img
                                        src="../../../globalassets/images/primary-icons/green/places/green-places-primary-icon-10.png"
                                        title="Commercial Real Estate" alt="commercial buildings" border="0"></a>
                                <div class="clearfix"></div>
                                <span><a href="commercial-real-estate/index.html">Commercial Real Estate</a></span>
                                <div class="xhtml">
                                    <p>Purchase real estate, build or refinance for growth &amp; investment.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="block b20block  col-md-12">


                <!-- VIEW RATE / SPEED BUMP [2] -->
                <script>
                    $(document).ready(function() {
                        if ($('#imgMainRight').length <= 0) {
                            $('.b20consumer-loans-left').css('width', '100%');
                        }
                    });
                </script>
                <style>
                    .pop_main_container_board .pop_main_container ol li ol li {}

                </style>
                <style>
                    .b20consumer-loans-left {
                        padding-top: 0px !important;
                    }

                    .b20consumer-loans-left .xhtml p {
                        padding-top: 0px !important;
                    }

                    .b17basic_box_grey {
                        background-color: #f9f9f9 !important;
                        background-image: none;
                    }

                    .b17basic_box_white {
                        background-color: #fff !important;
                        background-image: none;
                    }

                    .b20consumer-loans p.sub-header {
                        padding: 0px 0px 26px 0px;
                        text-align: center;
                    }

                    @media only screen and (max-width: 767px) {
                        .b20consumer_btn_center {
                            width: 100%;
                        }
                    }

                    @media only screen and (max-width: 470px) {
                        .b20consumer-loans .b20consumer-loans-left {
                            padding-left: 0px !important;
                        }
                    }

                    @media only screen and (max-width: 470px) {
                        .b20showright a.b20mainanchorL {
                            margin-left: 25%
                        }
                    }

                </style>
                <!-- VIEW RATE / SPEED BUMP [2] -->
                <section class="row-full">

                    <div class="b20consumer-loans ">
                        <div class="container">

                            <h2>Think Globally, Borrow Locally</h2>


                            <div class="b20consumer-loans-left b20showright" style="float:right;">

                                <div class="xhtml">
                                    <p>Take your game to the next level with a bank that knows your business. First
                                        PREMIER Bank makes all lending decisions locally, offering personal service,
                                        competitive rates and flexible terms on loans of any size. Get the working
                                        capital, flexibility and purchasing power you need with a partner that gives
                                        back to the community we serve. Talk to a loan officer today.</p>
                                </div>
                                <br />

                                <div class="b20consumer_btn_center">
                                    <!-- b20mainanchorL -->
                                    <a href="../../pages/about-us/teams/small-business-banking-team/index.html"
                                        class="b20mainanchorL">Contact Us</a>
                                </div>
                            </div>
                            <div class="b20consumer-loans-right"><img id="imgMainRight" alt="men shaking hands"
                                    src="../../../contentassets/eb063209ba754bddae806b4ee4554dd4/2.4_b-20-alt-1_shake-min.png"
                                    class="img-responsive"></div>
                        </div>
                    </div>
                </section>

                <!-- View Rate [3] (within container)-->
                <!-- View Rate [3] (within container)-->
            </div>
            <div class="block b18block  col-md-12">

                <style>
                    .pop_main_container_board .pop_main_container ol li ol li {}

                    .b18great_feature_main .b18detail {}

                    .b18great_feature_main .b18great_feature_left .b18detail h3 {}

                    .b18great_feature_main .b18great_feature_left span {}

                    .b18great_feature_main .b18great_feature_left .b18detail ul {}

                    @media only screen and (max-width: 767px) {
                        .b18great_feature_left {
                            padding-bottom: 0px;
                        }

                        .b18great_feature_main .b18detail {
                            margin-top: 0px;
                        }
                    }

                    .b18great_feature_main .b18detail {
                        min-height: 100px !important;
                    }

                    @media only screen and (max-width: 470px) {
                        .b18great_feature_main .b18detail {
                            display: inline-block;
                            padding-bottom: 15px;
                        }

                        .b18great_feature_left a.b18mainanchor {
                            margin-left: 20%;
                        }
                    }

                </style>
                <!-- VIEW RATE / SPEED BUMP [2] -->

                <section>
                    <div class="b18great_feature_main">
                        <h2> More Lending Options </h2>
                        <div class="b18great_feature_left">
                            <span>Business Loans</span>
                            <div class="b18detail xhtml">
                                <p>Finance large purchases, purchase inventory or invest in equipment. Increase working
                                    capital and fund expansion with Term and SBA loans from First PREMIER Bank.</p>
                            </div>
                            <a href="../../small-business/loans-and-credit-lines/small-business-loans/index.html"
                                class="b18mainanchor">Learn More</a>
                        </div>
                        <div class="b18great_feature_left b18great_feature_right payIcon-space">
                            <span>Commercial Real Estate</span>
                            <div class="b18detail xhtml">
                                <p>When it's time to buy, build property, or refinance to extract equity from real
                                    estate you own, we can help.</p>
                            </div>
                            <a href="../../small-business/loans-and-credit-lines/commercial-real-estate/index.html"
                                class="b18mainanchor">Learn More</a>
                        </div>
                        <div class="clearfix">
                            <center>
                            </center>
                        </div>

                    </div>
                    <div id="a10179140" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon" src="../../../static/img/closebutton.png"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <h2>Business Loans</h2>
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a
                                                                    href="../../small-business/loans-and-credit-lines/small-business-loans/index.html"
                                                                    target="_blank"></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="b10179140" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon" src="../../../static/img/closebutton.png"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <h2>Commercial Real Estate</h2>
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a
                                                                    href="../../small-business/loans-and-credit-lines/commercial-real-estate/index.html"
                                                                    target="_blank"></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="c10179140" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon" src="../../../static/img/closebutton.png"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <h2>More Lending Options</h2>
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a href="#" target="_blank"></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- View Rate [3] (within container)-->
                <!-- View Rate [3] (within container)-->
            </div>
            <div class="block b14block  col-md-12">
                <section class="row-full">
                    <div class="b14basic_box_right_content b14basic_box_background b14basic_box_right_content_banking">
                        <div class="b14basic_box_main b14basic_box_grey">
                            <div class="container">
                                <h2>Business Lines of Credit</h2>
                                <div class="b14basic_box">
                                    <div class="b14basic_box_right"><img
                                            src="../../../contentassets/a3fbd9cd3f5a410db3b40dfcca09c5aa/2.4_b-20-alt-2_woman-min.png"
                                            title="Business Lines of Credit" alt="woman smiling"> </div>
                                    <div class="b14basic_box_left">
                                        <div class="xhtml">
                                            <h3>Purchasing Power, When You Need It</h3>
                                            <ul>
                                                <li>Custom credit line right-sized for your business</li>
                                                <li>Working capital to help with seasonal flux</li>
                                                <li>Extra spending power for larger purchases</li>
                                                <li>Secured or unsecured</li>
                                                <li>Competitive, variable interest rates<sup>1</sup></li>
                                                <li>Flexible, interest-only payment options</li>
                                                <li>Available for use as overdraft protection</li>
                                            </ul>
                                        </div>
                                        <div class="b14confidence_links">
                                            <a href="../../pages/about-us/teams/small-business-banking-team/index.html"
                                                class="b14readmore">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="block b18block  col-md-12">

                <style>
                    .pop_main_container_board .pop_main_container ol li ol li {}

                    .b18great_feature_main .b18detail {}

                    .b18great_feature_main .b18great_feature_left .b18detail h3 {}

                    .b18great_feature_main .b18great_feature_left span {}

                    .b18great_feature_main .b18great_feature_left .b18detail ul {}

                    @media only screen and (max-width: 767px) {
                        .b18great_feature_left {
                            padding-bottom: 0px;
                        }

                        .b18great_feature_main .b18detail {
                            margin-top: 0px;
                        }
                    }

                    .b18great_feature_main .b18detail {
                        min-height: 100px !important;
                    }

                    @media only screen and (max-width: 470px) {
                        .b18great_feature_main .b18detail {
                            display: inline-block;
                            padding-bottom: 15px;
                        }

                        .b18great_feature_left a.b18mainanchor {
                            margin-left: 20%;
                        }
                    }

                </style>
                <!-- VIEW RATE / SPEED BUMP [2] -->

                <section>
                    <div class="b18great_feature_main">
                        <h2> A Proud Supporter of Business &amp; Community </h2>
                        <div class="b18great_feature_left">
                            <span>Serving Enterprise Business</span>
                            <div class="b18detail xhtml">
                                <ul>
                                    <li><a title="Agriculture"
                                            href="../../small-business/ag-banking/index.html">Agriculture</a></li>
                                    <li>Construction</li>
                                    <li>Healthcare</li>
                                    <li>Hospitality</li>
                                    <li>Manufacturing</li>
                                    <li>Non-Profits</li>
                                    <li>Real Estate</li>
                                    <li>Service Industry</li>
                                    <li>Technology</li>
                                    <li>And More</li>
                                </ul>
                            </div>
                        </div>
                        <div class="b18great_feature_left b18great_feature_right payIcon-space">
                            <span>Giving Back Through:</span>
                            <div class="b18detail xhtml">
                                <ul>
                                    <li><a title="Philanthropic Giving"
                                            href="../../pages/about-us/community/philanthropic-giving/index.html">Philanthropic
                                            Giving</a></li>
                                    <li><a title="Community Service"
                                            href="../../pages/about-us/community/community-service/index.html">Community
                                            Service</a></li>
                                    <li><a title="Sponsorships"
                                            href="../../pages/about-us/community/sponsorship/index.html">Sponsorships</a>
                                    </li>
                                    <li><a title="Collegiate Support"
                                            href="../../pages/about-us/community/collegiate-support/index.html">Collegiate
                                            Support</a></li>
                                    <li><a title="Celebrations &amp; Appreciations"
                                            href="{{route('frontend.en.pages.about.careers')}}">Celebrations
                                            &amp; Appreciations</a></li>
                                    <li>Learn More <a title="About Us" href="../../pages/about-us/index.html">About
                                            Us</a></li>
                                </ul>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div class="clearfix">
                            <center>
                                <a href="../../pages/about-us/teams/small-business-banking-team/index.html"
                                    class="btnGreen">Contact Us</a>
                            </center>
                        </div>

                    </div>
                    <div id="a24443984" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon" src="../../../static/img/closebutton.png"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <h2>Serving Enterprise Business</h2>
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a target="_blank"></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="b24443984" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon" src="../../../static/img/closebutton.png"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <h2>Giving Back Through:</h2>
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a target="_blank"></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="c24443984" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon" src="../../../static/img/closebutton.png"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <h2>A Proud Supporter of Business &amp; Community</h2>
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a
                                                                    href="../../pages/about-us/teams/small-business-banking-team/index.html"
                                                                    target="_blank"></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- View Rate [3] (within container)-->
                <!-- View Rate [3] (within container)-->
            </div>
            <div class="block b06block  col-md-12">
                <style>
                    .b06carousel-inner {
                        position: relative;
                        width: 60% !important;
                        overflow: hidden;
                        margin: 0 20% 0 19% !important;
                        height: 268px;
                    }

                    .b06carousel-control .glyphicon-chevron-left::before,
                    .glyphicon-chevron-right::before {
                        content: "" !important;
                    }

                    .b06carousel-control:focus,
                    .b06carousel-control:hover,
                    .b06carousel-control.left,
                    .b06carousel-control.right {
                        background: none !important;
                    }

                    .b06carousel-control {
                        z-index: 999;
                        opacity: inherit !important;
                    }

                    .b06carousel-inner>.item.next.left,
                    .carousel-inner>.item.prev.right,
                    .carousel-inner>.item.active {
                        transform: inherit !important;
                    }

                    .b06carousel-inner>.item {
                        perspective: inherit !important;
                    }

                    .b06carousel-control.left {
                        left: -3% !important;
                    }

                    @media only screen and (max-width:1366px) {

                        /*#region B-6*/
                        .b06carousel-inner {
                            width: 80% !important;
                            margin: 0 10% 0 10% !important;
                        }

                        /*#endregion*/
                    }

                    @media only screen and (max-width:1000px) {

                        /*#region B-6*/
                        .b06carousel-control.left {
                            left: 0 !important;
                        }

                        .b06carousel-control .glyphicon-chevron-left,
                        .carousel-control .glyphicon-chevron-right,
                        .carousel-control .icon-next,
                        .carousel-control .icon-prev {
                            top: 50% !important;
                        }

                        .b06carousel-control {
                            width: 10% !important;
                        }

                        .glyphicon-chevron-left img,
                        .glyphicon-chevron-right img {
                            width: 100%;
                        }

                        .b06carousel-inner {
                            height: 320px;
                        }

                        /*#endregion*/
                    }

                    @media screen and (max-width: 767px) {

                        /*#region B-6*/
                        .b06carousel-inner {
                            height: 300px;
                        }

                        /*#endregion*/
                    }

                </style>
                <script type="text/javascript">
                    $('#b06Carousel').carousel({
                        interval: 80000,
                    })
                </script>





                <section class="row-full">
                    <div class="b6featured_quote_main">
                        <img src="../../../Static/img/CustomBlocks/B6/featured_bg.png" class="b6featured_bg"
                            alt="First PREMIER Bank">
                        <img src="../../../Static/img/CustomBlocks/B6/featured_bg_small.png"
                            class="b6featured_bg_small_bg" alt="First PREMIER Bank">
                        <div class="b6featured_bg_small carousel" id="b06Carousel" data-ride="carousel">
                            <div class="">
                                <div class="carousel-inner b06carousel-inner">
                                    <div class="item active">
                                        <div class="row b6mypadding">
                                            <div class="b6featured_quote_img col-lg-5 col-md-5"><img
                                                    src=../../../contentassets/436789bbf08d4101aadaae9300d1c40c/quotes-daverozenboom.png
                                                    class="b6featured_img" alt="Dave Rozenboom President"></div>
                                            <div class="b6featured_quote col-lg-7 col-md-7">
                                                <p>We have the unique combination of being a remarkably solid,
                                                    nationally-recognized bank with deep, South Dakota-proud roots. We
                                                    can finance any sized deal, provide local decision-making and
                                                    provide unparalleled support.</p>
                                                <div class="clearfix"></div><span> - Dave Rozenboom, President,
                                                    First PREMIER Bank</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row b6mypadding">
                                            <div class="b6featured_quote_img col-lg-5 col-md-5"><img
                                                    src=../../../contentassets/d0c2cdf59a224853870b3bf4846b3c23/quotes-pamhanneman.png
                                                    class="b6featured_img" alt="Pam Hanneman VP Business Banking">
                                            </div>
                                            <div class="b6featured_quote col-lg-7 col-md-7">
                                                <p>We are personally vested in getting to know each business and each
                                                    business owner. Our goal is to build long-term relationships to
                                                    support the growth and success of businesses large and small.</p>
                                                <div class="clearfix"></div><span> - Pam Hanneman, VP, Business
                                                    Banking</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row b6mypadding">
                                            <div class="b6featured_quote_img col-lg-5 col-md-5"><img
                                                    src=../../../contentassets/8ef99c3e67ee4e2ab116ede7334b4295/quotes-tonynour.png
                                                    class="b6featured_img" alt="Tony Nour SVP Relationship Banking">
                                            </div>
                                            <div class="b6featured_quote col-lg-7 col-md-7">
                                                <p>When you own a business, establishing strong partnerships with
                                                    trusted advisors is critical. We believe peace of mind can be found
                                                    when the advice and decisions impacting your business come from
                                                    people you trust within your own community.</p>
                                                <div class="clearfix"></div><span> - Tony Nour, SVP, Relationship
                                                    Banking</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <a class="left carousel-control b06carousel-control" href="#b06Carousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"><img
                                        src="../../../Static/img/CustomBlocks/B6/left_arrow.png"
                                        alt="First PREMIER Bank"></span>
                                <span class="sr-only"></span>
                            </a>
                            <a class="right carousel-control b06carousel-control" href="#b06Carousel"
                                data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"><img
                                        src="../../../Static/img/CustomBlocks/B6/right_arrow.png"
                                        alt="First PREMIER Bank"></span>
                                <span class="sr-only"></span>
                            </a>
                        </div>
                    </div>
                </section>

            </div>
            <div class="block b17block  col-md-12">﻿
                <!-- VIEW RATE / SPEED BUMP [2] -->
                <style>
                    .pop_main_container_board .pop_main_container ol li ol li {}

                </style>
                <style>
                    /* Changes to Functionality -> Adding the ability to add one or more links after the main button */

                    /* B-17 Specific (Added functionality for multiple links) */
                    .b17ButtonLinksSingle .b17link {
                        padding-left: 15px;
                    }

                    .b17ButtonLinksMultiple .b17link {
                        float: left;
                        margin-right: 25px;
                    }

                    .b17cards {
                        position: relative;
                        z-index: 99;
                        top: -203px !important;
                    }

                    .b17basic_box_grey {
                        background-color: #f9f9f9;
                        background-image: none;
                    }

                    .about-us-small-image .b17block {
                        /* max-height: 779px;*/
                    }

                    .b17free_mobile_banking_left.right>img {
                        float: right;
                    }

                    @media only screen and (max-width: 470px) {
                        .b17free_mobile_banking h2 {
                            /* margin-left: 6%;*/
                            margin-top: 5%;
                            text-align: center;
                            width: 100%;
                        }
                    }

                </style>

                <!-- VIEW RATE / SPEED BUMP [2] -->
                <section class="row-full b17promo">

                    <div class="b17free_mobile_banking ">
                        <div class="container">
                            <h2>Business Rewards Mastercard® Credit Card</h2>

                            <div class="b17free_mobile_banking_right">
                                <div class="xhtml">
                                    <p>The First PREMIER Bank Business Rewards Mastercard<sup>&reg;</sup> Credit Card
                                        provides extra purchasing power and great features like 1% cash back on eligible
                                        purchases<sup>2</sup>, rental car insurance, extended warranty and outstanding
                                        fraud and theft protection. It's a great tool for managing business payments,
                                        employee purchases, expenses and more.</p>
                                </div>
                                <div class="b17PayLinks payIcon-space">
                                </div>

                                <!-- Button and Footer Links go here ... -->
                                <a href="../../small-business/business-services/business-rewards-mastercard/index.html"
                                    class="b17readmore">LEARN MORE</a>
                            </div>

                            <div class="b17free_mobile_banking_left right">
                                <img class="img-responsive" id="imgMainImage" style="border-radius:50%"
                                    src="../../../contentassets/dc819b76614f4c6f8bda3af97213e233/2.4_b-17_promo_womancard-min.png"
                                    alt="First PREMIER Bank">
                            </div>
                        </div>
                    </div>


                    <div id="a55259815" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon" src="../../../static/img/closebutton.png"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <h2>Business Rewards Mastercard&#174; Credit Card</h2>
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a
                                                                    href="../../small-business/business-services/business-rewards-mastercard/index.html"
                                                                    target="_blank"></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- View Rate [3] (within container)-->
                <!-- View Rate [3] (within container)-->
                <script>
                    $('.modal-backdrop').remove();
                </script>
            </div>
            <div class="block b04block  col-md-12">
                <style>
                    div.b20consumer-loans-left p {
                        margin-left: 35px;
                    }

                    div.b20consumer-loans-left .b20consumer_btn_center a {
                        margin-left: 35px;
                    }

                    .b14basic_box_left h3 {
                        padding-bottom: 20px;
                    }

                    .b14basic_box_left ul li {
                        margin-top: 0px !important;
                        margin-bottom: 0px;
                    }

                </style>
                <section class="row-full b4background">
                    <div class="container">
                        <div class="b4anywhere_banking" style="width:100%; ">
                        </div>
                    </div>
                </section>
                <script>
                    ;
                </script>

                <style>
                    .b4background.colored {
                        background-color: #25455a !important;
                    }

                    .b4background.colored .b15benfits_main_box {
                        margin: 0px !important;

                    }

                    .colored h2,
                    .colored .xhtml p {
                        color: #fff !important;
                    }

                    .page-Our-Communities .block.b04block.col-md-12 {
                        margin-top: 20px;
                    }

                </style>
            </div>
            <div class="block b13block  col-md-12">

                <style>
                    .b13what_you_know_main ol li p {
                        padding: 0 10px 0 34px;
                        list-style: none;
                        margin: 0px 0px 0px 0px;
                        font-size: 14px;
                        text-align: left;
                    }

                    .b13what_you_know_main ol li {
                        width: 100%
                    }

                    .b13what_you_know_main ol li ol li {
                        width: 50%;
                    }

                    .b13what_you_know_main_white ol li ol li {
                        width: 50%;
                    }

                </style>
                <script>
                    $(document).ready(function() {
                        //GetDisclosurePoints();
                        GetDisclosurePointsBrackets();
                    });
                </script>
                <section class="row-full">
                    <div class="b13what_you_know_main">
                        <div class="container" style="background-color:#182e39 !important;">

                            <h4> Disclosure </h4>
                            <div class="b13points">
                                <p>{1} At our discretion, we may change the interest rate daily. Interest is calculated
                                    using the daily balance method. Interest is compounded monthly and credited monthly.
                                </p>
                                <p>{2} Restrictions apply. See Business Credit Card Agreement for details.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <script>
            $('#b06Carousel').carousel({
                interval: 16000,
            })
        </script>



        <div class="row-full footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol1">
                        <div class="footerHeader">Company</div>

                        <ul>

                            <li>
                                <a href="../../pages/about-us/index.html">About Us</a>
                            </li>

                            <li>
                                <a href="../../index.html">First PREMIER Bank</a>
                            </li>

                            <li>
                                <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a>
                            </li>

                            <li>
                                <a href="../../pages/about-us/leadership-team/index.html">Leadership</a>
                            </li>

                            <li>
                                <a href="../../pages/about-us/community/index.html">Community</a>
                            </li>

                            <li>
                                <a href="{{route('frontend.en.pages.about.careers')}}">Careers</a>
                            </li>

                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol2">
                        <div class="footerHeader">Customers</div>

                        <ul>

                            <li>
                                <a href="../../index.html">Personal Banking</a>
                            </li>

                            <li>
                                <a href="../../small-business/index.html">Small Business</a>
                            </li>

                            <li>
                                <a href="../index.html">Commercial</a>
                            </li>

                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol3">
                        <div class="footerHeader">Help &amp; Contact</div>

                        <ul>

                            <li>
                                <a href="../../pages/quick-links/customer-care/index.html">Customer Care</a>
                            </li>

                            <li>
                                <a href="../../pages/quick-links/locations/index.html">Locations</a>
                            </li>

                            <li>
                                <a href="../../pages/quick-links/customer-care/index.html">BANK: 800-501-6535</a>
                            </li>

                            <li>
                                <a href="https://www.mypremiercreditcard.com/">CREDIT CARD: 800-987-5521</a>
                            </li>

                            <li>
                                <a href="../../index.html">Routing Number: 091408598</a>
                            </li>

                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol4">
                        <div class="footerHeader">Legal Notices</div>

                        <ul>

                            <li>
                                <a href="../../pages/resources/first-premier-privacy-statement-2020/index.html">Privacy
                                    Notice &amp; Statement</a>
                            </li>

                            <li>
                                <a href="../../pages/resources/legal-disclosures/index.html">Legal Disclosures</a>
                            </li>

                            <li>
                                <a href="../../pages/resources/cookie-policy/index.html">Cookie Policy</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="padding-top:50px;">
                        <p>Member FDIC | <img src="../../../Static/img/equalhousinglender.png"
                                alt="Equal Housing Lender" title="Equal Housing Lender" />Equal Housing Lender</p>
                    </div>
                </div>
            </div>
        </div>
        <style>
            /* CHROME SAFARI FIX */
            .form-control:hover,
            .form-control:active,
            .form-control:focus {
                box-shadow: none !important;
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
            }

            .form-control:hover,
            .form-control:active,
            .form-control:focus {
                box-shadow: none !important;
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
            }

            a:focus,
            a:active {
                outline: none !important;
                border: none !important;
            }

            input:focus,
            input:active {
                outline: none !important;
            }

            textarea:focus {
                outline: none !important;
            }

            button:focus,
            button:active {
                outline: none !important;
                border: none !important;
            }

            .showehllogo {
                background: url('../../../Static/img/EHLlogo%20white.png') 230px 0px no-repeat;
                background-size: 24px 24px
            }

        </style>
        <script type="text/javascript">
            var ContentId;
            var Name;
            var FullName;
            var EMail;
            var Phone;
            var Message;

            function contactPersonName(value) {
                ContentId = parseInt($(value).attr('value'));
                Name = $(value).attr('name');
                $("#contactWithPersonName").html("Contact " + Name);
                FullName = "";
                EMail = "";
                Message = "";
                Phone = "";
                $("#email").val("");
                $("#fullname").val("");
                $('#phone').val("");
                $("#message").val("");
            }

            //$("#fullname").val() != "" &&
            $("#submitButtonB28Block").click(function(event) {
                if ($("#email").val() != "" &&
                    $("#message").val() != "") {
                    FullName = $("#fullname").val();
                    EMail = $("#email").val();
                    Phone = $("#phone").val();
                    Message = $("#message").val();
                    $.ajax({
                        type: "POST",
                        url: '/api/ContactMe?ContentId=' + ContentId + '&ContactToName=' + Name +
                            '&ContactPersonName=' + FullName + '&ContactPersonEmail=' + EMail +
                            '&ContactPersonPhone=' + Phone + '&ContactPersonMessage=' + encodeURIComponent(
                                Message),
                        contentType: "application/json",

                        success: function(result) {
                            alert(result);
                        },
                        error: function() {

                        }
                    });
                }
            });
        </script>
    </div>
@endsection