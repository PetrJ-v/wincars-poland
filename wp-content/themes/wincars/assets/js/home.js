(function ($) {
	$(window).load(function () {

		// Cars block
		$('.cars .car').on('mouseenter', function () {
			$(this).toggleClass('hover');
		})
		$('.cars .car').on('mouseleave', function () {
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
		if ($('.feedbacks-slider')) {
			var feedbacksSlider = new Swiper(".feedbacks-slider", {
				spaceBetween: 20,
				slidesPerView: 1,
				centeredSlides: true,
				initialSlide: 2,
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
				// loop: true,
				// autoplay: {
				// 	delay: 2000,
				// },
				// effect: 'coverflow',
				keyboard: {
					enabled: true,
					onlyInViewport: true,
				},
				breakpoints: {
					499.98: {
						slidesPerView: 1.5,
					},
					640.98: {
						slidesPerView: 2,
					},
					839.98: {
						slidesPerView: 2.5,
					},
					1139.98: {
						slidesPerView: 3,
					},
				},
			});
		}

		if ($('.previews-slider')) {
			const previewSliderBreakpoint = window.matchMedia('(min-width:991.98px)');
			let previewSlider = undefined;
			const enablePreviewSlider = function () {
				previewSlider = new Swiper(".previews-slider", {
					slidesPerView: 1,
					spaceBetween: 20,
					// centeredSlides: true,
					initialSlide: 1,
					navigation: {
						nextEl: ".swiper-button-next",
						prevEl: ".swiper-button-prev",
					},
					keyboard: {
						enabled: true,
						onlyInViewport: true,
					},
					breakpoints: {
						499.98: {
							slidesPerView: 2,
						},
						640.98: {
							slidesPerView: 2,
						},
						// 839.98: {
						// 	slidesPerView: 2.5,
						// },
					},
				});
			}

			previewSliderBreakpoint.addEventListener("change", function () {
				document.breakpointChecker(previewSliderBreakpoint, previewSlider, enablePreviewSlider)
			});
			document.breakpointChecker(previewSliderBreakpoint, previewSlider, enablePreviewSlider);
		}
	});
})(jQuery);
