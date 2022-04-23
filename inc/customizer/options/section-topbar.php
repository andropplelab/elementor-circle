<?php
/**
 * Theme Customizer Controls topbar
 *
  * @package Elementor Circle 
 */
if ( ! function_exists( 'circle_customizer_topbar_settings_register' ) ) :
    function circle_customizer_topbar_settings_register( $wp_customize ) {
        
        // Topbar Settings //
        $wp_customize->add_section( 'circle_topbar_settings', array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'theme_supports'=> '',
            'title'         => esc_html__( 'Topbar Settings', 'elementor-circle' )
        ));  
        // Info label
        $wp_customize->add_setting( 'label_topbar_settings', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        // toggle button
        $wp_customize->add_control( new circle_Title_Info_Control( $wp_customize, 'label_topbar_settings', array(
            'label'       => esc_html__( 'Topbar Settings', 'elementor-circle' ),
            'section'     => 'circle_topbar_settings',
            'type'        => 'title',
            'settings'    => 'label_topbar_settings',
        )));
        $wp_customize->add_setting( 'circle_topbar', array(
            'type' => 'theme_mod',
            'default'           => true,
            'sanitize_callback' => 'circle_sanitize_checkbox_selection'
        ));
        $wp_customize->add_control( new circle_Toggle_Control( $wp_customize, 'circle_topbar', array(
            'settings'      => 'circle_topbar',
            'section'       => 'circle_topbar_settings',
            'type'          => 'toggle',
            'label'         => esc_html__( 'Enable Topbar Feature', 'elementor-circle' ),
        )));
        // add topbar padding
        $wp_customize->add_setting('header_topbar_padding', array(
            'default' => '10',
            'transport' => 'refresh',
            'sanitize_callback' => 'absint',
            'type' => 'theme_mod',
        ));
        $wp_customize->add_control(new Customize_Range_Slider($wp_customize, 'header_topbar_padding', array(
            'label' => esc_html__('Padding top & bottom (px) Default auto', 'elementor-circle') ,
            'section' => 'circle_topbar_settings',
            'settings' => array(
            'size_desktop' => 'header_topbar_padding',
            ) ,
            'input_attrs' => array(
                'min' => 0,
                'max' => 100,
                'step' => 1
            ) ,
            'priority' => '10'
        )));
        // add topbar padding
        $wp_customize->add_setting('header_topbar_max_width', array(
            'default' => '1370',
            'transport' => 'refresh',
            'sanitize_callback' => 'absint',
            'type' => 'theme_mod',
        ));
        $wp_customize->add_control(new Customize_Range_Slider($wp_customize, 'header_topbar_max_width', array(
            'label' => esc_html__('Max width (px) Default 1370', 'elementor-circle') ,
            'section' => 'circle_topbar_settings',
            'settings' => array(
            'size_desktop' => 'header_topbar_max_width',
            ) ,
            'input_attrs' => array(
                'min' => 0,
                'max' => 1920,
                'step' => 1
            ) ,
            'priority' => '10'
        )));
        // page header padding setting title
        $wp_customize->add_setting('label_topbar_color_setting', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control(new circle_Title_Info_Control($wp_customize, 'label_topbar_color_setting', array(
            'label' => esc_html__('Color settings', 'elementor-circle') ,
            'section' => 'circle_topbar_settings',
            'type' => 'title',
            'settings' => 'label_topbar_color_setting',
        )));
        // topbar background color
        $wp_customize->add_setting('header_topbar_bg_color', array(
            'type' => 'theme_mod',
            'default' => '#fff',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_topbar_bg_color', array(
            'label' => esc_html__('Background color', 'elementor-circle') ,
            'section' => 'circle_topbar_settings',
            'settings' => 'header_topbar_bg_color',
        )));
        // topbar border bottom color
        $wp_customize->add_setting('header_topbar_border_bottom_color', array(
            'type' => 'theme_mod',
            'default' => '#e8e8f8',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_topbar_border_bottom_color', array(
            'label' => esc_html__('Border bottom color', 'elementor-circle') ,
            'section' => 'circle_topbar_settings',
            'settings' => 'header_topbar_border_bottom_color',
        )));
    } endif;
    
add_action( 'customize_register', 'circle_customizer_topbar_settings_register' );