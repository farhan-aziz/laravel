

$(function(){
	
	// for Custom Select
	var flag = false;
	$('.custom-select ul li a').click(function(e){
		var parentID = $(this).parents().eq(2).prop("id");
		$('#'+ parentID + ' .form-control').text($(this).text());
		$('#'+ parentID + ' .hidden-field').val($(this).text());
		$('.custom-select').removeClass('active');
		flag = false;
	});
	$('.extra-services ul li a').click(function(e){
		$('.extra-services .selected-option').html($(this).html());
	});
	
	var _id;
	$('.custom-select strong').click(function(e){
				
		if(_id != $(this).parent().prop('id'))
			flag=false;
			
		if(flag==false){
			$(this).parent().addClass('active');
			flag=true;
		} else {
			$(this).parent().removeClass('active');
			flag=false;
		}
		
			
		_id = $(this).parent().prop('id');
	});
	
	$(document).mouseup(function(e){
		var container = $(".custom-select ul");
		
		if (!container.is(e.target)
			   && container.has(e.target).length === 0)
		{
			$('.custom-select').removeClass('active');
			if($('.date-holder').val()=='')
				$('.date-holder').removeClass('focus');
		}
	});
	$("#month ul a").click(function() {
		$('#month').addClass('selected');
	});
	$("#date ul a").click(function() {
		$('#date').addClass('selected');
	});
	
	
	// login and signup Form
	$('.user-form .option a').click(function(){
		$(this).toggleClass('active');
		if($(this).hasClass('active')){
			$('.user-form .login').show();
			$('.user-form .signup').hide();
			$('.user-form h1').html('Login');
		} else {
			$('.user-form .login').hide();
			$('.user-form .signup').show();
			$('.user-form h1').html('Sign Up');
		};
	});
	
	// profile
	$('.profile .edit').click(function(){
		$(this).hide();
		$('.profile').removeClass('active');
		$('.profile .save').show();
	})
	$('.profile .save').click(function(){
		$(this).hide();
		$('.profile').addClass('active');
		$('.profile .edit').show();
	})
	
	// Navigation
	$(function(){
		$('.navbar-toggle').click(function(){
			$('#wrapper').toggleClass('active');
		});
	});
	
	
	// only for number field value
	var insert = function (index, string, source) {
		return source.substring(0, index) + string + source.substring(index, source.length);
	};
	
	// for any type="tel" field
	$("input[type=tel]").keypress(function (e) {
		if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
			return false;
		}
	});
	
});


function checkFieldsValue(){
	$(".form-control").each(function(){
		if($(this).val().length < 1){
			$(this).parent().removeClass('focus');
		} else {
			$(this).parent().addClass('focus');
		}
	});
}


// Placeholder
jQuery(function(){
	jQuery('input, textarea').placeholder();
});

/*! http://mths.be/placeholder v2.0.6 by @mathias */
!function(e,a,t){function l(e){var a={},l=/^jQuery\d+$/;return t.each(e.attributes,function(e,t){t.specified&&!l.test(t.name)&&(a[t.name]=t.value)}),a}function r(e,l){var r,o=this,d=t(o);if(o.value==d.attr("placeholder")&&d.hasClass("placeholder")){if(r=o==a.activeElement,d.data("placeholder-password")){if(d=d.hide().next().show().attr("id",d.removeAttr("id").data("placeholder-id")),e===!0)return d[0].value=l;d.focus()}else o.value="",d.removeClass("placeholder");r&&o.select()}}function o(){var e,a=this,o=t(a),d=this.id;if(""==a.value){if("password"==a.type){if(!o.data("placeholder-textinput")){try{e=o.clone().attr({type:"text"})}catch(n){e=t("<input>").attr(t.extend(l(this),{type:"text"}))}e.removeAttr("name").data({"placeholder-password":!0,"placeholder-id":d}).bind("focus.placeholder",r),o.data({"placeholder-textinput":e,"placeholder-id":d}).before(e)}o=o.removeAttr("id").hide().prev().attr("id",d).show()}o.addClass("placeholder"),o[0].value=o.attr("placeholder")}else o.removeClass("placeholder")}var d,n,c="placeholder"in a.createElement("input"),i="placeholder"in a.createElement("textarea"),h=t.fn,u=t.valHooks;-1!=navigator.userAgent.indexOf("Opera/")&&(c=i=!1),c&&i?(n=h.placeholder=function(){return this},n.input=n.textarea=!0):(n=h.placeholder=function(){var e=this;return e.filter((c?"textarea":":input")+"[placeholder]").not(".placeholder").bind({"focus.placeholder":r,"blur.placeholder":o}).data("placeholder-enabled",!0).trigger("blur.placeholder"),e},n.input=c,n.textarea=i,d={get:function(e){var a=t(e);return a.data("placeholder-enabled")&&a.hasClass("placeholder")?"":e.value},set:function(e,l){var d=t(e);return d.data("placeholder-enabled")?(""==l?(e.value=l,e!=a.activeElement&&o.call(e)):d.hasClass("placeholder")?r.call(e,!0,l)||(e.value=l):e.value=l,d):e.value=l}},c||(u.input=d),i||(u.textarea=d),t(function(){t(a).delegate("form","submit.placeholder",function(){var e=t(".placeholder",this).each(r);setTimeout(function(){e.each(o)},10)})}),t(e).bind("beforeunload.placeholder",function(){t(".placeholder").each(function(){this.value=""})}))}(this,document,jQuery);