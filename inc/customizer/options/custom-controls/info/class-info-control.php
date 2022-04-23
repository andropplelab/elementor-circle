<?php
/*!
 * Title Info Control
 *
 * @package   elementor circle
 */

// Exit if accessed directly.
if (!defined('ABSPATH'))
{
    exit;
}

// Exit if circle_Info_Control exists & WP_Customize_Control not exsist.
if (class_exists('circle_Info_Control') && !class_exists('WP_Customize_Control')) {
    return null;
}

/**
 * Extra information about controls in the Customizer.
 *
 * @access public
 *
 */

if (class_exists('WP_Customize_Control')) {

    class circle_Info_Control extends WP_Customize_Control {

        // The type of customize control.
        public $type = 'info';

        // Render the content via PHP.
        public function render_content() {
		?>
				<p class="customizer-info-text"> 
					<?php echo esc_html($this->label); ?>
				</p>
			<?php
        }
    }
}

