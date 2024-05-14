<?php
get_header();
?>
<main class="main">
	<div class="container">

		<?php get_template_part('parts/categoryes-tabs'); ?>

		<?php
		$category = get_queried_object();
		$current_cat_id = $category->term_id;
		$args = array(
			'post_type' => 'post',
			'cat' => $current_cat_id,
			'posts_per_page' => 8,
			'post_status' => 'publish',
		);
		$query = new WP_Query($args);
		?>

		<?php if ($query->have_posts()) : ?>
			<div class="projects">
				<?php while ($query->have_posts()) : ?>
					<?php
						$post = $query->next_post();
						setup_postdata($post);
					?>
					<?php get_template_part('parts/post-preview', null, ['additional_class_name' => null]); ?>
				<?php endwhile; ?>
				<?php
				// current page
				$paged = get_query_var('paged') ? get_query_var('paged') : 1;
				$max_pages = $query->max_num_pages;
				?>

				<?php echo '<input id="paged-store" type="hidden" data-max_pages="' . $max_pages . '" data-paged="' . $paged . '" data-category-id="' . $current_cat_id . '">'; ?>
			</div>
		<?php endif; ?>
	</div>

</main>

<?php get_footer(); ?>
