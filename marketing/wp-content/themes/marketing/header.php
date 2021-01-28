<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Nawbnepal
 */
 global $redux_demo ;
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>.::SUPER ULTRA THEME | HOMEPAGE::.</title>
	<link href="https://fonts.googleapis.com/css?family=Abhaya+Libre:400,500,600,700,800|Nunito+Sans:400,400i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/raratheme-companion-public.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/extra.css">
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel = "stylesheet">
</head>
<body class="<?php if ( is_front_page() && is_home() )  { echo "home"; } elseif (is_single()) {echo "single";} elseif ( is_search() ) { echo "search search-results"; } elseif(is_archive()) { echo "archive category";} else { echo "page"; }?> <?php if ( is_404() ) { echo "error404 full-width";} else { echo "rightsidebar";}?>">
	<div id="page" class="site">
		<header class="site-header">
			<div class="container">
				<div class="menu-toggle">
					<span class="toggle-bar"></span>
					<span class="toggle-bar"></span>
					<span class="toggle-bar"></span>
				</div>
				<div class="site-branding logo-text">
					<div class="site-logo">
						<a href="<?php bloginfo('url'); ?>/" title="Super Ultra Theme">
							<img src="<?php echo $redux_demo['logo-image']['url'];?>" alt="super ultra theme">
						</a>
					</div>
					<div class="site-text-wrap">
						<h1 class="site-title">
							<a href="<?php bloginfo('url'); ?>/" title="Super Ultra Theme">SuperUltraTheme</a>
						</h1>
						<p class="site-description">Just Another WordPress Theme</p>
					</div>
				</div> <!-- .site-branding -->
				<div class="menu-wrap">
					<nav class="main-navigation">

                        <?php wp_nav_menu(array('theme_location'=>'primary','menu_class'=>'nav-menu')); ?>
					</nav>
					<div class="header-search">
						<span class="search-toggle">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18"><defs><style>.a{fill:none;}</style></defs><g transform="translate(83 -7842)"><rect class="a" width="18" height="18" transform="translate(-83 7842)"/><path d="M18,16.415l-3.736-3.736a7.751,7.751,0,0,0,1.585-4.755A7.876,7.876,0,0,0,7.925,0,7.876,7.876,0,0,0,0,7.925a7.876,7.876,0,0,0,7.925,7.925,7.751,7.751,0,0,0,4.755-1.585L16.415,18ZM2.264,7.925a5.605,5.605,0,0,1,5.66-5.66,5.605,5.605,0,0,1,5.66,5.66,5.605,5.605,0,0,1-5.66,5.66A5.605,5.605,0,0,1,2.264,7.925Z" transform="translate(-83 7842)"/></g></svg>
						</span>
						<div class="header-search-form">
							<div class="container">
								<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>" autocomplete="on">
									<label>
										<span class="screen-reader-text">Search for:</span>
										<input class="search-field" placeholder="Search anything and hit enter" value="" name="s" onFocus="if (this.value == 'Search...') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Search...';}" type="search">
									</label>
									<input class="search-submit" value="Search" type="submit">
								</form>
								<span class="close"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header> <!-- .site-header -->