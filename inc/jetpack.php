<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package   elementor circle
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 */
function circle_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support(
		'infinite-scroll',
		array(
			'container' => 'main',
			'render'    => 'circle_infinite_scroll_render',
			'footer'    => 'page',
		)
	);
	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );
	// Add theme support for Content Options.
	add_theme_support(
		'jetpack-content-options',
		array(
			'post-details' => array(
				'date'       => '.meta-date',
				'categories' => '.meta-cat',
				'tags'       => '.meta-cat',
				'author'     => '.meta-author',
				'comment'    => '.meta-comments',
			),
			'featured-images' => array(
				'archive' => true,
				'post'    => true,
				'page'    => true,
			),
		)
	);
}
add_action( 'after_setup_theme', 'circle_jetpack_setup' );
/**
 * Custom render function for Infinite Scroll.
 */
function circle_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
			get_template_part( 'template-parts/content/content', 'search' );
		else :
			get_template_part( 'template-parts/content/content', get_post_format() );
		endif;
	}
}