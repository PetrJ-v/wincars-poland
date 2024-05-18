<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<style>
			html {
				margin-top: 0!important;
			}
			body {
				min-height: 100vh;
				min-height: 100dvh;
				margin: 0!important;
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
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Wincars logo">
				</div>
			</div>
		</div>
	</header>
