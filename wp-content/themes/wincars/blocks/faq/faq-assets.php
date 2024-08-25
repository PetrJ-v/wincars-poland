<?php

(function () {
	$block_name = 'faq';
	if (!is_admin()) {
		wp_register_style(
			'acf-block-' . $block_name,
			_TEMPLATEPATH . '/assets/css/blocks/' . $block_name . '.css',
			['base'],
			'1.0.0'
		);
	}

	wp_register_script(
		'acf-block-' . $block_name,
		_TEMPLATEPATH . '/blocks/' .$block_name . '/' . $block_name . '.js',
		['jquery'],
		'1.0.0',
		true
	);
})();
