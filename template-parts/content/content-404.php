<?php
/**
 * Template part for displaying 404 content.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
  * @package Elementor Circle
 */
define( 'CIRCLE_URI', get_template_directory_uri() );
add_action( 'circle_entry_featured_image', 'circle_featured_image_markup' );
?>
<section class="error-404">
	
		<div class="error-404-img">

			<?php $image = get_theme_mod( 'circle_settings_page_404_image', CIRCLE_URI . '/assets/images/404.svg' );?>
			
			<?php if ( $image ) : ?>
				<img src="<?php echo esc_url( $image ); ?>" alt="<?php esc_attr_e( '404 Page Not Found', 'elementor-circle' ) ?>" class="page-404__img" />
			<?php endif; ?>

		</div> <!-- .error-404-img -->

		<div class="error-404-content">
			<span><?php esc_html_e( 'Ops! That page can’t be found.', 'elementor-circle' ); ?></span>
			<h1 class="title"><?php echo esc_html__( '404', 'elementor-circle' ); ?></h1>	

			<p><?php esc_html_e( 'Unfortunately the page you were looking for could not be found.', 'elementor-circle' ); ?></p>

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn">
				<span><i class="an an-long-arrow-left"></i> <?php echo esc_html__( 'Back to Home ', 'elementor-circle' ); ?></span>
			</a>	
		</div> <!--.error-404-content -->

</section><!-- .error-404 --> 

