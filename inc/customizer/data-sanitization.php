<?php
/**
 * circle Theme Customizer Data Sanitization
 *
  * @package Elementor Circle
 */

/**
 * Function for Minimizing dynamic CSS
 */
function circle_minimize_css($css){
   $css = preg_replace('/\/\*((?!\*\/).)*\*\//', '', $css);
   $css = preg_replace('/\s{2,}/', ' ', $css);
   $css = preg_replace('/\s*([:;{}])\s*/', '$1', $css);
   $css = preg_replace('/;}/', '}', $css);
   return $css;
}

/**
 * Sanitize checkbox option buttons
 *
 * @param string $input
 * @return bool
 */
if ( ! function_exists( 'circle_sanitize_checkbox_selection' ) ) :
   function circle_sanitize_checkbox_selection( $input ) {
       return ( ( isset( $input ) && true == $input ) ? true : false );
   }
   endif;


/**
 * Sanitize text box.
 *
 * @param string $input
 * @return string
 */
if ( ! function_exists( 'circle_sanitize_text' ) ) :
function circle_sanitize_text( $input ) {
    return esc_html( $input );
}
endif;

/**
 * Sanitize checkbox.
 *
 * @param bool $checked Whether the checkbox is checked.
 * @return bool Whether the checkbox is checked.
 */
if ( ! function_exists( 'circle_sanitize_checkbox' ) ) :
   function circle_sanitize_checkbox( $checked ) {
       // Boolean check.
       return ( ( isset( $checked ) && true == $checked ) ? true : false );
   }
endif;

/**
 * Sanitize radio option buttons
 *
 * @param string $input
 * @return string
 */
if ( ! function_exists( 'circle_sanitize_radio_selection' ) ) :
   function circle_sanitize_radio_selection( $input ) {
      $valid = array(
         'yes' => esc_html__('Yes', 'elementor-circle'),
         'no' => esc_html__('No', 'elementor-circle'),
      );

      if ( array_key_exists( $input, $valid ) ) {
         return $input;
      } else {
         return '';
      }
   }
endif;

/**
 * Select sanitization
   * @see sanitize_key()               https://developer.wordpress.org/reference/functions/sanitize_key/
   * @see $wp_customize->get_control() https://developer.wordpress.org/reference/classes/wp_customize_manager/get_control/
   *
   * @param string               $input   Slug to sanitize.
   * @return string Sanitized slug if it is a valid choice; otherwise, the setting default.
   * @param WP_Customize_Setting $setting Setting instance.
   */
if ( ! function_exists( 'circle_sanitize_select' ) ) :
   function circle_sanitize_select( $input, $setting ) {

      // Ensure input is a slug.
      $input = sanitize_key( $input );

      // Get list of choices from the control associated with the setting.
      $choices = $setting->manager->get_control( $setting->id )->choices;

      // If the input is a valid key, return it; otherwise, return the default.
      return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
   }
endif;

/**
 * Sanitize textarea.
 *
 * @param string $input
 * @return string
 */
if ( ! function_exists( 'circle_sanitize_textarea' ) ) :
   function circle_sanitize_textarea( $input ) {
       return wp_kses_post( force_balance_tags( $input ) );
   }
endif;

/**
 * URL sanitization.
 *
 * @see esc_url_raw() https://developer.wordpress.org/reference/functions/esc_url_raw/
 *
 * @param string $url URL to sanitize.
 * @return string Sanitized URL.
 */
if ( ! function_exists( 'circle_sanitize_url' ) ) :
   function circle_sanitize_url( $url ) {
       return esc_url_raw( $url );
   }
endif;

/**
 * Sanitize a hexadecimal color
 *
 * @param hex $color Color to sanitize.
 * @return string Color.
 */
function circle_sanitize_hex_color( $color ) {
	if ( '' === $color ) { 
		return '';
	}
	$color = str_replace( '#', '', $color );
	// 3 or 6 hex digits, or the empty string.
	if ( preg_match('|^([A-Fa-f0-9]{3}){1,2}$|', $color ) ) {
		return '#' . $color;
	}
	return null;
}

/**
 * Sanitize image.
   *
   * @param string               $image   Image filename.
   * @param WP_Customize_Setting $setting Setting instance.
   * @return string The image filename if the extension is allowed; otherwise, the setting default.
   */
if ( ! function_exists( 'circle_sanitize_image' ) ) :
   function circle_sanitize_image( $image, $setting ) {
       /*
        * Array of valid image file types.
        *
        * The array includes image mime types that are included in wp_get_mime_types()
        */
       $mimes = array(
           'jpg|jpeg|jpe' => 'image/jpeg',
           'gif'          => 'image/gif',
           'png'          => 'image/png',
           'bmp'          => 'image/bmp',
           'tif|tiff'     => 'image/tiff',
           'ico'          => 'image/x-icon'
       );
       // Return an array with file extension and mime_type.
       $file = wp_check_filetype( $image, $mimes );
       // If $image has a valid mime_type, return it; otherwise, return the default.
       return ( $file['ext'] ? $image : $setting->default );
   }
