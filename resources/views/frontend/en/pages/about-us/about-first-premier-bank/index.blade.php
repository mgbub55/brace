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
                        background: #fff url(../../../../Static/img/CustomBlocks/B44/leader_bg.jpg) no-repeat;
                        float: left;
                        padding-top: 60px;
                    }

                </style>
                <section class="row-full">
                    <div class="b44header">
                        <div class="container">
                            <h1>About First PREMIER Bank</h1>

                            <ul>

                                <li>
                                    <a href="../index.html">About Us</a>
                                </li>

                                <li>
                                    <a href="index.html">About First PREMIER Bank</a>
                                </li>

                            </ul>
                            <img class="img-responsive"
                                src="../../../../contentassets/b2aa62af4af84949b347bf81ce5678ec/0.5.3_b-44-hero_bank.png"
                                alt="" border="0" />
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="block b04block col-md-12" style="float:left !important;">
                <section class="row-full b4background">
                    <div class="container">
                        <div class="b4anywhere_banking" style="width:100%; ">
                            <h2 style="text-align:left !important;">Locally Grown, Nationally Known</h2>
                            <div class="xhtml">
                                <p>First PREMIER Bank is a South Dakota-based financial industry leader with a solid
                                    national reputation and deep, South Dakota-proud roots. The bank provides a wide array
                                    of financial services on a local, regional and national level, from banking to finance,
                                    investment and wealth management, to treasury and trust management services.</p>
                                <p><br />As a dynamic and growing full-service community bank with over $2 billion in
                                    assets, First PREMIER Bank serves the individualized financial needs of consumers, small
                                    and commercial businesses, agricultural producers and other organizations.</p>
                                <p><br />First PREMIER is the 14th largest ACH-originating financial institution in the
                                    United States and the 12th largest issuer of Mastercard&reg; credit cards in the
                                    country. Together, First PREMIER Bank and PREMIER Bankcard employ over 2,300 employees
                                    within South Dakota. We are headquartered in Sioux Falls, South Dakota</p>
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
            <div class="block b04block col-md-12" style="float:left !important;">
                <section class="row-full b4background">
                    <div class="container">
                        <div class="b4anywhere_banking" style="width:100%; ">
                            <h2 style="text-align:left !important;">Fast Facts</h2>
                            <div class="xhtml">
                                <ul>
                                    <li>Privately owned by T. Denny Sanford</li>
                                    <li>Operating with zero debt</li>
                                    <li>Managing $2 billion in bank assets</li>
                                    <li>Managing $3 billion in trust assets</li>
                                    <li>Asset growth is funded by time-tested, traditional sources</li>
                                    <li>One of the strongest capitalized banks in the country
                                        <ul>
                                            <li>Ranked the 17th strongest bank in the nation in banks over $1 billion by
                                                Independent Banker Magazine (2018)</li>
                                            <li>Ranked consistently as a top-performing S-Corp bank with assets between $100
                                                million and $3 billion by the American Banking Association's Banking Journal
                                            </li>
                                        </ul>
                                    </li>
                                    <li>Ranked as one of the nation&rsquo;s &ldquo;<a title="Best Bank"
                                            href=".{{route('frontend.en.pages.about.careers.best-bank')}}">Best Banks to Work
                                            for</a>&rdquo; from 2015-2020 by American Banker and Best Companies Group</li>
                                    <li>Serving as the bank for the State of South Dakota 20+ years (1999)</li>
                                    <li>Serving as the bank for the City of Sioux Falls 15+ years (2004)</li>
                                </ul>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
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
        </div>
        <script>
            $("img").addClass("img-responsive");
        </script>



        <div class="row-full footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol1">
                        <div class="footerHeader">Company</div>

                        <ul>

                            <li>
                                <a href="../index.html">About Us</a>
                            </li>

                            <li>
                                <a href="../../../index.html">First PREMIER Bank</a>
                            </li>

                            <li>
                                <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a>
                            </li>

                            <li>
                                <a href="../leadership-team/index.html">Leadership</a>
                            </li>

                            <li>
                                <a href="../community/index.html">Community</a>
                            </li>

                            <li>
                                <a href="../careers/index.html">Careers</a>
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
                                <a href="../../../commercial/index.html">Commercial</a>
                            </li>

                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol3">
                        <div class="footerHeader">Help &amp; Contact</div>

                        <ul>

                            <li>
                                <a href="../../quick-links/customer-care/index.html">Customer Care</a>
                            </li>

                            <li>
                                <a href="../../quick-links/locations/index.html">Locations</a>
                            </li>

                            <li>
                                <a href="../../quick-links/customer-care/index.html">BANK: 800-501-6535</a>
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
                                <a href="../../resources/first-premier-privacy-statement-2020/index.html">Privacy Notice
                                    &amp; Statement</a>
                            </li>

                            <li>
                                <a href="../../resources/legal-disclosures/index.html">Legal Disclosures</a>
                            </li>

                            <li>
                                <a href="../../resources/cookie-policy/index.html">Cookie Policy</a>
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
