


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
<div class="row equal-height"><div class="block b19block  col-md-12">

<style>
    .b19landingpage {
        height: auto;
        padding: 40px 0px;
    }
</style>
<script>

    $(document).ready(function () {
        if (screen.width < 767) {
            $('.b19landingpage').css('height', '628px');
            $('.b19landingpage').css('background', '');
            $('.b19landingpage').css('background-color', '#1b3e43');
        }
        else {
            $('.b19landingpage').css('background', 'url(/Static/img/svg/green-3.svg) no-repeat');
        }
    });

    $(window).resize(function () {
        if (screen.width < 767) {
            $('.b19landingpage').css('height', '628px');
            $('.b19landingpage').css('background', '');
            $('.b19landingpage').css('background-color', '#1b3e43');
        }
        else {
            $('.b19landingpage').css('background', 'url(/Static/img/svg/green-3.svg) no-repeat');
        }
    });

</script>


<div class="b19landingpage row-full" style="padding-bottom:0px;">
    <div class="container">
        <h1>Asset Management &amp; Trust Services</h1>
        <div class="xhtml"></div>
        <div class="b19landingpage_box_main">

        <div class="col-md-4 col-sm-6 b19landingpage_box">
            <a href="employee-benefits/index.html"><img src="../../../globalassets/images/primary-icons/bright/business-finance/bright-business-_-finance-primary-icon-22.png" title="Employee Benefits" alt="Pie graph" border="0" /></a>
            <div class="clearfix"></div>
                <span><a href="employee-benefits/index.html">Employee Benefits</a></span>
            <div class="xhtml"><p>Group retirement, stock ownership and profit sharing plans for businesses of every size.</p></div>
        </div>

        <div class="col-md-4 col-sm-6 b19landingpage_box">
            <a href="business-planning-investment/index.html"><img src="../../../globalassets/images/primary-icons/blue/business-finance/blue-business-_-finance-primary-icon-11.png" title="Planning &amp; Investing" alt="growth chart" border="0"></a>
            <div class="clearfix"></div>
                <span><a href="business-planning-investment/index.html">Planning &amp; Investing</a></span>
            <div class="xhtml"><p>Tailored investment planning and portfolio management for business and other organizations.</p></div>
        </div>

        <div class="col-md-4 col-sm-6 b19landingpage_box">
            <a href="business-trust-services/index.html"><img src="../../../globalassets/images/primary-icons/gold/business-finance/gold-business-_-finance-primary-icon-18.png" title="Trust Services" alt="balanced scales" border="0"></a>
            <div class="clearfix"></div>
                <span><a href="business-trust-services/index.html">Trust Services</a></span>
            <div class="xhtml"><p>Business succession planning and trust services for individuals who own and manage a business.</p></div>
        </div>

        </div>
    </div>
</div></div><div class="block b20block  col-md-12">


<!-- VIEW RATE / SPEED BUMP [2] -->
<script>
    $(document).ready(function () {
        if ($('#imgMainRight').length <= 0) {
            $('.b20consumer-loans-left').css('width', '100%');
        }
    });
</script>
<style>
    .pop_main_container_board .pop_main_container ol li ol li {  }
</style>
<style>
    .b20consumer-loans-left {
        padding-top: 0px !important;
    }

        .b20consumer-loans-left .xhtml p {
            padding-top: 0px !important;
        }

    .b17basic_box_grey {
        background-color: #f9f9f9 !important;
        background-image: none;
    }

    .b17basic_box_white {
        background-color: #fff !important;
        background-image: none;
    }

    .b20consumer-loans p.sub-header {
        padding: 0px 0px 26px 0px;
        text-align: center;
    }
    @media only screen and (max-width: 767px)
    {
        .b20consumer_btn_center {
            width: 100%;
        }
    }

    @media only screen and (max-width: 470px) {
        .b20consumer-loans .b20consumer-loans-left {
            padding-left: 0px !important;
        }
    }
    @media only screen and (max-width: 470px) {
       .b20showright a.b20mainanchorL {
           margin-left: 25%
        }
    }
</style>
<!-- VIEW RATE / SPEED BUMP [2] -->
<section class="row-full">

    <div class="b20consumer-loans ">
        <div class="container">

                <h2>Employee Benefits</h2>


                    <div class="b20consumer-loans-right"><img id="imgMainRight" src="../../../contentassets/bc5077b704be49b28a0685bdbf19313f/2.7_b-20alt-1_team-min.png" alt="people talking in office" class="img-responsive"></div>
        <div class="b20consumer-loans-left">
                            <div class="xhtml"><p>Attract, motivate and incentivize employees with plans and perks that are sure to please. We offer Group Retirement / 401(k) and IRA plans, employee stock ownership and profit sharing plans, our PREMIER at Work program and more. First PREMIER Bank has a host of solutions for businesses of every size.</p></div>
                <br />
                            <div class="b20consumer_btn_center">
                                <a href="employee-benefits/index.html" class="b20mainanchor">LEARN MORE</a>
                </div>
        </div>
        </div>
    </div>
