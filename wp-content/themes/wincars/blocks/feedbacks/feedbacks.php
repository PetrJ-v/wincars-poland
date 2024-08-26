<?php
$block_title = get_field('block_title');
$block_description = get_field('block_description');
?>
<div class="container container--feedbacks">
	<div class="feedbacks p-tb-30-44">
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

		<?php $feedbacks = get_field('feedbacks'); ?>
		<?php if ($feedbacks) : ?>
			<?php // Can have class feedbacks-slider--no-swiper
			?>
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
					<?php foreach ($feedbacks as $post_id) : ?>
						<div class='swiper-slide'>
							<div class="feedback">
								<div class="feedback__header">
									<?php
									$feedback_image = get_field('client_photo', $post_id);
									$car = get_field('car', $post_id);
									$feedback_text = get_field('feedback_text', $post_id);
									?>
									<?php if ($feedback_image) : ?>
										<div class="feedback__header-img img-wrapper">
											<?php echo wp_get_attachment_image($feedback_image, 'full'); ?>
										</div>
									<?php endif; ?>
									<div class="feedback__header-text">
										<div class="feedback__header-name"><?php echo get_the_title($post_id); ?></div>
										<?php if ($car) : ?>
											<div class="feedback__header-car"><?php echo esc_html($car); ?></div>
										<?php endif; ?>
									</div>
									<?php if ($feedback_text) : ?>
										<div class="feedback-preview">
											<?php echo $feedback_text; ?>
										</div>
									<?php endif; ?>
								</div>

								<?php if ($feedback_text) : ?>
									<div class="feedback__content">
										<?php echo $feedback_text; ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>
</div>
