/*
 * MLCalc.com
 *
 * Copyright (c) 2008-2015 ARSIDIAN LLC
 *
 */

function initializeMLCalcWidget(){
	var iframeHeight = 0;

	if(!jQuery('#MLCalcHolder, #MLCalcShader, #MLCalcClose').size()) jQuery('body').prepend('<div id="MLCalcHolder"></div><div id="MLCalcShader"></div><div id="MLCalcClose" style="display:none">X</div>');

	jQuery('#MLCalcFormMortgageForm #dp INPUT').bind('keyup', function(){return calcDPValue()});
	jQuery('#MLCalcFormMortgageForm #ma INPUT').bind('keyup', function(){return calcDPValue()});
	jQuery('#MLCalcFormMortgageForm #dp INPUT').trigger('keyup');
	jQuery('#MLCalcFormMortgageForm').attr('autocomplete', 'off');
	jQuery('#MLCalcFormLoanForm').attr('autocomplete', 'off');



	jQuery('#MLCalcFormLoanForm').bind('submit', function(){
		if(typeof(mlcalc_amortization) == 'undefined') mlcalc_amortization = 'none';
		if(validateForm(jQuery(this)) == false) return false;
		iframeHeight = (mlcalc_amortization == 'none') ? 310 : 570;
		initFloatLayer(iframeHeight);
		jQuery(this).attr('target', 'MLCalcFrame');
	});
	jQuery('#MLCalcFormMortgageForm').bind('submit', function(){
		if(typeof(mlcalc_amortization) == 'undefined') mlcalc_amortization = 'none';
		if(validateForm(jQuery(this)) == false) return false;
		iframeHeight = (mlcalc_amortization == 'none') ? 327 : 578;
		initFloatLayer(iframeHeight);
		jQuery(this).attr('target', 'MLCalcFrame');
	});
	var now = new Date();
	jQuery('#MLCalcFormMortgageForm, #MLCalcFormLoanForm').each(function(i){
		jQuery('SELECT[name=sm] OPTION[value=' + (now.getMonth() + 1 > 12 ? 1 : now.getMonth() + 1) + '], SELECT[name=sy] OPTION[value=' + now.getFullYear() + ']', this).attr('selected', 'selected');
	});

	
};