</section>

<!-- View Rate [3] (within container)-->
<!-- View Rate [3] (within container)--></div><div class="block b18block  col-md-12">

<style>
    .pop_main_container_board .pop_main_container ol li ol li {  }
    .b18great_feature_main .b18detail {  }
    .b18great_feature_main .b18great_feature_left .b18detail h3 {  }
    .b18great_feature_main .b18great_feature_left span {  }
    .b18great_feature_main .b18great_feature_left .b18detail ul {  }

    @media only screen and (max-width: 767px) {
	.b18great_feature_left {
		padding-bottom: 0px;
	}

	.b18great_feature_main .b18detail {
		margin-top: 0px;
	}
}

    .b18great_feature_main .b18detail {
        min-height: 100px !important;
    }

    @media only screen and (max-width: 470px) {
	.b18great_feature_main .b18detail {
		display: inline-block;
		padding-bottom: 15px;
	}
	.b18great_feature_left a.b18mainanchor {
		margin-left: 20%;
	}
}
</style>
<!-- VIEW RATE / SPEED BUMP [2] -->

<section>
    <div class="b18great_feature_main">
        <h2> Business Planning &amp; Investing </h2>
        <div class="b18great_feature_left">
                <span>Financial Planning</span>
                            <div class="b18detail xhtml"><p>Our dedicated investment professionals work with you to develop a financial plan and strategies to achieve short- and long-term financial objectives.</p></div>
                                </div>
        <div class="b18great_feature_left b18great_feature_right payIcon-space">
                <span>Managed Investing</span>
                            <div class="b18detail xhtml"><p>Diversify your investment and retirement portfolio to achieve your long-term goals with support from a dedicated portfolio manager.</p></div>
                                </div>
        <div class="clearfix">
            <center>
                            <a href="{{route('frontend.en.commercial.asset.business')}}" class="btnGreen">Learn More</a>
            </center>
        </div>

    </div>
    <div id="a21197230" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_container">
                                <h2>Financial Planning</h2>
                            <div class="pop_board_white">
                                <div class="row">
                                    <div class="col-md-12" style="padding-left:40px;">
                                        <h4 class="Blue"></h4>
                                        <div class="b46Blue" style="text-align:left;">

                                            <p><br /><a target="_blank"></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="b21197230" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_container">
                                <h2>Managed Investing</h2>
                            <div class="pop_board_white">
                                <div class="row">
                                    <div class="col-md-12" style="padding-left:40px;">
                                        <h4 class="Blue"></h4>
                                        <div class="b46Blue" style="text-align:left;">

                                            <p><br /><a target="_blank"></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="c21197230" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_container">
                                <h2>Business Planning &amp; Investing</h2>
                            <div class="pop_board_white">
                                <div class="row">
                                    <div class="col-md-12" style="padding-left:40px;">
                                        <h4 class="Blue"></h4>
                                        <div class="b46Blue" style="text-align:left;">

                                            <p><br /><a href="{{route('frontend.en.commercial.asset.business')}}" target="_blank"></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- View Rate [3] (within container)-->
<!-- View Rate [3] (within container)-->
</div><div class="block b20block  col-md-12">


<!-- VIEW RATE / SPEED BUMP [2] -->
<script>
    $(document).ready(function () {
        if ($('#imgMainRight').length <= 0) {
            $('.b20consumer-loans-left').css('width', '100%');
        }
    });
</script>
<style>
    .pop_main_container_board .pop_main_container ol li ol li {  }
</style>
<style>
    .b20consumer-loans-left {
        padding-top: 0px !important;
    }

        .b20consumer-loans-left .xhtml p {
            padding-top: 0px !important;
        }

    .b17basic_box_grey {
        background-color: #f9f9f9 !important;
        background-image: none;
    }

    .b17basic_box_white {
        background-color: #fff !important;
        background-image: none;
    }

    .b20consumer-loans p.sub-header {
        padding: 0px 0px 26px 0px;
        text-align: center;
    }
    @media only screen and (max-width: 767px)
    {
        .b20consumer_btn_center {
            width: 100%;
        }
    }

    @media only screen and (max-width: 470px) {
        .b20consumer-loans .b20consumer-loans-left {
            padding-left: 0px !important;
        }
    }
    @media only screen and (max-width: 470px) {
       .b20showright a.b20mainanchorL {
           margin-left: 25%
        }
    }
