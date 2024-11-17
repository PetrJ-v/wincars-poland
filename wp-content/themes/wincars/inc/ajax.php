<?php

require_once get_template_directory() . '/inc/cargoApi.php';

$cargoApi = new CargoloopAPI();

add_action('wp_ajax_get_cnum_by_vin', 'get_cnum_by_vin');
add_action('wp_ajax_nopriv_get_cnum_by_vin', 'get_cnum_by_vin');

function get_cnum_by_vin()
{
	// API URL
	$url = "https://www.cargoloop.com:8081/SVehicle.asmx";

	// $vin = "KM8KN4DE0RU263503";
	$vin = $_POST['vin'];

	// SOAP XML for sending
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
	$cargoApi = CargoloopAPI::getInstance();
	check_ajax_referer('tracking_ajax_nonce', 'security');

	$vin = ($_POST['vin']) ? $_POST['vin'] : null;

	$vehicleDetails = $cargoApi -> getVehicleDetailsByAccount($vin);
	$main_info = ($vehicleDetails->success) ? $vehicleDetails->data : null;

	$ID = $main_info[0]['text'];
	$deliveryData = $cargoApi -> getVehicleByIdFull($ID);
	$delivery_info = ($deliveryData->success) ? $deliveryData->data['delivery'] : null;

	$carImagesData = $cargoApi -> getVehicleImages($vin);
	$car_images = ($carImagesData->success) ? $carImagesData->data : null;

	// $id = $main_info[0]['text'];

	$car_info = [
		'car_api_title' => 'Unit Status Report',
		'main_info_title' => 'Unit Information',
		'main_info' => $main_info,
		'additional_info_title' => 'Additional Details',
		'additional_info' => $delivery_info,
		'car_images_title' => 'Photos',
		'car_images' => $car_images,
	];

	ob_start();
	get_template_part('template-parts/cargollop-data', null, $car_info);
	$car_info_html = ob_get_contents();
	ob_get_clean();
	$data = [
		'car_info' => $car_info_html,
		'success' => true,
	];
	wp_send_json($data);
	die();
}
