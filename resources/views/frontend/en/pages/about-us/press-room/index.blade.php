

 @extends('frontend.layouts.app')
 @section('content')
 <div class="container">
     @include('frontend.layouts.components.header')
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
<div class="row equal-height"><div class="block b44block  col-md-12">
<style>
    .b44header  { min-height:245px;width:100%; background:#fff url(../../../../Static/img/CustomBlocks/B44/leader_bg.jpg) no-repeat; float:left; padding-top:60px;}
</style>
<section class="row-full">
    <div class="b44header">
        <div class="container">
            <h1>Press Room</h1>
            
<ul>
    
        <li>
            <a href="../index.html">About First PREMIER</a> 
        </li>
    
        <li>
            <a href="index.html">Press Room</a> 
        </li>
    
</ul>
            <img class="img-responsive" src="../../../../contentassets/edc02068ef154bf285f0649b1199340e/0.5.5_b-44-hero_mic.png" alt="" border="0" />                                        <p>&nbsp;</p>
                <p>&nbsp;</p>
        </div>
    </div>
</section></div><div class="block b04block  col-md-12">
<style>
float:left !important;</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                <h2 style="text-align:left !important;">News &amp; Updates</h2>
                            <div class="xhtml"><p style="text-align: left;">The latest news and updates from PREMIER</p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p></div>
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
</style></div><div class="block b30block  col-md-12">
    <section class="row-full">

        <div class="b30Press_room_main">
            <div class="container">
                <div class="b30Press_room col-md-12">
                    <h1>Recent News &amp; Releases</h1>
                    <div class="b30_bottom">
                        <div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Jun 17, 2021</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="nations-best-performing-large-community-bank/index.html" style="font-size:20px;">Nation's Best Performing Large Community Bank</a><br/>The holding company for First PREMIER Bank has been ranked</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Jun 16, 2021</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="major-donation-makes-veterans-cemetery-a-reality/index.html" style="font-size:20px;">MAJOR DONATION MAKES VETERANS CEMETERY A REALITY</a><br/>The South Dakota Veterans Council announced today that a $2.1 million donation</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">May 05, 2021</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="2021-community-scholarship-winners/index.html" style="font-size:20px;">2021 Community Scholarship Winners</a><br/>We are pleased to announce the winners of our 2021 academic community and employee scholarships</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Apr 09, 2021</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="jacks-bash-returns/index.html" style="font-size:20px;">Jacks Bash Returns</a><br/>Jacks Bash 2 is slated for Wednesday, September 8, 2021, headlined by Zac Brown Band with special guest Fall Out Boy</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Mar 18, 2021</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="governor-noem-signs-need-based-scholarship-legislation/index.html" style="font-size:20px;">GOVERNOR NOEM SIGNS NEED-BASED SCHOLARSHIP LEGISLATION</a><br/>Governor Noem, Sanford and Avera join PREMIER in raising  $175 million for need-based scholarships</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Mar 11, 2021</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="anonymous-donor-revealed/index.html" style="font-size:20px;">Anonymous Donor Revealed</a><br/>A $1 million gift from First PREMIER Bank and PREMIER Bankcard will help kickstart Watertown’s new ice arena building project. </p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Jan 18, 2021</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="premier-donates-%2450-million-for-scholarship-program/index.html" style="font-size:20px;">PREMIER Donates $50 Million for Scholarship Program</a><br/>First PREMIER Bank, PREMIER Bankcard and T. Denny Sanford announced today a historic gift of $50 million to establish a need-based scholarship in South Dakota</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Nov 06, 2020</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="first-premier-named-one-of-the-best-banks-to-work-for/index.html" style="font-size:20px;">First PREMIER Named One of the Best Banks to Work For</a><br/>First PREMIER Bank was recently honored as one of American Banker magazine’s “Best Banks to Work For.”</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">May 27, 2020</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="premier-and-sioux-falls-parks-and-recreation-cancel-june-public-track-meets/index.html" style="font-size:20px;">PREMIER and Sioux Falls Parks and Recreation Cancel June Public Track Meets</a><br/>Due to continued COVID-19 concerns, the 2020 PREMIER Summer Track Meets Cancelled</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Apr 15, 2020</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="huron-community-development-foundation/index.html" style="font-size:20px;">Huron Community Development Foundation</a><br/>T. Denny Sanford announced Monday he has donated $75,000 to the Huron Community Development Foundation.</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Apr 15, 2020</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="siouxland-recovery-fund/index.html" style="font-size:20px;">Siouxland Recovery Fund</a><br/>T. Denny Sanford announced today that he will donate $150,000 to the Siouxland Recovery Fund.</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Apr 15, 2020</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="2020-scholarship-winners/index.html" style="font-size:20px;">2020 Scholarship Winners</a><br/>First PREMIER Bank and PREMIER Bankcard are pleased to announce the winners of its 2020 academic scholarships.</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Mar 31, 2020</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="one-sioux-falls-fund/index.html" style="font-size:20px;">One Sioux Falls Fund</a><br/>In an effort to help people struggling financially due to the COVID-19 outbreak, local businessman and philanthropist T. Denny Sanford has generously pledged $1 million to the One Sioux Falls Fund.</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Mar 19, 2020</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="covid-19-relief-fund-established/index.html" style="font-size:20px;">COVID-19 Relief Fund Established</a><br/>First PREMIER Bank and PREMIER Bankcard provided the lead gift for the One Sioux Falls Fund, a relief effort for those affected by COVID-19.</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Jan 30, 2020</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="first-premier-bank-plans-madison-branch/index.html" style="font-size:20px;">First PREMIER Bank Plans Madison Branch</a><br/>First PREMIER Bank announced today it will open a new location in Madison, South Dakota.</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Nov 11, 2019</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="south-dakota-housing-recognizes-top-lenders/index.html" style="font-size:20px;">South Dakota Housing Recognizes Top Lenders</a><br/>The South Dakota Housing Development Authority (SDHDA) has honored First PREMIER Bank with two top awards.</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Aug 30, 2019</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="beacoms-premier-donate-%2410m-to-dsu/index.html" style="font-size:20px;">Beacoms, PREMIER Donate $10m to DSU</a><br/>Miles and Lisa Beacom, along with First PREMIER Bank/PREMIER Bankcard, recently made a $10 million donation to help make Dakota State University’s new athletic complex a reality.</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Aug 29, 2019</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="first-premier-among-best-banks-to-work-for22/index.html" style="font-size:20px;">First PREMIER Among Best Banks to Work For</a><br/> First PREMIER Bank in South Dakota was recently named one of the “Best Banks to Work For" in 2019 by American Banker magazine.</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Jun 26, 2019</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="donantions-will-help-reopen-theatre/index.html" style="font-size:20px;">Donations Will Help Reopen Theatre</a><br/>The silver screen is returning to Downtown Sioux Falls, thanks in part to a $3.5 million donation from First PREMIER Bank and PREMIER Bankcard owner and philanthropist T. Denny Sanford.</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Jun 04, 2019</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="premier-donates-%2425000-to-ymca-and-leif-ericson-day-camp/index.html" style="font-size:20px;">PREMIER Donates $25,000 to YMCA and Leif Ericson Day Camp</a><br/>First PREMIER presented YMCA CEO Jeff Morgan with a $25,000 donation during the financial institution’s quarterly staff meeting in Sioux Falls.</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Mar 19, 2019</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="first-premier-bank-invests-in-the-future/index.html" style="font-size:20px;">First PREMIER Bank Invests in the Future</a><br/>New Main Office and Corporate Headquarters Will Provide Gateway to Downtown Sioux Falls</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Mar 05, 2019</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="website-features-first-premier-bank/index.html" style="font-size:20px;">Website Features First PREMIER Bank</a><br/>First PREMIER Bank was recently featured on the popular business website.</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Feb 19, 2019</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="premier-bankcard-welcomes-new-president/index.html" style="font-size:20px;">PREMIER Bankcard Welcomes New President</a><br/>PREMIER Bankcard Chief Executive Officer Miles Beacom is pleased to announce and welcome Matt Krall as the organization’s new president.</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Jan 30, 2019</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="harrisburg-woman-is-cruisin-free-this-winter/index.html" style="font-size:20px;">Harrisburg Woman is Cruisin Free This Winter</a><br/>Baby it’s cold outside, but thoughts of sandy beaches and exotic ports of call are keeping one Harrisburg woman toasty warm this week.</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Jan 22, 2019</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="dana-dykhouse-elected-chairman/index.html" style="font-size:20px;">Dana Dykhouse Elected Chairman</a><br/>First PREMIER Bank CEO Dana Dykhouse was recently elected Chairman of the Board for the South Dakota Chamber of Commerce & Industry.</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Jan 08, 2019</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="t.-denny-sanford-donates-%2455-million-to-childrens-home-society/index.html" style="font-size:20px;">T. Denny Sanford Donates $55 million to Children’s Home Society</a><br/>The largest and most transformational one-time gift ever received in its 125-year history.</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Sep 01, 2018</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="first-premier-among-best-banks-to-work-for2/index.html" style="font-size:20px;">First PREMIER Among Best Banks to Work For</a><br/> First PREMIER Bank in South Dakota was recently named one of the “Best Banks to Work For" in 2018 by American Banker magazine.</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">May 24, 2018</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="mike-rowe-to-promote-technical-education-in-south-dakota/index.html" style="font-size:20px;">Mike Rowe to Promote Technical Education in South Dakota</a><br/>Mike Rowe will be coming to South Dakota September 20, 2018.</p><br clear=all/></div></div><div class="col-md-12 "><div class="pressRoom"><span class="col-md-3" style="font-size:20px;">Apr 30, 2018</span><p class="col-md-9"> <b class="upper">Press Release</b><br/> <a href="premier-sponsors-new-prca-rodeo-series/index.html" style="font-size:20px;">PREMIER Sponsors New PRCA Rodeo Series</a><br/>Sutton Rodeo of South Dakota is bringing the Professional Rodeo Cowboy’s Association’s (PRCA) newest competition series to Denny Sanford PREMIER Center on Sept. 28-29, 2018.</p><br clear=all/></div></div>
                    </div>
                </div>
            </div>
        </div>

    </section>
<style>
    b { font-weight : bold !important; }
</style></div></div>
    <script>
        $('a.readmore').hide();
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
 <p>Member FDIC | <img src="../../../../Static/img/equalhousinglender.png" alt="Equal Housing Lender" title="Equal Housing Lender" />Equal Housing Lender</p>            </div>
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
    <div class="smallLogo"><a href="../../../index.html" title="First PREMIER Bank - Home"><img src="../../../../Static/gfx/Logo.png" style="max-width:100%;" /></a></div>
    <script type="text/javascript" src="../../../../../dl.episerver.net/13.4.4.1/epi-util/find.js"></script>
<script type="text/javascript">
if(FindApi){var api = new FindApi();api.setApplicationUrl('../../../../index.html');api.setServiceApiBaseUrl('../../../../find_v2/index.html');api.processEventFromCurrentUri();api.bindWindowEvents();api.bindAClickEvent();api.sendBufferedEvents();}
</script>

    <script type="text/javascript" src="../../../../Static/js/pushy.js"></script>
    <script type="text/javascript" src="../../../../Static/js/Blocks_2019062002.js"></script>
@endsection