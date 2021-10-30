

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
            <h1>ATM Vault Cash Solutions Form</h1>
            
<ul>
    
        <li>
            <a href="../../../../commercial/index.html">Commercial</a> 
        </li>
    
        <li>
            <a href="index.html">ATM Vault Cash Solutions Form</a> 
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
                                <h2 style="text-align:center !important;">Make the Switch to PREMIER Service.</h2>
                            <div class="xhtml"><p>Get more information about our unique ATM Vault Cash Solutions. Fill out the form below and we&rsquo;ll follow up with you, or contact us to learn more. </p>
<p>You can also reach <strong>Kathy Lenards at (605) 357-3143</strong> or <strong>Jim Kuehn at (605) 357-3123</strong>.</p>
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
</style></div><div class="block formcontainerblock  col-md-12">

    <form method="post" novalidate="novalidate"
          data-f-metadata=""
          enctype="multipart/form-data" class="EPiServerForms ValidationSuccess" data-f-type="form" id="6a74a1e3-eb7f-4d2c-aae1-673ea8d06e1d">

    

    
    <script type="text/javascript" src="../../../../../EPiServer.Forms/DataSubmit/GetFormInitScript285c.js?formGuid=6a74a1e3-eb7f-4d2c-aae1-673ea8d06e1d&amp;formLanguage=en"></script>

    
    <input type="hidden" class="Form__Element Form__SystemElement FormHidden FormHideInSummarized" name="__FormGuid" value="6a74a1e3-eb7f-4d2c-aae1-673ea8d06e1d" data-f-type="hidden" autocomplete="off" />
    <input type="hidden" class="Form__Element Form__SystemElement FormHidden FormHideInSummarized" name="__FormHostedPage" value="25001" data-f-type="hidden" autocomplete="off" />
    <input type="hidden" class="Form__Element Form__SystemElement FormHidden FormHideInSummarized" name="__FormLanguage" value="en" data-f-type="hidden" autocomplete="off" />
    <input type="hidden" class="Form__Element Form__SystemElement FormHidden FormHideInSummarized" name="__FormCurrentStepIndex" value="0" data-f-type="hidden" autocomplete="off" />
    <input type="hidden" class="Form__Element Form__SystemElement FormHidden FormHideInSummarized" name="__FormSubmissionId" value="" data-f-type="hidden" autocomplete="off" />
    <input name="__RequestVerificationToken" type="hidden" value="vefPlTER4YaDvR1YDZ_bYDOJ96go4-T91FGauMakdu_n4hIx6G7qL5FnahzXjXLpmZQ2znW1Jzwsb6HAdG6Q1a3Z9ZEZnmy7ep-ES8foFy01" />

    

    
    <div class="Form__Status">
        <div role="alert" aria-live="polite" class="Form__Status__Message hide" data-f-form-statusmessage>
            
        </div>
    </div>

    <div data-f-mainbody class="Form__MainBody">
        
        <section id="__field_" data-f-type="step" data-f-element-name="__field_" class="Form__Element FormStep Form__Element--NonData " data-f-stepindex="0" data-f-element-nondata>
            

            <!-- Each FormStep groups the elements below it til the next FormStep -->
            <div class="Form__Element FormTextbox ValidationRequired" data-f-element-name="__field_25945" data-f-type="textbox">
    <label for="27ca60d1-abb1-4194-b2c8-366be3a681d6" class="Form__Element__Caption">Name</label>
    <input name="__field_25945" id="27ca60d1-abb1-4194-b2c8-366be3a681d6" type="text" class="FormTextbox__Input" aria-describedby="__field_25945_desc"
        
            placeholder="full name"
        
        value=""  title="Please tell us your name" required aria-required="true" data-f-datainput
        aria-invalid="false" />
    <span class="Form__Element__ValidationError" data-f-linked-name="__field_25945" data-f-validationerror="" id="__field_25945_desc" style="display:none"></span>
    
</div><div class="Form__Element FormTextbox" data-f-element-name="__field_25946" data-f-type="textbox">
    <label for="7b5d741f-3215-4cce-b6e5-6f1d56f492bd" class="Form__Element__Caption">Company</label>
    <input name="__field_25946" id="7b5d741f-3215-4cce-b6e5-6f1d56f492bd" type="text" class="FormTextbox__Input" aria-describedby="__field_25946_desc"
        
            placeholder="company name"
        
        value=""  title="optional" data-f-datainput
        aria-invalid="false" />
    <span class="Form__Element__ValidationError" data-f-linked-name="__field_25946" data-f-validationerror="" id="__field_25946_desc" style="display:none"></span>
    
</div><div class="Form__Element FormTextbox" data-f-element-name="__field_25947" data-f-type="textbox">
    <label for="05107d1b-1f23-4fe7-8270-17c124733510" class="Form__Element__Caption">Address</label>
    <input name="__field_25947" id="05107d1b-1f23-4fe7-8270-17c124733510" type="text" class="FormTextbox__Input" aria-describedby="__field_25947_desc"
        
            placeholder="address"
        
        value=""  title="optional" data-f-datainput
        aria-invalid="false" />
    <span class="Form__Element__ValidationError" data-f-linked-name="__field_25947" data-f-validationerror="" id="__field_25947_desc" style="display:none"></span>
    
