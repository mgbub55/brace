@extends('frontend.layouts.app', ['page_title' => 'Business Debit Card - Business Checking | First PREMIER Bank'])

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
            <h1>Low Volume + Interest</h1>
                <img src="../../../../contentassets/eb42174b0be34b699fd79cfc0809c613/2.1.2_b-46-hero_woman-min.png" alt="First PREMIER Bank">
                            <h2>Simple Checking, Plus Interest</h2>
            <p>A great option for businesses with lower-volume transactions that want to earn interest on balances.<sup>1</sup></p>

                        <a href="../../../small-business/business-checking/compare-business-checking/index.html" class="b46button">COMPARE CHECKING</a>


                <div id="myModal" class="modal fade" role="dialog">
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
                                        <h2>Low Volume + Interest Deposit Account Rate</h2>
                                        <p style="text-align: center;">June 1, 2021<br /><br /></p>
<p style="text-align: center;">&nbsp;</p>
<div class="table_rate_modal">
<table style="height: 73px; width: 100%; border-collapse: collapse;" border="1">
<tbody>
<tr style="height: 54px;">
<td style="width: 20.8819%; height: 54px; text-align: center; font-size: 14px;">Account<br />Product <br />Name</td>
<td style="width: 11.9517%; text-align: center; height: 54px; font-size: 14px;">Minimum <br />Opening <br />Deposit</td>
<td style="width: 22.6791%; text-align: center; font-size: 14px; height: 54px;">Minimum Balance to Obtain <br />Annual Percentage Yield<br /><br /></td>
<td style="width: 11.6537%; text-align: center; height: 54px; font-size: 14px;">Interest <br />Rate<br /><br /></td>
<td style="width: 12.8336%; text-align: center; height: 54px; font-size: 14px;">Annual <br />Percentage <br />Yield</td>
</tr>
<tr style="height: 19px;">
<td style="width: 20.8819%; height: 19px; text-align: left;">Low Volume + Interest<sup>1</sup></td>
<td style="width: 11.9517%; text-align: center; height: 19px;">$500.00</td>
<td style="width: 22.6791%; text-align: center; height: 19px;">$500.00<sup>2</sup></td>
<td style="width: 11.6537%; text-align: center; height: 19px;">&nbsp;</td>
<td style="width: 12.8336%; text-align: center; height: 19px;">&nbsp;</td>
</tr>
<tr>
<td style="width: 20.8819%; text-align: center;">Daily Balances of:</td>
<td style="width: 11.9517%; text-align: center;">&nbsp;</td>
<td style="width: 22.6791%; text-align: center;">&nbsp;</td>
<td style="width: 11.6537%; text-align: center;">&nbsp;</td>
<td style="width: 12.8336%; text-align: center;">&nbsp;</td>
</tr>
<tr>
<td style="width: 20.8819%; text-align: right;">$0.00 - $499.99</td>
<td style="width: 11.9517%; text-align: center;">&nbsp;</td>
<td style="width: 22.6791%; text-align: center;">&nbsp;</td>
<td style="width: 11.6537%; text-align: center;">0.00%</td>
<td style="width: 12.8336%; text-align: center;">0.00%</td>
</tr>
<tr>
<td style="width: 20.8819%; text-align: right;">$500.00 - $9,999.99</td>
<td style="width: 11.9517%; text-align: center;">&nbsp;</td>
<td style="width: 22.6791%; text-align: center;">&nbsp;</td>
<td style="width: 11.6537%; text-align: center;">0.01%</td>
<td style="width: 12.8336%; text-align: center;">0.01%</td>
</tr>
<tr>
<td style="width: 20.8819%; text-align: right;">$10,000.00 - $49,999.99</td>
<td style="width: 11.9517%; text-align: center;">&nbsp;</td>
<td style="width: 22.6791%; text-align: center;">&nbsp;</td>
<td style="width: 11.6537%; text-align: center;">0.02%</td>
<td style="width: 12.8336%; text-align: center;">0.02%</td>
</tr>
<tr>
<td style="width: 20.8819%; text-align: right;">$50,000.00 - $149,999.99</td>
<td style="width: 11.9517%; text-align: center;">&nbsp;</td>
<td style="width: 22.6791%; text-align: center;">&nbsp;</td>
<td style="width: 11.6537%; text-align: center;">0.04%</td>
<td style="width: 12.8336%; text-align: center;">0.04%</td>
</tr>
<tr>
<td style="width: 20.8819%; text-align: right;">$150,000.00 - $499,999.99</td>
<td style="width: 11.9517%; text-align: center;">&nbsp;</td>
<td style="width: 22.6791%; text-align: center;">&nbsp;</td>
<td style="width: 11.6537%; text-align: center;">0.06%</td>
<td style="width: 12.8336%; text-align: center;">0.06%</td>
</tr>
<tr>
<td style="width: 20.8819%; text-align: right;">$500,000.00 and up</td>
<td style="width: 11.9517%; text-align: center;">&nbsp;</td>
<td style="width: 22.6791%; text-align: center;">&nbsp;</td>
<td style="width: 11.6537%; text-align: center;">0.08%</td>
<td style="width: 12.8336%; text-align: center;">0.08%</td>
</tr>
</tbody>
</table>
</div>
<p><br /><br /></p>
<p style="text-align: left;"><sup>1</sup>The interest rate and annual percentage yield may change after account opening</p>
<p style="text-align: left;"><sup>2</sup>Daily balance.&nbsp; The amount of the principal in the account each day</p>
<p style="text-align: left;">&nbsp;</p>
<p style="text-align: left;">Fees could reduce the earnings on the account<br />Interest Rates and Annual Percentage Yields are current as of June 1, 2021<br />For current rate information, call (605) 357-3000</p>
<p style="text-align: left;">&nbsp;</p>
<p style="text-align: left;">Member <br />FDIC</p>
                                        
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
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
                            <div class="b16imgcrop"><img src="../../../../contentassets/4a407123a3134553b3b0b95a7aa09365/2.1.2_b-16-list01_alternating-1_guy-right.png" title="Perfect, Low Volume Checking" alt="Male sitting on couch"></div>
                        </div>
                        <div class="b16basic_box_left">
                                <h2>Perfect, Low Volume Checking</h2>

                                <div class="xhtml"><ul>
