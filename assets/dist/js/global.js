/**
 * You should not use this file in production.
 * This file is for demo purposes only.
 */
var baseurl, token, day, month, year;

var setActiveMenu = function(menu, submenu) {
    // set active class
    $('#menu'+menu).addClass('active');
    if(submenu !== ''){ $('#submenu'+menu+submenu).addClass('active'); }
    // setup login
    $('#login-menu').click(setupLogin);
    // load captcha
    $("#load-captcha").click(loadCaptcha);
};

var blockUI = function (el, centerY) {
    var el = jQuery(el);
    if (el.height() <= 400) {
        centerY = true;
    }
    el.block({
        message: '<img src="' + baseurl + 'assets/dist/img/ajax-loading.gif" align="">',
        centerY: centerY !== undefined ? centerY : true,
        css: {
            top: '10%',
            border: 'none',
            padding: '2px',
            backgroundColor: 'none'
        },
        overlayCSS: {
            backgroundColor: '#000',
            opacity: 0.05,
            cursor: 'wait'
        }
    });
};

// wrapper function to  un-block element(finish loading)
var unblockUI = function (el) {
    jQuery(el).unblock({
        onUnblock: function () {
            jQuery(el).removeAttr("style");
        }
    });
};

// setup return from array to string
var setTxtFromArray = function(value) {
    if(value === "" || value === "-" || value === null){ return ""; }
    if(value.indexOf("\"") === -1 && value.indexOf("[") === -1){ return value; }
    var txt = "", arrD = eval(value);
    if(arrD === null){ return ""; }
    if(value !== "" && arrD.length === undefined){  return value; } // if value is not array
    for(var i = 0; i < arrD.length; i++) {
        if(arrD[i] === ""){ continue; }
        txt += ", "+ arrD[i];
    }
    return (txt === "" ? "":txt.substr(2));
};

// setup dropdown json
var setDropDown = function(json, isAll, txtAll) {
    var opt = '';
    if(isAll){ opt += '<option value="-9">- '+txtAll+' -</option>'; }
    for(var i = 0; i < json.length; i++) {
        opt += '<option value="'+json[i].id+'">'+json[i].description+'</option>';
    }
    return opt;
};

// setup dropdown from manual array
var setDropDownArrayTxt = function(arr) {
    var opt = '<option value=""></option>';
    for(var i = 1; i < arr.length; i++) {
        opt += '<option value="'+i+'">'+arr[i]+'</option>';
    }
    return opt;
};

// setup tampilan service
var setServiceTxt = function(json, search) {
    if(search === '-' || search === null){ return '-'; }
    if(search.indexOf("\"") === -1 && search.indexOf("[") === -1){ return search; }
    var name = '', arrSearch = eval(search);
    for(var a = 0; a < arrSearch.length; a++) {
        for(var i = 0; i < json.length; i++) {
            if(json[i].div_initial.toLowerCase() === arrSearch[a].toLowerCase()){
                name += ', '+json[i].div_name; break;
            }
        }
    }
    return (name === '' ? '' : name.substr(2));
};

// setup tampilan pic exp
var setPICExp = function(json, search) {
    if(search === '-' || search === '' || search === null){ return '-'; }
    if(search.indexOf("\"") === -1 && search.indexOf("[") === -1){ return search; }
    var name = '', arrSearch = eval(search);
    if((arrSearch.length === 0 || arrSearch.length === undefined) && search !== ''){ arrSearch = eval("["+search+"]") }
    for(var a = 0; a < arrSearch.length; a++) {
        for(var i = 0; i < json.length; i++) {
            if(parseInt(json[i].karyawan_id) === parseInt(arrSearch[a])){
                name += ', '+json[i].karyawan_initial; break;
            }
        }
    }
    return (name === '' ? '' : name.substr(2));
};

// setup tampilan pic hris
var setPICHris = function(json, search) {
    if(search === '-' || search === null){ return '-'; }
    if(isNaN(search) && search.indexOf(',') === -1){ return search; }
    var name = '', arrSearch = search.split(",");
    for(var a = 0; a < arrSearch.length; a++) {
        for(var i = 0; i < json.length; i++) {
//            console.log(parseInt(json[i].emp_id)+' === '+parseInt(arrSearch[a]));
            if(parseInt(json[i].emp_id) === parseInt(arrSearch[a])){
                name += ', '+json[i].emp_name; break;
            }
        }
    }
    return (name === '' ? '' : name.substr(2));
};

