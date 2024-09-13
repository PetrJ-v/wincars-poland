<?php
$block_type = get_field('block_type');
?>
<?php if ($block_type === 'slider') : ?>
	<div class="container container--feedbacks">
		<div class="feedbacks p-tb-30-44">
			<?php
			$block_title = get_field('block_title');
			$block_description = get_field('block_description');
			?>
			<?php if ($block_title || $block_description) : ?>
				<div class="feedbacks-header">
					<?php if ($block_title) : ?>
						<h2 class="feedbacks-header__title">
							<?php echo esc_html($block_title); ?>
						</h2>
					<?php endif; ?>
					<?php if ($block_description) : ?>
						<div class="feedbacks-header__text">
							<?php echo $block_description; ?>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if (have_rows('feedbacks')) : ?>
				<div class='swiper feedbacks-slider'>
					<div class="slider-buttons">
						<div class='swiper-button-prev'>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/left-arrow.svg" alt="">
						</div>
						<div class='swiper-button-next'>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/right-arrow.svg" alt="">
						</div>
					</div>
					<div class='swiper-wrapper'>
						<?php while (have_rows('feedbacks')) : the_row(); ?>
							<div class='swiper-slide'>
								<?php get_template_part('template-parts/feedback', null, ['animation' => false, 'animation_delay' => null]); ?>
							</div>
						<?php endwhile; ?>
					</div>
				</div>

			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>

<?php if ($block_type === 'table') : ?>
	<div class="container p-tb-30-44">
		<?php if (have_rows('feedbacks')) : ?>
			<div class="testimonials">
				<?php $i = 0; ?>
				<?php while (have_rows('feedbacks')) : the_row(); ?>
					<?php
					$i = ($i < 2) ? $i : 0;
					$delay = $i * 0.2
					?>
					<?php get_template_part('template-parts/feedback', null, ['animation' => true, 'animation_delay' => $delay]); ?>
					<?php $i++; ?>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
<?php endif; ?>
