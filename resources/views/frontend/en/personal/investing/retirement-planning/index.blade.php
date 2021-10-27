
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
    .b46productpage { float:left; width:100%; padding:80px 0px 50px 0px; text-align:center; background:#fff url("{{asset('assets/frontend/globalassets/images/backgrounds/grey-2.svg')}}") no-repeat;}
</style>
<section class="row-full">
    <div class="b46productpage">
        <div class="container">
            <h1>Personal Retirement Planning</h1>
                <img src="{{asset('assets/frontend/contentassets/b6bbaa5cd0094c6fbba9334ee6eaab92/1.6.2_b-46-hero_couple-min.png')}}" alt="First PREMIER Bank">
                            <h2>Make Smart Choices for Your Future</h2>
            <p style="text-align: center;">It's never too early - or too late - to develop a plan that will carry you to a comfortable retirement.&nbsp;<br />First PREMIER can help you navigate the road ahead to meet your financial goals.</p>



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
                            <div class="b16imgcrop"><img src="{{asset('assets/frontend/contentassets/8462830266934af48e44f47d607d6361/1.6.2_b-16-list01_alternating-2_planning-min.png')}}" title="Planning for Retirement" alt="couple planning for retirement on laptop"></div>
                        </div>
                        <div class="b16basic_box_left">
                                <h2>Planning for Retirement</h2>

                                <div class="xhtml"><p>We can assist with 401(k) rollovers, Individual Retirement Accounts (IRAs) more. An IRA is a tax-efficient way for you to save, and allows your money to grow tax free while it's in the account. The type of IRA you choose will depend on your age, income and financial goals. You can also&nbsp;<a href="https://www.irs.gov/retirement-plans/individual-retirement-arrangements-iras">visit the IRS</a>&nbsp;for more information.</p></div>
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
</div><div class="block b56block  col-md-12">

<style>
    .pop_main_container_board .pop_main_container ol li ol li {  }
</style>
<style>
    .tab_h4 { display: inline !important;}
</style>

<section>
    <div class="b56lines-credit-main">
        <div class="container">
            <h2>Which IRA Is Best For You?</h2>
            <div class="b56lines-credit-table-sectopn b56mobile_section">
                <table class="b56lines-credit-table">
                    <tr>
                        <td style="vertical-align:bottom;"><h4 class="tab_h4" style="float:right;"><p></p></h4></td>
                        <th>
                                <h3>Traditional IRA</h3>
                            <p>Make contributions with money that you may be able to deduct on your tax return. Earnings would grow tax-deferred until retirement withdrawal.</p>
                        </th>
                        <th>
                                <h3>Roth IRA</h3>
                            <p>Make contributions with money on which you've already paid taxes. Funds can potentially grow tax-free until retirement when certain conditions apply.</p>
                        </th>
                    </tr>
                    <tr><td><h4><p style="text-align: right;">TAX BENEFITS</p></h4></td><td><p>Tax-deferred growth with tax-deductible contributions.</p></td><td><p>Tax-free growth with tax-free qualified withdrawals.</p></td></tr><tr><td><h4><p style="text-align: right;">CONTRIBUTION RESTRICTIONS</p></h4></td><td><p>Contribute until you're 70&frac12;.</p></td><td><p>Contribute at any age</p></td></tr><tr><td><h4><p style="text-align: right;">INCOME REQUIREMENTS</p></h4></td><td><p>Income does not determine how much you can contribute</p></td><td><p>Income impacts how much you may contribute</p></td></tr><tr><td><h4><p style="text-align: right;">WITHDRAWAL TAXES</p></h4></td><td><p>Pay taxes when you withdraw pre-tax contributions and/or when you withdraw any earnings.</p></td><td><p>No taxes when you withdraw your contributions or earnings, as long as the five-year aging requirement has been met.</p></td></tr><tr><td><h4><p style="text-align: right;">EARLY WITHDRAWAL PENALTIES</p></h4></td><td><p>Making withdrawals before age 59&frac12; may result in a 10% penalty.</p></td><td><p>Make withdrawals before you're 59&frac12; and you may pay taxes on your earnings plus a 10% additional tax.</p></td></tr>
                </table>

                <!--Mobile table Starts-->
                <table class="b56lines-credit-table b56mobile_lines-credit-table">
                    <tr>
                        <td>
                                <h3>Traditional IRA</h3>
                            <p>Make contributions with money that you may be able to deduct on your tax return. Earnings would grow tax-deferred until retirement withdrawal.</p>
                        </td>
                    </tr>
                    <tr><td><hr /></td></tr>
                    <tr>
                        <td>
                            <table>
                                <tr><td class='odd'><p style="text-align: right;">TAX BENEFITS</p></td></tr><tr><td><p>Tax-deferred growth with tax-deductible contributions.</p></td></tr><tr><td class='odd'><p style="text-align: right;">CONTRIBUTION RESTRICTIONS</p></td></tr><tr><td><p>Contribute until you're 70&frac12;.</p></td></tr><tr><td class='odd'><p style="text-align: right;">INCOME REQUIREMENTS</p></td></tr><tr><td><p>Income does not determine how much you can contribute</p></td></tr><tr><td class='odd'><p style="text-align: right;">WITHDRAWAL TAXES</p></td></tr><tr><td><p>Pay taxes when you withdraw pre-tax contributions and/or when you withdraw any earnings.</p></td></tr><tr><td class='odd'><p style="text-align: right;">EARLY WITHDRAWAL PENALTIES</p></td></tr><tr><td><p>Making withdrawals before age 59&frac12; may result in a 10% penalty.</p></td></tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td>&nbsp;</td></tr>
                    <tr>
                        <td>
                                <h3>Roth IRA</h3>
                            <p>Make contributions with money on which you've already paid taxes. Funds can potentially grow tax-free until retirement when certain conditions apply.</p>
                        </td>
                    </tr>
                    <tr><td><hr /></td></tr>
                    <tr>
                        <td>
                            <table>
                                <tr><td class='odd'><p style="text-align: right;">TAX BENEFITS</p></td></tr><tr><td><p>Tax-free growth with tax-free qualified withdrawals.</p></td></tr><tr><td class='odd'><p style="text-align: right;">CONTRIBUTION RESTRICTIONS</p></td></tr><tr><td><p>Contribute at any age</p></td></tr><tr><td class='odd'><p style="text-align: right;">INCOME REQUIREMENTS</p></td></tr><tr><td><p>Income impacts how much you may contribute</p></td></tr><tr><td class='odd'><p style="text-align: right;">WITHDRAWAL TAXES</p></td></tr><tr><td><p>No taxes when you withdraw your contributions or earnings, as long as the five-year aging requirement has been met.</p></td></tr><tr><td class='odd'><p style="text-align: right;">EARLY WITHDRAWAL PENALTIES</p></td></tr><tr><td><p>Make withdrawals before you're 59&frac12; and you may pay taxes on your earnings plus a 10% additional tax.</p></td></tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td>&nbsp;</td></tr>
                </table>
                <!--Mobile table Ends-->
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
                <span>Planning for Retirement</span>
                            <div class="b18detail xhtml"><p>Are you planning for retirement? Our interactive module will help you plan today for the life you want in retirement.</p></div>
                                                <a href="#" data-toggle="modal" data-target="#a12395517" class="b18mainanchor">Learn More</a>
        </div>
        <div class="b18great_feature_left b18great_feature_right payIcon-space">
                <span>We are here to help you:</span>
                            <div class="b18detail xhtml"><ul>
<li>Transfer assets from your former employer's retirement plan (401(k), profit-sharing plan, etc.)</li>
<li>Choose a traditional IRA or a Roth IRA</li>
<li>Keep your savings tax-deferred</li>
</ul></div>
                                </div>
        <div class="clearfix">
            <center>
            </center>
        </div>

    </div>
    <div id="a12395517" class="modal fade" role="dialog">
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
                                <h2>Planning for Retirement</h2>
                            <div class="pop_board_white">
                                <div class="row">
                                    <div class="col-md-12" style="padding-left:40px;">
                                        <h4 class="Blue">You will be leaving firstpremier.com</h4>
                                        <div class="b46Blue" style="text-align:left;">
                                            <p>Please note, by clicking &ldquo;continue&rdquo; you will be redirected to a website that is not operated or controlled by PREMIER. PREMIER is not responsible for the content, links, privacy policy or security of that website. Your use of that website is subject to its terms of use and privacy policy. Thank you for visiting firstpremier.com. If you continue, we hope you find the information presented educational and useful. </p>
                                            <p><br /><a href="https://firstpremier.everfi-next.net/student/dashboard/financialeducation-achieve/investing-in-your-future" target="_blank">Continue</a></p>
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
    <div id="b12395517" class="modal fade" role="dialog">
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
    <div id="c12395517" class="modal fade" role="dialog">
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
</div><div class="block b16block  col-md-12">

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

        <div class="b16basic_box_right_content b16basic_box_background">
            <div class="b16basic_box_main b16basic_box_grey">
                <div class="container">
                    <div class="b16basic_box">
                        <div class="b16basic_box_right">
                            <div class="b16imgcrop" style="margin-left:90px;"><img src="{{asset('assets/frontend/contentassets/daa24dc8a91b43f2a3b8446fbb2d1781/1.6.2_b-16-list01_alternating-1_family-min.png')}}" title="Choose Your Next Step:" alt="couple sitting on couch looking at retirement plan"></div>

                        </div>
                        <div class="b16basic_box_left payIcon-space">
                            <h2 style="padding-top:0px !important;">Choose Your Next Step:</h2>
                                <div class="xhtml"><p>We have several funding options with varying levels of planning and support based on your needs. We also offer easy online and mobile access to your accounts. Choose a&nbsp;link below to get started.</p>
<ul>
<li>Start with a savings account or CD to build your nest egg in an FDIC insured environment. Contact one of our <a href="../../../pages/about-us/teams/personal-banking-sioux-falls-team/index.html">Personal Bankers</a> to get started.</li>
<li>Get full financial planning and investment support, including professional portfolio management from our <a href="../../../pages/about-us/teams/wealth-management-team/index.html">Wealth Management Team</a>.</li>
<li>Opt for easy investing and let our <a href="../../../pages/about-us/teams/investing-services-team/index.html">Brokerage Services Team</a> help you select from an array of investment options with turnkey online access.<sup>1</sup><br /><br /></li>
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
 <p><img src="{{asset('assets/frontend/Static/img/equalhousinglender.png')}}" alt="Equal Housing Lender" title="Equal Housing Lender" />Equal Housing Lender</p>             </div>
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