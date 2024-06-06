<?php
#Template Name: All pdf
get_header();
?>

<body <?php body_class(); ?>>

	<header>
		<div class="container">
			<div class="header">
				<div class="header__logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Wincars logo">
				</div>
			</div>
		</div>
	</header>
	<main class="main">
		<div class="container">
			<h1>Pdf прайси</h1>
			<?php if (is_user_logged_in() && current_user_can('administrator')) : ?>
				<div class="pdf-links">
					<?php
					query_posts(array(
						'post_type' => 'pdf-price'
					));

					if (have_posts()) {
						while (have_posts()) {
							the_post(); ?>
							<div class="pdf-links__item">
								<a href='<?php the_permalink(); ?>' class="pdf-page-link" target='blank'><?php the_title(); ?></a>
							</div>
					<?php }
						wp_reset_query();
					}
					?>
				</div>
			<?php else : ?>
				<h1 class="all-pdf-title">Нямате достъп до тази страница</h1>
			<?php endif; ?>
		</div>
	</main>

	<footer>
		<?php wp_footer(); ?>
	</footer>

</body>

</html>
