<?php
#Template Name: Blog
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>
	<?php get_template_part('template-parts/page-header'); ?>

	<main>

		<?php the_content(); ?>

		<?php
		// $featured_post_id = get_field('featured_post', get_the_ID())[0];
		$content = get_post_field('post_content', get_the_ID());

		// Парсим все блоки страницы
		$blocks = parse_blocks($content);

		$featured_post_id = null;

		// Ищем нужный блок ACF и его поле featured_post
		foreach ($blocks as $block) {
			if ($block['blockName'] === 'acf/featured-post') { // Замените на ваш блок
				$featured_post_id = $block['attrs']['data']['featured_post'];
				break;
			}
		}
		$args = array(
			'post_type' => 'post',
			'post__not_in' => $featured_post_id,
			// 'posts_per_page' => 1,
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


		<!-- Pagination -->
		<div class="container">
			<div class="site-pagination p-tb-30-44">
				<?php
				echo paginate_links([
					'mid_size' => 0,
					'end_size' => 1,
					// 'prev_text' => __('<svg width="19" height="20" viewBox="0 0 19 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.5 1L2 15.5L17.5 31" stroke="black" stroke-width="2" stroke-linecap="round" /></svg>', 'houses-for-europe'),
					// 'next_text' => __('<svg width="18" height="20" viewBox="0 0 18 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L16.5 15.5L1 31" stroke="black" stroke-width="2" stroke-linecap="round" /></svg>', 'houses-for-europe'),
					'screen_reader_text' => '',
					'before_page_number' => '',
					'after_page_number' => '',
					'container' => 'div',
					'echo' => true,
				]);
					// echo paginate_links([
					// 	'mid_size' => 0,
					// 	'end_size' => 1,
					// 	'prev_text' => __('<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.8334 9.99999H4.16675M4.16675 9.99999L10.0001 15.8333M4.16675 9.99999L10.0001 4.16666" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" /></svg><span>Previous</span>'),
					// 	'next_text' => __('<span>Next</span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.16663 9.99999H15.8333M15.8333 9.99999L9.99996 4.16666M15.8333 9.99999L9.99996 15.8333" stroke="#FDFDFD" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" /></svg>'),
					// 	'screen_reader_text' => '',
					// 	'before_page_number' => '',
					// 	'after_page_number' => '',
					// 	'container' => 'div',
					// 	'echo' => true,
					// ]);
				?>
				<!-- <div class="site-pagination__prev">
					<a class="prev page-numbers" href="#">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M15.8334 9.99999H4.16675M4.16675 9.99999L10.0001 15.8333M4.16675 9.99999L10.0001 4.16666" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
						<span>Previous</span>
					</a>
				</div>
				<div class="site-pagination__links">
					<a class="page-numbers current" href="#">1</a>
					<span aria-current="page" class="page-numbers">2</span>
					<a class="page-numbers" href="#">3</a>
					<span class="page-numbers dots">…</span>
					<a class="page-numbers" href="#">8</a>
					<a class="page-numbers" href="#">9</a>
					<a class="page-numbers" href="#">10</a>
				</div>
				<div class="site-pagination__next">
					<a class="next page-numbers" href="#">
						<span>Next</span>
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M4.16663 9.99999H15.8333M15.8333 9.99999L9.99996 4.16666M15.8333 9.99999L9.99996 15.8333" stroke="#FDFDFD" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</a>
				</div> -->
			</div>
		</div>
	</main>

	<?php get_footer(); ?>
</body>

</html>
