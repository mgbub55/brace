

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


    <style>
    .b44header  { min-height:245px;width:100%; background:#fff url(../../../../../Static/img/CustomBlocks/B44/leader_bg.jpg) no-repeat; float:left; padding-top:60px;}
    .xhtml p    { color:#4a6375; font-size: 14px; line-height:22px; font-family: 'Prompt-Light'; text-shadow:none; width:100%; }
    </style>
<section class="row-full">
    <div class="b44header">
        <div class="container">
            <h1>PREMIER Donates $50 Million for Scholarship Program</h1>
            
<ul>
    
        <li>
            <a href="../../index.html">About Us</a> 
        </li>
    
        <li>
            <a href="../index.html">Press Room</a> 
        </li>
    
        <li>
            <a href="index.html">PREMIER Donates $50 Million for Scholarship Program</a> 
        </li>
    
</ul>
                <img class="img-responsive" src="../../../../../contentassets/719083ee349141bfb4325b63aa31487f/scholarship-photo.jpg" alt="Pictured from left are: SDSU President Dr. Barry Dunn, PREMIER Bankcard CEO Miles Beacom, South Dakota Governor Kristi Noem and First PREMIER Bank CEO Dana Dykhouse" border="0" />
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div class="b4anywhere_banking" style="width:100%;padding-left:10px;">
                <h2 style="text-align:left !important;">PREMIER Donates $50 Million for Scholarship Program</h2>
                <div class="xhtml">
                    <p>FOR IMMEDIATE RELEASE: January 6, 2020<br />Contact: Brenda Bethke<br />First PREMIER Bank, Sioux Falls, South Dakota<br />Phone:(605) 838-8103<br />Email: <a href="mailto:Brenda.Bethke@firstpremier.com">Brenda.Bethke@firstpremier.com</a></p>
<p><br />$50 MILLION GIFT KICKSTARTS FIRST NEED-BASED SCHOLARSHIP IN SOUTH DAKOTA</p>
<p>PREMIER Scholarship Gives Opportunity to Students Who Need It Most</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>SIOUX FALLS&mdash;First PREMIER Bank, PREMIER Bankcard and T. Denny Sanford announced today a historic gift of $50 million to establish a need-based scholarship in South Dakota. The $50 million gift is just the start of what will be a $200 million endowment to fund future need-based scholarships in perpetuity.&nbsp;</p>
<p>&nbsp;</p>
<p>&ldquo;Today&rsquo;s announcement is historic for South Dakota and will help us retain talented young people in our state for generations,&rdquo; said South Dakota Governor Kristi Noem. &ldquo;We&rsquo;ve identified the need for this type of scholarship for years, and I'm asking the legislature to match this incredibly generous gift&nbsp;so that we can continue to make South Dakota stronger for our kids and grandkids.&rdquo;</p>
<p>&nbsp;</p>
<p>South Dakota is the only state in the country that does not offer need-based scholarships to public or private universities. Initially, the PREMIER Scholarship will be awarded to eligible students at each of the six public universities&mdash;South Dakota State University, University of South Dakota, Dakota State University, Black Hills State University, Northern State University&nbsp;and the South Dakota School of Mines and Technology&mdash;along with Augustana University and the University of Sioux Falls. The amount of money available to each university will be pro-rated based upon each school&rsquo;s enrollment, with allocations ranging between $200,000 to $1.25 million per school.</p>
<p>&nbsp;</p>
<p>&ldquo;The PREMIER Scholarship Fund will not only change the landscape of South Dakota&rsquo;s higher education, but it will provide a real, lasting impact for students who couldn&rsquo;t afford to go to college otherwise,&rdquo; said Miles Beacom, CEO of PREMIER Bankcard. &ldquo;PREMIER is passionate about providing educational opportunities that keep talented individuals in our state, and it&rsquo;s time to make this happen.&rdquo;</p>
<p>&nbsp;</p>
<p>In exchange for their PREMIER Scholarship, recipients will be required to work in South Dakota for three years following graduation. Students qualify for the scholarship based on a formula that takes the cost of attendance (tuition, fees, room/board, books, etc.) less the family income and expected contribution to determine financial need. PREMIER is hopeful this announcement will encourage South Dakota lawmakers, area businesses and local philanthropists to step up and help provide the additional funding.</p>
<p>&nbsp;</p>
<p>&ldquo;While this is a historic announcement for education, it shouldn&rsquo;t overshadow the very real impact that the Build Dakota Scholarship is having in our state every day,&rdquo; said First PREMIER Bank CEO, Dana Dykhouse. &ldquo;The Build Dakota Scholarship has allowed us to see first-hand how successful a program can be when you create the right partnerships between the private sector, education institutions and governments. It&rsquo;s why we recently announced another investment in Build Dakota and why we modeled the PREMIER Scholarship Fund in the same fashion.&rdquo;</p>
<p>&nbsp;</p>
<p>The Build Dakota Scholarship Fund was established in 2015 and has allowed 1,900 students the opportunity to graduate debt-free and enter the workforce in high-need industries in South Dakota. The scholarship was created to help solve the state&rsquo;s workforce shortage by attracting and retaining tech school graduates. With an initial contribution of $50 million the program offers full-ride scholarships for students who seek a degree in high-need fields. In addition to the PREMIER Scholarship Fund announcement, Dykhouse announced an additional $20 million donation for the Build Dakota Scholarship from the PREMIER organization and the State of South Dakota.</p>
<p>&nbsp;</p>
<p>To view photos from today's event <a href="https://u7061146.ct.sendgrid.net/ls/click?upn=4tNED-2FM8iDZJQyQ53jATUft0CKZ7Cd7vvGAOCgAe-2BFjF3lW0JqbDNgyndkr8GT2svZS2HBLIfHNkPJ5ya27E03VTq-2BvyrO40Iov08Aru-2BBk-3DTxuw_YdvkyKX4DDE7UAJZXgNW9nPDIFPCr7eWbZ-2F8Kn1DjW5UwyuVSBxwgKzUiR1L4OZpUcoPorBcWQ7Ttt2DADCCrouVvn46M2cs935vwaAorNIqINiwl1zVop2rmAi4-2Bx60ZCS4INPZxBnFqQEjSRbD45W-2B-2FsJrsrytd02mhOWtCk8u6xaV70RH8hje6NGQHHPvfmpICPIUpHaHrIKHRl1SQMBw1SZYu-2FAzgdXH6CvvSoLKoaDB-2FDttQQyH8DkIa9LV9AX6qhCOdpb-2FLiv2mEuKCuT0YgqcdoY6H-2BS-2F69BjLUlLmXKcYcyYhmHCfs9LxECBJ8ArP0FqO7kNrSHGf3-2BWnPF5PlZvg-2FsVq8q8QjC2dhM-3D">click here</a>.</p>
<p>&nbsp;</p>
<p>-&nbsp; ### -</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>About First PREMIER Bank and PREMIER Bankcard</p>
<p>First PREMIER Bank and PREMIER Bankcard are headquartered in Sioux Falls, South Dakota with facilities in Watertown, Huron and Dakota Dunes. First PREMIER employs 2,400 people in South Dakota and is considered one of the strongest financial organizations in the nation. The two companies support more than 600 community organizations and its ownership, leadership team and employees have donated more than $1.2 billion to South Dakota groups since 1995.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
                </div>
                
            </div>
        </div>
    </div>
</section>



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
            <a href="../../careers/index.html">Careers</a> 
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
            <a href="../../../resources/first-premier-privacy-statement-2020/index.html">Privacy Notice &amp; Statement</a> 
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
 <p>Member FDIC | <img src="../../../../../Static/img/equalhousinglender.png" alt="Equal Housing Lender" title="Equal Housing Lender" />Equal Housing Lender</p>            </div>
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
    .showehllogo { background: url('../../../../../Static/img/EHLlogo%20white.png') 230px 0px no-repeat; background-size: 24px 24px }
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
    <div class="smallLogo"><a href="../../../../index.html" title="First PREMIER Bank - Home"><img src="../../../../../Static/gfx/Logo.png" style="max-width:100%;" /></a></div>
    <script type="text/javascript" src="../../../../../../dl.episerver.net/13.4.4.1/epi-util/find.js"></script>
<script type="text/javascript">
if(FindApi){var api = new FindApi();api.setApplicationUrl('../../../../../index.html');api.setServiceApiBaseUrl('../../../../../find_v2/index.html');api.processEventFromCurrentUri();api.bindWindowEvents();api.bindAClickEvent();api.sendBufferedEvents();}
</script>

    <script type="text/javascript" src="../../../../../Static/js/pushy.js"></script>
    <script type="text/javascript" src="../../../../../Static/js/Blocks_2019062002.js"></script>
@endsection