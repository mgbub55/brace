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
            <div class="block zipcheckblock  col-md-12">
                <style>
                    .boxButton {
                        position: relative;
                        top: -20px;
                    }

                    .boxPad {
                        padding-left: 30px;
                    }

                    .NextButton {
                        background: #42967d;
                        padding: 13px 60px;
                        letter-spacing: 1px;
                        color: #fff;
                        border-radius: 30px;
                        text-transform: uppercase;
                        font-size: 12px;
                        font-family: 'Prompt-Bold';
                        margin: 35px 0px 20px;
                        text-align: center;
                        min-width: 145px;
                        border-style: none !important;
                    }

                    .NextButton:hover {
                        background: #1c7258 !important;
                    }

                    .CancelButton {
                        background: #25455a;
                        padding: 13px 60px;
                        letter-spacing: 1px;
                        color: #fff;
                        border-radius: 30px;
                        text-transform: uppercase;
                        font-size: 12px;
                        font-family: 'Prompt-Bold';
                        margin: 35px 0px 20px;
                        text-align: center;
                        min-width: 145px;
                        border-style: none !important;
                    }

                    .CancelButton:hover {
                        background: #182e39 !important;
                    }

                    .loanZip h2 {
                        margin: 0px;
                        padding: 100px 0px 0px 0px;
                    }

                    .loanZip h4 {
                        margin: 0px;
                        padding: 6px 0px 15px 0px;
                    }

                    a:hover,
                    a:focus {
                        text-decoration: none;
                    }

                    .loan_application_main_title {
                        float: left;
                        width: 100%;
                        background: #fff url("{{asset('assets/frontend/Static/img/CustomBlocks/Apps/LoanApp_Background.png')}}") no-repeat;
                        padding: 60px 0px 75px 0px;
                        text-align: left;
                    }

                    .loan_application_main_title h2 {
                        margin-top: 0px;
                        float: left;
                        width: 100%;
                    }

                    .loan_application_main_title h4 {}

                    .loan_application_main {
                        float: left;
                        width: 100%;
                        background: #fff url("{{asset('assets/frontend/Static/img/Pages/LoanApp/loan_application_bg_bottom.png')}}") no-repeat;
                        padding: 10px 0px 200px 0px;
                        text-align: left;
                    }

                    .loan_application_main .your_location_main {
                        float: left;
                        width: 100%;
                        margin: 30px 0px;
                    }

                    .loan_application_main .your_location_main h3 {
                        color: #233c4c;
                        font-size: 45px;
                        font-family: "Prompt-Medium"float:left;
                        width: 100%;
                        margin-bottom: 10px;
                        text-shadow: 0px 0px 0 rgba(0, 0, 0, 0.3);
                    }

                    .loan_application_main .your_location_main p.required {
                        color: #61acdc;
                        font-size: 16px;
                        font-family: 'Prompt-Bold';
                        float: left;
                        width: 100%;
                        margin-bottom: 8px;
                        text-transform: uppercase;
                    }

                    .loan_application_main .your_location_main p.required_error {
                        color: #ca2139;
                        font-size: 16px;
                        font-family: 'Prompt-Bold';
                        float: left;
                        width: 100%;
                        margin-bottom: 5px;
                        text-transform: uppercase;
                    }

                    .loan_application_main .zip_code_main {
                        margin: 10px 0px 30px 0px;
                        float: left;
                        width: 70%;
                        padding: 50px 40px;
                        border-top-left-radius: 6px;
                        border-top-right-radius: 6px;
                        border-bottom-right-radius: 6px;
                        border-bottom-left-radius: 6px;
                        background: #fff;
                        box-shadow: 0px 5px 13px 0px rgba(67, 67, 67, 0.08);
                        border: solid 1px #dfdfdf;
                    }

                    .loan_application_main .zip_code_main span {
                        font-size: 25px;
                        color: #385061;
                        font-family: 'Prompt-SemiBold';
                        margin-bottom: 5px;
                        float: left;
                        width: 100%;
                    }

                    .loan_application_main .zip_code_main p {
                        font-size: 16px;
                        color: #4a6375;
                        font-family: 'Prompt-Medium';
                        margin-bottom: 8px;
                        float: left;
                        width: 100%;
                        border-bottom: solid 1px #ebedef;
                        padding-bottom: 20px;
                    }

                    .loan_application_main .zip_code_btns {
                        float: left;
                        width: 70%;
                    }

                    .loan_application_main .zip_code_btns a {
                        margin-left: 22px;
                        float: right;
                        display: inline-block;
                        letter-spacing: 1px;
                        background: #42967d;
                        color: #fff;
                        font-size: 13px;
                        font-family: 'Prompt-Bold';
                        text-transform: uppercase;
                        padding: 12px 50px;
                        border-radius: 50px;
                        margin-top: 20px;
                        margin-bottom: 0px;
                    }

                    .loan_application_main .zip_code_btns a.cancel {
                        background: #233c4c;
                    }

                    .loanZip .SubMessage input {
                        width: 150px;
                    }

                    .field-validation-error {
                        color: #ca2139;
                        font-weight: bolder;
                    }

                    .validation-summary-errors {
                        color: #ca2139;
                        font-weight: bolder;
                    }

                    .zipBox {
                        height: 75px;
                        font-size: 48px;
                        color: #1a67d1;
                        border-color: #42967d !important;
                    }

                    @media only screen and (max-width:1024px) {
                        .container {
                            width: 100%;
                        }
                    }

                    @media only screen and (max-width:1000px) {
                        .appl-complete {
                            width: 100%;
                        }

                        .loan_application_main .zip_code_main,
                        .loan_application_main .zip_code_btns {
                            width: 100%;
                        }
                    }

                    @media only screen and (max-width:767px) {
                        .loan_application_main_title h2 {
                            font-size: 35px;
                        }

                        .loan_application_main .zip_code_main .request_loan_amount input {
                            width: 100%;
                        }

                        .loan_application_main .zip_code_btns a {
                            padding: 12px 40px;
                        }
                    }

                    @media only screen and (max-width:470px) {
                        .loan_application_main .zip_code_btns a {
                            padding: 12px 30px;
                            margin-left: 12px;
                        }
                    }

                </style>

                <section class="loanapp row-full">
                    <div class="loan_application_main_title col-md-12">
                        <div class="container">
                            <h1>Apply for a First PREMIER Bank Account</h1>
                            <div class="loanZip">
                                <h2>Your Location</h2>
                                <div class="clearfix"></div>
                                <form Id="LoanApplicationForm" action="https://www.firstpremier.com/ZipCheckBlock/CheckZip"
                                    autocomplete="off" class="form-horizontal" method="post">
                                    <p>&nbsp;</p>
                                    <div style="border:none !important;background-color:#fff !important;">
                                        <div class="panel-body"
                                            style="background-color:#fff;width:47%;float:left;border:#e9e9e9 1px solid; border-radius:5%;margin-bottom:50px;">
                                            <div class="form-group container">
                                                <h3 style="padding:5px 0px 0px 16px;" class="control-label">Zip Code</h3>
                                                <div class="clearfix"></div>
                                                <p style="padding-left:15px;">Enter your Zip Code in the field below</p>
                                                <br />

                                                <div class="SubMessage row" style="padding-left:15px;">
                                                    <div class="boxPad col-xs-6 col-md-6 col-lg-3">
                                                        <input class="form-control zipBox" id="ZipCode" maxlength="5"
                                                            name="ZipCode" placeholder="00000" type="text" value="" />
                                                        <p><br />Enter First Five Digits</p>
                                                    </div>
                                                    <div class="col-md-6 boxButton"><button type="submit"
                                                            class="NextButton pull-left"
                                                            style="border-style:none !important;">Next <span
                                                                class="fa fa-chevron-right"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="clearfix"></div>
                                    <input id="DestinationPage" name="DestinationPage" type="hidden"
                                        value="https://open.firstpremier.com/" /><input id="ErrorPage" name="ErrorPage"
                                        type="hidden" value="/link/d33f9b36438249058ad49d41e90e7a75.aspx" /><input
                                        id="PageTitle" name="PageTitle" type="hidden"
                                        value="Apply for a First PREMIER Bank Account" />
                                </form>
                            </div>
                        </div>
                    </div>
                    <div style="min-height:10px; color:#25455a;">
                        <p style="color:#25455a;text-align:center;width:100%;font-style:italic;">
                            NOTE - If you are unable to complete this application for any reason, please contact Customer
                            Care at 1-800-501-6535.
                        </p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
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
