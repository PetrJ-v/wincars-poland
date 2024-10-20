<header>
	<div class="header">
		<?php
		$header_height_settings = get_field('header_height_settings');
		$desktop_height = $header_height_settings['desktop_height'];
		$tablet_heght = $header_height_settings['tablet_heght'];
		$mobile_height = $header_height_settings['mobile_height'];
		?>
		<style>
			.header-media {
				height: <?php echo $desktop_height . 'px;'; ?>
			}

			@media (max-width: 991.98px) {
				.header-media {
					height: <?php echo $tablet_heght . 'px;'; ?>
				}
			}

			@media (max-width: 575.98px) {
				.header-media {
					height: <?php echo $mobile_height . 'px;'; ?>
				}
			}
		</style>
		<div class="header-container">
			<div class="header-media active" data-function="toggleClassName" data-anim="true">
				<?php get_template_part('template-parts/header-top-line'); ?>
				<div class="header-media__img">
					<?php $header_type = get_field('header_type'); ?>
					<?php if ($header_type === 'image') : ?>
						<?php
						$header_image = get_field('header_image');
						echo wp_get_attachment_image($header_image, 'full');
						?>
					<?php elseif ($header_type === 'video') : ?>
						<?php
						$header_video = get_field('header_video');
						$desktop_video = $header_video['video_desktop'];
						$desktop_video_poster = $header_video['video_poster_desktop'];
						$mobile_video = $header_video['video_mobile'];
						$mobile_video_poster = $header_video['video_poster_mobile'];
						?>
						<?php // Desctop video ?>
						<video class="desktop-video" muted="" preload="none" autoplay="" playsinline="" loop="" poster="<?php echo $desktop_video_poster; ?>" src="<?php echo $desktop_video; ?>"></video>
						<?php // Mobile video ?>
						<video class="mobile-video" muted="" preload="none" autoplay="" playsinline="" loop="" poster="<?php echo $mobile_video_poster; ?>" src="<?php echo $mobile_video; ?>"></video>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</header>
