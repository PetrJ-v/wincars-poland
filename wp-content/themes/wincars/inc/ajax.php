<?php



$username = 'wincars';
$password = 'McLaren2!24';

function get_main_info_from_cargoloop($vin)
{
	// API URL
	$url = "https://www.cargoloop.com:8081/SVehicle.asmx";
	// vin wxample "KM8KN4DE0RU263503"
	if ($vin) {

		$username = 'wincars';
		$password = 'McLaren2!24';

		// SOAP-запрос
		$xmlRequest = <<<XML
		<?xml version="1.0" encoding="utf-8"?>
		<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
						xmlns:xsd="http://www.w3.org/2001/XMLSchema"
						xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
		<soap12:Body>
			<GetVehicleDetailsByAccount xmlns="http://www.cargoloop.com/">
			<VINorLot>{$vin}</VINorLot>
			<Username>{$username}</Username>
			<Password>{$password}</Password>
			</GetVehicleDetailsByAccount>
		</soap12:Body>
		</soap12:Envelope>
		XML;

		// Настройки cURL
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, [
			"Content-Type: application/soap+xml; charset=utf-8",
			"Content-Length: " . strlen($xmlRequest)
		]);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlRequest);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

		// Выполнение запроса и получение ответа
		$response = curl_exec($ch);

		// Проверка ошибок
		if ($response === false) {
			$error = curl_error($ch);
			echo "cURL Error: $error";
		} else {
			// Парсинг XML-ответа
			$xml = simplexml_load_string($response);

			// Проверяем наличие пространства имен "soap12"
			$namespaces = $xml->getNamespaces(true);

			// Если ключ "soap12" не существует, пробуем получить первый доступный ключ
			$soapNamespace = $namespaces['soap12'] ?? reset($namespaces);

			// Получаем тело ответа
			$body = $xml->children($soapNamespace)->Body ?? null;

			// Проверка наличия элемента Body
			if ($body !== null) {
				// Извлекаем результат GetVehicleDetailsByAccountResult
				$result = $body->children()->GetVehicleDetailsByAccountResponse->GetVehicleDetailsByAccountResult;

				// Преобразуем результат в массив
				$main_info = [];
				$i = 0;
				foreach ($result->children() as $key => $value) {
					$main_info[$i] = [
						'title' => (string)$key,
						'text' => (string)$value,
					];
					$i++;
				}

				$response = $main_info;
			} else {
				$response = "Ошибка: Не удалось найти элемент Body в ответе.";
			}
		}
		// Завершение сеанса cURL
		curl_close($ch);
	}
	else {
		$response = 'No vin found';
	}

	return $response;
}

function get_foto_from_cargoloop($id = null)
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
	return $car_images;
}

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
	check_ajax_referer('tracking_ajax_nonce', 'security');
	$vin = ($_POST['vin']) ? $_POST['vin'] : null;
	// $api_errors = [];
	$main_info = get_main_info_from_cargoloop($vin);
	$main_info = (is_array($main_info)) ? $main_info : null;
	$car_images = get_foto_from_cargoloop();

	// $id = $main_info[0]['text'];

	$car_info = [
		'car_api_title' => 'Unit Status Report',
		'main_info_title' => 'Unit Information',
		'main_info' => $main_info,
		'additional_info_title' => 'Additional Details',
		'additional_info' => [
			0 => [
				'title' => 'Terminal',
				'text' => 'Los Angeles, CA'
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
		'container_info_title' => 'Container Info',
		'container_info' => [
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
	$api_answer = [
		'error' => false,
		'car_info' => $car_info
	];
	$car_info = $api_answer['car_info'];
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
