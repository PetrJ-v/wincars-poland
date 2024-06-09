<?php
#Template Name: Watermark
get_header();
?>

<body <?php body_class(); ?>>
	<main>
		<div class="watermark">
			<div class="watermark__images" id="watermark-images">
				<!-- Exeple of image item
				<div class="watermark__img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/collage/collage-1.jpg">
				</div> -->
			</div>
		</div>
		<div class="watermark-page__controls">
			<div class="watermark__input">
				<input type="file" id="uploaud" name="images" accept="image/png, image/jpeg" multiple />
				<label for="uploaud" class="upload-input">
					<span class="upload-input__img img-wrapper"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/upload.svg"></span>
					<span class="upload-input__text">Изберете изображения</span>
				</label>
			</div>
			<div class="wtp-buttons-line">
				<button class="watermark-page-btn" id="get-wm-archive" disabled>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/download.svg" class="watermark-page-btn__icon">
					<span class="watermark-page-btn__text">Изтегли</span>
				</button>
				<button class="watermark-page-btn" id="reset-btn">
					<span class="watermark-page-btn__icon img-wrapper">
						<svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
							<path d="m18 28a12 12 0 1 0 -12-12v6.2l-3.6-3.6-1.4 1.4 6 6 6-6-1.4-1.4-3.6 3.6v-6.2a10 10 0 1 1 10 10z" />
						</svg>
					</span>
					<span class="watermark-page-btn__text">Нулиране</span>
				</button>
			</div>
		</div>
	</main>

	<footer class="footer">
		<?php wp_footer(); ?>
	</footer>

</body>

</html>
