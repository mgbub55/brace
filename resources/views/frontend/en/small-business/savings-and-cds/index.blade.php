

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
        <h1>Business Savings &amp; CDs</h1>
        <div class="xhtml"></div>
        <div class="b19landingpage_box_main">

        <div class="col-md-4 col-sm-6 b19landingpage_box">
            <a href="premier-money-market/index.html"><img src="../../../globalassets/images/primary-icons/blue/business-finance/blue-business-_-finance-primary-icon-11.png" title="PREMIER Money Market" alt="growth chart" border="0" /></a>
            <div class="clearfix"></div>
                <span><a href="premier-money-market/index.html">PREMIER Money Market</a></span>
            <div class="xhtml"><p>Maximize available cash and earn higher interest on higher balances.</p></div>
        </div>

        <div class="col-md-4 col-sm-6 b19landingpage_box">
            <a href="regular-business-savings/index.html"><img src="../../../globalassets/images/primary-icons/bright/business-finance/bright-business-_-finance-primary-icon-41.png" title="Regular Savings" alt="piggy bank" border="0"></a>
            <div class="clearfix"></div>
                <span><a href="regular-business-savings/index.html">Regular Savings</a></span>
            <div class="xhtml"><p>Build savings with interest for later use or investment.</p></div>
        </div>

        <div class="col-md-4 col-sm-6 b19landingpage_box">
            <a href="certificates-of-deposit/index.html"><img src="../../../globalassets/images/primary-icons/gold/business-finance/gold-business-_-finance-primary-icon-23.png" title="Certificate of Deposit" alt="certificate of deposit" border="0"></a>
            <div class="clearfix"></div>
                <span><a href="certificates-of-deposit/index.html">Certificate of Deposit</a></span>
            <div class="xhtml"><p>Lock in a great rate on a shorter or longer term certificates of deposit.</p></div>
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

                <h2>PREMIER Money Market Savings</h2>


                    <div class="b20consumer-loans-right"><img id="imgMainRight" src="../../../contentassets/62b9de19b10c4eb194ca475e54555654/3.2_b-20_dentist-min.png" alt="dentist smiling" class="img-responsive"></div>
        <div class="b20consumer-loans-left">
                            <div class="xhtml"><ul>
<li>Maximize available cash in an FDIC-insured environment</li>
<li>Earn tiered variable interest<sup>1</sup></li>
<li>Opening minimum deposit of $500</li>
<li>No minimum balance required&nbsp;</li>
<li>Write checks from your account<sup>2</sup></li>
<li>Transfer or withdraw funds with ease<sup>2</sup>&nbsp;</li>
<li>Available <a title="Overdraft Protection" href="../business-checking/overdraft-protection/index.html">Overdraft Protection</a> for First PREMIER Checking<sup>3</sup><br /><br /></li>
</ul></div>
                <br />
                            <div class="b20consumer_btn_center">
                                <a href="../../pages/about-us/teams/small-business-banking-team/index.html" class="b20mainanchor">Contact Us</a>
                </div>
        </div>
        </div>
    </div>
</section>

