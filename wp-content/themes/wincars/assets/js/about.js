(function ($) {

	let stepsVerticalLineCorrection = function () {
		let line = $('.steps__vertical-line'),
			steps = $('.steps__item'),
			lastStep = steps[steps.length - 1],
			stepNumber = $(lastStep).find('.step__number'),
			numberHeight = $(stepNumber).height(),
			lastStepHeight = $(lastStep).height(),
			lineBottom = lastStepHeight - 32 - numberHeight / 2,
			lineTop = 32 + numberHeight / 2;

		line.css('bottom', lineBottom + 'px');
		line.css('top', lineTop + 'px');
	}
	$(window).load(function () {

	});
	$(window).resize(function () {
		stepsVerticalLineCorrection();
	});
})(jQuery);
