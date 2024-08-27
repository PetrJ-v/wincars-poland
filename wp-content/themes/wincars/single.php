<?php
get_header();
$video_poster = get_field('video_poster');
$video_link = get_field('video');
$hero_text = get_field('small_intro_text');
?>

<body <?php body_class(); ?>>
	<header>
		<div class="header">

			<?php get_template_part('template-parts/simple-menu'); ?>

			<div class="container">
				<div class="hero align-center">
					<div class="hero__subtitle"><?php echo 'Публикувано на ' . get_the_date('j F Y') . ' г.'; ?></div>
					<h1 class="hero__title"><?php the_title(); ?></h1>
					<?php if ($hero_text) : ?>
						<div class="hero__text text"><?php echo $hero_text; ?></div>
					<?php endif; ?>
				</div>
			</div>
			<?php if ($video_poster || $video_link) : ?>
				<div class="container">
					<div class="video-wrapper">
						<video preload="none" muted="" playsinline="" loop="" poster="<?php echo esc_url($video_poster); ?>" src="<?php echo esc_url($video_link); ?>"></video>
						<button class="play-btn img-wrapper">
							<svg width="54" height="55" viewBox="0 0 54 55" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g filter="url(#filter0_b_337_498)">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M26.8586 55C41.6921 55 53.7171 42.6878 53.7171 27.5C53.7171 12.3122 41.6921 0 26.8586 0C12.025 0 0 12.3122 0 27.5C0 42.6878 12.025 55 26.8586 55ZM22.6619 37.5871L37.7698 28.941C38.8889 28.3006 38.889 26.6994 37.7698 26.059L22.6619 17.4129C21.5428 16.7725 20.1439 17.573 20.1439 18.8539V36.1461C20.1439 37.427 21.5428 38.2275 22.6619 37.5871Z" fill="white" fill-opacity="0.3" />
								</g>
							</svg>
						</button>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</header>
	<main>
		<div class="container">
			<div class="post-content">
				<?php the_content(); ?>
			</div>
		</div>

		<!-- Previews block -->
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
			global $post; // не обязательно

			// 5 записей из рубрики 9
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

		<!-- Promo block -->
		<div class="promo-wrapper">
			<div class="promo img-wrapper">
				<div class="promo-content">
					<div class="promo-content__img img-wrapper wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">
						<img src="<?php echo _TEMPLATEPATH; ?>/assets/img/promotion/promo-text.svg">
					</div>
					<div class="promo-content__text promo-content__text--desktop wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
						За да имаш повече шансове да спечелиш автомобила, бъди активен, споделяй постовете, коментирай,
						добавяй повече хора выв viber групата!
					</div>
					<button class="promo-content__btn promo-content__btn--desktop wow fadeInUp flipInY open-popup" data-target="main-form" data-wow-duration="2.5s" data-wow-delay="0.4s">ОСТАВИ ЗАПИТВАНЕ</button>
				</div>
				<img src="<?php echo _TEMPLATEPATH; ?>/assets/img/promotion/banner.jpg">
				<div class="promo__deco img-wrapper wow fadeIn" data-wow-duration="1.5s" data-wow-delay="3s">
					<img src="<?php echo _TEMPLATEPATH; ?>/assets/img/promotion/promo-phone.png">
				</div>
			</div>
			<div class="promo-content-mobile">
				<div class="promo-content__text wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
					За да имаш повече шансове да спечелиш автомобила, бъди активен, споделяй постовете, коментирай,
					добавяй повече хора выв viber групата!
				</div>
				<button class="promo-content__btn align-center wow fadeInUp flipInY open-popup" data-target="main-form" data-wow-duration="2.5s" data-wow-delay="0.4s">ОСТАВИ ЗАПИТВАНЕ</button>
			</div>
		</div>
	</main>

	<?php get_footer(); ?>

</body>

</html>
