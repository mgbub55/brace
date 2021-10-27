

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
            <h1>Personal Loans</h1>
                <img src="{{asset('assets/frontend/contentassets/10f11980e8664fcdbdfa040986751c8c/1.4.1_b-46-hero_handshake-min.png')}}" alt="First PREMIER Bank">
                            <h2>Because Lending is Always Personal</h2>
            <p style="text-align: center;">Whether you&rsquo;re consolidating debt, financing a special purchase, remodeling or repairing your home, <br />First PREMIER Bank can help you with array of lending options that meet your needs.</p>

                        <a href="https://umnasg7.umonitor.com/consumerloan/uLoan/welcome.do?auth=aa902f55464cde74" class="b46button">APPLY NOW</a>


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
                            <div class="b16imgcrop"><img src="{{asset('assets/frontend/contentassets/7d93916572a84cb381b3b67c59882715/1.4.1_b-16-list01_alternating-1_couple-min-right.png')}}" title="Increase Your Purchasing Power" alt="couple looking at house blueprints"></div>
                        </div>
                        <div class="b16basic_box_left">
                                <h2>Increase Your Purchasing Power</h2>

                                <div class="xhtml"><ul>
<li>Consolidate debt&nbsp;</li>
<li>Purchase a new car or refinance your auto loan</li>
<li>Finance a new toy, like a boat, RV or motorcycle</li>
<li>Repair or remodel your home&nbsp;</li>
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
                            <div class="b16imgcrop" style="margin-left:90px;"><img src="{{asset('assets/frontend/contentassets/80127001a67640399a28d2b6d87ce2f2/1.4.1_b-16-list-01-alternating-2_shakinghandshouse.png')}}" title="The Right Loan for You" alt="woman shaking hands with real estate agent outside of new home"></div>

                        </div>
                        <div class="b16basic_box_left payIcon-space">
                            <h2 style="padding-top:0px !important;">The Right Loan for You</h2>
                                <div class="xhtml"><ul>
<li>Competitive fixed or variable interest rates</li>
<li>Unsecured or secured loans</li>
<li>Multiple term options</li>
<li>No prepayment penalty</li>
<li>FREE <a href="../../online-and-mobile/index.html">Online and Mobile Banking</a></li>
</ul></div>

                            <!-- Button and Footer Links go here ... -->
                                    <div class="b16confidence_links">
                                            <a href="https://umnasg7.umonitor.com/consumerloan/uLoan/welcome.do?auth=aa902f55464cde74" class="b16readmore">Apply Now</a>
                                        <a class="b16mainlink" href="../../../pages/about-us/teams/personal-banking-sioux-falls-team/index.html">Contact Us</a>                                    </div>
                            <!-- Button and Footer Links go here ... -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- View Rate [3] (within container)-->
