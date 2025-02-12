<?php
$featured_post_id = get_field('featured_post')[0];
$post_preview = get_field('post_preview', $featured_post_id);
$video_url = get_field('video', $featured_post_id);
$featured_post_exerpt = get_the_excerpt($featured_post_id);
?>
<div class="container">
	<div class="featured-post p-tb-20-35">
		<!-- Здесь предусмотреть вместо видео возможность выводить изображение с классом featured-post__img для тех постов, у которых нет видео -->
		<?php if ($video_url) : ?>
			<?php $video_poster = get_field('video_poster', $featured_post_id); ?>
			<div class="video-wrapper">
				<video preload="none" muted="" playsinline="" loop="" poster="<?php if ($video_poster) echo esc_url($video_poster); ?>" src="<?php echo esc_url($video_url); ?>"></video>
				<button class="play-btn img-wrapper">
					<svg width="54" height="55" viewBox="0 0 54 55" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g filter="url(#filter0_b_337_498)">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M26.8586 55C41.6921 55 53.7171 42.6878 53.7171 27.5C53.7171 12.3122 41.6921 0 26.8586 0C12.025 0 0 12.3122 0 27.5C0 42.6878 12.025 55 26.8586 55ZM22.6619 37.5871L37.7698 28.941C38.8889 28.3006 38.889 26.6994 37.7698 26.059L22.6619 17.4129C21.5428 16.7725 20.1439 17.573 20.1439 18.8539V36.1461C20.1439 37.427 21.5428 38.2275 22.6619 37.5871Z" fill="white" fill-opacity="0.3" />
						</g>
					</svg>
				</button>
			</div>
		<?php elseif ($post_preview) : ?>
			<div class="featured-post__img img-wrapper">
				<?php echo wp_get_attachment_image($post_preview, 'full'); ?>
			</div>
		<?php endif; ?>
		<div class="featured-post__preview preview">
			<div class="preview__date"><?php echo get_the_date('j F Y', $featured_post_id) . ' г.'; ?></div>
			<h3 class="preview__title">
				<a class="preview__title-link" href="<?php echo get_the_permalink($featured_post_id); ?>"><?php echo get_the_title($featured_post_id); ?></a>
				<div class="preview__title-deco">
					<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 11L11 1M11 1H1M11 1V11" stroke="#FDFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
			</h3>

			<?php if ($featured_post_exerpt) : ?>
				<div class="preview__text">
					<?php echo $featured_post_exerpt; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
