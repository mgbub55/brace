

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
    .b44header  { min-height:245px;width:100%; background:#fff url(../../../../../Static/img/CustomBlocks/B44/leader_bg.jpg) no-repeat; text-align:center; padding-top:30px;}
</style>
<section class="row-full">
    <div class="b44header">
        <div class="container">
            <h1>Business Banking</h1>
            
<ul>
    
</ul>
                                                    <center><p>Our experienced business team takes the time to understand your business goals and provide you with the banking products and financial services that fit your needs. They&rsquo;ll stand by you as you grow, providing local decision making and personal, customer care.</p></center>
        </div>
    </div>
</section></div><div class="block b28block  col-md-12">

    <style>
        .b28board_members_main {
            float: left;
            width: 100%;
            padding-bottom: 60px;
            text-align: left;
            background-color: transparent !important;
        }

            .b28board_members_main h2 {
                font-size: 40px;
                font-family: 'Prompt-Medium';
                text-align: center;
                width: 100%;
                color: #233c4c !important;
                text-shadow: none;
                padding-top: 20px;
            }

            .b28board_members_main .b28board_members_right:hover h3 {
                color: #fff !important;
            }

                .b28board_members_main .b28board_members_right:hover h3.Gold {
                    color: #e4cb34 !important;
                }
    </style>

<style>
    .b28board_members { min-height: 580px; }
    .b28board_members_right { height: 315px !important; min-height: 315px !important; }
</style>
<style>
    .b28board_members_right h3 {
        padding-top: 20px;
    }

    .b28board_members_right h4 > p {
        padding-top: 10px;
        color: #60aadb;
        font-weight: normal;
        font-size: 14px;
        margin-bottom: 10px ;
        font-family: 'Prompt-Light'
    }

    .b28board_members_main p {
        color: #385061;
        font-weight: 600;
        font-size: 14px;
        width: 100%;
        font-family: 'Prompt-Medium';
    }
    .Center p {
        margin-bottom: 0px !important;
    }
    .margin10
    {
        margin-top :10px;
    }
    /* Bottom Links & Contact Me popup */
    .b28board_members .b28board_members_right ul {
        display: inline-block;
        margin: 0;
        padding-top: 15px; /* For IE, the outcast */
        zoom: 1;
        *display: inline;
    }

        .b28board_members .b28board_members_right ul li {
            display: inline-block !important;
        }

            .b28board_members .b28board_members_right ul li a.b28FooterLink {
                color: #268d6e;
                background: url(../../../../../Static/img/CustomBlocks/B20/arrow_green.png) no-repeat right 3px;
                padding: 0px 15px 0px 0px;
                margin-right: 20px;
                margin-top: 0px;
                letter-spacing: 0.5px;
                padding-left: 20px;
                font-size: 12px;
                font-family: "Prompt-SemiBold";
                text-shadow: none;
                text-transform: uppercase;
            }

                .b28board_members .b28board_members_right ul li a.b28FooterLink:hover {
                    color: #1c7258;
                    background: url(../../../../../Static/img/CustomBlocks/B20/arrow_green.png) no-repeat right 3px;
                    padding: 0px 15px 0px 0px;
                    margin-right: 20px;
                    margin-top: 0px;
                    letter-spacing: 0.5px;
                    padding-left: 20px;
                    font-size: 12px;
                    font-family: "Prompt-SemiBold";
                    text-shadow: none;
                    text-transform: uppercase;
                }

    .loan_application_main {
        float: left;
        width: 100%;
        padding: 10px 0px 25px 0px;
        text-align: left;
    }

        .loan_application_main .loan_type_main {
            float: left;
            width: 100%;
            margin: 30px 0px;
        }

            .loan_application_main .loan_type_main h3 {
                color: #233c4c;
                font-size: 45px;
                font-family: "Prompt-Medium" float: left;
                width: 100%;
                margin-bottom: 10px;
                text-shadow: 0px 0px 0 rgba(0,0,0,0.3);
            }

            .loan_application_main .loan_type_main p.required {
                color: #61acdc;
                font-size: 16px;
                font-family: 'Prompt-Bold';
                float: left;
                width: 72%;
                margin-bottom: 8px;
                text-transform: uppercase;
            }

        .loan_application_main .loan_information_main {
            margin: 10px 0px 30px 0px;
            float: left;
            width: 70%;
            padding: 50px 40px 0px 40px;
            border-top-left-radius: 6px;
            border-top-right-radius: 6px;
            border-bottom-right-radius: 6px;
            border-bottom-left-radius: 6px;
            background: #fff;
            box-shadow: 0px 5px 13px 0px rgba(67, 67, 67, 0.08);
            border: solid 1px #dfdfdf;
        }

            .loan_application_main .loan_information_main p {
                margin: 5px 0;
                font-size: 16px;
                color: #4a6375;
                font-family: 'Prompt-Medium';
            }

            .loan_application_main .loan_information_main span {
                letter-spacing: 1px;
                font-size: 25px;
                color: #385061;
                font-family: 'Prompt-SemiBold';
                margin-bottom: 5px;
                float: left;
                width: 100%;
                border-bottom: solid 1px #ebedef;
                padding-bottom: 10px;
            }

            .loan_application_main .loan_information_main .purpose-of-loan {
                margin-top: 15px;
                float: left;
                width: 100%;
            }

                .loan_application_main .loan_information_main .purpose-of-loan span {
                    font-size: 16px;
                    text-transform: uppercase;
                    color: #385061;
                    font-family: 'Prompt-Bold';
                    margin-bottom: 10px;
                    float: left;
                    width: 100%;
                    border: 0;
                    padding: 0;
                    position: relative;
                    left: -20px;
                }

                .loan_application_main .loan_information_main .purpose-of-loan em {
                    color: #61acdc;
                    font-size: 16px;
                    font-family: 'Prompt-Bold';
                    float: left;
                    margin-right: 10px;
                }

            .loan_application_main .loan_information_main .req_loan_amount {
                float: left;
                width: 47%;
                margin: 10px 25px 30px 0px;
            }

                .loan_application_main .loan_information_main .req_loan_amount input, .loan_application_main .loan_information_main .req_loan_amount select, .loan_application_main .loan_information_main .req_loan_amount textarea {
                    color: #4a6375;
                    font-size: 16px;
                    font-family: 'Prompt-Medium';
                }

                .loan_application_main .loan_information_main .req_loan_amount span {
                    letter-spacing: 1px;
                    color: #4a6375;
                    font-size: 16px;
                    font-family: 'Prompt-Bold';
                    float: left;
                    width: 100%;
                    text-transform: uppercase;
                    border: 0px;
                    padding: 0px;
                }

                .loan_application_main .loan_information_main .req_loan_amount input {
                    border: solid 2px #e9e9e9;
                    border-top-left-radius: 6px;
                    border-top-right-radius: 6px;
                    border-bottom-right-radius: 6px;
                    border-bottom-left-radius: 6px;
                    background: #fff;
                    padding: 10px;
                    height: 45px;
                    width: 100%;
                }

                .loan_application_main .loan_information_main .req_loan_amount select {
                    border: solid 2px #e9e9e9;
                    border-top-left-radius: 6px;
                    border-top-right-radius: 6px;
                    border-bottom-right-radius: 6px;
                    border-bottom-left-radius: 6px;
                    padding: 10px;
                    height: 45px;
                    width: 100%;
                }

                .loan_application_main .loan_information_main .req_loan_amount.select_custom {
                    margin-right: 10px;
                }

            .loan_application_main .loan_information_main .req_loan_amounttext {
                width: 97%;
            }

            .loan_application_main .loan_information_main .checkbox-radio {
                padding-left: 0px;
            }

            .loan_application_main .loan_information_main em {
                color: #61acdc;
                font-size: 16px;
                font-family: 'Prompt-Bold';
                float: left;
                margin-right: 10px;
            }

    .pop_main_container {
        padding: 0px 40px;
    }

    #submitButtonB28Block {
        height: 42px;
        width: 156.031px;
        margin-left: 22px;
        float: right;
        display: inline-block;
        letter-spacing: 1px;
        background: #42967d;
        font-size: 13px;
        font-family: 'Prompt-Bold';
        text-transform: uppercase;
        padding: 12px 50px;
        border-radius: 50px;
        margin-top: 20px;
        margin-bottom: 0px;
        color: white;
    }

    #resetButton {
        margin-left: 22px;
        float: right;
        display: inline-block;
        letter-spacing: 1px;
        background: #233c4c;
        color: #fff;
        font-size: 13px;
        font-family: 'Prompt-Bold';
        text-transform: uppercase;
        padding: 12px 50px;
        border-radius: 50px;
        margin-top: 20px;
        margin-bottom: 0px;
        color: white;
    }

    .req_loan_amount select {
        height: 42px;
        border-radius: 0px;
        font-family: 'Prompt-Medium';
        font-size: 18px;
        color: #6a91aa;
        width: 100%;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border: solid 1px #e9e9e9;
        background: url("../../../Static/img/select_arrow.html") no-repeat 96% center;
    }

    .loan_application_main .loan_information_main .req_loan_amount textarea {
        border: solid 2px #e9e9e9;
        border-top-left-radius: 6px;
        border-top-right-radius: 6px;
        border-bottom-right-radius: 6px;
        border-bottom-left-radius: 6px;
        background: #fff;
        padding: 10px;
        height: 45px;
        width: 100%;
        min-height: 120px;
    }

    .req_loan_amounttext button {
        background: transparent;
        border: #fff 1px solid;
    }

    @media only screen and (max-width:425px) and (orientation:portrait) {
        .pop_main_container {
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

            .pop_main_container .loan_application_main {
                width: 100%;
                padding-left: 0px;
                padding-right: 0px;
            }

                .pop_main_container .loan_application_main .loan_information_main {
                    width: 100%;
                    padding-left: 0px;
                    padding-right: 0px;
                    border: none;
                }

                    .pop_main_container .loan_application_main .loan_information_main .req_loan_amount {
                        width: 100%;
                    }

                    .pop_main_container .loan_application_main .loan_information_main .submitButton {
                        width: 100px;
                    }

                    .pop_main_container .loan_application_main .loan_information_main .resetButton {
                        width: 100px;
                    }

                .pop_main_container .loan_application_main .loan_type_main h3 {
                    font-size: 18px;
                    font-weight: bold;
                }

                .pop_main_container .loan_application_main .loan_type_main .required {
                    font-size: 12px !important;
                }

                .pop_main_container .loan_application_main .loan_type_main p {
                    height: 75px !important;
                }
    }
</style>
<a></a>
<section class="row-full">
    <div class="b28board_members_main" style="padding-top:20px;">
        <div class="container">
            <p>&nbsp; &nbsp;</p>
            <div class='b28block-profile-wrapper'><div id='boardsection_1' class="b28board_members col-md-4"  ><div class="b28board_members_left">  <img id='MainBoardPhoto' src="../../../../../contentassets/f51822218c3844b5835078a32081b76c/pam_hanneman.png" alt="Pam Hanneman" /></div><div class="b28board_members_right"><h3>Pam Hanneman</h3><h4 class="Blue Center"><p class="Center"><b></b><br/><p style="text-align: center;">Vice President<br />Business Banking Manager<br />14th &amp; Minnesota<br />Sioux Falls</p></p></h4><h4 class="Blue Center margin10">NMLS# 1065643</h4><h3 class="Gold">605-357-3198</h3></div></div><div id='boardsection_2' class="b28board_members col-md-4"  ><div class="b28board_members_left">  <img id='MainBoardPhoto' src="../../../../../contentassets/287a56adab844cac85142fa0ee160a93/jordan_huisman.png" alt="Jordan Huisman" /></div><div class="b28board_members_right"><h3>Jordan Huisman</h3><h4 class="Blue Center"><p class="Center"><b></b><br/><p style="text-align: center;">Business Banking Officer<br />14th &amp; Minnesota<br />Sioux Falls</p></p></h4><h4 class="Blue Center margin10">NMLS# 1117827</h4><h3 class="Gold">605-371-2801</h3></div></div><div id='boardsection_3' class="b28board_members col-md-4 last" ><div class="b28board_members_left">  <img id='MainBoardPhoto' src="../../../../../contentassets/b46bc6d8fc584a50916b7628908e368c/alex-jensen.jpg" alt="Alex Jensen" /></div><div class="b28board_members_right"><h3>Alex Jensen</h3><h4 class="Blue Center"><p class="Center"><b></b><br/><p style="text-align: center;">Business Banking Officer<br />14th &amp; Minnesota<br />Sioux Falls</p></p></h4><h4 class="Blue Center margin10">NMLS# 649920</h4><h3 class="Gold">605-978-9796</h3></div></div><div id='boardsection_4' class="b28board_members col-md-4 m-l-2" ><div class="b28board_members_left">  <img id='MainBoardPhoto' src="../../../../../contentassets/13254f2f717e414285b9bee5d6ac4cc8/keith_miller.jpg" alt="Keith Miller" /></div><div class="b28board_members_right"><h3>Keith Miller</h3><h4 class="Blue Center"><p class="Center"><b></b><br/><p style="text-align: center;">Business Banking Officer<br />14th &amp; Minnesota<br />Sioux Falls</p></p></h4><h4 class="Blue Center margin10">NMLS# 1041015</h4><h3 class="Gold">605-357-3124</h3></div></div><div id='boardsection_5' class="b28board_members col-md-4"  ><div class="b28board_members_left">  <img id='MainBoardPhoto' src="../../../../../contentassets/48e3e0be8feb4ca7b5e9ba92943d8d42/bill_oconner.png" alt="Bill O'Connor" /></div><div class="b28board_members_right"><h3>Bill O'Connor</h3><h4 class="Blue Center"><p class="Center"><b></b><br/><p style="text-align: center;">Vice President<br />Business Banking<br />14th &amp; Minnesota<br />Sioux Falls</p></p></h4><h4 class="Blue Center margin10">NMLS# 696125</h4><h3 class="Gold">605-357-3039</h3></div></div><div id='boardsection_6' class="b28board_members col-md-4 last" ><div class="b28board_members_left">  <img id='MainBoardPhoto' src="../../../../../contentassets/89424365f56e47abad5818704fb72497/randy_osterloo_new.png" alt="Randy Osterloo" /></div><div class="b28board_members_right"><h3>Randy Osterloo</h3><h4 class="Blue Center"><p class="Center"><b></b><br/><p style="text-align: center;">Vice President<br />Business Banking<br />14th &amp; Minnesota<br />Sioux Falls</p></p></h4><h4 class="Blue Center margin10">NMLS# 696126</h4><h3 class="Gold">605-357-3012</h3></div></div><div id='boardsection_7' class="b28board_members col-md-4"  ><div class="b28board_members_left">  <img id='MainBoardPhoto' src="../../../../../contentassets/e269b4ba0aa143f4bed199aac8345aba/team_page_luke_tibbetts.jpg" alt="Luke Tibbetts" /></div><div class="b28board_members_right"><h3>Luke Tibbetts</h3><h4 class="Blue Center"><p class="Center"><b></b><br/><p style="text-align: center;">Vice President<br />Business Banking<br />14th &amp; Minnesota<br />Sioux Falls</p></p></h4><h4 class="Blue Center margin10">NMLS# 696129</h4><h3 class="Gold">605-357-3014</h3></div></div><div id='boardsection_8' class="b28board_members col-md-4 m-l-2" ><div class="b28board_members_left">  <img id='MainBoardPhoto' src="../../../../../contentassets/4d0524cd0873442dad4f02a241b716c6/mark_dunn.png" alt="Mark Dunn" /></div><div class="b28board_members_right"><h3>Mark Dunn</h3><h4 class="Blue Center"><p class="Center"><b></b><br/><p style="text-align: center;">Vice President, Market Leader<br />Watertown I-29<br /><br /><br /></p></p></h4><h4 class="Blue Center margin10">NMLS# 699154</h4><h3 class="Gold">605-884-2015</h3></div></div><div id='boardsection_9' class="b28board_members col-md-4 last" ><div class="b28board_members_left">  <img id='MainBoardPhoto' src="../../../../../contentassets/90fae521505b41f4bb6154aba5eb032c/tim_walter_team.jpg" alt="Tim Walter" /></div><div class="b28board_members_right"><h3>Tim Walter</h3><h4 class="Blue Center"><p class="Center"><b></b><br/><p style="text-align: center;">Vice President, Business Banking<br />Watertown I-29<br /><br /><br /></p></p></h4><h4 class="Blue Center margin10">NMLS# 473267</h4><h3 class="Gold">605-884-2008</h3></div></div><div id='boardsection_10' class="b28board_members col-md-4"  ><div class="b28board_members_left">  <img id='MainBoardPhoto' src="../../../../../contentassets/bb3ef1fcd9354604a72a3eca21f0b2e3/sean_melmer.png" alt="Sean Melmer" /></div><div class="b28board_members_right"><h3>Sean Melmer</h3><h4 class="Blue Center"><p class="Center"><b></b><br/><p style="text-align: center;">Business Banking Officer<br />Watertown I-29<br /><br /><br /></p></p></h4><h4 class="Blue Center margin10">NMLS# 1653104</h4><h3 class="Gold">605-884-2006</h3></div></div></div>

            <!--Pop up content starts-->
            <div id="b28BoardModal" class="modal fade" role="dialog">
                <div class="vertical-alignment-helper">
                    <div class="modal-dialog b28pop_board vertical-align-center">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="b28pop_main_container_board">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">
                                            <img class="close_icon" src="../../../../../Static/img/CustomBlocks/B29/close.png" alt="First PREMIER Bank">
                                            <img class="close_icon_m" src="../../../../../Static/img/CustomBlocks/B29/close_mobile.png" alt="First PREMIER Bank">
                                        </span>
                                    </button>
                                    <div class="b28pop_main_container_board_left"><img id="boardImage" src="#" alt="First PREMIER Bank"></div>
                                    <div class="b28pop_main_container_board_right">
                                        <h3 id="boardName"></h3>
                                        <span id="boardBranchName"></span>
                                        <p id="boardDescription" style="text-align: left;">
                                        </p>

                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="b28conatact-name">Phone</div>
                                            <div id="boardPhoneNumber" class="b28conatact-number"></div>

                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <a id="boardEmailId" class="b28conatact-name">Email</a>
                                            <a id="boardEmailLink" class="b28conatact-email" style="padding-right: 12px;background-size: 6px;"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Pop up content End-->
        </div>
    </div>
</section>

<!-- View Rate [3] (within container)-->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog pop_board">
        <div class="modal-content">
            <div class="modal-body">
                <div class="pop_main_container_board" style="width:93%;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <img class="close_icon" src="../../../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                        </span>
                    </button>
                    <div class="pop_main_container">
                        <form>
                            <div class="loan_application_main">
                                <div class="container">
                                    <div class="loan_type_main">
                                        <h3 id="contactWithPersonName"></h3>
                                        <p class="required">Note: Email is not secure. Please do not send any sensitive personal information including but not limited to your SSN, bank numbers, or other personally identifiable information</p>
                                    </div>
                                    <!--Loan Information-->
                                    <div class="loan_information_main">
                                        <div class="req_loan_amount">
                                            <span><em>*</em>Full name</span>
                                            <input type="text" id="fullname" required />
                                        </div>
                                        <div class="req_loan_amount select_custom">
                                            <span><em>*</em>Email</span>
                                            <input type="email" id="email" required />
                                        </div>
                                        <div class="req_loan_amount req_loan_amounttext">
                                            <span><em>*</em>Phone</span>
                                            <input type="text" id="phone" />
                                            <br /><br /><br />
                                            <span><em>*</em>Message</span>
                                            <textarea id="message" required></textarea>
                                            <button type="submit" id="submitButtonB28Block">Submit</button>
                                            <button type="button" id="resetButton" data-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- View Rate [3] (within container)-->
<!--- second Modal-->
    <div id="myModal2_PamHanneman" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="../../../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_containerArea">
                            <div class="new5Popup">

                                <div class="new5Popup_leadership">
                                    <div class="new5Popup_leadership_left"><img src="../../../../../contentassets/f51822218c3844b5835078a32081b76c/pam_hanneman.png" title="Pam Hanneman" alt="Pam Hanneman"></div>
                                    <div class="new5Popup_leadership_right">
                                        <h2>Pam Hanneman</h2>
                                          <span class="upper"></span>
                                        <h4> <p style="text-align: center;">Vice President<br />Business Banking Manager<br />14th &amp; Minnesota<br />Sioux Falls</p></h4>
                                        <div class="xhtml">
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Phone</h5>
                                                <span>605-357-3198</span>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-md-1"></div>
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Email</h5>
                                                <span><a href="mailto:">Contact Me</a></span>
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
    </div>
    <div id="myModal2_JordanHuisman" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="../../../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_containerArea">
                            <div class="new5Popup">

                                <div class="new5Popup_leadership">
                                    <div class="new5Popup_leadership_left"><img src="../../../../../contentassets/287a56adab844cac85142fa0ee160a93/jordan_huisman.png" title="Jordan Huisman" alt="Jordan Hulsman"></div>
                                    <div class="new5Popup_leadership_right">
                                        <h2>Jordan Huisman</h2>
                                          <span class="upper"></span>
                                        <h4> <p style="text-align: center;">Business Banking Officer<br />14th &amp; Minnesota<br />Sioux Falls</p></h4>
                                        <div class="xhtml">
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Phone</h5>
                                                <span>605-371-2801</span>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-md-1"></div>
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Email</h5>
                                                <span><a href="mailto:">Contact Me</a></span>
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
    </div>
    <div id="myModal2_AlexJensen" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="../../../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_containerArea">
                            <div class="new5Popup">

                                <div class="new5Popup_leadership">
                                    <div class="new5Popup_leadership_left"><img src="../../../../../contentassets/b46bc6d8fc584a50916b7628908e368c/alex-jensen.jpg" title="Alex Jensen" alt="Alex Jensen"></div>
                                    <div class="new5Popup_leadership_right">
                                        <h2>Alex Jensen</h2>
                                          <span class="upper"></span>
                                        <h4> <p style="text-align: center;">Business Banking Officer<br />14th &amp; Minnesota<br />Sioux Falls</p></h4>
                                        <div class="xhtml">
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Phone</h5>
                                                <span>605-978-9796</span>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-md-1"></div>
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Email</h5>
                                                <span><a href="mailto:">Contact Me</a></span>
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
    </div>
    <div id="myModal2_KeithMiller" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="../../../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_containerArea">
                            <div class="new5Popup">

                                <div class="new5Popup_leadership">
                                    <div class="new5Popup_leadership_left"><img src="../../../../../contentassets/13254f2f717e414285b9bee5d6ac4cc8/keith_miller.jpg" title="Keith Miller" alt="Cory Hughes"></div>
                                    <div class="new5Popup_leadership_right">
                                        <h2>Keith Miller</h2>
                                          <span class="upper"></span>
                                        <h4> <p style="text-align: center;">Business Banking Officer<br />14th &amp; Minnesota<br />Sioux Falls</p></h4>
                                        <div class="xhtml">
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Phone</h5>
                                                <span>605-357-3124</span>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-md-1"></div>
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Email</h5>
                                                <span><a href="mailto:">Contact Me</a></span>
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
    </div>
    <div id="myModal2_BillO&#39;Connor" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="../../../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_containerArea">
                            <div class="new5Popup">

                                <div class="new5Popup_leadership">
                                    <div class="new5Popup_leadership_left"><img src="../../../../../contentassets/48e3e0be8feb4ca7b5e9ba92943d8d42/bill_oconner.png" title="Bill O&#39;Connor" alt="Bill O&#39;Connor"></div>
                                    <div class="new5Popup_leadership_right">
                                        <h2>Bill O&#39;Connor</h2>
                                          <span class="upper"></span>
                                        <h4> <p style="text-align: center;">Vice President<br />Business Banking<br />14th &amp; Minnesota<br />Sioux Falls</p></h4>
                                        <div class="xhtml">
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Phone</h5>
                                                <span>605-357-3039</span>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-md-1"></div>
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Email</h5>
                                                <span><a href="mailto:">Contact Me</a></span>
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
    </div>
    <div id="myModal2_RandyOsterloo" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="../../../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_containerArea">
                            <div class="new5Popup">

                                <div class="new5Popup_leadership">
                                    <div class="new5Popup_leadership_left"><img src="../../../../../contentassets/89424365f56e47abad5818704fb72497/randy_osterloo_new.png" title="Randy Osterloo" alt="Randy Osterloo"></div>
                                    <div class="new5Popup_leadership_right">
                                        <h2>Randy Osterloo</h2>
                                          <span class="upper"></span>
                                        <h4> <p style="text-align: center;">Vice President<br />Business Banking<br />14th &amp; Minnesota<br />Sioux Falls</p></h4>
                                        <div class="xhtml">
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Phone</h5>
                                                <span>605-357-3012</span>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-md-1"></div>
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Email</h5>
                                                <span><a href="mailto:">Contact Me</a></span>
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
    </div>
    <div id="myModal2_LukeTibbetts" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="../../../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_containerArea">
                            <div class="new5Popup">

                                <div class="new5Popup_leadership">
                                    <div class="new5Popup_leadership_left"><img src="../../../../../contentassets/e269b4ba0aa143f4bed199aac8345aba/team_page_luke_tibbetts.jpg" title="Luke Tibbetts" alt="Luke Tibbetts"></div>
                                    <div class="new5Popup_leadership_right">
                                        <h2>Luke Tibbetts</h2>
                                          <span class="upper"></span>
                                        <h4> <p style="text-align: center;">Vice President<br />Business Banking<br />14th &amp; Minnesota<br />Sioux Falls</p></h4>
                                        <div class="xhtml">
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Phone</h5>
                                                <span>605-357-3014</span>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-md-1"></div>
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Email</h5>
                                                <span><a href="mailto:">Contact Me</a></span>
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
    </div>
    <div id="myModal2_MarkDunn" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="../../../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_containerArea">
                            <div class="new5Popup">

                                <div class="new5Popup_leadership">
                                    <div class="new5Popup_leadership_left"><img src="../../../../../contentassets/4d0524cd0873442dad4f02a241b716c6/mark_dunn.png" title="Mark Dunn" alt="Mark Dunn"></div>
                                    <div class="new5Popup_leadership_right">
                                        <h2>Mark Dunn</h2>
                                          <span class="upper"></span>
                                        <h4> <p style="text-align: center;">Vice President, Market Leader<br />Watertown I-29<br /><br /><br /></p></h4>
                                        <div class="xhtml">
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Phone</h5>
                                                <span>605-884-2015</span>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-md-1"></div>
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Email</h5>
                                                <span><a href="mailto:">Contact Me</a></span>
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
    </div>
    <div id="myModal2_TimWalter" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="../../../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_containerArea">
                            <div class="new5Popup">

                                <div class="new5Popup_leadership">
                                    <div class="new5Popup_leadership_left"><img src="../../../../../contentassets/90fae521505b41f4bb6154aba5eb032c/tim_walter_team.jpg" title="Tim Walter" alt="Mark Dunn"></div>
                                    <div class="new5Popup_leadership_right">
                                        <h2>Tim Walter</h2>
                                          <span class="upper"></span>
                                        <h4> <p style="text-align: center;">Vice President, Business Banking<br />Watertown I-29<br /><br /><br /></p></h4>
                                        <div class="xhtml">
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Phone</h5>
                                                <span>605-884-2008</span>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-md-1"></div>
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Email</h5>
                                                <span><a href="mailto:">Contact Me</a></span>
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
    </div>
    <div id="myModal2_SeanMelmer" class="modal fade" role="dialog">
        <div class="modal-dialog pop_board">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pop_main_container_board">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <img class="close_icon" src="../../../../../static/img/closebutton.png" alt="First PREMIER Bank" style="height:17px !important;width:17px !important;">
                            </span>
                        </button>
                        <div class="pop_main_containerArea">
                            <div class="new5Popup">

                                <div class="new5Popup_leadership">
                                    <div class="new5Popup_leadership_left"><img src="../../../../../contentassets/bb3ef1fcd9354604a72a3eca21f0b2e3/sean_melmer.png" title="Sean Melmer" alt="Sean Melmer"></div>
                                    <div class="new5Popup_leadership_right">
                                        <h2>Sean Melmer</h2>
                                          <span class="upper"></span>
                                        <h4> <p style="text-align: center;">Business Banking Officer<br />Watertown I-29<br /><br /><br /></p></h4>
                                        <div class="xhtml">
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Phone</h5>
                                                <span>605-884-2006</span>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-md-1"></div>
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Email</h5>
                                                <span><a href="mailto:">Contact Me</a></span>
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
    </div>




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
                <h2 class="White">Need More Information</h2>
                <div class="xhtml"><p style="text-align: center;">We are here to help.&nbsp; Contact our Customer Care Team at:<br /><br /></p>
<h3 style="text-align: center; color: #e4cb34;">800-501-6535</h3></div>
                <div class="b25bottom" style="">
                    <center>
                    <a href="../../../../../globalassets/documents/pppsendingsecuretopremier.pdf" class="b25mainanchor">Send Secure Message to Banker</a><br clear="all"/>
                    </center>
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
            <a href="../../community/index.html">Community</a> 
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