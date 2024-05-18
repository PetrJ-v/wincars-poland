<?php
function indiana_assets()
{
	$page_template_slug = get_page_template_slug();
	$page_template_name = str_replace('.php', '', $page_template_slug);
	$page_template_name = str_replace('templates/', '', $page_template_name);
	$post_type = get_post_type();

	if ($page_template_name === 'all-pdf') {
		wp_enqueue_style('all-pdf', get_stylesheet_directory_uri() . '/assets/css/all-pdf.css', array(), '1.0.1');
	}
	if ($post_type === 'pdf-price') {
		wp_enqueue_style('single-pdf', get_stylesheet_directory_uri() . '/assets/css/single-pdf.css', array(), '1.0.0');
	}
	wp_enqueue_script('main-scripts', get_stylesheet_directory_uri() . '/assets/js/main.js', ['jquery'], '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'indiana_assets');

add_action( 'admin_enqueue_scripts', function(){
	wp_enqueue_style( 'my-wp-admin', get_template_directory_uri() .'/assets/css/wp-admin.css' );
}, 99 );
