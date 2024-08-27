<?php
#Template Name: Front page
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>
	<header>
		<div class="header">
			<div class="header-container">
				<div class="header-top-links">
					<a href='#' rel='nofollow noopener sponsored' target='blank'>Нашите оферти в mobile.bg</a>
					<a href='tel:+359889333631' rel='nofollow noopener sponsored' target='blank'>Контакти
						+359889333631</a>
				</div>

				<div class="header-media">
					<div class="header-menu-wrapper">
						<?php get_template_part('template-parts/header-menu-btn'); ?>
						<?php
						wp_nav_menu([
							'theme_location'  => 'top',
							'container'       => 'nav',
							'container_class' => 'header-menu',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 1,
						]);
						?>
					</div>
					<?php if (get_field('video_poster')) : ?>
						<?php $video_poster = get_field('video_poster'); ?>
						<div class="header-media__img">
							<!-- autoplay="" -->
							<video preload="none" muted="" playsinline="" loop="" poster="<?php echo $video_poster; ?>" src="<?php the_field('video'); ?>"></video>
						</div>
					<?php endif; ?>
					<?php $cta_button_text = (get_field('cta_button_text')) ? get_field('cta_button_text') : 'Остави запитване'; ?>
					<div class="header-media__cta">
						<div class="header-media__cta-btn-wrapper">
							<button class="header-media__cta-btn accent-btn open-popup" data-target="main-form"><?php echo esc_html($cta_button_text); ?></button>
						</div>
					</div>
				</div>
				<div class="hp-tracking align-center">
					<div class="hp-tracking__title">Проследяване</div>
					<form class="hp-tracking__form">
						<div class="hp-tracking-input-wrapper">
							<input type="text" name="hp-tracking" class="hp-tracking__vin" id="hp-tracking" placeholder="Въведете VIN">
						</div>
						<input type="submit" class="hp-tracking__submit accent-btn" value="Търсене">
					</form>
				</div>
			</div>
		</div>
	</header>
	<main>
		<!-- Single features block -->
		<!-- <div class="container">
			<div class="single-features single-features p-tb-30-44">
				<div class="single-features__item sf-item">
					<div class="sf-item__number">
						<span class="number">700</span><span>+</span>
					</div>
					<div class="sf-item__text">Доволни<br>клиенти</div>
				</div>
				<div class="single-features__item sf-item">
					<div class="sf-item__number">
						<span class="number">592</span><span>+</span>
					</div>
					<div class="sf-item__text">Локации<br>за търг</div>
				</div>
				<div class="single-features__item sf-item">
					<div class="sf-item__number">
						<span class="number">247</span><span>/</span><span class="number">7</span>
					</div>
					<div class="sf-item__text">Поддръжка<br>на клиенти</div>
				</div>
			</div>
		</div> -->

		<!-- Cars-wrapper block -->
		<div class="container">
			<div class="cars-wrapper p-tb-30-44">
				<h2 class="cars-wrapper__title">Най-печелившите коли от Америка</h2>
				<div class="cars">
					<div class="cars__item car wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
						<div class="car__info">
							<div class="car__info-title">JEEP GRAND CHEROKEE</div>
							<div class="car__info-year">2016</div>
						</div>
						<div class="car__img img-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/cars/car-1.png">
						</div>
						<a href="#" class="car__link">
							<span class="car__link-text">
								<span class="hidden-text">Отивам</span>
								<span class="visible-text">€ 2300</span>
							</span>
							<span class="car__link-img img-wrapper">
								<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="17.5" cy="17.5" r="17.5" fill="#FCB001" />
									<path d="M11.7839 22.2929L11.0768 23L12.491 24.4142L13.1981 23.7071L11.7839 22.2929ZM23.491 13C23.491 12.4477 23.0433 12 22.491 12L13.491 12C12.9387 12 12.491 12.4477 12.491 13C12.491 13.5523 12.9387 14 13.491 14L21.491 14L21.491 22C21.491 22.5523 21.9387 23 22.491 23C23.0433 23 23.491 22.5523 23.491 22L23.491 13ZM13.1981 23.7071L23.1981 13.7071L21.7839 12.2929L11.7839 22.2929L13.1981 23.7071Z" fill="#1B1B1B" />
								</svg>
							</span>
						</a>
					</div>
					<div class="cars__item car wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
						<div class="car__info">
							<div class="car__info-title">BMW X5</div>
							<div class="car__info-year">2017</div>
						</div>
						<div class="car__img img-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/cars/car-2.png">
						</div>
						<a href="#" class="car__link">
							<span class="car__link-text">
								<span class="hidden-text">Отивам</span>
								<span class="visible-text">€ 4100</span>
							</span>
							<span class="car__link-img img-wrapper">
								<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="17.5" cy="17.5" r="17.5" fill="#FCB001" />
									<path d="M11.7839 22.2929L11.0768 23L12.491 24.4142L13.1981 23.7071L11.7839 22.2929ZM23.491 13C23.491 12.4477 23.0433 12 22.491 12L13.491 12C12.9387 12 12.491 12.4477 12.491 13C12.491 13.5523 12.9387 14 13.491 14L21.491 14L21.491 22C21.491 22.5523 21.9387 23 22.491 23C23.0433 23 23.491 22.5523 23.491 22L23.491 13ZM13.1981 23.7071L23.1981 13.7071L21.7839 12.2929L11.7839 22.2929L13.1981 23.7071Z" fill="#1B1B1B" />
								</svg>
							</span>
						</a>
					</div>
					<div class="cars__item car wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
						<div class="car__info">
							<div class="car__info-title">TOYOTA LAND CRUISER</div>
							<div class="car__info-year">2019</div>
						</div>
						<div class="car__img img-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/cars/car-3.png">
						</div>
						<a href="#" class="car__link">
							<span class="car__link-text">
								<span class="hidden-text">Отивам</span>
								<span class="visible-text">€ 2900</span>
							</span>
							<span class="car__link-img img-wrapper">
								<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="17.5" cy="17.5" r="17.5" fill="#FCB001" />
									<path d="M11.7839 22.2929L11.0768 23L12.491 24.4142L13.1981 23.7071L11.7839 22.2929ZM23.491 13C23.491 12.4477 23.0433 12 22.491 12L13.491 12C12.9387 12 12.491 12.4477 12.491 13C12.491 13.5523 12.9387 14 13.491 14L21.491 14L21.491 22C21.491 22.5523 21.9387 23 22.491 23C23.0433 23 23.491 22.5523 23.491 22L23.491 13ZM13.1981 23.7071L23.1981 13.7071L21.7839 12.2929L11.7839 22.2929L13.1981 23.7071Z" fill="#1B1B1B" />
								</svg>
							</span>
						</a>
					</div>
					<div class="cars__item car wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
						<div class="car__info">
							<div class="car__info-title">AUDI Q7</div>
							<div class="car__info-year">2018</div>
						</div>
						<div class="car__img img-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/cars/car-4.png">
						</div>
						<a href="#" class="car__link">
							<span class="car__link-text">
								<span class="hidden-text">Отивам</span>
								<span class="visible-text">€ 3700</span>
							</span>
							<span class="car__link-img img-wrapper">
								<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="17.5" cy="17.5" r="17.5" fill="#FCB001" />
									<path d="M11.7839 22.2929L11.0768 23L12.491 24.4142L13.1981 23.7071L11.7839 22.2929ZM23.491 13C23.491 12.4477 23.0433 12 22.491 12L13.491 12C12.9387 12 12.491 12.4477 12.491 13C12.491 13.5523 12.9387 14 13.491 14L21.491 14L21.491 22C21.491 22.5523 21.9387 23 22.491 23C23.0433 23 23.491 22.5523 23.491 22L23.491 13ZM13.1981 23.7071L23.1981 13.7071L21.7839 12.2929L11.7839 22.2929L13.1981 23.7071Z" fill="#1B1B1B" />
								</svg>
							</span>
						</a>
					</div>
					<div class="cars__item car wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
						<div class="car__info">
							<div class="car__info-title">MERCEDES-BENZ GL</div>
							<div class="car__info-year">2015</div>
						</div>
						<div class="car__img img-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/cars/car-5.png">
						</div>
						<a href="#" class="car__link">
							<span class="car__link-text">
								<span class="hidden-text">Отивам</span>
								<span class="visible-text">€ 2300</span>
							</span>
							<span class="car__link-img img-wrapper">
								<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="17.5" cy="17.5" r="17.5" fill="#FCB001" />
									<path d="M11.7839 22.2929L11.0768 23L12.491 24.4142L13.1981 23.7071L11.7839 22.2929ZM23.491 13C23.491 12.4477 23.0433 12 22.491 12L13.491 12C12.9387 12 12.491 12.4477 12.491 13C12.491 13.5523 12.9387 14 13.491 14L21.491 14L21.491 22C21.491 22.5523 21.9387 23 22.491 23C23.0433 23 23.491 22.5523 23.491 22L23.491 13ZM13.1981 23.7071L23.1981 13.7071L21.7839 12.2929L11.7839 22.2929L13.1981 23.7071Z" fill="#1B1B1B" />
								</svg>
							</span>
						</a>
					</div>
					<div class="cars__item car wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
						<div class="car__info">
							<div class="car__info-title">BMW M4</div>
							<div class="car__info-year">2022</div>
						</div>
						<div class="car__img img-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/cars/car-6.png">
						</div>
						<a href="#" class="car__link">
							<span class="car__link-text">
								<span class="hidden-text">Отивам</span>
								<span class="visible-text">€ 5200</span>
							</span>
							<span class="car__link-img img-wrapper">
								<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="17.5" cy="17.5" r="17.5" fill="#FCB001" />
									<path d="M11.7839 22.2929L11.0768 23L12.491 24.4142L13.1981 23.7071L11.7839 22.2929ZM23.491 13C23.491 12.4477 23.0433 12 22.491 12L13.491 12C12.9387 12 12.491 12.4477 12.491 13C12.491 13.5523 12.9387 14 13.491 14L21.491 14L21.491 22C21.491 22.5523 21.9387 23 22.491 23C23.0433 23 23.491 22.5523 23.491 22L23.491 13ZM13.1981 23.7071L23.1981 13.7071L21.7839 12.2929L11.7839 22.2929L13.1981 23.7071Z" fill="#1B1B1B" />
								</svg>
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>

		<?php the_content(); ?>

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
	</main>
	<?php get_footer(); ?>
</body>

</html>
