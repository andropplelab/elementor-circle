<?php 
/**
 * Template part for displaying results in search pages
 *
 * @link       https://codex.wordpress.org/Template_Hierarchy
 *
 * @package   elementor circle
 */

// check OK

?>

<article <?php post_class(); ?>>

	<?php circle_thumbnail( 'circle-blog' ); ?>

	<header class="entry-header">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php circle_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php circle_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
