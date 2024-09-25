<?php get_header(); ?>

<body <?php body_class(); ?>>
	<header>
		<div class="header">
			<div class="header-container">
				<?php get_template_part('template-parts/header-top-line'); ?>
			</div>
	</header>
	<main>
		<div class="container">
			<div class="post-content">
				<?php the_content(); ?>
			</div>
		</div>

		<?php
		// get_template_part('template-parts/post-previews');
		?>

	</main>

	<?php get_footer(); ?>

</body>

</html>
