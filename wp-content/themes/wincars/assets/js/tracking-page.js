(function ($) {

	const loadFancybox = function () {
		// Проверяем, загружен ли Fancybox
		if (!window.jQuery || !jQuery.fancybox) {
			// Подключаем CSS файл
			let link = document.createElement('link');
			link.rel = 'stylesheet';
			link.href = 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css';
			document.head.appendChild(link);

			// Подключаем JS файл
			let script = document.createElement('script');
			script.src = 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js';
			script.onload = function () {
				// Инициализируем Fancybox после загрузки скрипта
				initializeFancybox();
			};
			document.body.appendChild(script);
		} else {
			// Если Fancybox уже подключен, просто инициализируем
			initializeFancybox();
		}
	}

	const initializeFancybox = function () {
		$('[data-fancybox="car-gallery"]').fancybox({
			buttons: [
				"slideShow",
				"thumbs",
				"zoom",
				"fullScreen",
				"share",
				"download",
				"close"
			],
			thumbs: {
				autoStart: true,
				axis: 'x',
			},
			loop: false,
			protect: true
		});
	}

	//KM8KN4DE0RU263503

	$(document).ready(function () {
		// Get current URL
		const urlParams = new URLSearchParams(window.location.search);

		// Get vin from url
		const vin = urlParams.get('vin');

		$.ajax({
			url: ajax_params.ajax_url,
			type: 'POST',
			data: {
				action: 'get_car_info',
				security: ajax_params.security, // Nonce for security
				vin: vin,
			},
			success: function (response) {
				if (response.success) {
					$('.api-container').append(response.car_info);
					if ($('.car-gallery').length != 0) {
						// console.log('it is here');
						// loadFancybox();
						initializeFancybox();
					}
					$('.get-more').css('display', 'flex');
					setTimeout(() => {

					}, 100)
				} else {
					console.log('Ошибка:', response.message);
				}
			},
			error: function (error) {
				console.log('Ошибка AJAX запроса:', error);
			}
		});

	});
	$('#get-more-btn').on('click', function () {
		$('.api-container').fadeIn();
		$('body').addClass('popup-open');
	});
	$('body').on('click', '#car-api-close', function () {
		$('.api-container').fadeOut();
		$('body').removeClass('popup-open');
	})

})(jQuery);
