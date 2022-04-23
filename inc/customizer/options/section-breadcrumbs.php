<?php
/**
 * Theme Customizer Controls
 *
  * @package Elementor Circle
 */

if ( ! function_exists( 'circle_customizer_breadcrumbs_settings_register' ) ) :
	function circle_customizer_breadcrumbs_settings_register( $wp_customize ) {

		// General Settings button panel
		$wp_customize->add_section( 'breadcrumbs_content', array(
			'title' => 'Breadcrumbs Settings',
			'priority' => 1,
			'panel' => 'cilcle_panel_general'
		));
		// Back to top control
		$wp_customize->add_setting( 'show_breadcrumbs_label', array(
			'sanitize_callback' => 'circle_sanitize_title',
		));
		$wp_customize->add_control( new circle_Title_Info_Control( $wp_customize, 'show_breadcrumbs_label', array(
			'label'       => esc_html__( 'Breadcrumbs Settings', 'elementor-circle' ),
			'section'     => 'breadcrumbs_content',
			'type'        => 'title',
			'settings'    => 'show_breadcrumbs_label',
		)));
		// show breadcrumbs
		$wp_customize->add_setting( 'circle_show_breadcrumbs', array(
			'type' => 'theme_mod',
			'default'           => true,
			'sanitize_callback' => 'circle_sanitize_checkbox',
		));
		$wp_customize->add_control( new circle_Toggle_Control( $wp_customize,'circle_show_breadcrumbs', array(
			'settings'      => 'circle_show_breadcrumbs',
			'type'    => 'toggle',
			'label'   => __( 'Enable breadcrumbs', 'elementor-circle' ),
			'section' => 'breadcrumbs_content',
		)));
		// add breadcrumbs padding
		$wp_customize->add_setting( 'breadcrumbs_padding' , array(
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize_callback' => 'absint',
			'type' => 'theme_mod',
		));
		$wp_customize->add_control( new Customize_Range_Slider( $wp_customize, 'breadcrumbs_padding', array(
			'label' 		=> esc_html__( 'Padding top (px) Default auto', 'elementor-circle' ),
			'section' 		=> 'breadcrumbs_content',
			'settings' 		=> array (
				'size_desktop' 		=> 'breadcrumbs_padding',
			),
			'input_attrs' => array (
				'min'	=> 0,
				'max'	=> 150,
				'step'  => 1
			),
			'priority'     => '10'
		)));
		// breadcrumbs color setting title
		$wp_customize->add_setting(  'label_breadcrumbs_color_setting', array(
			'sanitize_callback' => 'circle_sanitize_title',
		));
		$wp_customize->add_control(  new circle_Title_Info_Control( $wp_customize, 'label_breadcrumbs_color_setting', array(
			'label'       => esc_html__( 'breadcrumbs color settings', 'elementor-circle' ),
			'section'     => 'breadcrumbs_content',
			'type'        => 'title',
			'settings'    => 'label_breadcrumbs_color_setting',
		)));
		// breadcrumbs current link color
		$wp_customize->add_setting( 'breadcrumbs_current_link_color', array(
			'type' => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'breadcrumbs_current_link_color', array(
			'label'      => esc_html__( 'Breadcrumbs current link color','elementor-circle' ),
			'section'     => 'breadcrumbs_content',
			'settings'   => 'breadcrumbs_current_link_color',
		)));
		// breadcrumbs link color
		$wp_customize->add_setting( 'breadcrumbs_link_color', array(
			'type' => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'breadcrumbs_link_color', array(
			'label'      => esc_html__( 'Breadcrumbs link color','elementor-circle' ),
			'section'     => 'breadcrumbs_content',
			'settings'   => 'breadcrumbs_link_color',
		)));
	} endif;

add_action( 'customize_register', 'circle_customizer_breadcrumbs_settings_register' );