<!-- View Rate [3] (within container)-->
</div><div class="block b22block  col-md-12">
    <section class="row-full">

        <div class="b22additional-lending">
            <div class="container" style="">
                    <h4 class="Blue">More Lending Options</h4>
                <div class="b22additional-lending-left">
                    <h3>Home Mortgage Loans</h3>
                    <div class="xhtml"><p>Competitive rates on home mortgage and refinancing loans, with fast loan processing and local decision making.</p></div>
                        <a href="../../mortgages/index.html">Learn More</a>
                </div>

                <div class="b22additional-lending-righ">
                    <h3>Small Business Lending</h3>
                    <div class="xhtml"><p>We're a top Small Business Administration (SBA) lender. From business loans to lines of credit, we can help.</p></div>
                        <a href="../../../small-business/loans-and-credit-lines/small-business-loans/index.html">Learn More</a>
                </div>
            </div>
            <div class="b22spacer"></div>
        </div>
        <div id="a11900849" class="modal fade" role="dialog">
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
        <div id="b11900849" class="modal fade" role="dialog">
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
                                <div class="pop_board_white">
                                    <div class="row">
                                        <div class="col-md-12" style="padding-left:40px;">
                                            <h4 class="Blue"></h4>
                                            <div class="b46Blue" style="text-align:left;">

                                                <p><br /><a href="../../../small-business/loans-and-credit-lines/small-business-loans/index.html" target="_blank"></a></p>
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
            <h2>Flexible Lines of Credit</h2>

            <div class="b17free_mobile_banking_right">
                    <h3><p>Put Your Home Equity to Work for You</p></h3>
                                <div class="xhtml"><p>Establish a Home Equity Line of Credit and gain access to cash. Use it for home improvements or to help fund that dream vacation, with flexible payment options and terms.</p></div>
                <div class="b17PayLinks payIcon-space">
                </div>

                <!-- Button and Footer Links go here ... -->
                                <a href="../home-equity-line-of-credit/index.html" class="b17readmore">Learn More</a>
            </div>

                <div class="b17free_mobile_banking_left right">
                    <img class="img-responsive" id="imgMainImage" style="border-radius:50%" src="{{asset('assets/frontend/contentassets/a68f389345ec4f82b68b3cda8dc7dd84/1.4.1_b-17-promo_planning-min-left.png')}}" alt="First PREMIER Bank">
                </div>
        </div>
    </div>

        <div class="b15benfits_main_box b17cards">
            <div class="container">
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar">
                                <img src="{{asset('assets/frontend/contentassets/f2bfe50510ff425d8df0af9efe7df3fe/everfi-loans-and-payments.png')}}" title="Loans &amp; Payments" alt="couple laying on floor looking at house blueprints" width="116px" height="116px"></div>
                                <div class="b15avtar_content">
                                    <h3>Loans &amp; Payments</h3>
                                    <p>Are you looking to better understand payment options for your lifestyle? Our interactive module will help you understand different payment and payoff options.</p>
                                    <div class="clearfix"></div><br />
                                            <a href="#" data-toggle="modal" data-target="#a2187947NL" data-backdrop="false" class="b15learnmore">Learn More</a>
                                            <div id="a2187947NL" class="modal fade" role="dialog">
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
                                <img src="{{asset('assets/frontend/globalassets/images/secondary-icons/green/business-finance/green-business-_-finance-secondary-icon-21.png')}}" title="Advanced Access Credit Line" alt="couple laying on floor looking at house blueprints" width="116px" height="116px"></div>
                                <div class="b15avtar_content">
                                    <h3>Advanced Access Credit Line</h3>
                                    <p>For individuals who desire ready access to extra cash, a credit line up to $100,000.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
                                    <div class="clearfix"></div><br />
                                            <a href="../advance-access-line-of-credit/index.html">Learn More</a>
                                </div>
                            </div>
            </div>
        </div>

    <div id="a2187947" class="modal fade" role="dialog">
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
                                <h2>Flexible Lines of Credit</h2>
                            <div class="pop_board_white">
                                <div class="row">
                                    <div class="col-md-12" style="padding-left:40px;">
                                        <h4 class="Blue"></h4>
                                        <div class="b46Blue" style="text-align:left;">

                                            <p><br /><a href="../home-equity-line-of-credit/index.html" target="_blank"></a></p>
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
</script></div><div class="block b23block  col-md-12"><style>
    .b23financial_calculator_main {
        padding-top: 50px !important;
    }

        .b23financial_calculator_main h2 {
            text-align: center;
        }
