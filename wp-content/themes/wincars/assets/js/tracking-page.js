(function ($) {

	$('.test-btn').on('click', function () {
		$.ajax({
			url: ajax_params.ajax_url, // Стандартная переменная WordPress для AJAX URL
			type: 'POST',
			data: {
				action: 'get_car_info',
				security: ajax_params.security, // Nonce для безопасности
			},
			success: function (response) {
				if (response.success) {
					$('.api-container').append(response.car_info);
				} else {
					console.log('Ошибка:', response.message);
				}
			},
			error: function (error) {
				console.log('Ошибка AJAX запроса:', error);
			}
		});
	});

})(jQuery);
