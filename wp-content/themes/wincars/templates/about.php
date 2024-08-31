<?php
#Template Name: About
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>
	<?php get_template_part('template-parts/page-header'); ?>

	<main class="about">
		<div class="container">
			<div class="intro p-tb-20-35 align-center">
				<h1 class="intro__title about__title"><?php the_title(); ?></h1>
				<?php if (get_field('intro_text')) : ?>
					<div class="intro__text">
						<?php the_field('intro_text'); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="container">
			<div class="info-grid p-tb-20-35">
				<div class="wc-row-2-900">
					<div class="wc-col">
						<?php $left_image = get_field('left_image'); ?>
						<?php if ($left_image) : ?>
							<div class="info-grid-img cover-img border-24 mb-24">
								<?php echo wp_get_attachment_image($left_image, 'full'); ?>
							</div>
						<?php endif; ?>
						<div class="wc-row-2-538">
							<div class="wc-col">
								<?php if (have_rows('social_links')) : ?>
									<div class="mini-grid mb-24">
										<?php while (have_rows('social_links')) : the_row(); ?>

											<?php
											$social_url = get_sub_field('social_link');
											$social_icon = get_sub_field('social_icons');
											?>
											<div class="mini-grid-item">
												<a href="<?php echo $social_url; ?>" class="about-social border-24">
													<?php echo wp_get_attachment_image($social_icon, 'full'); ?>
												</a>
											</div>

										<?php endwhile; ?>
									</div>

								<?php endif; ?>

								<div class="info-item border-24">
									<?php if (get_field('office_count')) : ?>
										<div class="info-item__count">
											<span class="info-item__count-number" data-anim="true" data-function="infoItemAnimation" data-target="<?php the_field('office_count'); ?>"><?php the_field('office_count'); ?></span>
										</div>
									<?php endif; ?>
									<?php if (get_field('office_title') || get_field('office_text')) : ?>
										<div class="info-item__bottom">
											<?php if (get_field('office_title')) : ?>
												<div class="info-item__title"><?php the_field('office_title'); ?></div>
											<?php endif; ?>
											<?php if (get_field('office_text')) : ?>
												<div class="info-item__text text">
													<?php the_field('office_text'); ?>
												</div>
											<?php endif; ?>
										</div>
									<?php endif; ?>
								</div>
							</div>
							<div class="wc-col">
								<div class="info-item info-item--orange info-item--grow border-24">
									<?php if (get_field('parking_count')) : ?>
										<div class="info-item__count">
											<span class="info-item__count-number" data-anim="true" data-function="infoItemAnimation" data-target="<?php the_field('parking_count'); ?>"><?php the_field('parking_count'); ?></span>
											<span>+</span>
										</div>
									<?php endif; ?>

									<?php if (get_field('parking_title') || get_field('parking_text')) : ?>
										<div class="info-item__bottom">
											<?php if (get_field('parking_title')) : ?>
												<div class="info-item__title"><?php the_field('parking_title'); ?></div>
											<?php endif; ?>
											<?php if (get_field('parking_text')) : ?>
												<div class="info-item__text text">
													<?php the_field('parking_text'); ?>
												</div>
											<?php endif; ?>
										</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
					<div class="wc-col">
						<div class="wc-row-2-538">
							<div class="wc-col">
								<div class="info-item info-item--white info-item--grow border-24">
									<?php if (get_field('auction_count')) : ?>
										<div class="info-item__count">
											<span class="info-item__count-number" data-anim="true" data-function="infoItemAnimation" data-target="<?php the_field('auction_count'); ?>"><?php the_field('auction_count'); ?></span>
											<span>+</span>
										</div>
									<?php endif; ?>
									<?php if (get_field('auction_title') || get_field('auction_text')) : ?>
										<div class="info-item__bottom">
											<?php if (get_field('auction_title')) : ?>
												<div class="info-item__title"><?php the_field('auction_title'); ?></div>
											<?php endif; ?>
											<?php if (get_field('auction_text')) : ?>
												<div class="info-item__text text">
													<?php the_field('auction_text'); ?>
												</div>
											<?php endif; ?>
										</div>
									<?php endif; ?>
								</div>
							</div>
							<div class="wc-col">
								<div class="info-item border-24 mb-24">
									<?php if (get_field('mission_count')) : ?>
										<div class="info-item__count">
											<span class="info-item__count-number" data-anim="true" data-function="infoItemAnimation" data-target="<?php the_field('mission_count'); ?>"><?php the_field('mission_count'); ?></span>
										</div>
									<?php endif; ?>
									<?php if (get_field('mission_title') || get_field('mission_text')) : ?>
										<div class="info-item__bottom">
											<?php if (get_field('mission_title')) : ?>
												<div class="info-item__title"><?php the_field('mission_title'); ?></div>
											<?php endif; ?>
											<?php if (get_field('mission_text')) : ?>
												<div class="info-item__text text">
													<?php the_field('mission_text'); ?>
												</div>
											<?php endif; ?>
										</div>
									<?php endif; ?>
								</div>
								<div class="info-item border-24">
									<?php if (get_field('delivery_count')) : ?>
										<div class="info-item__count">
											<span class="info-item__count-number" data-anim="true" data-function="infoItemAnimation" data-target="<?php the_field('delivery_count'); ?>"><?php the_field('delivery_count'); ?></span>
											<span>+</span>
										</div>
									<?php endif; ?>
									<?php if (get_field('delivery_title') || get_field('delivery_text')) : ?>
										<div class="info-item__bottom">
											<?php if (get_field('delivery_title')) : ?>
												<div class="info-item__title"><?php the_field('delivery_title'); ?></div>
											<?php endif; ?>
											<?php if (get_field('delivery_text')) : ?>
												<div class="info-item__text text">
													<?php the_field('delivery_text'); ?>
												</div>
											<?php endif; ?>
										</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<?php $main_info_right_image = get_field('main-info_right_image'); ?>
						<?php if ($main_info_right_image) : ?>
							<div class="info-grid-img cover-img border-24">
								<?php echo wp_get_attachment_image($main_info_right_image, 'full'); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="target p-tb-20-35">
				<div class="target__logo img-wrapper">
					<svg width="151" height="39" viewBox="0 0 151 39" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_138_539)">
							<path d="M4.21987 38.6517L0 0.348145H7.68062L9.84636 24.5273L12.0568 0.348145H19.3802L21.4789 24.5273L23.5777 0.348145H31.3476L27.0607 38.6517H17.6386L15.6738 20.2181L13.7983 38.6517H4.21987Z" fill="#FDFDFD" />
							<path d="M33.3347 38.6517V0.348145H40.9261V38.6517H33.3347Z" fill="#FDFDFD" />
							<path d="M44.0519 38.6517V0.348145H52.1343L55.7514 18.6947V0.348145H63.3427V38.6517H55.6621L51.7325 19.4999V38.6517H44.0519Z" fill="#FDFDFD" />
							<path d="M75.98 39C73.137 39 70.8448 38.1367 69.1032 36.4101C67.3766 34.6836 66.5133 32.2679 66.5133 29.163V11.4911C66.5133 7.77679 67.2649 4.93304 68.7683 2.95983C70.2866 0.986611 72.75 0 76.1587 0C78.0193 0 79.6715 0.333705 81.1154 1.00111C82.5741 1.66853 83.7202 2.66964 84.5538 4.00447C85.3873 5.32478 85.8041 6.9933 85.8041 9.01006V15.6261H77.9895V9.9676C77.9895 8.82143 77.8407 8.05245 77.5429 7.66072C77.2453 7.25446 76.7839 7.05134 76.1587 7.05134C75.4293 7.05134 74.9381 7.3125 74.6851 7.83483C74.432 8.34263 74.3055 9.02451 74.3055 9.88056V29.0541C74.3055 30.1133 74.4619 30.8605 74.7744 31.2957C75.1019 31.731 75.5633 31.9486 76.1587 31.9486C76.8285 31.9486 77.2974 31.6802 77.5653 31.1434C77.8481 30.6066 77.9895 29.9102 77.9895 29.0541V22.1551H85.8934V29.4024C85.8934 32.7684 85.0227 35.2132 83.2811 36.7366C81.5396 38.2455 79.1059 39 75.98 39Z" fill="#FDFDFD" />
							<path d="M87.4563 38.6517L91.2518 0.348145H104.582L108.31 38.6517H100.875L100.317 32.4709H95.5837L95.0918 38.6517H87.4563ZM96.1419 26.3554H99.7137L97.9946 6.87716H97.6373L96.1419 26.3554Z" fill="#FDFDFD" />
							<path d="M110.722 38.6517V0.348145H122.778C124.787 0.348145 126.306 0.797922 127.333 1.69748C128.36 2.58252 129.045 3.83029 129.387 5.44078C129.745 7.03676 129.923 8.91568 129.923 11.0775C129.923 13.1668 129.647 14.8354 129.097 16.0831C128.561 17.3308 127.542 18.1941 126.038 18.673C127.274 18.9195 128.136 19.5217 128.628 20.4793C129.134 21.4224 129.387 22.6484 129.387 24.1573V38.6517H121.639V23.6567C121.639 22.5395 121.401 21.8504 120.925 21.5892C120.464 21.3135 119.712 21.1757 118.67 21.1757V38.6517H110.722ZM118.715 14.5379H120.613C121.699 14.5379 122.243 13.3844 122.243 11.0775C122.243 9.58312 122.124 8.60373 121.885 8.13944C121.647 7.67516 121.2 7.44301 120.545 7.44301H118.715V14.5379Z" fill="#FDFDFD" />
							<path d="M141.845 39C138.258 39 135.668 38.1295 134.075 36.3884C132.498 34.6473 131.709 31.8761 131.709 28.0748V24.3315H139.479V29.1194C139.479 30.0045 139.613 30.7009 139.881 31.2087C140.164 31.702 140.647 31.9486 141.332 31.9486C142.046 31.9486 142.538 31.7456 142.805 31.3392C143.089 30.933 143.23 30.2656 143.23 29.337C143.23 28.1618 143.111 27.1825 142.873 26.399C142.635 25.601 142.218 24.8465 141.623 24.1356C141.042 23.4102 140.231 22.5687 139.189 21.6111L135.661 18.3466C133.026 15.9235 131.709 13.1523 131.709 10.0329C131.709 6.76841 132.483 4.28013 134.031 2.56808C135.595 0.856027 137.849 0 140.796 0C144.398 0 146.951 0.935823 148.455 2.80748C149.973 4.67913 150.732 7.52288 150.732 11.3387H142.739V8.70536C142.739 8.18303 142.583 7.77679 142.27 7.48661C141.973 7.19643 141.563 7.05134 141.042 7.05134C140.417 7.05134 139.955 7.22545 139.657 7.57366C139.375 7.90737 139.234 8.34263 139.234 8.8795C139.234 9.41628 139.383 9.99667 139.68 10.6205C139.977 11.2444 140.565 11.9626 141.444 12.7751L145.976 17.019C146.885 17.8605 147.718 18.7528 148.477 19.6959C149.236 20.6244 149.846 21.7126 150.308 22.9604C150.769 24.1936 151 25.7026 151 27.4872C151 31.0854 150.315 33.9074 148.945 35.9531C147.591 37.9844 145.225 39 141.845 39Z" fill="#FDFDFD" />
						</g>
					</svg>
				</div>
				<?php $mission_description = get_field('mission_description'); ?>
				<?php if ($mission_description) : ?>
					<div class="target__text text">
						<?php echo $mission_description; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>

		<?php
		$collage_left_images = get_field('collage_left'); // Group
		$is_collage_left = false;
		$cl_small_image_1 = $collage_left_images['small_image_1'];
		$cl_small_image_2 = $collage_left_images['small_image_2'];
		$collage_left_right_image = get_field('collage_left_right_image');
		if ($cl_small_image_1 || $cl_small_image_2 || $collage_left_right_image) $is_collage_left = true;
		$collage_right_left = get_field('collage_right_left');
		$is_collage_right = false;
		$cr_small_image_1 = $collage_right_left['small_image_1'];
		$cr_small_image_2 = $collage_right_left['small_image_2'];
		$collage_right_right = get_field('collage_right_right'); // Group
		$crr_top_image = $collage_right_right['top_image'];
		$crr_bottom_image_1 = $collage_right_right['bottom_image_1'];
		$crr_bottom_image_2 = $collage_right_right['bottom_image_2'];
		if ($cr_small_image_1 || $cr_small_image_2 || $crr_top_image || $crr_bottom_image_1 || $crr_bottom_image_2) $is_collage_right = true;
		?>
		<?php if ($is_collage_left || $is_collage_right) : ?>
			<div class="container">
				<div class="image-grid p-tb-20-35">
					<?php if ($is_collage_left) : ?>
						<div class="image-grid__left image-grid-item">
							<div class="image-grid-item__left">
								<?php if ($cl_small_image_1) : ?>
									<div class="grid-image cover-img border-24">
										<?php echo wp_get_attachment_image($cl_small_image_1, 'full'); ?>
									</div>
								<?php endif; ?>
								<?php if ($cl_small_image_2) : ?>
									<div class="grid-image cover-img border-24">
										<?php echo wp_get_attachment_image($cl_small_image_2, 'full'); ?>
									</div>
								<?php endif; ?>
							</div>

							<?php if ($collage_left_right_image) : ?>
								<div class="image-grid-item__right">
									<div class="grid-image cover-img border-24">
										<?php echo wp_get_attachment_image($collage_left_right_image, 'full'); ?>
									</div>
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>

					<?php if ($is_collage_right) : ?>
						<div class="image-grid__right image-grid-item">
							<div class="image-grid-item__left">
								<?php if ($cr_small_image_1) : ?>
									<div class="grid-image cover-img border-24">
										<?php echo wp_get_attachment_image($cr_small_image_1, 'full'); ?>
									</div>
								<?php endif; ?>
								<?php if ($cr_small_image_2) : ?>
									<div class="grid-image cover-img border-24">
										<?php echo wp_get_attachment_image($cr_small_image_2, 'full'); ?>
									</div>
								<?php endif; ?>
							</div>
							<div class="image-grid-item__right">
								<?php if ($crr_top_image) : ?>
									<div class="grid-image cover-img border-24">
										<?php echo wp_get_attachment_image($crr_top_image, 'full'); ?>
									</div>
								<?php endif; ?>
								<?php if ($crr_bottom_image_1 || $crr_bottom_image_2) : ?>
									<div class="mini-row">
										<?php if ($crr_bottom_image_1) : ?>
											<div class="mini-row-image border-24 img-wrapper">
												<?php echo wp_get_attachment_image($crr_bottom_image_1, 'full'); ?>
											</div>
										<?php endif; ?>
										<?php if ($crr_bottom_image_2) : ?>
											<div class="mini-row-image border-24 img-wrapper">
												<?php echo wp_get_attachment_image($crr_bottom_image_2, 'full'); ?>
											</div>
										<?php endif; ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>

		<?php
		$team_title = get_field('team_title');
		$team_description = get_field('team_description');
		$founder = get_field('founder');
		$is_founder = false;
		$founder_name = $founder['name'];
		$founder_role = $founder['role'];
		$founder_info = $founder['information'];
		$founder_front_image = $founder['front_image'];
		$founder_back_image = $founder['back_image'];
		if ($founder_name || $founder_role || $founder_info || $founder_front_image || $founder_back_image) {
			$is_founder = true;
		}
		?>
		<?php if ($team_title || $team_description || $is_founder || have_rows('members')) : ?>
			<div class="container">
				<div class="team p-tb-20-35">
					<?php if ($team_title || $team_description) : ?>
						<div class="team-info team__team-info align-center">
							<?php if ($team_title) : ?>
								<h2 class="team-info__title about__title"><?php echo $team_title; ?></h2>
							<?php endif; ?>
							<?php if ($team_description) : ?>
								<div class="team-info__text text">
									<?php echo esc_html($team_description); ?>
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>

					<?php if ($is_founder || have_rows('members')) : ?>
						<div class="members align-center">
							<?php if ($is_founder) : ?>
								<div class="member member--founder member--with-hover">
									<?php if ($founder_front_image) : ?>
										<div class="member__img">
											<div class="member__img-front cover-img">
												<?php echo wp_get_attachment_image($founder_front_image, 'full'); ?>
											</div>
											<?php if ($founder_back_image) : ?>
												<div class="member__img-back cover-img">
													<?php echo wp_get_attachment_image($founder_back_image, 'full'); ?>
												</div>
											<?php endif; ?>
										</div>
									<?php endif; ?>
									<?php if ($founder_name || $founder_role || $founder_info) : ?>
										<div class="member__info">
											<?php if ($founder_name) : ?>
												<div class="member__name"><?php echo esc_html($founder_name); ?></div>
											<?php endif; ?>
											<?php if ($founder_role) : ?>
												<div class="member__role"><?php echo esc_html($founder_role); ?></div>
											<?php endif; ?>
											<?php if ($founder_info) : ?>
												<div class="member__text text">
													<?php echo esc_html($founder_info); ?>
												</div>
											<?php endif; ?>
										</div>
									<?php endif; ?>
								</div>
							<?php endif; ?>

							<?php if (have_rows('members')) : ?>
								<div class="members__row">
									<?php while (have_rows('members')) : the_row(); ?>
										<?php
										$member_front_img = get_sub_field('front_image');
										$member_back_img = get_sub_field('back_image');
										$member_name = get_sub_field('name');
										$member_role = get_sub_field('role');
										?>
										<div class="member member--employee <?php if ($member_back_img) echo ' member--with-hover'; ?>">
											<?php if ($member_front_img) : ?>
												<div class="member__img">
													<div class="member__img-front cover-img">
														<?php echo wp_get_attachment_image($member_front_img, 'full'); ?>
													</div>
													<?php if ($member_back_img) : ?>
														<div class="member__img-back cover-img">
															<?php echo wp_get_attachment_image($member_back_img, 'full'); ?>
														</div>
													<?php endif; ?>
												</div>
											<?php endif; ?>
											<?php if ($member_name || $member_role) : ?>
												<div class="member__info">
													<?php if ($member_name) : ?>
														<div class="member__name"><?php echo esc_html($member_name); ?></div>
													<?php endif; ?>
													<?php if ($member_role) : ?>
														<div class="member__role"><?php echo esc_html($member_role); ?></div>
													<?php endif; ?>
												</div>
											<?php endif; ?>
										</div>

									<?php endwhile; ?>
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>

		<?php $steps_title = get_field('steps_title'); ?>
		<?php if ($steps_title || have_rows('about_step')) : ?>
			<div class="container">
				<div class="steps p-tb-20-35">
					<?php if ($steps_title) : ?>
						<h2 class="steps__title-mobile steps-title align-center"><?php echo esc_html($steps_title); ?></h2>
					<?php endif; ?>

					<?php if (have_rows('about_step') || $steps_title) : ?>
						<div class="steps__left">
							<?php if ($steps_title) : ?>
								<h2 class="steps__left-title steps-title"><?php echo esc_html($steps_title); ?></h2>
							<?php endif; ?>

							<?php if (have_rows('about_step')) : ?>
								<div class="steps__left-img-wrapper">
									<?php $left_counter = 1; ?>
									<?php while (have_rows('about_step')) : the_row(); ?>
										<?php $step_img = get_sub_field('image'); ?>
										<?php if ($step_img) : ?>
											<div class="steps__left-img border-24 img-wrapper <?php if ($left_counter === 1) echo ' active'; ?>" data-img-number="<?php echo $left_counter; ?>">
												<?php echo wp_get_attachment_image($step_img, 'full'); ?>
											</div>
										<?php endif; ?>
										<?php $left_counter++; ?>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
						</div>

						<?php if (have_rows('about_step')) : ?>
							<ul class="steps__right">
								<?php $step_number = 1; ?>
								<?php while (have_rows('about_step')) : the_row(); ?>

									<?php
									$step_title = get_sub_field('title');
									$step_text = get_sub_field('text');
									$step_image = get_sub_field('image');
									?>
									<li class="steps__item step <?php if ($step_number === 1) echo ' active'; ?>" data-number="<?php echo $step_number; ?>">
										<div class="step__point"><?php echo $step_number; ?></div>
										<div class="step__number"><?php echo $step_number; ?></div>
										<div class="step__content">
											<?php if ($step_title) : ?>
												<div class="step__content-title"><?php echo esc_html($step_title); ?></div>
											<?php endif; ?>
											<?php if ($step_text) : ?>
												<div class="step__content-text text"><?php echo esc_html($step_text); ?></div>
											<?php endif; ?>
											<?php if ($step_image) : ?>
												<div class="step__content-img border-24 cover-img">
													<?php wp_get_attachment_image($step_image, 'full'); ?>
												</div>
											<?php endif; ?>
										</div>
									</li>
									<?php $step_number++; ?>
								<?php endwhile; ?>
								<div class="steps__vertical-line"></div>
							</ul>
						<?php endif; ?>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>
	</main>
	<?php get_footer(); ?>
</body>

</html>
