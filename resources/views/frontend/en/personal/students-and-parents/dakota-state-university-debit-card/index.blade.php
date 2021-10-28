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
                        background: #fff url("{{ asset('assets/frontend/contentassets/f3edffd4e03b4eaaac05d96461ab4009/grey-2.svg') }}") no-repeat;
                    }

                </style>
                <section class="row-full">
                    <div class="b46productpage">
                        <div class="container">
                            <h1>Dakota State University Debit Card</h1>
                            <img src="{{ asset('assets/frontend/contentassets/f3edffd4e03b4eaaac05d96461ab4009/dsu_debit_card_header.jpg') }}"
                                alt="First PREMIER Bank">
                            <h2>Show Your Trojan Pride</h2>
                            <div id="myModalEUl02" class="modal fade" style="display: none;" role="dialog">
                                <div class="modal-dialog speedpop_board">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="speedpop_main_container_board"><button class="close"
                                                    type="button" data-dismiss="modal" aria-label="Close"><span
                                                        aria-hidden="true"> <img class="close_icon"
                                                            style="height: 17px !important; width: 17px !important;"
                                                            src="{{ asset('assets/frontend/static/img/closebutton.png') }}"
                                                            alt="First PREMIER Bank" /></span></button>
                                                <div class="pop_main_container">
                                                    <h4 class="popupheader">You will be leaving firstpremier.com</h4>
                                                    <p>Please note, by clicking &ldquo;continue&rdquo; you will be
                                                        redirected to
                                                        a website that is not operated or controlled by PREMIER. PREMIER is
                                                        not
                                                        responsible for the content, links, privacy policy or security of
                                                        that
                                                        website. Your use of that website is subject to its terms of use and
                                                        privacy policy. Thank you for visiting firstpremier.com. If you
                                                        continue, we hope you find the information presented educational and
                                                        useful.</p>
                                                    <p>&nbsp;</p>
                                                    <a class="speedbumpgreenbutton"
                                                        href="https://ascentstudentloans.com/options-consigned-and-no-cosigner/?utm_source=partner&amp;utm_campaign=FirstPremier_Rev_Learn_More&amp;utm_medium=FirstPremier_Rev_Website_PartnerID_XXXXX&amp;utm_content=FirstPremier_Rev_Website"
                                                        target="_blank" rel="noopener">Continue</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="myModalrG2VJ" class="modal fade" style="display: none;" role="dialog">
                                <div class="modal-dialog speedpop_board">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="speedpop_main_container_board"><button class="close"
                                                    type="button" data-dismiss="modal" aria-label="Close"><span
                                                        aria-hidden="true"> <img class="close_icon"
                                                            style="height: 17px !important; width: 17px !important;"
                                                            src="{{ asset('assets/frontend/static/img/closebutton.png') }}"
                                                            alt="First PREMIER Bank" /></span></button>
                                                <div class="pop_main_container">
                                                    <h4 class="popupheader">You will be leaving firstpremier.com</h4>
                                                    <p>Please note, by clicking &ldquo;continue&rdquo; you will be
                                                        redirected to
                                                        a website that is not operated or controlled by PREMIER. PREMIER is
                                                        not
                                                        responsible for the content, links, privacy policy or security of
                                                        that
                                                        website. Your use of that website is subject to its terms of use and
                                                        privacy policy. Thank you for visiting firstpremier.com. If you
                                                        continue, we hope you find the information presented educational and
                                                        useful.</p>
                                                    <p>&nbsp;</p>
                                                    <a class="speedbumpgreenbutton"
                                                        href="https://ascentstudentloans.com/?utm_source=partner&amp;utm_campaign=FirstPremier_Rev_Ascent_Help&amp;utm_medium=FirstPremier_Rev_Ascent_Help_PartnerID_XXXXX&amp;utm_content=FirstPremier_Rev_Ascent_Help"
                                                        target="_blank" rel="noopener">Continue</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p style="text-align: center;">Show your love for Dakota State University and give back to the
                                university&rsquo;s foundation with a First PREMIER Bank DSU Debit Mastercard&reg;.
                                It&rsquo;s
                                free with any First PREMIER Bank checking account.</p>

                            <a href="https://open.firstpremier.com/" class="b46button">Apply Now</a>


                            <div id="myModal" class="modal fade" role="dialog">
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
                                                    <h2>FREE + Checking Deposit Account Rate</h2>
                                                    <p style="text-align: center;">June 1, 2021<br /><br /></p>
                                                    <p style="text-align: center;">&nbsp;</p>
                                                    <div class="table_rate_modal">
                                                        <table style="height: 73px; width: 100%; border-collapse: collapse;"
                                                            border="1">
                                                            <tbody>
                                                                <tr style="height: 54px;">
                                                                    <td
                                                                        style="width: 20.8819%; height: 54px; text-align: center; font-size: 14px;">
                                                                        Account<br />Product <br />Name</td>
                                                                    <td
                                                                        style="width: 11.9517%; text-align: center; height: 54px; font-size: 14px;">
                                                                        Minimum <br />Opening <br />Deposit</td>
                                                                    <td
                                                                        style="width: 22.6791%; text-align: center; font-size: 14px; height: 54px;">
                                                                        Minimum Balance to Obtain <br />Annual Percentage
                                                                        Yield<br /><br /></td>
                                                                    <td
                                                                        style="width: 11.6537%; text-align: center; height: 54px; font-size: 14px;">
                                                                        Interest <br />Rate<br /><br /></td>
                                                                    <td
                                                                        style="width: 12.8336%; text-align: center; height: 54px; font-size: 14px;">
                                                                        Annual <br />Percentage <br />Yield</td>
                                                                </tr>
                                                                <tr style="height: 19px;">
                                                                    <td
                                                                        style="width: 20.8819%; height: 19px; text-align: center;">
                                                                        FREE+ Checking<sup>1</sup></td>
                                                                    <td
                                                                        style="width: 11.9517%; text-align: center; height: 19px;">
                                                                        $50.00</td>
                                                                    <td
                                                                        style="width: 22.6791%; text-align: center; height: 19px;">
                                                                        $500.00<sup>2</sup></td>
                                                                    <td
                                                                        style="width: 11.6537%; text-align: center; height: 19px;">
                                                                        0.01%</td>
                                                                    <td
                                                                        style="width: 12.8336%; text-align: center; height: 19px;">
                                                                        0.01%</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <p><br /><br /></p>
                                                    <p style="text-align: left;"><sup>1</sup>The interest rate and annual
                                                        percentage yield may change after account opening</p>
                                                    <p style="text-align: left;"><sup>2</sup>Daily balance. The amount of
                                                        the
                                                        principal in the account each day.</p>
                                                    <p style="text-align: left;">&nbsp;</p>
                                                    <p style="text-align: left;">Fees could reduce the earnings on the
                                                        account<br />Interest Rates and Annual Percentage Yields are current
                                                        as
                                                        of June 1, 2021<br />For current rate information, call (605)
                                                        357-3000
                                                    </p>
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
                                                src="{{ asset('assets/frontend/contentassets/e64a01d45836489fb5ffa4c64b9eaff3/dsu_open_account_online.png') }}"
                                                title="Give Back with Every Purchase" alt="woman on mobile phone"></div>
                                    </div>
                                    <div class="b16basic_box_left">
                                        <h2>Give Back with Every Purchase</h2>

                                        <div class="xhtml">
                                            <p>Each time you use your DSU debit card, First PREMIER Bank will give 50
                                                percent of
                                                the net interchange fees collected to the DSU Foundation. You&rsquo;ll be
                                                showing your Trojan pride and supporting your favorite university. Plus,
                                                enjoy
                                                these additional debit card benefits.</p>
                                            <ul>
                                                <li>EMV chip technology for fraud protection</li>
                                                <li>Zero Liability&reg; Protection for debit card purchases</li>
                                                <li>Lock/Unlock capability in Online and Mobile Banking</li>
                                                <li>Easily connect your DSU debit card to your favorite Mobile Wallet</li>
                                                <li>Access to 33,000+ Surcharge-Free MoneyPass&reg; ATMs Nationwide</li>
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
                                                src="{{ asset('assets/frontend/contentassets/e731056d1daa4c339649d463f72d5ac5/dsu_give_back.png') }}"
                                                title="Open Your Account Online" alt="student on mobile phone"></div>

                                    </div>
                                    <div class="b16basic_box_left payIcon-space">
                                        <h2 style="padding-top:0px !important;">Open Your Account Online</h2>
                                        <div class="xhtml">
                                            <p>Our most popular personal checking account is our feature-rich, value-based
                                                FREE+
                                                Checking.</p>
                                            <ul>
                                                <li>No minimum monthly balance, fees or surprises<sup>1</sup></li>
                                                <li>Available online account opening<sup>2</sup></li>
                                                <li>Online and Mobile Banking</li>
                                                <li>Free Mobile Deposit</li>
                                                <li>eStatements</li>
                                                <li>Free spending analysis and budgeting tools</li>
                                            </ul>
                                        </div>

                                        <!-- Button and Footer Links go here ... -->
                                        <a href="https://open.firstpremier.com/" class="b16readmore">Apply Online</a>
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
            <div class="block b25block  col-md-12">
                <script>
                    $(document).ready(function() {

                        if ('{{ asset("assets/frontend/Static/img/CustomBlocks/B25/Background.png") }}' != 'null' &&
                            '{{ asset("assets/frontend/Static/img/CustomBlocks/B25/Background.png") }}' != '') {
                            $(".b25disclosure").css("background",
                                "#245251 url({{ asset('assets/frontend/Static/img/CustomBlocks/B25/Background.png') }}) no-repeat"
                                );
                            if (screen.width > 1000) {
                                $(".b25need_help_main").css("background",
                                    "#245251 url({{ asset('assets/frontend/Static/img/CustomBlocks/B25/Background.png') }}) no-repeat"
                                    );
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
                    @media only screen and (max-width:1024px) {
                        .b25need_help_main {
                            background-color: #245251 !important;
                        }

                        .page-about-us .b25need_help_main,
                        .parent-5384 .b25need_help_main {
                            background-color: #1f3848 !important;
                        }
                    }

                </style>
                <section class="row-full">

                    <div class="b25need_help_main">
                        <div class="container">
                            <h2 class="White">Already a Customer? </h2>
                            <div class="xhtml">
                                <p style="text-align: center;">If you already have an account, stop by any branch to ask for
                                    an
                                    instant issue<sup>3</sup> Dakota State University Debit Mastercard&reg;.</p>
                            </div>
                            <div class="b25bottom" style="">
                                <center>
                                    <a href="../../../pages/quick-links/locations/first-premier-bank-locations/index.html"
                                        class="b25mainanchor">Find a Location</a><br clear="all" />
                                </center>
                            </div>
                        </div>
                    </div>

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
                                <p>{1} A $50 minimum deposit is required to open account.&nbsp;</p>
                                <p>{2} You must be a resident of South Dakota, Iowa, Nebraska or Minnesota to apply online.
                                </p>
                                <p>{3} Instant issue is not available at the following branches: Wakonda, Lake Norden,
                                    Castlewood, Kranzburg, and Watertown on 5th Street.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="block b26block  col-md-12">



                <style>
                    .carousel-control:focus,
                    .carousel-control:hover,
                    .carousel-control.left,
                    .carousel-control.right {
                        background: none !important;
                    }

                    .b26line_credit_main .carousel-inner {
                        min-height: 520px !important;
                        ;
                    }

                    .white-background h2,
                    .white-background .xhtml,
                    .white-background .xhtml p,
                    .grey-background h2,
                    .grey-background .xhtml,
                    .grey-background .xhtml p {
                        color: #000;
                    }

                </style>
                <script>
                    var alternateBackground = "True";
                    $(document).ready(function() {
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
                                            <div class='item active'>
                                                <div
                                                    class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad'>
                                                    <div class='b26line_credit_loans_left'><img
                                                            src='{{ asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-loans-credit.png') }}'
                                                            alt='couple shaking hands with banker'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow">
                                                            <h3 class='deckspanNoCaret'>Loans & Credit Lines</h3>
                                                        </div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>Competitive rates on loans of all sizes, lines of credit
                                                                    and
                                                                    more. We make our lending decisions locally.</p>
                                                                <ul>
                                                                    <li><a
                                                                            href="../../loans-and-credit-lines/personal-loans/index.html">Personal
                                                                            Loans</a></li>
                                                                    <li><a
                                                                            href="../../loans-and-credit-lines/personal-lines-of-credit/index.html">Personal
                                                                            Lines of Credit</a></li>
                                                                </ul>
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div
                                                    class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans b26line_personal_loans no-pad'>
                                                    <div class='b26line_credit_loans_left'><img
                                                            src='{{ asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-save-future.png') }}'
                                                            alt='couple looking over document'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow">
                                                            <h3 class='deckspanNoCaret'>Save for the Future</h3>
                                                        </div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>We can help you invest wisely with solid investment
                                                                    advice
                                                                    and access to an array of funds.</p>
                                                                <ul>
                                                                    <li><a href="../../savings-and-cds/index.html">Savings
                                                                            &amp;
                                                                            CDs</a></li>
                                                                    <li><a href="../../investing/index.html">Investing</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="../../investing/retirement-planning/index.html">Retirement
                                                                            Planning</a></li>
                                                                </ul>
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div
                                                    class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad last'>
                                                    <div class='b26line_credit_loans_left'><img
                                                            src='{{ asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-personal-checking.png') }}'
                                                            alt='woman on couch using mobile phone'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow">
                                                            <h3 class='deckspanNoCaret'>Personal Checking</h3>
                                                        </div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>From FREE+ Checking with Online &amp; Mobile Banking,
                                                                    we&rsquo;ve got you covered.</p>
                                                                <ul>
                                                                    <li><a
                                                                            href="../../personal-checking/free-plus-checking/index.html">FREE+
                                                                            Checking</a></li>
                                                                    <li><a
                                                                            href="../../personal-checking/reward-checking/index.html">Reward
                                                                            Checking</a></li>
                                                                    <li><a href="../../online-and-mobile/index.html">Online
                                                                            &amp; Mobile Banking</a></li>
                                                                </ul>
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b26Mobile col-sm-6 hidden-md hidden-lg" style="left:-8px;">
                                    <center>
                                        <div class="b26MobileCard" style="width:345px;min-height:700px;">
                                            <div class='item'>
                                                <div
                                                    class='col-xs-12 col-sm-12 b26AltClass b26line_credit_loans b26line_personal_loans no-pad '>
                                                    <div><img
                                                            src='{{ asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-loans-credit.png') }}'
                                                            alt='couple shaking hands with banker'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow">
                                                            <h3 class='deckspanNoCaret'>Loans & Credit Lines</h3>
                                                        </div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>Competitive rates on loans of all sizes, lines of credit
                                                                    and
                                                                    more. We make our lending decisions locally.</p>
                                                                <ul>
                                                                    <li><a
                                                                            href="../../loans-and-credit-lines/personal-loans/index.html">Personal
                                                                            Loans</a></li>
                                                                    <li><a
                                                                            href="../../loans-and-credit-lines/personal-lines-of-credit/index.html">Personal
                                                                            Lines of Credit</a></li>
                                                                </ul>
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='item'>
                                                <div
                                                    class='col-xs-12 col-sm-12 b26AltClass b26line_credit_loans b26line_personal_loans no-pad '>
                                                    <div><img
                                                            src='{{ asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-save-future.png') }}'
                                                            alt='couple looking over document'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow">
                                                            <h3 class='deckspanNoCaret'>Save for the Future</h3>
                                                        </div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>We can help you invest wisely with solid investment
                                                                    advice
                                                                    and access to an array of funds.</p>
                                                                <ul>
                                                                    <li><a href="../../savings-and-cds/index.html">Savings
                                                                            &amp;
                                                                            CDs</a></li>
                                                                    <li><a href="../../investing/index.html">Investing</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="../../investing/retirement-planning/index.html">Retirement
                                                                            Planning</a></li>
                                                                </ul>
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='item'>
                                                <div
                                                    class='col-xs-12 col-sm-12 b26AltClass b26line_credit_loans b26line_personal_loans no-pad '>
                                                    <div><img
                                                            src='{{ asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-personal-checking.png') }}'
                                                            alt='woman on couch using mobile phone'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow">
                                                            <h3 class='deckspanNoCaret'>Personal Checking</h3>
                                                        </div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>From FREE+ Checking with Online &amp; Mobile Banking,
                                                                    we&rsquo;ve got you covered.</p>
                                                                <ul>
                                                                    <li><a
                                                                            href="../../personal-checking/free-plus-checking/index.html">FREE+
                                                                            Checking</a></li>
                                                                    <li><a
                                                                            href="../../personal-checking/reward-checking/index.html">Reward
                                                                            Checking</a></li>
                                                                    <li><a href="../../online-and-mobile/index.html">Online
                                                                            &amp; Mobile Banking</a></li>
                                                                </ul>
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </center>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>


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
