


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
    <style>
        .b18great_feature_main {width:1050px;float:right;}
@media only screen and (max-width:470px){
.b18great_feature_main {width:100%;float:unset;}
}
    </style>
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
            <h1>Make Payments</h1>
                <img src="../../../../contentassets/d526d38b3ee14bb096700ce4a84377b3/2.5.1_b-46-hero_payroll-min.png" alt="First PREMIER Bank">
                            <h2>Streamline Accounts Payable with ACH Online</h2>
            <p>First PREMIER Bank helps you easily and affordably make payroll and vendor payments while reducing fraud.</p>

                        <a href="../../../pages/about-us/teams/small-business-banking-team/index.html" class="b46button">Contact Us</a>


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
                            <div class="b16imgcrop"><img src="../../../../contentassets/856bc7d19bc8432abdbd2182fdc8b5de/2.5.1_b-16-list01_alternating-1_woman.png" title="Manage Payables Efficiently" alt="woman on laptop"></div>
                        </div>
                        <div class="b16basic_box_left">
                                <h2>Manage Payables Efficiently</h2>

                                <div class="xhtml"><ul>
<li>Schedule and manage outbound vendor and tax payments</li>
<li>Quick, efficient and affordable self-service solution</li>
<li>Set up and schedule recurring vendor and tax payments</li>
<li>Schedule and make electronic payments as needed</li>
<li>Expedite payment via direct deposit</li>
<li>Reduce the cost and risk associated with paper checks</li>
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
                            <div class="b16imgcrop" style="margin-left:90px;"><img src="../../../../contentassets/5d11056cfec3466f86a070474df11e15/2.5.1_b-16-list01_alternating-2_payroll-min.png" title="Streamline Employee Payroll &amp; Payments" alt="Man and woman looking at tablet"></div>

                        </div>
                        <div class="b16basic_box_left payIcon-space">
                            <h2 style="padding-top:0px !important;">Streamline Employee Payroll &amp; Payments</h2>
                                <div class="xhtml"><ul>
<li>Manage payroll online or by phone with our self-service tools</li>
<li>Pay employees via direct deposit</li>
<li>File taxes electronically</li>
<li>Manage disbursement of employee expenses</li>
<li>Receive personal customer support when you need it</li>
</ul></div>

                            <!-- Button and Footer Links go here ... -->
                                        <a href="../../../pages/about-us/teams/small-business-banking-team/index.html" class="b16readmore">Contact Us</a>
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
                            <div class="b16imgcrop"><img src="../../../../contentassets/04b2fc4b12b04f928f401dbd8ad0a9e1/2.5.1_b-16-list01_alternating-3_woman-left.png" title="More Benefits of ACH Online" alt="woman on laptop"></div>
                        </div>
                        <div class="b16basic_box_left">
                                <h2>More Benefits of ACH Online</h2>

                                <div class="xhtml"><p>You can also use ACH Online to manage accounts receivable, accepting ACH payments with ease. In addition, we offer additional products and services to help you manage and process inbound payments with the personal service annd support you can rely on.</p></div>
                            <!-- Button and Footer Links go here ... -->
                                        <a href="../accept-payments/index.html" class="b16readmore">Learn More</a>
                            <!-- Button and Footer Links go here ... -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- View Rate [3] (within container)-->
<!-- View Rate [3] (within container)-->
</div><div class="block b18block  col-md-12">

<style>
    .pop_main_container_board .pop_main_container ol li ol li {  }
    .b18great_feature_main .b18detail {  }
    .b18great_feature_main .b18great_feature_left .b18detail h3 {  }
    .b18great_feature_main .b18great_feature_left span {  }
    .b18great_feature_main .b18great_feature_left .b18detail ul {  }

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
        <h2> Get ACH Online </h2>
        <div class="b18great_feature_left">
                <span>Getting Started is Easy</span>
                            <div class="b18detail xhtml"><p>ACH Online is an efficient, affordable service designed to ease the burden associated with payment administration. Let our business bankers help you establish the right suite of banking and business services to meet the needs of your growing business. Contact us to get started today.</p></div>
                                </div>
        <div class="b18great_feature_left b18great_feature_right payIcon-space">
                <span>ACH Online Pricing</span>
                            <div class="b18detail xhtml"><h5>Just $25 per month<sup>1</sup> plus per item processing fees:</h5>
