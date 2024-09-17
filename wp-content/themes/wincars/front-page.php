<?php
#Template Name: Front page
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>
	<header>
		<div class="header">
			<div class="header-container">
				<!-- <div class="header-top-links">
					<a href='#' rel='nofollow noopener sponsored' target='blank'>Нашите оферти в mobile.bg</a>
					<a href='tel:+359889333631' rel='nofollow noopener sponsored' target='blank'>Контакти
						+359889333631</a>
				</div> -->

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
						<a href="<?php echo get_home_url(); ?>" class="header-logo img-wrapper">
							<img src="<?php echo _TEMPLATEPATH; ?>/assets/img/logo-white-b.svg" alt="Wincars logo">
						</a>
					</div>
					<?php if (get_field('video_poster')) : ?>
						<?php $video_poster = get_field('video_poster'); ?>
						<div class="header-media__img">
							<!-- autoplay="" -->
							<video preload="none" autoplay="" muted="" playsinline="" loop="" poster="<?php echo $video_poster; ?>" src="<?php the_field('video'); ?>"></video>
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

		<?php the_content(); ?>
		<?php get_template_part('template-parts/post-previews'); ?>

	</main>
	<?php get_footer(); ?>
</body>

</html>
