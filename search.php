<?php
/**
 * The template for displaying search results pages
 *
 * @link       https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package   elementor circle
 */

get_header(); ?>

	<section class="content-area">

		<?php if ( have_posts() ) :

			if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'archive' ) ) : ?>

				<header class="page-header">
					<h1 class="page-title">
						<?php
							/* translators: %s: the search query */
							printf( esc_html__( 'Search Results for: %s', 'elementor-circle' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
				</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) :

					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content/content', 'search' );

				endwhile;

				circle_the_posts_navigation();

			endif;

		else :

			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>

	</section><!-- .content-area -->

<?php
get_sidebar();
get_footer();
