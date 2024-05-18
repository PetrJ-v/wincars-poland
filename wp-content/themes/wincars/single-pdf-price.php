<?php get_header('pdf'); ?>

<body <?php body_class(); ?>>
	<header class="header">
		<?php $header_image = get_field('header_image', 'options'); ?>
		<?php if ($header_image) : ?>
			<div class="pdf-header">
				<div class="pdf-header__img">
					<?php echo wp_get_attachment_image($header_image, 'full'); ?>
				</div>
			</div>
		<?php endif; ?>
	</header>
	<main class="main">

		<?php if (is_user_logged_in()) : ?>
			<?php
			the_post();
			$current_user = wp_get_current_user();
			$current_user_display_name = $current_user->data->display_name;
			$post_author = get_the_author();
			?>

			<?php if (current_user_can('administrator') || $current_user_display_name == $post_author) : ?>
				<?php
				$year = (get_field('year')) ? get_field('year') : '';
				$model = (get_field('model')) ? get_field('model') : '';
				$vin_number = (get_field('vin_number')) ? get_field('vin_number') : '';
				$auction_link = get_field('auction_link');
				$page_title_format = '%s %s %s';
				?>

				<h1 class="pdf-title"><?php echo sprintf($page_title_format, $year, $model, $vin_number); ?></h1>
				<?php if ($auction_link) : ?>
					<a class="pdf-link" href="<?php echo esc_url($auction_link); ?>" target='blank'><?php echo esc_url($auction_link); ?></a>
				<?php endif; ?>
				<div class="pdf-content">
					<?php $pdf_content_bg_img = get_field('pdf_background_image', 'options'); ?>
					<?php if ($pdf_content_bg_img) : ?>
						<div class="pdf-content-bg">
							<style>
								.pdf-content-bg {
									background: url("<?php echo esc_url($pdf_content_bg_img); ?>") no-repeat;
								}
							</style>
						</div>
					<?php endif; ?>
					<div class="pdf-table">
						<?php
						global $usd_course, $euro_course, $total_cost;
						$prices = get_field('prices');
						$usd_course = get_field('exchange_usd');
						$euro_course = get_field('exchange_euro');
						$total_cost = 0;
						settype($usd_course, "float");
						settype($euro_course, "float");
						settype($total_cost, "float");
						function update_total_cost($currency, $value)
						{
							global $usd_course, $euro_course, $total_cost;
							switch (true) {
								case $currency === '$':
									$total_cost = $total_cost + $usd_course * $value;
									break;
								case $currency === '€':
									$total_cost = $total_cost + $euro_course * $value;
									break;
								case $currency === 'Лева':
									$total_cost = $total_cost + $value;
									break;
							}
						}
						?>

						<?php foreach ($prices as $prices_row) : ?>
							<?php
							$row_text = $prices_row['price_row_name'];
							$row_value = $prices_row['price_row_value'];
							$row_value_currency = $prices_row['currency'];
							$displayed_row_value = $row_value . $row_value_currency;
							$additional_classes = (isset($prices_row['additional_information'])) ? ' pdf-table__item--additional' : '';
							?>
							<?php if ($row_value >= 0) : ?>
								<div class="pdf-table__item<?php echo $additional_classes; ?>">
									<div class="pdf-table__item-text"><?php echo $row_text; ?></div>
									<div class="pdf-table__item-price">
										<?php
										if ($row_value == 0) {
											$displayed_row_value = 'няма';
										}
										echo $displayed_row_value;
										?>
									</div>
									<?php if (isset($prices_row['additional_information'])) : ?>
										<div class="pdf-table__item-info"><?php echo $prices_row['additional_information']; ?></div>
									<?php endif; ?>
									<?php update_total_cost($row_value_currency, $row_value); ?>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
						<?php
						$common = get_field('price_row_13');
						$common_text = $common['price_row_name'];
						$additional_classes = (isset($common['additional_information'])) ? ' pdf-table__item--additional' : '';
						?>

						<div class="pdf-table__item<?php echo $additional_classes; ?>">
							<div class="pdf-table__item-text"><?php echo $common_text; ?></div>
							<div class="pdf-table__item-price"><?php echo number_format($total_cost, 0, '', ' ') . ' Лева'; ?></div>
							<?php if (isset($common['additional_information'])) : ?>
								<div class="pdf-table__item-info"><?php echo $common['additional_information']; ?></div>
							<?php endif; ?>
						</div>

					</div>
					<div class="text-info">
						<div class="text-info__item">*Банковите разноски за превод не са включени в цената и се поемат от
							клиента</div>
						<div class="text-info__item">*След покупката на автомобила преводът към САЩ/Канада трябва да бъде
							извършен на следващия работен ден</div>
						<div class="text-info__item">*В случай на закъснение на превода глобата към търга се поема от клиента
						</div>
						<div class="text-info__item text-info__item--copyright">© <?php echo date('Y'); ?> WINCARS. Всички права запазени.</div>
					</div>
				</div>
			<?php else : ?>
				<h1 class="pdf-title">Можете да гледате само своите прайси</h1>
			<?php endif; ?>
		<?php else : ?>
			<h1 class="pdf-title">Нямате достъп до тази страница</h1>
		<?php endif; ?>
	</main>



	<?php get_footer('pdf'); ?>
