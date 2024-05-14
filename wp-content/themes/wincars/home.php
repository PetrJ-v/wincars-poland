<?php
get_header();
?>
<main class="main">
	<div class="container">

		<?php get_template_part('parts/categoryes-tabs'); ?>

		<?php if (have_posts()) : ?>
			<div class="projects">
				<?php while (have_posts()) : ?>
					<?php the_post(); ?>
					<?php get_template_part(''); ?>
				<?php endwhile; ?>
				<?php
				// data for ajax load more
				$paged = get_query_var('paged') ? get_query_var('paged') : 1;
				$max_pages = $wp_query->max_num_pages;
				?>

				<?php echo '<input id="paged-store" type="hidden" data-max_pages="' . $max_pages . '" data-paged="' . $paged . '">'; ?>

			</div>
		<?php endif; ?>
	</div>

</main>

<?php get_footer(); ?>
