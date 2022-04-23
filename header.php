<?php
/**
 * theme header
 *
 * This is the template that displays all of the <head> section and everything up until <div class="site-content">
 *
 * @link       https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package   elementor circle
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php circle_head_top(); ?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php circle_head_bottom(); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'elementor-circle'  ); ?></a>

	<div class="site-wrapper">

	<?php if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('header')) {

		circle_topbar_before();
		$circleTopbar = get_theme_mod('circle_topbar');
    	if ($circleTopbar == true) { get_template_part('template-parts/header/partials/topbar'); }
		circle_topbar_after();
	 
		circle_header_before();
		get_template_part('template-parts/header/header1');
		get_search_form();
		
		if (function_exists('circle_woocommerce_header_cart')) {
			circle_woocommerce_header_cart();
		}
		circle_header_after();
		
		get_template_part('template-parts/header/page-header');
		
	} 
	
	circle_content_before(); ?>

		<div id="content" class="site-content">
			<?php circle_content_top(); ?>