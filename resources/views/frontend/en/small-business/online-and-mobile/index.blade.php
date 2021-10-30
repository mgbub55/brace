

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
            $('.b19landingpage').css('background', 'url(/Static/img/svg/green-1.svg) no-repeat');
        }
    });

    $(window).resize(function () {
        if (screen.width < 767) {
            $('.b19landingpage').css('height', '628px');
            $('.b19landingpage').css('background', '');
            $('.b19landingpage').css('background-color', '#1b3e43');
        }
        else {
            $('.b19landingpage').css('background', 'url(/Static/img/svg/green-1.svg) no-repeat');
        }
    });

</script>


<div class="b19landingpage row-full" style="padding-bottom:0px;">
    <div class="container">
        <h1>Online &amp; Mobile Banking</h1>
        <div class="xhtml"></div>
        <div class="b19landingpage_box_main">

        <div class="col-md-4 col-sm-6 b19landingpage_box">
            <a href="online-banking/index.html"><img src="../../../globalassets/images/primary-icons/blue/hardware/blue-hardware-primary-icon-11.png" title="FREE Online Banking" alt="computer monitor" border="0" /></a>
            <div class="clearfix"></div>
                <span><a href="online-banking/index.html">FREE Online Banking</a></span>
            <div class="xhtml"><p>Get 24/7 account access, administrative control, eStatements, Bill Pay, debit card lock/unlock, and more.</p></div>
        </div>

        <div class="col-md-4 col-sm-6 b19landingpage_box">
            <a href="mobile-banking/index.html"><img src="../../../globalassets/images/primary-icons/gold/hardware/gold-hardware-primary-icon-12.png" title="FREE Mobile Banking" alt="mobile phone" border="0"></a>
            <div class="clearfix"></div>
                <span><a href="mobile-banking/index.html">FREE Mobile Banking</a></span>
            <div class="xhtml"><p>Extend access to the palm of your hand with our Mobile Banking app, with FREE Mobile Deposit.</p></div>
        </div>

        <div class="col-md-4 col-sm-6 b19landingpage_box">
            <a href="../business-services/make-payments/index.html"><img src="../../../globalassets/images/primary-icons/bright/business-finance/bright-business-_-finance-primary-icon-22.png" title="ACH Online" alt="chart pie graph" border="0"></a>
            <div class="clearfix"></div>
                <span><a href="../business-services/make-payments/index.html">ACH Online</a></span>
            <div class="xhtml"><p>Accept payments, make payments and manage payroll with our turnkey, self-service, affordable solution.</p></div>
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

                <h2>Business Online Banking</h2>


        <div class="b20consumer-loans-left b20showright"  style="float:right;">
            
                            <div class="xhtml"><ul>
<li>Free 24/7 account access and control</li>
<li>Check balances, transfer funds and&nbsp;pay bills</li>
<li>Access eStatements with PDF Download</li>
<li>Administer access for multiple, authorized users</li>
<li>Monitor balances and transactions with email and text alerts</li>
<li>Suspend and activate lost or stolen debit cards</li>
<li>Initiate stop payments and wire transfers</li>
</ul>
<p>&nbsp;</p></div>
                <br />

            <div class="b20consumer_btn_center">
                <!-- b20mainanchorL -->
                                <a href="index.html" class="b20mainanchorL">Learn More</a>
            </div>
        </div>
                    <div class="b20consumer-loans-right"><img id="imgMainRight" alt="man on tablet in garden" src="../../../contentassets/3397e0a94ad643d6be85f25920edaf0e/2.2_b-20alt-1_farm-min.png" class="img-responsive"></div>
        </div>
    </div>
</section>

<!-- View Rate [3] (within container)-->
<!-- View Rate [3] (within container)--></div><div class="block b20block  col-md-12">


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

                <h2>Mobile Banking</h2>


                    <div class="b20consumer-loans-right"><img id="imgMainRight" src="../../../contentassets/fcee96bedd674616a3f3374766ddf4af/2.2_b-20alt-2_woman-min.png" alt="female on tablet" class="img-responsive"></div>
        <div class="b20consumer-loans-left">
                            <div class="xhtml"><ul>
