/* B1 - Block Javascript Start */
/* IE-11 FIX*/
function detectIE() {
    var ua = window.navigator.userAgent;

    // Test values; Uncomment to check result …

    // IE 10
    // ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)';

    // IE 11
    // ua = 'Mozilla/5.0 (Windows NT 6.3; Trident/7.0; rv:11.0) like Gecko';

    // Edge 12 (Spartan)
    // ua = 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36 Edge/12.0';

    // Edge 13
    // ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586';

    var msie = ua.indexOf('MSIE ');
    if (msie > 0) {
        // IE 10 or older => return version number
        return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
    }

    var trident = ua.indexOf('Trident/index.html');
    if (trident > 0) {
        // IE 11 => return version number
        var rv = ua.indexOf('rv:');
        return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
    }

    var edge = ua.indexOf('Edge/index.html');
    if (edge > 0) {
        // Edge (IE 12+) => return version number
        return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
    }

    // other browser
    return false;
}
function ResetDropdowns() {
    $("select#AccessAccountDropdown,select#EnrollAccountDropdown").prop('selectedIndex', 0);
}
function getCookie(name) {
    var getCookieValues = function (cookie) {
        var cookieArray = cookie.split('=');

        if (cookieArray[1]) {
            return cookieArray[1].trim();
        }
    };

    var getCookieNames = function (cookie) {
        var cookieArray = cookie.split('=');
        if (cookieArray[0]) {
            if (cookieArray) { return cookieArray[0].trim(); }
        }
    };

    var cookies = document.cookie.split(';');
    var cookieValue = cookies.map(getCookieValues)[cookies.map(getCookieNames).indexOf(name)];

    return (cookieValue === undefined) ? null : cookieValue;
};
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
var selectedItemId = getCookie("selectedAccessAccountId");
var enteredUserName = ""; /*getCookie("enteredUserName"); removed per Meranda 20180723*/
if (selectedItemId !== "" && selectedItemId !== undefined) {
    $("#AccessAccountDropdown option[id= " + selectedItemId + "]").attr("selected", "selected");
    var dType = $('#' + selectedItemId).attr("data-type");

    if (dType === 'actionitem') {
        $("#Q2Login").removeClass("hide");
        $("#SideAccessID").focus();
        if (enteredUserName != "" && enteredUserName != undefined) {
            $("#user_id").val(enteredUserName);
        }
        else {
            $("#user_id").val("");
        }

    }
}
else {
    selectedItemId == "selectaccount";
    $("#AccessAccountDropdown option[id= " + selectedItemId + "]").attr("selected", "selected");
}
$(".b1login_Box").on("change", "#AccessAccountDropdown", function (e) {
    e.preventDefault();
    var selectedValue = $(this).val();
    var text = $(this).text();
    var selectedIndex = $(this).prop("selectedIndex");
    var obj = $("select#AccessAccountDropdown option:eq(" + selectedIndex + ")");
    var dType = obj.attr("data-type");
    var w = $(window).width();
    selectedItemId = $(this).children(":selected").attr("id");
    setCookie("selectedAccessAccountId", selectedItemId, 365);
    if (selectedValue !== "") {
        if (dType === 'actionitem') {
            $("#Q2Login").removeClass("hide");
            $("#SideAccessID").focus();
            if (enteredUserName != "" && enteredUserName != undefined) {
                $("#user_id").val(enteredUserName);
            }
            else {
                $("#user_id").val("");

            }
        } else {
            if (selectedValue.startsWith("http")) {
                window.location.href = selectedValue;
            } else {
                window.location.href = selectedValue;
            }

            return false;
        }
    } else {
        $("#Q2Login").addClass("hide");
    }
    if (w < 471) {
        if (selectedIndex == 2 || selectedIndex == 3) {
            $(".b1login_Box").attr('style', 'height:525px !important');
        }
        else {
            $(".b1login_Box").attr('style', 'height:325px !important');
        }
    }
});
$(".b1btn-login").on("click", function (e) {
    if ($("#user_id").val() != null && $("#user_id").val() != undefined && $("#user_id").val() != "") {
        setCookie("enteredUserName", $("#user_id").val(), 365);
    }
    var dType = $('#' + selectedItemId).attr("data-type");
    if (dType != 'actionitem') {
        e.preventDefault();
        var selectedValue = $('#' + selectedItemId).val();
        window.location.href = selectedValue;
    }

});

$(this.document).ready(function () {
    var IEVersion = detectIE();
    if (IEVersion != false) {
        $('a.signin').attr('href', '/signinmenu');
    }

    var selectedItemId = getCookie("selectedAccessAccountId");
    if (selectedItemId == 'personalbanking' || selectedItemId == 'businessbanking') {
        $(".b1login_Box").attr('style', 'height:525px !important');
    }
});

/* B-28 Block Javascript Start */

function ShowLightBox(seqno) {

    $('#boardImage').attr('src', $('#boardsection_' + seqno).find('#MainBoardPhoto').attr('src'));
    $('#boardName').text($('#boardsection_' + seqno).find('#MainBoardName').text());
    $('#boardBranchName').text($('#boardsection_' + seqno).find('#MainBoardBranch').text());
    $('#boardDescription').text($('#boardsection_' + seqno).find('#hdnMainDescription').val());
    $('#boardPhoneNumber').text($('#boardsection_' + seqno).find('#MainBoardPhone').text());

    $('#boardEmailId').text($('#boardsection_' + seqno).find('#hdnMainEmailId').val());
    $('#boardEmailId').attr('href', $('#boardsection_' + seqno).find('#hdnMainEmailLink').val());

    if ($('#boardsection_' + seqno).find('#MainBoardProfilelink').text()) {
        $('#boardEmailLink').text($('#boardsection_' + seqno).find('#MainBoardProfilelink').text());
    }
    else {
        $('#boardEmailLink').css('background', 'none');
    }

    if ($('#boardsection_' + seqno).find('#MainBoardProfilelink').length > 0) {
        if ($('#boardsection_' + seqno).find('#MainBoardProfilelink').attr('href').indexOf('javascript') == -1) {
            $('#boardEmailLink').attr('href', $('#boardsection_' + seqno).find('#MainBoardProfilelink').attr('href'));
        }
        else {
            $('#boardEmailLink').css('background', 'url(none)');
        }
    }

    $('#b28BoardModal').modal('show');
}

