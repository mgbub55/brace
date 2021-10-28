@extends('frontend.layouts.app')

@section('content')

    <div class="container">

        <!--start responsive menu-->
        {{-- @include('frontend.layouts.components.header') --}}
        <!-- Main Header -->
        {{-- @include('frontend.layouts.components.navbar') --}}


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
                                            class="ceteralink" href="../brokerage-services/index.html"
                                            style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Brokerage</a><a
                                            class="ceteralink" href="../retirement-plans/index.html"
                                            style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Retirement</a><a
                                            class="ceteralink" href="../insurance/index.html"
                                            style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Insurance</a><a
                                            class="ceteralink" href="index.html"
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
                                            <li class="SubMenu"><a class="ceteralink" href="../index.html"
                                                    style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Investing</a>
                                            </li>
                                            <li class="SubMenu"><a class="ceteralink"
                                                    href="../brokerage-services/index.html"
                                                    style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Brokerage</a>
                                            </li>
                                            <li class="SubMenu"><a class="ceteralink"
                                                    href="../retirement-plans/index.html"
                                                    style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Retirement</a>
                                            </li>
                                            <li class="SubMenu"><a class="ceteralink"
                                                    href="../insurance/index.html"
                                                    style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Insurance</a>
                                            </li>
                                            <li class="SubMenu"><a class="ceteralink" href="index.html"
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
                        background: #fff url("{{ asset('assets/frontend/globalassets/images/backgrounds/grey-2.svg') }}") no-repeat;
                    }

                </style>
                <section class="row-full">
                    <div class="b46productpage">
                        <div class="container">
                            <h1>Financial &amp; Investing Resources</h1>
                            <img src="{{ asset('assets/frontend/contentassets/5c4cef031cc94b1f9bb8560fa11e2c3c/investing_resources.jpg') }}"
                                alt="First PREMIER Bank">
                            <p>&nbsp;</p>
                            <p style="text-align: center;">Financial articles and resources to help you manage your money
                                wisely. <br />For more information contact an investment advisor.</p>

                            <a href="../../../pages/about-us/teams/investing-services-team/index.html"
                                class="b46button">CONTACT US</a>


                        </div>
                    </div>
                </section>
            </div>
            <div class="block b48block  col-md-12">

                <section>
                    <div class="b48featured_job_main">
                        <div class="container">
                            <h1></h1>
                            <div class="col-lg-12 col-md-12 col-sm-12 no-padd">
                                <div class="b48featured_job col-lg-3 col-md-12 col-sm-12">
                                    <div style="text-align:center;"><img
                                            src="{{ asset('assets/frontend/globalassets/images/secondary-icons/bright/business-finance/bright-business-_-finance-secondary-icon-11.png') }}"
                                            alt="growth chart" /></div>
                                    <div class="b48h3">
                                        <h3>Investing</h3>
                                    </div>
                                    <p>Investing should be easy &ndash; just buy low and sell high &ndash; but most of us
                                        have trouble following that simple advice.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                                    </p>
                                    <div class="clearfix"></div><a
                                        href="http://investments.firstpremier.com/resource-center/investment">Learn More</a>
                                </div>
                                <div class="b48featured_job col-lg-3 col-md-12 col-sm-12">
                                    <div style="text-align:center;"><img
                                            src="{{ asset('assets/frontend/globalassets/images/secondary-icons/blue/places/blue-places-secondary-icon-5.png') }}"
                                            alt="beach umbrella" /></div>
                                    <div class="b48h3">
                                        <h3>Retirement</h3>
                                    </div>
                                    <p>Where will your retirement money come from? If you&rsquo;re like most people,
                                        qualified-retirement plans, Social Security, and personal savings and investments
                                        are expected to play a role.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp;</p>
                                    <div class="clearfix"></div><a
                                        href="http://investments.firstpremier.com/resource-center/retirement">Learn More</a>
                                </div>
                                <div class="b48featured_job col-lg-3 col-md-12 col-sm-12">
                                    <div style="text-align:center;"><img
                                            src="{{ asset('assets/frontend/globalassets/images/secondary-icons/gold/object/gold-object-secondary-icon-5.png') }}"
                                            alt="life preserver ring" /></div>
                                    <div class="b48h3">
                                        <h3>Insurance</h3>
                                    </div>
                                    <p>Insurance transfers the financial risk of life's events to an insurance company. A
                                        sound insurance strategy can help protect your family from the financial
                                        consequences of those events.</p>
                                    <div class="clearfix"></div><a
                                        href="http://investments.firstpremier.com/resource-center/insurance">Learn More</a>
                                </div>
                                <div class="b48featured_job col-lg-3 col-md-12 col-sm-12">
                                    <div style="text-align:center;"><img
                                            src="{{ asset('assets/frontend/globalassets/images/secondary-icons/green/business-finance/green-business-_-finance-secondary-icon-27.png') }}"
                                            alt="stack of coins" /></div>
                                    <div class="b48h3">
                                        <h3>Money</h3>
                                    </div>
                                    <p>One of the keys to a sound financial strategy is spending less than you take in, and
                                        then finding a way to put your excess to work.&nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp;&nbsp;<br /><br /><br /></p>
                                    <div class="clearfix"></div><a
                                        href="http://investments.firstpremier.com/resource-center/money">Learn More</a>
                                </div>
                                <div class="b48featured_job col-lg-3 col-md-12 col-sm-12">
                                    <div style="text-align:center;"><img
                                            src="{{ asset('assets/frontend/globalassets/images/secondary-icons/blue/edition/blue-edition-secondary-icon-16.png') }}"
                                            alt="binoculars " /></div>
                                    <div class="b48h3">
                                        <h3>Lifestyle</h3>
                                    </div>
                                    <p>Creating a life map involves a close review of personal finances and an assessment of
                                        other building blocks.<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp;&nbsp;</p>
                                    <div class="clearfix"></div><a
                                        href="http://investments.firstpremier.com/resource-center/lifestyle">Learn More</a>
                                </div>
                                <div class="b48featured_job col-lg-3 col-md-12 col-sm-12">
                                    <div style="text-align:center;"><img
                                            src="{{ asset('assets/frontend/globalassets/images/secondary-icons/bright/files/bright-files-secondary-icon-5.png') }}"
                                            alt="growth chart" /></div>
                                    <div class="b48h3">
                                        <h3>Tax Strategies</h3>
                                    </div>
                                    <p>Understanding tax strategies and managing your tax bill should be part of any sound
                                        financial approach.<br /><br /></p>
                                    <div class="clearfix"></div><a
                                        href="http://investments.firstpremier.com/resource-center/tax">Learn More</a>
                                </div>
                                <div class="b48featured_job col-lg-3 col-md-12 col-sm-12">
                                    <div style="text-align:center;"><img
                                            src="{{ asset('assets/frontend/globalassets/images/secondary-icons/gold/settings/gold-settings-secondary-icon-3.png') }}"
                                            alt="briefcase " /></div>
                                    <div class="b48h3">
                                        <h3>Tax Resources</h3>
                                    </div>
                                    <p>Click here for forms, explanations, and other tools to help you manage your
                                        taxes.<br /><br /></p>
                                    <div class="clearfix"></div><a
                                        href="http://investments.firstpremier.com/tools/tax-resources">Learn More</a>
                                </div>
                                <div class="b48featured_job col-lg-3 col-md-12 col-sm-12">
                                    <div style="text-align:center;"><img
                                            src="{{ asset('assets/frontend/globalassets/images/secondary-icons/green/business-finance/green-business-_-finance-secondary-icon-18.png') }}"
                                            alt="balanced scales" /></div>
                                    <div class="b48h3">
                                        <h3>Estate</h3>
                                    </div>
                                    <p>Effective estate management enables you to manage your affairs during your lifetime
                                        and control the distribution of your wealth after death.</p>
                                    <div class="clearfix"></div><a
                                        href="http://investments.firstpremier.com/resource-center/estate">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <style>
                    .b48featured_job_main .b48featured_job.col-three>p {
                        text-align: center;
                        width: 100%;
                    }

                    .page-about-us .b48featured_job_main .b48featured_job.col-three>p {
                        text-align: left;
                        width: 100%;
                    }

                    .b48featured_job_main .b48featured_job.col-three .b48h3>h3 {
                        text-align: center;
                        width: 100%;
                        font-size: 18px;
                        text-transform: uppercase;
                        background: none;
                    }

                    .b48featured_job_main .b48featured_job.col-three .b48h3>h3:hover {
                        color: #fff;
                    }

                    .b48featured_job_main .b48featured_job.col-three a {
                        background: transparent url("{{ asset('assets/frontend/Static/img/CustomBlocks/B3/arrow_yellow.png') }}") no-repeat right center;
                        color: #385061;
                        padding-right: 18px;
                        font-size: 14px;
                    }

                    @media screen and (max-width: 1000px) {

                        .page-about-us .b48featured_job_main .b48featured_job.col-three,
                        .b48featured_job_main .b48featured_job.col-three {
                            width: 100%;
                        }
                    }

                </style>
            </div>
            <div class="block b25block  col-md-12">
                <script>
                    $(document).ready(function() {

                        if ('{{ asset('assets/frontend/Static/img/CustomBlocks/B25/Background.png') }}' != 'null' &&
                            '{{ asset('assets/frontend/Static/img/CustomBlocks/B25/Background.png') }}' != '') {
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
                            <h2 class="White">Questions?</h2>
                            <div class="xhtml">
                                <p class="b54large" style="text-align: center;">Our investment advisors make investing
                                    easy, with helpful advice and turnkey online service.&nbsp;<br />Contact us for more
                                    information!</p>
                            </div>
                            <div class="b25bottom" style="">
                                <center>
                                    <a href="../../../pages/about-us/teams/investing-services-team/index.html"
                                        class="b25mainanchor">CONTACT US</a><br clear="all" />
                                </center>
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
                    $(".header-wrap img:first").attr('src', '{{asset("assets/frontend/static/img/fpb-investment-logo.png")}}');;
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
