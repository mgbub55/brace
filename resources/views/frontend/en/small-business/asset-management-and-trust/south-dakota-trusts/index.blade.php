

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
<div class="row equal-height"><div class="block b47block  col-md-12"><style>    
    .b47hero_banner_text2 h2 {font-size:5px; font-family: &#39;Prompt-SemiBold&#39;; float:left; width:100%; text-shadow:1px 1px 1px #000, 0 0 0.8em #000, 0 0 0.1em #000;}
    .b47hero_banner_text2 p {color:#ffffff; font-family: &#39;Prompt-Medium&#39;; font-size:20px; float:left; width:80%; margin:1% 0 3% 0;}
</style>


<section class="row-full">
    <form method="get">
        <div class="b47hero_banner2">
            <div class="b47hero_coverM2"></div>
            
            <img class="b47hero-img2" src="../../../../contentassets/b008767cf32a4e8e9f728ea3305ee0ef/2.7.5.1_b-46-hero_siouxfalls-min2.png" alt="&quot;&quot;">
            <div class="b47banner-desc2">
                <div class="container">
                    <div class="b47hero_banner_text2">
                        <h1>South Dakota: A Wealth &amp; &quot;Trust Friendly&quot; State</h1>
                        <p>Explore the benefits of establishing a trust in South Dakota State!</p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section></div><div class="block b16block  col-md-12">

<!-- VIEW RATE / SPEED BUMP [2] -->
<style>
    /* Changes to Functionality -> Adding the ability to add one or more links after the main button */
    .b16basic_box_left a.b16readmore { display: inline-block; letter-spacing: 1px; background: #42967d; color: #fff; font-size: 13px; font-family: 'Prompt-Bold'; text-transform: uppercase; padding: 12px 60px; border-radius: 50px; margin-top: 25px; margin-bottom: 0px; margin-right: 30px; text-align: center; margin-left:20px !important;}
    .b16basic_box_left a.b16readmore:hover { text-decoration: none; }
    .b16confidence_links a { text-transform: uppercase; letter-spacing: 1px; font-family: 'Prompt-SemiBold'; font-size: 13px; margin-top: 10px; color: #42967d; padding-right: 12px;    background: url(../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center; }
    .b16confidence_links_multiple { float:left; padding-left:30px; }
    .b16confidence_links_multiple ul { display:inline-block; margin:0; padding-top:10px; /* For IE, the outcast */ zoom:1; *display:inline; }
    .b16confidence_links_multiple li { float:left; padding:2px 5px; margin-right:20px; }
    .b16confidence_links_multiple li > a { text-transform: uppercase; letter-spacing: 1px; font-family: 'Prompt-SemiBold'; font-size: 13px; margin-top: 10px; color: #42967d; padding-right: 12px; background: url(../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center; }

    /* CHANGING SHADING FUNCTIONALITY */
    /*.b16wrapper{ min-height:455px;}*/
    .b16wrapper{ min-height:400px;}
    .b16wrapper .FirstBlock { width: 100%; background-color: #f9f9f9; height: 70px; position: absolute; bottom: -24px; z-index: 1; overflow:hidden; }
    .ThirdBlock{ width:100%; background-color:#f9f9f9; height:70px; position:relative; z-index:2; }
    .b16basic_box_right { position:relative; z-index:99; }
    .b16basic_box_background{ margin-bottom:14px; }
    .b16basic_box_left { padding-left:100px; }
    .b16basic_box_left h2 { padding-top: 35px; }
    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml { padding-top:10px; }
    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml > p { margin-left:0px !important; }
    .card_icon_bottom_right {right:15px !important;}
	.Overdraft.Protection { width:50%;}

    @media only screen and (max-width:767px) {
        .b16confidence_links {
            align-items: center;
            display: flex;
            flex-direction: column;
        }
        .b16confidence_links a {
            margin-top: 20px;
        }
    }

    @media only screen and (max-width:375px) {
        div.b16basic_box_grey {
            background-color: #fff !important;
        }
    }
</style>
<style>
    .b16basic_box_right .b16imgcrop {  }
</style>
<!-- VIEW RATE / SPEED BUMP [2] -->

<section class="row-full b16wrapper">

        <div class="b16basic_box_left_content b16basic_box_background">
            <div class="b16basic_box_main">
                <div class="container">
                    <div class="b16basic_box b16basic_box_position">
                        <div class="b16basic_box_right" style="padding-right:50px;">
                            <div class="b16imgcrop"><img src="../../../../contentassets/6c1506e0601648c0befe1642abc3e469/1.7.4.1_b-16-list_01_alternating-1_advisor-min.png" title="First PREMIER Bank: A Leader in Trust Services" alt="woman talking to couple"></div>
                        </div>
                        <div class="b16basic_box_left">
                                <h2>First PREMIER Bank: A Leader in Trust Services</h2>

                                <div class="xhtml"><p>The unique laws of South Dakota create a favorable environment for wealth, estate and trusts. Harness these benefits and more by working with First PREMIER Bank Trust Services. We manage $2.8 billion in trust assets, helping individuals, families, businesses, non-profits, foundations and endowments.</p></div>
                            <!-- Button and Footer Links go here ... -->
                            <!-- Button and Footer Links go here ... -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- View Rate [3] (within container)-->
<!-- View Rate [3] (within container)-->
</div><div class="block b10block  col-md-12">

<section class="row-full">

    <!--First Premier work start-->
    <div class="b10first_premier_main">
        <div class="container">
            <div class="b10first_premier">
                    <h2>Unique Benefits of a South Dakota Trust</h2>
            </div>
            <div class="b10panel-group" id="accordion">
                <div class="b10panel b10panel-default"><div class="b10panel-heading"><h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse_0"><span> South Dakota is known as a “wealth-friendly” state </span></a></h3> </div> <div id="collapse_0" class="b10panel-collapse collapse "><div class="b10panel-body"><div class="xhtml"> <p>As such, First PREMIER bank can help you or your client access our favorable tax and trust laws! First PREMIER Bank can help our clients leverage favorable South Dakota tax and trust laws.</p></div> </div> </div> </div><div class="b10panel b10panel-default"><div class="b10panel-heading"><h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse_1"><span> South Dakota has no state income tax </span></a></h3> </div> <div id="collapse_1" class="b10panel-collapse collapse "><div class="b10panel-body"><div class="xhtml"> <p>The impact is increased revenue for distribution to beneficiaries of irrevocable trusts with a South Dakota situs.</p></div> </div> </div> </div><div class="b10panel b10panel-default"><div class="b10panel-heading"><h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse_2"><span> South Dakota has no rule against perpetuities </span></a></h3> </div> <div id="collapse_2" class="b10panel-collapse collapse "><div class="b10panel-body"><div class="xhtml"> <p>Most states require a trust to &ldquo;terminate&rdquo; at the end of a set period of time (effectively 80 to 100 years). This opens the trust to taxation, potential litigation and disagreements among beneficiaries, etc. Families with substantial wealth may want to see the trust &ldquo;go on forever.&rdquo; That can only happen in a state that has no rule against perpetuities - like South Dakota. Trust administration can be delegated to co-trustees and/or agents of the trustee.</p></div> </div> </div> </div><div class="b10panel b10panel-default"><div class="b10panel-heading"><h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse_3"><span> Trust administration can be delegated </span></a></h3> </div> <div id="collapse_3" class="b10panel-collapse collapse "><div class="b10panel-body"><div class="xhtml"> <p>Trustees may disclaim powers granted to a trustee under a trust instrument. A South Dakota trustee can &ldquo;unbundle&rdquo; services that the family would prefer to see performed by others, allowing tasks or services to be managed by co-trustees. Services could include investment management, custody of assets, record keeping, etc.</p></div> </div> </div> </div><div class="b10panel b10panel-default"><div class="b10panel-heading"><h3 class="b10panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse_4"><span> Trust protectors and trust advisors are permitted </span></a></h3> </div> <div id="collapse_4" class="b10panel-collapse collapse "><div class="b10panel-body"><div class="xhtml"> <p>South Datota Directed Trust Law permits protectors and trust advisors, and fiduciaries can be prevented from exercising certain powers that can be reserved to the grantor, a trust protector or a trust advisor.</p></div> </div> </div> </div>
            </div>


        </div>

    </div>
    <!--First Premier work end-->
</section>
</div><div class="block b22block  col-md-12">
    <section class="row-full">

        <div class="b22additional-lending">
            <div class="container" style="padding-top:30px;">
                    <h4 class="Blue">First PREMIER Trust Services</h4>
                <div class="b22additional-lending-left">
                    <h3>Personal Trust Services</h3>
                    <div class="xhtml"><p>Ensure your estate transfers seamlessly and according to your wishes, easing the transition of loved ones at a difficult time. Learn more about personal trusts from First PREMIER Bank.</p></div>
                        <a href="../../../personal/wealth-management/personal-trust-services/index.html">Learn More</a>
                </div>

                <div class="b22additional-lending-righ">
                    <h3>Business Trust Services</h3>
                    <div class="xhtml"><p>First PREMIER Bank works with business owners and their teams, including accounting, legal and advisors to help with estate and business contingency planning.</p></div>
                        <a href="../business-trust-services/index.html">Learn More</a>
                </div>
            </div>
            <div class="b22spacer"></div>
        </div>
        <div id="a16465198" class="modal fade" role="dialog">
            <div class="modal-dialog pop_board">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="pop_main_container_board">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">
                                    <img class="close_icon" src="../../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                                </span>
                            </button>
                            <div class="pop_main_container">
                                <div class="pop_board_white">
                                    <div class="row">
                                        <div class="col-md-12" style="padding-left:40px;">
                                            <h4 class="Blue"></h4>
                                            <div class="b46Blue" style="text-align:left;">
                                                
                                                <p><br /><a href="../../../personal/wealth-management/personal-trust-services/index.html" target="_blank"></a></p>
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
        <div id="b16465198" class="modal fade" role="dialog">
            <div class="modal-dialog pop_board">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="pop_main_container_board">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">
                                    <img class="close_icon" src="../../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                                </span>
                            </button>
                            <div class="pop_main_container">
                                <div class="pop_board_white">
                                    <div class="row">
                                        <div class="col-md-12" style="padding-left:40px;">
                                            <h4 class="Blue"></h4>
                                            <div class="b46Blue" style="text-align:left;">
                                                
                                                <p><br /><a href="../business-trust-services/index.html" target="_blank"></a></p>
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
    </section></div><div class="block b16block  col-md-12">

<!-- VIEW RATE / SPEED BUMP [2] -->
<style>
    /* Changes to Functionality -> Adding the ability to add one or more links after the main button */
    .b16basic_box_left a.b16readmore { display: inline-block; letter-spacing: 1px; background: #42967d; color: #fff; font-size: 13px; font-family: 'Prompt-Bold'; text-transform: uppercase; padding: 12px 60px; border-radius: 50px; margin-top: 25px; margin-bottom: 0px; margin-right: 30px; text-align: center; margin-left:20px !important;}
    .b16basic_box_left a.b16readmore:hover { text-decoration: none; }
    .b16confidence_links a { text-transform: uppercase; letter-spacing: 1px; font-family: 'Prompt-SemiBold'; font-size: 13px; margin-top: 10px; color: #42967d; padding-right: 12px;    background: url(../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center; }
    .b16confidence_links_multiple { float:left; padding-left:30px; }
    .b16confidence_links_multiple ul { display:inline-block; margin:0; padding-top:10px; /* For IE, the outcast */ zoom:1; *display:inline; }
    .b16confidence_links_multiple li { float:left; padding:2px 5px; margin-right:20px; }
    .b16confidence_links_multiple li > a { text-transform: uppercase; letter-spacing: 1px; font-family: 'Prompt-SemiBold'; font-size: 13px; margin-top: 10px; color: #42967d; padding-right: 12px; background: url(../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center; }

    /* CHANGING SHADING FUNCTIONALITY */
    /*.b16wrapper{ min-height:455px;}*/
    .b16wrapper{ min-height:400px;}
    .b16wrapper .FirstBlock { width: 100%; background-color: #f9f9f9; height: 70px; position: absolute; bottom: -24px; z-index: 1; overflow:hidden; }
    .ThirdBlock{ width:100%; background-color:#f9f9f9; height:70px; position:relative; z-index:2; }
    .b16basic_box_right { position:relative; z-index:99; }
    .b16basic_box_background{ margin-bottom:14px; }
    .b16basic_box_left { padding-left:100px; }
    .b16basic_box_left h2 { padding-top: 35px; }
    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml { padding-top:10px; }
    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml > p { margin-left:0px !important; }
    .card_icon_bottom_right {right:15px !important;}
	.Overdraft.Protection { width:50%;}

    @media only screen and (max-width:767px) {
        .b16confidence_links {
            align-items: center;
            display: flex;
            flex-direction: column;
        }
        .b16confidence_links a {
            margin-top: 20px;
        }
    }

    @media only screen and (max-width:375px) {
        div.b16basic_box_grey {
            background-color: #fff !important;
        }
    }
</style>
<style>
    .b16basic_box_right .b16imgcrop {  }
</style>
<!-- VIEW RATE / SPEED BUMP [2] -->

<section class="row-full b16wrapper">

        <div class="b16basic_box_right_content b16basic_box_background">
            <div class="b16basic_box_main b16basic_box_grey">
                <div class="container">
                    <div class="b16basic_box">
                        <div class="b16basic_box_right">
                            <div class="b16imgcrop" style="margin-left:90px;"><img src="../../../../contentassets/6ebf5c7de37d4c0b9eeb7056441bd6ee/1.7.4.1_b-16-list_01_alternating-2_family-min.png" title="Dynasty Trusts" alt="family sitting on porch step"></div>

                        </div>
                        <div class="b16basic_box_left payIcon-space">
                            <h2 style="padding-top:0px !important;">Dynasty Trusts</h2>
                                <div class="xhtml"><p>A unique, generation skipping trust that can be established to provide financial security for future generations. Most states enforce time limits on the duration of trusts. However, in the state of South Dakota, Dynasty Trusts have no limit on perpetuity.</p></div>

                            <!-- Button and Footer Links go here ... -->
                            <!-- Button and Footer Links go here ... -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- View Rate [3] (within container)-->
<!-- View Rate [3] (within container)-->
</div><div class="block b25block  col-md-12">
<script>
    $(document).ready(function () {

        if ('/Static/img/CustomBlocks/B25/Background.png' != 'null' && '/Static/img/CustomBlocks/B25/Background.png' != '') {
            $(".b25disclosure").css("background", "#245251 url(/Static/img/CustomBlocks/B25/Background.png) no-repeat");
            if (screen.width > 1000) {
                $(".b25need_help_main").css("background", "#245251 url(/Static/img/CustomBlocks/B25/Background.png) no-repeat");
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
                <div class="xhtml"><p>Speak with a Trust Specialist today to learn how</p>
<p>First PREMIER can assist with proactive estate</p>
<p>planning and trust services.</p></div>
                <div class="b25bottom" style="">
                    <center>
                    <a href="../../../pages/about-us/teams/wealth-management-team/index.html" class="b25mainanchor">Contact Us</a><br clear="all"/>
                    </center>
                </div>
            </div>
        </div>

</section></div><div class="block b18block  col-md-12">

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
        <h2> Special Needs Trusts </h2>
        <div class="b18great_feature_left">
                <span>Description</span>
                            <div class="b18detail xhtml"><p>A Special Needs Trust permits certain South Dakota residents with disabilities under the age of 65<sup>1</sup> to establish an account holding their own funds to preserve eligibility for Medicaid, Social Security and/or government benefits - without the transfer penalties normally accessed.<sup>2</sup></p></div>
                                </div>
        <div class="b18great_feature_left b18great_feature_right payIcon-space">
                <span>Benefits</span>
                            <div class="b18detail xhtml"><ul>
<li>Elimination or reduction of fees and costs<sup>2</sup></li>
<li>Separate accounts ensure accurate accounting</li>
<li>Spendthrift provisions to protect assets against creditor claims against a beneficiary</li>
<li>Mandatory Medicaid payback managed for you<sup>3</sup></li>
<li>Distribution of remaining funds after a beneficiary's death<sup>4</sup></li>
</ul></div>
                                </div>
        <div class="clearfix">
            <center>
            </center>
        </div>

    </div>
    <div id="a34205728" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="../../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_container">
                                <h2>Description</h2>
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
    <div id="b34205728" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="../../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_container">
                                <h2>Benefits</h2>
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
    <div id="c34205728" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="../../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_container">
                                <h2>Special Needs Trusts</h2>
                            <div class="pop_board_white">
                                <div class="row">
                                    <div class="col-md-12" style="padding-left:40px;">
                                        <h4 class="Blue"></h4>
                                        <div class="b46Blue" style="text-align:left;">
                                            
                                            <p><br /><a href="#" target="_blank"></a></p>
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
</div><div class="block b13block  col-md-12">

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
                    <p>{1} Qualified individuals must be under the age of 65 as approved by the rules of special needs trust, the court and trustee.</p>
<p>{2}&nbsp;Funding a beneficiary&rsquo;s account does not result in &ldquo;transfer penalties&rdquo;&nbsp; for Medicaid eligibility purposes and, once assets are held in a account, they are not considered available resources for purposes of most means-tested government benefits (e.g. Medicaid and SSI).</p>
<p>{3} Medicaid Payback is required to the extent that the beneficiary received Medicaid Long Term Care benefits prior to death.</p>
<p>{4} Funds remaining after a beneficiary&rsquo;s death and any required Medicaid payback are distributed to heirs or loved ones identified in the beneficiary&rsquo; joinder agreement.</p>
<p>Investments are | Not FDIC insured | May lose value | Not financial institution guaranteed | Not a deposit | Not insured by any federal government agency. Advisory services may only be offered by investment adviser representatives.</p>
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
 <p><img src="../../../../Static/img/equalhousinglender.png" alt="Equal Housing Lender" title="Equal Housing Lender" />Equal Housing Lender</p>             </div>
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