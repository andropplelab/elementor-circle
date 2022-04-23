<?php
/*!
 * Range Slider
 *
 * @package   elementor circle
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Exit if Customize_Range_Slider exists & WP_Customize_Control not exsist.
if (class_exists('Customize_Range_Slider') && !class_exists('WP_Customize_Control')) {
    return null;
}

/**
 * Class for toggle control in the Customizer.
 *
 * @access public
 */

if (class_exists('WP_Customize_Control')) {
    class Customize_Range_Slider extends WP_Customize_Control {
			/**
			 * The type of control being rendered
			 */

			// Enqueue scripts and styles.
			public function enqueue() {
				wp_enqueue_script('jquery-ui-button');
				wp_enqueue_style('circle-range-slider-control-css', get_parent_theme_file_uri('inc/customizer/options/custom-controls/range/range-control.css', array() , '1.0', 'all'));
			}

			  
			public $type = 'circle-responsive-slider';
		
			public $is_responsive;
		
			/**
			 * Render the control in the customizer
			 */
			public function render_content() {
		
				if ( isset( $this->input_attrs['step'] ) ) {
					$step = $this->input_attrs['step'];
				} else {
					$step = 1;
				}
		
				$responsive = '';
				if ( !$this->is_responsive ) {
					$responsive = 'noresponsive';
				}
		
				?>
					<div class="range-slider-wrapper device-size-range">
						<div class="device-heading">				
							<div class="customize-control-title"><?php echo esc_html( $this->label ); ?></div>
							<?php if ( $this->is_responsive ) : ?>
							<ul class="circle-devices-preview">
								<li class="desktop"><button type="button" class="preview-desktop active" data-device="desktop"><i class="dashicons dashicons-desktop"></i></button></li>
								<li class="tablet"><button type="button" class="preview-tablet" data-device="tablet"><i class="dashicons dashicons-tablet"></i></button></li>
								<li class="mobile"><button type="button" class="preview-mobile" data-device="mobile"><i class="dashicons dashicons-smartphone"></i></button></li>
							</ul>
							<?php endif; ?>
						</div>				
						<div class="range-slider device-size-desktop active <?php echo esc_attr( $responsive ); ?>">
							<input class="range-slider__range" type="range" value="<?php echo esc_attr( $this->value( 'size_desktop' ) ); ?>" <?php $this->link( 'size_desktop' ); ?> min="<?php echo absint( $this->input_attrs['min'] ); ?>" max="<?php echo absint( $this->input_attrs['max'] ); ?>" step="<?php echo esc_attr( $step ); ?>">
							<input class="range-slider__value" type="number" value="<?php echo esc_attr( $this->value( 'size_desktop' ) ); ?>" <?php $this->link( 'size_desktop' ); ?> min="<?php echo absint( $this->input_attrs['min'] ); ?>" max="<?php echo absint( $this->input_attrs['max'] ); ?>" step="<?php echo esc_attr( $step ); ?>">
						</div>
						<?php if ( $this->is_responsive ) : ?>
						<div class="range-slider device-size-tablet">
							<input class="range-slider__range" type="range" value="<?php echo esc_attr( $this->value( 'size_tablet' ) ); ?>" <?php $this->link( 'size_tablet' ); ?> min="<?php echo absint( $this->input_attrs['min'] ); ?>" max="<?php echo absint( $this->input_attrs['max'] ); ?>" step="<?php echo esc_attr( $step ); ?>">
							<input class="range-slider__value" type="number" value="<?php echo esc_attr( $this->value( 'size_tablet' ) ); ?>" <?php $this->link( 'size_tablet' ); ?> min="<?php echo absint( $this->input_attrs['min'] ); ?>" max="<?php echo absint( $this->input_attrs['max'] ); ?>" step="<?php echo esc_attr( $step ); ?>">
						</div>
						<div class="range-slider device-size-mobile">
							<input class="range-slider__range" type="range" value="<?php echo esc_attr( $this->value( 'size_mobile' ) ); ?>" <?php $this->link( 'size_mobile' ); ?> min="<?php echo absint( $this->input_attrs['min'] ); ?>" max="<?php echo absint( $this->input_attrs['max'] ); ?>" step="<?php echo esc_attr( $step ); ?>">
							<input class="range-slider__value" type="number" value="<?php echo esc_attr( $this->value( 'size_mobile' ) ); ?>" <?php $this->link( 'size_mobile' ); ?> min="<?php echo absint( $this->input_attrs['min'] ); ?>" max="<?php echo absint( $this->input_attrs['max'] ); ?>" step="<?php echo esc_attr( $step ); ?>">
						</div>		
						<?php endif; ?>	
						<?php if ( $this->description ) : ?>
							<p><?php echo esc_html( $this->description ); ?></p>
						<?php endif; ?>									
					</div>	
				<?php
			}













	}
}

