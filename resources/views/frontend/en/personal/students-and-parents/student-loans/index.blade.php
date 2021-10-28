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
<style>
    .b17cards {
        top: -195px !important;
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
                background: url("{{asset('assets/frontend/Static/img/CustomBlocks/B20/arrow_green.png')}}") no-repeat right 3px;
                padding: 0px 15px 0px 25px;
                vertical-align: text-bottom;
                margin-right: 20px;
                letter-spacing: 1px;
            }

            .b46mainanchor {
                color: #268d6e;
                background: url("{{asset('assets/frontend/Static/img/CustomBlocks/B20/arrow_green.png')}}") no-repeat right 3px;
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
                background: #fff url("{{asset('assets/frontend/contentassets/2643e615a1d545c694850c21a780f287/grey-2.svg')}}") no-repeat;
            }
        </style>
        <section class="row-full">
            <div class="b46productpage">
                <div class="container">
                    <h1>Student Loans</h1>
                    <img src="{{asset('assets/frontend/contentassets/2643e615a1d545c694850c21a780f287/student-loan-header.jpg')}}"
                        alt="First PREMIER Bank">
                    <h2>College Education Funding</h2>
                    <div id="myModalEUl02" class="modal fade" style="display: none;" role="dialog">
                        <div class="modal-dialog speedpop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="speedpop_main_container_board"><button class="close" type="button"
                                            data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> <img
                                                    class="close_icon"
                                                    style="height: 17px !important; width: 17px !important;"
                                                    src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                                    alt="First PREMIER Bank" /></span></button>
                                        <div class="pop_main_container">
                                            <h4 class="popupheader">You will be leaving firstpremier.com</h4>
                                            <p>Please note, by clicking &ldquo;continue&rdquo; you will be redirected to
                                                a website that is not operated or controlled by PREMIER. PREMIER is not
                                                responsible for the content, links, privacy policy or security of that
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
                                    <div class="speedpop_main_container_board"><button class="close" type="button"
                                            data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> <img
                                                    class="close_icon"
                                                    style="height: 17px !important; width: 17px !important;"
                                                    src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                                    alt="First PREMIER Bank" /></span></button>
                                        <div class="pop_main_container">
                                            <h4 class="popupheader">You will be leaving firstpremier.com</h4>
                                            <p>Please note, by clicking &ldquo;continue&rdquo; you will be redirected to
                                                a website that is not operated or controlled by PREMIER. PREMIER is not
                                                responsible for the content, links, privacy policy or security of that
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
                    <p style="text-align: center;">Funding your college education is an important step toward a brighter
                        future. If you are interested in a cosigned or non-cosigned student loan, <a href="#"
                            data-toggle="modal" data-target="#myModalrG2VJ">Ascent can help</a> provide a solution that
                        is right for you &ndash; with NO application fees, no origination fees and no prepayment
                        fees!<br /><br /><a href="#" data-toggle="modal" data-target="#myModalEUl02">LEARN MORE</a></p>
                    <p style="text-align: center;">&nbsp;</p>



                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon" src="{{asset('assets/frontend/static/img/closebutton.png')}}"
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
                                            <p style="text-align: left;"><sup>2</sup>Daily balance. The amount of the
                                                principal in the account each day.</p>
                                            <p style="text-align: left;">&nbsp;</p>
                                            <p style="text-align: left;">Fees could reduce the earnings on the
                                                account<br />Interest Rates and Annual Percentage Yields are current as
                                                of June 1, 2021<br />For current rate information, call (605) 357-3000
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
                                        src="{{asset('assets/frontend/contentassets/430e1bd78da04cd8968289de5ee392f5/student-loan-circle-1.png')}}"
                                        title="Undergraduate Benefits with Ascent" alt="student on laptop"></div>
                            </div>
                            <div class="b16basic_box_left">
                                <h2>Undergraduate Benefits with Ascent</h2>

                                <div class="xhtml">
                                    <div id="myModalaa3Fs" class="modal fade" style="display: none;" role="dialog">
                                        <div class="modal-dialog speedpop_board">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="speedpop_main_container_board"><button class="close"
                                                            type="button" data-dismiss="modal" aria-label="Close"><span
                                                                aria-hidden="true"> <img class="close_icon"
                                                                    style="height: 17px !important; width: 17px !important;"
                                                                    src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                                                    alt="First PREMIER Bank" /></span></button>
                                                        <div class="pop_main_container">
                                                            <h4 class="popupheader">You will be leaving firstpremier.com
                                                            </h4>
                                                            <p>Please note, by clicking &ldquo;continue&rdquo; you will
                                                                be redirected to a website that is not operated or
                                                                controlled by PREMIER. PREMIER is not responsible for
                                                                the content, links, privacy policy or security of that
                                                                website. Your use of that website is subject to its
                                                                terms of use and privacy policy. Thank you for visiting
                                                                firstpremier.com. If you continue, we hope you find the
                                                                information presented educational and useful.</p>
                                                            <p>&nbsp;</p>
                                                            <a class="speedbumpgreenbutton"
                                                                href="https://ascentstudentloans.com/for-students/cashback/?utm_source=partner&amp;utm_campaign=FirstPremier_Rev_Cash_Back&amp;utm_medium=FirstPremier_Rev_Cash_Back_PartnerID_XXXXX&amp;utm_content=FirstPremier_Rev_Cash_Back"
                                                                target="_blank" rel="noopener">Continue</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="myModalJ1E7x" class="modal fade" style="display: none;" role="dialog">
                                        <div class="modal-dialog speedpop_board">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="speedpop_main_container_board"><button class="close"
                                                            type="button" data-dismiss="modal" aria-label="Close"><span
                                                                aria-hidden="true"> <img class="close_icon"
                                                                    style="height: 17px !important; width: 17px !important;"
                                                                    src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                                                    alt="First PREMIER Bank" /></span></button>
                                                        <div class="pop_main_container">
                                                            <h4 class="popupheader">You will be leaving firstpremier.com
                                                            </h4>
                                                            <p>Please note, by clicking &ldquo;continue&rdquo; you will
                                                                be redirected to a website that is not operated or
                                                                controlled by PREMIER. PREMIER is not responsible for
                                                                the content, links, privacy policy or security of that
                                                                website. Your use of that website is subject to its
                                                                terms of use and privacy policy. Thank you for visiting
                                                                firstpremier.com. If you continue, we hope you find the
                                                                information presented educational and useful.</p>
                                                            <p>&nbsp;</p>
                                                            <a class="speedbumpgreenbutton"
                                                                href="https://ascentstudentloans.com/for-students/cashback/?utm_source=partner&amp;utm_campaign=FirstPremier_Rev_Cash_Back&amp;utm_medium=FirstPremier_Rev_Cash_Back_PartnerID_XXXXX&amp;utm_content=FirstPremier_Rev_Cash_Back"
                                                                target="_blank" rel="noopener">Continue</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="myModalL7tVx" class="modal fade" style="display: none;" role="dialog">
                                        <div class="modal-dialog speedpop_board">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="speedpop_main_container_board"><button class="close"
                                                            type="button" data-dismiss="modal" aria-label="Close"><span
                                                                aria-hidden="true"> <img class="close_icon"
                                                                    style="height: 17px !important; width: 17px !important;"
                                                                    src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                                                    alt="First PREMIER Bank" /></span></button>
                                                        <div class="pop_main_container">
                                                            <h4 class="popupheader">You are leaving firstpremier.com
                                                            </h4>
                                                            <p>blah, blah, blah</p>
                                                            <p>&nbsp;</p>
                                                            <a class="speedbumpgreenbutton"
                                                                href="https://ascentstudentloans.com/for-students/cashback/?utm_source=partner&amp;utm_campaign=FirstPremier_Rev_Cash_Back&amp;utm_medium=FirstPremier_Rev_Cash_Back_PartnerID_XXXXX&amp;utm_content=FirstPremier_Rev_Cash_Back"
                                                                target="_blank" rel="noopener">Continue</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="myModalZwIeE" class="modal fade" style="display: none;" role="dialog">
                                        <div class="modal-dialog speedpop_board">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="speedpop_main_container_board"><button class="close"
                                                            type="button" data-dismiss="modal" aria-label="Close"><span
                                                                aria-hidden="true"> <img class="close_icon"
                                                                    style="height: 17px !important; width: 17px !important;"
                                                                    src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                                                    alt="First PREMIER Bank" /></span></button>
                                                        <div class="pop_main_container">
                                                            <h4 class="popupheader">You will be leaving firstpremier.com
                                                            </h4>
                                                            <p>Please note, by clicking &ldquo;continue&rdquo; you will
                                                                be redirected to a website that is not operated or
                                                                controlled by PREMIER. PREMIER is not responsible for
                                                                the content, links, privacy policy or security of that
                                                                website. Your use of that website is subject to its
                                                                terms of use and privacy policy. Thank you for visiting
                                                                firstpremier.com. If you continue, we hope you find the
                                                                information presented educational and useful.</p>
                                                            <p>&nbsp;</p>
                                                            <a class="speedbumpgreenbutton"
                                                                href="https://ascentstudentloans.com/annual-percentage-rate-apr-sample/?utm_source=partner&amp;utm_campaign=FirstPremier_Rev_Rates&amp;utm_medium=FirstPremier_Rev_Rates_PartnerID_XXXXX&amp;utm_content=FirstPremier_Rev_Rates"
                                                                target="_blank" rel="noopener">Continue</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="myModalivaD6" class="modal fade" style="display: none;" role="dialog">
                                        <div class="modal-dialog speedpop_board">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="speedpop_main_container_board"><button class="close"
                                                            type="button" data-dismiss="modal" aria-label="Close"><span
                                                                aria-hidden="true"> <img class="close_icon"
                                                                    style="height: 17px !important; width: 17px !important;"
                                                                    src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                                                    alt="First PREMIER Bank" /></span></button>
                                                        <div class="pop_main_container">
                                                            <h4 class="popupheader">You will be leaving firstpremier.com
                                                            </h4>
                                                            <p>Please note, by clicking &ldquo;continue&rdquo; you will
                                                                be redirected to a website that is not operated or
                                                                controlled by PREMIER. PREMIER is not responsible for
                                                                the content, links, privacy policy or security of that
                                                                website. Your use of that website is subject to its
                                                                terms of use and privacy policy. Thank you for visiting
                                                                firstpremier.com. If you continue, we hope you find the
                                                                information presented educational and useful.</p>
                                                            <p>&nbsp;</p>
                                                            <a class="speedbumpgreenbutton"
                                                                href="https://ascentstudentloans.com/terms-conditions/?utm_source=partner&amp;utm_campaign=FirstPremier_Rev_Terms&amp;utm_medium=FirstPremier_Rev_Terms_PartnerID_XXXXX&amp;utm_content=FirstPremier_Rev_Terms"
                                                                target="_blank" rel="noopener">Continue</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>Affordable rates starting at 2.13% APR*</li>
                                        <li>1% cash back, plus 0.25% - 2.00% discount for automatic debit payments<span
                                                style="font-size: 11.6667px;">**</span></li>
                                        <li>Non-cosigned option for based on future income for eligible juniors and
                                            seniors</li>
                                        <li>Flexible plans: Start paying up to nine months after leaving school</li>
                                        <li>Cover up to 100% of your tuition and eligible living expenses<br /><br />
                                        </li>
                                    </ul>
                                    <p><sup>*Ascent loans are funded by Bank of Lake Mills, Member FDIC. Loan products
                                            may not be available in certain jurisdictions. Certain restrictions,
                                            limitations; and terms and conditions may apply. For Ascent Terms and
                                            Conditions please visit: <a
                                                href="https://www.ascentfunding.com/terms-conditions/?utm_source=partner&amp;utm_campaign=FirstPremier_Rev_Terms&amp;utm_medium=FirstPremier_Rev_Terms_PartnerID_XXXXX&amp;utm_content=FirstPremier_Rev_Terms">AscentFunding.com/Ts&amp;Cs</a>.&nbsp;<br /><br /></sup><sup>Rates
                                            are effective as of 06/01/2021</sup><sup>&nbsp;and reflect an automatic
                                            payment discount of either 0.25% (for credit-based loans) OR 2.00% (for
                                            undergraduate future income-based loans). Automatic Payment Discount is
                                            available if the borrower is enrolled in automatic payments from their
                                            personal checking account and the amount is successfully withdrawn from the
                                            authorized bank account each month. For Ascent rates and repayment examples
                                            please visit: <a
                                                href="https://www.ascentfunding.com/annual-percentage-rate-apr-sample/?utm_source=partner&amp;utm_campaign=FirstPremier_Rev_Rates&amp;utm_medium=FirstPremier_Rev_Rates_PartnerID_XXXXX&amp;utm_content=FirstPremier_Rev_Rates"
                                                target="_blank" rel="noopener">www.AscentFunding.com/Rates</a></sup></p>
                                    <p><sup>**1% Cash Back Graduation Reward subject to terms and conditions.<a
                                                href="https://ascentstudentloans.com/cashback/?utm_source=partner&amp;utm_campaign=FirstPremier_Rev_Cash_Back&amp;utm_medium=FirstPremier_Rev_Cash_Back_PartnerID_XXXXX&amp;utm_content=FirstPremier_Rev_Cash_Back"
                                                target="_blank" rel="noopener"> Click here</a> for details. Cosigned
                                            Credit-Based Loan student borrowers must have a minimum credit score. The
                                            minimum score required is subject to change and may depend on the credit
                                            score of your cosigner.</sup></p>
                                    <p>&nbsp;</p>
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
                                        src="{{asset('assets/frontend/contentassets/c22b220418d5468d82e9d2b4be414b8e/student-loan-features.png')}}"
                                        title="Four Simple Steps" alt="student on mobile phone"></div>

                            </div>
                            <div class="b16basic_box_left payIcon-space">
                                <h2 style="padding-top:0px !important;">Four Simple Steps</h2>
                                <div class="xhtml">
                                    <div id="myModalhjL0t" class="modal fade" style="display: none;" role="dialog">
                                        <div class="modal-dialog speedpop_board">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="speedpop_main_container_board"><button class="close"
                                                            type="button" data-dismiss="modal" aria-label="Close"><span
                                                                aria-hidden="true"> <img class="close_icon"
                                                                    style="height: 17px !important; width: 17px !important;"
                                                                    src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                                                    alt="First PREMIER Bank" /></span></button>
                                                        <div class="pop_main_container">
                                                            <h4 class="popupheader">You will be leaving firstpremier.com
                                                            </h4>
                                                            <p>Please note, by clicking &ldquo;continue&rdquo; you will
                                                                be redirected to a website that is not operated or
                                                                controlled by PREMIER. PREMIER is not responsible for
                                                                the content, links, privacy policy or security of that
                                                                website. Your use of that website is subject to its
                                                                terms of use and privacy policy. Thank you for visiting
                                                                firstpremier.com. If you continue, we hope you find the
                                                                information presented educational and useful.</p>
                                                            <p>&nbsp;</p>
                                                            <a class="speedbumpgreenbutton"
                                                                href="https://my.ascentstudentloans.com/application?utm_source=partner&amp;utm_campaign=FirstPremier_Rev_Apply_Now&amp;utm_medium=FirstPremier_Rev_Website_PartnerID_XXXXX&amp;utm_content=FirstPremier_Rev_Apply_Now"
                                                                target="_blank" rel="noopener">Continue</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>Complete your application online</li>
                                        <li>Upload your documents</li>
                                        <li>Select your loan offer</li>
                                        <li>Receive your money (if approved and certified)<br /><br /><br /><a href="#"
                                                data-toggle="modal" data-target="#myModalhjL0t">APPLY NOW</a></li>
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
                                        src="{{asset('assets/frontend/contentassets/66c54e490d2b4674b756cdba02eb5c87/graduate-loans-image.jpg')}}"
                                        title="Graduate Loan Options with Ascent" alt=""></div>
                            </div>
                            <div class="b16basic_box_left">
                                <h2>Graduate Loan Options with Ascent</h2>

                                <div class="xhtml">
                                    <ul>
                                        <li>Variable or Fixed APR</li>
                                        <li>Maximum In-School period of 36 months; 48 months for Medical and Dental
                                            course options</li>
                                        <li>Available for Business (MBA); Medical (MD, DO, DVM, VMD, DPM); Dental (DMD,
                                            DDS); Law (JD, LLM); Graduate (MA, MS, PhD); Health Professionals (Allied
                                            Health, Nursing, Pharmacy)</li>
                                        <li>Flexible plans: Start paying up to nine months after leaving school, 12
                                            months for Dental students and 36 months for Medical students<br /><br />
                                        </li>
                                    </ul>
                                    <p>*Ascent loans are funded by Bank of Lake Mills, Member FDIC. Loan products may
                                        not be available in certain jurisdictions. Certain restrictions, limitations;
                                        and terms and conditions may apply. For Ascent Terms and Conditions please
                                        visit: <a
                                            href="https://ascentstudentloans.com/terms-conditions/?utm_source=partner&amp;utm_campaign=FirstPremier_Rev_Terms&amp;utm_medium=FirstPremier_Rev_Terms_PartnerID_XXXXX&amp;utm_content=FirstPremier_Rev_Terms"
                                            target="_blank" rel="noopener">AscentFunding.com/Ts&amp;Cs</a>.<br /><br />
                                    </p>
                                    <p>Rates are effective as of 06/01/2021 and reflect an Automatic Payment Discount of
                                        0.25%. Automatic Payment Discount is available if the borrower is enrolled in
                                        automatic payments from their personal checking account and the amount is
                                        successfully withdrawn from the authorized bank account each month. For Ascent
                                        rates and repayment examples please visit: <a
                                            href="https://ascentstudentloans.com/annual-percentage-rate-apr-sample/?utm_source=partner&amp;utm_campaign=FirstPremier_Rev_Rates&amp;utm_medium=FirstPremier_Rev_Rates_PartnerID_XXXXX&amp;utm_content=FirstPremier_Rev_Rates"
                                            target="_blank" rel="noopener">www.AscentFunding.com/Rates</a><br /><br />
                                    </p>
                                    <p>**1% Cash Back Graduation Reward subject to terms and conditions. <a
                                            href="https://ascentstudentloans.com/cashback/?utm_source=partner&amp;utm_campaign=FirstPremier_Rev_Cash_Back&amp;utm_medium=FirstPremier_Rev_Cash_Back_PartnerID_XXXXX&amp;utm_content=FirstPremier_Rev_Cash_Back"
                                            target="_blank" rel="noopener">Click here</a> for details. Cosigned
                                        Credit-Based Loan student borrowers must have a minimum credit score. The
                                        minimum score required is subject to change and may depend on the credit score
                                        of your cosigner.</p>
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
    <div class="block b25block  col-md-12">
        <script>
            $(document).ready(function () {

                if ('{{asset("assets/frontend//Static/img/CustomBlocks/B25/Background.png")}}' != 'null' && '{{asset("assets/frontend//Static/img/CustomBlocks/B25/Background.png")}}' != '') {
                    $(".b25disclosure").css("background", "#245251 url({{asset('assets/frontend/Static/img/CustomBlocks/B25/Background.png')}}) no-repeat");
                    if (screen.width > 1000) {
                        $(".b25need_help_main").css("background", "#245251 url({{asset('assets/frontend/Static/img/CustomBlocks/B25/Background.png')}}) no-repeat");
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
                    <h2 class="White">Contact a Lending Specialist</h2>
                    <div class="xhtml">
                        <div id="myModalmDYdw" class="modal fade" style="display: none;" role="dialog">
                            <div class="modal-dialog speedpop_board">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="speedpop_main_container_board"><button class="close" type="button"
                                                data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> <img
                                                        class="close_icon"
                                                        style="height: 17px !important; width: 17px !important;"
                                                        src="{{asset('assets/frontend/Static/img/closebutton.png')}}"
                                                        alt="First PREMIER Bank" /></span></button>
                                            <div class="pop_main_container">
                                                <h4 class="popupheader">You will be leaving firstpremier.com</h4>
                                                <p>Please note, by clicking &ldquo;continue&rdquo; you will be
                                                    redirected to a website that is not operated or controlled by
                                                    PREMIER. PREMIER is not responsible for the content, links, privacy
                                                    policy or security of that website. Your use of that website is
                                                    subject to its terms of use and privacy policy. Thank you for
                                                    visiting firstpremier.com. If you continue, we hope you find the
                                                    information presented educational and useful.</p>
                                                <p>&nbsp;</p>
                                                <a class="speedbumpgreenbutton"
                                                    href="https://ascentstudentloans.com/?utm_source=partner&amp;utm_campaign=FirstPremier_Rev_Redirect&amp;utm_medium=FirstPremier_Rev_Redirect&amp;utm_content=FirstPremier_Rev_Redirect"
                                                    target="_blank" rel="noopener">Continue</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="myModal5nKAU" class="modal fade" style="display: none;" role="dialog">
                            <div class="modal-dialog speedpop_board">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="speedpop_main_container_board"><button class="close" type="button"
                                                data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> <img
                                                        class="close_icon"
                                                        style="height: 17px !important; width: 17px !important;"
                                                        src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                                        alt="First PREMIER Bank" /></span></button>
                                            <div class="pop_main_container">
                                                <h4 class="popupheader">You will be leaving firstpremier.com</h4>
                                                <p>Please note, by clicking &ldquo;continue&rdquo; you will be
                                                    redirected to a website that is not operated or controlled by
                                                    PREMIER. PREMIER is not responsible for the content, links, privacy
                                                    policy or security of that website. Your use of that website is
                                                    subject to its terms of use and privacy policy. Thank you for
                                                    visiting firstpremier.com. If you continue, we hope you find the
                                                    information presented educational and useful.</p>
                                                <p>&nbsp;</p>
                                                <a class="speedbumpgreenbutton"
                                                    href="https://ascentstudentloans.com/?utm_source=partner&amp;utm_campaign=FirstPremier_Rev_Redirect&amp;utm_medium=FirstPremier_Rev_Redirect&amp;utm_content=FirstPremier_Rev_Redirect"
                                                    target="_blank" rel="noopener">Continue</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="myModalJuLm4" class="modal fade" style="display: none;" role="dialog">
                            <div class="modal-dialog speedpop_board">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="speedpop_main_container_board"><button class="close" type="button"
                                                data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> <img
                                                        class="close_icon"
                                                        style="height: 17px !important; width: 17px !important;"
                                                        src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                                        alt="First PREMIER Bank" /></span></button>
                                            <div class="pop_main_container">
                                                <h4 class="popupheader">You will be leaving firstpremier.com</h4>
                                                <p>Please note, by clicking &ldquo;continue&rdquo; you will be
                                                    redirected to a website that is not operated or controlled by
                                                    PREMIER. PREMIER is not responsible for the content, links, privacy
                                                    policy or security of that website. Your use of that website is
                                                    subject to its terms of use and privacy policy. Thank you for
                                                    visiting firstpremier.com. If you continue, we hope you find the
                                                    information presented educational and useful.</p>
                                                <p>&nbsp;</p>
                                                <a class="speedbumpgreenbutton"
                                                    href="https://ascentstudentloans.com/?utm_source=partner&amp;utm_campaign=FirstPremier_Rev_Redirect&amp;utm_medium=FirstPremier_Rev_Redirect&amp;utm_content=FirstPremier_Rev_Redirect"
                                                    target="_blank" rel="noopener">Continue</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>To visit with an Ascent lending specialist, simply call 877-216-0876 or visit their website
                            at the link below.</p>
                        <p><a href="#" data-toggle="modal" data-target="#myModalmDYdw">ASCENT</a></p>
                    </div>
                    <div class="b25bottom" style="display:none;">
                        <center>
                            <a href="#" class="b25mainanchor"></a><br clear="all" />
                        </center>
                    </div>
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
                    <h2>About Ascent</h2>

                    <div class="b17free_mobile_banking_right">
                        <h3>
                            <p><strong>Ascent &ndash; Loans that power bright futures</strong></p>
                        </h3>
                        <div class="xhtml">
                            <div id="myModal36Uqa" class="modal fade" style="display: none;" role="dialog">
                                <div class="modal-dialog speedpop_board">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="speedpop_main_container_board"><button class="close"
                                                    type="button" data-dismiss="modal" aria-label="Close"><span
                                                        aria-hidden="true"> <img class="close_icon"
                                                            style="height: 17px !important; width: 17px !important;"
                                                            src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                                            alt="First PREMIER Bank" /></span></button>
                                                <div class="pop_main_container">
                                                    <h4 class="popupheader">You will be leaving firstpremier.com</h4>
                                                    <p>Please note, by clicking &ldquo;continue&rdquo; you will be
                                                        redirected to a website that is not operated or controlled by
                                                        PREMIER. PREMIER is not responsible for the content, links,
                                                        privacy policy or security of that website. Your use of that
                                                        website is subject to its terms of use and privacy policy. Thank
                                                        you for visiting firstpremier.com. If you continue, we hope you
                                                        find the information presented educational and useful.</p>
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
                            <p>Ascent is recognized as one of the nation&rsquo;s leading private student loan providers
                                for cosigned and non-cosigned loans. Ascent is not owned or operated by First PREMIER
                                Bank, an FDIC-insured institution.</p>
                            <p>Ascent program loans are originated by Bank of Lake Mills, Member FDIC. For eligible
                                juniors, seniors and graduate students without a cosigner, Ascent utilizes broad credit
                                tiers and may consider creditworthiness, school, graduation date, major, cost of
                                attendance and other factors. Ascent encourages transparency and financial wellness by
                                incorporating financial literacy into the application process, preserving the notion
                                that an education is an investment where students and families should understand the
                                return on their investment relative to the cost. Ascent also offers benefits and
                                resources that set students and families up for financial success.<br /><br /><strong><a
                                        href="#" data-toggle="modal" data-target="#myModal36Uqa">LEARN MORE</a></strong>
                            </p>
                        </div>
                        <div class="b17PayLinks payIcon-space">
                        </div>

                        <!-- Button and Footer Links go here ... -->
                    </div>

                    <div class="b17free_mobile_banking_left right">
                        <img class="img-responsive" id="imgMainImage" style="border-radius:50%"
                            src="{{asset('assets/frontend/contentassets/085b791231b7470c9c0a69046c647c78/student-loans-trusted-partner.png')}}"
                            alt="First PREMIER Bank">
                    </div>
                </div>
            </div>

            <div class="b15benfits_main_box b17cards">
                <div class="container">
                    <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                        <div class="b15avtar">
                            <img src="{{asset('assets/frontend/contentassets/d66dfb3db2c34c76a0ac6ca4b441868e/everfi-money-basics.png')}}"
                                title="Financial Foundations" alt="male shaking hands with loan officer" width="116px"
                                height="116px">
                        </div>
                        <div class="b15avtar_content">
                            <h3>Financial Foundations</h3>
                            <p>Our interactive module will help you understand key financial concepts and make better
                                money management decisions.</p>
                            <div class="clearfix"></div><br />
                            <a href="#" data-toggle="modal" data-target="#a8852168QU" data-backdrop="false"
                                class="b15learnmore">Learn More</a>
                            <div id="a8852168QU" class="modal fade" role="dialog">
                                <div class="modal-dialog pop_board">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="pop_main_container_board">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    area-label="Close">
                                                    <span aria-hidden="true">
                                                        <img class="close_icon"
                                                            src="{{asset('assets/frontend/Static/img/closebutton-2.png')}}"
                                                            alt="First PREMIER Bank"
                                                            style="height:17px !important; width:17px !important;" />
                                                    </span>
                                                </button>
                                                <div class="pop_main_container">
                                                    <h2>Financial Foundations</h2>
                                                    <div class="pop_board_white">
                                                        <div class="row">
                                                            <div class="col-md-12" style="padding-left:40px;">
                                                                <h4 class="Blue">You will be leaving firstpremier.com
                                                                </h4>
                                                                <div class="b46Blue" style="text-align:left;">
                                                                    <p style="text-align: left;">Please note, by
                                                                        clicking &ldquo;continue&rdquo; you will be
                                                                        redirected to a website that is not operated or
                                                                        controlled by PREMIER. PREMIER is not
                                                                        responsible for the content, links, privacy
                                                                        policy or security of that website. Your use of
                                                                        that website is subject to its terms of use and
                                                                        privacy policy. Thank you for visiting
                                                                        firstpremier.com. If you continue, we hope you
                                                                        find the information presented educational and
                                                                        useful.</p>
                                                                    <p><br /><a
                                                                            href="https://firstpremier.everfi-next.net/student/dashboard/financialeducation-achieve/financial-foundations"
                                                                            target="_blank">Continue</a></p>
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
                            <img src="{{asset('assets/frontend/globalassets/images/secondary-icons/bright/user/bright-user-secondary-icon-17.png')}}"
                                title="For Students &amp; Parents" alt="male shaking hands with loan officer"
                                width="116px" height="116px">
                        </div>
                        <div class="b15avtar_content">
                            <h3>For Students &amp; Parents</h3>
                            <p>Stay connected, monitor spending and easily transfer money between linked accounts.</p>
                            <div class="clearfix"></div><br />
                            <a href="../index.html">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="a8852168" class="modal fade" role="dialog">
                <div class="modal-dialog pop_board">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="pop_main_container_board">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">
                                        <img class="close_icon" src="{{asset('assets/frontend/static/img/closebutton.png')}}"
                                            alt="First PREMIER Bank"
                                            style="height:17px !important;width:17px !important;">
                                    </span>
                                </button>
                                <div class="pop_main_container">
                                    <h2>About Ascent</h2>
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
        <script>
            $('.modal-backdrop').remove();
        </script>
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
            $(document).ready(function () {
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
                                        <div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad'>
                                            <div class='b26line_credit_loans_left'><img
                                                    src='{{asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-loans-credit.png')}}'
                                                    alt='couple shaking hands with banker'></div>
                                            <div class='b26line_credit_loans_right'>
                                                <div class="b26titlerow">
                                                    <h3 class='deckspanNoCaret'>Loans & Credit Lines</h3>
                                                </div>
                                                <h3><br clear='all' />
                                                    <div class="xhtml">
                                                        <p>Competitive rates on loans of all sizes, lines of credit and
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
                                                    src='{{asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-save-future.png')}}'
                                                    alt='couple looking over document'></div>
                                            <div class='b26line_credit_loans_right'>
                                                <div class="b26titlerow">
                                                    <h3 class='deckspanNoCaret'>Save for the Future</h3>
                                                </div>
                                                <h3><br clear='all' />
                                                    <div class="xhtml">
                                                        <p>We can help you invest wisely with solid investment advice
                                                            and access to an array of funds.</p>
                                                        <ul>
                                                            <li><a href="../../savings-and-cds/index.html">Savings &amp;
                                                                    CDs</a></li>
                                                            <li><a href="../../investing/index.html">Investing</a></li>
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
                                                    src='{{asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-personal-checking.png')}}'
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
                                                    src='{{asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-loans-credit.png')}}'
                                                    alt='couple shaking hands with banker'></div>
                                            <div class='b26line_credit_loans_right'>
                                                <div class="b26titlerow">
                                                    <h3 class='deckspanNoCaret'>Loans & Credit Lines</h3>
                                                </div>
                                                <h3><br clear='all' />
                                                    <div class="xhtml">
                                                        <p>Competitive rates on loans of all sizes, lines of credit and
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
                                                    src='{{asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-save-future.png')}}'
                                                    alt='couple looking over document'></div>
                                            <div class='b26line_credit_loans_right'>
                                                <div class="b26titlerow">
                                                    <h3 class='deckspanNoCaret'>Save for the Future</h3>
                                                </div>
                                                <h3><br clear='all' />
                                                    <div class="xhtml">
                                                        <p>We can help you invest wisely with solid investment advice
                                                            and access to an array of funds.</p>
                                                        <ul>
                                                            <li><a href="../../savings-and-cds/index.html">Savings &amp;
                                                                    CDs</a></li>
                                                            <li><a href="../../investing/index.html">Investing</a></li>
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
                                                    src='{{asset('assets/frontend/globalassets/ymabii/personal/b-17-promo-01-personal-checking.png')}}'
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
</script>
</div>
<div class="smallLogo"><a href="../../../index.html" title="First PREMIER Bank - Home"><img
            src="{{asset('assets/frontend/Static/gfx/Logo.png')}}" style="max-width:100%;" /></a></div>
<script type="text/javascript" src="../../../../../dl.episerver.net/13.4.4.1/epi-util/find.js"></script>
<script type="text/javascript">
    if (FindApi) { var api = new FindApi(); api.setApplicationUrl('../../../../index.html'); api.setServiceApiBaseUrl('../../../../find_v2/index.html'); api.processEventFromCurrentUri(); api.bindWindowEvents(); api.bindAClickEvent(); api.sendBufferedEvents(); }
</script>

<script type="text/javascript" src="../../../../Static/js/pushy.js"></script>
<script type="text/javascript" src="../../../../Static/js/Blocks_2019062002.js"></script>
@endsection