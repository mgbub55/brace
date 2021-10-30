

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
            <h1>GOVERNOR NOEM SIGNS NEED-BASED SCHOLARSHIP LEGISLATION</h1>
            
<ul>
    
        <li>
            <a href="../../index.html">About Us</a> 
        </li>
    
        <li>
            <a href="../index.html">Press Room</a> 
        </li>
    
        <li>
            <a href="index.html">GOVERNOR NOEM SIGNS NEED-BASED SCHOLARSHIP LEGISLATION</a> 
        </li>
    
</ul>
                <img class="img-responsive" src="../../../../../contentassets/03c3018adee740d79129da80def57b1f/freedom-scholarship-press-room-image.png" border="0" />
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div class="b4anywhere_banking" style="width:100%;padding-left:10px;">
                <h2 style="text-align:left !important;">GOVERNOR NOEM SIGNS NEED-BASED SCHOLARSHIP LEGISLATION</h2>
                <div class="xhtml">
                    <p>March 18, 2021</p>
<p><br />GOVERNOR NOEM SIGNS NEED-BASED SCHOLARSHIP LEGISLATION <br />AND ANNOUNCES ADDITIONAL PARTNERS <br />Governor Noem, Sanford and Avera join PREMIER in raising <br />$175 million for need-based scholarships<br /><br /></p>
<p>SIOUX FALLS &ndash; Governor Kristi Noem signed legislation this morning committing $50 million for a needs-based scholarship program in South Dakota. She was joined by officials from Avera Health and Sanford Health, which each pledged $12.5 million to supplement $100 million in private funding from First PREMIER Bank, PREMIER Bankcard and philanthropist T. Denny Sanford.<br /><br /></p>
<p>Today&rsquo;s announcement boosted the scholarship fund&rsquo;s endowment to $175 million. Officials say $200 million is needed to help ensure all South Dakota students have an opportunity to attend college regardless of their financial situation. South Dakota lawmakers approved the State&rsquo;s appropriation during the recent 2021 legislative session.<br /><br /></p>
<p>&ldquo;With this historic scholarship, we&rsquo;ll be giving thousands of promising young South Dakotans the opportunity that they need to succeed,&rdquo; said Governor Kristi Noem. &ldquo;I challenged legislators to get this across the finish line, and they got it done. These dollars will sustain needs-based scholarships for South Dakota students far into the future, setting our kids and grandkids up for long-term success. I want to thank T. Denny Sanford, PREMIER, Avera Health, Sanford Health, and everyone else who has made this project a top priority.&rdquo;<br /><br /></p>
<p>In January, PREMIER announced a $100 million gift to create a needs-based scholarship for the state&rsquo;s six public universities, Augustana University and the University of Sioux Falls. Governor Noem then requested and secured $50 million from the South Dakota legislature for students attending the state&rsquo;s public, non-profit and tribal colleges.<br /><br /></p>
<p>PREMIER Bankcard CEO Miles Beacom said the program will have an immediate impact on both students and teachers in South Dakota. He added that it will also open the doors to possibilities that might have previously been unattainable.<br /><br /></p>
<p>&ldquo;Students in South Dakota will now understand that a post-secondary education is possible if they study hard and make proper choices,&rdquo; Beacom said. &ldquo;It has the potential to create tens of thousands of first-generation university attendees.&rdquo;<br /><br /></p>
<p>First PREMIER Bank CEO Dana Dykhouse echoed those sentiments, saying the time was right for South Dakota to have a scholarship program that focused upon students with financial need.<br /><br /></p>
<p>&ldquo;There is a definite gap that will be filled by this scholarship program,&rdquo; Dykhouse said. &ldquo;Once this program is in place, it will create a 25 percent increase in scholarship monies available in our state. I cannot thank Governor Noem and our South Dakota lawmakers enough for championing this program.&rdquo;<br /><br /></p>
<p>South Dakota is the only state in the country that does not currently offer need-based scholarships to public or private universities. The scholarship funds will be governed by a five-member board selected by the Governor. Allocations will be made from the South Dakota Community Foundation directly to each participating school, based on enrollment. Much like the PREMIER Scholarship and the Freedom Scholarship, future donors to the fund have the option to name their scholarship and direct which South Dakota universities receive the money.</p>
<p><br />- ### -<br /><br /></p>
<p>About First PREMIER Bank and PREMIER Bankcard<br />First PREMIER Bank and PREMIER Bankcard are headquartered in Sioux Falls, South Dakota with facilities in Watertown, Huron and Dakota Dunes. PREMIER employs 2,300 people in South Dakota and is considered one of the strongest financial organizations in the nation. The two companies support nearly 700 community organizations and its ownership, leadership team and employees have donated more than $1.5 billion to South Dakota groups since 1995. Member FDIC.<br /><br /></p>
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
