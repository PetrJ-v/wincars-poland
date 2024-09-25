<?php
#Template Name: Front page
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>
	<header>
		<div class="header">
			<div class="header-container">
				<div class="header-top-line">
					<div class="header-menu-wrapper">
						<?php get_template_part('template-parts/header-menu-btn'); ?>
						<a href="<?php echo get_home_url(); ?>" class="header-logo img-wrapper">
							<svg viewBox="0 0 203 48" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M5.51999 47.064L0.590576 1.16047H9.56264L12.0926 30.1371L14.6746 1.16047H23.2294L25.6811 30.1371L28.1327 1.16047H37.2091L32.2014 47.064H21.195L18.8998 24.9729L16.709 47.064H5.51999Z" fill="white" />
								<path d="M43.8036 47.064V1.16047H52.6713V47.064H43.8036Z" fill="white" />
								<path d="M60.5959 47.064V1.16047H70.0375L74.2627 23.1472V1.16047H83.1304V47.064H74.1583L69.568 24.1123V47.064H60.5959Z" fill="white" />
								<path d="M102.166 47.4813C98.8447 47.4813 96.167 46.4468 94.1327 44.3776C92.1157 42.3085 91.1072 39.4134 91.1072 35.6925V14.5142C91.1072 10.063 91.9853 6.65499 93.7414 4.29026C95.515 1.92553 98.3927 0.743164 102.374 0.743164C104.548 0.743164 106.478 1.14308 108.165 1.94292C109.869 2.74275 111.207 3.9425 112.181 5.54217C113.155 7.12446 113.642 9.12404 113.642 11.5409V19.4697H104.513V12.6885C104.513 11.3149 104.339 10.3933 103.992 9.92388C103.644 9.43702 103.105 9.19359 102.374 9.19359C101.522 9.19359 100.949 9.50657 100.653 10.1325C100.357 10.7411 100.21 11.5583 100.21 12.5842V35.5621C100.21 36.8314 100.392 37.7268 100.757 38.2485C101.14 38.7701 101.679 39.0309 102.374 39.0309C103.157 39.0309 103.705 38.7092 104.018 38.0659C104.348 37.4226 104.513 36.5879 104.513 35.5621V27.2942H113.746V35.9794C113.746 40.0133 112.729 42.9432 110.694 44.7689C108.66 46.5772 105.817 47.4813 102.166 47.4813Z" fill="white" />
								<path d="M119.845 47.064L124.279 1.16047H139.849L144.205 47.064H135.52L134.868 39.6569H129.339L128.765 47.064H119.845ZM129.991 32.328H134.164L132.155 8.98494H131.738L129.991 32.328Z" fill="white" />
								<path d="M151.295 47.064V1.16047H165.379C167.727 1.16047 169.5 1.69949 170.7 2.77753C171.9 3.83818 172.699 5.33352 173.099 7.26356C173.517 9.17621 173.725 11.4279 173.725 14.0187C173.725 16.5225 173.404 18.5221 172.76 20.0175C172.134 21.5128 170.943 22.5474 169.187 23.1212C170.63 23.4167 171.639 24.1383 172.213 25.2859C172.804 26.4161 173.099 27.8854 173.099 29.6937V47.064H164.049V29.0938C164.049 27.755 163.771 26.9291 163.214 26.6161C162.675 26.2857 161.797 26.1205 160.58 26.1205V47.064H151.295ZM160.632 18.1657H162.849C164.119 18.1657 164.753 16.7833 164.753 14.0187C164.753 12.2278 164.614 11.0541 164.336 10.4977C164.058 9.94127 163.536 9.66306 162.771 9.66306H160.632V18.1657Z" fill="white" />
								<path d="M191.926 47.4813C187.736 47.4813 184.71 46.4381 182.85 44.3516C181.007 42.265 180.085 38.944 180.085 34.3884V29.9024H189.161V35.6403C189.161 36.701 189.318 37.5356 189.631 38.1441C189.961 38.7353 190.526 39.0309 191.326 39.0309C192.161 39.0309 192.735 38.7875 193.048 38.3006C193.378 37.8138 193.543 37.0139 193.543 35.9011C193.543 34.4927 193.404 33.3191 193.126 32.3801C192.848 31.4238 192.361 30.5196 191.665 29.6676C190.987 28.7982 190.039 27.7898 188.822 26.6422L184.701 22.7299C181.624 19.8262 180.085 16.5051 180.085 12.7668C180.085 8.85453 180.989 5.87254 182.798 3.82079C184.623 1.76904 187.257 0.743164 190.7 0.743164C194.908 0.743164 197.89 1.86467 199.646 4.10769C201.42 6.3507 202.307 9.7587 202.307 14.3317H192.969V11.1758C192.969 10.5498 192.787 10.063 192.422 9.71523C192.074 9.36747 191.596 9.19359 190.987 9.19359C190.257 9.19359 189.718 9.40225 189.37 9.81955C189.04 10.2195 188.875 10.7411 188.875 11.3844C188.875 12.0278 189.048 12.7233 189.396 13.471C189.744 14.2186 190.431 15.0793 191.457 16.0531L196.751 21.139C197.812 22.1474 198.786 23.2168 199.672 24.347C200.559 25.4598 201.272 26.7639 201.811 28.2592C202.35 29.7372 202.62 31.5455 202.62 33.6842C202.62 37.9963 201.82 41.3783 200.22 43.8299C198.638 46.2642 195.873 47.4813 191.926 47.4813Z" fill="white" />
							</svg>
							<!-- <img src="<?php echo _TEMPLATEPATH; ?>/assets/img/logo-white.svg" alt="Wincars logo"> -->
						</a>
						<?php
						wp_nav_menu([
							'theme_location'  => 'top',
							'container'       => 'nav',
							'container_class' => 'header-menu header-menu--desktop',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 1,
						]);
						?>
					</div>
					<?php $cta_button_text = (get_field('cta_button_text')) ? get_field('cta_button_text') : 'Остави запитване'; ?>
					<div class="header-media__cta">
						<div class="header-media__cta-btn-wrapper">
							<button class="header-media__cta-btn accent-btn open-popup" data-target="main-form"><?php echo esc_html($cta_button_text); ?></button>
						</div>
					</div>
					<div class="mobile-menu-wrapper" id="mobile-menu-wrapper">
						<?php
						wp_nav_menu([
							'theme_location'  => 'top',
							'container'       => 'nav',
							'container_class' => 'header-menu header-menu--mobile',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 1,
						]);
						?>
						<hr>
						<div class="header-banner img-wrapper">
							<img src="<?php echo _TEMPLATEPATH; ?>/assets/img/menu-banner.jpg" alt="Ние ще сбъднем вашата мечта">
						</div>
						<div class="header-links">
							<a href='#' rel='nofollow noopener sponsored' target='blank'>Нашите оферти в mobile.bg</a>
							<a href='tel:+359889333631' rel='nofollow noopener sponsored' target='blank'>Контакти
								+359889333631</a>
						</div>
					</div>
				</div>
				<div class="header-media active">
					<?php if (get_field('video_poster')) : ?>
						<?php $video_poster = get_field('video_poster'); ?>
						<div class="header-media__img">
							<video preload="none" autoplay="" muted="" playsinline="" loop="" poster="<?php echo $video_poster; ?>" src="<?php the_field('video'); ?>"></video>
						</div>
					<?php endif; ?>
				</div>
				<div class="hp-tracking align-center">
					<div class="hp-tracking__title">Проследяване</div>
					<form class="hp-tracking__form">
						<div class="hp-tracking-input-wrapper">
							<input type="text" name="hp-tracking" class="hp-tracking__vin" id="hp-tracking" placeholder="Въведете VIN">
						</div>
						<input type="submit" class="hp-tracking__submit accent-btn" value="Търсене">
					</form>
				</div>
			</div>
		</div>
	</header>
	<main>

		<?php the_content(); ?>
		<?php get_template_part('template-parts/post-previews'); ?>

	</main>
	<?php get_footer(); ?>
</body>

</html>
