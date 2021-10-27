
@extends('frontend.layouts.app')

@section('content')

    <div class="container">

 <!--start responsive menu-->
 @include('frontend.layouts.components.header')
 <!-- Main Header -->
 @include('frontend.layouts.components.navbar')
            
    <style>
        .b18block {max-height:325px;}
    </style>
<div class="row equal-height"><div class="block b60block  col-md-12"><!--start responsive menu-->
<nav class="pushy pushy-right">
    <div class="pushy-content">
        <button class="pushy-link close-b">X</button>
        <div id="accordion" class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading b60Menu">
                    <br /><br />
                    <div style="background-color:#fff;height:72px;border:#222 1px solid;"><a href="../../../../index.html"><img src="{{asset('assets/frontend/Static/img/FPB-Investment-Logo.png')}}" class="img-responsive" border="0" /></a><br /></div>
                    <br /><center>Need help? Call (605) 978-9725</center><br />
                    <div class="ceteramenu" style="border-top:#c8c8c8 1px solid;">
<a class="ceteralink" href="../index.html" style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Investing</a><a class="ceteralink" href="../brokerage-services/index.html" style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Brokerage</a><a class="ceteralink" href="index.html" style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Retirement</a><a class="ceteralink" href="../insurance/index.html" style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Insurance</a><a class="ceteralink" href="../financial-and-investing-resources/index.html" style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Resources</a><a class="ceteralink" href="../../../pages/about-us/teams/investing-services-team/index.html" style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Team</a>                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<section class="header-wrap" style="padding-top: 0px; margin-top: 0px;">
    <article class="row">
        <article class="topHeader col-sm-12">  
            <!-- Collapse if empty -->
            <button class="menu-btn">&#9776;</button>
        </article>
    </article>
    <article class="container">
        <div class="b60desktop" style="color:#25455a;height:75px;font-family: 'Prompt-Medium';">
            <div style="float:right;color:#25455a;">Need help? Call (605) 978-9725</div>
            <div style="padding-top:25px;"><a href="../../../../index.html"><img src="{{asset('assets/frontend/Static/img/FPB-Investment-Logo.png')}}" class="img-responsive" border="0" style="padding-bottom:10px;" /></a></div>
            <br/><br/>
        </div>
        <div class="b60mobile" style="display:none; position:relative;left:-20px;top:-50px;color:#25455a;visibility:hidden;font-family: 'Prompt-Medium';">
            <a href="../../../../index.html"><img src="{{asset('assets/frontend/Static/img/FPB-Investment-Logo.png')}}" class="img-responsive" border="0" style="padding-bottom:10px;" /></a>
            <center><div style="color:#25455a;">Need help? Call (605) 978-9725</div></center>
        </div>
    </article>
    <div class="row-full">
        <div class="menu-wrap">
            <article class="container">
                <article>
                    <div class="col-sm-12 SubMenuItems">
                        <ul id="ulPremierMainMenu">
                                    <li class="SubMenu"><a class="ceteralink" href="../index.html" style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Investing</a></li>
                                    <li class="SubMenu"><a class="ceteralink" href="../brokerage-services/index.html" style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Brokerage</a></li>
                                    <li class="SubMenu"><a class="ceteralink" href="index.html" style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Retirement</a></li>
                                    <li class="SubMenu"><a class="ceteralink" href="../insurance/index.html" style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Insurance</a></li>
                                    <li class="SubMenu"><a class="ceteralink" href="../financial-and-investing-resources/index.html" style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Resources</a></li>
                                    <li class="SubMenu"><a class="ceteralink" href="../../../pages/about-us/teams/investing-services-team/index.html" style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Team</a></li>
                        </ul>
                    </div>
                </article>
            </article>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {

        $(window).resize(function () {
            if ($(window).width() < 500) {
                $('.b60mobile').attr('style', 'display:show');
                $('.b60desktop').attr('style', 'display:none');
            }
            else {
                $('.b60mobile').attr('style', 'display:none');
                $('.b60desktop').attr('style', 'display:show');
            }
        });
        //$('#AccessAccountDropdown option[id!=selectaccount]').each(function (index, value) {
        //    $('#signInHoverSection').append('<p>' + $(value).text() + '</p>');
        //});

        if ($(window).width() == 1024) {
            $('#ulPremierMainMenu li').click(function (e) {
                $(this).find('div[id*=subdiv]').hide();
                $('#ulPremierMainMenu li').find('a').attr('href', 'javascript:void(0)');
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
</script></div><div class="block b46block  col-md-12">

<style>
    .b46mainlinkspan { height:50px; margin-top:24px; text-align:center;width:100%;}
    .b46mainlink { color: #268d6e; background: url("{{asset('assets/frontend/Static/img/CustomBlocks/B20/arrow_green.png')}}") no-repeat right 3px; padding: 0px 15px 0px 25px; vertical-align:text-bottom; margin-right: 20px; letter-spacing:1px; }
    .b46mainanchor { color: #268d6e; background: url("{{asset('assets/frontend/Static/img/CustomBlocks/B20/arrow_green.png')}}") no-repeat right 3px; float:left; padding: 0px 15px 0px 25px; vertical-align:text-bottom; letter-spacing:1px; }
    .b46multianchor { text-align:center; }
    .b46multianchor ul { display:inline-block; margin:0; padding:0; /* For IE, the outcast */ zoom:1; *display:inline;}
    .b46multianchor li { float:left; padding:2px 5px; }
    .b46productpage h5 > p {  }
</style>
<style>
    .pop_main_container_board .pop_main_container ol li ol li {  }
    .b46productpage { float:left; width:100%; padding:80px 0px 50px 0px; text-align:center; background:#fff url("{{asset('assets/frontend/globalassets/images/backgrounds/grey-2.svg')}}") no-repeat;}
</style>
<section class="row-full">
    <div class="b46productpage">
        <div class="container">
            <h1>Personal Retirement Planning</h1>
                <img src="{{asset('assets/frontend/contentassets/75e89f15f5464f37b0a7e877050bceff/1.6.2_b-46-hero_couple-min.png')}}" alt="First PREMIER Bank">
                            <h2>Make Smart Choices for Your Future</h2>
            <p style="text-align: center;">It's never too early - or too late - to develop a plan that will carry you to a comfortable retirement! <br />First PREMIER can help you navigate the road ahead to meet your financial goals.</p>

                        <a href="../../../pages/about-us/teams/investing-services-team/index.html" class="b46button">CONTACT US</a>


        </div>
    </div>
</section></div><div class="block b16block  col-md-12">

<!-- VIEW RATE / SPEED BUMP [2] -->
<style>
    /* Changes to Functionality -> Adding the ability to add one or more links after the main button */
    .b16basic_box_left a.b16readmore { display: inline-block; letter-spacing: 1px; background: #42967d; color: #fff; font-size: 13px; font-family: 'Prompt-Bold'; text-transform: uppercase; padding: 12px 60px; border-radius: 50px; margin-top: 25px; margin-bottom: 0px; margin-right: 30px; text-align: center; margin-left:20px !important;}
    .b16basic_box_left a.b16readmore:hover { text-decoration: none; }
    .b16confidence_links a { text-transform: uppercase; letter-spacing: 1px; font-family: 'Prompt-SemiBold'; font-size: 13px; margin-top: 10px; color: #42967d; padding-right: 12px;    background: url("{{asset('assets/frontend/Static/img/CustomBlocks/B14/arrow_small.png')}}") no-repeat right center; }
    .b16confidence_links_multiple { float:left; padding-left:30px; }
    .b16confidence_links_multiple ul { display:inline-block; margin:0; padding-top:10px; /* For IE, the outcast */ zoom:1; *display:inline; }
    .b16confidence_links_multiple li { float:left; padding:2px 5px; margin-right:20px; }
    .b16confidence_links_multiple li > a { text-transform: uppercase; letter-spacing: 1px; font-family: 'Prompt-SemiBold'; font-size: 13px; margin-top: 10px; color: #42967d; padding-right: 12px; background: url("{{asset('assets/frontend/Static/img/CustomBlocks/B14/arrow_small.png')}}") no-repeat right center; }

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
                            <div class="b16imgcrop"><img src="{{asset('assets/frontend/contentassets/9db19a688fc64c648212b96f322999a8/1.6.2_b-16-list01_alternating-2_planning-min.png')}}" title="Planning for Retirement" alt="couple planning for retirement on laptop"></div>
                        </div>
                        <div class="b16basic_box_left">
                                <h2>Planning for Retirement</h2>

                                <div class="xhtml"><p>We can assist with 401(k) rollovers, Individual Retirement Accounts (IRAs) and more. An IRA is a tax-efficient way for you to save, and allows your money to grow tax free while it's in the account. The type of IRA you choose will depend on your age, income and financial goals. You can&nbsp;<a href="https://www.irs.gov/retirement-plans/individual-retirement-arrangements-iras">visit the IRS</a>&nbsp;for more information.</p></div>
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
        <h2> Need to Roll Over Your Account? </h2>
        <div class="b18great_feature_left">
                <span>When changing jobs or retiring, should you:</span>
                            <div class="b18detail xhtml"><ul>
<li>Roll assets to another IRA?</li>
<li>Leave assets in your existing plan?</li>
<li>Move assets to your new empoyer's plan?</li>
<li>Roll over or take a lump sum distribution?</li>
</ul></div>
                                </div>
        <div class="b18great_feature_left b18great_feature_right payIcon-space">
                <span>We are here to help you:</span>
                            <div class="b18detail xhtml"><ul>
<li>Transfer assets from your former employer's retirement plan (401(k), profit-sharing plan, etc.)</li>
<li>Choose a traditional IRA or a Roth IRA</li>
<li>Keep your savings tax deferred</li>
</ul></div>
                                </div>
        <div class="clearfix">
            <center>
                            <a href="../../../pages/about-us/teams/investing-services-team/index.html" class="btnGreen">Contact Us</a>
            </center>
        </div>

    </div>
    <div id="a7805846" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="{{asset('assets/frontend/static/img/closebutton.png')}}" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_container">
                                <h2>When changing jobs or retiring, should you:</h2>
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
    <div id="b7805846" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="{{asset('assets/frontend/static/img/closebutton.png')}}" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_container">
                                <h2>We are here to help you:</h2>
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
    <div id="c7805846" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="{{asset('assets/frontend/static/img/closebutton.png')}}" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_container">
                                <h2>Need to Roll Over Your Account?</h2>
                            <div class="pop_board_white">
                                <div class="row">
                                    <div class="col-md-12" style="padding-left:40px;">
                                        <h4 class="Blue"></h4>
                                        <div class="b46Blue" style="text-align:left;">
                                            
                                            <p><br /><a href="../../../pages/about-us/teams/investing-services-team/index.html" target="_blank"></a></p>
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
</div><div class="block b04block  col-md-12">
<style>
</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                        <div class="xhtml"><div style="background-color: #fff;">
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;"><a class="btnGreen" href="../../../pages/about-us/teams/investing-services-team/index.html">Contact Us</a></p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
</div></div>
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

    .colored h2, .colored .xhtml p {
    color: #fff !important;
    }

    .page-Our-Communities .block.b04block.col-md-12 {
    margin-top: 20px;
    }
</style></div><div class="block b13block  col-md-12">

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
                    <p>{1} Securities and insurance products are offered through Cetera Investment Services LLC (doing insurance business in CA as CFGIS Insurance Agency), member <a href="http://www.sipc.org/" target="_blank" rel="noopener">FINRA/SIPC</a>. Advisory services are offered through Cetera Investment Advisers LLC. Neither firm is affiliated with the financial institution where investment services are offered. Investments are:</p>
<ul>
<li>Not FDIC/NCUSIF insured</li>
<li>May lose value</li>
<li>Not financial institution guaranteed</li>
<li>Not a deposit</li>
<li>Not insured by any federal government agency.</li>
</ul>
<p><br />Check the background of our investment professionals on FINRA&rsquo;s <a href="http://brokercheck.finra.org/" target="_blank" rel="noopener">BrokerCheck</a></p>
<p>Click here to view Cetera Investment Services <a href="https://myceterasmartworks.com/Public/Portal/Content.aspx?ContentId=29714177" target="_blank" rel="noopener">Privacy Policy</a>, other <a href="https://www.ceterafinancialinstitutions.com/clients/Non-Deposit-Disclosure" target="_blank" rel="noopener">Important Information</a> and <a href="https://myceterasmartworks.com/Public/Portal/Content.aspx?ContentId=30050055" target="_blank" rel="noopener">Business Continuity Plan</a>.</p>
<p>This site is published for residents of the United States only. Registered Representatives of Cetera Investment Services LLC may only conduct business with residents of the states and/or jurisdictions in which they are properly registered. Not all of the products and services referenced on this site may be available in every state and through every advisor listed. For additional information please contact the advisor(s) listed on the site or visit the Cetera Investment Services LLC site at <a href="http://www.ceterainvestmentservices.com/" target="_blank" rel="noopener">www.ceterainvestmentservices.com</a>.</p>
                </div>
            </div>
        </div>
</section></div><div class="block b04block  col-md-12">
<style>
.header-wrap div:nth-child(1){color:#4a6375; font-size: 14px; line-height:22px; font-family: 'Prompt-Medium'; text-shadow:none;}
</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                        <div class="xhtml"><div class="row-full footer" style="background-color: #17554a !important;">
<div class="container">
<div class="col-md-12">
<div class="col-md-6">
<h3 style="text-transform: uppercase; color: #fff; font-weight: bold;">INFORMATION</h3>
<p>&nbsp;</p>
<p><u>First PREMIER Bank</u><br />Investment Services (605) 978-9725</p>
<p>&nbsp;</p>
<p>Cetera registered branch:<br />601 S. Minnesota Avenue<br />Sioux Falls, SD 57104</p>
</div>
<div class="col-md-6">
<h3 style="text-transform: uppercase; color: #fff; font-weight: bold;">LEGAL NOTICES</h3>
<p>&nbsp;</p>
<p>Privacy Notice &amp; Statement<br />Legal Disclosures<br />Cookie Policy</p>
</div>
</div>
</div>
</div></div>
                    </div>
    </div>
</section>
<script>
    $(".header-wrap img:first").attr('src','../../../../../prod.firstpremier.com/static/img/fpb-investment-logo.png');
;
</script>

<style>
    .b4background.colored {
        background-color: #25455a !important;
    }

    .b4background.colored .b15benfits_main_box {
        margin: 0px !important;

    }

    .colored h2, .colored .xhtml p {
    color: #fff !important;
    }

    .page-Our-Communities .block.b04block.col-md-12 {
    margin-top: 20px;
    }
</style></div></div>

 
    </div>
    <div class="smallLogo"><a href="../../../index.html" title="First PREMIER Bank - Home"><img src="{{asset('assets/frontend/Static/gfx/Logo.png')}}" style="max-width:100%;" /></a></div>
    <script type="text/javascript" src="../../../../../dl.episerver.net/13.4.4.1/epi-util/find.js"></script>
<script type="text/javascript">
if(FindApi){var api = new FindApi();api.setApplicationUrl('../../../../index.html');api.setServiceApiBaseUrl('../../../../find_v2/index.html');api.processEventFromCurrentUri();api.bindWindowEvents();api.bindAClickEvent();api.sendBufferedEvents();}
</script>

    <script type="text/javascript" src="../../../../Static/js/pushy.js"></script>
    <script type="text/javascript" src="../../../../Static/js/Blocks_2019062002.js"></script>
@endsection