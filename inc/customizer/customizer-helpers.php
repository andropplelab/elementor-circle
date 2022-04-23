<?php
/**
 * circle Theme Customizer Helper Functions
 *
  * @package Elementor Circle
 */

// Check if the back to top enabled or not
function circle_back_to_top_enable( $control ) {
	if ( $control->manager->get_setting( 'circle_back_to_top' )->value() == true) {
		return true;
	} else {
		return false;
	} 
} 

// Check if the back to top enabled or not
function circle_show_page_header_enable( $control ) {
	if ( $control->manager->get_setting( 'circle_show_page_header' )->value() == true) {
		return true;
	} else {
		return false; 
	} 
} 

// Check if the back to top enabled or not
function circle_show_page_title_enable( $control ) {
	if ( $control->manager->get_setting( 'circle_show_page_title' )->value() == true) {
		return true;
	} else {
		return false; 
	} 
} 

/**
 * Check if the header components enabled or not
 */
function header_search_enable( $control ) {
	if ( $control->manager->get_setting( 'circle_header_components' )->value() == true) {
		return true;
	} else {
		return false;
	}
} 
 
/**
 * Check if the breadcrumbs enabled or not
 */
function circle_breadcrumbs_show( $control ) {
	if ( $control->manager->get_setting( 'circle_show_breadcrumbs' )->value() == true) {
		return true;
	} else {
		return false;
	}
}

/**
 * Check if the footer enabled or not
 */
function circle_settings_footer_enable( $control ) {
	if ( $control->manager->get_setting( 'circle_footer_show' )->value() == true) {
		return true;
	} else {
		return false;
	} 
} 

/**
 * Check if the footer copyright enabled or not
 */
function circle_footer_widgets_enable( $control ) {
	if ( $control->manager->get_setting( 'circle_footer_copyright_show' )->value() == true) {
		return true;
	} else {
		return false;
	} 
} 

/**
 * Check if the preloader enabled or not
 */
function circle_preloader_enable( $control ) {
	if ( $control->manager->get_setting( 'circle_preloader_show' )->value() == true) {
		return true;
	} else {
		return false;
	} 
}

/**
 * Check if the preloader style enabled or not
 */
function preloader_style_enable( $control ) {
	if ( $control->manager->get_setting( 'preloader_style' )->value() == true) {
		return true;
	} else {
		return false;
	} 
}