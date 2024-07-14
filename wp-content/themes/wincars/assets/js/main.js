(function ($) {
	document.navigateFunc = function (destination, topMargin = false) {
		topMargin = (topMargin) ? topMargin : 0;
		if ($(destination).length != 0) {
			$('html, body').animate({ scrollTop: $(destination).offset().top - topMargin }, 800, 'linear') // анимируем скроолинг к элементу destination
		}
	};
	document.breakpointChecker = function (breakpoint, slider, enableSlider) {
		if (breakpoint.matches === true) {
			if (slider !== undefined) {
				slider.destroy(true, true);
			};
			return;
		} else if (breakpoint.matches === false) {
			return enableSlider();
		}
	};
	document.sleep = function (ms) {
		return new Promise(resolve => setTimeout(resolve, ms));
	}
	$(window).load(function () {
		$('#top-btn').on('click', () => {
			document.navigateFunc($('body'));
		})
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
		// Header menu
		$('.header-menu-btn').on('click', () => {
			if (!$('body').hasClass('menu-open')) {
				$('body').addClass('menu-open');
				setTimeout(() => {
					$('.menu').addClass('menu--visible');
				}, 500)
				setTimeout(() => {
					$('.header-menu').addClass('header-menu--opened');
				}, 600)
			}
			else {
				$('.header-menu').removeClass('header-menu--opened');
				setTimeout(() => {
					$('.menu').removeClass('menu--visible');
					$('body').removeClass('menu-open');
				}, 800)
			}
		})

		function toggleClassName(entry) {
			let element = $(entry.target);
			if (entry.isIntersecting) {
				$(element).addClass('active');
			}
			else {
				$(element).removeClass('active');
			}
		};

		/** Common animation loop based at IntersectionObserver browser API
		**************************************************************/
		window.animationOfEl = function () {
			const options = {
				root: null,
				rootMargin: '0px',
				threshold: 1
			}
			let animationAction = function (entries, observer) {

				entries.forEach(entry => {

					elFuncName = entry.target.function;

					if (elFuncName) {
						let elFunc = eval(elFuncName)
						if (typeof elFunc == 'function') {
							elFunc(entry);
						}
					}
				})
			}

			let observer = new IntersectionObserver(animationAction, options);

			let elToAnim = document.querySelectorAll('[data-anim]');

			elToAnim.forEach(item => {
				item.function = item.getAttribute('data-function');
				observer.observe(item);
			})
		}

		window.animationOfEl();

	});
})(jQuery);
