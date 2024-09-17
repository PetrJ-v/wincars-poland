<?php
#Template Name: Feedbacks
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>
	<header>
		<div class="header">
			<div class="header-container">
				<div class="header-media">
					<div class="header-menu-wrapper">

						<?php get_template_part('template-parts/header-menu-btn'); ?>

						<?php
						wp_nav_menu([
							'theme_location'  => 'top-feedbacks',
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
					<div class="header-media__info">
						<div class="header-media__info-left">
							<h1 class="header-media__title testimonials-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><?php the_title(); ?></h1>
							<?php $fb_header_text = get_field('pfb_text'); ?>
							<?php if ($fb_header_text) : ?>
								<div class="header-media__text wow fadeInUp flipInX" data-wow-duration="1s" data-wow-delay="0.5s">
									<?php echo $fb_header_text; ?>
								</div>
							<?php endif; ?>
						</div>
						<?php $fb_header_img = get_field('pfb_image'); ?>
						<div class="header-media__info-img cover-img active" data-function="toggleClassName" data-anim="true">
							<?php echo wp_get_attachment_image($fb_header_img, 'full'); ?>
						</div>
					</div>
					<div class="header-media__cta">
						<div class="header-media__cta-btn-wrapper">
							<button class="header-media__cta-btn accent-btn open-popup" data-target="main-form">Остави запитване</button>
						</div>
					</div>
				</div>
				<div class="header-info">
					<h1 class="header-info__title testimonials-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s"><?php the_title(); ?></h1>
					<?php if ($fb_header_text) : ?>
						<div class="header-info__text wow flipInX" data-wow-duration="1s" data-wow-delay="1s">
							<?php echo $fb_header_text; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</header>

	<main class="mt-30-44">
		<?php the_content(); ?>
	</main>

	<?php get_footer(); ?>
</body>

</html>
