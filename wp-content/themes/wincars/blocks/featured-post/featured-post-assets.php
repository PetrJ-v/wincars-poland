<?php

(function () {
	$block_name = 'featured-post';
	wp_register_style(
		'acf-block-' . $block_name,
		_TEMPLATEPATH . '/assets/css/blocks/' . $block_name . '.css',
		['base'],
		'1.0.0'
	);
})();