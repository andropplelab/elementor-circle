<?php
/**
 * Theme Customizer Controls topbar
 *
  * @package Elementor Circle 
 */

 add_action( 'customize_register', 'circle_customize_register' );
if ( ! function_exists( 'circle_customize_register' ) ) :
    function circle_customize_register( $wp_customize ) {
     
        $wp_customize->add_section( 'custom_js', array(
            'title'    => __( 'Additional JS', 'elementor-circle' ),
            'priority' => 500,
        ));
        $wp_customize->add_setting( 'custom_js', array(
            'type' => 'option',
            // 'sanitize_callback' => 'circle_sanitize_js'
            'sanitize_callback' => '__return_false'
        ));
        $wp_customize->add_control( new WP_Customize_Code_Editor_Control( $wp_customize, 'custom_html', array(        
            'label'	   	   => esc_html__( 'Additional JS', 'elementor-circle' ),
            'description'  => esc_html__( 'No need to add the <script> tags.', 'elementor-circle' ),
            'code_type'    => 'javascript',
            'settings'     => 'custom_js',
            'section'      => 'custom_js',
        )));
    } endif;
add_action( 'wp_footer', 'circle_customize_output' );;