@extends('frontend.layouts.app')

@section('content')

    <div class="container">

        <!--start responsive menu-->
        {{-- @include('frontend.layouts.components.header') --}}
        <!-- Main Header -->
        @include('frontend.layouts.components.navbar')

        <style>
            .b18block {
                max-height: 302px;
            }

        </style>
        <div class="row equal-height">
            <div class="block b60block  col-md-12">
                <!--start responsive menu-->
                <nav class="pushy pushy-right">
                    <div class="pushy-content">
                        <button class="pushy-link close-b">X</button>
                        <div id="accordion" class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading b60Menu">
                                    <br /><br />
                                    <div style="background-color:#fff;height:72px;border:#222 1px solid;"><a
                                            href="../../../../index.html"><img
                                                src="{{ asset('assets/frontend/Static/img/FPB-Investment-Logo.png') }}"
                                                class="img-responsive" border="0" /></a><br /></div>
                                    <br />
                                    <center>Need help? Call (605) 978-9725</center><br />
                                    <div class="ceteramenu" style="border-top:#c8c8c8 1px solid;">
                                        <a class="ceteralink" href="../index.html"
                                            style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Investing</a><a
                                            class="ceteralink"
                                            href="{{ route('frontend.en.personal.investing.brokerage-services') }}"
                                            style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Brokerage</a><a
                                            class="ceteralink"
                                            href="{{ route('frontend.en.personal.investing.retirement-planning') }}"
                                            style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Retirement</a><a
                                            class="ceteralink"
                                            href="{{ route('frontend.en.personal.investing.insurance') }}"
                                            style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Insurance</a><a
                                            class="ceteralink"
                                            href="{{ route('frontend.en.personal.investing.financial-and-investing-resources') }}"
                                            style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Resources</a><a
                                            class="ceteralink"
                                            href="../../../pages/about-us/teams/investing-services-team/index.html"
                                            style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Team</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <section class="header-wrap" style="padding-top: 0px; margin-top: 0px;">
                    <article class="row">
                        <article class="topHeader col-sm-12">
                            <!-- Collapse if empty -->
                            <button class="menu-btn">&#9776;</button>
                        </article>
                    </article>
                    <article class="container">
                        <div class="b60desktop" style="color:#25455a;height:75px;font-family: 'Prompt-Medium';">
                            <div style="float:right;color:#25455a;">Need help? Call (605) 978-9725</div>
                            <div style="padding-top:25px;"><a href="../../../../index.html"><img
                                        src="{{ asset('assets/frontend/Static/img/FPB-Investment-Logo.png') }}"
                                        class="img-responsive" border="0" style="padding-bottom:10px;" /></a></div>
                            <br /><br />
                        </div>
                        <div class="b60mobile"
                            style="display:none; position:relative;left:-20px;top:-50px;color:#25455a;visibility:hidden;font-family: 'Prompt-Medium';">
                            <a href="../../../../index.html"><img
                                    src="{{ asset('assets/frontend/Static/img/FPB-Investment-Logo.png') }}"
                                    class="img-responsive" border="0" style="padding-bottom:10px;" /></a>
                            <center>
                                <div style="color:#25455a;">Need help? Call (605) 978-9725</div>
                            </center>
                        </div>
                    </article>
                    <div class="row-full">
                        <div class="menu-wrap">
                            <article class="container">
                                <article>
                                    <div class="col-sm-12 SubMenuItems">
                                        <ul id="ulPremierMainMenu">
                                            <li class="SubMenu"><a class="ceteralink"
                                                    href="{{ route('frontend.en.personal.investing') }}"
                                                    style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Investing</a>
                                            </li>
                                            <li class="SubMenu"><a class="ceteralink"
                                                    href="{{ route('frontend.en.personal.investing.brokerage-services') }}"
                                                    style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Brokerage</a>
                                            </li>
                                            <li class="SubMenu"><a class="ceteralink"
                                                    href="{{ route('frontend.en.personal.investing.retirement-planning') }}"
                                                    style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Retirement</a>
                                            </li>
                                            <li class="SubMenu"><a class="ceteralink"
                                                    href="{{ route('frontend.en.personal.investing.insurance') }}"
                                                    style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Insurance</a>
                                            </li>
                                            <li class="SubMenu"><a class="ceteralink"
                                                    href="{{ route('frontend.en.personal.investing.financial-and-investing-resources') }}"
                                                    style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Resources</a>
                                            </li>
                                            <li class="SubMenu"><a class="ceteralink"
                                                    href="../../../pages/about-us/teams/investing-services-team/index.html"
                                                    style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Team</a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </article>
                        </div>
                    </div>
                </section>
                <script>
                    $(document).ready(function() {

                        $(window).resize(function() {
                            if ($(window).width() < 500) {
                                $('.b60mobile').attr('style', 'display:show');
                                $('.b60desktop').attr('style', 'display:none');
                            } else {
                                $('.b60mobile').attr('style', 'display:none');
                                $('.b60desktop').attr('style', 'display:show');
                            }
                        });
                        //$('#AccessAccountDropdown option[id!=selectaccount]').each(function (index, value) {
                        //    $('#signInHoverSection').append('<p>' + $(value).text() + '</p>');
                        //});

                        if ($(window).width() == 1024) {
                            $('#ulPremierMainMenu li').click(function(e) {
                                $(this).find('div[id*=subdiv]').hide();
                                $('#ulPremierMainMenu li').find('a').attr('href', 'javascript:void(0)');
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
                </script>
            </div>
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
                        background: #fff url("{{asset('assets/frontend/globalassets/images/backgrounds/grey-2.svg')}}") no-repeat;
                    }

                </style>
                <section class="row-full">
                    <div class="b46productpage">
                        <div class="container">
                            <h1>Insurance</h1>
                            <img src="{{ asset('assets/frontend/contentassets/855303c2093a4651a7e597feece8f584/1.6.3_b46-hero_dad-min.png') }}"
                                alt="First PREMIER Bank">
                            <h2>For Life, Living &amp; Loved Ones</h2>
                            <p style="text-align: center;">Proper insurance coverage can help ensure you and your loved ones
                                are covered in the<br />event of an unforeseen death, illness or accident.</p>



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
                                                src="{{ asset('assets/frontend/contentassets/1cc11c5b11ff4e5aafec25d4a2a81c59/1.6.3_b-16-list01_alternating-1_life-ins-min.png') }}"
                                                title="Life Insurance"
                                                alt="retired couple reviewing insurance policy with broker"></div>
                                    </div>
                                    <div class="b16basic_box_left">
                                        <h2>Life Insurance</h2>

                                        <div class="xhtml">
                                            <p>It's hard to measure the benefits of having a simple life insurance plan to
                                                ease the transition of your loved ones at a difficult time.</p>
                                            <p>&nbsp;</p>
                                            <ul>
                                                <li>Choose from a variety of insurance types</li>
                                                <li>Replace your income</li>
                                                <li>Cover funeral expenses</li>
                                                <li>Pay off mortgage, debts and taxes</li>
                                            </ul>
                                        </div>
                                        <!-- Button and Footer Links go here ... -->
                                        <a href="../../../pages/about-us/teams/investing-services-team/index.html"
                                            class="b16readmore">CONTACT US</a>
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
                                                    src="{{ asset('assets/frontend/contentassets/47e707de962945c79d90171d16a21ca4/quotes-garyharmelink.png') }}"
                                                    class="b6featured_img" alt="Gary Harmelink VP Investment Services">
                                            </div>
                                            <div class="b6featured_quote col-lg-7 col-md-7">
                                                <p>Life insurance can also be an effective financial planning tool. It can
                                                    provide family protection for the unexpected, or be used for tax free
                                                    growth to leave a legacy.</p>
                                                <div class="clearfix"></div><span> - Gary Harmelink, VP, Investment
                                                    Services</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </section>

            </div>
            <div class="block b18block  col-md-12">

                <style>
                    .pop_main_container_board .pop_main_container ol li ol li {}

                    .b18great_feature_main .b18detail {}

                    .b18great_feature_main .b18great_feature_left .b18detail h3 {}

                    .b18great_feature_main .b18great_feature_left span {}

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
                        <h2> Disability &amp; Long Term Care Insurance </h2>
                        <div class="b18great_feature_left">
                            <span>Disability Insurance</span>
                            <div class="b18detail xhtml">
                                <p>Chronic illness and disability leaves millions unable to work or care for themselves each
                                    year. If you become ill or injured during your working years, how will you pay for
                                    ongoing living expenses? Disability insurance can help cover expenses, and may also help
                                    protect your business if you are self-employed.</p>
                            </div>
                        </div>
                        <div class="b18great_feature_left b18great_feature_right payIcon-space">
                            <span>Long Term Care Insurance</span>
                            <div class="b18detail xhtml">
                                <p>In the state of South Dakota, the average cost of a single nursing home is nearly $8,000
                                    per month. Protect yourself and your family from the high cost of long-term care with
                                    insurance that helps protect your assets and provide coverage for nursing, assisted
                                    living, hospice and more.</p>
                            </div>
                        </div>
                        <div class="clearfix">
                            <center>
                                <a href="../../../pages/about-us/teams/investing-services-team/index.html"
                                    class="btnGreen">CONTACT US</a>
                            </center>
                        </div>

                    </div>
                    <div id="a27861156" class="modal fade" role="dialog">
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
                                            <h2>Disability Insurance</h2>
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
                    <div id="b27861156" class="modal fade" role="dialog">
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
                                            <h2>Long Term Care Insurance</h2>
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
                    <div id="c27861156" class="modal fade" role="dialog">
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
                                            <h2>Disability &amp; Long Term Care Insurance</h2>
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a
                                                                    href="../../../pages/about-us/teams/investing-services-team/index.html"
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
            <div class="block b04block  col-md-12">
                <style>
                    @media only screen and (max-width:470px) {
                        div.block.b18block.col-md-12 {
                            min-height: 400px !important;
                        }

                        .b26line_credit_main .b26line_credit_loans_right {
                            min-height: 55px !important;
                        }

                        .b26line_credit_main .b26line_credit_loans {
                            height: 55px;
                        }
                    }

                </style>
                <section class="row-full b4background">
                    <div class="container">
                        <div class="b4anywhere_banking" style="width:100%; ">
                            <div class="xhtml">
                                <div style="background-color: #fff;">
                                    <p style="text-align: center;">&nbsp;</p>
                                    <p style="text-align: center;"><a class="btnGreen"
                                            href="../../../pages/about-us/teams/investing-services-team/index.html">Contact
                                            Us</a></p>
                                    <p style="text-align: center;">&nbsp;</p>
                                    <p style="text-align: center;">&nbsp;</p>
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

                            <h2>Investment Resources</h2>


                            <div class="row">
                                <div class="col-md-12 hidden-xs hidden-sm">
                                    <div class="carousel" id="myCarousel-" data-interval="false">
                                        <div class="carousel-inner">
                                            <div class='item active'>
                                                <div
                                                    class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad'>
                                                    <div class='b26line_credit_loans_left'><img
                                                            src='{{ asset('assets/frontend/contentassets/cac888ce866a472688ec1ed844bd366a/b-26-promo-01-five-smart-investments.png') }}'
                                                            alt='man sitting beside window'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a
                                                                href='http://investments.firstpremier.com/resource-center/investment/5-smart-investing-principles'>
                                                                <h3 class='deckspan'>5 Smart Investing Principles</h3>
                                                            </a></div>
                                                    </div>
                                                </div>
                                                <div
                                                    class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans b26line_personal_loans no-pad'>
                                                    <div class='b26line_credit_loans_left'><img
                                                            src='{{ asset('assets/frontend/contentassets/ef7f0b17980e48f29d1b7fb7187c9f9e/b-26-promo-01-retirement.png') }}'
                                                            alt='retired couple'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a
                                                                href='http://investments.firstpremier.com/resource-center/retirement/rightsizing-for-retirement'>
                                                                <h3 class='deckspan'>Right Sizing for Retirement</h3>
                                                            </a></div>
                                                    </div>
                                                </div>
                                                <div
                                                    class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad last'>
                                                    <div class='b26line_credit_loans_left'><img
                                                            src='{{ asset('assets/frontend/contentassets/05ed981f3c8d47e4825ca2c2999cc72b/b-26-promo-01-protecting-those.png') }}'
                                                            alt='child looking up into sky'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a
                                                                href='http://investments.firstpremier.com/resource-center/insurance/protecting-those-who-matter-most'>
                                                                <h3 class='deckspan'>Protecting Those Who Matter Most</h3>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='item'>
                                                <div
                                                    class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad'>
                                                    <div class='b26line_credit_loans_left'><img
                                                            src='{{ asset('assets/frontend/contentassets/3dde75e10b7b43cfa07cddda4074999e/b-26-promo-01-latte-lie.png') }}'
                                                            alt='cup of coffee'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a
                                                                href='http://investments.firstpremier.com/resource-center/money/the-economic-journey-of-coffee'>
                                                                <h3 class='deckspan'>The Latte Lie and Other Myths</h3>
                                                            </a></div>
                                                    </div>
                                                </div>
                                                <div
                                                    class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans b26line_personal_loans no-pad'>
                                                    <div class='b26line_credit_loans_left'><img
                                                            src='{{ asset('assets/frontend/contentassets/2ca0c700e3254fb9b7766849eb8f8e14/b-26-promo-01-managing-lifestyle.png') }}'
                                                            alt='man looking at mobile phone smiling'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a
                                                                href='http://investments.firstpremier.com/resource-center/lifestyle/managing-your-lifestyle'>
                                                                <h3 class='deckspan'>Managing Your Lifestyle</h3>
                                                            </a></div>
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
                                                    class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '>
                                                    <div><img
                                                            src='{{ asset('assets/frontend/contentassets/cac888ce866a472688ec1ed844bd366a/b-26-promo-01-five-smart-investments.png') }}'
                                                            alt='man sitting beside window'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a
                                                                href='http://investments.firstpremier.com/resource-center/investment/5-smart-investing-principles'>
                                                                <h3 class='deckspan'>5 Smart Investing Principles</h3>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='item'>
                                                <div
                                                    class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '>
                                                    <div><img
                                                            src='{{ asset('assets/frontend/contentassets/ef7f0b17980e48f29d1b7fb7187c9f9e/b-26-promo-01-retirement.png') }}'
                                                            alt='retired couple'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a
                                                                href='http://investments.firstpremier.com/resource-center/retirement/rightsizing-for-retirement'>
                                                                <h3 class='deckspan'>Right Sizing for Retirement</h3>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='item'>
                                                <div
                                                    class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '>
                                                    <div><img
                                                            src='{{ asset('assets/frontend/contentassets/05ed981f3c8d47e4825ca2c2999cc72b/b-26-promo-01-protecting-those.png') }}'
                                                            alt='child looking up into sky'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a
                                                                href='http://investments.firstpremier.com/resource-center/insurance/protecting-those-who-matter-most'>
                                                                <h3 class='deckspan'>Protecting Those Who Matter Most</h3>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='item'>
                                                <div
                                                    class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '>
                                                    <div><img
                                                            src='{{ asset('assets/frontend/contentassets/3dde75e10b7b43cfa07cddda4074999e/b-26-promo-01-latte-lie.png') }}'
                                                            alt='cup of coffee'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a
                                                                href='http://investments.firstpremier.com/resource-center/money/the-economic-journey-of-coffee'>
                                                                <h3 class='deckspan'>The Latte Lie and Other Myths</h3>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='item'>
                                                <div
                                                    class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '>
                                                    <div><img
                                                            src='{{ asset('assets/frontend/contentassets/2ca0c700e3254fb9b7766849eb8f8e14/b-26-promo-01-managing-lifestyle.png') }}'
                                                            alt='man looking at mobile phone smiling'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a
                                                                href='http://investments.firstpremier.com/resource-center/lifestyle/managing-your-lifestyle'>
                                                                <h3 class='deckspan'>Managing Your Lifestyle</h3>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </center>
                                </div>

                                <a class="left carousel-control" href="#myCarousel-" data-slide="prev"><img
                                        src="{{ asset('assets/frontend/Static/img/CustomBlocks/B26/left_arrow.png') }}"
                                        alt="First PREMIER Bank"></a>
                                <a class="right carousel-control" href="#myCarousel-" data-slide="next"><img
                                        src="{{ asset('assets/frontend/Static/img/CustomBlocks/B26/right_arrow.png') }}"
                                        alt="First PREMIER Bank"></a>
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
                                <p>{1} Securities and insurance products are offered through Cetera Investment Services LLC
                                    (doing insurance business in CA as CFGIS Insurance Agency), member <a
                                        href="http://www.sipc.org/" target="_blank" rel="noopener">FINRA/SIPC</a>. Advisory
                                    services are offered through Cetera Investment Advisers LLC. Neither firm is affiliated
                                    with the financial institution where investment services are offered. Investments are:
                                </p>
                                <ul>
                                    <li>Not FDIC/NCUSIF insured</li>
                                    <li>May lose value</li>
                                    <li>Not financial institution guaranteed</li>
                                    <li>Not a deposit</li>
                                    <li>Not insured by any federal government agency.</li>
                                </ul>
                                <p><br />Check the background of our investment professionals on FINRA&rsquo;s <a
                                        href="http://brokercheck.finra.org/" target="_blank" rel="noopener">BrokerCheck</a>
                                </p>
                                <p>Click here to view Cetera Investment Services <a
                                        href="https://myceterasmartworks.com/Public/Portal/Content.aspx?ContentId=29714177"
                                        target="_blank" rel="noopener">Privacy Policy</a>, other <a
                                        href="https://www.ceterafinancialinstitutions.com/clients/Non-Deposit-Disclosure"
                                        target="_blank" rel="noopener">Important Information</a> and <a
                                        href="https://myceterasmartworks.com/Public/Portal/Content.aspx?ContentId=30050055"
                                        target="_blank" rel="noopener">Business Continuity Plan</a>.</p>
                                <p>This site is published for residents of the United States only. Registered
                                    Representatives of Cetera Investment Services LLC may only conduct business with
                                    residents of the states and/or jurisdictions in which they are properly registered. Not
                                    all of the products and services referenced on this site may be available in every state
                                    and through every advisor listed. For additional information please contact the
                                    advisor(s) listed on the site or visit the Cetera Investment Services LLC site at <a
                                        href="http://www.ceterainvestmentservices.com/" target="_blank"
                                        rel="noopener">www.ceterainvestmentservices.com</a>.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="block b04block  col-md-12">
                <style>
                    .header-wrap div:nth-child(1) {
                        color: #4a6375;
                        font-size: 14px;
                        line-height: 22px;
                        font-family: 'Prompt-Medium';
                        text-shadow: none;
                    }

                </style>
                <section class="row-full b4background">
                    <div class="container">
                        <div class="b4anywhere_banking" style="width:100%; ">
                            <div class="xhtml">
                                <div class="row-full footer" style="background-color: #17554a !important;">
                                    <div class="container">
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <h3 style="text-transform: uppercase; color: #fff; font-weight: bold;">
                                                    INFORMATION</h3>
                                                <p>&nbsp;</p>
                                                <p><u>First PREMIER Bank</u><br />Investment Services (605) 978-9725</p>
                                                <p>&nbsp;</p>
                                                <p>Cetera registered branch:<br />601 S. Minnesota Avenue<br />Sioux Falls,
                                                    SD 57104</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3 style="text-transform: uppercase; color: #fff; font-weight: bold;">LEGAL
                                                    NOTICES</h3>
                                                <p>&nbsp;</p>
                                                <p>Privacy Notice &amp; Statement<br />Legal Disclosures<br />Cookie Policy
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <script>
                    $(".header-wrap img:first").attr('src', '{{ asset('assets/frontend/static/img/fpb-investment-logo.png') }}');;
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
        <script>
            $('#b06Carousel').carousel({
                interval: 16000,
            })
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
