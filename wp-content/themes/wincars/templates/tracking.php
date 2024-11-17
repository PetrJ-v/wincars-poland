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
				require_once get_template_directory() . '/inc/cargoApi.php';

				$id = '687246';
				$username = 'wincars';
				$password = 'McLaren2!24';
				$vin = 'KM8KN4DE0RU263503';
				$url = "https://www.cargoloop.com:8081/SVehicle.asmx";

				$cargoApi = new CargoloopAPI($username, $password, $url);

				// Получаем данные по ID транспортного средства
				// $delivery = $cargoApi->getVehicleByIdFull($id);
				// if ($delivery->success) {
				// 	// Выводим ответ
				// 	echo '<pre>';
				// 	print_r($delivery->data);
				// 	echo '</pre>';
				// }
				// else {
				// 	echo $delivery->error;
				// }

				$mainInfo = $cargoApi->getVehicleDetailsByAccount($vin);
				if ($mainInfo->success) {
					// Выводим ответ
					echo '<pre>';
					print_r($mainInfo->data);
					echo '</pre>';
				}
				else {
					echo $mainInfo->error;
				}

				?>

			</div>
		</div>
	</main>

	<?php get_footer(); ?>
	<div class="api-container"></div>

</body>

</html>
