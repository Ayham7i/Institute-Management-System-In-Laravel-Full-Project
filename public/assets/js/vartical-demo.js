$(document).ready(function () {
    $("#pcoded").pcodedmenu({
        themelayout: 'vertical',
        verticalMenuplacement: theme[4], // value should be left/right
        verticalMenulayout: 'wide', // value should be wide/box
        MenuTrigger: 'click', // click / hover
        SubMenuTrigger: 'click', // click / hover
        activeMenuClass: 'active',
        ThemeBackgroundPattern: 'pattern6',  // pattern1, pattern2, pattern3, pattern4, pattern5, pattern6
        HeaderBackground: theme[6],  // theme1, theme2, theme3, theme4, theme5  header color
        LHeaderBackground: 'theme1', // theme1, theme2, theme3, theme4, theme5, theme6   brand color
        NavbarBackground: theme[8], // themelight1, theme1  // light  and dark sidebar
        ActiveItemBackground: theme[10], // theme1, theme2, theme3, theme4, theme5, theme6, theme7, theme8, theme9, theme10, theme11, theme12  mennu active item color
        SubItemBackground: 'theme2',
        ActiveItemStyle: 'style0',
        ItemBorder: true,
        ItemBorderStyle: 'none',
        NavbarImage:'false',
        ActiveNavbarImage:'img1',
        SubItemBorder: true,
        DropDownIconStyle: 'style3', // Value should be style1,style2,style3
        menutype: 'st2', // Value should be st1, st2, st3, st4, st5 menu icon style
        layouttype:'light', // Value should be light / dark
        FixedNavbarPosition: true,  // Value should be true / false  header postion
        FixedHeaderPosition: true,  // Value should be true / false  sidebar menu postion
        collapseVerticalLeftHeader: true,
        VerticalSubMenuItemIconStyle: 'style7', // value should be style1, style2, style3, style4, style5, style6
        VerticalNavigationView: 'view1',
        verticalMenueffect: {
            desktop: "shrink",
            tablet: "overlay",
            phone: "overlay",
        },
        defaultVerticalMenu: {
            desktop: "expanded", // value should be offcanvas/collapsed/expanded/compact/compact-acc/fullpage/ex-popover/sub-expanded
            tablet: "offcanvas", // value should be offcanvas/collapsed/expanded/compact/fullpage/ex-popover/sub-expanded
            phone: "offcanvas", // value should be offcanvas/collapsed/expanded/compact/fullpage/ex-popover/sub-expanded
        },
        onToggleVerticalMenu: {
            desktop: "offcanvas", // value should be offcanvas/collapsed/expanded/compact/fullpage/ex-popover/sub-expanded
            tablet: "expanded", // value should be offcanvas/collapsed/expanded/compact/fullpage/ex-popover/sub-expanded
            phone: "expanded", // value should be offcanvas/collapsed/expanded/compact/fullpage/ex-popover/sub-expanded
        },

    });
var pass=1;
  $.ajax({
        type:'post',
        url:'checkmsg.php',
        data:{
          
          
		  pa:pass
        },
        success:function(response) {
		  if(response>0){
			  
		  $("#msgaya").html(response);
		  $("#msgaya").removeClass('bg-c-green');
		  $("#msgaya").addClass('bg-c-pink');
		  
		  }else{
			  $("#msgaya").html('');
			  $("#msgaya").removeClass('bg-c-pink');
		      $("#msgaya").addClass('bg-c-green');
		  }
          //step2();

        }
      });
	
});
var ajax_call = function() {
	var pass=1;
  $.ajax({
        type:'post',
        url:'checkmsg.php',
        data:{
          
          
		  pa:pass
        },
        success:function(response) {
		  if(response>0){
		  $("#msgaya").html(response);
		  $("#msgaya").removeClass('bg-c-green');
		  $("#msgaya").addClass('bg-c-pink');
		  
		  }else{
			  $("#msgaya").html('');
			  $("#msgaya").removeClass('bg-c-pink');
		      $("#msgaya").addClass('bg-c-green');
		  }
          //step2();

        }
      });
};

var interval = 1000 * 60 * 0.5; // where X is your every X minutes

setInterval(ajax_call, interval);



//Language Madules
/*!
 * jQuery Cookie Plugin v1.4.1
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2013 Klaus Hartl
 * Released under the MIT license
 */
(function (factory) {
	if (typeof define === 'function' && define.amd) {
		// AMD
		define(['jquery'], factory);
	} else if (typeof exports === 'object') {
		// CommonJS
		factory(require('jquery'));
	} else {
		// Browser globals
		factory(jQuery);
	}
}(function ($) {

	var pluses = /\+/g;

	function encode(s) {
		return config.raw ? s : encodeURIComponent(s);
	}

	function decode(s) {
		return config.raw ? s : decodeURIComponent(s);
	}

	function stringifyCookieValue(value) {
		return encode(config.json ? JSON.stringify(value) : String(value));
	}

	function parseCookieValue(s) {
		if (s.indexOf('"') === 0) {
			// This is a quoted cookie as according to RFC2068, unescape...
			s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
		}

		try {
			// Replace server-side written pluses with spaces.
			// If we can't decode the cookie, ignore it, it's unusable.
			// If we can't parse the cookie, ignore it, it's unusable.
			s = decodeURIComponent(s.replace(pluses, ' '));
			return config.json ? JSON.parse(s) : s;
		} catch(e) {}
	}

	function read(s, converter) {
		var value = config.raw ? s : parseCookieValue(s);
		return $.isFunction(converter) ? converter(value) : value;
	}

	var config = $.cookie = function (key, value, options) {

		// Write

		if (value !== undefined && !$.isFunction(value)) {
			options = $.extend({}, config.defaults, options);

			if (typeof options.expires === 'number') {
				var days = options.expires, t = options.expires = new Date();
				t.setTime(+t + days * 864e+5);
			}

			return (document.cookie = [
				encode(key), '=', stringifyCookieValue(value),
				options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
				options.path    ? '; path=' + options.path : '',
				options.domain  ? '; domain=' + options.domain : '',
				options.secure  ? '; secure' : ''
			].join(''));
		}

		// Read

		var result = key ? undefined : {};

		// To prevent the for loop in the first place assign an empty array
		// in case there are no cookies at all. Also prevents odd result when
		// calling $.cookie().
		var cookies = document.cookie ? document.cookie.split('; ') : [];

		for (var i = 0, l = cookies.length; i < l; i++) {
			var parts = cookies[i].split('=');
			var name = decode(parts.shift());
			var cookie = parts.join('=');

			if (key && key === name) {
				// If second argument (value) is a function it's a converter...
				result = read(cookie, value);
				break;
			}

			// Prevent storing a cookie that we couldn't decode.
			if (!key && (cookie = read(cookie)) !== undefined) {
				result[name] = cookie;
			}
		}

		return result;
	};

	config.defaults = {};

	$.removeCookie = function (key, options) {
		if ($.cookie(key) === undefined) {
			return false;
		}

		// Must not alter options, thus extending a fresh object...
		$.cookie(key, '', $.extend({}, options, { expires: -1 }));
		return !$.cookie(key);
	};

}));
$.cookie('googtrans', '/en/'+theme[12]+'');