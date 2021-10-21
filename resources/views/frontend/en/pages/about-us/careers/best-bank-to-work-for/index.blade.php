@extends('frontend.layouts.app')
@section('content')
    <div class="container">

        <!--start responsive menu-->
        @include('frontend.layouts.components.header')
        <!-- Main Header -->
        @include('frontend.layouts.components.navbar')

        <div class="row equal-height">
            <div class="block b44block  col-md-12">
                <style>
                    .b44header {
                        min-height: 245px;
                        width: 100%;
                        background: #fff url(../../../../../Static/img/CustomBlocks/B44/leader_bg.jpg) no-repeat;
                        float: left;
                        padding-top: 60px;
                    }

                </style>
                <section class="row-full">
                    <div class="b44header">
                        <div class="container">
                            <h1>A &quot;Best Bank&quot; to Work For</h1>

                            <ul>

                                <li>
                                    <a href="../../index.html">About First PREMIER</a>
                                </li>

                                <li>
                                    <a href="../index.html">Careers</a>
                                </li>

                                <li>
                                    <a href="index.html">Best Bank</a>
                                </li>

                            </ul>
                            <img class="img-responsive"
                                src="../../../../../contentassets/7856119a4a43450693778c1fdf59e32e/0.5.15.3_b-44_hero_bestbank-min.png"
                                alt="" border="0" />
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="block b04block  col-md-12">
                <style>
                    float:left !important;

                </style>
                <section class="row-full b4background">
                    <div class="container">
                        <div class="b4anywhere_banking" style="width:100%; ">
                            <h2 style="text-align:left !important;">Recognized as One of the Nation&#39;s Best Banks to
                                Work For 2015-2020</h2>
                            <div class="xhtml">
                                <p>First PREMIER Bank was named a Best Bank to Work for in 2015, 2016, 2017, 2018, 2019
                                    and again in 2020. The Best Banks to Work For program, which was initiated in 2013
                                    by <em>American Banker</em> and Best Companies Group, recognizes and honors U.S.
                                    banks' outstanding employee satisfaction.<br /><br /></p>
                                <p>First PREMIER is the only South Dakota bank to appear on the prestigious national
                                    list for six consecutive years. Full results of the 2020 program are available on
                                    the <a href="https://www.americanbanker.com/list/best-banks-to-work-for">American
                                        Banker</a> website.<br /><br /></p>
                                <p>First PREMIER Bank President Dave Rozenboom said the designation reflects the
                                    bank&rsquo;s corporate culture and its quality employees.<br /><br /></p>
                                <p>"We have an incredible team of individuals who embrace what we call the PREMIER Way
                                    &ndash; our shared vision, views and values. And at the center of this are PREMIER's
                                    customers, communities and employees."<br /><br /></p>
                                <p>For its annual list, <em>American Banker</em> judges financial institutions across
                                    the country on corporate culture, employee benefits, financial and physical wellness
                                    programs, workplace atmosphere and other set criteria. As part of its 2020 ranking,
                                    the publication also asked each financial institution how they kept their employees
                                    safe and engaged during the COVID-19 crisis.<br /><br /></p>
                                <p>Rozenboom said the bank worked closely with local and regional health officials,
                                    adopted the Centers for Disease Control guidelines and continued to embrace the
                                    PREMIER Way.<br /><br /></p>
                                <p>&ldquo;We focused on our core values and the things that are important to us &ndash;
                                    our customers, communities and employees,&rdquo; Rozenboom said.<br /><br /></p>
                                <p>&ldquo;I am so incredibly proud of our team every year, but this year, I am
                                    especially proud of how First PREMIER Bank employees handled the challenges and
                                    continued to serve our customers with first-class PREMIER service.&rdquo;</p>
                                <p><br /><br /></p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
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
                                <p>First PREMIER Bank and PREMIER Bankcard are Equal Opportunity and Affirmative Action
                                    Employers and do not discriminate minority/sex/disability/vet/any protected status.
                                </p>
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
                                <a href="../../index.html">About Us</a>
                            </li>

                            <li>
                                <a href="../../../../index.html">First PREMIER Bank</a>
                            </li>

                            <li>
                                <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a>
                            </li>

                            <li>
                                <a href="../../leadership-team/index.html">Leadership</a>
                            </li>

                            <li>
                                <a href="../../community/index.html">Community</a>
                            </li>

                            <li>
                                <a href="../index.html">Careers</a>
                            </li>

                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol2">
                        <div class="footerHeader">Customers</div>

                        <ul>

                            <li>
                                <a href="../../../../index.html">Personal Banking</a>
                            </li>

                            <li>
                                <a href="../../../../small-business/index.html">Small Business</a>
                            </li>

                            <li>
                                <a href="../../../../commercial/index.html">Commercial</a>
                            </li>

                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol3">
                        <div class="footerHeader">Help &amp; Contact</div>

                        <ul>

                            <li>
                                <a href="../../../quick-links/customer-care/index.html">Customer Care</a>
                            </li>

                            <li>
                                <a href="../../../quick-links/locations/index.html">Locations</a>
                            </li>

                            <li>
                                <a href="../../../quick-links/customer-care/index.html">BANK: 800-501-6535</a>
                            </li>

                            <li>
                                <a href="https://www.mypremiercreditcard.com/">CREDIT CARD: 800-987-5521</a>
                            </li>

                            <li>
                                <a href="../../../../index.html">Routing Number: 091408598</a>
                            </li>

                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol4">
                        <div class="footerHeader">Legal Notices</div>

                        <ul>

                            <li>
                                <a href="../../../resources/first-premier-privacy-statement-2020/index.html">Privacy
                                    Notice &amp; Statement</a>
                            </li>

                            <li>
                                <a href="../../../resources/legal-disclosures/index.html">Legal Disclosures</a>
                            </li>

                            <li>
                                <a href="../../../resources/cookie-policy/index.html">Cookie Policy</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="padding-top:50px;">
                        <p>Member FDIC | <img src="../../../../../Static/img/equalhousinglender.png"
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
                background: url('../../../../../Static/img/EHLlogo%20white.png') 230px 0px no-repeat;
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
