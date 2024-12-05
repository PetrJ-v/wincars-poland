<?php
$why_we_secrion_title = get_field('why_we_title');
?>

<?php if (have_rows('why_we_slider') || $why_we_secrion_title) : ?>
	<div class="container">
		<div class="why-we p-tb-30-44">
			<?php if ($why_we_secrion_title) : ?>
				<div class="why-we__title"><?php echo esc_html($why_we_secrion_title); ?></div>
			<?php endif; ?>
			<?php if (have_rows('why_we_slider')) : ?>
				<div class='swiper why-we__slider'>
					<div class='swiper-wrapper'>
						<?php while (have_rows('why_we_slider')) : the_row(); ?>

							<?php
							$wv_title = get_sub_field('title');
							$wv_image = get_sub_field('image');
							$wv_text = get_sub_field('text');
							?>
							<div class='swiper-slide'>
								<div class="why-we__item">
									<?php if ($wv_title) : ?>
										<div class="why-we__item-title"><?php echo esc_html($wv_title); ?></div>
									<?php endif; ?>
									<?php if ($wv_image || $wv_text) : ?>
										<div class="why-we__card">
											<?php if ($wv_image) : ?>
												<div class="why-we__card-img img-wrapper">
													<?php echo wp_get_attachment_image($wv_image, 'full'); ?>
												</div>
											<?php endif; ?>
											<?php if ($wv_text) : ?>
												<div class="why-we__card-text">
													<?php echo $wv_text; ?>
												</div>
											<?php endif; ?>
										</div>
									<?php endif; ?>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				</div>

			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>
