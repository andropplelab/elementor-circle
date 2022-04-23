<?php
/**
 * circle: Dynamic CSS Stylesheet
 * 
 */

function circle_dynamic_css_stylesheet() {    
    // footer
    $footer_bg_color= sanitize_hex_color(get_theme_mod( 'circle_footer_bg_color','#141414' ));
    $footer_widget_padding_top_bottom= get_theme_mod( 'footer_widget_padding_top_bottom', '60' );
    $footer_content_color= sanitize_hex_color(get_theme_mod( 'circle_footer_content_color','#fff' ));
    $footer_links_color= sanitize_hex_color(get_theme_mod( 'circle_footer_links_color','#b3b3b3' ));
    $footer_copyright_bg_color= sanitize_hex_color(get_theme_mod( 'circle_footer_copyright_bg_color','#000' ));
    $footer_copyright_text_color= sanitize_hex_color(get_theme_mod( 'footer_copyright_text_color','#fff' ));
    $footer_copyright_padding_top_bottom= get_theme_mod( 'footer_copyright_padding_top_bottom', '15' );
    // header image




    $custom_header_height_desktop= absint(get_theme_mod( 'custom_header_height_desktop','90' ));
    $custom_header_height_tablet= absint(get_theme_mod( 'custom_header_height_tablet','90' ));
    $custom_header_height_mobile= absint(get_theme_mod( 'custom_header_height_mobile','90' ));




    $header_image        = esc_url(get_theme_mod( 'header_image' ));
    $size                = get_theme_mod( 'header_background_size', 'initial' );
    $attachment          = get_theme_mod( 'header_background_attachment', '' );
    $position            = get_theme_mod( 'header_background_position', 'center' );
    $repeat              = get_theme_mod( 'header_background_repeat', 'no-repeat' );
    // toggle button
    $menu_toggle= sanitize_hex_color(get_theme_mod( 'menu_toggle','#fff' ));
    $menu_toggled= sanitize_hex_color(get_theme_mod( 'menu_toggled','#f7f7f7' ));
    $menu_toggle_icon= sanitize_hex_color(get_theme_mod( 'menu_toggle_icon','#333' ));
    $menu_toggled_icon= sanitize_hex_color(get_theme_mod( 'menu_toggled_icon','' ));
    // back to top
    $scrolltop_bg_color=sanitize_hex_color(get_theme_mod( 'circle_scrolltop_bg_color','' ));
    $scrolltop_icon_color=sanitize_hex_color(get_theme_mod( 'circle_scrolltop_icon_color','' ));
    $scrolltop_bg_color_hover=sanitize_hex_color(get_theme_mod( 'circle_scrolltop_bg_color_hover','' ));
    $scrolltop_icon_color_hover=sanitize_hex_color(get_theme_mod( 'circle_scrolltop_icon_color_hover','' ));
    $scrolltop_side_offset= get_theme_mod( 'scrolltop_side_offset', '30' );
    $scrolltop_bottom_offset= get_theme_mod( 'scrolltop_bottom_offset', '30' );
    $scrolltop_button_border_radius= get_theme_mod( 'scrolltop_button_border_radius', '50' );
    $scrolltop_padding_desktop= get_theme_mod( 'scrolltop_padding_desktop', '20' );
    $scrolltop_padding_tablet= get_theme_mod( 'scrolltop_padding_tablet', '20' );
    $scrolltop_padding_mobile= get_theme_mod( 'scrolltop_padding_mobile', '20' );
    $scrolltop_icon_size= get_theme_mod( 'scrolltop_icon_size', 14 ); 
    $scrolltop_before= get_theme_mod( 'scrolltop_before', '"\f175"' );
    // breadcrumbs
    $breadcrumbs_padding= absint(get_theme_mod( 'breadcrumbs_padding','' )); 
    $breadcrumbs_current_link_color= sanitize_hex_color(get_theme_mod( 'breadcrumbs_current_link_color','' ));
    $breadcrumbs_link_color= sanitize_hex_color(get_theme_mod( 'breadcrumbs_link_color','' ));
    // typography
    // ancher tag
    $ancher_tag_color= sanitize_hex_color(get_theme_mod( 'ancher_tag_color','#000' ));
    $ancher_tag_hover_color= sanitize_hex_color(get_theme_mod( 'ancher_tag_hover_color','#08adf1' ));
    // h1
    $typography_h1_desktop= get_theme_mod( 'typography_h1_desktop', '34' );
    $typography_h1_tablet= get_theme_mod( 'typography_h1_tablet', '30' );
    $typography_h1_mobile= get_theme_mod( 'typography_h1_mobile', '26' );
	$typography_h1_text_transform = get_theme_mod( 'typography_h1_text_transform', 'none' );
    $typography_h1_text_color= sanitize_hex_color(get_theme_mod( 'typography_h1_text_color','#000' ));
    $circle_h1_font_weight = get_theme_mod( 'circle_h1_font_weight', '900' );
    // h2
    $typography_h2_desktop= get_theme_mod( 'typography_h2_desktop', '28' );
    $typography_h2_tablet= get_theme_mod( 'typography_h2_tablet', '26' );
    $typography_h2_mobile= get_theme_mod( 'typography_h2_mobile', '24' );
	$typography_h2_text_transform = get_theme_mod( 'typography_h2_text_transform', 'none' );
    $typography_h2_text_color= sanitize_hex_color(get_theme_mod( 'typography_h2_text_color','#000' ));
    $circle_h2_font_weight = get_theme_mod( 'circle_h2_font_weight', '700' );
    // h3
    $typography_h3_desktop= get_theme_mod( 'typography_h3_desktop', '24' );
    $typography_h3_tablet= get_theme_mod( 'typography_h3_tablet', '22' );
    $typography_h3_mobile= get_theme_mod( 'typography_h3_mobile', '20' );
	$typography_h3_text_transform = get_theme_mod( 'typography_h3_text_transform', 'none' );
    $typography_h3_text_color= sanitize_hex_color(get_theme_mod( 'typography_h3_text_color','#000' ));
    $circle_h3_font_weight = get_theme_mod( 'circle_h3_font_weight', '700' );
    // h4
    $typography_h4_desktop= get_theme_mod( 'typography_h4_desktop', '20' );
    $typography_h4_tablet= get_theme_mod( 'typography_h4_tablet', '18' );
    $typography_h4_mobile= get_theme_mod( 'typography_h4_mobile', '17' );
	$typography_h4_text_transform = get_theme_mod( 'typography_h4_text_transform', 'none' );
    $typography_h4_text_color= sanitize_hex_color(get_theme_mod( 'typography_h4_text_color','#000' ));
    $circle_h4_font_weight = get_theme_mod( 'circle_h4_font_weight', '500' );
    // h5
    $typography_h5_desktop= get_theme_mod( 'typography_h5_desktop', '16' );
    $typography_h5_tablet= get_theme_mod( 'typography_h5_tablet', '16' );
    $typography_h5_mobile= get_theme_mod( 'typography_h5_mobile', '15' );
	$typography_h5_text_transform = get_theme_mod( 'typography_h5_text_transform', 'none' );
    $typography_h5_text_color= sanitize_hex_color(get_theme_mod( 'typography_h5_text_color','#000' ));
    $circle_h5_font_weight = get_theme_mod( 'circle_h5_font_weight', '500' );
    // h6    
    $typography_h6_desktop= get_theme_mod( 'typography_h6_desktop', '15' );
    $typography_h6_tablet= get_theme_mod( 'typography_h6_tablet', '14' );
    $typography_h6_mobile= get_theme_mod( 'typography_h6_mobile', '14' );
	$typography_h6_text_transform = get_theme_mod( 'typography_h6_text_transform', 'none' );
    $typography_h6_text_color= sanitize_hex_color(get_theme_mod( 'typography_h6_text_color','#000' ));
    $circle_h6_font_weight = get_theme_mod( 'circle_h6_font_weight', '500' );
    // p
    $typography_p_desktop= get_theme_mod( 'typography_p_desktop', '' );
    $typography_p_tablet= get_theme_mod( 'typography_p_tablet', '' );
    $typography_p_mobile= get_theme_mod( 'typography_p_mobile', '' );
	$typography_p_text_transform = get_theme_mod( 'typography_p_text_transform', 'none' );
    $typography_p_text_color= sanitize_hex_color(get_theme_mod( 'typography_p_text_color','' ));
    // button
    $button_font_size_desktop= get_theme_mod( 'button_font_size_desktop', '14' );
    $button_font_size_tablet= get_theme_mod( 'button_font_size_tablet', '14' );
    $button_font_size_mobile= get_theme_mod( 'button_font_size_mobile', '12' );
    $button_border_radius= get_theme_mod( 'button_border_radius', '0' );
    $button_background_color= sanitize_hex_color(get_theme_mod( 'button_background_color','#000' ));
    $button_background_hover_color= sanitize_hex_color(get_theme_mod( 'button_background_hover_color','#333' ));
    $button_text_color= sanitize_hex_color(get_theme_mod( 'button_text_color','#fff' ));
    $button_text_hover_color= sanitize_hex_color(get_theme_mod( 'button_text_hover_color','#fff' ));
	$button_text_transform = get_theme_mod( 'button_text_transform', 'uppercase' );
    // button padding
    $circle_button_top_padding_desktop= get_theme_mod( 'circle_button_top_padding_desktop', '' );
    $circle_button_right_padding_desktop= get_theme_mod( 'circle_button_right_padding_desktop', '' );
    $circle_button_bottom_padding_desktop= get_theme_mod( 'circle_button_bottom_padding_desktop', '' );
    $circle_button_left_padding_desktop= get_theme_mod( 'circle_button_left_padding_desktop', '' );
    $circle_button_top_padding_tablet = get_theme_mod( 'circle_button_top_padding_tablet', '' );
    $circle_button_right_padding_tablet = get_theme_mod( 'circle_button_right_padding_tablet', '' );
    $circle_button_bottom_padding_tablet = get_theme_mod( 'circle_button_bottom_padding_tablet', '' );
    $circle_button_left_padding_tablet = get_theme_mod( 'circle_button_left_padding_tablet', '' );
    $circle_button_top_padding_mobile = get_theme_mod( 'circle_button_top_padding_mobile', '' );
    $circle_button_right_padding_mobile = get_theme_mod( 'circle_button_right_padding_mobile', '' );
    $circle_button_bottom_padding_mobile = get_theme_mod( 'circle_button_bottom_padding_mobile', '' );
    $circle_button_left_padding_mobile = get_theme_mod( 'circle_button_left_padding_mobile', '' );
    // header colors
    $header_bg_color=sanitize_hex_color(get_theme_mod( 'header_bg_color','#fff' ));
    $header_border_bottom=sanitize_hex_color(get_theme_mod( 'circle_header_border_bottom_color','#e8e8f8' ));
    $navigation_bg_color= sanitize_hex_color(get_theme_mod( 'navigation_bg_color','#fff' ));
    $navigation_link_color= sanitize_hex_color(get_theme_mod( 'navigation_link_color','#333' ));
    $navigation_link_color_hover= sanitize_hex_color(get_theme_mod( 'navigation_link_color_hover','#08adf1' ));
    $navigation_link_font_weight = get_theme_mod( 'navigation_link_font_weight', '500' );
    $navigation_icon_color= sanitize_hex_color(get_theme_mod( 'navigation_icon_color','#333' ));
    $circle_site_title_color= sanitize_hex_color(get_theme_mod( 'circle_site_title_color','#000000' ));
    $circle_site_description_color= sanitize_hex_color(get_theme_mod( 'circle_site_description_color','#000' ));
    $header_site_header_max_width= absint(get_theme_mod( 'header_site_header_max_width','1370' ));
    // page header
    $page_header_width= absint(get_theme_mod( 'page_header_width','1370' )); 
    $page_header_padding= absint(get_theme_mod( 'page_header_padding','15' )); 
    $page_header_bg_color= sanitize_hex_color(get_theme_mod( 'page_header_bg_color','#f7f7f7' ));
    $page_header_title_color= sanitize_hex_color(get_theme_mod( 'page_header_title_color','' ));
    $page_header_content_position= get_theme_mod( 'page_header_content_position', 'center' );
    // topbar
    $header_topbar_padding= absint(get_theme_mod( 'header_topbar_padding','10' )); 
    $header_topbar_bg_color= sanitize_hex_color(get_theme_mod( 'header_topbar_bg_color','#fff' ));
    $header_topbar_border_bottom_color= sanitize_hex_color(get_theme_mod( 'header_topbar_border_bottom_color','#e8e8f8' ));
    $header_topbar_max_width= absint(get_theme_mod( 'header_topbar_max_width','1370' ));
    $site_content_max_width= absint(get_theme_mod( 'site_content_max_width','1370' ));
    $button_danger_background_color= sanitize_hex_color(get_theme_mod( 'button_danger_background_color','#ff4b3a' ));
    $button_danger_background_hover_color= sanitize_hex_color(get_theme_mod( 'button_danger_background_hover_color','#c93628' ));
    $button_danger_text_color= sanitize_hex_color(get_theme_mod( 'button_danger_text_color','#fff' ));
    $button_danger_text_hover_color= sanitize_hex_color(get_theme_mod( 'button_danger_text_hover_color','#fff' ));
    $button_warning_background_color= sanitize_hex_color(get_theme_mod( 'button_warning_background_color','#fe7f0a' ));
    $button_warning_background_hover_color= sanitize_hex_color(get_theme_mod( 'button_warning_background_hover_color','#cf6402' ));
    $button_warning_text_color= sanitize_hex_color(get_theme_mod( 'button_warning_text_color','#fff' ));
    $button_warning_text_hover_color= sanitize_hex_color(get_theme_mod( 'button_warning_text_hover_color','#fff' ));
    $button_info_background_color= sanitize_hex_color(get_theme_mod( 'button_info_background_color','#4b89dc' ));
    $button_info_background_hover_color= sanitize_hex_color(get_theme_mod( 'button_info_background_hover_color','#356eb9' ));
    $button_info_text_color= sanitize_hex_color(get_theme_mod( 'button_info_text_color','#fff' ));
    $button_info_text_hover_color= sanitize_hex_color(get_theme_mod( 'button_info_text_hover_color','#fff' ));
    $button_success_background_color= sanitize_hex_color(get_theme_mod( 'button_success_background_color','#00ce6c' ));
    $button_success_background_hover_color= sanitize_hex_color(get_theme_mod( 'button_success_background_hover_color','#0b9b56' ));
    $button_success_text_color= sanitize_hex_color(get_theme_mod( 'button_success_text_color','#fff' ));
    $button_success_text_hover_color= sanitize_hex_color(get_theme_mod( 'button_success_text_hover_color','#fff' ));
     // button padding xl
     $circle_button_top_padding_xl_desktop= get_theme_mod( 'circle_button_top_padding_xl_desktop', '' );
     $circle_button_right_padding_xl_desktop= get_theme_mod( 'circle_button_right_padding_xl_desktop', '' );
     $circle_button_bottom_padding_xl_desktop= get_theme_mod( 'circle_button_bottom_padding_xl_desktop', '' );
     $circle_button_left_padding_xl_desktop= get_theme_mod( 'circle_button_left_padding_xl_desktop', '' );
     $circle_button_top_padding_xl_tablet = get_theme_mod( 'circle_button_top_padding_xl_tablet', '' );
     $circle_button_right_padding_xl_tablet = get_theme_mod( 'circle_button_right_padding_xl_tablet', '' );
     $circle_button_bottom_padding_xl_tablet = get_theme_mod( 'circle_button_bottom_padding_xl_tablet', '' );
     $circle_button_left_padding_xl_tablet = get_theme_mod( 'circle_button_left_padding_xl_tablet', '' );
     $circle_button_top_padding_xl_mobile = get_theme_mod( 'circle_button_top_padding_xl_mobile', '' );
     $circle_button_right_padding_xl_mobile = get_theme_mod( 'circle_button_right_padding_xl_mobile', '' );
     $circle_button_bottom_padding_xl_mobile = get_theme_mod( 'circle_button_bottom_padding_xl_mobile', '' );
     $circle_button_left_padding_xl_mobile = get_theme_mod( 'circle_button_left_padding_xl_mobile', '' );
     // button padding lg
     $circle_button_top_padding_lg_desktop= get_theme_mod( 'circle_button_top_padding_lg_desktop', '' );
     $circle_button_right_padding_lg_desktop= get_theme_mod( 'circle_button_right_padding_lg_desktop', '' );
     $circle_button_bottom_padding_lg_desktop= get_theme_mod( 'circle_button_bottom_padding_lg_desktop', '' );
     $circle_button_left_padding_lg_desktop= get_theme_mod( 'circle_button_left_padding_lg_desktop', '' );
     $circle_button_top_padding_lg_tablet = get_theme_mod( 'circle_button_top_padding_lg_tablet', '' );
     $circle_button_right_padding_lg_tablet = get_theme_mod( 'circle_button_right_padding_lg_tablet', '' );
     $circle_button_bottom_padding_lg_tablet = get_theme_mod( 'circle_button_bottom_padding_lg_tablet', '' );
     $circle_button_left_padding_lg_tablet = get_theme_mod( 'circle_button_left_padding_lg_tablet', '' );
     $circle_button_top_padding_lg_mobile = get_theme_mod( 'circle_button_top_padding_lg_mobile', '' );
     $circle_button_right_padding_lg_mobile = get_theme_mod( 'circle_button_right_padding_lg_mobile', '' );
     $circle_button_bottom_padding_lg_mobile = get_theme_mod( 'circle_button_bottom_padding_lg_mobile', '' );
     $circle_button_left_padding_lg_mobile = get_theme_mod( 'circle_button_left_padding_lg_mobile', '' );
     // button padding md
     $circle_button_top_padding_md_desktop= get_theme_mod( 'circle_button_top_padding_md_desktop', '' );
     $circle_button_right_padding_md_desktop= get_theme_mod( 'circle_button_right_padding_md_desktop', '' );
     $circle_button_bottom_padding_md_desktop= get_theme_mod( 'circle_button_bottom_padding_md_desktop', '' );
     $circle_button_left_padding_md_desktop= get_theme_mod( 'circle_button_left_padding_md_desktop', '' );
     $circle_button_top_padding_md_tablet = get_theme_mod( 'circle_button_top_padding_md_tablet', '' );
     $circle_button_right_padding_md_tablet = get_theme_mod( 'circle_button_right_padding_md_tablet', '' );
     $circle_button_bottom_padding_md_tablet = get_theme_mod( 'circle_button_bottom_padding_md_tablet', '' );
     $circle_button_left_padding_md_tablet = get_theme_mod( 'circle_button_left_padding_md_tablet', '' );
     $circle_button_top_padding_md_mobile = get_theme_mod( 'circle_button_top_padding_md_mobile', '' );
     $circle_button_right_padding_md_mobile = get_theme_mod( 'circle_button_right_padding_md_mobile', '' );
     $circle_button_bottom_padding_md_mobile = get_theme_mod( 'circle_button_bottom_padding_md_mobile', '' );
     $circle_button_left_padding_md_mobile = get_theme_mod( 'circle_button_left_padding_md_mobile', '' );
     // button padding sm
     $circle_button_top_padding_sm_desktop= get_theme_mod( 'circle_button_top_padding_sm_desktop', '' );
     $circle_button_right_padding_sm_desktop= get_theme_mod( 'circle_button_right_padding_sm_desktop', '' );
     $circle_button_bottom_padding_sm_desktop= get_theme_mod( 'circle_button_bottom_padding_sm_desktop', '' );
     $circle_button_left_padding_sm_desktop= get_theme_mod( 'circle_button_left_padding_sm_desktop', '' );
     $circle_button_top_padding_sm_tablet = get_theme_mod( 'circle_button_top_padding_sm_tablet', '' );
     $circle_button_right_padding_sm_tablet = get_theme_mod( 'circle_button_right_padding_sm_tablet', '' );
     $circle_button_bottom_padding_sm_tablet = get_theme_mod( 'circle_button_bottom_padding_sm_tablet', '' );
     $circle_button_left_padding_sm_tablet = get_theme_mod( 'circle_button_left_padding_sm_tablet', '' );
     $circle_button_top_padding_sm_mobile = get_theme_mod( 'circle_button_top_padding_sm_mobile', '' );
     $circle_button_right_padding_sm_mobile = get_theme_mod( 'circle_button_right_padding_sm_mobile', '' );
     $circle_button_bottom_padding_sm_mobile = get_theme_mod( 'circle_button_bottom_padding_sm_mobile', '' );
     $circle_button_left_padding_sm_mobile = get_theme_mod( 'circle_button_left_padding_sm_mobile', '' );
     // button padding xs
     $circle_button_top_padding_xs_desktop= get_theme_mod( 'circle_button_top_padding_xs_desktop', '' );
     $circle_button_right_padding_xs_desktop= get_theme_mod( 'circle_button_right_padding_xs_desktop', '' );
     $circle_button_bottom_padding_xs_desktop= get_theme_mod( 'circle_button_bottom_padding_xs_desktop', '' );
     $circle_button_left_padding_xs_desktop= get_theme_mod( 'circle_button_left_padding_xs_desktop', '' );
     $circle_button_top_padding_xs_tablet = get_theme_mod( 'circle_button_top_padding_xs_tablet', '' );
     $circle_button_right_padding_xs_tablet = get_theme_mod( 'circle_button_right_padding_xs_tablet', '' );
     $circle_button_bottom_padding_xs_tablet = get_theme_mod( 'circle_button_bottom_padding_xs_tablet', '' );
     $circle_button_left_padding_xs_tablet = get_theme_mod( 'circle_button_left_padding_xs_tablet', '' );
     $circle_button_top_padding_xs_mobile = get_theme_mod( 'circle_button_top_padding_xs_mobile', '' );
     $circle_button_right_padding_xs_mobile = get_theme_mod( 'circle_button_right_padding_xs_mobile', '' );
     $circle_button_bottom_padding_xs_mobile = get_theme_mod( 'circle_button_bottom_padding_xs_mobile', '' );
     $circle_button_left_padding_xs_mobile = get_theme_mod( 'circle_button_left_padding_xs_mobile', '' );
    $css = '
    a { color: ' . $ancher_tag_color . '; vertical-align: top; }
    a:hover { color: ' . $ancher_tag_hover_color . '; outline: 0; }  
    .site-content .wrapper { max-width: ' . $site_content_max_width . 'px; }
    .top-bar { padding-top: ' . $header_topbar_padding . 'px; padding-bottom: ' . $header_topbar_padding . 'px; background-color: ' . $header_topbar_bg_color . ' !important; border-bottom: 1px solid  ' .$header_topbar_border_bottom_color . '; }
    .top-bar .topbar-inner {  max-width: ' . $header_topbar_max_width . 'px; }
    footer#footer {clear:both; background: ' . $footer_bg_color . ' !important; color: ' . $footer_content_color . ';}
    footer#footer .footer-wrapper .footer-main { padding-top: ' . $footer_widget_padding_top_bottom . 'px; padding-bottom: ' . $footer_widget_padding_top_bottom . 'px; }
    footer#footer #bottom-footer { background: ' . $footer_copyright_bg_color . ' !important; padding-top: ' . $footer_copyright_padding_top_bottom . 'px; padding-bottom: ' . $footer_copyright_padding_top_bottom . 'px;}
    footer#footer #bottom-footer .copyright { color: ' . $footer_copyright_text_color . ' !important; }
    footer#footer .widget-title { margin-bottom: 20px !important; }
    footer#footer h3 { color: ' . $footer_content_color . '; margin-top: 0px; }
    footer#footer a, footer#footer a:hover { color: ' . $footer_links_color . '; }
    .page-header .header-wrap { text-align: ' . $page_header_content_position . ' }
    .page-header .header-wrap {  padding-top: ' . $page_header_padding . 'px; padding-bottom: ' . $page_header_padding . 'px; background-color: ' . $page_header_bg_color . ' !important; }
    .page-header .header-wrap .entry-header { max-width: ' . $page_header_width . 'px; }
    .page-header .header-wrap h4 { color: ' . $page_header_title_color . ' !important; }
    .breadcrumb-area { padding-top: ' . $breadcrumbs_padding . 'px; }
    .entry-breadcrumbs { color: ' . $breadcrumbs_current_link_color . ' !important; }
    .entry-breadcrumbs a { color: ' . $breadcrumbs_link_color . ' !important; }
    ul#site-menu  > li.menu-item > a, ul#site-menu  > li.page_item > a { color: ' . $navigation_link_color . '; font-weight: ' . $navigation_link_font_weight . '; }
    ul#site-menu  > li.menu-item > a:hover, ul#site-menu  > li.page_item > a:hover, 
    ul#site-menu  > li.menu-item.current_page_item > a, ul#site-menu  > li.page_item.current_page_item > a { color: ' . $navigation_link_color_hover . '; }
    .header-components i { color: ' . $navigation_icon_color . '; }
    .header-nav-wrapper { background-color: ' . $navigation_bg_color . '; }
   
    header.site-header { height: ' . $custom_header_height_desktop . 'px; background-color: ' . $header_bg_color . '; border-bottom: 1px solid  ' .$header_border_bottom . '; }
   
   

   
   
   
    header.site-header .header-wrapper .header-container-flex { max-width: ' . $header_site_header_max_width . 'px; }
    button.menu-toggle { background-color: ' . $menu_toggle . ' !important; }
    button.menu-toggle i { color: ' . $menu_toggle_icon . ' !important; }
    .toggled .menu-toggle { background-color: ' . $menu_toggled . ' !important; }
    .toggled .menu-toggle i { color: ' . $menu_toggled_icon . ' !important; }
    .navigation-bg-color { background-color: ' . $navigation_bg_color . '; }
    .scrolltop { right: ' . $scrolltop_side_offset . 'px; bottom: ' . $scrolltop_bottom_offset . 'px; border-radius: ' . $scrolltop_button_border_radius . 'px; background-color: ' . $scrolltop_bg_color . '; color: ' . $scrolltop_icon_color . ' ; padding: ' . $scrolltop_padding_desktop . 'px ; box-shadow: 0 0px 5px #e1e1e1; }
    .scrolltop:hover { background-color: ' . $scrolltop_bg_color_hover . ' ; color: ' . $scrolltop_icon_color_hover . ' ; box-shadow: 0 0px 5px #e1e1e1; }
    .scrolltop:before { content: "' .  $scrolltop_before . '" ; display:inline-block; vertical-align:middle; font-size: ' .  $scrolltop_icon_size . 'px ; }
    .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce a.button.loading:hover, .woocommerce ul.products li.product a.button:hover, .woocommerce-page ul.products li.product a.button:hover, .woocommerce .single-product div.product form.cart .button:hover,  .woocommerce.single-product div.product form.cart .button:hover, .woocommerce #respond input#submit.alt:hover,  .woocommerce a.button.alt:hover,  .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover { background: ' . $button_background_hover_color . '; color: ' . $button_text_hover_color . '; }
    .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce a.button.loading, .woocommerce ul.products li.product a.button, .woocommerce-page ul.products li.product a.button, .woocommerce .single-product div.product form.cart .button, .woocommerce.single-product div.product form.cart .button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt { background: ' . $button_background_color . ';  color: ' . $button_text_color . ';  text-transform: ' . $button_text_transform . '; }
    .elementor-button.elementor-size-xl { padding-top: ' . $circle_button_top_padding_xl_desktop . 'px; padding-right: ' . $circle_button_right_padding_xl_desktop . 'px; padding-bottom: ' . $circle_button_bottom_padding_xl_desktop . 'px; padding-left: ' . $circle_button_left_padding_xl_desktop . 'px; border-radius: ' . $button_border_radius . 'px !important; text-transform: ' . $button_text_transform . '; }
    .elementor-button.elementor-size-lg { padding-top: ' . $circle_button_top_padding_lg_desktop . 'px; padding-right: ' . $circle_button_right_padding_lg_desktop . 'px; padding-bottom: ' . $circle_button_bottom_padding_lg_desktop . 'px; padding-left: ' . $circle_button_left_padding_lg_desktop . 'px; border-radius: ' . $button_border_radius . 'px !important; text-transform: ' . $button_text_transform . '; } 
    .elementor-button.elementor-size-md { padding-top: ' . $circle_button_top_padding_md_desktop . 'px; padding-right: ' . $circle_button_right_padding_md_desktop . 'px; padding-bottom: ' . $circle_button_bottom_padding_md_desktop . 'px; padding-left: ' . $circle_button_left_padding_md_desktop . 'px; border-radius: ' . $button_border_radius . 'px !important; text-transform: ' . $button_text_transform . '; }
    .elementor-button.elementor-size-sm { padding-top: ' . $circle_button_top_padding_sm_desktop . 'px; padding-right: ' . $circle_button_right_padding_sm_desktop . 'px; padding-bottom: ' . $circle_button_bottom_padding_sm_desktop . 'px; padding-left: ' . $circle_button_left_padding_sm_desktop . 'px; border-radius: ' . $button_border_radius . 'px !important; text-transform: ' . $button_text_transform . '; }
    .elementor-button.elementor-size-xs { padding-top: ' . $circle_button_top_padding_xs_desktop . 'px; padding-right: ' . $circle_button_right_padding_xs_desktop . 'px; padding-bottom: ' . $circle_button_bottom_padding_xs_desktop . 'px; padding-left: ' . $circle_button_left_padding_xs_desktop . 'px; border-radius: ' . $button_border_radius . 'px !important; text-transform: ' . $button_text_transform . '; }
    .elementor-widget-button .elementor-button { background: ' . $button_background_color . '; color: ' . $button_text_color . '; padding-top: ' . $circle_button_top_padding_desktop . 'px; padding-right: ' . $circle_button_right_padding_desktop . 'px; padding-bottom: ' . $circle_button_bottom_padding_desktop . 'px; padding-left: ' . $circle_button_left_padding_desktop . 'px; border-radius: ' . $button_border_radius . 'px !important; font-size: ' . $button_font_size_desktop . 'px; text-transform: ' . $button_text_transform . ';}
    .elementor-widget-button .elementor-button:hover { background: ' . $button_background_hover_color . '; color: ' . $button_text_hover_color . ';}
    .elementor-element.elementor-button-success .elementor-button { background: ' . $button_success_background_color . ' !important; color: ' . $button_success_text_color . '; }
    .elementor-element.elementor-button-success .elementor-button:hover { background: ' . $button_success_background_hover_color . ' !important; color: ' . $button_success_text_hover_color . '; }
    .elementor-element.elementor-button-info .elementor-button { background: ' . $button_info_background_color . ' !important; color: ' . $button_info_text_color . '; }
    .elementor-element.elementor-button-info .elementor-button:hover { background: ' . $button_info_background_hover_color . ' !important; color: ' . $button_info_text_hover_color . '; }
    .elementor-element.elementor-button-warning .elementor-button { background: ' . $button_warning_background_color . ' !important; color: ' . $button_warning_text_color . '; }
    .elementor-element.elementor-button-warning .elementor-button:hover { background: ' . $button_warning_background_hover_color . ' !important; color: ' . $button_warning_text_hover_color . '; }
    .elementor-element.elementor-button-danger .elementor-button { background: ' . $button_danger_background_color . ' !important; color: ' . $button_danger_text_color . '; }
    .elementor-element.elementor-button-danger .elementor-button:hover { background: ' . $button_danger_background_hover_color . ' !important; color: ' . $button_danger_text_hover_color . '; }
    .btn-default, .button, button, a.button, .wp-block-button__link, input[type="button"], input[type="reset"], input[type="submit"] { padding-top: ' . $circle_button_top_padding_desktop . 'px; padding-right: ' . $circle_button_right_padding_desktop . 'px;   padding-bottom: ' . $circle_button_bottom_padding_desktop . 'px;  padding-left: ' . $circle_button_left_padding_desktop . 'px;  border-radius: ' . $button_border_radius . 'px;  font-size: ' . $button_font_size_desktop . 'px;  background: ' . $button_background_color . ';  color: ' . $button_text_color . ';  text-transform: ' . $button_text_transform . '; }
    .button:hover, button:hover, a.button:hover, .wp-block-button__link:hover, .btn-default:hover, .btn-default:focus, .button:focus,  button:focus, .button:focus, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover { background: ' . $button_background_hover_color . '; color: ' . $button_text_hover_color . '; }
    .woocommerce #respond input#submit.disabled, .woocommerce #respond input#submit:disabled, 
    .woocommerce #respond input#submit:disabled[disabled], .woocommerce a.button.disabled, .woocommerce a.button:disabled, 
    .woocommerce a.button:disabled[disabled], .woocommerce button.button.disabled, .woocommerce button.button:disabled, 
    .woocommerce button.button:disabled[disabled], .woocommerce input.button.disabled, .woocommerce input.button:disabled, 
    .woocommerce input.button:disabled[disabled] { background-color: #b5b5b5 !important; }
    h1, .h1, h1 p { font-weight: ' . $circle_h1_font_weight . '; font-size: ' .  $typography_h1_desktop . 'px ; text-transform: ' . $typography_h1_text_transform . '; color: ' . $typography_h1_text_color . '; }
    h2, .h2, h2 p { font-weight: ' . $circle_h2_font_weight . '; font-size: ' .  $typography_h2_desktop . 'px ; text-transform: ' . $typography_h2_text_transform . '; color: ' . $typography_h2_text_color . '; }
    h3, .h3, h3 p { font-weight: ' . $circle_h3_font_weight . '; font-size: ' .  $typography_h3_desktop . 'px ; text-transform: ' . $typography_h3_text_transform . '; color: ' . $typography_h3_text_color . '; }
    h4, .h4, h4 p { font-weight: ' . $circle_h4_font_weight . '; font-size: ' .  $typography_h4_desktop . 'px ; text-transform: ' . $typography_h4_text_transform . '; color: ' . $typography_h4_text_color . '; }
    h5, .h5, h5 p { font-weight: ' . $circle_h5_font_weight . '; font-size: ' .  $typography_h5_desktop . 'px ; text-transform: ' . $typography_h5_text_transform . '; color: ' . $typography_h5_text_color . '; }
    h6, .h6, h6 p { font-weight: ' . $circle_h6_font_weight . '; font-size: ' .  $typography_h6_desktop . 'px ; text-transform: ' . $typography_h6_text_transform . '; color: ' . $typography_h6_text_color . '; }
    p { font-size: ' .  $typography_p_desktop . 'px ; text-transform: ' . $typography_p_text_transform . '; color: ' . $typography_p_text_color . '; }
    @media (max-width: 767px) {
        button, a.button, .wp-block-button__link, input[type="button"], input[type="reset"], input[type="submit"] { padding-top: ' . $circle_button_top_padding_tablet . 'px; padding-right: ' . $circle_button_right_padding_tablet . 'px;   padding-bottom: ' . $circle_button_bottom_padding_tablet . 'px;  padding-left: ' . $circle_button_left_padding_tablet . 'px; font-size: ' . $button_font_size_tablet . 'px; }
        .scrolltop { padding: ' . $scrolltop_padding_tablet . 'px ; }
        h1, .h1, h1 p { font-size: ' .  $typography_h1_tablet . 'px ; }
        h2, .h2, h2 p { font-size: ' .  $typography_h2_tablet . 'px ; }
        h3, .h3, h3 p { font-size: ' .  $typography_h3_tablet . 'px ; }
        h4, .h4, h4 p { font-size: ' .  $typography_h4_tablet . 'px ; }
        h5, .h5, h5 p { font-size: ' .  $typography_h5_tablet . 'px ; }
        h6, .h6, h6 p { font-size: ' .  $typography_h6_tablet . 'px ; }
        p { font-size: ' .  $typography_p_tablet . 'px ; }
        header.site-header { height: ' . $custom_header_height_tablet . 'px ; }    
    }
    @media (max-width: 320px) {
        button, a.button, .wp-block-button__link, input[type="button"], input[type="reset"], input[type="submit"] { padding-top: ' . $circle_button_top_padding_mobile . 'px; padding-right: ' . $circle_button_right_padding_mobile . 'px;   padding-bottom: ' . $circle_button_bottom_padding_mobile . 'px;  padding-left: ' . $circle_button_left_padding_mobile . 'px;  font-size: ' . $button_font_size_mobile . 'px; }
        .scrolltop { padding: ' . $scrolltop_padding_mobile . 'px ; }
        h1, .h1, h1 p { font-size: ' .  $typography_h1_mobile . 'px ; }
        h2, .h2, h2 p { font-size: ' .  $typography_h2_mobile . 'px ; }
        h3, .h3, h3 p { font-size: ' .  $typography_h3_mobile . 'px ; }
        h4, .h4, h4 p { font-size: ' .  $typography_h4_mobile . 'px ; }
        h5, .h5, h5 p { font-size: ' .  $typography_h5_mobile . 'px ; }
        h6, .h6, h6 p { font-size: ' .  $typography_h6_mobile . 'px ; }
        p { font-size: ' .  $typography_p_mobile . 'px ; }
        header.site-header { height: ' . $custom_header_height_mobile . 'px ; }

    }
    ';
    if ( has_header_image() ) {
        $css .='     
        .site-header { background: url(' . $header_image . ') no-repeat !important; background-size: ' . ($size) .' !important; background-repeat: ' . ($repeat) .' !important; background-position: ' . ($position) .' !important; background-attachment: ' . ($attachment) .' !important; }
        ';  
    }
    if ( ! display_header_text() ) {
        $css .='     
        .site-title, .site-description { position: absolute; clip: rect(1px, 1px, 1px, 1px); }
        '; 
    }  else {
        $css .='  
        .site-title a { color: ' . $circle_site_title_color . ' ; }
        .site-description { color: ' . $circle_site_description_color . ' ; }
        '; 
    }
    /*  if user logged in */
    if ( ! is_admin_bar_showing() && is_customize_preview())  {
        $css .='
        .search-wrapper { margin-top: 30px !important; }
        ';
    }

return apply_filters( 'circle_dynamic_css_stylesheet', circle_minimize_css($css));
}