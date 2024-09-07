<?php
function wincars_assets()
{

	wp_enqueue_style('base', _TEMPLATEPATH . '/assets/css/base-styles.css', array(), '1.0.0');
	wp_enqueue_script('main', _TEMPLATEPATH . '/assets/js/main.js', ['jquery'], '1.0.0', ['in_footer' => true, 'strategy'  => 'async']);
	wp_register_style('swiper', _TEMPLATEPATH . '/assets/libs/swiper/swiper.min.css', array(), '8.3.1');
	wp_register_script('swiper', _TEMPLATEPATH . '/assets/libs/swiper/swiper-bundle.min.js', array(), '8.3.1', true);

	if (is_front_page()) {
		wp_enqueue_style('front-page', _TEMPLATEPATH . '/assets/css/templates/front-page.css', array('base'), '1.0.0');
		wp_enqueue_style('animate', _TEMPLATEPATH . '/assets/libs/wow/animate.min.css', array(), '3.5.1');
		wp_enqueue_style('swiper');
		wp_enqueue_script('wow', _TEMPLATEPATH . '/assets/libs/wow/wow.min.js', array('jquery'), '1.1.3', true);
		wp_enqueue_script('swiper');
		wp_enqueue_script('front-page', _TEMPLATEPATH . '/assets/js/front-page.js', array('wow', 'swiper'), '1.0.0', true);
	}
	if (is_single() && (get_post_type() != 'car')) {
		wp_enqueue_style('single-header', _TEMPLATEPATH . '/assets/css/first-screen/post-header.css', array('base'), '1.0.0');
		wp_enqueue_style('single', _TEMPLATEPATH . '/assets/css/single.css', array('base', 'single-header'), '1.0.0');
		wp_enqueue_style('swiper');
		wp_enqueue_script('swiper');
		wp_enqueue_script('single', _TEMPLATEPATH . '/assets/js/single.js', array('jquery', 'swiper'), '1.0.0', true);
	}
	if (get_post_type() === 'car') {
		wp_enqueue_style('single-car', _TEMPLATEPATH . '/assets/css/templates/single-car.css', array('base'), '1.0.0');
		wp_enqueue_style('swiper');
		wp_enqueue_script('swiper');
		wp_enqueue_script('single-car', _TEMPLATEPATH . '/assets/js/single-car.js', array('jquery', 'swiper'), '1.0.0', true);
	}
	if (is_page_template('templates/about.php')) {
		wp_enqueue_style('about-page', _TEMPLATEPATH . '/assets/css/templates/about.css', array('base'), '1.0.0');
		wp_enqueue_script('about-page', _TEMPLATEPATH . '/assets/js/about.js', array('main'), '1.0.0', true);
	}
	if (is_page_template('templates/contacts.php')) {
		wp_enqueue_style('contacts-page', _TEMPLATEPATH . '/assets/css/templates/contacts.css', array('base'), '1.0.0');
		wp_enqueue_style('animate', _TEMPLATEPATH . '/assets/libs/wow/animate.min.css', array(), '3.5.1');
		wp_enqueue_script('wow', _TEMPLATEPATH . '/assets/libs/wow/wow.min.js', array('jquery'), '1.1.3', true);
		wp_enqueue_script('contacts-page', _TEMPLATEPATH . '/assets/js/contacts.js', array('jquery', 'wow'), '1.0.0', true);
		wp_enqueue_script('contact-form', _TEMPLATEPATH . '/assets/js/blocks/contact-form.js', array(), '1.0.0', true);
	}
	// if (is_page_template('service-pages/all-pdf.php')) {
	// 	wp_enqueue_style('all-pdf', _TEMPLATEPATH . '/assets/css/all-pdf.css', array(), '1.0.3');
	// }
	// if (is_page_template('service-pages/watermark.php')) {
	// 	wp_enqueue_style('watermark', _TEMPLATEPATH . '/assets/css/watermark.css', array(), '1.0.0');

	// 	wp_enqueue_script('html2canvas', _TEMPLATEPATH . '/assets/libs/html2canvas/html2canvas-1.4.1.min.js', array(), '1.0.0', ['in_footer' => true, 'strategy'  => 'async']);
	// 	wp_enqueue_script('jszip', _TEMPLATEPATH . '/assets/libs/jszip/jszip.min.js', array(), '1.0.0', ['in_footer' => true, 'strategy'  => 'async']);
	// 	wp_enqueue_script('file-saver', _TEMPLATEPATH . '/assets/libs/file-saver/file-saver.min.js', array(), '1.0.0', ['in_footer' => true, 'strategy'  => 'async']);
	// 	wp_enqueue_script('watermark', _TEMPLATEPATH . '/assets/js/watermark.js', ['html2canvas', 'jszip', 'file-saver'], '1.0.0', ['in_footer' => true, 'strategy'  => 'async']);
	// }
	// if (get_post_type() === 'pdf-price') {
	// 	wp_enqueue_style('single-pdf', _TEMPLATEPATH . '/assets/css/single-pdf.css', array(), '1.0.3');
	// }
	// if (get_post_type() === 'collage') {
	// 	wp_enqueue_style('collage', _TEMPLATEPATH . '/assets/css/collage.css', array(), '1.0.1');
	// 	wp_enqueue_script('html2canvas', _TEMPLATEPATH . '/assets/libs/html2canvas/html2canvas-1.0.0-rc.5.min.js', array(), '1.0.0', ['in_footer' => true, 'strategy'  => 'async']);
	// }
	// wp_enqueue_script('main-scripts', _TEMPLATEPATH . '/assets/js/main.js', ['jquery'], '1.0.0', ['in_footer' => true, 'strategy'  => 'async']);
}

add_action('wp_enqueue_scripts', 'wincars_assets');

add_action( 'admin_enqueue_scripts', function(){
	wp_enqueue_style( 'my-wp-admin', _TEMPLATEPATH .'/assets/css/wp-admin.css', array(), '1.0.1' );
}, 99 );
