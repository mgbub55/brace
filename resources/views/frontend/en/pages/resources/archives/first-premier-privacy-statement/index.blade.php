

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
    .b44header  { min-height:245px;width:100%; background:#fff url(../../../../../Static/img/CustomBlocks/B44/leader_bg.jpg) no-repeat; float:left; padding-top:60px;}
</style>
<section class="row-full">
    <div class="b44header">
        <div class="container">
            <h1>First PREMIER Privacy Statement</h1>
            
<ul>
    
        <li>
            <a href="../../../../index.html">First PREMIER Bank</a> 
        </li>
    
        <li>
            <a href="index.html">First PREMIER Privacy Statement</a> 
        </li>
    
</ul>
                                                    <p>&nbsp;</p>
                <p>&nbsp;</p>
        </div>
    </div>
</section></div><div class="block b04block  col-md-12">
<style>
</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                        <div class="xhtml"><p>&nbsp;</p>
<p>When you provide us with information, you can be sure that we will hold that information in strict confidence. We recognize and respect your expectation that privacy be protected.</p>
<p>&nbsp;</p>
<p>We may share information with an outside company that assists us in providing customers with our products and services. These companies act on our behalf and are also obligated to keep the information that we provide them confidential. We do not share customer information with outside companies for purposes of selling their products and services to you, unless you have been given the opportunity in advance to decline this option.</p>
<p>&nbsp;</p>
<p>Information may also be exchanged with consumer reporting agencies and provided when legally required or permitted in connection with litigation, fraud investigation, or an acquisition or sale.</p>
<p>&nbsp;</p>
<p>Our employees access information about you only when needed to maintain your accounts or otherwise meet your needs. We use proven technology and established procedures for keeping your information secure. Whenever we ask for personal information on our Website or Online Banking we use Secure Socket Layer (SSL technology) 128-bit encryption to keep it confidential.</p>
<p>&nbsp;</p>
<p>You may visit our website to find out about products and services, marketing information, and career opportunities without providing any information about yourself. We do gather data regarding visits to our Website, including domain name, pages visited, length of user session, etc., to evaluate the usefulness of our site. The bank may use a software &ldquo;cookie&rdquo; when accessing our online banking product. No &ldquo;cookie&rdquo; will contain any information that would enable anyone to contact you via telephone, email, or U.S. Mail. (A &ldquo;cookie&rdquo; is a small piece of information which a Website stores in the web browser of your PC and can later retrieve. A &ldquo;cookie&rdquo; cannot be read by a web site other than the one that set the &ldquo;cookie.&rdquo; You can set your web browser to inform you when &ldquo;cookies&rdquo; are set or to prevent &ldquo;cookies&rdquo; from being set.)</p>
<p>&nbsp;</p>
<p>We do not knowingly solicit data from children, and we do not knowingly market to children. We recognize that protecting children's identities and privacy online is important and that the responsibility to do so rests with both the online industry and with parents.</p>
<p>&nbsp;</p>
<p>We take appropriate steps to keep your account information accurate and up to date. If you ever notice that your information is not complete, accurate or current, please call us at the telephone number on your account statement to let us know. We will correct the information as quickly as possible.</p>
<p>&nbsp;</p>
<p>If you believe that we have not complied with our Information Practices, you may contact us at the telephone number on your account statement. Please ask for the Compliance Department. We will investigate and respond to your concern.</p>
<p>&nbsp;</p>
<p>First PREMIER Bank and PREMIER Bankcard, LLC are committed to providing you with quality products and services with our high level of integrity regarding your personal privacy.</p>
<p>&nbsp;</p>
<p>SEE ALSO:&nbsp; <a href="../../../../../globalassets/documents/privacy-notice_june-2019.pdf" target="_blank" rel="noopener">FIRST PREMIER PRIVACY NOTICE AND STATEMENT</a><br /><br /><br /></p>
<p>&nbsp;</p>
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
            <a href="../../../about-us/index.html">About Us</a> 
        </li>
    
        <li>
            <a href="../../../../index.html">First PREMIER Bank</a> 
        </li>
    
        <li>
            <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a> 
        </li>
    
        <li>
            <a href="../../../about-us/leadership-team/index.html">Leadership</a> 
        </li>
    
        <li>
            <a href="../../../about-us/community/index.html">Community</a> 
        </li>
    
        <li>
            <a href="../../../about-us/careers/index.html">Careers</a> 
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
            <a href="../../first-premier-privacy-statement-2020/index.html">Privacy Notice &amp; Statement</a> 
        </li>
    
        <li>
            <a href="../../legal-disclosures/index.html">Legal Disclosures</a> 
        </li>
    
        <li>
            <a href="../../cookie-policy/index.html">Cookie Policy</a> 
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