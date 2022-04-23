<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link       https://codex.wordpress.org/Template_Hierarchy
 *
 * @package   elementor circle
 * 
 * blog main
 * 
 */

get_header(); 

?>

<div class="content-area">
	<?php
	if ( have_posts() ) :

		if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'archive' ) ) :

			if ( is_home() && ! is_front_page() ) :
				?>

				<header>
					<h1 class="page-title"><?php  single_post_title(); ?></h1>
				</header>

				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'template-parts/content/content', 'page' );

			endwhile;

			circle_the_posts_navigation();
			
		endif;
 
	else :
		get_template_part( 'template-parts/content/content', 'none' );

	endif;

	?>

</div><!-- .content-area -->

<?php
get_sidebar();
get_footer();
