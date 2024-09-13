<?php

add_action('after_setup_theme', 'wincars_setup');
function wincars_setup()
{

	load_theme_textdomain('wincars', get_template_directory());

	register_nav_menus(array(
		'top' => 'Top Menu',
		'footer-left' => 'Footer Menu Left',
		'footer-right' => 'Footer Menu right',
	));

	if (function_exists('acf_add_options_page')) {
		acf_add_options_page(['page_title' => __('Theme Settings')]);
	}
	add_theme_support('title-tag');
}

add_action( 'init', 'wincars_remove_large_image_sizes' );
function wincars_remove_large_image_sizes() {
  remove_image_size( '1536x1536' );             // 2 x Medium Large (1536 x 1536)
  remove_image_size( '2048x2048' );             // 2 x Large (2048 x 2048)
}

// add_image_size('admin', 300, 9999);
// add_image_size('mobile', 535, 9999);


// Disable gutenberg
// add_filter('use_block_editor_for_post', 'my_disable_gutenberg', 10, 2);
// function my_disable_gutenberg($can_edit, $post)
// {
// 	return false;
// }
// Disable classic editor
add_action('admin_head', 'disable_wp_editor');
function disable_wp_editor()
{
	if ((get_template_name() != 'default')) {
		remove_post_type_support('page', 'editor');
	}
	// remove_post_type_support('post', 'editor');
	remove_post_type_support('pdf-price', 'editor');
	remove_post_type_support('collage', 'editor');
	remove_post_type_support('car', 'editor');
}

// Disable contact form 7 styles and paragraths
add_filter('wpcf7_autop_or_not', '__return_false');
add_filter('wpcf7_load_css', '__return_false');

function scalato_disable_gutenberg($use_block_editor, $post)
{
	if (get_post_type() === 'car') {
		return false;
	}
	// return
	return $use_block_editor; // for exludes
}
add_filter('use_block_editor_for_post', 'scalato_disable_gutenberg', 10, 2);
