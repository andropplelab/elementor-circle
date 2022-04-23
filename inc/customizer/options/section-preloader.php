<?php
/**
 * Theme Customizer Controls preloader Section
 *
  * @package Elementor Circle
 */
if ( ! function_exists( 'circle_customizer_preloader_settings_register' ) ) :
    function circle_customizer_preloader_settings_register( $wp_customize ) {

        // preloader
        $wp_customize->add_section( 'circle_settings_preloader', array(
            'title'       => __( 'Preloader', 'elementor-circle' ),
            'priority'    => 10,
            'panel' => 'cilcle_panel_general'
        ));
        // preloader section show hide
        $wp_customize->add_setting( 'label_preloader_show_hide_settings', array( 
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control(  new circle_Title_Info_Control( $wp_customize, 'label_preloader_show_hide_settings', array(
            'label'       => esc_html__( 'Preloader Settings', 'elementor-circle' ),
            'section'     => 'circle_settings_preloader',
            'type'        => 'title',
            'settings'    => 'label_preloader_show_hide_settings',
        )));
        $wp_customize->add_setting( 'circle_preloader_show', array(
            'type' => 'theme_mod',
            'default'           => true,
            'sanitize_callback' => 'circle_sanitize_checkbox'
        ));
        $wp_customize->add_control( new circle_Toggle_Control( $wp_customize, 'circle_preloader_show', array(
            'settings'      => 'circle_preloader_show',
            'section'       => 'circle_settings_preloader',
            'type'          => 'toggle',
            'label'         => esc_html__( 'Enable preloader', 'elementor-circle' ),
        )));
        // preloader
        $wp_customize->add_setting( 'preloader_style', array(
            'type' => 'theme_mod',
            'default'           => 'elementor-circle',
            'sanitize_callback' => 'circle_sanitize_preloader'
        ));
        $wp_customize->add_control( new circle_Radio_image_Control(  $wp_customize, 'preloader_style', array(
            'settings' => 'preloader_style',
            'section'       => 'circle_settings_preloader',
            'type'        => 'radio-image',
            'description' => esc_html__( 'Select preloader style from the list below.', 'elementor-circle' ),
            'transport' => 'auto',
            'choices' => array(
                'cube' => get_template_directory_uri() . '/assets/images/customizer/preloader-cube.svg',
                'signal' => get_template_directory_uri() . '/assets/images/customizer/preloader-signal.svg',
                'elementor-circle' => get_template_directory_uri() . '/assets/images/customizer/preloader-circle.svg',
                'spinner' => get_template_directory_uri() . '/assets/images/customizer/preloader-spinner.svg',
            ),
        )));
    } endif;
    
add_action( 'customize_register', 'circle_customizer_preloader_settings_register' );