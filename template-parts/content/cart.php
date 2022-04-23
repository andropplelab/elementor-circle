<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
  * @package Elementor Circle
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	
		<?php 
			while ( have_posts() ) : the_post();
			
				if ( is_woocommerce_activated() ) :
					if ( is_page( 'cart' ) || is_cart() ) :
						get_template_part( 'template-parts/content', 'cart-page' );
					elseif ( is_page( 'checkout' ) || is_checkout() ) :
						get_template_part( 'template-parts/content', 'checkout-page' );
					elseif ( is_page( 'my-account' ) || is_account_page() ) :
						get_template_part( 'template-parts/content', 'myaccount-page' );
					else :
						get_template_part( 'template-parts/content', 'page' );
					endif;
				else:
					get_template_part( 'template-parts/content', 'page' );
				endif;

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					?>
						<div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php                                        
                                        comments_template();                                        
                                    ?>
                                </div>
                            </div>
                        </div>
					<?php					
				endif;
			endwhile; // End of the loop.
		?>		
	</main>
</div>

<?php

get_footer();


