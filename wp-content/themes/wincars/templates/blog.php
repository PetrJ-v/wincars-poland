<?php
#Template Name: Blog
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>
	<?php get_template_part('template-parts/page-header'); ?>

	<main>

		<?php the_content(); ?>

		<?php
		$content = get_post_field('post_content', get_the_ID());

		// Lets pars all blocks
		$blocks = parse_blocks($content);

		$featured_post_id = null;

		// Search for featured-post ACF block to get featured post id
		foreach ($blocks as $block) {
			if ($block['blockName'] === 'acf/featured-post') { // Замените на ваш блок
				$featured_post_id = $block['attrs']['data']['featured_post'];
				break;
			}
		}

		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array(
			'post_type' => 'post',
			'post__not_in' => $featured_post_id,
			'paged'        => $paged,
		);

		$query = new WP_Query($args);
		?>
		<?php if ($query->have_posts()) : ?>
			<div class="container">
				<div class="posts-previews p-tb-20-35">
					<?php while ($query->have_posts()) : ?>
						<?php $query->the_post(); ?>
						<?php get_template_part('template-parts/post-preview'); ?>
					<?php endwhile; ?>
				</div>
			</div>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>

		<div class="container">
			<div class="site-pagination p-tb-30-44">
				<?php
				// Pagination
				$total = $query->max_num_pages;
				echo paginate_links([
					'mid_size' => 0,
					'end_size' => 1,
					'total'    => $total,
					'current'  => $paged,
					'prev_text' => __('<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.8334 9.99999H4.16675M4.16675 9.99999L10.0001 15.8333M4.16675 9.99999L10.0001 4.16666" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" /></svg><span>Previous</span>'),
					'next_text' => __('<span>Next</span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.16663 9.99999H15.8333M15.8333 9.99999L9.99996 4.16666M15.8333 9.99999L9.99996 15.8333" stroke="#FDFDFD" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" /></svg>'),
					'echo' => true,
				]);
				?>
			</div>
		</div>
	</main>

	<?php get_footer(); ?>
</body>

</html>
