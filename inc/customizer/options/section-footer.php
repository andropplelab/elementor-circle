<?php
/**
 * Theme Customizer Controls Footer Section
 *
  * @package Elementor Circle
 */

if ( ! function_exists( 'circle_customizer_footer_settings_register' ) ) :
    function circle_customizer_footer_settings_register( $wp_customize ) {

        // footer color
        $wp_customize->add_control( new circle_Title_Info_Control( $wp_customize, 'label_footer_color_settings', array(
            'label'       => esc_html__( 'Footer Color Settings', 'elementor-circle' ),
            'section'     => 'circle_footer_settings',
            'type'        => 'title',
            'settings'    => 'label_footer_color_settings',
        )));
        // footer
        $wp_customize->add_section(  'circle_settings_footer', array(
			'title'       => __( 'Footer', 'elementor-circle' ),
			'priority'    => '100',
		));
        // footer section show hide
        $wp_customize->add_setting(  'label_footer_show_hide_settings', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control( new circle_Title_Info_Control( $wp_customize, 'label_footer_show_hide_settings', array(
            'label'       => esc_html__( 'Footer Settings', 'elementor-circle' ),
            'section'     => 'circle_settings_footer',
            'type'        => 'title',
            'settings'    => 'label_footer_show_hide_settings',
        )));
        $wp_customize->add_setting( 'circle_footer_show', array(
            'type' => 'theme_mod',
            'default'           => true,
            'sanitize_callback' => 'circle_sanitize_checkbox'
        ));
        $wp_customize->add_control( new circle_Toggle_Control( $wp_customize, 'circle_footer_show', array(
            'settings'      => 'circle_footer_show',
            'section'       => 'circle_settings_footer',
            'type'          => 'toggle',
            'label'         => esc_html__( 'Enable Footer', 'elementor-circle' ),
        )));
        // footer widget padding top bottom
        $wp_customize->add_setting( 'footer_widget_padding_top_bottom' , array(
			'default'     => '60',
			'transport'   => 'refresh',
			'sanitize_callback' => 'absint',
			'type' => 'theme_mod',
		));
        $wp_customize->add_control(  new Customize_Range_Slider( $wp_customize, 'footer_widget_padding_top_bottom', array(
            'label' 		=> esc_html__( 'Footer widgets Padding top bottom', 'elementor-circle' ),
            'section' 		=> 'circle_settings_footer',
            'settings' 		=> array (
                'size_desktop' 		=> 'footer_widget_padding_top_bottom',
            ),
            'input_attrs' => array (
                'min'	=> 0,
                'max'	=> 200
            ),
        )));
        // footer bottom top bottom
        $wp_customize->add_setting( 'footer_copyright_padding_top_bottom' , array(
			'default'     => '15',
			'transport'   => 'refresh',
			'sanitize_callback' => 'absint',
			'type' => 'theme_mod',
		));
        $wp_customize->add_control( new Customize_Range_Slider( $wp_customize, 'footer_copyright_padding_top_bottom', array(
            'label' 		=> esc_html__( 'Footer bottom Padding top bottom', 'elementor-circle' ),
            'section' 		=> 'circle_settings_footer',
            'settings' 		=> array (
                'size_desktop' 		=> 'footer_copyright_padding_top_bottom',
            ),
            'input_attrs' => array (
                'min'	=> 0,
                'max'	=> 200
            ),
        )));
        // Footer copyright
        $wp_customize->add_setting(  'label_footer_copyright', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control( new circle_Title_Info_Control( $wp_customize, 'label_footer_copyright', array(
            'label'       => esc_html__( 'Footer copyright', 'elementor-circle' ),
            'section'     => 'circle_settings_footer',
            'type'        => 'title',
            'settings'    => 'label_footer_copyright',
        )));
        // footer copyright show hide
        $wp_customize->add_setting( 'circle_footer_copyright_show', array(
            'type' => 'theme_mod',
            'default'           => true,
            'sanitize_callback' => 'circle_sanitize_checkbox'
        ));
        $wp_customize->add_control( new circle_Toggle_Control( $wp_customize, 'circle_footer_copyright_show', array(
            'settings'      => 'circle_footer_copyright_show',
            'section'       => 'circle_settings_footer',
            'type'          => 'toggle',
            'label'         => esc_html__( 'Enable Footer Copyright Section', 'elementor-circle' ),
        )));
	    $wp_customize->add_setting( 'circle_footer_copyright', array(
			'default'           => '',
			'render_callback'   => 'circle_copyright_text',
			'transport'         => 'postMessage',
            'sanitize_callback' => 'circle_sanitize_text',
		)); 
	    $wp_customize->add_control(  'circle_footer_copyright', array(
			'section'     => 'circle_settings_footer',
            'type'          => 'textarea',
			'description' => __( 'Write your copyright message.', 'elementor-circle' ),
            'input_attrs' => array(
				'placeholder' => __( 'Copyright Circle Theme: ', 'elementor-circle' ) . gmdate( 'Y' ),
			),
		));
	    $wp_customize->selective_refresh->add_partial( 'circle_footer_copyright', array(
			'selector' => '.site-copyright',
		));
        // footer color settings
        $wp_customize->add_setting(  'label_footer_color', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control(  new circle_Title_Info_Control( $wp_customize, 'label_footer_color', array(
            'label'       => esc_html__( 'Footer Colors', 'elementor-circle' ),
            'section'     => 'circle_settings_footer',
            'type'        => 'title',
            'settings'    => 'label_footer_color',
        )));
        // Footer Background Color
        $wp_customize->add_setting( 'circle_footer_bg_color', array(
            'type' => 'theme_mod',
            'default'           => '#141414',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'circle_footer_bg_color', array(
            'label'      => esc_html__( 'Background Color', 'elementor-circle' ),
            'section'    => 'circle_settings_footer',
            'settings'   => 'circle_footer_bg_color',
        )));
        // Footer contant Color
        $wp_customize->add_setting( 'circle_footer_content_color', array(
            'type' => 'theme_mod',
            'default'           => '#fff',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'circle_footer_content_color', array(
            'label'      => esc_html__( 'Contant Color', 'elementor-circle' ),
            'section'    => 'circle_settings_footer',
            'settings'   => 'circle_footer_content_color',
        )));
        // Footer links Color
        $wp_customize->add_setting( 'circle_footer_links_color', array(
            'type' => 'theme_mod',
            'default'           => '#fff',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'circle_footer_links_color', array(
            'label'      => esc_html__( 'Footer Links Color', 'elementor-circle' ),
            'section'    => 'circle_settings_footer',
            'settings'   => 'circle_footer_links_color',
        )));
        // Footer Copyright Background Color
        $wp_customize->add_setting( 'circle_footer_copyright_bg_color', array(
            'type' => 'theme_mod',
            'default'           => '#000',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'circle_footer_copyright_bg_color', array(
            'label'      => esc_html__( 'Copyright Background Color', 'elementor-circle' ),
            'section'    => 'circle_settings_footer',
            'settings'   => 'circle_footer_copyright_bg_color',
        )));
        // Footer Copyright text Color
        $wp_customize->add_setting( 'footer_copyright_text_color', array(
            'type' => 'theme_mod',
            'default'           => '#fff',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_copyright_text_color', array(
            'label'      => esc_html__( 'Copyright text Color', 'elementor-circle' ),
            'section'    => 'circle_settings_footer',
            'settings'   => 'footer_copyright_text_color',
        )));
    } endif;
    
add_action( 'customize_register', 'circle_customizer_footer_settings_register' );