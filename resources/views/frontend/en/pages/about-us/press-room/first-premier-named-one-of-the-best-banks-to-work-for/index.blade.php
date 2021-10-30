

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
            <h1></h1>
            
<ul>
    
        <li>
            <a href="../../../../index.html">First PREMIER Bank</a> 
        </li>
    
        <li>
            <a href="../../index.html">About Us</a> 
        </li>
    
        <li>
            <a href="../index.html">Press Room</a> 
        </li>
    
        <li>
            <a href="index.html">First PREMIER Named One of the Best Banks to Work For</a> 
        </li>
    
</ul>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div class="b4anywhere_banking" style="width:100%;padding-left:10px;">
                <h2 style="text-align:left !important;">First PREMIER Named One of the “Best Banks to Work For” for the 6th Consecutive Year</h2>
                <div class="xhtml">
                    <p><strong>FOR IMMEDIATE RELEASE</strong><br />First PREMIER Named One of the &ldquo;Best Banks to Work For&rdquo; for the 6th Consecutive Year<br />CONTACT: Dave Rozenboom, First PREMIER Bank President<br /><br /></p>
<p>SIOUX FALLS&mdash; First PREMIER Bank was recently honored as one of American Banker magazine&rsquo;s &ldquo;Best Banks to Work For.&rdquo; This is the sixth consecutive year First PREMIER has made the list, which judges financial institutions on corporate culture, employee benefits, financial and physical wellness programs, and workplace atmosphere.<br /><br />&ldquo;This honor is truly a reflection of our 370 amazing employees,&rdquo; said First PREMIER Bank President Dave Rozenboom. &ldquo;We have an incredible team of individuals who embrace what we call the PREMIER Way &ndash; our shared vision, views and values. And at the center of this are PREMIER&rsquo;s customers, communities and employees.&rdquo;<br /><br /></p>
<p>Rozenboom said this year&rsquo;s ranking is especially unique given the challenges presented by COVID-19. As part of its 2020 ranking, the publication asked each financial institution how they kept their employees safe and engaged during the ongoing crisis.<br /><br /></p>
<p>Rozenboom said the bank worked closely with local and regional health officials, adopted the Centers for Disease Control guidelines and continued to embrace the PREMIER Way.<br /><br /></p>
<p>&ldquo;We focused on our core values and the things that are important to us &ndash; our customers, communities and employees,&rdquo; Rozenboom said. &ldquo;We provided an additional week of paid time off to our employees and awarded each person a one-time COVID payment to cover unexpected expenses like extra childcare costs while students were out of school, as an example.&rdquo;<br /><br /></p>
<p>In addition, Rozenboom said employees were allowed to work from home if their responsibilities allowed and additional measures were taken to ensure the safety of employees and customers within the bank facilities. As a result, Rozenboom said employees rose to the challenge and went above and beyond to help customers.<br /><br /></p>
<p>&ldquo;We proactively reached out to customers and asked what we could do for them,&rdquo; Rozenboom said. &ldquo;We also had about 80 members of the First PREMIER team working around the clock to prepare, process and submit nearly $115 million worth of Paycheck Protection Program (PPP) loans for businesses and non-profits in eastern South Dakota.&rdquo;<br /><br /></p>
<p>-MORE-<br /><br /></p>
<p>First PREMIER Bank, its leadership and sister organization, PREMIER Bankcard, also provided more than $1.8 million for local relief programs in Sioux Falls, Watertown, Dakota Dunes and Huron. The bank also honored financial commitments and sponsorships, even though many events were canceled.<br /><br /></p>
<p>&ldquo;I am so incredibly proud of our team every year, but this year, I am especially proud of how First PREMIER Bank employees handled the challenges and continued to serve our customers with first-class PREMIER service,&rdquo; said Rozenboom.<br /><br /></p>
<p>&ldquo;At First PREMIER Bank, we value our people&mdash;that&rsquo;s what makes this bank one of the best to work for. When you treat people right, they treat our customers right.&rdquo;<br /><br /></p>
<p>-30-</p>
<p><br /><strong>About First PREMIER Bank</strong><br />First PREMIER Bank is a locally-owned community bank with 17 bank locations in eastern South Dakota. Together with PREMIER Bankcard, First PREMIER Bank supports nearly 700 local and regional organizations and is one of the largest contributors to our local United Way. First PREMIER Bank provides various financial services, including personal, business and ag banking, mortgage lending, trust and investment services, treasury services and ATM funding. For more information, visit <a href="../../../../index.html">www.firstpremier.com</a>.<br /><br /></p>
<p><strong>American Banker Magazine&rsquo;s &ldquo;Best Banks to Work For&rdquo;</strong><br />For more information on American Banker&rsquo;s &ldquo;Best Banks to Work For&rdquo;, visit <a href="http://www.americanbanker.com/best-banks-to-work-for">www.americanbanker.com/best-banks-to-work-for</a><br /><br /></p>
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
