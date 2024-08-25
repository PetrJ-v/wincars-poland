(function ($) {
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
})(jQuery);
