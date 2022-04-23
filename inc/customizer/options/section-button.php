<?php
/**
 * Theme Customizer Controls
 *
  * @package Elementor Circle
 */
if ( ! function_exists( 'circle_customizer_button_settings_register' ) ) :
	function circle_customizer_button_settings_register( $wp_customize ) {
		// General section settings
		$wp_customize->add_panel('cilcle_panel_general', array(
			'title'      => esc_html__( 'General Settings', 'elementor-circle' ),
			'priority'   => 2,
			'panel'      => 'panel_general' 
		));
		// General Settings button panel
		$wp_customize->add_section( 'section_button', array(
			'title' => 'Button',
			'priority' => 1,
			'panel' => 'cilcle_panel_general'
		));
		/* default button */
		$wp_customize->add_setting( 'circle_button_top_padding_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_right_padding_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_bottom_padding_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_left_padding_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_top_padding_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_right_padding_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_bottom_padding_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_left_padding_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_top_padding_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_right_padding_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_bottom_padding_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_left_padding_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_control( new circle_customizer_dimensions_Control( $wp_customize, 'circle_theme_button_padding_dimensions', array(
			'label' 		=> esc_html__( 'Padding default Button', 'elementor-circle' ),
			'section' 		=> 'section_button',
			'is_responsive'	=> 1,
			'settings' 		=> array (
				'desktop_top'    => 'circle_button_top_padding_desktop',
				'desktop_right'  => 'circle_button_right_padding_desktop',
				'desktop_bottom' => 'circle_button_bottom_padding_desktop',
				'desktop_left'   => 'circle_button_left_padding_desktop',
				'tablet_top'     => 'circle_button_top_padding_tablet',
				'tablet_right'   => 'circle_button_right_padding_tablet',
				'tablet_bottom'  => 'circle_button_bottom_padding_tablet',
				'tablet_left'    => 'circle_button_left_padding_tablet',
				'mobile_top'     => 'circle_button_top_padding_mobile',
				'mobile_right'   => 'circle_button_right_padding_mobile',
				'mobile_bottom'  => 'circle_button_bottom_padding_mobile',
				'mobile_left'    => 'circle_button_left_padding_mobile',
			),
			'input_attrs' => array (
				'min'	=> 0,
				'max'	=> 50
			)		
		)));
		/* extra small button */
		$wp_customize->add_setting( 'circle_button_top_padding_xs_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_right_padding_xs_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_bottom_padding_xs_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_left_padding_xs_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_top_padding_xs_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_right_padding_xs_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_bottom_padding_xs_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_left_padding_xs_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_top_padding_xs_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_right_padding_xs_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_bottom_padding_xs_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_left_padding_xs_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_control( new circle_customizer_dimensions_Control( $wp_customize, 'circle_theme_button_padding_xs_dimensions', array(
			'label' 		=> esc_html__( 'Padding extra small button', 'elementor-circle' ),
			'section' 		=> 'section_button',
			'is_responsive'	=> 1,
			'settings' 		=> array (
				'desktop_top'    => 'circle_button_top_padding_xs_desktop',
				'desktop_right'  => 'circle_button_right_padding_xs_desktop',
				'desktop_bottom' => 'circle_button_bottom_padding_xs_desktop',
				'desktop_left'   => 'circle_button_left_padding_xs_desktop',
				'tablet_top'     => 'circle_button_top_padding_xs_tablet',
				'tablet_right'   => 'circle_button_right_padding_xs_tablet',
				'tablet_bottom'  => 'circle_button_bottom_padding_xs_tablet',
				'tablet_left'    => 'circle_button_left_padding_xs_tablet',
				'mobile_top'     => 'circle_button_top_padding_xs_mobile',
				'mobile_right'   => 'circle_button_right_padding_xs_mobile',
				'mobile_bottom'  => 'circle_button_bottom_padding_xs_mobile',
				'mobile_left'    => 'circle_button_left_padding_xs_mobile',
			),
			'input_attrs' => array (
				'min'	=> 0,
				'max'	=> 50
			)		
		)));
		/* small Button */
		$wp_customize->add_setting( 'circle_button_top_padding_sm_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_right_padding_sm_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_bottom_padding_sm_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_left_padding_sm_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_top_padding_sm_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_right_padding_sm_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_bottom_padding_sm_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_left_padding_sm_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_top_padding_sm_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_right_padding_sm_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_bottom_padding_sm_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_left_padding_sm_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_control( new circle_customizer_dimensions_Control( $wp_customize, 'circle_theme_button_padding_sm_dimensions', array(
			'label' 		=> esc_html__( 'Padding small Button', 'elementor-circle' ),
			'section' 		=> 'section_button',
			'is_responsive'	=> 1,
			'settings' 		=> array (
				'desktop_top'    => 'circle_button_top_padding_sm_desktop',
				'desktop_right'  => 'circle_button_right_padding_sm_desktop',
				'desktop_bottom' => 'circle_button_bottom_padding_sm_desktop',
				'desktop_left'   => 'circle_button_left_padding_sm_desktop',
				'tablet_top'     => 'circle_button_top_padding_sm_tablet',
				'tablet_right'   => 'circle_button_right_padding_sm_tablet',
				'tablet_bottom'  => 'circle_button_bottom_padding_sm_tablet',
				'tablet_left'    => 'circle_button_left_padding_sm_tablet',
				'mobile_top'     => 'circle_button_top_padding_sm_mobile',
				'mobile_right'   => 'circle_button_right_padding_sm_mobile',
				'mobile_bottom'  => 'circle_button_bottom_padding_sm_mobile',
				'mobile_left'    => 'circle_button_left_padding_sm_mobile',
			),
			'input_attrs' => array (
				'min'	=> 0,
				'max'	=> 50
			)		
		)));
		/* Medium button */
		$wp_customize->add_setting( 'circle_button_top_padding_md_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_right_padding_md_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_bottom_padding_md_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_left_padding_md_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_top_padding_md_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_right_padding_md_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_bottom_padding_md_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_left_padding_md_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_top_padding_md_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_right_padding_md_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_bottom_padding_md_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_left_padding_md_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_control( new circle_customizer_dimensions_Control( $wp_customize, 'circle_theme_button_padding_md_dimensions', array(
			'label' 		=> esc_html__( 'Padding Medium Button', 'elementor-circle' ),
			'section' 		=> 'section_button',
			'is_responsive'	=> 1,
			'settings' 		=> array (
				'desktop_top'    => 'circle_button_top_padding_md_desktop',
				'desktop_right'  => 'circle_button_right_padding_md_desktop',
				'desktop_bottom' => 'circle_button_bottom_padding_md_desktop',
				'desktop_left'   => 'circle_button_left_padding_md_desktop',
				'tablet_top'     => 'circle_button_top_padding_md_tablet',
				'tablet_right'   => 'circle_button_right_padding_md_tablet',
				'tablet_bottom'  => 'circle_button_bottom_padding_md_tablet',
				'tablet_left'    => 'circle_button_left_padding_md_tablet',
				'mobile_top'     => 'circle_button_top_padding_md_mobile',
				'mobile_right'   => 'circle_button_right_padding_md_mobile',
				'mobile_bottom'  => 'circle_button_bottom_padding_md_mobile',
				'mobile_left'    => 'circle_button_left_padding_md_mobile',
			),
			'input_attrs' => array (
				'min'	=> 0,
				'max'	=> 50
			)		
		)));
		/* Large button */
		$wp_customize->add_setting( 'circle_button_top_padding_lg_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_right_padding_lg_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_bottom_padding_lg_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_left_padding_lg_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_top_padding_lg_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_right_padding_lg_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_bottom_padding_lg_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_left_padding_lg_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_top_padding_lg_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_right_padding_lg_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_bottom_padding_lg_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_left_padding_lg_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_control( new circle_customizer_dimensions_Control( $wp_customize, 'circle_theme_button_padding_lg_dimensions', array(
			'label' 		=> esc_html__( 'Padding Large Button', 'elementor-circle' ),
			'section' 		=> 'section_button',
			'is_responsive'	=> 1,
			'settings' 		=> array (
				'desktop_top'    => 'circle_button_top_padding_lg_desktop',
				'desktop_right'  => 'circle_button_right_padding_lg_desktop',
				'desktop_bottom' => 'circle_button_bottom_padding_lg_desktop',
				'desktop_left'   => 'circle_button_left_padding_lg_desktop',
				'tablet_top'     => 'circle_button_top_padding_lg_tablet',
				'tablet_right'   => 'circle_button_right_padding_lg_tablet',
				'tablet_bottom'  => 'circle_button_bottom_padding_lg_tablet',
				'tablet_left'    => 'circle_button_left_padding_lg_tablet',
				'mobile_top'     => 'circle_button_top_padding_lg_mobile',
				'mobile_right'   => 'circle_button_right_padding_lg_mobile',
				'mobile_bottom'  => 'circle_button_bottom_padding_lg_mobile',
				'mobile_left'    => 'circle_button_left_padding_lg_mobile',
			),
			'input_attrs' => array (
				'min'	=> 0,
				'max'	=> 50
			)		
		)));
		/* Extra Large button */
		$wp_customize->add_setting( 'circle_button_top_padding_xl_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_right_padding_xl_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_bottom_padding_xl_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_left_padding_xl_desktop', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_top_padding_xl_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_right_padding_xl_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_bottom_padding_xl_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_left_padding_xl_tablet', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_top_padding_xl_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_right_padding_xl_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_bottom_padding_xl_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'circle_button_left_padding_xl_mobile', array(
			'default'   		=> '',
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_control( new circle_customizer_dimensions_Control( $wp_customize, 'circle_theme_button_padding_xl_dimensions', array(
			'label' 		=> esc_html__( 'Padding Extra Large Button', 'elementor-circle' ),
			'section' 		=> 'section_button',
			'is_responsive'	=> 1,
			'settings' 		=> array (
				'desktop_top'    => 'circle_button_top_padding_xl_desktop',
				'desktop_right'  => 'circle_button_right_padding_xl_desktop',
				'desktop_bottom' => 'circle_button_bottom_padding_xl_desktop',
				'desktop_left'   => 'circle_button_left_padding_xl_desktop',
				'tablet_top'     => 'circle_button_top_padding_xl_tablet',
				'tablet_right'   => 'circle_button_right_padding_xl_tablet',
				'tablet_bottom'  => 'circle_button_bottom_padding_xl_tablet',
				'tablet_left'    => 'circle_button_left_padding_xl_tablet',
				'mobile_top'     => 'circle_button_top_padding_xl_mobile',
				'mobile_right'   => 'circle_button_right_padding_xl_mobile',
				'mobile_bottom'  => 'circle_button_bottom_padding_xl_mobile',
				'mobile_left'    => 'circle_button_left_padding_xl_mobile',
			),
			'input_attrs' => array (
				'min'	=> 0,
				'max'	=> 50
			)		
		)));
		// border radius
		$wp_customize->add_setting( 'button_border_radius', array(
			'default'   		=> 0,
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_control( new Customize_Range_Slider( $wp_customize, 'button_border_radius', array(
				'label' 		=> esc_html__( 'Border radius', 'elementor-circle' ),
				'section' 		=> 'section_button',
				'is_responsive'	=> 0,
				'settings' 		=> array (
					'size_desktop' 		=> 'button_border_radius',
				),
				'input_attrs' => array (
					'min'	=> 0,
					'max'	=> 100
				),
		)));
		// typography label
		$wp_customize->add_setting( 'label_typography_color', array(
			'sanitize_callback' => 'circle_sanitize_title',
		));
		$wp_customize->add_control( new circle_Title_Info_Control( $wp_customize, 'label_typography_color', array(
			'label'       => esc_html__( 'Typography', 'elementor-circle' ),
			'section'     => 'section_button',
			'type'        => 'title',
			'settings'    => 'label_typography_color',
		)));
		// font size
		$wp_customize->add_setting( 'button_font_size_desktop', array(
			'default'   		=> 14,
			'sanitize_callback' => 'absint',
		));			
		$wp_customize->add_setting( 'button_font_size_tablet', array(
			'default'   		=> 14,
			'sanitize_callback' => 'absint',
		));
		$wp_customize->add_setting( 'button_font_size_mobile', array(
			'default'   		=> 12,
			'sanitize_callback' => 'absint',
		));			
		$wp_customize->add_control( new Customize_Range_Slider( $wp_customize, 'button_font_size', array(
			'label' 		=> esc_html__( 'Font size', 'elementor-circle' ),
			'section' 		=> 'section_button',
			'is_responsive'	=> 1,
			'settings' 		=> array (
				'size_desktop' 		=> 'button_font_size_desktop',
				'size_tablet' 		=> 'button_font_size_tablet',
				'size_mobile' 		=> 'button_font_size_mobile',
			),
			'input_attrs' => array (
				'min'	=> 0,
				'max'	=> 50
			)		
		)));
		// text transform
		$wp_customize->add_setting( 'button_text_transform', array(
			'default' 			=> 'uppercase',
			'type' => 'theme_mod',
			'sanitize_callback' => 'circle_sanitize_text'
		));
		$wp_customize->add_control(  new Circle_Radio_Buttons_Control ( $wp_customize, 'button_text_transform', array(
			'label'   => esc_html__( 'Text transform', 'elementor-circle' ),
			'section' => 'section_button',
			'choices' => array(
				'none' 			=> '-',
				'capitalize' 	=> 'Aa',
				'lowercase' 	=> 'aa',
				'uppercase' 	=> 'AA',
			)
		)));
		// Color label
		$wp_customize->add_setting(  'label_button_color', array(
			'sanitize_callback' => 'circle_sanitize_title',
		));
		$wp_customize->add_control( new circle_Title_Info_Control( $wp_customize, 'label_button_color', array(
			'label'       => esc_html__( 'Button Colors', 'elementor-circle' ),
			'section'     => 'section_button',
			'type'        => 'title',
			'settings'    => 'label_button_color',
		)));
		// background Color
		$wp_customize->add_setting( 'button_background_color', array(
			'type' => 'theme_mod',
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_background_color', array(
			'label'      => esc_html__( 'Background Color', 'elementor-circle' ),
			'section'    => 'section_button',
			'settings'   => 'button_background_color',
		)));
		// background hover Color
		$wp_customize->add_setting( 'button_background_hover_color', array(
			'type' => 'theme_mod',
			'default'           => '#333',
			'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_background_hover_color', array(
			'label'      => esc_html__( 'Background hover Color', 'elementor-circle' ),
			'section'    => 'section_button',
			'settings'   => 'button_background_hover_color',
		)));
		// text Color
		$wp_customize->add_setting( 'button_text_color', array(
			'type' => 'theme_mod',
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_text_color', array(
			'label'      => esc_html__( 'Text Color', 'elementor-circle' ),
			'section'    => 'section_button',
			'settings'   => 'button_text_color',
		)));
		// text hover Color
		$wp_customize->add_setting( 'button_text_hover_color', array(
			'type' => 'theme_mod',
			'default'           => 'fff',
			'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_text_hover_color', array(
		'label'      => esc_html__( 'Text hover Color', 'elementor-circle' ),
		'section'    => 'section_button',
		'settings'   => 'button_text_hover_color',
		))); 
		// Color label info
		$wp_customize->add_setting(  'label_info_button_color', array(
			'sanitize_callback' => 'circle_sanitize_title',
		));
		$wp_customize->add_control( new circle_Title_Info_Control( $wp_customize, 'label_info_button_color', array(
			'label'       => esc_html__( 'Info button Colors', 'elementor-circle' ),
			'section'     => 'section_button',
			'type'        => 'title',
			'settings'    => 'label_info_button_color',
		)));
		// background Color
		$wp_customize->add_setting( 'button_info_background_color', array(
			'type' => 'theme_mod',
			'default'           => '#4b89dc',
			'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_info_background_color', array(
			'label'      => esc_html__( 'Background Color', 'elementor-circle' ),
			'section'    => 'section_button',
			'settings'   => 'button_info_background_color',
		)));
		// background hover Color
		$wp_customize->add_setting( 'button_info_background_hover_color', array(
			'type' => 'theme_mod',
			'default'           => '#356eb9',
			'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_info_background_hover_color', array(
			'label'      => esc_html__( 'Background hover Color', 'elementor-circle' ),
			'section'    => 'section_button',
			'settings'   => 'button_info_background_hover_color',
		)));
		// text Color
		$wp_customize->add_setting( 'button_info_text_color', array(
			'type' => 'theme_mod',
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_info_text_color', array(
			'label'      => esc_html__( 'Text Color', 'elementor-circle' ),
			'section'    => 'section_button',
			'settings'   => 'button_info_text_color',
		)));
		// text hover Color
		$wp_customize->add_setting( 'button_info_text_hover_color', array(
			'type' => 'theme_mod',
			'default'           => 'fff',
			'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_info_text_hover_color', array(
		'label'      => esc_html__( 'Text hover Color', 'elementor-circle' ),
		'section'    => 'section_button',
		'settings'   => 'button_info_text_hover_color',
		))); 
		// Color label warning
		$wp_customize->add_setting(  'label_warning_button_color', array(
			'sanitize_callback' => 'circle_sanitize_title',
		));
		$wp_customize->add_control( new circle_Title_info_Control( $wp_customize, 'label_warning_button_color', array(
			'label'       => esc_html__( 'Warning button Colors', 'elementor-circle' ),
			'section'     => 'section_button',
			'type'        => 'title',
			'settings'    => 'label_warning_button_color',
		)));
		// background Color
		$wp_customize->add_setting( 'button_warning_background_color', array(
			'type' => 'theme_mod',
			'default'           => '#fe7f0a',
			'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_warning_background_color', array(
			'label'      => esc_html__( 'Background Color', 'elementor-circle' ),
			'section'    => 'section_button',
			'settings'   => 'button_warning_background_color',
		)));
		// background hover Color
		$wp_customize->add_setting( 'button_warning_background_hover_color', array(
			'type' => 'theme_mod',
			'default'           => '#cf6402',
			'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_warning_background_hover_color', array(
			'label'      => esc_html__( 'Background hover Color', 'elementor-circle' ),
			'section'    => 'section_button',
			'settings'   => 'button_warning_background_hover_color',
		)));
		// text Color
		$wp_customize->add_setting( 'button_warning_text_color', array(
			'type' => 'theme_mod',
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_warning_text_color', array(
			'label'      => esc_html__( 'Text Color', 'elementor-circle' ),
			'section'    => 'section_button',
			'settings'   => 'button_warning_text_color',
		)));
		// text hover Color
		$wp_customize->add_setting( 'button_warning_text_hover_color', array(
			'type' => 'theme_mod',
			'default'           => 'fff',
			'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_warning_text_hover_color', array(
		'label'      => esc_html__( 'Text hover Color', 'elementor-circle' ),
		'section'    => 'section_button',
		'settings'   => 'button_warning_text_hover_color',
		))); 
		// Color label danger
		$wp_customize->add_setting(  'label_danger_button_color', array(
			'sanitize_callback' => 'circle_sanitize_title',
		));
		$wp_customize->add_control( new circle_Title_info_Control( $wp_customize, 'label_danger_button_color', array(
			'label'       => esc_html__( 'Danger button Colors', 'elementor-circle' ),
			'section'     => 'section_button',
			'type'        => 'title',
			'settings'    => 'label_danger_button_color',
		)));
		// background Color
		$wp_customize->add_setting( 'button_danger_background_color', array(
			'type' => 'theme_mod',
			'default'           => '#ff4b3a',
			'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_danger_background_color', array(
			'label'      => esc_html__( 'Background Color', 'elementor-circle' ),
			'section'    => 'section_button',
			'settings'   => 'button_danger_background_color',
		)));
		// background hover Color
		$wp_customize->add_setting( 'button_danger_background_hover_color', array(
			'type' => 'theme_mod',
			'default'           => '#c93628',
			'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_danger_background_hover_color', array(
			'label'      => esc_html__( 'Background hover Color', 'elementor-circle' ),
			'section'    => 'section_button',
			'settings'   => 'button_danger_background_hover_color',
		)));
		// text Color
		$wp_customize->add_setting( 'button_danger_text_color', array(
			'type' => 'theme_mod',
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_danger_text_color', array(
			'label'      => esc_html__( 'Text Color', 'elementor-circle' ),
			'section'    => 'section_button',
			'settings'   => 'button_danger_text_color',
		)));
		// text hover Color
		$wp_customize->add_setting( 'button_danger_text_hover_color', array(
			'type' => 'theme_mod',
			'default'           => 'fff',
			'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_danger_text_hover_color', array(
		'label'      => esc_html__( 'Text hover Color', 'elementor-circle' ),
		'section'    => 'section_button',
		'settings'   => 'button_danger_text_hover_color',
		))); 
		// Color label success
		$wp_customize->add_setting(  'label_success_button_color', array(
			'sanitize_callback' => 'circle_sanitize_title',
		));
		$wp_customize->add_control( new circle_Title_info_Control( $wp_customize, 'label_success_button_color', array(
			'label'       => esc_html__( 'Success button Colors', 'elementor-circle' ),
			'section'     => 'section_button',
			'type'        => 'title',
			'settings'    => 'label_success_button_color',
		)));
		// background Color
		$wp_customize->add_setting( 'button_success_background_color', array(
			'type' => 'theme_mod',
			'default'           => '#00ce6c',
			'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_success_background_color', array(
			'label'      => esc_html__( 'Background Color', 'elementor-circle' ),
			'section'    => 'section_button',
			'settings'   => 'button_success_background_color',
		)));
		// background hover Color
		$wp_customize->add_setting( 'button_success_background_hover_color', array(
			'type' => 'theme_mod',
			'default'           => '#0b9b56',
			'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_success_background_hover_color', array(
			'label'      => esc_html__( 'Background hover Color', 'elementor-circle' ),
			'section'    => 'section_button',
			'settings'   => 'button_success_background_hover_color',
		)));
		// text Color
		$wp_customize->add_setting( 'button_success_text_color', array(
			'type' => 'theme_mod',
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_success_text_color', array(
			'label'      => esc_html__( 'Text Color', 'elementor-circle' ),
			'section'    => 'section_button',
			'settings'   => 'button_success_text_color',
		)));
		// text hover Color
		$wp_customize->add_setting( 'button_success_text_hover_color', array(
			'type' => 'theme_mod',
			'default'           => 'fff',
			'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_success_text_hover_color', array(
		'label'      => esc_html__( 'Text hover Color', 'elementor-circle' ),
		'section'    => 'section_button',
		'settings'   => 'button_success_text_hover_color',
		))); 
	} endif;
	
add_action( 'customize_register', 'circle_customizer_button_settings_register' );