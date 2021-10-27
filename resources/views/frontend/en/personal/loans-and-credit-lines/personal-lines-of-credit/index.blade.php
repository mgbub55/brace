@extends('frontend.layouts.app')

@section('content')

    <div class="container">

 <!--start responsive menu-->
 @include('frontend.layouts.components.header')
 <!-- Main Header -->
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
        .b21lines-credit-table td a.regLink {color:#268d6e; font-family: 'Prompt-Medium';  font-weight:bold;background:none;text-transform:none;padding-right:0px;}

.b21lines-credit-table td a.btnGreen { display: inline-block; letter-spacing: 1px; background: #42967d; color: #fff; font-size: 12px; font-family: 'Prompt-Bold'; text-transform: uppercase; padding: 12px 60px;border-radius: 50px; margin-top: 20px; margin-bottom: 0px; margin-right: 30px; text-align: center;}

    </style>
<div class="row equal-height"><div class="block b46block  col-md-12">

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
            <h1>Personal Lines of Credit</h1>
                <img src="{{asset('assets/frontend/contentassets/ca67406b6ace448fa25ce223f9e69fb2/1.4.1_b-46-hero_handshake-min.png')}}" alt="First PREMIER Bank">
                            <h2>Easy Access to Cash When You Need It</h2>
            <p style="text-align: center;">We offer a number of secured and unsecured personal lines of credit that can help you gain flexible&nbsp;<br />access to cash and serve as optional overdraft protection for your First PREMIER Checking account.</p>

                        <a href="https://umnasg7.umonitor.com/consumerloan/uLoan/welcome.do?auth=aa902f55464cde74" class="b46button">APPLY NOW</a>


        </div>
    </div>
</section></div><div class="block b21block  col-md-12">

<style>
    .pop_main_container_board .pop_main_container ol li ol li {  }
</style>
<style>
    .tab_h4 { display: inline !important;}
    .b21bottom                                      { width: 100%; padding-top: 25px; padding-bottom:50px;}
    .b21bottom a.b21mainbutton                      { background: #25455a; padding: 13px 60px; letter-spacing: 1px; color: #fff; border-radius: 30px; text-transform: uppercase; font-size: 12px; font-family: 'Prompt-Bold'; margin: 35px 0px 20px; text-align: center;min-width:145px; }
    .b21bottom a.b21mainbutton:hover                { background: #182e39; }
    .b21bottom ul                                   { display:inline-block; margin:0; padding-top:30px; /* For IE, the outcast */ zoom:1; *display:inline; }
    .b21bottom ul li                                { display: inline-block; }
    .b21bottom a.b21LinkItem                        { color: #268d6e; background: url("{{('assets/frontend/Static/img/CustomBlocks/B20/arrow_green.png')}}") no-repeat right 3px; padding: 0px 15px 0px 0px; margin-right: 20px; margin-top: 0px; letter-spacing: 0.5px; font-size: 12px; font-family: "Prompt-SemiBold"; text-shadow: none; text-transform: uppercase;padding-left:40px; }
    .b21bottom a.b21LinkItem:hover                  { color: #1c7258; background: url("{{('assets/frontend/Static/img/CustomBlocks/B20/arrow_green_hover.png')}}") no-repeat right 3px; font-size: 14px; font-family: "Prompt-SemiBold"; text-shadow: none; text-transform: uppercase; }
    .b21bottom ul li a.b21multilink                 { color: #268d6e; background: url("{{('assets/frontend/Static/img/CustomBlocks/B20/arrow_green.png')}}") no-repeat right 3px; padding: 0px 15px 0px 0px; margin-right: 20px; margin-top: 0px; letter-spacing: 0.5px;padding-left:20px; font-size: 12px; font-family: "Prompt-SemiBold"; text-shadow: none; text-transform: uppercase;}
    .b21bottom ul li a.b21multilink:hover           { color: #1c7258; background: url("{{('assets/frontend/Static/img/CustomBlocks/B20/arrow_green.png')}}") no-repeat right 3px; padding: 0px 15px 0px 0px; margin-right: 20px; margin-top: 0px; letter-spacing: 0.5px;padding-left:20px; font-size: 12px; font-family: "Prompt-SemiBold"; text-shadow: none; text-transform: uppercase;}
</style>

<section>
    <div class="b21lines-credit-main">
        <div class="container">
            <div class="title">Compare Lines of Credit </div>
            <div class="detail"><div class="txt">
<p style="text-align: center;">Our flexible lines of credit offer additional buying power for larger purchases and <br />can help bridge the gap when account balances go low. Compare options here:</p>
</div></div>
            <div class="b21lines-credit-table-sectopn b21mobile_section">
                <table class="b21lines-credit-table">
                    <tr>
                        <td style="vertical-align:bottom;"><h4 class="tab_h4" style="float:right;"></h4></td>
                        <th style="max-width:343px;">
                                <h3>Easy Access<br />Line of Credit</h3>
                            <p>An everyday line of credit for flexible access to cash for unexpected expenses.</p>
                                <a href="../easy-access-line-of-credit/index.html">Learn More</a>
                        </th>
                        <th style="max-width:343px;">
                                <h3>Advance Access<br />Line of Credit</h3>
                            <p>For individuals who desire ready access to extra cash for large purchases.</p>
                                <a href="../advance-access-line-of-credit/index.html">Learn More</a>
                        </th>
                        <th style="max-width:343px;">
                                <h3>Home Equity<br />Line of Credit</h3>
                            <p>A secured line for homeowners based on home equity.</p>
                                <a href="../home-equity-line-of-credit/index.html">Learn More</a>
                        </th>
                    </tr>
                    <tr><td><h4>Type</h4></td><td>Revolving line of credit</td><td>Revolving line of credit</td><td>Revolving line of credit</td></tr><tr><td><h4>Credit Line</h4></td><td><p>From $300 - $5,000</p></td><td><p>From $2,500 - $100,000</p></td><td><p>Varies</p></td></tr><tr><td><h4>Interest</h4></td><td><p>Fixed Interest<sup>1</sup></p></td><td><p>Variable Interest<sup>1</sup></p></td><td><p>Variable Interest<sup>1</sup></p></td></tr><tr><td><h4>Collateral</h4></td><td><p>Unsecured</p></td><td>Secured or unsecured</td><td>Secured by your mortgage</td></tr><tr><td><h4><h4>Additional Features</h4></h4></td><td><p>FREE Online and Mobile Banking<br />Available as optional <a class="regLink" href="../../personal-checking/overdraft-protection/index.html">Overdraft Protection</a><sup>2</sup></p></td><td><p>FREE Online and Mobile Banking<br />Available as optional <a class="regLink" href="../../personal-checking/overdraft-protection/index.html">Overdraft Protection</a><sup>2</sup></p></td><td><p>FREE Online and Mobile Banking<br />Available as optional <a class="regLink" href="../../personal-checking/overdraft-protection/index.html">Overdraft Protection</a><sup>2</sup></p></td></tr><tr><td><h4></h4></td><td><p><a class="btnGreen" href="../easy-access-line-of-credit/index.html">Learn More</a></p></td><td><p><a class="btnGreen" href="../advance-access-line-of-credit/index.html">Learn More</a></p></td><td><p><a class="btnGreen" href="../home-equity-line-of-credit/index.html">Learn More</a></p></td></tr>
                </table>

                <!--Mobile table Starts-->
                <table class="b21lines-credit-table b21mobile_lines-credit-table">
                    <tr>
                        <td>
                                <h3>Easy Access<br />Line of Credit</h3>
                            <p>An everyday line of credit for flexible access to cash for unexpected expenses.</p>
                                <a href="../easy-access-line-of-credit/index.html">Learn More</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr><td class='odd'>Type</td></tr><tr><td>Revolving line of credit</td></tr><tr><td class='odd'>Credit Line</td></tr><tr><td><p>From $300 - $5,000</p></td></tr><tr><td class='odd'>Interest</td></tr><tr><td><p>Fixed Interest<sup>1</sup></p></td></tr><tr><td class='odd'>Collateral</td></tr><tr><td><p>Unsecured</p></td></tr><tr><td class='odd'><h4>Additional Features</h4></td></tr><tr><td><p>FREE Online and Mobile Banking<br />Available as optional <a class="regLink" href="../../personal-checking/overdraft-protection/index.html">Overdraft Protection</a><sup>2</sup></p></td></tr><tr><td class='odd'></td></tr><tr><td><p><a class="btnGreen" href="../easy-access-line-of-credit/index.html">Learn More</a></p></td></tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                                <h3>Advance Access<br />Line of Credit</h3>
                            <p>For individuals who desire ready access to extra cash for large purchases.</p>
                                <a href="../advance-access-line-of-credit/index.html">Learn More</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr><td class='odd'>Type</td></tr><tr><td>Revolving line of credit</td></tr><tr><td class='odd'>Credit Line</td></tr><tr><td><p>From $2,500 - $100,000</p></td></tr><tr><td class='odd'>Interest</td></tr><tr><td><p>Variable Interest<sup>1</sup></p></td></tr><tr><td class='odd'>Collateral</td></tr><tr><td>Secured or unsecured</td></tr><tr><td class='odd'><h4>Additional Features</h4></td></tr><tr><td><p>FREE Online and Mobile Banking<br />Available as optional <a class="regLink" href="../../personal-checking/overdraft-protection/index.html">Overdraft Protection</a><sup>2</sup></p></td></tr><tr><td class='odd'></td></tr><tr><td><p><a class="btnGreen" href="../advance-access-line-of-credit/index.html">Learn More</a></p></td></tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                                <h3>Home Equity<br />Line of Credit</h3>
                            <p>A secured line for homeowners based on home equity.</p>
                                <a href="../home-equity-line-of-credit/index.html">Learn More</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <table>
                            <tr><td class='odd'>Type</td></tr><tr><td>Revolving line of credit</td></tr><tr><td class='odd'>Credit Line</td></tr><tr><td><p>Varies</p></td></tr><tr><td class='odd'>Interest</td></tr><tr><td><p>Variable Interest<sup>1</sup></p></td></tr><tr><td class='odd'>Collateral</td></tr><tr><td>Secured by your mortgage</td></tr><tr><td class='odd'><h4>Additional Features</h4></td></tr><tr><td><p>FREE Online and Mobile Banking<br />Available as optional <a class="regLink" href="../../personal-checking/overdraft-protection/index.html">Overdraft Protection</a><sup>2</sup></p></td></tr><tr><td class='odd'></td></tr><tr><td><p><a class="btnGreen" href="../home-equity-line-of-credit/index.html">Learn More</a></p></td></tr>
                        </table>
                        </td>
                    </tr>
                </table>
                <!--Mobile table Ends-->
            </div>

        </div>
    </div>
</section>

<!-- View Rate [3] (within container)-->
<!-- View Rate [3] (within container)--></div><div class="block b25block  col-md-12">
<script>
    $(document).ready(function () {

        if ('/Static/img/CustomBlocks/B25/Background.png' != 'null' && '/Static/img/CustomBlocks/B25/Background.png' != '') {
            $(".b25disclosure").css("background", "#245251 url(/Static/img/CustomBlocks/B25/Background.png) no-repeat");
            if (screen.width > 1000) {
                $(".b25need_help_main").css("background", "#245251 url(/Static/img/CustomBlocks/B25/Background.png) no-repeat");
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
                <h2 class="White">Get Started</h2>
                <div class="xhtml"><p style="text-align: center;">Speak to a Personal Banker to discuss your needs.</p></div>
                <div class="b25bottom" style="">
                    <center>
                    <a href="../../../pages/about-us/teams/personal-banking-sioux-falls-team/index.html" class="b25mainanchor">Contact Us</a><br clear="all"/>
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
            <h2>Additional Lending Options</h2> 

            <div class="b17free_mobile_banking_right">
                    <h3><p>Home Mortgage Loans</p></h3>
                                <div class="xhtml"><p>We have access to an array of loan products and use fast, state-of-the-art loan processing.&nbsp; Whether you're buying or building a home or refinancing your existing mortgage, we offer competitive rates on loans of all sizes - with personal service and local decision-making.</p></div>
                <div class="b17PayLinks payIcon-space">
                </div>

                <!-- Button and Footer Links go here ... -->
                                <a href="../../mortgages/index.html" class="b17readmore">Learn More</a>
            </div>

                <div class="b17free_mobile_banking_left right">
                    <img class="img-responsive" id="imgMainImage" style="border-radius:50%" src="{{asset('assets/frontend/contentassets/b94c16ca6aca4b229c7ef72d6d03daed/1.4.1_b-17-promo_planning-min-left.png')}}" alt="First PREMIER Bank">
                </div>
        </div>
    </div>

        <div class="b15benfits_main_box b17cards">
            <div class="container">
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar">
                                <img src="{{asset('assets/frontend/contentassets/1e50006b679f4da9881010b847dabf70/everfi-loans-and-payments.png')}}" title="Loans &amp; Payments" alt="couple laying on floor looking at house blueprints" width="116px" height="116px"></div>
                                <div class="b15avtar_content">
                                    <h3>Loans &amp; Payments</h3>
                                    <p>Are you looking to better understand payment options for your lifestyle? Our interactive module will help you understand different payment and payoff options.</p>
                                    <div class="clearfix"></div><br />
                                            <a href="#" data-toggle="modal" data-target="#a3950571778" data-backdrop="false" class="b15learnmore">Learn More</a>
                                            <div id="a3950571778" class="modal fade" role="dialog">
                                                <div class="modal-dialog pop_board">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="pop_main_container_board">
                                                                <button type="button" class="close" data-dismiss="modal" area-label="Close">
                                                                    <span aria-hidden="true">
                                                                        <img class="close_icon" src="{{asset('assets/frontend/Static/img/closebutton-2.png')}}" alt="First PREMIER Bank" style="height:17px !important; width:17px !important;" />
                                                                    </span>
                                                                </button>
                                                                <div class="pop_main_container">
                                                                        <h2>Loans &amp; Payments</h2>
                                                                    <div class="pop_board_white">
                                                                        <div class="row">
                                                                            <div class="col-md-12" style="padding-left:40px;">
                                                                                <h4 class="Blue">You will be leaving firstpremier.com</h4>
                                                                                <div class="b46Blue" style="text-align:left;">
                                                                                    <p>Please note, by clicking &ldquo;continue&rdquo; you will be redirected to a website that is not operated or controlled by PREMIER. PREMIER is not responsible for the content, links, privacy policy or security of that website. Your use of that website is subject to its terms of use and privacy policy. Thank you for visiting firstpremier.com. If you continue, we hope you find the information presented educational and useful.</p>
                                                                                    <p><br /><a href="https://firstpremier.everfi-next.net/student/dashboard/financialeducation-achieve/financial-foundations/1687#car-loans/getting-started" target="_blank">Continue</a></p>
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
                                <img src="{{asset('assets/frontend/globalassets/images/secondary-icons/green/business-finance/green-business-_-finance-secondary-icon-21.png')}}" title="Small Business Loans" alt="couple laying on floor looking at house blueprints" width="116px" height="116px"></div>
                                <div class="b15avtar_content">
                                    <h3>Small Business Loans</h3>
                                    <p>We're a top Small Business Administration (SBA) lender. From small business loans to lines of credit, we can help.</p>
                                    <div class="clearfix"></div><br />
                                            <a href="../../../small-business/loans-and-credit-lines/small-business-loans/index.html">Learn More</a>
                                </div>
                            </div>
            </div>
        </div>

    <div id="a39505717" class="modal fade" role="dialog">
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
                                <h2>Additional Lending Options</h2>
                            <div class="pop_board_white">
                                <div class="row">
                                    <div class="col-md-12" style="padding-left:40px;">
                                        <h4 class="Blue"></h4>
                                        <div class="b46Blue" style="text-align:left;">
                                            
                                            <p><br /><a href="../../mortgages/index.html" target="_blank"></a></p>
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
                
                <h4> Disclosures </h4>
                <div class="b13points">
                    <p>{1} The Annual Percentage Rate may change.</p>
<p>{2} When you overdraw your checking account, advances will be made in established increments.&nbsp; A $12 Overdraft Protection Fee will be assessed to your checking account for each automatic transfer from a First PREMIER Bank line of credit to cover an overdraft.&nbsp; This fee does not apply to any manual transfer such as by phone, in person or online, or to Reward Checking customers.</p>
                </div>
            </div>
        </div>
</section></div><div class="block b26block  col-md-12">



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
    var alternateBackground = "True";
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
                            <div class='item active'><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad'><div class='b26line_credit_loans_left'><img src='{{asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-personal-checking.png')}}' alt='woman on couch using mobile phone'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Personal Checking</h3></div><h3><br clear='all'/><div class="xhtml"><p>From FREE+ Checking with Online &amp; Mobile Banking, we&rsquo;ve got you covered.</p>
<ul>
<li><a href="../../personal-checking/free-plus-checking/index.html">FREE+ Checking</a></li>
<li><a href="../../personal-checking/reward-checking/index.html">Reward Checking</a></li>
<li><a href="../../online-and-mobile/index.html">Online &amp; Mobile Banking</a></li>
</ul></div></h3></div></div><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans b26line_personal_loans no-pad'><div class='b26line_credit_loans_left'><img src='{{asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-grow-wealth.png')}}' alt=''></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Grow Your Wealth</h3></div><h3><br clear='all'/><div class="xhtml"><p>We offer concierge-style banking for higher net worth individuals, with managed investing and more.</p>
<ul>
<li><a href="../../wealth-management/private-banking/index.html">Private Banking</a></li>
<li><a href="../../wealth-management/managed-investing/index.html">Managed Investing</a></li>
<li><a href="../../wealth-management/personal-trust-services/index.html">Personal Trust Services</a></li>
</ul></div></h3></div></div><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad last'><div class='b26line_credit_loans_left'><img src='{{asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-why-bank-with-us.png')}}' alt='Sioux Falls South Dakota'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Why Bank with Us?</h3></div><h3><br clear='all'/><div class="xhtml"><p>As one of the nation&rsquo;s strongest capitalized banks, we&rsquo;re also debt-free. Learn more!</p>
<ul>
<li><a href="../../../pages/about-us/index.html">About Us</a></li>
<li><a href="../../../pages/about-us/the-premier-way/index.html">The PREMIER Way</a></li>
<li><a href="../../../pages/resources/sanford-health/first-premier-bank-sanford-partnership-offers/index.html">Giving Back to Community</a></li>
</ul></div></h3></div></div></div>
                        </div>
                    </div>
                </div>
                <div class="b26Mobile col-sm-6 hidden-md hidden-lg" style="left:-8px;">
                    <center>
                    <div class="b26MobileCard" style="width:345px;min-height:700px;">
                        <div class='item'><div class='col-xs-12 col-sm-12 b26AltClass b26line_credit_loans b26line_personal_loans no-pad '><div><img src='{{asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-personal-checking.png')}}' alt='woman on couch using mobile phone'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Personal Checking</h3></div><h3><br clear='all'/><div class="xhtml"><p>From FREE+ Checking with Online &amp; Mobile Banking, we&rsquo;ve got you covered.</p>
<ul>
<li><a href="../../personal-checking/free-plus-checking/index.html">FREE+ Checking</a></li>
<li><a href="../../personal-checking/reward-checking/index.html">Reward Checking</a></li>
<li><a href="../../online-and-mobile/index.html">Online &amp; Mobile Banking</a></li>
</ul></div></h3></div></div></div><div class='item'><div class='col-xs-12 col-sm-12 b26AltClass b26line_credit_loans b26line_personal_loans no-pad '><div><img src='{{asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-grow-wealth.png')}}' alt=''></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Grow Your Wealth</h3></div><h3><br clear='all'/><div class="xhtml"><p>We offer concierge-style banking for higher net worth individuals, with managed investing and more.</p>
<ul>
<li><a href="../../wealth-management/private-banking/index.html">Private Banking</a></li>
<li><a href="../../wealth-management/managed-investing/index.html">Managed Investing</a></li>
<li><a href="../../wealth-management/personal-trust-services/index.html">Personal Trust Services</a></li>
</ul></div></h3></div></div></div><div class='item'><div class='col-xs-12 col-sm-12 b26AltClass b26line_credit_loans b26line_personal_loans no-pad '><div><img src='{{asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-why-bank-with-us.png')}}' alt='Sioux Falls South Dakota'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Why Bank with Us?</h3></div><h3><br clear='all'/><div class="xhtml"><p>As one of the nation&rsquo;s strongest capitalized banks, we&rsquo;re also debt-free. Learn more!</p>
<ul>
<li><a href="../../../pages/about-us/index.html">About Us</a></li>
<li><a href="../../../pages/about-us/the-premier-way/index.html">The PREMIER Way</a></li>
<li><a href="../../../pages/resources/sanford-health/first-premier-bank-sanford-partnership-offers/index.html">Giving Back to Community</a></li>
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
            <a href="../../../small-business/index.html">Small Business</a> 
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
 <p>Member FDIC | <img src="{{asset('assets/frontend/Static/img/equalhousinglender.png')}}" alt="Equal Housing Lender" title="Equal Housing Lender" />Equal Housing Lender</p>            </div>
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
    .showehllogo { background: url('{{asset("assets/frontend/Static/img/EHLlogo%20white.png")}}') 230px 0px no-repeat; background-size: 24px 24px }
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
    <div class="smallLogo"><a href="../../../index.html" title="First PREMIER Bank - Home"><img src="{{asset('assets/frontend/Static/gfx/Logo.png')}}" style="max-width:100%;" /></a></div>
    <script type="text/javascript" src="../../../../../dl.episerver.net/13.4.4.1/epi-util/find.js"></script>
<script type="text/javascript">
if(FindApi){var api = new FindApi();api.setApplicationUrl('../../../../index.html');api.setServiceApiBaseUrl('../../../../find_v2/index.html');api.processEventFromCurrentUri();api.bindWindowEvents();api.bindAClickEvent();api.sendBufferedEvents();}
</script>

    <script type="text/javascript" src="../../../../Static/js/pushy.js"></script>
    <script type="text/javascript" src="../../../../Static/js/Blocks_2019062002.js"></script>
@endsection