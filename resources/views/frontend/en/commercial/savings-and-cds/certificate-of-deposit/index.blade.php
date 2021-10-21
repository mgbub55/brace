@extends('frontend.layouts.app', ['page_title' => 'Business Debit Card - Business Checking | First PREMIER Bank'])

@section('content')
    <div class="container">

        <!--start responsive menu-->
        @include('frontend.layouts.components.header')
        <!-- Main Header -->
        @include('frontend.layouts.components.navbar')

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
                        background: url(../../../../Static/img/CustomBlocks/B20/arrow_green.png) no-repeat right 3px;
                        padding: 0px 15px 0px 25px;
                        vertical-align: text-bottom;
                        margin-right: 20px;
                        letter-spacing: 1px;
                    }

                    .b46mainanchor {
                        color: #268d6e;
                        background: url(../../../../Static/img/CustomBlocks/B20/arrow_green.png) no-repeat right 3px;
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
                        background: #fff url(../../../../globalassets/images/backgrounds/grey-2.svg) no-repeat;
                    }

                </style>
                <section class="row-full">
                    <div class="b46productpage">
                        <div class="container">
                            <h1>Certificates of Deposit</h1>
                            <img src="../../../../contentassets/a74210bab3564fe4906a6f55bb0e6a35/2.3.4_b-46-hero_open-min.png"
                                alt="First PREMIER Bank">
                            <h2>Lock in a Competitive Rate Today</h2>
                            <p>A low-risk savings investment option for businesses interested in guaranteed return.</p>

                            <a href="../../../pages/about-us/teams/small-business-banking-team/index.html"
                                class="b46button">Contact Us</a>


                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog pop_board">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="pop_main_container_board">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">
                                                        <img class="close_icon"
                                                            src="../../../../static/img/closebutton.png"
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
                                                                    <td
                                                                        style="height: 36px; text-align: left; width: 40%;">
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
                                                                    <td
                                                                        style="height: 36px; text-align: left; width: 40%;">
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
                                                                    <td
                                                                        style="width: 40%; height: 10px; text-align: left;">
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
                                                                    <td
                                                                        style="height: 36px; text-align: left; width: 40%;">
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
                                                                    <td
                                                                        style="height: 36px; text-align: left; width: 40%;">
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
                                                                    <td
                                                                        style="height: 36px; text-align: left; width: 40%;">
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
                                                                    <td
                                                                        style="height: 36px; text-align: left; width: 40%;">
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
                                                    <p style="text-align: left;"><sup>2</sup>A penalty may be imposed
                                                        for early withdrawal</p>
                                                    <p style="text-align: left;"><sup>3</sup>Must have a Reward Checking
                                                        Account to be eligible for these rates</p>
                                                    <p style="text-align: left;">&nbsp;</p>
                                                    <p style="text-align: left;">Fees could reduce the earnings on the
                                                        account<br />Interest Rates and Annual Percentage Yields are
                                                        current as of June 1, 2021<br />For current rate information,
                                                        call (605) 357-3000</p>
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
                        background: url(../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center;
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
                        background: url(../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center;
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
                                                src="../../../../contentassets/f7545f2464e245e19043027b3c8984c7/2.3.4_b-16-list01_alternating-1_coworkers-min.png"
                                                title="The Basics" alt="man and woman looking at tablet"></div>
                                    </div>
                                    <div class="b16basic_box_left">
                                        <h2>The Basics</h2>

                                        <div class="xhtml">
                                            <ul>
                                                <li>Low minimum deposit of just $500 to open<sup>1</sup></li>
                                                <li>Competitive, fixed interest rate&nbsp;on balances</li>
                                                <li>FDIC-insured investment</li>
                                            </ul>
                                        </div>
                                        <!-- Button and Footer Links go here ... -->
                                        <a href="#" data-toggle="modal" data-target="#myModal"
                                            class="b16readmore">View Rates</a>
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
                        background: url(../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center;
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
                        background: url(../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center;
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
                                                src="../../../../contentassets/4fcbe707809b4d5089ea72d094a4feaf/2.3.4_b-16-list01_alternating-2_lady-min.png"
                                                title="Features &amp; Benefits" alt="woman smiling"></div>

                                    </div>
                                    <div class="b16basic_box_left payIcon-space">
                                        <h2 style="padding-top:0px !important;">Features &amp; Benefits</h2>
                                        <div class="xhtml">
                                            <ul>
                                                <li>Low-risk savings option</li>
                                                <li>Good for longer-term savings growth</li>
                                                <li>Guaranteed rate-of-return</li>
                                                <li>A wide range of terms from 30 days to 72 months to meet cash flow
                                                    needs<sup>2</sup></li>
                                                <li>Access account information via <a title="Online Banking"
                                                        href="../../../small-business/online-and-mobile/online-banking/index.html">Business
                                                        Online Banking</a></li>
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
            <div class="block b25block  col-md-12">
                <script>
                    $(document).ready(function() {

                        if ('/globalassets/images/backgrounds/blue-1.jpg' != 'null' &&
                            '/globalassets/images/backgrounds/blue-1.jpg' != '') {
                            $(".b25disclosure").css("background",
                                "#245251 url(/globalassets/images/backgrounds/blue-1.jpg) no-repeat");
                            if (screen.width > 1000) {
                                $(".b25need_help_main").css("background",
                                    "#245251 url(/globalassets/images/backgrounds/blue-1.jpg) no-repeat");
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
                            <h2 class="White">Get Started Today</h2>
                            <div class="xhtml">
                                <p>Whether you&rsquo;re starting from scratch or transferring your account, our Business
                                    Bankers can help you get started with the financial management tools to meet your
                                    needs.</p>
                            </div>
                            <div class="b25bottom" style="">
                                <center>
                                    <a href="../../../pages/about-us/teams/small-business-banking-team/index.html"
                                        class="b25mainanchor">Contact Us</a><br clear="all" />
                                </center>
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
                        <h2> Additional Savings Options </h2>
                        <div class="b18great_feature_left">
                            <span>Business Savings</span>
                            <div class="b18detail xhtml">
                                <p>Build savings and keep available funds within reach with this FDIC-insured,
                                    interest-bearing savings account.</p>
                            </div>
                            <a href="../../../small-business/savings-and-cds/regular-business-savings/index.html"
                                class="b18mainanchor">Learn More</a>
                        </div>
                        <div class="b18great_feature_left b18great_feature_right payIcon-space">
                            <span>PREMIER Money Market</span>
                            <div class="b18detail xhtml">
                                <p>Maximize available cash with interest, keeping funds within reach in a safe,
                                    FDIC-insured environment.</p>
                            </div>
                            <a href="../../../small-business/savings-and-cds/premier-money-market/index.html"
                                class="b18mainanchor">Learn More</a>
                        </div>
                        <div class="clearfix">
                            <center>
                            </center>
                        </div>

                    </div>
                    <div id="a39610508" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon"
                                                    src="../../../../static/img/closebutton.png"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <h2>Business Savings</h2>
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a
                                                                    href="../../../small-business/savings-and-cds/regular-business-savings/index.html"
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
                    <div id="b39610508" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon"
                                                    src="../../../../static/img/closebutton.png"
                                                    alt="First PREMIER Bank"
                                                    style="height:17px !important;width:17px !important;">
                                            </span>
                                        </button>
                                        <div class="pop_main_container">
                                            <h2>PREMIER Money Market</h2>
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a
                                                                    href="../../../small-business/savings-and-cds/premier-money-market/index.html"
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
                    <div id="c39610508" class="modal fade" role="dialog">
                        <div class="modal-dialog pop_board">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="pop_main_container_board">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">
                                                <img class="close_icon"
                                                    src="../../../../static/img/closebutton.png"
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
                        width: 100%;
                    }

                    .b13what_you_know_main_white ol li ol li {
                        width: 100%;
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
                                <p>{1} A larger minimum deposit may be required for special CD offers.</p>
                                <p>{2} A penalty may be imposed for early withdrawal.</p>
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
                                                            src='../../../../globalassets/ymabii/commercial/b-17-promo-01-commercial-bank-confidence.png'
                                                            alt=''></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow">
                                                            <h3 class='deckspanNoCaret'>Bank with Confidence</h3>
                                                        </div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>From low- or high-volume checking, to savings and
                                                                    CDs, to Online Banking, we&rsquo;ve got you covered.
                                                                </p>
                                                                <ul>
                                                                    <li><a href="../../business-checking/index.html">Business
                                                                            Checking</a></li>
                                                                    <li><a href="../index.html">Business Savings &amp;
                                                                            CDs</a></li>
                                                                    <li><a
                                                                            href="../../treasury-services/cash-management/business-online-banking/index.html">Online
                                                                            &amp; Mobile Tools</a></li>
                                                                </ul>
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div
                                                    class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans b26line_personal_loans no-pad'>
                                                    <div class='b26line_credit_loans_left'><img
                                                            src='../../../../globalassets/ymabii/commercial/b-17-promo-01-commercial-finance-growth.png'
                                                            alt='construction workers looking at blueprints'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow">
                                                            <h3 class='deckspanNoCaret'>Finance Growth</h3>
                                                        </div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>We offer business lines of credit, term loans of any
                                                                    size and commercial real estate lending.</p>
                                                                <ul>
                                                                    <li><a
                                                                            href="../../financing/commercial-lending/index.html">Business
                                                                            Loans</a></li>
                                                                    <li><a
                                                                            href="../../financing/business-lines-of-credit/index.html">Business
                                                                            Lines of Credit</a></li>
                                                                    <li><a
                                                                            href="../../financing/business-debit-mastercard/index.html">Business
                                                                            Rewards Mastercard</a>&reg;</li>
                                                                </ul>
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div
                                                    class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad last'>
                                                    <div class='b26line_credit_loans_left'><img
                                                            src='../../../../globalassets/ymabii/commercial/b-17-promo-01-manage-assets.png'
                                                            alt='business men looking over report'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow">
                                                            <h3 class='deckspanNoCaret'>Manage Assets</h3>
                                                        </div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>Look after your assets, invest wisely and plan for
                                                                    the future by putting your funds to work for you.
                                                                </p>
                                                                <ul>
                                                                    <li><a
                                                                            href="../../asset-management-and-trust/business-planning-and-investing/index.html">Business
                                                                            Planning &amp; Investing</a></li>
                                                                    <li><a
                                                                            href="../../asset-management-and-trust/employee-benefits/index.html">Employee
                                                                            Benefits</a></li>
                                                                    <li><a
                                                                            href="../../asset-management-and-trust/business-trust-services/index.html">Business
                                                                            Trust Services</a></li>
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
                                                            src='../../../../globalassets/ymabii/commercial/b-17-promo-01-commercial-bank-confidence.png'
                                                            alt=''></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow">
                                                            <h3 class='deckspanNoCaret'>Bank with Confidence</h3>
                                                        </div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>From low- or high-volume checking, to savings and
                                                                    CDs, to Online Banking, we&rsquo;ve got you covered.
                                                                </p>
                                                                <ul>
                                                                    <li><a href="../../business-checking/index.html">Business
                                                                            Checking</a></li>
                                                                    <li><a href="../index.html">Business Savings &amp;
                                                                            CDs</a></li>
                                                                    <li><a
                                                                            href="../../treasury-services/cash-management/business-online-banking/index.html">Online
                                                                            &amp; Mobile Tools</a></li>
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
                                                            src='../../../../globalassets/ymabii/commercial/b-17-promo-01-commercial-finance-growth.png'
                                                            alt='construction workers looking at blueprints'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow">
                                                            <h3 class='deckspanNoCaret'>Finance Growth</h3>
                                                        </div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>We offer business lines of credit, term loans of any
                                                                    size and commercial real estate lending.</p>
                                                                <ul>
                                                                    <li><a
                                                                            href="../../financing/commercial-lending/index.html">Business
                                                                            Loans</a></li>
                                                                    <li><a
                                                                            href="../../financing/business-lines-of-credit/index.html">Business
                                                                            Lines of Credit</a></li>
                                                                    <li><a
                                                                            href="../../financing/business-debit-mastercard/index.html">Business
                                                                            Rewards Mastercard</a>&reg;</li>
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
                                                            src='../../../../globalassets/ymabii/commercial/b-17-promo-01-manage-assets.png'
                                                            alt='business men looking over report'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow">
                                                            <h3 class='deckspanNoCaret'>Manage Assets</h3>
                                                        </div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>Look after your assets, invest wisely and plan for
                                                                    the future by putting your funds to work for you.
                                                                </p>
                                                                <ul>
                                                                    <li><a
                                                                            href="../../asset-management-and-trust/business-planning-and-investing/index.html">Business
                                                                            Planning &amp; Investing</a></li>
                                                                    <li><a
                                                                            href="../../asset-management-and-trust/employee-benefits/index.html">Employee
                                                                            Benefits</a></li>
                                                                    <li><a
                                                                            href="../../asset-management-and-trust/business-trust-services/index.html">Business
                                                                            Trust Services</a></li>
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
                                <a href="../../../pages/about-us/index.html">About Us</a>
                            </li>

                            <li>
                                <a href="../../../index.html">First PREMIER Bank</a>
                            </li>

                            <li>
                                <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a>
                            </li>

                            <li>
                                <a href="../../../pages/about-us/leadership-team/index.html">Leadership</a>
                            </li>

                            <li>
                                <a href="../../../pages/about-us/community/index.html">Community</a>
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
                                <a href="../../../index.html">Personal Banking</a>
                            </li>

                            <li>
                                <a href="../../../small-business/index.html">Small Business</a>
                            </li>

                            <li>
                                <a href="../../index.html">Commercial</a>
                            </li>

                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol3">
                        <div class="footerHeader">Help &amp; Contact</div>

                        <ul>

                            <li>
                                <a href="../../../pages/quick-links/customer-care/index.html">Customer Care</a>
                            </li>

                            <li>
                                <a href="../../../pages/quick-links/locations/index.html">Locations</a>
                            </li>

                            <li>
                                <a href="../../../pages/quick-links/customer-care/index.html">BANK: 800-501-6535</a>
                            </li>

                            <li>
                                <a href="https://www.mypremiercreditcard.com/">CREDIT CARD: 800-987-5521</a>
                            </li>

                            <li>
                                <a href="../../../index.html">Routing Number: 091408598</a>
                            </li>

                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol4">
                        <div class="footerHeader">Legal Notices</div>

                        <ul>

                            <li>
                                <a href="../../../pages/resources/first-premier-privacy-statement-2020/index.html">Privacy
                                    Notice &amp; Statement</a>
                            </li>

                            <li>
                                <a href="../../../pages/resources/legal-disclosures/index.html">Legal Disclosures</a>
                            </li>

                            <li>
                                <a href="../../../pages/resources/cookie-policy/index.html">Cookie Policy</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="padding-top:50px;">
                        <p>Member FDIC | <img src="../../../../Static/img/equalhousinglender.png"
                                alt="Equal Housing Lender" title="Equal Housing Lender" />Equal Housing Lender</p>
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
                background: url('../../../../Static/img/EHLlogo%20white.png') 230px 0px no-repeat;
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
@endsection