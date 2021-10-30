


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

<div class="p1"><div class="block b01block  col-md-12">

<script>
    var b01title = "_404" + "b01-title";
    var b01msg = "_404" + "b01-msg";
    var b01heroimage = "_404" + "b01-heroimage";
    var b01linkname = "_404" + "b01-linkname";
    var b01linkurl = "_404" + "b01-linkurl";
    var b01titlemobile = "_404" + "b01-titlemobile";
    var b01messagemobile = "_404" + "b01-messagemobile";

    var WelcomeObj = {
        title: '',
        msg: '',
        heroimage: '',
        linkname: '',
        linkurl: '',
        titlemobile: '',
        messagemobile: ''
    };

    $(document).ready(function () {
        var title = sessionStorage.getItem(b01title) || '';
        if (title != '') {

            var msg = sessionStorage.getItem(b01msg);
            var heroimage = sessionStorage.getItem(b01heroimage);
            var linkname = sessionStorage.getItem(b01linkname);
                 sessionStorage.setItem(b01linkurl, '#');
          //  var linkurl = sessionStorage.getItem(b01linkurl);
            var titlemobile = sessionStorage.getItem(b01titlemobile);
            var messagemobile = sessionStorage.getItem(b01messagemobile);

            titlemobile = titlemobile.replace('<br />', '');         // here I am removing the <br/>
            messagemobile = messagemobile.replace('<br />', '');     // tags...

            WelcomeObj.title = title;
            WelcomeObj.msg = msg;
            WelcomeObj.heroimage = heroimage;
            WelcomeObj.linkname = linkname;
          //  WelcomeObj.linkurl = linkurl;
                WelcomeObj.linkurl = '#';
            WelcomeObj.titlemobile = titlemobile;
            WelcomeObj.messagemobile = messagemobile;
            SetWelcomeData(WelcomeObj);
        }
        else {
            var wt = "<p>Page Not Found</p>";
            var wm = "<p>Something went wrong</p>";
            var wtm = "<p>Page Not Found</p>";
            var wmm = "<p>Something went wrong</p>";

            sessionStorage.setItem(b01title, wt);
            sessionStorage.setItem(b01msg, wm);
            sessionStorage.setItem(b01heroimage, '../../../contentassets/83b93fb51ad040d28b75879dc832a94c/fpb-hero-personal-8a-min.png');
            sessionStorage.setItem(b01linkname, 'Learn More');
            sessionStorage.setItem(b01linkurl, '#');
            sessionStorage.setItem(b01titlemobile, wtm);
            sessionStorage.setItem(b01messagemobile, wmm);
            WelcomeObj.title = wt;
            WelcomeObj.msg = wm;
            WelcomeObj.heroimage = '../../../contentassets/83b93fb51ad040d28b75879dc832a94c/fpb-hero-personal-8a-min.png';
            WelcomeObj.linkname = 'Learn More';
            WelcomeObj.linkurl = '#';
            WelcomeObj.titlemobile = wtm;                   // These are the mobile title
            WelcomeObj.messagemobile = wmm;                 // and mobile message.
            SetWelcomeData(WelcomeObj);
            }
        });

    function parseHtmlEntities(str) {
        return str.replace(/&#([0-9]{1,3});/gi, function (match, numStr) {
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
        }
        else if (window.innerWidth > 768) {
            $('.b1banner_text h1.White').html(wObj.title);
            $('.b1banner_text h3.White').html(wObj.msg);
            //$('.b1banner_text h1.White').attr("style", "width:600px;");
            //$('.b1banner_text h3.White').attr("style", "width:600px;");
        }
        if (wObj.heroimage)
            $("#b1Main-Hero-banner").css('background', 'url('+wObj.heroimage+')');
        else
            $("#b1Main-Hero-banner").css('background', 'url(~/Static/img/CustomBlocks/B1/FPB-Hero-Personal-1A.jpg)');
        if (wObj.linkurl != "" && wObj.linkurl != "#") {
            // alert(wObj.linkname + wObj.linkurl);
            $('#HeroButton').text(wObj.linkname);
            $('#HeroButton').attr("href", wObj.linkurl);
            $("#HeroButton").css('visibility', 'visible');
        }
        else {

            // $("#HeroButton").css('visibility', 'hidden');
             $("#HeroButton").css('display', 'none');
        }

    }
</script>
        <style>
.b1banner_text h1.White {font-size: 55px; font-family: &quot;Prompt-SemiBold&quot;; text-shadow: none; margin-bottom: 15px;}             .b1banner_text h3.White {font-size: 20px; line-height: 32px; font-family: &quot;Prompt-Regular&quot;;}        </style>

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



                </div>


            </div>
        </div>
    </div>
</section>
<script>
    document.getElementById("user_id").value = '';
    document.getElementById("password").value = '';
</script></div><div class="block b04block  col-md-12">
<style>
#HeroButton {display:none;}
.b1login_Box{display:none;}</style>
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
</style></div></div>


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
            <a href="../../small-business/index.html">Small Business</a>
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
