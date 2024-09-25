<?php
#Template Name: Front page
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>
	<header>
		<div class="header">
			<div class="header-container">
				<?php get_template_part('template-parts/header-top-line'); ?>
				<div class="header-media active">
					<?php if (get_field('video_poster')) : ?>
						<?php $video_poster = get_field('video_poster'); ?>
						<div class="header-media__img">
							<video preload="none" autoplay="" muted="" playsinline="" loop="" poster="<?php echo $video_poster; ?>" src="<?php the_field('video'); ?>"></video>
						</div>
					<?php endif; ?>
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
