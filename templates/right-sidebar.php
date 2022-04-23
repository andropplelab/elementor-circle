<?php
/**
 * Template Name: Right sidebar Template
 * Template Post Type: post, page
 *
 * @package   elementor circle
 */

get_header(); ?>

	<div class="content-area">

		<?php
		while ( have_posts() ) :
			the_post();

			?>

			<article <?php post_class(); ?>>

				<?php
				if ( get_edit_post_link() ) :

					edit_post_link( esc_html__( '(Edit)', 'elementor-circle' ), '<p class="edit-link">', '</p>' );

				endif;
				?>

				<div class="entry-content">
					<?php
					the_content();

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'elementor-circle' ),
							'after'  => '</div>',
						)
					);
					?>
				</div><!-- .entry-content -->

			</article><!-- #post-## -->

			<?php

			// If comments are open or we have at least one comment, load up the comment template.
			get_template_part( 'template-parts/content/comments' );

		endwhile;
		?>

	</div><!-- .content-area -->

<?php
get_sidebar();
get_footer();
