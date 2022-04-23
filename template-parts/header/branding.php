<?php
/**
 * Template part for displaying the logo and site title.
 *
 * @package   elementor circle
 */

?>

<div class="site-branding">

	<?php circle_the_custom_logo(); ?>
	<?php if ( is_front_page() && is_home() ) : ?>

		<h1 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<span><?php bloginfo( 'name' ); ?><span>
			</a>
		</h1>

		<?php else : ?>
			<div class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>

				<?php $description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
				<p class="site-description">
					<?php echo $description; /* WPCS: xss ok. */ ?>
				</p>
				<?php endif; ?>
			</div>
	<?php endif; ?>

</div><!-- .site-branding -->