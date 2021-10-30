

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
        .btn {
    margin: 0px 0px 20px !important;
float: right;
}
.EPiServerForms .Form__NavigationBar {
    position: absolute;
    bottom: 1px;
    width: 100%;
}

.FormCaptcha__Image
{
vertical-align: bottom !important;
}
.EPiServerForms .FormCaptcha .FormCaptcha__Refresh {
    font-size: 1em;
    font-weight: bold;
    width: 5%;
    margin-right: 6px;
color: #4a6375;

}
.EPiServerForms .Form__NavigationBar .Form__NavigationBar__ProgressBar
{
width:68%
}


   @media screen and ( max-width:708px ) and (min-width:544px) {   

.btn {
    margin: 25px 0px 1px !important;
    float: right;
}

.EPiServerForms .Form__NavigationBar {
    
    bottom: -610px;
    width: 100%;
}
.footer
{
display:none;
}
.EPiServerForms .FormCaptcha .FormCaptcha__Refresh
{
width: 15%;
color: #4a6375;
}

}

@media screen and ( max-width: 544px ) and (min-width: 470px) {   

.btn {
    margin: 64px 0px 1px !important;
    float: right;
}

.EPiServerForms .Form__NavigationBar {
    
    bottom: -649px;
    width: 100%;
}
.footer
{
display:none;
}
.EPiServerForms .FormCaptcha .FormCaptcha__Refresh
{
width: 28%;
color: #4a6375;
}

}

@media screen and ( max-width: 470px)  {   

.btn {
    margin: 64px 0px 1px !important;
    float: right;
}

.EPiServerForms .Form__NavigationBar {
    
    bottom: -74px;
    width: 100%;
}
.footer
{
display:none;
}
.EPiServerForms .FormCaptcha .FormCaptcha__Refresh
{
width: 28%;
color: #4a6375;
}

}
    </style>
