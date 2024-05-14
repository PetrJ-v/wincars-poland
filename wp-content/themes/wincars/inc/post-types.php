<?php
add_action( 'init', 'register_post_types' );

function register_post_types(){

	register_post_type( 'pdf_price', [
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
		//'publicly_queryable'  => null, // depends on public
		//'exclude_from_search' => null, // depends on public
		//'show_ui'             => null, // depends on public
		//'show_in_nav_menus'   => null, // depends on public
		'show_in_menu'        => null, // whether to in admin panel menu
		//'show_in_admin_bar'   => null, // depends on show_in_menu.
		'show_in_rest'        => null, // Add to REST API. WP 4.7.
		'rest_base'           => null, // $post_type. WP 4.7.
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // Array of additional rights for this post type.
		//'map_meta_cap'      => null, // Set to true to enable the default handler for meta caps.
		'hierarchical'        => false,
		// [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ]
		'supports'            => [ 'title', 'editor', 'page-attributes' ],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}