function decode64(input) {
	var keyStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
	var output = '';
	var chr1, chr2, chr3;
	var enc1, enc2, enc3, enc4;
	var i = 0;
	input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");
	while (i < input.length) {
		enc1 = keyStr.indexOf(input.charAt(i++));
		enc2 = keyStr.indexOf(input.charAt(i++));
		enc3 = keyStr.indexOf(input.charAt(i++));
		enc4 = keyStr.indexOf(input.charAt(i++));
		chr1 = (enc1 << 2) | (enc2 >> 4);
		chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
		chr3 = ((enc3 & 3) << 6) | enc4;
		output += String.fromCharCode(chr1);
		if (enc3 != 64) output += String.fromCharCode(chr2);
		if (enc4 != 64) output += String.fromCharCode(chr3);
	};
	return output;
};
function initFloatLayer(iframeHeight){
	var viewportWidth  = jQuery(window).width();
	var viewportHeight = jQuery(window).height();

	var documentWidth  = 0;
	var documentHeight = 0;
	var viewportLeft   = 0;
	var viewportTop    = 0;

	if(document.body){
		documentWidth  = document.body.scrollWidth;
		documentHeight = document.body.scrollHeight;
		viewportLeft   = document.body.scrollLeft;
		viewportTop    = document.body.scrollTop;
	};
	if(document.documentElement){
		documentWidth  = Math.min(documentWidth, document.documentElement.scrollWidth);
		documentHeight = Math.max(documentHeight, document.documentElement.scrollHeight);
		viewportLeft   = Math.max(viewportLeft, document.documentElement.scrollLeft);
		viewportTop    = Math.max(viewportTop, document.documentElement.scrollTop);
	};

	var shaderWidth = Math.max(documentWidth, viewportWidth);
	var shaderHeight = Math.max(documentHeight, viewportHeight);
	jQuery('#MLCalcShader')
		.css({
			width:shaderWidth,
			height:shaderHeight,
			top:0,
			left:0,
			opacity:'0.5'
		})
		.show()
		.click(function(){
			mlcalcHideAll();
		});

	var holderLeft = parseInt((viewportWidth - 740) / 2) + viewportLeft;
	var holderTop  = parseInt((viewportHeight - iframeHeight) / 2) + viewportTop;
	if(holderLeft < 0) holderLeft = 0;
	if(holderTop < 0) holderTop = 0;
	hideObjects(holderLeft, holderTop, holderLeft + 740, holderTop + iframeHeight);
	mlcalcFrameIsShown = true;
	jQuery('#MLCalcHolder')
		.css({
			width:740,
			height:iframeHeight,
			top:holderTop,
			left:holderLeft
		})
		.show();

	if(jQuery('#MLCalcHolder #MLCalcFrame').size() < 1){
		jQuery('#MLCalcHolder').html('<iframe src="#" scrolling="no" id="MLCalcFrame" name="MLCalcFrame" width="0" height="0" frameborder="0" allowtransparency="true" style="background-color: transparent; display: none"></iframe><iframe id="garbageFrame" style="display:none"></iframe>')
	};
	jQuery(document).keyup(function(e) {
		if (e.keyCode == 27) mlcalcHideAll();
	});
	jQuery('#MLCalcHolder').find('#MLCalcFrame').css({width:740, height:iframeHeight}).load(function(){
		jQuery(this).show();
		jQuery('#MLCalcHolder #garbageFrame').attr('src', '');
		jQuery('#MLCalcClose').show().css({height:25, width:25}).css({top:holderTop, left:holderLeft+jQuery('#MLCalcHolder').width()-2-jQuery('#MLCalcClose').width()})
			.click(function(){
				mlcalcHideAll();
			})
			.hover(function(){
				jQuery(this).css({background:'#F5F5F5', color:'#808080'});
			}, function(){
				jQuery(this).css({background:'#D5D5D5', color:'#F5F5F5'});
			});
	});
};
function mlcalcHideAll(){
	if(!mlcalcFrameIsShown) return false;
	mlcalcFrameIsShown = false;
	jQuery('#MLCalcShader').fadeOut(300);
	jQuery('#MLCalcHolder, #MLCalcClose').hide();
	jQuery('#MLCalcFrame').remove();
	showObjects();
};
function hideObjects(X1, Y1, X2, Y2){

	if (jQuery.browser.msie && jQuery.browser.version > 7) return true;

	jQuery('OBJECT').each(function(){
		var offset = jQuery(this).offset();
		oX1 = offset.left;
		oY1 = offset.top;
		oX2 = oX1 + jQuery(this).width();
		oY2 = oY1 + jQuery(this).height();
		if(
			((X1 > oX1 && X1 < oX2) || (X2 > oX1 && X2 < oX2)) && ((Y1 > oY1 && Y1 < oY2) || (Y2 > oY1 && Y2 < oY2)) ||
			((oX1 > X1 && oX1 < X2) || (oX2 > X1 && oX2 < X2)) && ((oY1 > Y1 && oY1 < Y2) || (oY2 > Y1 && oY2 < Y2))
		){
			jQuery(this).attr('originalVisibility', jQuery(this).css('visibility')).css('visibility', 'hidden').attr('hiddenBy', 'MLCalc');
		}
	});

	if (jQuery.browser.msie && jQuery.browser.version < 7){
		jQuery('SELECT').each(function(){
			jQuery(this).attr('originalVisibility', jQuery(this).css('visibility')).css('visibility', 'hidden').attr('hiddenBy', 'MLCalc');
		});
	};
};
function showObjects(){
	if (jQuery.browser.msie && jQuery.browser.version > 7) return true;

	jQuery('OBJECT[hiddenBy=MLCalc]').each(function(){
		jQuery(this).css('visibility', jQuery(this).attr('originalVisibility')).removeAttr('originalVisibility').removeAttr('hiddenBy');
	});

	if (jQuery.browser.msie && jQuery.browser.version < 7){
		jQuery('SELECT[hiddenBy=MLCalc]').each(function(){
			jQuery(this).css('visibility', jQuery(this).attr('originalVisibility')).removeAttr('originalVisibility').removeAttr('hiddenBy');
		});
	}
};
function validateForm(form){
	var validations = {
		'ma':{
			'minval' : 1, 'maxval' : 999999999, 'required' : true,
			'errmsg' : "\u0426\u0435\u043d\u0430 \u043d\u0435\u0434\u0432\u0438\u0436\u0438\u043c\u043e\u0441\u0442\u0438 \u0434\u043e\u043b\u0436\u043d\u0430 \u0431\u044b\u0442\u044c \u0432 \u043f\u0440\u0435\u0434\u0435\u043b\u0430\u0445 \u043e\u0442 1 \u0434\u043e 999,999,999"
		},
		'dp':{
			'minval' : 0, 'maxval' : 99, 'required' : false,
			'errmsg' : "\u041f\u0435\u0440\u0432\u043e\u043d\u0430\u0447\u0430\u043b\u044c\u043d\u044b\u0439 \u0432\u0437\u043d\u043e\u0441 \u0434\u043e\u043b\u0436\u0435\u043d \u0431\u044b\u0442\u044c \u0432 \u043f\u0440\u0435\u0434\u0435\u043b\u0430\u0445 \u043e\u0442 0 \u0434\u043e 99"
		},
		'mt':{
			'minval' : 1, 'maxval' : 100, 'required' : true,
			'errmsg' : "\u0421\u0440\u043e\u043a \u0438\u043f\u043e\u0442\u0435\u043a\u0438 \u0434\u043e\u043b\u0436\u0435\u043d \u0431\u044b\u0442\u044c \u043e\u0442 1 \u0434\u043e 100"
		},
		'pt':{
			'minval' : 0, 'maxval' : 999999, 'required' : false,
			'errmsg' : "\u041d\u0430\u043b\u043e\u0433 \u0434\u043e\u043b\u0436\u0435\u043d \u0431\u044b\u0442\u044c \u0432 \u043f\u0440\u0435\u0434\u0435\u043b\u0430\u0445 \u043e\u0442 0 \u0434\u043e 999,999"
		},
		'pi':{
			'minval' : 0, 'maxval' : 999999, 'required' : false,
			'errmsg' : "\u0421\u0442\u0440\u0430\u0445\u043e\u0432\u043a\u0430 \u0434\u043e\u043b\u0436\u043d\u0430 \u0431\u044b\u0442\u044c \u0432 \u043f\u0440\u0435\u0434\u0435\u043b\u0430\u0445 \u043e\u0442 0 \u0434\u043e 999,999"
		},
		'mi':{
			'minval' : 0, 'maxval' : 99.99, 'required' : false,
			'errmsg' : "PMI \u0434\u043e\u043b\u0436\u0435\u043d \u0431\u044b\u0442\u044c \u0432 \u043f\u0440\u0435\u0434\u0435\u043b\u0430\u0445 \u043e\u0442 0 to 99.99"
		},
		'la':{
			'minval' : 1, 'maxval' : 999999999, 'required' : true,
			'errmsg' : "\u0420\u0430\u0437\u043c\u0435\u0440 \u043a\u0440\u0435\u0434\u0438\u0442\u0430 \u0434\u043e\u043b\u0436\u0435\u043d \u0431\u044b\u0442\u044c \u0432 \u043f\u0440\u0435\u0434\u0435\u043b\u0430\u0445 \u043e\u0442 1 \u0434\u043e 999,999,999"
		},
		'lt':{
			'minval' : 1, 'maxval' : 100, 'required' : true,
			'errmsg' : "\u0421\u0440\u043e\u043a \u043a\u0440\u0435\u0434\u0438\u0442\u0430 \u0434\u043e\u043b\u0436\u0435\u043d \u0431\u044b\u0442\u044c \u0432 \u043f\u0440\u0435\u0434\u0435\u043b\u0430\u0445 \u043e\u0442 1 \u0434\u043e 100"
		},
		'ir':{
			'minval' : 0.01, 'maxval' : 99.99, 'required' : true,
			'errmsg' : "\u041f\u0440\u043e\u0446\u0435\u043d\u0442\u043d\u0430\u044f \u0441\u0442\u0430\u0432\u043a\u0430 \u0434\u043e\u043b\u0436\u043d\u0430 \u0431\u044b\u0442\u044c \u0432 \u043f\u0440\u0435\u0434\u0435\u043b\u0430\u0445 \u043e\u0442 0.01 \u0434\u043e 99.99"
		}
	};
	var toSubmit = true;
	form.find('.valid').each(function(){
		var val  = parseFloat(jQuery(this).val().replace(/[^0-9\.]/g));
		var name = jQuery(this).attr('name');
		if((val == 'null' || isNaN(val)) && (validations[name]['required'] === false)) return true;
		if(val < validations[name]['minval'] || val > validations[name]['maxval'] || (val == 'null' || isNaN(val))){
			alert(validations[name]['errmsg']);
			jQuery(this).select();
			toSubmit = false;
			return false;
		};
	});
	return toSubmit;
};