<li>Enjoy all the features of online banking</li>
<li>Transfer funds, pay bills, view statements, checks and more</li>
<li>Monitor spending with easy text and email account alerts</li>
<li>Deposit checks fast using free&nbsp;<a href="mobile-deposit/index.html">Mobile Deposit</a></li>
</ul>
<p>&nbsp;</p></div>
                <br />
                            <div class="b20consumer_btn_center">
                                <a href="mobile-banking/index.html" class="b20mainanchor">Learn More</a>
                </div>
        </div>
        </div>
    </div>
</section>

<!-- View Rate [3] (within container)-->
<!-- View Rate [3] (within container)--></div><div class="block b20block  col-md-12">


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

                <h2>ACH Online</h2>


        <div class="b20consumer-loans-left b20showright"  style="float:right;">
            
                            <div class="xhtml"><ul>
<li>Automated Clearing House for Small Business</li>
<li>Turnkey, self-service solution for payables and receivables</li>
<li>Schedule and manage outbound vendor and tax payments</li>
<li>Manage payroll and expense reimbursement</li>
<li>Set up recurring customer payments with ease</li>
<li>Expedite payments to increase cash flow</li>
</ul>
<p>&nbsp;</p></div>
                <br />

            <div class="b20consumer_btn_center">
                <!-- b20mainanchorL -->
                                <a href="../business-services/make-payments/index.html" class="b20mainanchorL">Learn More</a>
            </div>
        </div>
                    <div class="b20consumer-loans-right"><img id="imgMainRight" alt="man working in shop" src="../../../contentassets/bdefe566716e4bf5a1b5a8064788cb31/2.2_b-20alt-3_working-min.png" class="img-responsive"></div>
        </div>
    </div>
</section>

<!-- View Rate [3] (within container)-->
<!-- View Rate [3] (within container)--></div><div class="block b20block  col-md-12">


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

                <h2>Remote Deposit</h2>


                    <div class="b20consumer-loans-right"><img id="imgMainRight" src="../../../contentassets/5a179d0990c1493fbc2dd3b5c3175318/2.2.1_b17_checkdesktopthng.png" alt="credit card reader" class="img-responsive"></div>
        <div class="b20consumer-loans-left">
                            <div class="xhtml"><ul>
<li>For higher volume check deposits</li>
<li>Remotely scan and deposit checks</li>
<li>No manual deposit prep - no trip to the bank</li>
<li>Our desktop scanner securely scans and tallies your deposit</li>
<li>Secure and automated platform</li>
<li>High accuracy and high quality check imaging</li>
<li>Faster deposits improve cash flow</li>
</ul>
<p>&nbsp;</p></div>
                <br />
                            <div class="b20consumer_btn_center">
                                <a href="../business-services/remote-deposit/index.html" class="b20mainanchor">Learn More</a>
                </div>
        </div>
        </div>
    </div>
</section>

<!-- View Rate [3] (within container)-->
<!-- View Rate [3] (within container)--></div><div class="block b17block  col-md-12">﻿
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
            <h2>Mobile Wallet</h2> 

            <div class="b17free_mobile_banking_right">
                    <h3><p>Faster Checkout with Your Mobile Device</p></h3>
                                <div class="xhtml"><p>Speed your way through checkout by linking your First PREMIER Bank Debit Mastercard&reg; to popular mobile wallet apps and streamline checkout with your phone or mobile device. We support:</p>
<ul>
<li>&nbsp;<a title="Samsung Pay" href="mobile-wallet/samsung-pay/index.html">Samsung Pay</a></li>
<li>&nbsp;<a title="Android Pay" href="mobile-wallet/google-pay/index.html">Google Pay</a></li>
<li>&nbsp;<a title="Apple Pay" href="mobile-wallet/apple-pay/index.html">Apple Pay</a></li>
</ul></div>
                <div class="b17PayLinks payIcon-space">