endif;
   
/**
 * CSS sanitization.
   *
   * @see wp_strip_all_tags() https://developer.wordpress.org/reference/functions/wp_strip_all_tags/
   *
   * @param string $css CSS to sanitize.
   * @return string Sanitized CSS.
   */
if ( ! function_exists( 'circle_sanitize_css' ) ) :
   function circle_sanitize_css( $css ) {
         return wp_strip_all_tags( $css );
   }
endif;
   
/**
 * HTML sanitization
   *
   * @see wp_filter_post_kses() https://developer.wordpress.org/reference/functions/wp_filter_post_kses/
   *
   * @param string $html HTML to sanitize.
   * @return string Sanitized HTML.
   */
if ( ! function_exists( 'circle_sanitize_html' ) ) :
   function circle_sanitize_html( $html ) {
      return wp_filter_post_kses( $html );
   }
endif;

/**
 * Title sanitization.
   */
if ( ! function_exists( 'circle_sanitize_title' ) ) :
   function circle_sanitize_title( $str ) {
      return sanitize_title( $str );  
   }
endif;

/**
 * Number sanitization callback
 *
* @param string $number to sanitize.
* @return string Sanitized number.
 */
function circle_sanitize_number( $val ) {
	return is_numeric( $val ) ? $val : 0;
}

/**
 * Number with blank value sanitization callback

 */
function circle_sanitize_number_blank( $val ) {
	return is_numeric( $val ) ? $val : '';
}

    // Check if the topbar enabled or not
    function circle_topbar_enable( $control ) {
        if ( $control->manager->get_setting( 'circle_topbar' )->value() == true) {
            return true; 
        } else {
            return false;
        }
    }

   // hadder image
   if ( ! function_exists( 'circle_sanitize_hadder_image_position_radio_selection' ) ) :
      function circle_sanitize_hadder_image_position_radio_selection( $input ) {
         $valid = array(
            'left' => esc_html__('left ', 'elementor-circle'),
            'center' => esc_html__('center ', 'elementor-circle'),
            'right' => esc_html__('right ', 'elementor-circle'),
         );
         if ( array_key_exists( $input, $valid ) ) {
            return $input;
         } else {
            return '';
         }
      }
   endif; 
   // header background attachment
   if ( ! function_exists( 'circle_sanitize_header_background_attachment_radio_selection' ) ) :
      function circle_sanitize_header_background_attachment_radio_selection( $input ) {
         $valid = array(        
            'fixed' => esc_html__('fixed ', 'elementor-circle'),
            'scroll' => esc_html__('scroll ', 'elementor-circle'),
         );
      
         if ( array_key_exists( $input, $valid ) ) {
            return $input;
         } else {
            return '';
         }
      }
   endif;
   // header background size
   if ( ! function_exists( 'circle_sanitize_header_background_size' ) ) :
      function circle_sanitize_header_background_size( $input ) {
         $valid = array(
            'initial' => esc_html__( 'Normal', 'elementor-circle' ),
            'cover'   => esc_html__( 'Cover', 'elementor-circle' ),
            'contain' => esc_html__( 'Contain', 'elementor-circle' ),
         );
         if ( array_key_exists( $input, $valid ) ) {
            return $input;
         } else {
            return '';
         }
      }
   endif;
   // header background repeat
   if ( ! function_exists( 'circle_sanitize_header_background_repeat' ) ) :
      function circle_sanitize_header_background_repeat( $input ) {
         $valid = array(
            'no-repeat' => esc_html__( 'No Repeat', 'elementor-circle' ),
            'repeat'    => esc_html__( 'Tile', 'elementor-circle' ),
            'repeat-x'  => esc_html__( 'Tile Horizontally', 'elementor-circle' ),
            'repeat-y'  => esc_html__( 'Tile Vertically', 'elementor-circle' ),

         );
         if ( array_key_exists( $input, $valid ) ) {
            return $input;
         } else {
            return '';
         }
      }
   endif;
   // preloader
   if ( ! function_exists( 'circle_sanitize_preloader' ) ) :
      function circle_sanitize_preloader( $input ) {
         $valid = array(
            'cube' => esc_html__( 'Cube', 'elementor-circle' ),
            'signal' => esc_html__( 'Signal', 'elementor-circle' ),
            'elementor-circle' => esc_html__( 'elementor-circle', 'elementor-circle' ),
            'spinner' => esc_html__( 'Spinner', 'elementor-circle' ),
         );
         if ( array_key_exists( $input, $valid ) ) {
            return $input;
         } else {
            return '';
         }
      }
   endif;
   
/**
 * js sanitization callback
 *
* @param string $js to sanitize.
* @return false value Sanitized js.
 */
   function __return_false_value($value) {
      return $value;
  }
  add_filter('__return_false', '__return_false_value');