function formatNum(num){
	return num.toString().replace(/(\d+)(\d{3})/, function(num, num1, num2){
		return ((num1.length < 3) ? num1 : formatNum(num1)) + "," + num2;
	});
};
function calcDPValue(){
	var ma = parseFloat(jQuery('#MLCalcFormMortgageForm #ma INPUT').val().replace(/[^0-9\.]/g, ''));
	var dp = parseFloat(jQuery('#MLCalcFormMortgageForm #dp INPUT').val());
	if(dp < 100) jQuery('#MLCalcFormMortgageForm #downPaymentValue').html('(' + mlcalc_currency_symbol + '' + formatNum(Math.round(ma * dp / 100)) + ')');
	if(dp >= 20){
		jQuery('#MLCalcFormMortgageForm #mi *').attr('disabled', 'disabled').addClass('disabled');
	} else {
		jQuery('#MLCalcFormMortgageForm #mi *').removeAttr('disabled').removeClass('disabled');
	};
};

mlcalcFrameIsShown = false;





if(typeof mlcalc_jquery_noconflict != "undefined") jQuery.noConflict();

if(typeof mlcalc_no_write == "undefined"){
	jQuery(document).ready(function() {
		initializeMLCalcWidget();
	});
} else {
	jQuery('#mlcalcWidgetHolder').prepend(FORM);
	initializeMLCalcWidget();
};


var _mlcalc_preload_img = new Image(312,44);
if(typeof(mlcalc_cdn_protocol) != 'undefined') _mlcalc_preload_img.src="images/ajax-loader.gif".replace(/^http:\/\/\w+\./, mlcalc_cdn_protocol);