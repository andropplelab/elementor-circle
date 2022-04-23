<?php
/**
 * The template for displaying the footer copyright
 *
  * @package Elementor Circle
 */
// Get footer menu location and apply filters for child theming.
$menu_location = 'footer_menu';
$menu_location = apply_filters( 'circle_footer_menu_location', $menu_location );

 $show_footer_copyright = get_theme_mod( 'circle_show_footer_copyright', 1 );
?>

<?php if ( 1 == $show_footer_copyright ) { ?>
    <div id="bottom-footer">

        <div class="footer-wrapper">

            <div class="footer-bottom">
                
                <div class="footer-bottom-left">

                    <div class="site-copyright">
                        <p class="copyright">
                            <?php
                                if ( current_user_can( 'edit_theme_options' ) ) {
                                    $footer_copyright = get_theme_mod( 'circle_footer_copyright' );
                                }

                                if ( get_theme_mod( 'circle_footer_copyright', '' ) ) {
                                    echo wp_kses_post( get_theme_mod( 'circle_footer_copyright', '' ) );
                                }

                                else {
                                    ?>
                                    <span><span>&copy; </span> Copyright <a target="_blank" href="https://circlethemes.com/"  title="circle Theme"> <?php bloginfo( 'name' ); ?></span> </a> <span class="copyright-year"><?php echo esc_html( date_i18n( _x( 'Y', 'copyright date format', 'elementor-circle' ) ) ); ?> All Rights Reserved.</span>
                                    <?php
                                }
                            ?>
                        </p>
                    </div><!-- .site-info -->

                </div><!-- .footer-bottom-left -->

                <div class="footer-bottom-right">

                    <div class="footer-menu">
                        <?php
                        // Display footer bottom menu if location is defined.
                        if ( has_nav_menu( $menu_location ) ) : ?>
                            <div id="footer-bottom-menu">
                                <?php
                                wp_nav_menu( array(
                                    'theme_location' => $menu_location,
                                    'sort_column'    => 'menu_order',
                                    'fallback_cb'    => false,
                                ) );
                                ?>
                            </div><!-- #footer-bottom-menu -->

                            <?php
                        endif;
                        ?>
                    </div>
                    
                </div><!-- .footer-bottom-right -->
            
            </div><!-- .site-copy-down -->

        </div><!-- .footer-wrapper -->

    </div><!-- .bottom-footer -->

<?php } ?>