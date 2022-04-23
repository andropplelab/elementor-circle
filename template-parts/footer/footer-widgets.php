<?php
/**
 * The template for displaying the footer widgets
 *
 * @package   elementor circle
 */
?>

<div class="footer-wrapper">

	<div class="footer-main">

		<div class="footerArea">

			<aside id="footer-1" class="widget-area footer" role="complementary">

			<?php dynamic_sidebar( 'footer-1' ); ?>

			<div class="circle-social">

				<ul class="social-icon">

					<?php do_action('circle_topbar_social'); ?>

				</ul> <!-- social icon -->

			</div> <!-- circle social -->

			</aside><!-- #footer-1 -->

			<aside id="footer-2" class="widget-area footer" role="complementary">

			<?php dynamic_sidebar( 'footer-2' ); ?>

			</aside><!-- #footer-2 -->

			<aside id="footer-3" class="widget-area footer" role="complementary">

			<?php dynamic_sidebar( 'footer-3' ); ?>

			</aside><!-- #footer-3 -->

			<aside id="footer-4" class="widget-area footer" role="complementary">

			<?php dynamic_sidebar( 'footer-4' ); ?>

			</aside><!-- #footer-4 -->

		</div> <!-- .footerArea -->

	</div> <!-- .mainFooter -->

</div> <!-- .footer wrapper -->
