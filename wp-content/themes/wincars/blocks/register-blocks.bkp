<?php
function wincars_register_acf_blocks()
{
	// Путь к папке с блоками
	$blocks_dir = get_template_directory() . '/blocks';

	// Получаем список всех папок в директории blocks
	$blocks = glob($blocks_dir . '/*', GLOB_ONLYDIR);

	foreach ($blocks as $block_dir) {
		// Путь к файлу block.json
		$block_json = $block_dir . '/block.json';

		// Если файл block.json существует, регистрируем блок
		if (file_exists($block_json)) {
			register_block_type($block_json, array(
				'style'         => 'wincars-' . basename($block_dir) . '-style',
				'editor_style'  => 'wincars-' . basename($block_dir) . '-editor-style',
				'script'        => 'wincars-' . basename($block_dir) . '-script',
			));
		}
	}
}
add_action('init', 'wincars_register_acf_blocks');

function wincars_enqueue_block_assets()
{
	// Путь к папке с блоками
	$blocks_dir = get_template_directory() . '/blocks';

	// Получаем список всех папок в директории blocks
	$blocks = glob($blocks_dir . '/*', GLOB_ONLYDIR);

	foreach ($blocks as $block_dir) {
		$block_name = basename($block_dir);
		$block_json = json_decode(file_get_contents($block_dir . '/block.json'), true);
		// Получаем полное имя блока из block.json
		$full_block_name = isset($block_json['name']) ? $block_json['name'] : '';


		if ($full_block_name && has_block($full_block_name)) {
			// Подключаем стили для фронтенда
			if (file_exists($block_dir . '/' . $block_name . '.css')) {
				wp_register_style(
					'wincars-' . $block_name . '-style',
					get_template_directory_uri() . '/blocks/' . $block_name . '/' . $block_name . '.css',
					array(),
					filemtime($block_dir . '/' . $block_name . '.css')
				);
			}

			// Подключаем стили для редактора
			if (file_exists($block_dir . '/' . $block_name . '-editor.css')) {
				wp_register_style(
					'wincars-' . $block_name . '-editor-style',
					get_template_directory_uri() . '/blocks/' . $block_name . '/' . $block_name . '-editor.css',
					array(),
					filemtime($block_dir . '/' . $block_name . '-editor.css')
				);
			}

			// Подключаем скрипты блока
			if (file_exists($block_dir . '/' . $block_name . '.js')) {
				wp_register_script(
					'wincars-' . $block_name . '-script',
					get_template_directory_uri() . '/blocks/' . $block_name . '/' . $block_name . '.js',
					array('wp-blocks', 'wp-element', 'wp-editor'),
					filemtime($block_dir . '/' . $block_name . '.js'),
					true
				);
			}
		}
	}
}
add_action('wp_enqueue_scripts', 'wincars_enqueue_block_assets');
add_action('enqueue_block_editor_assets', 'wincars_enqueue_block_assets');
