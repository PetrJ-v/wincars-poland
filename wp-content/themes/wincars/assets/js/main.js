(function ($) {
	document.navigateFunc = function (destination, topMargin = false) {
		topMargin = (topMargin) ? topMargin : 0;
		if ($(destination).length != 0) {
			$('html, body').animate({ scrollTop: $(destination).offset().top - topMargin }, 800, 'linear') // анимируем скроолинг к элементу destination
		}
	};
	$('#top-btn').on('click', function () {
		$('html, body').animate({ scrollTop: 0 }, 600, 'linear') // анимируем скроолинг к элементу destination
	})
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

	function animateValue(element, duration) {
		// const element = document.querySelector(`.${className}`);
		if (!element) {
			console.error(`Element with class ${className} not found.`);
			return;
		}

		// const targetValue = parseInt(element.textContent, 10);
		const targetValue = parseInt(element.getAttribute('data-target'), 10);
		if (isNaN(targetValue)) {
			console.error(`Element content is not a number.`);
			return;
		}

		const startTime = performance.now();
		const startValue = 1;

		function updateValue(currentTime) {
			const elapsedTime = currentTime - startTime;
			const progress = Math.min(elapsedTime / duration, 1);
			const currentValue = Math.floor(progress * (targetValue - startValue) + startValue);

			element.textContent = currentValue;

			if (progress < 1) {
				requestAnimationFrame(updateValue);
			}
		}

		requestAnimationFrame(updateValue);
	}
	// Example usage
	// animateValue(element, 2000);

	$(window).load(function () {
		let infoItemAnimation = function (entry) {
			animateValue(entry.target, 2000);
		}
		$('#top-btn').on('click', () => {
			document.navigateFunc($('body'));
		})

		// Video player
		$('.play-btn').on('click', function () {
			let button = $(this),
				videoWrapper = button.closest('.video-wrapper'),
				video = button.siblings('video').get(0);

			videoWrapper.addClass('play')
			setTimeout(() => {
				video.play();
				button.fadeOut();
			}, 1000)
		});

		$('.video-wrapper video').on('click', function () {
			let video = $(this).get(0),
				videoWrapper = $(this).closest('.video-wrapper'),
				button = $(this).siblings('.play-btn');

			videoWrapper.removeClass('play');
			setTimeout(() => {
				video.pause();
				button.fadeIn();
			}, 1000);
		});

		// Header menu
		const openMenu = function (el) {
			$('body').addClass('menu-open');
			$('.header-menu').addClass('header-menu--opened');
			$(el).addClass('opened');
			$('#mobile-menu-wrapper').slideDown();
		}
		const closeMenu = function (el) {
			$('.header-menu').removeClass('header-menu--opened');
			$('#mobile-menu-wrapper').slideUp();
			$('body').removeClass('menu-open');
			$(el).removeClass('opened');
		}
		$('.header-menu-btn').on('click', function () {
			if (!$('body').hasClass('menu-open')) {
				openMenu(this);
			}
			else {
				closeMenu(this);
			}
		})
		const checkMenu = function () {
			if ($('body').width() >= 992) {
				closeMenu();
			}
		}

		$(window).resize(function () {
			checkMenu();
		});

		$(window).on('scroll', function () {
			if ($(window).scrollTop() > 500) {
				if (!$('#top-btn').hasClass('vissible')) {
					$('#top-btn').addClass('vissible');
				}
			}
			else {
				if ($('#top-btn').hasClass('vissible')) {
					$('#top-btn').removeClass('vissible');
				}
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

		// wow = new WOW(
		// 	{
		// 		boxClass: 'wow',      // default
		// 		animateClass: 'animated', // default
		// 		offset: 0,          // default
		// 		mobile: false,       // default
		// 		live: true        // default
		// 	}
		// )
		// wow.init();

		$('.open-popup').on('click', function () {
			let target = $(this).attr('data-target');
			$(`.popup-wrapper--${target}`).fadeIn(500);
			$('body').addClass('popup-open');
		})
		$('.popup__close').on('click', function () {
			let popupWrapper = $(this).closest('.popup-wrapper');
			popupWrapper.fadeOut(500);
			$('body').removeClass('popup-open');
		})

		document.addEventListener('wpcf7mailsent', function (event) {
			if ( '171' == event.detail.contactFormId ) { // 171 - main form id
				fbq('track', 'Lead');
			}
		}, false);
	});
})(jQuery);
