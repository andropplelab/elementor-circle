<?php
/**
 * Template part for displaying single posts
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
  * @package Elementor Circle
 */ 
?>
<article <?php post_class(); ?>>
	<?php// circle_thumbnail( 'circle-blog' ); ?>
	<?php
	if ( has_post_thumbnail() && is_singular() || has_post_thumbnail() ) {
		$circle_blog_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'full' );
		echo '<div class="image-hover-wrapper"><div class="blog-entry-image" style="background: url(' . esc_url( $circle_blog_img[0] ) . ')"></div></div>';
	}
	?>
	<header class="entry-header">
		<?php 
		
		the_title( '<h1 class="blog-entry-title">', '</h1>' );
		if ( 'post' === get_post_type() ) :?>
		
			<ul class="entry-meta">
				<?php  
				circle_posted_by();
				circle_posted_on();
				circle_posts_category();
				circle_meta_comments();
				?>
			</ul><!-- .entry-meta -->

		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php
		the_content( esc_html__( 'Continue reading &rarr;', 'elementor-circle' ) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'elementor-circle' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php circle_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article> <!-- #post-## -->

<?php
?>



