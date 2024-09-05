(function ($) {
	$(window).load(function () {
		if ($('.car-slider')) {
			var previewSlider = new Swiper(".car-slider", {
				slidesPerView: 1,
				spaceBetween: 20,
				// centeredSlides: true,
				watchOverflow: true,
				pagination: {
					el: '.car-slider-pagination',
					type: 'bullets',
				},
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
				keyboard: {
					enabled: true,
					onlyInViewport: true,
				},
				thumbs: {
					swiper: {
						el: '.car-thumbnail-slider',
						slidesPerView: 4,
						spaceBetween: 20,
					}
				}
			});
		}
		// if ($('.car-thumbnail-slider')) {
		// 	const featuredFull = new Swiper(".car-thumbnail-slider", {
		// 		slidesPerView: 4,
		// 		spaceBetween: 20,
		// 		// thumbs: {
		// 		// 	swiper: {
		// 		// 		el: '.featured-thumbnail-slider',
		// 		// 		slidesPerView: 9,
		// 		// 	}
		// 		// }
		// 	});
		// }
	});
})(jQuery);
