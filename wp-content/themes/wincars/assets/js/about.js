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
		stepsVerticalLineCorrection();

		let nextNumber,
			currentNumber,
			inProgress = false;
		$('.step').on('mouseenter', function () {
			if ($('body').width() >= 768) {
				showSelected = function (currentNumber, nextNumber) {
					inProgress = true;
					$('.steps__left-img').removeClass('active');
					setTimeout(() => {
						$('[data-img-number=' + nextNumber + ']').addClass('active');
						inProgress = false;
					}, 100)
					// $('[data-img-number=' + currentNumber + ']').fadeOut(0, function () {
					// 	$('[data-img-number=' + nextNumber + ']').fadeIn(500, () => {
					// 		inProgress = false;
					// 	});
					// });
				}
				$('.step').each(function () {
					$this = $(this);
					if ($this.hasClass('active')) {
						currentNumber = $this.attr('data-number');
					}
					$this.removeClass('active');
				})
				$(this).addClass('active');
				nextNumber = $(this).attr('data-number');

				if (inProgress) {
					document.sleep(200).then(() => { showSelected(currentNumber, nextNumber) });
				}
				else {
					showSelected(currentNumber, nextNumber);
				}
			}
		})
		$('.step').on('click', function () {
			if ($('body').width() < 768) {
				let hiddenImage = $(this).find('.step__content-img');
				hiddenImage.slideToggle();
			}
		})
	});
	$(window).resize(function () {
		stepsVerticalLineCorrection();
		if ($('body').width() >= 768) {
			$('.step__content-img').hide(0);
		}
		else {
			$('.steps__item').removeClass('active');
		}
	});
})(jQuery);
