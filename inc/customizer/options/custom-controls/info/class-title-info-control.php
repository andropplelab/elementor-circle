<?php
/*!
 * Title Info Control
 *
 * @package   elementor circle
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Exit if circle_Title_Info_Control exists & WP_Customize_Control not exsist.
if (class_exists('circle_Title_Info_Control') && !class_exists('WP_Customize_Control')) {
    return null;
}

/**
 * This class is used for showing the title of the controls in the Customizer.
 *
 * @access public
 *
 */

if (class_exists('WP_Customize_Control')) {
    class circle_Title_Info_Control extends WP_Customize_Control {

        // The type of customize control.
        public $type = 'title';

        //  Render the content via PHP.
        public function render_content() {
		?>
				<p class="customizer-title-info-text">
					<?php echo esc_html($this->label); ?>
				</p>
			<?php
        }
    }
}

