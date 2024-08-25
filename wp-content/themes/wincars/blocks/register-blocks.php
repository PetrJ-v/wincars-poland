<?php

function wincars_register_acf_blocks()
{
	// Путь к папке с блоками
	$blocks_dir = get_template_directory() . '/blocks';

	// Получаем список всех папок в директории blocks
	$blocks = glob($blocks_dir . '/*', GLOB_ONLYDIR);
	foreach ($blocks as $block_dir) {
		$block_json = $block_dir . '/block.json';
		// Если файл block.json существует, регистрируем блок
		if (file_exists($block_json)) {
			register_block_type($block_json);
		}
	}
}
add_action('init', 'wincars_register_acf_blocks');

function wincars_register_acf_blocks_assets()
{
	// Путь к папке с блоками
	$blocks_dir = get_template_directory() . '/blocks';

	// Получаем список всех папок в директории blocks
	$blocks = glob($blocks_dir . '/*', GLOB_ONLYDIR);
	foreach ($blocks as $block_dir) {
		$block_name = basename($block_dir);
		$register_block_file = $block_dir . '/' . $block_name . '-assets.php';

		// Если файл block-name-assets.php существует, подключаем его
		if (file_exists($register_block_file) && has_block('acf/' . $block_name)) {
			include $register_block_file;
		}
	}
}
add_action('enqueue_block_assets', 'wincars_register_acf_blocks_assets');
