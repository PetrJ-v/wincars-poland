(function ($) {
	$(window).load(function () {

		// Feedbacks block
		$('.feedback').on('click', function () {
			$this = $(this);
			if (!$this.hasClass('fb-hovered')) {
				$this.addClass('fb-hovered');
				let fbText = $this.find('.feedback__content');
				fbText.slideDown(500);
			}
			else {
				$this.removeClass('fb-hovered');
				let fbText = $this.find('.feedback__content');
				fbText.slideUp(500);
			}
		})
		// $('.feedback').on('mouseenter', function () {
		// 	$(this).addClass('fb-hovered');
		// 	let fbText = $(this).find('.feedback__content');
		// 	fbText.slideDown(500);
		// })
		// $('.feedback').on('mouseleave', function () {
		// 	$(this).removeClass('fb-hovered');
		// 	let fbText = $(this).find('.feedback__content');
		// 	fbText.slideUp(500);
		// })

		wow = new WOW(
			{
				boxClass: 'wow',      // default
				animateClass: 'animated', // default
				offset: 0,          // default
				mobile: true,       // default
				live: true        // default
			}
		)
		wow.init();
	});
})(jQuery);
