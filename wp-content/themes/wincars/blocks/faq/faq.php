<?php
$faq_subtitle = get_field('faq_subtitle');
$faq_title = get_field('faq_title');
$faq_intro_text = get_field('faq_intro_text');
?>

<div class="container">
	<div class="faq-block p-tb-30-44 align-center">
		<?php if ($faq_subtitle || $faq_title || $faq_intro_text) : ?>
			<div class="faq-block__left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
				<?php if ($faq_subtitle) : ?>
					<div class="faq-block__left-lable"><?php echo esc_html($faq_subtitle); ?></div>
				<?php endif; ?>
				<?php if ($faq_title) : ?>
					<h2 class="faq-block__left-title"><?php echo esc_html($faq_title); ?></h2>
				<?php endif; ?>
				<?php if ($faq_intro_text) : ?>
					<div class="faq-block__left-text">
						<?php echo $faq_intro_text; ?>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<?php if (have_rows('faq_item')) : ?>
			<div class="faq-block__right">
				<div class="faq">
					<?php while (have_rows('faq_item')) : the_row(); ?>

						<?php
						$faq_question = get_sub_field('faq_question');
						$faq_answer = get_sub_field('faq_answer');
						?>
						<div class="faq__item wow fadeInUp" data-wow-duration="1s" data-wow-offset="100" data-wow-delay="0s">
							<div class="faq__item-qustion question">
								<div class="question__text"><?php echo $faq_question; ?></div>
								<button class="question__btn">
									<svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect y="12.2188" width="25" height="1.5625" fill="#4E4949" />
										<rect x="13.2812" y="0.5" width="25" height="1.5625" transform="rotate(90 13.2812 0.5)" fill="#4E4949" />
									</svg>
								</button>
							</div>
							<div class="faq__item-answer">
								<?php echo $faq_answer; ?>
							</div>
						</div>

					<?php endwhile; ?>
				</div>
			</div>

		<?php endif; ?>
	</div>
</div>
