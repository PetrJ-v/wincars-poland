<div class="container p-tb-30-44">
	<?php
	$related_title = get_field('related_title');
	$related_intro = get_field('related_intro');
	$blog_link = get_field('blog_link');
	?>
	<?php if ($related_title || $related_intro || $blog_link) : ?>
		<div class="last-post-header">
			<?php if ($related_title || $related_intro) : ?>
				<div class="last-post-header__info">
					<?php if ($related_title) : ?>
						<h2 class="last-post-header__info-title"><?php echo esc_html($related_title); ?></h2>
					<?php endif; ?>
					<?php if ($related_intro) : ?>
						<div class="last-post-header__info-description"><?php echo $related_intro; ?></div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<?php if ($blog_link) : ?>
				<?php
				$link_url = $blog_link['url'];
				$link_title = $blog_link['title'];
				$link_target = $blog_link['target'] ? $blog_link['target'] : '_self';
				?>
				<a href="<?php echo esc_url($link_url); ?>" target="<?php echo $link_target; ?>" class="last-post-header__btn accent-btn at-md"><?php echo esc_html($link_title); ?></a>
			<?php endif; ?>
		</div>
	<?php endif; ?>

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
