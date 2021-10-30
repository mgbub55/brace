

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
<div class="row equal-height"><div class="block b71block  col-md-12">

<div class="b71-community">
<ul><li><a href="../../index.html">Community</a></li><li><a href="../index.html">Philanthropic Giving</a></li></ul>    <h1>Splash Pad at Dakota Dunes</h1>
    <h3>PREMIER Provides Cool Summer Fun</h3>
</div>
</div><div class="block b72block  col-md-12">
<div class="b72-block">
    <img src="../../../../../../contentassets/c016de9369b04c93a27aabc52d63c7d2/0.5.16.2.2_b-44_hero_splash.png" alt="two boys in pool with water splashing" title="two boys in pool with water splashing"/>
</div>
</div><div class="block b76block  col-md-12">
<div class="b76-block">
    <div class="container">
        <!--Paragraph Large -->
            <div class="row">
                <div class="col-lg-2 col-md-1 col-sm-1 col-xs-12"></div>
                <div class="col-lg-8 cols-md-10 col-sm-10 col-xs-12">
<p>During the summer of 2016, First PREMIER Bank and PREMIER Bankcard made it a little cooler for children of all ages and abilities with a $30,000 donation to the Miracle League of Sioux City.</p>
<p><br />Our gift helped fund the final phase of an accessible playground designed especially for people with disabilities. Located in the Riverside Park area, the complex includes: a rubber surfaced baseball field, playground, splash pad, miniature golf course, music park, walking path and a concession/restroom facility. The PREMIER donation was earmarked for splash pad development for cool summer enjoyment.</p>
<p><br />&ldquo;This is everything we ever wanted.&rdquo; said Kevin Negaard, Miracle Field Executive Director. &ldquo;The integration is unique and it was done with excellence. This was truly a community project and we are very proud of the finished product. We&rsquo;re just incredibly blessed.</p>
<p><br />We hope you&rsquo;ll have a chance to visit the park this summer. It is FREE, open to the public and a great place for fun and play with your family. And &hellip; the miniature golf course is already making a name for itself. At more than 222-feet, the ninth hole features the longest mini golf fairway in the world!</p>
<p><br />----------</p>
<p>About the Miracle League</p>
<p><br />The Miracle League of Sioux City is a nonprofit organization that provides recreational opportunities for children and adults with disabilities. Because of overwhelming support from local organizations and individuals, the $1.6 million Miracle League of Sioux City complex operates debt free.</p>
<p>&nbsp;</p>
                </div>
                <div class="col-lg-2 col-md-1 col-sm-1 col-xs-12"></div>
            </div>
    </div>
</div></div><div class="block b26block  col-md-12">



<style>
    .carousel-control:focus, .carousel-control:hover, .carousel-control.left, .carousel-control.right {
        background: none !important;
    }
    .b26line_credit_main .carousel-inner { ; }
    
    .white-background h2, .white-background .xhtml, .white-background .xhtml p,
    .grey-background h2, .grey-background .xhtml, .grey-background .xhtml p
    {
        color: #000;
    }
</style>
<script>
    var alternateBackground = "False";
    $(document).ready(function () {
        $('#myCarousel-').carousel({
            interval: 16000
        })

        if (alternateBackground.toLowerCase() == "true") {
            $("#b26linecredit").addClass("alternate_background");
        } else {
            $("#b26linecredit").addClass("primary_background");
        }
    });

</script>

