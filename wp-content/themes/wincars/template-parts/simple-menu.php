<div class="simple-menu-wrapper">
	<div class="header-media">
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
			<!-- <a href="<?php echo get_home_url(); ?>" class="header-logo img-wrapper">
				<img src="<?php echo _TEMPLATEPATH; ?>/assets/img/logo-black-w.svg" alt="Wincars logo">
			</a> -->
			<a href="<?php echo get_home_url(); ?>" class="header-logo img-wrapper">
				<img src="<?php echo _TEMPLATEPATH; ?>/assets/img/logo-white-b.svg" alt="Wincars logo">
			</a>
		</div>
		<div class="header-media__cta">
			<div class="header-media__cta-btn-wrapper">
				<button class="header-media__cta-btn accent-btn open-popup" data-target="main-form">Остави
					запитване</button>
			</div>
		</div>
	</div>
</div>
