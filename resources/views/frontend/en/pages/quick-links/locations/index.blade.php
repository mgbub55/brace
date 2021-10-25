
{{--  --}}
@extends('frontend.layouts.app')

@section('content')
    <div class="container">
            <!--start responsive menu-->
    @include('frontend.layouts.components.header')
    <!-- Main Header -->
    @include('frontend.layouts.components.navbar')

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
    <style>
        .b3premier_family_main {max-height: 650px;}
.b3premier_family_main a.readmore { display:none !important;}input {font-size:20px;}

    </style>
<div class="row equal-height"><div class="block b03block  col-md-12">

<section>
    <div class="b3premier_family_main">
        <div class="container">
            <h2>Our Locations</h2>

            <div class="b3premier_family col-md-6">
                <div class="b3premier_family_left"><img src="{{asset('assets/frontend/contentassets/aff3e5b4308f4e5ba50f350765fefbe9/1.8_b-03-premierbank-min.png')}}" alt="First PREMIER Bank Locations" class="img-responsive"></div>
                <div class="b3premier_family_right">
                    <span><a href="first-premier-bank-locations/index.html">First PREMIER Bank Locations</a></span>
                    <div class="xhtml"></div>
                </div>
            </div>


            <div class="b3premier_family col-md-6">
                <div class="b3premier_family_left"><img src="{{asset('assets/frontend/contentassets/aff3e5b4308f4e5ba50f350765fefbe9/1.8_b-03-premierbankcard-min.png')}}" alt="PREMIER Bankcard Locations" class="img-responsive"></div>
                <div class="b3premier_family_right">
                    <span><a href="premier-bankcard-locations/index.html">PREMIER Bankcard Locations</a></span>
                    <div class="xhtml"></div>
                </div>
            </div>
                <a href="index.html" class="readmore"> View All</a>
        </div>
    </div>
</section></div><div class="block b04block  col-md-12">
<style>
.b3premier_family_left {height:130px;}
.b3premier_family_right{height:130px;}
.b3premier_family_right span > a {position:relative;top:140px;}
@media only screen and (min-width:425px) {
 .MoneyPass {position:relative;top:0px;}
}
@media only screen and (max-width:425px) {
  div.block.b03block.col-md-12{min-height:600px;height:600px;}
  div.block.b04block.col-md-12{min-height:600px;height:600px;padding-top:175px;}
  div.b3premier_family.col-md-6 {min-height:250px; height:250px;}
  .b3premier_family_main h2 {font-size:35px;}
  .b3premier_family_left { }
  .b3premier_family_right span > a {position:relative;top:20px;width:100%;}
  .MoneyPass h2 {font-size:25px; display:none;}
  .MoneyPass .logo img {width:125px !important;}
}</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                        <div class="xhtml"><p>&nbsp;</p>
<div class="MoneyPass" style="padding-top: 30px !important;">
<h2 style="text-align: center;">Find a MoneyPass&reg; ATM</h2>
<div class="logo col-md-3 col-xs-12" style="float: left;"><center><img class="img-responsive" src="{{asset('assets/frontend/contentassets/b4a96dd8c175405cb46d36b342c9a8c0/moneypass_logo.png')}}" alt="moneypass_logo.png" width="174" height="105" /></center></div>
<div class="col-md-5 col-xs-12" style="float: left; color: #4a6375; font-size: 14px; line-height: 22px; font-family: 'Prompt-Medium'; text-shadow: none;">
<div class="finder"><center><br /><form role="search" action="https://www.moneypass.com/atm-locator.html" method="get" target="_blank"><input id="atmZipTextId" class="input-text input-text-large" name="atmZip" type="text" width="200" placeholder="City, State or Zip Code" /><br /><button class="btn">Search</button></form></center></div>
</div>
<div class="comments col-md-3 col-xs-12" style="float: left; color: #4a6375; font-size: 14px; line-height: 22px; font-family: 'Prompt-Medium'; text-shadow: none;">First PREMIER Bank checking and Debit Mastercard gives you access to over 33,000 MoneyPass&reg; ATMs nationwide.</div>
</div></div>
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

    .colored h2, .colored .xhtml p {
    color: #fff !important;
    }

    .page-Our-Communities .block.b04block.col-md-12 {
    margin-top: 20px;
    }
</style></div></div>



<div class="row-full footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 footerCol1">
                <div class="footerHeader">Company</div>

<ul>

        <li>
            <a href="../../about-us/index.html">About Us</a>
        </li>

        <li>
            <a href="../../../index.html">First PREMIER Bank</a>
        </li>

        <li>
            <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a>
        </li>

        <li>
            <a href="../../about-us/leadership-team/index.html">Leadership</a>
        </li>

        <li>
            <a href="../../about-us/community/index.html">Community</a>
        </li>

        <li>
            <a href="../../about-us/careers/index.html">Careers</a>
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
            <a href="../customer-care/index.html">Customer Care</a>
        </li>

        <li>
            <a href="index.html">Locations</a>
        </li>

        <li>
            <a href="../customer-care/index.html">BANK: 800-501-6535</a>
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
            <a href="../../resources/first-premier-privacy-statement-2020/index.html">Privacy Notice &amp; Statement</a>
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
 <p>Member FDIC | <img src="{{asset('assets/frontend/Static/img/equalhousinglender.png')}}" alt="Equal Housing Lender" title="Equal Housing Lender" />Equal Housing Lender</p>            </div>
        </div>
    </div>
</div>
<style>
    /* CHROME SAFARI FIX */
    .form-control:hover, .form-control:active, .form-control:focus { box-shadow: none !important; -moz-box-shadow: none !important; -webkit-box-shadow: none !important; }
    .form-control:hover, .form-control:active, .form-control:focus { box-shadow: none !important; -moz-box-shadow: none !important; -webkit-box-shadow: none !important; }
    a:focus, a:active {outline:none!important; border: none!important; }
    input:focus, input:active { outline: none !important; }
    textarea:focus { outline: none !important; }
    button:focus, button:active { outline: none !important; border: none !important; }
    .showehllogo { background: url('../../../../Static/img/EHLlogo%20white.png') 230px 0px no-repeat; background-size: 24px 24px }
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
</script>    </div>
    <div class="smallLogo"><a href="../../../index.html" title="First PREMIER Bank - Home"><img src="{{asset('assets/frontend/Static/gfx/Logo.png')}}" style="max-width:100%;" /></a></div>
    <script type="text/javascript" src="../../../../../dl.episerver.net/13.4.4.1/epi-util/find.js"></script>
<script type="text/javascript">
if(FindApi){var api = new FindApi();api.setApplicationUrl('../../../../index.html');api.setServiceApiBaseUrl('../../../../find_v2/index.html');api.processEventFromCurrentUri();api.bindWindowEvents();api.bindAClickEvent();api.sendBufferedEvents();}
</script>

    <script type="text/javascript" src="../../../../Static/js/pushy.js"></script>
    <script type="text/javascript" src="../../../../Static/js/Blocks_2019062002.js"></script>

    @endsection
