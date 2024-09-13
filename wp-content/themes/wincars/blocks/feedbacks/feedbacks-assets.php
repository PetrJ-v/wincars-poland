<?php

(function () {
	$block_name = 'feedbacks';
	if (!is_admin()) {
		wp_register_style(
			'acf-block-' . $block_name,
			_TEMPLATEPATH . '/assets/css/blocks/' . $block_name . '.css',
			['base'],
			'1.0.0'
		);
	}
	// Swiper slide i will use inside other pages
	// On feedbacks page it will be no swiper block with flex-wrap wrap
	if (!is_page_template('templates/page-feedbacks.php')) {
		wp_register_style('swiper', _TEMPLATEPATH . '/assets/libs/swiper/swiper.min.css', array(), '8.3.1');
		wp_register_script(
			'acf-block-' . $block_name,
			_TEMPLATEPATH . '/blocks/' .$block_name . '/' . $block_name . '.js',
			['jquery', 'swiper'],
			'1.0.0',
			true
		);
	}

})();
