<?php
/**
 * Theme Customizer Controls
 *
  * @package Elementor Circle
 */

if ( ! function_exists( 'circle_customizer_back_to_top_settings_register' ) ) :
    function circle_customizer_back_to_top_settings_register( $wp_customize ) {

        // General Settings Scroll panel
        $wp_customize->add_section( 'circle_back_to_top_settings', array(
            'title' => 'Scroll Top',
            'priority' => 1,
            'panel' => 'cilcle_panel_general'
        ));
        // scroll top true & false
        $wp_customize->add_setting( 'label_back_to_top_settings', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control( new circle_Title_Info_Control( $wp_customize, 'label_back_to_top_settings', array(
            'label'       => esc_html__( 'Scroll Top Settings', 'elementor-circle' ),
            'section'     => 'circle_back_to_top_settings',
            'type'        => 'title',
            'settings'    => 'label_back_to_top_settings',
        )));
        $wp_customize->add_setting( 'circle_back_to_top', array(
            'type' => 'theme_mod',
            'default'           => true,
            'sanitize_callback' => 'circle_sanitize_checkbox'
        ));
        $wp_customize->add_control( new circle_Toggle_Control( $wp_customize, 'circle_back_to_top', array(
            'settings'      => 'circle_back_to_top',
            'section'       => 'circle_back_to_top_settings',
            'type'          => 'toggle',
            'label'         => esc_html__( 'Enable scroll top:', 'elementor-circle' ),
        )));
        // side offset
        $wp_customize->add_setting( 'scrolltop_side_offset' , array(
			'default'     => '30',
			'transport'   => 'refresh',
			'sanitize_callback' => 'absint',
			'type' => 'theme_mod',
		));
        $wp_customize->add_control( new Customize_Range_Slider( $wp_customize, 'scrolltop_side_offset', array(
            'label' 		=> esc_html__( 'Side offset', 'elementor-circle' ),
            'section' 		=> 'circle_back_to_top_settings',
            'settings' 		=> array (
                'size_desktop' 		=> 'scrolltop_side_offset',
            ),
            'input_attrs' => array (
                'min'	=> 0,
                'max'	=> 200
            ),
        )));
        // bottom offset
        $wp_customize->add_setting( 'scrolltop_bottom_offset' , array(
			'default'     => '30',
			'transport'   => 'refresh',
			'sanitize_callback' => 'absint',
			'type' => 'theme_mod',
		));
        $wp_customize->add_control( new Customize_Range_Slider( $wp_customize, 'scrolltop_bottom_offset', array(
            'label' 		=> esc_html__( 'Bottom offset', 'elementor-circle' ),
            'section' 		=> 'circle_back_to_top_settings',
            'settings' 		=> array (
                'size_desktop' 		=> 'scrolltop_bottom_offset',
            ),
            'input_attrs' => array (
                'min'	=> 0,
                'max'	=> 200
            ),
        )));
        // bottom radius
        $wp_customize->add_setting( 
            'scrolltop_button_border_radius' , array(
            'default'     => '50',
            'transport'   => 'refresh',
            'sanitize_callback' => 'absint',
            'type' => 'theme_mod',
		));			
        $wp_customize->add_control( new Customize_Range_Slider( $wp_customize, 'scrolltop_button_border_radius', array(
            'label' 		=> esc_html__( 'Button radius', 'elementor-circle' ),
            'section' 		=> 'circle_back_to_top_settings',
            'settings' 		=> array (
                'size_desktop' 		=> 'scrolltop_button_border_radius',
            ),
            'input_attrs' => array (
                'min'	=> 0,
                'max'	=> 100
            ),
        )));
        // button padding
        $wp_customize->add_section( 'circle_section_scroll', array(
            'title'      => esc_html__( 'Scroll', 'elementor-circle'),
            'panel'      => 'circle_panel_general',
        ));
        $wp_customize->add_setting( 'scrolltop_padding_desktop', array(
            'default'   		=> 20,
            'sanitize_callback' => 'absint',
        ));			
        $wp_customize->add_setting( 'scrolltop_padding_tablet', array(
            'default'   		=> 20,
            'sanitize_callback' => 'absint',
        ));
        $wp_customize->add_setting( 'scrolltop_padding_mobile', array(
            'default'   		=> 20,
            'sanitize_callback' => 'absint',
        ));			
        $wp_customize->add_control( new Customize_Range_Slider( $wp_customize, 'scroll_left_right_padding', array(
            'label' 		=> esc_html__( 'Button padding', 'elementor-circle' ),
            'section' 		=> 'circle_back_to_top_settings',
            'is_responsive'	=> 1,
            'settings' 		=> array (
                'size_desktop' 		=> 'scrolltop_padding_desktop',
                'size_tablet' 		=> 'scrolltop_padding_tablet',
                'size_mobile' 		=> 'scrolltop_padding_mobile',
            ),
            'input_attrs' => array (
                'min'	=> 0,
                'max'	=> 50
            )		
        )));
        // Icon title
        $wp_customize->add_setting('label_scrolltop_icon_setting',array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control( new circle_Title_Info_Control( $wp_customize, 'label_scrolltop_icon_setting', array(
            'label'       => esc_html__( ' Icon setting', 'elementor-circle' ),
            'section'     => 'circle_back_to_top_settings',
            'type'        => 'title',
            'settings'    => 'label_scrolltop_icon_setting',
        )));
        // Icon size
        $wp_customize->add_setting( 'scrolltop_icon_size' , array(
            'default'     => '14',
            'transport'   => 'refresh',
            'sanitize_callback' => 'absint',
            'type' => 'theme_mod',
        ));
        $wp_customize->add_control( new Customize_Range_Slider( $wp_customize, 'scrolltop_icon_size', array(
            'label' 		=> esc_html__( 'Icon size', 'elementor-circle' ),
            'section' 		=> 'circle_back_to_top_settings',
            'settings' 		=> array (
                'size_desktop' 		=> 'scrolltop_icon_size',
            ),
            'input_attrs' => array (
                'min'	=> 0,
                'max'	=> 32
            ),
        )));
        //Scroll top icon
        $wp_customize->add_setting( 'scrolltop_before', array(
            'transport'         => 'postMessage',
            'default'           => '"\f175"',
            'sanitize_callback' => 'circle_sanitize_text',
        ));
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'scrolltop_before',array(
            'label'    => esc_html__( 'Scroll top icon', 'elementor-circle' ),
            'description'  => sprintf( 
            esc_html__( 'Get icon unicode from %1$samazingneo.com%2$s.', 'elementor-circle' ),
                '<a target="_blank" href="https://amazingneo.com/">',
                '</a>'
            ),
            'section'  => 'circle_back_to_top_settings',
            'settings' => 'scrolltop_before',
            'type'     => 'text',
            'priority' => 10,
        )));
        // scrolltop color setting title
        $wp_customize->add_setting( 'label_scrolltop_color_setting', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control( new circle_Title_Info_Control( $wp_customize, 'label_scrolltop_color_setting', array(
            'label'       => esc_html__( 'Color settings', 'elementor-circle' ),
            'section'     => 'circle_back_to_top_settings',
            'type'        => 'title',
            'settings'    => 'label_scrolltop_color_setting',
        )));
        // scroll top button background color
        $wp_customize->add_setting( 'circle_scrolltop_bg_color', array(
            'type' => 'theme_mod',
            'default'           => '#000',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'circle_scrolltop_bg_color', array(
            'label'      => esc_html__( 'Background Color', 'elementor-circle' ),
            'section'    => 'circle_back_to_top_settings',
            'settings'   => 'circle_scrolltop_bg_color',
            )));
        // scroll top background hover color
        $wp_customize->add_setting( 'circle_scrolltop_bg_color_hover', array(
            'type' => 'theme_mod',
            'default'           => '#fff',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'circle_scrolltop_bg_color_hover', array(
            'label'      => esc_html__( 'Background Hover Color', 'elementor-circle' ),
            'section'    => 'circle_back_to_top_settings',
            'settings'   => 'circle_scrolltop_bg_color_hover',
        )));
        // scroll top icon color
        $wp_customize->add_setting( 'circle_scrolltop_icon_color', array(
            'type' => 'theme_mod',
            'default'           => '#fff',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control(  $wp_customize, 'circle_scrolltop_icon_color', array(
            'label'      => esc_html__( 'Icon Color', 'elementor-circle' ),
            'section'    => 'circle_back_to_top_settings',
            'settings'   => 'circle_scrolltop_icon_color',
        )));
        // scroll top icon hover color
        $wp_customize->add_setting( 'circle_scrolltop_icon_color_hover', array(
            'type' => 'theme_mod',
            'default'           => '#000',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'circle_scrolltop_icon_color_hover', array(
            'label'      => esc_html__( 'Icon hover Color', 'elementor-circle' ),
            'section'    => 'circle_back_to_top_settings',
            'settings'   => 'circle_scrolltop_icon_color_hover',
        )));
    } endif;
    
add_action( 'customize_register', 'circle_customizer_back_to_top_settings_register' );