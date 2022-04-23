<?php
/**
 * circle Theme social icons
  *
 * @package   elementor circle
 * 
 */

 if( !function_exists('circle_social_links') ){
	function circle_social_links(){
		$facebook = get_theme_mod('circle_social_facebook');
		$twitter = get_theme_mod('circle_social_twitter');
		$youtube = get_theme_mod('circle_social_youtube');
		$behance = get_theme_mod('circle_social_behance');
		$blogger = get_theme_mod('circle_social_blogger');
		$deviantart = get_theme_mod('circle_social_deviantart');
		$dribbble = get_theme_mod('circle_social_dribbble');
		$dropbox = get_theme_mod('circle_social_dropbox');
		$flickr = get_theme_mod('circle_social_flickr');
		$instagram = get_theme_mod('circle_social_instagram');
		$invision = get_theme_mod('circle_social_invision');
		$lastfm = get_theme_mod('circle_social_lastfm');
		$mix = get_theme_mod('circle_social_mix');
		$myspace = get_theme_mod('circle_social_myspace');
		$reddit = get_theme_mod('circle_social_reddit');
		$rss = get_theme_mod('circle_social_rss');
		$slack = get_theme_mod('circle_social_slack');
		$skype = get_theme_mod('circle_social_skype');
		$rss = get_theme_mod('circle_social_rss');
		$slack = get_theme_mod('circle_social_slack');
		$tumblr = get_theme_mod('circle_social_tumblr');
		$viber = get_theme_mod('circle_social_viber');
		$vimeo = get_theme_mod('circle_social_vimeo');
		$vine = get_theme_mod('circle_social_vine');
		$vk = get_theme_mod('circle_social_vk');
		$wechat = get_theme_mod('circle_social_wechat');
		$whatsapp = get_theme_mod('circle_social_whatsapp');
		$linkedin = get_theme_mod('circle_social_linkedin');
		$pinterest = get_theme_mod('circle_social_pinterest');
		$snapchat = get_theme_mod('circle_social_snapchat');
		$waze = get_theme_mod('circle_social_waze');
		$yelp = get_theme_mod('circle_social_yelp');
		$apple = get_theme_mod('circle_social_apple');
		$android = get_theme_mod('circle_social_android');

		if($facebook) echo '<li><a href="'.esc_url( $facebook ).'" target="_blank"><i class="anb an-facebook"></i></a></li>';
		if($twitter) echo '<li><a href="'.esc_url( $twitter ).'" target="_blank"><i class="anb an-twitter"></i></a></li>';
		if($youtube) echo '<li><a href="'.esc_url( $youtube ).'" target="_blank"><i class="anb an-youtube"></i></a></li>';
		if($behance) echo '<li><a href="'.esc_url( $behance ).'" target="_blank"><i class="anb an-behance"></i></a></li>';
		if($blogger) echo '<li><a href="'.esc_url( $blogger ).'" target="_blank"><i class="anb an-blogger"></i></a></li>';
		if($deviantart) echo '<li><a href="'.esc_url( $deviantart ).'" target="_blank"><i class="anb an-deviantart"></i></a></li>';
		if($dribbble) echo '<li><a href="'.esc_url( $dribbble ).'" target="_blank"><i class="anb an-dribbble"></i></a></li>';
		if($dropbox) echo '<li><a href="'.esc_url( $dropbox ).'" target="_blank"><i class="anb an-dropbox"></i></a></li>';
		if($flickr) echo '<li><a href="'.esc_url( $flickr ).'" target="_blank"><i class="anb an-flickr"></i></a></li>';
		if($instagram) echo '<li><a href="'.esc_url( $instagram ).'" target="_blank"><i class="anb an-instagram"></i></a></li>';
		if($invision) echo '<li><a href="'.esc_url( $invision ).'" target="_blank"><i class="anb an-invision"></i></a></li>';
		if($lastfm) echo '<li><a href="'.esc_url( $lastfm ).'" target="_blank"><i class="anb an-lastfm"></i></a></li>';
		if($mix) echo '<li><a href="'.esc_url( $mix ).'" target="_blank"><i class="anb an-mix"></i></a></li>';
		if($myspace) echo '<li><a href="'.esc_url( $myspace ).'" target="_blank"><i class="anb an-myspace"></i></a></li>';
		if($reddit) echo '<li><a href="'.esc_url( $reddit ).'" target="_blank"><i class="anb an-reddit"></i></a></li>';
		if($rss) echo '<li><a href="'.esc_url( $rss ).'" target="_blank"><i class="anb an-rss"></i></a></li>';
		if($slack) echo '<li><a href="'.esc_url( $slack ).'" target="_blank"><i class="anb an-slack"></i></a></li>';
		if($skype) echo '<li><a href="'.esc_url( $skype ).'" target="_blank"><i class="anb an-skype"></i></a></li>';
		if($tumblr) echo '<li><a href="'.esc_url( $tumblr ).'" target="_blank"><i class="anb an-tumblr"></i></a></li>';
		if($viber) echo '<li><a href="'.esc_url( $viber ).'" target="_blank"><i class="anb an-viber"></i></a></li>';
		if($vimeo) echo '<li><a href="'.esc_url( $vimeo ).'" target="_blank"><i class="anb an-vimeo"></i></a></li>';
		if($vine) echo '<li><a href="'.esc_url( $vine ).'" target="_blank"><i class="anb an-vine"></i></a></li>';
		if($vk) echo '<li><a href="'.esc_url( $vk ).'" target="_blank"><i class="anb an-vk"></i></a></li>';
		if($wechat) echo '<li><a href="'.esc_url( $wechat ).'" target="_blank"><i class="anb an-wechat"></i></a></li>';
		if($whatsapp) echo '<li><a href="'.esc_url( $whatsapp ).'" target="_blank"><i class="anb an-whatsapp"></i></a></li>';
		if($linkedin) echo '<li><a href="'.esc_url( $linkedin ).'" target="_blank"><i class="anb an-linkedin-in"></i></a></li>';
		if($pinterest) echo '<li><a href="'.esc_url( $pinterest ).'" target="_blank"><i class="anb an-pinterest"></i></a></li>';
		if($snapchat) echo '<li><a href="'.esc_url( $snapchat ).'" target="_blank"><i class="anb an-snapchat"></i></a></li>';
		if($waze) echo '<li><a href="'.esc_url( $waze ).'" target="_blank"><i class="anb an-waze"></i></a></li>';
		if($yelp) echo '<li><a href="'.esc_url( $yelp ).'" target="_blank"><i class="anb an-yelp"></i></a></li>';
		if($apple) echo '<li><a href="'.esc_url( $apple ).'" target="_blank"><i class="anb an-apple"></i></a></li>';
		if($android) echo '<li><a href="'.esc_url( $android ).'" target="_blank"><i class="anb an-android"></i></a></li>';
	}
}
add_action( 'circle_topbar_social', 'circle_social_links', 10);

