// Popup messages
//-----------------------------------------------------------------
jQuery(document).ready(function(){
	"use strict";

	LOVESTORY_STORAGE['message_callback'] = null;
	LOVESTORY_STORAGE['message_timeout'] = 5000;

	jQuery('body').on('click', '#lovestory_modal_bg,.lovestory_message .lovestory_message_close', function (e) {
		"use strict";
		lovestory_message_destroy();
		if (LOVESTORY_STORAGE['message_callback']) {
			LOVESTORY_STORAGE['message_callback'](0);
			LOVESTORY_STORAGE['message_callback'] = null;
		}
		e.preventDefault();
		return false;
	});
});


// Warning
function lovestory_message_warning(msg) {
	"use strict";
	var hdr  = arguments[1] ? arguments[1] : '';
	var icon = arguments[2] ? arguments[2] : 'cancel';
	var delay = arguments[3] ? arguments[3] : LOVESTORY_STORAGE['message_timeout'];
	return lovestory_message({
		msg: msg,
		hdr: hdr,
		icon: icon,
		type: 'warning',
		delay: delay,
		buttons: [],
		callback: null
	});
}

// Success
function lovestory_message_success(msg) {
	"use strict";
	var hdr  = arguments[1] ? arguments[1] : '';
	var icon = arguments[2] ? arguments[2] : 'check';
	var delay = arguments[3] ? arguments[3] : LOVESTORY_STORAGE['message_timeout'];
	return lovestory_message({
		msg: msg,
		hdr: hdr,
		icon: icon,
		type: 'success',
		delay: delay,
		buttons: [],
		callback: null
	});
}

// Info
function lovestory_message_info(msg) {
	"use strict";
	var hdr  = arguments[1] ? arguments[1] : '';
	var icon = arguments[2] ? arguments[2] : 'info';
	var delay = arguments[3] ? arguments[3] : LOVESTORY_STORAGE['message_timeout'];
	return lovestory_message({
		msg: msg,
		hdr: hdr,
		icon: icon,
		type: 'info',
		delay: delay,
		buttons: [],
		callback: null
	});
}

// Regular
function lovestory_message_regular(msg) {
	"use strict";
	var hdr  = arguments[1] ? arguments[1] : '';
	var icon = arguments[2] ? arguments[2] : 'quote';
	var delay = arguments[3] ? arguments[3] : LOVESTORY_STORAGE['message_timeout'];
	return lovestory_message({
		msg: msg,
		hdr: hdr,
		icon: icon,
		type: 'regular',
		delay: delay,
		buttons: [],
		callback: null
	});
}

// Confirm dialog
function lovestory_message_confirm(msg) {
	"use strict";
	var hdr  = arguments[1] ? arguments[1] : '';
	var callback = arguments[2] ? arguments[2] : null;
	return lovestory_message({
		msg: msg,
		hdr: hdr,
		icon: 'help',
		type: 'regular',
		delay: 0,
		buttons: ['Yes', 'No'],
		callback: callback
	});
}

// Modal dialog
function lovestory_message_dialog(content) {
	"use strict";
	var hdr  = arguments[1] ? arguments[1] : '';
	var init = arguments[2] ? arguments[2] : null;
	var callback = arguments[3] ? arguments[3] : null;
	return lovestory_message({
		msg: content,
		hdr: hdr,
		icon: '',
		type: 'regular',
		delay: 0,
		buttons: ['Apply', 'Cancel'],
		init: init,
		callback: callback
	});
}

// General message window
function lovestory_message(opt) {
	"use strict";
	var msg = opt.msg != undefined ? opt.msg : '';
	var hdr  = opt.hdr != undefined ? opt.hdr : '';
	var icon = opt.icon != undefined ? opt.icon : '';
	var type = opt.type != undefined ? opt.type : 'regular';
	var delay = opt.delay != undefined ? opt.delay : LOVESTORY_STORAGE['message_timeout'];
	var buttons = opt.buttons != undefined ? opt.buttons : [];
	var init = opt.init != undefined ? opt.init : null;
	var callback = opt.callback != undefined ? opt.callback : null;
	// Modal bg
	jQuery('#lovestory_modal_bg').remove();
	jQuery('body').append('<div id="lovestory_modal_bg"></div>');
	jQuery('#lovestory_modal_bg').fadeIn();
	// Popup window
	jQuery('.lovestory_message').remove();
	var html = '<div class="lovestory_message lovestory_message_' + type + (buttons.length > 0 ? ' lovestory_message_dialog' : '') + '">'
		+ '<span class="lovestory_message_close iconadmin-cancel icon-cancel"></span>'
		+ (icon ? '<span class="lovestory_message_icon iconadmin-'+icon+' icon-'+icon+'"></span>' : '')
		+ (hdr ? '<h2 class="lovestory_message_header">'+hdr+'</h2>' : '');
	html += '<div class="lovestory_message_body">' + msg + '</div>';
	if (buttons.length > 0) {
		html += '<div class="lovestory_message_buttons">';
		for (var i=0; i<buttons.length; i++) {
			html += '<span class="lovestory_message_button">'+buttons[i]+'</span>';
		}
		html += '</div>';
	}
	html += '</div>';
	// Add popup to body
	jQuery('body').append(html);
	var popup = jQuery('body .lovestory_message').eq(0);
	// Prepare callback on buttons click
	if (callback != null) {
		LOVESTORY_STORAGE['message_callback'] = callback;
		jQuery('.lovestory_message_button').on('click', function(e) {
			"use strict";
			var btn = jQuery(this).index();
			callback(btn+1, popup);
			LOVESTORY_STORAGE['message_callback'] = null;
			lovestory_message_destroy();
		});
	}
	// Call init function
	if (init != null) init(popup);
	// Show (animate) popup
	var top = jQuery(window).scrollTop();
	jQuery('body .lovestory_message').animate({top: top+Math.round((jQuery(window).height()-jQuery('.lovestory_message').height())/2), opacity: 1}, {complete: function () {
		// Call init function
		//if (init != null) init(popup);
	}});
	// Delayed destroy (if need)
	if (delay > 0) {
		setTimeout(function() { lovestory_message_destroy(); }, delay);
	}
	return popup;
}

// Destroy message window
function lovestory_message_destroy() {
	"use strict";
	var top = jQuery(window).scrollTop();
	jQuery('#lovestory_modal_bg').fadeOut();
	jQuery('.lovestory_message').animate({top: top-jQuery('.lovestory_message').height(), opacity: 0});
	setTimeout(function() { jQuery('#lovestory_modal_bg').remove(); jQuery('.lovestory_message').remove(); }, 500);
}
