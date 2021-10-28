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
                            <h1>The PREMIER Way</h1>

                            <ul>

                                <li>
                                    <a href="../index.html">About Us</a>
                                </li>

                                <li>
                                    <a href="index.html">The PREMIER Way</a>
                                </li>

                            </ul>
                            <img class="img-responsive"
                                src="{{asset('assets/frontend/contentassets/9fb3240bb2c04e1696c70ec92a0950bc/0.5.2_b-44-hero_woman.png')}}"
                                alt="" border="0" />
                            <h2>Vision</h2>
                            <center>
                                <p>Our vision is to be the leader in the markets we serve through employees who are
                                    dedicated to PREMIER service, who are proactive, who reflect a unity for vision and
                                    culture and who are committed to the pursuit of excellence.</p>
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
                            <h2 style="text-align:left !important;">Views &amp; Values</h2>
                            <div class="xhtml">
                                <p>We are collectively united by views and values, which are internally understood as The
                                    PREMIER Way.</p>
                                <p><br /><strong><img
                                            src="{{asset('assets/frontend/contentassets/d01528353d574ab49118a930cfd8298e/fpb-acrosticp.png')}}"
                                            alt="FPB-AcrosticP.png" width="65" height="49" /></strong>Proactive. Take
                                    ownership. If you hear it or see it, it&rsquo;s yours. Take care of it.</p>
                                <p><br /><img
                                        src="{{asset('assets/frontend/contentassets/d01528353d574ab49118a930cfd8298e/fpb-acrosticr.png')}}"
                                        alt="FPB-AcrosticR.png" width="65" height="49" />Relational. Always treat people the
                                    way you want to be treated.</p>
                                <p><br /><img
                                        src="{{asset('assets/frontend/contentassets/d01528353d574ab49118a930cfd8298e/fpb-acrostice.png')}}"
                                        alt="FPB-AcrosticE.png" width="65" height="49" />Excellence. There are no shortcuts
                                    to quality. Continue to grow and be the best you can be. Know your products. Know your
                                    customer&rsquo;s needs. Follow-up. This is the PREMIER service that sets us apart from
                                    competitors.</p>
                                <p><br /><img
                                        src="{{asset('assets/frontend/contentassets/d01528353d574ab49118a930cfd8298e/fpb-acrosticm.png')}}"
                                        alt="FPB-AcrosticM.png" width="65" height="49" />Make a difference. Make a
                                    difference today in the lives of others inside and outside of the company, treating them
                                    with respect and concern. Create a positive work environment through teamwork and
                                    support &ndash; always coaching, always encouraging.</p>
                                <p><br /><img
                                        src="{{asset('assets/frontend/contentassets/d01528353d574ab49118a930cfd8298e/fpb-acrostici.png')}}"
                                        alt="FPB-AcrosticI.png" width="65" height="49" />Impressions matter. We are
                                    billboards. It&rsquo;s not just what we say; it&rsquo;s also how we say it. Our
                                    appearance, language, conduct, tone of voice, responsiveness, body language and what we
                                    communicate impact how we are viewed by others. A smile is powerful whether it is on
                                    your face or in your voice.</p>
                                <p><br /><img
                                        src="{{asset('assets/frontend/contentassets/d01528353d574ab49118a930cfd8298e/fpb-acrostice.png')}}"
                                        alt="FPB-AcrosticE.png" width="65" height="49" />Eager to serve. Commit to being
                                    PREMIER in your minds and hearts. Look for opportunities to be PREMIER in the sight of
                                    others.</p>
                                <p><br /><img
                                        src="{{asset('assets/frontend/contentassets/d01528353d574ab49118a930cfd8298e/fpb-acrosticr.png')}}"
                                        alt="FPB-AcrosticR.png" width="65" height="49" />Represent the company well. Always
                                    handle PREMIER&rsquo;s assets as if they were your own, and speak positively about the
                                    company on and off the job. Be an ambassador and live your PREMIER pride.</p>
                                <p><br /><br /><br /><img
                                        src="{{asset('assets/frontend/contentassets/d01528353d574ab49118a930cfd8298e/fpb-acrosticw.png')}}"
                                        alt="FPB-AcrosticW.png" width="65" height="49" />We value people. Serving others is
                                    at the core of who we are. Our customers are the #1 reason we exist. Our employees are
                                    our most valuable resource. We are all responsible for investing in our communities. We
                                    will continually seek out ways to make it better with our donation of time and money.
                                </p>
                                <p><br /><img
                                        src="{{asset('assets/frontend/contentassets/d01528353d574ab49118a930cfd8298e/fpb-acrostica.png')}}"
                                        alt="FPB-AcrosticA.png" width="65" height="49" />Always do what&rsquo;s right. What
                                    we do, we do well. We approach everything with integrity, reliability and
                                    confidentiality to build the trust of those we serve internally and externally. Our
                                    services, products and conduct will reflect excellence.</p>
                                <p><br /><img
                                        src="{{asset('assets/frontend/contentassets/d01528353d574ab49118a930cfd8298e/fpb-acrosticy.png')}}"
                                        alt="FPB-AcrosticY.png" width="65" height="49" />Yardstick of success is our
                                    performance. Our financial strength and regulatory excellence is paramount to our
                                    long-term success, and we will protect and advance it for the good of our people.</p>
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
                src="{{asset('assets/frontend/Static/gfx/Logo.png')}}" style="max-width:100%;" /></a></div>
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
