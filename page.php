<?php
/**
 * The template for displaying all single pages
 *
 * @link       https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package   elementor circle
 */

get_header(); ?>

<div class="content-area">

	<?php if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) {
		while ( have_posts() ) : the_post(); 
		?>

			<article <?php post_class(); ?>>

			
				<div class="entry-content">
					<?php
					the_content();

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'elementor-circle' ),
							'after'  => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'elementor-circle' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
							)
					);
					?>
				</div><!-- .entry-content -->
				<?php if ( get_edit_post_link() ) :
					edit_post_link( esc_html__( '(Edit)', 'elementor-circle' ), '<p class="edit-link">', '</p>' );
				endif;
				?>
			</article><!-- #post-## -->
			<?php

			// If comments are open or we have at least one comment, load up the comment template.
			get_template_part( 'template-parts/content/comments' );

		endwhile;

	}
	?>

</div><!-- .content-area -->

<?php
//get_sidebar();
get_footer();




