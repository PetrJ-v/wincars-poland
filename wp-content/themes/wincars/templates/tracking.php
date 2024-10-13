<?php
#Template Name: Tracking
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>
	<header>
		<div class="header">
			<div class="header-container">
				<?php get_template_part('template-parts/header-top-line'); ?>
			</div>
		</div>
	</header>

	<main>
		<div class="container">
			<div class="tracking-wrapper">
				<div class="tracking-search-wrapper">
					<form class="tracking-search" id="tracking-form">
						<?php
							// $query_string = $_SERVER['QUERY_STRING'];
							// if (isset($_SERVER['HTTP_REFERER'])) {
							// 	$referer = rtrim($_SERVER['HTTP_REFERER'], '/');
							// 	$home_url = rtrim(get_home_url(), '/');
							// 	if ($referer && $referer === $home_url) {
							// 		$container_number = $query_string;
							// 	}
							// 	else {
							// 		$container_number = null;
							// 	}
							// }
							// if( isset($container_number) ) echo 'value="' . $container_number . '"';
						?>
						<input id="tracking" type="text" class="tracking-search__input" name="track-input" size="1" id="track-input" required placeholder="Въведете VIN">
						<div class="tracking-search__btn-wrapper">
							<button type="submit" class="tracking-search__btn accent-btn">Търсене</button>
						</div>
						<div class="tracking-search__message tracking-form-message">
							Vin номера е не намерен
						</div>
					</form>
				</div>
				<div id="tracking_system_root" data-filter='{"platform":11598, "lang": "en"}'></div>
				<script src=https://www.searates.com/container/widget></script>
			</div>
		</div>
	</main>

	<?php get_footer(); ?>

</body>

</html>
