
@extends('frontend.layouts.app')

@section('content')
    <div class="container">
            <!--start responsive menu-->
    @include('frontend.layouts.components.header')
    <!-- Main Header -->
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
    .b44header  { min-height:245px;width:100%; background:#fff url("{{asset('assets/frontend/Static/img/CustomBlocks/B44/leader_bg.jpg')}}") no-repeat; float:left; padding-top:60px;}
</style>
<section class="row-full">
    <div class="b44header">
        <div class="container">
            <h1>First PREMIER Privacy Statement</h1>
            
<ul>
    
        <li>
            <a href="../../../index.html">First PREMIER Bank</a> 
        </li>
    
        <li>
            <a href="../archives/first-premier-privacy-statement/index.html">First PREMIER Privacy Statement</a> 
        </li>
    
</ul>
                                                    <p>&nbsp;</p>
                <p>&nbsp;</p>
        </div>
    </div>
</section></div><div class="block b04block  col-md-12">
<style>
table { 
  width: 100%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}
.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -ms-overflow-style: -ms-autohiding-scrollbar;
}</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                        <div class="xhtml"><p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;"><strong>PRIVACY STATEMENT</strong></p>
<p><em>Effective as of January 1, 2020</em></p>
<p><em>Last updated September 28, 2020<br /><br /></em></p>
<p><strong>Introduction</strong></p>
<p>First PREMIER Bank (&ldquo;PREMIER,&rdquo; &ldquo;we,&rdquo; &ldquo;our,&rdquo; or &ldquo;us&rdquo;) respects the privacy of your information. This Privacy Statement is designed to assist you in understanding how we collect, use and safeguard the information you provide to us in using our websites (the &ldquo;Sites&rdquo;), the services provided through our Sites and the mobile application we offer (collectively referred to as the &ldquo;Services&rdquo;).</p>
<p>&nbsp;</p>
<p>If you have a financial product or service with us, we will use and share any information that we collect from or about you in accordance with our <a href="../../../../globalassets/documents/privacy-notice_june-2019.pdf">Privacy Notice</a>, which offers you certain choices with respect to the use and sharing of your personal information.</p>
<p>&nbsp;</p>
<p>From time to time, we may change this Privacy Statement. If we do, we will post an amended version on this webpage. Please review this Privacy Statement periodically.&nbsp;<br /><br /></p>
<p><strong>COLLECTING AND USING INFORMATION</strong></p>
<p>&nbsp;</p>
<p><strong>Personally Identifiable Information We Collect Online<br /></strong><br />Through your use of the Sites and Services, we may collect personally identifiable information, which is individually identifiable information about an individual consumer that we collect online and that we maintain in an accessible form (&ldquo;Personally Identifiable Information&rdquo;). We collect the following types of Personally Identifiable Information:</p>
<p>&nbsp;</p>
<p><em>Information You Provide</em></p>
<p>&nbsp;</p>
<p>We may collect the following Personally Identifiable Information that you voluntarily provide to us:</p>
<ul>
<li><em>Applications</em>. If you apply for one of our financial products or services, such as applying for a credit card, bank account or mortgage, we may collect, among other information, your first and last name, address, telephone number, social security number, and email address. In addition, we may collect other information such as your zip code, birth date, gender, salary range, education, marital status, occupation, industry of employment, personal and online interests.</li>
<li><em>Enrollment</em>. If you enroll for one of our online banking services, we may collect, among other types of information, your first and last name, address, telephone numbers, email address social, security number, account number, and requested login ID.</li>
<li><em>Account</em>. If you create an account for any of our Services, we will require you to establish a username and password.</li>
<li><em>Credit Card Information and Bank Account Information</em>. We may, in certain instances, collect credit card and bank account numbers and related information when you request a product or service on our Sites. When the credit card or bank account information is submitted to us, such information is encrypted and is protected with SSL encryption software. We will use the credit card or bank account information for the purpose of processing and completing the transaction you requested. Such information will be disclosed to third parties as necessary to complete the requested transaction.&nbsp;</li>
<li><em>Mobile App</em>. If you use our mobile banking application, we will collect your login and password information. We also will collect a device identifier. &nbsp;</li>
<li><em>Careers</em>. If you apply for a job, you will provide us with your name, email address, and telephone number. Additionally, you will be asked to provide other information such as a resume/CV.</li>
<li><em>Contact Us</em>. When you send us any feedback, questions, comments, suggestions, ideas, or interact with us in any way through email or social media channels, we will receive your email address and any other Personally Identifiable Information that you may voluntarily provide.</li>
</ul>
<p>&nbsp;</p>
<p><em>Information as You Navigate Our Sites</em></p>
<p>&nbsp;</p>
<p>We automatically collect certain Personally Identifiable Information through your use of our Sites and Services, such as the following:</p>
<ul>
<li><em>Usage Information</em>. We collect information automatically through your use of our Sites and Services, such as which of the pages on the Sites you access, the frequency of access, and what you click on while on the Sites.<br /><br /></li>
<li><em>Device Information</em>. We collect information about the device you are using, such as hardware model, operating system, application version number, IP address, browser, domain names, times that you access the internet, and other websites you have visited.<br /><br /></li>
<li><em>Mobile Device Information</em>. In addition to the Device Information listed above, when you access our Sites via a browser on your mobile device, we collect aggregated information about whether you are accessing the Sites via a mobile device or tablet, device type, device id, and carrier.<br /><br /></li>
<li><em>Location Information</em>. We collect location information from visitors to the Site and Services. &nbsp;If you use any location-based feature of any online or mobile service, you agree that your geographic location may be accessed and disclosed to us.</li>
</ul>
<p>&nbsp;</p>
<p><em>Information Provided About a Third Party</em></p>
<p>&nbsp;</p>
<p>We may receive certain Personally Identifiable Information from you about a third party. &nbsp;For example, as part of applying for an account, you may provide the name, date of birth, and address of a third party. &nbsp;If you submit any Personally Identifiable Information about another individual to us, you are responsible for making sure that you have the authority to do so and to allow us to use their Personally Identifiable Information in accordance with this Privacy Statement.</p>
<p>&nbsp;</p>
<p><strong>How We Use Your Personally Identifiable Information</strong></p>
<p>&nbsp;</p>
<p>We use the Personally Identifiable Information we collect to provide the Services to you, to improve our Services and Site, and to protect our legal rights. &nbsp;In addition, we may use the Personally Identifiable Information we collect to:</p>
<ul>
<li><em>Contacting you Via Mobile Device</em>. You expressly consent to receiving communication from us, our affiliates and agents at any telephone number associated with a mobile telephone or device. Such communications include but are not limited to pre-recorded or artificial voice messages, calls, text messages, email messages, and calls made or using automatic telephone dialing systems. Calls or messages may incur fees from your mobile service provider. You further agree to receive commercial email messages at such email address from us, our vendors or advertisers (unless and until you have elected not to receive such commercial messages by following the instructions provided under "<strong>CHOICES ABOUT YOUR PERSONALLY IDENTIFIABLE INFORMATION</strong>" below). You understand that your wireless carrier&rsquo;s standard rates apply to communications you receive via your mobile device. You represent that you are the owner, or authorized user of the mobile device on which communications will be received, and you are authorized to approve the applicable charges.<br /><br /></li>
<li><em>Providing Services and Products</em>. We use the information we gather on our Sites to provide you with the Services and or products you have requested. This may include passing your information on to a service provider to provide such services or products. Although our contractual arrangement limits how this party can use your information, we do not control the privacy practices of service providers.&nbsp;<br /><br /></li>
<li><em>Customer Support Services</em>. We will use the information to confirm your registration and complete transactions requested by you or verify information you have provided to us to assist you with any support services you request.<br /><br /></li>
<li><em>Identity Verification</em>. We may use the information we gather on the website for identity verification purposes, for example, to text users a code that they must enter on the Site or Services to verify their identity when they sign on to their account.&nbsp;<br /><br /></li>
<li><em>Improving Our Internet Content and Services</em>. We use the information we gather to respond to any inquiries you make, operate and improve the functionality of our Sites and Services, and deliver the products and services advertised on our Sites.&nbsp; Our Services include the display of personalized products, content, and advertising, relating to your experience and interests.<br /><br /></li>
<li><em>Promotional Material</em>. We will use the information to contact you when we have special offers or promotions.<br /><br /></li>
<li><em>Legitimate Business Purpose</em>. We&nbsp;may use the information we gather on the website for any other legitimate business purpose, as permitted by law. We may also use the information for any other purpose for which we receive your specific consent.&nbsp;<br /><br /></li>
</ul>
<p><strong>How We Share Your Personally Identifiable Information<br /><br /></strong></p>
<p>We do not disclose your social security number, credit card or banking information to third parties not assisting us with supplying your request for products or services without your authorization.&nbsp; However, we may share the Personally Identifiable Information that we collect about you in the following ways:</p>
<ul>
<li><em>Product and Service Delivery</em>.&nbsp; We share your information with service providers who help us in the delivery of the products and services you have requested.<br /><br /></li>
<li><em>Platform Functionality</em>. We share your information with companies and individuals we employ to perform technical functions on our behalf. Examples include service providers who host our website, build and support our mobile application, analyze our data, provide marketing assistance, process credit card payments, and provide customer service.<br /><br /></li>
<li><em>Anonymous Information</em>. We share aggregated anonymous information about you, combined with other persons using our Sites with service providers, so that they can understand the kinds of visitors that come to our Sites, and how those visitors use those platforms. For more information, see the "<strong>COOKIES AND OTHER TRACKING TECHNOLOGIES</strong>" section below.<br /><br /></li>
<li><em>Legal Process</em>. We disclose your information if legally required to do so, or at our discretion, pursuant to a request from a governmental entity, or if we believe in good faith that such action is necessary to (a) conform to legal requirements or comply with legal process; (b) protect our rights or property, or our affiliated companies; (c) prevent a crime or protect national security; or (d) protect the personal safety of users or the public.<br /><br /></li>
<li><em>Acquisition or Merger</em>. We may disclose and transfer your information to another entity who acquires any or all of our business, whether such acquisition is by way of merger, consolidation or purchase of all or a substantial portion of our assets. In the event we become the subject of an insolvency proceeding, whether voluntary or involuntary, we or our liquidator, administrator, receiver or administrative receiver may sell, license or otherwise dispose of, such information in a transaction approved by the court.<br /><br /></li>
<li><em>Corporate Family</em>. We&nbsp;may share information within our corporate family, such as with subsidiaries, joint ventures, or affiliates, to the extent permitted by law.<br /><br /></li>
<li><em>With Consent</em>. We may disclose your information to any other third-party with your consent.&nbsp;<br /><br /></li>
</ul>
<p>Where appropriate, we will limit sharing of your information in accordance with the choices you have provided us in response to our <a href="../../../../globalassets/documents/privacy-notice_june-2019.pdf">Privacy Notice</a>.</p>
<p>&nbsp;</p>
<p><strong>COOKIES AND OTHER TRACKING TECHNOLOGIES</strong></p>
<p>&nbsp;</p>
<p><strong>Cookies</strong></p>
<p>Like many other companies, we use cookies and other tracking technologies (such as pixels and web beacons). To learn more about how we use cookies and your choices regarding our use of cookies, please see our <a href="../cookie-policy/index.html">Cookie Policy</a>.</p>
<p>&nbsp;</p>
<p><strong>Google Analytics</strong></p>
<p>We use Google Analytics, a web analytics service provided by Google, Inc. Google Analytics uses Cookies or other tracking technologies to help us analyze how users interact with the Site and Services, compile reports on their activity, and provide other services related to their activity and usage.&nbsp; The technologies used by Google may collect information such as your IP address, time of visit, whether you are a returning visitor, and any referring website.&nbsp; The technologies used by Google Analytics do not gather information that personally identifies you.&nbsp; The information generated by Google Analytics will be transmitted to and stored by Google and will be subject to Google&rsquo;s <a href="https://policies.google.com/privacy?hl=en">privacy policies</a>.&nbsp; To learn more about Google&rsquo;s partner services and to learn how to opt-out of tracking of analytics by Google, click <a href="https://policies.google.com/technologies/partner-sites">here</a>.</p>
<p>&nbsp;</p>
<p><strong>Google RECAPTCHA</strong></p>
<p>We use Google reCAPTCHA, a free service provided by Google, Inc., to protect our Sites from spam and abuse. Google reCAPTCHA uses advanced risk analysis techniques to decipher humans and bots. Google reCAPTCHA works differently depending on what version is deployed. For example, you may be asked to check a box indicating that you are not a robot or Google reCAPTCHA may detect abusive traffic without user interaction. Google reCAPTCHA works by transmitting certain types of information to Google, such as the referrer URL, IP address, visitor behavior, operating system information, browser and length of the visit, cookies, and mouse movements. Your use of Google reCAPTCHA is subject to Google&rsquo;s <a href="https://policies.google.com/privacy">Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms of Use</a>. More information as to Google reCAPTCHA and how it works is available <a href="https://developers.google.com/recaptcha">here</a>.<br /><br /><br /></p>
<p><strong>"Do Not Track" Signals</strong></p>
<p>Some internet browsers incorporate a &ldquo;Do Not Track&rdquo; feature that signals to websites you visit that you do not want to have your online activity tracked. &nbsp;Given that there is not a uniform way that browsers communicate the &ldquo;Do Not Track&rdquo; signal, our Sites do not currently interpret, respond to or alter its practices when it receives &ldquo;Do Not Track&rdquo; signals.<br /><br /></p>
<p><strong>CHOICES ABOUT YOUR PERSONALLY IDENTIFIABLE INFORMATION<br /></strong></p>
<p><strong>Wireless Addresses</strong></p>
<p>If the email address you provide to us is a wireless email address, you agree to receive commercial messages at such address from us, our vendors or advertisers (unless and until you have elected not to receive such commercial messages by following the instructions in the unsubscribe portion of this Statement).&nbsp; You understand that your wireless carrier&rsquo;s standard rates apply to these messages.&nbsp; You represent that you are the owner, or authorized user of the wireless device on which messages will be received, and you are authorized to approve the applicable charges.</p>
<p>&nbsp;</p>
<p><strong>Security</strong></p>
<p>We endeavor to safeguard and protect your information.&nbsp; When you submit information on our Sites, such information is protected both online and offline.&nbsp; We have security measures in place to protect against the loss, misuse, and alteration of Personally Identifiable Information under our control.&nbsp; The servers in which we store your information are kept in a secure physical environment.&nbsp; The servers have industry standard firewalls.&nbsp; Access to such servers is password protected and access by our employees is limited.&nbsp; Currently, we use Secure Socket Layer software (&ldquo;SSL&rdquo;) to protect data and to secure any transactions.&nbsp; SSL encrypts information including credit card number(s), and names and addresses, as they are transmitted over the Internet.&nbsp; Please be advised that, although we take commercially reasonable technological precautions to protect your data, no data transmission over the Internet can be guaranteed to be 100% secure; therefore, we cannot and do not warrant that your information will be absolutely secure.&nbsp; Any transmission of data at or through our Sites or Services is at your own risk.&nbsp; However, access to your information is strictly limited and not accessible to the public.</p>
<p>&nbsp;</p>
<p><strong>Third Party Links</strong></p>
<p>The Site may contain links that will let you leave the Site and access another website. &nbsp;Linked websites are not under our control. &nbsp;Except as stated below, this Privacy Statement applies solely to Personally Identifiable Information that is acquired on this Site. &nbsp;We accept no responsibility or liability for these other websites.</p>
<p>&nbsp;</p>
<p><strong>Children's Privacy</strong></p>
<p>The Site and Services are not intended for children under 13 years of age. &nbsp;We do not knowingly collect, use, or disclose personal information from children under 13.</p>
<p>&nbsp;</p>
<p><strong>Notice to California Residents</strong></p>
<p>The California Consumer Privacy Act (CCPA) requires that we provide California residents with a privacy statement that contains a comprehensive description of our online and offline practices regarding the collection, use, disclosure, and sale of personal information and of the rights of California residents regarding their personal information. This section of the Privacy Policy is intended solely for, and is applicable only as to, California residents. If you are not a California resident, this does not apply to you and you should not rely on it.</p>
<p>The CCPA defines &ldquo;personal information&rdquo; to mean information that identifies, relates to, describes, is capable of being associated with, or could reasonably be linked, directly or indirectly, with a particular consumer or household.&nbsp; Personal information does not include information that is publicly available, deidentified or aggregate information.&nbsp; For purposes of this "<strong>Notice to California Residents"</strong> section we will refer to this information as &ldquo;Personal Information.&rdquo;</p>
<p>The CCPA contains important limitations that are relevant to First PREMIER Bank.</p>
<p>The CCPA&rsquo;s privacy rights described below do not apply to Personal Information that is collected, processed, sold, or disclosed pursuant to the federal Gramm-Leach-Bliley Act and its implementing regulations or the California Financial Information Privacy Act.&nbsp; Because we are subject to those laws and regulations, much of the Personal Information that we collect is exempt from the CCPA.&nbsp; Your choices and rights with respect to our use and sharing of that information are subject to our <a href="../../../../globalassets/documents/privacy-notice_june-2019.pdf">Privacy Notice</a>.</p>
<p>The CCPA&rsquo;s privacy-related rights also do not apply to certain types of Personal Information that is subject to the Federal Credit Reporting Act (FCRA).&nbsp; Some of our services are subject to the FCRA and, therefore, exempt from the CCPA on that basis.</p>
<p>&nbsp;</p>
<p><strong>Right to Know About Personal Information Collected, Disclosed, or Sold</strong></p>
<p>&nbsp;</p>
<p>If you are a California resident, you have the right to request that we disclose what Personal Information we have collected about you in the 12-month period preceding your request.&nbsp; This right includes the right to request any or all of the following:</p>
<p>&nbsp;</p>
<p>(1) Specific pieces of Personal Information that we have collected about you;</p>
<p>(2) Categories of Personal Information we have collected about you;</p>
<p>(3) Categories of sources from which the Personal Information was collected;</p>
<p>(4) Categories of Personal Information that we sold (if applicable) or disclosed for a business purpose about you;</p>
<p>(5) Categories of third parties to whom the Personal Information was sold (if applicable) or disclosed for a business purpose; and</p>
<p>(6) The business or commercial purpose for collecting or, if applicable, selling Personal Information.</p>
<p>&nbsp;</p>
<p>The CCPA defines &ldquo;sell&rdquo; to mean selling, renting, releasing, disclosing, disseminating, making available, transferring, or otherwise communicating orally, in writing, or by electronic or other means, a California resident&rsquo;s Personal Information to another business or a third party for monetary or other valuable consideration.</p>
<p>&nbsp;</p>
<p><em>Collection of Personal Information</em></p>
<p>We currently collect and, in the 12 months prior to the Effective Date of this Privacy Statement, have collected the following categories of Personal Information about California residents directly from them and from service providers:<br /><br />&bull; Identifiers (name, postal address, online identifiers, internet protocol address, social security number, driver&rsquo;s license number, account name, and email address)<br />&bull; Unique personal identifiers (cookies, beacons, pixel tags, or other similar technology; customer number)<br />&bull; Telephone number<br />&bull; Signature<br />&bull; Bank account number<br />&bull; Commercial information (records of personal property, products or services purchased, obtained or considered)<br />&bull; Other financial information<br />&bull; Biometric/Fingerprint (collected by your phone when using our app, but not by us)<br />&bull; Employment information<br />&bull; Characteristics of protected classifications under California or federal law (gender, sex, age (40 and older), and military/veteran status)<br /><br />In addition to the purposes stated above in the section &ldquo;<strong>COLLECTING AND USING INFORMATION</strong>&rdquo; we collected the above Personal Information for the following business or commercial purposes:<br /><br />&bull; Maintaining or servicing accounts<br />&bull; Processing or fulfilling orders and transactions<br />&bull; Providing customer service<br />&bull; Providing financing<br />&bull; Detecting security incidents, protecting against malicious, deceptive, fraudulent, or illegal activity, and prosecuting those responsible for that activity<br />&bull; Auditing related to a current interaction with the consumer and concurrent transaction, including, but not limited to, counting ad impressions to unique visitors<br />&bull; Providing analytic services<br />&bull; Enabling or effecting, directly or indirectly, a commercial transaction<br /><br /><strong>Disclosure or Sale of Personal Information</strong><br /><br />The following is a list of categories of Personal Information that we have disclosed or sold to service providers or third parties for a business or commercial purpose in the 12 months preceding the Effective Date of this Privacy Statement and, for each category, the category of service providers or third parties to whom the Personal Information was sold or disclosed:<br /><br />&bull; Name (business partners)<br />&bull; Postal Address (business partners)<br />&bull; Telephone number (business partners)<br />&bull; Gender (business partners)<br />&bull; IP address (business partners and data analytics providers)<br />&bull; Cookies, beacons, pixel tags, or other similar technology (data analytics providers (please see &ldquo;Cookies&rdquo; section above for further information as to our use of cookies))<br /><br />As of the Effective Date of this Privacy Statement we do not sell Personal Information.<br /><br />We do not knowingly sell the Personal Information of minors under 16 years of age.<br /><br /><strong>Right to Request Deletion of Personal Information</strong><br /><br />If you are a California resident, you have the right to request deletion of the Personal Information about you that we have collected. However, per the CCPA, we are not required to comply with a request to delete if it is necessary for us to maintain the Personal Information in order to, for example, complete a transaction, detect security incidents, comply with a legal obligation, or otherwise use the Personal Information, internally, in a lawful manner that is compatible with the context in which you provided the information.<br /><br /><strong>How to Submit a Request to Know or Delete</strong></p>
<p>CREDIT CARD: If you have a First PREMIER Bank credit card or provided personal information in relation to a First PREMIER Bank credit card, please submit your request to know through our interactive webform available at <a href="https://www.connect.mypremiercreditcard.com/Home/CCPA">https://www.connect.mypremiercreditcard.com/Home/CCPA</a>&nbsp;or by calling us at 1-877-635-2568.</p>
<p>&nbsp;</p>
<p>OTHER BANKING RELATIONSHIPS: If you have provided personal information in relation to any First PREMIER Bank account other than a credit card account, such as a checking, savings, loan, mortgage or trust account, please submit your request to delete through our interactive webform available at <a href="../california-ccpa/index.html">https://www.firstpremier.com/ccpa</a> or by calling us at 1-800-501-7547.<br /><br />If you submit a request to delete online, you may be asked to confirm separately that you want your Personal Information deleted.</p>
<p>If you have both a credit card and a non-credit card relationship with First PREMIER Bank, please submit your request to know for each relationship separately as described above.</p>
<p>As discussed, many of the categories of Personal Information are exempt from the CCPA. Your choices and rights with respect to our use and sharing of that information are subject to our <a href="../../../../globalassets/documents/privacy-notice_june-2019.pdf">Privacy Notice</a>.<br /><br /></p>
<p><strong><em>Our Process for Verifying a Request to Know</em></strong></p>
<p><br />If we determine that your request is subject to an exemption, we will notify you of our determination. If we determine that your request is not subject to an exemption, we will comply with your request upon verification of your identity and, to the extent applicable, the identity of the California resident on whose behalf you are making such request. Our verification process may differ depending on whether you maintain a password-protected account with us.</p>
<p><br />If you maintain a password-protected account, we may verify your identity through existing authentication practices available through your account. Prior to disclosing the requested information, we will ask you to re-authenticate yourself with respect to that account.</p>
<p><br />If you do not maintain a password-protected account, or if you are an account-holder but we suspect fraudulent or malicious activity with your account, we will verify your identity either to a &ldquo;reasonable degree of certainty&rdquo; or a &ldquo;reasonably high degree of certainty&rdquo; depending on the sensitivity of the Personal Information and the risk of harm to you by unauthorized disclosure or deletion as applicable.</p>
<p><br />For requests to access categories of Personal Information and for requests to delete Personal Information that is not sensitive and does not pose a risk of harm by unauthorized deletion, we will verify your identity to a &ldquo;reasonable degree of certainty&rdquo; by verifying at least two data points that you previously provided to us and which we have determined to be reliable for the purpose of verifying identities.&nbsp;</p>
<p><br />For requests to access specific pieces of Personal Information or for requests to delete Personal Information that is sensitive and poses a risk of harm by unauthorized deletion, we will verify your identity to a &ldquo;reasonably high degree of certainty&rdquo; by verifying at least three pieces of Personal Information previously provided to us and which we have determined to be reliable for the purpose of verifying identities. In addition, you will be required to submit a signed declaration under penalty of perjury stating that you are the individual whose Personal Information is being requested.</p>
<p>&nbsp;</p>
<p><strong><em>Right to Opt-Out of Sale of Personal Information</em></strong></p>
<p><br />If you are a California resident, you have the right to direct businesses to stop selling your Personal Information. We do not sell Personal Information as it is defined in the CCPA.</p>
<p>&nbsp;</p>
<p><em><strong>Right to Non-Discrimination for the Exercise of a California Resident&rsquo;s Privacy Rights</strong></em><br /><br />We will not discriminate against California residents if they exercise any of the rights provided in the CCPA as described in this section &ldquo;Notice to California Residents.&rdquo; As such, we will not deny goods or services to that California resident; charge different prices or rates for goods or services, including through the use of discounts or other benefits or imposing penalties; provide a different level or quality of goods or services to the California resident; or suggest that the California resident will receive a different price or rate for goods or services or a different level or quality of goods or services. However, we are permitted to charge a California resident a different price or rate, or provide a different level or quality of goods or services, if that difference is reasonably related to the value provided to us by the individual&rsquo;s data.<br /><br /></p>
<p><strong>Authorized Agents</strong></p>
<p><br />If you are submitting a request on behalf of a California resident, please submit the request through one of the designated methods discussed above. After submitting the request, and if the request is not subject to an exemption or exception, we will require additional information to verify your authority to act on behalf of the California resident.</p>
<p>&nbsp;</p>
<p><strong>ACCESSIBILITY</strong></p>
<p><br />We are committed to ensuring this Privacy Policy is accessible to individuals with disabilities. If you wish to access this Privacy Statement in an alternative format, please contact us as described below.</p>
<p><br /><strong>HOW TO CONTACT US</strong></p>
<p><br />To contact us for questions or concerns about our privacy policies or practices please contact us via any of the following methods:<br /><br />In writing:</p>
<p><br />First PREMIER Bank<br />500 S. Minnesota Avenue<br />Sioux Falls, SD 57104</p>
<p>By phone: 1-800-501-7547</p>
<p>By email: <a href="mailto:deposit.services@firstpremier.com">deposit.services@firstpremier.com</a></p>
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
            <a href="../../about-us/index.html">About Us</a> 
        </li>
    
        <li>
            <a href="../../../index.html">First PREMIER Bank</a> 
        </li>
    
        <li>
            <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a> 
        </li>
    
        <li>
            <a href="../../about-us/leadership-team/index.html">Leadership</a> 
        </li>
    
        <li>
            <a href="../../about-us/community/index.html">Community</a> 
        </li>
    
        <li>
            <a href="../../about-us/careers/index.html">Careers</a> 
        </li>
    
