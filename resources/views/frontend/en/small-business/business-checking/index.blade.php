


    @extends('frontend.layouts.app')
    @section('content')
    <div class="container">
        @include('frontend.layouts.components.header')
        @include('frontend.layouts.components.navbar')

<script>

    $(document).ready(function () {



        //$('#AccessAccountDropdown option[id!=selectaccount]').each(function (index, value) {
        //    $('#signInHoverSection').append('<p>' + $(value).text() + '</p>');
        //});

        if ($(window).width() == 1024) {
            $('#ulPremierMainMenu li.SubMenu > a').on('click touchend', function (e) {
                $(this).find('div[id*=subdiv]').hide();
                $(this).attr('href', 'javascript:void(0)');
                ShowMenu(this);
            }).focusout(function () {
                ShowMenu(this);
            });
        }
        else {

            var timeoutId;
            $("#ulPremierMainMenu li.SubMenu > a").hover(function () {
                var self = this;
                if (!timeoutId) {
                    timeoutId = window.setTimeout(function () {
                        timeoutId = null;
                        ShowMenu(self);
                    }, 50);
                }
            },
                function () {
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

        var handleMouseover = function (e) {
            var target = e.target || e.srcElement;
            lastID = target.id;
            className = target.className;
            tagName = target.localName;
            if (lastID != "ulPremierMainMenu" && lastID != "") {
                $('div[id*=subdiv]').slideUp(500);
                $('.SubMenuItems li > a').css('color', '#fff').css('border-bottom', '');
            }
            if (className == "col-md-8 col-xs-12 col-sm-6" || className == "b1banner_text" || className == "b1login_Box" || className == "b1banner-desc" || className == "row b1mobile" || className == "b1banner_text" || className == "White" || className == "b1access" || className == "header-box" || tagName == "img" || tagName == "body") {
                $('div[id*=subdiv]').slideUp(500);
                $('.SubMenuItems li > a').css('color', '#fff').css('border-bottom', '');;
            }

        };

        if (document.addEventListener) {
            document.addEventListener('mouseover', handleMouseover, false);
            document.addEventListener('mouseover', handleMouseover, false);
        }
        else {
            document.attachEvent('onmouseover', handleMouseover);
        }

    });
    function ShowMenu(element) {
        if ($(element).next('div[id*=subdiv]').filter(function () { return $(this).css('display') === 'block'; }).length == 0) {
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
<div class="row equal-height"><div class="block b19block  col-md-12">

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
            $('.b19landingpage').css('background', 'url(/Static/img/svg/green-2.svg) no-repeat');
        }
    });

    $(window).resize(function () {
        if (screen.width < 767) {
            $('.b19landingpage').css('height', '628px');
            $('.b19landingpage').css('background', '');
            $('.b19landingpage').css('background-color', '#1b3e43');
        }
        else {
            $('.b19landingpage').css('background', 'url(/Static/img/svg/green-2.svg) no-repeat');
        }
    });

</script>


<div class="b19landingpage row-full" style="padding-bottom:0px;">
    <div class="container">
        <h1>Business Checking</h1>
        <div class="xhtml"></div>
        <div class="b19landingpage_box_main">

        <div class="col-md-4 col-sm-6 b19landingpage_box">
            <a href="low-volume/index.html"><img src="../../../globalassets/images/primary-icons/green/business-finance/green-business-_-finance-primary-icon-12.png" title="Basic Low Volume" alt="Check" border="0" /></a>
            <div class="clearfix"></div>
                <span><a href="low-volume/index.html">Basic Low Volume</a></span>
            <div class="xhtml"><p>Simplicity, value &amp; convenience for businesses with a lower amount of banking activity.</p></div>
        </div>

        <div class="col-md-4 col-sm-6 b19landingpage_box">
            <a href="business-debit-mastercard/index.html"><img src="../../../globalassets/images/primary-icons/blue/business-finance/blue-business-_-finance-primary-icon-25.png" title="Business Debit Card" alt="Mastercard" border="0"></a>
            <div class="clearfix"></div>
                <span><a href="business-debit-mastercard/index.html">Business Debit Card</a></span>
            <div class="xhtml"><p>For owners &amp; authorized employees, easy spending control, account monitoring &amp; fraud protection.</p></div>
        </div>

        <div class="col-md-4 col-sm-6 b19landingpage_box">
            <a href="../online-and-mobile/index.html"><img src="../../../globalassets/images/primary-icons/gold/hardware/gold-hardware-primary-icon-12.png" title="Online/Mobile Banking" alt="cell phone" border="0"></a>
            <div class="clearfix"></div>
                <span><a href="../online-and-mobile/index.html">Online/Mobile Banking</a></span>
            <div class="xhtml"><p>FREE, 24/7 account access &amp; administrative control with Bill Pay, eStatements, Mobile Deposit &amp; more</p></div>
        </div>

        </div>
    </div>
</div></div><div class="block b20block  col-md-12">


<!-- VIEW RATE / SPEED BUMP [2] -->
<script>
    $(document).ready(function () {
        if ($('#imgMainRight').length <= 0) {
            $('.b20consumer-loans-left').css('width', '100%');
        }
    });
</script>
<style>
    .pop_main_container_board .pop_main_container ol li ol li {  }
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
    @media only screen and (max-width: 767px)
    {
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

                <h2>Value-Based, Low Volume Checking</h2>


                    <div class="b20consumer-loans-right"><img id="imgMainRight" src="../../../contentassets/20d1b33a67b847c59161188c419ab9c4/2.1_b-20_guy-min.png" alt="male small business owner" class="img-responsive"></div>
        <div class="b20consumer-loans-left">
                            <div class="xhtml"><ul>
<li>Low Volume, No Interest Checking</li>
<li>Popular option for businesses with less activity and basic needs</li>
<li>No minimum monthly balance</li>
<li>No monthly maintenance fee with <a title="eStatements" href="../online-and-mobile/estatements/index.html">eStatements</a></li>
<li>150 free total transactions per statement cycle<sup>1</sup></li>
<li>Debit Mastercard<strong style="color: #222222; font-family: Roboto, arial, sans-serif; font-size: 16px;">&reg;</strong>&nbsp;with Zero Liability<strong style="color: #222222; font-family: Roboto, arial, sans-serif; font-size: 16px;">&reg;</strong> Protection</li>
<li>Access to 33,000 surcharge-free <a title="Moneypass ATMs" href="../../pages/quick-links/locations/index.html" target="_top">MoneyPass<strong style="color: #222222; font-family: Roboto, arial, sans-serif; font-size: 16px;">&reg;</strong> ATMs</a></li>
<li>FREE <a title="Online Banking" href="../online-and-mobile/index.html">Online and Mobile Banking</a>, <a title="Bill Pay" href="../online-and-mobile/bill-pay/index.html">Bill Pay</a> and more<br /><br /></li>
</ul></div>
                <br />
                            <div class="b20consumer_btn_center">
                                    <a href="low-volume/index.html" class="b20mainanchor">Learn More</a>
                                <span class="b20mainlinkspan">
<a class="b20mainlink" href="../../pages/about-us/teams/small-business-banking-team/index.html" title="CONTACT US">CONTACT US</a>                                </span>
                </div>
        </div>
        </div>
    </div>
</section>

<!-- View Rate [3] (within container)-->
<!-- View Rate [3] (within container)--></div><div class="block b61block  col-md-12">

<section class="row-full">
    <div class="b61first_premier_main">
        <div class="container">
            <div class="col-lg-12 b61firstpremier_box_main">
                <h1>ADDITIONAL ACCOUNT OPTIONS</h1>
                <div class="col-md-4 col-sm-6 b61anytime_box">
                    <a href="low-volume-plus-interest/index.html"><img src="../../../globalassets/images/secondary-icons/bright/business-finance/bright-business-_-finance-secondary-icon-15.png" alt="Low Volume + Interest" border="0" /></a>
                    <div class="clearfix"></div>
                    <span><a href="low-volume-plus-interest/index.html">Low Volume + Interest</a></span>
                    <p>Perfect for businesses with lower-volume transactions who want to earn interest on your balances.</p>
                </div>
                <div class="col-md-4 col-sm-6 b61anytime_box">
                    <a href="high-volume-plus-interest/index.html"><img src="../../../globalassets/images/secondary-icons/blue/business-finance/blue-business-_-finance-secondary-icon-2.png" alt="High Volume + Interest" border="0" /></a>
                    <div class="clearfix"></div>
                    <span><a href="high-volume-plus-interest/index.html">High Volume + Interest</a></span>
                    <p>Businesses with higher volume and higher balances can benefit from this interest bearing checking account.</p>
                </div>
                <div class="col-md-4 col-sm-6 b61anytime_box">
                    <a href="high-volume-plus-earnings-credit/index.html"><img src="../../../globalassets/images/secondary-icons/gold/business-finance/gold-business-_-finance-secondary-icon-6.png" alt="High Volume +<br>Earnings Credit" border="0" /></a>
                    <div class="clearfix"></div>
                    <span><a href="high-volume-plus-earnings-credit/index.html">High Volume +<br>Earnings Credit</a></span>
                    <p>Ideal for higher transaction volume and complex cash management needs.</p>
                </div>
<a class="compare_btn" href="compare-business-checking/index.html">Compare Accounts</a>            </div>
        </div>
    </div>
</section></div><div class="block b17block  col-md-12">﻿
<!-- VIEW RATE / SPEED BUMP [2] -->
<style>
    .pop_main_container_board .pop_main_container ol li ol li {  }
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

    .b17free_mobile_banking_left.right > img {
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
            <h2>Ready Cash Access & Spending Control</h2>

            <div class="b17free_mobile_banking_right">
                    <h3>FREE Debit Mastercard®</h3>
                                <div class="xhtml"><p>Instant purchasing power for authorized employees with built-in administrative controls and fraud protection you can trust. Issue cards to employees, set individual spending limits and monitor transactions with easy text and email alerts. Lock and unlock lost or stolen debit cards online. You&rsquo;ll also gain access to 33,000+ surcharge-free MoneyPass&reg; ATMs nationwide.&nbsp;</p></div>
                <div class="b17PayLinks payIcon-space">
                </div>

                <!-- Button and Footer Links go here ... -->
                                <a href="business-debit-mastercard/index.html" class="b17readmore">Learn More</a>
            </div>

                <div class="b17free_mobile_banking_left right">
                    <img class="img-responsive" id="imgMainImage" style="border-radius:50%" src="../../../contentassets/4eb7155f3f4f4baba9911912d692e3bf/business_debit_card_image.jpg" alt="First PREMIER Bank">
                </div>
        </div>
    </div>

        <div class="b15benfits_main_box b17cards">
            <div class="container">
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar">
                                <img src="../../../contentassets/01b0b73f8909477dabcc2d874337c4be/everfi-small-business.png" title="Small Business" alt="woman looking at credit card" width="116px" height="116px"></div>
                                <div class="b15avtar_content">
                                    <h3>Small Business</h3>
                                    <p>Learn about the fundamentals of financing a small business, including business plans, balance sheets and credit with our interactive module.</p>
                                    <div class="clearfix"></div><br />
                                            <a href="#" data-toggle="modal" data-target="#a52377312SR" data-backdrop="false" class="b15learnmore">LEARN MORE</a>
                                            <div id="a52377312SR" class="modal fade" role="dialog">
                                                <div class="modal-dialog pop_board">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="pop_main_container_board">
                                                                <button type="button" class="close" data-dismiss="modal" area-label="Close">
                                                                    <span aria-hidden="true">
                                                                        <img class="close_icon" src="../../../Static/img/closebutton-2.png" alt="First PREMIER Bank" style="height:17px !important; width:17px !important;" />
                                                                    </span>
                                                                </button>
                                                                <div class="pop_main_container">
                                                                        <h2>Small Business</h2>
                                                                    <div class="pop_board_white">
                                                                        <div class="row">
                                                                            <div class="col-md-12" style="padding-left:40px;">
                                                                                <h4 class="Blue">You will be leaving firstpremier.com</h4>
                                                                                <div class="b46Blue" style="text-align:left;">
                                                                                    <p>Please note, by clicking &ldquo;continue&rdquo; you will be redirected to a website that is not operated or controlled by PREMIER. PREMIER is not responsible for the content, links, privacy policy or security of that website. Your use of that website is subject to its terms of use and privacy policy. Thank you for visiting firstpremier.com. If you continue, we hope you find the information presented educational and useful.</p>
                                                                                    <p><br /><a href="https://firstpremier.everfi-next.net/student/dashboard/financialeducation-achieve/small-business-essentials" target="_blank">Continue</a></p>
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
                                <img src="../../../globalassets/images/secondary-icons/blue/business-finance/blue-business-_-finance-secondary-icon-35.png" title="Security &amp; Fraud Protection" alt="woman looking at credit card" width="116px" height="116px"></div>
                                <div class="b15avtar_content">
                                    <h3>Security &amp; Fraud Protection</h3>
                                    <p>Find out how First PREMIER helps protect you against fraud and how to protect your small business.</p>
                                    <div class="clearfix"></div><br />
                                            <a href="security-and-fraud-protection/index.html">LEARN MORE</a>
                                </div>
                            </div>
            </div>
        </div>

    <div id="a52377312" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_container">
                                <h2>Ready Cash Access &amp; Spending Control</h2>
                            <div class="pop_board_white">
                                <div class="row">
                                    <div class="col-md-12" style="padding-left:40px;">
                                        <h4 class="Blue"></h4>
                                        <div class="b46Blue" style="text-align:left;">

                                            <p><br /><a href="business-debit-mastercard/index.html" target="_blank"></a></p>
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
</script></div><div class="block b10block  col-md-12">

<section class="row-full">

    <!--First Premier work start-->
    <div class="b10first_premier_main">
        <div class="container">
            <div class="b10first_premier">
                    <h2>Why Bank with First PREMIER?</h2>
            </div>
            <div class="b10panel-group" id="accordion">
                <div class="b10panel b10panel-default"><div class="b10panel-heading"><h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse_0"><span> One of the Strongest Banks in the Nation </span></a></h3> </div> <div id="collapse_0" class="b10panel-collapse collapse "><div class="b10panel-body"><div class="xhtml"> <p>As a debt-free, privately owned $2 billion bank, First PREMIER is one of the strongest capitalized banks in the country. We ranked 17th in the nation for banks with more than $1 billion in assets by American Banker Magazine. We are consistently ranked as a top-performing banks for asset size by the American Banking Association's Banking Journal.</p></div> </div> </div> </div><div class="b10panel b10panel-default"><div class="b10panel-heading"><h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse_1"><span> Serving Businesses of Every Size </span></a></h3> </div> <div id="collapse_1" class="b10panel-collapse collapse "><div class="b10panel-body"><div class="xhtml"> <p>Our integrated business model bridges business banking with our treasury and asset management teams. We work together to provide market-leading banking, lending and treasury services solutions that are "right-sized" for business needs and flexible to scale for future growth.</p></div> </div> </div> </div><div class="b10panel b10panel-default"><div class="b10panel-heading"><h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse_2"><span> Personal Service & Local Decision Making </span></a></h3> </div> <div id="collapse_2" class="b10panel-collapse collapse "><div class="b10panel-body"><div class="xhtml"> <p>Our bankers take the time to learn about you. Once they understand your business goals, they will help you find the banking products and financial solutions that fit your needs today, and support you as your business grows.</p></div> </div> </div> </div><div class="b10panel b10panel-default"><div class="b10panel-heading"><h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse_3"><span> FREE Leading Edge Online & Mobile Tools </span></a></h3> </div> <div id="collapse_3" class="b10panel-collapse collapse "><div class="b10panel-body"><div class="xhtml"> <p>Our secure Online and Mobile Banking gives you 24/7 access over your accounts with multi-tiered security and administrative control. Enjoy great features including eStatements, Bill Pay, account alerts &amp; notifications, debit card lock and unlock, administrative controls and more! Our Debit Mastercard&reg; and Business Rewards Mastercard&reg; credit cards also work with mobile wallet technology. Best of all, First PREMIER Business Online and Mobile Banking are FREE of charge to First PREMIER Banking customers.</p></div> </div> </div> </div><div class="b10panel b10panel-default"><div class="b10panel-heading"><h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse_4"><span> Locally Grown, Nationally Known </span></a></h3> </div> <div id="collapse_4" class="b10panel-collapse collapse "><div class="b10panel-body"><div class="xhtml"> <p>We serve local, regional and national clients with pride. First PREMIER is the 14th largest ACH Originating Bank in the USA and the 12th largest issuer of Mastercard&reg; in the country. We are also honored to have served as the bank for the State of South Dakota for 20+ years (1999), as well as the bank for the City of Sioux Falls for 15+ years (2004).</p></div> </div> </div> </div><div class="b10panel b10panel-default"><div class="b10panel-heading"><h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse_5"><span> A Champion for Customers & Community </span></a></h3> </div> <div id="collapse_5" class="b10panel-collapse collapse "><div class="b10panel-body"><div class="xhtml"> <p>We serve our local, regional and national clients with pride and personal customer care. We are active supporters of more than 600 charities and non-profits. Last year alone, our associates contributed over 32,000 hours of community service. We also take care of our employees. From 2015-2020, we were ranked as one of the Best Banks to Work For by American Banker and Best Companies Group.</p></div> </div> </div> </div>
            </div>


        </div>

    </div>
    <!--First Premier work end-->
</section>
</div><div class="block b13block  col-md-12">

<style>

    .b13what_you_know_main ol li p { padding: 0 10px 0 34px; list-style: none;  margin: 0px 0px 0px 0px; font-size:14px; text-align:left;}
    .b13what_you_know_main ol li { width:100% }
    .b13what_you_know_main ol li ol li{ width:50%; }
    .b13what_you_know_main_white ol li ol li { width:50%; }
</style>
<script>
    $(document).ready(function () {
        //GetDisclosurePoints();
        GetDisclosurePointsBrackets();
    });
</script>
<section class="row-full">
        <div class="b13what_you_know_main">
            <div class="container" style="background-color:#182e39 !important;">

                <h4> Disclosures </h4>
                <div class="b13points">
                    <p>{1} First PREMIER Bank will assess a cost-per-excess transaction fee over transactions allowed per statement cycle. First PREMIER Bank will assess a withdrawal charge of $0.20 per item. "Withdrawal" refers to any transaction whether initiated in person, by check, draft or similar paper instrument, or any transaction initiated electronically through electronic funds transfer. Withdrawal fees to not apply to transactions made using a First PREMIER Bank Debit Card, transactions initiated through wire transfer, transactions initiated through Online Bill Payment, or transfers initiated through Business Online Banking. First PREMIER Bank will assess a withdrawal charge of $0.20 per item. &ldquo;Deposit" refers to all deposit transactions. Deposits do not include transactions made at an ATM, through Remote Deposit or Mobile Deposit, or transfers made through Business Online Banking.&nbsp;"Transaction" refers to any combination of items, paid or unpaid, including paper and electronic.</p>
<p>{2} At our discretion, we may change the interest rate daily. Interest is calculated using the daily balance method. Interest is compounded.</p>
<p>{3} Interest not paid for the days the balance falls below $500.</p>
                </div>
            </div>
        </div>
</section></div></div>



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
            <a href="../index.html">Small Business</a>
        </li>

        <li>
            <a href="../../commercial/index.html">Commercial</a>
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
            <a href="../../pages/resources/first-premier-privacy-statement-2020/index.html">Privacy Notice &amp; Statement</a>
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
 <p>Member FDIC | <img src="../../../Static/img/equalhousinglender.png" alt="Equal Housing Lender" title="Equal Housing Lender" />Equal Housing Lender</p>            </div>
        </div>
    </div>
</div>
<style>
    /* CHROME SAFARI FIX */
    .form-control:hover, .form-control:active, .form-control:focus { box-shadow: none !important; -moz-box-shadow: none !important; -webkit-box-shadow: none !important; }
    .form-control:hover, .form-control:active, .form-control:focus { box-shadow: none !important; -moz-box-shadow: none !important; -webkit-box-shadow: none !important; }
    a:focus, a:active {outline:none!important; border: none!important; }
    input:focus, input:active { outline: none !important; }
    textarea:focus { outline: none !important; }
    button:focus, button:active { outline: none !important; border: none !important; }
    .showehllogo { background: url('../../../Static/img/EHLlogo%20white.png') 230px 0px no-repeat; background-size: 24px 24px }
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
</script>    </div>
    <div class="smallLogo"><a href="../../index.html" title="First PREMIER Bank - Home"><img src="../../../Static/gfx/Logo.png" style="max-width:100%;" /></a></div>
    <script type="text/javascript" src="../../../../dl.episerver.net/13.4.4.1/epi-util/find.js"></script>
<script type="text/javascript">
if(FindApi){var api = new FindApi();api.setApplicationUrl('../../../index.html');api.setServiceApiBaseUrl('../../../find_v2/index.html');api.processEventFromCurrentUri();api.bindWindowEvents();api.bindAClickEvent();api.sendBufferedEvents();}
</script>

    <script type="text/javascript" src="../../../Static/js/pushy.js"></script>
    <script type="text/javascript" src="../../../Static/js/Blocks_2019062002.js"></script>
@endsection
