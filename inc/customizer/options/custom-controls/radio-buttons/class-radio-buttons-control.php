<?php
/**
 * Radio buttons control
 * 
 * @package Elementor Circle
 */

// Exit if accessed directly.
if (!defined('ABSPATH'))
{
    exit;
}

// Exit if Circle_Radio_Buttons_Control exists & WP_Customize_Control not exsist.
if (class_exists('Circle_Radio_Buttons_Control') && !class_exists('WP_Customize_Control'))
{
    return null;
}

/**
 * Class for toggle control in the Customizer.
 *
 * @access public
 */
if (class_exists('WP_Customize_Control')) {
	
	class Circle_Radio_Buttons_Control extends WP_Customize_Control {

		public $type = 'circle-radio-buttons';

		public $cols;
	
		public function render_content() {

			$allowed_tags = array(
				'div' => array(
					'style' => array()
				),
				'svg'     => array(
					'class'       => true,
					'xmlns'       => true,
					'width'       => true,
					'height'      => true,
					'viewbox'     => true,
					'aria-hidden' => true,
					'role'        => true,
					'focusable'   => true,
				),
				'path'    => array(
					'd'      => true,
				),
				'rect'    => array(
					'x'      => true,
					'y'      => true,
					'width'  => true,
					'height' => true,
					'transform' => true
				),			
			);
			?>
				<div class="radio_button_text_control">
					<?php if( !empty( $this->label ) ) { ?>
						<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
					<?php } ?>
					<?php if( !empty( $this->description ) ) { ?>
						<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
					<?php } ?>

					<div class="radio-buttons">
						<?php foreach ( $this->choices as $key => $value ) { ?>
							<label class="radio-button-label">
								<input type="radio" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $key ); ?>" <?php $this->link(); ?> <?php checked( esc_attr( $key ), $this->value() ); ?>/>
								<span><?php echo wp_kses( $value, $allowed_tags ); ?></span>
							</label>
						<?php	} ?>
					</div>
				</div>
			<?php
		}
	}
}