function beshar_customizer($wp_customize) {

	$wp_customize->add_section( 'circle_social_icons_section', array(
		'title'	=> __( 'Social Icons', 'elementor-circle' ),
	));
	// title
	$wp_customize->add_setting('label_social_icons_setting', array(
		'sanitize_callback' => 'circle_sanitize_title',
	));
	$wp_customize->add_control(new circle_Title_Info_Control($wp_customize, 'label_social_icons_setting', array(
		'label' => esc_html__('Social Icons', 'elementor-circle') ,
		'section' => 'circle_social_icons_section',
		'type' => 'title',
		'settings' => 'label_social_icons_setting',
	)));
	$wp_customize->selective_refresh->add_partial(
		'label_social_icons_setting', 
		array(
			'selector' => '.social-icon',
		)
	);
	// facebook
	$wp_customize->add_setting( 'circle_social_facebook', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_facebook', array(
		'settings'		=> 'circle_social_facebook',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Facebook', 'elementor-circle' )
	));
	// twitter
	$wp_customize->add_setting( 'circle_social_twitter', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_twitter', array(
		'settings'		=> 'circle_social_twitter',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Twitter', 'elementor-circle' )
	));
	// linkedin
	$wp_customize->add_setting( 'circle_social_linkedin', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_linkedin', array(
		'settings'		=> 'circle_social_linkedin',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Linkedin', 'elementor-circle' )
	));
	// pinterest
	$wp_customize->add_setting( 'circle_social_pinterest', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_pinterest', array(
		'settings'		=> 'circle_social_pinterest',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Pinterest', 'elementor-circle' )
	));
	// behance
	$wp_customize->add_setting( 'circle_social_behance', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_behance', array(
		'settings'		=> 'circle_social_behance',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Behance', 'elementor-circle' )
	));
	// blogger
	$wp_customize->add_setting( 'circle_social_blogger', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_blogger', array(
		'settings'		=> 'circle_social_blogger',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Blogger', 'elementor-circle' )
	));
	// deviantart
	$wp_customize->add_setting( 'circle_social_deviantart', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_deviantart', array(
		'settings'		=> 'circle_social_deviantart',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Deviantart', 'elementor-circle' )
	));
	// dribbble
	$wp_customize->add_setting( 'circle_social_dribbble', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_dribbble', array(
		'settings'		=> 'circle_social_dribbble',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Dribbble', 'elementor-circle' )
	));
	// dropbox
	$wp_customize->add_setting( 'circle_social_dropbox', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_dropbox', array(
		'settings'		=> 'circle_social_dropbox',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Dropbox', 'elementor-circle' )
	));
	// flickr
	$wp_customize->add_setting( 'circle_social_flickr', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_flickr', array(
		'settings'		=> 'circle_social_flickr',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Flickr', 'elementor-circle' )
	));
	// instagram
	$wp_customize->add_setting( 'circle_social_instagram', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_instagram', array(
		'settings'		=> 'circle_social_instagram',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Instagram', 'elementor-circle' )
	));
	// rss
	$wp_customize->add_setting( 'circle_social_rss', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_rss', array(
		'settings'		=> 'circle_social_rss',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Rss', 'elementor-circle' )
	));
	// tumblr
	$wp_customize->add_setting( 'circle_social_tumblr', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_tumblr', array(
		'settings'		=> 'circle_social_tumblr',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Tumblr', 'elementor-circle' )
	));
	// invision
	$wp_customize->add_setting( 'circle_social_invision', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_invision', array(
		'settings'		=> 'circle_social_invision',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Invision', 'elementor-circle' )
	));
	// mix
	$wp_customize->add_setting( 'circle_social_mix', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_mix', array(
		'settings'		=> 'circle_social_mix',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Mix', 'elementor-circle' )
	));
	// myspace
	$wp_customize->add_setting( 'circle_social_myspace', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_myspace', array(
		'settings'		=> 'circle_social_myspace',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Myspace', 'elementor-circle' )
	));
	// reddit
	$wp_customize->add_setting( 'circle_social_reddit', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_reddit', array(
		'settings'		=> 'circle_social_reddit',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Reddit', 'elementor-circle' )
	));
	// slack
	$wp_customize->add_setting( 'circle_social_slack', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_slack', array(
		'settings'		=> 'circle_social_slack',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'slack', 'elementor-circle' )
	));
	// viber
	$wp_customize->add_setting( 'circle_social_viber', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_viber', array(
		'settings'		=> 'circle_social_viber',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Viber', 'elementor-circle' )
	));
	// vk
	$wp_customize->add_setting( 'circle_social_vk', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_vk', array(
		'settings'		=> 'circle_social_vk',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Vk', 'elementor-circle' )
	));
	// wechat
	$wp_customize->add_setting( 'circle_social_wechat', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_wechat', array(
		'settings'		=> 'circle_social_wechat',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Wechat', 'elementor-circle' )
	));
	// whatsapp
	$wp_customize->add_setting( 'circle_social_whatsapp', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_whatsapp', array(
		'settings'		=> 'circle_social_whatsapp',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Whatsapp', 'elementor-circle' )
	));
	// skype
	$wp_customize->add_setting( 'circle_social_skype', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_skype', array(
		'settings'		=> 'circle_social_skype',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Skype', 'elementor-circle' )
	));
	// snapchat
	$wp_customize->add_setting( 'circle_social_snapchat', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_snapchat', array(
		'settings'		=> 'circle_social_snapchat',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Snapchat', 'elementor-circle' )
	));
	// yelp
	$wp_customize->add_setting( 'circle_social_yelp', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_yelp', array(
		'settings'		=> 'circle_social_yelp',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Yelp', 'elementor-circle' )
	));
	// youtube
	$wp_customize->add_setting( 'circle_social_youtube', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_youtube', array(
		'settings'		=> 'circle_social_youtube',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Youtube', 'elementor-circle' )
	));
	// vimeo
	$wp_customize->add_setting( 'circle_social_vimeo', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_vimeo', array(
		'settings'		=> 'circle_social_vimeo',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Vimeo', 'elementor-circle' )
	));
	// apple
	$wp_customize->add_setting( 'circle_social_apple', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_apple', array(
		'settings'		=> 'circle_social_apple',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Apple', 'elementor-circle' )
	));
	// android
	$wp_customize->add_setting( 'circle_social_android', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'circle_social_android', array(
		'settings'		=> 'circle_social_android',
		'section'		=> 'circle_social_icons_section',
		'type'			=> 'url',
		'label'			=> __( 'Android', 'elementor-circle' )
	));
	
}
add_action('customize_register', 'beshar_customizer');
