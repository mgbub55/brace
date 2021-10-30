

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
        .flex-viewport{width:730px;margin:0 auto;}
    </style>
<div class="row equal-height"><div class="block b71block  col-md-12">

<div class="b71-community">
<ul><li><a href="../../index.html">Community</a></li><li><a href="../index.html">Collegiate Support</a></li></ul>    <h1>Beacom Institute of Technology</h1>
    <h3> State-of-the-Art Cybersecurity Education in Madison, SD</h3>
</div>
</div><div class="block b72block  col-md-12">
<div class="b72-block">
    <img src="../../../../../../contentassets/aa05f8ea88124839a84ad04aa984a8f4/0.5.16.3.1_b-44_hero_bc.png" alt="Miles Beacom at podium" title="Miles Beacom at podium"/>
</div>
</div><div class="block b76block  col-md-12">
<div class="b76-block">
    <div class="container">
        <!--Paragraph Large -->
            <div class="row">
                <div class="col-lg-2 col-md-1 col-sm-1 col-xs-12"></div>
                <div class="col-lg-8 cols-md-10 col-sm-10 col-xs-12">
<p>On November 25, 2013, philanthropist T. Denny Sanford, together with PREMIER Bankcard CEO Miles Beacom and his wife Lisa, donated $5 million to enhance Dakota State University&rsquo;s cybersecurity programs.&nbsp;<br /><br />The gift was used to help construct a state-of-the-art facility, the Beacom Institute of Technology, where students are trained in the latest technological and cyber security advancements. The building also provides ample space for collaboration of faculty across disciplines. &nbsp;<br /><br />In recognition of the gift, DSU also renamed its college of computing to the Beacom College of Computer and Cyber Sciences. </p>
<ul>
<li>The $11.4 million Beacom Institute of Technology is designed specifically to meet the needs of students in tech-intensive programs and cyber security.</li>
<li>The Beacom College of Computer and Cyber Sciences offers undergraduate and graduate level courses. It&rsquo;s first university to partner with the National Security Agency (NSA) to offer continuing education and training for NSA employees.</li>
<li>Dakota State University is a recognized leader in cybersecurity and holds four significant Centers of Academic Excellence Designations from the NSA and Department of Homeland Security.</li>
<li>The most prestigious designation is as a Cyber Defense Consultative Regional Resource Center&mdash;one of only four university-based centers in the nation.&nbsp;<br /><br /></li>
</ul>
<p>&nbsp;</p>
                </div>
                <div class="col-lg-2 col-md-1 col-sm-1 col-xs-12"></div>
            </div>
    </div>
</div></div><div class="block b40block  col-md-12">
<link href="../../../../../../Content/flexslider.css" rel="stylesheet" />
<link href="../../../../../../Content/FlexiS.css" rel="stylesheet" />
<style>
    .carousel-inner>.item>img, .carousel-inner>.item>a>img { width: 100%;}
    @media screen and (max-width: 767px) {
        #slider { padding-left:0px;}
        .carousel-control .glyphicon-chevron-left img { width:100%;}
        .carousel-control .glyphicon-chevron-right img { width:100%;}
    }
</style>


<script src="../../../../../../Static/js/jquery.flexslider.js"></script>
<script type="text/javascript">


    $(window).on('load', function () {

        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 210,
            itemMargin: 5,
            asNavFor: '#slider'
        });

        $('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });

</script>

<section>

    <div class="container">
        <section class="slider">
            <div id="slider" class="flexslider b40flexislider">
                <ul class="slides">
                    <li><a class="b40thumbnail" id=carousel-selector-0><img src=../../../../../../contentassets/f2ba6897c4014a5da6bd621fb90e7c0f/0.5.16.3.1_b-40_alt1_gb.png></a> </li><li><a class="b40thumbnail" id=carousel-selector-1><img src=../../../../../../contentassets/f2ba6897c4014a5da6bd621fb90e7c0f/0.5.16.3.1_b-40_alt2_bc.png></a> </li><li><a class="b40thumbnail" id=carousel-selector-2><img src=../../../../../../contentassets/f2ba6897c4014a5da6bd621fb90e7c0f/0.5.16.3.1_b-40_alt3_building.png></a> </li><li><a class="b40thumbnail" id=carousel-selector-3><img src=../../../../../../contentassets/f2ba6897c4014a5da6bd621fb90e7c0f/0.5.16.3.1_b-40_alt4_rise.png></a> </li>
                </ul>
            </div>
            <div id="carousel" class="flexslider b40thumbslider">
                <ul class="slides">
                    <li><a class="b40thumbnail" id=carousel-selector-0><img src=../../../../../../contentassets/f2ba6897c4014a5da6bd621fb90e7c0f/0.5.16.3.1_b-40_alt1_gb.png></a> </li><li><a class="b40thumbnail" id=carousel-selector-1><img src=../../../../../../contentassets/f2ba6897c4014a5da6bd621fb90e7c0f/0.5.16.3.1_b-40_alt2_bc.png></a> </li><li><a class="b40thumbnail" id=carousel-selector-2><img src=../../../../../../contentassets/f2ba6897c4014a5da6bd621fb90e7c0f/0.5.16.3.1_b-40_alt3_building.png></a> </li><li><a class="b40thumbnail" id=carousel-selector-3><img src=../../../../../../contentassets/f2ba6897c4014a5da6bd621fb90e7c0f/0.5.16.3.1_b-40_alt4_rise.png></a> </li>
                </ul>
            </div>
        </section>
    </div>

    

</section>
<!-- FlexSlider -->
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
