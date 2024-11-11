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
			<!-- <div class="tracking-wrapper">
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
				<div id="tracking_system_root" data-filter='{"platform":13446, "lang": "en"}'></div>
				<script src=https://www.searates.com/container/widget></script>
			</div> -->
			<button class="accent-btn test-btn">Получить данные</button>
		</div>
		<div class="container">
			<?php
			// API URL
			$url = "https://www.cargoloop.com:8081/SVehicle.asmx";

			// SOAP XML for sending
			// $vin = "1FA6P0HD2E5369469";
			$vin = "KM8KN4DE0RU263503";
			$user_name = 'wincars';
			$password = 'McLaren2!24';

			// SOAP request
			$xml_data = '<?xml version="1.0" encoding="utf-8"?>
					<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
					<soap:Body>
						<GetVehicleDetailsByAccount xmlns="http://www.cargoloop.com/">
						<VINorLot>' . $vin . '</VINorLot>
						<Username>' . $user_name . '</Username>
						<Password>' . $password . '</Password>
						</GetVehicleDetailsByAccount>
					</soap:Body>
					</soap:Envelope>';

			// Headers for SOAP-request
			$headers = [
				"Content-Type: text/xml; charset=utf-8",
				"Content-Length: " . strlen($xml_data),
				"SOAPAction: \"http://www.cargoloop.com/GetVehicleDetailsByAccount\"",
			];
			// cURL init
			$ch = curl_init($url);

			// Setup cURL
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_data);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

			// Sending request and gettong responce
			$response = curl_exec($ch);
			$err = curl_error($ch);

			if ($err) {
				echo "Error cURL: " . $err;
			} else {
				// Parse XML-response
				$xml = simplexml_load_string($response);

				// Namespace for correct access to elements
				$namespaces = $xml->getNamespaces(true);

				// Go to response body
				$body = $xml->children($namespaces['soap'])->Body;
				$response_data = $body->children($namespaces[''])->GetVehicleDetailsByAccountResponse;
				$result = $response_data->GetVehicleDetailsByAccountResult;

				$auction = (string) $result->Auction;

				echo "Auction: " . (string) $result->Auction . "<br>";
				echo "LotNumber: " . (string) $result->LotNumber . "<br>";
				echo "Description: " . (string) $result->Description . "<br>";
				echo "ContainerNumber: " . (string) $result->ContainerNumber . "<br>";
				echo "ShippedDate: " . (string) $result->ShippedDate;
			}

			curl_close($ch);
			?>
		</div>
	</main>

	<?php get_footer(); ?>
	<div class="api-container"></div>

</body>

</html>
