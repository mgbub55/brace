

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
            <h1>Philanthropic Giving</h1>
            
<ul>
    
        <li>
            <a href="../../index.html">About Us</a> 
        </li>
    
        <li>
            <a href="../index.html">Community</a> 
        </li>
    
        <li>
            <a href="index.html">Philanthropic Giving</a> 
        </li>
    
</ul>
            <img class="img-responsive" src="../../../../../contentassets/0f7439d8019a454c8fef930bb2709e0a/0.5.16.2_b-46_hero_team.png" alt="" border="0" />                            <h2>Making a Difference</h2>
                            <center><p>Learn how First PREMIER Bank and PREMIER Bankcard, together with philanthropist T. Denny Sanford are making a difference through generous philanthropic giving.</p>
<p>&nbsp;</p>
<p>&nbsp;</p></center>
        </div>
    </div>
</section></div><div class="block b16block  col-md-12">

<!-- VIEW RATE / SPEED BUMP [2] -->
<style>
    /* Changes to Functionality -> Adding the ability to add one or more links after the main button */
    .b16basic_box_left a.b16readmore { display: inline-block; letter-spacing: 1px; background: #42967d; color: #fff; font-size: 13px; font-family: 'Prompt-Bold'; text-transform: uppercase; padding: 12px 60px; border-radius: 50px; margin-top: 25px; margin-bottom: 0px; margin-right: 30px; text-align: center; margin-left:20px !important;}
    .b16basic_box_left a.b16readmore:hover { text-decoration: none; }
    .b16confidence_links a { text-transform: uppercase; letter-spacing: 1px; font-family: 'Prompt-SemiBold'; font-size: 13px; margin-top: 10px; color: #42967d; padding-right: 12px;    background: url(../../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center; }
    .b16confidence_links_multiple { float:left; padding-left:30px; }
    .b16confidence_links_multiple ul { display:inline-block; margin:0; padding-top:10px; /* For IE, the outcast */ zoom:1; *display:inline; }
    .b16confidence_links_multiple li { float:left; padding:2px 5px; margin-right:20px; }
    .b16confidence_links_multiple li > a { text-transform: uppercase; letter-spacing: 1px; font-family: 'Prompt-SemiBold'; font-size: 13px; margin-top: 10px; color: #42967d; padding-right: 12px; background: url(../../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center; }

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
                            <div class="b16imgcrop"><img src="../../../../../contentassets/eda3c77d68d74689be7793b7a9e283f0/0.5.16.2_b-16-alt1_girl-min2.png" title="Collegiate Support" alt="Female Student holding books"></div>
                        </div>
                        <div class="b16basic_box_left">
                                <h2>Collegiate Support</h2>

                                <div class="xhtml"><p>A strong focus of our philanthropic support has involved supporting educational institutions in our region -- as well as the students who attend them. Learn how PREMIER contributions resulted in the establishment of the Miles Beacom Institute of Technology, the Dana J. Dykhouse Stadium and the Beacom School of Management. Collectively, these investments will immeasurably benefit our region and enhance the educational experiences of thousands of students for generations to come.</p></div>
                            <!-- Button and Footer Links go here ... -->
                                        <a href="../collegiate-support/index.html" class="b16readmore">Learn More</a>
                            <!-- Button and Footer Links go here ... -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- View Rate [3] (within container)-->
<!-- View Rate [3] (within container)-->
</div><div class="block b16block  col-md-12">

<!-- VIEW RATE / SPEED BUMP [2] -->
<style>
    /* Changes to Functionality -> Adding the ability to add one or more links after the main button */
    .b16basic_box_left a.b16readmore { display: inline-block; letter-spacing: 1px; background: #42967d; color: #fff; font-size: 13px; font-family: 'Prompt-Bold'; text-transform: uppercase; padding: 12px 60px; border-radius: 50px; margin-top: 25px; margin-bottom: 0px; margin-right: 30px; text-align: center; margin-left:20px !important;}
    .b16basic_box_left a.b16readmore:hover { text-decoration: none; }
    .b16confidence_links a { text-transform: uppercase; letter-spacing: 1px; font-family: 'Prompt-SemiBold'; font-size: 13px; margin-top: 10px; color: #42967d; padding-right: 12px;    background: url(../../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center; }
    .b16confidence_links_multiple { float:left; padding-left:30px; }
    .b16confidence_links_multiple ul { display:inline-block; margin:0; padding-top:10px; /* For IE, the outcast */ zoom:1; *display:inline; }
    .b16confidence_links_multiple li { float:left; padding:2px 5px; margin-right:20px; }
    .b16confidence_links_multiple li > a { text-transform: uppercase; letter-spacing: 1px; font-family: 'Prompt-SemiBold'; font-size: 13px; margin-top: 10px; color: #42967d; padding-right: 12px; background: url(../../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center; }

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
                            <div class="b16imgcrop" style="margin-left:90px;"><img src="../../../../../contentassets/f6dc178754fd4eb49834f9210aea45cc/0.5.16.2_b-16-alt2_softball-min.png" title="Watertown Softball Complex" alt="Watertown Premier Softball Complex"></div>

                        </div>
                        <div class="b16basic_box_left payIcon-space">
                            <h2 style="padding-top:0px !important;">Watertown Softball Complex</h2>
                                <div class="xhtml"><p>Find out how PREMIER&rsquo;s $500,000 gift to the City of Watertown made a new, five-regulation diamond Softball Complex a reality. The complex provides big dividends for the Watertown economy and the local hospitality industry and improves quality of life for people of all ages who enjoy playing and watching softball.</p></div>

                            <!-- Button and Footer Links go here ... -->
                                        <a href="watertown-softball-complex/index.html" class="b16readmore">Learn More</a>
                            <!-- Button and Footer Links go here ... -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- View Rate [3] (within container)-->
<!-- View Rate [3] (within container)-->
</div><div class="block b16block  col-md-12">

<!-- VIEW RATE / SPEED BUMP [2] -->
<style>
    /* Changes to Functionality -> Adding the ability to add one or more links after the main button */
    .b16basic_box_left a.b16readmore { display: inline-block; letter-spacing: 1px; background: #42967d; color: #fff; font-size: 13px; font-family: 'Prompt-Bold'; text-transform: uppercase; padding: 12px 60px; border-radius: 50px; margin-top: 25px; margin-bottom: 0px; margin-right: 30px; text-align: center; margin-left:20px !important;}
    .b16basic_box_left a.b16readmore:hover { text-decoration: none; }
    .b16confidence_links a { text-transform: uppercase; letter-spacing: 1px; font-family: 'Prompt-SemiBold'; font-size: 13px; margin-top: 10px; color: #42967d; padding-right: 12px;    background: url(../../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center; }
    .b16confidence_links_multiple { float:left; padding-left:30px; }
    .b16confidence_links_multiple ul { display:inline-block; margin:0; padding-top:10px; /* For IE, the outcast */ zoom:1; *display:inline; }
    .b16confidence_links_multiple li { float:left; padding:2px 5px; margin-right:20px; }
    .b16confidence_links_multiple li > a { text-transform: uppercase; letter-spacing: 1px; font-family: 'Prompt-SemiBold'; font-size: 13px; margin-top: 10px; color: #42967d; padding-right: 12px; background: url(../../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center; }

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
    .b16basic_box_right .b16imgcrop { margin-top:25px !important; }
</style>
<!-- VIEW RATE / SPEED BUMP [2] -->

<section class="row-full b16wrapper">

        <div class="b16basic_box_left_content b16basic_box_background">
            <div class="b16basic_box_main">
                <div class="container">
                    <div class="b16basic_box b16basic_box_position">
                        <div class="b16basic_box_right" style="padding-right:50px;">
                            <div class="b16imgcrop"><img src="../../../../../contentassets/db5dd150cc9e4769852c4a51b6bc7c22/0.5.16.2_b-16-alt3_out-min.png" title="Splashpad at Dakota Dunes" alt="Miracle league team photo in front of splahspad at dakota dunes"></div>
                        </div>
                        <div class="b16basic_box_left">
                                <h2>Splashpad at Dakota Dunes</h2>

                                <div class="xhtml"><p>First PREMIER Bank and PREMIER Bankcard made it a little cooler this summer, with a $30,000 to the Miracle League of Sioux City. Our donation helped fund the final phase of an accessible playground designed especially for people with disabilities, and was earmarked for splash pad development for cool summer enjoyment. The park is open to the public and free of charge.</p></div>
                            <!-- Button and Footer Links go here ... -->
                                        <a href="splash-pad-at-dakota-dunes/index.html" class="b16readmore">Learn More</a>
                            <!-- Button and Footer Links go here ... -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- View Rate [3] (within container)-->
<!-- View Rate [3] (within container)-->
</div><div class="block b06block  col-md-12"><style>
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
            <img src="../../../../../Static/img/CustomBlocks/B6/featured_bg.png" class="b6featured_bg" alt="First PREMIER Bank">
            <img src="../../../../../Static/img/CustomBlocks/B6/featured_bg_small.png" class="b6featured_bg_small_bg" alt="First PREMIER Bank">
        <div class="b6featured_bg_small carousel" id="b06Carousel" data-ride="carousel">
            <div class="">
                <div class="carousel-inner b06carousel-inner">
                    <div class="item active"><div class="row b6mypadding"><div class="b6featured_quote_img col-lg-5 col-md-5"><img src=../../../../../contentassets/c1305893c9b442139050f6674d3c5db0/quotes-koryallen.png class="b6featured_img" alt="Kory Allen Personal Banking Group Manager"></div><div class="b6featured_quote col-lg-7 col-md-7"><p>I am so proud to be a member of this organization. We have a culture of giving that extends from our CEO to our tellers and that truly differentiates us from many other banks. It's the PREMIER Way and everyone in our bank believes in it. </p><div class="clearfix"></div><span> - Kory Allen, Personal Banking Group Manager</span></div></div></div>

                </div>
            </div>

        </div>
    </div>
</section>

</div><div class="block b18block  col-md-12">

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
        <h2> More Philanthropic Giving </h2>
        <div class="b18great_feature_left">
                <span>Internships &amp; Scholarships</span>
                            <div class="b18detail xhtml"><p>Paid internships, 18 annual community sponsorships and extensive involvement in Build <a title="SD Scholarship" href="../collegiate-support/scholarship-and-internships/build-dakota-scholarship/index.html">Dakota scholarships</a>, <a title="Horatio Algers" href="../collegiate-support/scholarship-and-internships/horatio-alger---denny-sanford-scholarship/index.html">Horatio Algers</a> and more. Find out how PREMIER supports students.</p>
<p><a title="Learn More" href="../collegiate-support/scholarship-and-internships/index.html">Learn More &gt;</a></p></div>
                                </div>
        <div class="b18great_feature_left b18great_feature_right payIcon-space">
                <span>Additional Philanthrophic Giving</span>
                            <div class="b18detail xhtml"><ul>
<li><a title="Miles Becom" href="../collegiate-support/beacom-institute-of-technology/index.html">Miles Beacom Institute of Technology</a></li>
<li><a title="Dana J Dykhouse Stadium" href="../collegiate-support/dana-j.-dykhouse-stadium/index.html">The Dana J. Dykhouse Stadium</a></li>
<li><a title="Beacom School of Management" href="../collegiate-support/beacom-school-of-business/index.html">Beacom School of Business</a></li>
</ul></div>
                                </div>
        <div class="clearfix">
            <center>
            </center>
        </div>

    </div>
    <div id="a6946603" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="../../../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_container">
                                <h2>Internships &amp; Scholarships</h2>
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
    <div id="b6946603" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="../../../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_container">
                                <h2>Additional Philanthrophic Giving</h2>
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
    <div id="c6946603" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="../../../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_container">
                                <h2>More Philanthropic Giving</h2>
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
</div><div class="block b26block  col-md-12">



<style>
    .carousel-control:focus, .carousel-control:hover, .carousel-control.left, .carousel-control.right {
        background: none !important;
    }
    .b26line_credit_main .carousel-inner { ; }
    
    .white-background h2, .white-background .xhtml, .white-background .xhtml p,
    .grey-background h2, .grey-background .xhtml, .grey-background .xhtml p
    {
        color: #000;
    }
</style>
<script>
    var alternateBackground = "False";
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

                <h2>Giving Back to Our Community</h2>

                <div class="xhtml"><p>Partner with a bank that gives back generously to your community. First PREMIER Bank and PREMIER Bankcard support over 700 organizations, and last year alone, PREMIER associates dedicated over 32,000 hours in community service.</p></div>

            <div class="row">
                <div class="col-md-12 hidden-xs hidden-sm">
                    <div class="carousel" id="myCarousel-" data-interval="false">
                        <div class="carousel-inner">
                            <div class='item active'><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad'><div class='b26line_credit_loans_left'><img src='../../../../../contentassets/7e2308f5afce4bd9bb0596e58aa4d30f/ymabii-about_b26_alt1_ph-min.png' alt='children in classroom'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><a href='index.html'><h3 class='deckspan'>Philanthropic Giving</h3></a></div><h3><br clear='all'/><div class="xhtml"><p>Learn how PREMIER contributions have benefited organizations throughout our region.</p></div></h3></div></div><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans b26line_personal_loans no-pad'><div class='b26line_credit_loans_left'><img src='../../../../../contentassets/7bde9901f8b04998828c7da54743f12c/ymabii-about_b26_alt2_comserv-min.png' alt='two men talking'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><a href='../community-service/index.html'><h3 class='deckspan'>Community Service</h3></a></div><h3><br clear='all'/><div class="xhtml"><p>See how PREMIER associates actively serve within our community!</p></div></h3></div></div><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad last'><div class='b26line_credit_loans_left'><img src='../../../../../contentassets/42e0a4ba9712456cb5c8369c0ade74c1/ymabii-about_b26_alt3_colsupport-min.png' alt='college students'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><a href='../collegiate-support/index.html'><h3 class='deckspan'>Collegiate Support</h3></a></div><h3><br clear='all'/><div class="xhtml"><p>Learn how PREMIER supports schools, colleges, universities and students to secure a brighter future!</p></div></h3></div></div></div><div class='item'><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad'><div class='b26line_credit_loans_left'><img src='../../../../../contentassets/3151f5b1184b4ebea41405944bc85cac/ymabii-about_b26_alt4_sponsor-min.png' alt='woman and lemur at Great Plains Zoo'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><a href='../sponsorship/index.html'><h3 class='deckspan'>Sponsorships</h3></a></div><h3><br clear='all'/><div class="xhtml"><p>We actively sponsor teams, events, athletics and other activities throughout our community.</p></div></h3></div></div><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans b26line_personal_loans no-pad'><div class='b26line_credit_loans_left'><img src='../../../../../contentassets/9ea8aad9972348dba81e33302c8658a5/ymabii-about_b26_alt5_celebrate-min.png' alt='Luke Bryan at Dana J Dykhouse Stadium'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><a href='../celebration/index.html'><h3 class='deckspan'>Celebrations & Appreciations</h3></a></div><h3><br clear='all'/><div class="xhtml"><p>Taking time to celebrate the contributions of our employees is important at PREMIER!</p></div></h3></div></div><div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad last'><div class='b26line_credit_loans_left'><img src='../../../../../contentassets/4ecf786f90774a318f5bb9ce6bf62c89/ymabii-about_b26_alt7_community.png' alt='PREMIER Softball Complex'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><a href='../index.html'><h3 class='deckspan'>Our Community</h3></a></div><h3><br clear='all'/><div class="xhtml"><p>Learn how PREMIER actively partners with business, government and non-profit organizations to positively impact our region.</p></div></h3></div></div></div>
                        </div>
                    </div>
                </div>
                <div class="b26Mobile col-sm-6 hidden-md hidden-lg" style="left:-8px;">
                    <center>
                    <div class="b26MobileCard" style="width:345px;min-height:700px;">
                        <div class='item'><div class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../../../contentassets/7e2308f5afce4bd9bb0596e58aa4d30f/ymabii-about_b26_alt1_ph-min.png' alt='children in classroom'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><a href='index.html'><h3 class='deckspan'>Philanthropic Giving</h3></a></div><h3><br clear='all'/><div class="xhtml"><p>Learn how PREMIER contributions have benefited organizations throughout our region.</p></div></h3></div></div></div><div class='item'><div class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../../../contentassets/7bde9901f8b04998828c7da54743f12c/ymabii-about_b26_alt2_comserv-min.png' alt='two men talking'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><a href='../community-service/index.html'><h3 class='deckspan'>Community Service</h3></a></div><h3><br clear='all'/><div class="xhtml"><p>See how PREMIER associates actively serve within our community!</p></div></h3></div></div></div><div class='item'><div class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../../../contentassets/42e0a4ba9712456cb5c8369c0ade74c1/ymabii-about_b26_alt3_colsupport-min.png' alt='college students'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><a href='../collegiate-support/index.html'><h3 class='deckspan'>Collegiate Support</h3></a></div><h3><br clear='all'/><div class="xhtml"><p>Learn how PREMIER supports schools, colleges, universities and students to secure a brighter future!</p></div></h3></div></div></div><div class='item'><div class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../../../contentassets/3151f5b1184b4ebea41405944bc85cac/ymabii-about_b26_alt4_sponsor-min.png' alt='woman and lemur at Great Plains Zoo'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><a href='../sponsorship/index.html'><h3 class='deckspan'>Sponsorships</h3></a></div><h3><br clear='all'/><div class="xhtml"><p>We actively sponsor teams, events, athletics and other activities throughout our community.</p></div></h3></div></div></div><div class='item'><div class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../../../contentassets/9ea8aad9972348dba81e33302c8658a5/ymabii-about_b26_alt5_celebrate-min.png' alt='Luke Bryan at Dana J Dykhouse Stadium'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><a href='../celebration/index.html'><h3 class='deckspan'>Celebrations & Appreciations</h3></a></div><h3><br clear='all'/><div class="xhtml"><p>Taking time to celebrate the contributions of our employees is important at PREMIER!</p></div></h3></div></div></div><div class='item'><div class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '><div><img src='../../../../../contentassets/4ecf786f90774a318f5bb9ce6bf62c89/ymabii-about_b26_alt7_community.png' alt='PREMIER Softball Complex'></div><div class='b26line_credit_loans_right'><div class="b26titlerow"><a href='../index.html'><h3 class='deckspan'>Our Community</h3></a></div><h3><br clear='all'/><div class="xhtml"><p>Learn how PREMIER actively partners with business, government and non-profit organizations to positively impact our region.</p></div></h3></div></div></div>
                    </div>
                    </center>
                </div>

                    <a class="left carousel-control" href="#myCarousel-" data-slide="prev"><img src="../../../../../Static/img/CustomBlocks/B26/left_arrow.png" alt="First PREMIER Bank"></a>
                    <a class="right carousel-control" href="#myCarousel-" data-slide="next"><img src="../../../../../Static/img/CustomBlocks/B26/right_arrow.png" alt="First PREMIER Bank"></a>
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
            <a href="../../index.html">About Us</a> 
        </li>
    
        <li>
            <a href="../../../../index.html">First PREMIER Bank</a> 
        </li>
    
        <li>
            <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a> 
        </li>
    
        <li>
            <a href="../../leadership-team/index.html">Leadership</a> 
        </li>
    
        <li>
            <a href="../index.html">Community</a> 
        </li>
    
        <li>
            <a href="../../careers/index.html">Careers</a> 
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
            <a href="../../../resources/first-premier-privacy-statement-2020/index.html">Privacy Notice &amp; Statement</a> 
        </li>
    
        <li>
            <a href="../../../resources/legal-disclosures/index.html">Legal Disclosures</a> 
        </li>
    
        <li>
            <a href="../../../resources/cookie-policy/index.html">Cookie Policy</a> 
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