<?php
/**
 * themesurge functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package themesurge
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}





/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/functions/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/functions/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/functions/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/functions/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/functions/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/functions/woocommerce.php';
}
