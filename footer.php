<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link       https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package   elementor circle
 */
?>
		</div><!-- .row -->
	</div><!-- .wrapper -->
</div><!-- .site-content -->

	<?php if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) : ?>
		
		<?php circle_footer_before(); ?>

		<footer id="footer" class="site-footer">
			<?php			
			if ( get_theme_mod( 'circle_footer_show', true ) ) :
				get_template_part( 'template-parts/footer/footer-widgets');
			endif;

			if ( get_theme_mod( 'circle_footer_copyright_show', true ) ) :
				get_template_part( 'template-parts/footer/footer-bottom'); 
			endif;
			?>
		</footer><!-- .footer -->

		<?php circle_footer_after(); ?>


		<?php get_template_part( 'template-parts/footer/back-to-top'); ?>
	<?php endif; ?>

	<?php wp_footer(); ?>

	<?php circle_content_after(); ?>
</div><!-- .site-wrapper -->

</body>
</html>
