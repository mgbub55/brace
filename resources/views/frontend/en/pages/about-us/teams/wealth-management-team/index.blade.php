

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
            <h1>Wealth &amp; Asset Management</h1>
            
<ul>
    
</ul>
                                                    <center><p style="text-align: center;">We provide private banking, wealth management, and trust services&nbsp;&nbsp;<br />for personal and business clients. Stop by or call to learn how we can help you today.</p></center>
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
                <h2>Private Banking</h2>
            <p>&nbsp;&nbsp;</p>
            <div class='b28block-profile-wrapper'><div id='boardsection_1' class="b28board_members col-md-4"  ><div class="b28board_members_left">  <img id='MainBoardPhoto' src="../../../../../contentassets/381634ee54874821a1fa87da42ab4956/t_j_hora.png" alt="TJ Hora" /></div><div class="b28board_members_right"><h3>TJ Hora</h3><h4 class="Blue Center"><p class="Center"><b></b><br/><p style="text-align: center;">Vice President<br />Private Banking<br />14th &amp; Minnesota<br />Sioux Falls</p></p></h4><h4 class="Blue Center margin10">NMLS# 628219</h4><h3 class="Gold">605-357-3015</h3><ul><li><a href="#" data-toggle="modal" data-target="#myModal" class="b28FooterLink" value="20536" name="TJ Hora" onclick="contactPersonName(this)">Contact Me</a></li></ul></div></div><div id='boardsection_2' class="b28board_members col-md-4"  ><div class="b28board_members_left">  <img id='MainBoardPhoto' src="../../../../../contentassets/70d26552689441ddbf705998f61f771d/tim_mulder.jpg" alt="Tim Mulder" /></div><div class="b28board_members_right"><h3>Tim Mulder</h3><h4 class="Blue Center"><p class="Center"><b></b><br/><p style="text-align: center;">Private Banking<br />Officer<br />14th &amp; Minnesota<br />Sioux Falls</p></p></h4><h4 class="Blue Center margin10">NMLS# 464761</h4><h3 class="Gold">605-357-3021</h3><ul><li><a href="#" data-toggle="modal" data-target="#myModal" class="b28FooterLink" value="20539" name="Tim Mulder" onclick="contactPersonName(this)">Contact Me</a></li></ul></div></div></div>

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
    <div id="myModal2_TJHora" class="modal fade" role="dialog">
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
                                    <div class="new5Popup_leadership_left"><img src="../../../../../contentassets/381634ee54874821a1fa87da42ab4956/t_j_hora.png" title="TJ Hora" alt="TJ Hora"></div>
                                    <div class="new5Popup_leadership_right">
                                        <h2>TJ Hora</h2>
                                          <span class="upper"></span>
                                        <h4> <p style="text-align: center;">Vice President<br />Private Banking<br />14th &amp; Minnesota<br />Sioux Falls</p></h4>
                                        <div class="xhtml">
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Phone</h5>
                                                <span>605-357-3015</span>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-md-1"></div>
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Email</h5>
                                                <span><a href="mailto:thora@firstpremier.cm">Contact Me</a></span>
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
    <div id="myModal2_TimMulder" class="modal fade" role="dialog">
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
                                    <div class="new5Popup_leadership_left"><img src="../../../../../contentassets/70d26552689441ddbf705998f61f771d/tim_mulder.jpg" title="Tim Mulder" alt="Seth Vogelsang"></div>
                                    <div class="new5Popup_leadership_right">
                                        <h2>Tim Mulder</h2>
                                          <span class="upper"></span>
                                        <h4> <p style="text-align: center;">Private Banking<br />Officer<br />14th &amp; Minnesota<br />Sioux Falls</p></h4>
                                        <div class="xhtml">
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Phone</h5>
                                                <span>605-357-3021</span>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-md-1"></div>
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Email</h5>
                                                <span><a href="mailto:tim.mulder@firstpremier.com">Contact Me</a></span>
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




