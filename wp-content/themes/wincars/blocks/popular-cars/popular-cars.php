<?php
$section_title = get_field('section_title');
$popular_cars_id = get_field('popular_cars');

?>
<?php if ($section_title || $popular_cars_id) : ?>
	<div class="container">
		<div class="cars-wrapper p-tb-30-44">
			<?php if ($section_title) : ?>
				<h2 class="cars-wrapper__title"><?php echo $section_title; ?></h2>
			<?php endif; ?>

			<?php if ($popular_cars_id) : ?>
				<div class="cars">
					<?php $i = 0; ?>
					<?php foreach ($popular_cars_id as $post_id) : ?>
						<div class="cars__item car wow fadeInUp" data-wow-duration="1s" data-wow-delay="<?php echo (0.2 * $i); ?>s">
							<div class="car__info">
								<div class="car__info-title"><?php echo get_the_title($post_id); ?></div>
								<?php $year = get_field('year', $post_id); ?>
								<?php if ($year) : ?>
									<div class="car__info-year"><?php echo esc_html($year); ?></div>
								<?php endif; ?>
							</div>
							<?php $preview_image = get_field('preview_image', $post_id); ?>
							<?php if ($preview_image) : ?>
								<div class="car__img img-wrapper">
									<?php echo wp_get_attachment_image($preview_image, 'full'); ?>
								</div>
							<?php endif; ?>
							<a href="<?php echo get_the_permalink($post_id); ?>" class="car__link">
								<span class="car__link-text">
									<span class="hidden-text">Отивам</span>
									<?php $car_price = get_field('price_value', $post_id); ?>
									<?php if ($car_price) : ?>
										<span class="visible-text">$ <?php echo esc_html($car_price); ?></span>
									<?php endif; ?>
								</span>
								<span class="car__link-img img-wrapper">
									<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="17.5" cy="17.5" r="17.5" fill="#FCB001" />
										<path d="M11.7839 22.2929L11.0768 23L12.491 24.4142L13.1981 23.7071L11.7839 22.2929ZM23.491 13C23.491 12.4477 23.0433 12 22.491 12L13.491 12C12.9387 12 12.491 12.4477 12.491 13C12.491 13.5523 12.9387 14 13.491 14L21.491 14L21.491 22C21.491 22.5523 21.9387 23 22.491 23C23.0433 23 23.491 22.5523 23.491 22L23.491 13ZM13.1981 23.7071L23.1981 13.7071L21.7839 12.2929L11.7839 22.2929L13.1981 23.7071Z" fill="#1B1B1B" />
									</svg>
								</span>
							</a>
						</div>
						<?php $i++; ?>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>