function doFieldFilter(e, type, xtra, strict) {
    var re, rex = "";
    if (xtra !== null && xtra.constructor === Boolean) {
        strict = xtra;
        xtra = '';
    }
    // Try to grab the keycode for the event
    var key = 0;
    if (window.event)
        key = e.keyCode; // IE
    else if (e.which)
        key = e.which; // Netscape/Firefox/Opera
    // Do we have a KeyCode event to play with?
    if (key && key !== "undefined") {
        // Grab the character from the keycode to perform our check (This is not 100% accurate on all browsers)
        var chr = String.fromCharCode(e.charCode ? e.charCode : (key) ? key : 0);
        // List of standard edit keys for IE, Safari, Gecko and Opera browsers
        // Here's the order: NULL, left-arrow, right-arrow, tab, delete, backspace, return/enter, (Safari arrows left, up, right, down)
        var editKeys = "0,9,8,13,63232,63233,63235,63235";
        var editKeys2 = "92";
        var rek = new RegExp("^" + key.toString() + "\\,|\\," + key.toString() + "$|\\," + key.toString() + "\\,");
        if (key === editKeys2) {
            return false;
        }
        if (rek.test(editKeys)) {
            return true;
        }
        // Check to see if we were passed an "xtra" string.
        // Yes, means we need to convert the "xtra" characters into a bonified RegEx variable to use below.
        // No, means we can check to see if we should do a "strict" check.
        if (("character,alpha,number,numeric,alphanumeric,alphanum").indexOf(type) > -1 && typeof xtra !== "undefined" && xtra !== "") {
            rex = "";
            for (var i = 0; i < xtra.length; i++) {
                rex += "\\" + xtra.charAt(i);
            }
        } else if (typeof strict === "undefined" || strict === "" || strict !== true) {
            strict = false;
        }
        // Handle the filtering
        switch (type) {
            case "character":
            case "alpha":
                re = strict ? /^[a-zA-Z]$/ : ((rex === "") ? /^[a-zA-Z \.\,\-]$/ : new RegExp("^[a-zA-Z" + rex + "]$"));
                return re.test(chr);
            case "number":
            case "numeric":
                re = strict ? /^[0-9]$/ : ((rex === "") ? /^[0-9\,\.\-]$/ : new RegExp("^[0-9" + rex + "]$"));
                return re.test(chr);
            case "alphanumeric":
            case "alphanum":
                re = strict ? /^[a-zA-Z0-9]$/ : ((rex === "") ? /^[a-zA-Z0-9 \.\,\-]$/ : new RegExp("^[a-zA-Z0-9" + rex + "]$"));
                return re.test(chr);
            case "username":
                re = strict ? /^[a-zA-Z0-9]$/ : ((rex === "") ? /^[a-zA-Z0-9\.\-\_]$/ : new RegExp("^[a-zA-Z0-9" + rex + "]$"));
                return re.test(chr);
            case "incentivename":
                re = strict ? /^[a-zA-Z0-9]$/ : ((rex === "") ? /^[a-zA-Z0-9 \-\_]$/ : new RegExp("^[a-zA-Z0-9" + rex + "]$"));
                return re.test(chr);
            case "mail":
            case "email":
                re = /^[a-zA-Z0-9\+\-\.\_\@]$/;
//                re = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return re.test(chr);
            default:
                return false;
        }
        return false;
    } else {
        // It appears this browser doesn't support key detection events
        // I'm allowing the key to pass, but you may want to stop it. Your call.
        return true;
    }
}

var scrollTo = function (el, offeset) {
    var pos = (el && el.size() > 0) ? el.offset().top : 0;
    jQuery('html,body').animate({
        scrollTop: pos + (offeset ? offeset : 0)
    }, 'slow');
};

var confirmModal = function(txt, call) {
    if(txt === '') { txt = 'Are you sure want to save this data ?'; }
    $('#confirm-submit #submit-txt').html(txt);
    $('#submit-btn').off('click');
    $('#submit-btn').click(eval(call));
};

var alertModal = function(txt) {
    $('#alert-modal #alert-txt').html(txt);
    $('#alert-modal').modal('show');
};

var alertSuccess = function(msg) {
    return '<div class="alert alert-success alert-dismissible" style="font-size: 10pt;text-align: justify;"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button><h5><i class="icon fa fa-check"></i><b>Success</b>.</h5>'+ msg +'</div>';
};

var alertInfo = function(msg) {
    return '<div class="alert alert-info alert-dismissible" style="font-size: 10pt;text-align: justify;"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button><h5><i class="icon fa fa-info"></i><b>Info</b>.</h5>'+ msg +'</div>';
};

var alertWarning = function(msg) {
    return '<div class="alert alert-warning alert-dismissible" style="font-size: 10pt;text-align: justify;"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button><h5><i class="icon fa fa-warning"></i><b>Warning</b>.</h5>'+ msg +'</div>';
};

var alertDanger = function(msg) {
    return '<div class="alert alert-danger alert-dismissible" style="font-size: 10pt;text-align: justify;"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button><h5><i class="icon fa fa-ban"></i><b>Danger</b>.</h5>'+ msg +'</div>';
};

function formatMoney(n, c, d, t) {
    var c = isNaN(c = Math.abs(c)) ? 2 : c,
        d = d === undefined ? "." : d,
        t = t === undefined ? "," : t,
        s = n < 0 ? "-" : "",
        i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
        j = (j = i.length) > 3 ? j % 3 : 0;
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
}

var setupLogin = function() {
    loadCaptcha();
    $('#login-modal').modal('show');
};

var loadCaptcha = function() {
    var dt = new Date();
    $('#captcha img').attr('src',baseurl+'captcha?v='+dt.getTime());
};