(function ($) {
	$(window).load(function () {

		wow = new WOW(
			{
				boxClass: 'wow',      // default
				animateClass: 'animated', // default
				offset: 0,          // default
				mobile: false,       // default
				live: true        // default
			}
		)
		wow.init();
		// Cars block
		$('.cars .car').on('mouseenter', function () {
			$(this).toggleClass('hover');
		})
		$('.cars .car').on('mouseleave', function () {
			$(this).toggleClass('hover');
		})
		// if ($('.why-we__slider')) {
		// 	var whyWeSlider = new Swiper(".why-we__slider", {
		// 		spaceBetween: 16,
		// 		slidesPerView: 1,
		// 		loop: true,
		// 		slideToClickedSlide: true,
		// 		centeredSlides: true,
		// 		autoplay: {
		// 			delay: 2000,
		// 			disableOnInteraction: true,
		// 		},
		// 		effect: 'coverflow',
		// 		keyboard: {
		// 			enabled: true,
		// 			onlyInViewport: true,
		// 		},
		// 		breakpoints: {
		// 			389.98: {
		// 				slidesPerView: 1.3,
		// 			},
		// 			499.98: {
		// 				slidesPerView: 1.7,
		// 			},
		// 			789.98: {
		// 				slidesPerView: 2.5,
		// 			},
		// 			991.98: {
		// 				slidesPerView: 3.3,
		// 			},
		// 			1299.98: {
		// 				slidesPerView: 4,
		// 			},
		// 		},
		// 	});
		// }

		// Feedbacks block

		$('.feedback').on('mouseenter', function () {
			$(this).addClass('fb-hovered');
			let fbText = $(this).find('.feedback__content');
			fbText.slideDown(500);
		})
		$('.feedback').on('mouseleave', function () {
			$(this).removeClass('fb-hovered');
			let fbText = $(this).find('.feedback__content');
			fbText.slideUp(500);
		})
		// if ($('.feedbacks-slider')) {
		// 	var feedbacksSlider = new Swiper(".feedbacks-slider", {
		// 		spaceBetween: 20,
		// 		slidesPerView: 1,
		// 		watchOverflow: true,
		// 		// centeredSlides: true,
		// 		// initialSlide: 2,
		// 		navigation: {
		// 			nextEl: ".swiper-button-next",
		// 			prevEl: ".swiper-button-prev",
		// 		},
		// 		breakpoints: {
		// 			499.98: {
		// 				slidesPerView: 1.5,
		// 			},
		// 			640.98: {
		// 				slidesPerView: 2,
		// 			},
		// 			839.98: {
		// 				slidesPerView: 2.5,
		// 			},
		// 			1139.98: {
		// 				slidesPerView: 3,
		// 			},
		// 		},
		// 	});
		// }

		$('.cars .car').on('mouseenter', function () {
			$(this).toggleClass('hover');
		})
		$('.cars .car').on('mouseleave', function () {
			$(this).toggleClass('hover');
		})

		if ($('.previews-slider')) {
			var previewSlider = new Swiper(".previews-slider", {
				slidesPerView: 1,
				spaceBetween: 20,
				// centeredSlides: true,
				initialSlide: 1,
				watchOverflow: true,
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
				keyboard: {
					enabled: true,
					onlyInViewport: true,
				},
				breakpoints: {
					575.98: {
						slidesPerView: 2,
					},
					// 640.98: {
					// 	slidesPerView: 2,
					// },
					991.98: {
						slidesPerView: 3,
					},
				},
			});
		}
	});
})(jQuery);
