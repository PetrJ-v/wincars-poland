<?php
$car_api_title = $args['car_api_title'];
$main_info_title = $args['main_info_title'];
$main_info = $args['main_info'];
$additional_info_title = $args['additional_info_title'];
$additional_info = $args['additional_info'];
$container_info_title = $args['container_info_title'];
$container_info = $args['container_info'];
$car_images_title = $args['car_images_title'];
$car_images = $args['car_images'];

function gen_col_content($info_line)
{
	echo '<div class="info-col-line">';
	if ($info_line['title']) {
		echo '<div class="info-col-line__title">' . esc_html($info_line['title']) . '</div>';
	}
	if ($info_line['text']) {
		echo '<div class="info-col-line__text">' . esc_html($info_line['text']) . '</div>';
	}
	echo '</div>';
}
?>
<?php if ($main_info || $additional_info || $container_info || $car_images) : ?>
	<div class="car-api">
		<div class="main-top-bar">
			<button class="main-top-bar__close img-wrapper" id="car-api-close" aria-label="close popup">
				<svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect x="9.3913" y="8.28638" width="25" height="1.5625" transform="rotate(45 9.3913 8.28638)" fill="#4E4949" />
					<rect x="27.069" y="9.39124" width="25" height="1.5625" transform="rotate(135 27.069 9.39124)" fill="#4E4949" />
				</svg>
			</button>
		</div>

		<div class="car-ap-content">
			<?php if ($car_api_title) : ?>
				<h1 class="car-api__title"><?php echo esc_html($car_api_title); ?></h1>
			<?php endif; ?>
			<?php if ($main_info) : ?>
				<div class="info-row car-api__info-row">
					<div class="info-col">
						<div class="info-col-bar">
							<h2 class="info-col-bar-title"><?php echo esc_html($main_info_title); ?></h2>
						</div>
						<div class="info-col-content">
							<?php foreach ($main_info as $main_info_line) : ?>
								<?php gen_col_content($main_info_line); ?>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<?php $row_class = ($additional_info && $container_info) ? 'info-row--col-2' : ''; ?>
			<?php if ($additional_info || $container_info) : ?>
				<div class="info-row <?php echo $row_class; ?> car-api__info-row">

					<?php if ($additional_info) : ?>
						<div class="info-col">
							<div class="info-col-bar">
								<h2 class="info-col-bar-title"><?php echo esc_html($additional_info_title); ?></h2>
							</div>
							<div class="info-col-content">
								<?php foreach ($additional_info as $additional_info_line) : ?>
									<?php gen_col_content($additional_info_line); ?>
								<?php endforeach; ?>
							</div>
						</div>
					<?php endif; ?>

					<?php if ($container_info) : ?>
						<div class="info-col">
							<div class="info-col-bar">
								<h2 class="info-col-bar-title"><?php echo esc_html($container_info_title); ?></h2>
							</div>
							<div class="info-col-content">
								<?php foreach ($container_info as $container_info_line) : ?>
									<?php gen_col_content($container_info_line); ?>
								<?php endforeach; ?>
							</div>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if ($car_images) : ?>
				<div class="info-row car-api__info-row">
					<div class="info-col">
						<div class="info-col-bar">
							<h2 class="info-col-bar-title"><?php echo esc_html($car_images_title); ?></h2>
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
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>
