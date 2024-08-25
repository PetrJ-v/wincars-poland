<?php

(function () {
	$block_name = 'why-we';
	wp_register_style(
		'acf-block-' . $block_name,
		_TEMPLATEPATH . '/assets/css/blocks/' . $block_name . '.css',
		['base', 'swiper'],
		'1.0.0'
	);

	wp_register_script(
		'acf-block-' . $block_name,
		get_template_directory_uri() . '/blocks/' .$block_name . '/' . $block_name . '.js',
		['jquery', 'swiper'],
		'1.0.0',
		true
	);
})();
