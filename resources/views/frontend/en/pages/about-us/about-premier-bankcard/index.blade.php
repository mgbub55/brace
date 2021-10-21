@extends('frontend.layouts.app')
@section('content')
    <div class="container">

        <!--start responsive menu-->
        @include('frontend.layouts.components.header')
        <!-- Main Header -->
        @include('frontend.layouts.components.navbar')

        <style>
            .video-responsive {
                overflow: hidden;
                padding-bottom: 56.25%;
                position: relative;
                height: 0;
            }

            .video-responsive iframe {
                left: 0;
                top: 0;
                height: 100%;
                width: 100%;
                position: absolute;
            }

            @media only screen and (min-width : 1025px) {
                .video-responsive {
                    text-align: center;
                }

                .video-responsive iframe {
                    left: 0;
                    top: 0;
                    height: 476px;
                    width: 849px;
                    position: static;
                }
            }

        </style>
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
                            <h1>About PREMIER Bankcard</h1>

                            <ul>

                                <li>
                                    <a href="../index.html">About Us</a>
                                </li>

                                <li>
                                    <a href="index.html">About PREMIER Bankcard</a>
                                </li>

                            </ul>
                            <center>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                            </center>
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
                            <div class="xhtml">
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <center><noscript>
                                        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MWXZNLB" height="0"
                                            width="0" style="display:none;visibility:hidden"></iframe>
                                    </noscript>
                                    <div class="video-responsive" style="text-align: center;"><iframe
                                            class="embed-responsive-item" src="https://player.vimeo.com/video/60284704"
                                            allowfullscreen="allowfullscreen"></iframe></div>
                                </center>
                                <h2 style="text-align: center; padding-top: 5px;">12th Largest Issuer of Mastercard&reg;
                                    Credit Cards in the Nation</h2>
                                <p><br />The importance of good credit is significant, as evidenced both in the current
                                    increase of free credit reporting services and the standard practice of checking
                                    credit scores each time individuals apply for a loan, credit card, job, apartment or
                                    even a cell phone contract!</p>
                                <p><br />Unfortunately, less than perfect credit impacts millions of Americans today -
                                    presenting some very real challenges and limitations. For more than 25 years,
                                    PREMIER Bankcard, together with our sister organization, First PREMIER Bank, have
                                    provided individuals who may otherwise be rejected by other lenders, the opportunity
                                    to obtain a credit card. We specialize in credit cards for people with low credit
                                    scores, which may be a result of past financial problems, job loss, medical bills,
                                    divorce, poor financial management skills and other causes.</p>
                                <p><br />These credit cards are priced based on an individual&rsquo;s credit risk and
                                    are accompanied by higher rates and fees than traditional credit cards. Our
                                    objective is to have these customers with us for a relatively short period of time -
                                    typically 18 to 24 months, as they work to build their credit. As credit improves
                                    through regular, timely payment and other factors, these individuals may then begin
                                    to qualify for more traditional types of credit with better rates and lower fees.
                                </p>
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
            <div class="block b04block  col-md-12">
                <style>
                    float:left !important;

                </style>
                <section class="row-full b4background">
                    <div class="container">
                        <div class="b4anywhere_banking" style="width:100%; ">
                            <h2 style="text-align:left !important;">Fast Facts</h2>
                            <div class="xhtml">
                                <ul>
                                    <li>12th largest issuer of Mastercard&reg; credit cards in the country</li>
                                    <li>Servicing over 3 million customers nationwide</li>
                                    <li>Held by United National Corporation
                                        <ul>
                                            <li>Independently operating and separately funding PREMIER Bankcard and
                                                First PREMIER Bank</li>
                                            <li>Credit card loans are funded with cash reserves &ndash; not First
                                                PREMIER Bank deposits or debt</li>
                                        </ul>
                                    </li>
                                    <li>One of the strongest capitalized banks in the country
                                        <ul>
                                            <li>Ranked the 17th strongest bank in the nation in banks over $1 billion by
                                                Independent Banker Magazine (2018)</li>
                                            <li>Ranked consistently as a top-performing S-Corp bank with assets between
                                                $100 million and $3 billion by the American Banking Association's
                                                Banking Journal</li>
                                        </ul>
                                    </li>
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
