<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * @package   elementor circle
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body.
 * @return array
 */

 function circle_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class search_results on search pages.
	if ( is_search() ) {
		$classes[] = 'search_results';
	}

	// Always add a front-page class to the front page.
	if ( is_front_page() && ! is_home() ) {
		$classes[] = 'front-page';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// woocommerce class
	if ( circle_is_woocommerce_activated() ) {
		if ( is_front_page() ) {
			$classes[] = 'woocommerce-active';
		}  elseif ( is_shop()) {
			$classes[] = 'shop';
		} elseif ( is_cart()) {
			$classes[] = 'cart';
		} elseif ( is_checkout()) {
			$classes[] = 'checkout';
		} elseif ( is_account_page()) {
			$classes[] = 'account';
		} elseif ( is_product()) {
			$classes[] = 'single_post';
		} else {
			$classes[] = 'page';
		}
	}
	
	// comments closed
	if (function_exists('comments_open') && function_exists('get_post') && get_post() && comments_open()) {
		$classes[] = 'comments-closed';
	}

	return $classes;
}
add_filter( 'body_class', 'circle_body_classes' );