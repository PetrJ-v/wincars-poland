<?php
add_action('init', 'register_post_types');

function register_post_types()
{

	register_post_type('pdf-price', [
		'taxonomies' => ['category'], // post related taxonomies
		'label'  => 'Pdf price',
		'labels' => [
			'name'               => 'Pdf price', // name for the post type.
			'singular_name'      => 'Pdf prices', // name for single post of that type.
			'add_new'            => 'Add pdf price', // to add a new post.
			'add_new_item'       => 'Adding pdf price', // title for a newly created post in the admin panel.
			'edit_item'          => 'Edit pdf price', // for editing post type.
			'new_item'           => 'New pdf price', // new post's text.
			'view_item'          => 'See pdf price', // for viewing this post type.
			'search_items'       => 'Search pdf price', // search for these post types.
			'not_found'          => 'Not Found', // if search has not found anything.
			'parent_item_colon'  => '', // for parents (for hierarchical post types).
			'menu_name'          => 'Pdf prices', // menu name.
		],
		'description'         => 'Template for generate pdf price',
		'public'              => true,
		'exclude_from_search' => true,
		'show_in_menu'        => null, // whether to in admin panel menu
		'show_in_rest'        => null, // Add to REST API. WP 4.7.
		'rest_base'           => null, // $post_type. WP 4.7.
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-editor-ul',
		'hierarchical'        => false,
		// [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ]
		'supports'            => ['title', 'author', 'editor', 'page-attributes', 'revisions'],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	]);

	register_post_type('collage', [
		'taxonomies' => ['category'], // post related taxonomies
		'label'  => 'Collage',
		'labels' => [
			'name'               => 'Collage', // name for the post type.
			'singular_name'      => 'Collages', // name for single post of that type.
			'add_new'            => 'Add collages', // to add a new post.
			'add_new_item'       => 'Adding collage', // title for a newly created post in the admin panel.
			'edit_item'          => 'Edit collage', // for editing post type.
			'new_item'           => 'New collage', // new post's text.
			'view_item'          => 'See collage', // for viewing this post type.
			'search_items'       => 'Search collage', // search for these post types.
			'not_found'          => 'Not Found', // if search has not found anything.
			'parent_item_colon'  => '', // for parents (for hierarchical post types).
			'menu_name'          => 'Collages', // menu name.
		],
		'description'         => 'Template for generate cars collages',
		'public'              => true,
		'exclude_from_search' => true,
		'show_in_menu'        => null, // whether to in admin panel menu
		'show_in_rest'        => null, // Add to REST API. WP 4.7.
		'rest_base'           => null, // $post_type. WP 4.7.
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-images-alt',
		'hierarchical'        => false,
		// [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ]
		'supports'            => ['title', 'author', 'editor', 'page-attributes', 'revisions'],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	]);
}
