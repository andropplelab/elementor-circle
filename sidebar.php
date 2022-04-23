<?php
/**
 * The sidebar containing the main widget area
 *
 * @link       https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package   elementor circle
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="sidebar-1 widget-area">
	<?php circle_sidebar_before(); ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php circle_sidebar_after(); ?>
</aside><!-- #secondary -->

