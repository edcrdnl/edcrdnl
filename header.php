<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package edcrdnl
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'edcrdnl' ); ?></a>

	<header id="masthead" class="site-header alt">
		<div class="row page-width">
			<div class="site-branding span-1-4 vertical-align-middle">
				<?php
				if ( has_custom_logo() ) :
					the_custom_logo();
				else :
					$edcrdnl_description = get_bloginfo( 'description', 'display' );
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<p class="site-description"><?php echo $edcrdnl_description; /* WPCS: xss ok. */ ?></p>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<p class="site-description"><?php echo $edcrdnl_description; /* WPCS: xss ok. */ ?></p>
						<?php
					endif;
				endif;
				?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation span-3-4 vertical-align-middle">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="fas fa-bars"></span> <?php esc_html_e( 'Menu', 'edcrdnl' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div><!-- .row -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
