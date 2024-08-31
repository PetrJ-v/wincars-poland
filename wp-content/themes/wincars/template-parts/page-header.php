<header>
	<div class="header">
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
				</div>
				<div class="header-media__img">
					<img src="<?php echo _TEMPLATEPATH; ?>/assets/img/about-us/about-header.jpg" fetchpriority="high">
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
