@extends('frontend.layouts.app')
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

                    $(document).ready(function () {
                        if (screen.width < 767) {
                            $('.b19landingpage').css('height', '628px');
                            $('.b19landingpage').css('background', '');
                            $('.b19landingpage').css('background-color', '#1b3e43');
                        }
                        else {
                            $('.b19landingpage').css('background', 'url(/Static/img/svg/green-3.svg) no-repeat');
                        }
                    });

                    $(window).resize(function () {
                        if (screen.width < 767) {
                            $('.b19landingpage').css('height', '628px');
                            $('.b19landingpage').css('background', '');
                            $('.b19landingpage').css('background-color', '#1b3e43');
                        }
                        else {
                            $('.b19landingpage').css('background', 'url(/Static/img/svg/green-3.svg) no-repeat');
                        }
                    });

                </script>


                <div class="b19landingpage row-full" style="padding-bottom:0px;">
                    <div class="container">
                        <h1>Treasury Services</h1>
                        <div class="xhtml"></div>
                        <div class="b19landingpage_box_main">

                            <div class="col-md-4 col-sm-6 b19landingpage_box">
                                <a href="cash-management/index.html"><img
                                        src="../../../globalassets/images/primary-icons/blue/business-finance/blue-business-_-finance-primary-icon-11.png"
                                        title="Manage Cash" alt="growth chart" border="0" /></a>
                                <div class="clearfix"></div>
                                <span><a href="cash-management/index.html">Manage Cash</a></span>
                                <div class="xhtml">
                                    <p>Custom solutions designed to maximize cash flow and mitigate fraud.</p>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 b19landingpage_box">
                                <a href="manage-receivables/index.html"><img
                                        src="../../../globalassets/images/primary-icons/bright/bookmarks-tags/bright-bookmarks-_-tags-primary-icon-2.png"
                                        title="Manage Receivables" alt="invoice" border="0"></a>
                                <div class="clearfix"></div>
                                <span><a href="manage-receivables/index.html">Manage Receivables</a></span>
                                <div class="xhtml">
                                    <p>Full suite of services and tools including ACH, Check Image Clearing, Lockbox
                                        services and more.</p>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 b19landingpage_box">
                                <a href="manage-payables-and-payroll/index.html"><img
                                        src="../../../globalassets/images/primary-icons/green/business-finance/green-business-_-finance-primary-icon-2.png"
                                        title="Payables &amp; Payroll" alt="coins falling into hand" border="0"></a>
                                <div class="clearfix"></div>
                                <span><a href="manage-payables-and-payroll/index.html">Payables &amp; Payroll</a></span>
                                <div class="xhtml">
                                    <p>Efficiently and reliably make vendor and tax payments, process payroll and
                                        expense reimbursement.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="block b20block  col-md-12">


                <!-- VIEW RATE / SPEED BUMP [2] -->
                <script>
                    $(document).ready(function () {
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

                            <h2>Partner with First PREMIER Bank</h2>


                            <div class="b20consumer-loans-left b20showright" style="float:right;">

                                <div class="xhtml">
                                    <p>We're proven. First PREMIER is the country's 14th largest Automated Clearing
                                        House (ACH) originating bank. We've been the State of South Dakota&rsquo;s bank
                                        for more than a quarter of a century, and the bank for our state's largest city
                                        for almost two decades. We have the experience and agility to work with
                                        companies of all sizes as a primary or secondary originating bank. We&rsquo;re
                                        one of the nation's strongest banks with $2 billion in bank assets and more than
                                        $3 billion in managed trust assets. Put our size and strength to work for your
                                        business.</p>
                                </div>
                                <br />

                                <div class="b20consumer_btn_center">
                                    <!-- b20mainanchorL -->
                                    <a href="../../pages/about-us/teams/treasury-services-team/index.html"
                                        class="b20mainanchorL">Contact Us</a>
                                </div>
                            </div>
                            <div class="b20consumer-loans-right"><img id="imgMainRight"
                                    alt="man in conference room smiling"
                                    src="../../../contentassets/b88d72b017554675a4b9a22ad90f12df/3.4_b-20-alt1_guy-min.png"
                                    class="img-responsive"></div>
                        </div>
                    </div>
                </section>

                <!-- View Rate [3] (within container)-->
                <!-- View Rate [3] (within container)-->
            </div>
            <div class="block b20block  col-md-12">


                <!-- VIEW RATE / SPEED BUMP [2] -->
                <script>
                    $(document).ready(function () {
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

                            <h2>Maximize Cash Flow &amp; Liquidity</h2>


                            <div class="b20consumer-loans-right"><img id="imgMainRight"
                                    src="../../../contentassets/99e0a44be5dd408796212ef3ba11187d/3.4_b-20-alt2_team-min.png"
                                    alt="construction workers looking at blueprints" class="img-responsive"></div>
                            <div class="b20consumer-loans-left">
                                <div class="xhtml">
                                    <p>You have goals. We can help you reach them. Regardless of your size or
                                        complexity, we can help you efficiently manage cash with virtual accounts,
                                        integrated reporting and proactive fraud management.</p>
                                </div>
                                <br />
                                <div class="b20consumer_btn_center">
                                    <a href="cash-management/index.html" class="b20mainanchor">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- View Rate [3] (within container)-->
                <!-- View Rate [3] (within container)-->
            </div>
            <div class="block b22block  col-md-12">
                <section class="row-full">

                    <div class="b22additional-lending">
                        <div class="container" style="">
                            <h4 class="Blue">Manage Payables &amp; Payroll</h4>
                            <div class="b22additional-lending-left">
                                <h3>Manage Payables</h3>
                                <div class="xhtml">
                                    <p>First PREMIER ACH services help you reduce overhead by electronically
                                        streamlining your company&rsquo;s payments.</p>
                                    <p><br /><br /></p>
                                </div>
                                <a href="manage-payables-and-payroll/index.html">Learn More</a>
                            </div>

                            <div class="b22additional-lending-righ">
                                <h3>Payroll Services</h3>
                                <div class="xhtml">
                                    <p>As a primary or secondary provider, our ACH processing is ideal for companies big
                                        or small. We also support the needs of large-scale payroll
                                        providers.<br /><br /></p>
                                </div>
                                <a href="manage-payables-and-payroll/index.html">Learn More</a>
                            </div>
                        </div>
                        <div class="b22spacer"></div>
                    </div>
                    <div id="a52171977" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon" src="../../../static/img/closebutton.png"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a href="manage-payables-and-payroll/index.html"
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
                    <div id="b52171977" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon" src="../../../static/img/closebutton.png"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a href="manage-payables-and-payroll/index.html"
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
                        <h2> Manage Receivables </h2>
                        <div class="b18great_feature_left">
                            <div class="b18detail xhtml">
                                <p>Control funds and working capital by rapidly converting payments into cash assets.
                                    First PREMIER can help your business:</p>
                                <ul>
                                    <li>Expedite payment collection and processing</li>
                                    <li>Improve reconciliation of customer payments</li>
                                    <li>Control transaction settlement dates to optimize cash flow</li>
                                    <li>Decrease NSF/returned item fees</li>
                                    <li>Improve resolution</li>
                                    <li>Receive payments faster</li>
                                    <li>Lower costs, risks and departmental overhead</li>
                                </ul>
                            </div>
                        </div>
                        <div class="b18great_feature_left b18great_feature_right payIcon-space">
                            <div class="b18detail xhtml">
                                <p>Our services include:</p>
                                <ul>
                                    <li><a href="manage-receivables/ach-services/index.html">ACH Services</a></li>
                                    <li><a href="manage-receivables/virtual-account-management/index.html">Virtual
                                            Account Management</a></li>
                                    <li><a href="manage-receivables/centralized-returns/index.html">Centralized Returns
                                            Processing </a></li>
                                    <li><a href="manage-receivables/check-image-clearing/index.html">Check Image
                                            Clearing</a></li>
                                    <li><a href="manage-receivables/remote-deposit/index.html">Remote Deposit</a></li>
                                    <li><a href="manage-receivables/lockbox-services/index.html">Lockbox Services </a>
                                    </li>
                                    <li><a href="manage-receivables/positive-pay/index.html">Positive Pay</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix">
                            <center>
                                <a href="manage-receivables/index.html" class="btnGreen">Learn More</a>
                            </center>
                        </div>

                    </div>
                    <div id="a57449878" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon" src="../../../static/img/closebutton.png"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
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
                    <div id="b57449878" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon" src="../../../static/img/closebutton.png"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
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
                    <div id="c57449878" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon" src="../../../static/img/closebutton.png"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <h2>Manage Receivables</h2>
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a href="manage-receivables/index.html"
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
            <div class="block b25block  col-md-12">
                <script>
                    $(document).ready(function () {

                        if ('/Static/img/CustomBlocks/B25/Background.png' != 'null' && '/Static/img/CustomBlocks/B25/Background.png' != '') {
                            $(".b25disclosure").css("background", "#245251 url(/Static/img/CustomBlocks/B25/Background.png) no-repeat");
                            if (screen.width > 1000) {
                                $(".b25need_help_main").css("background", "#245251 url(/Static/img/CustomBlocks/B25/Background.png) no-repeat");
                            }

                        }

                    });
                </script>
                <style>
                    /*.b25need_help_main .White { margin-bottom: 20px !important; }
    */
                    .b25need_help_main .xhtml h2 {
                        color: #e4cb34;
                    }

                    /*.b25need_help_main { margin-top: -24px; } */
                    @media only screen and (max-width:1024px) {
                        .b25need_help_main {
                            background-color: #245251 !important;
                        }

                        .page-about-us .b25need_help_main,
                        .parent-5384 .b25need_help_main {
                            background-color: #1f3848 !important;
                        }
                    }
                </style>
                <section class="row-full">

                    <div class="b25need_help_main">
                        <div class="container">
                            <h2 class="White">Partner With Us Today</h2>
                            <div class="xhtml">
                                <p>We have the know-how, technology and Treasury Specialists to help you manage and
                                    optimize your cash management. Contact our Treasury Services team today.</p>
                            </div>
                            <div class="b25bottom" style="">
                                <center>
                                    <a href="../../pages/resources/forms/contact-treasury-services/index.html"
                                        class="b25mainanchor">Contact Us</a><br clear="all" />
                                </center>
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
                        <h2> First PREMIER Partners with Business </h2>
                        <div class="b18great_feature_left">
                            <span>Our Size is our Strength</span>
                            <div class="b18detail xhtml">
                                <ul>
                                    <li>1 of 31 Nacha Direct members</li>
                                    <li>14<sup>th</sup> largest ACH originating bank in the country</li>
                                    <li>The bank for State of South Dakota (25+ consecutive years)</li>
                                    <li>The bank for the City of Sioux Falls (15+ consecutive years)</li>
                                    <li>One of the strongest capitalized banks in America</li>
                                    <li>$2 billion in bank assets and more than $3 billion in managed trust assets</li>
                                    <li>12<sup>th</sup> largest national issuer of Mastercard&reg; Credit Cards</li>
                                </ul>
                            </div>
                        </div>
                        <div class="b18great_feature_left b18great_feature_right payIcon-space">
                            <span>Dedicated, Responsive Service</span>
                            <div class="b18detail xhtml">
                                <ul>
                                    <li>Enterprise-level service</li>
                                    <li>Extended daily cut-off options</li>
                                    <li>Responsive team of experienced professionals</li>
                                    <li>Customized solutions to meet any size business need</li>
                                    <li>Dedicated and direct phone lines to Treasury Services team</li>
                                    <li>Three decades of experience</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix">
                            <center>
                            </center>
                        </div>

                    </div>
                    <div id="a45428518" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon" src="../../../static/img/closebutton.png"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <h2>Our Size is our Strength</h2>
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
                    <div id="b45428518" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon" src="../../../static/img/closebutton.png"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <h2>Dedicated, Responsive Service</h2>
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
                    <div id="c45428518" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon" src="../../../static/img/closebutton.png"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <h2>First PREMIER Partners with Business</h2>
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
                            <h2>Business Online Banking</h2>

                            <div class="b17free_mobile_banking_right">
                                <h3>Safe, Secure, 24/7 Access</h3>
                                <div class="xhtml">
                                    <ul>
                                        <li>FREE Business <a
                                                href="cash-management/business-online-banking/index.html">Online &amp;
                                                Mobile Banking</a></li>
                                        <li>Schedule or make ad-hoc <a href="cash-management/bill-pay/index.html">bill
                                                payments</a></li>
                                        <li>View, download and print <a
                                                href="cash-management/estatements/index.html">eStatements</a></li>
                                        <li>Debit lock/unlock feature for lost or stolen cards</li>
                                        <li>Multi-tiered administrative access</li>
                                        <li>Download data to spreadsheet or accounting software</li>
                                    </ul>
                                </div>
                                <div class="b17PayLinks payIcon-space">
                                </div>

                                <!-- Button and Footer Links go here ... -->
                            </div>

                            <div class="b17free_mobile_banking_left right">
                                <img class="img-responsive" id="imgMainImage" style="border-radius:50%"
                                    src="../../../contentassets/6bfc359323c142d790cddd29281cbfc6/3.4_b-17-promo_guy-min.png"
                                    alt="First PREMIER Bank">
                            </div>
                        </div>
                    </div>

                    <div class="b15benfits_main_box b17cards">
                        <div class="container">
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar">
                                    <img src="../../../globalassets/images/secondary-icons/bright/edition/bright-edition-secondary-icon-15.png"
                                        title="Security &amp; Fraud Management" alt="man looking at online statements"
                                        width="116px" height="116px">
                                </div>
                                <div class="b15avtar_content">
                                    <h3>Security &amp; Fraud Management</h3>
                                    <p>Find out how First PREMIER protects you and how to protect yourself from fraud.
                                    </p>
                                    <div class="clearfix"></div><br />
                                    <a href="cash-management/security-and-fraud-protection/index.html">Learn More</a>
                                </div>
                            </div>
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar">
                                    <img src="../../../globalassets/images/secondary-icons/green/business-finance/green-business-_-finance-secondary-icon-11.png"
                                        title="Reporting &amp; Analytics" alt="man looking at online statements"
                                        width="116px" height="116px">
                                </div>
                                <div class="b15avtar_content">
                                    <h3>Reporting &amp; Analytics</h3>
                                    <p>Discover the custom and out-of-the box reporting capabilities we offer for
                                        business customers.</p>
                                    <div class="clearfix"></div><br />
                                    <a href="cash-management/reporting-and-analytics/index.html">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="a50625094" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon" src="../../../static/img/closebutton.png"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <h2>Business Online Banking</h2>
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
                <script>
                    $('.modal-backdrop').remove();
                </script>
            </div>
        </div>



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
            $("#submitButtonB28Block").click(function (event) {
                if ($("#email").val() != "" &&
                    $("#message").val() != "") {
                    FullName = $("#fullname").val();
                    EMail = $("#email").val();
                    Phone = $("#phone").val();
                    Message = $("#message").val();
                    $.ajax({
                        type: "POST",
                        url: '/api/ContactMe?ContentId=' + ContentId + '&ContactToName=' + Name + '&ContactPersonName=' + FullName + '&ContactPersonEmail=' + EMail + '&ContactPersonPhone=' + Phone + '&ContactPersonMessage=' + encodeURIComponent(Message),
                        contentType: "application/json",

                        success: function (result) {
                            alert(result);
                        },
                        error: function () {

                        }
                    });
                }
            });
        </script>
    </div>
@endsection