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
                        background: #fff url("{{asset('assets/frontend/contentassets/c2ddbf9377124bb8838750921f7494c5/grey-2.svg')}}") no-repeat;
                    }

                </style>
                <section class="row-full">
                    <div class="b46productpage">
                        <div class="container">
                            <h1>Paying Your Loan</h1>
                            <img src="{{ asset('assets/frontend/contentassets/c2ddbf9377124bb8838750921f7494c5/loan-page-header-image.jpg') }}"
                                alt="First PREMIER Bank">
                            <h2>Your Options Are Open</h2>
                            <p style="text-align: center;">Having options to fit your personal needs and preferences is
                                important. That&rsquo;s why First PREMIER Bank offers several quick and convenient ways to
                                make your consumer loan payment. Many of these can be done from the comfort of your home or
                                from your mobile device. If you're looking for ways to pay your First PREMIER Credit Card,
                                please visit <a href="https://www.mypremiercreditcard.com/">mypremiercard.com</a>.</p>
                            <p style="text-align: center;">&nbsp;</p>



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
                                                        the principal in the account each day.</p>
                                                    <p style="text-align: left;">&nbsp;</p>
                                                    <p style="text-align: left;">Fees could reduce the earnings on the
                                                        account<br />Interest Rates and Annual Percentage Yields are current
                                                        as of June 1, 2021<br />For current rate information, call (605)
                                                        357-3000</p>
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
                                                src="{{ asset('assets/frontend/contentassets/e7bae471961b41198700e46395dc9831/loan-payments-online-banking.jpg') }}"
                                                title="Online Banking" alt="woman looking at laptop"></div>
                                    </div>
                                    <div class="b16basic_box_left">
                                        <h2>Online Banking</h2>

                                        <div class="xhtml">
                                            <ul>
                                                <li>Free payment option</li>
                                                <li>24/7 access</li>
                                                <li>Easily make online payments</li>
                                                <li>View balance information online</li>
                                            </ul>
                                        </div>
                                        <!-- Button and Footer Links go here ... -->
                                        <a href="https://online.firstpremier.com/FirstPremierBankOnline_AutoEnroll/enroll.html"
                                            class="b16readmore">Enroll Today</a>
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
                                                src="{{ asset('assets/frontend/contentassets/98a47218f38e4b00b9084d256265b0bf/loan-payments-auto.jpg') }}"
                                                title="Automatic Payments" alt="woman looking at mobile phone"></div>

                                    </div>
                                    <div class="b16basic_box_left payIcon-space">
                                        <h2 style="padding-top:0px !important;">Automatic Payments</h2>
                                        <div class="xhtml">
                                            <ul>
                                                <li>Loan is paid automatically at the same time each month</li>
                                                <li>Less worry about late or missed payments</li>
                                                <li>Set it and Forget It</li>
                                                <li>Enroll using your bank account and routing number (See FAQs below)</li>
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
                    .b16basic_box_right .b16imgcrop {
                        margin-top: 25px !important;
                    }

                </style>
                <!-- VIEW RATE / SPEED BUMP [2] -->

                <section class="row-full b16wrapper">

                    <div class="b16basic_box_left_content b16basic_box_background">
                        <div class="b16basic_box_main">
                            <div class="container">
                                <div class="b16basic_box b16basic_box_position">
                                    <div class="b16basic_box_right" style="padding-right:50px;">
                                        <div class="b16imgcrop"><img
                                                src="{{ asset('assets/frontend/contentassets/f3330bd8c6fb4e19b7a5ed86efa49116/loan-options-by-mail.jpg') }}"
                                                title="By Mail" alt="man wearing headset"></div>
                                    </div>
                                    <div class="b16basic_box_left">
                                        <h2>By Mail</h2>

                                        <div class="xhtml">
                                            <ul>
                                                <li>Convenient coupon book with payment information</li>
                                                <li>Send check and coupon every month</li>
                                                <li>See FAQs for mailing address</li>
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
                                                src="{{ asset('assets/frontend/contentassets/af6734fbfe9245ec85996752bdc5b8d8/loan-payments-other-fis.jpg') }}"
                                                title="Payments From Other Banks" alt="woman looking at laptop"></div>

                                    </div>
                                    <div class="b16basic_box_left payIcon-space">
                                        <h2 style="padding-top:0px !important;">Payments From Other Banks</h2>
                                        <div class="xhtml">
                                            <ul>
                                                <li>Refer to your financial institution for payment options they offer</li>
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

                    <div class="b16basic_box_left_content b16basic_box_background">
                        <div class="b16basic_box_main">
                            <div class="container">
                                <div class="b16basic_box b16basic_box_position">
                                    <div class="b16basic_box_right" style="padding-right:50px;">
                                        <div class="b16imgcrop"><img
                                                src="{{ asset('assets/frontend/contentassets/830a9e8d91db49f78a0a6105b0557031/loan-payments-by-phone.jpg') }}"
                                                title="Over the Phone" alt="man talking on the phone"></div>
                                    </div>
                                    <div class="b16basic_box_left">
                                        <h2>Over the Phone</h2>

                                        <div class="xhtml">
                                            <ul>
                                                <li>Please call Customer Care at 800-501-6535 to pay by phone.</li>
                                                <li>Use any checking or savings account to make payment.</li>
                                                <li>A $10 fee is assessed for customers using non-First PREMIER accounts to
                                                    make payment.</li>
                                                <li>See FAQs for more information</li>
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
            <div class="block b12block  col-md-12">
                <style>
                    .b12faq_main {
                        float: left;
                        width: 100%;
                        padding: 100px 0px 50px 0px !important;
                        text-align: left;
                        background: #fff;
                    }

                </style>
                <div class="b12faq_main">
                    <div class="b12container">
                        <h2>Frequently Asked Questions</h2>
                        <!-- tabs left -->
                        <div class="tabbable">
                            <div class="tab-content col-md-7">
                                <div class="tab-pane active" id="A"><span>How do I enroll in Automatic Payments?</span>
                                    <p>
                                    <p>Contact us at 800-501-6535 to set up automatic payments through your primary
                                        financial institution.</p>
                                    </p>
                                </div>
                                <div class="tab-pane" id="B"><span>How do I send via Bill Pay?</span>
                                    <p>
                                    <p>Use your primary financial institution&rsquo;s Bill Pay in your online banking.
                                        Please note, some institutions charge for Bill Pay. Refer to your product and
                                        service fee disclosure. Bill Pay Vendor Information:</p>
                                    <p>First PREMIER Bank</p>
                                    <p>PO Box 1348</p>
                                    <p>Sioux Falls, SD 57101-1348</p>
                                    <p>PH: 605-357-3002</p>
                                    </p>
                                </div>
                                <div class="tab-pane" id="C"><span>Where can I enroll in Online Banking?</span>
                                    <p>
                                    <p>Enroll in First PREMIER Bank&rsquo;s Online Banking to make payments and view balance
                                        information. <a
                                            href="https://online.firstpremier.com/FirstPremierBankOnline_AutoEnroll/enroll.html">Enroll
                                            here.</a></p>
                                    </p>
                                </div>
                                <div class="tab-pane" id="D"><span>What is the mailing address?</span>
                                    <p>
                                    <p>Mail payment with coupon to:</p>
                                    <p>First PREMIER Bank</p>
                                    <p>PO Box 1348</p>
                                    <p>Sioux Falls, SD 57101-1348</p>
                                    </p>
                                </div>
                                <div class="tab-pane" id="E"><span>How do I pay over the phone?</span>
                                    <p>
                                    <p>Loan payments can be made over the phone by calling Customer Care at 800-501-6535.
                                        Simply provide a checking or savings account number and our friendly operators will
                                        make the transfer. Please note there is a $10 fee for transfers made from non-First
                                        PREMIER accounts. Customers who make payments over the phone, using a First PREMIER
                                        account, will not be assessed the fee.</p>
                                    </p>
                                </div>
                            </div>
                            <ul class="nav nav-pills nav-stacked col-md-5">
                                <li class="active"><a href="#A" data-toggle="tab">How do I enroll in Automatic
                                        Payments?</a></li>
                                <li><a href="#B" data-toggle="tab">How do I send via Bill Pay?</a></li>
                                <li><a href="#C" data-toggle="tab">Where can I enroll in Online Banking?</a></li>
                                <li><a href="#D" data-toggle="tab">What is the mailing address?</a></li>
                                <li><a href="#E" data-toggle="tab">How do I pay over the phone?</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

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
                                                                    and more. We make our lending decisions locally.</p>
                                                                <ul>
                                                                    <li><a href="../personal-loans/index.html">Personal
                                                                            Loans</a></li>
                                                                    <li><a href="../personal-lines-of-credit/index.html">Personal
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
                                                                    advice and access to an array of funds.</p>
                                                                <ul>
                                                                    <li><a href="../../savings-and-cds/index.html">Savings
                                                                            &amp; CDs</a></li>
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
                                                            src='{{ asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-why-bank-with-us.png') }}'
                                                            alt='Sioux Falls South Dakota'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow">
                                                            <h3 class='deckspanNoCaret'>Why Bank with Us?</h3>
                                                        </div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>As one of the nation&rsquo;s strongest capitalized banks,
                                                                    we&rsquo;re also debt-free. Learn more!</p>
                                                                <ul>
                                                                    <li><a href="../../../pages/about-us/index.html">About
                                                                            Us</a></li>
                                                                    <li><a
                                                                            href="../../../pages/about-us/the-premier-way/index.html">The
                                                                            PREMIER Way</a></li>
                                                                    <li><a
                                                                            href="../../../pages/resources/sanford-health/first-premier-bank-sanford-partnership-offers/index.html">Giving
                                                                            Back to Community</a></li>
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
                                                                    and more. We make our lending decisions locally.</p>
                                                                <ul>
                                                                    <li><a href="../personal-loans/index.html">Personal
                                                                            Loans</a></li>
                                                                    <li><a href="../personal-lines-of-credit/index.html">Personal
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
                                                                    advice and access to an array of funds.</p>
                                                                <ul>
                                                                    <li><a href="../../savings-and-cds/index.html">Savings
                                                                            &amp; CDs</a></li>
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
                                                            src='{{ asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-why-bank-with-us.png') }}'
                                                            alt='Sioux Falls South Dakota'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow">
                                                            <h3 class='deckspanNoCaret'>Why Bank with Us?</h3>
                                                        </div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>As one of the nation&rsquo;s strongest capitalized banks,
                                                                    we&rsquo;re also debt-free. Learn more!</p>
                                                                <ul>
                                                                    <li><a href="../../../pages/about-us/index.html">About
                                                                            Us</a></li>
                                                                    <li><a
                                                                            href="../../../pages/about-us/the-premier-way/index.html">The
                                                                            PREMIER Way</a></li>
                                                                    <li><a
                                                                            href="../../../pages/resources/sanford-health/first-premier-bank-sanford-partnership-offers/index.html">Giving
                                                                            Back to Community</a></li>
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
