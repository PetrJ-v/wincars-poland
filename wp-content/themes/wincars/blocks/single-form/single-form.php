<?php
$single_form_subtitle = get_field('single_form_subtitle');
$single_form_title = get_field('single_form_title');
$single_form_text = get_field('single_form_text');
$single_form_shortcode = get_field('single_form_shortcode');
?>

<?php if ($single_form_subtitle || $single_form_title || $single_form_text || $single_form_shortcode) : ?>
	<div class="container">
		<div class="single-form p-tb-30-44 align-center">
			<?php if ($single_form_subtitle) : ?>
				<div class="single-form__subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s"><?php echo esc_html($single_form_subtitle); ?></div>
			<?php endif; ?>
			<?php if ($single_form_title) : ?>
				<h2 class="single-form__title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
					<?php echo esc_html($single_form_title); ?>
				</h2>
			<?php endif; ?>

			<?php if ($single_form_text) : ?>
				<div class="single-form__text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
					<?php echo $single_form_text; ?>
				</div>
			<?php endif; ?>

			<?php if ($single_form_shortcode) : ?>
				<div class="single-form__form align-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
					<?php echo do_shortcode($single_form_shortcode); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>
