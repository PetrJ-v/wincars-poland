(function ($) {

	var hiddenInput = $('#paged-store'),
		paged = hiddenInput.data('paged'),
		maxPages = hiddenInput.data('max_pages'),
		currentCatId = hiddenInput.data('category-id'),
		can_be_loaded = true;

	$(window).scroll(function () {
		var wt = $(window).scrollTop();
		var wh = $(window).height();
		var et = $('.footer').offset().top;
		var eh = $('.footer').outerHeight();
		var dh = $(document).height();
		if (wt + wh >= et || wh + wt == dh || eh + et < wh) {
			if (paged < maxPages && can_be_loaded == true) {

				currentCatId = (currentCatId) ? currentCatId : 'not category';
				$.ajax({
					type: 'POST',
					url: indiana.ajaxurl,
					data: {
						paged: paged,
						action: 'loadmore',
						currentCatId: currentCatId
					},
					beforeSend: function (xhr) {
						can_be_loaded = false;
						$('body').addClass('loading');
					},
					success: function (data) {
						if (data) {
							paged++;
							hiddenInput.before(data);
							$('body').removeClass('loading');
							$('.projects__item--hidden').fadeIn(800);
							can_be_loaded = true;
							if (paged === maxPages) {
								can_be_loaded = false;
							}
						}
					}
				});
			}
		}
	});
})(jQuery);
