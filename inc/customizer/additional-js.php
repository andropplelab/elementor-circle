<?php
/**
 * Outputs Additional JS to site footer.
 *
 * @package   elementor circle 
 * 
 */

 function circle_customize_output() {
 
    $js = get_option( 'custom_js', '' );
    if ( '' === $js ) {
        return;
    }
    ?>

    <script type="text/javascript">
        jQuery(function ($) {
            "use strict";
            <?php echo $js . "\n"; ?>
        });
    </script>
    <?php
 
}