/* B-28 Block Javascript */

/* B-13 Disclosure Block Javascript Start */

//For Automated Disclosure Block
function GetDisclosurePoints() {
    var _bulletPoints = [];
    var _mainul = '<ol>';

    //b20onhover represents B-20 Bullet, below foreach will loop through all bullets used on the page
    $('div[class*=onhover]').each(function (index, value) {

        var tempObj = {
            bulletNo : parseInt(value.innerText),
            bulletTooltip : $(value).find('p').text()
        };
        
        _bulletPoints.push(tempObj);
    })

    //Sorting bullets point in ascending order
    _bulletPoints = _bulletPoints.sort(function (a, b) { return a.bulletNo - b.bulletNo });

    //Create HTML to show disclosure
    $.each(_bulletPoints, function (index, value) {

        var tempHtml = ((index + 1) % 2 == 0) ? "<li class='last'>" : "<li>";
        value.bulletNo = value.bulletNo.toString();
        var multiplier = 0;
        if (value.bulletNo.length <= 2) {
            tempHtml += '<span>' + value.bulletNo + '</span>';
        }
        else {
            multiplier = value.bulletNo.length - 2;
            tempHtml += '<span style="width: ' + (22 + (multiplier * 10)) + 'px"; >' + value.bulletNo + '</span>';
        }

        tempHtml += value.bulletTooltip;
        tempHtml += '</li>';
        _mainul += tempHtml;
    });
    _mainul += '</ol>';

    //b13points represents B-13 section inside which the pointers need to be display
    $('.b13points').html(_mainul);
}

//Fetching points from the {} section
function GetDisclosurePointsBrackets() {
 
    var _bulletPoints = [];
    var _mainul = '<ol>';

    //Get all the statements in array based on newline character
    var content = $('.b13points').html().split('\n');

    //console.log('content');
    //console.log(content);

    $.each(content, function (index, value) {

        value = value.trim() || '';
        if (value != '') {

            var bracketData = value.match(/\{(.*)\}/);

            if (bracketData) {

                var circularContent = bracketData[1]; //e.g. 3
                var bracketContent = bracketData[0];  //e.g. {3} 
                var tempObj = {
                    bulletNo: circularContent,
                    bulletTooltip: value.replace(bracketContent, '').trim()
                };
                _bulletPoints.push(tempObj);
            }
            else {
                var circularContent = "0";
                var bracketContent = value;
                var tempObj = {
                    bulletNo: circularContent,
                    bulletTooltip: value.trim()
                };
                _bulletPoints.push(tempObj);
            }
        }
    });
    if (_bulletPoints.length > 0) {

        //Sorting bullets point in ascending order
        //REMOVED ** BAM ** _bulletPoints = _bulletPoints.sort(function (a, b) { return a.bulletNo - b.bulletNo });

        //Create HTML to show disclosure
        $.each(_bulletPoints, function (index, value) {

            var tempHtml = ((index + 1) % 2 == 0) ? "<li class='last'>" : "<li>";
            value.bulletNo = value.bulletNo.toString();
            if (value.bulletNo != "0") {
                var multiplier = 0;
                if (value.bulletNo.length <= 2) {
                    tempHtml += '<span>' + value.bulletNo + '</span>';
                }
                else {
                    multiplier = value.bulletNo.length - 2;
                    tempHtml += '<span style="width: ' + (22 + (multiplier * 10)) + 'px"; >' + value.bulletNo + '</span>';
                }
            }
            tempHtml += value.bulletTooltip;
            tempHtml += '</li>';
            _mainul += tempHtml;
 
        });
        _mainul += '</ol>';

        //b13points represents B-13 section inside which the pointers need to be display
        $('.b13points').html(_mainul);
    }
}

$(document).ready(function() {
    window.FPBWindowResizeElements = $('.row-full');
    FPBHandleRowFullFix();
    $(window).resize(FPBWindowResizeDebounce);
});

window.FPBWindowResizeDebounceTimeout = 0;
function FPBWindowResizeDebounce() {
    clearTimeout(window.FPBWindowResizeDebounceTimeout);
    window.FPBWindowResizeDebounceTimeout = setTimeout(FPBHandleRowFullFix, 100);
}

function FPBHandleRowFullFix() {
    var windowInnerWidth = window.innerWidth;
    var bodyClientWidth = $('body').get(0).clientWidth;
    if (windowInnerWidth > (bodyClientWidth + 5)) {
        var scrollbarWidth = windowInnerWidth - bodyClientWidth;
        window.FPBWindowResizeElements.css('left', '0').css('width', 'calc(100vw - ' + scrollbarWidth + 'px)').css('marginLeft', 'calc(-50vw + 50% + ' + (scrollbarWidth / 2) + 'px)').css('marginRight', 'calc(-50vw + 50% + ' + (scrollbarWidth / 2) + 'px)');
    } else {
        window.FPBWindowResizeElements.css('left', '0').css('width', '100vw').css('marginLeft', 'calc(-50vw + 50%)').css('marginRight', 'calc(-50vw + 50%)');
    }
}