</style>
<section class="row-full">

    <div class="b23financial_calculator_main">
        <div class="container">
                <h2>Financial Calculators</h2>
            <div class="b23financial_calculator">

                <div class="b23financial_calculator_left">
                        <h3>How much will my loan payments be?</h3>
                                            <p>Use this calculator to estimate how much your loan payment will be. </p>
                                            <h4 class="Blue">YOUR LOAN PAYMENT WILL BE</h4>
                    <h5 id="calculatedValuetoBind"></h5>
                        <a type="button" href="#" class="" data-toggle="modal" data-target="#myModal">Show Schedule</a>
                </div>

                <div class="b23financial_calculator_right">
                    <div class="form-group">
                        <label>Purchase Amount</label>
                        <input type="text" value="$ 35,000" id="purchaseAmount" onkeyup="this.value=Comma(this.value)" maxlength="14" />
                    </div>
                    <div class="form-group">
                        <label>Down Payment Amount</label>
                        <input type="text" value="$ 5,000" id="downPaymentAmount" onkeyup="this.value=Comma(this.value)" maxlength="14" />
                    </div>
                    <div class="form-group">
                        <label>Loan Term (yrs)</label>
                        <input type="text" value="5" id="loanTerm" maxlength="5" />
                    </div>
                    <div class="form-group">
                        <label>Interest Rate</label>
                        <input type="text" value="3.00%" id="interestRate" maxlength="7" />
                    </div>
                </div>
                <div class="b23financial_calculator_left b23mobile_cal">
                        <h3>YOUR LOAN PAYMENT WILL BE</h3>
                    <h4 id="calculatedValuetoBind"></h4>
                        <a type="button" href="#" class="" data-toggle="modal" data-target="#myModal">Show Schedule</a>
                </div>

            </div>

            <!--Pop up content starts-->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog b23pop_board">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="b23pop_main_container_board">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">
                                        <img class="close_icon" src="{{asset('assets/frontend/Static/img/CustomBlocks/B23/close.png')}}" alt="First PREMIER Bank">
                                    </span>
                                </button>
                                <div class="b23pop_main_container">
                                    <h3>Payment Summary</h3>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Event</th>
                                                <th>Amount</th>
                                                <th>Term</th>
                                                <th>Period</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <tr>
                                        <td>Loan</td>
                                        <td>$30,000</td>
                                        <td>1</td>
                                        <td>Monthly</td>
                                    </tr>
                                    <tr>
                                        <td>Loan</td>
                                        <td>$30,000</td>
                                        <td>1</td>
                                        <td>Monthly</td>
                                    </tr>
                                    <tr>
                                        <td>Loan</td>
                                        <td>$30,000</td>
                                        <td>1</td>
                                        <td>Monthly</td>
                                    </tr> -->
                                        </tbody>
                                    </table>
                                    <h3>Payment Schedule</h3>
                                    <div class="b23overflow_scroll">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Event</th>
                                                    <th>Loan</th>
                                                    <th>Payment</th>
                                                    <th>Interest</th>
                                                    <th>Principal</th>
                                                    <th>Balance</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- <tr>
                                            <td>Loan</td>
                                            <td>$30,000</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$30,000</td>
                                        </tr>
                                        <tr>
                                            <td>Loan</td>
                                            <td>$30,000</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$30,000</td>
                                        </tr>
                                        <tr>
                                            <td>Loan</td>
                                            <td>$30,000</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$30,000</td>
                                        </tr>
                                        <tr>
                                            <td>Loan</td>
                                            <td>$30,000</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$30,000</td>
                                        </tr>
                                        <tr>
                                            <td>Loan</td>
                                            <td>$30,000</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$30,000</td>
                                        </tr>
                                        <tr>
                                            <td>Loan</td>
                                            <td>$30,000</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$30,000</td>
                                        </tr>
                                        <tr>
                                            <td>Loan</td>
                                            <td>$30,000</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$30,000</td>
                                        </tr>
                                        <tr>
                                            <td>Loan</td>
                                            <td>$30,000</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$30,000</td>
                                        </tr>
                                        <tr>
                                            <td>Loan</td>
                                            <td>$30,000</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$30,000</td>
                                        </tr>
                                        <tr>
                                            <td>Loan</td>
                                            <td>$30,000</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$30,000</td>
                                        </tr>
                                        <tr>
                                            <td>Loan</td>
                                            <td>$30,000</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$567.00</td>
                                            <td>$30,000</td>
                                        </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--Pop up content End-->
            </div>
        </div>
    </div>
</section>

