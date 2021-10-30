

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
<ul><li><a href="../../index.html">Community</a></li><li><a href="../index.html">Sponsorship</a></li></ul>    <h1>The Denny Sanford PREMIER Center</h1>
    <h3>Driving Economic Growth &amp; Enhancing Community Life</h3>
</div>
</div><div class="block b72block  col-md-12">
<div class="b72-block">
    <img src="../../../../../../contentassets/670ebc8cbb9c437abf918b112f930d8f/0.5.5.18.1_b44-hero_sp.png" alt="Denny Sanford Premier Center building" title="Denny Sanford Premier Center building"/>
</div>
</div><div class="block b76block  col-md-12">
<div class="b76-block">
    <div class="container">
        <!--Paragraph Large -->
            <div class="row">
                <div class="col-lg-2 col-md-1 col-sm-1 col-xs-12"></div>
                <div class="col-lg-8 cols-md-10 col-sm-10 col-xs-12">
<p>Supporting and promoting the communities we serve is a value that stands at the core of First PREMIER. One example of our commitment to community is the Denny Sanford PREMIER Center in Sioux Falls.</p>
<p><br />As the largest publicly-funded project in Sioux Falls history, the Denny Sanford PREMIER Center is South Dakota&rsquo;s largest indoor venue. The building was completed in 2014 and has seating capacity for approximately 12,000 spectators.</p>
<p><br />First PREMIER Bank and PREMIER Bankcard and Sanford Health are strong supporters of the facility. In consideration of this support, the City of Sioux Falls signed a 25-year agreement with PREMIER and Sanford Health for title sponsorship rights to the Denny Sanford PREMIER Center. The $20 million agreement is believed to be one of the largest of its kind in U.S. history.</p>
<p><br />Today, the Denny Sanford PREMIER Center hosts the NCAA Summit League Basketball Tournament and is home to the Sioux Falls Storm IFL football team and the Sioux Falls Stampede USHL hockey team. It also attracts world-class entertainment to the Sioux Falls area, providing a significant boost to the local economy.</p>
<p><br />In 2017, the center sold more than 709,000 tickets and its net operating budget topped $2 million. The facility also helps fill local hotels, restaurants and businesses.</p>
<p><br />&ldquo;The facility has an impact upon our entire community,&rdquo; said First PREMIER Bank CEO Dana Dykhouse. &ldquo;A large percentage of people attending the events are from outside our community. They purchase tickets, they eat in restaurants, they fill their tanks with gas and many of them spend the night and do a little shopping.&rdquo;</p>
<p><br />In addition to enhancing community life and supporting the local economy, the Denny Sanford PREMIER Center is becoming a favorite with today&rsquo;s hottest performers and entertainers. The center was nominated for the Academy of Country Music&rsquo;s Venue of the Year in 2015-17 and was named one of the 50 busiest concert venues in the world. In 2017, Venues Today ranked the building eighth in the United States and 13th in the world among venues with capacities between 10,000 and 15,000 based on gross ticket sales for touring events.</p>
<p><br />To learn about upcoming events at the Denny Sanford PREMIER Center or to purchase tickets, visit: <a href="http://www.dennysanfordpremiercenter.com/" target="_blank" rel="noopener">www.dennysanfordpremiercenter.com</a>.</p>
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