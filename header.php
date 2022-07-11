<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package themesurge
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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'themegrace' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container header-inner">
			<?php themegrace_site_branding(); ?>
			<div class="main-navbar">
				<nav id="site-navigation" class="main-navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<?php 
					if( has_nav_menu( 'primary' ) ){ ?>
						<button class="toggle-btn">
							<span class="toggle-bar"></span>
							<span class="toggle-bar"></span>
							<span class="toggle-bar"></span>
						</button>

					<?php 
						if ( $header_layout == 'one' || $header_layout == 'seventeen' ) {
							echo '<span class="toggle-text">' . esc_html__( 'Menu', 'chic-pro' ) . '</span>';
						}
					}
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'nav-menu',                
							'fallback_cb'    => 'chic_pro_primary_menu_fallback',
						) );
					?>
				</nav><!-- #site-navigation -->

			</div><!-- .main-navbar -->
		</div><!-- .container -->
	</header><!-- #masthead -->

	
	<div id="content" class="site-content right-sidebar">
