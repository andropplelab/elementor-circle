<?php
/**
 * The template for displaying archive pages
 *
 * @link       https://codex.wordpress.org/Template_Hierarchy
 *
 * @package   elementor circle
 */

get_header(); ?>

	<div class="content-area">
		

		<?php if ( have_posts() ) :

			if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'archive' ) ): ?>

				<header class="archive-header">
					<?php
						the_archive_title( '<h1 class="archive-title">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<?php
				while ( have_posts() ) :

					the_post();

					get_template_part( 'template-parts/content/content', 'archive' );

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