<!-- View Rate [3] (within container)-->
<!-- View Rate [3] (within container)--></div><div class="block b22block  col-md-12">
    <section class="row-full">

        <div class="b22additional-lending">
            <div class="container" style="">
                    <h4 class="Blue">More Savings Options</h4>
                <div class="b22additional-lending-left">
                    <h3>Business Savings</h3>
                    <div class="xhtml"><p>Build savings and keep available funds within reach by placing residual cash into this FDIC-insured, interest-bearing savings account.</p></div>
                        <a href="regular-business-savings/index.html">Learn More</a>
                </div>

                <div class="b22additional-lending-righ">
                    <h3>Certificates of Deposit (CD)</h3>
                    <div class="xhtml"><p>For longer-term savings, lock in a competitive rate on FDIC-insured CDs and guarantee your rate of return.</p></div>
                        <a href="certificates-of-deposit/index.html">Learn More</a>
                </div>
            </div>
            <div class="b22spacer"></div>
        </div>
        <div id="a6898236" class="modal fade" role="dialog">
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
                                <div class="pop_board_white">
                                    <div class="row">
                                        <div class="col-md-12" style="padding-left:40px;">
                                            <h4 class="Blue"></h4>
                                            <div class="b46Blue" style="text-align:left;">
                                                
                                                <p><br /><a href="regular-business-savings/index.html" target="_blank"></a></p>
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
        <div id="b6898236" class="modal fade" role="dialog">
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
                                <div class="pop_board_white">
                                    <div class="row">
                                        <div class="col-md-12" style="padding-left:40px;">
                                            <h4 class="Blue"></h4>
                                            <div class="b46Blue" style="text-align:left;">
                                                
                                                <p><br /><a href="certificates-of-deposit/index.html" target="_blank"></a></p>
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
    </section></div><div class="block b12block  col-md-12">        <style>
            .b12faq_main { float: left; width: 100%; padding:100px 0px 50px 0px !important; text-align: left; background: #fff; }
        </style>
        <div class="b12faq_main">
            <div class="b12container">
                <h2>Frequently Asked Questions</h2>
                <!-- tabs left -->
                <div class="tabbable">
                    <div class="tab-content col-md-7">
                        <div class="tab-pane active" id="A"><span>How do I apply for a business checking or savings account?</span><p><p>For your security, a Business account must be opened at a First PREMIER Bank location.</p></p></div><div class="tab-pane" id="B"><span>What information do I need to open a new business account?</span><p><p>If you plan to open a new account, please provide your Name, Address, Date of Birth, Social Security Number, and copy of a valid government photo ID, as well as corporate documents and bring them with you to the bank. You may also provide the information ahead of time and set up an appointment with a banker.</p></p></div>
                    </div>
                    <ul class="nav nav-pills nav-stacked col-md-5">
                        <li class="active"><a href="#A" data-toggle="tab">How do I apply for a business checking or savings account?</a></li><li><a href="#B" data-toggle="tab">What information do I need to open a new business account?</a></li>
                    </ul>
                </div>
            </div>
        </div>

</div><div class="block b10block  col-md-12">

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
</div><div class="block b25block  col-md-12">
<script>
    $(document).ready(function () {

        if ('/globalassets/images/backgrounds/blue-1.jpg' != 'null' && '/globalassets/images/backgrounds/blue-1.jpg' != '') {
            $(".b25disclosure").css("background", "#245251 url(/globalassets/images/backgrounds/blue-1.jpg) no-repeat");
            if (screen.width > 1000) {
                $(".b25need_help_main").css("background", "#245251 url(/globalassets/images/backgrounds/blue-1.jpg) no-repeat");
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
    @media only screen and (max-width:1024px){
        .b25need_help_main {background-color:#245251 !important;}
        .page-about-us .b25need_help_main, .parent-5384 .b25need_help_main { background-color:#1f3848 !important; }
    }
</style>
<section class="row-full">

        <div class="b25need_help_main">
            <div class="container">
                <h2 class="White">Get Started Today</h2>
                <div class="xhtml"><p>Whether you&rsquo;re starting from scratch or transferring your account, our Business Bankers can help you select a checking account to support your business needs.</p></div>
                <div class="b25bottom" style="">
                    <center>
                    <a href="../../pages/about-us/teams/small-business-banking-team/index.html" class="b25mainanchor">Contact Us</a><br clear="all"/>
                    </center>
                </div>
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
            <h2>Ensure Funds are in Place to Cover Transactions</h2> 

            <div class="b17free_mobile_banking_right">
                    <h3>Overdraft Protection</h3>
                                <div class="xhtml"><p>Use your First PREMIER Bank Business Savings, Money Market, or credit line to protect your business checking account from overdraft<sup>3</sup>. It&rsquo;s a great way to make sure funds are in place to cover transactions and avoid expensive overdraft charges.</p></div>
                <div class="b17PayLinks payIcon-space">
                </div>

                <!-- Button and Footer Links go here ... -->
                                <a href="../business-checking/overdraft-protection/index.html" class="b17readmore">Learn More</a>
            </div>

                <div class="b17free_mobile_banking_left right">
                    <img class="img-responsive" id="imgMainImage" style="border-radius:50%" src="../../../contentassets/e26efb4f7a834456ad2812d9964c1ee3/3.2_b-17-promo_team-min.png" alt="First PREMIER Bank">
                </div>
        </div>
    </div>


    <div id="a24376750" class="modal fade" role="dialog">
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
                                <h2>Ensure Funds are in Place to Cover Transactions</h2>
                            <div class="pop_board_white">
                                <div class="row">
                                    <div class="col-md-12" style="padding-left:40px;">
                                        <h4 class="Blue"></h4>
                                        <div class="b46Blue" style="text-align:left;">
                                            
                                            <p><br /><a href="../business-checking/overdraft-protection/index.html" target="_blank"></a></p>
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
</script></div><div class="block b22block  col-md-12">
    <section class="row-full">

        <div class="b22additional-lending">
            <div class="container" style="">
                    <h4 class="Blue">More Savings Options</h4>
                <div class="b22additional-lending-left">
                    <h3>Treasury Services</h3>
                    <div class="xhtml"><p>Manage cash, integrate receivables, manage payables and disbursements with our turnkey suite of services.</p></div>
                        <a href="../../commercial/treasury-services/index.html">Learn More</a>
                </div>

                <div class="b22additional-lending-righ">
                    <h3>Business Online Banking</h3>
                    <div class="xhtml"><p>24/7 account access and control with FREE eStatements, Bill Pay, Debit Card lock/unlock and more.</p></div>
                        <a href="../online-and-mobile/online-banking/index.html">Learn More</a>
                </div>
            </div>
            <div class="b22spacer"></div>
        </div>
        <div id="a57993284" class="modal fade" role="dialog">
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
                                <div class="pop_board_white">
                                    <div class="row">
                                        <div class="col-md-12" style="padding-left:40px;">
                                            <h4 class="Blue"></h4>
                                            <div class="b46Blue" style="text-align:left;">
                                                
                                                <p><br /><a href="../../commercial/treasury-services/index.html" target="_blank"></a></p>
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
        <div id="b57993284" class="modal fade" role="dialog">
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
                                <div class="pop_board_white">
                                    <div class="row">
                                        <div class="col-md-12" style="padding-left:40px;">
                                            <h4 class="Blue"></h4>
                                            <div class="b46Blue" style="text-align:left;">
                                                
                                                <p><br /><a href="../online-and-mobile/online-banking/index.html" target="_blank"></a></p>
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
    </section></div><div class="block b13block  col-md-12">

<style>

    .b13what_you_know_main ol li p { padding: 0 10px 0 34px; list-style: none;  margin: 0px 0px 0px 0px; font-size:14px; text-align:left;}
    .b13what_you_know_main ol li { width:100% }
    .b13what_you_know_main ol li ol li{ width:100%; }
    .b13what_you_know_main_white ol li ol li { width:100%; }
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
                
                <h4> DISCLOSURES </h4>
                <div class="b13points">
                    <p>{1} At our discretion, we may change the interest rate daily. Interest is calculated using the daily balance method. Interest is compounded monthly and credited monthly.</p>
<p>{2} Savings withdrawals are generally limited to six per month. You may make an unlimited number of withdrawals when made in person, by mail or at an automated teller machine (ATM). If the monthly withdrawal limit is exceeded, a fee of $1 for each excess withdrawal will be assessed. Fees can reduce earnings on the account.&nbsp;</p>
<p>{3} Overdraft Protection: A $12 Overdraft Protection Transfer Fee may be assessed every time the bank automatically transfers the available funds from First PREMIER Money Market and Business Savings Accounts. This fee does not apply to any manual transfer, completed online, in person or by calling Customer Care.&nbsp;There is no limit on the total fees we can charge you for overdrawing your account.</p>
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