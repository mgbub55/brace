

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
        .menu{height: 50px; padding-top:10px;}
.menuItem {float:left;color:#25455a; font-size: 14px; font-family: "AvenirNext-DemiBold"; text-shadow: none; text-transform: uppercase;}
.b4anywhere_banking{padding-left:0px !important;}
.imgCol img {float:left;width:225px;height:123px;}
    </style>
<div class="row equal-height"><div class="block b44block  col-md-12">
<style>
    .b44header  { min-height:245px;width:100%; background:#fff url(../../../../../Static/img/CustomBlocks/B44/leader_bg.jpg) no-repeat; float:left; padding-top:60px;}
</style>
<section class="row-full">
    <div class="b44header">
        <div class="container">
            <h1>First PREMIER Bank</h1>
            
<ul>
    
        <li>
            <a href="../index.html">Locations</a> 
        </li>
    
        <li>
            <a href="index.html">First PREMIER Bank Locations</a> 
        </li>
    
</ul>
                                                    <p>&nbsp;</p>
                <p>&nbsp;</p>
        </div>
    </div>
</section></div><div class="block b04block  col-md-12">
<style>
.menu {padding-left:20px;width:100%;}
.menuItem{width:150px;}
@media only screen and (max-width:470px){
.menu {padding-left:0px;width:100%;}
}

.alertblock .alert{background-color:#ead149 !important; color:#3c763d !important; }
.alertblock .alert p {color:#254568 !important;}
.alert a {color:#254568!important;}</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                        <div class="xhtml"><h2 style="text-align: left;">Visit Us Today</h2>
<div class="row menu">
<div class="col-md-2 menuItem"><a href="sioux-falls/index.html">Sioux Falls</a></div>
<div class="col-md-2 menuItem"><a href="MadisonSD/index.html">Madison </a></div>
<div class="col-md-2 menuItem"><a href="watertown/index.html">Watertown</a></div>
<div class="col-md-2 menuItem"><a href="castlewood/index.html">Castlewood</a></div>
<div class="col-md-2 menuItem"><a href="lake-norden/index.html">Lake Norden</a></div>
<div class="col-md-2 menuItem"><a href="kranzburg/index.html">Kranzburg</a></div>
<div class="col-md-2 menuItem"><a href="wakonda/index.html">Wakonda</a></div>
</div>
<p>&nbsp;</p></div>
                    </div>
    </div>
</section>
<script>
    $(".alert").removeClass('alert-success');;
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
</style></div><div class="block b04block  col-md-12">
<style>
</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                        <div class="xhtml"><div class="row" style="padding-top: 30px !important;">
<div class="col-md-4 col-xs-12" style="float: left; padding-left: 0px;">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="background: #fff;">
<td style="vertical-align: top; text-align: center; color: #25455a; font-size: 20px; font-family: 'Prompt-SemiBold'; text-shadow: none;" colspan="2">1305 W 18th Street<br />Sioux Falls, SD 57105<br /><br />(605) 357-3100<br /><a class="btn" href="https://www.google.com/maps/place/1305+W+18th+St,+Sioux+Falls,+SD+57105/@43.5356218,-96.7453612,17z" target="_blank" rel="noopener">View Map</a></td>
</tr>
</tbody>
</table>
</div>
<div class="col-md-3 col-xs-12 imgCol" style="padding-left: 0px;"><br /><center><img style="border-width: 1px; border-style: solid;" src="../../../../../contentassets/b3943981c92148d2813c18061671aaae/sioux-fallssd_1305-w-18th-street.png" alt="Sioux-FallsSD_1305-W-18th-Street.png" width="275" height="150" /></center></div>
<div class="col-md-5 col-xs-12" style="float: left; color: #4a6375; font-size: 14px; line-height: 22px; font-family: 'Prompt-Medium'; text-shadow: none; padding-left: 0px;"><br /><strong>Lobby Hours:</strong><br />Mon-Fri 8 a.m. - 1 p.m.<br /><br /><br /></div>
</div></div>
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
</style></div><div class="block b04block  col-md-12">
<style>
</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                        <div class="xhtml"><div class="row" style="padding-top: 30px !important;">
<div class="col-md-4 col-xs-12" style="float: left; padding-left: 0px;">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="background: #fff;">
<td style="vertical-align: top; text-align: center; color: #25455a; font-size: 20px; font-family: 'Prompt-SemiBold'; text-shadow: none;" colspan="2">3401 S Kiwanis Avenue<br />Sioux Falls, SD 57105<br /><br />(605) 357-3160<br /><a class="btn" href="https://www.google.com/maps/place/3401+S+Kiwanis+Ave,+Sioux+Falls,+SD+57105/@43.5144334,-96.7635963,17z" target="_blank" rel="noopener">View Map</a></td>
</tr>
</tbody>
</table>
</div>
<div class="col-md-3 col-xs-12 imgCol" style="padding-left: 0px;"><br /><center><img style="border-width: 1px; border-style: solid;" src="../../../../../contentassets/88a3553684d947d5be9457cb8344448a/sioux-fallssd_3401-s-kiwanis-avenue.png" alt="Sioux-FallsSD_3401-S-Kiwanis-Avenue.png" width="275" height="150" /></center></div>
<div class="col-md-5 col-xs-12" style="float: left; color: #4a6375; font-size: 14px; line-height: 22px; font-family: 'Prompt-Medium'; text-shadow: none; padding-left: 0px;"><br /><strong>Lobby Hours:</strong><br />Mon-Fri 9 a.m. - 5 p.m.<br />Sat 9 a.m. - 1 p.m.<br /><br /><strong>Drive Up:</strong><br />Mon-Fri 7:30 a.m. - 6 p.m.<br />Sat 9 a.m. - 1 p.m.<br /><br /></div>
</div>
<p>&nbsp;</p></div>
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
</style></div><div class="block b04block  col-md-12">
<style>
</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                        <div class="xhtml"><div class="row" style="padding-top: 30px !important;">
<div class="col-md-4 col-xs-12" style="float: left; padding-left: 0px;">
<table style="height: 130px; width: 100%;" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="background: #fff;">
<td style="vertical-align: top; text-align: center; color: #25455a; font-size: 20px; font-family: 'Prompt-SemiBold'; text-shadow: none; height: 130px;" colspan="2">500 S Minnesota Avenue<br />Sioux Falls, SD 57104<br /><br />(605) 357-3000<br /><a class="btn" href="https://www.google.com/maps/place/601+S+Minnesota+Ave,+Sioux+Falls,+SD+57104/@43.5409215,-96.7337811,17z" target="_blank" rel="noopener">View Map</a></td>
</tr>
</tbody>
</table>
</div>
<div class="col-md-3 col-xs-12 imgCol" style="padding-left: 0px;"><br /><center><img style="border-width: 1px; border-style: solid;" src="../../../../../contentassets/82d42e227c1f40dc8c7c8976fdf64f55/500-s-minnesota-ave.png" alt="Sioux-FallsSD_601-S-Minnefota-Avenue.png" width="276" height="150" /></center></div>
<div class="col-md-5 col-xs-12" style="float: left; color: #4a6375; font-size: 14px; line-height: 22px; font-family: 'Prompt-Medium'; text-shadow: none; padding-left: 0px;"><br /><strong>Lobby Hours:</strong><br />Mon-Fri 9 a.m. - 5 p.m.<br /><br /><strong>Drive Up:</strong><br />Mon-Fri 7:30 a.m. - 6 p.m.<br />Sat 9 a.m. - 1 p.m.<br /><br /></div>
</div>
<p>&nbsp;</p></div>
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
</style></div><div class="block b04block  col-md-12">
<style>
</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                        <div class="xhtml"><div class="row" style="padding-top: 30px !important;">
<div class="col-md-4 col-xs-12" style="float: left; padding-left: 0px;">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="background: #fff;">
<td style="vertical-align: top; text-align: center; color: #25455a; font-size: 20px; font-family: 'Prompt-SemiBold'; text-shadow: none;" colspan="2">6010 S Minnesota Avenue<br />Sioux Falls, SD 57108<br /><br />(605) 357-3094<br /><a class="btn" href="https://www.google.com/maps/place/6010+S+Minnesota+Ave,+Sioux+Falls,+SD+57108/@43.490344,-96.7284247,17z" target="_blank" rel="noopener">View Map</a></td>
</tr>
</tbody>
</table>
</div>
<div class="col-md-3 col-xs-12 imgCol" style="padding-left: 0px;"><br /><center><img style="border-width: 1px; border-style: solid;" src="../../../../../contentassets/0036efd2cb0949efbd163be64467cb79/sioux-fallssd_6010-s-minnesota-avenue.png" alt="Sioux-FallsSD_6010-S-Minnesota-Avenue.png" width="275" height="150" /></center></div>
<div class="col-md-5 col-xs-12" style="float: left; color: #4a6375; font-size: 14px; line-height: 22px; font-family: 'Prompt-Medium'; text-shadow: none; padding-left: 0px;"><br /><strong>Lobby Hours:</strong><br />Mon-Fri 9 a.m. - 5 p.m.<br />Sat 9 a.m. - 1 p.m.<br /><br /><strong>Drive Up:</strong><br />Mon-Fri 7:30 a.m. - 6 p.m.<br />Sat 9 a.m. - 1 p.m.<br /><br /></div>
</div>
<p>&nbsp;</p></div>
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
</style></div><div class="block b04block  col-md-12">
<style>
</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                        <div class="xhtml"><div class="row" style="padding-top: 30px !important;">
<div class="col-md-4 col-xs-12" style="float: left; padding-left: 0px;">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="background: #fff;">
<td style="vertical-align: top; text-align: center; color: #25455a; font-size: 20px; font-family: 'Prompt-SemiBold'; text-shadow: none;" colspan="2">4000 S Southeastern Avenue<br />Sioux Falls, SD 57103<br /><br />(605) 357-3140<br /><a class="btn" href="https://www.google.com/maps/place/4000+S+Southeastern+Ave,+Sioux+Falls,+SD+57103/@43.5078637,-96.6908597,17z" target="_blank" rel="noopener">View Map</a></td>
</tr>
</tbody>
</table>
</div>
<div class="col-md-3 col-xs-12 imgCol" style="padding-left: 0px;"><br /><center><img style="border-width: 1px; border-style: solid;" src="../../../../../contentassets/ec456fe83ad840db948eb13a970bf09a/sioux-fallssd_4000-s-southeastern-avenue.png" alt="Sioux-FallsSD_4000-S-Southeastern-Avenue.png" width="275" height="150" /></center></div>
<div class="col-md-5 col-xs-12" style="float: left; color: #4a6375; font-size: 14px; line-height: 22px; font-family: 'Prompt-Medium'; text-shadow: none; padding-left: 0px;"><br /><strong>Lobby Hours:</strong><br />Mon-Fri 9 a.m. - 5 p.m.<br />Sat 9 a.m. - 1 p.m.<br /><br /><strong>Drive Up:</strong><br />Mon-Fri 7:30 a.m. - 6 p.m.<br />Sat 9 a.m. - 1 p.m.<br /><br /></div>
</div>
<p>&nbsp;</p></div>
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
</style></div><div class="block b04block  col-md-12">
<style>
</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                        <div class="xhtml"><div class="row" style="padding-top: 30px !important;">
<div class="col-md-4 col-xs-12" style="float: left; padding-left: 0px;">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="background: #fff;">
<td style="vertical-align: top; text-align: center; color: #25455a; font-size: 20px; font-family: Prompt-SemiBold'; text-shadow: none;" colspan="2">536 N Sycamore Avenue<br />Sioux Falls, SD 57110<br /><br />(605) 357-3139<br /><a class="btn" href="https://www.google.com/maps/place/536+N+Sycamore+Ave,+Sioux+Falls,+SD+57110/@43.5526687,-96.6731479,17z" target="_blank" rel="noopener">View Map</a></td>
</tr>
</tbody>
</table>
</div>
<div class="col-md-3 col-xs-12 imgCol" style="padding-left: 0px;"><br /><center><img style="border-width: 1px; border-style: solid;" src="../../../../../contentassets/5fc8c228b66f4f0b8fcb30b55fe1b0c1/sioux-fallssd_536-n-sycamore-avenue.png" alt="Sioux-FallsSD_536-N-Sycamore-Avenue.png" width="275" height="150" /></center></div>
<div class="col-md-5 col-xs-12" style="float: left; color: #4a6375; font-size: 14px; line-height: 22px; font-family: 'Prompt-Medium'; text-shadow: none; padding-left: 0px;"><br /><strong>Lobby Hours:</strong><br />Mon-Fri 9 a.m. - 5 p.m.<br />Sat 9 a.m. - 1 p.m.<br /><br /><strong>Drive Up:</strong><br />Mon-Fri 7:30 a.m. - 6 p.m.<br />Sat 9 a.m. - 1 p.m.<br /><br /></div>
</div>
<p>&nbsp;</p></div>
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
</style></div><div class="block b04block  col-md-12">
<style>
</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                        <div class="xhtml"><div class="row" style="padding-top: 30px !important;">
<div class="col-md-4 col-xs-12" style="float: left; padding-left: 0px;">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="background: #fff;">
<td style="vertical-align: top; text-align: center; color: #25455a; font-size: 20px; font-family: 'Prompt-SemiBold'; text-shadow: none;" colspan="2">6701 W 41st Street<br />Sioux Falls, SD 57106<br /><br />(605) 357-3088<br /><a class="btn" href="https://www.google.com/maps/place/6701+W+41st+St,+Sioux+Falls,+SD+57106/@43.5143822,-96.8112509,17z" target="_blank" rel="noopener">View Map</a></td>
</tr>
</tbody>
</table>
</div>
<div class="col-md-3 col-xs-12 imgCol" style="padding-left: 0px;"><br /><center><img style="border-width: 1px; border-style: solid;" src="../../../../../contentassets/45ce87cc8d7148c0b1d4e0198d0ad1cd/sioux-fallssd_6701-w-41st-street.png" alt="Sioux-FallsSD_6701-W-41st-Street.png" width="275" height="150" /></center></div>
<div class="col-md-5 col-xs-12" style="float: left; color: #4a6375; font-size: 14px; line-height: 22px; font-family: 'Prompt-Medium'; text-shadow: none; padding-left: 0px;"><br /><strong>Lobby Hours:</strong><br />Mon-Fri 9 a.m. - 5 p.m.<br />Sat 9 a.m. - 1 p.m.<br /><br /><strong>Drive Up:</strong><br />Mon-Fri 7:30 a.m. - 6 p.m.<br />Sat 9 a.m. - 1 p.m.<br /><br /></div>
</div>
<p>&nbsp;</p></div>
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
</style></div><div class="block b04block  col-md-12">
<style>
</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                        <div class="xhtml"><div class="row" style="padding-top: 30px !important;">
<div class="col-md-4 col-xs-12" style="float: left; padding-left: 0px;">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="background: #fff;">
<td style="vertical-align: top; text-align: center; color: #25455a; font-size: 20px; font-family: 'Prompt-SemiBold'; text-shadow: none;" colspan="2">3700 N Potsdam Avenue<br />Sioux Falls, SD 57104<br /><br />(605) 357-3146<br /><a class="btn" href="https://www.google.com/maps/place/3700+N+Potsdam+Ave,+Sioux+Falls,+SD+57104/@43.5865674,-96.6975029,17z/" target="_blank" rel="noopener">View Map</a></td>
</tr>
</tbody>
</table>
</div>
<div class="col-md-3 col-xs-12 imgCol" style="padding-left: 0px;"><br /><center><img style="border-width: 1px; border-style: solid;" src="../../../../../contentassets/b5fcb10be1524f52a79e0c546cbbaa31/sioux-fallssd_3700-n-potsdam-avenue.png" alt="Sioux-FallsSD_3700-N-Potsdam-Avenue.png" width="275" height="150" /><br />
<div style="float: left; color: #4a6375; font-size: 14px; line-height: 22px; font-family: 'Prompt-Medium'; text-shadow: none;">(I-229 &amp; Benson Rd)</div>
</center></div>
<div class="col-md-5 col-xs-12" style="float: left; color: #4a6375; font-size: 14px; line-height: 22px; font-family: 'Prompt-Medium'; text-shadow: none; padding-left: 0px;"><br /><br /><strong>Lobby Hours:</strong><br />Mon-Fri 9 a.m. - 5 p.m.<br /><br /><br /><strong>Drive Up Hours</strong>:<br />Mon-Fri 7:30 a.m. - 6 p.m.<br />Sat 9 a.m. - 1 p.m.<br /><br /></div>
</div>
<p>&nbsp;</p></div>
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
</style></div><div class="block b04block  col-md-12">
<style>
</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                        <div class="xhtml"><div class="row" style="padding-top: 30px !important;">
<div class="col-md-4 col-xs-12" style="float: left; padding-left: 0px;">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="background: #fff;">
<td style="vertical-align: top; text-align: center; color: #25455a; font-size: 20px; font-family: 'Prompt-SemiBold'; text-shadow: none;" colspan="2">4001 W Benson Road<br />Sioux Falls, SD 57107<br /><br />(605) 357-3029<br /><a class="btn" href="https://www.google.com/maps/place/4001+W+Benson+Rd,+Sioux+Falls,+SD+57107/@43.5869287,-96.7797299,17z" target="_blank" rel="noopener">View Map</a></td>
</tr>
</tbody>
</table>
</div>
<div class="col-md-3 col-xs-12 imgCol" style="padding-left: 0px;"><br /><center><img style="border-width: 1px; border-style: solid;" src="../../../../../contentassets/97a6ae8443c84a90af1b7e98c7a8dccf/sioux-fallssd_4001-w-benson-road.png" alt="Sioux-FallsSD_4001-W-Benson-Road.png" width="275" height="150" /></center></div>
<div class="col-md-5 col-xs-12" style="float: left; color: #4a6375; font-size: 14px; line-height: 22px; font-family: 'Prompt-Medium'; text-shadow: none; padding-left: 0px;"><br /><strong>Lobby Hours:</strong><br />Mon-Fri 9 a.m. - 5 p.m.<br />Sat 9 a.m. - 1 p.m.<br /><br /><br /><strong>Drive Up:</strong><br />Mon-Fri 7:30 a.m. - 6 p.m.<br />Sat 9 a.m. - 1 p.m.<br /><br /></div>
</div>
<p>&nbsp;</p></div>
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
</style></div><div class="block b04block  col-md-12">
<style>
</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                        <div class="xhtml"><div class="row" style="padding-top: 30px !important;">
<div class="col-md-4 col-xs-12" style="float: left; padding-left: 0px;">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="background: #fff;">
<td style="vertical-align: top; text-align: center; color: #25455a; font-size: 20px; font-family: 'Prompt-SemiBold'; text-shadow: none;" colspan="2">202 NW 2nd Street<br />Madison, SD 57042<br /><br />605-256-6040<br /><a class="btn" href="https://www.google.com/maps/place/44°00'26.6%22N+97°06'57.1%22W/@44.0073889,-97.1180498,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d44.00739!4d-97.11587">View Map</a></td>
</tr>
</tbody>
</table>
</div>
<div class="col-md-3 col-xs-12 imgCol" style="padding-left: 0px;"><br /><center><img style="border-width: 1px; border-style: solid;" src="../../../../../globalassets/shared-content/locations/madison-sd/capture5.png" alt="Capture5.PNG" width="275" height="150" /></center></div>
<div class="col-md-5 col-xs-12" style="float: left; color: #4a6375; font-size: 14px; line-height: 22px; font-family: 'Prompt-Medium'; text-shadow: none; padding-left: 0px;"><br /><strong>Lobby Hours:</strong><br />Mon-Fri 9 a.m. - 5 p.m.<br /><br /><strong>Drive Up:</strong><br />Mon-Fri 8:30 a.m. - 5 p.m.<br /><br /></div>
</div>
<p>&nbsp;</p></div>
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
</style></div><div class="block b04block  col-md-12">
<style>
</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                        <div class="xhtml"><div class="row" style="padding-top: 30px !important;">
<div class="col-md-4 col-xs-12" style="float: left; padding-left: 0px;">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="background: #fff;">
<td style="vertical-align: top; text-align: center; color: #25455a; font-size: 20px; font-family: 'Prompt-SemiBold'; text-shadow: none;" colspan="2">824 34th Street SE<br />Watertown, SD 57201<br /><br />(605) 882-2300<br /><a class="btn" href="https://www.google.com/maps/place/824+34th+St+SE,+Watertown,+SD+57201/@44.891161,-97.0628025,17z/" target="_blank" rel="noopener">View Map</a></td>
</tr>
</tbody>
</table>
</div>
<div class="col-md-3 col-xs-12 imgCol" style="padding-left: 0px;"><br /><center><img style="border-width: 1px; border-style: solid;" src="../../../../../contentassets/51d5acafb6794c9bb609732478fc28e0/824-34th-street-se.png" alt="824-34th-Street-SE.png" width="275" height="150" /></center></div>
<div class="col-md-5 col-xs-12" style="float: left; color: #4a6375; font-size: 14px; line-height: 22px; font-family: 'Prompt-Medium'; text-shadow: none; padding-left: 0px;"><br /><strong>Lobby Hours:</strong><br />Mon-Fri 9 a.m. - 5 p.m.<br /><br /><br /><strong>Drive Up:</strong><br />Mon-Fri 7:30 a.m. - 6 p.m.<br />Sat 9 a.m. - 12 p.m.<br /><br /></div>
</div>
<p>&nbsp;</p></div>
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
</style></div><div class="block b04block  col-md-12">
<style>
</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                        <div class="xhtml"><div class="row" style="padding-top: 30px !important;">
<div class="col-md-4 col-xs-12" style="float: left; padding-left: 0px;">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="background: #fff;">
<td style="vertical-align: top; text-align: center; color: #25455a; font-size: 20px; font-family: 'Prompt-SemiBold'; text-shadow: none;" colspan="2">24 5th Street SE<br />Watertown, SD 57201<br /><br />(605) 884-2010<br /><a class="btn" href="https://www.google.com/maps/place/24+5th+St+SE,+Watertown,+SD+57201/@44.8978982,-97.108654,17z" target="_blank" rel="noopener">View Map</a></td>
</tr>
</tbody>
</table>
</div>
<div class="col-md-3 col-xs-12 imgCol" style="padding-left: 0px;"><br /><center><img style="border-width: 1px; border-style: solid;" src="../../../../../contentassets/a181053ca9604dc9b263e196486b16e8/24-5th-street-se.png" alt="24-5th-Street-SE.png" width="275" height="150" /></center></div>
<div class="col-md-5 col-xs-12" style="float: left; color: #4a6375; font-size: 14px; line-height: 22px; font-family: 'Prompt-Medium'; text-shadow: none; padding-left: 0px;"><br /><strong>Lobby Hours:</strong><br />Mon-Fri 9 a.m. - 5 p.m.<br />Sat 9 a.m. - 12 p.m.<br /><br /><strong>Drive Up:</strong><br />Mon-Fri 7:30 a.m. - 6 p.m.<br />Sat 9 a.m. - 12 p.m.<br /><br /></div>
</div>
<p>&nbsp;</p></div>
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
</style></div><div class="block b04block  col-md-12">
<style>
</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                        <div class="xhtml"><div class="row" style="padding-top: 30px !important;">
<div class="col-md-4 col-xs-12" style="float: left; padding-left: 0px;">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="background: #fff;">
<td style="vertical-align: top; text-align: center; color: #25455a; font-size: 20px; font-family: 'Prompt-SemiBold'; text-shadow: none;" colspan="2">202 E Main<br />Castlewood, SD 57223<br /><br />(605) 793-2555<br /><a class="btn" href="https://www.google.com/maps/place/202+Main+St,+Castlewood,+SD+57223/@44.7229521,-97.0323762,17z" target="_blank" rel="noopener">View Map</a></td>
</tr>
</tbody>
</table>
</div>
<div class="col-md-3 col-xs-12 imgCol" style="padding-left: 0px;"><br /><center><img style="border-width: 1px; border-style: solid;" src="../../../../../contentassets/1bb95309cba543e283e54b6af89b56b1/202-e-main-castlewood.png" alt="202-E-Main-Castlewood.png" width="275" height="150" /></center></div>
<div class="col-md-5 col-xs-12" style="float: left; color: #4a6375; font-size: 14px; line-height: 22px; font-family: 'Prompt-Medium'; text-shadow: none; padding-left: 0px;"><br /><strong>Lobby Hours:</strong><br />Mon-Thu 8 a.m. - 4:30 p.m.<br />Fri 7:30 a.m. - 4:30 p.m.<br /><br /></div>
</div>
<p>&nbsp;</p></div>
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
</style></div><div class="block b04block  col-md-12">
<style>
</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                        <div class="xhtml"><div class="row" style="padding-top: 30px !important;">
<div class="col-md-4 col-xs-12" style="float: left; padding-left: 0px;">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="background: #fff;">
<td style="vertical-align: top; text-align: center; color: #25455a; font-size: 20px; font-family: 'Prompt-SemiBold'; text-shadow: none;" colspan="2">102 Dakota Avenue<br />Kranzburg, SD 57245<br /><br />(605) 886-8147<br /><a class="btn" href="https://www.google.com/maps/place/102+Dakota+Ave+N,+Kranzburg,+SD+57245/@44.8912102,-96.9216656,17z" target="_blank" rel="noopener">View Map</a></td>
</tr>
</tbody>
</table>
</div>
<div class="col-md-3 col-xs-12 imgCol" style="padding-left: 0px;"><br /><center><img style="border-width: 1px; border-style: solid;" src="../../../../../contentassets/0c427f98deb44fb6a6ae281c64b4001e/102-dakota-avenue-kransburg.png" alt="102-Dakota-Avenue-Kransburg.png" width="275" height="150" /></center></div>
<div class="col-md-5 col-xs-12" style="float: left; color: #4a6375; font-size: 14px; line-height: 22px; font-family: 'Prompt-Medium'; text-shadow: none; padding-left: 0px;"><br /><strong>Lobby Hours:</strong><br />Mon-Fri 8 a.m. - 3 p.m.</div>
</div>
<p>&nbsp;</p></div>
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
</style></div><div class="block b04block  col-md-12">
<style>
</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                        <div class="xhtml"><div class="row" style="padding-top: 30px !important;">
<div class="col-md-4 col-xs-12" style="float: left; padding-left: 0px;">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="background: #fff;">
<td style="vertical-align: top; text-align: center; color: #25455a; font-size: 20px; font-family: 'Prompt-SemiBold'; text-shadow: none;" colspan="2">503 Main Avenue<br />Lake Norden, SD 57248<br /><br />(605) 785-3666<br /><a class="btn" href="https://www.google.com/maps/place/503+Main+Ave,+Lake+Norden,+SD+57248/@44.5804268,-97.2129291,17z/" target="_blank" rel="noopener">View Map</a></td>
</tr>
</tbody>
</table>
</div>
<div class="col-md-3 col-xs-12 imgCol" style="padding-left: 0px;"><br /><center><img style="border-width: 1px; border-style: solid;" src="../../../../../contentassets/e8462db8c1eb4971b96227e923e59d60/503-main-avenue.png" alt="503-Main-Avenue.png" width="275" height="150" /></center></div>
<div class="col-md-5 col-xs-12" style="float: left; color: #4a6375; font-size: 14px; line-height: 22px; font-family: 'Prompt-Medium'; text-shadow: none; padding-left: 0px;"><br /><strong>Lobby Hours:</strong><br />Mon-Fri 7:30 a.m. - 4 p.m.<br /><br /></div>
</div></div>
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
</style></div><div class="block b04block  col-md-12">
<style>
</style>
<section class="row-full b4background">
    <div class="container">
        <div class="b4anywhere_banking" style="width:100%; ">
                                        <div class="xhtml"><div class="row" style="padding-top: 30px !important;">
<div class="col-md-4 col-xs-12" style="float: left; padding-left: 0px;">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="background: #fff;">
<td style="vertical-align: top; text-align: center; color: #25455a; font-size: 20px; font-family: 'Prompt-SemiBold'; text-shadow: none;" colspan="2">115 Ohio Street<br />Wakonda, SD 57073<br /><br />(605) 267-2665<br /><a class="btn" href="https://www.google.com/maps/place/115+Ohio+St,+Wakonda,+SD+57073/@43.0091715,-97.1098194,17z/" target="_blank" rel="noopener">View Map</a></td>
</tr>
</tbody>
</table>
</div>
<div class="col-md-3 col-xs-12 imgCol" style="padding-left: 0px;"><br /><center><img style="border-width: 1px; border-style: solid;" src="../../../../../contentassets/8544a4edffa542c68eca817a2011e2f4/115-ohio-street.png" alt="115-Ohio-Street.png" width="275" height="150" /></center></div>
<div class="col-md-5 col-xs-12" style="float: left; color: #4a6375; font-size: 14px; line-height: 22px; font-family: 'Prompt-Medium'; text-shadow: none; padding-left: 0px;"><br /><strong>Lobby Hours:</strong><br />Mon-Thu 9 a.m. - 3:30 p.m.<br />Fri 9 a.m. - 6:30 p.m.<br /><br /></div>
</div>
<p>&nbsp;</p></div>
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
            <a href="../../../about-us/index.html">About Us</a> 
        </li>
    
        <li>
            <a href="../../../../index.html">First PREMIER Bank</a> 
        </li>
    
        <li>
            <a href="https://www.mypremiercreditcard.com/">PREMIER Bankcard</a> 
        </li>
    
        <li>
            <a href="../../../about-us/leadership-team/index.html">Leadership</a> 
        </li>
    
        <li>
            <a href="../../../about-us/community/index.html">Community</a> 
        </li>
    
        <li>
            <a href="../../../about-us/careers/index.html">Careers</a> 
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
            <a href="../../customer-care/index.html">Customer Care</a> 
        </li>
    
        <li>
            <a href="../index.html">Locations</a> 
        </li>
    
        <li>
            <a href="../../customer-care/index.html">BANK: 800-501-6535</a> 
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