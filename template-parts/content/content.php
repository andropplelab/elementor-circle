<?php
/**
 * Template part for displaying posts
 *
 * @link       https://codex.wordpress.org/Template_Hierarchy
 *
 * @package   elementor circle
 */
?>

<article <?php post_class(); ?>>

	<?php circle_thumbnail( 'circle-blog' ); ?>

	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php circle_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content( esc_html__( 'Continue reading &rarr;', 'elementor-circle' ) );

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'elementor-circle' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php circle_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
