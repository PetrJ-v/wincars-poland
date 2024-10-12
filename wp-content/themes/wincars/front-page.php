<?php
#Template Name: Front page
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>
	<header>
		<div class="header">
			<div class="header-container">
				<?php get_template_part('template-parts/header-top-line'); ?>
				<?php
				$video_poster_desktop = get_field('hp_video_poster_desktop');
				$video_url_desktop = get_field('hp_video_url_desktop');
				$video_poster_mobile = get_field('hp_video_poster_mobile');
				// $video_url_mobile = get_field('hp_video_url_mobile');
				$video_url_mobile = 'f';
				?>
				<?php if ($video_url_desktop) : ?>
					<div class="header-media header-media--desktop active">
						<div class="header-media__img">
							<video preload="none" autoplay="" muted="" playsinline="" loop="" poster="<?php echo $video_poster_desktop; ?>" src="<?php echo $video_url_desktop; ?>"></video>
						</div>
					</div>
				<?php endif; ?>
				<?php if ($video_url_mobile) : ?>
					<div class="header-media header-media--mobile active">
						<div class="header-media__img">
							<img src="<?php echo $video_poster_mobile; ?>" fetchpriority="high" width="574" height="340" alt="">
							<!-- <video preload="none" autoplay="" muted="" playsinline="" loop="" poster="<?php echo $video_poster_mobile; ?>" src="<?php echo $video_url_mobile; ?>"></video> -->
						</div>
					</div>
				<?php else : ?>
					<div class="header-media header-media--mobile active">
						<div class="header-media__img">
							<video preload="none" autoplay="" muted="" playsinline="" loop="" poster="<?php echo $video_poster_desktop; ?>" src="<?php echo $video_url_desktop; ?>"></video>
						</div>
					</div>
				<?php endif; ?>
				<div class="hp-tracking align-center">
					<div class="hp-tracking__title">Проследяване</div>
					<form class="hp-tracking__form">
						<div class="hp-tracking-input-wrapper" id="tracking-form">
							<input type="text" name="hp-tracking" class="hp-tracking__vin" id="tracking" required placeholder="Въведете VIN">
							<div class="hp-tracking__form-message tracking-form-message">Грешен VIN номер</div>
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
