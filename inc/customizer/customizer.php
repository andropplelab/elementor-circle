<?php
/**
 * circle Theme Customizer
  *
 * @package   elementor circle
 * 
 */

// Add custom controls.
require get_parent_theme_file_path( 'inc/customizer/options/custom-controls/control-custom-content.php' ); 
require get_parent_theme_file_path( 'inc/customizer/options/custom-controls/info/class-info-control.php' );
require get_parent_theme_file_path( 'inc/customizer/options/custom-controls/info/class-title-info-control.php' );
require get_parent_theme_file_path( 'inc/customizer/options/custom-controls/toggle-button/class-toggle-control.php' );
require get_parent_theme_file_path( 'inc/customizer/options/custom-controls/radio-images/class-radio-image-control.php' );
require get_parent_theme_file_path( 'inc/customizer/options/custom-controls/radio-buttons/class-radio-buttons-control.php' );
require get_parent_theme_file_path( 'inc/customizer/options/custom-controls/range/class-customize-range-control.php' );
// require get_parent_theme_file_path( 'inc/customizer/options/custom-controls/divider/class_divider_control.php' );
require get_parent_theme_file_path( 'inc/customizer/options/custom-controls/dimensions-control/class-dimensions-control.php' );

// additional js
get_template_part( 'inc/customizer/additional-js' );

// data sanitization
get_template_part( 'inc/customizer/data-sanitization' );

// topbar settings
get_template_part( 'inc/customizer/options/section-topbar' );

// header settings
get_template_part( 'inc/customizer/options/section-header' );

// breadcrumbs settings
get_template_part( 'inc/customizer/options/section-breadcrumbs' );

// page header settings
get_template_part( 'inc/customizer/options/section-page-header' );

// preloader settings
get_template_part( 'inc/customizer/options/section-preloader' );

// footer settings
get_template_part( 'inc/customizer/options/section-footer' );

// back to top settings
get_template_part( 'inc/customizer/options/section-back-to-top' );

// button settings
get_template_part( 'inc/customizer/options/section-button' );

// typography settings
get_template_part( 'inc/customizer/options/section-typography' );

// typography settings
get_template_part( 'inc/customizer/options/section-additional-js' );

// social icons
get_template_part( 'inc/customizer/social-icons' );

 /**
 * Enqueue customizer preview style & JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function circle_customizer_scripts() {
	wp_enqueue_script( 'circle-customizer-scripts', get_template_directory_uri() . '/assets/js/customizer.js', array( 'jquery', 'jquery-ui-core' ), '20201211', true );

	wp_enqueue_style( 'circle-customizer-styles', get_template_directory_uri() . '/assets/css/customize-controls.css' );
}
add_action( 'customize_controls_print_footer_scripts', 'circle_customizer_scripts' );