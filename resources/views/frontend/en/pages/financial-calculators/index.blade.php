

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

<div class="clearfix"></div>
<p>&nbsp;</p>
<h1 style="text-align:center;">Financial Calculators</h1>
<p>&nbsp;</p>
<!--Begin Calculators Script-->
<!--Begin Speed Bump-->
<script language="JavaScript" type="text/javascript">
function SiteMigrationAlert(TVSURL)
{
 var Notice = "This website provides these links as a convenience. ";
 Notice += "This website has no control over the linked websites or the content therein. ";
 Notice += "As such, This website has no liability arising out of linking to these websites ";
 Notice += "and the existence of such links does not constitute endorsement by this website.";

 if (confirm(Notice)) {window.open(TVSURL);}
 else {return false;}
}
</script>
<!--End Speed Bump-->

<div id="tvcFloatRightDivId"> 

<!--Begin Send To Friend-->
<a href="mailto:?subject=financial calculators" id="tvcMailToLinkId">
	<img src="../../../../www.timevaluecalculators.com/timevaluecalculators/images/email_icon.png" title="Email this to a friend" alt="Email page" />
</a>
<script language="JavaScript" type="text/javascript">
	var tvcMailToSubject;
	var tvcMailToBody; 
	var tvcQueryString = unescape(document.location.search);
	var tvcMailToLinkElement = document.getElementById('tvcMailToLinkId');
	if (tvcMailToLinkElement) {
		if (tvcQueryString.indexOf("CALCULATORID") == -1)		/* If we are displaying the list of calculators, just put the current location in the body. */
		{
			tvcMailToSubject = 'financial calculators';
			tvcMailToBody = 'Hello,%0A%0ATake a look at these online financial calculators.%0A%0A' + escape(document.location.href + '\n\n');
		}
		else		/* If we are displaying a calculator, add the actual calculation to the body. */
		{
			tvcMailToSubject = 'financial calculation';
			tvcMailToBody = 'Hello,%0A%0ATake a look at this online financial calculation.%0A%0A' + escape(document.location.href + '\n\n');
		}
		tvcMailToLinkElement.href = 'mailto:?subject=' + tvcMailToSubject + '&body=' + tvcMailToBody;
	}
</script>
<!--End Send To Friend-->

<!--Begin Print This-->
<a href="javascript:window.print();" id="tvcPrintThisLinkId">
<img src="../../../../www.timevaluecalculators.com/timevaluecalculators/images/print_icon.png" title="Print this page"  alt="Print page" />
</a>
<!--End Print This-->
</div> 
<!-- Calculators tabbed list variables. -->
<link rel="StyleSheet" type="text/css" href="../../../../www.timevaluecalculators.com/timevaluecalculators/Includes/tvcDefaultTabbedListStyles.css" />
<script type="text/javascript">
    var tvcTabs = new Array('Home', 'Personal', 'Investment', 'Retirement', 'Lease');
    var tvcTabTitles = new Array('Home', 'Personal', 'Investment', 'Retirement', 'Lease');
    var tvcSelectedTab = null;
</script>

<!--Begin Calculators Main Content-->
<link rel="StyleSheet" type="text/css" href="../../../../www.timevaluecalculators.com/timevaluecalculators/Includes/tvcDefaultStyles.css" />
<script language="JavaScript" src="../../../../www.timevaluecalculators.com/timevaluecalculators/Includes/tvcClientSideFunctions.js" type="text/javascript"></script>
<div id="tvcMainCalculatorDivId" class="cTimeValue">
	<script type="text/javascript" language="JavaScript">
		TEMPLATE_ID = "www.firstpremier.com_1";
		CALCULATORID = "";
		PASSTHROUGH = "";
		/* If you need to modify our calculator HTML after it has loaded, define a function and assign it to tvcAfterCalculatorsHaveLoadedFnc.  */
		/* For example: tvcAfterCalculatorsHaveLoadedFnc = yourCallbackFnc() { var ele = document.getElementById('tvcPC01TitleId'); if (ele !== null) {ele.innerHTML = "How much can I afford?"; }} */

		var tvcScriptElement = document.createElement('script');
		var tvcCalculatorHtml = "";
		var tvcHttp;
		if (document.location.href.substring(0, 5) == "https") { tvcHttp = "https:///"; } else { tvcHttp = "http://"; }
		tvcScriptElement.src = tvcHttp + "www.TimeValueCalculators.com/timevaluecalculators/Calculator2.aspx?version=" + Math.random() + "&" + createQueryString();
		tvcScriptElement.onload = tvcOnceLoaded;
		document.getElementById('tvcMainCalculatorDivId').appendChild(tvcScriptElement);
	</script>
