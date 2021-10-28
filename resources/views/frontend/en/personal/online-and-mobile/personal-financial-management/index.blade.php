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
                        background: #fff url("{{ 'assets/frontend/globalassets/images/backgrounds/grey-2.svg' }}") no-repeat;
                    }

                </style>
                <section class="row-full">
                    <div class="b46productpage">
                        <div class="container">
                            <h1>Financial Management Tools</h1>
                            <img src="{{ asset('assets/frontend/contentassets/141c09fb04194647a5bdbf789cb4d250/1.2.6_b-46-subpage-hero-01-benefits_handbills-min.png') }}"
                                alt="First PREMIER Bank">
                            <h2>Analyze Spending &amp; More</h2>
                            <p>Our online and mobile financial management tools can help you create a private, secure
                                comprehensive financial snapshot, assess your spending patterns, plan a budget and more.</p>



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
                        background: url("{{asset('assets/frontend/Static/img/CustomBlocks/B14/arrow_small.png')}}") no-repeat right center;
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
                        background: url("{{asset('assets/frontend/Static/img/CustomBlocks/B14/arrow_small.png')}}") no-repeat right center;
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
                                                src="{{ asset('assets/frontend/contentassets/aad4368b139843e69c2bb85b22c208be/1.2.6-b-16-list-01-alternating-1-couplelaptop-min-right.png') }}"
                                                title="Yours FREE" alt="couple looking at laptop"></div>
                                    </div>
                                    <div class="b16basic_box_left">
                                        <h2>Yours FREE</h2>

                                        <div class="xhtml">
                                            <ul>
                                                <li>View First PREMIER Bank accounts</li>
                                                <li>Link external accounts for a broader picture</li>
                                                <li>Get a consolidated view of spending and debt</li>
                                                <li>Calculate your net worth and debt-to-income ratio</li>
                                                <li>Craft a budget based on real financial data and trends</li>
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
                        background: url("{{asset('assets/frontend/Static/img/CustomBlocks/B14/arrow_small.png')}}") no-repeat right center;
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
                        background: url("{{asset('assets/frontend/Static/img/CustomBlocks/B14/arrow_small.png')}}") no-repeat right center;
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
                                                src="{{ asset('assets/frontend/contentassets/806375d24ca84c8b947e87160a2ac9f1/1.2.6_b-16-list_01_alternating-2_screenshot-min.png') }}"
                                                title="Actionable &amp; Helpful" alt="person using laptop"></div>

                                    </div>
                                    <div class="b16basic_box_left payIcon-space">
                                        <h2 style="padding-top:0px !important;">Actionable &amp; Helpful</h2>
                                        <div class="xhtml">
                                            <ul>
                                                <li>Get a centralized view of your financial life</li>
                                                <li>Organize spending into customizable categories&nbsp;</li>
                                                <li>View meaningful visual charts, graphs and analysis</li>
                                                <li>Identify spending trends and opportunities</li>
                                                <li>Establish a budget to reach your financial goals</li>
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
                        background: url("{{asset('assets/frontend/Static/img/CustomBlocks/B14/arrow_small.png')}}") no-repeat right center;
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
                        background: url("{{asset('assets/frontend/Static/img/CustomBlocks/B14/arrow_small.png')}}") no-repeat right center;
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
                                                src="{{ asset('assets/frontend/contentassets/27307355fa3c42f58c18321b7c5a521f/1.2.6_b-16-list-01-alternating-3_mother-min.png') }}"
                                                title="Getting Started is Easy" alt="woman with baby in lap using laptop">
                                        </div>
                                    </div>
                                    <div class="b16basic_box_left">
                                        <h2>Getting Started is Easy</h2>

                                        <div class="xhtml">
                                            <ul>
                                                <li>Enroll in <a href="../index.html">Online or Mobile Banking</a></li>
                                                <li>Log in to your account</li>
                                                <li>Tools list along the top of the screen to the left of the &ldquo;Link
                                                    Account&rdquo; option</li>
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
                                <div class="tab-pane active" id="A"><span>What types of accounts can I add to my Financial
                                        Management Tool?</span>
                                    <p>
                                    <p>You can link checking and savings accounts, investments, credit cards, loans, or
                                        other lines of credit from almost any financial institution. These accounts will
                                        automatically update every time you visit the feature in Online Banking.</p>
                                    </p>
                                </div>
                                <div class="tab-pane" id="B"><span>How can I monitor my spending with my Financial
                                        Management Tool?</span>
                                    <p>
                                    <p>The color-coded spending wheel makes it easy for you to quickly identify your biggest
                                        expenses, as well as dive into the smallest details. Select a piece of the wheel to
                                        see how much you spent in each category.</p>
                                    </p>
                                </div>
                                <div class="tab-pane" id="C"><span>How can I create a budget?</span>
                                    <p>
                                    <p>Add your accounts from other institutions to your Financial Management Tool and
                                        choose the option to auto generate a budget, based on your past spending. The more
                                        complete your spending history, the more accurate and helpful your initial budget
                                        will be. Big bubbles represent a larger portion of your monthly budget, and red
                                        bubbles have exceeded their monthly allowance. Budgets will calculate your average
                                        monthly spending in each category.</p>
                                    </p>
                                </div>
                                <div class="tab-pane" id="D"><span>Is there a fee to use my Financial Management
                                        Tool?</span>
                                    <p>
                                    <p>There are no fees associated with utilizing the Financial Management Tool.</p>
                                    </p>
                                </div>
                                <div class="tab-pane" id="E"><span>How can I access my Financial Management
                                        Tool?</span>
                                    <p>
                                    <p>You must be enrolled in Online Banking or Mobile Banking to access the Financial
                                        Tools. When you access your account online, you can link your accounts in the
                                        Navigation bar at the top. When accessing your account on the mobile app, Financial
                                        Tools can be found in the menu bar along the bottom.</p>
                                    </p>
                                </div>
                            </div>
                            <ul class="nav nav-pills nav-stacked col-md-5">
                                <li class="active"><a href="#A" data-toggle="tab">What types of accounts can I add
                                        to my Financial Management Tool?</a></li>
                                <li><a href="#B" data-toggle="tab">How can I monitor my spending with my Financial
                                        Management Tool?</a></li>
                                <li><a href="#C" data-toggle="tab">How can I create a budget?</a></li>
                                <li><a href="#D" data-toggle="tab">Is there a fee to use my Financial Management Tool?</a>
                                </li>
                                <li><a href="#E" data-toggle="tab">How can I access my Financial Management Tool?</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="block b04block  col-md-12">
                <style>
                    .videoWrapper {
                        position: relative;
                        padding-bottom: 56.25%;
                        /* 16:9 */
                        padding-top: 25px;
                        height: 0;
                    }

                    .videoWrapper iframe {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                    }

                </style>
                <section class="row-full b4background">
                    <div class="container">
                        <div class="b4anywhere_banking" style="width:100%; ">
                            <h2 style="text-align:center !important;">Personal Finance Manager</h2>
                            <div class="xhtml">
                                <div class="videoWrapper">
                                    <center><iframe src="http://player.vimeo.com/video/428604356?title=0&amp;amp;byline=0"
                                            frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                                        <p style="text-align: center;">&nbsp;</p>
                                    </center>
                                </div>
                            </div>
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
                    var alternateBackground = "False";
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
                                                            src='{{ asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-grow-wealth.png') }}'
                                                            alt=''></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow">
                                                            <h3 class='deckspanNoCaret'>Grow Your Wealth</h3>
                                                        </div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>We offer concierge-style banking for higher net worth
                                                                    individuals, with managed investing and more.</p>
                                                                <ul>
                                                                    <li><a
                                                                            href="../../wealth-management/private-banking/index.html">Private
                                                                            Banking</a></li>
                                                                    <li><a
                                                                            href="../../wealth-management/managed-investing/index.html">Managed
                                                                            Investing</a></li>
                                                                    <li><a
                                                                            href="../../wealth-management/personal-trust-services/index.html">Personal
                                                                            Trust Services</a></li>
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
                                                            src='{{ asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-grow-wealth.png') }}'
                                                            alt=''></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow">
                                                            <h3 class='deckspanNoCaret'>Grow Your Wealth</h3>
                                                        </div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>We offer concierge-style banking for higher net worth
                                                                    individuals, with managed investing and more.</p>
                                                                <ul>
                                                                    <li><a
                                                                            href="../../wealth-management/private-banking/index.html">Private
                                                                            Banking</a></li>
                                                                    <li><a
                                                                            href="../../wealth-management/managed-investing/index.html">Managed
                                                                            Investing</a></li>
                                                                    <li><a
                                                                            href="../../wealth-management/personal-trust-services/index.html">Personal
                                                                            Trust Services</a></li>
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
                background: url('{{asset("assets/frontend/Static/img/EHLlogo%20white.png")}}') 230px 0px no-repeat;
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
