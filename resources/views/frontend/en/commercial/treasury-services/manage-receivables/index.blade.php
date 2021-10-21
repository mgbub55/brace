@extends('frontend.layouts.app')
@section('content')
    <div class="container">

        <!--start responsive menu-->
        @include('frontend.layouts.components.header')
        <!-- Main Header -->
        @include('frontend.layouts.components.navbar')

        <div class="row equal-height">
            <div class="block b25block  col-md-12">
                <script>
                    $(document).ready(function() {

                        if ('/globalassets/images/backgrounds/green-2.svg' != 'null' &&
                            '/globalassets/images/backgrounds/green-2.svg' != '') {
                            $(".b25disclosure").css("background",
                                "#245251 url(/globalassets/images/backgrounds/green-2.svg) no-repeat");
                            if (screen.width > 1000) {
                                $(".b25need_help_main").css("background",
                                    "#245251 url(/globalassets/images/backgrounds/green-2.svg) no-repeat");
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
                            <h2 class="White">Manage Receivables</h2>
                            <div class="xhtml">
                                <p>No matter how large or small your volume, First PREMIER Bank offers robust integrated
                                    receivables solutions that help businesses process payments faster and more
                                    efficiently, maximizing cash flow.</p>
                            </div>
                            <div class="b25bottom" style="">
                                <center>
                                    <a href="../../../pages/about-us/teams/treasury-services-team/index.html"
                                        class="b25mainanchor">CONTACT US</a><br clear="all" />
                                </center>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
            <div class="block b08block  col-md-12">
                <section>
                    <div class="b8giving_back_main">
                        <div class="container">
                            <h2>A Robust Suite of Services</h2>
                            <div class="b8box_scroll_main">
                                <div class="b8box_scroll">

                                    <div class="b8giving_back col-md-4">
                                        <center><img class="img-responsive"
                                                src="../../../../contentassets/eb3c33caf08b41c1a7ce132e1d2d90f0/3.4.2_b-8-feature-alt1_guy-min.png"
                                                title="ACH Services" alt="man working on laptop "></center>
                                        <h3>ACH Services</h3>
                                        <div class="xhtml">
                                            <p>Manage payments electronically, deposit payments directly, initiate wire
                                                transfers or pay via prepaid card.<br /><br /></p>
                                        </div>
                                        <a class="b8btn" href="ach-services/index.html">Learn More</a>
                                    </div>

                                    <div class="b8giving_back col-md-4">
                                        <center><img class="img-responsive"
                                                src="../../../../contentassets/eb3c33caf08b41c1a7ce132e1d2d90f0/3.4.2_b-8-feature-alt2_pharm-min.png"
                                                title="Merchant Card Services"
                                                alt="pharmacist taking payment by mobile phone "></center>
                                        <h3>Merchant Card Services</h3>
                                        <div class="xhtml">
                                            <p>Accept debit and credit cards on site, online and by phone to streamline
                                                payments and maximize sales.</p>
                                            <p>&nbsp;</p>
                                        </div>
                                        <a class="b8btn" href="merchant-card-services/index.html">Learn
                                            More</a>
                                    </div>

                                    <div class="b8giving_back col-md-4">
                                        <center><img class="img-responsive"
                                                src="../../../../contentassets/eb3c33caf08b41c1a7ce132e1d2d90f0/3.4.2_b-8-feature-alt3_fraud-min.png"
                                                title="Security &amp; Fraud Prevention" alt="business woman "></center>
                                        <h3>Security &amp; Fraud Prevention</h3>
                                        <div class="xhtml">
                                            <p>Centralize returned item processing to a single bank improving
                                                collections and reducing bank fees.</p>
                                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                &nbsp;&nbsp;</p>
                                        </div>
                                        <a class="b8btn"
                                            href="../cash-management/security-and-fraud-protection/index.html">Learn
                                            More</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="block b15block  col-md-12">
                <section style="padding-left:0px;">
                    <div class="b15benfits_main_box">
                        <div class="container">
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar"><img
                                        src="../../../../globalassets/images/secondary-icons/gold/business-finance/gold-business-_-finance-secondary-icon-35.png"
                                        title="Lockbox Services" alt="safe" height="116px" width="116px"></div>
                                <div class="b15avtar_content">
                                    <h3>Lockbox Services</h3>
                                    <p>Centralize incoming payments sent via snail mail with First PREMIER. You'll save
                                        time, process payments faster and more accurately and reduce theft and fraud.
                                    </p>
                                    <div class="clearfix"></div><br /> <a href="lockbox-services/index.html">Learn
                                        More</a>
                                </div>
                            </div>
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar"><img
                                        src="../../../../globalassets/images/secondary-icons/green/content/green-content-secondary-icon-3.png"
                                        title="Check Image Clearing" alt="stack of papers" height="116px" width="116px">
                                </div>
                                <div class="b15avtar_content">
                                    <h3>Check Image Clearing</h3>
                                    <p>Submit batch check image files for electronic deposit! Improve check clearing
                                        times, reduce check processing overhead and expenses.&nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp;</p>
                                    <div class="clearfix"></div><br /> <a href="check-image-clearing/index.html">Learn
                                        More</a>
                                </div>
                            </div>
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar"><img
                                        src="../../../../globalassets/images/secondary-icons/blue/business-finance/blue-business-_-finance-secondary-icon-11.png"
                                        title="Virtual Account Management" alt="growth chart" height="116px" width="116px">
                                </div>
                                <div class="b15avtar_content">
                                    <h3>Virtual Account Management</h3>
                                    <p>Streamline account management, optimize working capital and reduce the overhead
                                        and fees associated with having multiple physical bank accounts.</p>
                                    <div class="clearfix"></div><br /> <a
                                        href="virtual-account-management/index.html">Learn More</a>
                                </div>
                            </div>
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar"><img
                                        src="../../../../globalassets/images/secondary-icons/blue/business-finance/blue-business-_-finance-secondary-icon-2.png"
                                        title="Centralized Returns" alt="coins dropping into hand" height="116px"
                                        width="116px"></div>
                                <div class="b15avtar_content">
                                    <h3>Centralized Returns</h3>
                                    <p>Centralize returned item processing with First PREMIER Bank streamlining the
                                        returns process, improving collections ability and reducing bank fees.</p>
                                    <div class="clearfix"></div><br /> <a href="centralized-returns/index.html">Learn
                                        More</a>
                                </div>
                            </div>
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar"><img
                                        src="../../../../globalassets/images/secondary-icons/bright/business-finance/bright-business-_-finance-secondary-icon-12.png"
                                        title="Positive Pay" alt="check" height="116px" width="116px"></div>
                                <div class="b15avtar_content">
                                    <h3>Positive Pay</h3>
                                    <p>A powerful, affordable fraud management solution that helps you detect fraudulent
                                        checks and charges before they impact business.</p>
                                    <div class="clearfix"></div><br /> <a href="positive-pay/index.html">Learn
                                        More</a>
                                </div>
                            </div>
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar"><img
                                        src="../../../../globalassets/images/secondary-icons/green/hardware/green-hardware-secondary-icon-12.png"
                                        title="Remote Deposit" alt="mobile phone" height="116px" width="116px"></div>
                                <div class="b15avtar_content">
                                    <h3>Remote Deposit</h3>
                                    <p>Scan and batch process large numbers of checks quickly, accurately and securely
                                        from your office. No bank visit needed.</p>
                                    <div class="clearfix"></div><br /> <a href="remote-deposit/index.html">Learn
                                        More</a>
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
                        <img src="../../../../Static/img/CustomBlocks/B6/featured_bg.png" class="b6featured_bg"
                            alt="First PREMIER Bank">
                        <img src="../../../../Static/img/CustomBlocks/B6/featured_bg_small.png"
                            class="b6featured_bg_small_bg" alt="First PREMIER Bank">
                        <div class="b6featured_bg_small carousel" id="b06Carousel" data-ride="carousel">
                            <div class="">
                                <div class="carousel-inner b06carousel-inner">
                                    <div class="item active">
                                        <div class="row b6mypadding">
                                            <div class="b6featured_quote_img col-lg-5 col-md-5"><img
                                                    src=../../../../contentassets/7019fabc54dc4293a9641c885e085daf/quotes-dennisfeterl.png
                                                    class="b6featured_img" alt="Dennis J Feterl VP Treasury Services">
                                            </div>
                                            <div class="b6featured_quote col-lg-7 col-md-7">
                                                <p>There’s never a cookie-cutter solution for our clients. We really
                                                    listen, and help develop the best possible account, product and
                                                    services solution to meet their treasury services needs.</p>
                                                <div class="clearfix"></div><span> - Dennis J Feterl, VP,
                                                    Treasury Services</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row b6mypadding">
                                            <div class="b6featured_quote_img col-lg-5 col-md-5"><img
                                                    src=../../../../contentassets/eba70eaefe6545b8993f89acf0f38bc5/quotes-mikekaiser.png
                                                    class="b6featured_img" alt="Mike Kaiser VP Treasury Services">
                                            </div>
                                            <div class="b6featured_quote col-lg-7 col-md-7">
                                                <p>At First PREMIER, great service equals great business. Our customers
                                                    love our world-class service and tools - and they’re blown away by
                                                    the personal, hands on support they receive. </p>
                                                <div class="clearfix"></div><span> - Mike Kaiser, VP, Treasury
                                                    Services</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <a class="left carousel-control b06carousel-control" href="#b06Carousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"><img
                                        src="../../../../Static/img/CustomBlocks/B6/left_arrow.png"
                                        alt="First PREMIER Bank"></span>
                                <span class="sr-only"></span>
                            </a>
                            <a class="right carousel-control b06carousel-control" href="#b06Carousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"><img
                                        src="../../../../Static/img/CustomBlocks/B6/right_arrow.png"
                                        alt="First PREMIER Bank"></span>
                                <span class="sr-only"></span>
                            </a>
                        </div>
                    </div>
                </section>

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
                        <p>Member FDIC | <img src="../../../../Static/img/equalhousinglender.png" alt="Equal Housing Lender"
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
