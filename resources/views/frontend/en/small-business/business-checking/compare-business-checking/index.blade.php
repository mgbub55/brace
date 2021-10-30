

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
<div class="row equal-height"><div class="block b46block  col-md-12">

<style>
    .b46mainlinkspan { height:50px; margin-top:24px; text-align:center;width:100%;}
    .b46mainlink { color: #268d6e; background: url(../../../../Static/img/CustomBlocks/B20/arrow_green.png) no-repeat right 3px; padding: 0px 15px 0px 25px; vertical-align:text-bottom; margin-right: 20px; letter-spacing:1px; }
    .b46mainanchor { color: #268d6e; background: url(../../../../Static/img/CustomBlocks/B20/arrow_green.png) no-repeat right 3px; float:left; padding: 0px 15px 0px 25px; vertical-align:text-bottom; letter-spacing:1px; }
    .b46multianchor { text-align:center; }
    .b46multianchor ul { display:inline-block; margin:0; padding:0; /* For IE, the outcast */ zoom:1; *display:inline;}
    .b46multianchor li { float:left; padding:2px 5px; }
    .b46productpage h5 > p {  }
</style>
<style>
    .pop_main_container_board .pop_main_container ol li ol li {  }
    .b46productpage { float:left; width:100%; padding:80px 0px 50px 0px; text-align:center; background:#fff url(../../../../globalassets/images/backgrounds/grey-2.svg) no-repeat;}
</style>
<section class="row-full">
    <div class="b46productpage">
        <div class="container">
            <h1>Business Checking</h1>
                <img src="../../../../contentassets/3b8310b43ab1436ba9e6136f51fe377b/2.1.5_b-46_hero_owner-min.png" alt="First PREMIER Bank">
                            <h2>Compare Checking</h2>
            <p>Whether you are a sole proprietor or commercial enterprise, we offer a range of high and low volume checking options to meet your needs.</p>



        </div>
    </div>
</section></div><div class="block b49block  col-md-12">

<style>
    .pop_main_container_board .pop_main_container ol li ol li {  }
</style>
<style>
    .tab_h4 { display: inline !important;}
    .b49bottom                                      { width: 100%; padding-top: 25px; padding-bottom:50px;}
    .b49bottom a.b49mainbutton                      { background: #25455a; padding: 13px 60px; letter-spacing: 1px; color: #fff; border-radius: 30px; text-transform: uppercase; font-size: 12px; font-family: 'Prompt-Bold'; margin: 35px 0px 20px; text-align: center;min-width:145px; }
    .b49bottom a.b49mainbutton:hover                { background: #182e39; }
    .b49bottom ul                                   { display:inline-block; margin:0; padding-top:30px; /* For IE, the outcast */ zoom:1; *display:inline; }
    .b49bottom ul li                                { display: inline-block; }
    .b49bottom a.b49LinkItem                        { color: #268d6e; background: url(../../../../Static/img/CustomBlocks/B20/arrow_green.png) no-repeat right 3px; padding: 0px 15px 0px 0px; margin-right: 20px; margin-top: 0px; letter-spacing: 0.5px; font-size: 12px; font-family: "Prompt-SemiBold"; text-shadow: none; text-transform: uppercase;padding-left:40px;}
    .b49bottom a.b49LinkItem:hover                  { color: #1c7258; background: url(../../../../Static/img/CustomBlocks/B20/arrow_green_hover.png) no-repeat right 3px; font-size: 12px; font-family: "Prompt-SemiBold"; text-shadow: none; text-transform: uppercase; }
    .b49bottom ul li a.b49multilink                 { color: #268d6e; background: url(../../../../Static/img/CustomBlocks/B20/arrow_green.png) no-repeat right 3px; padding: 0px 15px 0px 0px; margin-right: 20px; margin-top: 0px; letter-spacing: 0.5px;padding-left:20px; font-size: 12px; font-family: "Prompt-SemiBold"; text-shadow: none; text-transform: uppercase;}
    .b49bottom ul li a.b49multilink:hover           { color: #1c7258; background: url(../../../../Static/img/CustomBlocks/B20/arrow_green.png) no-repeat right 3px; padding: 0px 15px 0px 0px; margin-right: 20px; margin-top: 0px; letter-spacing: 0.5px;padding-left:20px; font-size: 12px; font-family: "Prompt-SemiBold"; text-shadow: none; text-transform: uppercase;}
</style>
<section>
    <div class="b49lines-credit-main">
        <div class="container">
                        <div class="b49lines-credit-table-sectopn b49mobile_section">
                <table class="b49lines-credit-table">
                    <tr>
                        <td style="vertical-align:bottom;"><h4 class="tab_h4" style="float:right;">CUSTOMER PROFILE</h4></td>
                        <th>
                                <h3>LOW VOLUME<br />     </h3>
                            <p>&nbsp;</p>
<p>A popular, cost-effective checking solution for businesses with less banking activity and basic needs.</p>
                                <a href="../low-volume/index.html">Learn More</a>
                        </th>
                        <th>
                                <h3>LOW VOLUME<br />+ INTEREST</h3>
                            <p>A great option for businesses with lower-volume transactions that want to earn interest on balances.</p>
                                <a href="../low-volume-plus-interest/index.html">Learn More</a>
                        </th>
                        <th>
                                <h3>HIGH VOLUME +<br />EARNINGS CREDIT</h3>
                            <p>Designed for businesses with a higher transaction volume and complex cash management needs. Earnings credit offsets fees.</p>
                                <a href="../high-volume-plus-earnings-credit/index.html">Learn More</a>
                        </th>
                        <th>
                                <h3>HIGH VOLUME<br />+ INTEREST</h3>
                            <p>Perfect for businesses with higher volume and higher balances who want to earn interest on funds.</p>
                                <a href="../high-volume-plus-interest/index.html">Learn More</a>
                        </th>
                    </tr>
                    <tr><td><h4><p style="text-align: right;">Minimum Monthly Balance</p></h4></td><td>None</td><td><p>None - Interest paid on balances of $500 or more<sup>1</sup></p></td><td>None</td><td><p>None</p></td></tr><tr><td><h4><p style="text-align: right;">INTEREST OR EARNINGS CREDIT</p></h4></td><td>None</td><td><p>Tiered, Variable Interest Rate<sup>2</sup></p></td><td><p>Earnings credit rate<sup>3</sup></p></td><td><p>Tiered, Variable Interest Rate<sup>2</sup></p></td></tr><tr><td><h4><p style="text-align: right;"><strong>MONTHLY MAINTENANCE FEE</strong></p></h4></td><td><p>$0<sup>7</sup></p></td><td><p>$5<sup>7</sup></p></td><td><p>$10<sup>7</sup></p></td><td><p>$10<sup>7</sup></p></td></tr><tr><td><h4><p style="text-align: right;"><strong>Total Free Transactions<sup>4</sup></strong></p></h4></td><td><p>150 free items per statement cycle, $.20 per item thereafter (combination of debits and deposited items)</p></td><td><p>150 free items per statement cycle, $.20 per item thereafter (combination of debits and deposited items)</p></td><td></td><td></td></tr><tr><td><h4><p style="text-align: right;">PER WITHDRAWAL CHARGE<sup>5</sup></p></h4></td><td></td><td></td><td><p>$0.15</p></td><td><p>$0.15</p></td></tr><tr><td><h4><p style="text-align: right;">PER DEPOSIT ITEM CHARGE<sup>6</sup></p></h4></td><td></td><td></td><td><p>$0.10</p></td><td><p>$0.10</p></td></tr>
                </table>

                <!--Mobile table Starts-->
                <table class="b49lines-credit-table b49mobile_lines-credit-table">
                    <tr>
                        <td>
                                <h3>LOW VOLUME<br />     </h3>
                            <p>&nbsp;</p>
<p>A popular, cost-effective checking solution for businesses with less banking activity and basic needs.</p>
                                <a href="../low-volume/index.html">Learn More</a>
                        </td>
                        <td>
                            <table>
                                <tr><td class='odd'><p style="text-align: right;">Minimum Monthly Balance</p></td></tr><tr><td>None</td></tr><tr><td class='odd'><p style="text-align: right;">INTEREST OR EARNINGS CREDIT</p></td></tr><tr><td>None</td></tr><tr><td class='odd'><p style="text-align: right;"><strong>MONTHLY MAINTENANCE FEE</strong></p></td></tr><tr><td><p>$0<sup>7</sup></p></td></tr><tr><td class='odd'><p style="text-align: right;"><strong>Total Free Transactions<sup>4</sup></strong></p></td></tr><tr><td><p>150 free items per statement cycle, $.20 per item thereafter (combination of debits and deposited items)</p></td></tr><tr><td class='odd'><p style="text-align: right;">PER WITHDRAWAL CHARGE<sup>5</sup></p></td></tr><tr><td></td></tr><tr><td class='odd'><p style="text-align: right;">PER DEPOSIT ITEM CHARGE<sup>6</sup></p></td></tr><tr><td></td></tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                                <h3>LOW VOLUME<br />+ INTEREST</h3>
                            <p>A great option for businesses with lower-volume transactions that want to earn interest on balances.</p>
                                <a href="../low-volume-plus-interest/index.html">Learn More</a>
                        </td>
                        <td>
                            <table>
                                <tr><td class='odd'><p style="text-align: right;">Minimum Monthly Balance</p></td></tr><tr><td><p>None - Interest paid on balances of $500 or more<sup>1</sup></p></td></tr><tr><td class='odd'><p style="text-align: right;">INTEREST OR EARNINGS CREDIT</p></td></tr><tr><td><p>Tiered, Variable Interest Rate<sup>2</sup></p></td></tr><tr><td class='odd'><p style="text-align: right;"><strong>MONTHLY MAINTENANCE FEE</strong></p></td></tr><tr><td><p>$5<sup>7</sup></p></td></tr><tr><td class='odd'><p style="text-align: right;"><strong>Total Free Transactions<sup>4</sup></strong></p></td></tr><tr><td><p>150 free items per statement cycle, $.20 per item thereafter (combination of debits and deposited items)</p></td></tr><tr><td class='odd'><p style="text-align: right;">PER WITHDRAWAL CHARGE<sup>5</sup></p></td></tr><tr><td></td></tr><tr><td class='odd'><p style="text-align: right;">PER DEPOSIT ITEM CHARGE<sup>6</sup></p></td></tr><tr><td></td></tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                                <h3>HIGH VOLUME +<br />EARNINGS CREDIT</h3>
                            <p>Designed for businesses with a higher transaction volume and complex cash management needs. Earnings credit offsets fees.</p>
                                <a href="../high-volume-plus-earnings-credit/index.html">Learn More</a>
                        </td>
                        <td>
                            <table>
                                <tr><td class='odd'><p style="text-align: right;">Minimum Monthly Balance</p></td></tr><tr><td>None</td></tr><tr><td class='odd'><p style="text-align: right;">INTEREST OR EARNINGS CREDIT</p></td></tr><tr><td><p>Earnings credit rate<sup>3</sup></p></td></tr><tr><td class='odd'><p style="text-align: right;"><strong>MONTHLY MAINTENANCE FEE</strong></p></td></tr><tr><td><p>$10<sup>7</sup></p></td></tr><tr><td class='odd'><p style="text-align: right;"><strong>Total Free Transactions<sup>4</sup></strong></p></td></tr><tr><td></td></tr><tr><td class='odd'><p style="text-align: right;">PER WITHDRAWAL CHARGE<sup>5</sup></p></td></tr><tr><td><p>$0.15</p></td></tr><tr><td class='odd'><p style="text-align: right;">PER DEPOSIT ITEM CHARGE<sup>6</sup></p></td></tr><tr><td><p>$0.10</p></td></tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                                <h3>HIGH VOLUME<br />+ INTEREST</h3>
                            <p>Perfect for businesses with higher volume and higher balances who want to earn interest on funds.</p>
                                <a href="../high-volume-plus-earnings-credit/index.html">Learn More</a>
                        </td>
                        <td>
                            <table>
                                <tr><td class='odd'><p style="text-align: right;">Minimum Monthly Balance</p></td></tr><tr><td><p>None</p></td></tr><tr><td class='odd'><p style="text-align: right;">INTEREST OR EARNINGS CREDIT</p></td></tr><tr><td><p>Tiered, Variable Interest Rate<sup>2</sup></p></td></tr><tr><td class='odd'><p style="text-align: right;"><strong>MONTHLY MAINTENANCE FEE</strong></p></td></tr><tr><td><p>$10<sup>7</sup></p></td></tr><tr><td class='odd'><p style="text-align: right;"><strong>Total Free Transactions<sup>4</sup></strong></p></td></tr><tr><td></td></tr><tr><td class='odd'><p style="text-align: right;">PER WITHDRAWAL CHARGE<sup>5</sup></p></td></tr><tr><td><p>$0.15</p></td></tr><tr><td class='odd'><p style="text-align: right;">PER DEPOSIT ITEM CHARGE<sup>6</sup></p></td></tr><tr><td><p>$0.10</p></td></tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <!--Mobile table Ends-->
            </div>

        </div>
    </div>
</section>

<!-- View Rate [3] (within container)-->
<!-- View Rate [3] (within container)--></div><div class="block b25block  col-md-12">
<script>
    $(document).ready(function () {

        if ('/globalassets/images/backgrounds/blue-1.jpg' != 'null' && '/globalassets/images/backgrounds/blue-1.jpg' != '') {
            $(".b25disclosure").css("background", "#245251 url(/globalassets/images/backgrounds/blue-1.jpg) no-repeat");
            if (screen.width > 1000) {
                $(".b25need_help_main").css("background", "#245251 url(/globalassets/images/backgrounds/blue-1.jpg) no-repeat");
            }

        }

    });
</script>
<style>
    /*.b25need_help_main .White { margin-bottom: 20px !important; }
    */
    .b25need_help_main .xhtml h2 {
        color: #e4cb34;
    }
    /*.b25need_help_main { margin-top: -24px; } */
    @media only screen and (max-width:1024px){
        .b25need_help_main {background-color:#245251 !important;}
        .page-about-us .b25need_help_main, .parent-5384 .b25need_help_main { background-color:#1f3848 !important; }
    }
</style>
<section class="row-full">

        <div class="b25need_help_main">
            <div class="container">
                <h2 class="White">Talk to a Business Banker Today!</h2>
                <div class="xhtml"><p>We can help with account selection, business services, financing and more, bringing you best-of-breed banking with the personal support you deserve!</p></div>
                <div class="b25bottom" style="">
                    <center>
                    <a href="../../../pages/about-us/teams/small-business-banking-team/index.html" class="b25mainanchor">Contact Us</a><br clear="all"/>
                    </center>
                </div>
            </div>
        </div>

</section></div><div class="block b13block  col-md-12">

<style>

    .b13what_you_know_main ol li p { padding: 0 10px 0 34px; list-style: none;  margin: 0px 0px 0px 0px; font-size:14px; text-align:left;}
    .b13what_you_know_main ol li { width:100% }
    .b13what_you_know_main ol li ol li{ width:50%; }
    .b13what_you_know_main_white ol li ol li { width:50%; }
</style>
<script>
    $(document).ready(function () {
        //GetDisclosurePoints();
        GetDisclosurePointsBrackets();
    });
</script>
<section class="row-full">
        <div class="b13what_you_know_main">
            <div class="container" style="background-color:#182e39 !important;">
                
                <h4> Disclosures </h4>
                <div class="b13points">
                    <p>{1} Interest not paid on days the balance falls below $500.</p>
<p>{2} At our discretion, we may change the interest rate daily. Interest is calculated using the daily balance method. Interest is compounded.</p>
<p>{3} Earnings credit rate may change and will be shown on the Deposit Account Rate Schedule.</p>
<p>{4} "Transaction" refers to any combination of items, paid or unpaid, including paper and electronic. 150 free total transactions represents a combination of withdrawals &amp; deposits before withdrawal and deposit fees apply. First PREMIER will assess a cost-per-excess transaction fee over transactions allowed per statement cycle.</p>
<p>{5} "Withdrawal" refers to any transaction whether initiated in person, by check, draft or similar paper instrument, or any transaction initiated electronically through electronic funds transfer. Withdrawals fees to not apply to transactions made using a First PREMIER Bank Debit Card, transactions initiated through wire transfer, transactions initiated through Online Bill Payment, or transfers initiated through Business Online Banking.</p>
<p>{6} &ldquo;Deposit" refers to all deposit transactions. Deposits do not include transactions or transfers made through Business Online Banking.</p>
<p>{7} A $5 fee is assessed to customers receiving paper statements.</p>
<p>&nbsp;</p>
                </div>
            </div>
        </div>
</section></div></div>

 

<div class="row-full footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 footerCol1">
                <div class="footerHeader">Company</div>
                
<ul>
    
        <li>
            <a href="../../../pages/about-us/index.html">About Us</a> 
        </li>
    
        <li>
            <a href="../../../index.html">First PREMIER Bank</a> 
        </li>
    
        <li>
            <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a> 
        </li>
    
        <li>
            <a href="../../../pages/about-us/leadership-team/index.html">Leadership</a> 
        </li>
    
        <li>
            <a href="../../../pages/about-us/community/index.html">Community</a> 
        </li>
    
        <li>
            <a href="{{route('frontend.en.pages.about.careers')}}">Careers</a> 
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
            <a href="../../index.html">Small Business</a> 
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
            <a href="../../../pages/quick-links/customer-care/index.html">Customer Care</a> 
        </li>
    
        <li>
            <a href="../../../pages/quick-links/locations/index.html">Locations</a> 
        </li>
    
        <li>
            <a href="../../../pages/quick-links/customer-care/index.html">BANK: 800-501-6535</a> 
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
            <a href="../../../pages/resources/first-premier-privacy-statement-2020/index.html">Privacy Notice &amp; Statement</a> 
        </li>
    
        <li>
            <a href="../../../pages/resources/legal-disclosures/index.html">Legal Disclosures</a> 
        </li>
    
        <li>
            <a href="../../../pages/resources/cookie-policy/index.html">Cookie Policy</a> 
        </li>
    
</ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-top:50px;">
 <p>Member FDIC | <img src="../../../../Static/img/equalhousinglender.png" alt="Equal Housing Lender" title="Equal Housing Lender" />Equal Housing Lender</p>            </div>
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
    .showehllogo { background: url('../../../../Static/img/EHLlogo%20white.png') 230px 0px no-repeat; background-size: 24px 24px }
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
    <div class="smallLogo"><a href="../../../index.html" title="First PREMIER Bank - Home"><img src="../../../../Static/gfx/Logo.png" style="max-width:100%;" /></a></div>
    <script type="text/javascript" src="../../../../../dl.episerver.net/13.4.4.1/epi-util/find.js"></script>
<script type="text/javascript">
if(FindApi){var api = new FindApi();api.setApplicationUrl('../../../../index.html');api.setServiceApiBaseUrl('../../../../find_v2/index.html');api.processEventFromCurrentUri();api.bindWindowEvents();api.bindAClickEvent();api.sendBufferedEvents();}
</script>

    <script type="text/javascript" src="../../../../Static/js/pushy.js"></script>
    <script type="text/javascript" src="../../../../Static/js/Blocks_2019062002.js"></script>
@endsection