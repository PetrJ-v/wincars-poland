<header>
	<div class="header">
		<div class="header-container">
			<div class="header-media active" data-function="toggleClassName" data-anim="true">
				<?php get_template_part('template-parts/header-top-line'); ?>
				<div class="header-media__img">
					<?php
					$header_image = get_field('header_image');
					echo wp_get_attachment_image($header_image, 'full');
					?>
				</div>
			</div>
		</div>
	</div>
</header>
