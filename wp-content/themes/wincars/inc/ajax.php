<?php
add_action('wp_ajax_get_cnum_by_vin', 'get_cnum_by_vin');
add_action('wp_ajax_nopriv_get_cnum_by_vin', 'get_cnum_by_vin');

function get_cnum_by_vin()
{
	// API URL
	$url = "https://www.cargoloop.com:8081/SVehicle.asmx";

	// SOAP XML for sending
	// $vin = "KM8KN4DE0RU263503";
	$vin = $_POST['vin'];
	$xml_data = '<?xml version="1.0" encoding="utf-8"?>
				<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
							xmlns:xsd="http://www.w3.org/2001/XMLSchema"
							xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
				<soap:Body>
					<GetContainerNumber xmlns="http://www.cargoloop.com/">
					<VIN>' . $vin . '</VIN>
					</GetContainerNumber>
				</soap:Body>
				</soap:Envelope>';

	// Headers for SOAP-request
	$headers = [
		"Content-Type: text/xml; charset=utf-8",
		"Content-Length: " . strlen($xml_data),
		"SOAPAction: \"http://www.cargoloop.com/GetContainerNumber\"",
	];

	// cURL init
	$ch = curl_init($url);

	// Setup cURL
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_data);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	// Выполнение запроса и получение ответа
	$response = curl_exec($ch);

	// Check for errors
	if (curl_errno($ch)) {
		// echo 'Ошибка cURL: ' . curl_error($ch);
		$result = [
			'status' => 'error',
			'error' => curl_error($ch),
		];
	} else {
		$xml = simplexml_load_string($response);
		$namespaces = $xml->getNamespaces(true);

		// Переход в элемент soap:Body с использованием пространства имен
		$body = $xml->children($namespaces['soap'])->Body;

		// Переход в элемент GetContainerNumberResponse с использованием его пространства имен
		$response = $body->children('http://www.cargoloop.com/')->GetContainerNumberResponse;

		// Извлечение значения из тега GetContainerNumberResult
		$container_number = (string)$response->GetContainerNumberResult;
		$result = [
			'status' => 'ok',
			'container_number' => $container_number
		];
	}

	// Закрытие cURL
	curl_close($ch);
	echo json_encode($result);
	die();
}

add_action('wp_ajax_get_car_info', 'get_car_info');
add_action('wp_ajax_nopriv_get_car_info', 'get_car_info');

function get_car_info()
{
	$car_images = [];
	for ($i = 1; $i < 19; $i++) {
		$thumb_img_url = get_stylesheet_directory_uri() . '/assets/img/cargoloop-api/' . $i . '.jpg';
		$full_img_url = get_stylesheet_directory_uri() . '/assets/img/cargoloop-api/' . $i . '-full.jpg';
		$car_images[] = [
			'thumb_img_url' => $thumb_img_url,
			'full_img_url' => $full_img_url,
		];
	}
	$car_info = [
		'car_api_title' => 'Unit Status Report',
		'main_info_title' => 'Unit Information',
		'main_info' => [
			0 => [
				'title' => 'Description',
				'text' => 'Description'
			],
			1 => [
				'title' => 'Auction:',
				'text' => 'Copart'
			],
			2 => [
				'title' => 'Auction Location:',
				'text' => 'FAIRBURN (GA) 30213'
			],
			3 => [
				'title' => 'Lot Number:',
				'text' => '70217814'
			],
			4 => [
				'title' => 'Purchase Date:',
				'text' => '10/07/2024'
			],
		],
		'additional_info_title' => 'Additional Details',
		'additional_info' => [
			0 => [
				'title' => 'Los Angeles, CA',
				'text' => 'Description'
			],
			1 => [
				'title' => 'Promised Delivery Date:',
				'text' => '10/15/2024'
			],
			2 => [
				'title' => 'Actual Delivery Date:',
				'text' => '10/11/2024'
			],
			3 => [
				'title' => 'Keys:',
				'text' => 'Keys Present'
			],
			4 => [
				'title' => 'Ownership Document:',
				'text' => 'Title - VALID'
			],
			5 => [
				'title' => 'VIN:',
				'text' => 'KM8KN4DE0RU263503'
			],
			6 => [
				'title' => 'Make:',
				'text' => 'Hyundai'
			],
			6 => [
				'title' => 'Model:',
				'text' => 'IONIQ 5'
			],
			7 => [
				'title' => 'Year:',
				'text' => '2024'
			],
		],
		'contailner_info_title' => 'Container Info',
		'contailner_info' => [
			0 => [
				'title' => 'Container No:',
				'text' => ''
			],
			1 => [
				'title' => 'Shipped Date:',
				'text' => ''
			],
			2 => [
				'title' => 'Arrival Date:',
				'text' => ''
			],
			3 => [
				'title' => 'Shipping Line:',
				'text' => ''
			],
		],
		'car_images_title' => 'Photos',
		'car_images' => $car_images,
	];
}
