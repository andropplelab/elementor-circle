
<?php
/**
 * The template for displaying comments
 *
 * @link       https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/comment-template/
 *
 * @package   elementor circle
 */

if ( comments_open() || get_comments_number() ) :
    comments_template();
endif;