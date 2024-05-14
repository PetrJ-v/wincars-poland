(function ($) {
	document.navigateFunc = function (destination, topMargin = false) {
		topMargin = (topMargin) ? topMargin : 0;
		if ($(destination).length != 0) {
			$('html, body').animate({ scrollTop: $(destination).offset().top - topMargin }, 800, 'linear') // анимируем скроолинг к элементу destination
		}
	};
	if ($('body').hasClass('blog') || $('body').hasClass('category')) {
		$(window).scroll(function () {
			if ($(window).scrollTop() > 700) {
				$('.footer-corner__link').addClass('visible');
			}
			else
				$('.footer-corner__link').removeClass('visible');
		})

	}
	$(window).load(function () {
		if ($('.tabs')) {
			let currentLocation = window.location.href;
			$('.tabs a').each(function(){
				if ($(this).attr('href') === currentLocation) {
					$(this).addClass('active');
				}
			})

		}
		$('#top-btn').on('click', () => {
			document.navigateFunc($('body'));
		})
		$('#menu-btn').on('click', () => {
			$('.nav').addClass('active');
			$('.main').addClass('active-menu');
		})
		$('#nav-close-btn').on('click', () => {
			$('.nav').removeClass('active');
			$('.main').removeClass('active-menu');
		})
		$('.project__left-img').on('click', function(){
			console.log($('body').width());
			if ($('body').width() > 767.98) {
				let targetName = '.' + $(this).data('popup'),
					target = $(targetName);
				if (target.length !=0) {
					target.fadeIn();
					$('body').addClass('blured');
					target.on('click', () => {
						target.fadeOut();
						$('body').removeClass('blured');
					})
				}
			}
		})

		let needAnimation = $('.fade-in-animation'),
			timeOut = ($('.contacts-page').length != 0) ? 300 : 500;

		needAnimation.each(function(index){
			let step = index + 1;
			setTimeout(function(){
				$(needAnimation[index]).addClass('faded');
			}, timeOut * step);
		})
	});
})(jQuery);
