

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
    .b44header  { min-height:245px;width:100%; background:#fff url(../../../../../../../Static/img/CustomBlocks/B44/leader_bg.jpg) no-repeat; float:left; padding-top:60px;}
</style>
<section class="row-full">
    <div class="b44header">
        <div class="container">
            <h1>Horatio Alger - Denny Sanford Scholarships</h1>
            
<ul>
    
        <li>
            <a href="../../../index.html">Community</a> 
        </li>
    
        <li>
            <a href="../index.html">Scholarship &amp; Internships</a> 
        </li>
    
        <li>
            <a href="index.html">Horatio Alger</a> 
        </li>
    
</ul>
            <img class="img-responsive" src="../../../../../../../contentassets/9ba2331e56e84d52908ccab5cf80e7db/0.5.16.3.6.2_b-44-hero_logo.png" alt="" border="0" />                                        <p>&nbsp;</p>
                <p>&nbsp;</p>
        </div>
    </div>
</section></div><div class="block b04block  col-md-12">
<style>
float:left !important;</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                <h2 style="text-align:left !important;">Scholarships at 12 Universities</h2>
                            <div class="xhtml"><p><br />In January of 2018, philanthropist T. Denny Sanford announced a $30 million endowment to the Horatio Alger Association of Distinguished Americans, Inc., a non-profit educational organization dedicated to helping individuals pursue dreams through higher education.</p>
<ul>
<li>This transformative gift was the single largest donation ever received by the Association, since its inception in 1947.</li>
<li>Through this endowment, the Horatio Alger &ndash; Denny Sanford Scholarship program was established.</li>
<li>The program will provide $3 million per year in scholarships over 10 years for Horatio Algers scholars choosing to attend any of 12 qualifying universities.<br /><br /><br /></li>
</ul>
<p>Receiving up to $250,000 in scholarship funds per year from the Horatio Alger-Denny Sanford Scholarship Program are:</p>
<ul>
<li>University of South Dakota (<em>Vermillion, SD</em>)</li>
<li>South Dakota State University (<em>Brookings, SD</em>)</li>
<li>University of Minnesota (<em>Minneapolis, MN</em>)</li>
<li>University of California San Diego (<em>La Jolla, CA</em>)</li>
<li>National University (<em>San Diego, CA</em>)</li>
<li>Long Island University (<em>Brookville, NY</em>)</li>
<li>Arizona State University (<em>Tempe, AZ</em>)<br /><br /><br /></li>
</ul>
<p>Receiving up to $150,000 in scholarship funds per year from the Horatio Alger-Denny Sanford Scholarship Program are:</p>
<ul>
<li>Augustana University (<em>Sioux Falls, SD</em>)</li>
<li>University of Sioux Falls (<em>Sioux Falls, SD</em>)</li>
<li>Dakota State University (<em>Madison, SD</em>)</li>
<li>South Dakota School of Mines (<em>Rapid City, SD</em>)</li>
<li>Black Hills State University (<em>Spearfish, SD</em>)<br /><br /><br /></li>
</ul>
<p>To apply, speak to your university counselor.</p>
<p><br /><br /></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p></div>
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
            <a href="../../../../index.html">About Us</a> 
        </li>
    
        <li>
            <a href="../../../../../../index.html">First PREMIER Bank</a> 
        </li>
    
        <li>
            <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a> 
        </li>
    
        <li>
            <a href="../../../../leadership-team/index.html">Leadership</a> 
        </li>
    
        <li>
            <a href="../../../index.html">Community</a> 
        </li>
    
        <li>
            <a href="../../../../careers/index.html">Careers</a> 
        </li>
    
</ul>
                <br />
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 footerCol2">
                <div class="footerHeader">Customers</div>
                
<ul>
    
        <li>
            <a href="../../../../../../index.html">Personal Banking</a> 
        </li>
    
        <li>
            <a href="../../../../../../small-business/index.html">Small Business</a> 
        </li>
    
        <li>
            <a href="../../../../../../commercial/index.html">Commercial</a> 
        </li>
    
</ul>
                <br />
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 footerCol3">
                <div class="footerHeader">Help &amp; Contact</div>
                
<ul>
    
        <li>
            <a href="../../../../../quick-links/customer-care/index.html">Customer Care</a> 
        </li>
    
        <li>
            <a href="../../../../../quick-links/locations/index.html">Locations</a> 
        </li>
    
        <li>
            <a href="../../../../../quick-links/customer-care/index.html">BANK: 800-501-6535</a> 
        </li>
    
        <li>
            <a href="https://www.mypremiercreditcard.com/">CREDIT CARD: 800-987-5521</a> 
        </li>
    
        <li>
            <a href="../../../../../../index.html">Routing Number: 091408598</a> 
        </li>
    
</ul>
                <br />
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 footerCol4">
                <div class="footerHeader">Legal Notices</div>
                
<ul>
    
        <li>
            <a href="../../../../../resources/first-premier-privacy-statement-2020/index.html">Privacy Notice &amp; Statement</a> 
        </li>
    
        <li>
            <a href="../../../../../resources/legal-disclosures/index.html">Legal Disclosures</a> 
        </li>
    
        <li>
            <a href="../../../../../resources/cookie-policy/index.html">Cookie Policy</a> 
        </li>
    
</ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-top:50px;">
 <p>Member FDIC | <img src="../../../../../../../Static/img/equalhousinglender.png" alt="Equal Housing Lender" title="Equal Housing Lender" />Equal Housing Lender</p>            </div>
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
    .showehllogo { background: url('../../../../../../../Static/img/EHLlogo%20white.png') 230px 0px no-repeat; background-size: 24px 24px }
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
    <div class="smallLogo"><a href="../../../../../../index.html" title="First PREMIER Bank - Home"><img src="../../../../../../../Static/gfx/Logo.png" style="max-width:100%;" /></a></div>
    <script type="text/javascript" src="../../../../../../../../dl.episerver.net/13.4.4.1/epi-util/find.js"></script>
<script type="text/javascript">
if(FindApi){var api = new FindApi();api.setApplicationUrl('../../../../../../../index.html');api.setServiceApiBaseUrl('../../../../../../../find_v2/index.html');api.processEventFromCurrentUri();api.bindWindowEvents();api.bindAClickEvent();api.sendBufferedEvents();}
</script>

    <script type="text/javascript" src="../../../../../../../Static/js/pushy.js"></script>
    <script type="text/javascript" src="../../../../../../../Static/js/Blocks_2019062002.js"></script>
@endsection