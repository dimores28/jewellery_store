<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<title><?php echo wp_get_document_title(); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="format-detection" content="telephone=no">

	<?php wp_head(); ?>

	<link rel="shortcut icon" href="favicon.ico">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="header__container">
				<div class="header__logo">
					<a href="#">
						<!-- <img src="<?php bloginfo('template_url'); ?>/assets/img/heder_logo.svg" width="109" height="40" alt="logo"> -->
						<?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
					</a>
				</div>

				<div class="header__menu menu">
					<button type="button" class="menu__icon icon-menu"><span></span></button>
					<?php wp_nav_menu([
						'theme_location' => 'header-menu',
						'menu' => 'nav-menu',
						'menu_class' => 'menu__list',
						'container' => 'nav',
						'container_class' => 'menu__body',
						'depth' => 2,
					]);?>
				</div>

				<a href="#" class="login-btn">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
						<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
					</svg>

					<span>Login / Register</span>
				</a>

				<div class="header__search search">
					<button class="search__btn-open">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11.089 4a7.091 7.091 0 0 1 7.088 7.089 7.091 7.091 0 0 1-7.088 7.088A7.091 7.091 0 0 1 4 11.09 7.091 7.091 0 0 1 11.089 4zm0 12.602a5.512 5.512 0 0 0 5.513-5.513 5.512 5.512 0 0 0-5.513-5.514 5.511 5.511 0 0 0-5.514 5.514 5.512 5.512 0 0 0 5.514 5.513zm6.683.056L20 18.885 18.886 20l-2.228-2.228 1.114-1.114z" />
						</svg>
					</button>
					<input type="text" class="search__input" placeholder="Search for products">
					<button class="search__btn-close">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M6.4 19 5 17.6l5.6-5.6L5 6.4 6.4 5l5.6 5.6L17.6 5 19 6.4 13.4 12l5.6 5.6-1.4 1.4-5.6-5.6L6.4 19z" />
						</svg>
					</button>
				</div>

				<div class="header__cart">
					<a href="#" class="header__cart-linck">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
							<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
						</svg>
						<span>0</span>
					</a>
					<div class="header__cart-total">
						$0.00
					</div>
				</div>
			</div>
		</header>