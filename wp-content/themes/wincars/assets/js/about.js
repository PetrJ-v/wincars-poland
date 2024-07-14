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
			inProgress = false,
			showSelected = function () {
				inProgress = true;
				$('[data-img-number=' + nextNumber + ']').fadeIn(500, function(){
					inProgress = false;
				});
			},
			menageActiveClass = function(clickedEl){
				$('.step').each(function () {
					$this = $(this);
					if ($this.hasClass('active')) {
						currentNumber = $this.attr('data-number');
					}
					$this.removeClass('active');
				})
				clickedEl.addClass('active');
			}
			$('.step').on('mouseenter', function () {
			if ($('body').width() >= 768) {
				$this = $(this);
				nextNumber = $this.attr('data-number');
				menageActiveClass($this);

				$('[data-img-number=' + currentNumber + ']').fadeOut(300, function(){
					if (inProgress) {
						return;
					}
					else {
						showSelected();
					}
				});
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
