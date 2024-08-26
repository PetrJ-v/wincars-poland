(function ($) {
	if ($('.feedbacks-slider')) {
		var feedbacksSlider = new Swiper(".feedbacks-slider", {
			spaceBetween: 20,
			slidesPerView: 1,
			watchOverflow: true,
			// centeredSlides: true,
			// initialSlide: 2,
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
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
})(jQuery);