<script>
    var AmortizationTable = [];
    var monthValue = [0.08, 0.16, 0.25, 0.33, 0.41, 0.50, 0.58, 0.66, 0.75, 0.83, 0.91, 0];
    function Comma(Num) { //function to add commas to textboxes
        Num += '';
        Num = Num.replace(',', ''); Num = Num.replace(',', ''); Num = Num.replace(',', '');
        Num = Num.replace(',', ''); Num = Num.replace(',', ''); Num = Num.replace(',', '');
        x = Num.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1))
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        return x1 + x2;
    }
    $(document).ready(function () {
        $("#purchaseAmount").keydown(function (e) {
            var oldvalue = $(this).val();
            var field = this;
            setTimeout(function () {
                if (field.value.indexOf('$ ') !== 0) {
                    $(field).val(oldvalue);
                }
            }, 1);
        });

        $("#purchaseAmount").keypress(function (e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) && e.which != 44 && e.which != 46) {
                return false;
            }
        });

        $("#downPaymentAmount").keydown(function (e) {
            var oldvalue = $(this).val();
            var field = this;
            setTimeout(function () {
                if (field.value.indexOf('$ ') !== 0) {
                    $(field).val(oldvalue);
                }
            }, 1);
        });

        $("#downPaymentAmount").keypress(function (e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) && e.which != 44 && e.which != 46) {
                return false;
            }
        });

        $("#loanTerm").keypress(function (e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) && e.which != 46) {
                return false;
            }
        });

        $('#interestRate').keyup(function () {
            var oldstr = $('#interestRate').val();
            var str = oldstr.replace('%', '');
            $('#interestRate').val(str + '%');
        });
        $("#interestRate").keypress(function (e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) && e.which != 46) {
                return false;
            }
        });

        $("#purchaseAmount").focusout(function () {
            if (CalculatePaymentAmountBasedOnInput() != null && CalculatePaymentAmountBasedOnInput() != "" && CalculatePaymentAmountBasedOnInput() != undefined && CalculatePaymentAmountBasedOnInput() != "NaN" && CalculatePaymentAmountBasedOnInput() != NaN) {
                $("#calculatedValuetoBind").html("$ " + numberWithCommas(CalculatePaymentAmountBasedOnInput().toFixed(2)));
            }
        });

        $("#downPaymentAmount").focusout(function () {
            if (CalculatePaymentAmountBasedOnInput() != null && CalculatePaymentAmountBasedOnInput() != "" && CalculatePaymentAmountBasedOnInput() != undefined && CalculatePaymentAmountBasedOnInput() != "NaN" && CalculatePaymentAmountBasedOnInput() != NaN) {
                $("#calculatedValuetoBind").html("$ " + numberWithCommas(CalculatePaymentAmountBasedOnInput().toFixed(2)));
            }
        });
        $("#loanTerm").focusout(function () {
            if (parseFloat($("#loanTerm").val()).toFixed(2) > 30.00) {
                alert('Invalid Loan Terms.Maximum value is 30 Years.');
                $("#loanTerm").val(5);
                return;
            }
            else {
                if (CalculatePaymentAmountBasedOnInput() != null && CalculatePaymentAmountBasedOnInput() != "" && CalculatePaymentAmountBasedOnInput() != undefined && CalculatePaymentAmountBasedOnInput() != "NaN" && CalculatePaymentAmountBasedOnInput() != NaN) {
                    $("#calculatedValuetoBind").html("$ " + numberWithCommas(CalculatePaymentAmountBasedOnInput().toFixed(2)));
                }
            }
        });
        $("#interestRate").focusout(function () {
            if (parseFloat($("#interestRate").val()).toFixed(2) > 100.00) {
                alert('Invalid Loan Interest Rate.Maximum value is 100 Percent.');
                $("#interestRate").val("3.00%");
                return;
            }
            else {
                if (CalculatePaymentAmountBasedOnInput() != null && CalculatePaymentAmountBasedOnInput() != "" && CalculatePaymentAmountBasedOnInput() != undefined && CalculatePaymentAmountBasedOnInput() != "NaN" && CalculatePaymentAmountBasedOnInput() != NaN) {
                    $("#calculatedValuetoBind").html("$ " + numberWithCommas(CalculatePaymentAmountBasedOnInput().toFixed(2)));
                }
            }
        });




        function CalculatePaymentAmountBasedOnInput() {
            var purchaseAmount = parseFloat($("#purchaseAmount").val().replace("$", "").replace(/,/g, "")).toFixed(2);
            if (purchaseAmount == "NaN" || purchaseAmount == "0.00" || purchaseAmount == NaN) {
                alert("Please enter valid Purchase Amount");
                $("#purchaseAmount").val("$ 35,000");
                return;
            }
            var downPaymentAmount = parseFloat($("#downPaymentAmount").val().replace("$", "").replace(/,/g, "")).toFixed(2);
            if (downPaymentAmount == "NaN" || downPaymentAmount == NaN) {
                alert("Please enter valid Down Payment Amount");
                $("#downPaymentAmount").val("$ 5,000");
                return;
            }
            if ((purchaseAmount - downPaymentAmount) < 0) {
                alert("Down payment amount must be less than or equal to Purchase amount");
                $("#purchaseAmount").val("$ 35,000");
                $("#downPaymentAmount").val("$ 5,000");
                return;
            }
            var loanAmount = -(purchaseAmount - downPaymentAmount);
            var rateValue = parseFloat($("#interestRate").val().replace("%", "")).toFixed(3);
            if (rateValue == "NaN" || rateValue == NaN) {
                alert("Please enter valid Interest Rate");
                $("#interestRate").val("3.00%");
                return;
            }
            var actualRateWeCanPass = rateValue / 1200;
            if (monthValue.indexOf(Number(parseFloat($("#loanTerm").val() % 1).toFixed(2))) == -1 && Number(parseFloat($("#loanTerm").val() / 1).toFixed(2)) < 30) {
                alert("Please enter valid Loan Term");
                $("#loanTerm").val("5");
                return;
            }
            var numberOfMonth = parseFloat($("#loanTerm").val()).toFixed(2) * 12;
            numberOfMonth = Math.ceil(numberOfMonth);
            if (numberOfMonth == "NaN" || numberOfMonth === 0 || numberOfMonth == NaN) {
                alert("Please enter valid Loan Term");
                $("#loanTerm").val("5");
                return;
            }


            var MonthlyPayment = PMT(actualRateWeCanPass, numberOfMonth, loanAmount, 0, 0);
            CalculateAmortization(loanAmount, rateValue, MonthlyPayment, numberOfMonth);
            PopulateAmortizationSummaryData(loanAmount, MonthlyPayment);
            PopulateAmortizationData(loanAmount);
            return MonthlyPayment;
        }
        $("#calculatedValuetoBind").html("$ " + numberWithCommas(CalculatePaymentAmountBasedOnInput().toFixed(2)));

    });

    function PMT(rate, nperiod, pv, fv, type) {
        if (!fv) fv = 0;
        if (!type) type = 0;

        if (rate == 0) return -(pv + fv) / nperiod;

        var pvif = Math.pow(1 + rate, nperiod);
        var pmt = rate / (pvif - 1) * -(pv * pvif + fv);

        if (type == 1) {
            pmt /= (1 + rate);
        };

        return pmt;
    }
    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    function CalculateAmortization(loanAmount, rateValue, MonthlyPayment, numberOfMonth) {
        AmortizationTable = [];
        var loanAmountForAmortization = -loanAmount;
        var rateValueForAmortization = parseFloat(rateValue).toFixed(3) / 1200;
        var monthlyPayment = MonthlyPayment.toFixed(2);
        var FirstMonthPayment = {
            MonthCount: 1,
            StartingBalance: (loanAmountForAmortization).toFixed(2),
            Interest: (loanAmountForAmortization * rateValueForAmortization).toFixed(2),
            Principal: (monthlyPayment - (loanAmountForAmortization * rateValueForAmortization).toFixed(2)).toFixed(2),
            EndingBalance: (loanAmountForAmortization.toFixed(2) - (monthlyPayment - (loanAmountForAmortization * rateValueForAmortization).toFixed(2))).toFixed(2),
            TotalInterest: (loanAmountForAmortization.toFixed(2) * rateValueForAmortization).toFixed(2),
            MonthlyPaymentAmount: monthlyPayment
        };
        AmortizationTable.push(FirstMonthPayment);
        for (var k = 1; k < numberOfMonth; k++) {
            var MonthlyWisePayment = {
                MonthCount: (k + 1),
                StartingBalance: AmortizationTable[k - 1].EndingBalance,
                Interest: (AmortizationTable[k - 1].EndingBalance * rateValueForAmortization).toFixed(2),
                Principal: (monthlyPayment - (AmortizationTable[k - 1].EndingBalance * rateValueForAmortization)).toFixed(2),
                EndingBalance: (AmortizationTable[k - 1].EndingBalance - (monthlyPayment - (AmortizationTable[k - 1].EndingBalance * rateValueForAmortization))).toFixed(2),
                TotalInterest: (parseFloat(AmortizationTable[k - 1].TotalInterest) + (AmortizationTable[k - 1].EndingBalance * rateValueForAmortization)).toFixed(2),
                MonthlyPaymentAmount: monthlyPayment
            }
            AmortizationTable.push(MonthlyWisePayment);
        }

        var amortizationLastPayment = AmortizationTable.pop();
        if (amortizationLastPayment.EndingBalance != 0) {
            amortizationLastPayment.MonthlyPaymentAmount = (parseFloat(amortizationLastPayment.MonthlyPaymentAmount) + parseFloat(amortizationLastPayment.EndingBalance)).toFixed(2);
            amortizationLastPayment.Principal = (parseFloat(amortizationLastPayment.Principal) + parseFloat(amortizationLastPayment.EndingBalance)).toFixed(2);
            amortizationLastPayment.EndingBalance = "0.00";
        }
        AmortizationTable.push(amortizationLastPayment);
        //alert("Jay Jalaram");


    }

    function PopulateAmortizationSummaryData(loanAmount, MonthlyPayment) {
        var actualLoanAmount = -loanAmount;
        var firstTableHTML;
        if (Number(AmortizationTable[AmortizationTable.length - 1].MonthlyPaymentAmount) != Number(MonthlyPayment.toFixed(2))) {
            firstTableHTML = "<tr><td>Loan</td><td>$" + Comma(actualLoanAmount.toFixed(2)) + "</td><td>1</td><td></td></tr>";
            firstTableHTML += "<tr><td>Payment</td><td>$" + Comma(MonthlyPayment.toFixed(2)) + "</td><td>" + (AmortizationTable.length - 1) + "</td><td>Monthly</td></tr>";
            firstTableHTML += "<tr><td>Payment</td><td>$" + Comma(AmortizationTable[AmortizationTable.length - 1].MonthlyPaymentAmount) + "</td><td>1</td><td></td></tr>";
        }
        else {
            firstTableHTML = "<tr><td>Loan</td><td>$" + Comma(actualLoanAmount.toFixed(2)) + "</td><td>1</td><td></td></tr>";
            firstTableHTML += "<tr><td>Loan</td><td>$" + Comma(MonthlyPayment.toFixed(2)) + "</td><td>" + AmortizationTable.length + "</td><td>Monthly</td></tr>";
        }
        $('.b23pop_main_container table tbody').eq(0).html(firstTableHTML);


    }

    function PopulateAmortizationData(loanAmount) {
        var actualLoanAmount = -loanAmount;
        var secondTableHTML = "<tr><td>Loan 1</td><td>$" + Comma(actualLoanAmount.toFixed(2)) + "</td><td></td><td>$0.00</td><td>$0.00</td><td>$" + Comma(actualLoanAmount.toFixed(2)) + "</td></tr>";
        for (var p = 0; p < AmortizationTable.length; p++) {
            var rowHTML = "";
            rowHTML += "<tr><td>Payment " + AmortizationTable[p].MonthCount + "</td><td></td>";
            rowHTML += "<td>$" + Comma(AmortizationTable[p].MonthlyPaymentAmount) + "</td>";
            rowHTML += "<td>$" + Comma(AmortizationTable[p].Interest) + "</td>";
            rowHTML += "<td>$" + Comma(AmortizationTable[p].Principal) + "</td>";
            rowHTML += "<td>$" + Comma(AmortizationTable[p].EndingBalance) + "</td></tr>";
            secondTableHTML += rowHTML;
        }
        var SumValues = amortizationTableTotal();
        secondTableHTML += "<tr style='font-weight: bold;background-color:#FFFFFF;'><td style='border-top: 2px solid #dee2e6;'>Grand Total</td><td style='border-top: 2px solid #dee2e6;'>$" + Comma(actualLoanAmount.toFixed(2)) + "</td><td style='border-top: 2px solid #dee2e6;'>$" + Comma(SumValues.MonthlyPaymentSum.toFixed(2)) + "</td><td style='border-top: 2px solid #dee2e6;'>$" + Comma(SumValues.InterestSum.toFixed(2)) + "</td><td style='border-top: 2px solid #dee2e6;'>$" + Comma(SumValues.PrincipalSum.toFixed(2)) + "</td><td>$0.00</td></tr>";
        $('.b23pop_main_container table tbody').eq(1).html(secondTableHTML);
    }

    function amortizationTableTotal() {
        return {
            MonthlyPaymentSum: AmortizationTable.reduce(function (s, a) {
                return s + Number(a.MonthlyPaymentAmount);
            }, 0),
            InterestSum: AmortizationTable.reduce(function (s, a) {
                return s + Number(a.Interest);
            }, 0),
            PrincipalSum: AmortizationTable.reduce(function (s, a) {
                return s + Number(a.Principal);
            }, 0)
        }

    }


</script></div><div class="block b04block  col-md-12">
<style>
</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                            </div>
    </div>
</section>
<script>
    $(".b23financial_calculator_left p:first").text('Use this calculator to estimate how much your loan payment will be.');
$(".b23overflow_scroll table th:nth-child(4)").text('Interest');;
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
