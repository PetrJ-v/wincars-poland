<?php

add_action('wp_ajax_loadmore', 'true_loadmore');
add_action('wp_ajax_nopriv_loadmore', 'true_loadmore');

function true_loadmore()
{

	$paged = !empty($_POST['paged']) ? $_POST['paged'] : 1;
	$paged++;

	$args = array(
		'paged' => $paged,
		'post_status' => 'publish'
	);
	if ($_POST['currentCatId'] != 'not category') {
		$current_cat_id = $_POST['currentCatId'];
		$args['cat'] = $current_cat_id;
	}

	query_posts($args);

	while (have_posts()) : the_post();

		get_template_part('parts/post-preview', null, ['additional_class_name' => 'projects__item--hidden']);

	endwhile;

	die;
}
