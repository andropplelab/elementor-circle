<?php
/**
 * Theme Customizer Controls header
 *
  * @package Elementor Circle
 */
if ( ! function_exists( 'circle_customizer_header_styles_settings_register' ) ) :
    function circle_customizer_header_styles_settings_register( $wp_customize ) {
        
        // Create a new  Header Section
        $wp_customize->add_section( 'circle_header_styles_settings', array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'theme_supports'=> '',
            'title'         => esc_html__( 'Header Section', 'elementor-circle' )
        ));
       // title
       $wp_customize->add_setting('label_site_header_setting', array(
        'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control(new circle_Title_Info_Control($wp_customize, 'label_site_header_setting', array(
            'label' => esc_html__('Header Setting', 'elementor-circle') ,
            'section' => 'circle_header_styles_settings',
            'type' => 'title',
            'settings' => 'label_site_header_setting',
        )));
        // max width
        $wp_customize->add_setting('header_site_header_max_width', array(
            'default' => '1370',
            'transport' => 'refresh',
            'sanitize_callback' => 'absint',
            'type' => 'theme_mod',
        ));
        $wp_customize->add_control(new Customize_Range_Slider($wp_customize, 'header_site_header_max_width', array(
            'label' => esc_html__('Max width (px) Default 1370', 'elementor-circle') ,
            'section' => 'circle_header_styles_settings',
            'settings' => array(
            'size_desktop' => 'header_site_header_max_width',
            ) ,
            'input_attrs' => array(
                'min' => 0,
                'max' => 1920,
                'step' => 1
            ) ,
            'priority' => '10'
        )));
        $wp_customize->add_setting( 'custom_header_height_desktop', array(
            'default'     => '90',
            'transport'   => 'refresh',
            'sanitize_callback' => 'absint',
            'type' => 'theme_mod',
        ));			
        $wp_customize->add_setting( 'custom_header_height_tablet', array(
            'default'     => '72',
            'transport'   => 'refresh',
            'sanitize_callback' => 'absint',
            'type' => 'theme_mod',
        ));
        $wp_customize->add_setting( 'custom_header_height_mobile', array(
            'default'     => '72',
            'transport'   => 'refresh',
            'sanitize_callback' => 'absint',
            'type' => 'theme_mod',
        ));			
        $wp_customize->add_control( new Customize_Range_Slider( $wp_customize, 'custom_header_height_desktop', array(
            'label' 		=> esc_html__( 'Header height in (px) ', 'elementor-circle' ),
            'section' 		=> 'circle_header_styles_settings',
            'is_responsive'	=> 1,
            'settings' 		=> array (
                'size_desktop' 		=> 'custom_header_height_desktop',
                'size_tablet' 		=> 'custom_header_height_tablet',
                'size_mobile' 		=> 'custom_header_height_mobile',
            ),
            'input_attrs' => array (
                'min'	=> 0,
                'max'	=> 2000
            )		
        )));










        // navigation link font weight
        $wp_customize->add_setting( 'navigation_link_font_weight', array(
            'default' 			=> '500',
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint',
            'transport'   => 'refresh',
        ));
        $wp_customize->add_control(  new Circle_Radio_Buttons_Control ( $wp_customize, 'navigation_link_font_weight', array(
            'label'   => esc_html__( 'Navbar Font weight', 'elementor-circle' ),
            'section' => 'circle_header_styles_settings',
            'choices' => array(
                'inherit' 			=> '-',
                '300' 	=> '300',
                '500' 	=> '500',
                '700' 	=> '700',
                '900' 	=> '900',
            )
        )));
        // Image for header 
        $wp_customize->add_setting( 'header_image', array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'circle_sanitize_image'
        ));
        $wp_customize->add_control( new WP_Customize_Image_Control(  $wp_customize, 'header_image', array(
            'settings'      => 'header_image',
            'section'       => 'circle_header_styles_settings',
            'label'         => esc_html__( 'Header Image', 'elementor-circle' ),
            'description'   => esc_html__( 'Upload image for header section', 'elementor-circle' ),
        )));
        // background position lable
        $wp_customize->add_setting(  'label_background_position', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control( new circle_Title_Info_Control( $wp_customize, 'label_background_position', array(
            'label'       => esc_html__( 'Header image position', 'elementor-circle' ),
            'section'     => 'circle_header_styles_settings',
            'type'        => 'title',
            'settings'    => 'label_background_position',
        )));
        // background position
        $wp_customize->add_setting( 'header_background_position', array(
            'type' => 'theme_mod',
            'default'           => 'center',
            'sanitize_callback' => 'circle_sanitize_hadder_image_position_radio_selection'
        ));
        $wp_customize->add_control( new circle_Radio_image_Control(  $wp_customize, 'header_background_position', array(
            'settings'      => 'header_background_position',
            'section'       => 'circle_header_styles_settings',
            'type'        => 'radio-image',
            // 'label'         => esc_html__( 'Header Image Position:', 'elementor-circle' ),
            'description'   => esc_html__('This setting will change image position', 'elementor-circle'),
            'choices' => 
            array(
                'left' => get_template_directory_uri() . '/assets/images/customizer/img-left.svg',
                'center' => get_template_directory_uri() . '/assets/images/customizer/img-center.svg',
                'right' => get_template_directory_uri() . '/assets/images/customizer/img-right.svg',
            ),
        )));
        // header parallax lable
        $wp_customize->add_setting( 'label_background_parallax', array(
                'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control( new circle_Title_Info_Control( $wp_customize, 'label_background_parallax', array(
            'label'       => esc_html__( 'Parallax Settings', 'elementor-circle' ),
            'section'     => 'circle_header_styles_settings',
            'type'        => 'title',
            'settings'    => 'label_background_parallax',
        )));
        // header Image parallax effect 
        $wp_customize->add_setting( 'header_background_attachment', array(
            'type' => 'theme_mod',
            'default'           => 'scroll',
            'sanitize_callback' => 'circle_sanitize_header_background_attachment_radio_selection'
        ));
        $wp_customize->add_control( new circle_Radio_image_Control(  $wp_customize, 'header_background_attachment', array(
            'settings'      => 'header_background_attachment',
            'section'       => 'circle_header_styles_settings',
            'type'        => 'radio-image',
            'description'   => esc_html__('Enable background parallax effect ', 'elementor-circle'),
            'choices' => 
            array(
                'fixed' => get_template_directory_uri() . '/assets/images/customizer/fixed.svg',
                'scroll' => get_template_directory_uri() . '/assets/images/customizer/scroll.svg',
            ),
        )));
        // header background size lable
        $wp_customize->add_setting(  'label_background_size', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control( new circle_Title_Info_Control( $wp_customize, 'label_background_size', array(
            'label'       => esc_html__( 'Header Background Image Size', 'elementor-circle' ),
            'section'     => 'circle_header_styles_settings',
            'type'        => 'title',
            'settings'    => 'label_background_size',
        )));
        // background size
        $wp_customize->add_setting( 'header_background_size', array(
            'type' => 'theme_mod',
            'default'           => 'initial',
            'sanitize_callback' => 'circle_sanitize_header_background_size'
        ));
        $wp_customize->add_control( new circle_Radio_image_Control(  $wp_customize, 'header_background_size', array(
            'settings'      => 'header_background_size',
            'section'       => 'circle_header_styles_settings',
            'type'        => 'radio-image',
            'description'   => esc_html__('This setting will change background Image Size initial, cover and contain ', 'elementor-circle'),
            'choices' => 
            array(
                'initial' => get_template_directory_uri() . '/assets/images/customizer/initial.svg',
                'cover' => get_template_directory_uri() . '/assets/images/customizer/cover.svg',
                'contain' => get_template_directory_uri() . '/assets/images/customizer/contain.svg',
            ),
        )));
        // header background repeat lable
        $wp_customize->add_setting( 'label_background_repeat', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control(  new circle_Title_Info_Control( $wp_customize, 'label_background_repeat', array(
            'label'       => esc_html__( 'Header Background Repeat', 'elementor-circle' ),
            'section'     => 'circle_header_styles_settings',
            'type'        => 'title',
            'settings'    => 'label_background_repeat',
        )));
        // background repeat
        $wp_customize->add_setting( 'header_background_repeat', array(
            'type' => 'theme_mod',
            'default'           => 'no-repeat',
            'sanitize_callback' => 'circle_sanitize_header_background_repeat'
        ));
        $wp_customize->add_control( new circle_Radio_image_Control(  $wp_customize, 'header_background_repeat', array(
            'settings'      => 'header_background_repeat',
            'section'       => 'circle_header_styles_settings',
            'type'        => 'radio-image',
            'description'         => esc_html__( 'Image Repeat, Repeat-x, Repeat-y or none:', 'elementor-circle' ),
            'choices' => 
            array(
                'no-repeat' => get_template_directory_uri() . '/assets/images/customizer/no-repeat.svg',
                'repeat' => get_template_directory_uri() . '/assets/images/customizer/repeat.svg',
                'repeat-x' => get_template_directory_uri() . '/assets/images/customizer/repeat-x.svg',
                'repeat-y' => get_template_directory_uri() . '/assets/images/customizer/repeat-y.svg',
            ),
        )));
        // search toggle lable
        $wp_customize->add_setting( 'label_search_icon_settings', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control(  new circle_Title_Info_Control( $wp_customize, 'label_search_icon_settings', array(
            'label'       => esc_html__( 'Header Icon Settings', 'elementor-circle' ),
            'section'     => 'circle_header_styles_settings',
            'type'        => 'title',
            'settings'    => 'label_search_icon_settings',
        )));
        // enable header icons components
        $wp_customize->add_setting( 'circle_header_components', array(
            'type' => 'theme_mod',
            'default'           => true,
            'sanitize_callback' => 'circle_sanitize_checkbox_selection'
        ));
        $wp_customize->add_control( new circle_Toggle_Control( $wp_customize, 'circle_header_components', array(
            'settings'      => 'circle_header_components',
            'section'       => 'circle_header_styles_settings',
            'type'          => 'toggle',
            'label'         => esc_html__( 'Enable header icons:', 'elementor-circle' ),
        )));
        // search toggle button
        $wp_customize->add_setting( 'circle_header_component_search', array(
            'type' => 'theme_mod',
            'default'           => true,
            'sanitize_callback' => 'circle_sanitize_checkbox_selection'
        ));
        $wp_customize->add_control( new circle_Toggle_Control( $wp_customize, 'circle_header_component_search', array(
            'settings'      => 'circle_header_component_search',
            'section'       => 'circle_header_styles_settings',
            'type'          => 'toggle',
            'label'         => esc_html__( 'Enable search icons:', 'elementor-circle' ),
        )));
        // cart toggle button
        $wp_customize->add_setting( 'circle_header_component_cart', array(
            'type' => 'theme_mod',
            'default'           => true,
            'sanitize_callback' => 'circle_sanitize_checkbox_selection'
        ));
        $wp_customize->add_control( new circle_Toggle_Control( $wp_customize, 'circle_header_component_cart', array(
            'settings'      => 'circle_header_component_cart',
            'section'       => 'circle_header_styles_settings',
            'type'          => 'toggle',
            'label'         => esc_html__( 'Enable cart and account icons:', 'elementor-circle' ),
        )));
        $wp_customize->add_setting(  'label_header_colors_settings', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control(  new circle_Title_Info_Control( $wp_customize, 'label_header_colors_settings', array(
            'label'       => esc_html__( 'Header Colors Settings', 'elementor-circle' ),
            'section'     => 'circle_header_styles_settings',
            'type'        => 'title',
            'settings'    => 'label_header_colors_settings',
        )));
        // header background color
        $wp_customize->add_setting( 'circle_header_bg_color', array(
            'type' => 'theme_mod',
            'default'           => '#fff',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'circle_header_bg_color', array(
            'label'      => esc_html__( 'header background Color', 'elementor-circle' ),
            'section'    => 'circle_header_styles_settings',
            'settings'   => 'circle_header_bg_color',
        )));
        // header bottom border color
        $wp_customize->add_setting( 'circle_header_border_bottom_color', array(
            'type' => 'theme_mod',
            'default'           => '#e8e8f8',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'circle_header_border_bottom_color', array(
            'label'      => esc_html__( 'Header bottom border Color', 'elementor-circle' ),
            'section'    => 'circle_header_styles_settings',
            'settings'   => 'circle_header_border_bottom_color',
        )));
        // navigation background color
        $wp_customize->add_setting( 'navigation_bg_color', array(
            'type' => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navigation_bg_color', array(
            'label'      => esc_html__( 'navigation Background color','elementor-circle' ),
            'section'     => 'circle_header_styles_settings',
            'settings'   => 'navigation_bg_color',
        )));
        // navigation link color
        $wp_customize->add_setting( 'navigation_link_color', array(
                'type' => 'theme_mod',
                'default'           => '#333',
                'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'navigation_link_color', array(
            'label'      => esc_html__( 'navigation anchor color','elementor-circle' ),
            'section'     => 'circle_header_styles_settings',
            'settings'   => 'navigation_link_color',
        )));
        // navigation link color
        $wp_customize->add_setting( 'navigation_link_color_hover', array(
                'type' => 'theme_mod',
                'default'           => '#08adf1',
                'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'navigation_link_color_hover', array(
            'label'      => esc_html__( 'navigation anchor hover & active color','elementor-circle' ),
            'section'     => 'circle_header_styles_settings',
            'settings'   => 'navigation_link_color_hover',
        )));
        // navigation icon color
        $wp_customize->add_setting( 'navigation_icon_color', array(
                'type' => 'theme_mod', 
                'default'           => '#333',
                'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'navigation_icon_color', array(
            'label'      => esc_html__( 'navigation icon color','elementor-circle' ),
            'section'     => 'circle_header_styles_settings',
            'settings'   => 'navigation_icon_color',
        )));
        // menu toggle color
        $wp_customize->add_setting( 'menu_toggle', array(
            'type' => 'theme_mod',
            'default'           => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'menu_toggle', array(
            'label'      => esc_html__( 'Toggle icon background color','elementor-circle' ),
            'section'     => 'circle_header_styles_settings',
            'settings'   => 'menu_toggle',
        )));
        // menu toggle icon color
        $wp_customize->add_setting( 'menu_toggle_icon', array(
            'type' => 'theme_mod',
            'default'           => '#333333',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'menu_toggle_icon', array(
            'label'      => esc_html__( 'Toggle icon color','elementor-circle' ),
            'section'     => 'circle_header_styles_settings',
            'settings'   => 'menu_toggle_icon',
        )));
        // menu toggled color
        $wp_customize->add_setting( 'menu_toggled', array(
            'type' => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'menu_toggled', array(
            'label'      => esc_html__( 'Toggled icon background color','elementor-circle' ),
            'section'     => 'circle_header_styles_settings',
            'settings'   => 'menu_toggled',
        )));
        // menu toggled icon color
        $wp_customize->add_setting( 'menu_toggled_icon', array(
            'type' => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_toggled_icon', array(
            'label'      => esc_html__( 'Toggled icon color','elementor-circle' ),
            'section'     => 'circle_header_styles_settings',
            'settings'   => 'menu_toggled_icon',
        )));    
        // site title color
        $wp_customize->add_setting( 'circle_site_title_color', array(
            'type' => 'theme_mod',
            'default'           => '#000000',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'circle_site_title_color', array(
            'label'      => esc_html__( 'Site title color','elementor-circle' ),
            'section'     => 'circle_header_styles_settings',
            'settings'   => 'circle_site_title_color',
        )));
        // site description color
        $wp_customize->add_setting( 'circle_site_description_color', array(
            'type' => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'circle_site_description_color', array(
            'label'      => esc_html__( 'Site description color','elementor-circle' ),
            'section'     => 'circle_header_styles_settings',
            'settings'   => 'circle_site_description_color',
        )));
    } endif;

add_action( 'customize_register', 'circle_customizer_header_styles_settings_register' );