<li>No minimum monthly balance. Interest paid on balances of $500 or more.<sup>1</sup></li>
<li>Tiered, variable interest rate<sup>2</sup></li>
<li>$5 monthly maintenance fee<sup>3</sup></li>
<li>150 free items per statement cycle. $0.20 per item thereafter (combination of debits and deposited items).<sup>4</sup>&nbsp;</li>
<li><a href="../../../small-business/business-checking/business-debit-mastercard/index.html">Debit Mastercard<strong style="color: #222222; font-family: Roboto, arial, sans-serif; font-size: 16px;">&reg;</strong></a>&nbsp;with built-in fraud protection</li>
<li>Access to 33,000+ surcharge-free <a title="Moneypass" href="../../../pages/quick-links/locations/index.html" target="_top">MoneyPass<strong style="color: #222222; font-family: Roboto, arial, sans-serif; font-size: 16px;">&reg;</strong> ATMs</a> nationwide</li>
<li>Available <a title="overdraft protection" href="../../../small-business/business-checking/overdraft-protection/index.html">overdraft protection</a></li>
</ul></div>
                            <!-- Button and Footer Links go here ... -->
                                        <a href="#" data-toggle="modal" data-target="#myModal" class="b16readmore">VIEW RATE</a>
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
                            <div class="b16imgcrop" style="margin-left:90px;"><img src="../../../../contentassets/ce1f69be0df749ca9ee9cd4f173dcb96/2.1.2_b-16-list01_alternating-2_team-min.png" title="FREE Online &amp; Mobile Banking" alt="Male and Female looking at tablet"></div>

                        </div>
                        <div class="b16basic_box_left payIcon-space">
                            <h2 style="padding-top:0px !important;">FREE Online &amp; Mobile Banking</h2>
                                <div class="xhtml"><ul>
<li>Secure, 24/7 account access</li>
<li>State-of-the-art, feature-rich <a href="../../../small-business/online-and-mobile/index.html">online and mobile tools</a></li>
<li>View transactions, transfer funds, <a href="../../../personal/online-and-mobile/bill-pay/index.html">pay bills</a></li>
<li>Convenient&nbsp;<a href="../../../personal/online-and-mobile/estatements/index.html">eStatements</a> with PDF Download</li>
<li>View transactions and cancelled checks with ease</li>
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
                            <div class="b16imgcrop"><img src="../../../../contentassets/b066fa7fc0814924a5c047554165e483/2.1.2_b-16-list_01_alternating-2_womanlanyard-min.png" title="More Benefits &amp; Solutions" alt="Female Small Business Owner"></div>
                        </div>
                        <div class="b16basic_box_left">
                                <h2>More Benefits &amp; Solutions</h2>

                                <div class="xhtml"><ul>
