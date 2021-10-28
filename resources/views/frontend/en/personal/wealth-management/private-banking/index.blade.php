@extends('frontend.layouts.app')

@section('content')



    <div class="container">

        <!--start responsive menu-->
        @include('frontend.layouts.components.header')
        <!-- Main Header -->
        @include('frontend.layouts.components.navbar')

        <script>
            $(document).ready(function() {



                //$('#AccessAccountDropdown option[id!=selectaccount]').each(function (index, value) {
                //    $('#signInHoverSection').append('<p>' + $(value).text() + '</p>');
                //});

                if ($(window).width() == 1024) {
                    $('#ulPremierMainMenu li.SubMenu > a').on('click touchend', function(e) {
                        $(this).find('div[id*=subdiv]').hide();
                        $(this).attr('href', 'javascript:void(0)');
                        ShowMenu(this);
                    }).focusout(function() {
                        ShowMenu(this);
                    });
                } else {

                    var timeoutId;
                    $("#ulPremierMainMenu li.SubMenu > a").hover(function() {
                            var self = this;
                            if (!timeoutId) {
                                timeoutId = window.setTimeout(function() {
                                    timeoutId = null;
                                    ShowMenu(self);
                                }, 50);
                            }
                        },
                        function() {
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

                var handleMouseover = function(e) {
                    var target = e.target || e.srcElement;
                    lastID = target.id;
                    className = target.className;
                    tagName = target.localName;
                    if (lastID != "ulPremierMainMenu" && lastID != "") {
                        $('div[id*=subdiv]').slideUp(500);
                        $('.SubMenuItems li > a').css('color', '#fff').css('border-bottom', '');
                    }
                    if (className == "col-md-8 col-xs-12 col-sm-6" || className == "b1banner_text" || className ==
                        "b1login_Box" || className == "b1banner-desc" || className == "row b1mobile" || className ==
                        "b1banner_text" || className == "White" || className == "b1access" || className ==
                        "header-box" || tagName == "img" || tagName == "body") {
                        $('div[id*=subdiv]').slideUp(500);
                        $('.SubMenuItems li > a').css('color', '#fff').css('border-bottom', '');;
                    }

                };

                if (document.addEventListener) {
                    document.addEventListener('mouseover', handleMouseover, false);
                    document.addEventListener('mouseover', handleMouseover, false);
                } else {
                    document.attachEvent('onmouseover', handleMouseover);
                }

            });

            function ShowMenu(element) {
                if ($(element).next('div[id*=subdiv]').filter(function() {
                        return $(this).css('display') === 'block';
                    }).length == 0) {
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
            .b18great_feature_left .b18detail {
                padding-left: 125px;
            }

        </style>
        <div class="row equal-height">
            <div class="block b46block  col-md-12">

                <style>
                    .b46mainlinkspan {
                        height: 50px;
                        margin-top: 24px;
                        text-align: center;
                        width: 100%;
                    }

                    .b46mainlink {
                        color: #268d6e;
                        background: url("{{ asset('assets/frontend/Static/img/CustomBlocks/B20/arrow_green.png') }}") no-repeat right 3px;
                        padding: 0px 15px 0px 25px;
                        vertical-align: text-bottom;
                        margin-right: 20px;
                        letter-spacing: 1px;
                    }

                    .b46mainanchor {
                        color: #268d6e;
                        background: url("{{ asset('assets/frontend/Static/img/CustomBlocks/B20/arrow_green.png') }}") no-repeat right 3px;
                        float: left;
                        padding: 0px 15px 0px 25px;
                        vertical-align: text-bottom;
                        letter-spacing: 1px;
                    }

                    .b46multianchor {
                        text-align: center;
                    }

                    .b46multianchor ul {
                        display: inline-block;
                        margin: 0;
                        padding: 0;
                        /* For IE, the outcast */
                        zoom: 1;
                        *display: inline;
                    }

                    .b46multianchor li {
                        float: left;
                        padding: 2px 5px;
                    }

                    .b46productpage h5>p {}

                </style>
                <style>
                    .pop_main_container_board .pop_main_container ol li ol li {}

                    .b46productpage {
                        float: left;
                        width: 100%;
                        padding: 80px 0px 50px 0px;
                        text-align: center;
                        background: #fff url("{{ asset('assets/frontend/globalassets/images/backgrounds/grey-2.svg') }}") no-repeat;
                    }

                </style>
                <section class="row-full">
                    <div class="b46productpage">
                        <div class="container">
                            <h1>Private Banking</h1>
                            <img src="{{ asset('assets/frontend/contentassets/813d52660992443eba550bb480a59d4d/private-banking-hero-image.png') }}"
                                alt="First PREMIER Bank">
                            <h2>Concierge-Style, Custom Banking</h2>
                            <p>Gain exclusive access and unique banking privileges to support your financial needs, with a
                                single point-of-access and personalized support.&nbsp;<br />For higher net-worth
                                individuals, couples and families.</p>

                            <a href="../../../pages/about-us/teams/wealth-management-team/index.html"
                                class="b46button">CONTACT US</a>


                        </div>
                    </div>
                </section>
            </div>
            <div class="block b16block  col-md-12">

                <!-- VIEW RATE / SPEED BUMP [2] -->
                <style>
                    /* Changes to Functionality -> Adding the ability to add one or more links after the main button */
                    .b16basic_box_left a.b16readmore {
                        display: inline-block;
                        letter-spacing: 1px;
                        background: #42967d;
                        color: #fff;
                        font-size: 13px;
                        font-family: 'Prompt-Bold';
                        text-transform: uppercase;
                        padding: 12px 60px;
                        border-radius: 50px;
                        margin-top: 25px;
                        margin-bottom: 0px;
                        margin-right: 30px;
                        text-align: center;
                        margin-left: 20px !important;
                    }

                    .b16basic_box_left a.b16readmore:hover {
                        text-decoration: none;
                    }

                    .b16confidence_links a {
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        font-family: 'Prompt-SemiBold';
                        font-size: 13px;
                        margin-top: 10px;
                        color: #42967d;
                        padding-right: 12px;
                        background: url("{{ asset('assets/frontend/Static/img/CustomBlocks/B14/arrow_small.png') }}") no-repeat right center;
                    }

                    .b16confidence_links_multiple {
                        float: left;
                        padding-left: 30px;
                    }

                    .b16confidence_links_multiple ul {
                        display: inline-block;
                        margin: 0;
                        padding-top: 10px;
                        /* For IE, the outcast */
                        zoom: 1;
                        *display: inline;
                    }

                    .b16confidence_links_multiple li {
                        float: left;
                        padding: 2px 5px;
                        margin-right: 20px;
                    }

                    .b16confidence_links_multiple li>a {
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        font-family: 'Prompt-SemiBold';
                        font-size: 13px;
                        margin-top: 10px;
                        color: #42967d;
                        padding-right: 12px;
                        background: url("{{ asset('assets/frontend/Static/img/CustomBlocks/B14/arrow_small.png') }}") no-repeat right center;
                    }

                    /* CHANGING SHADING FUNCTIONALITY */
                    /*.b16wrapper{ min-height:455px;}*/
                    .b16wrapper {
                        min-height: 400px;
                    }

                    .b16wrapper .FirstBlock {
                        width: 100%;
                        background-color: #f9f9f9;
                        height: 70px;
                        position: absolute;
                        bottom: -24px;
                        z-index: 1;
                        overflow: hidden;
                    }

                    .ThirdBlock {
                        width: 100%;
                        background-color: #f9f9f9;
                        height: 70px;
                        position: relative;
                        z-index: 2;
                    }

                    .b16basic_box_right {
                        position: relative;
                        z-index: 99;
                    }

                    .b16basic_box_background {
                        margin-bottom: 14px;
                    }

                    .b16basic_box_left {
                        padding-left: 100px;
                    }

                    .b16basic_box_left h2 {
                        padding-top: 35px;
                    }

                    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml {
                        padding-top: 10px;
                    }

                    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml>p {
                        margin-left: 0px !important;
                    }

                    .card_icon_bottom_right {
                        right: 15px !important;
                    }

                    .Overdraft.Protection {
                        width: 50%;
                    }

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
                    .b16basic_box_right .b16imgcrop {}

                </style>
                <!-- VIEW RATE / SPEED BUMP [2] -->

                <section class="row-full b16wrapper">

                    <div class="b16basic_box_left_content b16basic_box_background">
                        <div class="b16basic_box_main">
                            <div class="container">
                                <div class="b16basic_box b16basic_box_position">
                                    <div class="b16basic_box_right" style="padding-right:50px;">
                                        <div class="b16imgcrop"><img
                                                src="{{ asset('assets/frontend/contentassets/3ef9bab56fbb400bb0c7869f2bac5d1d/1.7.1_b-16-list-01-alternating-1_shakinghands-min.png') }}"
                                                title="Customized Personal Banking" alt="man shaking hands with banker">
                                        </div>
                                    </div>
                                    <div class="b16basic_box_left">
                                        <h2>Customized Personal Banking</h2>

                                        <div class="xhtml">
                                            <ul>
                                                <li>Select banking, credit and financial services</li>
                                                <li>Private Banker provides access to all bank services</li>
                                                <li>Unique banking privileges</li>
                                                <li>State-of-the-art <a href="../../online-and-mobile/index.html">Online and
                                                        Mobile Banking</a> solutions</li>
                                                <li>Access to 33,000+ surcharge-free <a title="Moneypass"
                                                        href="../../../pages/quick-links/locations/index.html">MoneyPass&reg;
                                                        ATMs</a></li>
                                            </ul>
                                        </div>
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
            </div>
            <div class="block b16block  col-md-12">

                <!-- VIEW RATE / SPEED BUMP [2] -->
                <style>
                    /* Changes to Functionality -> Adding the ability to add one or more links after the main button */
                    .b16basic_box_left a.b16readmore {
                        display: inline-block;
                        letter-spacing: 1px;
                        background: #42967d;
                        color: #fff;
                        font-size: 13px;
                        font-family: 'Prompt-Bold';
                        text-transform: uppercase;
                        padding: 12px 60px;
                        border-radius: 50px;
                        margin-top: 25px;
                        margin-bottom: 0px;
                        margin-right: 30px;
                        text-align: center;
                        margin-left: 20px !important;
                    }

                    .b16basic_box_left a.b16readmore:hover {
                        text-decoration: none;
                    }

                    .b16confidence_links a {
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        font-family: 'Prompt-SemiBold';
                        font-size: 13px;
                        margin-top: 10px;
                        color: #42967d;
                        padding-right: 12px;
                        background: url("{{ asset('assets/frontend/Static/img/CustomBlocks/B14/arrow_small.png') }}") no-repeat right center;
                    }

                    .b16confidence_links_multiple {
                        float: left;
                        padding-left: 30px;
                    }

                    .b16confidence_links_multiple ul {
                        display: inline-block;
                        margin: 0;
                        padding-top: 10px;
                        /* For IE, the outcast */
                        zoom: 1;
                        *display: inline;
                    }

                    .b16confidence_links_multiple li {
                        float: left;
                        padding: 2px 5px;
                        margin-right: 20px;
                    }

                    .b16confidence_links_multiple li>a {
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        font-family: 'Prompt-SemiBold';
                        font-size: 13px;
                        margin-top: 10px;
                        color: #42967d;
                        padding-right: 12px;
                        background: url("{{ asset('assets/frontend/Static/img/CustomBlocks/B14/arrow_small.png') }}") no-repeat right center;
                    }

                    /* CHANGING SHADING FUNCTIONALITY */
                    /*.b16wrapper{ min-height:455px;}*/
                    .b16wrapper {
                        min-height: 400px;
                    }

                    .b16wrapper .FirstBlock {
                        width: 100%;
                        background-color: #f9f9f9;
                        height: 70px;
                        position: absolute;
                        bottom: -24px;
                        z-index: 1;
                        overflow: hidden;
                    }

                    .ThirdBlock {
                        width: 100%;
                        background-color: #f9f9f9;
                        height: 70px;
                        position: relative;
                        z-index: 2;
                    }

                    .b16basic_box_right {
                        position: relative;
                        z-index: 99;
                    }

                    .b16basic_box_background {
                        margin-bottom: 14px;
                    }

                    .b16basic_box_left {
                        padding-left: 100px;
                    }

                    .b16basic_box_left h2 {
                        padding-top: 35px;
                    }

                    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml {
                        padding-top: 10px;
                    }

                    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml>p {
                        margin-left: 0px !important;
                    }

                    .card_icon_bottom_right {
                        right: 15px !important;
                    }

                    .Overdraft.Protection {
                        width: 50%;
                    }

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
                    .b16basic_box_right .b16imgcrop {}

                </style>
                <!-- VIEW RATE / SPEED BUMP [2] -->

                <section class="row-full b16wrapper">

                    <div class="b16basic_box_right_content b16basic_box_background">
                        <div class="b16basic_box_main b16basic_box_grey">
                            <div class="container">
                                <div class="b16basic_box">
                                    <div class="b16basic_box_right">
                                        <div class="b16imgcrop" style="margin-left:90px;"><img
                                                src="{{ asset('assets/frontend/contentassets/04e7b9fd2cf645138d480d3f725d65b8/1.7.1_b-16-list-01-alternating-2_oldercouple-min.png') }}"
                                                title="Perfect for Qualified Individuals &amp; Couples"
                                                alt="couple holding hands"></div>

                                    </div>
                                    <div class="b16basic_box_left payIcon-space">
                                        <h2 style="padding-top:0px !important;">Perfect for Qualified Individuals &amp;
                                            Couples</h2>
                                        <div class="xhtml">
                                            <ul>
                                                <li>Busy, time-starved and hard-working professionals</li>
                                                <li>Higher net worth individuals or couples</li>
                                                <li>Becoming serious about planning for the future&nbsp;</li>
                                                <li>Interested in building wealth by starting to invest</li>
                                                <li>Desire for more flexible banking solutions</li>
                                                <li>Interested in custom credit solutions to maximize cash</li>
                                            </ul>
                                        </div>

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
            </div>
            <div class="block b18block  col-md-12">

                <style>
                    .pop_main_container_board .pop_main_container ol li ol li {}

                    .b18great_feature_main .b18detail {
                        padding-left: 125px;
                        min-height: 150px;
                        margin-top: 10px;
                    }

                    .b18great_feature_main .b18great_feature_left .b18detail h3 {
                        padding-left: 130px !important;
                    }

                    .b18great_feature_main .b18great_feature_left span {
                        padding-left: 125px;
                        color: #25455a;
                        font-size: 20px;
                        font-family: &#39;
                        Prompt-SemiBold&#39;
                        ;
                        text-shadow: none;
                        margin-bottom: 20px;
                        margin-top: 20px;
                        padding-bottom: 0px;
                        display: inline-block;
                        width: 100%;
                        text-align: left;
                    }

                    .b18great_feature_main .b18great_feature_left .b18detail ul {}

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
                        <h2> You Work Hard - We Work Hard for You </h2>
                        <div class="b18great_feature_left">
                            <div class="b18detail xhtml">
                                <p>First PREMIER's Private Bankers and wealth professionals are vested in your success. We
                                    remain personally available to offer deep experience and reliable knowledge when you
                                    need it most. Contact us to learn how we can help you with a custom banking and
                                    financial solutions today.</p>
                            </div>
                        </div>
                        <div class="b18great_feature_left b18great_feature_right payIcon-space">
                            <span>Additional Wealth Services*</span>
                            <div class="b18detail xhtml">
                                <ul>
                                    <li><a href="../financial-planning/index.html">Financial Planning</a></li>
                                    <li><a href="../../investing/retirement-planning/index.html">Retirement Planning</a>
                                    </li>
                                    <li><a href="../managed-investing/index.html">Managed Investing</a></li>
                                    <li><a title="Estate &amp; Trust Services" href="../personal-trust-services/index.html"
                                            target="_top">Estate &amp; Trust Services</a></li>
                                </ul>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div class="clearfix">
                            <center>
                                <a href="../../../pages/about-us/teams/wealth-management-team/index.html"
                                    class="btnGreen">Contact Us</a>
                            </center>
                        </div>

                    </div>
                    <div id="a54264219" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon"
                                                    src="{{ asset('assets/frontend/static/img/closebutton.png') }}"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
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
                    <div id="b54264219" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon"
                                                    src="{{ asset('assets/frontend/static/img/closebutton.png') }}"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <h2>Additional Wealth Services*</h2>
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
                    <div id="c54264219" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon"
                                                    src="{{ asset('assets/frontend/static/img/closebutton.png') }}"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <h2>You Work Hard - We Work Hard for You</h2>
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a
                                                                    href="../../../pages/about-us/teams/wealth-management-team/index.html"
                                                                    target="_blank"></a></p>
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
            </div>
            <div class="block b10block  col-md-12">

                <section class="row-full">

                    <!--First Premier work start-->
                    <div class="b10first_premier_main">
                        <div class="container">
                            <div class="b10first_premier">
                                <h2>Why Bank with First PREMIER?</h2>
                            </div>
                            <div class="b10panel-group" id="accordion">
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_0"><span> One of the Strongest Banks in the Nation
                                                </span></a></h3>
                                    </div>
                                    <div id="collapse_0" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>First PREMIER Bank is one of the strongest capitalized banks in the
                                                    country and operates with no debt. With $2 billion in assets, we are
                                                    consistently ranked as one of the top-performing S-corp banks in the
                                                    country by the American Banking Journal.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_1"><span> FREE Leading Edge Online & Mobile Tools
                                                </span></a></h3>
                                    </div>
                                    <div id="collapse_1" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>Our secure Online and Mobile Banking is always FREE, giving you 24/7
                                                    access and control over your accounts. Enjoy great features including
                                                    eStatements, Bill Pay, Mobile Deposit, personal financial management
                                                    tools and more. Our Debit Mastercard&reg; works with popular mobile
                                                    wallet apps and can be locked and unlocked via Online or Mobile Banking
                                                    if lost or stolen.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_2"><span> Locally Grown, Nationally Known </span></a></h3>
                                    </div>
                                    <div id="collapse_2" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>We serve our local, regional and national clients with pride and personal
                                                    customer care. We are honored to have served as the bank for the State
                                                    of South Dakota for over 20 years, as well as the bank for the City of
                                                    Sioux Falls for over 10 years. First PREMIER is also the 14th largest
                                                    ACH Originating Bank in the USA and the 12th largest issuer of
                                                    Mastercard&reg; in the country and is recognized as a top small business
                                                    association lender. Our Trust Department manages over $2.8 billion in
                                                    assets.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_3"><span> Dedicated to Security & Fraud Prevention
                                                </span></a></h3>
                                    </div>
                                    <div id="collapse_3" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>We are dedicated to protect your personal and financial data, providing
                                                    multi-tiered, multi-factor authentication and security. We offer 24/7
                                                    fraud monitoring and Zero Liability&reg; Protection for all First
                                                    PREMIER Debit Card purchases. We also offer tools that put you in
                                                    charge, like our FREE Online and Mobile Banking complete with
                                                    eStatements and debit card lock and unlock feature.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_4"><span> Outstanding, Personal Customer Care </span></a>
                                        </h3>
                                    </div>
                                    <div id="collapse_4" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>When you bank with First PREMIER, you bank with people from your
                                                    community. Our Bankers take the time to learn about you and understand
                                                    your needs and goals. We remain dedicated to supporting our customers
                                                    with the right mix of banking, credit and investing solutions to support
                                                    life today -- and the changing needs of the future.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b10panel b10panel-default">
                                    <div class="b10panel-heading">
                                        <h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse_5"><span> Putting People First </span></a></h3>
                                    </div>
                                    <div id="collapse_5" class="b10panel-collapse collapse ">
                                        <div class="b10panel-body">
                                            <div class="xhtml">
                                                <p>When you bank with First PREMIER, you bank with a partner that gives back
                                                    to your local community. We are active supporters of more than 600
                                                    charities and non-profits. Last year alone our associates contributed
                                                    over 32,000 hours of community service. We also take care of our
                                                    employees. From 2015-2020, we were ranked as one of the Best Banks to
                                                    Work For by American Banker &amp; Best Companies Group.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <!--First Premier work end-->
                </section>
            </div>
            <div class="block b13block  col-md-12">

                <style>
                    .b13what_you_know_main ol li p {
                        padding: 0 10px 0 34px;
                        list-style: none;
                        margin: 0px 0px 0px 0px;
                        font-size: 14px;
                        text-align: left;
                    }

                    .b13what_you_know_main ol li {
                        width: 100%
                    }

                    .b13what_you_know_main ol li ol li {
                        width: 50%;
                    }

                    .b13what_you_know_main_white ol li ol li {
                        width: 50%;
                    }

                </style>
                <script>
                    $(document).ready(function() {
                        //GetDisclosurePoints();
                        GetDisclosurePointsBrackets();
                    });
                </script>
                <section class="row-full">
                    <div class="b13what_you_know_main">
                        <div class="container" style="background-color:#182e39 !important;">

                            <h4> Disclosure </h4>
                            <div class="b13points">
                                <p>{*} Investments are | Not FDIC insured | May lose value | Not financial institution
                                    guaranteed | Not a deposit | Not insured by any federal government agency. Advisory
                                    services may only be offered by investment adviser representatives.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="block b04block  col-md-12">
                <style>
                    @media only screen and (max-width:470px) {
                        .b18great_feature_left {
                            padding-bottom: 0px !important;
                            margin-bottom: 0px !important;
                        }

                        .b18great_feature_left .b18detail p {
                            position: relative;
                            left: -100px;
                        }

                        .b18great_feature_right .b18detail ul {
                            position: relative;
                            left: -100px;
                        }

                        .b18great_feature_right span {
                            margin-top: 0px !important;
                            padding-top: 0px !important;
                            position: relative;
                            left: -100px;
                        }
                    }

                </style>
                <section class="row-full b4background">
                    <div class="container">
                        <div class="b4anywhere_banking" style="width:100%; ">
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

                    .colored h2,
                    .colored .xhtml p {
                        color: #fff !important;
                    }

                    .page-Our-Communities .block.b04block.col-md-12 {
                        margin-top: 20px;
                    }

                </style>
            </div>
        </div>



        <div class="row-full footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol1">
                        <div class="footerHeader">Company</div>
        
                        <ul>
        
                            <li>
                                <a href="{{ route('frontend.en.pages.about-us')}}">About Us</a>
                            </li>
        
                            <li>
                                <a href="{{ route('frontend') }}">First PREMIER Bank</a>
                            </li>
        
                            <li>
                                <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a>
                            </li>
        
                            <li>
                                <a href="{{ route('frontend.en.pages.about-us.leadership-team') }}">Leadership</a>
                            </li>
        
                            <li>
                                <a href="{{ route('frontend.en.pages.about-us.community') }}">Community</a>
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
                                <a href="{{ route('frontend') }}">Personal Banking</a>
                            </li>
        
                            <li>
                                <a href="{{ route('frontend.en.small-business') }}">Small Business</a>
                            </li>
        
                            <li>
                                <a href="{{ route('frontend.en.commercial') }}">Commercial</a>
                            </li>
        
                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol3">
                        <div class="footerHeader">Help &amp; Contact</div>
        
                        <ul>
        
                            <li>
                                <a href="{{ route('frontend.en.pages.quick-links.customer-care') }}">Customer Care</a>
                            </li>
        
                            <li>
                                <a href="{{ route('frontend.en.pages.quick-links.locations') }}">Locations</a>
                            </li>
        
                            <li>
                                <a href="{{ route('frontend.en.pages.quick-links.customer-care') }}">BANK: 800-501-6535</a>
                            </li>
        
                            <li>
                                <a href="https://www.mypremiercreditcard.com/">CREDIT CARD: 800-987-5521</a>
                            </li>
        
                            <li>
                                <a href="{{ route('frontend') }}">Routing Number: 091408598</a>
                            </li>
        
                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol4">
                        <div class="footerHeader">Legal Notices</div>
        
                        <ul>
        
                            <li>
                                <a href="{{ route('frontend.en.pages.resources.first-premier-privacy-statement-2020') }}">Privacy
                                    Notice &amp; Statement</a>
                            </li>
        
                            <li>
                                <a href="{{ route('frontend.en.pages.resources.legal-disclosures') }}">Legal Disclosures</a>
                            </li>
        
                            <li>
                                <a href="{{ route('frontend.en.pages.resources.cookie-policy') }}">Cookie Policy</a>
                            </li>
        
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="padding-top:50px;">
                        <p>Member FDIC | <img src="{{asset('assets/frontend/Static/img/equalhousinglender.png')}}" alt="Equal Housing Lender"
                                title="Equal Housing Lender" />Equal Housing Lender</p>
                    </div>
                </div>
            </div>
        </div>
        <style>
            /* CHROME SAFARI FIX */
            .form-control:hover,
            .form-control:active,
            .form-control:focus {
                box-shadow: none !important;
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
            }

            .form-control:hover,
            .form-control:active,
            .form-control:focus {
                box-shadow: none !important;
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
            }

            a:focus,
            a:active {
                outline: none !important;
                border: none !important;
            }

            input:focus,
            input:active {
                outline: none !important;
            }

            textarea:focus {
                outline: none !important;
            }

            button:focus,
            button:active {
                outline: none !important;
                border: none !important;
            }

            .showehllogo {
                background: url('{{ asset("assets/frontend/Static/img/EHLlogo%20white.png") }}') 230px 0px no-repeat;
                background-size: 24px 24px
            }

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
            $("#submitButtonB28Block").click(function(event) {
                if ($("#email").val() != "" &&
                    $("#message").val() != "") {
                    FullName = $("#fullname").val();
                    EMail = $("#email").val();
                    Phone = $("#phone").val();
                    Message = $("#message").val();
                    $.ajax({
                        type: "POST",
                        url: '/api/ContactMe?ContentId=' + ContentId + '&ContactToName=' + Name +
                            '&ContactPersonName=' + FullName + '&ContactPersonEmail=' + EMail +
                            '&ContactPersonPhone=' + Phone + '&ContactPersonMessage=' + encodeURIComponent(
                                Message),
                        contentType: "application/json",

                        success: function(result) {
                            alert(result);
                        },
                        error: function() {

                        }
                    });
                }
            });
        </script>
    </div>
    <div class="smallLogo"><a href="../../../index.html" title="First PREMIER Bank - Home"><img
                src="{{ asset('assets/frontend/Static/gfx/Logo.png') }}" style="max-width:100%;" /></a></div>
    <script type="text/javascript" src="../../../../../dl.episerver.net/13.4.4.1/epi-util/find.js"></script>
    <script type="text/javascript">
        if (FindApi) {
            var api = new FindApi();
            api.setApplicationUrl('../../../../index.html');
            api.setServiceApiBaseUrl('../../../../find_v2/index.html');
            api.processEventFromCurrentUri();
            api.bindWindowEvents();
            api.bindAClickEvent();
            api.sendBufferedEvents();
        }
    </script>

    <script type="text/javascript" src="../../../../Static/js/pushy.js"></script>
    <script type="text/javascript" src="../../../../Static/js/Blocks_2019062002.js"></script>
@endsection
