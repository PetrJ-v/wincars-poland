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
						if (isset($_GET['vin'])) {
							$vin = $_GET['vin'];
						}
						?>
						<input id="tracking" type="text" class="tracking-search__input" name="track-input" size="1" id="track-input" required placeholder="Въведете VIN" <?php if ($vin) echo 'value="' . $vin . '"' ?>>
						<div class="tracking-search__btn-wrapper">
							<button type="submit" class="tracking-search__btn accent-btn">Търсене</button>
						</div>
						<div class="tracking-search__message tracking-form-message">
							Vin номера е не намерен
						</div>
					</form>
				</div>
				<div id="tracking_system_root" data-filter='{"platform":13446, "lang": "en"}'></div>
				<script src=https://www.searates.com/container/widget></script>
				<div class="get-more">
					<button id="get-more-btn" class="get-more__btn">Full information</button>
				</div>
			</div>
		</div>
	</main>

	<?php get_footer(); ?>
	<div class="api-container"></div>

</body>

</html>
