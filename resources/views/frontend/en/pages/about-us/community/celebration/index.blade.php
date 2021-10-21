@extends('frontend.layouts.app')
@section('content')
    <div class="container">

        <!--start responsive menu-->
        @include('frontend.layouts.components.header')
        <!-- Main Header -->
        @include('frontend.layouts.components.navbar')

        <div class="row equal-height">
            <div class="block b44block  col-md-12">
                <style>
                    .b44header {
                        min-height: 245px;
                        width: 100%;
                        background: #fff url(../../../../../Static/img/CustomBlocks/B44/leader_bg.jpg) no-repeat;
                        float: left;
                        padding-top: 60px;
                    }

                </style>
                <section class="row-full">
                    <div class="b44header">
                        <div class="container">
                            <h1>Appreciations &amp; Celebrations</h1>

                            <ul>

                                <li>
                                    <a href="../../index.html">About Us</a>
                                </li>

                                <li>
                                    <a href="../index.html">Community</a>
                                </li>

                                <li>
                                    <a href="index.html">Celebration</a>
                                </li>

                            </ul>
                            <img class="img-responsive"
                                src="../../../../../contentassets/52c848ab10724bddb4de5ab25b5d0763/0.5.16.1_b-46-hero_woman.png"
                                alt="" border="0" />
                            <h2>Taking Care of Our Best Assets - PREMIER Associates</h2>
                            <center>
                                <p>At PREMIER, we believe in putting people first, starting with the people who
                                    serve<br />our customers. Beyond great salaries, benefits and other perks, here are
                                    a few<br />ways we show we care.</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                            </center>
                        </div>
                    </div>
                </section>
            </div>
            <div class="block b16block  col-md-12">

                <!-- VIEW RATE / SPEED BUMP [2] -->
                <style>
                    /* Changes to Functionality -> Adding the ability to add one or more links after the main button */
                    .b16basic_box_left a.b16readmore {
                        display: inline-block;
                        letter-spacing: 1px;
                        background: #42967d;
                        color: #fff;
                        font-size: 13px;
                        font-family: 'Prompt-Bold';
                        text-transform: uppercase;
                        padding: 12px 60px;
                        border-radius: 50px;
                        margin-top: 25px;
                        margin-bottom: 0px;
                        margin-right: 30px;
                        text-align: center;
                        margin-left: 20px !important;
                    }

                    .b16basic_box_left a.b16readmore:hover {
                        text-decoration: none;
                    }

                    .b16confidence_links a {
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        font-family: 'Prompt-SemiBold';
                        font-size: 13px;
                        margin-top: 10px;
                        color: #42967d;
                        padding-right: 12px;
                        background: url(../../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center;
                    }

                    .b16confidence_links_multiple {
                        float: left;
                        padding-left: 30px;
                    }

                    .b16confidence_links_multiple ul {
                        display: inline-block;
                        margin: 0;
                        padding-top: 10px;
                        /* For IE, the outcast */
                        zoom: 1;
                        *display: inline;
                    }

                    .b16confidence_links_multiple li {
                        float: left;
                        padding: 2px 5px;
                        margin-right: 20px;
                    }

                    .b16confidence_links_multiple li>a {
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        font-family: 'Prompt-SemiBold';
                        font-size: 13px;
                        margin-top: 10px;
                        color: #42967d;
                        padding-right: 12px;
                        background: url(../../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center;
                    }

                    /* CHANGING SHADING FUNCTIONALITY */
                    /*.b16wrapper{ min-height:455px;}*/
                    .b16wrapper {
                        min-height: 400px;
                    }

                    .b16wrapper .FirstBlock {
                        width: 100%;
                        background-color: #f9f9f9;
                        height: 70px;
                        position: absolute;
                        bottom: -24px;
                        z-index: 1;
                        overflow: hidden;
                    }

                    .ThirdBlock {
                        width: 100%;
                        background-color: #f9f9f9;
                        height: 70px;
                        position: relative;
                        z-index: 2;
                    }

                    .b16basic_box_right {
                        position: relative;
                        z-index: 99;
                    }

                    .b16basic_box_background {
                        margin-bottom: 14px;
                    }

                    .b16basic_box_left {
                        padding-left: 100px;
                    }

                    .b16basic_box_left h2 {
                        padding-top: 35px;
                    }

                    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml {
                        padding-top: 10px;
                    }

                    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml>p {
                        margin-left: 0px !important;
                    }

                    .card_icon_bottom_right {
                        right: 15px !important;
                    }

                    .Overdraft.Protection {
                        width: 50%;
                    }

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
                    .b16basic_box_right .b16imgcrop {}

                </style>
                <!-- VIEW RATE / SPEED BUMP [2] -->

                <section class="row-full b16wrapper">

                    <div class="b16basic_box_left_content b16basic_box_background">
                        <div class="b16basic_box_main">
                            <div class="container">
                                <div class="b16basic_box b16basic_box_position">
                                    <div class="b16basic_box_right" style="padding-right:50px;">
                                        <div class="b16imgcrop"><img
                                                src="../../../../../contentassets/01b2a4c172664aa69500363e3583b8fc/0.5.16.1_b-16-alt1_celeb-min.png"
                                                title="A Celebration of Dedication"
                                                alt="people gathered in business office lobby celebrating"></div>
                                    </div>
                                    <div class="b16basic_box_left">
                                        <h2>A Celebration of Dedication</h2>

                                        <div class="xhtml">
                                            <p>In 2019, we celebrated 83 outstanding PREMIER associates with milestone
                                                anniversaries. We&rsquo;re so grateful for their dedication and service,
                                                as well as their commitment to working The PREMIER Way. Here&rsquo;s to
                                                many more years together!</p>
                                        </div>
                                        <!-- Button and Footer Links go here ... -->
                                        <a href="../../../../../globalassets/documents/2019-anniversary-ad.pdf"
                                            class="b16readmore">View Ad</a>
                                        <!-- Button and Footer Links go here ... -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- View Rate [3] (within container)-->
                <!-- View Rate [3] (within container)-->
            </div>
            <div class="block b16block  col-md-12">

                <!-- VIEW RATE / SPEED BUMP [2] -->
                <style>
                    /* Changes to Functionality -> Adding the ability to add one or more links after the main button */
                    .b16basic_box_left a.b16readmore {
                        display: inline-block;
                        letter-spacing: 1px;
                        background: #42967d;
                        color: #fff;
                        font-size: 13px;
                        font-family: 'Prompt-Bold';
                        text-transform: uppercase;
                        padding: 12px 60px;
                        border-radius: 50px;
                        margin-top: 25px;
                        margin-bottom: 0px;
                        margin-right: 30px;
                        text-align: center;
                        margin-left: 20px !important;
                    }

                    .b16basic_box_left a.b16readmore:hover {
                        text-decoration: none;
                    }

                    .b16confidence_links a {
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        font-family: 'Prompt-SemiBold';
                        font-size: 13px;
                        margin-top: 10px;
                        color: #42967d;
                        padding-right: 12px;
                        background: url(../../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center;
                    }

                    .b16confidence_links_multiple {
                        float: left;
                        padding-left: 30px;
                    }

                    .b16confidence_links_multiple ul {
                        display: inline-block;
                        margin: 0;
                        padding-top: 10px;
                        /* For IE, the outcast */
                        zoom: 1;
                        *display: inline;
                    }

                    .b16confidence_links_multiple li {
                        float: left;
                        padding: 2px 5px;
                        margin-right: 20px;
                    }

                    .b16confidence_links_multiple li>a {
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        font-family: 'Prompt-SemiBold';
                        font-size: 13px;
                        margin-top: 10px;
                        color: #42967d;
                        padding-right: 12px;
                        background: url(../../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center;
                    }

                    /* CHANGING SHADING FUNCTIONALITY */
                    /*.b16wrapper{ min-height:455px;}*/
                    .b16wrapper {
                        min-height: 400px;
                    }

                    .b16wrapper .FirstBlock {
                        width: 100%;
                        background-color: #f9f9f9;
                        height: 70px;
                        position: absolute;
                        bottom: -24px;
                        z-index: 1;
                        overflow: hidden;
                    }

                    .ThirdBlock {
                        width: 100%;
                        background-color: #f9f9f9;
                        height: 70px;
                        position: relative;
                        z-index: 2;
                    }

                    .b16basic_box_right {
                        position: relative;
                        z-index: 99;
                    }

                    .b16basic_box_background {
                        margin-bottom: 14px;
                    }

                    .b16basic_box_left {
                        padding-left: 100px;
                    }

                    .b16basic_box_left h2 {
                        padding-top: 35px;
                    }

                    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml {
                        padding-top: 10px;
                    }

                    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml>p {
                        margin-left: 0px !important;
                    }

                    .card_icon_bottom_right {
                        right: 15px !important;
                    }

                    .Overdraft.Protection {
                        width: 50%;
                    }

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
                    .b16basic_box_right .b16imgcrop {}

                </style>
                <!-- VIEW RATE / SPEED BUMP [2] -->

                <section class="row-full b16wrapper">

                    <div class="b16basic_box_right_content b16basic_box_background">
                        <div class="b16basic_box_main b16basic_box_grey">
                            <div class="container">
                                <div class="b16basic_box">
                                    <div class="b16basic_box_right">
                                        <div class="b16imgcrop" style="margin-left:90px;"><img
                                                src="../../../../../contentassets/c0394576e78247449ea1ecf3f97775e3/0.5.16.1_b-16-alt2_surprise-min.png"
                                                title="PREMIER Surprise Party"
                                                alt="Dana and Miles Surprise party sign with them wearing sombreros ">
                                        </div>

                                    </div>
                                    <div class="b16basic_box_left payIcon-space">
                                        <h2 style="padding-top:0px !important;">PREMIER Surprise Party</h2>
                                        <div class="xhtml">
                                            <p>A surprise all-staff meeting might typically be met with moans and groans
                                                at most banks. But at PREMIER, this particular staff meeting led to new
                                                sports cars, cash prizes, tickets to the hottest musical acts and more.
                                                And what staff meeting would be complete without special guests like
                                                Andy Grammer and One Republic?</p>
                                        </div>

                                        <!-- Button and Footer Links go here ... -->
                                        <a href="premier-surprise-party/index.html" class="b16readmore">Learn
                                            More</a>
                                        <!-- Button and Footer Links go here ... -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- View Rate [3] (within container)-->
                <!-- View Rate [3] (within container)-->
            </div>
            <div class="block b16block  col-md-12">

                <!-- VIEW RATE / SPEED BUMP [2] -->
                <style>
                    /* Changes to Functionality -> Adding the ability to add one or more links after the main button */
                    .b16basic_box_left a.b16readmore {
                        display: inline-block;
                        letter-spacing: 1px;
                        background: #42967d;
                        color: #fff;
                        font-size: 13px;
                        font-family: 'Prompt-Bold';
                        text-transform: uppercase;
                        padding: 12px 60px;
                        border-radius: 50px;
                        margin-top: 25px;
                        margin-bottom: 0px;
                        margin-right: 30px;
                        text-align: center;
                        margin-left: 20px !important;
                    }

                    .b16basic_box_left a.b16readmore:hover {
                        text-decoration: none;
                    }

                    .b16confidence_links a {
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        font-family: 'Prompt-SemiBold';
                        font-size: 13px;
                        margin-top: 10px;
                        color: #42967d;
                        padding-right: 12px;
                        background: url(../../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center;
                    }

                    .b16confidence_links_multiple {
                        float: left;
                        padding-left: 30px;
                    }

                    .b16confidence_links_multiple ul {
                        display: inline-block;
                        margin: 0;
                        padding-top: 10px;
                        /* For IE, the outcast */
                        zoom: 1;
                        *display: inline;
                    }

                    .b16confidence_links_multiple li {
                        float: left;
                        padding: 2px 5px;
                        margin-right: 20px;
                    }

                    .b16confidence_links_multiple li>a {
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        font-family: 'Prompt-SemiBold';
                        font-size: 13px;
                        margin-top: 10px;
                        color: #42967d;
                        padding-right: 12px;
                        background: url(../../../../../Static/img/CustomBlocks/B14/arrow_small.png) no-repeat right center;
                    }

                    /* CHANGING SHADING FUNCTIONALITY */
                    /*.b16wrapper{ min-height:455px;}*/
                    .b16wrapper {
                        min-height: 400px;
                    }

                    .b16wrapper .FirstBlock {
                        width: 100%;
                        background-color: #f9f9f9;
                        height: 70px;
                        position: absolute;
                        bottom: -24px;
                        z-index: 1;
                        overflow: hidden;
                    }

                    .ThirdBlock {
                        width: 100%;
                        background-color: #f9f9f9;
                        height: 70px;
                        position: relative;
                        z-index: 2;
                    }

                    .b16basic_box_right {
                        position: relative;
                        z-index: 99;
                    }

                    .b16basic_box_background {
                        margin-bottom: 14px;
                    }

                    .b16basic_box_left {
                        padding-left: 100px;
                    }

                    .b16basic_box_left h2 {
                        padding-top: 35px;
                    }

                    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml {
                        padding-top: 10px;
                    }

                    .b16basic_box_main .b16basic_box .b16basic_box_left .xhtml>p {
                        margin-left: 0px !important;
                    }

                    .card_icon_bottom_right {
                        right: 15px !important;
                    }

                    .Overdraft.Protection {
                        width: 50%;
                    }

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
                    .b16basic_box_right .b16imgcrop {
                        margin-top: 25px !important;
                    }

                </style>
                <!-- VIEW RATE / SPEED BUMP [2] -->

                <section class="row-full b16wrapper">

                    <div class="b16basic_box_left_content b16basic_box_background">
                        <div class="b16basic_box_main">
                            <div class="container">
                                <div class="b16basic_box b16basic_box_position">
                                    <div class="b16basic_box_right" style="padding-right:50px;">
                                        <div class="b16imgcrop"><img
                                                src="../../../../../contentassets/3f6fd79af1d6499c92390aaaab6addb5/0.5.16.1_b-16-alt3_jack-min.png"
                                                title="Jack&#39;s Bash"
                                                alt="Luke Bryan playing at Dana J Dykhouse Stadium"></div>
                                    </div>
                                    <div class="b16basic_box_left">
                                        <h2>Jack&#39;s Bash</h2>

                                        <div class="xhtml">
                                            <p>To celebrate the opening of South Dakota State University&rsquo;s NEW
                                                Dana J. Dykhouse Stadium, PREMIER threw one of the biggest parties the
                                                school has ever seen. This exciting celebration included university
                                                employees, students and PREMIER associates and featured performances by
                                                country western sensations, Luke Bryan, Little Big Town and Lee Brice!
                                            </p>
                                        </div>
                                        <!-- Button and Footer Links go here ... -->
                                        <a href="jacks-bash/index.html" class="b16readmore">Learn More</a>
                                        <!-- Button and Footer Links go here ... -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- View Rate [3] (within container)-->
                <!-- View Rate [3] (within container)-->
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
                        <img src="../../../../../Static/img/CustomBlocks/B6/featured_bg_a.png" class="b6featured_bg"
                            alt="First PREMIER Bank">
                        <img src="../../../../../Static/img/CustomBlocks/B6/featured_bg_small_a.png"
                            class="b6featured_bg_small_bg" alt="First PREMIER Bank">
                        <div class="b6featured_bg_small carousel" id="b06Carousel" data-ride="carousel">
                            <div class="">
                                <div class="carousel-inner b06carousel-inner">
                                    <div class="item active">
                                        <div class="row b6mypadding">
                                            <div class="b6featured_quote_img col-lg-5 col-md-5"><img
                                                    src=../../../../../contentassets/84d3ddd336fc4faf91e0d8a5a5096c45/quotes-daverozenboom.png
                                                    class="b6featured_img" alt="Dave Rozenboom President"></div>
                                            <div class="b6featured_quote col-lg-7 col-md-7">
                                                <p class="b6alternate">At PREMIER we value people. We continuously
                                                    work to build a culture that supports, encourages and empowers each
                                                    member of our team and one that attracts the best people to work for
                                                    us.</p>
                                                <div class="clearfix"></div><span> - Dave Rozenboom, President,
                                                    First PREMIER Bank</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </section>

            </div>
            <div class="block b26block  col-md-12">



                <style>
                    .carousel-control:focus,
                    .carousel-control:hover,
                    .carousel-control.left,
                    .carousel-control.right {
                        background: none !important;
                    }

                    .b26line_credit_main .carousel-inner {
                        ;
                    }

                    .white-background h2,
                    .white-background .xhtml,
                    .white-background .xhtml p,
                    .grey-background h2,
                    .grey-background .xhtml,
                    .grey-background .xhtml p {
                        color: #000;
                    }

                </style>
                <script>
                    var alternateBackground = "False";
                    $(document).ready(function() {
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



                            <div class="row">
                                <div class="col-md-12 hidden-xs hidden-sm">
                                    <div class="carousel" id="myCarousel-" data-interval="false">
                                        <div class="carousel-inner">
                                            <div class='item active'>
                                                <div
                                                    class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad'>
                                                    <div class='b26line_credit_loans_left'><img
                                                            src='../../../../../contentassets/7e2308f5afce4bd9bb0596e58aa4d30f/ymabii-about_b26_alt1_ph-min.png'
                                                            alt='children in classroom'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a
                                                                href='../philanthropic-giving/index.html'>
                                                                <h3 class='deckspan'>Philanthropic Giving</h3>
                                                            </a></div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>Learn how PREMIER contributions have benefited
                                                                    organizations throughout our region.</p>
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div
                                                    class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans b26line_personal_loans no-pad'>
                                                    <div class='b26line_credit_loans_left'><img
                                                            src='../../../../../contentassets/7bde9901f8b04998828c7da54743f12c/ymabii-about_b26_alt2_comserv-min.png'
                                                            alt='two men talking'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a
                                                                href='../community-service/index.html'>
                                                                <h3 class='deckspan'>Community Service</h3>
                                                            </a></div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>See how PREMIER associates actively serve within our
                                                                    community!</p>
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div
                                                    class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad last'>
                                                    <div class='b26line_credit_loans_left'><img
                                                            src='../../../../../contentassets/42e0a4ba9712456cb5c8369c0ade74c1/ymabii-about_b26_alt3_colsupport-min.png'
                                                            alt='college students'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a
                                                                href='../collegiate-support/index.html'>
                                                                <h3 class='deckspan'>Collegiate Support</h3>
                                                            </a></div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>Learn how PREMIER supports schools, colleges,
                                                                    universities and students to secure a brighter
                                                                    future!</p>
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='item'>
                                                <div
                                                    class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad'>
                                                    <div class='b26line_credit_loans_left'><img
                                                            src='../../../../../contentassets/3151f5b1184b4ebea41405944bc85cac/ymabii-about_b26_alt4_sponsor-min.png'
                                                            alt='woman and lemur at Great Plains Zoo'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a
                                                                href='../sponsorship/index.html'>
                                                                <h3 class='deckspan'>Sponsorships</h3>
                                                            </a></div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>We actively sponsor teams, events, athletics and
                                                                    other activities throughout our community.</p>
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div
                                                    class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans b26line_personal_loans no-pad'>
                                                    <div class='b26line_credit_loans_left'><img
                                                            src='../../../../../contentassets/9ea8aad9972348dba81e33302c8658a5/ymabii-about_b26_alt5_celebrate-min.png'
                                                            alt='Luke Bryan at Dana J Dykhouse Stadium'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a href='index.html'>
                                                                <h3 class='deckspan'>Celebrations & Appreciations</h3>
                                                            </a></div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>Taking time to celebrate the contributions of our
                                                                    employees is important at PREMIER!</p>
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div
                                                    class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad last'>
                                                    <div class='b26line_credit_loans_left'><img
                                                            src='../../../../../contentassets/4ecf786f90774a318f5bb9ce6bf62c89/ymabii-about_b26_alt7_community.png'
                                                            alt='PREMIER Softball Complex'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a href='../index.html'>
                                                                <h3 class='deckspan'>Our Community</h3>
                                                            </a></div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>Learn how PREMIER actively partners with business,
                                                                    government and non-profit organizations to
                                                                    positively impact our region.</p>
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='item'>
                                                <div
                                                    class='col-lg-4 col-md-12 col-sm-12 col-xs-12 b26line_credit_loans no-pad'>
                                                    <div class='b26line_credit_loans_left'><img
                                                            src='../../../../../contentassets/633f8f168e964d89823d68253c83c3bf/ymabii-about_b26_alt6_intern.png'
                                                            alt='students in classroom clapping'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a
                                                                href='../collegiate-support/scholarship-and-internships/index.html'>
                                                                <h3 class='deckspan'>Scholarships & Internships</h3>
                                                            </a></div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>Learn how PREMIER supports students with paid
                                                                    internships and an array of scholarship offerings!
                                                                </p>
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b26Mobile col-sm-6 hidden-md hidden-lg" style="left:-8px;">
                                    <center>
                                        <div class="b26MobileCard" style="width:345px;min-height:700px;">
                                            <div class='item'>
                                                <div
                                                    class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '>
                                                    <div><img
                                                            src='../../../../../contentassets/7e2308f5afce4bd9bb0596e58aa4d30f/ymabii-about_b26_alt1_ph-min.png'
                                                            alt='children in classroom'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a
                                                                href='../philanthropic-giving/index.html'>
                                                                <h3 class='deckspan'>Philanthropic Giving</h3>
                                                            </a></div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>Learn how PREMIER contributions have benefited
                                                                    organizations throughout our region.</p>
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='item'>
                                                <div
                                                    class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '>
                                                    <div><img
                                                            src='../../../../../contentassets/7bde9901f8b04998828c7da54743f12c/ymabii-about_b26_alt2_comserv-min.png'
                                                            alt='two men talking'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a
                                                                href='../community-service/index.html'>
                                                                <h3 class='deckspan'>Community Service</h3>
                                                            </a></div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>See how PREMIER associates actively serve within our
                                                                    community!</p>
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='item'>
                                                <div
                                                    class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '>
                                                    <div><img
                                                            src='../../../../../contentassets/42e0a4ba9712456cb5c8369c0ade74c1/ymabii-about_b26_alt3_colsupport-min.png'
                                                            alt='college students'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a
                                                                href='../collegiate-support/index.html'>
                                                                <h3 class='deckspan'>Collegiate Support</h3>
                                                            </a></div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>Learn how PREMIER supports schools, colleges,
                                                                    universities and students to secure a brighter
                                                                    future!</p>
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='item'>
                                                <div
                                                    class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '>
                                                    <div><img
                                                            src='../../../../../contentassets/3151f5b1184b4ebea41405944bc85cac/ymabii-about_b26_alt4_sponsor-min.png'
                                                            alt='woman and lemur at Great Plains Zoo'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a
                                                                href='../sponsorship/index.html'>
                                                                <h3 class='deckspan'>Sponsorships</h3>
                                                            </a></div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>We actively sponsor teams, events, athletics and
                                                                    other activities throughout our community.</p>
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='item'>
                                                <div
                                                    class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '>
                                                    <div><img
                                                            src='../../../../../contentassets/9ea8aad9972348dba81e33302c8658a5/ymabii-about_b26_alt5_celebrate-min.png'
                                                            alt='Luke Bryan at Dana J Dykhouse Stadium'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a href='index.html'>
                                                                <h3 class='deckspan'>Celebrations & Appreciations</h3>
                                                            </a></div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>Taking time to celebrate the contributions of our
                                                                    employees is important at PREMIER!</p>
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='item'>
                                                <div
                                                    class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '>
                                                    <div><img
                                                            src='../../../../../contentassets/4ecf786f90774a318f5bb9ce6bf62c89/ymabii-about_b26_alt7_community.png'
                                                            alt='PREMIER Softball Complex'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a href='../index.html'>
                                                                <h3 class='deckspan'>Our Community</h3>
                                                            </a></div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>Learn how PREMIER actively partners with business,
                                                                    government and non-profit organizations to
                                                                    positively impact our region.</p>
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='item'>
                                                <div
                                                    class='col-xs-12 col-sm-12 b26line_credit_loans b26line_personal_loans no-pad '>
                                                    <div><img
                                                            src='../../../../../contentassets/633f8f168e964d89823d68253c83c3bf/ymabii-about_b26_alt6_intern.png'
                                                            alt='students in classroom clapping'></div>
                                                    <div class='b26line_credit_loans_right'>
                                                        <div class="b26titlerow"><a
                                                                href='../collegiate-support/scholarship-and-internships/index.html'>
                                                                <h3 class='deckspan'>Scholarships & Internships</h3>
                                                            </a></div>
                                                        <h3><br clear='all' />
                                                            <div class="xhtml">
                                                                <p>Learn how PREMIER supports students with paid
                                                                    internships and an array of scholarship offerings!
                                                                </p>
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </center>
                                </div>

                                <a class="left carousel-control" href="#myCarousel-" data-slide="prev"><img
                                        src="../../../../../Static/img/CustomBlocks/B26/left_arrow.png"
                                        alt="First PREMIER Bank"></a>
                                <a class="right carousel-control" href="#myCarousel-" data-slide="next"><img
                                        src="../../../../../Static/img/CustomBlocks/B26/right_arrow.png"
                                        alt="First PREMIER Bank"></a>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div>
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
                                <a href="../../../resources/first-premier-privacy-statement-2020/index.html">Privacy
                                    Notice &amp; Statement</a>
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
                        <p>Member FDIC | <img src="../../../../../Static/img/equalhousinglender.png"
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
                background: url('../../../../../Static/img/EHLlogo%20white.png') 230px 0px no-repeat;
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