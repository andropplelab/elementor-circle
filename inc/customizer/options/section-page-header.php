<?php
/**
 * Theme Customizer Controls
 *
  * @package Elementor Circle
 */

if (!function_exists('circle_customizer_page_header_settings_register')):
    function circle_customizer_page_header_settings_register($wp_customize) {
        
        // General Settings button panel
        $wp_customize->add_section('page_header_content', array(
            'title' => 'Page Header Settings',
            'priority' => 1,
            'panel' => 'cilcle_panel_general'
        ));
        // page header settings
        $wp_customize->add_setting('show_page_header_label', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control(new circle_Title_Info_Control($wp_customize, 'show_page_header_label', array(
            'label' => esc_html__('Page header settings', 'elementor-circle') ,
            'section' => 'page_header_content',
            'type' => 'title',
            'settings' => 'show_page_header_label',
        )));
        // show page header
        $wp_customize->add_setting('circle_show_page_header', array(
            'type' => 'theme_mod',
            'default' => true,
            'sanitize_callback' => 'circle_sanitize_checkbox',
        ));
        $wp_customize->add_control(new circle_Toggle_Control($wp_customize, 'circle_show_page_header', array(
            'settings' => 'circle_show_page_header',
            'type' => 'toggle',
            'label' => __('Enable page header', 'elementor-circle') ,
            'section' => 'page_header_content',
        )));
        // show page title
        $wp_customize->add_setting('circle_show_page_title', array(
            'type' => 'theme_mod',
            'default' => true,
            'sanitize_callback' => 'circle_sanitize_checkbox',
        ));
        $wp_customize->add_control(new circle_Toggle_Control($wp_customize, 'circle_show_page_title', array(
            'settings' => 'circle_show_page_title',
            'type' => 'toggle',
            'label' => __('Enable page title', 'elementor-circle') ,
            'section' => 'page_header_content',
        )));
        // page header content position
        $wp_customize->add_setting( 'page_header_content_position', array(
            'type' => 'theme_mod',
            'default'           => 'center',
            'sanitize_callback' => 'circle_sanitize_hadder_image_position_radio_selection'
        ));
        $wp_customize->add_control( new circle_Radio_image_Control(  $wp_customize, 'page_header_content_position', array(
            'settings'      => 'page_header_content_position',
            'section'       => 'page_header_content',
            'type'        => 'radio-image',
            'label' => esc_html__('text position', 'elementor-circle') ,
            'choices' => 
            array(
                'left' => get_template_directory_uri() . '/assets/images/customizer/page-header-left.svg',
                'center' => get_template_directory_uri() . '/assets/images/customizer/page-header-center.svg',
                'right' => get_template_directory_uri() . '/assets/images/customizer/page-header-right.svg',
            ),
        )));
         // page header padding setting title
         $wp_customize->add_setting('label_page_header_padding_setting', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control(new circle_Title_Info_Control($wp_customize, 'label_page_header_padding_setting', array(
            'label' => esc_html__('Padding', 'elementor-circle') ,
            'section' => 'page_header_content',
            'type' => 'title',
            'settings' => 'label_page_header_padding_setting',
        )));
        // add page_header padding
        $wp_customize->add_setting('page_header_padding', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'absint',
            'type' => 'theme_mod',
        ));
        $wp_customize->add_control(new Customize_Range_Slider($wp_customize, 'page_header_padding', array(
            'label' => esc_html__('Padding top & bottom (px) Default auto', 'elementor-circle') ,
            'section' => 'page_header_content',
            'settings' => array(
                'size_desktop' => 'page_header_padding',
            ) ,
            'input_attrs' => array(
                'min' => 0,
                'max' => 250,
                'step' => 1
            ) ,
            'priority' => '10'
        )));
          // page header padding setting title
          $wp_customize->add_setting('label_page_header_width_setting', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control(new circle_Title_Info_Control($wp_customize, 'label_page_header_width_setting', array(
            'label' => esc_html__('width', 'elementor-circle') ,
            'section' => 'page_header_content',
            'type' => 'title',
            'settings' => 'label_page_header_width_setting',
        )));
        // add page_header width
        $wp_customize->add_setting('page_header_width', array(
            'default' => '1370',
            'transport' => 'refresh',
            'sanitize_callback' => 'absint',
            'type' => 'theme_mod',
        ));
        $wp_customize->add_control(new Customize_Range_Slider($wp_customize, 'page_header_width', array(
            'label' => esc_html__('Max width (px) Default 1370px', 'elementor-circle') ,
            'section' => 'page_header_content',
            'settings' => array(
                'size_desktop' => 'page_header_width',
            ) ,
            'input_attrs' => array(
                'min' => 0,
                'max' => 3000,
                'step' => 1
            ) ,
            'priority' => '10'
        )));
        // page header color setting title
        $wp_customize->add_setting('label_page_header_color_setting', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control(new circle_Title_Info_Control($wp_customize, 'label_page_header_color_setting', array(
            'label' => esc_html__('Color settings', 'elementor-circle') ,
            'section' => 'page_header_content',
            'type' => 'title',
            'settings' => 'label_page_header_color_setting',
        )));
        // page header background color
        $wp_customize->add_setting('page_header_bg_color', array(
            'type' => 'theme_mod',
            'default' => '#f7f7f7',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'page_header_bg_color', array(
            'label' => esc_html__('Background color', 'elementor-circle') ,
            'section' => 'page_header_content',
            'settings' => 'page_header_bg_color',
        )));
        // page header title color
        $wp_customize->add_setting('page_header_title_color', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'page_header_title_color', array(
            'label' => esc_html__('Title color', 'elementor-circle') ,
            'section' => 'page_header_content',
            'settings' => 'page_header_title_color',
        )));
    } endif;

add_action('customize_register', 'circle_customizer_page_header_settings_register');