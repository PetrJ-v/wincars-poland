<?php
#Template Name: Contacts
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>
	<?php get_template_part('template-parts/page-header'); ?>

	<main class="mt-30-44">
		<?php
		$hero_subtitle = get_field('hero_subtitle');
		$hero_title = get_field('hero_title');
		$hero_text = get_field('hero_text');
		?>
		<?php if ($hero_subtitle || $hero_title || $hero_text) : ?>
			<div class="container">
				<div class="inline-hero p-tb-30-44">
					<?php if ($hero_subtitle || $hero_title) : ?>
						<div class="inline-hero__left wow fadeInLeft">
							<?php if ($hero_subtitle) : ?>
								<div class="inline-hero__subtitle"><?php echo esc_html($hero_subtitle); ?></div>
							<?php endif; ?>
							<?php if ($hero_title) : ?>
								<h1 class="inline-hero__title"><?php echo esc_html($hero_title); ?></h1>
							<?php endif; ?>
						</div>
					<?php endif; ?>

					<?php if ($hero_text) : ?>
						<div class="inline-hero__text wow fadeInRight">
							<?php echo $hero_text; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="container">
			<div class="svg-map p-tb-30-44 img-wrapper align-center">
				<img src="<?php echo _TEMPLATEPATH; ?>/assets/img/contacts/svg-map.svg" loading="lazy">
			</div>
		</div>

		<?php if (have_rows('offices')) : ?>
			<div class="container">
				<div class="info-3 info-3--44-384 p-tb-30-44 align-center">
					<?php while (have_rows('offices')) : the_row(); ?>

						<?php
						$city = get_sub_field('city');
						$text = get_sub_field('text');
						$link = get_sub_field('office_location');
						?>
						<?php if ($city || $text || $link) : ?>
							<div class="info-3__item wow fadeInUp flipInX" data-wow-duration="2s">
								<div class="info-3__item-icon img-wrapper">
									<svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.66667 10.6667C9.04738 10.6667 10.1667 9.54738 10.1667 8.16667C10.1667 6.78596 9.04738 5.66667 7.66667 5.66667C6.28595 5.66667 5.16667 6.78596 5.16667 8.16667C5.16667 9.54738 6.28595 10.6667 7.66667 10.6667Z" stroke="#FDFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M7.66667 18.1667C11 14.8333 14.3333 11.8486 14.3333 8.16667C14.3333 4.48477 11.3486 1.5 7.66667 1.5C3.98477 1.5 1 4.48477 1 8.16667C1 11.8486 4.33333 14.8333 7.66667 18.1667Z" stroke="#FDFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</div>
								<?php if ($city) : ?>
									<div class="info-3__item-title"><?php echo esc_html($city); ?></div>
								<?php endif; ?>
								<?php if ($text) : ?>
									<div class="info-3__item-text"><?php echo esc_html($text); ?></div>
								<?php endif; ?>
								<?php if ($link) : ?>
									<?php
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<a href="<?php echo esc_url($link_url); ?>" target="<?php echo $link_target; ?>" class="info-3__item-subtext"><?php echo esc_html($link_title); ?></a>
								<?php endif; ?>
							</div>
						<?php endif; ?>

					<?php endwhile; ?>
				</div>
			</div>

		<?php endif; ?>

		<?php
		$location_subtitle = get_field('location_subtitle');
		$location_title = get_field('location_title');
		$location_text = get_field('location_text');
		?>
		<?php if ($location_subtitle || $location_title || $location_text) : ?>
			<div class="container">
				<div class="location p-tb-30-44 align-center">
					<div class="location__header">
						<?php if ($location_subtitle) : ?>
							<span class="location__subtitle wow fadeInUp" data-wow-duration="1.5s"><?php echo esc_html($location_subtitle); ?></span>
						<?php endif; ?>
						<?php if ($location_title) : ?>
							<h2 class="location__title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"><?php echo esc_html($location_title); ?></h2>
						<?php endif; ?>
						<?php if ($location_text) : ?>
							<div class="location__text wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s"><?php echo esc_html($location_text); ?></div>
						<?php endif; ?>
					</div>
					<div class="location__map img-wrapper">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2443.2833632090455!2d20.981335376823473!3d52.23823657198873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecc8175b64d11%3A0x6ceb1bdf0a67e02!2zYWwuIOKAnlNvbGlkYXJub8WbY2nigJ0gMTYzL3UwMTAsIDAwLTE0MCBXYXJzemF3YSwg0J_QvtC70YzRiNCw!5e0!3m2!1sru!2sbg!4v1733426526311!5m2!1sru!2sbg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<?php if (have_rows('contacts_info')) : ?>
			<div class="container">
				<div class="info-3 info-3--32-356 p-tb-30-44 align-center">
					<?php while (have_rows('contacts_info')) : the_row(); ?>
						<?php
						$title = get_sub_field('title');
						$text = get_sub_field('text');
						$contact_type = get_sub_field('contact_type');
						switch (true) {
							case ($contact_type === 'phone'):
								$phone = get_sub_field('phone');
								$link = sprintf('<a href="tel: +%d" class="info-3__item-subtext">+%d</a>', $phone, $phone);
								break;
							case ($contact_type === 'email'):
								$email = get_sub_field('email');
								$link = sprintf('<a href="mailto: %s" class="info-3__item-subtext">%s</a>', $email, $email);
								break;
							case ($contact_type === 'none'):
								$link = null;
								break;
						}
						?>
						<div class="info-3__item wow fadeInUp flipInX" data-wow-duration="2s">
							<?php if ($title) : ?>
								<div class="info-3__item-title"><?php echo esc_html($title); ?></div>
							<?php endif; ?>
							<?php if ($text) : ?>
								<div class="info-3__item-text"><?php echo $text; ?></div>
							<?php endif; ?>
							<?php if ($link) : ?>
								<?php echo $link; ?>
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
				</div>
			</div>

		<?php endif; ?>

		<!-- Messangers -->
		<?php
		$social_title = get_field('social_title');
		$social_subtitle = get_field('social_subtitle');
		?>
		<?php if ($social_title || $social_subtitle || have_rows('social_item')) : ?>
			<div class="container">
				<div class="messengers p-tb-30-44 align-center">
					<?php if ($social_title || $social_subtitle) : ?>
						<div class="messengers__header">
							<?php if ($social_title) : ?>
								<div class="messengers__title wow fadeInUp" data-wow-duration="1s"><?php echo esc_html($social_title); ?></div>
							<?php endif; ?>
							<?php if ($social_subtitle) : ?>
								<div class="messengers__text wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s"><?php echo esc_html($social_subtitle); ?></div>
							<?php endif; ?>
						</div>
					<?php endif; ?>
					<?php if (have_rows('social_item')) : ?>
						<div class="messengers-row">
							<?php while (have_rows('social_item')) : the_row(); ?>

								<?php
								$link = get_sub_field('social_link');
								$icon = get_sub_field('icon');
								$name = get_sub_field('name');
								$description = get_sub_field('description');
								if ($link) {
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
								}
								?>
								<?php if ($link || $icon || $name || $description) : ?>

								<?php endif; ?>
								<a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>" class="messenger border-24 wow fadeInUp flipInY" data-wow-duration="1.5s">
									<?php if ($icon) : ?>
										<div class="messenger__icon img-wrapper">
											<?php echo wp_get_attachment_image($icon, 'full'); ?>
										</div>
									<?php endif; ?>
									<div class="messenger__info">
										<?php if ($name) : ?>
											<div class="messenger__title"><?php echo esc_html($name); ?></div>
										<?php endif; ?>
										<?php if ($description) : ?>
											<div class="messenger__subtitle"><?php echo esc_html($description); ?></div>
										<?php endif; ?>
									</div>
								</a>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>

		<!-- Page form -->
		<?php
		$cf_section_title = get_field('cf_section_title');
		$cf_section_subtitle = get_field('cf_section_subtitle');
		$form_shortcode = get_field('form_shortcode');
		$contact_form_poster = get_field('contact_form_poster');
		$contact_form_video = get_field('contact_form_video');
		?>
		<?php if ($cf_section_title || $cf_section_subtitle || $form_shortcode || $contact_form_poster || $contact_form_video) : ?>
			<div class="container">
				<div class="video-form-wrapper p-tb-30-44">
					<?php if ($cf_section_title || $cf_section_subtitle) : ?>
						<div class="form-header text-align-center">
							<?php if ($cf_section_title) : ?>
								<h2 class="form-header__title wow fadeInUp" data-wow-duration="1.5s"><?php echo esc_html($cf_section_title); ?></h2>
							<?php endif; ?>
							<?php if ($cf_section_subtitle) : ?>
								<div class="form-header__text text wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">
									<?php echo esc_html($cf_section_subtitle); ?>
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>

					<?php if ($form_shortcode || $contact_form_poster || $contact_form_video) : ?>
						<div class="form-wrapper border-24">
							<?php if ($form_shortcode) : ?>
								<div class="form-wrapper__left">
									<div class="contact-form"><?php echo do_shortcode($form_shortcode); ?></div>
								</div>
							<?php endif; ?>
							<?php if ($contact_form_poster || $contact_form_video) : ?>
								<div class="form-wrapper__right video-wrapper">
									<video preload="none" muted="" playsinline="" loop="" poster="<?php echo esc_url($contact_form_poster); ?>" src="<?php echo esc_url($contact_form_video); ?>"></video>
									<button class="play-btn img-wrapper">
										<svg width="54" height="55" viewBox="0 0 54 55" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g filter="url(#filter0_b_337_498)">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M26.8586 55C41.6921 55 53.7171 42.6878 53.7171 27.5C53.7171 12.3122 41.6921 0 26.8586 0C12.025 0 0 12.3122 0 27.5C0 42.6878 12.025 55 26.8586 55ZM22.6619 37.5871L37.7698 28.941C38.8889 28.3006 38.889 26.6994 37.7698 26.059L22.6619 17.4129C21.5428 16.7725 20.1439 17.573 20.1439 18.8539V36.1461C20.1439 37.427 21.5428 38.2275 22.6619 37.5871Z" fill="white" fill-opacity="0.3" />
											</g>
										</svg>
									</button>
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>
	</main>
	<?php get_footer(); ?>
</body>

</html>