<div class="row equal-height"><div class="block b44block  col-md-12">
<style>
    .b44header  { min-height:245px;width:100%; background:#fff url(../../../../../Static/img/CustomBlocks/B44/leader_bg.jpg) no-repeat; float:left; padding-top:60px;}
</style>
<section class="row-full">
    <div class="b44header">
        <div class="container">
            <h1>Trust Online Enrollment</h1>
            
<ul>
    
        <li>
            <a href="../../../../personal/wealth-management/index.html">Wealth Management</a> 
        </li>
    
        <li>
            <a href="../../../../personal/wealth-management/personal-trust-services/index.html">Trust Services</a> 
        </li>
    
        <li>
            <a href="index.html">Trust Online Enrollment</a> 
        </li>
    
</ul>
                                                    <p>&nbsp;</p>
                <p>&nbsp;</p>
        </div>
    </div>
</section></div><div class="block b04block  col-md-12">
<style>
float:left !important;</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                        <div class="xhtml"><p>&nbsp;</p>
<p><strong>We do not accept or process enrollments for Trust Online from individuals under 13 years of age.</strong></p>
<p><br />To enroll in Trust Online, please fill in the following.&nbsp; We will contact you by e-mail within two business days. Please remember your User Name for future use.</p>
<p><br />This does not access credit card information.&nbsp; To access your credit card account, <a href="https://www.mypremiercreditcard.com/" target="_blank" rel="noopener">click here</a>.</p>
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
          enctype="multipart/form-data" class="EPiServerForms ValidationSuccess" data-f-type="form" id="542b2fba-ed98-473a-9002-6547fdfd2737">

    

    
    <script type="text/javascript" src="../../../../../EPiServer.Forms/DataSubmit/GetFormInitScript2823.js?formGuid=542b2fba-ed98-473a-9002-6547fdfd2737&amp;formLanguage=en"></script>

    
    <input type="hidden" class="Form__Element Form__SystemElement FormHidden FormHideInSummarized" name="__FormGuid" value="542b2fba-ed98-473a-9002-6547fdfd2737" data-f-type="hidden" autocomplete="off" />
    <input type="hidden" class="Form__Element Form__SystemElement FormHidden FormHideInSummarized" name="__FormHostedPage" value="26077" data-f-type="hidden" autocomplete="off" />
    <input type="hidden" class="Form__Element Form__SystemElement FormHidden FormHideInSummarized" name="__FormLanguage" value="en" data-f-type="hidden" autocomplete="off" />
    <input type="hidden" class="Form__Element Form__SystemElement FormHidden FormHideInSummarized" name="__FormCurrentStepIndex" value="0" data-f-type="hidden" autocomplete="off" />
    <input type="hidden" class="Form__Element Form__SystemElement FormHidden FormHideInSummarized" name="__FormSubmissionId" value="" data-f-type="hidden" autocomplete="off" />
    <input name="__RequestVerificationToken" type="hidden" value="e213jl1u_nvp9TzUhcDHXMsxtzOXFEtatQBEkK5u3FZjmA1A8zRZkx7dk_JZjHiBJP_a3aZcfBiSRPEhlCd7TfMiPhkEDo5s3BZjWrKKhsk1" />

     <aside class="Form__Description">All fields are required except middle initial.</aside> 

    
    <div class="Form__Status">
        <div role="alert" aria-live="polite" class="Form__Status__Message hide" data-f-form-statusmessage>
            
        </div>
    </div>

    <div data-f-mainbody class="Form__MainBody">
        
        <section id="__field_" data-f-type="step" data-f-element-name="__field_" class="Form__Element FormStep Form__Element--NonData " data-f-stepindex="0" data-f-element-nondata>
            

            <!-- Each FormStep groups the elements below it til the next FormStep -->
            <div class="Form__Element FormTextbox ValidationRequired" data-f-element-name="__field_26088" data-f-type="textbox">
    <label for="a39b1af9-c013-4a3c-adc1-45e98bb0e9b9" class="Form__Element__Caption">First Name</label>
    <input name="__field_26088" id="a39b1af9-c013-4a3c-adc1-45e98bb0e9b9" type="text" class="FormTextbox__Input" aria-describedby="__field_26088_desc"
        
            placeholder="first name"
        
        value=""  required aria-required="true" data-f-datainput
        aria-invalid="false" />
    <span class="Form__Element__ValidationError" data-f-linked-name="__field_26088" data-f-validationerror="" id="__field_26088_desc" style="display:none"></span>
    
</div><div class="Form__Element FormTextbox ValidationRequired" data-f-element-name="__field_26089" data-f-type="textbox">
    <label for="217a264e-bae1-46a1-9504-56b546607b58" class="Form__Element__Caption">Last Name</label>
    <input name="__field_26089" id="217a264e-bae1-46a1-9504-56b546607b58" type="text" class="FormTextbox__Input" aria-describedby="__field_26089_desc"
        
            placeholder="lastname"
        
        value=""  required aria-required="true" data-f-datainput
        aria-invalid="false" />
    <span class="Form__Element__ValidationError" data-f-linked-name="__field_26089" data-f-validationerror="" id="__field_26089_desc" style="display:none"></span>
    
</div><div class="Form__Element FormTextbox" data-f-element-name="__field_26090" data-f-type="textbox">
    <label for="50056452-0cc6-4b46-874f-2bbed5d0382e" class="Form__Element__Caption">MI</label>
    <input name="__field_26090" id="50056452-0cc6-4b46-874f-2bbed5d0382e" type="text" class="FormTextbox__Input" aria-describedby="__field_26090_desc"
        
            placeholder="middle initial"
        
        value=""  data-f-datainput
        aria-invalid="false" />
    <span class="Form__Element__ValidationError" data-f-linked-name="__field_26090" data-f-validationerror="" id="__field_26090_desc" style="display:none"></span>
    
</div><div class="Form__Element FormTextbox ValidationRequired" data-f-element-name="__field_26092" data-f-type="textbox">
    <label for="ea658c77-57ef-421c-9ac7-9773ad419e09" class="Form__Element__Caption">Address</label>
    <input name="__field_26092" id="ea658c77-57ef-421c-9ac7-9773ad419e09" type="text" class="FormTextbox__Input" aria-describedby="__field_26092_desc"
        
            placeholder="address"
        
        value=""  required aria-required="true" data-f-datainput
        aria-invalid="false" />
    <span class="Form__Element__ValidationError" data-f-linked-name="__field_26092" data-f-validationerror="" id="__field_26092_desc" style="display:none"></span>
    
</div><div class="Form__Element FormTextbox ValidationRequired" data-f-element-name="__field_26093" data-f-type="textbox">
    <label for="a0f2bbc3-62dd-483f-9c6d-be315c587f6e" class="Form__Element__Caption">City</label>
    <input name="__field_26093" id="a0f2bbc3-62dd-483f-9c6d-be315c587f6e" type="text" class="FormTextbox__Input" aria-describedby="__field_26093_desc"
        
            placeholder="city"
        
        value=""  required aria-required="true" data-f-datainput
        aria-invalid="false" />
    <span class="Form__Element__ValidationError" data-f-linked-name="__field_26093" data-f-validationerror="" id="__field_26093_desc" style="display:none"></span>
    
</div><div class="Form__Element FormSelection ValidationRequired" data-f-element-name="__field_26094" data-f-type="selection">
    <label for="87544d60-7e19-45ea-945f-725fd0a05716" class="Form__Element__Caption">State</label>
    <select name="__field_26094" id="87544d60-7e19-45ea-945f-725fd0a05716"    required aria-required="true" data-f-datainput
         aria-describedby="__field_26094_desc"
         aria-invalid="false" >
        <option disabled="disabled"  value="">state</option>
        
        <option value="AL"   data-f-datainput>AL</option>
        
        <option value="AK"   data-f-datainput>AK</option>
        
        <option value="AZ"   data-f-datainput>AZ</option>
        
        <option value="AR"   data-f-datainput>AR</option>
        
        <option value="CA"   data-f-datainput>CA</option>
        
        <option value="CO"   data-f-datainput>CO</option>
        
        <option value="CT"   data-f-datainput>CT</option>
        
        <option value="DE"   data-f-datainput>DE</option>
        
        <option value="FL"   data-f-datainput>FL</option>
        
        <option value="GA"   data-f-datainput>GA</option>
        
        <option value="HI"   data-f-datainput>HI</option>
        
        <option value="ID"   data-f-datainput>ID</option>
        
        <option value="IL"   data-f-datainput>IL</option>
        
        <option value="IN"   data-f-datainput>IN</option>
        
        <option value="IA"   data-f-datainput>IA</option>
        
        <option value="KS"   data-f-datainput>KS</option>
        
        <option value="KY"   data-f-datainput>KY</option>
        
        <option value="LA"   data-f-datainput>LA</option>
        
        <option value="ME"   data-f-datainput>ME</option>
        
        <option value="MD"   data-f-datainput>MD</option>
        
        <option value="MA"   data-f-datainput>MA</option>
        
        <option value="MI"   data-f-datainput>MI</option>
        
        <option value="MN"   data-f-datainput>MN</option>
        
        <option value="MS"   data-f-datainput>MS</option>
        
        <option value="MO"   data-f-datainput>MO</option>
        
        <option value="MT"   data-f-datainput>MT</option>
        
        <option value="NE"   data-f-datainput>NE</option>
        
        <option value="NV"   data-f-datainput>NV</option>
        
        <option value="NH"   data-f-datainput>NH</option>
        
        <option value="NJ"   data-f-datainput>NJ</option>
        
        <option value="NM"   data-f-datainput>NM</option>
        
        <option value="NY"   data-f-datainput>NY</option>
        
        <option value="NC"   data-f-datainput>NC</option>
        
        <option value="ND"   data-f-datainput>ND</option>
        
        <option value="OH"   data-f-datainput>OH</option>
        
        <option value="OK"   data-f-datainput>OK</option>
        
        <option value="OR"   data-f-datainput>OR</option>
        
        <option value="PA"   data-f-datainput>PA</option>
        
        <option value="RI"   data-f-datainput>RI</option>
        
        <option value="SC"   data-f-datainput>SC</option>
        
        <option value="SD" selected data-f-default-value="true" data-f-datainput>SD</option>
        
        <option value="TN"   data-f-datainput>TN</option>
        
        <option value="TX"   data-f-datainput>TX</option>
        
        <option value="UT"   data-f-datainput>UT</option>
        
        <option value="VT"   data-f-datainput>VT</option>
        
        <option value="VA"   data-f-datainput>VA</option>
        
        <option value="DC"   data-f-datainput>DC</option>
        
        <option value="WA"   data-f-datainput>WA</option>
        
        <option value="WV"   data-f-datainput>WV</option>
        
        <option value="WI"   data-f-datainput>WI</option>
        
        <option value="WY"   data-f-datainput>WY</option>
        
    </select>
    <span class="Form__Element__ValidationError" data-f-linked-name="__field_26094" data-f-validationerror="" id="__field_26094_desc" style="display:none"></span>
</div><div class="Form__Element FormTextbox" data-f-element-name="__field_26095" data-f-type="textbox">
    <label for="5a7d4fd0-9883-4eb0-b1c7-6a51f234fd7f" class="Form__Element__Caption">Zip</label>
    <input name="__field_26095" id="5a7d4fd0-9883-4eb0-b1c7-6a51f234fd7f" type="text" class="FormTextbox__Input" aria-describedby="__field_26095_desc"
        
            placeholder="zip code"
        
        value=""  data-f-datainput
        aria-invalid="false" />
    <span class="Form__Element__ValidationError" data-f-linked-name="__field_26095" data-f-validationerror="" id="__field_26095_desc" style="display:none"></span>
    
</div>
        </section>

        
        <section id="__field_26096" data-f-type="step" data-f-element-name="__field_26096" class="Form__Element FormStep Form__Element--NonData hide" data-f-stepindex="1" data-f-element-nondata>
            
        <h3 class="FormStep__Title"></h3>
        <aside class="FormStep__Description"></aside>


            <!-- Each FormStep groups the elements below it til the next FormStep -->
            <div class="Form__Element FormTextbox ValidationRequired" data-f-element-name="__field_26097" data-f-type="textbox">
    <label for="01a92cf4-9b60-4910-906e-f31cb6abe1fc" class="Form__Element__Caption">Day Phone</label>
    <input name="__field_26097" id="01a92cf4-9b60-4910-906e-f31cb6abe1fc" type="text" class="FormTextbox__Input" aria-describedby="__field_26097_desc"
        
            placeholder="daytime phone number"
        
        value=""  required aria-required="true" data-f-datainput
        aria-invalid="false" />
    <span class="Form__Element__ValidationError" data-f-linked-name="__field_26097" data-f-validationerror="" id="__field_26097_desc" style="display:none"></span>
    
</div><div class="Form__Element FormTextbox ValidationRequired" data-f-element-name="__field_26098" data-f-type="textbox">
    <label for="8e9bd0c3-62b4-4a0b-b258-e7125b17630d" class="Form__Element__Caption">Evening Phone</label>
    <input name="__field_26098" id="8e9bd0c3-62b4-4a0b-b258-e7125b17630d" type="text" class="FormTextbox__Input" aria-describedby="__field_26098_desc"
        
            placeholder="evening phone number"
        
        value=""  required aria-required="true" data-f-datainput
        aria-invalid="false" />
    <span class="Form__Element__ValidationError" data-f-linked-name="__field_26098" data-f-validationerror="" id="__field_26098_desc" style="display:none"></span>
    
</div><div class="Form__Element FormTextbox ValidationRequired" data-f-element-name="__field_26099" data-f-type="textbox">
    <label for="d2063598-8132-473d-aeba-bd49aeccc109" class="Form__Element__Caption">Date of Birth</label>
    <input name="__field_26099" id="d2063598-8132-473d-aeba-bd49aeccc109" type="text" class="FormTextbox__Input" aria-describedby="__field_26099_desc"
        
            placeholder="date of birth"
        
        value=""  required aria-required="true" data-f-datainput
        aria-invalid="false" />
    <span class="Form__Element__ValidationError" data-f-linked-name="__field_26099" data-f-validationerror="" id="__field_26099_desc" style="display:none"></span>
    
</div><div class="Form__Element FormTextbox ValidationRequired" data-f-element-name="__field_26100" data-f-type="textbox">
    <label for="cdc27837-cd1c-4120-ba10-b55e89b1e2a7" class="Form__Element__Caption">Mother&#39;s maiden name</label>
    <input name="__field_26100" id="cdc27837-cd1c-4120-ba10-b55e89b1e2a7" type="text" class="FormTextbox__Input" aria-describedby="__field_26100_desc"
        
            placeholder="mother&#39;s maiden name"
        
        value=""  required aria-required="true" data-f-datainput
        aria-invalid="false" />
    <span class="Form__Element__ValidationError" data-f-linked-name="__field_26100" data-f-validationerror="" id="__field_26100_desc" style="display:none"></span>
    
</div><div class="Form__Element FormTextbox ValidationRequired" data-f-element-name="__field_26101" data-f-type="textbox">
    <label for="1d8fec35-2450-45d9-9389-03a51d78966e" class="Form__Element__Caption">User name</label>
    <input name="__field_26101" id="1d8fec35-2450-45d9-9389-03a51d78966e" type="text" class="FormTextbox__Input" aria-describedby="__field_26101_desc"
        
            placeholder="Remember for future use"
        
        value=""  title="User name must contain a minimum of 8 characters, maximum of 10 (2 alpha and 2 numeric)" required aria-required="true" data-f-datainput
        aria-invalid="false" />
    <span class="Form__Element__ValidationError" data-f-linked-name="__field_26101" data-f-validationerror="" id="__field_26101_desc" style="display:none"></span>
    
</div><div class="Form__Element FormTextbox ValidationRequired" data-f-element-name="__field_26102" data-f-type="textbox">
    <label for="c0eb3e9b-d261-4f62-9518-d33baa86e581" class="Form__Element__Caption">Email Address</label>
    <input name="__field_26102" id="c0eb3e9b-d261-4f62-9518-d33baa86e581" type="text" class="FormTextbox__Input" aria-describedby="__field_26102_desc"
        
            placeholder="email"
        
        value=""  required aria-required="true" data-f-datainput
        aria-invalid="false" />
    <span class="Form__Element__ValidationError" data-f-linked-name="__field_26102" data-f-validationerror="" id="__field_26102_desc" style="display:none"></span>
    
</div><div class="Form__Element FormCaptcha" data-f-element-name="__field_30576" data-f-type="captcha">
<label class="Form__Element__Caption" for="13f267a4-8e26-4914-80fc-66c03b27fe6a">
    Word verification
</label>
<button name="submit" type="submit" data-f-captcha-image-handler="13f267a4-8e26-4914-80fc-66c03b27fe6a" value="RefreshCaptcha"
    class="FormExcludeDataRebind FormCaptcha__Refresh" data-f-captcha-refresh>
    Refresh captcha
</button>
<img src="../../../../../EPiServer.Forms/DataSubmit/GetCaptchaImage1cac.jpg?elementGuid=13f267a4-8e26-4914-80fc-66c03b27fe6a" alt="An error has occurred while getting captcha image" class="FormCaptcha__Image"  data-f-captcha-image />
<input id="13f267a4-8e26-4914-80fc-66c03b27fe6a" name="__field_30576" type="text" class="FormTextbox__Input FormCaptcha__Input FormHideInSummarized"  data-f-datainput  aria-describedby="__field_30576_desc"
          aria-invalid="false"/>

<span class="Form__Element__ValidationError" data-f-linked-name="__field_30576" data-f-validationerror="" id="__field_30576_desc" style="display:none"></span>
</div>

<button id="278cbf31-d8d8-4a62-826f-ac9ddfe90e11" name="submit" type="submit" value="278cbf31-d8d8-4a62-826f-ac9ddfe90e11" data-f-is-finalized="false"
    data-f-is-progressive-submit="true" data-f-type="submitbutton" data-f-element-name="__field_26103"
     title="If you have any questions please call 357-3174 or outside of Sioux Falls at 800-743-2967 and ask for the Trust Department." 
    
        class="Form__Element FormExcludeDataRebind FormSubmitButton">
        Submit Application
    
</button>

        </section>

        
        <nav role="navigation" class="Form__NavigationBar" data-f-type="navigationbar" data-f-element-nondata>
            <button type="submit" name="submit" value="PreviousStep" class="Form__NavigationBar__Action FormExcludeDataRebind btnPrev" 
                    disabled data-f-navigation-previous>
                Previous step</button>

            
            <div class="Form__NavigationBar__ProgressBar">
                <div class="Form__NavigationBar__ProgressBar--Progress" style="width: 50%" data-f-navigation-progress></div>
                <div class="Form__NavigationBar__ProgressBar--Text">
                    <span class="Form__NavigationBar__ProgressBar__ProgressLabel">Step</span> 
                    <span class="Form__NavigationBar__ProgressBar__CurrentStep" data-f-navigation-currentStep>1</span>/
                    <span class="Form__NavigationBar__ProgressBar__StepsCount" data-f-navigation-stepcount>2</span>
                </div>
            </div>
            


            <button type="submit" name="submit" value="NextStep" class="Form__NavigationBar__Action FormExcludeDataRebind btnNext" 
                     data-f-navigation-next >
                Next step</button>
        </nav>
        
    </div>
    
    

    </form>
</div></div>
    <script>
        $( "#278cbf31-d8d8-4a62-826f-ac9ddfe90e11" ).last().addClass( [ "btn", "btn" ] );

 $("#278cbf31-d8d8-4a62-826f-ac9ddfe90e11").addClass("btn");
    </script>

 

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
