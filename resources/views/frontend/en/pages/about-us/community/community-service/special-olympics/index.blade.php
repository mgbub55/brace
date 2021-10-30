

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
<ul><li><a href="../../index.html">Community</a></li><li><a href="../index.html">Community Service</a></li></ul>    <h1>Special Olympics of South Dakota</h1>
    <h3>Celebrating Our Local Athletes</h3>
</div>
</div><div class="block b72block  col-md-12">
<div class="b72-block">
    <img src="../../../../../../contentassets/2351b57eb3634018b049f4ced772c860/0.5.5.17.4_b-44-hero_so.png" alt="two girls hugging" title="two girls hugging"/>
</div>
</div><div class="block b76block  col-md-12">
<div class="b76-block">
    <div class="container">
        <!--Paragraph Large -->
            <div class="row">
                <div class="col-lg-2 col-md-1 col-sm-1 col-xs-12"></div>
                <div class="col-lg-8 cols-md-10 col-sm-10 col-xs-12">
<section class="row-full b4background">
<div class="container">
<div class="b4anywhere_banking" style="width: 100%; padding-left: 10px;">
<h2 style="text-align: left !important;">Celebrating Our Local Athletes</h2>
<div class="xhtml">
<p>First PREMIER is committed to athletes of all ages and abilities. As part of this commitment, we have been actively involved in Special Olympics of South Dakota since 1988.</p>
<p><br />Special Olympics helps people with intellectual disabilities discover new strengths and confidence both on and off the playing field. The organization has a presence in 51 South Dakota communities and touches hundreds of athletes each year.<br /><br /></p>
</div>
</div>
</div>
</section>
<div class="block b04block  col-md-12">
<section class="row-full b4background">
<div class="container">
<div class="b4anywhere_banking" style="width: 100%; padding-left: 10px;">
<h2 style="text-align: left !important;">PREMIER, a Proud Sponsor and Partner</h2>
<div class="xhtml">
<p>Over the past 10 years, First PREMIER has donated nearly $200,000 to Special Olympics of South Dakota. In 2017, we proudly accepted the organization&rsquo;s DJ Mertens &ldquo;Champion&rdquo; Award for its continued support and contributions.&nbsp;&nbsp;In addition to financial support, many First PREMIER employees donate their time and talents to Special Olympics. In Watertown, PREMIER employees help organize and staff the annual Northeast South Dakota swimming competition. In Sioux Falls, employees have been longtime volunteers at the Southeast Area Spring Games. These volunteers have a passion for Special Olympics and the participating athletes. Over the years, they have collectively volunteered more than 10,000 hours.<br /><br /></p>
<h2 style="text-align: left !important;">Bob Arnold's Story</h2>
<p>Bob Arnold is a network performance administrator for PREMIER Bankcard in Sioux Falls, and a longtime supporter of Special Olympics. He recently shared this story:</p>
<p>&ldquo;In 1978, when I was 12 years old, my brother asked if I would help him and his Knights of Columbus group run the softball throw. This sounded easy enough, so I was in. It ended up being a rough day. I completely underestimated the skills of the athletes, which resulted in getting nailed in the head I think three times that day&hellip;.</p>
<p>At the end of the day, I remember Sandi Ragels asking if I was willing to come back the next year to help. Well, I had been hit in the head three times that day and I really didn&rsquo;t have that much fun. So thinking fast, I told Sandi I would come back if I could announce on the main track. Now keep in my mind, in those days members of the local media always did the announcing, so I was quite confident my phone wasn&rsquo;t going to ring. About a week before the meet, I remember getting a call from Sandi saying the media couldn&rsquo;t make it. I stuck to my word, showed up, and announced. Today, 39 years later, I&rsquo;m still here and going strong.&rdquo;</p>
</div>
</div>
</div>
</section>
</div>
                </div>
                <div class="col-lg-2 col-md-1 col-sm-1 col-xs-12"></div>
            </div>
    </div>
</div></div><div class="block b73block  col-md-12">
<div class="b73-block">
    <div class="container">
        <div class="b73-centerimage">
            <div class="row ">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <img src="../../../../../../contentassets/1561361b81de4c61af13ce5d45b80b28/0.5.5.17.4_b-4_long_arnold.png" alt="Bob Arnold" title="Bob Arnold, Network Performance Administrator, PREMIER Bankcard" />
                    <div class="image-caption">Bob Arnold, Network Performance Administrator, PREMIER Bankcard</div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </div>
</div></div><div class="block b76block  col-md-12">
<div class="b76-block">
    <div class="container">
        <!--Paragraph Large -->
            <div class="row">
                <div class="col-lg-2 col-md-1 col-sm-1 col-xs-12"></div>
                <div class="col-lg-8 cols-md-10 col-sm-10 col-xs-12">
<p>&nbsp;</p>
<p>&nbsp;</p>
                </div>
                <div class="col-lg-2 col-md-1 col-sm-1 col-xs-12"></div>
            </div>
    </div>
</div></div></div>

 

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
