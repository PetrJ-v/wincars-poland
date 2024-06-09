<?php get_header(); ?>

<body <?php body_class(); ?>>
	<main>
		<?php if (is_user_logged_in()) : ?>
			<?php
			$сar_brand = get_field('сar_brand');
			$сar_brand_font_size = get_field('сar_brand_font_size');

			$car_model_and_year = get_field('car_model_and_year');

			$forbidden = '\/:*?"<>|+%!@';
			$collage_save_name = preg_replace("/[$forbidden]/", '', $car_model_and_year);
			$collage_save_name = strtolower($collage_save_name);
			$collage_save_name = str_replace(' ', '-', $collage_save_name) . '.png';

			# Separate the title into words
			$car_model_and_year_words = explode(' ', $car_model_and_year);
			$car_model_font_size = get_field('car_model_font_size');

			$price = get_field('price');
			$price_font_size = get_field('price_font_size');

			$top_images = get_field('top_images');
			$top_image_left = $top_images['top_left_image'];
			$top_image_right = $top_images['top_right_image'];

			$center_image = get_field('center_image');
			$center_image_item = $center_image['center_image_item'];

			$bottom_images = get_field('bottom_images');
			$bottom_image_left = $bottom_images['bottom_left_image'];
			$bottom_image_right = $bottom_images['bottom_right_image'];
			?>
			<div class="collage" id="photo">
				<div class="collage-header">
					<div class="collage-info">
						<style>
							.collage-info__title {
								font-size: <?php echo $сar_brand_font_size . 'px'; ?>;
							}

							.collage-info__m-y {
								font-size: <?php echo $car_model_font_size . 'px'; ?>;
							}

							.collage-info__price {
								font-size: <?php echo $price_font_size . 'px'; ?>;
							}
						</style>

						<div class="collage-info__title"><?php echo $сar_brand; ?></div>
						<?php if ($car_model_and_year_words) : ?>
							<div class="collage-info__m-y">
								<?php foreach ($car_model_and_year_words as $word) : ?>
									<span><?php echo $word; ?></span>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>

						<?php if ($price) : ?>
							<div class="collage-info__price"><?php echo $price . ' ЛЕВА'; ?></div>
						<?php endif; ?>
					</div>
					<div class="collage-logo img-wrapper">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-272.png" alt="wincars logo">
					</div>
				</div>
				<div class="collage-body">
					<div class="collage-body__top">
						<div class="collage-body-img collage-body-img--top-left">
							<style>
								.collage-body-img--top-left {
									background: url('<?php echo $top_image_left; ?>') no-repeat;
								}
							</style>
						</div>
						<div class="collage-body-img collage-body-img--top-right">
							<style>
								.collage-body-img--top-right {
									background: url('<?php echo $top_image_right; ?>') no-repeat;
								}
							</style>
							<div class="deco-lines img-wrapper">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/collage/right-lines.png">
							</div>
						</div>
						<div class="body-top-deco img-wrapper">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/collage/wincars-text.png" alt="">
						</div>
					</div>
					<div class="collage-body__center">
						<div class="collage-body-img collage-body-img--center">
							<style>
								.collage-body-img--center {
									background: url('<?php echo $center_image_item; ?>') no-repeat;
								}
							</style>
						</div>
					</div>
					<div class="collage-body__bottom">
						<div class="body-bottom-deco img-wrapper">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/collage/wincars-text.png" alt="">
						</div>
						<div class="collage-body-img collage-body-img--bottom-left">
							<style>
								.collage-body-img--bottom-left {
									background: url('<?php echo $bottom_image_left; ?>') no-repeat;
								}
							</style>
							<div class="deco-lines img-wrapper">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/collage/left-lines.png">
							</div>
						</div>
						<div class="collage-body-img collage-body-img--bottom-right">
							<style>
								.collage-body-img--bottom-right {
									background: url('<?php echo $bottom_image_right; ?>') no-repeat;
								}
							</style>
						</div>
					</div>
				</div>
			</div>
			<button class="take-screen" id="take-screen">Get image from collage</button>
			<script type="text/javascript">
				window.addEventListener("load", () => {
					takeScreenBtn = document.getElementById('take-screen');
					takeScreenBtn.addEventListener('click', () => {
						let div = document.getElementById('photo');
						html2canvas(div, {
							scrollY: (window.pageYOffset * -1),
							scale: 1
						}).then(
							function(canvas) {
								const link = document.createElement('a');
								link.download = '<?php echo $collage_save_name; ?>';
								link.href = canvas.toDataURL("image/jpeg", 1.0);
								link.click();
								link.delete;
							}
						)
					})
				});
			</script>

		<?php else : ?>
			<div class="no-access-container">
				<div class="no-access">
					<h1 class="no-access__title">Нямате достъп до тази страница</h1>
					<div class="no-access__text">Моля, влезте в <a href="/wp-admin/" class="no-access__link">админ панела</a></div>
				</div>
			</div>
		<?php endif; ?>
	</main>
	<footer>
		<?php wp_footer(); ?>
	</footer>
</body>

</html>
