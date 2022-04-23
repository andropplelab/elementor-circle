<?php
 /*!
 * Dimensions Control
 *
 * @package   elementor circle
 */


// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Exit if circle_customizer_dimensions_Control exists and WP_Customize_Control does not exsist.
if (class_exists('circle_customizer_dimensions_Control') && !class_exists('WP_Customize_Control')) {
    return null;
}

/**
 * This class is for toggle control.
 *
 * @access public
 */
if (class_exists('WP_Customize_Control')) {
	class circle_customizer_dimensions_Control extends WP_Customize_Control {

		/**
		 * The control type.
		 *
		 * @access public
		 * @var string
		 */ 
		public $type = 'circle-dimensions';

		/**
		 * Enqueue control related scripts/styles.
		 *
		 * @access public
		 */
		public function enqueue() {
			wp_enqueue_script('circle-dimensions', get_parent_theme_file_uri('inc/customizer/options/custom-controls/dimensions-control/dimensions.js') , array( 'jquery' ) , '1.0.0', true);
			wp_localize_script( 'circle-dimensions', 'circleL10n', $this->l10n() );
			wp_enqueue_style('circle-dimensions', get_parent_theme_file_uri('inc/customizer/options/custom-controls/dimensions-control/dimensions.css') , false, '1.0.0', 'all');
		}

		/**
		 * Renders the control wrapper and calls $this->render_content() for the internals.
		 *
		 * @see WP_Customize_Control::render()
		 */
		protected function render() {
			$id    = 'customize-control-' . str_replace( array( '[', ']' ), array( '-', '' ), $this->id );
			$class = 'customize-control has-switchers customize-control-' . $this->type;

			?><li id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $class ); ?>">
				<?php $this->render_content(); ?>
			</li><?php
		}

		/**
		 * Refresh the parameters passed to the JavaScript via JSON.
		 *
		 * @see WP_Customize_Control::to_json()
		 */
		public function to_json() {
			parent::to_json();

			$this->json['id'] 		= $this->id;
			$this->json['l10n']    	= $this->l10n();
			$this->json['title'] 	= esc_html__( 'Link values together', 'elementor-circle' );

			$this->json['inputAttrs'] = '';
			foreach ( $this->input_attrs as $attr => $value ) {
				$this->json['inputAttrs'] .= $attr . '="' . esc_attr( $value ) . '" ';
			}

			$this->json['desktop'] = array();
			$this->json['tablet']  = array();
			$this->json['mobile']  = array();

			foreach ( $this->settings as $setting_key => $setting ) {

				list( $_key ) = explode( '_', $setting_key );

				$this->json[ $_key ][ $setting_key ] = array(
					'id'        => $setting->id,
					'link'      => $this->get_link( $setting_key ),
					'value'     => $this->value( $setting_key ),
				);
			}

		}
		/**
		 * An Underscore (JS) template for this control's content (but not its container).
		 *
		 * Class variables for this control class are available in the `data` JS object;
		 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
		 *
		 * @see WP_Customize_Control::print_template()
		 *
		 * @access protected
		 */
		protected function content_template() {
			?>

			<# if ( data.label ) { #>
				<div class="device-heading">
					<div class="customize-control-title"><span>{{{ data.label }}}</span></div>
					<ul class="circle-devices-preview">
						<li class="desktop"><button type="button" class="preview-desktop active" data-device="desktop"><i class="dashicons dashicons-desktop"></i> </button> </li>
						<li class="tablet"><button type="button" class="preview-tablet" data-device="tablet"><i class="dashicons dashicons-tablet"></i></button> </li>
						<li class="mobile"><button type="button" class="preview-mobile" data-device="mobile"><i class="dashicons dashicons-smartphone"></i></button></li>
					</ul>
				</div>	
			<# } #>

			<# if ( data.description ) { #>
				<span class="description customize-control-description">{{{ data.description }}}</span>
			<# } #>

			<ul class="desktop-value device-size-desktop active">
				<# _.each( data.desktop, function( args, key ) { #>
					<li class="dimension-wrap {{ key }}">
						<input {{{ data.inputAttrs }}} type="number" class="dimension-{{ key }}" {{{ args.link }}} value="{{{ args.value }}}" />
						<span class="dimension-label">{{ data.l10n[ key ] }}</span>
					</li>
				<# } ); #>

				<li class="dimension-wrap">
					<div class="link-dimensions">
						<span class="dashicons dashicons-admin-links circle-linked" data-element="{{ data.id }}" title="{{ data.title }}"></span>
						<span class="dashicons dashicons-editor-unlink circle-unlinked" data-element="{{ data.id }}" title="{{ data.title }}"></span>
					</div>
				</li>
			</ul>

			<ul class="tablet-value device-size-tablet">
				<# _.each( data.tablet, function( args, key ) { #>
					<li class="dimension-wrap {{ key }}">
						<input {{{ data.inputAttrs }}} type="number" class="dimension-{{ key }}" {{{ args.link }}} value="{{{ args.value }}}" />
						<span class="dimension-label">{{ data.l10n[ key ] }}</span>
					</li>
				<# } ); #>

				<li class="dimension-wrap">
					<div class="link-dimensions">
						<span class="dashicons dashicons-admin-links circle-linked" data-element="{{ data.id }}_tablet" title="{{ data.title }}"></span>
						<span class="dashicons dashicons-editor-unlink circle-unlinked" data-element="{{ data.id }}_tablet" title="{{ data.title }}"></span>
					</div>
				</li>
			</ul>

			<ul class="mobile-value device-size-mobile">
				<# _.each( data.mobile, function( args, key ) { #>
					<li class="dimension-wrap {{ key }}">
						<input {{{ data.inputAttrs }}} type="number" class="dimension-{{ key }}" {{{ args.link }}} value="{{{ args.value }}}" />
						<span class="dimension-label">{{ data.l10n[ key ] }}</span>
					</li>
				<# } ); #>

				<li class="dimension-wrap">
					<div class="link-dimensions">
						<span class="dashicons dashicons-admin-links circle-linked" data-element="{{ data.id }}_mobile" title="{{ data.title }}"></span>
						<span class="dashicons dashicons-editor-unlink circle-unlinked" data-element="{{ data.id }}_mobile" title="{{ data.title }}"></span>
					</div>
				</li>
			</ul>

			<?php
		}

		/**
		 * Returns an array of translation strings.
		 *
		 * @access protected
		 * @param string|false $id The string-ID.
		 * @return string
		 */
		protected function l10n( $id = false ) {
			$translation_strings = array(
				'desktop_top' 		=> esc_attr__( 'Top', 'elementor-circle' ),
				'desktop_right' 	=> esc_attr__( 'Right', 'elementor-circle' ),
				'desktop_bottom' 	=> esc_attr__( 'Bottom', 'elementor-circle' ),
				'desktop_left' 		=> esc_attr__( 'Left', 'elementor-circle' ),
				'tablet_top' 		=> esc_attr__( 'Top', 'elementor-circle' ),
				'tablet_right' 		=> esc_attr__( 'Right', 'elementor-circle' ),
				'tablet_bottom' 	=> esc_attr__( 'Bottom', 'elementor-circle' ),
				'tablet_left' 		=> esc_attr__( 'Left', 'elementor-circle' ),
				'mobile_top' 		=> esc_attr__( 'Top', 'elementor-circle' ),
				'mobile_right' 		=> esc_attr__( 'Right', 'elementor-circle' ),
				'mobile_bottom' 	=> esc_attr__( 'Bottom', 'elementor-circle' ),
				'mobile_left' 		=> esc_attr__( 'Left', 'elementor-circle' ),
			);
			if ( false === $id ) {
				return $translation_strings;
			}
			return $translation_strings[ $id ];
		}
	}
}

// Register custom control type.
if (class_exists('WP_Customize_Control'))
{
    $wp_customize->register_control_type('circle_customizer_dimensions_Control');
}
