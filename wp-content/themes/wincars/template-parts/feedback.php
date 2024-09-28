<?php
$animation = $args['animation'];
$feedback_classes = ($animation) ? 'wow fadeInUp' : '';
// $feedback_classes = ($animation) ? 'wow fadeInUp flipInX' : '';
$animation_delay = $args['animation_delay'];

?>
<div class="feedback <?php echo $feedback_classes; ?>" <?php if ($animation) echo sprintf('data-wow-duration="1.5s" data-wow-delay="ds"', $animation_delay); ?>>
	<?php
	$client_photo = get_sub_field('client_photo');
	$reviewer_name = get_sub_field('reviewer_name');
	$car = get_sub_field('car');
	$feedback_text = get_sub_field('feedback_text');
	$google_url = get_sub_field('link_to_google_feedbacks');
	?>
	<div class="feedback__header">
		<?php if ($client_photo) : ?>
			<div class="feedback__header-img img-wrapper">
				<?php echo wp_get_attachment_image($client_photo, 'full'); ?>
			</div>
		<?php endif; ?>
		<?php if ($reviewer_name || $car) : ?>
			<div class="feedback__header-text">
				<?php if ($reviewer_name) : ?>
					<div class="feedback__header-name"><?php echo esc_html($reviewer_name); ?></div>
				<?php endif; ?>
				<?php if ($car) : ?>
					<div class="feedback__header-car"><?php echo esc_html($car); ?></div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<?php if ($feedback_text) : ?>
			<div class="feedback-preview">
				<?php echo $feedback_text; ?>
			</div>
		<?php endif; ?>
	</div>

	<?php if ($feedback_text) : ?>
		<div class="feedback__content">
			<div><?php echo $feedback_text; ?></div>
			<?php if ($google_url) : ?>
				<a href="<?php echo esc_url($google_url); ?>" target="_blank" class="feedback__content-link">Вижте рецензията в Google</a>
			<?php endif; ?>
		</div>
	<?php endif; ?>
</div>
