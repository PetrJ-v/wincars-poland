<?php get_header(); ?>

<body <?php body_class(); ?>>
	<header>
		<style>
			html {
				margin-top: 0 !important;
			}

			body {
				min-height: 100vh;
				min-height: 100dvh;
				margin: 0 !important;
				display: flex;
				flex-direction: column;
				justify-content: center;
			}

			.container {
				max-width: 1200px;
				margin: 0 auto;
			}

			.header {
				display: flex;
				justify-content: center;
				align-items: center;
			}

			.header__logo {
				min-width: 90px;
				max-width: 90px;
				line-height: 0;
			}

			.header__logo img {
				width: 100%;
				height: auto;
			}

			h1 {
				text-align: center;
			}
		</style>
		<div class="container">
			<div class="header">
				<div class="header__logo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="Wincars logo">
				</div>
			</div>
			<?php
			// $page_template = (is_page_template('/page.php')) ? 'default' : "other";
			$page_template = get_template_name();
			?>
			<h1><?php echo $page_template; ?></h1>
			<div>
				<?php the_content(); ?>
				<!-- <?php echo do_shortcode('[contact-form-7 id="dfe3b0c" title="SImple-form"]'); ?> -->
			</div>
		</div>
	</header>
	<main></main>

	<?php get_footer(); ?>

</body>

</html>
