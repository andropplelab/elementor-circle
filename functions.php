<?php
/**
 * circle functions and definitions
 *
 * @link       https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package   elementor circle
 */
define( 'CIRCLE_VERSION', '1.0.0' );

// circle options
require get_template_directory() . '/inc/circle-options.php';

// admin theme info
require get_template_directory() . '/inc/admin/theme-info.php';

// demo import
require_once get_template_directory() . '/inc/class-ocdi-importer.php';

// theme hooks
require get_template_directory() . '/inc/theme-hooks.php';

// Include Breadcrumb
require get_template_directory() . '/inc/breadcrumb.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

//  Custom functions that act independently of the theme templates.
require get_template_directory() . '/inc/template-functions.php';

//  Load Jetpack compatibility file.
require get_template_directory() . '/inc/jetpack.php';

// Customizer additions.
require get_template_directory() . '/inc/customizer/customizer.php';

// If the WooCommerce plugin is active, load the related functions.
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce/woocommerce.php';
}

// Load tgmpa
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';

// elementor register loactions
function circle_register_elementor_locations( $elementor_theme_manager ) {
	$elementor_theme_manager->register_all_core_location();
};
add_action( 'elementor/theme/register_locations', 'circle_register_elementor_locations' );