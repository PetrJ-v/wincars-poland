<?php
get_header(); ?>

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
		</div>
	</header>

	<main>
		<div class="container 404 text-align-center">
			<h1 class="page-title small mt-45-f">404</h1>
			<div class="mt-45-f">
				<div class="message">
					<p>Търсената страницата не е намерена</p>
					<a href="<?php echo get_home_url(); ?>" tabindex="0" class="link-to-home mt-30-f">Обратно в началото</a>
				</div>
			</div>
		</div>
	</main>

	<?php get_footer(); ?>

</body>

</html>
