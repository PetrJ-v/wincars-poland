<?php
function wincars_register_acf_blocks()
{
	// Путь к папке с блоками
	$blocks_dir = get_template_directory() . '/blocks';

	// Получаем список всех папок в директории blocks
	$blocks = glob($blocks_dir . '/*', GLOB_ONLYDIR);

	foreach ($blocks as $block_dir) {
		$block_json = $block_dir . '/block.json';
		$block_name = basename($block_dir);
		$register_block_file = $block_dir . '/' . $block_name . '-assets.php';

		// Если файл block-name-assets.php существует, подключаем его
		if (file_exists($register_block_file)) {
			include $register_block_file;
		}

		// Если файл block.json существует, регистрируем блок
		if (file_exists($block_json)) {
			register_block_type($block_json);
		}
	}
}
add_action('init', 'wincars_register_acf_blocks');
