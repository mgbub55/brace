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
                            <h1>Certificates of Deposit</h1>
                            <img src="{{ asset('assets/frontend/contentassets/4bdcdf8ad9264339a7a0449441906b74/1.3.4_b-46-hero_couplemature-min.png') }}"
                                alt="First PREMIER Bank">
                            <h2>Lock in a Great Rate Today</h2>
                            <p>Saving for something specific or just looking to maximize your rate of return? First PREMIER
                                Bank has an array of term options and can help you lock in a great rate on a CD today.</p>

                            <a href="../../../pages/resources/forms/apply-now/index.html" class="b46button">APPLY
                                NOW</a>


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
                                                    <h2>Certificate of Deposit Terms &amp; Rates</h2>
                                                    <p style="text-align: center;">&nbsp;June 1, 2021<br /><br /></p>
                                                    <p style="text-align: center;">&nbsp;</p>
                                                    <div class="table_rate_modal">
                                                        <table
                                                            style="width: 100%; height: 328px; border-collapse: collapse;"
                                                            border="1">
                                                            <tbody>
                                                                <tr style="height: 54px;">
                                                                    <td
                                                                        style="height: 54px; font-size: 14px; text-align: left; width: 40%;">
                                                                        Account<br />Product <br />Name</td>
                                                                    <td
                                                                        style="text-align: center; height: 54px; font-size: 14px; width: 12%;">
                                                                        Minimum <br />Opening <br />Deposit</td>
                                                                    <td
                                                                        style="text-align: center; font-size: 14px; height: 54px; width: 12%;">
                                                                        Interest Rate<br /><br /></td>
                                                                    <td
                                                                        style="text-align: center; height: 54px; font-size: 14px; width: 12%;">
                                                                        Annual Percentage Yield<br /><br /></td>
                                                                    <td
                                                                        style="text-align: center; height: 54px; font-size: 14px; width: 12%;">
                                                                        Reward Interest Rate<sup>3</sup></td>
                                                                    <td
                                                                        style="width: 12%; height: 54px; text-align: center; font-size: 14px;">
                                                                        Reward <br />APY</td>
                                                                </tr>
                                                                <tr style="height: 19px;">
                                                                    <td
                                                                        style="height: 19px; text-align: left; width: 40%; background-color: #ecf5fb;">
                                                                        CD Special - 10 Months<sup>1,2</sup></td>
                                                                    <td
                                                                        style="text-align: center; height: 19px; width: 12%; background-color: #ecf5fb;">
                                                                        $5,000.00</td>
                                                                    <td
                                                                        style="text-align: center; height: 19px; width: 12%; background-color: #ecf5fb;">
                                                                        N/A</td>
                                                                    <td
                                                                        style="text-align: center; height: 19px; width: 12%; background-color: #ecf5fb;">
                                                                        N/A</td>
                                                                    <td
                                                                        style="text-align: center; height: 19px; width: 12%; background-color: #ecf5fb;">
                                                                        &nbsp;</td>
                                                                    <td
                                                                        style="text-align: center; height: 19px; width: 12%; background-color: #ecf5fb;">
                                                                        &nbsp;</td>
                                                                </tr>
                                                                <tr style="height: 19px;">
                                                                    <td
                                                                        style="height: 19px; text-align: left; width: 40%; background-color: #e7f0f6;">
                                                                        CD Special - 28 Months<sup>1,2</sup></td>
                                                                    <td
                                                                        style="text-align: center; height: 19px; width: 12%; background-color: #e7f0f6;">
                                                                        $5,000.00</td>
                                                                    <td
                                                                        style="text-align: center; height: 19px; width: 12%; background-color: #e7f0f6;">
                                                                        N/A</td>
                                                                    <td
                                                                        style="text-align: center; height: 19px; width: 12%; background-color: #e7f0f6;">
                                                                        N/A</td>
                                                                    <td
                                                                        style="text-align: center; height: 19px; width: 12%; background-color: #e7f0f6;">
                                                                        &nbsp;</td>
                                                                    <td
                                                                        style="text-align: center; height: 19px; width: 12%; background-color: #e7f0f6;">
                                                                        &nbsp;</td>
                                                                </tr>
                                                                <tr style="height: 19px;">
                                                                    <td
                                                                        style="width: 40%; height: 10px; text-align: left; background-color: #ecf5fb;">
                                                                        CD Special - 56 Months<sup>1,2</sup></td>
                                                                    <td
                                                                        style="width: 12%; height: 10px; text-align: center; background-color: #ecf5fb;">
                                                                        $10,000.00</td>
                                                                    <td
                                                                        style="width: 12%; height: 10px; text-align: center; background-color: #ecf5fb;">
                                                                        N/A</td>
                                                                    <td
                                                                        style="width: 12%; height: 10px; text-align: center; background-color: #ecf5fb;">
                                                                        N/A</td>
                                                                    <td
                                                                        style="width: 12%; height: 10px; text-align: center; background-color: #ecf5fb;">
                                                                        &nbsp;</td>
                                                                    <td
                                                                        style="width: 12%; height: 10px; text-align: center; background-color: #ecf5fb;">
                                                                        &nbsp;</td>
                                                                </tr>
                                                                <tr style="height: 36px;">
                                                                    <td style="height: 36px; text-align: left; width: 40%;">
                                                                        Certificate of Deposit<br />30 Days to &lt; 6
                                                                        months<sup>2</sup></td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%;">
                                                                        $500.00</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%;">
                                                                        0.01%</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%;">
                                                                        0.01%</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                                        0.18%</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                                        0.18%</td>
                                                                </tr>
                                                                <tr style="height: 36px;">
                                                                    <td style="height: 36px; text-align: left; width: 40%;">
                                                                        Certificate of Deposit<br />6 months to &lt; 12
                                                                        months<sup>2</sup></td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%;">
                                                                        $500.00</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%;">
                                                                        0.10%</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%;">
                                                                        0.10%</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                                        0.24%</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                                        0.24%</td>
                                                                </tr>
                                                                <tr style="height: 36px;">
                                                                    <td style="width: 40%; height: 10px; text-align: left;">
                                                                        Certificate of Deposit<br />12 months to &lt; 24
                                                                        months<sup>2</sup></td>
                                                                    <td
                                                                        style="width: 12%; height: 10px; text-align: center;">
                                                                        $500.00</td>
                                                                    <td
                                                                        style="width: 12%; height: 10px; text-align: center;">
                                                                        0.21%</td>
                                                                    <td
                                                                        style="width: 12%; height: 10px; text-align: center;">
                                                                        0.21%</td>
                                                                    <td
                                                                        style="width: 12%; height: 10px; text-align: center; color: #60aadb;">
                                                                        0.31%</td>
                                                                    <td
                                                                        style="width: 12%; height: 10px; text-align: center; color: #60aadb;">
                                                                        0.31%</td>
                                                                </tr>
                                                                <tr style="height: 36px;">
                                                                    <td style="height: 36px; text-align: left; width: 40%;">
                                                                        Certificate of Deposit<br />24 months to &lt; 36
                                                                        months<sup>2</sup></td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%;">
                                                                        $500.00</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%;">
                                                                        0.29%</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%;">
                                                                        0.29%</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                                        0.36%</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                                        0.36%</td>
                                                                </tr>
                                                                <tr style="height: 36px;">
                                                                    <td style="height: 36px; text-align: left; width: 40%;">
                                                                        Certificate of Deposit<br />36 months to &lt; 48
                                                                        months<sup>2</sup></td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%;">
                                                                        $500.00</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%;">
                                                                        0.35%</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%;">
                                                                        0.35%</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                                        0.46%</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                                        0.46%</td>
                                                                </tr>
                                                                <tr style="height: 36px;">
                                                                    <td style="height: 36px; text-align: left; width: 40%;">
                                                                        Certificate of Deposit<br />48 months to &lt; 60
                                                                        months<sup>2</sup></td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%;">
                                                                        $500.00</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%;">
                                                                        0.44%</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%;">
                                                                        0.44%</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                                        0.61%</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                                        0.61%</td>
                                                                </tr>
                                                                <tr style="height: 36px;">
                                                                    <td style="height: 36px; text-align: left; width: 40%;">
                                                                        Certificate of Deposit<br />60 months to &lt; 72
                                                                        months<sup>2</sup></td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%;">
                                                                        $500.00</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%;">
                                                                        0.53%</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%;">
                                                                        0.53%</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                                        1.01%</td>
                                                                    <td
                                                                        style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                                        1.01%</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <p>&nbsp;</p>
                                                    <p style="text-align: left;"><br /><sup>1</sup>The interest rate and
                                                        annual percentage yield may change after account opening</p>
                                                    <p style="text-align: left;"><sup>2</sup>A penalty may be imposed for
                                                        early withdrawal</p>
                                                    <p style="text-align: left;"><sup>3</sup>Must have a Reward Checking
                                                        Account to be eligible for these rates</p>
                                                    <p style="text-align: left;">&nbsp;</p>
                                                    <p style="text-align: left;">Fees could reduce the earnings on the
                                                        account<br />Interest Rates and Annual Percentage Yields are current
                                                        as of June 1, 2021<br />For current rate information, call (605)
                                                        357-3000</p>
                                                    <p style="text-align: left;">&nbsp;</p>
                                                    <p style="text-align: left;">Member <br />FDIC</p>
                                                    <p>&nbsp;</p>

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
                                                src="{{ asset('assets/frontend/contentassets/a571d0fcad314b17800050b0edff0ae7/1.3.4_b-17-promo_womantablet-min-right.png') }}"
                                                title="Features &amp; Benefits"
                                                alt="woman looking at features of CD&#39;s on laptop"></div>
                                    </div>
                                    <div class="b16basic_box_left">
                                        <h2>Features &amp; Benefits</h2>

                                        <div class="xhtml">
                                            <ul>
                                                <li>Interest rates vary with term of deposit</li>
                                                <li>Wide range of terms from 30 days to 72 months<sup>1</sup></li>
                                                <li>One of the lowest opening minimums in the market at just $500 minimum
                                                    deposit<sup>2</sup></li>
                                                <li>We&rsquo;ll help you pick the right option</li>
                                                <li>FDIC Insured</li>
                                            </ul>
                                        </div>
                                        <!-- Button and Footer Links go here ... -->
                                        <a href="#" data-toggle="modal" data-target="#myModal" class="b16readmore">View
                                            Terms and Rates</a>
                                        <!-- Button and Footer Links go here ... -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- View Rate [3] (within container)-->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog pop_board">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="pop_main_container_board">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">
                                            <img class="close_icon"
                                                src="{{ asset('assets/frontend/static/img/closebutton.png') }}" alt="Close"
                                                style="height:17px !important;width:17px !important;">
                                        </span>
                                    </button>
                                    <div class="pop_main_container">
                                        <h2>Certificate of Deposit Terms &amp; Rates</h2>
                                        <p style="text-align: center;">&nbsp;June 1, 2021<br /><br /></p>
                                        <p style="text-align: center;">&nbsp;</p>
                                        <div class="table_rate_modal">
                                            <table style="width: 100%; height: 328px; border-collapse: collapse;"
                                                border="1">
                                                <tbody>
                                                    <tr style="height: 54px;">
                                                        <td
                                                            style="height: 54px; font-size: 14px; text-align: left; width: 40%;">
                                                            Account<br />Product <br />Name</td>
                                                        <td
                                                            style="text-align: center; height: 54px; font-size: 14px; width: 12%;">
                                                            Minimum <br />Opening <br />Deposit</td>
                                                        <td
                                                            style="text-align: center; font-size: 14px; height: 54px; width: 12%;">
                                                            Interest Rate<br /><br /></td>
                                                        <td
                                                            style="text-align: center; height: 54px; font-size: 14px; width: 12%;">
                                                            Annual Percentage Yield<br /><br /></td>
                                                        <td
                                                            style="text-align: center; height: 54px; font-size: 14px; width: 12%;">
                                                            Reward Interest Rate<sup>3</sup></td>
                                                        <td
                                                            style="width: 12%; height: 54px; text-align: center; font-size: 14px;">
                                                            Reward <br />APY</td>
                                                    </tr>
                                                    <tr style="height: 19px;">
                                                        <td
                                                            style="height: 19px; text-align: left; width: 40%; background-color: #ecf5fb;">
                                                            CD Special - 10 Months<sup>1,2</sup></td>
                                                        <td
                                                            style="text-align: center; height: 19px; width: 12%; background-color: #ecf5fb;">
                                                            $5,000.00</td>
                                                        <td
                                                            style="text-align: center; height: 19px; width: 12%; background-color: #ecf5fb;">
                                                            N/A</td>
                                                        <td
                                                            style="text-align: center; height: 19px; width: 12%; background-color: #ecf5fb;">
                                                            N/A</td>
                                                        <td
                                                            style="text-align: center; height: 19px; width: 12%; background-color: #ecf5fb;">
                                                            &nbsp;</td>
                                                        <td
                                                            style="text-align: center; height: 19px; width: 12%; background-color: #ecf5fb;">
                                                            &nbsp;</td>
                                                    </tr>
                                                    <tr style="height: 19px;">
                                                        <td
                                                            style="height: 19px; text-align: left; width: 40%; background-color: #e7f0f6;">
                                                            CD Special - 28 Months<sup>1,2</sup></td>
                                                        <td
                                                            style="text-align: center; height: 19px; width: 12%; background-color: #e7f0f6;">
                                                            $5,000.00</td>
                                                        <td
                                                            style="text-align: center; height: 19px; width: 12%; background-color: #e7f0f6;">
                                                            N/A</td>
                                                        <td
                                                            style="text-align: center; height: 19px; width: 12%; background-color: #e7f0f6;">
                                                            N/A</td>
                                                        <td
                                                            style="text-align: center; height: 19px; width: 12%; background-color: #e7f0f6;">
                                                            &nbsp;</td>
                                                        <td
                                                            style="text-align: center; height: 19px; width: 12%; background-color: #e7f0f6;">
                                                            &nbsp;</td>
                                                    </tr>
                                                    <tr style="height: 19px;">
                                                        <td
                                                            style="width: 40%; height: 10px; text-align: left; background-color: #ecf5fb;">
                                                            CD Special - 56 Months<sup>1,2</sup></td>
                                                        <td
                                                            style="width: 12%; height: 10px; text-align: center; background-color: #ecf5fb;">
                                                            $10,000.00</td>
                                                        <td
                                                            style="width: 12%; height: 10px; text-align: center; background-color: #ecf5fb;">
                                                            N/A</td>
                                                        <td
                                                            style="width: 12%; height: 10px; text-align: center; background-color: #ecf5fb;">
                                                            N/A</td>
                                                        <td
                                                            style="width: 12%; height: 10px; text-align: center; background-color: #ecf5fb;">
                                                            &nbsp;</td>
                                                        <td
                                                            style="width: 12%; height: 10px; text-align: center; background-color: #ecf5fb;">
                                                            &nbsp;</td>
                                                    </tr>
                                                    <tr style="height: 36px;">
                                                        <td style="height: 36px; text-align: left; width: 40%;">Certificate
                                                            of Deposit<br />30 Days to &lt; 6 months<sup>2</sup></td>
                                                        <td style="text-align: center; height: 36px; width: 12%;">$500.00
                                                        </td>
                                                        <td style="text-align: center; height: 36px; width: 12%;">0.01%</td>
                                                        <td style="text-align: center; height: 36px; width: 12%;">0.01%</td>
                                                        <td
                                                            style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                            0.18%</td>
                                                        <td
                                                            style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                            0.18%</td>
                                                    </tr>
                                                    <tr style="height: 36px;">
                                                        <td style="height: 36px; text-align: left; width: 40%;">Certificate
                                                            of Deposit<br />6 months to &lt; 12 months<sup>2</sup></td>
                                                        <td style="text-align: center; height: 36px; width: 12%;">$500.00
                                                        </td>
                                                        <td style="text-align: center; height: 36px; width: 12%;">0.10%</td>
                                                        <td style="text-align: center; height: 36px; width: 12%;">0.10%</td>
                                                        <td
                                                            style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                            0.24%</td>
                                                        <td
                                                            style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                            0.24%</td>
                                                    </tr>
                                                    <tr style="height: 36px;">
                                                        <td style="width: 40%; height: 10px; text-align: left;">Certificate
                                                            of Deposit<br />12 months to &lt; 24 months<sup>2</sup></td>
                                                        <td style="width: 12%; height: 10px; text-align: center;">$500.00
                                                        </td>
                                                        <td style="width: 12%; height: 10px; text-align: center;">0.21%</td>
                                                        <td style="width: 12%; height: 10px; text-align: center;">0.21%</td>
                                                        <td
                                                            style="width: 12%; height: 10px; text-align: center; color: #60aadb;">
                                                            0.31%</td>
                                                        <td
                                                            style="width: 12%; height: 10px; text-align: center; color: #60aadb;">
                                                            0.31%</td>
                                                    </tr>
                                                    <tr style="height: 36px;">
                                                        <td style="height: 36px; text-align: left; width: 40%;">Certificate
                                                            of Deposit<br />24 months to &lt; 36 months<sup>2</sup></td>
                                                        <td style="text-align: center; height: 36px; width: 12%;">$500.00
                                                        </td>
                                                        <td style="text-align: center; height: 36px; width: 12%;">0.29%</td>
                                                        <td style="text-align: center; height: 36px; width: 12%;">0.29%</td>
                                                        <td
                                                            style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                            0.36%</td>
                                                        <td
                                                            style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                            0.36%</td>
                                                    </tr>
                                                    <tr style="height: 36px;">
                                                        <td style="height: 36px; text-align: left; width: 40%;">Certificate
                                                            of Deposit<br />36 months to &lt; 48 months<sup>2</sup></td>
                                                        <td style="text-align: center; height: 36px; width: 12%;">$500.00
                                                        </td>
                                                        <td style="text-align: center; height: 36px; width: 12%;">0.35%</td>
                                                        <td style="text-align: center; height: 36px; width: 12%;">0.35%</td>
                                                        <td
                                                            style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                            0.46%</td>
                                                        <td
                                                            style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                            0.46%</td>
                                                    </tr>
                                                    <tr style="height: 36px;">
                                                        <td style="height: 36px; text-align: left; width: 40%;">Certificate
                                                            of Deposit<br />48 months to &lt; 60 months<sup>2</sup></td>
                                                        <td style="text-align: center; height: 36px; width: 12%;">$500.00
                                                        </td>
                                                        <td style="text-align: center; height: 36px; width: 12%;">0.44%</td>
                                                        <td style="text-align: center; height: 36px; width: 12%;">0.44%</td>
                                                        <td
                                                            style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                            0.61%</td>
                                                        <td
                                                            style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                            0.61%</td>
                                                    </tr>
                                                    <tr style="height: 36px;">
                                                        <td style="height: 36px; text-align: left; width: 40%;">Certificate
                                                            of Deposit<br />60 months to &lt; 72 months<sup>2</sup></td>
                                                        <td style="text-align: center; height: 36px; width: 12%;">$500.00
                                                        </td>
                                                        <td style="text-align: center; height: 36px; width: 12%;">0.53%</td>
                                                        <td style="text-align: center; height: 36px; width: 12%;">0.53%</td>
                                                        <td
                                                            style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                            1.01%</td>
                                                        <td
                                                            style="text-align: center; height: 36px; width: 12%; color: #60aadb;">
                                                            1.01%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <p>&nbsp;</p>
                                        <p style="text-align: left;"><br /><sup>1</sup>The interest rate and annual
                                            percentage yield may change after account opening</p>
                                        <p style="text-align: left;"><sup>2</sup>A penalty may be imposed for early
                                            withdrawal</p>
                                        <p style="text-align: left;"><sup>3</sup>Must have a Reward Checking Account to be
                                            eligible for these rates</p>
                                        <p style="text-align: left;">&nbsp;</p>
                                        <p style="text-align: left;">Fees could reduce the earnings on the
                                            account<br />Interest Rates and Annual Percentage Yields are current as of June
                                            1, 2021<br />For current rate information, call (605) 357-3000</p>
                                        <p style="text-align: left;">&nbsp;</p>
                                        <p style="text-align: left;">Member <br />FDIC</p>
                                        <p>&nbsp;</p>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- View Rate [3] (within container)-->
            </div>
            <div class="block b25block  col-md-12">
                <script>
                    $(document).ready(function() {

                        if ('{{asset("assets/frontend/Static/img/CustomBlocks/B25/Background.png")}}' != 'null' &&
                            '{{asset("assets/frontend/Static/img/CustomBlocks/B25/Background.png")}}' != '') {
                            $(".b25disclosure").css("background",
                                "#245251 url({{asset('assets/frontend/Static/img/CustomBlocks/B25/Background.png')}}) no-repeat");
                            if (screen.width > 1000) {
                                $(".b25need_help_main").css("background",
                                    "#245251 url({{asset('assets/frontend/Static/img/CustomBlocks/B25/Background.png')}}) no-repeat");
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
                            <h2 class="White">Get Started</h2>
                            <div class="xhtml">
                                <p>Speak to a First PREMIER Personal Banker to discuss your needs.</p>
                            </div>
                            <div class="b25bottom" style="">
                                <center>
                                    <a href="../../../pages/about-us/teams/personal-banking-sioux-falls-team/index.html"
                                        class="b25mainanchor">CONTACT US</a><br clear="all" />
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
                            <h2>Additional Savings Options</h2>

                            <div class="b17free_mobile_banking_right">
                                <h3>PREMIER Money Market</h3>
                                <div class="xhtml">
                                    <p>Save money while earning more on higher balance savings accounts. The higher your
                                        balance, the better your interest rate. Open an account today with a minimum deposit
                                        of $500 and watch your money grow.&nbsp;</p>
                                </div>
                                <div class="b17PayLinks payIcon-space">
                                </div>

                                <!-- Button and Footer Links go here ... -->
                                <a href="../premier-money-market/index.html" class="b17readmore">Learn More</a>
                            </div>

                            <div class="b17free_mobile_banking_left right">
                                <img class="img-responsive" id="imgMainImage" style="border-radius:50%"
                                    src="{{ asset('assets/frontend/contentassets/c56ae31fcb054c0b96cb3b255ba6682b/1.3.1_b-17-promo_couplemature-min-left.png') }}"
                                    alt="First PREMIER Bank">
                            </div>
                        </div>
                    </div>

                    <div class="b15benfits_main_box b17cards">
                        <div class="container">
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar">
                                    <img src="{{ asset('assets/frontend/globalassets/images/secondary-icons/bright/business-finance/bright-business-_-finance-secondary-icon-12.png') }}"
                                        title="Overdraft Protection" alt="couple looking at money market document"
                                        width="116px" height="116px">
                                </div>
                                <div class="b15avtar_content">
                                    <h3>Overdraft Protection</h3>
                                    <p>Ensure funds are in place to cover transactions. Use your savings account as
                                        overdraft protection<sup>1</sup>.</p>
                                    <div class="clearfix"></div><br />
                                    <a href="../../personal-checking/overdraft-protection/index.html">Learn More</a>
                                </div>
                            </div>
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar">
                                    <img src="{{ asset('assets/frontend/globalassets/images/secondary-icons/gold/business-finance/gold-business-_-finance-secondary-icon-41.png') }}"
                                        title="Savings for Kids" alt="couple looking at money market document" width="116px"
                                        height="116px">
                                </div>
                                <div class="b15avtar_content">
                                    <h3>Savings for Kids</h3>
                                    <p>Teach your kids how to save for the future and watch their money grow.</p>
                                    <div class="clearfix"></div><br />
                                    <a href="../kids-savings/index.html">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="a9148438" class="modal fade" role="dialog">
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
                                            <h2>Additional Savings Options</h2>
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a href="../premier-money-market/index.html"
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

                            <h4> Disclosures </h4>
                            <div class="b13points">
                                <p>{1} A penalty may be imposed for early withdrawal.</p>
                                <p>{2} A larger minimum deposit may be required for special CD offers.</p>
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