</ul>
                <br />
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 footerCol2">
                <div class="footerHeader">Customers</div>
                
<ul>
    
        <li>
            <a href="../../../index.html">Personal Banking</a> 
        </li>
    
        <li>
            <a href="../../../small-business/index.html">Small Business</a> 
        </li>
    
        <li>
            <a href="../../../commercial/index.html">Commercial</a> 
        </li>
    
</ul>
                <br />
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 footerCol3">
                <div class="footerHeader">Help &amp; Contact</div>
                
<ul>
    
        <li>
            <a href="../../quick-links/customer-care/index.html">Customer Care</a> 
        </li>
    
        <li>
            <a href="../../quick-links/locations/index.html">Locations</a> 
        </li>
    
        <li>
            <a href="../../quick-links/customer-care/index.html">BANK: 800-501-6535</a> 
        </li>
    
        <li>
            <a href="https://www.mypremiercreditcard.com/">CREDIT CARD: 800-987-5521</a> 
        </li>
    
        <li>
            <a href="../../../index.html">Routing Number: 091408598</a> 
        </li>
    
</ul>
                <br />
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 footerCol4">
                <div class="footerHeader">Legal Notices</div>
                
<ul>
    
        <li>
            <a href="index.html">Privacy Notice &amp; Statement</a> 
        </li>
    
        <li>
            <a href="../legal-disclosures/index.html">Legal Disclosures</a> 
        </li>
    
        <li>
            <a href="../cookie-policy/index.html">Cookie Policy</a> 
        </li>
    
</ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-top:50px;">
 <p>Member FDIC | <img src="{{asset('assets/frontend/Static/img/equalhousinglender.png')}}" alt="Equal Housing Lender" title="Equal Housing Lender" />Equal Housing Lender</p>            </div>
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
    .showehllogo { background: url('{{asset("assets/frontend/Static/img/EHLlogo%20white.png")}}') 230px 0px no-repeat; background-size: 24px 24px }
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
    <div class="smallLogo"><a href="../../../index.html" title="First PREMIER Bank - Home"><img src="{{asset('assets/frontend/Static/gfx/Logo.png')}}" style="max-width:100%;" /></a></div>
    <script type="text/javascript" src="../../../../../dl.episerver.net/13.4.4.1/epi-util/find.js"></script>
<script type="text/javascript">
if(FindApi){var api = new FindApi();api.setApplicationUrl('../../../../index.html');api.setServiceApiBaseUrl('../../../../find_v2/index.html');api.processEventFromCurrentUri();api.bindWindowEvents();api.bindAClickEvent();api.sendBufferedEvents();}
</script>

    <script type="text/javascript" src="../../../../Static/js/pushy.js"></script>
    <script type="text/javascript" src="../../../../Static/js/Blocks_2019062002.js"></script>
@endsection