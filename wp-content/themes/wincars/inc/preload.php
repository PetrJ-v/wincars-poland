<?php
function preload_images()
{
	if (is_front_page()) {

		$video_poster_desktop = get_field('hp_video_poster_desktop');
		$video_poster_mobile = get_field('hp_video_poster_mobile');

		if ($video_poster_desktop) {
			echo '<link rel="preload" href="' . esc_url($video_poster_desktop) . '" as="image" type="image/jpeg">';
		}

		if ($video_poster_mobile) {
			echo '<link rel="preload" href="' . esc_url($video_poster_mobile) . '" as="image" type="image/jpeg">';
		}
	}
}
add_action('wp_head', 'preload_images');
