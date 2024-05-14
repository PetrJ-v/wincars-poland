<?php
function indiana_assets()
{
	wp_enqueue_style('main-styles', get_stylesheet_directory_uri() . '/assets/css/style.min.css', array(), '1.0.3');
	wp_enqueue_script('main-scripts', get_stylesheet_directory_uri() . '/assets/js/main.js', ['jquery'], '1.0.0', true);
	if (is_home() || is_category()) {
		wp_register_script('load-more', get_stylesheet_directory_uri() . '/assets/js/loadmore.js', ['jquery'], '1.0.0', true);
		wp_localize_script('load-more', 'indiana', array('ajaxurl' => admin_url('admin-ajax.php')));
		wp_enqueue_script('load-more');
	}
}

add_action('wp_enqueue_scripts', 'indiana_assets');