<section class="row-full">
    <div class="b26line_credit_main" id="b26linecredit">
        <div class="container">

                <h2>Giving Back to Our Community</h2>

                <div class="xhtml"><p>Partner with a bank that gives back generously to your community. First PREMIER Bank and PREMIER Bankcard support over 700 organizations, and last year alone, PREMIER associates dedicated over 32,000 hours in community service!</p></div>

                <p><a href="../../index.html" class="b26learnmore">Learn More </a></p>
            <div class="row">
                <div class="col-md-12 hidden-xs hidden-sm">
                    <div class="carousel" id="myCarousel-" data-interval="false">
                        <div class="carousel-inner">
                            <div class='item active'><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad'><div class='b26line_credit_loans_left'><img src='../../../../../../contentassets/7e2308f5afce4bd9bb0596e58aa4d30f/ymabii-about_b26_alt1_ph-min.png' alt='children in classroom'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><a href='../index.html'><h3 class='deckspan'>Philanthropic Giving</h3></a></div><h3><br clear='all'/><div class="xhtml"><p>Learn how PREMIER contributions have benefited organizations throughout our region.</p></div></h3></div></div><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans b26line_personal_loans no-pad'><div class='b26line_credit_loans_left'><img src='../../../../../../contentassets/7bde9901f8b04998828c7da54743f12c/ymabii-about_b26_alt2_comserv-min.png' alt='two men talking'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><a href='../../community-service/index.html'><h3 class='deckspan'>Community Service</h3></a></div><h3><br clear='all'/><div class="xhtml"><p>See how PREMIER associates actively serve within our community!</p></div></h3></div></div><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad last'><div class='b26line_credit_loans_left'><img src='../../../../../../contentassets/42e0a4ba9712456cb5c8369c0ade74c1/ymabii-about_b26_alt3_colsupport-min.png' alt='college students'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><a href='../../collegiate-support/index.html'><h3 class='deckspan'>Collegiate Support</h3></a></div><h3><br clear='all'/><div class="xhtml"><p>Learn how PREMIER supports schools, colleges, universities and students to secure a brighter future!</p></div></h3></div></div></div><div class='item'><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad'><div class='b26line_credit_loans_left'><img src='../../../../../../contentassets/3151f5b1184b4ebea41405944bc85cac/ymabii-about_b26_alt4_sponsor-min.png' alt='woman and lemur at Great Plains Zoo'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><a href='../../sponsorship/index.html'><h3 class='deckspan'>Sponsorships</h3></a></div><h3><br clear='all'/><div class="xhtml"><p>We actively sponsor teams, events, athletics and other activities throughout our community.</p></div></h3></div></div><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans b26line_personal_loans no-pad'><div class='b26line_credit_loans_left'><img src='../../../../../../contentassets/9ea8aad9972348dba81e33302c8658a5/ymabii-about_b26_alt5_celebrate-min.png' alt='Luke Bryan at Dana J Dykhouse Stadium'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><a href='../../celebration/index.html'><h3 class='deckspan'>Celebrations & Appreciations</h3></a></div><h3><br clear='all'/><div class="xhtml"><p>Taking time to celebrate the contributions of our employees is important at PREMIER!</p></div></h3></div></div></div>
                        </div>
                    </div>
                </div>
                <div class="b26Mobile col-sm-6 hidden-md hidden-lg" style="left:-8px;">
                    <center>
                    <div class="b26MobileCard" style="width:345px;min-height:700px;">
                        <div class='item'><div class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../../../../contentassets/7e2308f5afce4bd9bb0596e58aa4d30f/ymabii-about_b26_alt1_ph-min.png' alt='children in classroom'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><a href='../index.html'><h3 class='deckspan'>Philanthropic Giving</h3></a></div><h3><br clear='all'/><div class="xhtml"><p>Learn how PREMIER contributions have benefited organizations throughout our region.</p></div></h3></div></div></div><div class='item'><div class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../../../../contentassets/7bde9901f8b04998828c7da54743f12c/ymabii-about_b26_alt2_comserv-min.png' alt='two men talking'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><a href='../../community-service/index.html'><h3 class='deckspan'>Community Service</h3></a></div><h3><br clear='all'/><div class="xhtml"><p>See how PREMIER associates actively serve within our community!</p></div></h3></div></div></div><div class='item'><div class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../../../../contentassets/42e0a4ba9712456cb5c8369c0ade74c1/ymabii-about_b26_alt3_colsupport-min.png' alt='college students'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><a href='../../collegiate-support/index.html'><h3 class='deckspan'>Collegiate Support</h3></a></div><h3><br clear='all'/><div class="xhtml"><p>Learn how PREMIER supports schools, colleges, universities and students to secure a brighter future!</p></div></h3></div></div></div><div class='item'><div class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../../../../contentassets/3151f5b1184b4ebea41405944bc85cac/ymabii-about_b26_alt4_sponsor-min.png' alt='woman and lemur at Great Plains Zoo'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><a href='../../sponsorship/index.html'><h3 class='deckspan'>Sponsorships</h3></a></div><h3><br clear='all'/><div class="xhtml"><p>We actively sponsor teams, events, athletics and other activities throughout our community.</p></div></h3></div></div></div><div class='item'><div class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../../../../contentassets/9ea8aad9972348dba81e33302c8658a5/ymabii-about_b26_alt5_celebrate-min.png' alt='Luke Bryan at Dana J Dykhouse Stadium'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><a href='../../celebration/index.html'><h3 class='deckspan'>Celebrations & Appreciations</h3></a></div><h3><br clear='all'/><div class="xhtml"><p>Taking time to celebrate the contributions of our employees is important at PREMIER!</p></div></h3></div></div></div>
                    </div>
                    </center>
                </div>

                    <a class="left carousel-control" href="#myCarousel-" data-slide="prev"><img src="../../../../../../Static/img/CustomBlocks/B26/left_arrow.png" alt="First PREMIER Bank"></a>
                    <a class="right carousel-control" href="#myCarousel-" data-slide="next"><img src="../../../../../../Static/img/CustomBlocks/B26/right_arrow.png" alt="First PREMIER Bank"></a>
            </div>
        </div>
    </div>
