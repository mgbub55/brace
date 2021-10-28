@extends('frontend.layouts.app')

@section('content')
    <div class="container">
            <!--start responsive menu-->
    @include('frontend.layouts.components.header')
    <!-- Main Header -->
    @include('frontend.layouts.components.navbar')

 
    <div class="container">

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
                            <h1>Community Giving</h1>

                            <ul>

                                <li>
                                    <a href="../index.html">About Us</a>
                                </li>

                                <li>
                                    <a href="index.html">Community</a>
                                </li>

                            </ul>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <center><iframe src="https://player.vimeo.com/video/209138169" width="1200" height="415"
                                    frameborder="0" allowfullscreen="allowfullscreen"></iframe></center>
                            <h2>A Pillar of the Community</h2>
                            <center>
                                <p>Giving back is a core value embodied by all of us at PREMIER. Together, we seek to
                                </p>
                                <p>make an indelible impact for good within the communities we serve.</p>
                            </center>
                        </div>
                    </div>
                </section>
            </div>
            <div class="block b02block  col-md-12">
                <section>
                    <div class="b2about_grown_main">
                        <div class="b2container">
                            <div class="b2about_debit col-md-4">
                                <span>$1.5B+</span>
                                <p>given back to the state of South Dakota over 30 years.</p>
                            </div>
                            <div class="b2about_debit community col-md-4">
                                <span>700+</span>
                                <p>organizations supported by First PREMIER Bank and PREMIER Bankcard.</p>
                            </div>
                            <div class="b2about_debit assets col-md-4">
                                <span>32.6k+</span>
                                <p>community service hours contributed in the last year alone.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="block b36block  col-md-12">

                <section class="row-full">

                    <div class="b36community_giving_main">
                        <div class="container">
                            <h2>Ways We Give Back</h2>
                            <div class="b36community_giving">
                                <div class="b36community_giving_left"><img
                                        src="{{asset('assets/frontend/contentassets/12e60dc97c3b46a39ac8dc7dcb88a14a/0.5.16_featurecard_ws-min.png')}}"
                                        alt="Premier Softball Complex entrance with people walking in"></div>
                                <div class="b36community_giving_right">
                                    <span class="outerSpan">PHILANTHROPIC GIVING</span>
                                    <h3>New PREMIER Softball Complex provides big dividends for Watertown</h3>
                                    <div class="xhtml">
                                        <p>PREMIER's gift of $500,000 to the City of Watertown in summer of 2017 paved
                                            the way for the construction of a new, state-of-the-art softball complex for
                                            the community. With five regulation diamonds, the new complex enables the
                                            hosting of local, state and regional tournaments and provides big dividends
                                            for the local hospitality industry.<br /><br /></p>
                                        <p><a title="Learn More" href="philanthropic-giving/index.html">Learn More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="b36community_given_line">
                                <p></p>
                            </div>
                            <div class="b36community_given_blocks_main col-lg-12 col-md-12 col-sm-12 no-pad">
                                <div class="b36community_given_blocks col-lg-3 col-md-12 col-sm-12"><span
                                        class='outerSpan'>Community<br />Service</span>
                                    <div class="xhtml">
                                        <p>See how PREMIER associates donated nearly 30,000 hours in community services
                                            last year alone.</p>
                                    </div><a href=community-service/index.html>Learn More</a>
                                </div>
                                <div class="b36community_given_blocks col-lg-3 col-md-12 col-sm-12"><span
                                        class='outerSpan'>Collegiate<br />Support</span>
                                    <div class="xhtml">
                                        <p>PREMIER supports schools, colleges, universities and helps students secure a
                                            brighter future!&nbsp; &nbsp;</p>
                                    </div><a href=collegiate-support/index.html>Learn More</a>
                                </div>
                                <div class="b36community_given_blocks col-lg-3 col-md-12 col-sm-12"><span
                                        class='outerSpan'>Sponsorships &<br />Donations</span>
                                    <div class="xhtml">
                                        <p>We actively sponsor teams, events, athletics and other activities throughout
                                            our community.</p>
                                    </div><a href=philanthropic-giving/index.html>Learn More</a>
                                </div>
                                <div class="b36community_given_blocks last col-lg-3 col-md-12 col-sm-12"><span
                                        class='outerSpan'>Scholarships &<br />Internships</span>
                                    <div class="xhtml">
                                        <p>Learn how PREMIER supports students, from paid internships to an array of
                                            scholarship offerings!&nbsp; &nbsp; &nbsp;</p>
                                    </div><a href=collegiate-support/scholarship-and-internships/index.html>Learn
                                        More</a>
                                </div>
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
                            <h2>Additional Giving</h2>

                            <div class="b17free_mobile_banking_right">
                                <h3>
                                    <p><span style="font-weight: 400;">Scholarships &amp; Internships</span></p>
                                </h3>
                                <div class="xhtml">
                                    <p>PREMIER has established formal internship programs with a number of South Dakota
                                        schools, offering part-time employment, full or partial education credit and an
                                        annual stipend. We offer 18 Community Scholarships per year and have partnered
                                        with the State of South Dakota to help establish the <a
                                            href="collegiate-support/scholarship-and-internships/build-dakota-scholarship/index.html">Build
                                            Dakota</a> Workforce Initiative. Philanthropist T. Denny Sanford has also
                                        provided a $30 million endowment to fund the <a
                                            href="collegiate-support/scholarship-and-internships/horatio-alger---denny-sanford-scholarship/index.html">Horatio
                                            Algers &ndash; Denny Sanford Scholarship</a></p>
                                </div>
                                <div class="b17PayLinks payIcon-space">
                                </div>

                                <!-- Button and Footer Links go here ... -->
                                <a href="collegiate-support/scholarship-and-internships/index.html"
                                    class="b17readmore">Learn More</a>
                            </div>

                            <div class="b17free_mobile_banking_left right">
                                <img class="img-responsive" id="imgMainImage" style="border-radius:50%"
                                    src="{{asset('assets/frontend/contentassets/512c742da8cd43209e5d1e7dc6379c37/0.5.16_b-17-promo_intern-min.png')}}"
                                    alt="First PREMIER Bank">
                            </div>
                        </div>
                    </div>

                    <div class="b15benfits_main_box b17cards">
                        <div class="container">
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar">
                                    <img src="{{asset('assets/frontend/globalassets/images/secondary-icons/bright/user/bright-user-secondary-icon-14.png')}}"
                                        title="PREMIER Careers" alt="two men working in shop" width="116px"
                                        height="116px">
                                </div>
                                <div class="b15avtar_content">
                                    <h3>PREMIER Careers</h3>
                                    <p>We&rsquo;re hiring! Enjoy great pay and benefits at one of the &ldquo;Best Banks
                                        to Work For&rdquo;.</p>
                                    <div class="clearfix"></div><br />
                                    <a href="../careers/index.html">Learn More</a>
                                </div>
                            </div>
                            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">
                                <div class="b15avtar">
                                    <img src="{{asset('assets/frontend/globalassets/images/secondary-icons/green/edition/green-edition-secondary-icon-16.png')}}"
                                        title="The PREMIER Way" alt="two men working in shop" width="116px"
                                        height="116px">
                                </div>
                                <div class="b15avtar_content">
                                    <h3>The PREMIER Way</h3>
                                    <p>Learn more about the vision, values and culture that shape way we serve each
                                        other and our clients.</p>
                                    <div class="clearfix"></div><br />
                                    <a href="../the-premier-way/index.html">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="a31885559" class="modal fade" role="dialog">
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
                                            <h2>Additional Giving</h2>
                                            <div class="pop_board_white">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left:40px;">
                                                        <h4 class="Blue"></h4>
                                                        <div class="b46Blue" style="text-align:left;">

                                                            <p><br /><a
                                                                    href="collegiate-support/scholarship-and-internships/index.html"
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
            <div class="block b37block  col-md-12">
                <script>

                    $('#myCarousel').carousel({
                        interval: 10000
                    })

                    $('.carousel .item').each(function () {
                        var next = $(this).next();
                        if (!next.length) {
                            next = $(this).siblings(':first');
                        }
                        next.children(':first-child').clone().appendTo($(this));

                        if (next.next().length > 0) {
                            next.next().children(':first-child').clone().appendTo($(this));
                        }
                        else {
                            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
                        }
                    });
                </script>



                <section>
                    <div class="b37recent_outreach_main">
                        <div class="container">
                            <h2 stlye="text-align:center !important;">Events &amp; Outreaches</h2>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="carousel slide" id="myCarousel">
                                        <div class="carousel-inner">
                                            <div class='item active'>
                                                <div class='col-lg-4 col-md-12 col-sm-12 b37recent_outreach no-pad'>
                                                    <div class='b37recent_outreach_left'><img
                                                            src='{{asset('assets/frontend/contentassets/1ad192fd256e4ab1bea2f2a27fa465bc/0.5.16_b37-alt1_logo-min.png')}}'
                                                            alt='Build Dakota Scholarship logo'></div>
                                                    <div class='b37recent_outreach_right'>
                                                        <h3><a
                                                                href='collegiate-support/scholarship-and-internships/build-dakota-scholarship/index.html'>Build
                                                                Dakota Program</a></h3>
                                                    </div>
                                                </div>
                                                <div
                                                    class='col-lg-4 col-md-12 col-sm-12 b37recent_outreach b37line_personal_loans no-pad'>
                                                    <div class='b37recent_outreach_left'><img
                                                            src='{{asset('assets/frontend/contentassets/144c92d293f8418caf9e5c7eb9db17e8/0.5.16_b_37alt2_track-min.png')}}'
                                                            alt='children at starting line of track meet'></div>
                                                    <div class='b37recent_outreach_right'>
                                                        <h3><a href='community-service/summer-track-meets/index.html'>Summer
                                                                Track Meets</a></h3>
                                                    </div>
                                                </div>
                                                <div
                                                    class='col-lg-4 col-md-12 col-sm-12 b37recent_outreach no-pad last'>
                                                    <div class='b37recent_outreach_left'><img
                                                            src='{{asset('assets/frontend/contentassets/48643e3bfa4243179ecffc0d7370614b/0.5.16_b37-alt3_softball-min.png')}}'
                                                            alt='Premier Softball Complex sign'></div>
                                                    <div class='b37recent_outreach_right'>
                                                        <h3><a
                                                                href='philanthropic-giving/watertown-softball-complex/index.html'>Watertown
                                                                Softball Complex</a></h3>
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