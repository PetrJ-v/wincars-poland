(function ($) {

	const isValidVIN = function(vin) {
		// Check length
		if (vin.length !== 17) {
			return false;
		}

		// Symbols I, O, Q are not allowed.
		const invalidChars = ['I', 'O', 'Q'];
		for (let char of invalidChars) {
			if (vin.includes(char)) {
				return false;
			}
		}

		// Weight table for each VIN position
		const weights = [8, 7, 6, 5, 4, 3, 2, 10, 0, 9, 8, 7, 6, 5, 4, 3, 2];

		// Table of values ​​for VIN symbols
		const transliteration = {
			A: 1, B: 2, C: 3, D: 4, E: 5, F: 6, G: 7, H: 8,
			J: 1, K: 2, L: 3, M: 4, N: 5, P: 7, R: 9,
			S: 2, T: 3, U: 4, V: 5, W: 6, X: 7, Y: 8, Z: 9,
			1: 1, 2: 2, 3: 3, 4: 4, 5: 5, 6: 6, 7: 7, 8: 8, 9: 9, 0: 0
		};

		// Function for calculating the check digit
		function calculateCheckDigit(vin) {
			let sum = 0;
			for (let i = 0; i < vin.length; i++) {
				const char = vin[i].toUpperCase();
				const value = transliteration[char];
				if (value === undefined) {
					return false; // If invalid characters are found
				}
				sum += value * weights[i];
			}
			const remainder = sum % 11;
			return remainder === 10 ? 'X' : remainder.toString();
		}

		// Check digit verification (9th position)
		const checkDigit = vin[8].toUpperCase();
		const calculatedCheckDigit = calculateCheckDigit(vin);

		return checkDigit === calculatedCheckDigit;
	}

	// vin for test 1FA6P0HD2E5369469
	// should return container number TCKU6592715

	$('#tracking-form').on('submit', function (e) {
		e.preventDefault();

		const vin = $('#tracking').val();

		if (isValidVIN(vin)) {
			let data = {
				action: "get_cnum_by_vin",
				vin: vin,
			};
			$.ajax({
				url: ajax_params.ajax_url,
				type: "post",
				data: data,
				success: function (response) {

					let responseData = JSON.parse(response);

					if (responseData.status != 'error') {

						let containerNumnber = responseData.container_number;
						window.location = 'https://www.wincars.bg/tracking/?number=' + containerNumnber;
					} else {
						$('.tracking-form-message').fadeIn();
						console.log(responseData.error);
					}
				},
			});

		}
		else {
			$('.tracking-form-message').fadeIn();
		}

	})
})(jQuery);
