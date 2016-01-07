<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WordPress Start
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon"
      type="image/png"
      href="<?php bloginfo('template_directory'); ?>/_i/favicon.png">
<?php wp_head(); ?>
<script src="//use.typekit.net/kbv0gwq.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
</head>

<body <?php body_class(); ?>>
	<svg display="none" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		<defs>
		<symbol id="icon-left" viewBox="0 0 731 1024">
			<title>left</title>
			<path class="path1" d="M669.143 172l-303.429 303.429 303.429 303.429q10.857 10.857 10.857 25.714t-10.857 25.714l-94.857 94.857q-10.857 10.857-25.714 10.857t-25.714-10.857l-424-424q-10.857-10.857-10.857-25.714t10.857-25.714l424-424q10.857-10.857 25.714-10.857t25.714 10.857l94.857 94.857q10.857 10.857 10.857 25.714t-10.857 25.714z"></path>
		</symbol>
		<symbol id="icon-right" viewBox="0 0 731 1024">
			<title>right</title>
			<path class="path1" d="M632.571 501.143l-424 424q-10.857 10.857-25.714 10.857t-25.714-10.857l-94.857-94.857q-10.857-10.857-10.857-25.714t10.857-25.714l303.429-303.429-303.429-303.429q-10.857-10.857-10.857-25.714t10.857-25.714l94.857-94.857q10.857-10.857 25.714-10.857t25.714 10.857l424 424q10.857 10.857 10.857 25.714t-10.857 25.714z"></path>
		</symbol>
		<symbol id="icon-down" viewBox="0 0 658 1024">
			<title>down</title>
			<path class="path1" d="M614.286 420.571q0 7.429-5.714 13.143l-266.286 266.286q-5.714 5.714-13.143 5.714t-13.143-5.714l-266.286-266.286q-5.714-5.714-5.714-13.143t5.714-13.143l28.571-28.571q5.714-5.714 13.143-5.714t13.143 5.714l224.571 224.571 224.571-224.571q5.714-5.714 13.143-5.714t13.143 5.714l28.571 28.571q5.714 5.714 5.714 13.143z"></path>
		</symbol>
		<symbol id="icon-angle-left" viewBox="0 0 366 1024">
			<title>angle-left</title>
			<path class="path1" d="M358.286 310.857q0 7.429-5.714 13.143l-224.571 224.571 224.571 224.571q5.714 5.714 5.714 13.143t-5.714 13.143l-28.571 28.571q-5.714 5.714-13.143 5.714t-13.143-5.714l-266.286-266.286q-5.714-5.714-5.714-13.143t5.714-13.143l266.286-266.286q5.714-5.714 13.143-5.714t13.143 5.714l28.571 28.571q5.714 5.714 5.714 13.143z"></path>
		</symbol>
		<symbol id="icon-angle-right" viewBox="0 0 366 1024">
			<title>angle-right</title>
			<path class="path1" d="M340 548.571q0 7.429-5.714 13.143l-266.286 266.286q-5.714 5.714-13.143 5.714t-13.143-5.714l-28.571-28.571q-5.714-5.714-5.714-13.143t5.714-13.143l224.571-224.571-224.571-224.571q-5.714-5.714-5.714-13.143t5.714-13.143l28.571-28.571q5.714-5.714 13.143-5.714t13.143 5.714l266.286 266.286q5.714 5.714 5.714 13.143z"></path>
		</symbol>
		</defs>
	</svg>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'start' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrap">
			<div class="site-branding">
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src = "<?php bloginfo('template_directory'); ?>/_i/logo.png">
						<span class="assistive-text"><?php bloginfo( 'name' ); ?></span>
					</a>
				</h1>
			</div>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<!--<button class="menu-toggle"><?php _e( 'Primary Menu', 'start' ); ?></button>-->
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'top-nav') ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
