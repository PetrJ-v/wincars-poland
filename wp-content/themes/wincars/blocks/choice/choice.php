<?php
$choice_block_title = get_field('choice_block_title');
$choise_block_text = get_field('choise_block_text');
$left_car_image = get_field('left_car');
$right_car_image = get_field('right_car');
$cars_background = get_field('cars_background');
$bottom_list_title = get_field('bottom_list_title');
$bottom_image = get_field('bottom_image');
?>
<div class="container">
	<div class="choice align-center p-tb-30-44">
		<div class="choice__left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
			<div class="choice-content">
				<?php if ($choice_block_title) : ?>
					<h2 class="choice-content__title"><?php echo esc_html($choice_block_title); ?></h2>
				<?php endif; ?>
				<?php if ($choise_block_text) : ?>
					<div class="choice-content__text">
						<?php echo $choise_block_text; ?>
					</div>
				<?php endif; ?>

				<?php if (have_rows('choice_items')) : ?>
					<ul class="choice-content__list">
						<?php while (have_rows('choice_items')) : the_row(); ?>
							<?php $choise_item = get_sub_field('choise_item'); ?>
							<?php if ($choise_item) : ?>
								<li><?php echo $choise_item; ?></li>
							<?php endif; ?>

						<?php endwhile; ?>
					</ul>

				<?php endif; ?>
			</div>
		</div>

		<?php if ($left_car_image || $right_car_image || $cars_background) : ?>
			<div class="choice__right wow fadeInRight" data-function="toggleClassName" data-anim="true" data-wow-duration="1s" data-wow-delay="0s">
				<?php if ($cars_background) : ?>
					<div class="choice__right-bg img-wrapper">
						<?php echo wp_get_attachment_image($cars_background, 'full'); ?>
					</div>
				<?php endif; ?>
				<?php if ($right_car_image) : ?>
					<div class="choice__right-img choice__right-img--right img-wrapper">
						<?php echo wp_get_attachment_image($right_car_image, 'full'); ?>
					</div>
				<?php endif; ?>
				<?php if ($left_car_image) : ?>
					<div class="choice__right-img choice__right-img--left img-wrapper">
						<?php echo wp_get_attachment_image($left_car_image, 'full'); ?>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>

	<?php if ($bottom_list_title || $bottom_image || have_rows('bottom_list_items')) : ?>
		<div class="choice-bottom align-center">
			<?php if ($bottom_image) : ?>
				<div class="choice-bottom__img img-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
					<?php echo wp_get_attachment_image($bottom_image, 'full'); ?>
				</div>
			<?php endif; ?>
			<?php if ($bottom_list_title || have_rows('bottom_list_items')) : ?>
				<div class="choice-bottom__content wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
					<div class="choice-content">

						<?php if ($bottom_list_title) : ?>
							<h2 class="choice-content__title"><?php echo $bottom_list_title; ?></h2>
						<?php endif; ?>

						<?php if (have_rows('bottom_list_items')) : ?>
							<ul class="choice-content__list">
								<?php while (have_rows('bottom_list_items')) : the_row(); ?>
									<?php $list_item = get_sub_field('list_item'); ?>
									<li><?php echo $list_item; ?></li>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	<?php endif; ?>
</div>
