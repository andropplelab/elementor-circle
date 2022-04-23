<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link       https://codex.wordpress.org/Template_Hierarchy
 *
 * @package   elementor circle
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'elementor-circle' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p>
				<?php
				printf(
					wp_kses(
						/* translators: %s: link to new post admin screen */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'elementor-circle' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					),
					esc_url( admin_url( 'post-new.php' ) )
				);
				?>
			</p>

		<?php elseif ( is_search() ) : ?>
			<p>
				<?php
				esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'elementor-circle' );
				?>
			</p>
			<?php get_search_form(); ?>

		<?php else : ?>
			<p>
				<?php
					get_template_part( 'template-parts/content/content', '404' );
				?>
			</p>

		<?php endif; ?> 

	</div><!-- .page-content -->
</section><!-- .no-results -->