</div><div class="Form__Element FormTextbox" data-f-element-name="__field_25948" data-f-type="textbox">
    <label for="3efc5a46-7127-48a2-9aa9-ad5f38d6da83" class="Form__Element__Caption">Phone</label>
    <input name="__field_25948" id="3efc5a46-7127-48a2-9aa9-ad5f38d6da83" type="text" class="FormTextbox__Input" aria-describedby="__field_25948_desc"
        
            placeholder="phone"
        
        value=""  title="optional" data-f-datainput
        aria-invalid="false" />
    <span class="Form__Element__ValidationError" data-f-linked-name="__field_25948" data-f-validationerror="" id="__field_25948_desc" style="display:none"></span>
    
</div><div class="Form__Element FormTextbox" data-f-element-name="__field_25949" data-f-type="textbox">
    <label for="1b5a4417-5ea2-4b0e-a132-86ab2799496c" class="Form__Element__Caption">Email</label>
    <input name="__field_25949" id="1b5a4417-5ea2-4b0e-a132-86ab2799496c" type="text" class="FormTextbox__Input" aria-describedby="__field_25949_desc"
        
            placeholder="email"
        
        value=""  title="optional" data-f-datainput
        aria-invalid="false" />
    <span class="Form__Element__ValidationError" data-f-linked-name="__field_25949" data-f-validationerror="" id="__field_25949_desc" style="display:none"></span>
    
</div><div class="Form__Element FormTextbox" data-f-element-name="__field_26076" data-f-type="textbox">
    <label for="bf3a4c7e-61ec-417c-8aa6-c902da6a1e9c" class="Form__Element__Caption">Number of ATMs deployed</label>
    <input name="__field_26076" id="bf3a4c7e-61ec-417c-8aa6-c902da6a1e9c" type="text" class="FormTextbox__Input" aria-describedby="__field_26076_desc"
        
            placeholder="number of ATMs"
        
        value=""  title="optional" data-f-datainput
        aria-invalid="false" />
    <span class="Form__Element__ValidationError" data-f-linked-name="__field_26076" data-f-validationerror="" id="__field_26076_desc" style="display:none"></span>
    
</div><div class="Form__Element FormTextbox" data-f-element-name="__field_26085" data-f-type="textbox">
    <label for="219e7bb5-21ec-4349-a920-0ebe8076e828" class="Form__Element__Caption">Funding Amount</label>
    <input name="__field_26085" id="219e7bb5-21ec-4349-a920-0ebe8076e828" type="text" class="FormTextbox__Input" aria-describedby="__field_26085_desc"
        
            placeholder="funding amount"
        
        value=""  data-f-datainput
        aria-invalid="false" />
    <span class="Form__Element__ValidationError" data-f-linked-name="__field_26085" data-f-validationerror="" id="__field_26085_desc" style="display:none"></span>
    
</div><div class="Form__Element FormTextbox" data-f-element-name="__field_26086" data-f-type="textbox">
    <label for="d68324c4-b0d9-4412-9075-167234b0c825" class="Form__Element__Caption">States Located</label>
    <input name="__field_26086" id="d68324c4-b0d9-4412-9075-167234b0c825" type="text" class="FormTextbox__Input" aria-describedby="__field_26086_desc"
        
            placeholder="SD, ND, etc."
        
        value=""  title="Enter the states the ATMs are located in" data-f-datainput
        aria-invalid="false" />
    <span class="Form__Element__ValidationError" data-f-linked-name="__field_26086" data-f-validationerror="" id="__field_26086_desc" style="display:none"></span>
    
</div>

<button id="c9772348-4d0d-46b8-90ed-733e231455ec" name="submit" type="submit" value="c9772348-4d0d-46b8-90ed-733e231455ec" data-f-is-finalized="false"
    data-f-is-progressive-submit="true" data-f-type="submitbutton" data-f-element-name="__field_25950"
     
    
        class="Form__Element FormExcludeDataRebind FormSubmitButton">
        Get Info
    
</button>

        </section>

        
    </div>
    
    

    </form>
</div></div>

 

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
<script type="text/javascript" src="../../../../../WebResourceae14.js?d=fotri4IsftL-1aJUtZxkELLOhleR7VypdQWyj5UujQh0XEv5NVZwFxo8PEC0ppbxkmLJWaA4uhi6xB75IO6zUWcXHHoOvAHj22ohpqueA0s3FQ9qj8wM0gy9jFBrNuoBNeGRROFjPWj1kn-PVK44SdV-9jKI_fV2AUKczsyI7Ow1&amp;t=637424968160000000"></script>
<script type="text/javascript">
if(FindApi){var api = new FindApi();api.setApplicationUrl('../../../../../index.html');api.setServiceApiBaseUrl('../../../../../find_v2/index.html');api.processEventFromCurrentUri();api.bindWindowEvents();api.bindAClickEvent();api.sendBufferedEvents();}
</script>

    <script type="text/javascript" src="../../../../../Static/js/pushy.js"></script>
    <script type="text/javascript" src="../../../../../Static/js/Blocks_2019062002.js"></script>
@endsection