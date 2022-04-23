<?php
/**
 * The template used for displaying blog content
 *
  * @package Elementor Circle
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php
	if ( has_post_thumbnail() && is_singular() || has_post_thumbnail() ) {
		$circle_blog_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'full' );
		echo '<div class="image-hover-wrapper"><div class="blog-entry-image" style="background: url(' . esc_url( $circle_blog_img[0] ) . ')"></div></div>';
	}
	?>

	<header class="entry-header">

		<a class="blog-entry-title" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php the_title( '<h1>', '</h1>' ); ?>
		</a>

		<?php 
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
	
	<div class="entry-summary">
		<?php  the_excerpt(); ?>
	</div><!-- .entry-summary -->
	

</article><!-- #post-## -->
