<?php
#Template Name: Blog
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>
	<?php get_template_part('template-parts/page-header'); ?>

	<main>

		<?php the_content(); ?>

		<div class="container">
			<div class="featured-post p-tb-20-35">
				<!-- Здесь предусмотреть вместо видео возможность выводить изображение с классом featured-post__img для тех постов, у которых нет видео -->
				<div class="video-wrapper">
					<video preload="none" muted="" playsinline="" loop="" poster="video/form-video-poster.jpg" src="video/form-video.mp4"></video>
					<button class="play-btn img-wrapper">
						<svg width="54" height="55" viewBox="0 0 54 55" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g filter="url(#filter0_b_337_498)">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M26.8586 55C41.6921 55 53.7171 42.6878 53.7171 27.5C53.7171 12.3122 41.6921 0 26.8586 0C12.025 0 0 12.3122 0 27.5C0 42.6878 12.025 55 26.8586 55ZM22.6619 37.5871L37.7698 28.941C38.8889 28.3006 38.889 26.6994 37.7698 26.059L22.6619 17.4129C21.5428 16.7725 20.1439 17.573 20.1439 18.8539V36.1461C20.1439 37.427 21.5428 38.2275 22.6619 37.5871Z" fill="white" fill-opacity="0.3" />
							</g>
						</svg>
					</button>
				</div>
				<div class="featured-post__preview preview">
					<div class="preview__date">17 Jan 2022</div>
					<h3 class="preview__title">
						<a class="preview__title-link" href="#">Walsh leadership lessons</a>
						<div class="preview__title-deco">
							<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 11L11 1M11 1H1M11 1V11" stroke="#FDFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</div>
					</h3>
					<div class="preview__text">
						Like to know the secrets of transforming a 2-14 team into a 3x Super Bowl winning
						Dynasty?
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="posts-previews p-tb-20-35">
				<div class="preview">
					<div class="preview__img cover-img">
						<img src="<?php echo _TEMPLATEPATH; ?>/assets/img/previews/preview-1.jpg">
						<div class="preview__img-deco">Прочети</div>
					</div>
					<div class="preview__date">17 януари 2022 г</div>
					<h3 class="preview__title">
						<a class="preview__title-link" href="#">Как да изберете автомобил</a>
						<div class="preview__title-deco">
							<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 11L11 1M11 1H1M11 1V11" stroke="#FDFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</div>
					</h3>
					<div class="preview__text">
						Съвети и препоръки за успешен избор на автомобил от американския пазар.
					</div>
				</div>
				<div class="preview">
					<div class="preview__img cover-img">
						<img src="<?php echo _TEMPLATEPATH; ?>/assets/img/previews/preview-2.jpg">
						<div class="preview__img-deco">Прочети</div>
					</div>
					<div class="preview__date">03 декември 2022 г</div>
					<h3 class="preview__title">
						<a class="preview__title-link" href="#">Истории на доволни клиенти</a>
						<div class="preview__title-deco">
							<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 11L11 1M11 1H1M11 1V11" stroke="#FDFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</div>
					</h3>
					<div class="preview__text">
						Истории на клиенти, които успешно закупиха автомобили от САЩ.
					</div>
				</div>
				<div class="preview">
					<div class="preview__img cover-img">
						<img src="<?php echo _TEMPLATEPATH; ?>/assets/img/previews/preview-3.jpg">
						<div class="preview__img-deco">Прочети</div>
					</div>
					<div class="preview__date">17 януари 2022 г</div>
					<h3 class="preview__title">
						<a class="preview__title-link" href="#">Финансиране на покупка </a>
						<div class="preview__title-deco">
							<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 11L11 1M11 1H1M11 1V11" stroke="#FDFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</div>
					</h3>
					<div class="preview__text">
						Възможности за финансиране на покупка на автомобил от САЩ.
					</div>
				</div>
				<div class="preview">
					<div class="preview__img cover-img">
						<img src="<?php echo _TEMPLATEPATH; ?>/assets/img/previews/preview-4.jpg">
						<div class="preview__img-deco">Прочети</div>
					</div>
					<div class="preview__date">03 декември 2022 г</div>
					<h3 class="preview__title">
						<a class="preview__title-link" href="#">Как да изберете автомобил</a>
						<div class="preview__title-deco">
							<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 11L11 1M11 1H1M11 1V11" stroke="#FDFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</div>
					</h3>
					<div class="preview__text">
						Съвети и препоръки за успешен избор на автомобил от американския пазар.
					</div>
				</div>
				<div class="preview">
					<div class="preview__img cover-img">
						<img src="<?php echo _TEMPLATEPATH; ?>/assets/img/previews/preview-5.jpg">
						<div class="preview__img-deco">Прочети</div>
					</div>
					<div class="preview__date">13 декември 2022 г</div>
					<h3 class="preview__title">
						<a class="preview__title-link" href="#">Финансиране на покупка </a>
						<div class="preview__title-deco">
							<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 11L11 1M11 1H1M11 1V11" stroke="#FDFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</div>
					</h3>
					<div class="preview__text">
						Възможности за финансиране на покупка на автомобил от САЩ.
					</div>
				</div>
				<div class="preview">
					<div class="preview__img cover-img">
						<img src="<?php echo _TEMPLATEPATH; ?>/assets/img/previews/preview-6.jpg">
						<div class="preview__img-deco">Прочети</div>
					</div>
					<div class="preview__date">27 декември 2022 г</div>
					<h3 class="preview__title">
						<a class="preview__title-link" href="#">Истории на доволни клиенти </a>
						<div class="preview__title-deco">
							<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 11L11 1M11 1H1M11 1V11" stroke="#FDFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</div>
					</h3>
					<div class="preview__text">
						Истории на клиенти, които успешно закупиха автомобили от САЩ.
					</div>
				</div>
			</div>
		</div>

		<!-- Pagination -->
		<div class="container">
			<div class="site-pagination p-tb-30-44">
				<div class="site-pagination__prev">
					<a class="prev page-numbers" href="#">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M15.8334 9.99999H4.16675M4.16675 9.99999L10.0001 15.8333M4.16675 9.99999L10.0001 4.16666" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
						<span>Previous</span>
					</a>
				</div>
				<div class="site-pagination__links">
					<a class="page-numbers current" href="#">1</a>
					<span aria-current="page" class="page-numbers">2</span>
					<a class="page-numbers" href="#">3</a>
					<span class="page-numbers dots">…</span>
					<a class="page-numbers" href="#">8</a>
					<a class="page-numbers" href="#">9</a>
					<a class="page-numbers" href="#">10</a>
				</div>
				<div class="site-pagination__next">
					<a class="next page-numbers" href="#">
						<span>Next</span>
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M4.16663 9.99999H15.8333M15.8333 9.99999L9.99996 4.16666M15.8333 9.99999L9.99996 15.8333" stroke="#FDFDFD" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</a>
				</div>
			</div>
		</div>
	</main>

	<?php get_footer(); ?>
</body>

</html>
