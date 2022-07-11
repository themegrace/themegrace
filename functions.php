<?php
/**
 * ThemeSurge functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package    WordPress
 * @subpackage ThemeSurge
 * @author     ThemeSurge <contact@themesurge.com>
 * @copyright  2022 ThemeSurge, https://themesurge.com
 * @license    https://www.gnu.org/licenses/gpl-3.0.en.html GPL
 * @link       https://themesurge.com/base-wp
 * @since      1.0
 */


// Do not allow directly accessing this file.
defined( 'ABSPATH' ) || die( "Can't access directly" );

// Constants
define("THEMEGRACE_THEME_DIR", get_template_directory() );
define("THEMEGRACE_THEME_URI", get_template_directory_uri() );
define("THEMEGRACE_CHILD_THEME_DIR", get_stylesheet_directory() );
define("THEMEGRACE_CHILD_THEME_URI", get_stylesheet_directory_uri() );
define("THEMEGRACE_VERSION", wp_get_theme( "themesurge" )->get( "Version" ) );
define("FUNC_INC", THEMEGRACE_THEME_DIR . "/functions");
define("THEMEGRACE_INC", FUNC_INC . "/framework");


/** THEMEGRACE Framework Core */
require_once THEMEGRACE_INC . "/init.php";



/** THEMEGRACE Theme Files */
require_once FUNC_INC . "/functions.php";
require_once FUNC_INC . "/sidebar.php";
require_once FUNC_INC . "/setup.php";
require_once FUNC_INC . "/enqueue.php";
require_once FUNC_INC . "/breadcrumbs.php";
require_once FUNC_INC . "/custom-header.php";
require_once FUNC_INC . "/template-tags.php";
require_once FUNC_INC . "/template-functions.php";

// THEMEGRACE Widgets
require_once FUNC_INC . "/widgets/recentposts.php";


// THEMEGRACE Compatibility.
require THEMEGRACE_INC . '/compatibility/compatibility.php';

