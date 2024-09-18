<header>
	<div class="header header--default">
		<div class="header-container">
			<div class="header-media active" data-function="toggleClassName" data-anim="true">
				<div class="header-menu-wrapper">
					<?php get_template_part('template-parts/header-menu-btn'); ?>
					<?php
					wp_nav_menu([
						'theme_location'  => 'top',
						'container'       => 'nav',
						'container_class' => 'header-menu',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 1,
					]);
					?>
					<a href="<?php echo get_home_url(); ?>" class="header-logo img-wrapper">
						<img src="<?php echo _TEMPLATEPATH; ?>/assets/img/logo-black-w.svg" alt="Wincars logo">
					</a>
					<!-- <a href="<?php echo get_home_url(); ?>" class="header-logo img-wrapper">
						<img src="<?php echo _TEMPLATEPATH; ?>/assets/img/logo-white-b.svg" alt="Wincars logo">
					</a> -->
				</div>
				<div class="header-media__img">
					<?php
					$header_image = get_field('header_image');
					echo wp_get_attachment_image($header_image, 'full');
					?>
				</div>
				<div class="header-media__cta">
					<div class="header-media__cta-btn-wrapper">
						<button class="header-media__cta-btn accent-btn open-popup" data-target="main-form">Остави запитване</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