</section>


</div></div>

 

<div class="row-full footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 footerCol1">
                <div class="footerHeader">Company</div>
                
<ul>
    
        <li>
            <a href="../../../index.html">About Us</a> 
        </li>
    
        <li>
            <a href="../../../../../index.html">First PREMIER Bank</a> 
        </li>
    
        <li>
            <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a> 
        </li>
    
        <li>
            <a href="../../../leadership-team/index.html">Leadership</a> 
        </li>
    
        <li>
            <a href="../../index.html">Community</a> 
        </li>
    
        <li>
            <a href="../../../careers/index.html">Careers</a> 
        </li>
    
</ul>
                <br />
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 footerCol2">
                <div class="footerHeader">Customers</div>
                
<ul>
    
        <li>
            <a href="../../../../../index.html">Personal Banking</a> 
        </li>
    
        <li>
            <a href="../../../../../small-business/index.html">Small Business</a> 
        </li>
    
        <li>
            <a href="../../../../../commercial/index.html">Commercial</a> 
        </li>
    
</ul>
                <br />
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 footerCol3">
                <div class="footerHeader">Help &amp; Contact</div>
                
<ul>
    
        <li>
            <a href="../../../../quick-links/customer-care/index.html">Customer Care</a> 
        </li>
    
        <li>
            <a href="../../../../quick-links/locations/index.html">Locations</a> 
        </li>
    
        <li>
            <a href="../../../../quick-links/customer-care/index.html">BANK: 800-501-6535</a> 
        </li>
    
        <li>
            <a href="https://www.mypremiercreditcard.com/">CREDIT CARD: 800-987-5521</a> 
        </li>
    
        <li>
            <a href="../../../../../index.html">Routing Number: 091408598</a> 
        </li>
    
</ul>
                <br />
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 footerCol4">
                <div class="footerHeader">Legal Notices</div>
                
<ul>
    
        <li>
            <a href="../../../../resources/first-premier-privacy-statement-2020/index.html">Privacy Notice &amp; Statement</a> 
        </li>
    
        <li>
            <a href="../../../../resources/legal-disclosures/index.html">Legal Disclosures</a> 
        </li>
    
        <li>
            <a href="../../../../resources/cookie-policy/index.html">Cookie Policy</a> 
        </li>
    
</ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-top:50px;">
 <p>Member FDIC | <img src="../../../../../../Static/img/equalhousinglender.png" alt="Equal Housing Lender" title="Equal Housing Lender" />Equal Housing Lender</p>            </div>
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
    .showehllogo { background: url('../../../../../../Static/img/EHLlogo%20white.png') 230px 0px no-repeat; background-size: 24px 24px }
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
    <div class="smallLogo"><a href="../../../../../index.html" title="First PREMIER Bank - Home"><img src="../../../../../../Static/gfx/Logo.png" style="max-width:100%;" /></a></div>
    <script type="text/javascript" src="../../../../../../../dl.episerver.net/13.4.4.1/epi-util/find.js"></script>
<script type="text/javascript">
if(FindApi){var api = new FindApi();api.setApplicationUrl('../../../../../../index.html');api.setServiceApiBaseUrl('../../../../../../find_v2/index.html');api.processEventFromCurrentUri();api.bindWindowEvents();api.bindAClickEvent();api.sendBufferedEvents();}
</script>

    <script type="text/javascript" src="../../../../../../Static/js/pushy.js"></script>
    <script type="text/javascript" src="../../../../../../Static/js/Blocks_2019062002.js"></script>
@endsection