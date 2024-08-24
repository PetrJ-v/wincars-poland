<?php
#Template Name: Front page
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>
	<header>
		<div class="header">
			<div class="header-container">
				<div class="header-top-links">
					<a href='#' rel='nofollow noopener sponsored' target='blank'>Нашите оферти в mobile.bg</a>
					<a href='tel:+359889333631' rel='nofollow noopener sponsored' target='blank'>Контакти
						+359889333631</a>
				</div>

				<div class="header-media">
					<div class="header-menu-wrapper">
						<button class="header-menu-btn" aria-label="menu button">
							<span class="header-menu-btn__inner">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</button>

						<nav class="header-menu">
							<ul id="menu-main-navigation" class="menu">
								<li class="menu-item current-menu-item current_page_item">
									<a href="/html/front-page.html" aria-current="page">Главната</a>
								</li>
								<li class="menu-item menu-item-has-children">
									<a href="#">Автомобили</a>
								</li>
								<li id="menu-item-1052" class="menu-item menu-item-has-children">
									<a href="/html/about.html">За нас</a>
								</li>
								<li id="menu-item-1053" class="menu-item">
									<a href="/html/faq.html">FAQ</a>
								</li>
								<li id="menu-item-1053" class="menu-item">
									<a href="/html/contacts.html">Контакти</a>
								</li>
							</ul>
						</nav>
					</div>
					<div class="header-media__img">
						<!-- autoplay="" -->
						<video preload="none" muted=""  playsinline="" loop="" poster="<?php echo get_template_directory_uri(); ?>/assets/video/ford-poster.jpg" src="<?php echo get_template_directory_uri(); ?>/assets/video/ford-mustang-short.mp4"></video>
						<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/header-img.jpg"> -->
					</div>
					<div class="header-media__cta">
						<div class="header-media__cta-btn-wrapper">
							<button class="header-media__cta-btn accent-btn open-popup" data-target="main-form">Остави
								запитване</button>
						</div>
					</div>
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
		<!-- Single features block -->
		<!-- <div class="container">
			<div class="single-features single-features p-tb-30-44">
				<div class="single-features__item sf-item">
					<div class="sf-item__number">
						<span class="number">700</span><span>+</span>
					</div>
					<div class="sf-item__text">Доволни<br>клиенти</div>
				</div>
				<div class="single-features__item sf-item">
					<div class="sf-item__number">
						<span class="number">592</span><span>+</span>
					</div>
					<div class="sf-item__text">Локации<br>за търг</div>
				</div>
				<div class="single-features__item sf-item">
					<div class="sf-item__number">
						<span class="number">247</span><span>/</span><span class="number">7</span>
					</div>
					<div class="sf-item__text">Поддръжка<br>на клиенти</div>
				</div>
			</div>
		</div> -->

		<!-- Cars-wrapper block -->
		<div class="container">
			<div class="cars-wrapper p-tb-30-44">
				<h2 class="cars-wrapper__title">Най-печелившите коли от Америка</h2>
				<div class="cars">
					<div class="cars__item car wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
						<div class="car__info">
							<div class="car__info-title">JEEP GRAND CHEROKEE</div>
							<div class="car__info-year">2016</div>
						</div>
						<div class="car__img img-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/cars/car-1.png">
						</div>
						<a href="#" class="car__link">
							<span class="car__link-text">
								<span class="hidden-text">Отивам</span>
								<span class="visible-text">€ 2300</span>
							</span>
							<span class="car__link-img img-wrapper">
								<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="17.5" cy="17.5" r="17.5" fill="#FCB001" />
									<path d="M11.7839 22.2929L11.0768 23L12.491 24.4142L13.1981 23.7071L11.7839 22.2929ZM23.491 13C23.491 12.4477 23.0433 12 22.491 12L13.491 12C12.9387 12 12.491 12.4477 12.491 13C12.491 13.5523 12.9387 14 13.491 14L21.491 14L21.491 22C21.491 22.5523 21.9387 23 22.491 23C23.0433 23 23.491 22.5523 23.491 22L23.491 13ZM13.1981 23.7071L23.1981 13.7071L21.7839 12.2929L11.7839 22.2929L13.1981 23.7071Z" fill="#1B1B1B" />
								</svg>
							</span>
						</a>
					</div>
					<div class="cars__item car wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
						<div class="car__info">
							<div class="car__info-title">BMW X5</div>
							<div class="car__info-year">2017</div>
						</div>
						<div class="car__img img-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/cars/car-2.png">
						</div>
						<a href="#" class="car__link">
							<span class="car__link-text">
								<span class="hidden-text">Отивам</span>
								<span class="visible-text">€ 4100</span>
							</span>
							<span class="car__link-img img-wrapper">
								<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="17.5" cy="17.5" r="17.5" fill="#FCB001" />
									<path d="M11.7839 22.2929L11.0768 23L12.491 24.4142L13.1981 23.7071L11.7839 22.2929ZM23.491 13C23.491 12.4477 23.0433 12 22.491 12L13.491 12C12.9387 12 12.491 12.4477 12.491 13C12.491 13.5523 12.9387 14 13.491 14L21.491 14L21.491 22C21.491 22.5523 21.9387 23 22.491 23C23.0433 23 23.491 22.5523 23.491 22L23.491 13ZM13.1981 23.7071L23.1981 13.7071L21.7839 12.2929L11.7839 22.2929L13.1981 23.7071Z" fill="#1B1B1B" />
								</svg>
							</span>
						</a>
					</div>
					<div class="cars__item car wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
						<div class="car__info">
							<div class="car__info-title">TOYOTA LAND CRUISER</div>
							<div class="car__info-year">2019</div>
						</div>
						<div class="car__img img-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/cars/car-3.png">
						</div>
						<a href="#" class="car__link">
							<span class="car__link-text">
								<span class="hidden-text">Отивам</span>
								<span class="visible-text">€ 2900</span>
							</span>
							<span class="car__link-img img-wrapper">
								<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="17.5" cy="17.5" r="17.5" fill="#FCB001" />
									<path d="M11.7839 22.2929L11.0768 23L12.491 24.4142L13.1981 23.7071L11.7839 22.2929ZM23.491 13C23.491 12.4477 23.0433 12 22.491 12L13.491 12C12.9387 12 12.491 12.4477 12.491 13C12.491 13.5523 12.9387 14 13.491 14L21.491 14L21.491 22C21.491 22.5523 21.9387 23 22.491 23C23.0433 23 23.491 22.5523 23.491 22L23.491 13ZM13.1981 23.7071L23.1981 13.7071L21.7839 12.2929L11.7839 22.2929L13.1981 23.7071Z" fill="#1B1B1B" />
								</svg>
							</span>
						</a>
					</div>
					<div class="cars__item car wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
						<div class="car__info">
							<div class="car__info-title">AUDI Q7</div>
							<div class="car__info-year">2018</div>
						</div>
						<div class="car__img img-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/cars/car-4.png">
						</div>
						<a href="#" class="car__link">
							<span class="car__link-text">
								<span class="hidden-text">Отивам</span>
								<span class="visible-text">€ 3700</span>
							</span>
							<span class="car__link-img img-wrapper">
								<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="17.5" cy="17.5" r="17.5" fill="#FCB001" />
									<path d="M11.7839 22.2929L11.0768 23L12.491 24.4142L13.1981 23.7071L11.7839 22.2929ZM23.491 13C23.491 12.4477 23.0433 12 22.491 12L13.491 12C12.9387 12 12.491 12.4477 12.491 13C12.491 13.5523 12.9387 14 13.491 14L21.491 14L21.491 22C21.491 22.5523 21.9387 23 22.491 23C23.0433 23 23.491 22.5523 23.491 22L23.491 13ZM13.1981 23.7071L23.1981 13.7071L21.7839 12.2929L11.7839 22.2929L13.1981 23.7071Z" fill="#1B1B1B" />
								</svg>
							</span>
						</a>
					</div>
					<div class="cars__item car wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
						<div class="car__info">
							<div class="car__info-title">MERCEDES-BENZ GL</div>
							<div class="car__info-year">2015</div>
						</div>
						<div class="car__img img-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/cars/car-5.png">
						</div>
						<a href="#" class="car__link">
							<span class="car__link-text">
								<span class="hidden-text">Отивам</span>
								<span class="visible-text">€ 2300</span>
							</span>
							<span class="car__link-img img-wrapper">
								<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="17.5" cy="17.5" r="17.5" fill="#FCB001" />
									<path d="M11.7839 22.2929L11.0768 23L12.491 24.4142L13.1981 23.7071L11.7839 22.2929ZM23.491 13C23.491 12.4477 23.0433 12 22.491 12L13.491 12C12.9387 12 12.491 12.4477 12.491 13C12.491 13.5523 12.9387 14 13.491 14L21.491 14L21.491 22C21.491 22.5523 21.9387 23 22.491 23C23.0433 23 23.491 22.5523 23.491 22L23.491 13ZM13.1981 23.7071L23.1981 13.7071L21.7839 12.2929L11.7839 22.2929L13.1981 23.7071Z" fill="#1B1B1B" />
								</svg>
							</span>
						</a>
					</div>
					<div class="cars__item car wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
						<div class="car__info">
							<div class="car__info-title">BMW M4</div>
							<div class="car__info-year">2022</div>
						</div>
						<div class="car__img img-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/cars/car-6.png">
						</div>
						<a href="#" class="car__link">
							<span class="car__link-text">
								<span class="hidden-text">Отивам</span>
								<span class="visible-text">€ 5200</span>
							</span>
							<span class="car__link-img img-wrapper">
								<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="17.5" cy="17.5" r="17.5" fill="#FCB001" />
									<path d="M11.7839 22.2929L11.0768 23L12.491 24.4142L13.1981 23.7071L11.7839 22.2929ZM23.491 13C23.491 12.4477 23.0433 12 22.491 12L13.491 12C12.9387 12 12.491 12.4477 12.491 13C12.491 13.5523 12.9387 14 13.491 14L21.491 14L21.491 22C21.491 22.5523 21.9387 23 22.491 23C23.0433 23 23.491 22.5523 23.491 22L23.491 13ZM13.1981 23.7071L23.1981 13.7071L21.7839 12.2929L11.7839 22.2929L13.1981 23.7071Z" fill="#1B1B1B" />
								</svg>
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Why we block -->
		<div class="container">
			<div class="why-we p-tb-30-44">
				<div class="why-we__title">Защо партньорите ни избират?</div>
				<div class='swiper why-we__slider'>
					<div class='swiper-wrapper'>
						<div class='swiper-slide'>
							<div class="why-we__item">
								<div class="why-we__item-title">Гаранция за качество!</div>
								<div class="why-we__card">
									<div class="why-we__card-img img-wrapper">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/why-we/why-1.jpg">
									</div>
									<div class="why-we__card-text">
										Преди закупуване, ние внимателно проверяваме историята на автомобила чрез
										различни инструменти.
									</div>
								</div>
							</div>
						</div>
						<div class='swiper-slide'>
							<div class="why-we__item">
								<div class="why-we__item-title">Спестявате пари</div>
								<div class="why-we__card">
									<div class="why-we__card-img img-wrapper">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/why-we/why-2.jpg">
									</div>
									<div class="why-we__card-text">
										Възможност да спестите от 30% от пазарната стойност. Още преди покупката
										може да изчислите печалбата!
									</div>
								</div>
							</div>
						</div>
						<div class='swiper-slide'>
							<div class="why-we__item">
								<div class="why-we__item-title">Бърза доставка</div>
								<div class="why-we__card">
									<div class="why-we__card-img img-wrapper">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/why-we/why-3.jpg">
									</div>
									<div class="why-we__card-text">
										Проверени с години морски линии с най-бързи маршрути.
									</div>
								</div>
							</div>
						</div>
						<div class='swiper-slide'>
							<div class="why-we__item">
								<div class="why-we__item-title">Поддържка 24/7</div>
								<div class="why-we__card">
									<div class="why-we__card-img img-wrapper">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/why-we/why-4.jpg">
									</div>
									<div class="why-we__card-text">
										Нашите мениджъри предоставят пълна гама поддръжка на автомобила.
									</div>
								</div>
							</div>
						</div>
						<div class='swiper-slide'>
							<div class="why-we__item">
								<div class="why-we__item-title">Голям избор</div>
								<div class="why-we__card">
									<div class="why-we__card-img img-wrapper">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/why-we/why-5.jpg">
									</div>
									<div class="why-we__card-text">
										Около 600 000 автомобила са на търг едновременно. Ние знаем най-изгодните
										предложения от тях.
									</div>
								</div>
							</div>
						</div>
						<div class='swiper-slide'>
							<div class="why-we__item">
								<div class="why-we__item-title">Изгодни тарифи</div>
								<div class="why-we__card">
									<div class="why-we__card-img img-wrapper">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/why-we/why-6.jpg">
									</div>
									<div class="why-we__card-text">
										Тук ще намерите най-ниските тарифи за местна доставка в САЩ и товари.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Choice block -->
		 <?php the_content(); ?>
		<!-- <div class="container">
			<div class="choice align-center p-tb-30-44">
				<div class="choice__left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
					<div class="choice-content">
						<h2 class="choice-content__title">Избор на автомобил в 3 стъпки</h2>
						<div class="choice-content__text">
							Нашата цел е бързо и качествено да изберем точно това, което желаете. За това имаме нужда от
						</div>
						<ul class="choice-content__list">
							<li>Избор на времеви рамки</li>
							<li>Определяне на характеристиките</li>
							<li>Подписването на договора</li>
						</ul>
					</div>
				</div>
				<div class="choice__right wow fadeInRight" data-function="toggleClassName" data-anim="true" data-wow-duration="1s" data-wow-delay="0s">
					<div class="choice__right-bg img-wrapper">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/choice/car-bg.jpg">
					</div>
					<div class="choice__right-img choice__right-img--right img-wrapper">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/choice/car-orange.png">
					</div>
					<div class="choice__right-img choice__right-img--left img-wrapper">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/choice/car-green.png">
					</div>
				</div>
			</div>
			<div class="choice-bottom align-center">
				<div class="choice-bottom__img img-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/choice/choise-img.png">
				</div>
				<div class="choice-bottom__content wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
					<div class="choice-content">
						<h2 class="choice-content__title">Най-популярните<br>аукциони в САЩ</h2>
						<ul class="choice-content__list">
							<li>Избор от над 650 000 партиди на пазара</li>
							<li>Най-ниска комисионна за наддаване</li>
							<li>Проверка на автомобила чрез Carfax</li>
						</ul>
					</div>
				</div>
			</div>
		</div> -->

		<!-- Single form block -->
		<div class="container">
			<div class="single-form p-tb-30-44 align-center">
				<h2 class="single-form__title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
					Абонирайте се за актуализации на бъдете в крак с всички новини WINCARS
				</h2>
				<div class="single-form__text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
					Получавайте ексклузивни оферти, последните новини за нови автомобили и полезни съвети директно във
					вашата поща. Присъединете се към нашето семейство от доволни клиенти и не пропускайте нито една
					възможност!
				</div>
				<div class="single-form__form align-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
					<div class="wpcf7 js" id="wpcf7-f168-o1" lang="en-US" dir="ltr">
						<div class="screen-reader-response">
							<p role="status" aria-live="polite" aria-atomic="true">One or more fields have an error.
								Please check and try again.</p>
							<ul>
								<li id="wpcf7-f168-o1-ve-email">Please fill out this field.</li>
							</ul>
						</div>
						<form action="/test-page/#wpcf7-f168-o1" method="post" class="wpcf7-form invalid" aria-label="Contact form" novalidate="novalidate" data-status="invalid">
							<div style="display: none;">
								<input type="hidden" name="_wpcf7" value="168">
								<input type="hidden" name="_wpcf7_version" value="5.9.6">
								<input type="hidden" name="_wpcf7_locale" value="en_US">
								<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f168-o1">
								<input type="hidden" name="_wpcf7_container_post" value="0">
								<input type="hidden" name="_wpcf7_posted_data_hash" value="">
							</div>
							<div class="sf-row">
								<span class="wpcf7-form-control-wrap" data-name="email">
									<input size="10" maxlength="80" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email sf-email wpcf7-not-valid" autocomplete="email" aria-required="true" aria-invalid="true" placeholder="Въведете своя имейл" value="" type="email" name="email" aria-describedby="wpcf7-f168-o1-ve-email">
									<span class="wpcf7-not-valid-tip" aria-hidden="true">Please fill out this
										field.</span>
								</span>
								<input class="wpcf7-form-control wpcf7-submit has-spinner sf-submit" type="submit" value="Абонирай се"><span class="wpcf7-spinner"></span>
							</div>
							<div class="wpcf7-response-output" aria-hidden="true">One or more fields have an error.
								Please check and try again.</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Faq block -->
		<div class="container">
			<div class="faq-block p-tb-30-44 align-center">
				<div class="faq-block__left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
					<div class="faq-block__left-lable">Support</div>
					<h2 class="faq-block__left-title">FAQs</h2>
					<div class="faq-block__left-text">
						Защо закупуването на кола в САЩ ще бъде с 30-50% по-евтино?
					</div>
				</div>
				<div class="faq-block__right">
					<div class="faq">
						<div class="faq__item wow fadeInUp" data-wow-duration="1s" data-wow-offset="100" data-wow-delay="0s">
							<div class="faq__item-qustion question">
								<div class="question__text">Защо закупуването на кола в САЩ ще бъде с 30-50% по-евтино?
								</div>
								<button class="question__btn">
									<svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect y="12.2188" width="25" height="1.5625" fill="#4E4949" />
										<rect x="13.2812" y="0.5" width="25" height="1.5625" transform="rotate(90 13.2812 0.5)" fill="#4E4949" />
									</svg>
								</button>
							</div>
							<div class="faq__item-answer">
								САЩ скъпи ремонти, така че застрахователните компании дори след След лека катастрофа
								първото нещо, което правят, е да пуснат колите на търг и да ги продадат на намалени
								цени. Украйна има един от най-евтините ремонти в света. Ценоразписите за ремонти в САЩ и
								Украйна се различават 10-20 пъти.
							</div>
						</div>
						<div class="faq__item wow fadeInUp" data-wow-duration="1s" data-wow-offset="100" data-wow-delay="0.3s">
							<div class="faq__item-qustion question">
								<div class="question__text">Защо закупуването на кола в САЩ ще бъде с 30-50% по-евтино?
								</div>
								<button class="question__btn">
									<svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect y="12.2188" width="25" height="1.5625" fill="#4E4949" />
										<rect x="13.2812" y="0.5" width="25" height="1.5625" transform="rotate(90 13.2812 0.5)" fill="#4E4949" />
									</svg>
								</button>
							</div>
							<div class="faq__item-answer">
								САЩ скъпи ремонти, така че застрахователните компании дори след След лека катастрофа
								първото нещо, което правят, е да пуснат колите на търг и да ги продадат на намалени
								цени. Украйна има един от най-евтините ремонти в света. Ценоразписите за ремонти в САЩ и
								Украйна се различават 10-20 пъти.
							</div>
						</div>
						<div class="faq__item wow fadeInUp" data-wow-duration="1s" data-wow-offset="100" data-wow-delay="0.6s">
							<div class="faq__item-qustion question">
								<div class="question__text">Защо закупуването на кола в САЩ ще бъде с 30-50% по-евтино?
								</div>
								<button class="question__btn">
									<svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect y="12.2188" width="25" height="1.5625" fill="#4E4949" />
										<rect x="13.2812" y="0.5" width="25" height="1.5625" transform="rotate(90 13.2812 0.5)" fill="#4E4949" />
									</svg>
								</button>
							</div>
							<div class="faq__item-answer">
								САЩ скъпи ремонти, така че застрахователните компании дори след След лека катастрофа
								първото нещо, което правят, е да пуснат колите на търг и да ги продадат на намалени
								цени. Украйна има един от най-евтините ремонти в света. Ценоразписите за ремонти в САЩ и
								Украйна се различават 10-20 пъти.
							</div>
						</div>
						<div class="faq__item wow fadeInUp" data-wow-duration="1s" data-wow-offset="100" data-wow-delay="0.9s">
							<div class="faq__item-qustion question">
								<div class="question__text">Защо закупуването на кола в САЩ ще бъде с 30-50% по-евтино?
								</div>
								<button class="question__btn">
									<svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect y="12.2188" width="25" height="1.5625" fill="#4E4949" />
										<rect x="13.2812" y="0.5" width="25" height="1.5625" transform="rotate(90 13.2812 0.5)" fill="#4E4949" />
									</svg>
								</button>
							</div>
							<div class="faq__item-answer">
								САЩ скъпи ремонти, така че застрахователните компании дори след След лека катастрофа
								първото нещо, което правят, е да пуснат колите на търг и да ги продадат на намалени
								цени. Украйна има един от най-евтините ремонти в света. Ценоразписите за ремонти в САЩ и
								Украйна се различават 10-20 пъти.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Feedbacks block -->
		<div class="container container--feedbacks">
			<div class="feedbacks p-tb-30-44">
				<div class="feedbacks-header">
					<h2 class="feedbacks-header__title">
						Нашите доволни клиенти, които вече са получили своите автомобили
					</h2>
					<div class="feedbacks-header__text">
						Главния принцип в нашата работа е задълбочено търсене, което се осигурява чрез постоянен пазарен
						анализ, иновации и спазване на високи стандарти за професионализъм.
					</div>
				</div>
				<!-- Can have class feedbacks-slider--no-swiper -->
				<div class='swiper feedbacks-slider'>
					<div class="slider-buttons">
						<div class='swiper-button-prev'>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/left-arrow.svg" alt="">
						</div>
						<div class='swiper-button-next'>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/right-arrow.svg" alt="">
						</div>
					</div>
					<div class='swiper-wrapper'>
						<div class='swiper-slide'>
							<div class="feedback">
								<div class="feedback__header">
									<div class="feedback__header-img img-wrapper">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/feedbacks/fb-1.png">
									</div>
									<div class="feedback__header-text">
										<div class="feedback__header-name">Стефан Петров</div>
										<div class="feedback__header-car">Honda Acord</div>
									</div>
									<div class="feedback-preview">
										Останах много доволен! Бързо ми намериха точно това което много отдавна не можех
										да
										намеря в България! Благодаря ви и ви пожелавам успех!
									</div>
								</div>
								<div class="feedback__content">
									Останах много доволен! Бързо ми намериха точно това което много отдавна не можех да
									намеря в България! Благодаря ви и ви пожелавам успех!
									Останах много доволен! Бързо ми намериха точно това което много отдавна не можех да
									намеря в България! Благодаря ви и ви пожелавам успех!
								</div>
							</div>
						</div>
						<div class='swiper-slide'>
							<div class="feedback">
								<div class="feedback__header">
									<div class="feedback__header-img img-wrapper">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/feedbacks/fb-2.png">
									</div>
									<div class="feedback__header-text">
										<div class="feedback__header-name">Елена Ангелова</div>
										<div class="feedback__header-car">Nissan Rogue</div>
									</div>
									<div class="feedback-preview">
										Много съм доволен! Определено най-добрата компания в България, която не се
										опитва просто да ти вземе парите. Стъпка по стъпка знаеш за какво плащаш.
									</div>
								</div>
								<div class="feedback__content">
									Много съм доволен! Определено най-добрата компания в България, която не се опитва
									просто да ти вземе парите. Стъпка по стъпка знаеш за какво плащаш.
								</div>
							</div>
						</div>
						<div class='swiper-slide'>
							<div class="feedback">
								<div class="feedback__header">
									<div class="feedback__header-img img-wrapper">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/feedbacks/fb-3.png">
									</div>
									<div class="feedback__header-text">
										<div class="feedback__header-name">Петьр Стоянов</div>
										<div class="feedback__header-car">Ford Mustang GTX</div>
									</div>
									<div class="feedback-preview">
										Препоръчвам с двете ръце! Целия процес беше толкова прозрачен, че за момент не
										се усьмних в избора си на тази компания и тези момчета!
									</div>
								</div>
								<div class="feedback__content">
									Препоръчвам с двете ръце! Целия процес беше толкова прозрачен, че за момент не се
									усьмних в избора си на тази компания и тези момчета!
								</div>
							</div>
						</div>
						<div class='swiper-slide'>
							<div class="feedback">
								<div class="feedback__header">
									<div class="feedback__header-img img-wrapper">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/feedbacks/fb-4.png">
									</div>
									<div class="feedback__header-text">
										<div class="feedback__header-name">Димитьр Богданов</div>
										<div class="feedback__header-car">Ford Focus 2017</div>
									</div>
									<div class="feedback-preview">
										Нуждаех се от автомобил, които отговаря на очакванията като качество и да бъде
										на реални километри, нямат същите трикове, както при автокьщите, кьдета
										замаскират проблеми и се пробват да ти продадат боклуци на завишени цени,
										останах много очарован от избора на кола, показаха ми абсолютно всичко и ще ги
										препоръчам на всеки, които иска хубав автомобил на добра цена!!
									</div>
								</div>
								<div class="feedback__content">
									Нуждаех се от автомобил, които отговаря на очакванията като качество и да бъде на
									реални
									километри, нямат същите трикове, както при автокьщите, кьдета замаскират проблеми и
									се
									пробват да ти продадат боклуци на завишени цени, останах много очарован от избора на
									кола, показаха ми абсолютно всичко и ще ги препоръчам на всеки, които иска хубав
									автомобил на добра цена!!
								</div>
							</div>
						</div>
						<div class='swiper-slide'>
							<div class="feedback">
								<div class="feedback__header">
									<div class="feedback__header-img img-wrapper">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/feedbacks/fb-5.png">
									</div>
									<div class="feedback__header-text">
										<div class="feedback__header-name">Никола Стойнов</div>
										<div class="feedback__header-car">Maserati Levante</div>
									</div>
									<div class="feedback-preview">
										"Избрах "PLAYCARS" за внос на първият ми италиански екзотичен спортен
										SUV от САЩ. Имаше толкова много впроси и раздвоения, но екипьт им ни предостави
										изключително индивидуално отношение. Всичко беше ясно и прозрачно, а резултатьт
										е
										автомобил, който превъзхожда очакванията ни.
										Бихме препорьчали тази компания на всеки, който цени качество и персонално
										внимание
										към клиента."
									</div>
								</div>
								<div class="feedback__content">
									"Избрах "PLAYCARS" за внос на първият ми италиански екзотичен спортен
									SUV от САЩ. Имаше толкова много впроси и раздвоения, но екипьт им ни предостави
									изключително индивидуално отношение. Всичко беше ясно и прозрачно, а резултатьт е
									автомобил, който превъзхожда очакванията ни.
									Бихме препорьчали тази компания на всеки, който цени качество и персонално внимание
									към клиента."
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Previews block -->
		<div class="container p-tb-30-44">
			<div class="last-post-header">
				<div class="last-post-header__info">
					<h2 class="last-post-header__info-title">Последни писания</h2>
					<div class="last-post-header__info-description">Най-новите новини, технологии и ресурси от нашия
						екип.</div>
				</div>
				<a href="#" class="last-post-header__btn accent-btn at-md">Вижте всички публикации</a>
			</div>
			<div class='swiper previews-slider'>
				<div class="slider-buttons">
					<div class='swiper-button-prev'>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/left-arrow.svg" alt="">
					</div>
					<div class='swiper-button-next'>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/right-arrow.svg" alt="">
					</div>
				</div>
				<div class='swiper-wrapper'>
					<div class='swiper-slide'>
						<div class="preview">
							<div class="preview__img cover-img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/previews/preview-1.jpg">
								<div class="preview__img-deco">Read post</div>
							</div>
							<div class="preview__date">17 Jan 2022</div>
							<h3 class="preview__title">
								<a class="preview__title-link" href="#">Walsh leadership lessons</a>
								<div class="preview__title-deco">
									<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1 11L11 1M11 1H1M11 1V11" stroke="#FDFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</div>
							</h3>
							<div class="preview__text">
								Like to know the secrets of transforming a 2-14 team into a 3x Super Bowl winning
								Dynasty?
							</div>
						</div>
					</div>
					<div class='swiper-slide'>
						<div class="preview">
							<div class="preview__img cover-img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/previews/preview-2.jpg">
								<div class="preview__img-deco">Read post</div>
							</div>
							<div class="preview__date">17 Jan 2022</div>
							<h3 class="preview__title">
								<a class="preview__title-link" href="#">Walsh leadership lessons</a>
								<div class="preview__title-deco">
									<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1 11L11 1M11 1H1M11 1V11" stroke="#FDFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</div>
							</h3>
							<div class="preview__text">
								Like to know the secrets of transforming a 2-14 team into a 3x Super Bowl winning
								Dynasty?
							</div>
						</div>
					</div>
					<div class='swiper-slide'>
						<div class="preview">
							<div class="preview__img cover-img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/previews/preview-3.jpg">
								<div class="preview__img-deco">Read post</div>
							</div>
							<div class="preview__date">17 Jan 2022</div>
							<h3 class="preview__title">
								<a class="preview__title-link" href="#">Walsh leadership lessons</a>
								<div class="preview__title-deco">
									<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1 11L11 1M11 1H1M11 1V11" stroke="#FDFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</div>
							</h3>
							<div class="preview__text">
								Like to know the secrets of transforming a 2-14 team into a 3x Super Bowl winning
								Dynasty?
							</div>
						</div>
					</div>
				</div>
				<div class='swiper-button-prev'></div>
				<div class='swiper-button-next'></div>
			</div>
			<a href="#" class="last-post-header__btn accent-btn undr-md">Вижте всички публикации</a>
		</div>
	</main>
	<?php get_footer(); ?>
</body>

</html>
