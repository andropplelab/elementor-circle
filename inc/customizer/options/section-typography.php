<?php
/**
 * Theme Customizer Controls
 *
  * @package Elementor Circle
 */

if ( ! function_exists( 'circle_customizer_typography_settings_register' ) ) :
    function circle_customizer_typography_settings_register( $wp_customize ) {
        
        // General Settings Typography panel
        $wp_customize->add_section( 'circle_typography_settings', array(
            'title' => 'Typography',
            'priority' => 1,
            'panel' => 'cilcle_panel_general'
        ));
        // ancher tag title
        $wp_customize->add_setting( 
        'label_ancher_tag', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control( new circle_Title_Info_Control( $wp_customize, 'label_ancher_tag', array(
            'label'       => esc_html__( 'Ancher Tag Setting', 'elementor-circle' ),
            'section'     => 'circle_typography_settings',
            'type'        => 'title',
            'settings'    => 'label_ancher_tag',
        )));
        // ancher tag Color
        $wp_customize->add_setting( 'ancher_tag_color', array(
            'type' => 'theme_mod',
            'default'           => '#000',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ancher_tag_color', array(
            'label'      => esc_html__( 'Ancher tag (a) Color', 'elementor-circle' ),
            'section'    => 'circle_typography_settings',
            'settings'   => 'ancher_tag_color',
        )));
        // ancher tag hover Color
        $wp_customize->add_setting( 'ancher_tag_hover_color', array(
            'type' => 'theme_mod',
            'default'           => '#08adf1',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ancher_tag_hover_color', array(
        'label'      => esc_html__( 'Ancher tag (a) hover Color', 'elementor-circle' ),
        'section'    => 'circle_typography_settings',
        'settings'   => 'ancher_tag_hover_color',
        ))); 

        // h1 title
        $wp_customize->add_setting( 
        'label_h1_setting', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control( new circle_Title_Info_Control( $wp_customize, 'label_h1_setting', array(
            'label'       => esc_html__( ' H1 setting', 'elementor-circle' ),
            'section'     => 'circle_typography_settings',
            'type'        => 'title',
            'settings'    => 'label_h1_setting',
        )));
        // typography H1
        $wp_customize->add_section( 'circle_section_typography_h1', array(
            'title'      => esc_html__( 'Typography', 'elementor-circle'),
            'panel'      => 'circle_panel_general',
        ));
        $wp_customize->add_setting( 'typography_h1_desktop', array(
            'default'   		=> 34,
            'sanitize_callback' => 'absint',
        ));			
        $wp_customize->add_setting( 'typography_h1_tablet', array(
            'default'   		=> 30,
            'sanitize_callback' => 'absint',
        ));
        $wp_customize->add_setting( 'typography_h1_mobile', array(
            'default'   		=> 26,
            'sanitize_callback' => 'absint',
        ));			
        $wp_customize->add_control( new Customize_Range_Slider( $wp_customize, 'typography_h1', array(
            'label' 		=> esc_html__( 'Font size', 'elementor-circle' ),
            'section' 		=> 'circle_typography_settings',
            'is_responsive'	=> 1,
            'settings' 		=> array (
                'size_desktop' 		=> 'typography_h1_desktop',
                'size_tablet' 		=> 'typography_h1_tablet',
                'size_mobile' 		=> 'typography_h1_mobile',
            ),
            'input_attrs' => array (
                'min'	=> 0,
                'max'	=> 100
            )		
        )));
        // h1 text transform
        $wp_customize->add_setting( 'typography_h1_text_transform', array(
            'default' 			=> 'none',
            'type' => 'theme_mod',
            'sanitize_callback' => 'circle_sanitize_text'
        ));
        $wp_customize->add_control(  new Circle_Radio_Buttons_Control ( $wp_customize, 'typography_h1_text_transform', array(
            'label'   => esc_html__( 'Text transform', 'elementor-circle' ),
            'section' => 'circle_typography_settings',
            'choices' => array(
                'none' 			=> '-',
                'capitalize' 	=> 'Aa',
                'lowercase' 	=> 'aa',
                'uppercase' 	=> 'AA',
            )
        )));
        // h1 font weight
        $wp_customize->add_setting( 'circle_h1_font_weight', array(
            'default' 			=> '900',
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint',
            'transport'   => 'refresh',
        ));
        $wp_customize->add_control(  new Circle_Radio_Buttons_Control ( $wp_customize, 'circle_h1_font_weight', array(
            'label'   => esc_html__( 'Font weight', 'elementor-circle' ),
            'section' => 'circle_typography_settings',
            'choices' => array(
                'inherit' 			=> '-',
                '100' 	=> '100',
                '300' 	=> '300',
                '500' 	=> '500',
                '700' 	=> '700',
                '900' 	=> '900',
            )
        )));
        // H1 Color
        $wp_customize->add_setting( 'typography_h1_text_color', array(
            'type' => 'theme_mod',
            'default'           => '#000',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'circle_typography_h1_text_color', array(
        'label'      => esc_html__( 'Text color', 'elementor-circle' ),
        'section'    => 'circle_typography_settings',
        'settings'   => 'typography_h1_text_color',
        )));
        // h2 title
        $wp_customize->add_setting( 'label_h2_setting', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control( new circle_Title_Info_Control( $wp_customize, 'label_h2_setting', array(
            'label'       => esc_html__( ' H2 setting', 'elementor-circle' ),
            'section'     => 'circle_typography_settings',
            'type'        => 'title',
            'settings'    => 'label_h2_setting',
        )));
        // typography h2
        $wp_customize->add_section( 'circle_section_typography_h2', array(
            'title'      => esc_html__( 'Typography', 'elementor-circle'),
            'panel'      => 'circle_panel_general',
        ));
        $wp_customize->add_setting( 'typography_h2_desktop', array(
            'default'   		=> 28,
            'sanitize_callback' => 'absint',
        ));			
        $wp_customize->add_setting( 'typography_h2_tablet', array(
            'default'   		=> 26,
            'sanitize_callback' => 'absint',
        ));
        $wp_customize->add_setting( 'typography_h2_mobile', array(
            'default'   		=> 24,
            'sanitize_callback' => 'absint',
        ));			
        $wp_customize->add_control( new Customize_Range_Slider( $wp_customize, 'typography_h2', array(
            'label' 		=> esc_html__( 'Font size', 'elementor-circle' ),
            'section' 		=> 'circle_typography_settings',
            'is_responsive'	=> 1,
            'settings' 		=> array (
                'size_desktop' 		=> 'typography_h2_desktop',
                'size_tablet' 		=> 'typography_h2_tablet',
                'size_mobile' 		=> 'typography_h2_mobile',
            ),
            'input_attrs' => array (
                'min'	=> 0,
                'max'	=> 80
            )		
        )));
        // h2 text transform
        $wp_customize->add_setting( 'typography_h2_text_transform', array(
            'default' 			=> 'none',
            'type' => 'theme_mod',
            'sanitize_callback' => 'circle_sanitize_text'
        ));
        $wp_customize->add_control( new Circle_Radio_Buttons_Control ( $wp_customize, 'typography_h2_text_transform', array(
            'label'   => esc_html__( 'Text transform', 'elementor-circle' ),
            'section' => 'circle_typography_settings',
            'choices' => array(
                'none' 			=> '-',
                'capitalize' 	=> 'Aa',
                'lowercase' 	=> 'aa',
                'uppercase' 	=> 'AA',
            )
        )));
        // h2 font weight
        $wp_customize->add_setting( 'circle_h2_font_weight', array(
            'default' 			=> '900',
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint',
            'transport'   => 'refresh',
        ));
        $wp_customize->add_control(  new Circle_Radio_Buttons_Control ( $wp_customize, 'circle_h2_font_weight', array(
            'label'   => esc_html__( 'Font weight', 'elementor-circle' ),
            'section' => 'circle_typography_settings',
            'choices' => array(
                'inherit' 			=> '-',
                '300' 	=> '300',
                '500' 	=> '500',
                '700' 	=> '700',
                '900' 	=> '900',
            )
        )));
        // H2 Color
        $wp_customize->add_setting( 'typography_h2_text_color', array(
            'type' => 'theme_mod',
            'default'           => '#000',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'circle_typography_h2_text_color', array(
            'label'      => esc_html__( 'Text color', 'elementor-circle' ),
            'section'    => 'circle_typography_settings',
            'settings'   => 'typography_h2_text_color',
        )));
        // h3 title
        $wp_customize->add_setting( 'label_h3_setting', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control( new circle_Title_Info_Control( $wp_customize, 'label_h3_setting', array(
            'label'       => esc_html__( ' H3 setting', 'elementor-circle' ),
            'section'     => 'circle_typography_settings',
            'type'        => 'title',
            'settings'    => 'label_h3_setting',
        )));
        // typography h3
        $wp_customize->add_section( 'circle_section_typography_h3', array(
            'title'      => esc_html__( 'Typography', 'elementor-circle'),
            'panel'      => 'circle_panel_general',
        ));
        $wp_customize->add_setting( 'typography_h3_desktop', array(
            'default'   		=> 24,
            'sanitize_callback' => 'absint',
        ));			
        $wp_customize->add_setting( 'typography_h3_tablet', array(
            'default'   		=> 22,
            'sanitize_callback' => 'absint',
        ));
        $wp_customize->add_setting( 'typography_h3_mobile', array(
            'default'   		=> 20,
            'sanitize_callback' => 'absint',
        ));			
        $wp_customize->add_control( new Customize_Range_Slider( $wp_customize, 'typography_h3', array(
            'label' 		=> esc_html__( 'Font size', 'elementor-circle' ),
            'section' 		=> 'circle_typography_settings',
            'is_responsive'	=> 1,
            'settings' 		=> array (
                'size_desktop' 		=> 'typography_h3_desktop',
                'size_tablet' 		=> 'typography_h3_tablet',
                'size_mobile' 		=> 'typography_h3_mobile',
            ),
            'input_attrs' => array (
                'min'	=> 0,
                'max'	=> 50
            )		
        )));
        // h3 text transform
        $wp_customize->add_setting( 'typography_h3_text_transform', array(
            'default' 			=> 'none',
            'type' => 'theme_mod',
            'sanitize_callback' => 'circle_sanitize_text'
        ));
        $wp_customize->add_control(  new Circle_Radio_Buttons_Control ( $wp_customize, 'typography_h3_text_transform', array(
            'label'   => esc_html__( 'Text transform', 'elementor-circle' ),
            'section' => 'circle_typography_settings',
            'choices' => array(
                'none' 			=> '-',
                'capitalize' 	=> 'Aa',
                'lowercase' 	=> 'aa',
                'uppercase' 	=> 'AA',
            )
        )));
        // h3 font weight
        $wp_customize->add_setting( 'circle_h3_font_weight', array(
            'default' 			=> '900',
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint',
            'transport'   => 'refresh',
        ));
        $wp_customize->add_control(  new Circle_Radio_Buttons_Control ( $wp_customize, 'circle_h3_font_weight', array(
            'label'   => esc_html__( 'Font weight', 'elementor-circle' ),
            'section' => 'circle_typography_settings',
            'choices' => array(
                'inherit' 			=> '-',
                '300' 	=> '300',
                '500' 	=> '500',
                '700' 	=> '700',
                '900' 	=> '900',
            )
        )));
        // h3 Color
        $wp_customize->add_setting( 'typography_h3_text_color', array(
            'type' => 'theme_mod',
            'default'           => '#000',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'circle_typography_h3_text_color', array(
            'label'      => esc_html__( 'Text color', 'elementor-circle' ),
            'section'    => 'circle_typography_settings',
            'settings'   => 'typography_h3_text_color',
        )));
        // h4 title
        $wp_customize->add_setting( 
            'label_h4_setting', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control( new circle_Title_Info_Control( $wp_customize, 'label_h4_setting', array(
            'label'       => esc_html__( ' H4 setting', 'elementor-circle' ),
            'section'     => 'circle_typography_settings',
            'type'        => 'title',
            'settings'    => 'label_h4_setting',
        )));
        // typography h4
        $wp_customize->add_section( 'circle_section_typography_h4', array(
            'title'      => esc_html__( 'Typography', 'elementor-circle'),
            'panel'      => 'circle_panel_general',
        ));
        $wp_customize->add_setting( 'typography_h4_desktop', array(
            'default'   		=> 20,
            'sanitize_callback' => 'absint',
        ));			
        $wp_customize->add_setting( 'typography_h4_tablet', array(
            'default'   		=> 18,
            'sanitize_callback' => 'absint',
        ));
        $wp_customize->add_setting( 'typography_h4_mobile', array(
            'default'   		=> 17,
            'sanitize_callback' => 'absint',
        ));			
        $wp_customize->add_control(  new Customize_Range_Slider( $wp_customize, 'typography_h4', array(
            'label' 		=> esc_html__( 'Font size', 'elementor-circle' ),
            'section' 		=> 'circle_typography_settings',
            'is_responsive'	=> 1,
            'settings' 		=> array (
                'size_desktop' 		=> 'typography_h4_desktop',
                'size_tablet' 		=> 'typography_h4_tablet',
                'size_mobile' 		=> 'typography_h4_mobile',
            ),
            'input_attrs' => array (
                'min'	=> 0,
                'max'	=> 30
            )		
        )));
        // h4 text transform
        $wp_customize->add_setting( 'typography_h4_text_transform', array(
            'default' 			=> 'none',
            'type' => 'theme_mod',
            'sanitize_callback' => 'circle_sanitize_text'
        ));
        $wp_customize->add_control( new Circle_Radio_Buttons_Control ( $wp_customize, 'typography_h4_text_transform', array(
            'label'   => esc_html__( 'Text transform', 'elementor-circle' ),
            'section' => 'circle_typography_settings',
            'choices' => array(
                'none' 			=> '-',
                'capitalize' 	=> 'Aa',
                'lowercase' 	=> 'aa',
                'uppercase' 	=> 'AA',
            )
        )));
        // h4 font weight
        $wp_customize->add_setting( 'circle_h4_font_weight', array(
            'default' 			=> '900',
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint',
            'transport'   => 'refresh',
        ));
        $wp_customize->add_control( new Circle_Radio_Buttons_Control ( $wp_customize, 'circle_h4_font_weight', array(
            'label'   => esc_html__( 'Font weight', 'elementor-circle' ),
            'section' => 'circle_typography_settings',
            'choices' => array(
                'inherit' 			=> '-',
                '300' 	=> '300',
                '500' 	=> '500',
                '700' 	=> '700',
                '900' 	=> '900',
            )
        )));
        // h4 Color
        $wp_customize->add_setting( 'typography_h4_text_color', array(
            'type' => 'theme_mod',
            'default'           => '#000',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'circle_typography_h4_text_color', array(
            'label'      => esc_html__( 'Text Color', 'elementor-circle' ),
            'section'    => 'circle_typography_settings',
            'settings'   => 'typography_h4_text_color',
        ))); 
        // h5 title
        $wp_customize->add_setting( 'label_h5_setting', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control( new circle_Title_Info_Control( $wp_customize, 'label_h5_setting', array(
            'label'       => esc_html__( ' H5 setting', 'elementor-circle' ),
            'section'     => 'circle_typography_settings',
            'type'        => 'title',
            'settings'    => 'label_h5_setting',
        )));
        // typography h5
        $wp_customize->add_section( 'circle_section_typography_h5', array(
            'title'      => esc_html__( 'Typography', 'elementor-circle'),
            'panel'      => 'circle_panel_general',
        ));
        $wp_customize->add_setting( 'typography_h5_desktop', array(
            'default'   		=> 16,
            'sanitize_callback' => 'absint',
        ));			
        $wp_customize->add_setting( 'typography_h5_tablet', array(
            'default'   		=> 16,
            'sanitize_callback' => 'absint',
        ));
        $wp_customize->add_setting( 'typography_h5_mobile', array(
            'default'   		=> 15,
            'sanitize_callback' => 'absint',
        ));			
        $wp_customize->add_control( new Customize_Range_Slider( $wp_customize, 'typography_h5', array(
            'label' 		=> esc_html__( 'Font size', 'elementor-circle' ),
            'section' 		=> 'circle_typography_settings',
            'is_responsive'	=> 1,
            'settings' 		=> array (
                'size_desktop' 		=> 'typography_h5_desktop',
                'size_tablet' 		=> 'typography_h5_tablet',
                'size_mobile' 		=> 'typography_h5_mobile',
            ),
            'input_attrs' => array (
                'min'	=> 0,
                'max'	=> 24
            )		
        )));
        // h5 text transform
        $wp_customize->add_setting( 'typography_h5_text_transform', array(
            'default' 			=> 'none',
            'type' => 'theme_mod',
            'sanitize_callback' => 'circle_sanitize_text'
        ));
        $wp_customize->add_control( new Circle_Radio_Buttons_Control ( $wp_customize, 'typography_h5_text_transform', array(
            'label'   => esc_html__( 'Text transform', 'elementor-circle' ),
            'section' => 'circle_typography_settings',
            'choices' => array(
                'none' 			=> '-',
                'capitalize' 	=> 'Aa',
                'lowercase' 	=> 'aa',
                'uppercase' 	=> 'AA',
            )
        )));
        // h5 font weight
        $wp_customize->add_setting( 'circle_h5_font_weight', array(
            'default' 			=> '900',
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint',
            'transport'   => 'refresh',
        ));
        $wp_customize->add_control( new Circle_Radio_Buttons_Control ( $wp_customize, 'circle_h5_font_weight', array(
            'label'   => esc_html__( 'Font weight', 'elementor-circle' ),
            'section' => 'circle_typography_settings',
            'choices' => array(
                'inherit' 			=> '-',
                '300' 	=> '300',
                '500' 	=> '500',
                '700' 	=> '700',
                '900' 	=> '900',
            )
        )));
        // h5 Color
        $wp_customize->add_setting( 'typography_h5_text_color', array(
            'type' => 'theme_mod',
            'default'           => '#000',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'circle_typography_h5_text_color', array(
            'label'      => esc_html__( 'Text color', 'elementor-circle' ),
            'section'    => 'circle_typography_settings',
            'settings'   => 'typography_h5_text_color',
        )));
        // h6 title
        $wp_customize->add_setting( 'label_h6_setting', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control( new circle_Title_Info_Control( $wp_customize, 'label_h6_setting', array(
            'label'       => esc_html__( ' H6 setting', 'elementor-circle' ),
            'section'     => 'circle_typography_settings',
            'type'        => 'title',
            'settings'    => 'label_h6_setting',
        )));
        // typography h6
        $wp_customize->add_section( 'circle_section_typography_h6', array(
            'title'      => esc_html__( 'Typography', 'elementor-circle'),
            'panel'      => 'circle_panel_general',
        ));
        $wp_customize->add_setting( 'typography_h6_desktop', array(
            'default'   		=> 15,
            'sanitize_callback' => 'absint',
        ));			
        $wp_customize->add_setting( 'typography_h6_tablet', array(
            'default'   		=> 14,
            'sanitize_callback' => 'absint',
        ));
        $wp_customize->add_setting( 'typography_h6_mobile', array(
            'default'   		=> 14,
            'sanitize_callback' => 'absint',
        ));			
        $wp_customize->add_control( new Customize_Range_Slider( $wp_customize, 'typography_h6', array(
            'label' 		=> esc_html__( 'Font size', 'elementor-circle' ),
            'section' 		=> 'circle_typography_settings',
            'is_responsive'	=> 1,
            'settings' 		=> array (
                'size_desktop' 		=> 'typography_h6_desktop',
                'size_tablet' 		=> 'typography_h6_tablet',
                'size_mobile' 		=> 'typography_h6_mobile',
            ),
            'input_attrs' => array (
                'min'	=> 0,
                'max'	=> 20
            )		
        )));
        // h6 text transform
        $wp_customize->add_setting( 'typography_h6_text_transform', array(
            'default' 			=> 'none',
            'type' => 'theme_mod',
            'sanitize_callback' => 'circle_sanitize_text'
        ));
        $wp_customize->add_control(  new Circle_Radio_Buttons_Control ( $wp_customize, 'typography_h6_text_transform', array(
            'label'   => esc_html__( 'Text transform', 'elementor-circle' ),
            'section' => 'circle_typography_settings',
            'choices' => array(
                'none' 			=> '-',
                'capitalize' 	=> 'Aa',
                'lowercase' 	=> 'aa',
                'uppercase' 	=> 'AA',
            )
        )));
        // h6 font weight
        $wp_customize->add_setting( 'circle_h6_font_weight', array(
            'default' 			=> '900',
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint',
            'transport'   => 'refresh',
        ));
        $wp_customize->add_control( new Circle_Radio_Buttons_Control ( $wp_customize, 'circle_h6_font_weight', array(
            'label'   => esc_html__( 'Font weight', 'elementor-circle' ),
            'section' => 'circle_typography_settings',
            'choices' => array(
                'inherit' 			=> '-',
                '300' 	=> '300',
                '500' 	=> '500',
                '700' 	=> '700',
                '900' 	=> '900',
            )
        )));
        // h6 Color
        $wp_customize->add_setting( 'typography_h6_text_color', array(
            'type' => 'theme_mod',
            'default'           => '#000',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'circle_typography_h6_text_color', array(
            'label'      => esc_html__( 'Text color', 'elementor-circle' ),
            'section'    => 'circle_typography_settings',
            'settings'   => 'typography_h6_text_color',
        )));
        // p title
        $wp_customize->add_setting( 'label_p_setting', array(
            'sanitize_callback' => 'circle_sanitize_title',
        ));
        $wp_customize->add_control( new circle_Title_Info_Control( $wp_customize, 'label_p_setting', array(
            'label'       => esc_html__( ' p setting', 'elementor-circle' ),
            'section'     => 'circle_typography_settings',
            'type'        => 'title',
            'settings'    => 'label_p_setting',
        )));
        // typography p
        $wp_customize->add_section( 'circle_section_typography_p', array(
            'title'      => esc_html__( 'Typography', 'elementor-circle'),
            'panel'      => 'circle_panel_general',
        ));
        $wp_customize->add_setting( 'typography_p_desktop', array(
            'default'   		=> '',
            'sanitize_callback' => 'absint',
        ));			
        $wp_customize->add_setting( 'typography_p_tablet', array(
            'default'   		=> '',
            'sanitize_callback' => 'absint',
        ));
        $wp_customize->add_setting( 'typography_p_mobile', array(
            'default'   		=> '',
            'sanitize_callback' => 'absint',
        ));			
        $wp_customize->add_control(  new Customize_Range_Slider( $wp_customize, 'typography_p', array(
            'label' 		=> esc_html__( 'P tag (paragraph) font size', 'elementor-circle' ),
            'section' 		=> 'circle_typography_settings',
            'is_responsive'	=> 1,
            'settings' 		=> array (
                'size_desktop' 		=> 'typography_p_desktop',
                'size_tablet' 		=> 'typography_p_tablet',
                'size_mobile' 		=> 'typography_p_mobile',
            ),
            'input_attrs' => array (
                'min'	=> 0,
                'max'	=> 20
            )		
        )));
        // p text transform
        $wp_customize->add_setting( 'typography_p_text_transform', array(
            'default' 			=> 'none',
            'type' => 'theme_mod',
            'sanitize_callback' => 'circle_sanitize_text'
        ));
        $wp_customize->add_control( new Circle_Radio_Buttons_Control ( $wp_customize, 'typography_p_text_transform', array(
            'label'   => esc_html__( 'Text transform', 'elementor-circle' ),
            'section' => 'circle_typography_settings',
            'choices' => array(
                'none' 			=> '-',
                'capitalize' 	=> 'Aa',
                'lowercase' 	=> 'aa',
                'uppercase' 	=> 'AA',
            )
        )));
        // p Color
        $wp_customize->add_setting( 'typography_p_text_color', array(
            'type' => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'circle_typography_p_text_color', array(
            'label'      => esc_html__( 'paragraph Color', 'elementor-circle' ),
            'section'    => 'circle_typography_settings',
            'settings'   => 'typography_p_text_color',
        )));
    } endif;
    
add_action( 'customize_register', 'circle_customizer_typography_settings_register' );