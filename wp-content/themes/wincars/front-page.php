<?php
#Template Name: Front page
get_header(); ?>

<main class="main">
	<div class="container">
		<div class="hp-intro">
			<?php $hp_page_title = (get_field('page_title')) ? get_field('page_title') : get_the_title(); ?>
			<h1 class="hp-intro__title fade-in-animation"><?php echo $hp_page_title; ?></h1>
			<?php $intro_text = get_field('intro_text'); ?>
			<?php if ($intro_text) : ?>
				<div class="hp-intro__text fade-in-animation">
					<?php echo $intro_text; ?>
				</div>
			<?php endif; ?>
		</div>
		<?php
		$featured_posts = get_field('featured_projects');
		$portfolio_page_link = get_field('portfolio_page', 'options');
		?>
		<?php if ($featured_posts) : ?>
			<div class="projects">
				<?php foreach ($featured_posts as $post) :

					setup_postdata($post); ?>
					<?php
					$post_preview_img = get_field('post_preview_image');
					$post_preview_title = (get_field('preview_title_optional')) ? get_field('preview_title_optional') : get_the_title();
					?>
					<a href="<?php the_permalink(); ?>" class="projects__item">
						<?php
						if ($post_preview_img) {
							echo wp_get_attachment_image($post_preview_img, 'full');
						}
						?>
						<span><?php echo $post_preview_title; ?></span>
					</a>

				<?php endforeach; ?>
				<?php if ($portfolio_page_link) : ?>
					<a href="<?php echo $portfolio_page_link; ?>" class="projects-last">
						<span>Daugiau projektų</span>
					</a>
				<?php endif; ?>
			</div>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>
	<?php
	$params = ['additional_class' => 'red'];
	get_template_part('parts/marquee', null, $params);
	?>
</main>

<?php get_footer(); ?>
