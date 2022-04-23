<?php
/**
 * The template for displaying all single posts
 *
 * @link       https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package   elementor circle
 */

get_header(); ?>

	<div class="content-area">

		<?php
		if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) {
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content/content', 'single' );

				// If comments are open or we have at least one comment, load up the comment template.
				get_template_part( 'template-parts/content/comments' );

				circle_the_post_navigation();

			endwhile;

		} 
		?>

	</div><!-- .content-area -->

<?php
get_sidebar();
get_footer();
