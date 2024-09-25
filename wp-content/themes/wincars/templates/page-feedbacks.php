<?php
#Template Name: Feedbacks
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>
	<header>
		<div class="header">
			<div class="header-container">
				<?php get_template_part('template-parts/header-top-line'); ?>
				<div class="header-media">
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
						<div class="header-media__info-img header-media__info-img--desktop cover-img active" data-function="toggleClassName" data-anim="true">
							<?php echo wp_get_attachment_image($fb_header_img, 'full'); ?>
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
