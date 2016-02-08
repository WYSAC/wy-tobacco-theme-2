<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WYSAC Wyoming Tobacco
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wysac-wy-tobacco' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<div class="site-description hidden-xs">
					<a href="http://www.uwyo.edu/wysac">Wyoming Survey & Analysis Center</a>  |  <a href="http://www.uwyo.edu">University of Wyoming</a>
					<?php get_search_form(); ?>
				</div>
				<div class="site-description hidden-md hidden-lg hidden-sm"><a href="http://www.uwyo.edu/wysac"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/08/wysac-icon.png" title="wyoming survey and analysis center" /> WYSAC</a>  |  <a href="http://www.uwyo.edu">UWYO</a></div>

				<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span>Wyoming Tobacco</span> </br>Prevention & Control Evaluation<!--<?php bloginfo( 'name' ); ?>--></a></div>
		</div><!-- .site-branding -->
		<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header">
		    <button type="button" class="navbar-toggle .nav-stacked" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		      <span class="sr-only">Toggle navigation</span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		    </button>
		  </div>
		  <!-- Collect the nav links, forms, and other content for toggling -->
		  <div class="collapse navbar-collapse navbar-ex1-collapse">
				<?php
							wp_nav_menu( array(
							'menu'              => 'main-navigation',
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => false,
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
							);
				        ?>
		  </div>
		</nav>





	</header><!-- #masthead -->

	<div id="content" class="site-content container-fluid">
