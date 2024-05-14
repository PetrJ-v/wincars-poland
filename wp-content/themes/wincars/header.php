<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<body <?php body_class(); ?>>
		<header>
			<?php
			wp_nav_menu([
				'theme_location'  => 'top',
				'container'       => 'nav',
				'container_class' => 'menu-wrapper',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
			]);
			?>
		</header>
