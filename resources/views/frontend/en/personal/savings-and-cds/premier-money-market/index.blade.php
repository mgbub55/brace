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
    .b46productpage { float:left; width:100%; padding:80px 0px 50px 0px; text-align:center; background:#fff url("{{asset('assets/frontend/Static/img/Pages/P2/grey-1.svg')}}") no-repeat;}
</style>
<section class="row-full">
    <div class="b46productpage">
        <div class="container">
            <h1>PREMIER Money Market</h1>
                <img src="{{asset('assets/frontend/contentassets/2f96adf307e04395a551631677dab161/1.3.2_b-46_family.png')}}" alt="First PREMIER Bank">
                            <h2>Higher Interest on Higher Balances</h2>
            <p>A great option for individuals who expect premium interest on higher balances.&nbsp;<br />Use your account for overdraft protection<sup>1</sup> and get FREE Online and Mobile Banking.</p>

                        <a href="../../../pages/resources/forms/apply-now/index.html" class="b46button">APPLY NOW</a>


                <div id="myModal" class="modal fade" role="dialog">
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
                                        <h2>PREMIER Money Market Deposit Account Rates</h2>
                                        <p style="text-align: center;">June 1, 2021<br /><br /></p>
<p style="text-align: center;">&nbsp;</p>
<div class="table_rate_modal">
<table style="width: 100%; height: 237px; border-collapse: collapse;" border="1">
<tbody>
<tr style="height: 54px;">
<td style="height: 54px; text-align: center; font-size: 14px; width: 40%;">Account<br />Product <br />Name</td>
<td style="text-align: center; height: 54px; font-size: 14px; width: 20%;">Minimum <br />Opening <br />Deposit</td>
<td style="text-align: center; height: 54px; font-size: 14px; width: 20%;">Interest <br />Rate<br /><br /></td>
<td style="text-align: center; height: 54px; font-size: 14px; width: 20%;">Annual <br />Percentage <br />Yield</td>
</tr>
<tr style="height: 19px;">
<td style="height: 19px; width: 40%;">PREMIER Money Market<sup>1,2<br /></sup></td>
<td style="text-align: center; height: 19px; width: 20%;">$500.00</td>
<td style="text-align: center; height: 19px; width: 20%;">&nbsp;</td>
<td style="text-align: center; height: 19px; width: 20%;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="text-align: center; height: 18px; width: 40%;">Daily Balances of:</td>
<td style="text-align: center; height: 18px; width: 20%;">&nbsp;</td>
<td style="text-align: center; height: 18px; width: 20%;">&nbsp;</td>
<td style="text-align: center; height: 18px; width: 20%;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="text-align: right; height: 18px; width: 40%;">$0.00 to $9,999.99</td>
<td style="text-align: center; height: 18px; width: 20%;">&nbsp;</td>
<td style="text-align: center; height: 18px; width: 20%;">0.01%</td>
<td style="text-align: center; height: 18px; width: 20%;">0.01%</td>
</tr>
<tr style="height: 20px;">
<td style="text-align: right; height: 20px; width: 40%;">$10,000.00 - $24,999.99</td>
<td style="text-align: center; height: 20px; width: 20%;">&nbsp;</td>
<td style="text-align: center; height: 20px; width: 20%;">0.02%</td>
<td style="text-align: center; height: 20px; width: 20%;">0.02%</td>
</tr>
<tr style="height: 18px;">
<td style="text-align: right; height: 18px; width: 40%;">$25,000.00 - $49,999.99</td>
<td style="text-align: center; height: 18px; width: 20%;">&nbsp;</td>
<td style="text-align: center; height: 18px; width: 20%;">0.03%</td>
<td style="text-align: center; height: 18px; width: 20%;">0.03%</td>
</tr>
<tr style="height: 18px;">
<td style="text-align: right; height: 18px; width: 40%;">$50,000.00 - $99,999.99</td>
<td style="text-align: center; height: 18px; width: 20%;">&nbsp;</td>
<td style="text-align: center; height: 18px; width: 20%;">0.04%</td>
<td style="text-align: center; height: 18px; width: 20%;">0.04%</td>
</tr>
<tr style="height: 18px;">
<td style="text-align: right; height: 18px; width: 40%;">$100,000.00 - $249,999.99</td>
<td style="text-align: center; height: 18px; width: 20%;">&nbsp;</td>
<td style="text-align: center; height: 18px; width: 20%;">0.06%</td>
<td style="text-align: center; height: 18px; width: 20%;">0.06%</td>
</tr>
<tr style="height: 18px;">
<td style="text-align: right; height: 18px; width: 40%;">$250,000.00 - $499,999.99</td>
<td style="text-align: center; height: 18px; width: 20%;">&nbsp;</td>
<td style="text-align: center; height: 18px; width: 20%;">0.08%</td>
<td style="text-align: center; height: 18px; width: 20%;">0.08%</td>
</tr>
<tr style="height: 18px;">
<td style="text-align: right; height: 18px; width: 40%;">$500,000.00 - $999,999.99</td>
<td style="text-align: center; height: 18px; width: 20%;">&nbsp;</td>
<td style="text-align: center; height: 18px; width: 20%;">0.10%</td>
<td style="text-align: center; height: 18px; width: 20%;">0.10%</td>
</tr>
<tr style="height: 18px;">
<td style="text-align: right; height: 18px; width: 40%;">$1,000,000.00+</td>
<td style="text-align: center; height: 18px; width: 20%;">&nbsp;</td>
<td style="text-align: center; height: 18px; width: 20%;">0.12%</td>
<td style="text-align: center; height: 18px; width: 20%;">0.12%</td>
</tr>
</tbody>
</table>
</div>
<p><br /><br /></p>
<p style="text-align: left;"><sup>1</sup>The interest rate and annual percentage yield may change after account opening</p>
<p style="text-align: left;"><sup>2</sup>Daily balance. The amount of the principal in the account each day</p>
<p><br />&nbsp; Fees could reduce the earnings on the account<br />&nbsp; Interest Rates and Annual Percentage Yields are current as of June 1, 2021<br />&nbsp; For current rate information, call (605) 357-3000</p>
<p>&nbsp;</p>
<p>&nbsp; Member<br />&nbsp; FDIC</p>

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
                            <div class="b16imgcrop"><img src="{{asset('assets/frontend/contentassets/34710ce0ddbf46c29b25035a9f9dda7b/1.3.2_b-16-list01_alternating-1_lady-min-right.png')}}" title="Account Features" alt="woman writing at desk"></div>
                        </div>
                        <div class="b16basic_box_left">
                                <h2>Account Features</h2>

                                <div class="xhtml"><ul>
<li>Higher savings balances get you a higher rate</li>
<li>Ability to write checks from your account<sup>1</sup></li>
<li>Easy fund transfers between accounts<sup>1</sup></li>
<li><a href="../../online-and-mobile/index.html">FREE Online and Mobile Banking</a></li>
<li>FREE&nbsp;<a href="../../online-and-mobile/bill-pay/index.html">Bill Pay</a><sup>1</sup> and <a href="../../online-and-mobile/mobile-deposit/index.html">Mobile Deposit</a></li>
<li>Use your savings as instant <a href="../../personal-checking/overdraft-protection/index.html">overdraft protection</a><sup>1</sup></li>
<li>Access to 33,000+ surcharge-free <a href="../../../pages/quick-links/locations/index.html">MoneyPass&reg;&nbsp;ATMs&nbsp;</a></li>
<li>FDIC Insured</li>
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
                            <div class="b16imgcrop" style="margin-left:90px;"><img src="{{asset('assets/frontend/contentassets/7960263db9ca4b73af27e5baa25dd29b/1.3.2_b-16-list01_alternating-2_couple-min1.png')}}" title="Rates &amp; Requirements" alt="couple smiling looking at laptop"></div>

                        </div>
                        <div class="b16basic_box_left payIcon-space">
                            <h2 style="padding-top:0px !important;">Rates &amp; Requirements</h2>
                                <div class="xhtml"><ul>
<li>Tiered variable interest rate</li>
<li>$500 minimum opening balance</li>
<li>No minimum monthly balance</li>
<li>Withdrawal limitations apply<sup>1</sup></li>
</ul></div>

                            <!-- Button and Footer Links go here ... -->
                                        <a href="#" data-toggle="modal" data-target="#myModal" class="b16readmore">View Rate</a>
                            <!-- Button and Footer Links go here ... -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- View Rate [3] (within container)-->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="{{asset('assets/frontend/static/img/closebutton.png')}}" alt="Close" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_container">
                            <h2>PREMIER Money Market Deposit Account Rates</h2>
                            <p style="text-align: center;">June 1, 2021<br /><br /></p>
<p style="text-align: center;">&nbsp;</p>
<div class="table_rate_modal">
<table style="width: 100%; height: 237px; border-collapse: collapse;" border="1">
<tbody>
<tr style="height: 54px;">
<td style="height: 54px; text-align: center; font-size: 14px; width: 40%;">Account<br />Product <br />Name</td>
<td style="text-align: center; height: 54px; font-size: 14px; width: 20%;">Minimum <br />Opening <br />Deposit</td>
<td style="text-align: center; height: 54px; font-size: 14px; width: 20%;">Interest <br />Rate<br /><br /></td>
<td style="text-align: center; height: 54px; font-size: 14px; width: 20%;">Annual <br />Percentage <br />Yield</td>
</tr>
<tr style="height: 19px;">
<td style="height: 19px; width: 40%;">PREMIER Money Market<sup>1,2<br /></sup></td>
<td style="text-align: center; height: 19px; width: 20%;">$500.00</td>
<td style="text-align: center; height: 19px; width: 20%;">&nbsp;</td>
<td style="text-align: center; height: 19px; width: 20%;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="text-align: center; height: 18px; width: 40%;">Daily Balances of:</td>
<td style="text-align: center; height: 18px; width: 20%;">&nbsp;</td>
<td style="text-align: center; height: 18px; width: 20%;">&nbsp;</td>
<td style="text-align: center; height: 18px; width: 20%;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="text-align: right; height: 18px; width: 40%;">$0.00 to $9,999.99</td>
<td style="text-align: center; height: 18px; width: 20%;">&nbsp;</td>
<td style="text-align: center; height: 18px; width: 20%;">0.01%</td>
<td style="text-align: center; height: 18px; width: 20%;">0.01%</td>
</tr>
<tr style="height: 20px;">
<td style="text-align: right; height: 20px; width: 40%;">$10,000.00 - $24,999.99</td>
<td style="text-align: center; height: 20px; width: 20%;">&nbsp;</td>
<td style="text-align: center; height: 20px; width: 20%;">0.02%</td>
<td style="text-align: center; height: 20px; width: 20%;">0.02%</td>
</tr>
<tr style="height: 18px;">
<td style="text-align: right; height: 18px; width: 40%;">$25,000.00 - $49,999.99</td>
<td style="text-align: center; height: 18px; width: 20%;">&nbsp;</td>
<td style="text-align: center; height: 18px; width: 20%;">0.03%</td>
<td style="text-align: center; height: 18px; width: 20%;">0.03%</td>
</tr>
<tr style="height: 18px;">
<td style="text-align: right; height: 18px; width: 40%;">$50,000.00 - $99,999.99</td>
<td style="text-align: center; height: 18px; width: 20%;">&nbsp;</td>
<td style="text-align: center; height: 18px; width: 20%;">0.04%</td>
<td style="text-align: center; height: 18px; width: 20%;">0.04%</td>
</tr>
<tr style="height: 18px;">
<td style="text-align: right; height: 18px; width: 40%;">$100,000.00 - $249,999.99</td>
<td style="text-align: center; height: 18px; width: 20%;">&nbsp;</td>
<td style="text-align: center; height: 18px; width: 20%;">0.06%</td>
<td style="text-align: center; height: 18px; width: 20%;">0.06%</td>
</tr>
<tr style="height: 18px;">
<td style="text-align: right; height: 18px; width: 40%;">$250,000.00 - $499,999.99</td>
<td style="text-align: center; height: 18px; width: 20%;">&nbsp;</td>
<td style="text-align: center; height: 18px; width: 20%;">0.08%</td>
<td style="text-align: center; height: 18px; width: 20%;">0.08%</td>
</tr>
<tr style="height: 18px;">
<td style="text-align: right; height: 18px; width: 40%;">$500,000.00 - $999,999.99</td>
<td style="text-align: center; height: 18px; width: 20%;">&nbsp;</td>
<td style="text-align: center; height: 18px; width: 20%;">0.10%</td>
<td style="text-align: center; height: 18px; width: 20%;">0.10%</td>
</tr>
<tr style="height: 18px;">
<td style="text-align: right; height: 18px; width: 40%;">$1,000,000.00+</td>
<td style="text-align: center; height: 18px; width: 20%;">&nbsp;</td>
<td style="text-align: center; height: 18px; width: 20%;">0.12%</td>
<td style="text-align: center; height: 18px; width: 20%;">0.12%</td>
</tr>
</tbody>
</table>
</div>
<p><br /><br /></p>
<p style="text-align: left;"><sup>1</sup>The interest rate and annual percentage yield may change after account opening</p>
<p style="text-align: left;"><sup>2</sup>Daily balance. The amount of the principal in the account each day</p>
<p><br />&nbsp; Fees could reduce the earnings on the account<br />&nbsp; Interest Rates and Annual Percentage Yields are current as of June 1, 2021<br />&nbsp; For current rate information, call (605) 357-3000</p>
<p>&nbsp;</p>
<p>&nbsp; Member<br />&nbsp; FDIC</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
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
            <h2>Overdraft Protection</h2>

            <div class="b17free_mobile_banking_right">
                    <h3>Ensure Your Transactions are Covered</h3>
                                <div class="xhtml"><p>Use your PREMIER Money Market account as overdraft protection<sup>1</sup> for your First PREMIER Bank checking account, and ensure funds are always in place to cover your transactions.&nbsp;</p></div>
                <div class="b17PayLinks payIcon-space">
                </div>

                <!-- Button and Footer Links go here ... -->
                                <a href="../../personal-checking/overdraft-protection/index.html" class="b17readmore">Learn More</a>
            </div>

                <div class="b17free_mobile_banking_left right">
                    <img class="img-responsive" id="imgMainImage" style="border-radius:50%" src="{{asset('assets/frontend/contentassets/8a359ae079734fbc9a3718a1841eed12/1.3.2_b-17-text-with-image_malecchand-min.png')}}" alt="First PREMIER Bank">
                </div>
        </div>
    </div>

        <div class="b15benfits_main_box b17cards">
            <div class="container">
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar">
                                <img src="{{asset('assets/frontend/globalassets/images/secondary-icons/bright/business-finance/bright-business-_-finance-secondary-icon-15.png')}}" title="Regular Savings" alt="mobile phone" width="116px" height="116px"></div>
                                <div class="b15avtar_content">
                                    <h3>Regular Savings</h3>
                                    <p>A flexible way to save that's perfect for everyday or initial savings plans.</p>
                                    <div class="clearfix"></div><br />
                                            <a href="../regular-savings/index.html">Learn More</a>
                                </div>
                            </div>
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar">
                                <img src="{{asset('assets/frontend/globalassets/images/secondary-icons/gold/business-finance/gold-business-_-finance-secondary-icon-41.png')}}" title="Saving for Kids" alt="mobile phone" width="116px" height="116px"></div>
                                <div class="b15avtar_content">
                                    <h3>Saving for Kids</h3>
                                    <p>Teach your kids how to save for the future and watch their money grow.</p>
                                    <div class="clearfix"></div><br />
                                            <a href="../kids-savings/index.html">Learn More</a>
                                </div>
                            </div>
            </div>
        </div>

    <div id="a52906295" class="modal fade" role="dialog">
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
                                <h2>Overdraft Protection</h2>
                            <div class="pop_board_white">
                                <div class="row">
                                    <div class="col-md-12" style="padding-left:40px;">
                                        <h4 class="Blue"></h4>
                                        <div class="b46Blue" style="text-align:left;">

                                            <p><br /><a href="../../personal-checking/overdraft-protection/index.html" target="_blank"></a></p>
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
                    <p>{1} Savings withdrawals are generally limited to six per month. You may make an unlimited number of withdrawals in person, by mail or at an automated teller machine (ATM). If the monthly withdrawal limit is exceeded, a fee of $1 for each excess withdrawal will be assessed. Fees can reduce earnings on the account.</p>
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
    <div class="smallLogo"><a href="../../../index.html" title="First PREMIER Bank - Home"><img src="{{asset('assets/frontend/Static/gfx/Logo.png')}}" style="max-width:100%;" /></a></div>
    <script type="text/javascript" src="../../../../../dl.episerver.net/13.4.4.1/epi-util/find.js"></script>
<script type="text/javascript">
if(FindApi){var api = new FindApi();api.setApplicationUrl('../../../../index.html');api.setServiceApiBaseUrl('../../../../find_v2/index.html');api.processEventFromCurrentUri();api.bindWindowEvents();api.bindAClickEvent();api.sendBufferedEvents();}
</script>

    <script type="text/javascript" src="../../../../Static/js/pushy.js"></script>
    <script type="text/javascript" src="../../../../Static/js/Blocks_2019062002.js"></script>
@endsection
