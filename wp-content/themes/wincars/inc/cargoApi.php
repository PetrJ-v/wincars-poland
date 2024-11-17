<?php
class CargoloopAPI
{
	private $username;
	private $password;
	private $url;

	public function __construct($username, $password, $url)
	{
		$this->username = $username;
		$this->password = $password;
		$this->url = $url;
	}

	private function sendRequest($xmlRequest)
	{
		$ch = curl_init($this->url);

		// cURL setup
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlRequest);
		curl_setopt($ch, CURLOPT_HTTPHEADER, [
			"Content-Type: application/soap+xml; charset=utf-8; action=\"\"",
			"Content-Length: " . strlen($xmlRequest)
		]);

		$response = curl_exec($ch);

		// Проверка на наличие ошибок cURL
		if (curl_errno($ch)) {
			$errorMessage = curl_error($ch);
			curl_close($ch);
			return (object)[
				'success' => false,
				'data' => null,
				'error' => $errorMessage
			];
		}

		// Проверка HTTP-кода ответа
		$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);

		// Если HTTP-код не 200, возвращаем ошибку
		if ($httpCode !== 200) {
			return (object)[
				'success' => false,
				'data' => null,
				'error' => "HTTP Error: {$httpCode}"
			];
		}

		// Возвращаем успешный ответ
		return (object)[
			'success' => true,
			'data' => $response,
			'error' => null
		];
	}


	private function pushNewArrayElement($dateFormat, $key, $value)
	{
		if ($dateFormat) {
			$date = new DateTime((string)$value);
			$value_string = $date->format('d.m.Y'); // dd.mm.yyyy
		} else {
			$value_string = (string)$value;
		}
		$text_array = [
			'title' => (string)$key,
			'text' => $value_string,
		];
		return $text_array;
	}

	private function getTextArray($data_object, $includeArr = null, $excludeArr = null, $dateFormat = null)
	{
		if (!$data_object || !is_object($data_object)) {
			exit;
		}
		$text_array = [];
		$i = 0;

		foreach ($data_object->children() as $key => $value) {
			switch (true) {
				case isset($includeArr):
					// Add elements only if they are in $includeArr
					if (in_array((string)$key, $includeArr, true)) {
						$text_array[$i] = $this->pushNewArrayElement($dateFormat, $key, $value);
						$i++;
					}
					break;
				case isset($excludeArr):
					// Add elements only if they are not in $excludeArr
					if (!in_array((string)$key, $excludeArr, true)) {
						$text_array[$i] = $this->pushNewArrayElement($dateFormat, $key, $value);
						$i++;
					}
					break;
				default:
					$text_array[$i] = $this->pushNewArrayElement($dateFormat, $key, $value);
					$i++;
					break;
			}
		}
		return $text_array;
	}

	private function getImageUrls($photos)
	{
		$images = [];
		foreach ($photos->children() as $imageUrl) {
			$images[] = (string)$imageUrl->URL;
		}
		return $images;
	}

	private function parseResponseVehicleByIdFull($cargoResponse)
	{
		if (!$cargoResponse->success) {
			return $cargoResponse;
		}
		// if $cargoResponse have no errors
		$cargoData = $cargoResponse->data;
		$xml = simplexml_load_string($cargoData);
		$namespaces = $xml->getNamespaces(true);
		$soapNamespace = $namespaces['soap12'] ?? reset($namespaces);
		$body = $xml->children($soapNamespace)->Body ?? null;

		if ($body === null) {
			return "Ошибка: Не удалось найти элемент Body в ответе.";
		}

		$result = $body->children()->GetVehicleByIdFullResponse->GetVehicleByIdFullResult;
		$auctionPhotos = $result->AuctionPhotos;
		$terminalPhotos = $result->TerminalPhotos;
		$loadingPhotos = $result->LoadingPhotos;
		$uploadingPhotos = $result->UnloadingPhotos;

		$shipment = $this->getTextArray($result->Shipment);
		$dispatch = $this->getTextArray($result->Dispatch, ['PromisedDelDate', 'ActualDeliveryDate'], null, 'dateTime');
		$container = $this->getTextArray($result->Container, ['ContainerNo', 'ShippingLine']);
		$containerDates = $this->getTextArray($result->Container, ['ShippedDate', 'ArrivalDate'], null, 'dateTime');
		$delivery = array_merge($shipment, $dispatch, $container, $containerDates);

		$auctionImages = $this->getImageUrls($auctionPhotos);
		$terminalImages = $this->getImageUrls($terminalPhotos);
		$loadingImages = $this->getImageUrls($loadingPhotos);
		$uploadingImages = $this->getImageUrls($uploadingPhotos);

		$response = (object)[
			'success' => true,
			'data' => [
				'delivery' => $delivery,
				'auction_images' => $auctionImages,
				'terminal_images' => $terminalImages,
				'loading_images' => $loadingImages,
				'uploading_images' => $uploadingImages
			],
			'error' => null
		];
		return $response;
	}
	private function parseVehicleDetailsByAccount($cargoResponse)
	{
		if (!$cargoResponse->success) {
			return $cargoResponse;
		}
		// if $cargoResponse have no errors
		$cargoData = $cargoResponse->data;
		$xml = simplexml_load_string($cargoData);

		// Проверяем наличие пространства имен "soap12"
		$namespaces = $xml->getNamespaces(true);

		// Если ключ "soap12" не существует, пробуем получить первый доступный ключ
		$soapNamespace = $namespaces['soap12'] ?? reset($namespaces);

		// Получаем тело ответа
		$body = $xml->children($soapNamespace)->Body ?? null;

		if ($body === null) {
			return $response = (object)[
				'success' => false,
				'data' => [],
				'error' => "Ошибка: Не удалось найти элемент Body в ответе."
			];
		}

		// Извлекаем результат GetVehicleDetailsByAccountResult
		$result = $body->children()->GetVehicleDetailsByAccountResponse->GetVehicleDetailsByAccountResult;
		// Get all available data
		$main_info = $this->getTextArray($result, null , ['ID', 'BookingNumber']);

		$response = (object)[
			'success' => true,
			'data' => $main_info,
			'error' => null
		];
		return $response;
	}

	public function getVehicleByIdFull($id)
	{
		$xmlRequest = <<<XML
		<?xml version="1.0" encoding="utf-8"?>
		<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
						xmlns:xsd="http://www.w3.org/2001/XMLSchema"
						xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
			<soap12:Body>
				<GetVehicleByIdFull xmlns="http://www.cargoloop.com/">
					<Username>{$this->username}</Username>
					<Password>{$this->password}</Password>
					<ID>{$id}</ID>
				</GetVehicleByIdFull>
			</soap12:Body>
		</soap12:Envelope>
		XML;

		$response = $this->sendRequest($xmlRequest);

		return $this->parseResponseVehicleByIdFull($response);
	}

	public function getVehicleDetailsByAccount($vin)
	{

		// SOAP-request
		$xmlRequest = <<<XML
			<?xml version="1.0" encoding="utf-8"?>
			<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
							xmlns:xsd="http://www.w3.org/2001/XMLSchema"
							xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
				<soap12:Body>
					<GetVehicleDetailsByAccount xmlns="http://www.cargoloop.com/">
						<Username>{$this->username}</Username>
						<Password>{$this->password}</Password>
						<VINorLot>{$vin}</VINorLot>
					</GetVehicleDetailsByAccount>
				</soap12:Body>
			</soap12:Envelope>
			XML;

		$response = $this->sendRequest($xmlRequest);
		return $this->parseVehicleDetailsByAccount($response);
	}
}
