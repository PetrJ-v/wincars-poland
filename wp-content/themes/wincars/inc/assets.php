<?php
function wincars_assets()
{

	wp_enqueue_style('base', get_stylesheet_directory_uri() . '/assets/css/base-styles.css', array(), '1.0.0');
	wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/js/main.js', ['jquery'], '1.0.0', ['in_footer' => true, 'strategy'  => 'async']);

	if (is_front_page()) {
		wp_enqueue_style('front-page', get_stylesheet_directory_uri() . '/assets/css/pages/front-page.css', array(), '1.0.0');
		wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/assets/libs/wow/animate.min.css', array(), '3.5.1');
		wp_enqueue_style('swiper', get_stylesheet_directory_uri() . '/assets/libs/swiper/swiper.min.css', array(), '8.3.1');
		wp_enqueue_script('wow', get_stylesheet_directory_uri() . '/assets/libs/wow/wow.min.js', array('jquery'), '1.1.3', true);
		wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/assets/libs/swiper/swiper-bundle.min.js', array(), '8.3.1', true);
		// wp_enqueue_script('wow', get_stylesheet_directory_uri() . '/assets/libs/wow/wow.min.js', array('jquery'), '1.1.3', true);
		// wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/js/main.js', array('wow'), '1.0.0', true);
		wp_enqueue_script('front-page', get_stylesheet_directory_uri() . '/assets/js/front-page.js', array('wow', 'swiper'), '1.0.0', true);
	}
	// if (is_page_template('service-pages/all-pdf.php')) {
	// 	wp_enqueue_style('all-pdf', get_stylesheet_directory_uri() . '/assets/css/all-pdf.css', array(), '1.0.3');
	// }
	// if (is_page_template('service-pages/watermark.php')) {
	// 	wp_enqueue_style('watermark', get_stylesheet_directory_uri() . '/assets/css/watermark.css', array(), '1.0.0');

	// 	wp_enqueue_script('html2canvas', get_stylesheet_directory_uri() . '/assets/libs/html2canvas/html2canvas-1.4.1.min.js', array(), '1.0.0', ['in_footer' => true, 'strategy'  => 'async']);
	// 	wp_enqueue_script('jszip', get_stylesheet_directory_uri() . '/assets/libs/jszip/jszip.min.js', array(), '1.0.0', ['in_footer' => true, 'strategy'  => 'async']);
	// 	wp_enqueue_script('file-saver', get_stylesheet_directory_uri() . '/assets/libs/file-saver/file-saver.min.js', array(), '1.0.0', ['in_footer' => true, 'strategy'  => 'async']);
	// 	wp_enqueue_script('watermark', get_stylesheet_directory_uri() . '/assets/js/watermark.js', ['html2canvas', 'jszip', 'file-saver'], '1.0.0', ['in_footer' => true, 'strategy'  => 'async']);
	// }
	// if (get_post_type() === 'pdf-price') {
	// 	wp_enqueue_style('single-pdf', get_stylesheet_directory_uri() . '/assets/css/single-pdf.css', array(), '1.0.3');
	// }
	// if (get_post_type() === 'collage') {
	// 	wp_enqueue_style('collage', get_stylesheet_directory_uri() . '/assets/css/collage.css', array(), '1.0.1');
	// 	wp_enqueue_script('html2canvas', get_stylesheet_directory_uri() . '/assets/libs/html2canvas/html2canvas-1.0.0-rc.5.min.js', array(), '1.0.0', ['in_footer' => true, 'strategy'  => 'async']);
	// }
	// wp_enqueue_script('main-scripts', get_stylesheet_directory_uri() . '/assets/js/main.js', ['jquery'], '1.0.0', ['in_footer' => true, 'strategy'  => 'async']);
}

add_action('wp_enqueue_scripts', 'wincars_assets');

add_action( 'admin_enqueue_scripts', function(){
	wp_enqueue_style( 'my-wp-admin', get_stylesheet_directory_uri() .'/assets/css/wp-admin.css', array(), '1.0.1' );
}, 99 );
