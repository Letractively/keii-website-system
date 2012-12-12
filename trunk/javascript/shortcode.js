(function($) {
	$.fn.mSimpleToggleAccordion = function(options) {
		var defaults = {
			showFirst : true,
			type : "",
			speed : 500,
			easing : "",
			mEvent : "click"
		};
		var options = $.extend(defaults, options);
		return this
				.each(function() {
					var opts = options, obj = $(this), toggler = $("> dt", obj), toggleContent = $(
							"> dd", obj);
					toggleContent.hide();
					toggler.append("<span class='sign'></span");
					if (opts.showFirst == true) {
						$('dt:first', obj).addClass("active").next().show()
					}
					;
					toggler.bind(opts.mEvent, function() {
						if (opts.type == "accordion") {
							if ($(this).next().is(":hidden")) {
								toggler.removeClass("active").next().slideUp(
										opts.speed, opts.easing);
								$(this).addClass("active").next().slideDown(
										opts.speed, opts.easing)
							}
						} else if (opts.type == "toggles") {
							$(this).toggleClass("active").next().slideToggle(
									opts.speed, opts.easing)
						}
					})
				})
	}
})(jQuery);
(function($) {
	$.fn.mTabs = function(options) {
		var defaults = {
			effect : "",
			speed : 500,
			easing : "",
			mEvent : "click"
		};
		
		var options = $.extend(defaults, options);
		return this
				.each(function() {
					var opts = options, obj = $(this), tab = $("> dt", obj), tabContent = $(
							"> dd", obj);
					tabContent.hide();
					$('dt:first', obj).addClass("active").next().show()
							.addClass("active");
					obj.css({
						height : $('dt:first', obj).next().outerHeight()
								+ tab.outerHeight()
					});
					tabContent.css({
						top : tab.outerHeight() - 1,
						left : 0
					});
					tab.bind(opts.mEvent, function() {
						if ($(this).next().is(":hidden")) {
							$(this).parent().animate(
									{
										height : $(this).next().outerHeight()
												+ tab.outerHeight()
									});
							tab.removeClass("active")
						}
						if (opts.effect == "slide") {
							tabContent.removeClass("active").slideUp(
									opts.speed / 2, opts.easing);
							$(this).addClass("active").next().slideDown(
									opts.speed, opts.easing).addClass("active")
						} else if (opts.effect == "fade") {
							tabContent.removeClass("active").fadeOut(
									opts.speed / 2, opts.easing);
							$(this).addClass("active").next().fadeIn(
									opts.speed, opts.easing).addClass("active")
						}
					})
				})
	}
})(jQuery);
(function($) {
	$.fn.mSimpleListAnimate = function(options) {
		var defaults = {
			speed : 200,
			easing : ""
		};
		var options = $.extend(defaults, options);
		return this
				.each(function() {
					var opts = options, obj = $(this), anim = $("> li", obj), currentPadding = $(
							anim).outerWidth()
							- $(anim).width();
					anim.hover(function() {
						$(this).stop().animate({
							paddingLeft : currentPadding + 10
						}, opts.speed, opts.easing)
					}, function() {
						$(this).stop().animate({
							paddingLeft : currentPadding
						}, opts.speed * 2, opts.easing)
					})
				})
	}
})(jQuery);
(function($) {
	$.fn.mSimpleHoverFade = function(options) {
		var defaults = {
			speed : 300
		};
		var options = $.extend(defaults, options);
		return this.each(function() {
			var opts = options, obj = $(this);
			obj.hover(function() {
				$(this).stop().animate({
					opacity : .7
				}, opts.speed)
			}, function() {
				$(this).stop().animate({
					opacity : 1
				}, opts.speed)
			})
		})
	}
})(jQuery);
(function($) {
	$.fn.mIconBoxWrap = function(options) {
		var defaults = {
			paddingLeft : 36
		};
		var options = $.extend(defaults, options);
		return this.each(function() {
			var opts = options, obj = $(this), objImageSrc = $(" > .icon-icon",
					obj).attr("src");
			$(" > .icon-icon", obj).remove();
			obj.css({
				background : "url(" + objImageSrc + ") no-repeat left 0",
				paddingLeft : opts.paddingLeft * 1.5
			})
		})
	}
})(jQuery);
$(document).ready(function() {
	
	if($.browser.msie || $.browser.mozilla || $.browser.opera) {
		$("dl.m-simple-accordion").mSimpleToggleAccordion({
			showFirst : true,
			type : "accordion",
			speed : 300,
			mEvent : "mouseover"
		});
		$("dl.m-simple-toggle").mSimpleToggleAccordion({
			type : "toggles",
			showFirst : false,
			speed : 1000,
			easing : "easeOutBounce",
			mEvent : "click"
		});
		$(".m-simple-tabs").mTabs({
			speed : 1000,
			easing : "easeOutBounce",
			effect : "fade",
			mEvent : "click"
		});
	}
	else {
		$("dl.m-simple-accordion").mSimpleToggleAccordion({
			showFirst : true,
			type : "accordion",
			speed : 300,
			mEvent : "mouseover"
		});
		$("dl.m-simple-toggle").mSimpleToggleAccordion({
			type : "toggles",
			showFirst : false,
			speed : 1000,
			easing : "easeOutBounce",
			mEvent : "click"
		});
		$(".m-simple-tabs").mTabs({
			speed : 1000,
			easing : "easeOutBounce",
			effect : "fade",
			mEvent : "click"
		});
	}

	
});
$(document).ready(function() {
	$(".unordered-list").mSimpleListAnimate();
	$(".maxx-notification .close").click(function() {
		$(this).parent().fadeTo(400, 0, function() {
			$(this).slideUp(400)
		});
		return false
	});
	$(".maxx-button").mSimpleHoverFade();
	$(".icon-boxes-wrapper").mIconBoxWrap()
});
$(document).ready(
		function() {
			$("table.m-table thead tr th:first-child").addClass("first-child");
			$("table.m-table thead tr th:last-child").addClass("last-child");
			$("table.m-table tbody tr:first-child th:first-child").addClass(
					"first-child");
			$("table.m-table tbody tr:last-child th:first-child").addClass(
					"last-child");
			$("table.m-table tbody tr:odd").addClass("alternate");
			$("table.m-table tbody tr > td:first-child")
					.addClass("first-child")
		});