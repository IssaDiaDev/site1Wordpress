<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
	<?php if ( get_theme_mod('site_favicon') ) : ?>
	<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>" />
	<?php endif; ?>
	<?php endif; ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php do_action('sydney_before_site'); //Hooked: sydney_preloader() ?>

	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sydney' ); ?></a>

		<?php do_action('sydney_before_header'); //Hooked: sydney_header_clone() ?>

		<header id="masthead" class="site-header" role="banner">
			<div class="header-wrap">
				<div class="container">
					<div class="row">

						<div class="col-md-3 col-sm-8 col-xs-12">
							<?php if ( get_theme_mod('site_logo') ) : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>" /></a>
							<?php else : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
							<?php endif; ?>
						</div>
						<div class="col-md-6 col-sm-4 col-xs-12">
							<div class="btn-menu"></div>
							<nav id="mainnav" class="mainnav" role="navigation">
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'sydney_menu_fallback' ) ); ?>
							</nav><!-- #site-navigation -->
						</div>

						<div class="col-md-1">
							<div class="vertical_line"></div>
						</div>

						<div class="col-md-2 col-sm-8 col-xs-12">
							<ul class="contact">
								<li>
									<span><img border="0" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/telephone.svg" alt="logo_telephone" width="20px" height="20px">+33(0)4 72 02 52 95</span>
								</li>
								<li>
									<span><img border="0" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mail.svg" alt="logo_mail" width="20px" height="20px">contact@lignesdirectes.fr</span>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</header><!-- #masthead -->

		<?php do_action('sydney_after_header'); ?>

		<div class="sydney-hero-area">
			<?php sydney_slider_template(); ?>
			<div class="header-image">
				<?php sydney_header_overlay(); ?>
				<img class="header-inner" src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>">
			</div>
			<?php sydney_header_video(); ?>

			<?php do_action('sydney_inside_hero'); ?>
		</div>

		<?php do_action('sydney_after_hero'); ?>

		<div id="content" class="page-wrap">
			<div class="container content-wrapper">
				<div class="row">
