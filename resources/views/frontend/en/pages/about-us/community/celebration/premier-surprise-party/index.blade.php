@extends('frontend.layouts.app')
@section('content')
    <div class="container">

        <!--start responsive menu-->
        @include('frontend.layouts.components.header')
        <!-- Main Header -->
        @include('frontend.layouts.components.navbar')

        <style>
            .flex-viewport {
                width: 730px;
                margin: 0 auto;
            }

        </style>
        <div class="row equal-height">
            <div class="block b71block  col-md-12">

                <div class="b71-community">
                    <ul>
                        <li><a href="../../index.html">Community</a></li>
                        <li><a href="../index.html">Celebration</a></li>
                    </ul>
                    <h1>PREMIER Surprise Party</h1>
                    <h3>Celebrating PREMIER Associates</h3>
                </div>
            </div>
            <div class="block b04block  col-md-12">
                <style>
                </style>
                <section class="row-full b4background">
                    <div class="container">
                        <div class="b4anywhere_banking" style="width:100%; ">
                            <div class="xhtml">
                                <div style="padding: 56.25% 0 0 0; position: relative;"><iframe
                                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                                        src="https://player.vimeo.com/video/218649571" frameborder="0"
                                        allowfullscreen="allowfullscreen"></iframe></div>
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
            <div class="block b40block  col-md-12">
                <link href="../../../../../../Content/flexslider.css" rel="stylesheet" />
                <link href="../../../../../../Content/FlexiS.css" rel="stylesheet" />
                <style>
                    .carousel-inner>.item>img,
                    .carousel-inner>.item>a>img {
                        width: 100%;
                    }

                    @media screen and (max-width: 767px) {
                        #slider {
                            padding-left: 0px;
                        }

                        .carousel-control .glyphicon-chevron-left img {
                            width: 100%;
                        }

                        .carousel-control .glyphicon-chevron-right img {
                            width: 100%;
                        }
                    }

                </style>


                <script src="../../../../../../Static/js/jquery.flexslider.js"></script>
                <script type="text/javascript">
                    $(window).on('load', function() {

                        $('#carousel').flexslider({
                            animation: "slide",
                            controlNav: false,
                            animationLoop: false,
                            slideshow: false,
                            itemWidth: 210,
                            itemMargin: 5,
                            asNavFor: '#slider'
                        });

                        $('#slider').flexslider({
                            animation: "slide",
                            controlNav: false,
                            animationLoop: false,
                            slideshow: false,
                            sync: "#carousel",
                            start: function(slider) {
                                $('body').removeClass('loading');
                            }
                        });
                    });
                </script>

                <section>

                    <div class="container">
                        <section class="slider">
                            <div id="slider" class="flexslider b40flexislider">
                                <ul class="slides">
                                    <li><a class="b40thumbnail" id=carousel-selector-0><img
                                                src=../../../../../../contentassets/ba0ff95c8781402ca80e0f2bf0ecaeee/0.5.16.1.1_b-40_alt_concert.png></a>
                                    </li>
                                    <li><a class="b40thumbnail" id=carousel-selector-1><img
                                                src=../../../../../../contentassets/ba0ff95c8781402ca80e0f2bf0ecaeee/0.5.16.1.1_b-40_alt_fun.png></a>
                                    </li>
                                    <li><a class="b40thumbnail" id=carousel-selector-2><img
                                                src=../../../../../../contentassets/ba0ff95c8781402ca80e0f2bf0ecaeee/0.5.16.1.1_b-40_alt3_stage.png></a>
                                    </li>
                                    <li><a class="b40thumbnail" id=carousel-selector-3><img
                                                src=../../../../../../contentassets/ba0ff95c8781402ca80e0f2bf0ecaeee/0.5.16.1.1_b-40_alt4_party.png></a>
                                    </li>
                                </ul>
                            </div>
                            <div id="carousel" class="flexslider b40thumbslider">
                                <ul class="slides">
                                    <li><a class="b40thumbnail" id=carousel-selector-0><img
                                                src=../../../../../../contentassets/ba0ff95c8781402ca80e0f2bf0ecaeee/0.5.16.1.1_b-40_alt_concert.png></a>
                                    </li>
                                    <li><a class="b40thumbnail" id=carousel-selector-1><img
                                                src=../../../../../../contentassets/ba0ff95c8781402ca80e0f2bf0ecaeee/0.5.16.1.1_b-40_alt_fun.png></a>
                                    </li>
                                    <li><a class="b40thumbnail" id=carousel-selector-2><img
                                                src=../../../../../../contentassets/ba0ff95c8781402ca80e0f2bf0ecaeee/0.5.16.1.1_b-40_alt3_stage.png></a>
                                    </li>
                                    <li><a class="b40thumbnail" id=carousel-selector-3><img
                                                src=../../../../../../contentassets/ba0ff95c8781402ca80e0f2bf0ecaeee/0.5.16.1.1_b-40_alt4_party.png></a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>



                </section>
                <!-- FlexSlider -->
            </div>
        </div>



        <div class="row-full footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol1">
                        <div class="footerHeader">Company</div>

                        <ul>

                            <li>
                                <a href="../../../index.html">About Us</a>
                            </li>

                            <li>
                                <a href="../../../../../index.html">First PREMIER Bank</a>
                            </li>

                            <li>
                                <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a>
                            </li>

                            <li>
                                <a href="../../../leadership-team/index.html">Leadership</a>
                            </li>

                            <li>
                                <a href="../../index.html">Community</a>
                            </li>

                            <li>
                                <a href="../../../careers/index.html">Careers</a>
                            </li>

                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol2">
                        <div class="footerHeader">Customers</div>

                        <ul>

                            <li>
                                <a href="../../../../../index.html">Personal Banking</a>
                            </li>

                            <li>
                                <a href="../../../../../small-business/index.html">Small Business</a>
                            </li>

                            <li>
                                <a href="../../../../../commercial/index.html">Commercial</a>
                            </li>

                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol3">
                        <div class="footerHeader">Help &amp; Contact</div>

                        <ul>

                            <li>
                                <a href="../../../../quick-links/customer-care/index.html">Customer Care</a>
                            </li>

                            <li>
                                <a href="../../../../quick-links/locations/index.html">Locations</a>
                            </li>

                            <li>
                                <a href="../../../../quick-links/customer-care/index.html">BANK: 800-501-6535</a>
                            </li>

                            <li>
                                <a href="https://www.mypremiercreditcard.com/">CREDIT CARD: 800-987-5521</a>
                            </li>

                            <li>
                                <a href="../../../../../index.html">Routing Number: 091408598</a>
                            </li>

                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol4">
                        <div class="footerHeader">Legal Notices</div>

                        <ul>

                            <li>
                                <a href="../../../../resources/first-premier-privacy-statement-2020/index.html">Privacy
                                    Notice &amp; Statement</a>
                            </li>

                            <li>
                                <a href="../../../../resources/legal-disclosures/index.html">Legal Disclosures</a>
                            </li>

                            <li>
                                <a href="../../../../resources/cookie-policy/index.html">Cookie Policy</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="padding-top:50px;">
                        <p>Member FDIC | <img src="../../../../../../Static/img/equalhousinglender.png"
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
                background: url('../../../../../../Static/img/EHLlogo%20white.png') 230px 0px no-repeat;
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