</style>
<!-- VIEW RATE / SPEED BUMP [2] -->
<section class="row-full">

    <div class="b20consumer-loans ">
        <div class="container">

                <h2>Business Trust Services</h2>


        <div class="b20consumer-loans-left b20showright"  style="float:right;">

                            <div class="xhtml"><p>Protect your assets and manage the transition of your affairs with business succession planning and trust services from First PREMIER Bank. Working as a part of your team, our Trust Specialists help relieve the burdens associated with trust development and ongoing management, while maintaining the highest standards of fiduciary duty and compliance.</p></div>
                <br />

            <div class="b20consumer_btn_center">
                <!-- b20mainanchorL -->
                                <a href="business-trust-services/index.html" class="b20mainanchorL">Learn More</a>
                            <span class="b20mainlinkspan">
<a class="b20mainlink" href="south-dakota-trusts/index.html">Benefits of a South Dakota Trust</a>                            </span>
            </div>
        </div>
                    <div class="b20consumer-loans-right"><img id="imgMainRight" alt="woman on cell phone" src="../../../contentassets/040827ab2c334affb511c3338fd21561/1.2-b-20-content-01-product-benefits-2-womanphone-min.png" class="img-responsive"></div>
        </div>
    </div>
</section>

<!-- View Rate [3] (within container)-->
<!-- View Rate [3] (within container)--></div><div class="block b06block  col-md-12"><style>
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
                    <div class="item active"><div class="row b6mypadding"><div class="b6featured_quote_img col-lg-5 col-md-5"><img src=../../../contentassets/35c6d1c32fee4d4dbd36759d92f2e96e/quotes-scottweeldreyer.png class="b6featured_img" alt="Scott Weeldreyer VP Investment Management"></div><div class="b6featured_quote col-lg-7 col-md-7"><p>We work actively with businesses of all sizes to protect and preserve their legacies for the long haul, providing responsive, personal support along the way and serving in a variety of roles to meet client needs.</p><div class="clearfix"></div><span> - Scott Weeldreyer, VP, Investment Management</span></div></div></div>

                </div>
            </div>

        </div>
    </div>
</section>

</div><div class="block b10block  col-md-12">

<section class="row-full">

    <!--First Premier work start-->
    <div class="b10first_premier_main">
        <div class="container">
            <div class="b10first_premier">
                    <h2>Why Bank with First PREMIER?</h2>
            </div>
            <div class="b10panel-group" id="accordion">
                <div class="b10panel b10panel-default"><div class="b10panel-heading"><h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse_0"><span> One of the Strongest Banks in the Nation </span></a></h3> </div> <div id="collapse_0" class="b10panel-collapse collapse "><div class="b10panel-body"><div class="xhtml"> <p>As a debt-free, privately owned $2 billion bank, First PREMIER is one of the strongest capitalized banks in the country. We ranked 17th in the nation for banks with more than $1 billion in assets by American Banker Magazine. We are consistently ranked as a top-performing banks for asset size by the American Banking Association's Banking Journal.</p></div> </div> </div> </div><div class="b10panel b10panel-default"><div class="b10panel-heading"><h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse_1"><span> Serving Businesses of Every Size </span></a></h3> </div> <div id="collapse_1" class="b10panel-collapse collapse "><div class="b10panel-body"><div class="xhtml"> <p>Our integrated business model bridges business banking with our treasury and asset management teams. We work together to provide market-leading banking, lending and treasury services solutions that are "right-sized" for business needs and flexible to scale for future growth.</p></div> </div> </div> </div><div class="b10panel b10panel-default"><div class="b10panel-heading"><h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse_2"><span> Personal Service & Local Decision Making </span></a></h3> </div> <div id="collapse_2" class="b10panel-collapse collapse "><div class="b10panel-body"><div class="xhtml"> <p>Our bankers take the time to learn about you. Once they understand your business goals, they will help you find the banking products and financial solutions that fit your needs today, and support you as your business grows.</p></div> </div> </div> </div><div class="b10panel b10panel-default"><div class="b10panel-heading"><h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse_3"><span> FREE Leading Edge Online & Mobile Tools </span></a></h3> </div> <div id="collapse_3" class="b10panel-collapse collapse "><div class="b10panel-body"><div class="xhtml"> <p>Our secure Online and Mobile Banking gives you 24/7 access over your accounts with multi-tiered security and administrative control. Enjoy great features including eStatements, Bill Pay, account alerts &amp; notifications, debit card lock and unlock, administrative controls and more! Our Debit Mastercard&reg; and Business Rewards Mastercard&reg; credit cards also work with mobile wallet technology. Best of all, First PREMIER Business Online and Mobile Banking are FREE of charge to First PREMIER Banking customers.</p></div> </div> </div> </div><div class="b10panel b10panel-default"><div class="b10panel-heading"><h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse_4"><span> Locally Grown, Nationally Known </span></a></h3> </div> <div id="collapse_4" class="b10panel-collapse collapse "><div class="b10panel-body"><div class="xhtml"> <p>We serve local, regional and national clients with pride. First PREMIER is the 14th largest ACH Originating Bank in the USA and the 12th largest issuer of Mastercard&reg; in the country. We are also honored to have served as the bank for the State of South Dakota for 20+ years (1999), as well as the bank for the City of Sioux Falls for 15+ years (2004).</p></div> </div> </div> </div><div class="b10panel b10panel-default"><div class="b10panel-heading"><h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse_5"><span> A Champion for Customers & Community </span></a></h3> </div> <div id="collapse_5" class="b10panel-collapse collapse "><div class="b10panel-body"><div class="xhtml"> <p>We serve our local, regional and national clients with pride and personal customer care. We are active supporters of more than 600 charities and non-profits. Last year alone, our associates contributed over 32,000 hours of community service. We also take care of our employees. From 2015-2020, we were ranked as one of the Best Banks to Work For by American Banker and Best Companies Group.</p></div> </div> </div> </div>
            </div>


        </div>

    </div>
    <!--First Premier work end-->