<a href="https://www.apple.com/apple-pay/"><img src="../../../Static/img/PayIcons/apple-pay-icon.png" border="0" /></a><a href="https://pay.google.com/about/"><img src="../../../Static/img/PayIcons/android-pay-icon.png" border="0" class="payIcon" /></a><a href="https://www.samsung.com/us/samsung-pay/"><img src="../../../Static/img/PayIcons/samsung-pay-icon.png" border="0" class="payIcon" /></a>                </div>

                <!-- Button and Footer Links go here ... -->
                                <a href="mobile-wallet/index.html" class="b17readmore">Learn More</a>
            </div>

                <div class="b17free_mobile_banking_left right">
                    <img class="img-responsive" id="imgMainImage" style="border-radius:50%" src="../../../contentassets/b140f48dc3fa4b7491e42cd9f6169bfb/fpb_mobile_wallet.png" alt="First PREMIER Bank">
                </div>
        </div>
    </div>


    <div id="a31917527" class="modal fade" role="dialog">
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
                                <h2>Mobile Wallet</h2>
                            <div class="pop_board_white">
                                <div class="row">
                                    <div class="col-md-12" style="padding-left:40px;">
                                        <h4 class="Blue"></h4>
                                        <div class="b46Blue" style="text-align:left;">
                                            
                                            <p><br /><a href="mobile-wallet/index.html" target="_blank"></a></p>
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
</script></div><div class="block b12block  col-md-12">        <style>
            .b12faq_main { float: left; width: 100%; padding:100px 0px 50px 0px !important; text-align: left; background: #fff; }
        </style>
        <div class="b12faq_main">
            <div class="b12container">
                <h2>Frequently Asked Questions</h2>
                <!-- tabs left -->
                <div class="tabbable">
                    <div class="tab-content col-md-7">
                        <div class="tab-pane active" id="A"><span>What is Online Banking?</span><p><p>Online Banking is a FREE service that allows you to access your First PREMIER Bank account information 24 hours a day, 7 days a week. With Online Banking, you can view transactions made on your accounts, transfer funds between accounts, make payments to certain types of loans, and even export account information to software like Microsoft Money&reg; or Quicken&reg;.</p></p></div><div class="tab-pane" id="B"><span>Do I need to enroll for Online Banking before enrolling in Mobile Banking?</span><p><p>No, you can download our Mobile Banking App from one of the App Stores and enroll directly by choosing the "For New Online Customer Enrollment Only" link.</p></p></div><div class="tab-pane" id="C"><span>How often is my account information updated within Online Banking?</span><p><p>Debit card transactions and ATM activity will reflect as a pending transaction&nbsp;near real-time&nbsp;within online banking. All other account activity will update nightly Monday through Friday, with the exception of Federal holidays.</p></p></div>
                    </div>
                    <ul class="nav nav-pills nav-stacked col-md-5">
                        <li class="active"><a href="#A" data-toggle="tab">What is Online Banking?</a></li><li><a href="#B" data-toggle="tab">Do I need to enroll for Online Banking before enrolling in Mobile Banking?</a></li><li><a href="#C" data-toggle="tab">How often is my account information updated within Online Banking?</a></li>
                    </ul>
                </div>
            </div>
        </div>

</div><div class="block b26block  col-md-12">



<style>
    .carousel-control:focus, .carousel-control:hover, .carousel-control.left, .carousel-control.right {
        background: none !important;
    }
    .b26line_credit_main .carousel-inner { min-height:520px !important;; }
    
    .white-background h2, .white-background .xhtml, .white-background .xhtml p,
    .grey-background h2, .grey-background .xhtml, .grey-background .xhtml p
    {
        color: #000;
    }
</style>
<script>
    var alternateBackground = "False";
    $(document).ready(function () {
        $('#myCarousel-').carousel({
            interval: 16000
        })

        if (alternateBackground.toLowerCase() == "true") {
            $("#b26linecredit").addClass("alternate_background");
        } else {
            $("#b26linecredit").addClass("primary_background");
        }
    });

</script>

<section class="row-full">
    <div class="b26line_credit_main" id="b26linecredit">
        <div class="container">

                <h2>You May Also Be Interested In</h2>


            <div class="row">
                <div class="col-md-12 hidden-xs hidden-sm">
                    <div class="carousel" id="myCarousel-" data-interval="false">
                        <div class="carousel-inner">
                            <div class='item active'><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad'><div class='b26line_credit_loans_left'><img src='../../../globalassets/ymabii/small-business/b-17-promo-01-finance-growth.png' alt='man and woman looking at report'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Finance Growth</h3></div><h3><br clear='all'/><div class="xhtml"><p>We offer business lines of credit, term loans of any size and commercial real estate lending.</p>
<ul>
<li><a href="../loans-and-credit-lines/small-business-loans/index.html">Business Loans</a></li>
<li><a href="../loans-and-credit-lines/business-lines-of-credit/index.html">Business Lines of Credit</a></li>
<li><a href="../business-services/business-rewards-mastercard/index.html">Business Rewards Mastercard</a>&reg;</li>
</ul></div></h3></div></div><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans b26line_personal_loans no-pad'><div class='b26line_credit_loans_left'><img src='../../../globalassets/ymabii/small-business/b-17-promo-01-smb-manage-assets.png' alt='group of people sitting in circle'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Manage Assets</h3></div><h3><br clear='all'/><div class="xhtml"><p>Look after your assets, invest wisely and plan for the future by putting your funds to work for you.</p>
<ul>
<li><a href="../asset-management-and-trust/business-planning-investment/index.html">Business Planning &amp; Investing</a></li>
<li><a href="../asset-management-and-trust/employee-benefits/index.html">Employee Benefits</a></li>
<li><a href="../asset-management-and-trust/business-trust-services/index.html">Business Trust Services</a></li>
</ul></div></h3></div></div><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad last'><div class='b26line_credit_loans_left'><img src='../../../globalassets/ymabii/small-business/b-17-promo-01-business-services.png' alt='female writing report'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Business Services</h3></div><h3><br clear='all'/><div class="xhtml"><p>Manage cash, make and accept payments with our turnkey suite of business services.</p>
<ul>
<li><a href="../business-services/make-payments/index.html">Make Payments</a></li>
<li><a href="../business-services/accept-payments/index.html">Accept Payments</a></li>
<li><a href="../business-services/merchant-card-services/index.html">Merchant Card Services</a></li>
</ul></div></h3></div></div></div>
                        </div>
                    </div>
                </div>
                <div class="b26Mobile col-sm-6 hidden-md hidden-lg" style="left:-8px;">
                    <center>
                    <div class="b26MobileCard" style="width:345px;min-height:700px;">
                        <div class='item'><div class='col-xs-12 col-sm-12 b26AltClass b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../globalassets/ymabii/small-business/b-17-promo-01-finance-growth.png' alt='man and woman looking at report'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Finance Growth</h3></div><h3><br clear='all'/><div class="xhtml"><p>We offer business lines of credit, term loans of any size and commercial real estate lending.</p>
<ul>
<li><a href="../loans-and-credit-lines/small-business-loans/index.html">Business Loans</a></li>
<li><a href="../loans-and-credit-lines/business-lines-of-credit/index.html">Business Lines of Credit</a></li>
<li><a href="../business-services/business-rewards-mastercard/index.html">Business Rewards Mastercard</a>&reg;</li>
</ul></div></h3></div></div></div><div class='item'><div class='col-xs-12 col-sm-12 b26AltClass b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../globalassets/ymabii/small-business/b-17-promo-01-smb-manage-assets.png' alt='group of people sitting in circle'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Manage Assets</h3></div><h3><br clear='all'/><div class="xhtml"><p>Look after your assets, invest wisely and plan for the future by putting your funds to work for you.</p>
<ul>
<li><a href="../asset-management-and-trust/business-planning-investment/index.html">Business Planning &amp; Investing</a></li>
<li><a href="../asset-management-and-trust/employee-benefits/index.html">Employee Benefits</a></li>
<li><a href="../asset-management-and-trust/business-trust-services/index.html">Business Trust Services</a></li>
</ul></div></h3></div></div></div><div class='item'><div class='col-xs-12 col-sm-12 b26AltClass b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../globalassets/ymabii/small-business/b-17-promo-01-business-services.png' alt='female writing report'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Business Services</h3></div><h3><br clear='all'/><div class="xhtml"><p>Manage cash, make and accept payments with our turnkey suite of business services.</p>
<ul>
<li><a href="../business-services/make-payments/index.html">Make Payments</a></li>
<li><a href="../business-services/accept-payments/index.html">Accept Payments</a></li>
<li><a href="../business-services/merchant-card-services/index.html">Merchant Card Services</a></li>
</ul></div></h3></div></div></div>
                    </div>
                    </center>
                </div>

            </div>
        </div>
    </div>
</section>


</div></div>

 

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