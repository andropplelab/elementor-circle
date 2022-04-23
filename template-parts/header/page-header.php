<?php
/**
 * Display page header
 *
  * @package Elementor Circle
 */

if(true === get_theme_mod( 'circle_show_page_header',true )){
     
        if ( has_post_thumbnail() ) {
                $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
            } else {
                     $backgroundImg = get_stylesheet_directory_uri() . '/assets/images/pattarn.png';
                } 
        ?>
        
        <div class="page-header">
                <div class="header-wrap" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">
                        <header class="entry-header">
                                <?php if(true === get_theme_mod( 'circle_show_page_title',true )){ ?>
                                        <div class="entry-title-wrapper">
                                                <h4 class="entry-title"><?php the_title(); ?></h4>
                                        </div>
                                <?php }  ?>

                                <?php if ( get_theme_mod( 'circle_show_breadcrumbs', true ) === true ) {
                                        get_template_part('template-parts/header/breadcrumb'); 
                                } ?>

                        </header>
                </div> 
        </div> 
        <?php }