<ul>
<li>&gt;250 items per month = $.25 cents per item</li>
<li>251-500 items per month = $.20 cents per item</li>
<li>500+ items per month = $.18 cents per item</li>
</ul></div>
                                </div>
        <div class="clearfix">
            <center>
                            <a href="../../../pages/about-us/teams/small-business-banking-team/index.html" class="btnGreen">CONTACT US</a>
            </center>
        </div>

    </div>
    <div id="a53211063" class="modal fade" role="dialog">
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
                                <h2>Getting Started is Easy</h2>
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
    <div id="b53211063" class="modal fade" role="dialog">
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
                                <h2>ACH Online Pricing</h2>
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
    <div id="c53211063" class="modal fade" role="dialog">
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
                                <h2>Get ACH Online</h2>
                            <div class="pop_board_white">
                                <div class="row">
                                    <div class="col-md-12" style="padding-left:40px;">
                                        <h4 class="Blue"></h4>
                                        <div class="b46Blue" style="text-align:left;">

                                            <p><br /><a href="../../../pages/about-us/teams/small-business-banking-team/index.html" target="_blank"></a></p>
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
            <h2>More Ways to Pay</h2>

            <div class="b17free_mobile_banking_right">
                    <h3><p>Pay Bills with FREE Online &amp; Mobile Banking</p></h3>
                                <div class="xhtml"><ul>
<li>For all First PREMIER business banking customers</li>
<li>State-of-the-art <a title="online and mobile" href="../../online-and-mobile/index.html">Online and Mobile Banking</a></li>
<li><a title="Bill pay" href="../../online-and-mobile/bill-pay/index.html">Bill Pay</a>&nbsp;and&nbsp;<a title="mobile deposit" href="../../online-and-mobile/mobile-deposit/index.html">Mobile Deposit</a> help streamline tasks</li>
<li>Schedule and manage wire transfers with ease</li>
<li><a title="eStatements" href="../../online-and-mobile/estatements/index.html">eStatements</a> improve record-keeping and help reduce fraud</li>
</ul></div>
                <div class="b17PayLinks payIcon-space">
                </div>

                <!-- Button and Footer Links go here ... -->
                                <a href="../../online-and-mobile/index.html" class="b17readmore">LEARN MORE</a>
            </div>

                <div class="b17free_mobile_banking_left right">
                    <img class="img-responsive" id="imgMainImage" style="border-radius:50%" src="../../../../contentassets/3b444944263f4a15be52980efc91f447/2.5.1_b-17_promo_woman-min.png" alt="First PREMIER Bank">
                </div>
        </div>
    </div>

        <div class="b15benfits_main_box b17cards">
            <div class="container">
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar">
                                <img src="../../../../globalassets/images/secondary-icons/gold/votes-rewards/gold-votes-_-rewards-secondary-icon-18.png" title="Business Rewards Mastercard&#174;" alt="woman smiling" width="116px" height="116px"></div>
                                <div class="b15avtar_content">
                                    <h3>Business Rewards Mastercard&#174;</h3>
                                    <p>Streamline purchasing and reap rewards with our Business Rewards Mastercard&reg; Credit Card.</p>
                                    <div class="clearfix"></div><br />
                                            <a href="../business-rewards-mastercard/index.html">LEARN MORE</a>
                                </div>
                            </div>
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar">
                                <img src="../../../../globalassets/images/secondary-icons/bright/business-finance/bright-business-_-finance-secondary-icon-25.png" title="Business Debit Mastercard&#174;" alt="woman smiling" width="116px" height="116px"></div>
                                <div class="b15avtar_content">
                                    <h3>Business Debit Mastercard&#174;</h3>
                                    <p>Available to authorized employees, our Business Debit Mastercard&reg; Debit Card offers Zero Liability&reg; Protection and more.</p>
                                    <div class="clearfix"></div><br />
                                            <a href="../../business-checking/business-debit-mastercard/index.html">LEARN MORE</a>
                                </div>
                            </div>
            </div>
        </div>

    <div id="a26349432" class="modal fade" role="dialog">
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
                                <h2>More Ways to Pay</h2>
                            <div class="pop_board_white">
                                <div class="row">
                                    <div class="col-md-12" style="padding-left:40px;">
                                        <h4 class="Blue"></h4>
                                        <div class="b46Blue" style="text-align:left;">

                                            <p><br /><a href="../../online-and-mobile/index.html" target="_blank"></a></p>
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
</script></div><div class="block b13block  col-md-12">

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

                <h4> Disclosure </h4>
                <div class="b13points">
                    <p>{1} All fees are applied to the service charge account you designate in the set-up form.</p>
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