<li>Ability to link and administer mulptile accounts online</li>
<li>Control employee access to accounts and statements</li>
<li><a title="Mastercard Debit Card" href="../../../small-business/business-checking/business-debit-mastercard/index.html">Debit Mastercard&reg;</a>&nbsp;issuance to authorized employees</li>
<li>Access to 33,000+ surcharge-free <a title="Moneypass" href="../../../pages/quick-links/locations/index.html">MoneyPass&reg; ATMs</a> nationwide</li>
<li>Available <a title="overdraft protection" href="../../../small-business/business-checking/overdraft-protection/index.html">overdraft protection</a> with a business line of credit</li>
<li>Available <a title="Business Rewards Mastercard Credit Card" href="../../../small-business/business-services/business-rewards-mastercard/index.html">Business Rewards Mastercard&reg; Credit Card</a></li>
<li><a title="Positive Pay" href="../../../small-business/business-services/positive-pay/index.html">Positive Pay</a> fraud prevention for check and <a title="ACH payments" href="../../../small-business/business-services/make-payments/index.html">ACH payments</a><br /><br /></li>
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
        <h2> Reliable Security &amp; Fraud Protection </h2>
        <div class="b18great_feature_left">
                            <div class="b18detail xhtml"><h3>Security &amp; Fraud Protection</h3>
<p>&nbsp;</p>
<ul>
<li>24/7 debit card fraud monitoring</li>
<li>Zero Liability&reg; Fraud Protection</li>
<li>Multi-factor authentication and strong encryption</li>
<li>Instant lock/unlock lost for stolen debit cards</li>
<li>Available <a href="../../../small-business/business-services/positive-pay/index.html">Positive Pay</a> for added security</li>
</ul>
<p>&nbsp;</p></div>
                                                <a href="../../../small-business/business-checking/security-and-fraud-protection/index.html" class="b18mainanchor">Learn More</a>
        </div>
        <div class="b18great_feature_left b18great_feature_right payIcon-space">
                            <div class="b18detail xhtml"><h3>Controlled Access To Your Accounts</h3>
<p>&nbsp;</p>
<ul>
<li>Manage account via <a title="Online &amp; Mobile Banking" href="../../../small-business/online-and-mobile/index.html">Online and Mobile Banking</a></li>
<li>Add/remove authorized employees</li>
<li>Establish individual debit card spending limits</li>
<li>Customize access to accounts and <a title="eStatements" href="../../../small-business/online-and-mobile/estatements/index.html">eStatements</a></li>
<li>Monitor transactions and spending</li>
</ul>
<p>&nbsp;</p></div>
                                                <a href="../../../small-business/online-and-mobile/index.html" class="b18mainanchor">Learn More</a>
        </div>
        <div class="clearfix">
            <center>
            </center>
        </div>

    </div>
    <div id="a48685588" class="modal fade" role="dialog">
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
                            <div class="pop_board_white">
                                <div class="row">
                                    <div class="col-md-12" style="padding-left:40px;">
                                        <h4 class="Blue"></h4>
                                        <div class="b46Blue" style="text-align:left;">
                                            
                                            <p><br /><a href="../../../small-business/business-checking/security-and-fraud-protection/index.html" target="_blank"></a></p>
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
    <div id="b48685588" class="modal fade" role="dialog">
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
                            <div class="pop_board_white">
                                <div class="row">
                                    <div class="col-md-12" style="padding-left:40px;">
                                        <h4 class="Blue"></h4>
                                        <div class="b46Blue" style="text-align:left;">
                                            
                                            <p><br /><a href="../../../small-business/online-and-mobile/index.html" target="_blank"></a></p>
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
    <div id="c48685588" class="modal fade" role="dialog">
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
                                <h2>Reliable Security &amp; Fraud Protection</h2>
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
                <h2 class="White">Get Started Today!</h2>
                <div class="xhtml"><p>Whether you&rsquo;re starting from scratch or transferring your account, our business bankers can help you select a checking account to support your business needs.</p></div>
                <div class="b25bottom" style="">
                    <center>
                    <a href="../../../pages/about-us/teams/small-business-banking-team/index.html" class="b25mainanchor">Contact Us</a><br clear="all"/>
                        <div class="b25footerlinks">
                                <center>
                                    <a class="b25mainanchorLink" href="../../../small-business/business-checking/compare-business-checking/index.html">Business Checking Comparison Chart</a>
                                </center>
                        </div>
                    </center>
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
                
                <h4> Disclosure </h4>
                <div class="b13points">
                    <p>{1} Interest not paid on days the balance falls below $500</p>
<p>{2} At our discretion, we may change the interest rate daily. Interest is calculated using the daily balance method. Interest is compounded.</p>
<p>{3} A $5 monthly paper statement fee is assessed to customers receiving paper statements.</p>
<p>{4} &ldquo;Transaction&rdquo; refers to any combination of items, paid or unpaid, including paper and electronic. 150 free total transactions represents a combination of withdrawals and deposits before withdrawal and deposit fees apply. First PREMIER will assess a cost-per-excess transaction fee over transactions allowed per statement cycle. Withdrawals do not include transactions made using a First PREMIER Bank Business Debit Card, transactions initiated through wire transfer, transactions initiated through online bill payment, or transfers initiated through Business Online Banking. Deposits do not include transactions made at an ATM, through Mobile Deposit, or transfers made through Business Online Banking. <br /><br /></p>
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
                            <div class='item active'><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad'><div class='b26line_credit_loans_left'><img src='../../../../globalassets/ymabii/commercial/b-17-promo-01-commercial-bank-confidence.png' alt=''></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Bank with Confidence</h3></div><h3><br clear='all'/><div class="xhtml"><p>From low- or high-volume checking, to savings and CDs, to Online Banking, we&rsquo;ve got you covered.</p>
