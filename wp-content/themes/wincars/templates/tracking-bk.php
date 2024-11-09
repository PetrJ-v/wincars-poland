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
			<div class="api-container">
				<div class="car-api mt-30-44">
					<div class="main-top-bar">
						<button class="main-top-bar__close img-wrapper" aria-label="close popup">
							<svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect x="9.3913" y="8.28638" width="25" height="1.5625" transform="rotate(45 9.3913 8.28638)" fill="#4E4949" />
								<rect x="27.069" y="9.39124" width="25" height="1.5625" transform="rotate(135 27.069 9.39124)" fill="#4E4949" />
							</svg>
						</button>
					</div>
					<div class="car-ap-content">
						<h1 class="car-api__title">Unit Status Report</h1>
						<div class="info-row car-api__info-row">
							<div class="info-col">
								<div class="info-col-bar">
									<h2 class="info-col-bar-title">Unit Information</h2>
								</div>
								<div class="info-col-content">
									<div class="info-col-line">
										<div class="info-col-line__title">Description</div>
										<div class="info-col-line__text">Description</div>
									</div>
									<div class="info-col-line">
										<div class="info-col-line__title">Auction:</div>
										<div class="info-col-line__text">Copart</div>
									</div>
									<div class="info-col-line">
										<div class="info-col-line__title">Auction Location:</div>
										<div class="info-col-line__text">FAIRBURN (GA) 30213</div>
									</div>
									<div class="info-col-line">
										<div class="info-col-line__title">Lot Number:</div>
										<div class="info-col-line__text">70217814</div>
									</div>
									<div class="info-col-line">
										<div class="info-col-line__title">Purchase Date:</div>
										<div class="info-col-line__text">10/07/2024</div>
									</div>
								</div>
							</div>
						</div>
						<div class="info-row info-row--col-2 car-api__info-row">
							<div class="info-col">
								<div class="info-col-bar">
									<h2 class="info-col-bar-title">Additional Details</h2>
								</div>
								<div class="info-col-content">
									<div class="info-col-line">
										<div class="info-col-line__title">Los Angeles, CA</div>
										<div class="info-col-line__text">Description</div>
									</div>
									<div class="info-col-line">
										<div class="info-col-line__title">Promised Delivery Date:</div>
										<div class="info-col-line__text">10/15/2024</div>
									</div>
									<div class="info-col-line">
										<div class="info-col-line__title">Actual Delivery Date:</div>
										<div class="info-col-line__text">10/11/2024</div>
									</div>
									<div class="info-col-line">
										<div class="info-col-line__title">Keys:</div>
										<div class="info-col-line__text">Keys Present</div>
									</div>
									<div class="info-col-line">
										<div class="info-col-line__title">Ownership Document:</div>
										<div class="info-col-line__text">Title - VALID</div>
									</div>
									<div class="info-col-line">
										<div class="info-col-line__title">VIN:</div>
										<div class="info-col-line__text">KM8KN4DE0RU263503</div>
									</div>
									<div class="info-col-line">
										<div class="info-col-line__title">Make:</div>
										<div class="info-col-line__text"> Hyundai</div>
									</div>
									<div class="info-col-line">
										<div class="info-col-line__title">Model:</div>
										<div class="info-col-line__text">IONIQ 5</div>
									</div>
									<div class="info-col-line">
										<div class="info-col-line__title">Year:</div>
										<div class="info-col-line__text">2024</div>
									</div>
								</div>
							</div>
							<div class="info-col">
								<div class="info-col-bar">
									<h2 class="info-col-bar-title">Container Info</h2>
								</div>
								<div class="info-col-content">
									<div class="info-col-line">
										<div class="info-col-line__title">Container No:</div>
										<div class="info-col-line__text"></div>
									</div>
									<div class="info-col-line">
										<div class="info-col-line__title">Shipped Date:</div>
										<div class="info-col-line__text"></div>
									</div>
									<div class="info-col-line">
										<div class="info-col-line__title">Arrival Date:</div>
										<div class="info-col-line__text"></div>
									</div>
									<div class="info-col-line">
										<div class="info-col-line__title">Shipping Line:</div>
										<div class="info-col-line__text"></div>
									</div>
								</div>
							</div>
						</div>
						<?php
						$car_images = [];
						for ($i = 1; $i < 19; $i++) {
							$thumb_img_url = get_stylesheet_directory_uri() . '/assets/img/cargoloop-api/' . $i . '.jpg';
							$full_img_url = get_stylesheet_directory_uri() . '/assets/img/cargoloop-api/' . $i . '-full.jpg';
							$car_images[] = [
								'thumb_img_url' => $thumb_img_url,
								'full_img_url' => $full_img_url,
							];
						}
						?>
						<div class="info-row car-api__info-row">
							<div class="info-col">
								<div class="info-col-bar">
									<h2 class="info-col-bar-title">Photos</h2>
								</div>
								<div class="info-col-content">
									<div class="car-gallery">
										<?php foreach ($car_images as $car_image) : ?>
											<a class="car-gallery__item cover-img" data-fancybox="car-gallery" href="<?php echo esc_url($car_image['full_img_url']); ?>">
												<img src="<?php echo esc_url($car_image['thumb_img_url']); ?>">
											</a>
										<?php endforeach; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<?php get_footer(); ?>

</body>

</html>
