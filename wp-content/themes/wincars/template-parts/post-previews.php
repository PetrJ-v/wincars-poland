<div class="container p-tb-30-44">
	<div class="last-post-header">
		<div class="last-post-header__info">
			<h2 class="last-post-header__info-title">Последни писания</h2>
			<div class="last-post-header__info-description">Най-новите новини, технологии и ресурси от нашия
				екип.</div>
		</div>
		<a href="#" class="last-post-header__btn accent-btn at-md">Вижте всички публикации</a>
	</div>

	<?php
	$current_post_id = get_the_ID();
	$myposts = get_posts(array(
		'post_type' => 'post',
		'posts_per_page' => 3,
		'post__not_in' => [$current_post_id],
	));
	?>
	<?php if ($myposts) : ?>
		<div class='swiper previews-slider'>
			<div class="slider-buttons">
				<div class='swiper-button-prev'>
					<img src="<?php echo _TEMPLATEPATH; ?>/assets/img/icons/left-arrow.svg" alt="">
				</div>
				<div class='swiper-button-next'>
					<img src="<?php echo _TEMPLATEPATH; ?>/assets/img/icons/right-arrow.svg" alt="">
				</div>
			</div>
			<div class='swiper-wrapper'>
				<?php foreach ($myposts as $post) : ?>
					<?php setup_postdata($post); ?>
					<div class='swiper-slide'>
						<?php get_template_part('template-parts/post-preview'); ?>
					</div>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			</div>
			<div class='swiper-button-prev'></div>
			<div class='swiper-button-next'></div>
		</div>
		<a href="#" class="last-post-header__btn accent-btn undr-md">Вижте всички публикации</a>
	<?php endif; ?>

</div>