<ul>
<li><a href="../index.html">Business Checking</a></li>
<li><a href="../../savings-and-cds/index.html">Business Savings &amp; CDs</a></li>
<li><a href="../../treasury-services/cash-management/business-online-banking/index.html">Online &amp; Mobile Tools</a></li>
</ul></div></h3></div></div><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans b26line_personal_loans no-pad'><div class='b26line_credit_loans_left'><img src='../../../../globalassets/ymabii/commercial/b-17-promo-01-commercial-finance-growth.png' alt='construction workers looking at blueprints'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Finance Growth</h3></div><h3><br clear='all'/><div class="xhtml"><p>We offer business lines of credit, term loans of any size and commercial real estate lending.</p>
<ul>
<li><a href="../../financing/commercial-lending/index.html">Business Loans</a></li>
<li><a href="../../financing/business-lines-of-credit/index.html">Business Lines of Credit</a></li>
<li><a href="../../financing/business-debit-mastercard/index.html">Business Rewards Mastercard</a>&reg;</li>
</ul></div></h3></div></div><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad last'><div class='b26line_credit_loans_left'><img src='../../../../globalassets/ymabii/commercial/b-17-promo-01-manage-assets.png' alt='business men looking over report'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Manage Assets</h3></div><h3><br clear='all'/><div class="xhtml"><p>Look after your assets, invest wisely and plan for the future by putting your funds to work for you.</p>
<ul>
<li><a href="../../asset-management-and-trust/business-planning-and-investing/index.html">Business Planning &amp; Investing</a></li>
<li><a href="../../asset-management-and-trust/employee-benefits/index.html">Employee Benefits</a></li>
<li><a href="../../asset-management-and-trust/business-trust-services/index.html">Business Trust Services</a></li>
</ul></div></h3></div></div></div>
                        </div>
                    </div>
                </div>
                <div class="b26Mobile col-sm-6 hidden-md hidden-lg" style="left:-8px;">
                    <center>
                    <div class="b26MobileCard" style="width:345px;min-height:700px;">
                        <div class='item'><div class='col-xs-12 col-sm-12 b26AltClass b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../../globalassets/ymabii/commercial/b-17-promo-01-commercial-bank-confidence.png' alt=''></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Bank with Confidence</h3></div><h3><br clear='all'/><div class="xhtml"><p>From low- or high-volume checking, to savings and CDs, to Online Banking, we&rsquo;ve got you covered.</p>
<ul>
<li><a href="../index.html">Business Checking</a></li>
<li><a href="../../savings-and-cds/index.html">Business Savings &amp; CDs</a></li>
<li><a href="../../treasury-services/cash-management/business-online-banking/index.html">Online &amp; Mobile Tools</a></li>
</ul></div></h3></div></div></div><div class='item'><div class='col-xs-12 col-sm-12 b26AltClass b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../../globalassets/ymabii/commercial/b-17-promo-01-commercial-finance-growth.png' alt='construction workers looking at blueprints'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Finance Growth</h3></div><h3><br clear='all'/><div class="xhtml"><p>We offer business lines of credit, term loans of any size and commercial real estate lending.</p>
<ul>
<li><a href="../../financing/commercial-lending/index.html">Business Loans</a></li>
<li><a href="../../financing/business-lines-of-credit/index.html">Business Lines of Credit</a></li>
<li><a href="../../financing/business-debit-mastercard/index.html">Business Rewards Mastercard</a>&reg;</li>
</ul></div></h3></div></div></div><div class='item'><div class='col-xs-12 col-sm-12 b26AltClass b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../../globalassets/ymabii/commercial/b-17-promo-01-manage-assets.png' alt='business men looking over report'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Manage Assets</h3></div><h3><br clear='all'/><div class="xhtml"><p>Look after your assets, invest wisely and plan for the future by putting your funds to work for you.</p>
<ul>
<li><a href="../../asset-management-and-trust/business-planning-and-investing/index.html">Business Planning &amp; Investing</a></li>
<li><a href="../../asset-management-and-trust/employee-benefits/index.html">Employee Benefits</a></li>
<li><a href="../../asset-management-and-trust/business-trust-services/index.html">Business Trust Services</a></li>
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
            <a href="../../index.html">Commercial</a> 
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
@endsection
