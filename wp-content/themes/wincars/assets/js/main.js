(function ($) {
	document.navigateFunc = function (destination, topMargin = false) {
		topMargin = (topMargin) ? topMargin : 0;
		if ($(destination).length != 0) {
			$('html, body').animate({ scrollTop: $(destination).offset().top - topMargin }, 800, 'linear') // анимируем скроолинг к элементу destination
		}
	};
	$(window).load(function () {
		$('#top-btn').on('click', () => {
			document.navigateFunc($('body'));
		})
		// console.log(e.currentTarget);
		$('.cars .car').on('mouseenter', function(){
			$(this).toggleClass('hover');
		})
		$('.cars .car').on('mouseleave', function(){
			$(this).toggleClass('hover');
		})
		// $('.cars .car').on('mouseleave', (e) => {
		// 	let hiddenText = $(e.currentTarget).find('.hidden-text'),
		// 		visibleText = $(e.currentTarget).find('.visible-text');

		// 	visibleText.fadeIn('800');
		// 	hiddenText.fadeOut('800');

		// })
	});
})(jQuery);
