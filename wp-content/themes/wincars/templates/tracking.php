<?php
#Template Name: Tracking
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>
	<header>
		<div class="header">
			<div class="header-container">
				<?php get_template_part('template-parts/header-top-line'); ?>
			</div>
		</div>
	</header>

	<main>
		<div class="container">
			<div class="tracking-wrapper">
				<div class="tracking-search-wrapper">
					<form class="tracking-search" id="tracking-form">
						<input id="tracking" type="text" class="tracking-search__input" name="track-input" size="1" id="track-input" required placeholder="Въведете VIN">
						<div class="tracking-search__btn-wrapper">
							<button type="submit" class="tracking-search__btn accent-btn">Търсене</button>
						</div>
						<div class="tracking-search__message tracking-form-message">
							Vin номера е не намерен
						</div>
					</form>
				</div>
				<!-- <div id="tracking_system_root" data-filter='{"platform":13446, "lang": "en"}'></div>
				<script src=https://www.searates.com/container/widget></script> -->
			</div>
			<div class="popup-test">
				<!-- <div class="get-more">
					<button id="get-more-btn" class="get-more__btn">Повече информация</button>
				</div> -->
				<?php
				function push_new_arr_element($dateFormat, $key, $value) {
					if ($dateFormat) {
						$date = new DateTime((string)$value);
						$value_string = $date->format('d.m.Y'); // dd.mm.yyyy
					}
					else {
						$value_string = (string)$value;
					}
					$text_array = [
						'title' => (string)$key,
						'text' => $value_string,
					];
					return $text_array;
				}

				function get_text_array($data_object, $includeArr = null, $excludeArr = null, $dateFormat = null)
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
									$text_array[$i] = push_new_arr_element($dateFormat, $key, $value);
									$i++;
								}
								break;
							case isset($excludeArr):
								// Add elements only if they are not in $excludeArr
								if (!in_array((string)$key, $excludeArr, true)) {
									$text_array[$i] = push_new_arr_element($dateFormat, $key, $value);
									$i++;
								}
								break;
							default:
								$text_array[$i] = push_new_arr_element($dateFormat, $key, $value);
								$i++;
								break;
						}
					}
					return $text_array;
				}
				$id = '687246';
				$username = 'wincars';
				$password = 'McLaren2!24';

				// URL API
				$url = "https://www.cargoloop.com:8081/SVehicle.asmx";

				// Данные для SOAP-запроса
				$xml_data = '<?xml version="1.0" encoding="utf-8"?>
					<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
					<soap:Body>
						<GetVehicleByIdFull xmlns="http://www.cargoloop.com/">
						<Username>' . $username . '</Username>
						<Password>' . $password . '</Password>
						<ID>' . $id . '</ID>
						</GetVehicleByIdFull>
					</soap:Body>
				</soap:Envelope>';

				// Инициализируем cURL с нужными заголовками
				$ch = curl_init($url);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_HTTPHEADER, [
					"Content-Type: text/xml; charset=utf-8",
					"SOAPAction: http://www.cargoloop.com/GetVehicleByIdFull"
				]);
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_data);

				// Отправляем запрос и получаем ответ

				$response = curl_exec($ch);

				// Проверка ошибок curl
				if (curl_errno($ch)) {
					echo 'cURL Error: ' . curl_error($ch);
					curl_close($ch);
					exit;
				}

				curl_close($ch);

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
					$result = $body->children()->GetVehicleByIdFullResponse->GetVehicleByIdFullResult;
					// $result have such objects: Vehicle, Shipment, Dispatch, AuctionPhotos, TerminalPhotos
					// $vehicle = $result->Vehicle;
					// $dispatch = $result->Dispatch;
					$auctionPhotos = $result->AuctionPhotos;
					$terminalPhotos = $result->TerminalPhotos;
					// In Delivery i want have
					// 	Shipment - all, from Dispatch - PromisedDelDate, ActualDeliveryDate
					// 	Container all
					// Dispatch


					// Преобразуем результат в массив
					$shipment = get_text_array($result->Shipment);
					$dispatch = get_text_array($result->Dispatch, ['PromisedDelDate', 'ActualDeliveryDate'], null, 'dateTime');
					$container = get_text_array($result->Container, ['ContainerNo', 'ShippingLine']);
					$container_dates = get_text_array($result->Container, ['ShippedDate', 'ArrivalDate'], null, 'dateTime');
					$delivery = array_merge($shipment, $dispatch, $container, $container_dates);

					$auction_images = [];
					foreach ($auctionPhotos->children() as $image_url) {
						$auction_images[] = (string)$image_url->URL;
					}
					$terminal_images = [];
					foreach ($terminalPhotos->children() as $image_url) {
						$terminal_images[] = (string)$image_url->URL;
					}

					$response = [
						'delivery'	=> $delivery,
						'auction_images' => $auction_images,
						'terminal_images' => $terminal_images
					];
				} else {
					$response = "Ошибка: Не удалось найти элемент Body в ответе.";
				}
				echo '<pre>';
				print_r($response['delivery']);
				echo '</pre>';
				?>


			</div>
		</div>
	</main>

	<?php get_footer(); ?>
	<div class="api-container"></div>

</body>

</html>
