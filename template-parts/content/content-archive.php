<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link       https://codex.wordpress.org/Template_Hierarchy
 *
 * @package   elementor circle
 */

?>

<article <?php post_class(); ?>>

	<?php circle_thumbnail( 'circle-blog' ); ?>

	<header class="entry-header">

		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

		<div class="entry-meta">
			<?php circle_posted_on(); ?>
		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
