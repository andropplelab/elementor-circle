<?php
/**
 * The template for back to top button
 *
  * @package Elementor Circle
 */

    if(true === get_theme_mod( 'circle_back_to_top',true )){
        ?>
            <div class="scrolltop">
                <span data-scroll ></span>
            </div>
        <?php
    }
?>