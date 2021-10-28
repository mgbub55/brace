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
                            $('.b19landingpage').css('background',
                                'url({{ asset("assets/frontend/Static/img/svg/green-1.svg") }}) no-repeat');
                        }
                    });

                    $(window).resize(function() {
                        if (screen.width < 767) {
                            $('.b19landingpage').css('height', '628px');
                            $('.b19landingpage').css('background', '');
                            $('.b19landingpage').css('background-color', '#1b3e43');
                        } else {
                            $('.b19landingpage').css('background',
                                'url({{ asset("assets/frontend/Static/img/svg/green-1.svg") }}) no-repeat');
                        }
                    });
                </script>


                <div class="b19landingpage row-full" style="padding-bottom:0px;">
                    <div class="container">
                        <h1 class="">Personal Investing</h1>
                        <div class="xhtml"></div>
                        <div class="b19landingpage_box_main">

                            <div class="col-md-4 col-sm-6 b19landingpage_box">
                                <a href="{{ route('frontend.en.personal.savings-and-cds') }}"><img
                                        src="{{ asset('assets/frontend/globalassets/images/primary-icons/green/business-finance/green-business-_-finance-primary-icon-31.png') }}"
                                        title="Savings &amp; CDs" alt="money" border="0" /></a>
                                <div class="clearfix"></div>
                                <span><a href="{{ route('frontend.en.personal.savings-and-cds') }}">Savings &amp;
                                        CDs</a></span>
                                <div class="xhtml">
                                    <p>Put your money to work with FDIC Insured savings and certificates of deposit (CDs).
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 b19landingpage_box">
                                <a href="{{ route('frontend.en.personal.investing.brokerage-services') }}"><img
                                        src="{{ asset('assets/frontend/globalassets/images/primary-icons/blue/business-finance/blue-business-_-finance-primary-icon-11.png') }}"
                                        title="Brokerage Services" alt="growth chart" border="0"></a>
                                <div class="clearfix"></div>
                                <span><a href="{{ route('frontend.en.personal.investing.brokerage-services') }}">Brokerage
                                        Services</a></span>
                                <div class="xhtml">
                                    <p>Simple investing for life and retirement powered by solid advice and the latest in
                                        financial technology.</p>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 b19landingpage_box">
                                <a href="{{ route('frontend.en.personal.wealth-management') }}"><img
                                        src="{{ asset('assets/frontend/globalassets/images/primary-icons/gold/business-finance/gold-business-_-finance-primary-icon-22.png') }}"
                                        title="Wealth Management" alt="pie chart" border="0"></a>
                                <div class="clearfix"></div>
                                <span><a href="{{ route('frontend.en.personal.wealth-management') }}">Wealth
                                        Management</a></span>
                                <div class="xhtml">
                                    <p>Tailored, comprehensive banking, credit, investment and trust solutions addressing
                                        all your financial needs.</p>
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

                            <h2>Saving For the Future</h2>


                            <div class="b20consumer-loans-left b20showright" style="float:right;">

                                <div class="xhtml">
                                    <p>First PREMIER Bank Savings and CDs offer an FDIC insured environment to grow your
                                        nest egg.</p>
                                    <ul>
                                        <li>A simple, easy and convenient way to save</li>
                                        <li>Keep funds safe and within reach</li>
                                        <li>Savings options available for all life stages, from college to retirement</li>
                                        <li>Competitive interest rates and terms</li>
                                        <li>Personal bankers available to help find the best plan for you<br /><br /></li>
                                    </ul>
                                </div>
                                <br />

                                <div class="b20consumer_btn_center">
                                    <!-- b20mainanchorL -->
                                    <a href="{{ route('frontend.en.personal.savings-and-cds') }}"
                                        class="b20mainanchorL">Learn More</a>
                                </div>
                            </div>
                            <div class="b20consumer-loans-right"><img id="imgMainRight"
                                    alt="father filling out papers with daughter on his lap"
                                    src="{{ asset('assets/frontend/contentassets/4fd6263e21944171a7b69622b0a3adeb/1.6_b-20-1_dad-min.png') }}"
                                    class="img-responsive"></div>
                        </div>
                    </div>
                </section>

                <!-- View Rate [3] (within container)-->
                <!-- View Rate [3] (within container)-->
            </div>
            <div class="block b56block  col-md-12">

                <style>
                    .pop_main_container_board .pop_main_container ol li ol li {}

                </style>
                <style>
                    .tab_h4 {
                        display: inline !important;
                    }

                </style>

                <section>
                    <div class="b56lines-credit-main">
                        <div class="container">
                            <h2>Which IRA Is Best For You?</h2>
                            <div class="b56lines-credit-table-sectopn b56mobile_section">
                                <table class="b56lines-credit-table">
                                    <tr>
                                        <td style="vertical-align:bottom;">
                                            <h4 class="tab_h4" style="float:right;">
                                                <p></p>
                                            </h4>
                                        </td>
                                        <th>
                                            <h3>Traditional IRA</h3>
                                            <p>Make contributions with money that you may be able to deduct on your tax
                                                return. Earnings would grow tax-deferred until retirement withdrawal.</p>
                                        </th>
                                        <th>
                                            <h3>Roth IRA</h3>
                                            <p>Make contributions with money on which you've already paid taxes. Funds can
                                                potentially grow tax-free until retirement when certain conditions apply.
                                            </p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>
                                                <p style="text-align: right;">TAX BENEFITS</p>
                                            </h4>
                                        </td>
                                        <td>
                                            <p>Tax-deferred growth with tax-deductible contributions.</p>
                                        </td>
                                        <td>
                                            <p>Tax-free growth with tax-free qualified withdrawals.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>
                                                <p style="text-align: right;">CONTRIBUTION RESTRICTIONS</p>
                                            </h4>
                                        </td>
                                        <td>
                                            <p>Contribute until you're 70&frac12;.</p>
                                        </td>
                                        <td>
                                            <p>Contribute at any age</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>
                                                <p style="text-align: right;">INCOME REQUIREMENTS</p>
                                            </h4>
                                        </td>
                                        <td>
                                            <p>Income does not determine how much you can contribute</p>
                                        </td>
                                        <td>
                                            <p>Income impacts how much you may contribute</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>
                                                <p style="text-align: right;">WITHDRAWAL TAXES</p>
                                            </h4>
                                        </td>
                                        <td>
                                            <p>Pay taxes when you withdraw pre-tax contributions and/or when you withdraw
                                                any earnings.</p>
                                        </td>
                                        <td>
                                            <p>No taxes when you withdraw your contributions or earnings, as long as the
                                                five-year aging requirement has been met.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>
                                                <p style="text-align: right;">EARLY WITHDRAWAL PENALTIES</p>
                                            </h4>
                                        </td>
                                        <td>
                                            <p>Making withdrawals before age 59&frac12; may result in a 10% penalty.</p>
                                        </td>
                                        <td>
                                            <p>Make withdrawals before you're 59&frac12; and you may pay taxes on your
                                                earnings plus a 10% additional tax.</p>
                                        </td>
                                    </tr>
                                </table>

                                <!--Mobile table Starts-->
                                <table class="b56lines-credit-table b56mobile_lines-credit-table">
                                    <tr>
                                        <td>
                                            <h3>Traditional IRA</h3>
                                            <p>Make contributions with money that you may be able to deduct on your tax
                                                return. Earnings would grow tax-deferred until retirement withdrawal.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <hr />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td class='odd'>
                                                        <p style="text-align: right;">TAX BENEFITS</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Tax-deferred growth with tax-deductible contributions.</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='odd'>
                                                        <p style="text-align: right;">CONTRIBUTION RESTRICTIONS</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Contribute until you're 70&frac12;.</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='odd'>
                                                        <p style="text-align: right;">INCOME REQUIREMENTS</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Income does not determine how much you can contribute</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='odd'>
                                                        <p style="text-align: right;">WITHDRAWAL TAXES</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Pay taxes when you withdraw pre-tax contributions and/or when you
                                                            withdraw any earnings.</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='odd'>
                                                        <p style="text-align: right;">EARLY WITHDRAWAL PENALTIES</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Making withdrawals before age 59&frac12; may result in a 10%
                                                            penalty.</p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>Roth IRA</h3>
                                            <p>Make contributions with money on which you've already paid taxes. Funds can
                                                potentially grow tax-free until retirement when certain conditions apply.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <hr />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td class='odd'>
                                                        <p style="text-align: right;">TAX BENEFITS</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Tax-free growth with tax-free qualified withdrawals.</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='odd'>
                                                        <p style="text-align: right;">CONTRIBUTION RESTRICTIONS</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Contribute at any age</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='odd'>
                                                        <p style="text-align: right;">INCOME REQUIREMENTS</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Income impacts how much you may contribute</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='odd'>
                                                        <p style="text-align: right;">WITHDRAWAL TAXES</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>No taxes when you withdraw your contributions or earnings, as
                                                            long as the five-year aging requirement has been met.</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='odd'>
                                                        <p style="text-align: right;">EARLY WITHDRAWAL PENALTIES</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Make withdrawals before you're 59&frac12; and you may pay taxes
                                                            on your earnings plus a 10% additional tax.</p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                </table>
                                <!--Mobile table Ends-->
                            </div>

                        </div>
                    </div>
                </section>

                <!-- View Rate [3] (within container)-->
                <!-- View Rate [3] (within container)-->
            </div>
            <script>
                $('#b11Carousel').carousel({
                    interval: 80000,
                })
            </script>



                <div class="b11section">
                    <section class="container">
                        <div class="b11first_premier_main">
                            <div class="container">
                                <h2>Investing Made Easy</h2>
                                <div class="row">
                                    <div class="col-lg-12 b11firstpremier_box_main">
                                        <div class='item active'>
                                            <div class='col-md-4 col-sm-6 b11anytime_box'><a
                                                    href='{{ route('frontend.en.personal.investing.brokerage-services') }}'>
                                                    <img src='{{ asset('assets/frontend/globalassets/images/secondary-icons/bright/business-finance/bright-business-_-finance-secondary-icon-22.png') }}'
                                                        alt='pie chart' border='0' /></a><span><a
                                                        href='{{ route('frontend.en.personal.investing.brokerage-services') }}'>Brokerage Services</a></span>
                                                <div class="xhtml">
                                                    <p>Investing made easy, combining personal advice and turnkey online
                                                        access.<sup>1</sup><br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
                                                </div>
                                            </div>
                                            <div class='col-md-4 col-sm-6 b11anytime_box'><a
                                                    href='{{ route('frontend.en.personal.investing.insurance') }}'><img
                                                        src='{{ asset('assets/frontend/globalassets/images/secondary-icons/gold/business-finance/gold-business-_-finance-secondary-icon-24.png') }}'
                                                        alt='growth chart' border='0' /></a><span><a
                                                        href='{{ route('frontend.en.personal.investing.insurance') }}'>Insurance</a></span>
                                                <div class="xhtml">
                                                    <p>Protect your investments and provide for the future with a disability
                                                        and life insurance.<sup>1</sup><br />&nbsp; &nbsp; &nbsp; &nbsp;
                                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
                                                </div>
                                            </div>
                                            <div class='col-md-4 col-sm-6 b11anytime_box'><a
                                                    href='{{ route('frontend.en.personal.investing.retirement-planning') }}'><img
                                                        src='{{ asset('assets/frontend/globalassets/images/secondary-icons/blue/places/blue-places-secondary-icon-5.png') }}'
                                                        alt='beach umbrella' border='0' /></a><span><a
                                                        href='{{ route('frontend.en.personal.investing.retirement-planning') }}'>Retirement Planning</a></span>
                                                <div class="xhtml">
                                                    <p>Build your retirement nest egg with a 401(k) plan, traditional and
                                                        Roth IRAs, IRA Savings or CD.<br /><br /></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </section>
                </div>
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
                            <h2>Managing Your Wealth</h2>

                            <div class="b17free_mobile_banking_right">
                                <div class="xhtml">
                                    <p>Our Wealth Management team excels in financial planning, investment and portfolio
                                        management.</p>
                                    <ul>
                                        <li>Customized, banking, credit and investing solutions</li>
                                        <li>Concierge banking for higher net worth individuals</li>
                                        <li>Comprehensive financial planning</li>
                                        <li>Managed investing with a dedicated wealth professional</li>
                                        <li>Preserve your legacy with estate and succession planning</li>
                                    </ul>
                                </div>
                                <div class="b17PayLinks payIcon-space">
                                </div>

                                <!-- Button and Footer Links go here ... -->
                                <a href="{{ route('frontend.en.personal.wealth-management') }}"
                                    class="b17readmore">LEARN MORE</a>
                            </div>

                            <div class="b17free_mobile_banking_left right">
                                <img class="img-responsive" id="imgMainImage" style="border-radius:50%"
                                    src="{{ asset('assets/frontend/contentassets/2c368a7dac70490bb0aabf6fac7893b3/1.6_b-17-promo_advisor-min.png') }}"
                                    alt="First PREMIER Bank">
                            </div>
                        </div>
                    </div>

                    <div class="b15benfits_main_box b17cards">
                        <div class="container">
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar">
                                    <img src="{{ asset('assets/frontend/globalassets/images/secondary-icons/blue/business-finance/blue-business-_-finance-secondary-icon-36.png') }}"
                                        title="Planning for Retirement" alt="banker talking to people" width="116px"
                                        height="116px">
                                </div>
                                <div class="b15avtar_content">
                                    <h3>Planning for Retirement</h3>
                                    <p>Are you planning for retirement? Our interactive module will help you plan today for
                                        the life you want in retirement.</p>
                                    <div class="clearfix"></div><br />
                                    <a href="#" data-toggle="modal" data-target="#a604506284T" data-backdrop="false"
                                        class="b15learnmore">Learn More</a>
                                    <div id="a604506284T" class="modal fade" role="dialog">
                                        <div class="modal-dialog pop_board">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="pop_main_container_board">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            area-label="Close">
                                                            <span aria-hidden="true">
                                                                <img class="close_icon"
                                                                    src="{{asset('assets/frontend/Static/img/closebutton-2.png')}}"
                                                                    alt="First PREMIER Bank"
                                                                    style="height:17px !important; width:17px !important;" />
                                                            </span>
                                                        </button>
                                                        <div class="pop_main_container">
                                                            <h2>Planning for Retirement</h2>
                                                            <div class="pop_board_white">
                                                                <div class="row">
                                                                    <div class="col-md-12" style="padding-left:40px;">
                                                                        <h4 class="Blue">You will be leaving
                                                                            firstpremier.com</h4>
                                                                        <div class="b46Blue"
                                                                            style="text-align:left;">
                                                                            <p>Please note, by clicking
                                                                                &ldquo;continue&rdquo; you will be
                                                                                redirected to a website that is not operated
                                                                                or controlled by PREMIER. PREMIER is not
                                                                                responsible for the content, links, privacy
                                                                                policy or security of that website. Your use
                                                                                of that website is subject to its terms of
                                                                                use and privacy policy. Thank you for
                                                                                visiting firstpremier.com. If you continue,
                                                                                we hope you find the information presented
                                                                                educational and useful. </p>
                                                                            <p><br /><a
                                                                                    href="https://firstpremier.everfi-next.net/student/dashboard/financialeducation-achieve/investing-in-your-future"
                                                                                    target="_blank">Continue</a></p>
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
                                </div>
                            </div>
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar">
                                    <img src="{{ asset('assets/frontend/globalassets/images/secondary-icons/bright/business-finance/bright-business-_-finance-secondary-icon-11.png') }}"
                                        title="Managed Investing" alt="banker talking to people" width="116px"
                                        height="116px">
                                </div>
                                <div class="b15avtar_content">
                                    <h3>Managed Investing</h3>
                                    <p>Investment and portfolio management support for busy, hard-working individuals and
                                        families.</p>
                                    <div class="clearfix"></div><br />
                                    <a href="{{ route('frontend.en.personal.wealth-management.managed-investing') }}">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="a60450628" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon" src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <h2>Managing Your Wealth</h2>
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a href="../wealth-management/index.html"
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
                                <p>{1} Securities and insurance products are offered through Cetera Investment Services LLC
                                    (doing insurance business in CA as CFGIS Insurance Agency), member <a
                                        href="http://www.sipc.org/" target="_blank" rel="noopener">FINRA/SIPC</a>. Advisory
                                    services are offered through Cetera Investment Advisers LLC. Neither firm is affiliated
                                    with the financial institution where investment services are offered. Investments are:
                                </p>
                                <ul>
                                    <li>Not FDIC/NCUSIF insured</li>
                                    <li>May lose value</li>
                                    <li>Not financial institution guaranteed</li>
                                    <li>Not a deposit</li>
                                    <li>Not insured by any federal government agency.</li>
                                </ul>
                                <p><br />Check the background of our investment professionals on FINRA&rsquo;s <a
                                        href="http://brokercheck.finra.org/" target="_blank" rel="noopener">BrokerCheck</a>
                                </p>
                                <p>Click here to view Cetera Investment Services <a
                                        href="https://myceterasmartworks.com/Public/Portal/Content.aspx?ContentId=29714177"
                                        target="_blank" rel="noopener">Privacy Policy</a>, other <a
                                        href="https://www.ceterafinancialinstitutions.com/clients/Non-Deposit-Disclosure"
                                        target="_blank" rel="noopener">Important Information</a> and <a
                                        href="https://myceterasmartworks.com/Public/Portal/Content.aspx?ContentId=30050055"
                                        target="_blank" rel="noopener">Business Continuity Plan</a>.</p>
                                <p>This site is published for residents of the United States only. Registered
                                    Representatives of Cetera Investment Services LLC may only conduct business with
                                    residents of the states and/or jurisdictions in which they are properly registered. Not
                                    all of the products and services referenced on this site may be available in every state
                                    and through every advisor listed. For additional information please contact the
                                    advisor(s) listed on the site or visit the Cetera Investment Services LLC site at <a
                                        href="http://www.ceterainvestmentservices.com/" target="_blank"
                                        rel="noopener">www.ceterainvestmentservices.com</a>.</p>
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
                background: url('{{asset("assets/frontend/Static/img/EHLlogo%20white.png")}}') 230px 0px no-repeat;
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
    <div class="smallLogo"><a href="../../index.html" title="First PREMIER Bank - Home"><img
                src="{{asset('assets/frontend/Static/gfx/Logo.png')}}" style="max-width:100%;" /></a></div>
    <script type="text/javascript" src="../../../../dl.episerver.net/13.4.4.1/epi-util/find.js"></script>
    <script type="text/javascript">
        if (FindApi) {
            var api = new FindApi();
            api.setApplicationUrl('../../../index.html');
            api.setServiceApiBaseUrl('../../../find_v2/index.html');
            api.processEventFromCurrentUri();
            api.bindWindowEvents();
            api.bindAClickEvent();
            api.sendBufferedEvents();
        }
    </script>

    <script type="text/javascript" src="../../../Static/js/pushy.js"></script>
    <script type="text/javascript" src="../../../Static/js/Blocks_2019062002.js"></script>
@endsection
