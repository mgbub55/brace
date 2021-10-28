@extends('frontend.layouts.app')

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
            <div class="block b46block  col-md-12">

                <style>
                    .b46mainlinkspan {
                        height: 50px;
                        margin-top: 24px;
                        text-align: center;
                        width: 100%;
                    }

                    .b46mainlink {
                        color: #268d6e;
                        background: url("{{ asset('assets/frontend/Static/img/CustomBlocks/B20/arrow_green.png') }}") no-repeat right 3px;
                        padding: 0px 15px 0px 25px;
                        vertical-align: text-bottom;
                        margin-right: 20px;
                        letter-spacing: 1px;
                    }

                    .b46mainanchor {
                        color: #268d6e;
                        background: url("{{ asset('assets/frontend/Static/img/CustomBlocks/B20/arrow_green.png') }}") no-repeat right 3px;
                        float: left;
                        padding: 0px 15px 0px 25px;
                        vertical-align: text-bottom;
                        letter-spacing: 1px;
                    }

                    .b46multianchor {
                        text-align: center;
                    }

                    .b46multianchor ul {
                        display: inline-block;
                        margin: 0;
                        padding: 0;
                        /* For IE, the outcast */
                        zoom: 1;
                        *display: inline;
                    }

                    .b46multianchor li {
                        float: left;
                        padding: 2px 5px;
                    }

                    .b46productpage h5>p {}

                </style>
                <style>
                    .pop_main_container_board .pop_main_container ol li ol li {}

                    .b46productpage {
                        float: left;
                        width: 100%;
                        padding: 80px 0px 50px 0px;
                        text-align: center;
                        background: #fff url("{{ asset('assets/frontend/globalassets/images/backgrounds/grey-2.svg') }}") no-repeat;
                    }

                </style>
                <section class="row-full">
                    <div class="b46productpage">
                        <div class="container">
                            <h1>Financial Planning</h1>
                            <img src="{{ asset('assets/frontend/contentassets/f4c889b2b57449c4a3c2d361e766f775/1.7.2_b-46-hero_lady-min.png') }}"
                                alt="First PREMIER Bank">
                            <h2>Develop a Blueprint for Financial Success</h2>
                            <p>Whether you are single or married, younger or older, it&rsquo;s important to consider your
                                financial goals and how to accomplish them with the right plan &ndash; and the right
                                partner.</p>



                        </div>
                    </div>
                </section>
            </div>
            <div class="block b16block  col-md-12">

                <!-- VIEW RATE / SPEED BUMP [2] -->
                <style>
                    /* Changes to Functionality -> Adding the ability to add one or more links after the main button */
                    .b16basic_box_left a.b16readmore {
                        display: inline-block;
                        letter-spacing: 1px;
                        background: #42967d;
                        color: #fff;
                        font-size: 13px;
                        font-family: 'Prompt-Bold';
                        text-transform: uppercase;
                        padding: 12px 60px;
                        border-radius: 50px;
                        margin-top: 25px;
                        margin-bottom: 0px;
                        margin-right: 30px;
                        text-align: center;
                        margin-left: 20px !important;
                    }

                    .b16basic_box_left a.b16readmore:hover {
                        text-decoration: none;
                    }

                    .b16confidence_links a {
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        font-family: 'Prompt-SemiBold';
                        font-size: 13px;
                        margin-top: 10px;
                        color: #42967d;
                        padding-right: 12px;
                        background: url("{{ asset('assets/frontend/Static/img/CustomBlocks/B14/arrow_small.png') }}") no-repeat right center;
                    }

                    .b16confidence_links_multiple {
                        float: left;
                        padding-left: 30px;
                    }

                    .b16confidence_links_multiple ul {
                        display: inline-block;
                        margin: 0;
                        padding-top: 10px;
                        /* For IE, the outcast */
                        zoom: 1;
                        *display: inline;
                    }

                    .b16confidence_links_multiple li {
                        float: left;
                        padding: 2px 5px;
                        margin-right: 20px;
                    }

                    .b16confidence_links_multiple li>a {
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        font-family: 'Prompt-SemiBold';
                        font-size: 13px;
                        margin-top: 10px;
                        color: #42967d;
                        padding-right: 12px;
                        background: url("{{ asset('assets/frontend/Static/img/CustomBlocks/B14/arrow_small.png') }}") no-repeat right center;
                    }

                    /* CHANGING SHADING FUNCTIONALITY */
                    /*.b16wrapper{ min-height:455px;}*/
                    .b16wrapper {
                        min-height: 400px;
                    }

                    .b16wrapper .FirstBlock {
                        width: 100%;
                        background-color: #f9f9f9;
                        height: 70px;
                        position: absolute;
                        bottom: -24px;
                        z-index: 1;
                        overflow: hidden;
                    }

                    .ThirdBlock {
                        width: 100%;
                        background-color: #f9f9f9;
                        height: 70px;
                        position: relative;
                        z-index: 2;
                    }

                    .b16basic_box_right {
                        position: relative;
                        z-index: 99;
                    }

                    .b16basic_box_background {
                        margin-bottom: 14px;
                    }

                    .b16basic_box_left {
                        padding-left: 100px;
                    }

                    .b16basic_box_left h2 {
                        padding-top: 35px;
                    }

                    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml {
                        padding-top: 10px;
                    }

                    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml>p {
                        margin-left: 0px !important;
                    }

                    .card_icon_bottom_right {
                        right: 15px !important;
                    }

                    .Overdraft.Protection {
                        width: 50%;
                    }

                    @media only screen and (max-width:767px) {
                        .b16confidence_links {
                            align-items: center;
                            display: flex;
                            flex-direction: column;
                        }

                        .b16confidence_links a {
                            margin-top: 20px;
                        }
                    }

                    @media only screen and (max-width:375px) {
                        div.b16basic_box_grey {
                            background-color: #fff !important;
                        }
                    }

                </style>
                <style>
                    .b16basic_box_right .b16imgcrop {}

                </style>
                <!-- VIEW RATE / SPEED BUMP [2] -->

                <section class="row-full b16wrapper">

                    <div class="b16basic_box_left_content b16basic_box_background">
                        <div class="b16basic_box_main">
                            <div class="container">
                                <div class="b16basic_box b16basic_box_position">
                                    <div class="b16basic_box_right" style="padding-right:50px;">
                                        <div class="b16imgcrop"><img
                                                src="{{ asset('assets/frontend/contentassets/f2a5f22652a4491f8804358792db457f/1.7.2_b-16-list01_alternating-1_shake-min.png') }}"
                                                title="Keeping Your Interests at Heart" alt="man shaking hands with banker">
                                        </div>
                                    </div>
                                    <div class="b16basic_box_left">
                                        <h2>Keeping Your Interests at Heart</h2>

                                        <div class="xhtml">
                                            <p>First PREMIER Bank leverages decades of expertise to support comprehensive
                                                financial planning, investment strategy, investment management, and
                                                succession planning in the best interest of our clients and their families.
                                                We also support businesses, endowments, non-profits and more.</p>
                                        </div>
                                        <!-- Button and Footer Links go here ... -->
                                        <a href="../../../pages/about-us/teams/wealth-management-team/index.html"
                                            class="b16readmore">Contact Us</a>
                                        <!-- Button and Footer Links go here ... -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- View Rate [3] (within container)-->
                <!-- View Rate [3] (within container)-->
            </div>
            <div class="block b16block  col-md-12">

                <!-- VIEW RATE / SPEED BUMP [2] -->
                <style>
                    /* Changes to Functionality -> Adding the ability to add one or more links after the main button */
                    .b16basic_box_left a.b16readmore {
                        display: inline-block;
                        letter-spacing: 1px;
                        background: #42967d;
                        color: #fff;
                        font-size: 13px;
                        font-family: 'Prompt-Bold';
                        text-transform: uppercase;
                        padding: 12px 60px;
                        border-radius: 50px;
                        margin-top: 25px;
                        margin-bottom: 0px;
                        margin-right: 30px;
                        text-align: center;
                        margin-left: 20px !important;
                    }

                    .b16basic_box_left a.b16readmore:hover {
                        text-decoration: none;
                    }

                    .b16confidence_links a {
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        font-family: 'Prompt-SemiBold';
                        font-size: 13px;
                        margin-top: 10px;
                        color: #42967d;
                        padding-right: 12px;
                        background: url("{{ asset('assets/frontend/Static/img/CustomBlocks/B14/arrow_small.png') }}") no-repeat right center;
                    }

                    .b16confidence_links_multiple {
                        float: left;
                        padding-left: 30px;
                    }

                    .b16confidence_links_multiple ul {
                        display: inline-block;
                        margin: 0;
                        padding-top: 10px;
                        /* For IE, the outcast */
                        zoom: 1;
                        *display: inline;
                    }

                    .b16confidence_links_multiple li {
                        float: left;
                        padding: 2px 5px;
                        margin-right: 20px;
                    }

                    .b16confidence_links_multiple li>a {
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        font-family: 'Prompt-SemiBold';
                        font-size: 13px;
                        margin-top: 10px;
                        color: #42967d;
                        padding-right: 12px;
                        background: url("{{ asset('assets/frontend/Static/img/CustomBlocks/B14/arrow_small.png') }}") no-repeat right center;
                    }

                    /* CHANGING SHADING FUNCTIONALITY */
                    /*.b16wrapper{ min-height:455px;}*/
                    .b16wrapper {
                        min-height: 400px;
                    }

                    .b16wrapper .FirstBlock {
                        width: 100%;
                        background-color: #f9f9f9;
                        height: 70px;
                        position: absolute;
                        bottom: -24px;
                        z-index: 1;
                        overflow: hidden;
                    }

                    .ThirdBlock {
                        width: 100%;
                        background-color: #f9f9f9;
                        height: 70px;
                        position: relative;
                        z-index: 2;
                    }

                    .b16basic_box_right {
                        position: relative;
                        z-index: 99;
                    }

                    .b16basic_box_background {
                        margin-bottom: 14px;
                    }

                    .b16basic_box_left {
                        padding-left: 100px;
                    }

                    .b16basic_box_left h2 {
                        padding-top: 35px;
                    }

                    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml {
                        padding-top: 10px;
                    }

                    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml>p {
                        margin-left: 0px !important;
                    }

                    .card_icon_bottom_right {
                        right: 15px !important;
                    }

                    .Overdraft.Protection {
                        width: 50%;
                    }

                    @media only screen and (max-width:767px) {
                        .b16confidence_links {
                            align-items: center;
                            display: flex;
                            flex-direction: column;
                        }

                        .b16confidence_links a {
                            margin-top: 20px;
                        }
                    }

                    @media only screen and (max-width:375px) {
                        div.b16basic_box_grey {
                            background-color: #fff !important;
                        }
                    }

                </style>
                <style>
                    .b16basic_box_right .b16imgcrop {}

                </style>
                <!-- VIEW RATE / SPEED BUMP [2] -->

                <section class="row-full b16wrapper">

                    <div class="b16basic_box_right_content b16basic_box_background">
                        <div class="b16basic_box_main b16basic_box_grey">
                            <div class="container">
                                <div class="b16basic_box">
                                    <div class="b16basic_box_right">
                                        <div class="b16imgcrop" style="margin-left:90px;"><img
                                                src="{{ asset('assets/frontend/contentassets/b4832d63abf848189b9cb1a8c49055da/1.7.2_b-16-list01_alternating-2_decide-min.png') }}"
                                                title="Financial Planning" alt="couple reviewing financial plans on laptop">
                                        </div>

                                    </div>
                                    <div class="b16basic_box_left payIcon-space">
                                        <h2 style="padding-top:0px !important;">Financial Planning</h2>
                                        <div class="xhtml">
                                            <p>Our wealth professionals will work with you to:</p>
                                            <ul>
                                                <li>Assess your financial situation, vision and goals</li>
                                                <li>Identify needs, risk-return threshold and opportunities</li>
                                                <li>Provide ongoing support to track and measure progress</li>
                                                <li>Construct a plan that helps you:
                                                    <ul>
                                                        <li>Bank, borrow and invest wisely</li>
                                                        <li>Maximize capital and grow wealth&nbsp;</li>
                                                        <li>Reduce debt and manage risk</li>
                                                        <li>Save for college, retirement, life events and transitions</li>
                                                        <li>Plan estate succession, according to your wishes</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Button and Footer Links go here ... -->
                                        <!-- Button and Footer Links go here ... -->
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
                            <h2>Putting Your Money to Work for You</h2>

                            <div class="b17free_mobile_banking_right">
                                <div class="xhtml">
                                    <p>Whether you desire simple investing or comprehensive financial planning and
                                        investment support, First PREMIER has access to a broad range of banking products
                                        and diversified investments and can support you with:</p>
                                    <ul>
                                        <li>Stocks and Bonds</li>
                                        <li>Mutual and Money Market Funds</li>
                                        <li>Annuities and Securities</li>
                                        <li>Savings and CDs</li>
                                        <li>Tailored Lending and Credit Lines</li>
                                        <li>Insurance</li>
                                        <li>Estate Planning</li>
                                        <li>And More</li>
                                    </ul>
                                </div>
                                <div class="b17PayLinks payIcon-space">
                                </div>

                                <!-- Button and Footer Links go here ... -->
                                <a href="../../../pages/about-us/teams/wealth-management-team/index.html"
                                    class="b17readmore">Contact Us</a>
                            </div>

                            <div class="b17free_mobile_banking_left right">
                                <img class="img-responsive" id="imgMainImage" style="border-radius:50%"
                                    src="{{ asset('assets/frontend/contentassets/5a16490d34e7488c932d8444f3527e7b/1.7.2_b-17-promo_couple-min.png') }}"
                                    alt="First PREMIER Bank">
                            </div>
                        </div>
                    </div>


                    <div id="a19634249" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon"
                                                    src="{{ asset('assets/frontend/static/img/closebutton.png') }}"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <h2>Putting Your Money to Work for You</h2>
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a
                                                                    href="../../../pages/about-us/teams/wealth-management-team/index.html"
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
                        <h2> Growing &amp; Building Wealth </h2>
                        <div class="b18great_feature_left">
                            <span>We Put Your Interests First</span>
                            <div class="b18detail xhtml">
                                <p>Our investment professionals work one-on-one with you, becoming vested stewards of your
                                    success.&nbsp; We provide the personal service and expertise you can count on, with
                                    customized banking, credit and investment services to meet your needs.</p>
                            </div>
                        </div>
                        <div class="b18great_feature_left b18great_feature_right payIcon-space">
                            <span>Additional Wealth Services</span>
                            <div class="b18detail xhtml">
                                <ul>
                                    <li><a href="../private-banking/index.html">Private Banking</a></li>
                                    <li><a href="../managed-investing/index.html">Managed Investing</a></li>
                                    <li><a href="../personal-trust-services/index.html">Trust and Conservatorships</a></li>
                                    <li><a href="../../investing/retirement-planning/index.html">Retirement Planning</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix">
                            <center>
                                <a href="../../../pages/about-us/teams/wealth-management-team/index.html"
                                    class="btnGreen">Contact Us</a>
                            </center>
                        </div>

                    </div>
                    <div id="a55797468" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon"
                                                    src="{{ asset('assets/frontend/static/img/closebutton.png') }}"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <h2>We Put Your Interests First</h2>
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
                    <div id="b55797468" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon"
                                                    src="{{ asset('assets/frontend/static/img/closebutton.png') }}"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <h2>Additional Wealth Services</h2>
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
                    <div id="c55797468" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon"
                                                    src="{{ asset('assets/frontend/static/img/closebutton.png') }}"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <h2>Growing &amp; Building Wealth</h2>
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a
                                                                    href="../../../pages/about-us/teams/wealth-management-team/index.html"
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
                        <img src="{{ asset('assets/frontend/Static/img/CustomBlocks/B6/featured_bg.png') }}"
                            class="b6featured_bg" alt="First PREMIER Bank">
                        <img src="{{ asset('assets/frontend/Static/img/CustomBlocks/B6/featured_bg_small.png') }}"
                            class="b6featured_bg_small_bg" alt="First PREMIER Bank">
                        <div class="b6featured_bg_small carousel" id="b06Carousel" data-ride="carousel">
                            <div class="">
                                <div class="carousel-inner b06carousel-inner">
                                    <div class="item active">
                                        <div class="row b6mypadding">
                                            <div class="b6featured_quote_img col-lg-5 col-md-5"><img
                                                    src="{{ asset('assets/frontend/contentassets/9604f9ff135b439fa127e092d47b7b81/quotes-andyfliss.png') }}"
                                                    class="b6featured_img" alt="Andy Fliss Investment Advisor Associate">
                                            </div>
                                            <div class="b6featured_quote col-lg-7 col-md-7">
                                                <p>Strategic investing requires a goal and a plan. Our experienced team will
                                                    take the time to know your goals and create a custom plan for meeting
                                                    those goals. We’ll also revisit the plan often to ensure we’re still on
                                                    track. That’s the PREMIER difference.</p>
                                                <div class="clearfix"></div><span> - Andy Fliss, Retirement Plan
                                                    Associate</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row b6mypadding">
                                            <div class="b6featured_quote_img col-lg-5 col-md-5"><img
                                                    src="{{ asset('assets/frontend/contentassets/90d0ec811b864cecbfec49191e805d56/quotes-sandyschoenbeck.png') }}"
                                                    class="b6featured_img" alt="Sandy Schoenbeck VP Trust and Estates">
                                            </div>
                                            <div class="b6featured_quote col-lg-7 col-md-7">
                                                <p>South Dakota is a wealth-friendly state. Our tax structure and our
                                                    regulations make it an ideal place to establish trusts and we work hard
                                                    to leverage these benefits for our clients.</p>
                                                <div class="clearfix"></div><span> - Sandy Schoenbeck, VP, Trust and
                                                    Estates</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <a class="left carousel-control b06carousel-control" href="#b06Carousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"><img
                                        src="{{ asset('assets/frontend/Static/img/CustomBlocks/B6/left_arrow.png') }}"
                                        alt="First PREMIER Bank"></span>
                                <span class="sr-only"></span>
                            </a>
                            <a class="right carousel-control b06carousel-control" href="#b06Carousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"><img
                                        src="{{ asset('assets/frontend/Static/img/CustomBlocks/B6/right_arrow.png') }}"
                                        alt="First PREMIER Bank"></span>
                                <span class="sr-only"></span>
                            </a>
                        </div>
                    </div>
                </section>

            </div>
            <div class="block b10block  col-md-12">

                <section class="row-full">

                    <!--First Premier work start-->
                    <div class="b10first_premier_main">
                        <div class="container">
                            <div class="b10first_premier">
                                <h2>Unique Benefits of a South Dakota Trust</h2>
                            </div>
                            <div class="b10panel-group" id="accordion">
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_0"><span> South Dakota is known as a “wealth-friendly” state
                                                </span></a></h3>
                                    </div>
                                    <div id="collapse_0" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>As such, First PREMIER bank can help you or your client access our
                                                    favorable tax and trust laws! First PREMIER Bank can help our clients
                                                    leverage favorable South Dakota tax and trust laws.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_1"><span> South Dakota has no state income tax </span></a>
                                        </h3>
                                    </div>
                                    <div id="collapse_1" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>The impact is increased revenue for distribution to beneficiaries of
                                                    irrevocable trusts with a South Dakota situs.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_2"><span> South Dakota has no rule against perpetuities
                                                </span></a></h3>
                                    </div>
                                    <div id="collapse_2" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>Most states require a trust to &ldquo;terminate&rdquo; at the end of a
                                                    set period of time (effectively 80 to 100 years). This opens the trust
                                                    to taxation, potential litigation and disagreements among beneficiaries,
                                                    etc. Families with substantial wealth may want to see the trust
                                                    &ldquo;go on forever.&rdquo; That can only happen in a state that has no
                                                    rule against perpetuities - like South Dakota. Trust administration can
                                                    be delegated to co-trustees and/or agents of the trustee.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_3"><span> Trust administration can be delegated </span></a>
                                        </h3>
                                    </div>
                                    <div id="collapse_3" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>Trustees may disclaim powers granted to a trustee under a trust
                                                    instrument. A South Dakota trustee can &ldquo;unbundle&rdquo; services
                                                    that the family would prefer to see performed by others, allowing tasks
                                                    or services to be managed by co-trustees. Services could include
                                                    investment management, custody of assets, record keeping, etc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_4"><span> Trust protectors and trust advisors are permitted
                                                </span></a></h3>
                                    </div>
                                    <div id="collapse_4" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>South Datota Directed Trust Law permits protectors and trust advisors,
                                                    and fiduciaries can be prevented from exercising certain powers that can
                                                    be reserved to the grantor, a trust protector or a trust advisor.</p>
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
                                <p>Investments are | Not FDIC insured | May lose value | Not financial institution
                                    guaranteed | Not a deposit | Not insured by any federal government agency. Advisory
                                    services may only be offered by investment adviser representatives.</p>
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
                        <a href="{{ route('frontend.en.pages.about-us')}}">About Us</a>
                    </li>

                    <li>
                        <a href="{{ route('frontend') }}">First PREMIER Bank</a>
                    </li>

                    <li>
                        <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a>
                    </li>

                    <li>
                        <a href="{{ route('frontend.en.pages.about-us.leadership-team') }}">Leadership</a>
                    </li>

                    <li>
                        <a href="{{ route('frontend.en.pages.about-us.community') }}">Community</a>
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
                        <a href="{{ route('frontend') }}">Personal Banking</a>
                    </li>

                    <li>
                        <a href="{{ route('frontend.en.small-business') }}">Small Business</a>
                    </li>

                    <li>
                        <a href="{{ route('frontend.en.commercial') }}">Commercial</a>
                    </li>

                </ul>
                <br />
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 footerCol3">
                <div class="footerHeader">Help &amp; Contact</div>

                <ul>

                    <li>
                        <a href="{{ route('frontend.en.pages.quick-links.customer-care') }}">Customer Care</a>
                    </li>

                    <li>
                        <a href="{{ route('frontend.en.pages.quick-links.locations') }}">Locations</a>
                    </li>

                    <li>
                        <a href="{{ route('frontend.en.pages.quick-links.customer-care') }}">BANK: 800-501-6535</a>
                    </li>

                    <li>
                        <a href="https://www.mypremiercreditcard.com/">CREDIT CARD: 800-987-5521</a>
                    </li>

                    <li>
                        <a href="{{ route('frontend') }}">Routing Number: 091408598</a>
                    </li>

                </ul>
                <br />
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 footerCol4">
                <div class="footerHeader">Legal Notices</div>

                <ul>

                    <li>
                        <a href="{{ route('frontend.en.pages.resources.first-premier-privacy-statement-2020') }}">Privacy
                            Notice &amp; Statement</a>
                    </li>

                    <li>
                        <a href="{{ route('frontend.en.pages.resources.legal-disclosures') }}">Legal Disclosures</a>
                    </li>

                    <li>
                        <a href="{{ route('frontend.en.pages.resources.cookie-policy') }}">Cookie Policy</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-top:50px;">
                <p>Member FDIC | <img src="{{asset('assets/frontend/Static/img/equalhousinglender.png')}}" alt="Equal Housing Lender"
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
                background: url('{{ asset("assets/frontend/Static/img/EHLlogo%20white.png") }}') 230px 0px no-repeat;
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
    <div class="smallLogo"><a href="../../../index.html" title="First PREMIER Bank - Home"><img
                src="{{ asset('assets/frontend/Static/gfx/Logo.png') }}" style="max-width:100%;" /></a></div>
    <script type="text/javascript" src="../../../../../dl.episerver.net/13.4.4.1/epi-util/find.js"></script>
    <script type="text/javascript">
        if (FindApi) {
            var api = new FindApi();
            api.setApplicationUrl('../../../../index.html');
            api.setServiceApiBaseUrl('../../../../find_v2/index.html');
            api.processEventFromCurrentUri();
            api.bindWindowEvents();
            api.bindAClickEvent();
            api.sendBufferedEvents();
        }
    </script>

    <script type="text/javascript" src="../../../../Static/js/pushy.js"></script>
    <script type="text/javascript" src="../../../../Static/js/Blocks_2019062002.js"></script>
@endsection