</div>
<!--End Calculators Main Content-->
<!--End Calculators Script--><p>&nbsp;</p>
<p>&nbsp;</p>


<div class="row-full footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 footerCol1">
                <div class="footerHeader">Company</div>
                
<ul>
    
        <li>
            <a href="../about-us/index.html">About Us</a> 
        </li>
    
        <li>
            <a href="../../index.html">First PREMIER Bank</a> 
        </li>
    
        <li>
            <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a> 
        </li>
    
        <li>
            <a href="../about-us/leadership-team/index.html">Leadership</a> 
        </li>
    
        <li>
            <a href="../about-us/community/index.html">Community</a> 
        </li>
    
        <li>
            <a href="../about-us/careers/index.html">Careers</a> 
        </li>
    
</ul>
                <br />
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 footerCol2">
                <div class="footerHeader">Customers</div>
                
<ul>
    
        <li>
            <a href="../../index.html">Personal Banking</a> 
        </li>
    
        <li>
            <a href="../../small-business/index.html">Small Business</a> 
        </li>
    
        <li>
            <a href="../../commercial/index.html">Commercial</a> 
        </li>
    
</ul>
                <br />
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 footerCol3">
                <div class="footerHeader">Help &amp; Contact</div>
                
<ul>
    
        <li>
            <a href="../quick-links/customer-care/index.html">Customer Care</a> 
        </li>
    
        <li>
            <a href="../quick-links/locations/index.html">Locations</a> 
        </li>
    
        <li>
            <a href="../quick-links/customer-care/index.html">BANK: 800-501-6535</a> 
        </li>
    
        <li>
            <a href="https://www.mypremiercreditcard.com/">CREDIT CARD: 800-987-5521</a> 
        </li>
    
        <li>
            <a href="../../index.html">Routing Number: 091408598</a> 
        </li>
    
</ul>
                <br />
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 footerCol4">
                <div class="footerHeader">Legal Notices</div>
                
<ul>
    
        <li>
            <a href="../resources/first-premier-privacy-statement-2020/index.html">Privacy Notice &amp; Statement</a> 
        </li>
    
        <li>
            <a href="../resources/legal-disclosures/index.html">Legal Disclosures</a> 
        </li>
    
        <li>
            <a href="../resources/cookie-policy/index.html">Cookie Policy</a> 
        </li>
    
</ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-top:50px;">
 <p>Member FDIC | <img src="../../../Static/img/equalhousinglender.png" alt="Equal Housing Lender" title="Equal Housing Lender" />Equal Housing Lender</p>            </div>
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
    .showehllogo { background: url('../../../Static/img/EHLlogo%20white.png') 230px 0px no-repeat; background-size: 24px 24px }
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
    <div class="smallLogo"><a href="../../index.html" title="First PREMIER Bank - Home"><img src="../../../Static/gfx/Logo.png" style="max-width:100%;" /></a></div>
    <script type="text/javascript" src="../../../../dl.episerver.net/13.4.4.1/epi-util/find.js"></script>
<script type="text/javascript">
if(FindApi){var api = new FindApi();api.setApplicationUrl('../../../index.html');api.setServiceApiBaseUrl('../../../find_v2/index.html');api.processEventFromCurrentUri();api.bindWindowEvents();api.bindAClickEvent();api.sendBufferedEvents();}
</script>

    <script type="text/javascript" src="../../../Static/js/pushy.js"></script>
    <script type="text/javascript" src="../../../Static/js/Blocks_2019062002.js"></script>
@endsection
