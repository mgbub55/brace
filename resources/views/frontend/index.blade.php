@extends('frontend.layouts.app')

@section('content')
    <div class="container">

        <!--start responsive menu-->
        @include('frontend.layouts.components.header')
        <!-- Main Header -->
        @include('frontend.layouts.components.navbar')

        <div class="p1">
            <div class="block alertblock  col-md-12">
                <div class="alert alert-info with-warning-icon" role="alert"
                    style='margin-bottom:0px;font-family:prompt-medium;'>
                    <h3>For Paycheck Protection Program (PPP) Forgiveness, <a
                            href="en/small-business/loans-and-credit-lines/small-business-loans/index.html">CLICK
                            HERE</a>.</h3>
                </div>
            </div>
            <div class="block b01block  col-md-12">

                <script>
                    var b01title = "_" + "b01-title";
                    var b01msg = "_" + "b01-msg";
                    var b01heroimage = "_" + "b01-heroimage";
                    var b01linkname = "_" + "b01-linkname";
                    var b01linkurl = "_" + "b01-linkurl";
                    var b01titlemobile = "_" + "b01-titlemobile";
                    var b01messagemobile = "_" + "b01-messagemobile";

                    var WelcomeObj = {
                        title: '',
                        msg: '',
                        heroimage: '',
                        linkname: '',
                        linkurl: '',
                        titlemobile: '',
                        messagemobile: ''
                    };

                    $(document).ready(function() {
                        var title = sessionStorage.getItem(b01title) || '';
                        if (title != '') {

                            var msg = sessionStorage.getItem(b01msg);
                            var heroimage = sessionStorage.getItem(b01heroimage);
                            var linkname = sessionStorage.getItem(b01linkname);
                            sessionStorage.setItem(b01linkurl, 'en/personal/investing/retirement-planning/index.html');
                            //  var linkurl = sessionStorage.getItem(b01linkurl);
                            var titlemobile = sessionStorage.getItem(b01titlemobile);
                            var messagemobile = sessionStorage.getItem(b01messagemobile);

                            titlemobile = titlemobile.replace('<br />', ''); // here I am removing the <br/>
                            messagemobile = messagemobile.replace('<br />', ''); // tags...

                            WelcomeObj.title = title;
                            WelcomeObj.msg = msg;
                            WelcomeObj.heroimage = heroimage;
                            WelcomeObj.linkname = linkname;
                            //  WelcomeObj.linkurl = linkurl;
                            WelcomeObj.linkurl = 'en/personal/investing/retirement-planning/index.html';
                            WelcomeObj.titlemobile = titlemobile;
                            WelcomeObj.messagemobile = messagemobile;
                            SetWelcomeData(WelcomeObj);
                        } else {
                            var wt = "<p>Your Life, <br />Your Legacy</p>";
                            var wm =
                                "<p>From planning for retirement <br />to passing wealth to the next <br />generation, First PREMIER is a <br />financial partner for life.</p>";
                            var wtm = "<p>Your Life, Your Legacy</p>";
                            var wmm =
                                "<p>From planning for retirement to passing wealth to the next generation, First PREMIER is a financial partner for life.</p>";

                            sessionStorage.setItem(b01title, wt);
                            sessionStorage.setItem(b01msg, wm);
                            sessionStorage.setItem(b01heroimage,
                                "{{ asset('assets/frontend/contentassets/8aef8f5d84b142dfb6f7928c60c852b1/fpb_hero_summer_your_life.jpg') }}"
                            );
                            sessionStorage.setItem(b01linkname, 'Learn More');
                            sessionStorage.setItem(b01linkurl, 'en/personal/investing/retirement-planning/index.html');
                            sessionStorage.setItem(b01titlemobile, wtm);
                            sessionStorage.setItem(b01messagemobile, wmm);
                            WelcomeObj.title = wt;
                            WelcomeObj.msg = wm;
                            WelcomeObj.heroimage =
                                "{{ asset('assets/frontend/contentassets/8aef8f5d84b142dfb6f7928c60c852b1/fpb_hero_summer_your_life.jpg') }}";
                            WelcomeObj.linkname = 'Learn More';
                            WelcomeObj.linkurl = 'en/personal/investing/retirement-planning/index.html';
                            WelcomeObj.titlemobile = wtm; // These are the mobile title
                            WelcomeObj.messagemobile = wmm; // and mobile message.
                            SetWelcomeData(WelcomeObj);
                        }
                    });

                    function parseHtmlEntities(str) {
                        return str.replace(/&#([0-9]{1,3});/gi, function(match, numStr) {
                            var num = parseInt(numStr, 10); // read num as normal number
                            return String.fromCharCode(num);
                        });
                    }

                    function SetWelcomeData(wObj) {
                        // 481 or 769
                        if (window.innerWidth < 769) {
                            $('.b1banner_text h1.White').html(wObj.titlemobile);
                            $('.b1banner_text h3.White').html(wObj.messagemobile);
                            $('.b1banner_text h1.White p').attr("style", "width:100% !important; overflow-wrap: break-word;");
                        } else if (window.innerWidth > 768) {
                            $('.b1banner_text h1.White').html(wObj.title);
                            $('.b1banner_text h3.White').html(wObj.msg);
                            //$('.b1banner_text h1.White').attr("style", "width:600px;");
                            //$('.b1banner_text h3.White').attr("style", "width:600px;");
                        }
                        if (wObj.heroimage)
                            $("#b1Main-Hero-banner").css('background', 'url(' + wObj.heroimage + ')');
                        else
                            $("#b1Main-Hero-banner").css('background', 'url(~/Static/img/CustomBlocks/B1/FPB-Hero-Personal-1A.jpg)');
                        if (wObj.linkurl != "" && wObj.linkurl != "#") {
                            // alert(wObj.linkname + wObj.linkurl);
                            $('#HeroButton').text(wObj.linkname);
                            $('#HeroButton').attr("href", wObj.linkurl);
                            $("#HeroButton").css('visibility', 'visible');
                        } else {

                            // $("#HeroButton").css('visibility', 'hidden');
                            $("#HeroButton").css('display', 'none');
                        }

                    }
                </script>
                <style>
                    .b1banner_text h1.White {
                        font-size: 55px;
                        font-family: &quot;
                        Prompt-SemiBold&quot;
                        ;
                        text-shadow: none;
                        margin-bottom: 15px;
                        color: #fff;
                    }

                    .b1banner_text h3.White {
                        font-size: 20px;
                        line-height: 32px;
                        font-family: &quot;
                        Prompt-Regular&quot;
                        ;
                        color: #fff;
                    }

                </style>

                <section class="row-full b1">
                    <div id="b1Main-Hero-banner" class="b1hero_banner">
                        <div class="b1banner-desc">
                            <div class="container">
                                <div class="row b1mobile">
                                    <div class="col-md-8 col-xs-12 col-sm-6 mobile-show">
                                        <div class="b1banner_text">
                                            <h1 class="White"></h1>
                                            <h3 class="White"></h3>
                                            <a id="HeroButton"></a>

                                        </div>
                                    </div>


                                    <div class="col-md-4 col-xs-6 col-sm-6 mobile-show">
                                        <div class="b1login_Box">
                                            <form name="Q2OnlineLogin"
                                                action="https://online.firstpremier.com/FirstPremierBankOnline/uux.aspx"
                                                method="post">
                                                <h3>Access Your Account</h3>
                                                <div class="b1access">Access your First PREMIER Bank account.
                                                </div>
                                                <div class="form-group">
                                                    <select id="AccessAccountDropdown" class="form-control">
                                                        <option value="" id="selectaccount">Select Account Type</option>
                                                        <option value="https://www.mypremiercreditcard.com/login.aspx"
                                                            data-type="" id="creditcardpayment">Credit Card</option>
                                                        <option
                                                            value="https://online.firstpremier.com/FirstPremierBankOnline/uux.aspx"
                                                            data-type="actionitem" id="personalbanking">Personal Banking
                                                        </option>
                                                        <option
                                                            value="https://online.firstpremier.com/FirstPremierBankOnline/uux.aspx"
                                                            data-type="actionitem" id="businessbanking">Business Banking
                                                        </option>
                                                        <option value="https://firstpremier.fdecs.com/eCustService/"
                                                            data-type="" id="businessrewards">Business Rewards Credit
                                                            Card</option>
                                                        <option value="https://goldleafach.com/ach/signin.aspx?218264CB36"
                                                            data-type="" id="achonline">ACH Online</option>
                                                        <option value="https://icp.infovisa.com/0309/" data-type=""
                                                            id="trust">Trust Online</option>
                                                        <!--https ://www.mauiweb1.com/0309"-->
                                                        <option
                                                            value="https://myaccount.iconnect2invest.com/bankr/login.do?webcontext=iconnect"
                                                            data-type="" id="investmentservices">Brokerage Account
                                                        </option>
                                                        <option
                                                            value="https://firstpremier.mymortgage-online.com/?borrowerportal&siteid=9621968476"
                                                            data-type="" id="mortgage">Mortgage Application</option>
                                                    </select>
                                                </div>
                                                <div class="hide" id="Q2Login">
                                                    <div class="form-group">
                                                        <label for="user_id" style="color:#7c91b1">Login ID</label>
                                                        <input name="user_id" class="form-control" id="user_id"
                                                            placeholder="Enter Login ID" type="text" autocomplete="off">
                                                        <span
                                                            class="glyphicon glyphicon-remove form-control-feedback hide"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" style="color:#7c91b1">Password</label>
                                                        <input name="password" class="form-control" id="password"
                                                            placeholder="Enter Password" type="password" autocomplete="off">
                                                        <span
                                                            class="glyphicon glyphicon-remove form-control-feedback hide"></span>
                                                    </div>
                                                </div>
                                                <div id="loginLine" class="text-center b1smallLine">
                                                    <img src="{{ asset('assets/frontend/Static/img/CustomBlocks/B1/small_line.png') }}"
                                                        alt="">
                                                </div>

                                                <button class="b1btn-login"> Login </button>
                                            </form>
                                            <a class="b1link_access" href="en/pages/resources/enrollment/index.html">Set
                                                up online access
                                                <img src="{{ asset('assets/frontend/Static/img/CustomBlocks/B1/arrow_line.png') }}"
                                                    style="height:11px;" /></a>

                                        </div>

                                        <div class="b1offerbox_lg">
                                            <div class="b1banner_flex_img">
                                                <img src="{{ asset('assets/frontend/contentassets/dec679ff81b14117b1707354073dd868/orangecard.png') }}"
                                                    alt="Respond to a credit card offer">
                                            </div>
                                            <div class="b1banner_flex_text">
                                                <h3>Less Than Perfect Credit? <a class="b1learn_more"
                                                        href="https://www.premiercardoffer.net/?mkt=8&amp;submkt=3025&amp;pid=009&amp;ptc=VCL&amp;dsc=W237">Learn
                                                        more <img
                                                            src="{{ asset('assets/frontend/Static/img/CustomBlocks/B1/arrow_line.png') }}"
                                                            style="height:11px;"> </a></h3>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="b1offerbox col-xs-12 col-sm-12 col-md-12">
                                    <div class="b1login_Box_2">
                                        <div class="b1banner_flex_img">
                                            <img src="{{ asset('assets/frontend/contentassets/dec679ff81b14117b1707354073dd868/orangecard.png') }}"
                                                alt="Respond to a credit card offer">
                                        </div>
                                        <div class="b1banner_flex_text">
                                            <h2>Less Than Perfect Credit? <a class="b1learn_more"
                                                    href="https://www.premiercardoffer.net/?mkt=8&amp;submkt=3025&amp;pid=009&amp;ptc=VCL&amp;dsc=W237">Learn
                                                    more<img
                                                        src="{{ asset('assets/frontend/Static/img/CustomBlocks/B1/arrow_line.png') }}"></a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <script>
                    document.getElementById("user_id").value = '';
                    document.getElementById("password").value = '';
                </script>
            </div>
            <div class="block b05block  col-md-12">
                <style>
                    .b5anytime_box_main .b05topRow {
                        margin-bottom: 0px !important;
                        padding-bottom: 25px !important;
                    }

                    .b5anytime_box_main .b05secondRow {
                        padding-bottom: 23px !important;
                    }

                </style>
                <section>
                    <div class="b5anywhere_banking col-lg-12">
                        <h2>Investing in You</h2>
                        <div class="xhtml">
                            <p style="text-align: center;"><span
                                    id="docs-internal-guid-17447041-fe49-86c4-780b-670ea8c9cca4">From financial
                                    solutions with personal service to giving back to your </span><span
                                    id="docs-internal-guid-17447041-fe49-86c4-780b-670ea8c9cca4"><span
                                        id="docs-internal-guid-17447041-fe49-86c4-780b-670ea8c9cca4">&nbsp;<br />community,
                                        our focus is on what matters to you</span>.<br /><br /></span></p>
                        </div>
                        <div class="b5ContentArea">
                            <div>
                                <div class="col-lg-12 b5anytime_box_main">
                                    <div class="col-md-4 col-sm-6 col-xs-12 b5anytime_box b05topRow"><a
                                            href="en/pages/resources/forms/apply-now/index.html"><img
                                                src="{{ asset('assets/frontend/globalassets/images/primary-icons/bright/business-finance/bright-business-_-finance-primary-icon-12.png') }}"
                                                alt="Apply for FREE+ Checking" height=108px width=108px border="0"></a>
                                        <div class="clearfix"></div><a
                                            href="en/pages/resources/forms/apply-now/index.html">Apply for FREE+
                                            Checking&nbsp;&nbsp;<img
                                                src="{{ asset('assets/frontend/Static/img/CustomBlocks/B09/arrow_yellow.png') }}"></a>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 b5anytime_box b05topRow"><a
                                            href="en/personal/loans-and-credit-lines/index.html"><img
                                                src="{{ asset('assets/frontend/globalassets/images/primary-icons/gold/user/gold-user-primary-icon-6.png') }}"
                                                alt="Lending That’s Always Personal" height=108px width=108px
                                                border="0"></a>
                                        <div class="clearfix"></div><a
                                            href="en/personal/loans-and-credit-lines/index.html">Lending That’s Always
                                            Personal&nbsp;&nbsp;<img
                                                src="{{ asset('assets/frontend/Static/img/CustomBlocks/B09/arrow_yellow.png') }}"></a>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 b5anytime_box b05topRow"><a
                                            href="en/personal/mortgages/index.html"><img
                                                src="{{ asset('assets/frontend/globalassets/images/primary-icons/blue/places/blue-places-primary-icon-14.png') }}"
                                                alt="Streamlined Home Mortgages" height=108px width=108px border="0"></a>
                                        <div class="clearfix"></div><a
                                            href="en/personal/mortgages/index.html">Streamlined Home
                                            Mortgages&nbsp;&nbsp;<img
                                                src="{{ asset('assets/frontend/Static/img/CustomBlocks/B09/arrow_yellow.png') }}"></a>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12 b5anytime_box b05secondRow"><a
                                            href="en/pages/quick-links/locations/index.html"><img
                                                src="{{ asset('assets/frontend/globalassets/images/primary-icons/gold/business-finance/gold-business-_-finance-primary-icon-8.png') }}"
                                                alt="Access to 33,000+ Surcharge-Free ATMs" height=108px width=108px
                                                border="0"></a>
                                        <div class="clearfix"></div><a
                                            href="en/pages/quick-links/locations/index.html">Access to 33,000+
                                            Surcharge-Free ATMs&nbsp;&nbsp;<img
                                                src="{{ asset('assets/frontend/Static/img/CustomBlocks/B09/arrow_yellow.png') }}"></a>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12 b5anytime_box b05secondRow"><a
                                            href="en/personal/online-and-mobile/index.html"><img
                                                src="{{ asset('assets/frontend/globalassets/images/primary-icons/bright/hardware/bright-hardware-primary-icon-12.png') }}"
                                                alt="FREE Mobile & Online Banking" height=108px width=108px border="0"></a>
                                        <div class="clearfix"></div><a
                                            href="en/personal/online-and-mobile/index.html">FREE Mobile & Online
                                            Banking&nbsp;&nbsp;<img
                                                src="{{ asset('assets/frontend/Static/img/CustomBlocks/B09/arrow_yellow.png') }}"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="block b06block  col-md-12">
                <style>
                    .b06carousel-inner {
                        position: relative;
                        width: 60% !important;
                        overflow: hidden;
                        margin: 0 20% 0 19% !important;
                        height: 268px;
                    }

                    .b06carousel-control .glyphicon-chevron-left::before,
                    .glyphicon-chevron-right::before {
                        content: "" !important;
                    }

                    .b06carousel-control:focus,
                    .b06carousel-control:hover,
                    .b06carousel-control.left,
                    .b06carousel-control.right {
                        background: none !important;
                    }

                    .b06carousel-control {
                        z-index: 999;
                        opacity: inherit !important;
                    }

                    .b06carousel-inner>.item.next.left,
                    .carousel-inner>.item.prev.right,
                    .carousel-inner>.item.active {
                        transform: inherit !important;
                    }

                    .b06carousel-inner>.item {
                        perspective: inherit !important;
                    }

                    .b06carousel-control.left {
                        left: -3% !important;
                    }

                    @media only screen and (max-width:1366px) {

                        /*#region B-6*/
                        .b06carousel-inner {
                            width: 80% !important;
                            margin: 0 10% 0 10% !important;
                        }

                        /*#endregion*/
                    }

                    @media only screen and (max-width:1000px) {

                        /*#region B-6*/
                        .b06carousel-control.left {
                            left: 0 !important;
                        }

                        .b06carousel-control .glyphicon-chevron-left,
                        .carousel-control .glyphicon-chevron-right,
                        .carousel-control .icon-next,
                        .carousel-control .icon-prev {
                            top: 50% !important;
                        }

                        .b06carousel-control {
                            width: 10% !important;
                        }

                        .glyphicon-chevron-left img,
                        .glyphicon-chevron-right img {
                            width: 100%;
                        }

                        .b06carousel-inner {
                            height: 320px;
                        }

                        /*#endregion*/
                    }

                    @media screen and (max-width: 767px) {

                        /*#region B-6*/
                        .b06carousel-inner {
                            height: 300px;
                        }

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
                        <img src="{{ asset('assets/frontend/Static/img/CustomBlocks/B6/featured_bg.png') }}"
                            class="b6featured_bg" alt="First PREMIER Bank">
                        <img src="{{ asset('assets/frontend/Static/img/CustomBlocks/B6/featured_bg_small.png') }}"
                            class="b6featured_bg_small_bg" alt="First PREMIER Bank">
                        <div class="b6featured_bg_small carousel" id="b06Carousel" data-ride="carousel">
                            <div class="">
                                <div class="carousel-inner b06carousel-inner">
                                    <div class="item active">
                                        <div class="row b6mypadding">
                                            <div class="b6featured_quote_img col-lg-5 col-md-5"><img
                                                    src="{{ asset('assets/frontend/contentassets/42b0a83aa7394a5788b3da4e8e748d2c/anne_marie_quote.jpg') }}"
                                                    class="b6featured_img" alt=""></div>
                                            <div class="b6featured_quote col-lg-7 col-md-7">
                                                <p>I’m extremely proud to be a part of First PREMIER Bank’s Wealth
                                                    Management team. Helping clients achieve their financial goals is
                                                    incredibly rewarding and I thoroughly enjoy working with such a
                                                    talented group of co-workers.</p>
                                                <div class="clearfix"></div><span> - Anne Marie Feiock, Vice
                                                    President, Sr. Trust Manager</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </section>

            </div>
            <div class="block b07block  col-md-12">

                <style>
                    .b7student_parent_main_content .avtar_content {
                        margin-top: 11px !important;
                        padding-left: 8px !important;
                    }

                    .b7yourlife_bank_main .b7yourlife_bank .b7student_parent_main .b7featuredcard {
                        min-height: 193px;
                    }

                </style>
                <section class="row-full">
                    <!--Your life Bank start-->
                    <div class="b7yourlife_bank_main">
                        <div class="container">
                            <div class="b7yourlife_bank">
                                <h2>Your Life, Your Money</h2>
                                <div class="xhtml">
                                    <p style="text-align: center;">Knowing your bank is behind you as you face
                                        life&rsquo;s challenges is a comfort. From just starting out
                                        and&nbsp;<br />growing a career to planning your future and enjoying retirement,
                                        we&rsquo;re here every step of the way.</p>
                                </div>
                                <div class="col-lg-12 b7student_parent_main_section no-pad">
                                    <div class="col-lg-8 col-md-8 col-sm-8 b7student_parent_main no-pad">
                                        <div class="b7student_parent_main_img"><img
                                                src="{{ asset('assets/frontend/contentassets/2188aa93d0d14db3a642c8eb03f1fced/1.0-b-07-content-huggrad.png') }}"
                                                alt=""></div>

                                        <div class="b7student_parent_main_content b7featuredcard">
                                            <div class="avtar"><img
                                                    src="{{ asset('assets/frontend/globalassets/images/secondary-icons/bright/user/bright-user-secondary-icon-17.png') }}"
                                                    alt=""></div>
                                            <div class="avtar_content">
                                                <h3> For Students &amp; Parents</h3>
                                                <div class="xhtml">
                                                    <p>Stay connected, transfer funds easily and monitor spending with
                                                        First PREMIER Bank.</p>
                                                </div>
                                                <div class="clearfix"></div>
                                                <a href="en/personal/students-and-parents/index.html">Learn More</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div
                                        class="col-lg-4 col-md-4 col-sm-4 b7student_parent_main b7student_parent_right_main no-pad">
                                        <div class="b7student_parent_main_content">
                                            <div class="avtar"><img
                                                    src="{{ asset('assets/frontend/globalassets/images/secondary-icons/gold/business-finance/gold-business-_-finance-secondary-icon-32.png') }}"
                                                    alt=""></div>
                                            <div class="avtar_content">
                                                <h3> Small Business Banking</h3>
                                                <div class="clearfix"></div>
                                                <a href="en/small-business/index.html">Learn More</a>
                                            </div>
                                        </div>
                                        <div class="b7student_parent_main_content">
                                            <div class="avtar"><img
                                                    src="{{ asset('assets/frontend/globalassets/images/secondary-icons/green/nature/green-nature-secondary-icon-5.png') }}"
                                                    alt=""></div>
                                            <div class="avtar_content small_business">
                                                <h3>We Know Ag Banking</h3>
                                                <div class="clearfix"></div>
                                                <a href="en/small-business/ag-banking/index.html">Learn More</a>
                                            </div>
                                        </div>
                                        <div class="b7student_parent_main_content">
                                            <div class="avtar"><img
                                                    src="{{ asset('assets/frontend/globalassets/images/secondary-icons/blue/business-finance/blue-business-_-finance-secondary-icon-36.png') }}"
                                                    alt=""></div>
                                            <div class="avtar_content">
                                                <h3>Grow Your Wealth</h3>
                                                <div class="clearfix"></div>
                                                <a href="en/personal/wealth-management/index.html">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Your life Bank end-->
                </section>
            </div>
            <div class="block b08block  col-md-12">
                <section>
                    <div class="b8giving_back_main">
                        <div class="container">
                            <h2>Giving Back</h2>
                            <div class="b8box_scroll_main">
                                <div class="b8box_scroll">

                                    <div class="b8giving_back col-md-4">
                                        <center><img class="img-responsive"
                                                src="{{ asset('assets/frontend/contentassets/29373899247349f2a307ddab42691d9a/1.0_givingback_1_green-min.png') }}"
                                                title="Deep Rooted Commitment" alt=" "></center>
                                        <h3>Deep Rooted Commitment</h3>
                                        <div class="xhtml">
                                            <p>Learn about First PREMIER Bank&rsquo;s profound contribution and
                                                commitment to our community.</p>
                                        </div>
                                    </div>

                                    <div class="b8giving_back col-md-4">
                                        <center><img class="img-responsive"
                                                src="{{ asset('assets/frontend/contentassets/29373899247349f2a307ddab42691d9a/1.0_givingback_2_girl-min.png') }}"
                                                title="Collegiate Support" alt=" "></center>
                                        <h3>Collegiate Support</h3>
                                        <div class="xhtml">
                                            <p>Find out how First PREMIER Bank supports colleges, universities and
                                                students across our great state.</p>
                                        </div>
                                    </div>

                                    <div class="b8giving_back col-md-4">
                                        <center><img class="img-responsive"
                                                src="{{ asset('assets/frontend/contentassets/29373899247349f2a307ddab42691d9a/1.0_givingback_3_teach-min.png') }}"
                                                title="Community Outreach" alt=" "></center>
                                        <h3>Community Outreach</h3>
                                        <div class="xhtml">
                                            <p>Discover how PREMIER associates demonstrate their passion for people,
                                                through active community service.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <a class="b8see_more" href="en/pages/about-us/community/index.html">LEARN MORE</a>
                        </div>
                    </div>
                </section>
            </div>
            <div class="block b04block  col-md-12">
                <style>
                    .b1banner_flex_img {
                        margin-right: 10px;
                    }

                    #AccessAccountDropdown {
                        color: #4a6375;
                        font-size: 14px;
                        font-family: 'Prompt-Medium';
                    }

                    #user_id {
                        color: #4a6375;
                        font-size: 14px;
                        font-family: 'Prompt-Medium';
                    }

                    @media all and (-ms-high-contrast: none),
                    (-ms-high-contrast: active) {

                        /* IE 10 & 11 CSS styles go here */
                        #signInHoverSection {
                            position: fixed;
                            z-index: 9999;
                            right: auto;
                            top: 48px;
                        }
                    }

                    @supports (-ms-accelerator:true) {

                        /* IE Edge 12+ CSS styles go here */
                        #signInHoverSection {
                            position: absolute;
                            z-index: 9999;
                        }
                    }

                    .alert {
                        background-color: #ead149;
                    }

                    .alert a {
                        color: #254568;
                    }

                    .alertblock {
                        display: block;
                        transform: translateX(-18px);
                        width: 110vw !important;
                        border-top: #25455a;
                        2px solid;
                        border-bottom: #25455a 2px solid;
                    }

                </style>
                <section class="row-full b4background">
                    <div class="container">
                        <div class="b4anywhere_banking" style="width:100%; ">
                        </div>
                    </div>
                </section>
                <script>
                    $(document).ready(function() {
                        var selectedItemId = getCookie("selectedAccessAccountId");
                        if (selectedItemId == 'personalbanking' || selectedItemId == 'businessbanking') {
                            $(".b1login_Box").attr('style', 'height:525px !important');
                        }
                    });

                    $(".b1login_Box").on("change", "#AccessAccountDropdown", function(e) {
                        var selectedIndex = $(this).prop("selectedIndex");
                        var w = $(window).width();
                        if (w < 471) {
                            if (selectedIndex == 2 || selectedIndex == 3) {
                                $(".b1login_Box").attr('style', 'height:525px !important');
                            } else {
                                $(".b1login_Box").attr('style', 'height:325px !important');
                            }
                        }
                    });

                    $(".b1learn_more").html(
                        "Learn more <img src='asset('frontend/Static/img/CustomBlocks/B1/arrow_line.png')' style='height:11px;'>");
                    $(".alert").removeClass('alert-danger');
                    $(".alertblock").addClass('row-full');;
                </script>

                <style>
                    .b4background.colored {
                        background-color: #25455a !important;
                    }

                    .b4background.colored .b15benfits_main_box {
                        margin: 0px !important;

                    }

                    .colored h2,
                    .colored .xhtml p {
                        color: #fff !important;
                    }

                    .page-Our-Communities .block.b04block.col-md-12 {
                        margin-top: 20px;
                    }

                </style>
            </div>
        </div>

        <div class="row-full footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol1">
                        <div class="footerHeader">Company</div>

                        <ul>

                            <li>
                                <a href="en/pages/about-us/index.html">About Us</a>
                            </li>

                            <li>
                                <a href="en/index.html">First PREMIER Bank</a>
                            </li>

                            <li>
                                <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a>
                            </li>

                            <li>
                                <a href="en/pages/about-us/leadership-team/index.html">Leadership</a>
                            </li>

                            <li>
                                <a href="en/pages/about-us/community/index.html">Community</a>
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
                                <a href="en/index.html">Personal Banking</a>
                            </li>

                            <li>
                                <a href="en/small-business/index.html">Small Business</a>
                            </li>

                            <li>
                                <a href="en/commercial/index.html">Commercial</a>
                            </li>

                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol3">
                        <div class="footerHeader">Help &amp; Contact</div>

                        <ul>

                            <li>
                                <a href="en/pages/quick-links/customer-care/index.html">Customer Care</a>
                            </li>

                            <li>
                                <a href="en/pages/quick-links/locations/index.html">Locations</a>
                            </li>

                            <li>
                                <a href="en/pages/quick-links/customer-care/index.html">BANK: 800-501-6535</a>
                            </li>

                            <li>
                                <a href="https://www.mypremiercreditcard.com/">CREDIT CARD: 800-987-5521</a>
                            </li>

                            <li>
                                <a href="en/index.html">Routing Number: 091408598</a>
                            </li>

                        </ul>
                        <br />
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 footerCol4">
                        <div class="footerHeader">Legal Notices</div>

                        <ul>

                            <li>
                                <a href="en/pages/resources/first-premier-privacy-statement-2020/index.html">Privacy
                                    Notice &amp; Statement</a>
                            </li>

                            <li>
                                <a href="en/pages/resources/legal-disclosures/index.html">Legal Disclosures</a>
                            </li>

                            <li>
                                <a href="en/pages/resources/cookie-policy/index.html">Cookie Policy</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="padding-top:50px;">
                        <p>Member FDIC | <img src="{{ asset('assets/frontend/Static/img/equalhousinglender.png') }}"
                                alt="Equal Housing Lender" title="Equal Housing Lender" />Equal Housing Lender</p>
                    </div>
                </div>
            </div>
        </div>
        <style>
            /* CHROME SAFARI FIX */
            .form-control:hover,
            .form-control:active,
            .form-control:focus {
                box-shadow: none !important;
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
            }

            .form-control:hover,
            .form-control:active,
            .form-control:focus {
                box-shadow: none !important;
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
            }

            a:focus,
            a:active {
                outline: none !important;
                border: none !important;
            }

            input:focus,
            input:active {
                outline: none !important;
            }

            textarea:focus {
                outline: none !important;
            }

            button:focus,
            button:active {
                outline: none !important;
                border: none !important;
            }

            .showehllogo {
                background: url("asset('assets/frontend/Static/img/EHLlogo%20white.png')") 230px 0px no-repeat;
                background-size: 24px 24px
            }

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
            $("#submitButtonB28Block").click(function(event) {
                if ($("#email").val() != "" &&
                    $("#message").val() != "") {
                    FullName = $("#fullname").val();
                    EMail = $("#email").val();
                    Phone = $("#phone").val();
                    Message = $("#message").val();
                    $.ajax({
                        type: "POST",
                        url: '/api/ContactMe?ContentId=' + ContentId + '&ContactToName=' + Name +
                            '&ContactPersonName=' + FullName + '&ContactPersonEmail=' + EMail +
                            '&ContactPersonPhone=' + Phone + '&ContactPersonMessage=' + encodeURIComponent(
                                Message),
                        contentType: "application/json",

                        success: function(result) {
                            alert(result);
                        },
                        error: function() {

                        }
                    });
                }
            });
        </script>
    </div>
@endsection
