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
                        background: #fff url("{{ asset('assets/frontend/globalassets/images/backgrounds/grey-2.svg') }}") no-repeat;
                    }

                </style>
                <section class="row-full">
                    <div class="b46productpage">
                        <div class="container">
                            <h1>Buying or Building a Home</h1>
                            <img src="{{ asset('assets/frontend/contentassets/1bb78c55f46949f69c4b16cedb8b0104/1.5.1_b-46-hero_familyhome-min.png') }}"
                                alt="First PREMIER Bank">
                            <h2>Investing in Your Dreams</h2>
                            <p>At First PREMIER Bank, we know you're excited for a new home, not a mortgage. That's why we
                                work to make the mortgage process as quick and easy as possible. Our mortgage lending
                                decisions are made locally by people who get to know you and your neighborhood. From
                                pre-qualification to closing, we're investing in your dreams.</p>



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
                                                src="{{ asset('assets/frontend/contentassets/bd22303239894b3bb719e1e3975a164d/mortgage-buy-house.jpg') }}"
                                                title="Buying a Home" alt="family standing in front of new house"></div>
                                    </div>
                                    <div class="b16basic_box_left">
                                        <h2>Buying a Home</h2>

                                        <div class="xhtml">
                                            <p>We offer an array of loans and programs for your first, next or forever home.
                                                Our lenders provide personal attention and competitive rates so you can
                                                focus on what&rsquo;s important &ndash; finding a house you can&rsquo;t wait
                                                to call home.</p>
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
                                                src="{{ asset('assets/frontend/contentassets/913841c319e440daa30b763fe3e4785b/mortgage-build-house.jpg') }}"
                                                title="Building a Home"
                                                alt="couple standing in front of home being constructed"></div>

                                    </div>
                                    <div class="b16basic_box_left payIcon-space">
                                        <h2 style="padding-top:0px !important;">Building a Home</h2>
                                        <div class="xhtml">
                                            <p>Looking to build your house? A home construction loan from First PREMIER Bank
                                                can cover the lot, labor and materials. Once your home is complete, your
                                                construction loan is refinanced into a mortgage. First PREMIER Bank lenders
                                                can help you determine what might best fit your needs and walk you through
                                                the entire process.</p>
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
            <div class="block b15block  col-md-12">
                <section style="padding-left:0px;">
                    <div class="b15benfits_main_box">
                        <div class="container">
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar"><img
                                        src="{{ asset('assets/frontend/globalassets/images/secondary-icons/gold/location-maps/gold-location-_-maps-secondary-icon-10.png') }}"
                                        title="Local Decisions, Competitive Rates" alt="map" height="116px" width="116px">
                                </div>
                                <div class="b15avtar_content">
                                    <h3>Local Decisions, Competitive Rates</h3>
                                    <p>All our bankers know your neighborhood and will get to know you, delivering a loan
                                        with a competitive rate and personal, technology-enabled service.</p>
                                    <div class="clearfix"></div><br />
                                </div>
                            </div>
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar"><img
                                        src="{{ asset('assets/frontend/globalassets/images/secondary-icons/bright/business-finance/bright-business-_-finance-secondary-icon-2.png') }}"
                                        title="Fast, State-of-the-Art Processing" alt="coins dropping in hand"
                                        height="116px" width="116px"></div>
                                <div class="b15avtar_content">
                                    <h3>Fast, State-of-the-Art Processing</h3>
                                    <p>From application to closing - we do the heavy lifting, stay in touch and speed the
                                        process along. You'll also enjoy online access to your application status.</p>
                                    <div class="clearfix"></div><br />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <style>
                    .b4background.colored {
                        background-color: #25455a !important;
                    }

                    .b4background.colored .b15benfits_main_box {
                        margin: 0px !important;
                    }

                </style>
            </div>
            <div class="block b56block  col-md-12">

                <style>
                    .pop_main_container_board .pop_main_container ol li ol li {}

                </style>
                <style>
                    .tab_h4 {
                        display: inline !important;
                    }

                </style>

                <section>
                    <div class="b56lines-credit-main">
                        <div class="container">
                            <h2>Home Mortgage Options</h2>
                            <div class="b56lines-credit-table-sectopn b56mobile_section">
                                <table class="b56lines-credit-table">
                                    <tr>
                                        <td style="vertical-align:bottom;">
                                            <h4 class="tab_h4" style="float:right;">
                                                <p></p>
                                            </h4>
                                        </td>
                                        <th>
                                            <h3>MAY BE FOR YOU IF YOU ...</h3>

                                        </th>
                                        <th>
                                            <h3>BENEFITS ...</h3>

                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>
                                                <p>CONVENTIONAL&nbsp;<br />FIXED RATE LOAN</p>
                                            </h4>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Keep the property for a long time</li>
                                                <li>Have established credit history</li>
                                                <li>Can put down 5%</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Low fixed rates for eligible buyers</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>
                                                <p>ADJUSTABLE<br />RATE LOAN</p>
                                            </h4>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Have established credit history</li>
                                                <li>May move within a few years</li>
                                                <li>Can put down 5%</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Lowest short-term rates</li>
                                                <li>Initial lower monthly payments</li>
                                                <li>Initial rate periods of 3-10 years before adjust up or down</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>
                                                <p>FHA LOANS</p>
                                            </h4>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Have limited down payment funds</li>
                                                <li>Have a weak credit history</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Low down payment</li>
                                                <li>Flexible qualification guidelines</li>
                                                <li>Fixed-rate</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>
                                                <p>VA LOANS</p>
                                            </h4>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Are active military</li>
                                                <li>Are a veteran</li>
                                                <li>Are a surviving spouse of service member who died as a result of
                                                    military service</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Low-to-no down payment</li>
                                                <li>No mortgage insurance requirement</li>
                                                <li>Flexible qualification guidelines</li>
                                                <li>Fixed and Adjustable Rates</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>
                                                <p>JUMBO LOANS</p>
                                            </h4>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Purchase a home &gt; $484,350</li>
                                                <li>Have established credit history</li>
                                            </ul>
                                            <p>&nbsp;</p>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Low down payment options</li>
                                                <li>Increased purchase limits</li>
                                                <li>Fixed or adjustable rates</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>
                                                <p>SDHDA LOANS</p>
                                            </h4>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Haven't owned a principal residence during the past three years</li>
                                                <li>Meet income guidelines</li>
                                                <li>Meet other program guidelines</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Below market rates to qualified buyers</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>
                                                <p>INVESTMENT<br />PROPERTY<br />LOANS</p>
                                            </h4>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Are a landlord</li>
                                                <li>Are buying a second home</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Financing for residential properties with multi-units</li>
                                                <li>Many loan options to choose from</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>
                                                <p>NEW<br />CONSTRUCTION<br />&amp; LOT LOANS</p>
                                            </h4>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Are building a custom home</li>
                                                <li>Are buying a lot for a future home</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Financing for new construction</li>
                                                <li>Construction-to-permanent loans</li>
                                                <li>Many options to choose from</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>

                                <!--Mobile table Starts-->
                                <table class="b56lines-credit-table b56mobile_lines-credit-table">
                                    <tr>
                                        <td>
                                            <h3>MAY BE FOR YOU IF YOU ...</h3>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <hr />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td class='odd'>
                                                        <p>CONVENTIONAL&nbsp;<br />FIXED RATE LOAN</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <ul>
                                                            <li>Keep the property for a long time</li>
                                                            <li>Have established credit history</li>
                                                            <li>Can put down 5%</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='odd'>
                                                        <p>ADJUSTABLE<br />RATE LOAN</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <ul>
                                                            <li>Have established credit history</li>
                                                            <li>May move within a few years</li>
                                                            <li>Can put down 5%</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='odd'>
                                                        <p>FHA LOANS</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <ul>
                                                            <li>Have limited down payment funds</li>
                                                            <li>Have a weak credit history</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='odd'>
                                                        <p>VA LOANS</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <ul>
                                                            <li>Are active military</li>
                                                            <li>Are a veteran</li>
                                                            <li>Are a surviving spouse of service member who died as a
                                                                result of military service</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='odd'>
                                                        <p>JUMBO LOANS</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <ul>
                                                            <li>Purchase a home &gt; $484,350</li>
                                                            <li>Have established credit history</li>
                                                        </ul>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='odd'>
                                                        <p>SDHDA LOANS</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <ul>
                                                            <li>Haven't owned a principal residence during the past three
                                                                years</li>
                                                            <li>Meet income guidelines</li>
                                                            <li>Meet other program guidelines</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='odd'>
                                                        <p>INVESTMENT<br />PROPERTY<br />LOANS</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <ul>
                                                            <li>Are a landlord</li>
                                                            <li>Are buying a second home</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='odd'>
                                                        <p>NEW<br />CONSTRUCTION<br />&amp; LOT LOANS</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <ul>
                                                            <li>Are building a custom home</li>
                                                            <li>Are buying a lot for a future home</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>BENEFITS ...</h3>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <hr />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td class='odd'>
                                                        <p>CONVENTIONAL&nbsp;<br />FIXED RATE LOAN</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <ul>
                                                            <li>Low fixed rates for eligible buyers</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='odd'>
                                                        <p>ADJUSTABLE<br />RATE LOAN</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <ul>
                                                            <li>Lowest short-term rates</li>
                                                            <li>Initial lower monthly payments</li>
                                                            <li>Initial rate periods of 3-10 years before adjust up or down
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='odd'>
                                                        <p>FHA LOANS</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <ul>
                                                            <li>Low down payment</li>
                                                            <li>Flexible qualification guidelines</li>
                                                            <li>Fixed-rate</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='odd'>
                                                        <p>VA LOANS</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <ul>
                                                            <li>Low-to-no down payment</li>
                                                            <li>No mortgage insurance requirement</li>
                                                            <li>Flexible qualification guidelines</li>
                                                            <li>Fixed and Adjustable Rates</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='odd'>
                                                        <p>JUMBO LOANS</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <ul>
                                                            <li>Low down payment options</li>
                                                            <li>Increased purchase limits</li>
                                                            <li>Fixed or adjustable rates</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='odd'>
                                                        <p>SDHDA LOANS</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <ul>
                                                            <li>Below market rates to qualified buyers</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='odd'>
                                                        <p>INVESTMENT<br />PROPERTY<br />LOANS</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <ul>
                                                            <li>Financing for residential properties with multi-units</li>
                                                            <li>Many loan options to choose from</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class='odd'>
                                                        <p>NEW<br />CONSTRUCTION<br />&amp; LOT LOANS</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <ul>
                                                            <li>Financing for new construction</li>
                                                            <li>Construction-to-permanent loans</li>
                                                            <li>Many options to choose from</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                </table>
                                <!--Mobile table Ends-->
                            </div>

                            <div class="b56bottom">
                                <center>
                                    <a class="b56mainbutton" href="../apply-for-a-mortgage/index.html">Get Started</a>
                                    <a class="b56LinkItem"
                                        href="../../../pages/about-us/teams/mortgage-banking-team/index.html">Contact Us</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- View Rate [3] (within container)-->
                <!-- View Rate [3] (within container)-->
            </div>
            <div class="block b06block  col-md-12">
                <style>
                    .b06carousel-inner {
                        position: relative;
                        width: 60% !important;
                        overflow: hidden;
                        margin: 0 20% 0 19% !important;
                        height: 268px;
                    }

                    .b06carousel-control .glyphicon-chevron-left::before,
                    .glyphicon-chevron-right::before {
                        content: "" !important;
                    }

                    .b06carousel-control:focus,
                    .b06carousel-control:hover,
                    .b06carousel-control.left,
                    .b06carousel-control.right {
                        background: none !important;
                    }

                    .b06carousel-control {
                        z-index: 999;
                        opacity: inherit !important;
                    }

                    .b06carousel-inner>.item.next.left,
                    .carousel-inner>.item.prev.right,
                    .carousel-inner>.item.active {
                        transform: inherit !important;
                    }

                    .b06carousel-inner>.item {
                        perspective: inherit !important;
                    }

                    .b06carousel-control.left {
                        left: -3% !important;
                    }

                    @media only screen and (max-width:1366px) {

                        /*#region B-6*/
                        .b06carousel-inner {
                            width: 80% !important;
                            margin: 0 10% 0 10% !important;
                        }

                        /*#endregion*/
                    }

                    @media only screen and (max-width:1000px) {

                        /*#region B-6*/
                        .b06carousel-control.left {
                            left: 0 !important;
                        }

                        .b06carousel-control .glyphicon-chevron-left,
                        .carousel-control .glyphicon-chevron-right,
                        .carousel-control .icon-next,
                        .carousel-control .icon-prev {
                            top: 50% !important;
                        }

                        .b06carousel-control {
                            width: 10% !important;
                        }

                        .glyphicon-chevron-left img,
                        .glyphicon-chevron-right img {
                            width: 100%;
                        }

                        .b06carousel-inner {
                            height: 320px;
                        }

                        /*#endregion*/
                    }

                    @media screen and (max-width: 767px) {

                        /*#region B-6*/
                        .b06carousel-inner {
                            height: 300px;
                        }

                        /*#endregion*/
                    }

                </style>
                <script type="text/javascript">
                    $('#b06Carousel').carousel({
                        interval: 80000,
                    })
                </script>





                <section class="row-full">
                    <div class="b6featured_quote_main">
                        <img src="{{ asset('assets/frontend/Static/img/CustomBlocks/B6/featured_bg.png') }}"
                            class="b6featured_bg" alt="First PREMIER Bank">
                        <img src="{{ asset('assets/frontend/Static/img/CustomBlocks/B6/featured_bg_small.png') }}"
                            class="b6featured_bg_small_bg" alt="First PREMIER Bank">
                        <div class="b6featured_bg_small carousel" id="b06Carousel" data-ride="carousel">
                            <div class="">
                                <div class="carousel-inner b06carousel-inner">
                                    <div class="item active">
                                        <div class="row b6mypadding">
                                            <div class="b6featured_quote_img col-lg-5 col-md-5"><img
                                                    src="{{ asset('assets/frontend/contentassets/ba2f10f3db6c4b2486ffa95df16a7f37/quotes-angelabeilke.png') }}"
                                                    class="b6featured_img" alt="Angela Beilke VP Mortgage Banking Manager">
                                            </div>
                                            <div class="b6featured_quote col-lg-7 col-md-7">
                                                <p>Buying a home can be stressful, especially when you're waiting to close.
                                                    Our mortgage bankers work quickly and efficiently and shorten that
                                                    waiting period and return you to a normal life.</p>
                                                <div class="clearfix"></div><span> - Angela Beilke, VP, Mortgage
                                                    Banking Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row b6mypadding">
                                            <div class="b6featured_quote_img col-lg-5 col-md-5"><img
                                                    src="{{ asset('assets/frontend/contentassets/e644fae7742e4bada8845362e4f58e67/quotes-ryanspellerberg.png') }}"
                                                    class="b6featured_img" alt="Ryan Spellerberg VP Mortgage Banking"></div>
                                            <div class="b6featured_quote col-lg-7 col-md-7">
                                                <p>We care about our clients and want to see them succeed. We take the time
                                                    to know them and understand their financial solution. And most
                                                    importantly, we do this quickly and efficiently to eliminate that
                                                    painful waiting period. That's the PREMIER Way! </p>
                                                <div class="clearfix"></div><span> - Ryan Spellerberg, VP, Mortgage
                                                    Banking</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <a class="left carousel-control b06carousel-control" href="#b06Carousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"><img
                                        src="{{ asset('assets/frontend/Static/img/CustomBlocks/B6/left_arrow.png') }}"
                                        alt="First PREMIER Bank"></span>
                                <span class="sr-only"></span>
                            </a>
                            <a class="right carousel-control b06carousel-control" href="#b06Carousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"><img
                                        src="{{ asset('assets/frontend/Static/img/CustomBlocks/B6/right_arrow.png') }}"
                                        alt="First PREMIER Bank"></span>
                                <span class="sr-only"></span>
                            </a>
                        </div>
                    </div>
                </section>

            </div>
            <div class="block b17block  col-md-12">﻿
                <!-- VIEW RATE / SPEED BUMP [2] -->
                <style>
                    .pop_main_container_board .pop_main_container ol li ol li {}

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

                    .b17free_mobile_banking_left.right>img {
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
                            <h2>Get Home Faster</h2>

                            <div class="b17free_mobile_banking_right">
                                <h3>Our Commitment to You</h3>
                                <div class="xhtml">
                                    <ul>
                                        <li>Keep your interests at heart</li>
                                        <li>Provide responsive, personal service</li>
                                        <li>Clearly explain the process and timeline</li>
                                        <li>Disclose fees in a forthright manner</li>
                                        <li>Ensure speed and efficiency from application to closure</li>
                                    </ul>
                                </div>
                                <div class="b17PayLinks payIcon-space">
                                </div>

                                <!-- Button and Footer Links go here ... -->
                                <a href="../apply-for-a-mortgage/index.html" class="b17readmore">Get Started</a>
                            </div>

                            <div class="b17free_mobile_banking_left right">
                                <img class="img-responsive" id="imgMainImage" style="border-radius:50%"
                                    src="{{ asset('assets/frontend/contentassets/58083ed6f7d843dea7d13ecb0ef77ffe/1.5.1_b-17-promo_operator-min.png') }}"
                                    alt="First PREMIER Bank">
                            </div>
                        </div>
                    </div>


                    <div id="a31354910" class="modal fade" role="dialog">
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
                                            <h2>Get Home Faster</h2>
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a href="../apply-for-a-mortgage/index.html"
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
                <script>
                    $('.modal-backdrop').remove();
                </script>
            </div>
        </div>
        <script>
            $('#b06Carousel').carousel({
                interval: 16000,
            })
        </script>



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
