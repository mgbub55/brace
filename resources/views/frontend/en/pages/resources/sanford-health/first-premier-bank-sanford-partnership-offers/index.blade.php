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
                            <h1>First PREMIER Bank Sanford Partnership Offers</h1>

                            <ul>

                                <li>
                                    <a href="../../../../index.html">First PREMIER Bank</a>
                                </li>

                                <li>
                                    <a href="../index.html">Sanford Health</a>
                                </li>

                                <li>
                                    <a href="index.html">First PREMIER Bank Sanford Partnership Offers</a>
                                </li>

                            </ul>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="block b04block  col-md-12">
                <style>
                </style>
                <section class="row-full b4background">
                    <div class="container">
                        <div class="b4anywhere_banking" style="width:100%; ">
                            <div class="xhtml">
                                <p><img src="{{asset('assets/frontend/contentassets/6312af518d8a471190a9d6ef48960b00/sanford_h1.jpg')}}"
                                        alt="" width="1200" height="415" /></p>
                                <p>First PREMIER Bank and Sanford Health share a unique relationship. In 2004, First PREMIER
                                    Bank owner and philanthropist T. Denny Sanford announced a $16 million gift to what
                                    would eventually become Sanford Children&rsquo;s Hospital. Three years later, he
                                    transformed health care&nbsp;throughout the region with an historic $400 million gift to
                                    Sioux Valley Health, which was then renamed Sanford Health in his honor. Since that
                                    time, Mr. Sanford has been instrumental in many Sanford Health initiatives, including
                                    the Edith Sanford Breast Institute and Sanford Imagenetics.<br /><br /></p>
                                <p>&nbsp;</p>
                                <p>In all, his gifts to the Sanford organization have totaled nearly $1 billion. Because of
                                    this unique relationship, First PREMIER Bank is pleased to provide Sanford Health
                                    employees with several unique benefits. In addition to the great products and services
                                    we currently offer, we&rsquo;re&nbsp;happy to share these additional benefits with
                                    Sanford Health employees:<br /><br /><br /></p>
                                <p><img style="margin-left: 10px; margin-right: 10px; float: left;"
                                        src="{{asset('assets/frontend/contentassets/6312af518d8a471190a9d6ef48960b00/medical-professional-with-debit-card.jpg')}}"
                                        alt="" width="228" height="228" /></p>
                                <h2>You Can Give Back with Every Swipe</h2>
                                <div style="width: 75%; padding-left: 30px;">
                                    <p>What if you could help fund medical research each time you purchased a gallon of
                                        milk? Imagine you could help improve regional health care while purchasing Christmas
                                        gifts for your family. Imagine no longer, the First PREMIER Bank/Sanford Health
                                        Foundation Debit Mastercard&reg; has arrived!<br /><br /></p>
                                    <p>The card is free and each time a purchase is made, you will support the work of
                                        health and healing at Sanford Health.<br /><br /></p>
                                </div>
                                <p><br clear="all" />As an added incentive, First PREMIER is offering the
                                    following:<br /><br /></p>
                                <p style="padding-left: 30px;"><strong>1</strong>. Receive a $50 deposit when you open a
                                    new, personal checking account with a qualifying Sanford Health payroll direct deposit
                                    of $250 or more*; or add the direct deposit to an existing First PREMIER personal
                                    checking account. This offer is only valid with a Sanford Debit Mastercard.<br /><br />
                                </p>
                                <p style="padding-left: 30px;"><strong>2</strong>. The Sanford Health Foundation will
                                    receive $50 from First PREMIER, based upon the criteria listed above.<br /><br /></p>
                                <p style="padding-left: 30px;"><strong>3</strong>. The Sanford Health Foundation will
                                    receive 50 percent of the net interchange fees received each time your Sanford Debit
                                    Mastercard is used.</p>
                                <p>&nbsp;</p>
                                <p>Sanford employees who currently have a First PREMIER personal checking account with a
                                    qualifying direct payroll deposit may request a Sanford Debit Mastercard. While the
                                    first two incentives will not apply, 50 percent of the card&rsquo;s net interchange fees
                                    will be given to the Sanford Health Foundation.<br /><br /></p>
                                <h2>Apply Now</h2>
                                <p>To open a new account and secure your Sanford Debit Mastercard, visit any First PREMIER
                                    Bank location or <strong><a href="https://open.firstpremier.com/">apply
                                            online</a></strong>.<br /><br /></p>
                                <p><strong>You will need to select a Sanford Debit Mastercard, using the drop-down menu, and
                                        enter your special code: </strong><span
                                        style="text-decoration: underline;"><strong>SANFORD</strong><br /></span></p>
                                <p>&nbsp;</p>
                                <p><strong><strong>If you have any questions or need special instructions, please do not
                                            hesitate to contact our Customer Care Center at (800)
                                            501-6535.</strong><br /><br /></strong></p>
                                <h2><br />Getting You Home Faster</h2>
                                <p>Sanford Health employees can turn their First PREMIER Bank checking account and home
                                    mortgage loan into $500. Here&rsquo;s how:</p>
                                <p><img style="float: right;"
                                        src="{{asset('assets/frontend/contentassets/6312af518d8a471190a9d6ef48960b00/sanford_mortgage_couple.png')}}"
                                        alt="" width="203" height="203" /></p>
                                <ul style="float: left;">
                                    <li>Receive a $500 Mortgage Loan Discount when you close your First PREMIER Bank
                                        mortgage loan!<br /><br /></li>
                                </ul>
                                <p><br /><br /><br /><br /><br /><br /></p>
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
            <div class="block b12block  col-md-12">
                <style>
                    .b12faq_main {
                        float: left;
                        width: 100%;
                        padding: 100px 0px 50px 0px !important;
                        text-align: left;
                        background: #fff;
                    }

                </style>
                <div class="b12faq_main">
                    <div class="b12container">
                        <h2>Frequently Asked Questions</h2>
                        <!-- tabs left -->
                        <div class="tabbable">
                            <div class="tab-content col-md-7">
                                <div class="tab-pane active" id="A"><span>Can a non-Sanford employee receive a Sanford Debit
                                        Mastercard?</span>
                                    <p>
                                    <p>Yes, but he or she must be a joint owner on the Sanford employee&rsquo;s checking
                                        account. The significant other is not eligible for the $50-dollar incentives, but
                                        his or her card will generate the 50 percent net interchange fee donation to Sanford
                                        Health Foundation.</p>
                                    </p>
                                </div>
                                <div class="tab-pane" id="B"><span>What if I leave employment with Sanford
                                        Health?</span>
                                    <p>
                                    <p>First PREMIER Bank may reissue a traditional debit card if your Sanford Health
                                        payroll direct deposit is discontinued. There will be no charge for this service.
                                    </p>
                                    </p>
                                </div>
                                <div class="tab-pane" id="C"><span>How is the money donated to Sanford Health
                                        Foundation used?</span>
                                    <p>
                                    <p>Funds generated through the use of your Sanford Debit Mastercard will be used for to
                                        help fund important initiatives including: the Edith Sanford Breast Center,
                                        Ava&rsquo;s House by Sanford, Sanford Children&rsquo;s Miracle Network, Sanford Cure
                                        Kids Cancer, Sanford Research and more!</p>
                                    </p>
                                </div>
                                <div class="tab-pane" id="D"><span>Will the card cost me anything?</span>
                                    <p>
                                    <p>No. The Sanford Debit Mastercard is free.</p>
                                    </p>
                                </div>
                                <div class="tab-pane" id="E"><span>I already have a First PREMIER checking account and
                                        payroll direct deposit. Can I still get a Sanford Debit Mastercard?</span>
                                    <p>
                                    <p>Yes. Simply visit any First PREMIER Bank branch or call our Customer Care Center at
                                        (800) 501-6535. Instant issue cards are available at most branches except: Wakonda,
                                        Lake Norden, Castlewood, Kranzburg, and Watertown on 5th Street. Our Customer Care
                                        Center can also mail you one as quickly as possible. While the $50 offers are not
                                        valid for switching cards, 50 percent of the net interchange fees from your card
                                        will be donated to the Sanford Health Foundation.</p>
                                    </p>
                                </div>
                            </div>
                            <ul class="nav nav-pills nav-stacked col-md-5">
                                <li class="active"><a href="#A" data-toggle="tab">Can a non-Sanford employee receive
                                        a Sanford Debit Mastercard?</a></li>
                                <li><a href="#B" data-toggle="tab">What if I leave employment with Sanford Health?</a></li>
                                <li><a href="#C" data-toggle="tab">How is the money donated to Sanford Health Foundation
                                        used?</a></li>
                                <li><a href="#D" data-toggle="tab">Will the card cost me anything?</a></li>
                                <li><a href="#E" data-toggle="tab">I already have a First PREMIER checking account and
                                        payroll direct deposit. Can I still get a Sanford Debit Mastercard?</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

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
                                <p>Receive $50 when you direct deposit your qualifying Sanford Health payroll* into either
                                    (i) a new First PREMIER Bank personal checking account, or (ii) an existing First
                                    PREMIER Bank checking account if you have not used direct deposit previously. If you
                                    already have a qualifying direct deposit, you are not eligible for this offer.</p>
                                <p>The account must be in good standing, and the recipient must still be employed by Sanford
                                    Health, at the time of the $50 bonus payout to qualify. All bonuses will be paid to the
                                    applicable account within 6 weeks of the initial recurring Sanford payroll of $250 or
                                    more.</p>
                                <p>*A qualifying direct deposit is a recurring direct deposit of a Sanford Health payroll of
                                    $250 or more per pay period electronically deposited into an eligible checking account
                                    by a Sanford Health employee. Transfers from one account to another, or deposits made at
                                    a banking location or ATM do not qualify as direct deposit.</p>
                                <p>This offer is available January 1, 2020 through December 31, 2021. This special offer
                                    cannot be used in conjunction with any other discounts or bonus coupons. This offer is
                                    only available to employees of Sanford Health who are employed by Sanford Health through
                                    the period between setting up direct deposit and payment of the bonus.<br /><br /></p>
                                <p>All checking accounts require a $50 minimum deposit to open. The FREE+ Checking Account
                                    annual percentage yield for balances over $500 is 0.08%. Rates may change at the
                                    bank&rsquo;s discretion. The $50 bonus will be shown as interest on account statements
                                    and will be reported as interest income on Form 1099-INT. Fees will reduce earnings.</p>
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
    <div class="smallLogo"><a href="../../../../index.html" title="First PREMIER Bank - Home"><img
                src="{{asset('assets/frontend/Static/gfx/Logo.png')}}" style="max-width:100%;" /></a></div>
    <script type="text/javascript" src="../../../../../../dl.episerver.net/13.4.4.1/epi-util/find.js"></script>
    <script type="text/javascript">
        if (FindApi) {
            var api = new FindApi();
            api.setApplicationUrl('../../../../../index.html');
            api.setServiceApiBaseUrl('../../../../../find_v2/index.html');
            api.processEventFromCurrentUri();
            api.bindWindowEvents();
            api.bindAClickEvent();
            api.sendBufferedEvents();
        }
    </script>

    <script type="text/javascript" src="../../../../../Static/js/pushy.js"></script>
    <script type="text/javascript" src="../../../../../Static/js/Blocks_2019062002.js"></script>
   @endsection
