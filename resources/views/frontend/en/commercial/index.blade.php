@extends('frontend.layouts.app')
@section('content')
    <div class="container">

        <!--start responsive menu-->
        @include('frontend.layouts.components.header')
        <!-- Main Header -->
        @include('frontend.layouts.components.navbar')

        <style>
            @media all and (-ms-high-contrast: none),
            (-ms-high-contrast: active) {

                /* IE 10 & 11 CSS styles go here */
                #signInHoverSection {
                    position: fixed;
                    z-index: 9999;
                    right: auto;
                    top: 48px;
                }
            }

            @supports (-ms-accelerator:true) {

                /* IE Edge 12+ CSS styles go here */
                #signInHoverSection {
                    position: absolute;
                    z-index: 9999;
                }
            }

        </style>
        <div class="row equal-height">
            <div class="block b01block  col-md-12">

                <script>
                    var b01title = "_en_commercial_" + "b01-title";
                    var b01msg = "_en_commercial_" + "b01-msg";
                    var b01heroimage = "_en_commercial_" + "b01-heroimage";
                    var b01linkname = "_en_commercial_" + "b01-linkname";
                    var b01linkurl = "_en_commercial_" + "b01-linkurl";
                    var b01titlemobile = "_en_commercial_" + "b01-titlemobile";
                    var b01messagemobile = "_en_commercial_" + "b01-messagemobile";

                    var WelcomeObj = {
                        title: '',
                        msg: '',
                        heroimage: '',
                        linkname: '',
                        linkurl: '',
                        titlemobile: '',
                        messagemobile: ''
                    };

                    $(document).ready(function() {
                        var title = sessionStorage.getItem(b01title) || '';
                        if (title != '') {

                            var msg = sessionStorage.getItem(b01msg);
                            var heroimage = sessionStorage.getItem(b01heroimage);
                            var linkname = sessionStorage.getItem(b01linkname);
                            sessionStorage.setItem(b01linkurl, 'treasury-services/index.html');
                            //  var linkurl = sessionStorage.getItem(b01linkurl);
                            var titlemobile = sessionStorage.getItem(b01titlemobile);
                            var messagemobile = sessionStorage.getItem(b01messagemobile);

                            titlemobile = titlemobile.replace('<br />', ''); // here I am removing the <br/>
                            messagemobile = messagemobile.replace('<br />', ''); // tags...

                            WelcomeObj.title = title;
                            WelcomeObj.msg = msg;
                            WelcomeObj.heroimage = heroimage;
                            WelcomeObj.linkname = linkname;
                            //  WelcomeObj.linkurl = linkurl;
                            WelcomeObj.linkurl = 'treasury-services/index.html';
                            WelcomeObj.titlemobile = titlemobile;
                            WelcomeObj.messagemobile = messagemobile;
                            SetWelcomeData(WelcomeObj);
                        } else {
                            var wt = "<p>Our Size is <br />Our Strength</p>";
                            var wm =
                                "<p>As the 14th largest provider of ACH services <br />in the nation, First PREMIER offers a robust <br />suite of banking, treasury, investment and <br />trust solutions for commercial clients.</p>";
                            var wtm = "<p>Our Size is Our Strength</p>";
                            var wmm =
                                "<p>As the 14th largest provider of ACH services in the nation, First PREMIER offers a robust suite of banking, treasury, investment and trust solutions for commercial clients.</p>";

                            sessionStorage.setItem(b01title, wt);
                            sessionStorage.setItem(b01msg, wm);
                            sessionStorage.setItem(b01heroimage,
                                "{{ asset('assets/frontend/contentassets/ff24904b95014a8e8f84aaa316689356/fpb_hero_summer_our_size_is_strength.jpg') }}"
                            );
                            sessionStorage.setItem(b01linkname, 'Learn More');
                            sessionStorage.setItem(b01linkurl, 'treasury-services/index.html');
                            sessionStorage.setItem(b01titlemobile, wtm);
                            sessionStorage.setItem(b01messagemobile, wmm);
                            WelcomeObj.title = wt;
                            WelcomeObj.msg = wm;
                            WelcomeObj.heroimage =
                                "{{ asset('assets/frontend/contentassets/ff24904b95014a8e8f84aaa316689356/fpb_hero_summer_our_size_is_strength.jpg') }}";
                            WelcomeObj.linkname = 'Learn More';
                            WelcomeObj.linkurl = 'treasury-services/index.html';
                            WelcomeObj.titlemobile = wtm; // These are the mobile title
                            WelcomeObj.messagemobile = wmm; // and mobile message.
                            SetWelcomeData(WelcomeObj);
                        }
                    });

                    function parseHtmlEntities(str) {
                        return str.replace(/&#([0-9]{1,3});/gi, function(match, numStr) {
                            var num = parseInt(numStr, 10); // read num as normal number
                            return String.fromCharCode(num);
                        });
                    }

                    function SetWelcomeData(wObj) {
                        // 481 or 769
                        if (window.innerWidth < 769) {
                            $('.b1banner_text h1.White').html(wObj.titlemobile);
                            $('.b1banner_text h3.White').html(wObj.messagemobile);
                            $('.b1banner_text h1.White p').attr("style", "width:100% !important; overflow-wrap: break-word;");
                        } else if (window.innerWidth > 768) {
                            $('.b1banner_text h1.White').html(wObj.title);
                            $('.b1banner_text h3.White').html(wObj.msg);
                            //$('.b1banner_text h1.White').attr("style", "width:600px;");
                            //$('.b1banner_text h3.White').attr("style", "width:600px;");
                        }
                        if (wObj.heroimage)
                            $("#b1Main-Hero-banner").css('background', 'url(' + wObj.heroimage + ')');
                        else
                            $("#b1Main-Hero-banner").css('background', 'url(~/Static/img/CustomBlocks/B1/FPB-Hero-Personal-1A.jpg)');
                        if (wObj.linkurl != "" && wObj.linkurl != "#") {
                            // alert(wObj.linkname + wObj.linkurl);
                            $('#HeroButton').text(wObj.linkname);
                            $('#HeroButton').attr("href", wObj.linkurl);
                            $("#HeroButton").css('visibility', 'visible');
                        } else {

                            // $("#HeroButton").css('visibility', 'hidden');
                            $("#HeroButton").css('display', 'none');
                        }

                    }
                </script>
                <style>
                    .b1banner_text h1.White {
                        font-size: 55px;
                        font-family: &quot;
                        Prompt-SemiBold&quot;
                        ;
                        text-shadow: none;
                        margin-bottom: 15px;
                    }

                    .b1banner_text h3.White {
                        font-size: 20px;
                        line-height: 32px;
                        font-family: &quot;
                        Prompt-Regular&quot;
                        ;
                    }

                </style>

                <section class="row-full b1">
                    <div id="b1Main-Hero-banner" class="b1hero_banner">
                        <div class="b1banner-desc">
                            <div class="container">
                                <div class="row b1mobile">
                                    <div class="col-md-8 col-xs-12 col-sm-6 mobile-show">
                                        <div class="b1banner_text">
                                            <h1 class="White"></h1>
                                            <h3 class="White"></h3>
                                            <a id="HeroButton"></a>

                                        </div>
                                    </div>

                                    <div class="col-md-4 col-xs-6 col-sm-6 mobile-show">
                                        <div class="b1login_Box">
                                            <form name="Q2OnlineLogin"
                                                action="https://online.firstpremier.com/FirstPremierBankOnline/uux.aspx"
                                                method="post">
                                                <h3>Access Your Account</h3>
                                                <div class="b1access">Access your First PREMIER Bank account.</div>
                                                <div class="form-group">
                                                    <select id="AccessAccountDropdown" class="form-control">
                                                        <option value="" id="selectaccount">Select Account Type</option>
                                                        <option value="https://www.mypremiercreditcard.com/login.aspx"
                                                            data-type="" id="creditcardpayment">Credit Card</option>
                                                        <option
                                                            value="https://online.firstpremier.com/FirstPremierBankOnline/uux.aspx"
                                                            data-type="actionitem" id="personalbanking">Personal Banking
                                                        </option>
                                                        <option
                                                            value="https://online.firstpremier.com/FirstPremierBankOnline/uux.aspx"
                                                            data-type="actionitem" id="businessbanking">Business Banking
                                                        </option>
                                                        <option value="https://firstpremier.fdecs.com/eCustService/"
                                                            data-type="" id="businessrewards">Business Rewards Credit
                                                            Card</option>
                                                        <option value="https://goldleafach.com/ach/signin.aspx?218264CB36"
                                                            data-type="" id="achonline">ACH Online</option>
                                                        <option value="https://icp.infovisa.com/0309/" data-type=""
                                                            id="trust">Trust Online</option>
                                                        <!--https ://www.mauiweb1.com/0309"-->
                                                        <option
                                                            value="https://myaccount.iconnect2invest.com/bankr/login.do?webcontext=iconnect"
                                                            data-type="" id="investmentservices">Brokerage Account
                                                        </option>
                                                        <option
                                                            value="https://firstpremier.mymortgage-online.com/?borrowerportal&siteid=9621968476"
                                                            data-type="" id="mortgage">Mortgage Application</option>
                                                    </select>
                                                </div>
                                                <div class="hide" id="Q2Login">
                                                    <div class="form-group">
                                                        <label for="user_id" style="color:#7c91b1">Login ID</label>
                                                        <input name="user_id" class="form-control" id="user_id"
                                                            placeholder="Enter Login ID" type="text" autocomplete="off">
                                                        <span
                                                            class="glyphicon glyphicon-remove form-control-feedback hide"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" style="color:#7c91b1">Password</label>
                                                        <input name="password" class="form-control" id="password"
                                                            placeholder="Enter Password" type="password" autocomplete="off">
                                                        <span
                                                            class="glyphicon glyphicon-remove form-control-feedback hide"></span>
                                                    </div>
                                                </div>
                                                <div id="loginLine" class="text-center b1smallLine">
                                                    <img src="{{ asset('assets/frontend/Static/img/CustomBlocks/B1/small_line.png') }}"
                                                        alt="">
                                                </div>

                                                <button class="b1btn-login"> Login </button>
                                            </form>
                                            <a class="b1link_access" href="../pages/resources/enrollment/index.html">Set
                                                up online access <img
                                                    src="{{ asset('assets/frontend/Static/img/CustomBlocks/B1/arrow_line.png') }}"
                                                    style="height:11px;" /></a>

                                        </div>


                                    </div>


                                </div>


                            </div>
                        </div>
                    </div>
                </section>
                <script>
                    document.getElementById("user_id").value = '';
                    document.getElementById("password").value = '';
                </script>
            </div>
            <div class="block b04block  col-md-12">
                <style>
                </style>
                <section class="row-full b4background">
                    <div class="container">
                        <div class="b4anywhere_banking" style="width:100%; ">
                            <h2 style="text-align:center !important;">Commercial Business Services</h2>
                            <div class="xhtml">
                                <p style="text-align: center;">As one of the nation&rsquo;s best performing community
                                    banks and the 14th largest originator of ACH services,</p>
                                <p style="text-align: center;">First PREMIER has all the business banking services your
                                    large company needs with the personal touch you want.</p>
                                <p>&nbsp;</p>
                            </div>
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
            <div class="block b09block  col-md-12">
                <style>
                    .col-lg-4.col-md-12.col-sm-12.b9student_parent_main.no-pad.b9small_growth_box.last {
                        margin-right: 0px;
                    }

                    .b9readmore {
                        text-align: center;
                        width: 185px;
                        min-width: 185px;
                        height: 40px;
                        line-height: 25.6px;
                        background: #42967d;
                        border-radius: 20px;
                        border: transparent;
                        font-family: "Prompt-Bold";
                        font-size: 12px;
                        color: #ffffff;
                        text-transform: uppercase;
                        display: block;
                        letter-spacing: 1px;
                        box-shadow: 0px 4px 8px 0px rgba(48, 64, 75, 0.09);
                        padding: 8px 0px 0px 0px !important;
                        margin-top: 20px;
                    }

                    .b9readmore:hover {
                        background: #1c7158;
                    }

                </style>
                <section>
                    <div class="b9banking_confident_main">
                        <div class="container">
                            <div class="col-lg-12 b9student_parent_main_section no-pad">



                                <div class="col-lg-8 col-md-12 col-sm-12 b9student_parent_main no-pad ">
                                    <div class="b9student_parent_main_img"><img
                                            src="{{ asset('assets/frontend/contentassets/47328a63aadd4df4b89ee94ca2928d37/keith_miller_luke_tibbets_lewis.jpg') }}"
                                            alt="woman business owner"></div>
                                    <div class="b9student_parent_main_content">
                                        <div class="b9avtar"><img
                                                src="{{ asset('assets/frontend/globalassets/images/_replace/_filled/round1.png') }}"
                                                title="Commercial Banking" alt="check"></div>
                                        <div class="b9avtar_content">
                                            <span> Commercial Banking</span>

                                            <div class="xhtml">
                                                <p>First PREMIER Bank services the banking needs of corporations,
                                                    organizations, foundations, educational and government institutions
                                                    of every size and offers an array of treasury, financing and asset
                                                    management services.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="b9small_growth_box_overlay">
                                        <div class="b9small_growth_boxtext b9student_parent_main no-pad">
                                            <div class="b9student_parent_main_content">
                                                <div class="b9avtar"><img
                                                        src="{{ asset('assets/frontend/globalassets/images/_replace/_filled/round1.png') }}"
                                                        alt="Commercial Banking"></div>
                                                <div class="b9avtar_content">
                                                    <a href="business-checking/index.html">Commercial Banking</a>

                                                    <p>First PREMIER Bank services the banking needs of corporations,
                                                        organizations, foundations, educational and government
                                                        institutions of every size and offers an array of treasury,
                                                        financing and asset management services.</p>
                                                    <ul>

                                                        <li>
                                                            <a href="business-checking/index.html">Business Checking</a>
                                                        </li>

                                                        <li>
                                                            <a href="savings-and-cds/index.html">Savings &amp; CDs</a>
                                                        </li>

                                                        <li>
                                                            <a
                                                                href="treasury-services/cash-management/security-and-fraud-protection/index.html">Security
                                                                &amp; Fraud Protection</a>
                                                        </li>

                                                    </ul>
                                                    <div class="b9confidence_links">
                                                        <a href="../small-business/business-checking/compare-business-checking/index.html"
                                                            class="b9readmore">Learn More</a>
                                                        <a
                                                            href="../small-business/business-checking/compare-business-checking/index.html">Compare
                                                            Checking Account</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-4 col-md-12 col-sm-12 b9student_parent_main b9student_parent_right_main no-pad">
                                    <div class="payments_section">
                                        <span> Treasury Services</span>


                                        <ul>

                                            <li>
                                                <a href="treasury-services/cash-management/index.html">Cash
                                                    Management</a>
                                            </li>

                                            <li>
                                                <a href="treasury-services/manage-receivables/index.html">Manage
                                                    Receivables</a>
                                            </li>

                                            <li>
                                                <a href="treasury-services/manage-payables-and-payroll/index.html">Manage
                                                    Payables &amp; Payroll</a>
                                            </li>

                                            <li>
                                                <a
                                                    href="treasury-services/cash-management/reporting-and-analytics/index.html">Reporting
                                                    &amp; Analytics</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="payments_section">
                                        <span>Asset Management &amp; Trust</span>


                                        <ul>

                                            <li>
                                                <a
                                                    href="asset-management-and-trust/business-planning-and-investing/index.html">Business
                                                    Planning &amp; Investing</a>
                                            </li>

                                            <li>
                                                <a href="asset-management-and-trust/employee-benefits/index.html">Employee
                                                    Benefits</a>
                                            </li>

                                            <li>
                                                <a href="asset-management-and-trust/group-retirement-plans/index.html">Group
                                                    Retirement</a>
                                            </li>

                                            <li>
                                                <a href="asset-management-and-trust/business-trust-services/index.html">Business
                                                    Trust Services</a>
                                            </li>

                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 b9student_parent_main_section no-pad">
                                <div class="col-lg-4 col-md-12 col-sm-12 b9student_parent_main no-pad b9small_growth_box">
                                    <div class="b9student_parent_main_img"><img
                                            src="{{ asset('assets/frontend/contentassets/47328a63aadd4df4b89ee94ca2928d37/conf_img1.jpg') }}"
                                            title="Finance Growth" alt="male contractors looking at blueprints"></div>
                                    <div class="b9student_parent_main_content finance_growth">
                                        <div class="b9glow_content" style="min-height:33px;">
                                            <h3> Finance Growth</h3>
                                        </div>
                                    </div>
                                    <div class="b9small_growth_box_overlay b9bg-box-overlay">
                                        <div class="b9small_growth_boxtext">
                                            <h3>Finance Growth</h3>

                                            <ul>

                                                <li>
                                                    <a href="financing/business-lines-of-credit/index.html">Commercial
                                                        Loans</a>
                                                </li>

                                                <li>
                                                    <a
                                                        href="../small-business/loans-and-credit-lines/business-lines-of-credit/index.html">Business
                                                        Lines of Credit</a>
                                                </li>

                                                <li>
                                                    <a href="financing/commercial-real-estate/index.html">Commercial
                                                        Real Estate</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 b9student_parent_main no-pad b9small_growth_box">
                                    <div class="b9student_parent_main_img"><img
                                            src="{{ asset('assets/frontend/contentassets/47328a63aadd4df4b89ee94ca2928d37/conf_img2.jpg') }}"
                                            title="Finance Growth" alt="business woman"></div>
                                    <div class="b9student_parent_main_content finance_growth">
                                        <div class="b9glow_content" style="min-height:33px;">
                                            <h3>Take Care of Employees</h3>
                                        </div>
                                    </div>
                                    <div class="b9small_growth_box_overlay b9bg-box-overlay">
                                        <div class="b9small_growth_boxtext">
                                            <h3>Take Care of Employees</h3>

                                            <ul>

                                                <li>
                                                    <a href="asset-management-and-trust/group-retirement-plans/index.html">Group
                                                        Retirement Plans</a>
                                                </li>

                                                <li>
                                                    <a href="asset-management-and-trust/employee-benefits/index.html">Employee
                                                        Benefits</a>
                                                </li>

                                                <li>
                                                    <a href="asset-management-and-trust/first-premier-at-work/index.html">PREMIER
                                                        at Work</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-4 col-md-12 col-sm-12 b9student_parent_main no-pad b9small_growth_box last">
                                    <div class="b9student_parent_main_img"><img
                                            src="{{ asset('assets/frontend/contentassets/47328a63aadd4df4b89ee94ca2928d37/conf_img3.jpg') }}"
                                            title="Protect Your Assets" alt="male meeting with banker"></div>
                                    <div class="b9student_parent_main_content finance_growth">
                                        <div class="b9glow_content" style="min-height:33px;">
                                            <h3>Protect Your Assets</h3>
                                        </div>
                                    </div>
                                    <div class="b9small_growth_box_overlay b9bg-box-overlay">
                                        <div class="b9small_growth_boxtext">
                                            <h3>Protect Your Assets</h3>

                                            <ul>

                                                <li>
                                                    <a
                                                        href="treasury-services/cash-management/security-and-fraud-protection/index.html">Security
                                                        &amp; Fraud Protection</a>
                                                </li>

                                                <li>
                                                    <a href="business-checking/overdraft-protection/index.html">Overdraft
                                                        Protection</a>
                                                </li>

                                                <li>
                                                    <a href="treasury-services/cash-management/index.html">Cash
                                                        Management</a>
                                                </li>

                                            </ul>

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
                            <h2>Treasury Services</h2>

                            <div class="b17free_mobile_banking_right">
                                <div class="xhtml">
                                    <p>As one of the strongest banks in the nation and the 14<sup>th</sup> largest ACH
                                        originator, we serve regional and national clients.&nbsp; We provide customized
                                        banking and treasury services solutions to help your business <a
                                            href="treasury-services/cash-management/index.html">manage cash</a>, <a
                                            href="treasury-services/manage-receivables/index.html">integrate
                                            receivables</a> and <a
                                            href="treasury-services/manage-payables-and-payroll/index.html">manage
                                            payables and payroll</a>.&nbsp; With First PREMIER Bank, you'll get more
                                        than state-of-the-art tools, you'll get personal service and support you can
                                        trust.</p>
                                </div>
                                <div class="b17PayLinks payIcon-space">
                                </div>

                                <!-- Button and Footer Links go here ... -->
                            </div>

                            <div class="b17free_mobile_banking_left right">
                                <img class="img-responsive" id="imgMainImage" style="border-radius:50%"
                                    src="{{ asset('assets/frontend/contentassets/5361b85864674586ba157dfd4db88f1b/2.2.1_b-17_promo_woman.png') }}"
                                    alt="First PREMIER Bank">
                            </div>
                        </div>
                    </div>

                    <div class="b15benfits_main_box b17cards">
                        <div class="container">
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar">
                                    <img src="{{ asset('assets/frontend/globalassets/images/primary-icons/blue/bookmarks-tags/blue-bookmarks-_-tags-primary-icon-2.png') }}"
                                        title="Integrated Receivables" alt="woman looking at laptop" width="116px"
                                        height="116px">
                                </div>
                                <div class="b15avtar_content">
                                    <h3>Integrated Receivables</h3>
                                    <p>Accept credit and debit cards, manage payments eletronically and centralize
                                        payments and returns.</p>
                                    <div class="clearfix"></div><br />
                                    <a href="../small-business/business-services/accept-payments/index.html">Learn
                                        More</a>
                                </div>
                            </div>
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar">
                                    <img src="{{ asset('assets/frontend/globalassets/images/primary-icons/bright/business-finance/bright-business-_-finance-primary-icon-11.png') }}"
                                        title="Payables &amp; Payroll" alt="woman looking at laptop" width="116px"
                                        height="116px">
                                </div>
                                <div class="b15avtar_content">
                                    <h3>Payables &amp; Payroll</h3>
                                    <p>Make vendor and tax payments, streamline and manage payroll and expense
                                        reimbursement.</p>
                                    <div class="clearfix"></div><br />
                                    <a href="../small-business/business-services/make-payments/index.html">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="a841195" class="modal fade" role="dialog">
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
                                            <h2>Treasury Services</h2>
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
            <div class="block b02block  col-md-12">
                <section>
                    <div class="b2about_grown_main">
                        <div class="b2container">
                            <h2>Locally Grown, Nationally Known</h2>
                            <div class="xhtml">
                                <p>We are proud of our strong reputation, and prouder of our people and the values they
                                    embody. PREMIER associates have deep, South-Dakota roots and demonstrate a personal
                                    commitment to the communities we serve.</p>
                            </div>
                            <div class="b2about_debit col-md-4">
                                <span>Zero Debt</span>
                                <p>Privately owned and debt-free! One of the strongest banks in the nation.</p>
                            </div>
                            <div class="b2about_debit community col-md-4">
                                <span>$2B</span>
                                <p>Strongly capitalized and one of the top performing s-corp banks in the nation.</p>
                            </div>
                            <div class="b2about_debit assets col-md-4">
                                <span>$3B</span>
                                <p>In trust assets managed by our Trust Services Team.</p>
                            </div>
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
                                                <p>As a debt-free, privately owned $2 billion bank, First PREMIER is one
                                                    of the strongest capitalized banks in the country. We ranked 17th in
                                                    the nation for banks with more than $1 billion in assets by American
                                                    Banker Magazine. We are consistently ranked as a top-performing
                                                    banks for asset size by the American Banking Association's Banking
                                                    Journal.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_1"><span> Serving Businesses of Every Size </span></a>
                                        </h3>
                                    </div>
                                    <div id="collapse_1" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>Our integrated business model bridges business banking with our
                                                    treasury and asset management teams. We work together to provide
                                                    market-leading banking, lending and treasury services solutions that
                                                    are "right-sized" for business needs and flexible to scale for
                                                    future growth.</p>
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
                                                <p>Our bankers take the time to learn about you. Once they understand
                                                    your business goals, they will help you find the banking products
                                                    and financial solutions that fit your needs today, and support you
                                                    as your business grows.</p>
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
                                                    accounts with multi-tiered security and administrative control.
                                                    Enjoy great features including eStatements, Bill Pay, account alerts
                                                    &amp; notifications, debit card lock and unlock, administrative
                                                    controls and more! Our Debit Mastercard&reg; and Business Rewards
                                                    Mastercard&reg; credit cards also work with mobile wallet
                                                    technology. Best of all, First PREMIER Business Online and Mobile
                                                    Banking are FREE of charge to First PREMIER Banking customers.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_4"><span> Locally Grown, Nationally Known </span></a>
                                        </h3>
                                    </div>
                                    <div id="collapse_4" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>We serve local, regional and national clients with pride. First
                                                    PREMIER is the 14th largest ACH Originating Bank in the USA and the
                                                    12th largest issuer of Mastercard&reg; in the country. We are also
                                                    honored to have served as the bank for the State of South Dakota for
                                                    20+ years (1999), as well as the bank for the City of Sioux Falls
                                                    for 15+ years (2004).</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_5"><span> A Champion for Customers & Community
                                                </span></a></h3>
                                    </div>
                                    <div id="collapse_5" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>We serve our local, regional and national clients with pride and
                                                    personal customer care. We are active supporters of more than 600
                                                    charities and non-profits. Last year alone, our associates
                                                    contributed over 32,000 hours of community service. We also take
                                                    care of our employees. From 2015-2020, we were ranked as one of the
                                                    Best Banks to Work For by American Banker and Best Companies Group.
                                                </p>
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
@endsection
