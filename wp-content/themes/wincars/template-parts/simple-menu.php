<div class="simple-menu-wrapper">
	<div class="header-media">
		<div class="header-menu-wrapper">
			<?php get_template_part('header-menu-btn'); ?>
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
			<!-- <nav class="header-menu">
				<ul id="menu-main-navigation" class="menu">
					<li class="menu-item current-menu-item current_page_item">
						<a href="/html/front-page.html" aria-current="page">Главната</a>
					</li>
					<li class="menu-item menu-item-has-children">
						<a href="#">Автомобили</a>
					</li>
					<li id="menu-item-1052" class="menu-item menu-item-has-children">
						<a href="/html/about.html">За нас</a>
					</li>
					<li id="menu-item-1053" class="menu-item">
						<a href="/html/faq.html">FAQ</a>
					</li>
					<li id="menu-item-1053" class="menu-item">
						<a href="/html/contacts.html">Контакти</a>
					</li>
				</ul>
			</nav> -->
		</div>
		<div class="header-media__cta">
			<div class="header-media__cta-btn-wrapper">
				<button class="header-media__cta-btn accent-btn open-popup" data-target="main-form">Остави
					запитване</button>
			</div>
		</div>
	</div>
</div>
