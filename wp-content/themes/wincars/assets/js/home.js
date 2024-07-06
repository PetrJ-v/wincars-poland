(function ($) {
	$(window).load(function () {

		// Cars block
		$('.cars .car').on('mouseenter', function(){
			$(this).toggleClass('hover');
		})
		$('.cars .car').on('mouseleave', function(){
			$(this).toggleClass('hover');
		})
		if ($('.why-we__slider')) {
			var whyWeSlider = new Swiper(".why-we__slider", {
				spaceBetween: 16,
				slidesPerView: 1,
				loop: true,
				// autoplay: {
				// 	delay: 2000,
				// },
				effect: 'coverflow',
				keyboard: {
					enabled: true,
					onlyInViewport: true,
				},
				breakpoints: {
					389.98: {
						slidesPerView: 1.3,
					},
					499.98: {
						slidesPerView: 1.7,
					},
					789.98: {
						slidesPerView: 2.5,
					},
					991.98: {
						slidesPerView: 3.3,
					},
					1299.98: {
						slidesPerView: 4,
					},
				},
			});
		}

		// Faq block
		$('.question').on('click', (e) => {
			let faqItem = $(e.currentTarget).closest('.faq__item'),
				faqAnswer = faqItem.find('.faq__item-answer');

			if (!faqItem.hasClass('faq__item--opened')) {
				faqItem.addClass('faq__item--opened');
				faqAnswer.slideDown(1000);
			}
			else {
				faqItem.removeClass('faq__item--opened');
				faqAnswer.slideUp(1000);
			}
		})
	});
})(jQuery);
