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
<div class="row equal-height"><div class="block b46block  col-md-12">

<style>
    .b46mainlinkspan { height:50px; margin-top:24px; text-align:center;width:100%;}
    .b46mainlink { color: #268d6e; background: url(../../../../Static/img/CustomBlocks/B20/arrow_green.png) no-repeat right 3px; padding: 0px 15px 0px 25px; vertical-align:text-bottom; margin-right: 20px; letter-spacing:1px; }
    .b46mainanchor { color: #268d6e; background: url(../../../../Static/img/CustomBlocks/B20/arrow_green.png) no-repeat right 3px; float:left; padding: 0px 15px 0px 25px; vertical-align:text-bottom; letter-spacing:1px; }
    .b46multianchor { text-align:center; }
    .b46multianchor ul { display:inline-block; margin:0; padding:0; /* For IE, the outcast */ zoom:1; *display:inline;}
    .b46multianchor li { float:left; padding:2px 5px; }
    .b46productpage h5 > p {  }
</style>
<style>
    .pop_main_container_board .pop_main_container ol li ol li {  }
    .b46productpage { float:left; width:100%; padding:80px 0px 50px 0px; text-align:center; background:#fff url(../../../../globalassets/images/backgrounds/grey-2.svg) no-repeat;}
</style>
<section class="row-full">
    <div class="b46productpage">
        <div class="container">
            <h1>eStatements</h1>
                <img src="../../../../contentassets/3c111fc78e904d4b8442dcae47c4df89/2.2.2_b-46-hero_women.png" alt="First PREMIER Bank">
                            <h2>Paperless, Secure Statements for Business</h2>
            <p>A feature of Online Banking, eStatements offer a faster and more efficient way to reconcile accounts.&nbsp;</p>



        </div>
    </div>
</section></div><div class="block b16block  col-md-12">

<!-- VIEW RATE / SPEED BUMP [2] -->
<style>
    /* Changes to Functionality -> Adding the ability to add one or more links after the main button */
    .b16basic_box_left a.b16readmore { display: inline-block; letter-spacing: 1px; background: #42967d; color: #fff; font-size: 13px; font-family: 'Prompt-Bold'; text-transform: uppercase; padding: 12px 60px; border-radius: 50px; margin-top: 25px; margin-bottom: 0px; margin-right: 30px; text-align: center; margin-left:20px !important;}
    .b16basic_box_left a.b16readmore:hover { text-decoration: none; }
    .b16confidence_links a { text-transform: uppercase; letter-spacing: 1px; font-family: 'Prompt-SemiBold'; font-size: 13px; margin-top: 10px; color: #42967d; padding-right: 12px;    background: url(../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center; }
    .b16confidence_links_multiple { float:left; padding-left:30px; }
    .b16confidence_links_multiple ul { display:inline-block; margin:0; padding-top:10px; /* For IE, the outcast */ zoom:1; *display:inline; }
    .b16confidence_links_multiple li { float:left; padding:2px 5px; margin-right:20px; }
    .b16confidence_links_multiple li > a { text-transform: uppercase; letter-spacing: 1px; font-family: 'Prompt-SemiBold'; font-size: 13px; margin-top: 10px; color: #42967d; padding-right: 12px; background: url(../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center; }

    /* CHANGING SHADING FUNCTIONALITY */
    /*.b16wrapper{ min-height:455px;}*/
    .b16wrapper{ min-height:400px;}
    .b16wrapper .FirstBlock { width: 100%; background-color: #f9f9f9; height: 70px; position: absolute; bottom: -24px; z-index: 1; overflow:hidden; }
    .ThirdBlock{ width:100%; background-color:#f9f9f9; height:70px; position:relative; z-index:2; }
    .b16basic_box_right { position:relative; z-index:99; }
    .b16basic_box_background{ margin-bottom:14px; }
    .b16basic_box_left { padding-left:100px; }
    .b16basic_box_left h2 { padding-top: 35px; }
    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml { padding-top:10px; }
    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml > p { margin-left:0px !important; }
    .card_icon_bottom_right {right:15px !important;}
	.Overdraft.Protection { width:50%;}

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
    .b16basic_box_right .b16imgcrop {  }
</style>
<!-- VIEW RATE / SPEED BUMP [2] -->

<section class="row-full b16wrapper">

        <div class="b16basic_box_left_content b16basic_box_background">
            <div class="b16basic_box_main">
                <div class="container">
                    <div class="b16basic_box b16basic_box_position">
                        <div class="b16basic_box_right" style="padding-right:50px;">
                            <div class="b16imgcrop"><img src="../../../../contentassets/a21a097b290e4d36b397eeb109a18cf5/2.2.2_b-16-list01_alternating-1_hand-right.png" title="Features" alt="cell phone"></div>
                        </div>
                        <div class="b16basic_box_left">
                                <h2>Features</h2>

                                <div class="xhtml"><ul>
<li>Automatic enrollment with <a title="Business Online Banking" href="../online-banking/index.html">Business Online Banking</a></li>
<li>Secure access to statements for 24 months</li>
<li>Accessible within online and mobile banking</li>
<li>View, print and download statement PDFs</li>
<li>Share statements with authorized users via secure email</li>
</ul></div>
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
</div><div class="block b16block  col-md-12">

<!-- VIEW RATE / SPEED BUMP [2] -->
<style>
    /* Changes to Functionality -> Adding the ability to add one or more links after the main button */
    .b16basic_box_left a.b16readmore { display: inline-block; letter-spacing: 1px; background: #42967d; color: #fff; font-size: 13px; font-family: 'Prompt-Bold'; text-transform: uppercase; padding: 12px 60px; border-radius: 50px; margin-top: 25px; margin-bottom: 0px; margin-right: 30px; text-align: center; margin-left:20px !important;}
    .b16basic_box_left a.b16readmore:hover { text-decoration: none; }
    .b16confidence_links a { text-transform: uppercase; letter-spacing: 1px; font-family: 'Prompt-SemiBold'; font-size: 13px; margin-top: 10px; color: #42967d; padding-right: 12px;    background: url(../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center; }
    .b16confidence_links_multiple { float:left; padding-left:30px; }
    .b16confidence_links_multiple ul { display:inline-block; margin:0; padding-top:10px; /* For IE, the outcast */ zoom:1; *display:inline; }
    .b16confidence_links_multiple li { float:left; padding:2px 5px; margin-right:20px; }
    .b16confidence_links_multiple li > a { text-transform: uppercase; letter-spacing: 1px; font-family: 'Prompt-SemiBold'; font-size: 13px; margin-top: 10px; color: #42967d; padding-right: 12px; background: url(../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center; }

    /* CHANGING SHADING FUNCTIONALITY */
    /*.b16wrapper{ min-height:455px;}*/
    .b16wrapper{ min-height:400px;}
    .b16wrapper .FirstBlock { width: 100%; background-color: #f9f9f9; height: 70px; position: absolute; bottom: -24px; z-index: 1; overflow:hidden; }
    .ThirdBlock{ width:100%; background-color:#f9f9f9; height:70px; position:relative; z-index:2; }
    .b16basic_box_right { position:relative; z-index:99; }
    .b16basic_box_background{ margin-bottom:14px; }
    .b16basic_box_left { padding-left:100px; }
    .b16basic_box_left h2 { padding-top: 35px; }
    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml { padding-top:10px; }
    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml > p { margin-left:0px !important; }
    .card_icon_bottom_right {right:15px !important;}
	.Overdraft.Protection { width:50%;}

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
    .b16basic_box_right .b16imgcrop {  }
</style>
<!-- VIEW RATE / SPEED BUMP [2] -->

<section class="row-full b16wrapper">

        <div class="b16basic_box_right_content b16basic_box_background">
            <div class="b16basic_box_main b16basic_box_grey">
                <div class="container">
                    <div class="b16basic_box">
                        <div class="b16basic_box_right">
                            <div class="b16imgcrop" style="margin-left:90px;"><img src="../../../../contentassets/4f7e693553ee4196b0085a3f5fd48017/2.2.2_b-16-list01_alternating-2_paper-min.png" title="Benefits" alt="stack of papers"></div>

                        </div>
                        <div class="b16basic_box_left payIcon-space">
                            <h2 style="padding-top:0px !important;">Benefits</h2>
                                <div class="xhtml"><ul>
<li>Secure storage of your online bank statements</li>
<li>Faster arrival than paper statements</li>
<li>Convenient, 24/7 access</li>
<li>Accepted as official documents for tax and record keeping</li>
<li>Reduced mail fraud associated with paper statements</li>
<li>Better for the environment</li>
</ul></div>

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
</div><div class="block b16block  col-md-12">

<!-- VIEW RATE / SPEED BUMP [2] -->
<style>
    /* Changes to Functionality -> Adding the ability to add one or more links after the main button */
    .b16basic_box_left a.b16readmore { display: inline-block; letter-spacing: 1px; background: #42967d; color: #fff; font-size: 13px; font-family: 'Prompt-Bold'; text-transform: uppercase; padding: 12px 60px; border-radius: 50px; margin-top: 25px; margin-bottom: 0px; margin-right: 30px; text-align: center; margin-left:20px !important;}
    .b16basic_box_left a.b16readmore:hover { text-decoration: none; }
    .b16confidence_links a { text-transform: uppercase; letter-spacing: 1px; font-family: 'Prompt-SemiBold'; font-size: 13px; margin-top: 10px; color: #42967d; padding-right: 12px;    background: url(../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center; }
    .b16confidence_links_multiple { float:left; padding-left:30px; }
    .b16confidence_links_multiple ul { display:inline-block; margin:0; padding-top:10px; /* For IE, the outcast */ zoom:1; *display:inline; }
    .b16confidence_links_multiple li { float:left; padding:2px 5px; margin-right:20px; }
    .b16confidence_links_multiple li > a { text-transform: uppercase; letter-spacing: 1px; font-family: 'Prompt-SemiBold'; font-size: 13px; margin-top: 10px; color: #42967d; padding-right: 12px; background: url(../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center; }

    /* CHANGING SHADING FUNCTIONALITY */
    /*.b16wrapper{ min-height:455px;}*/
    .b16wrapper{ min-height:400px;}
    .b16wrapper .FirstBlock { width: 100%; background-color: #f9f9f9; height: 70px; position: absolute; bottom: -24px; z-index: 1; overflow:hidden; }
    .ThirdBlock{ width:100%; background-color:#f9f9f9; height:70px; position:relative; z-index:2; }
    .b16basic_box_right { position:relative; z-index:99; }
    .b16basic_box_background{ margin-bottom:14px; }
    .b16basic_box_left { padding-left:100px; }
    .b16basic_box_left h2 { padding-top: 35px; }
    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml { padding-top:10px; }
    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml > p { margin-left:0px !important; }
    .card_icon_bottom_right {right:15px !important;}
	.Overdraft.Protection { width:50%;}

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
    .b16basic_box_right .b16imgcrop { margin-top:25px !important; }
</style>
<!-- VIEW RATE / SPEED BUMP [2] -->

<section class="row-full b16wrapper">

        <div class="b16basic_box_left_content b16basic_box_background">
            <div class="b16basic_box_main">
                <div class="container">
                    <div class="b16basic_box b16basic_box_position">
                        <div class="b16basic_box_right" style="padding-right:50px;">
                            <div class="b16imgcrop"><img src="../../../../contentassets/d6d6e78195b1458fbb54c8e63926708d/2.2.2_b-16-list01_alternating-3_guy.png" title="Multi-Tiered Account Administration" alt="man on laptop"></div>
                        </div>
                        <div class="b16basic_box_left">
                                <h2>Multi-Tiered Account Administration</h2>

                                <div class="xhtml"><ul>
<li>Administrator-controlled account access&nbsp;</li>
<li>Add/remove authorized users with ease&nbsp;</li>
<li>Secure eStatement email distribution to authorized users</li>
<li>View transactions by account</li>
</ul></div>
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
</div><div class="block b12block  col-md-12">        <style>
            .b12faq_main { float: left; width: 100%; padding:100px 0px 50px 0px !important; text-align: left; background: #fff; }
        </style>
        <div class="b12faq_main">
            <div class="b12container">
                <h2>Frequently Asked Questions</h2>
                <!-- tabs left -->
                <div class="tabbable">
                    <div class="tab-content col-md-7">
                        <div class="tab-pane active" id="A"><span>What are eStatements?</span><p><p>eStatements are copies of your paper statement viewed through Online or Mobile Banking. They may be viewed in a PDF file so you can access, save or print them at any time.</p></p></div><div class="tab-pane" id="B"><span>Which accounts will I be able to view in eStatements?</span><p><p>eStatements are available for checking or savings accounts. If a savings account is on a combined statement, you will need to enroll your checking account in order to view both.</p></p></div><div class="tab-pane" id="C"><span>How long will I be able to access my eStatements?</span><p><p>You will be able to access up to 24 months of statements from the time you sign up. However, you can save your statement to your computer as a PDF to access anytime.</p></p></div>
                    </div>
                    <ul class="nav nav-pills nav-stacked col-md-5">
                        <li class="active"><a href="#A" data-toggle="tab">What are eStatements?</a></li><li><a href="#B" data-toggle="tab">Which accounts will I be able to view in eStatements?</a></li><li><a href="#C" data-toggle="tab">How long will I be able to access my eStatements?</a></li>
                    </ul>
                </div>
            </div>
        </div>

</div><div class="block b17block  col-md-12">﻿
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
                    <h3><p>Faster Checkout with Your Mobile Device<sup>1</sup></p></h3>
                                <div class="xhtml"><p>Speed your way through checkout by linking your Business Mastercard&reg; Debit Card to popular mobile wallet apps and streamline checkout with your phone or mobile device. We support:</p>
<ul>
<li><a href="../mobile-wallet/apple-pay/index.html">Apple Pay</a></li>
<li><a href="../mobile-wallet/google-pay/index.html">Google Pay</a></li>
<li><a href="../mobile-wallet/samsung-pay/index.html">Samsung Pay</a></li>
</ul></div>
                <div class="b17PayLinks payIcon-space">
                </div>

                <!-- Button and Footer Links go here ... -->
                                <a href="../mobile-wallet/index.html" class="b17readmore">Learn More</a>
            </div>

                <div class="b17free_mobile_banking_left right">
                    <img class="img-responsive" id="imgMainImage" style="border-radius:50%" src="../../../../contentassets/b4574897247c45c28fabbf351d7dddc5/2.2.2_b17-promo_phone-min.png" alt="First PREMIER Bank">
                </div>
        </div>
    </div>


    <div id="a42542496" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="../../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_container">
                                <h2>Mobile Wallet</h2>
                            <div class="pop_board_white">
                                <div class="row">
                                    <div class="col-md-12" style="padding-left:40px;">
                                        <h4 class="Blue"></h4>
                                        <div class="b46Blue" style="text-align:left;">
                                            
                                            <p><br /><a href="../mobile-wallet/index.html" target="_blank"></a></p>
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
</script></div><div class="block b25block  col-md-12">
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
                <div class="xhtml"><p style="text-align: center;">Whether you&rsquo;re starting from scratch or transferring your account, our business bankers can help you get started with the financial management tools to meet your needs.</p></div>
                <div class="b25bottom" style="">
                    <center>
                    <a href="../../../pages/about-us/teams/small-business-banking-team/index.html" class="b25mainanchor">Contact Us</a><br clear="all"/>
                    </center>
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
            <a href="../../../pages/about-us/index.html">About Us</a> 
        </li>
    
        <li>
            <a href="../../../index.html">First PREMIER Bank</a> 
        </li>
    
        <li>
            <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a> 
        </li>
    
        <li>
            <a href="../../../pages/about-us/leadership-team/index.html">Leadership</a> 
        </li>
    
        <li>
            <a href="../../../pages/about-us/community/index.html">Community</a> 
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
            <a href="../../../index.html">Personal Banking</a> 
        </li>
    
        <li>
            <a href="../../index.html">Small Business</a> 
        </li>
    
        <li>
            <a href="../../../commercial/index.html">Commercial</a> 
        </li>
    
</ul>
                <br />
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 footerCol3">
                <div class="footerHeader">Help &amp; Contact</div>
                
<ul>
    
        <li>
            <a href="../../../pages/quick-links/customer-care/index.html">Customer Care</a> 
        </li>
    
        <li>
            <a href="../../../pages/quick-links/locations/index.html">Locations</a> 
        </li>
    
        <li>
            <a href="../../../pages/quick-links/customer-care/index.html">BANK: 800-501-6535</a> 
        </li>
    
        <li>
            <a href="https://www.mypremiercreditcard.com/">CREDIT CARD: 800-987-5521</a> 
        </li>
    
        <li>
            <a href="../../../index.html">Routing Number: 091408598</a> 
        </li>
    
</ul>
                <br />
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 footerCol4">
                <div class="footerHeader">Legal Notices</div>
                
<ul>
    
        <li>
            <a href="../../../pages/resources/first-premier-privacy-statement-2020/index.html">Privacy Notice &amp; Statement</a> 
        </li>
    
        <li>
            <a href="../../../pages/resources/legal-disclosures/index.html">Legal Disclosures</a> 
        </li>
    
        <li>
            <a href="../../../pages/resources/cookie-policy/index.html">Cookie Policy</a> 
        </li>
    
</ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-top:50px;">
 <p>Member FDIC | <img src="../../../../Static/img/equalhousinglender.png" alt="Equal Housing Lender" title="Equal Housing Lender" />Equal Housing Lender</p>            </div>
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
    .showehllogo { background: url('../../../../Static/img/EHLlogo%20white.png') 230px 0px no-repeat; background-size: 24px 24px }
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
    <div class="smallLogo"><a href="../../../index.html" title="First PREMIER Bank - Home"><img src="../../../../Static/gfx/Logo.png" style="max-width:100%;" /></a></div>
    <script type="text/javascript" src="../../../../../dl.episerver.net/13.4.4.1/epi-util/find.js"></script>
<script type="text/javascript">
if(FindApi){var api = new FindApi();api.setApplicationUrl('../../../../index.html');api.setServiceApiBaseUrl('../../../../find_v2/index.html');api.processEventFromCurrentUri();api.bindWindowEvents();api.bindAClickEvent();api.sendBufferedEvents();}
</script>

    <script type="text/javascript" src="../../../../Static/js/pushy.js"></script>
    <script type="text/javascript" src="../../../../Static/js/Blocks_2019062002.js"></script>
@endsection