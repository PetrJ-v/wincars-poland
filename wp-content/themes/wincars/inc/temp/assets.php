<?php
function wincars_assets()
{

	if (!is_page_template('service-pages/all-pdf.php') && !is_page_template('service-pages/watermark.php') && !(get_post_type() === 'pdf-price') && !(get_post_type() === 'collage')){
		wp_enqueue_style('base', _TEMPLATEPATH . '/assets/css/base-styles.css', array(), _S_VERSION);
		wp_enqueue_script('main', _TEMPLATEPATH . '/assets/js/main.js', ['jquery'], _S_VERSION, ['in_footer' => true, 'strategy'  => 'async']);
		$ajax_params = array(
			'ajax_url' => admin_url('admin-ajax.php')
		);
		wp_localize_script('main', 'ajax_params', $ajax_params);
		wp_enqueue_script('contact-form', _TEMPLATEPATH . '/assets/js/blocks/contact-form.js', array(), _S_VERSION, true);
		wp_register_style('swiper', _TEMPLATEPATH . '/assets/libs/swiper/swiper.min.css', array(), '8.3.1');
		wp_register_script('swiper', _TEMPLATEPATH . '/assets/libs/swiper/swiper-bundle.min.js', array(), '8.3.1', true);
	}

	if (is_front_page()) {
		wp_enqueue_style('front-page', _TEMPLATEPATH . '/assets/css/templates/front-page.css', array('base'), _S_VERSION);
		wp_enqueue_style('animate', _TEMPLATEPATH . '/assets/libs/wow/animate.min.css', array(), '3.5.1');
		wp_enqueue_style('swiper');
		wp_enqueue_script('wow', _TEMPLATEPATH . '/assets/libs/wow/wow.min.js', array('jquery'), '1.1.3', true);
		wp_enqueue_script('swiper');
		wp_enqueue_script('front-page', _TEMPLATEPATH . '/assets/js/front-page.js', array('wow', 'swiper'), _S_VERSION, true);
		wp_enqueue_script('tracking', _TEMPLATEPATH . '/assets/js/tracking.js', array(), _S_VERSION, true);
	}
	if (is_single() && (get_post_type() != 'car')) {
		wp_enqueue_style('single-header', _TEMPLATEPATH . '/assets/css/first-screen/post-header.css', array('base'), _S_VERSION);
		wp_enqueue_style('single', _TEMPLATEPATH . '/assets/css/single.css', array('base', 'single-header'), _S_VERSION);
		wp_enqueue_style('swiper');
		wp_enqueue_script('swiper');
		wp_enqueue_script('single', _TEMPLATEPATH . '/assets/js/single.js', array('jquery', 'swiper'), _S_VERSION, true);
	}
	if (get_template_name() === 'templates/tracking.php') {
		wp_enqueue_style('tracking', _TEMPLATEPATH . '/assets/css//templates/tracking.css', array('base'), _S_VERSION);
		wp_enqueue_script('tracking', _TEMPLATEPATH . '/assets/js/tracking.js', array(), _S_VERSION, true);
	}
	if (is_page() && get_template_name() === 'default') {
		wp_enqueue_style('single-header', _TEMPLATEPATH . '/assets/css/first-screen/post-header.css', array('base'), _S_VERSION);
		wp_enqueue_style('single', _TEMPLATEPATH . '/assets/css/single.css', array('base', 'single-header'), _S_VERSION);
	}
	if (get_post_type() === 'car') {
		wp_enqueue_style('single-car', _TEMPLATEPATH . '/assets/css/templates/single-car.css', array('base'), _S_VERSION);
		wp_enqueue_style('swiper');
		wp_enqueue_script('swiper');
		wp_enqueue_script('single-car', _TEMPLATEPATH . '/assets/js/single-car.js', array('jquery', 'swiper'), _S_VERSION, true);
	}
	if (is_page_template('templates/about.php')) {
		wp_enqueue_style('about-page', _TEMPLATEPATH . '/assets/css/templates/about.css', array('base'), _S_VERSION);
		wp_enqueue_script('about-page', _TEMPLATEPATH . '/assets/js/about.js', array('main'), _S_VERSION, true);
	}
	if (is_page_template('templates/contacts.php')) {
		wp_enqueue_style('contacts-page', _TEMPLATEPATH . '/assets/css/templates/contacts.css', array('base'), _S_VERSION);
		wp_enqueue_style('animate', _TEMPLATEPATH . '/assets/libs/wow/animate.min.css', array(), '3.5.1');
		wp_enqueue_script('wow', _TEMPLATEPATH . '/assets/libs/wow/wow.min.js', array('jquery'), '1.1.3', true);
		wp_enqueue_script('contacts-page', _TEMPLATEPATH . '/assets/js/contacts.js', array('jquery', 'wow'), _S_VERSION, true);
	}
	if (is_page_template('templates/faq.php')) {
		wp_enqueue_style('faq-page', _TEMPLATEPATH . '/assets/css/templates/faq.css', array('base'), _S_VERSION);
		wp_enqueue_style('animate', _TEMPLATEPATH . '/assets/libs/wow/animate.min.css', array(), '3.5.1');
		wp_enqueue_script('wow', _TEMPLATEPATH . '/assets/libs/wow/wow.min.js', array('jquery'), '1.1.3', true);
		wp_enqueue_script('contacts-page', _TEMPLATEPATH . '/assets/js/faq.js', array('jquery', 'wow'), _S_VERSION, true);
	}
	if (is_page_template('templates/blog.php')) {
		wp_enqueue_style('blog', _TEMPLATEPATH . '/assets/css/templates/blog.css', array('base'), _S_VERSION);
		wp_enqueue_style('animate', _TEMPLATEPATH . '/assets/libs/wow/animate.min.css', array(), '3.5.1');
		wp_enqueue_script('wow', _TEMPLATEPATH . '/assets/libs/wow/wow.min.js', array('jquery'), '1.1.3', true);
		wp_enqueue_script('contacts-page', _TEMPLATEPATH . '/assets/js/blog.js', array('jquery', 'wow'), _S_VERSION, true);
	}
	if (is_page_template('templates/page-feedbacks.php')) {
		wp_enqueue_style('testimonials', _TEMPLATEPATH . '/assets/css/templates/testimonials.css', array('base'), _S_VERSION);
		wp_enqueue_style('animate', _TEMPLATEPATH . '/assets/libs/wow/animate.min.css', array(), '3.5.1');
		wp_enqueue_script('wow', _TEMPLATEPATH . '/assets/libs/wow/wow.min.js', array('jquery'), '1.1.3', true);
		wp_enqueue_script('testimonials', _TEMPLATEPATH . '/assets/js/testimonials.js', array('jquery', 'wow'), _S_VERSION, true);
	}
	if (is_page_template('service-pages/all-pdf.php')) {
		wp_enqueue_style('all-pdf', _TEMPLATEPATH . '/assets/css/all-pdf.css', array(), _S_VERSION);
	}
	if (is_page_template('service-pages/watermark.php')) {
		wp_enqueue_style('watermark', _TEMPLATEPATH . '/assets/css/watermark.css', array(), _S_VERSION);

		wp_enqueue_script('html2canvas', _TEMPLATEPATH . '/assets/libs/html2canvas/html2canvas-1.4.1.min.js', array(), '1.0.0', ['in_footer' => true, 'strategy'  => 'async']);
		wp_enqueue_script('jszip', _TEMPLATEPATH . '/assets/libs/jszip/jszip.min.js', array(), '1.0.0', ['in_footer' => true, 'strategy'  => 'async']);
		wp_enqueue_script('file-saver', _TEMPLATEPATH . '/assets/libs/file-saver/file-saver.min.js', array(), '1.0.0', ['in_footer' => true, 'strategy'  => 'async']);
		wp_enqueue_script('watermark', _TEMPLATEPATH . '/assets/js/watermark.js', ['html2canvas', 'jszip', 'file-saver'], _S_VERSION, ['in_footer' => true, 'strategy'  => 'async']);
	}
	if (get_post_type() === 'pdf-price') {
		wp_enqueue_style('single-pdf', _TEMPLATEPATH . '/assets/css/single-pdf.css', array(), _S_VERSION);
	}
	if (get_post_type() === 'collage') {
		wp_enqueue_style('collage', _TEMPLATEPATH . '/assets/css/collage.css', array(), _S_VERSION);
		wp_enqueue_script('html2canvas', _TEMPLATEPATH . '/assets/libs/html2canvas/html2canvas-1.0.0-rc.5.min.js', array(), '1.0.0', ['in_footer' => true, 'strategy'  => 'async']);
	}
	if (is_404()) {
		wp_enqueue_style('404', _TEMPLATEPATH . '/assets/css/404.css', array('base'), _S_VERSION);
	}
	// wp_enqueue_script('main-scripts', _TEMPLATEPATH . '/assets/js/main.js', ['jquery'], '1.0.0', ['in_footer' => true, 'strategy'  => 'async']);
}

add_action('wp_enqueue_scripts', 'wincars_assets');

add_action( 'admin_enqueue_scripts', function(){
	wp_enqueue_style( 'my-wp-admin', _TEMPLATEPATH .'/assets/css/wp-admin.css', array(), _S_VERSION );
}, 99 );
