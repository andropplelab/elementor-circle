<?php
/**
 * Display Breadcrumb
 *
  * @package Elementor Circle
 */
?>

<?php
$enable_breadcrumb = get_theme_mod( 'circle_breadcrumb_option', 2 );

if ( $enable_breadcrumb ) :
        circle_breadcrumb();
endif;