</section>
</div><div class="block b04block  col-md-12">
<style>
.b25block .b25need_help_main .b25bottom {overflow:hidden; display:none !important;}</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
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
</style></div><div class="block b25block  col-md-12">
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
                <h2 class="White">Contact Trust Services Today</h2>
                <div class="xhtml"><p>Speak to a Wealth &amp; Asset Management</p>
<p>Specialist today to explore how First PREMIER</p>
<p>Bank can support your needs.</p>
<p>&nbsp;</p></div>
                <div class="b25bottom" style="">
                    <center>
                    <a href="../../pages/about-us/teams/wealth-management-team/index.html" class="b25mainanchor">Contact Us</a><br clear="all"/>
                    </center>
                </div>
            </div>
        </div>

</section></div><div class="block b26block  col-md-12">



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
</ul></div></h3></div></div><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans b26line_personal_loans no-pad'><div class='b26line_credit_loans_left'><img src='../../../globalassets/ymabii/small-business/b-17-promo-01-finance-growth.png' alt='man and woman looking at report'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Finance Growth</h3></div><h3><br clear='all'/><div class="xhtml"><p>We offer business lines of credit, term loans of any size and commercial real estate lending.</p>
<ul>
<li><a href="../loans-and-credit-lines/small-business-loans/index.html">Business Loans</a></li>
<li><a href="../loans-and-credit-lines/business-lines-of-credit/index.html">Business Lines of Credit</a></li>
<li><a href="../business-services/business-rewards-mastercard/index.html">Business Rewards Mastercard</a>&reg;</li>
</ul></div></h3></div></div><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad last'><div class='b26line_credit_loans_left'><img src='../../../globalassets/ymabii/small-business/pam_hannemann_midwest.jpg' alt='group of people talking at table'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Take Care of Employees</h3></div><h3><br clear='all'/><div class="xhtml"><p>We offer group retirement, profit sharing, stock purchase plans and perks for corporate customers.</p>
<ul>
<li><a href="employee-benefits/index.html">Employee Benefits</a></li>
<li><a href="group-retirement-plans/index.html">Group Retirement</a></li>
<li><a href="first-premier-at-work/index.html">First PREMIER at Work</a></li>
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
</ul></div></h3></div></div></div><div class='item'><div class='col-xs-12 col-sm-12 b26AltClass b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../globalassets/ymabii/small-business/b-17-promo-01-finance-growth.png' alt='man and woman looking at report'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Finance Growth</h3></div><h3><br clear='all'/><div class="xhtml"><p>We offer business lines of credit, term loans of any size and commercial real estate lending.</p>
<ul>
<li><a href="../loans-and-credit-lines/small-business-loans/index.html">Business Loans</a></li>
<li><a href="../loans-and-credit-lines/business-lines-of-credit/index.html">Business Lines of Credit</a></li>
<li><a href="../business-services/business-rewards-mastercard/index.html">Business Rewards Mastercard</a>&reg;</li>
</ul></div></h3></div></div></div><div class='item'><div class='col-xs-12 col-sm-12 b26AltClass b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../globalassets/ymabii/small-business/pam_hannemann_midwest.jpg' alt='group of people talking at table'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><h3 class='deckspanNoCaret'>Take Care of Employees</h3></div><h3><br clear='all'/><div class="xhtml"><p>We offer group retirement, profit sharing, stock purchase plans and perks for corporate customers.</p>
<ul>
<li><a href="employee-benefits/index.html">Employee Benefits</a></li>
<li><a href="group-retirement-plans/index.html">Group Retirement</a></li>
<li><a href="first-premier-at-work/index.html">First PREMIER at Work</a></li>
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
 <p><img src="../../../Static/img/equalhousinglender.png" alt="Equal Housing Lender" title="Equal Housing Lender" />Equal Housing Lender</p>             </div>
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
