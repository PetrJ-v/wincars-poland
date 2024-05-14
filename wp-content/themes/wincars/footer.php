<?php
$page_template_slug = get_page_template_slug();
$page_template_name = str_replace('.php', '', $page_template_slug);
$page_template_name = str_replace('templates/', '', $page_template_name);
?>
<?php if ($page_template_name != 'contacts') : ?>
	<footer>
		<div class="container">
			<div class="footer">
				<div class="footer__left">
					<div class="footer__left-text">Susisiekime</div>
					<a href='#' class="footer__left-link">contact@indiana.lt</a>
				</div>
				<div class="footer__right">
					<div class="footer-links">
						<div class="footer-links__left">
							<?php
							wp_nav_menu([
								'theme_location'  => 'footer',
								'container'       => false,
								// 'container_class' => 'menu-wrapper',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
							]);
							?>
						</div>
						<div class="footer-links__right">
							<a href="#">Linkedin</a>
						</div>
					</div>
					<div class="footer-corner">
						<div id="top-btn" class="footer-corner__link">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/to-top-btn.svg" width="84" height="84" alt="">
						</div>
						<div class="footer-copiright">© 2024 INDIANA.LT UAB. Visos teisės saugomos.</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
<?php endif; ?>
<?php if (is_single()) : ?>
	<?php if (have_rows('project_photos')) : ?>
		<?php $y = 1; ?>
		<?php while (have_rows('project_photos')) : the_row(); ?>
			<?php $project_photo = get_sub_field('project_photo'); ?>
			<?php if ($project_photo) : ?>
				<div class="project-popup project-popup-<?php echo $y; ?>">
					<?php echo wp_get_attachment_image($project_photo, 'full'); ?>
				</div>
				<?php $y++; ?>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
<?php endif; ?>

<?php wp_footer(); ?>

</body>

</html>
