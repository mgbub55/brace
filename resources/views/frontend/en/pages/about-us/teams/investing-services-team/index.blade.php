
@extends('frontend.layouts.app')

@section('content')

    <div class="container">

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
                                            href="../../../../../index.html"><img
                                                src="{{asset('assets/frontend/Static/img/FPB-Investment-Logo.png')}}"
                                                class="img-responsive" border="0" /></a><br /></div>
                                    <br />
                                    <center>Need help? Call (605) 978-9725</center><br />
                                    <div class="ceteramenu" style="border-top:#c8c8c8 1px solid;">
                                        <a class="ceteralink" href="../../../../personal/investing/index.html"
                                            style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Investing</a><a
                                            class="ceteralink"
                                            href="../../../../personal/investing/brokerage-services/index.html"
                                            style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Brokerage</a><a
                                            class="ceteralink"
                                            href="../../../../personal/investing/retirement-plans/index.html"
                                            style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Retirement</a><a
                                            class="ceteralink"
                                            href="../../../../personal/investing/insurance/index.html"
                                            style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Insurance</a><a
                                            class="ceteralink"
                                            href="../../../../personal/investing/financial-and-investing-resources/index.html"
                                            style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Resources</a><a
                                            class="ceteralink" href="index.html"
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
                            <div style="padding-top:25px;"><a href="../../../../../index.html"><img
                                        src="{{asset('assets/frontend/Static/img/FPB-Investment-Logo.png')}}" class="img-responsive"
                                        border="0" style="padding-bottom:10px;" /></a></div>
                            <br /><br />
                        </div>
                        <div class="b60mobile"
                            style="display:none; position:relative;left:-20px;top:-50px;color:#25455a;visibility:hidden;font-family: 'Prompt-Medium';">
                            <a href="../../../../../index.html"><img
                                    src="{{asset('assets/frontend/Static/img/FPB-Investment-Logo.png')}}" class="img-responsive"
                                    border="0" style="padding-bottom:10px;" /></a>
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
                                                    href="../../../../personal/investing/index.html"
                                                    style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Investing</a>
                                            </li>
                                            <li class="SubMenu"><a class="ceteralink"
                                                    href="../../../../personal/investing/brokerage-services/index.html"
                                                    style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Brokerage</a>
                                            </li>
                                            <li class="SubMenu"><a class="ceteralink"
                                                    href="../../../../personal/investing/retirement-plans/index.html"
                                                    style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Retirement</a>
                                            </li>
                                            <li class="SubMenu"><a class="ceteralink"
                                                    href="../../../../personal/investing/insurance/index.html"
                                                    style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Insurance</a>
                                            </li>
                                            <li class="SubMenu"><a class="ceteralink"
                                                    href="../../../../personal/investing/financial-and-investing-resources/index.html"
                                                    style="color: #e4cb3f; border-bottom: 3px solid #e4cb3f; font-family: &#39;Prompt-Medium&#39;;">Resources</a>
                                            </li>
                                            <li class="SubMenu"><a class="ceteralink" href="index.html"
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
            <div class="block b44block  col-md-12">
                <style>
                    .b44header {
                        min-height: 245px;
                        width: 100%;
                        background: #fff url("{{asset('assets/frontend/Static/img/CustomBlocks/B44/leader_bg.jpg')}}") no-repeat;
                        float: left;
                        padding-top: 60px;
                    }

                </style>
                <section class="row-full">
                    <div class="b44header">
                        <div class="container">
                            <h1>Brokerage Services</h1>

                            <ul>

                                <li>
                                    <a href="../../../../index.html">First PREMIER Bank</a>
                                </li>

                                <li>
                                    <a href="../../../../personal/investing/index.html">Investing</a>
                                </li>

                                <li>
                                    <a href="index.html">Brokerage Services Team</a>
                                </li>

                            </ul>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p style="text-align: left;">&nbsp;&nbsp; Our investment advisors make investing easy, with
                                helpful advice and turnkey online service.&nbsp;Contact us for more information.</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="block b28block  col-md-12">

                <style>
                    .b28board_members_main {
                        float: left;
                        width: 100%;
                        padding-bottom: 60px;
                        text-align: left;
                        background-color: transparent !important;
                    }

                    .b28board_members_main h2 {
                        font-size: 40px;
                        font-family: 'Prompt-Medium';
                        text-align: center;
                        width: 100%;
                        color: #233c4c !important;
                        text-shadow: none;
                        padding-top: 20px;
                    }

                    .b28board_members_main .b28board_members_right:hover h3 {
                        color: #fff !important;
                    }

                    .b28board_members_main .b28board_members_right:hover h3.Gold {
                        color: #e4cb34 !important;
                    }

                </style>

                <style>
                    .b28board_members {
                        min-height: 580px;
                    }

                    .b28board_members_right {
                        height: 315px !important;
                        min-height: 315px !important;
                    }

                </style>
                <style>
                    .b28board_members_right h3 {
                        padding-top: 20px;
                    }

                    .b28board_members_right h4>p {
                        padding-top: 10px;
                        color: #60aadb;
                        font-weight: normal;
                        font-size: 14px;
                        margin-bottom: 10px;
                        font-family: 'Prompt-Light'
                    }

                    .b28board_members_main p {
                        color: #385061;
                        font-weight: 600;
                        font-size: 14px;
                        width: 100%;
                        font-family: 'Prompt-Medium';
                    }

                    .Center p {
                        margin-bottom: 0px !important;
                    }

                    .margin10 {
                        margin-top: 10px;
                    }

                    /* Bottom Links & Contact Me popup */
                    .b28board_members .b28board_members_right ul {
                        display: inline-block;
                        margin: 0;
                        padding-top: 15px;
                        /* For IE, the outcast */
                        zoom: 1;
                        *display: inline;
                    }

                    .b28board_members .b28board_members_right ul li {
                        display: inline-block !important;
                    }

                    .b28board_members .b28board_members_right ul li a.b28FooterLink {
                        color: #268d6e;
                        background: url("{{asset('assets/frontend/Static/img/CustomBlocks/B20/arrow_green.png')}}") no-repeat right 3px;
                        padding: 0px 15px 0px 0px;
                        margin-right: 20px;
                        margin-top: 0px;
                        letter-spacing: 0.5px;
                        padding-left: 20px;
                        font-size: 12px;
                        font-family: "Prompt-SemiBold";
                        text-shadow: none;
                        text-transform: uppercase;
                    }

                    .b28board_members .b28board_members_right ul li a.b28FooterLink:hover {
                        color: #1c7258;
                        background: url("{{asset('assets/frontend/Static/img/CustomBlocks/B20/arrow_green.png')}}") no-repeat right 3px;
                        padding: 0px 15px 0px 0px;
                        margin-right: 20px;
                        margin-top: 0px;
                        letter-spacing: 0.5px;
                        padding-left: 20px;
                        font-size: 12px;
                        font-family: "Prompt-SemiBold";
                        text-shadow: none;
                        text-transform: uppercase;
                    }

                    .loan_application_main {
                        float: left;
                        width: 100%;
                        padding: 10px 0px 25px 0px;
                        text-align: left;
                    }

                    .loan_application_main .loan_type_main {
                        float: left;
                        width: 100%;
                        margin: 30px 0px;
                    }

                    .loan_application_main .loan_type_main h3 {
                        color: #233c4c;
                        font-size: 45px;
                        font-family: "Prompt-Medium"float: left;
                        width: 100%;
                        margin-bottom: 10px;
                        text-shadow: 0px 0px 0 rgba(0, 0, 0, 0.3);
                    }

                    .loan_application_main .loan_type_main p.required {
                        color: #61acdc;
                        font-size: 16px;
                        font-family: 'Prompt-Bold';
                        float: left;
                        width: 72%;
                        margin-bottom: 8px;
                        text-transform: uppercase;
                    }

                    .loan_application_main .loan_information_main {
                        margin: 10px 0px 30px 0px;
                        float: left;
                        width: 70%;
                        padding: 50px 40px 0px 40px;
                        border-top-left-radius: 6px;
                        border-top-right-radius: 6px;
                        border-bottom-right-radius: 6px;
                        border-bottom-left-radius: 6px;
                        background: #fff;
                        box-shadow: 0px 5px 13px 0px rgba(67, 67, 67, 0.08);
                        border: solid 1px #dfdfdf;
                    }

                    .loan_application_main .loan_information_main p {
                        margin: 5px 0;
                        font-size: 16px;
                        color: #4a6375;
                        font-family: 'Prompt-Medium';
                    }

                    .loan_application_main .loan_information_main span {
                        letter-spacing: 1px;
                        font-size: 25px;
                        color: #385061;
                        font-family: 'Prompt-SemiBold';
                        margin-bottom: 5px;
                        float: left;
                        width: 100%;
                        border-bottom: solid 1px #ebedef;
                        padding-bottom: 10px;
                    }

                    .loan_application_main .loan_information_main .purpose-of-loan {
                        margin-top: 15px;
                        float: left;
                        width: 100%;
                    }

                    .loan_application_main .loan_information_main .purpose-of-loan span {
                        font-size: 16px;
                        text-transform: uppercase;
                        color: #385061;
                        font-family: 'Prompt-Bold';
                        margin-bottom: 10px;
                        float: left;
                        width: 100%;
                        border: 0;
                        padding: 0;
                        position: relative;
                        left: -20px;
                    }

                    .loan_application_main .loan_information_main .purpose-of-loan em {
                        color: #61acdc;
                        font-size: 16px;
                        font-family: 'Prompt-Bold';
                        float: left;
                        margin-right: 10px;
                    }

                    .loan_application_main .loan_information_main .req_loan_amount {
                        float: left;
                        width: 47%;
                        margin: 10px 25px 30px 0px;
                    }

                    .loan_application_main .loan_information_main .req_loan_amount input,
                    .loan_application_main .loan_information_main .req_loan_amount select,
                    .loan_application_main .loan_information_main .req_loan_amount textarea {
                        color: #4a6375;
                        font-size: 16px;
                        font-family: 'Prompt-Medium';
                    }

                    .loan_application_main .loan_information_main .req_loan_amount span {
                        letter-spacing: 1px;
                        color: #4a6375;
                        font-size: 16px;
                        font-family: 'Prompt-Bold';
                        float: left;
                        width: 100%;
                        text-transform: uppercase;
                        border: 0px;
                        padding: 0px;
                    }

                    .loan_application_main .loan_information_main .req_loan_amount input {
                        border: solid 2px #e9e9e9;
                        border-top-left-radius: 6px;
                        border-top-right-radius: 6px;
                        border-bottom-right-radius: 6px;
                        border-bottom-left-radius: 6px;
                        background: #fff;
                        padding: 10px;
                        height: 45px;
                        width: 100%;
                    }

                    .loan_application_main .loan_information_main .req_loan_amount select {
                        border: solid 2px #e9e9e9;
                        border-top-left-radius: 6px;
                        border-top-right-radius: 6px;
                        border-bottom-right-radius: 6px;
                        border-bottom-left-radius: 6px;
                        padding: 10px;
                        height: 45px;
                        width: 100%;
                    }

                    .loan_application_main .loan_information_main .req_loan_amount.select_custom {
                        margin-right: 10px;
                    }

                    .loan_application_main .loan_information_main .req_loan_amounttext {
                        width: 97%;
                    }

                    .loan_application_main .loan_information_main .checkbox-radio {
                        padding-left: 0px;
                    }

                    .loan_application_main .loan_information_main em {
                        color: #61acdc;
                        font-size: 16px;
                        font-family: 'Prompt-Bold';
                        float: left;
                        margin-right: 10px;
                    }

                    .pop_main_container {
                        padding: 0px 40px;
                    }

                    #submitButtonB28Block {
                        height: 42px;
                        width: 156.031px;
                        margin-left: 22px;
                        float: right;
                        display: inline-block;
                        letter-spacing: 1px;
                        background: #42967d;
                        font-size: 13px;
                        font-family: 'Prompt-Bold';
                        text-transform: uppercase;
                        padding: 12px 50px;
                        border-radius: 50px;
                        margin-top: 20px;
                        margin-bottom: 0px;
                        color: white;
                    }

                    #resetButton {
                        margin-left: 22px;
                        float: right;
                        display: inline-block;
                        letter-spacing: 1px;
                        background: #233c4c;
                        color: #fff;
                        font-size: 13px;
                        font-family: 'Prompt-Bold';
                        text-transform: uppercase;
                        padding: 12px 50px;
                        border-radius: 50px;
                        margin-top: 20px;
                        margin-bottom: 0px;
                        color: white;
                    }

                    .req_loan_amount select {
                        height: 42px;
                        border-radius: 0px;
                        font-family: 'Prompt-Medium';
                        font-size: 18px;
                        color: #6a91aa;
                        width: 100%;
                        -webkit-appearance: none;
                        -moz-appearance: none;
                        appearance: none;
                        border: solid 1px #e9e9e9;
                        background: url("{asset('assets/frontend/Static/img/select_arrow.html')}") no-repeat 96% center;
                    }

                    .loan_application_main .loan_information_main .req_loan_amount textarea {
                        border: solid 2px #e9e9e9;
                        border-top-left-radius: 6px;
                        border-top-right-radius: 6px;
                        border-bottom-right-radius: 6px;
                        border-bottom-left-radius: 6px;
                        background: #fff;
                        padding: 10px;
                        height: 45px;
                        width: 100%;
                        min-height: 120px;
                    }

                    .req_loan_amounttext button {
                        background: transparent;
                        border: #fff 1px solid;
                    }

                    @media only screen and (max-width:425px) and (orientation:portrait) {
                        .pop_main_container {
                            padding-left: 0px !important;
                            padding-right: 0px !important;
                        }

                        .pop_main_container .loan_application_main {
                            width: 100%;
                            padding-left: 0px;
                            padding-right: 0px;
                        }

                        .pop_main_container .loan_application_main .loan_information_main {
                            width: 100%;
                            padding-left: 0px;
                            padding-right: 0px;
                            border: none;
                        }

                        .pop_main_container .loan_application_main .loan_information_main .req_loan_amount {
                            width: 100%;
                        }

                        .pop_main_container .loan_application_main .loan_information_main .submitButton {
                            width: 100px;
                        }

                        .pop_main_container .loan_application_main .loan_information_main .resetButton {
                            width: 100px;
                        }

                        .pop_main_container .loan_application_main .loan_type_main h3 {
                            font-size: 18px;
                            font-weight: bold;
                        }

                        .pop_main_container .loan_application_main .loan_type_main .required {
                            font-size: 12px !important;
                        }

                        .pop_main_container .loan_application_main .loan_type_main p {
                            height: 75px !important;
                        }
                    }

                </style>
                <a></a>
                <section class="row-full">
                    <div class="b28board_members_main" style="padding-top:20px;">
                        <div class="container">
                            <p>&nbsp; &nbsp;</p>
                            <div class='b28block-profile-wrapper'>
                                <div id='boardsection_1' class="b28board_members col-md-4">
                                    <div class="b28board_members_left"> <img id='MainBoardPhoto'
                                            src="{{asset('assets/frontend/contentassets/aeffe7d4f3a24c9d873413ddd7ba4f17/gary_harmelink.png')}}"
                                            alt="Gary Harmelink" /></div>
                                    <div class="b28board_members_right">
                                        <h3>Gary Harmelink</h3>
                                        <h4 class="Blue Center">
                                            <p class="Center"><b></b><br />
                                            <p style="text-align: center;">Investment Services Manager<br />Wealth
                                                Manager<br />14th &amp; Minnesota<br />Sioux Falls</p>
                                            </p>
                                        </h4>
                                        <h3 class="Gold">605-978-9725</h3>
                                        <ul>
                                            <li><a href="#" data-toggle="modal" data-target="#myModal"
                                                    class="b28FooterLink" value="20449" name="Gary Harmelink"
                                                    onclick="contactPersonName(this)">Contact Me</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id='boardsection_2' class="b28board_members col-md-4">
                                    <div class="b28board_members_left"> <img id='MainBoardPhoto'
                                            src="{{asset('assets/frontend/contentassets/50871c41a6e34a0b9db6d6b813e06c1b/ricca_bent.png')}}"
                                            alt="Ricca Bent" /></div>
                                    <div class="b28board_members_right">
                                        <h3>Ricca Bent</h3>
                                        <h4 class="Blue Center">
                                            <p class="Center"><b></b><br />
                                            <p style="text-align: center;">Wealth Manager<br />14th &amp;
                                                Minnesota<br />Sioux Falls</p>
                                            </p>
                                        </h4>
                                        <h3 class="Gold">605-371-2809</h3>
                                        <ul>
                                            <li><a href="#" data-toggle="modal" data-target="#myModal"
                                                    class="b28FooterLink" value="20452" name="Ricca Bent"
                                                    onclick="contactPersonName(this)">Contact Me</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id='boardsection_3' class="b28board_members col-md-4 last">
                                    <div class="b28board_members_left"> <img id='MainBoardPhoto'
                                            src="{{asset('assets/frontend/contentassets/8e583c7425b54548b3dfc77dc7e06a17/lisa_castelluzzo.png')}}"
                                            alt="Lisa Castelluzzo" /></div>
                                    <div class="b28board_members_right">
                                        <h3>Lisa Castelluzzo</h3>
                                        <h4 class="Blue Center">
                                            <p class="Center"><b></b><br />
                                            <p style="text-align: center;">Wealth Manager<br />14th &amp;
                                                Minnesota<br />Sioux Falls</p>
                                            </p>
                                        </h4>
                                        <h3 class="Gold">605-357-3034</h3>
                                        <ul>
                                            <li><a href="#" data-toggle="modal" data-target="#myModal"
                                                    class="b28FooterLink" value="20455" name="Lisa Castelluzzo"
                                                    onclick="contactPersonName(this)">Contact Me</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id='boardsection_4' class="b28board_members col-md-4 m-l-2">
                                    <div class="b28board_members_left"> <img id='MainBoardPhoto'
                                            src="{{asset('assets/frontend/contentassets/28f4d20636b14b74b242ff52006b519e/randy_osterloo.png')}}"
                                            alt="Randy Osterloo" /></div>
                                    <div class="b28board_members_right">
                                        <h3>Randy Osterloo</h3>
                                        <h4 class="Blue Center">
                                            <p class="Center"><b></b><br />
                                            <p style="text-align: center;">Wealth Manager<br />14th &amp;
                                                Minnesota<br />Sioux Falls</p>
                                            </p>
                                        </h4>
                                        <h3 class="Gold">605-357-3012</h3>
                                        <ul>
                                            <li><a href="#" data-toggle="modal" data-target="#myModal"
                                                    class="b28FooterLink" value="26824" name="Randy Osterloo"
                                                    onclick="contactPersonName(this)">Contact Me</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id='boardsection_5' class="b28board_members col-md-4">
                                    <div class="b28board_members_left"> <img id='MainBoardPhoto'
                                            src="{{asset('assets/frontend/contentassets/4d68b94e8fd549b88b3960ef8a406b3e/jay_salonen.png')}}"
                                            alt="Jay Salonen" /></div>
                                    <div class="b28board_members_right">
                                        <h3>Jay Salonen</h3>
                                        <h4 class="Blue Center">
                                            <p class="Center"><b></b><br />
                                            <p>Wealth Manager<br />49th &amp; Southeastern<br />Sioux Falls</p>
                                            </p>
                                        </h4>
                                        <h3 class="Gold">605-978-9730</h3>
                                        <ul>
                                            <li><a href="#" data-toggle="modal" data-target="#myModal"
                                                    class="b28FooterLink" value="26827" name="Jay Salonen"
                                                    onclick="contactPersonName(this)">Contact Me</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Pop up content starts-->
                            <div id="b28BoardModal" class="modal fade" role="dialog">
                                <div class="vertical-alignment-helper">
                                    <div class="modal-dialog b28pop_board vertical-align-center">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="b28pop_main_container_board">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">
                                                            <img class="close_icon"
                                                                src="{{asset('assets/frontend/Static/img/CustomBlocks/B29/close.png')}}"
                                                                alt="First PREMIER Bank">
                                                            <img class="close_icon_m"
                                                                src="{{asset('assets/frontend/Static/img/CustomBlocks/B29/close_mobile.png')}}"
                                                                alt="First PREMIER Bank">
                                                        </span>
                                                    </button>
                                                    <div class="b28pop_main_container_board_left"><img id="boardImage"
                                                            src="#" alt="First PREMIER Bank"></div>
                                                    <div class="b28pop_main_container_board_right">
                                                        <h3 id="boardName"></h3>
                                                        <span id="boardBranchName"></span>
                                                        <p id="boardDescription" style="text-align: left;">
                                                        </p>

                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="b28conatact-name">Phone</div>
                                                            <div id="boardPhoneNumber" class="b28conatact-number"></div>

                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <a id="boardEmailId" class="b28conatact-name">Email</a>
                                                            <a id="boardEmailLink" class="b28conatact-email"
                                                                style="padding-right: 12px;background-size: 6px;"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Pop up content End-->
                        </div>
                    </div>
                </section>

                <!-- View Rate [3] (within container)-->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog pop_board">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="pop_main_container_board" style="width:93%;">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">
                                            <img class="close_icon" src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                                alt="First PREMIER Bank"
                                                style="height:17px !important;width:17px !important;">
                                        </span>
                                    </button>
                                    <div class="pop_main_container">
                                        <form>
                                            <div class="loan_application_main">
                                                <div class="container">
                                                    <div class="loan_type_main">
                                                        <h3 id="contactWithPersonName"></h3>
                                                        <p class="required">Note: Email is not secure. Please do
                                                            not send any sensitive personal information including but
                                                            not limited to your SSN, bank numbers, or other personally
                                                            identifiable information</p>
                                                    </div>
                                                    <!--Loan Information-->
                                                    <div class="loan_information_main">
                                                        <div class="req_loan_amount">
                                                            <span><em>*</em>Full name</span>
                                                            <input type="text" id="fullname" required />
                                                        </div>
                                                        <div class="req_loan_amount select_custom">
                                                            <span><em>*</em>Email</span>
                                                            <input type="email" id="email" required />
                                                        </div>
                                                        <div class="req_loan_amount req_loan_amounttext">
                                                            <span><em>*</em>Phone</span>
                                                            <input type="text" id="phone" />
                                                            <br /><br /><br />
                                                            <span><em>*</em>Message</span>
                                                            <textarea id="message" required></textarea>
                                                            <button type="submit"
                                                                id="submitButtonB28Block">Submit</button>
                                                            <button type="button" id="resetButton"
                                                                data-dismiss="modal">Close</button>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- View Rate [3] (within container)-->
                <!--- second Modal-->
                <div id="myModal2_GaryHarmelink" class="modal fade" role="dialog">
                    <div class="modal-dialog pop_board">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="pop_main_container_board">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">
                                            <img class="close_icon" src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                                alt="First PREMIER Bank"
                                                style="height:17px !important;width:17px !important;">
                                        </span>
                                    </button>
                                    <div class="pop_main_containerArea">
                                        <div class="new5Popup">

                                            <div class="new5Popup_leadership">
                                                <div class="new5Popup_leadership_left"><img
                                                        src="{{asset('assets/frontend/contentassets/aeffe7d4f3a24c9d873413ddd7ba4f17/gary_harmelink.png')}}"
                                                        title="Gary Harmelink" alt="Gary Harmelink"></div>
                                                <div class="new5Popup_leadership_right">
                                                    <h2>Gary Harmelink</h2>
                                                    <span class="upper"></span>
                                                    <h4>
                                                        <p style="text-align: center;">Investment Services
                                                            Manager<br />Wealth Manager<br />14th &amp;
                                                            Minnesota<br />Sioux Falls</p>
                                                    </h4>
                                                    <div class="xhtml">

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-5 col-sm-5 col-md-5">
                                                            <h5>Phone</h5>
                                                            <span>605-978-9725</span>
                                                        </div>
                                                        <div class="col-lg-1 col-sm-1 col-md-1"></div>
                                                        <div class="col-lg-5 col-sm-5 col-md-5">
                                                            <h5>Email</h5>
                                                            <span><a href="mailto:gary.harmelink@firstpremier.com">Contact
                                                                    Me</a></span>
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
                <div id="myModal2_RiccaBent" class="modal fade" role="dialog">
                    <div class="modal-dialog pop_board">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="pop_main_container_board">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">
                                            <img class="close_icon" src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                                alt="First PREMIER Bank"
                                                style="height:17px !important;width:17px !important;">
                                        </span>
                                    </button>
                                    <div class="pop_main_containerArea">
                                        <div class="new5Popup">

                                            <div class="new5Popup_leadership">
                                                <div class="new5Popup_leadership_left"><img
                                                        src="{{asset('assets/frontend/contentassets/50871c41a6e34a0b9db6d6b813e06c1b/ricca_bent.png')}}"
                                                        title="Ricca Bent" alt="Ricca Bent"></div>
                                                <div class="new5Popup_leadership_right">
                                                    <h2>Ricca Bent</h2>
                                                    <span class="upper"></span>
                                                    <h4>
                                                        <p style="text-align: center;">Wealth Manager<br />14th &amp;
                                                            Minnesota<br />Sioux Falls</p>
                                                    </h4>
                                                    <div class="xhtml">

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-5 col-sm-5 col-md-5">
                                                            <h5>Phone</h5>
                                                            <span>605-371-2809</span>
                                                        </div>
                                                        <div class="col-lg-1 col-sm-1 col-md-1"></div>
                                                        <div class="col-lg-5 col-sm-5 col-md-5">
                                                            <h5>Email</h5>
                                                            <span><a href="mailto:ricca.bent@firstpremier.com">Contact
                                                                    Me</a></span>
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
                <div id="myModal2_LisaCastelluzzo" class="modal fade" role="dialog">
                    <div class="modal-dialog pop_board">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="pop_main_container_board">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">
                                            <img class="close_icon" src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                                alt="First PREMIER Bank"
                                                style="height:17px !important;width:17px !important;">
                                        </span>
                                    </button>
                                    <div class="pop_main_containerArea">
                                        <div class="new5Popup">

                                            <div class="new5Popup_leadership">
                                                <div class="new5Popup_leadership_left"><img
                                                        src="{{asset('assets/frontend/contentassets/8e583c7425b54548b3dfc77dc7e06a17/lisa_castelluzzo.png')}}"
                                                        title="Lisa Castelluzzo" alt="Lisa Castelluzzo"></div>
                                                <div class="new5Popup_leadership_right">
                                                    <h2>Lisa Castelluzzo</h2>
                                                    <span class="upper"></span>
                                                    <h4>
                                                        <p style="text-align: center;">Wealth Manager<br />14th &amp;
                                                            Minnesota<br />Sioux Falls</p>
                                                    </h4>
                                                    <div class="xhtml">

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-5 col-sm-5 col-md-5">
                                                            <h5>Phone</h5>
                                                            <span>605-357-3034</span>
                                                        </div>
                                                        <div class="col-lg-1 col-sm-1 col-md-1"></div>
                                                        <div class="col-lg-5 col-sm-5 col-md-5">
                                                            <h5>Email</h5>
                                                            <span><a href="mailto:lisa.castelluzzo@firstpremier.com">Contact
                                                                    Me</a></span>
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
                <div id="myModal2_RandyOsterloo" class="modal fade" role="dialog">
                    <div class="modal-dialog pop_board">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="pop_main_container_board">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">
                                            <img class="close_icon" src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                                alt="First PREMIER Bank"
                                                style="height:17px !important;width:17px !important;">
                                        </span>
                                    </button>
                                    <div class="pop_main_containerArea">
                                        <div class="new5Popup">

                                            <div class="new5Popup_leadership">
                                                <div class="new5Popup_leadership_left"><img
                                                        src="{{asset('assets/frontend/contentassets/28f4d20636b14b74b242ff52006b519e/randy_osterloo.png')}}"
                                                        title="Randy Osterloo" alt="Randy Osterloo"></div>
                                                <div class="new5Popup_leadership_right">
                                                    <h2>Randy Osterloo</h2>
                                                    <span class="upper"></span>
                                                    <h4>
                                                        <p style="text-align: center;">Wealth Manager<br />14th &amp;
                                                            Minnesota<br />Sioux Falls</p>
                                                    </h4>
                                                    <div class="xhtml">

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-5 col-sm-5 col-md-5">
                                                            <h5>Phone</h5>
                                                            <span>605-357-3012</span>
                                                        </div>
                                                        <div class="col-lg-1 col-sm-1 col-md-1"></div>
                                                        <div class="col-lg-5 col-sm-5 col-md-5">
                                                            <h5>Email</h5>
                                                            <span><a href="mailto:randy.osterloo@firstpremier.com">Contact
                                                                    Me</a></span>
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
                <div id="myModal2_JaySalonen" class="modal fade" role="dialog">
                    <div class="modal-dialog pop_board">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="pop_main_container_board">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">
                                            <img class="close_icon" src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                                alt="First PREMIER Bank"
                                                style="height:17px !important;width:17px !important;">
                                        </span>
                                    </button>
                                    <div class="pop_main_containerArea">
                                        <div class="new5Popup">

                                            <div class="new5Popup_leadership">
                                                <div class="new5Popup_leadership_left"><img
                                                        src="{{asset('assets/frontend/contentassets/4d68b94e8fd549b88b3960ef8a406b3e/jay_salonen.png')}}"
                                                        title="Jay Salonen" alt="Jay Salonen"></div>
                                                <div class="new5Popup_leadership_right">
                                                    <h2>Jay Salonen</h2>
                                                    <span class="upper"></span>
                                                    <h4>
                                                        <p>Wealth Manager<br />49th &amp; Southeastern<br />Sioux Falls
                                                        </p>
                                                    </h4>
                                                    <div class="xhtml">

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-5 col-sm-5 col-md-5">
                                                            <h5>Phone</h5>
                                                            <span>605-978-9730</span>
                                                        </div>
                                                        <div class="col-lg-1 col-sm-1 col-md-1"></div>
                                                        <div class="col-lg-5 col-sm-5 col-md-5">
                                                            <h5>Email</h5>
                                                            <span><a href="mailto:jay.salonen@firstpremier.com">Contact
                                                                    Me</a></span>
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
                                <p>{1} Securities and insurance products are offered through Cetera Investment Services
                                    LLC (doing insurance business in CA as CFGIS Insurance Agency), member <a
                                        href="http://www.sipc.org/" target="_blank" rel="noopener">FINRA/SIPC</a>.
                                    Advisory services are offered through Cetera Investment Advisers LLC. Neither firm
                                    is affiliated with the financial institution where investment services are offered.
                                    Investments are:</p>
                                <ul>
                                    <li>Not FDIC/NCUSIF insured</li>
                                    <li>May lose value</li>
                                    <li>Not financial institution guaranteed</li>
                                    <li>Not a deposit</li>
                                    <li>Not insured by any federal government agency.</li>
                                </ul>
                                <p><br />Check the background of our investment professionals on FINRA&rsquo;s <a
                                        href="http://brokercheck.finra.org/" target="_blank"
                                        rel="noopener">BrokerCheck</a></p>
                                <p>Click here to view Cetera Investment Services <a
                                        href="https://myceterasmartworks.com/Public/Portal/Content.aspx?ContentId=29714177"
                                        target="_blank" rel="noopener">Privacy Policy</a>, other <a
                                        href="https://www.ceterafinancialinstitutions.com/clients/Non-Deposit-Disclosure"
                                        target="_blank" rel="noopener">Important Information</a> and <a
                                        href="https://myceterasmartworks.com/Public/Portal/Content.aspx?ContentId=30050055"
                                        target="_blank" rel="noopener">Business Continuity Plan</a>.</p>
                                <p>This site is published for residents of the United States only. Registered
                                    Representatives of Cetera Investment Services LLC may only conduct business with
                                    residents of the states and/or jurisdictions in which they are properly registered.
                                    Not all of the products and services referenced on this site may be available in
                                    every state and through every advisor listed. For additional information please
                                    contact the advisor(s) listed on the site or visit the Cetera Investment Services
                                    LLC site at <a href="http://www.ceterainvestmentservices.com/" target="_blank"
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
                                                <p>Cetera registered branch:<br />601 S. Minnesota Avenue<br />Sioux
                                                    Falls, SD 57104</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3 style="text-transform: uppercase; color: #fff; font-weight: bold;">
                                                    LEGAL NOTICES</h3>
                                                <p>&nbsp;</p>
                                                <p>Privacy Notice &amp; Statement<br />Legal Disclosures<br />Cookie
                                                    Policy</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <script>
                    $(".header-wrap img:first").attr('src',
                        '../../../../../../prod.firstpremier.com/static/img/fpb-investment-logo.png');;
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
    <div class="smallLogo"><a href="../../../../index.html" title="First PREMIER Bank - Home"><img
                src="{{asset('assets/frontend/Static/gfx/Logo.png')}}" style="max-width:100%;" /></a></div>
    <script type="text/javascript" src="../../../../../../dl.episerver.net/13.4.4.1/epi-util/find.js"></script>
    <script type="text/javascript">
        if (FindApi) {
            var api = new FindApi();
            api.setApplicationUrl('../../../../../index.html');
            api.setServiceApiBaseUrl('../../../../../find_v2/index.html');
            api.processEventFromCurrentUri();
            api.bindWindowEvents();
            api.bindAClickEvent();
            api.sendBufferedEvents();
        }
    </script>

    <script type="text/javascript" src="../../../../../Static/js/pushy.js"></script>
    <script type="text/javascript" src="../../../../../Static/js/Blocks_2019062002.js"></script>
@endsection
