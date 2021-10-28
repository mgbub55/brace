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
                            <h1>Easy Access Line of Credit</h1>
                            <img src="{{ asset('assets/frontend/contentassets/96b636babfb44051b73af498896f45d7/1.4.2_b-46-hero_couple-min.png') }}"
                                alt="First PREMIER Bank">
                            <h2>A flexible credit line of up to $5,000</h2>
                            <p style="text-align: center;">This basic, revolving line of credit gives you extra purchasing
                                power and cash when you need it.&nbsp; <br />It&rsquo;s perfect for overdraft
                                protection<sup>1</sup> and comes with flexible payment options.</p>

                            <a href="https://umnasg7.umonitor.com/consumerloan/uLoan/welcome.do?auth=aa902f55464cde74"
                                class="b46button">APPLY NOW</a>


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
                                                src="{{ asset('assets/frontend/contentassets/4446fd986f8d4ece9ae55db9a0ca0b59/1.1.3_b-16-list-01-alternating-1_ladykeeper-min-right.png') }}"
                                                title="Everyday Cash Access"
                                                alt="woman cashier accepting credit card for payment"></div>
                                    </div>
                                    <div class="b16basic_box_left">
                                        <h2>Everyday Cash Access</h2>

                                        <div class="xhtml">
                                            <ul>
                                                <li>Get quick access to the money you need</li>
                                                <li>Payment of principal and interest</li>
                                                <li>FREE&nbsp;<a href="../../online-and-mobile/index.html">Online and Mobile
                                                        Banking</a></li>
                                                <li>FREE&nbsp;<a href="../../online-and-mobile/bill-pay/index.html">Bill
                                                        Pay</a>, <a title="eStatement"
                                                        href="../../online-and-mobile/estatements/index.html"
                                                        target="_top">eStatements</a>&nbsp;<a
                                                        href="../../online-and-mobile/mobile-deposit/index.html">Mobile
                                                        Deposit</a> and more!&nbsp;</li>
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
                                                src="{{ asset('assets/frontend/contentassets/3d33eb219c054d488689c323946d8e0e/1.4.2_b-16-list01_alternating-2_handmachine-min.png') }}"
                                                title="Account Features" alt="man paying at register with mobile phone">
                                        </div>

                                    </div>
                                    <div class="b16basic_box_left payIcon-space">
                                        <h2 style="padding-top:0px !important;">Account Features</h2>
                                        <div class="xhtml">
                                            <ul>
                                                <li>Revolving line of credit of $300 to $5,000</li>
                                                <li>Use as <a
                                                        href="../../personal-checking/overdraft-protection/index.html">overdraft
                                                        protection</a><sup>1</sup> for your First PREMIER Checking</li>
                                                <li>Fixed interest rate<sup>2</sup></li>
                                                <li>Unsecured credit line</li>
                                                <li>Tied to your First PREMIER Bank Checking account<sup>3</sup></li>
                                            </ul>
                                        </div>

                                        <!-- Button and Footer Links go here ... -->
                                        <a href="https://umnasg7.umonitor.com/consumerloan/uLoan/welcome.do?auth=aa902f55464cde74"
                                            class="b16readmore">Apply Now</a>
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
            <div class="block b25block  col-md-12">
                <script>
                    $(document).ready(function() {

                        if ('{{asset("asset/frontend/Static/img/CustomBlocks/B25/Background.png")}}' != 'null' &&
                            '{{asset("asset/frontend/Static/img/CustomBlocks/B25/Background.png")}}' != '') {
                            $(".b25disclosure").css("background",
                                "#245251 url({{asset('assets/frontend/Static/img/CustomBlocks/B25/Background.png')}}) no-repeat");
                            if (screen.width > 1000) {
                                $(".b25need_help_main").css("background",
                                    "#245251 url({{asset('assets/frontend/Static/img/CustomBlocks/B25/Background.png')}}) no-repeat");
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
                            <h2 class="White">Get Started!</h2>
                            <div class="xhtml">
                                <p>Speak to a First PREMIER Personal Banker to discuss your needs.</p>
                            </div>
                            <div class="b25bottom" style="">
                                <center>
                                    <a href="../../../pages/about-us/teams/personal-banking-sioux-falls-team/index.html"
                                        class="b25mainanchor">Contact Us</a><br clear="all" />
                                </center>
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
                            <h2>More Loans & Credit Lines</h2>

                            <div class="b17free_mobile_banking_right">
                                <h3>Personal Loans</h3>
                                <div class="xhtml">
                                    <p>First PREMIER Bank makes all its lending decisions locally based on your personal
                                        needs, situation and credit score. Let our seasoned pros help you find the right
                                        loan to consolidate debt, buy a new or used car, remodel your home or pay for a
                                        large purchase or vacation.</p>
                                </div>
                                <div class="b17PayLinks payIcon-space">
                                </div>

                                <!-- Button and Footer Links go here ... -->
                                <a href="../personal-loans/index.html" class="b17readmore">Learn More</a>
                            </div>

                            <div class="b17free_mobile_banking_left right">
                                <img class="img-responsive" id="imgMainImage" style="border-radius:50%"
                                    src="{{ asset('assets/frontend/contentassets/2a50a3d4c1da41d68c93d53a6f3db05d/1.4.2_b-17-promo_womancar-min.png') }}"
                                    alt="First PREMIER Bank">
                            </div>
                        </div>
                    </div>

                    <div class="b15benfits_main_box b17cards">
                        <div class="container">
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar">
                                    <img src="{{ asset('assets/frontend/globalassets/images/secondary-icons/blue/business-finance/blue-business-_-finance-secondary-icon-21.png') }}"
                                        title="Advance Access Credit Line" alt="woman driving in car with window down"
                                        width="116px" height="116px">
                                </div>
                                <div class="b15avtar_content">
                                    <h3>Advance Access Credit Line</h3>
                                    <p>For individuals who desire ready access to extra cash, a credit line up to $100,000.
                                    </p>
                                    <div class="clearfix"></div><br />
                                    <a href="../advance-access-line-of-credit/index.html">Learn More</a>
                                </div>
                            </div>
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar">
                                    <img src="{{ asset('assets/frontend/globalassets/images/secondary-icons/gold/places/gold-places-secondary-icon-14.png') }}"
                                        title="Home Equity Credit Line" alt="woman driving in car with window down"
                                        width="116px" height="116px">
                                </div>
                                <div class="b15avtar_content">
                                    <h3>Home Equity Credit Line</h3>
                                    <p>Establish a line of credit based on the equity in your home!&nbsp; A great way to
                                        make ongoing improvements or fund other large purchases.</p>
                                    <div class="clearfix"></div><br />
                                    <a href="../home-equity-line-of-credit/index.html">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="a48870053" class="modal fade" role="dialog">
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
                                            <h2>More Loans &amp; Credit Lines</h2>
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a href="../personal-loans/index.html"
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
                        <img src="{{ asset('assets/frontend/Static/img/CustomBlocks/B6/featured_bg_a.png') }}"
                            class="b6featured_bg" alt="First PREMIER Bank">
                        <img src="{{ asset('assets/frontend/Static/img/CustomBlocks/B6/featured_bg_small_a.png') }}"
                            class="b6featured_bg_small_bg" alt="First PREMIER Bank">
                        <div class="b6featured_bg_small carousel" id="b06Carousel" data-ride="carousel">
                            <div class="">
                                <div class="carousel-inner b06carousel-inner">
                                    <div class="item active">
                                        <div class="row b6mypadding">
                                            <div class="b6featured_quote_img col-lg-5 col-md-5"><img
                                                    src="{{ asset('assets/frontend/contentassets/ac292978877443dbad9d4a3bd0949035/quotes-breannabeebe.png') }}"
                                                    class="b6featured_img" alt="Breanna Beebe Branch Manager"></div>
                                            <div class="b6featured_quote col-lg-7 col-md-7">
                                                <p class="b6alternate">First PREMIER Bank will help you through each
                                                    stage of your life. It’s not unusual to help newlyweds purchase their
                                                    first car, assist them in upgrading to a minivan and even refer them to
                                                    one of our mortgage bankers as they outgrow their home. Seeing them
                                                    return tells me I’ve done my job well and it makes me smile. </p>
                                                <div class="clearfix"></div><span> - Breanna Beebe, Branch
                                                    Manager</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
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
                        width: 100%;
                    }

                    .b13what_you_know_main_white ol li ol li {
                        width: 100%;
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
                                <p>{1} When you overdraw your checking account, advances will be made in $300 increments. A
                                    $12 Overdraft Protection Fee will be assessed to your checking account for each
                                    automatic transfer from a First PREMIER Bank line of credit to cover an overdraft. This
                                    fee does not apply to any manual transfer such as by phone, in person or online.</p>
                                <p>{2} The Annual Percentage Rate may vary.</p>
                                <p>{3} A First PREMIER checking account is required to open an Easy Access Line of Credit.
                                </p>
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
