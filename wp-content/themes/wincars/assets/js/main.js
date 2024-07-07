(function ($) {
	document.navigateFunc = function (destination, topMargin = false) {
		topMargin = (topMargin) ? topMargin : 0;
		if ($(destination).length != 0) {
			$('html, body').animate({ scrollTop: $(destination).offset().top - topMargin }, 800, 'linear') // анимируем скроолинг к элементу destination
		}
	};
	document.breakpointChecker = function (breakpoint, slider, enableSlider) {
		if (breakpoint.matches === true) {
			if (slider !== undefined) {
				slider.destroy(true, true);
			};
			return;
		} else if (breakpoint.matches === false) {
			return enableSlider();
		}
	};
	$(window).load(function () {
		$('#top-btn').on('click', () => {
			document.navigateFunc($('body'));
		})
		$('.cars .car').on('mouseenter', function(){
			$(this).toggleClass('hover');
		})
		$('.cars .car').on('mouseleave', function(){
			$(this).toggleClass('hover');
		})

	});
})(jQuery);
