<?php
get_header();
$video_poster = get_field('video_poster');
$video_link = get_field('video');
$hero_text = get_field('small_intro_text');
?>

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
			<h1 class="car-title"><?php the_title(); ?></h1>
			<?php
			$properties_title = get_field('properties_title');
			?>
			<?php if ($properties_title || have_rows('photos')) : ?>
				<div class="car">
					<?php if (have_rows('photos')) : ?>
						<div class="car__left">
							<div class='swiper car-slider'>
								<div class='swiper-wrapper'>

									<?php while (have_rows('photos')) : the_row(); ?>
										<?php $car_img = get_sub_field('car_photo'); ?>
										<div class='swiper-slide'>
											<div class="car-slider__item cover-img">
												<?php echo wp_get_attachment_image($car_img, 'large'); ?>
											</div>
										</div>
									<?php endwhile; ?>
								</div>
								<div class='car-slider-pagination'></div>
								<div class='swiper-button-prev'>
									<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g filter="url(#filter0_b_520_638)">
											<rect x="33" y="33" width="33" height="33" rx="16.5" transform="rotate(-180 33 33)" fill="#FCB001" />
											<path d="M19.5 10.5L13.5 16.5L19.5 22.5" stroke="#FDFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</g>
									</svg>
								</div>
								<div class='swiper-button-next'>
									<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g filter="url(#filter0_b_520_639)">
											<rect width="33" height="33" rx="16.5" fill="#FCB001" />
											<path d="M13.5 22.5L19.5 16.5L13.5 10.5" stroke="#FDFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</g>
									</svg>
								</div>
							</div>
							<div class="car__left-thumbnail">
								<div class='swiper car-thumbnail-slider'>
									<div class='swiper-wrapper'>
										<?php while (have_rows('photos')) : the_row(); ?>
											<?php $car_img = get_sub_field('car_photo'); ?>
											<div class='swiper-slide'>
												<div class="car-thumbnail-item cover-img">
													<?php echo wp_get_attachment_image($car_img, 'large'); ?>
												</div>
											</div>
										<?php endwhile; ?>
									</div>
								</div>
							</div>
						</div>
					<?php endif; ?>
					<div class="car__right">
						<div class="car-info">
							<div class="car-info__title"><?php echo esc_html($properties_title); ?></div>
							<?php
							$price_title = get_field('price_title');
							$price_value = get_field('price_value');
							?>
							<?php if ($price_title || $price_value) : ?>
								<div class="car-info__price">
									<?php if ($price_title) : ?>
										<div class="car-info__price-title"><?php echo esc_html($price_title); ?></div>
									<?php endif; ?>
									<?php if ($price_value) : ?>
										<div class="car-info__price-value"><?php echo esc_html($price_value); ?>$</div>
									<?php endif; ?>
								</div>
							<?php endif; ?>

							<?php if (have_rows('property_row')) : ?>
								<?php while (have_rows('property_row')) : the_row(); ?>
									<?php
									$property_name = get_sub_field('property_name');
									$property_value = get_sub_field('property_value');
									?>
									<div class="car-info__item">
										<div class="car-info__item-name"><?php echo esc_html($property_name); ?></div>
										<div class="car-info__item-value"><?php echo esc_html($property_value); ?></div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<?php $lot_number = get_field('lot_number'); ?>
			<?php if ($lot_number || have_rows('lot_info')) : ?>
				<div class="lot">
					<div class="lot__left">
						<?php if ($lot_number) : ?>
							<div class="lot__title">Aukcja <?php echo esc_html($lot_number); ?></div>
						<?php endif; ?>

						<?php if (have_rows('lot_info')) : ?>

							<?php while (have_rows('lot_info')) : the_row(); ?>

								<?php
								$info_name = get_sub_field('name');
								$info_value = get_sub_field('value');
								$is_active = get_sub_field('active');
								?>
								<?php if ($info_name || $info_value) : ?>
									<div class="lot-info">
										<?php if ($info_name) : ?>
											<div class="lot-info__name"><?php echo esc_html($info_name); ?></div>
										<?php endif; ?>
										<?php if ($info_value) : ?>
											<div class="lot-info__value <?php if ($is_active) echo 'lot-info__value--active'; ?>"><?php echo esc_html($info_value); ?></div>
										<?php endif; ?>
									</div>
								<?php endif; ?>

							<?php endwhile; ?>

						<?php endif; ?>

					</div>
					<div class="lot__right">
						<div class="lot-subscribe">
							<div class="lot-subscribe__left">
								<div class="lot-subscribe__title">Podoba Ci się samochód?</div>
								<div class="lot-subscribe__info">Złóż zapytanie, a my skontaktujemy się z Tobą, aby dostarczyć wszystkie niezbędne informacje.</div>
								<div class="lot-subscribe__btn accent-btn open-popup" data-target="main-form">Uzyskaj ofertę</div>
							</div>
							<div class="lot-subscribe__right">
								<video preload="none" muted="" playsinline="" loop="" poster="<?php echo _TEMPLATEPATH; ?>/assets/video/form-video-poster.jpg" src="<?php echo _TEMPLATEPATH; ?>/assets/video/form-video.mp4"></video>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</main>

	<?php get_footer(); ?>

</body>

</html>
