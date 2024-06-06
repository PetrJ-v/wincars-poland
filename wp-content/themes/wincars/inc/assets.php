<?php
function indiana_assets()
{

	if (is_page_template('service-pages/all-pdf.php')) {
		wp_enqueue_style('all-pdf', get_stylesheet_directory_uri() . '/assets/css/all-pdf.css', array(), '1.0.2');
	}
	if (get_post_type() === 'pdf-price') {
		wp_enqueue_style('single-pdf', get_stylesheet_directory_uri() . '/assets/css/single-pdf.css', array(), '1.0.1');
	}
	if (get_post_type() === 'collage') {
		wp_enqueue_style('collage', get_stylesheet_directory_uri() . '/assets/css/collage.css', array(), '1.0.0');
		wp_enqueue_script('html2canvas', get_stylesheet_directory_uri() . '/assets/libs/html2canvas/html2canvas-1.0.0-rc.5.min.js', array(), '1.0.0', ['in_footer' => true, 'strategy'  => 'async']);
	}
	wp_enqueue_script('main-scripts', get_stylesheet_directory_uri() . '/assets/js/main.js', ['jquery'], '1.0.0', ['in_footer' => true, 'strategy'  => 'async']);
}

add_action('wp_enqueue_scripts', 'indiana_assets');

add_action( 'admin_enqueue_scripts', function(){
	wp_enqueue_style( 'my-wp-admin', get_template_directory_uri() .'/assets/css/wp-admin.css' );
}, 99 );
