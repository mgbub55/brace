@extends('frontend.layouts.app', ['page_title' => 'First PREMIER Business Checking - Accounts, Debit Cards, Overdraft
Protection | Commercial Banking'])

@section('content')
    <div class="container">

        <!--start responsive menu-->
        @include('frontend.layouts.components.header')
        <!-- Main Header -->
        @include('frontend.layouts.components.navbar')

        <script>
            $(document).ready(function() {

                //$('#AccessAccountDropdown option[id!=selectaccount]').each(function (index, value) {
                //    $('#signInHoverSection').append('<p>' + $(value).text() + '</p>');
                //});

                if ($(window).width() == 1024) {
                    $('#ulPremierMainMenu li.SubMenu > a').on('click touchend', function(e) {
                        $(this).find('div[id*=subdiv]').hide();
                        $(this).attr('href', 'javascript:void(0)');
                        ShowMenu(this);
                    }).focusout(function() {
                        ShowMenu(this);
                    });
                } else {

                    var timeoutId;
                    $("#ulPremierMainMenu li.SubMenu > a").hover(function() {
                            var self = this;
                            if (!timeoutId) {
                                timeoutId = window.setTimeout(function() {
                                    timeoutId = null;
                                    ShowMenu(self);
                                }, 50);
                            }
                        },
                        function() {
                            if (timeoutId) {
                                window.clearTimeout(timeoutId);
                                timeoutId = null;
                            }
                        });
                }

                if (sessionStorage.getItem('isClosed') == "true") {
                    $(".alert").hide();
                }

                var lastID = null;

                var handleMouseover = function(e) {
                    var target = e.target || e.srcElement;
                    lastID = target.id;
                    className = target.className;
                    tagName = target.localName;
                    if (lastID != "ulPremierMainMenu" && lastID != "") {
                        $('div[id*=subdiv]').slideUp(500);
                        $('.SubMenuItems li > a').css('color', '#fff').css('border-bottom', '');
                    }
                    if (className == "col-md-8 col-xs-12 col-sm-6" || className == "b1banner_text" || className ==
                        "b1login_Box" || className == "b1banner-desc" || className == "row b1mobile" || className ==
                        "b1banner_text" || className == "White" || className == "b1access" || className ==
                        "header-box" || tagName == "img" || tagName == "body") {
                        $('div[id*=subdiv]').slideUp(500);
                        $('.SubMenuItems li > a').css('color', '#fff').css('border-bottom', '');;
                    }

                };

                if (document.addEventListener) {
                    document.addEventListener('mouseover', handleMouseover, false);
                    document.addEventListener('mouseover', handleMouseover, false);
                } else {
                    document.attachEvent('onmouseover', handleMouseover);
                }

            });

            function ShowMenu(element) {
                if ($(element).next('div[id*=subdiv]').filter(function() {
                        return $(this).css('display') === 'block';
                    }).length == 0) {
                    $('div[id*=subdiv]').hide();
                    $(element).next('div[id*=subdiv]').slideDown(500);
                    $('.SubMenuItems li > a').css('color', '#fff').css('border-bottom', '');
                    $(element).css('color', '#e4cb3f').css({
                        "border-bottom-color": "#e4cb3f",
                        "border-bottom-width": "3px",
                        "border-bottom-style": "solid"
                    });
                }
            }

            function ShowSignInOption() {
                if ($('#signInHoverSection').attr('data-present') == "present") {
                    $('#signInHoverSection').toggle();
                }
            }

            function SearchOut() {
                $('#txtheadsearch').attr('data-val', $('#txtheadsearch').val());
                $('#txtheadsearch').val(null);
            }

            function SearchIn() {
                var searchText = $('#txtheadsearch').attr('data-val') || '';
                $('#txtheadsearch').val(searchText);
            }
        </script>
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
                            $('.b19landingpage').css('background', 'url(/Static/img/svg/green-2.svg) no-repeat');
                        }
                    });

                    $(window).resize(function() {
                        if (screen.width < 767) {
                            $('.b19landingpage').css('height', '628px');
                            $('.b19landingpage').css('background', '');
                            $('.b19landingpage').css('background-color', '#1b3e43');
                        } else {
                            $('.b19landingpage').css('background', 'url(/Static/img/svg/green-2.svg) no-repeat');
                        }
                    });
                </script>


                <div class="b19landingpage row-full" style="padding-bottom:0px;">
                    <div class="container">
                        <h1>Commercial Checking</h1>
                        <div class="xhtml"></div>
                        <div class="b19landingpage_box_main">

                            <div class="col-md-4 col-sm-6 b19landingpage_box">
                                <a href="high-volume-plus-earnings-credit/index.html"><img
                                        src="../../../globalassets/images/primary-icons/bright/business-finance/bright-business-_-finance-primary-icon-31.png"
                                        title="High Volume+ Earnings" alt="money" border="0" /></a>
                                <div class="clearfix"></div>
                                <span><a href="high-volume-plus-earnings-credit/index.html">High Volume+ Earnings</a></span>
                                <div class="xhtml">
                                    <p>Our high volume with earnings credit account is designed for banking customers with
                                        sophisticated banking needs.</p>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 b19landingpage_box">
                                <a href="../treasury-services/index.html"><img
                                        src="../../../globalassets/images/primary-icons/blue/business-finance/blue-business-_-finance-primary-icon-11.png"
                                        title="Treasury Services" alt="growth chart" border="0"></a>
                                <div class="clearfix"></div>
                                <span><a href="../treasury-services/index.html">Treasury Services</a></span>
                                <div class="xhtml">
                                    <p>A full suite of best-of-breed solutions for managing fraud, cash flow, integrated
                                        payables, payroll and accounts receivable.</p>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 b19landingpage_box">
                                <a href="../../small-business/business-services/positive-pay/index.html"><img
                                        src="../../../globalassets/images/primary-icons/gold/business-finance/gold-business-_-finance-primary-icon-12.png"
                                        title="Positive Pay" alt="check" border="0"></a>
                                <div class="clearfix"></div>
                                <span><a href="../../small-business/business-services/positive-pay/index.html">Positive
                                        Pay</a></span>
                                <div class="xhtml">
                                    <p>This powerful solution helps detect fraudulent check and ACH Payments before they
                                        impact business.</p>
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

                            <h2>High Volume + Earnings Credit to Offset Fees</h2>


                            <div class="b20consumer-loans-right"><img id="imgMainRight"
                                    src="../../../contentassets/799d63b282e94c6993c81d0f7e866700/3.1_b-20_team-min.png"
                                    alt="two men looking at laptop" class="img-responsive"></div>
                            <div class="b20consumer-loans-left">
                                <div class="xhtml">
                                    <ul>
                                        <li>Perfect for higher transaction accounts</li>
                                        <li>Earnings credit<sup>1</sup> helps offset/neutralize service fees</li>
                                        <li>$15 monthly maintenance fee ($10 with eStatements)&nbsp;</li>
                                        <li>Fee-free withdrawals<sup>2</sup> for First PREMIER Bank debit card purchases,
                                            online banking transfers and online bill pay</li>
                                        <li>Fee-free deposits<sup>3</sup> via ATM or via online banking funds transfer</li>
                                        <li>Per-item withdrawal<sup>2</sup> and deposit fees for other
                                            transactions<sup>3<br /><br /></sup></li>
                                    </ul>
                                </div>
                                <br />
                                <div class="b20consumer_btn_center">
                                    <a href="high-volume-plus-earnings-credit/index.html" class="b20mainanchor">LEARN
                                        MORE</a>
                                    <span class="b20mainlinkspan">
                                        <a class="b20mainlink"
                                            href="../../pages/about-us/teams/small-business-banking-team/index.html"
                                            title="Contact Us">Contact Us</a> </span>
                                </div>
                            </div>
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
                        <h2> Find the Right Account for You </h2>
                        <div class="b18great_feature_left">
                            <span>Higher Transaction Volume</span>
                            <div class="b18detail xhtml">
                                <p>For businesses with higher balances, larger transaction volume, and more complex banking
                                    needs, we offer two checking options.</p>
                            </div>
                        </div>
                        <div class="b18great_feature_left b18great_feature_right payIcon-space">
                            <span>Lower Transaction Volume</span>
                            <div class="b18detail xhtml">
                                <p>For businesses with a lower amount of banking activity and basic needs, we offer two
                                    value-driven checking options.</p>
                            </div>
                        </div>
                        <div class="clearfix">
                            <center>
                                <a href="../../small-business/business-checking/compare-business-checking/index.html"
                                    class="btnGreen">Compare Checking</a>
                            </center>
                        </div>

                    </div>
                    <div id="a3479885" class="modal fade" role="dialog">
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
                                            <h2>Higher Transaction Volume</h2>
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
                    <div id="b3479885" class="modal fade" role="dialog">
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
                                            <h2>Lower Transaction Volume</h2>
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
                    <div id="c3479885" class="modal fade" role="dialog">
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
                                            <h2>Find the Right Account for You</h2>
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a
                                                                    href="../../small-business/business-checking/compare-business-checking/index.html"
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
            <div class="block b22block  col-md-12">
                <section class="row-full">

                    <div class="b22additional-lending">
                        <div class="container" style="">
                            <h4 class="Blue">Select an Account</h4>
                            <div class="b22additional-lending-left">
                                <h3>High Volume + Earnings Credit</h3>
                                <div class="xhtml">
                                    <p>Designed for businesses with a higher transaction volume and more complex cash
                                        management needs.<br /><br /></p>
                                </div>
                                <a href="high-volume-plus-earnings-credit/index.html">Learn More</a>
                            </div>

                            <div class="b22additional-lending-righ">
                                <h3>Low Volume</h3>
                                <div class="xhtml">
                                    <p>An affordable option for small business checking. No monthly maintenance fee with
                                        eStatement enrollment, plus 150 free total transactions<sup>4</sup> per statement
                                        cycle<sup>5</sup>.</p>
                                </div>
                                <a href="low-volume/index.html">Learn More</a>
                            </div>
                        </div>
                        <div class="b22spacer"></div>
                    </div>
                    <div id="a586977" class="modal fade" role="dialog">
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
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a href="high-volume-plus-earnings-credit/index.html"
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
                    <div id="b586977" class="modal fade" role="dialog">
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
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a href="low-volume/index.html" target="_blank"></a>
                                                            </p>
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
            <div class="block b22block  col-md-12">
                <section class="row-full">

                    <div class="b22additional-lending">
                        <div class="container" style="">
                            <div class="b22additional-lending-left">
                                <h3>High Volume + Interest</h3>
                                <div class="xhtml">
                                    <p>A great option for high volume, high balance businesses with complex banking
                                        needs.<br /><br /></p>
                                </div>
                                <a href="high-volume-plus-interest/index.html">Learn More</a>
                            </div>

                            <div class="b22additional-lending-righ">
                                <h3>Low Volume + Interest</h3>
                                <div class="xhtml">
                                    <p>A great option for businesses with higher balances.&nbsp; Interest<sup>6</sup> on
                                        balances over $500, a low monthly maintenance fee PLUS 150 free total transactions
                                        per statement cycle.<sup>1</sup></p>
                                </div>
                                <a href="low-volume-plus-interest/index.html">Learn More</a>
                            </div>
                        </div>
                        <div class="b22spacer"></div>
                    </div>
                    <div id="a56416837" class="modal fade" role="dialog">
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
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a href="high-volume-plus-interest/index.html"
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
                    <div id="b56416837" class="modal fade" role="dialog">
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
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a href="low-volume-plus-interest/index.html"
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
                            <h2>First PREMIER Bank Treasury Services</h2>

                            <div class="b17free_mobile_banking_right">
                                <h3>Think Globally, Bank Locally</h3>
                                <div class="xhtml">
                                    <p>As the nation&rsquo;s 14th largest originator of ACH Payments, First PREMIER knows
                                        how to support the cash management, integrated receivables, payroll and accounts
                                        payable needs of enterprise business. We specialize in offering a customized account
                                        and services framework to support big business &ndash; providing the local, personal
                                        support you deserve.&nbsp; Find out how we can help you today.&nbsp;</p>
                                </div>
                                <div class="b17PayLinks payIcon-space">
                                </div>

                                <!-- Button and Footer Links go here ... -->
                                <a href="../treasury-services/index.html" class="b17readmore">Learn More</a>
                            </div>

                            <div class="b17free_mobile_banking_left right">
                                <img class="img-responsive" id="imgMainImage" style="border-radius:50%"
                                    src="../../../contentassets/619ca946cc8c49428dc7279381fcda9f/3.1_b-17_woman-min.png"
                                    alt="First PREMIER Bank">
                            </div>
                        </div>
                    </div>

                    <div class="b15benfits_main_box b17cards">
                        <div class="container">
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar">
                                    <img src="../../../globalassets/images/secondary-icons/blue/business-finance/blue-business-_-finance-secondary-icon-12.png"
                                        title="Positive Pay" alt="woman smiling" width="116px" height="116px">
                                </div>
                                <div class="b15avtar_content">
                                    <h3>Positive Pay</h3>
                                    <p><span
                                            style="color: #516e83; font-family: Prompt-Medium; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Protect
                                            your business from fraudulent checks and ACH transactions with this powerful
                                            fraud management tool.</span></p>
                                    <div class="clearfix"></div><br />
                                    <a href="../../small-business/business-services/positive-pay/index.html">Learn More</a>
                                </div>
                            </div>
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar">
                                    <img src="../../../globalassets/images/secondary-icons/bright/edition/bright-edition-secondary-icon-15.png"
                                        title="Security &amp; Fraud Protection" alt="woman smiling" width="116px"
                                        height="116px">
                                </div>
                                <div class="b15avtar_content">
                                    <h3>Security &amp; Fraud Protection</h3>
                                    <p><span
                                            style="color: #516e83; font-family: Prompt-Medium; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Find
                                            out how First PREMIER Bank helps protect you against fraud and how to protect
                                            your small business.</span></p>
                                    <div class="clearfix"></div><br />
                                    <a
                                        href="../../small-business/business-checking/security-and-fraud-protection/index.html">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="a23734735" class="modal fade" role="dialog">
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
                                            <h2>First PREMIER Bank Treasury Services</h2>
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a href="../treasury-services/index.html"
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
            <div class="block b10block  col-md-12">

                <section class="row-full">

                    <!--First Premier work start-->
                    <div class="b10first_premier_main">
                        <div class="container">
                            <div class="b10first_premier">
                                <h2>Why Bank with First PREMIER?</h2>
                            </div>
                            <div class="b10panel-group" id="accordion">
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_0"><span> One of the Strongest Banks in the Nation
                                                </span></a></h3>
                                    </div>
                                    <div id="collapse_0" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>As a debt-free, privately owned $2 billion bank, First PREMIER is one of
                                                    the strongest capitalized banks in the country. We ranked 17th in the
                                                    nation for banks with more than $1 billion in assets by American Banker
                                                    Magazine. We are consistently ranked as a top-performing banks for asset
                                                    size by the American Banking Association's Banking Journal.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_1"><span> Serving Businesses of Every Size </span></a></h3>
                                    </div>
                                    <div id="collapse_1" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>Our integrated business model bridges business banking with our treasury
                                                    and asset management teams. We work together to provide market-leading
                                                    banking, lending and treasury services solutions that are "right-sized"
                                                    for business needs and flexible to scale for future growth.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_2"><span> Personal Service & Local Decision Making
                                                </span></a></h3>
                                    </div>
                                    <div id="collapse_2" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>Our bankers take the time to learn about you. Once they understand your
                                                    business goals, they will help you find the banking products and
                                                    financial solutions that fit your needs today, and support you as your
                                                    business grows.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_3"><span> FREE Leading Edge Online & Mobile Tools
                                                </span></a></h3>
                                    </div>
                                    <div id="collapse_3" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>Our secure Online and Mobile Banking gives you 24/7 access over your
                                                    accounts with multi-tiered security and administrative control. Enjoy
                                                    great features including eStatements, Bill Pay, account alerts &amp;
                                                    notifications, debit card lock and unlock, administrative controls and
                                                    more! Our Debit Mastercard&reg; and Business Rewards Mastercard&reg;
                                                    credit cards also work with mobile wallet technology. Best of all, First
                                                    PREMIER Business Online and Mobile Banking are FREE of charge to First
                                                    PREMIER Banking customers.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_4"><span> Locally Grown, Nationally Known </span></a></h3>
                                    </div>
                                    <div id="collapse_4" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>We serve local, regional and national clients with pride. First PREMIER
                                                    is the 14th largest ACH Originating Bank in the USA and the 12th largest
                                                    issuer of Mastercard&reg; in the country. We are also honored to have
                                                    served as the bank for the State of South Dakota for 20+ years (1999),
                                                    as well as the bank for the City of Sioux Falls for 15+ years (2004).
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_5"><span> A Champion for Customers & Community </span></a>
                                        </h3>
                                    </div>
                                    <div id="collapse_5" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>We serve our local, regional and national clients with pride and personal
                                                    customer care. We are active supporters of more than 600 charities and
                                                    non-profits. Last year alone, our associates contributed over 32,000
                                                    hours of community service. We also take care of our employees. From
                                                    2015-2020, we were ranked as one of the Best Banks to Work For by
                                                    American Banker and Best Companies Group.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <!--First Premier work end-->
                </section>
            </div>
            <div class="block b25block  col-md-12">
                <script>
                    $(document).ready(function() {

                        if ('/globalassets/images/backgrounds/blue-1.jpg' != 'null' &&
                            '/globalassets/images/backgrounds/blue-1.jpg' != '') {
                            $(".b25disclosure").css("background",
                                "#245251 url(/globalassets/images/backgrounds/blue-1.jpg) no-repeat");
                            if (screen.width > 1000) {
                                $(".b25need_help_main").css("background",
                                    "#245251 url(/globalassets/images/backgrounds/blue-1.jpg) no-repeat");
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
                            <h2 class="White">Talk to a Business Banker Today</h2>
                            <div class="xhtml">
                                <p>We can help with account selection, business services, financing and more, bringing you
                                    best-of-breed banking with the personal support you deserve.</p>
                            </div>
                            <div class="b25bottom" style="">
                                <center>
                                    <a href="../../pages/about-us/teams/small-business-banking-team/index.html"
                                        class="b25mainanchor">Contact Us</a><br clear="all" />
                                </center>
                            </div>
                        </div>
                    </div>

                </section>
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

                            <h4> Disclosures </h4>
                            <div class="b13points">
                                <p>{1} Earning Credit: credit will be earned based on the previous montly average of the
                                    91-day T-Bill&nbsp;</p>
                                <p>{2} First PREMIER Bank will assess a withdrawal charge $0.15 per item. "Withdrawal"
                                    refers to any transaction whether initiated in person, by check, draft or similar paper
                                    instrument, or any transaction initiated electronically through electronic funds
                                    transfer. Withdrawal fees to not apply to transactions made by using a First PREMIER
                                    Bank Debit Card, transaction initiated through wire transfer, initiated through Online
                                    Bill Pay, or transfers initiated through Business Online Banking.</p>
                                <p>{3} First PREMEIR Bank will assess a deposit charge of $0.10 per item. "Deposit" referes
                                    to all deposit transactions. Deposits do not include transactions made at an ATM,
                                    through Remote Deposit or Mobile Deposit, or transfers made through Business Online
                                    Banking.</p>
                                <p>{4} "Transaction" refers to any combination of items, paid or unpaid, including paper and
                                    electronic.</p>
                                <p>{5} 150 free total transactions represent a combination of withdrawals and deposits
                                    before withdrawal and deposit fees apply. First PREMIER Bank will assess a
                                    cost-per-excess transaction fee over transacton allowed per statement cycle.</p>
                                <p>{6} At our discretion we may change the interest rate daily. Interest is calculated using
                                    the daily blance method. Interest is compounded monthly and credited monthly.</p>
                            </div>
                        </div>
                    </div>
                </section>
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
                        <p>Member FDIC | <img src="../../../Static/img/equalhousinglender.png" alt="Equal Housing Lender"
                                title="Equal Housing Lender" />Equal Housing Lender</p>
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
