<?php
get_header();
$video_poster = get_field('video_poster');
$video_link = get_field('video');
$post_preview = get_field('post_preview');
$hero_text = get_field('small_intro_text');
?>

<body <?php body_class(); ?>>
	<header>
		<div class="header">
			<div class="header-container">
				<?php get_template_part('template-parts/header-top-line'); ?>
			</div>

			<div class="container">
				<div class="hero align-center">
					<?php $hero_subtitle_text = __('Published on ', 'wincars'); ?>
					<div class="hero__subtitle"><?php echo $hero_subtitle_text . ' ' . get_the_date('j F Y') . ' r.'; ?></div>
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
			<?php elseif ($post_preview) : ?>
				<div class="container">
					<div class="main-post-img img-wrapper">
						<?php echo wp_get_attachment_image($post_preview, 'full'); ?>
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

		<?php get_template_part('template-parts/post-previews'); ?>

	</main>

	<?php get_footer(); ?>

</body>

</html>
