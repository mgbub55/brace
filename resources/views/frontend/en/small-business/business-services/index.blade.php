

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
        .xhtml
{
min-height: 70px;
}
    </style>
<div class="row equal-height"><div class="block b25block  col-md-12">
<script>
    $(document).ready(function () {

        if ('/contentassets/acad1a1a6a8b420fb951eca2c3554d85/business_services.png' != 'null' && '/contentassets/acad1a1a6a8b420fb951eca2c3554d85/business_services.png' != '') {
            $(".b25disclosure").css("background", "#245251 url(/contentassets/acad1a1a6a8b420fb951eca2c3554d85/business_services.png) no-repeat");
            if (screen.width > 1000) {
                $(".b25need_help_main").css("background", "#245251 url(/contentassets/acad1a1a6a8b420fb951eca2c3554d85/business_services.png) no-repeat");
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
                <h2 class="White">Business Banking Services</h2>
                <div class="xhtml"><p>We provide businesses of all sizes with customizable banking, lending, investment and treasury services. First PREMIER is committed to always doing what&rsquo;s right for you, your company and our communities. That&rsquo;s how we&rsquo;ve grown to be one of the nation&rsquo;s best performing community banks and the country&rsquo;s 14th largest ACH originator.</p>
<p><a href="../../pages/about-us/teams/small-business-banking-team/index.html">Meet our Business Banking Team</a></p></div>
                <div class="b25bottom" style="">
                    <center>
                    <a href="https://goldleafach.com/ach/signin.aspx?218264CB36" class="b25mainanchor">Log into ACH Online</a><br clear="all"/>
                    </center>
                </div>
            </div>
        </div>

</section></div><div class="block b08block  col-md-12">
<section>
    <div class="b8giving_back_main">
        <div class="container">
            <h2></h2>
            <div class="b8box_scroll_main">
                <div class="b8box_scroll">

                    <div class="b8giving_back col-md-4">
                        <center><img class="img-responsive" src="../../../contentassets/dcd5945edbfc48e197de628758fb11f3/2.5_b-8-3column-1_pay-min.png" title="Make Payments" alt="woman cashier "></center>
                        <h3>Make Payments</h3>
                        <div class="xhtml"><p>Manage payroll, expense reimbursement, vendor, tax and recurring customer payments.</p>
<p>&nbsp;</p></div>
                                <a class="b8btn" href="make-payments/index.html">Learn More</a>
                    </div>

                    <div class="b8giving_back col-md-4">
                        <center><img class="img-responsive" src="../../../contentassets/dcd5945edbfc48e197de628758fb11f3/2.5_b-8-3column-1_payroll-min.png" title="Accept Payments" alt="calculator "></center>
                        <h3>Accept Payments</h3>
                        <div class="xhtml"><p style="text-align: left;">Accept debit and credit cards, speed transactions and receipt of funds with Merchant Card Services.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p></div>
                                <a class="b8btn" href="accept-payments/index.html">Learn More</a>
                    </div>

                    <div class="b8giving_back col-md-4">
                        <center><img class="img-responsive" src="../../../contentassets/dcd5945edbfc48e197de628758fb11f3/2.5_b-8-3column-3_security-min.png" title="Security &amp; Fraud Prevention" alt="man and woman on laptop " ></center>
                        <h3>Security &amp; Fraud Prevention</h3>
                        <div class="xhtml"><p>Learn more about the security and fraud prevention solutions available through First PREMIER Bank.</p></div>
                                <a class="b8btn" href="../business-checking/security-and-fraud-protection/index.html">Learn More</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section></div><div class="block b15block  col-md-12">
<section style="padding-left:0px;">
    <div class="b15benfits_main_box">
        <div class="container">
            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">  <div class="b15avtar"><img src="../../../globalassets/images/secondary-icons/bright/business-finance/bright-business-_-finance-secondary-icon-25.png" title="Merchant Card Services" alt="credit card" height ="116px" width="116px"></div>  <div class="b15avtar_content">    <h3>Merchant Card Services</h3><p>Accept debit and credit cards on-site, online and by phone. It&rsquo;s a powerful way to streamline transactions, accounting and increase revenue.</p>    <div class="clearfix"></div><br/>      <a href="merchant-card-services/index.html">Learn More</a>  </div></div><div class="b15student_parent_main_content b15-bg-student_parent_main_content">  <div class="b15avtar"><img src="../../../globalassets/images/secondary-icons/gold/votes-rewards/gold-votes-_-rewards-secondary-icon-9.png" title="Business Rewards Mastercard®" alt="reward medal" height ="116px" width="116px"></div>  <div class="b15avtar_content">    <h3>Business Rewards Mastercard®</h3><p>Streamline purchasing and expense management for your organization. Our card carries unique rewards.</p>    <div class="clearfix"></div><br/>      <a href="business-rewards-mastercard/index.html">Learn More</a>  </div></div>
        </div>
    </div>
</section>

<style>
    .b4background.colored {
        background-color: #25455a !important;
    }

        .b4background.colored .b15benfits_main_box {
            margin: 0px !important;
        }
</style></div><div class="block b15block  col-md-12">
<section style="padding-left:0px;">
    <div class="b15benfits_main_box">
        <div class="container">
            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">  <div class="b15avtar"><img src="../../../globalassets/images/secondary-icons/blue/phone/blue-hardware-secondary-icon-11.png" title="Remote Deposit" alt="cell phone" height ="116px" width="116px"></div>  <div class="b15avtar_content">    <h3>Remote Deposit</h3><p>Scan checks from your office and make batch deposits without a trip to the bank. Remote deposit is a great companion for business deposit needs.</p>    <div class="clearfix"></div><br/>      <a href="remote-deposit/index.html">Learn More</a>  </div></div><div class="b15student_parent_main_content b15-bg-student_parent_main_content">  <div class="b15avtar"><img src="../../../globalassets/images/secondary-icons/bright/business-finance/bright-business-_-finance-secondary-icon-22.png" title="ACH Online" alt="pie graph" height ="116px" width="116px"></div>  <div class="b15avtar_content">    <h3>ACH Online</h3><p>A powerful and affordable solution that helps you manage payments, payroll and accounts receivable.</p>    <div class="clearfix"></div><br/>      <a href="make-payments/index.html">Learn More</a>  </div></div>
        </div>
    </div>
</section>

<style>
    .b4background.colored {
        background-color: #25455a !important;
    }

        .b4background.colored .b15benfits_main_box {
            margin: 0px !important;
        }
</style></div><div class="block b15block  col-md-12">
<section style="padding-left:0px;">
    <div class="b15benfits_main_box">
        <div class="container">
            <div class="b15student_parent_main_content b15-bg-student_parent_main_content">  <div class="b15avtar"><img src="../../../globalassets/images/secondary-icons/gold/business-finance/gold-business-_-finance-secondary-icon-12.png" title="Positive Pay" alt="check" height ="116px" width="116px"></div>  <div class="b15avtar_content">    <h3>Positive Pay</h3><p>A powerful, affordable fraud management solution for businesses of every size.</p>    <div class="clearfix"></div><br/>      <a href="positive-pay/index.html">Learn More</a>  </div></div><div class="b15student_parent_main_content b15-bg-student_parent_main_content">  <div class="b15avtar"><img src="../../../globalassets/images/secondary-icons/bright/business-finance/bright-business-_-finance-secondary-icon-35.png" title="Lockbox Services" alt="safe" height ="116px" width="116px"></div>  <div class="b15avtar_content">    <h3>Lockbox Services</h3><p>Centralize payments sent by mail, reducing your risk of fraud while saving time with fast, accurate processing.</p>    <div class="clearfix"></div><br/>      <a href="lockbox-services/index.html">Learn More</a>  </div></div>
        </div>
    </div>
</section>

<style>
    .b4background.colored {
        background-color: #25455a !important;
    }

        .b4background.colored .b15benfits_main_box {
            margin: 0px !important;
        }
</style></div><div class="block b06block  col-md-12"><style>
    .b06carousel-inner {
        position: relative;
        width: 60% !important;
        overflow: hidden;
        margin: 0 20% 0 19% !important;
        height: 268px;
    }
    .b06carousel-control .glyphicon-chevron-left::before, .glyphicon-chevron-right::before { content: "" !important; }
    .b06carousel-control:focus, .b06carousel-control:hover, .b06carousel-control.left, .b06carousel-control.right { background: none !important; }
    .b06carousel-control { z-index: 999; opacity: inherit !important; }
    .b06carousel-inner > .item.next.left, .carousel-inner > .item.prev.right, .carousel-inner > .item.active{transform:inherit !important;}
    .b06carousel-inner > .item{perspective:inherit !important;}
    .b06carousel-control.left{left:-3% !important;}

    @media only screen and (max-width:1366px) {
    /*#region B-6*/
    .b06carousel-inner{width:80% !important;margin:0 10% 0 10% !important;}
    /*#endregion*/
    }
    @media only screen and (max-width:1000px) {
    /*#region B-6*/
    .b06carousel-control.left{left:0 !important;}
    .b06carousel-control .glyphicon-chevron-left, .carousel-control .glyphicon-chevron-right, .carousel-control .icon-next, .carousel-control .icon-prev{top:50% !important;}
    .b06carousel-control{width:10% !important;}
    .glyphicon-chevron-left img, .glyphicon-chevron-right img{width:100%;}
    .b06carousel-inner{height:320px;}
    /*#endregion*/
    }
    @media screen and (max-width: 767px) {
    /*#region B-6*/
    .b06carousel-inner{height:300px;}
    /*#endregion*/
    }
</style>
<script type="text/javascript">
    $('#b06Carousel').carousel({
        interval: 80000,
    })
</script>





<section class="row-full">
    <div class="b6featured_quote_main">
            <img src="../../../Static/img/CustomBlocks/B6/featured_bg.png" class="b6featured_bg" alt="First PREMIER Bank">
            <img src="../../../Static/img/CustomBlocks/B6/featured_bg_small.png" class="b6featured_bg_small_bg" alt="First PREMIER Bank">
        <div class="b6featured_bg_small carousel" id="b06Carousel" data-ride="carousel">
            <div class="">
                <div class="carousel-inner b06carousel-inner">
                    <div class="item active"><div class="row b6mypadding"><div class="b6featured_quote_img col-lg-5 col-md-5"><img src=../../../contentassets/47b9a906e4ae4d9586caaaad5e248d9d/quote_luke_tibbetts.jpg class="b6featured_img" alt="Luke Tibbetts VP of Business Banking"></div><div class="b6featured_quote col-lg-7 col-md-7"><p>First PREMIER helps give small businesses a competitive edge by making the management of accounts payable and receivable  -- and even payroll -- a whole lot easier.</p><div class="clearfix"></div><span> - Luke Tibbetts, VP, Business Banking</span></div></div></div><div class="item"><div class="row b6mypadding"><div class="b6featured_quote_img col-lg-5 col-md-5"><img src=../../../contentassets/aff9c7485c454640ada3e11dcc91ba61/quotes-mikekaiser.png class="b6featured_img" alt="Mike Kaiser VP Treasury Services"></div><div class="b6featured_quote col-lg-7 col-md-7"><p>Our innovative systems, processes and technology are proven and reliable. We constantly  go above and beyond to provide excellent service. Our clients are always given a dedicated line of communication to our team.</p><div class="clearfix"></div><span> - Mike Kaiser, VP, Treasury Services</span></div></div></div><div class="item"><div class="row b6mypadding"><div class="b6featured_quote_img col-lg-5 col-md-5"><img src=../../../contentassets/35c6d1c32fee4d4dbd36759d92f2e96e/quotes-scottweeldreyer.png class="b6featured_img" alt="Scott Weeldreyer VP Investment Management"></div><div class="b6featured_quote col-lg-7 col-md-7"><p>We work actively with businesses of all sizes to protect and preserve their legacies for the long haul, providing responsive, personal support along the way and serving in a variety of roles to meet client needs.</p><div class="clearfix"></div><span> - Scott Weeldreyer, VP, Investment Management</span></div></div></div>

                </div>
            </div>

                <a class="left carousel-control b06carousel-control" href="#b06Carousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"><img src="../../../Static/img/CustomBlocks/B6/left_arrow.png" alt="First PREMIER Bank"></span>
                    <span class="sr-only"></span>
                </a>
                <a class="right carousel-control b06carousel-control" href="#b06Carousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"><img src="../../../Static/img/CustomBlocks/B6/right_arrow.png" alt="First PREMIER Bank"></span>
                    <span class="sr-only"></span>
                </a>
        </div>
    </div>
</section>

</div><div class="block b26block  col-md-12">



<style>
    .carousel-control:focus, .carousel-control:hover, .carousel-control.left, .carousel-control.right {
        background: none !important;
    }
    .b26line_credit_main .carousel-inner { min-height:520px !important;; }

    .white-background h2, .white-background .xhtml, .white-background .xhtml p,
    .grey-background h2, .grey-background .xhtml, .grey-background .xhtml p
    {
        color: #000;
    }
</style>
<script>
    var alternateBackground = "True";
    $(document).ready(function () {
        $('#myCarousel-').carousel({
            interval: 16000
        })

        if (alternateBackground.toLowerCase() == "true") {
            $("#b26linecredit").addClass("alternate_background");
        } else {
            $("#b26linecredit").addClass("primary_background");
        }
    });

</script>

<section class="row-full">
    <div class="b26line_credit_main" id="b26linecredit">
        <div class="container">

                <h2>You May Also Be Interested In</h2>


            <div class="row">
                <div class="col-md-12 hidden-xs hidden-sm">
                    <div class="carousel" id="myCarousel-" data-interval="false">
                        <div class="carousel-inner">
                            <div class='item active'><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad'><div class='b26line_credit_loans_left'><img src='../../../globalassets/ymabii/small-business/alex_jensen_bill_oconnor_inca.jpg' alt=''></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Bank with Confidence</h3></div><h3><br clear='all'/><div class="xhtml"><p>From low- or high-volume checking, to savings and CDs, to Online Banking, we&rsquo;ve got you covered.</p>
<ul>
<li><a href="../business-checking/index.html">Business Checking</a></li>
<li><a href="../savings-and-cds/index.html">Business Savings &amp; CDs</a></li>
<li><a href="../online-and-mobile/index.html">Online &amp; Mobile Tools</a></li>
</ul></div></h3></div></div><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans b26line_personal_loans no-pad'><div class='b26line_credit_loans_left'><img src='../../../globalassets/ymabii/small-business/pam_hannemann_midwest.jpg' alt='group of people talking at table'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Take Care of Employees</h3></div><h3><br clear='all'/><div class="xhtml"><p>We offer group retirement, profit sharing, stock purchase plans and perks for corporate customers.</p>
<ul>
<li><a href="../asset-management-and-trust/employee-benefits/index.html">Employee Benefits</a></li>
<li><a href="../asset-management-and-trust/group-retirement-plans/index.html">Group Retirement</a></li>
<li><a href="../asset-management-and-trust/first-premier-at-work/index.html">First PREMIER at Work</a></li>
</ul></div></h3></div></div><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad last'><div class='b26line_credit_loans_left'><img src='../../../globalassets/ymabii/small-business/floyd_rummel_dsu.jpg' alt='banker talking to customer'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Protect Your Assets</h3></div><h3><br clear='all'/><div class="xhtml"><p>From overdraft protection to proactive fraud management, we put your interests first.</p>
<ul>
<li><a href="../business-checking/overdraft-protection/index.html">Overdraft Protection</a></li>
<li><a href="../business-checking/security-and-fraud-protection/index.html">Security &amp; Fraud Prevention</a></li>
<li><a href="positive-pay/index.html">Positive Pay</a></li>
</ul></div></h3></div></div></div>
                        </div>
                    </div>
                </div>
                <div class="b26Mobile col-sm-6 hidden-md hidden-lg" style="left:-8px;">
                    <center>
                    <div class="b26MobileCard" style="width:345px;min-height:700px;">
                        <div class='item'><div class='col-xs-12 col-sm-12 b26AltClass b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../globalassets/ymabii/small-business/alex_jensen_bill_oconnor_inca.jpg' alt=''></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Bank with Confidence</h3></div><h3><br clear='all'/><div class="xhtml"><p>From low- or high-volume checking, to savings and CDs, to Online Banking, we&rsquo;ve got you covered.</p>
<ul>
<li><a href="../business-checking/index.html">Business Checking</a></li>
<li><a href="../savings-and-cds/index.html">Business Savings &amp; CDs</a></li>
<li><a href="../online-and-mobile/index.html">Online &amp; Mobile Tools</a></li>
</ul></div></h3></div></div></div><div class='item'><div class='col-xs-12 col-sm-12 b26AltClass b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../globalassets/ymabii/small-business/pam_hannemann_midwest.jpg' alt='group of people talking at table'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Take Care of Employees</h3></div><h3><br clear='all'/><div class="xhtml"><p>We offer group retirement, profit sharing, stock purchase plans and perks for corporate customers.</p>
<ul>
<li><a href="../asset-management-and-trust/employee-benefits/index.html">Employee Benefits</a></li>
<li><a href="../asset-management-and-trust/group-retirement-plans/index.html">Group Retirement</a></li>
<li><a href="../asset-management-and-trust/first-premier-at-work/index.html">First PREMIER at Work</a></li>
</ul></div></h3></div></div></div><div class='item'><div class='col-xs-12 col-sm-12 b26AltClass b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../globalassets/ymabii/small-business/floyd_rummel_dsu.jpg' alt='banker talking to customer'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Protect Your Assets</h3></div><h3><br clear='all'/><div class="xhtml"><p>From overdraft protection to proactive fraud management, we put your interests first.</p>
<ul>
<li><a href="../business-checking/overdraft-protection/index.html">Overdraft Protection</a></li>
<li><a href="../business-checking/security-and-fraud-protection/index.html">Security &amp; Fraud Prevention</a></li>
<li><a href="positive-pay/index.html">Positive Pay</a></li>
</ul></div></h3></div></div></div>
                    </div>
                    </center>
                </div>

            </div>
        </div>
    </div>
</section>


</div></div>
    <script>
        $('#b06Carousel').carousel({
    interval: 16000,
})
    </script>



<div class="row-full footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 footerCol1">
                <div class="footerHeader">Company</div>

<ul>

        <li>
            <a href="../../pages/about-us/index.html">About Us</a>
        </li>

        <li>
            <a href="../../index.html">First PREMIER Bank</a>
        </li>

        <li>
            <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a>
        </li>

        <li>
            <a href="../../pages/about-us/leadership-team/index.html">Leadership</a>
        </li>

        <li>
            <a href="../../pages/about-us/community/index.html">Community</a>
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
            <a href="../../index.html">Personal Banking</a>
        </li>

        <li>
            <a href="../index.html">Small Business</a>
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
            <a href="../../pages/quick-links/customer-care/index.html">Customer Care</a>
        </li>

        <li>
            <a href="../../pages/quick-links/locations/index.html">Locations</a>
        </li>

        <li>
            <a href="../../pages/quick-links/customer-care/index.html">BANK: 800-501-6535</a>
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
            <a href="../../pages/resources/first-premier-privacy-statement-2020/index.html">Privacy Notice &amp; Statement</a>
        </li>

        <li>
            <a href="../../pages/resources/legal-disclosures/index.html">Legal Disclosures</a>
        </li>

        <li>
            <a href="../../pages/resources/cookie-policy/index.html">Cookie Policy</a>
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
