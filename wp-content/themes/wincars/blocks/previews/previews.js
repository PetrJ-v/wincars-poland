(function ($) {
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
})(jQuery);