</div><div class="block b28block  col-md-12">

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
<a id="iat" name="iat"></a>
<section class="row-full">
    <div class="b28board_members_main" style="padding-top:20px;">
        <div class="container">
                <h2>Investment, Asset Management &amp; Trust</h2>
            <p>&nbsp;&nbsp;</p>
            <div class='b28block-profile-wrapper'><div id='boardsection_1' class="b28board_members col-md-4"  ><div class="b28board_members_left">  <img id='MainBoardPhoto' src="../../../../../contentassets/c59b5a04f4e94fabac225f1f7919f7e9/anne_marie_feiock.png" alt="Anne Marie Feiock" /></div><div class="b28board_members_right"><h3>Anne Marie Feiock</h3><h4 class="Blue Center"><p class="Center"><b></b><br/><p style="text-align: center;">Vice President<br />Sr. Trust Manager<br />14th &amp; Minnesota<br />Sioux Falls</p></p></h4><h3 class="Gold">605-371-2848</h3></div></div><div id='boardsection_2' class="b28board_members col-md-4"  ><div class="b28board_members_left">  <img id='MainBoardPhoto' src="../../../../../contentassets/def0f77b001e49c1bca30bcb5398583f/scott-weeldreyer.png" alt="Scott Weeldreyer" /></div><div class="b28board_members_right"><h3>Scott Weeldreyer</h3><h4 class="Blue Center"><p class="Center"><b></b><br/><p>Vice President<br />Sr. Investment Manager<br />14th &amp; Minnesota<br />Sioux Falls</p></p></h4><h3 class="Gold">605-357-3063</h3></div></div><div id='boardsection_3' class="b28board_members col-md-4 last" ><div class="b28board_members_left">  <img id='MainBoardPhoto' src="../../../../../contentassets/126971be6c594016b8935e3408bdd1ae/sara_andrews.png" alt="Sara Andrews" /></div><div class="b28board_members_right"><h3>Sara Andrews</h3><h4 class="Blue Center"><p class="Center"><b></b><br/><p style="text-align: center;">Manager<br />Trust Retirement<br />14th &amp; Minnesota<br />Sioux Falls</p></p></h4><h3 class="Gold">605-357-3025</h3></div></div><div id='boardsection_4' class="b28board_members col-md-4 m-l-2" ><div class="b28board_members_left">  <img id='MainBoardPhoto' src="../../../../../contentassets/f174b0689d0b46d696adfb1b903f4309/philip-mead.jpg" alt="Philip Mead" /></div><div class="b28board_members_right"><h3>Philip Mead</h3><h4 class="Blue Center"><p class="Center"><b></b><br/><p style="text-align: center;">Vice President<br />Portfolio Manager<br />14th &amp; Minnesota<br />Sioux Falls</p></p></h4><h3 class="Gold">605-333-6174</h3></div></div><div id='boardsection_5' class="b28board_members col-md-4"  ><div class="b28board_members_left">  <img id='MainBoardPhoto' src="../../../../../contentassets/bd5e11a56b2341bfb0f4f45a8d5877a5/brian_moberly.png" alt="Brian Moberly" /></div><div class="b28board_members_right"><h3>Brian Moberly</h3><h4 class="Blue Center"><p class="Center"><b></b><br/><p>SR Trust Officer<br />14th &amp; Minnesota<br />Sioux Falls<br /><br /></p></p></h4><h3 class="Gold">605-357-3066</h3></div></div><div id='boardsection_6' class="b28board_members col-md-4 last" ><div class="b28board_members_left">  <img id='MainBoardPhoto' src="../../../../../contentassets/180a3c2cc007402da0285a29b9a0578e/amanda_neugebauer.png" alt="Amanda Neugebauer" /></div><div class="b28board_members_right"><h3>Amanda Neugebauer</h3><h4 class="Blue Center"><p class="Center"><b></b><br/><p style="text-align: center;">Investment Portfolio Analyst<br />14th &amp; Minnesota<br />Sioux Falls<br /><br /></p></p></h4><h3 class="Gold">605-978-9772</h3></div></div><div id='boardsection_7' class="b28board_members col-md-4"  ><div class="b28board_members_left">  <img id='MainBoardPhoto' src="../../../../../contentassets/7e3bfd0d766e4bc48f0500a53a6607c5/sandy_schoenbeck.png" alt="Sandy Schoenbeck" /></div><div class="b28board_members_right"><h3>Sandy Schoenbeck</h3><h4 class="Blue Center"><p class="Center"><b></b><br/><p style="text-align: center;">Vice President<br />Trust and Estates<br />14th &amp; Minnesota<br />Sioux Falls</p></p></h4><h3 class="Gold">605-357-3060</h3></div></div></div>

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
    <div id="myModal2_AnneMarieFeiock" class="modal fade" role="dialog">
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
                                    <div class="new5Popup_leadership_left"><img src="../../../../../contentassets/c59b5a04f4e94fabac225f1f7919f7e9/anne_marie_feiock.png" title="Anne Marie Feiock" alt="Anne Marie Feiock"></div>
                                    <div class="new5Popup_leadership_right">
                                        <h2>Anne Marie Feiock</h2>
                                          <span class="upper"></span>
                                        <h4> <p style="text-align: center;">Vice President<br />Sr. Trust Manager<br />14th &amp; Minnesota<br />Sioux Falls</p></h4>
                                        <div class="xhtml">
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Phone</h5>
                                                <span>605-371-2848</span>
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
    <div id="myModal2_ScottWeeldreyer" class="modal fade" role="dialog">
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
                                    <div class="new5Popup_leadership_left"><img src="../../../../../contentassets/def0f77b001e49c1bca30bcb5398583f/scott-weeldreyer.png" title="Scott Weeldreyer" alt="Scott Weeldreyer"></div>
                                    <div class="new5Popup_leadership_right">
                                        <h2>Scott Weeldreyer</h2>
                                          <span class="upper"></span>
                                        <h4> <p>Vice President<br />Sr. Investment Manager<br />14th &amp; Minnesota<br />Sioux Falls</p></h4>
                                        <div class="xhtml">
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Phone</h5>
                                                <span>605-357-3063</span>
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
    <div id="myModal2_SaraAndrews" class="modal fade" role="dialog">
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
                                    <div class="new5Popup_leadership_left"><img src="../../../../../contentassets/126971be6c594016b8935e3408bdd1ae/sara_andrews.png" title="Sara Andrews" alt="Sara Andrews"></div>
                                    <div class="new5Popup_leadership_right">
                                        <h2>Sara Andrews</h2>
                                          <span class="upper"></span>
                                        <h4> <p style="text-align: center;">Manager<br />Trust Retirement<br />14th &amp; Minnesota<br />Sioux Falls</p></h4>
                                        <div class="xhtml">
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Phone</h5>
                                                <span>605-357-3025</span>
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
    <div id="myModal2_PhilipMead" class="modal fade" role="dialog">
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
                                    <div class="new5Popup_leadership_left"><img src="../../../../../contentassets/f174b0689d0b46d696adfb1b903f4309/philip-mead.jpg" title="Philip Mead" alt="Philip Mead"></div>
                                    <div class="new5Popup_leadership_right">
                                        <h2>Philip Mead</h2>
                                          <span class="upper"></span>
                                        <h4> <p style="text-align: center;">Vice President<br />Portfolio Manager<br />14th &amp; Minnesota<br />Sioux Falls</p></h4>
                                        <div class="xhtml">
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Phone</h5>
                                                <span>605-333-6174</span>
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
    <div id="myModal2_BrianMoberly" class="modal fade" role="dialog">
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
                                    <div class="new5Popup_leadership_left"><img src="../../../../../contentassets/bd5e11a56b2341bfb0f4f45a8d5877a5/brian_moberly.png" title="Brian Moberly" alt="Brian Moberly"></div>
                                    <div class="new5Popup_leadership_right">
                                        <h2>Brian Moberly</h2>
                                          <span class="upper"></span>
                                        <h4> <p>SR Trust Officer<br />14th &amp; Minnesota<br />Sioux Falls<br /><br /></p></h4>
                                        <div class="xhtml">
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Phone</h5>
                                                <span>605-357-3066</span>
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
    <div id="myModal2_AmandaNeugebauer" class="modal fade" role="dialog">
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
                                    <div class="new5Popup_leadership_left"><img src="../../../../../contentassets/180a3c2cc007402da0285a29b9a0578e/amanda_neugebauer.png" title="Amanda Neugebauer" alt="Amanda Neugebauer"></div>
                                    <div class="new5Popup_leadership_right">
                                        <h2>Amanda Neugebauer</h2>
                                          <span class="upper"></span>
                                        <h4> <p style="text-align: center;">Investment Portfolio Analyst<br />14th &amp; Minnesota<br />Sioux Falls<br /><br /></p></h4>
                                        <div class="xhtml">
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Phone</h5>
                                                <span>605-978-9772</span>
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
    <div id="myModal2_SandySchoenbeck" class="modal fade" role="dialog">
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
                                    <div class="new5Popup_leadership_left"><img src="../../../../../contentassets/7e3bfd0d766e4bc48f0500a53a6607c5/sandy_schoenbeck.png" title="Sandy Schoenbeck" alt="Sandy Schoenbeck"></div>
                                    <div class="new5Popup_leadership_right">
                                        <h2>Sandy Schoenbeck</h2>
                                          <span class="upper"></span>
                                        <h4> <p style="text-align: center;">Vice President<br />Trust and Estates<br />14th &amp; Minnesota<br />Sioux Falls</p></h4>
                                        <div class="xhtml">
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-sm-5 col-md-5">
                                                <h5>Phone</h5>
                                                <span>605-357-3060</span>
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
                <div class="b25bottom" style="display:none;">
                    <center>
                    <a href="#" class="b25mainanchor"></a><br clear="all"/>
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