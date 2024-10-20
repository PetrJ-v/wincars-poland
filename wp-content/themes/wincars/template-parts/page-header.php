<header>
	<div class="header">
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
						?>
						<!-- <video preload="none" autoplay="" muted="" playsinline="" loop="" poster="<?php echo $video_poster_desktop; ?>" src="<?php echo $video_url_desktop; ?>"></video> -->
						<video  muted="" width="1365" height="450" playsinline="" loop="" poster="<?php echo $desktop_video_poster; ?>" src="<?php echo $desktop_video; ?>"></video>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</header>
