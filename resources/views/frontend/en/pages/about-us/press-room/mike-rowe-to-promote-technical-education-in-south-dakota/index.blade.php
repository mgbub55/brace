

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
        .xhtml p { color:#4a6375; font-size: 14px; line-height:22px; font-family: 'AvenirNext-Medium'; text-shadow:none; }
    </style>


    <style>
    .b44header  { min-height:245px;width:100%; background:#fff url(../../../../../Static/img/CustomBlocks/B44/leader_bg.jpg) no-repeat; float:left; padding-top:60px;}
    .xhtml p    { color:#4a6375; font-size: 14px; line-height:22px; font-family: 'Prompt-Light'; text-shadow:none; width:100%; }
    </style>
<section class="row-full">
    <div class="b44header">
        <div class="container">
            <h1>Mike Rowe to Promote Technical Education in South Dakota</h1>
            
<ul>
    
        <li>
            <a href="../../../../index.html">First PREMIER Bank</a> 
        </li>
    
        <li>
            <a href="../index.html">Press Room</a> 
        </li>
    
        <li>
            <a href="index.html">Mike Rowe</a> 
        </li>
    
</ul>
                <img class="img-responsive" src="../../../../../contentassets/37a704f096214f88a8b2e1b964192ee0/0.5.5.1_b-44_bdlogo-min.png" alt="Build Dakota Scholarship Fund Logo" border="0" />
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div class="b4anywhere_banking" style="width:100%;padding-left:10px;">
                <h2 style="text-align:left !important;">Executive Producer and Television Show Host Shares a Message About the Importance of Skilled Labor</h2>
                <div class="xhtml">
                    <p><strong>May 24, 2018 </strong><br /><strong>FOR IMMEDIATE RELEASE</strong></p>
<p><br />SIOUX FALLS, SD &ndash; Mike Rowe will be coming to South Dakota September 20, 2018, as part of A New Day in Tech Ed to help grow awareness for technical education and its role in addressing a skilled labor shortage in South Dakota. The United States, especially the Midwest, is currently experiencing a critical shortage of workers in fields like construction, automotive, welding and nursing.</p>
<p><br />Dana Dykhouse, Build Dakota Scholarship Board of Directors President and CEO of First PREMIER Bank, says Rowe&rsquo;s appearance is an excellent way to build more national and regional awareness of the technical education opportunities in South Dakota.</p>
<p><br />&ldquo;We have the same goal&mdash;training people to meet the ever-increasing demand for skilled labor,&rdquo; said Dykhouse.</p>
<p><br />Mike Rowe runs the mikeroweWORKS Foundation, a 501(c)(3) public charity that works to help close the skills gap by highlighting millions of vocational opportunities that people often overlook. The mikeroweWORKS Foundation challenges myths and misperceptions about these jobs and offers financial assistance to qualified people willing to learn a trade through the Work Ethic Scholarship Program. Through its efforts, it has granted or helped facilitate the granting of more than $5 million dollars in technical and vocational education for trade schools across the country.</p>
<p><br />Similarly, Build Dakota pays the tuition and fees for qualified students entering high-need workforce training programs at one of South Dakota&rsquo;s four technical institutes. Recipients are committed to giving three years of full-time employment in South Dakota in a high-needs field in exchange for the scholarship.</p>
<p><br />The Build Dakota scholarship fund began in 2014 with a $25 million gift from philanthropist T. Denny Sanford, which was matched by a $25 million future funds grant from South Dakota Governor Dennis Daugaard.</p>
<p><br />The initial $50 million will provide approximately 300 full scholarships over five years. Beginning in 2020, an endowment will award approximately 50 scholarships each year..</p>
<p><br />&ldquo;Mike Rowe&rsquo;s appearance is also our opportunity to reach out to more business and community leaders to create awareness of the opportunities in South Dakota,&rdquo; Dykhouse said.</p>
<p><br />Nearly 200 private sector partners from across South Dakota support the scholarship program. &ldquo;We want to keep granting scholarships well into the future and we need the help of private industry to do that,&rdquo; said Dykhouse.</p>
<p><br />Marcia Hultman, secretary of the South Dakota Department of Labor and Regulation, says the State is encouraged by the program&rsquo;s results so far, but says it&rsquo;s still too early to know its true impact on the state&rsquo;s workforce shortage.</p>
<p><br />&ldquo;Our first group of Build Dakota scholarship recipients are just now entering their second year of full-time employment commitment and all indications are that they will continue to work in the state beyond that,&rdquo; said Hultman.</p>
<p><br />Hultman said the Build Dakota scholarship fund has increased interest in skilled labor careers. Since 2014, Lake Area Tech (Watertown), Southeast Tech (Sioux Falls), Mitchell Tech (Mitchell) and Western Dakota Tech (Rapid City) have all experienced an upward trend in enrollment, pacing South Dakota ahead of the nation in two-year institution enrollment. Both Lake Area Tech and Southeast Tech say Build Dakota programs are running at capacity and they are pursuing or exploring expansion plans to meet the demand.</p>
<p><br />Build Dakota is open to both in-state and out-of-state students. Applications for the 2017-18 school year came from as far away as New Jersey and Alaska.</p>
<p><br />Mr. Rowe will speak with students and tour Lake Area Tech in Watertown, Southeast Tech and the Career and Technical Education Academy in Sioux Falls. He will end the day as the keynote speaker at the Junior Achievement 50th Anniversary Banquet in Sioux Falls. Some events will be open to the public, a full itinerary will be made available <a title="here" href="http://builddakotascholarships.com/NewDay" target="_blank" rel="noopener">here</a>. Mike Rowe&rsquo;s appearance is being sponsored by First PREMIER Bank and PREMIER Bankcard.</p>
<p><br />For additional information on Mike Rowe&rsquo;s visit to South Dakota, please contact Lawrence &amp; Schiller.</p>
<p><br />CONTACT: Mark Glissendorf, Lawrence &amp; Schiller <br />PHONE: 605-338-8000 <br />EMAIL: Mark.Glissendorf@l-s.com <br /><br />----------------------- <br />About Mike Rowe</p>
<p><br />From the Baltimore Opera to QVC shopping channel, Executive Producer and TV Show Host Mike Rowe has had hundreds of jobs and relished his role as a chronic freelancer. He&rsquo;s best known as the &ldquo;dirtiest man on TV,&rdquo; a title he earned on the hit TV series Dirty Jobs. He has narrated hundreds of documentaries about space, nature, dinosaurs, and how stuff works. He has also forged a handful of partnerships with iconic brands and filmed a boatload of Ford commercials. Most recently, Mike is in search of remarkable people making a difference in their communities on Facebook&rsquo;s groundbreaking series Returning the Favor. He also launched The Way I Heard It, a weekly five-minute podcast of short mysteries for the curious mind with a short attention span. In addition, Mike runs the mikeroweWORKS Foundation, a 501(c)(3) public charity that provides scholarships to people getting trained for skilled jobs that are in demand and has granted, or helped facilitate the granting of, more than $5 million in technical and vocational education for trade schools across the country. In his spare time, Mike keeps a lively conversation with more than 5 million Facebook friends, where he talks about everything from the musings of his persnickety terrier named Freddy to the merits and pitfalls of blind patriotism.</p>
<p><br />----------------------- <br />About <a title="Build SD Scholarship" href="../../community/collegiate-support/scholarship-and-internships/build-dakota-scholarship/index.html">Build Dakota Scholarships</a></p>
<p><br />Build Dakota is a scholarship program created through a $50 million investment funded by a $25 million donation from T. Denny Sanford and a $25 million contribution from the South Dakota Future Fund. Build Dakota Scholarships are awarded to students entering high-need workforce programs at South Dakota technical institutes, who in turn commit to working in that field in South Dakota for three years following graduation. The scholarship fund is governed by a board of directors.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
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