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
					<?php
					$post_preview = get_field('post_preview');
					?>
					<div class='swiper-slide'>
						<div class="preview">
							<?php if ($post_preview) : ?>
								<div class="preview__img cover-img">
									<?php echo wp_get_attachment_image($post_preview, 'full'); ?>
									<div class="preview__img-deco">Прочетете статията</div>
								</div>
							<?php endif; ?>
							<div class="preview__date"><?php echo get_the_date('j F Y') . ' г.'; ?></div>
							<h3 class="preview__title">
								<a class="preview__title-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<div class="preview__title-deco">
									<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1 11L11 1M11 1H1M11 1V11" stroke="#FDFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</div>
							</h3>
							<div class="preview__text">
								<?php the_excerpt(); ?>
							</div>
						</div>
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
