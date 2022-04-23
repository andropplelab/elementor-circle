<?php
/**
 * circle functions and definitions
 *
 * @link       https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package   elementor circle
 */

// Constants
if (!function_exists('circle_setup')):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */

    function circle_setup()
    {
        // Make theme available for translation.
        load_theme_textdomain('elementor-circle', get_template_directory() . '/languages');
        // Enable support for <title> tag.
        add_theme_support('title-tag');
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
            'widgets',
        ));
        // Add support for custom logo.
        add_theme_support('custom-logo', array(
            'height' => 48,
            'width' => 180,
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => array(
                'site-title',
                'site-description'
            ) ,
        ));
        // Register navigation menus.
        register_nav_menus(array(
            'topbar_menu' => esc_html__('Top Bar', 'elementor-circle') ,
            'menu-1' => esc_html__('Primary Menu', 'elementor-circle') ,
            'footer_menu' => esc_html__('Footer', 'elementor-circle') ,
        ));
        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');
        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support('post-thumbnails');
        // Add image size for blog posts
        add_image_size('circle-blog size', 1000, 500, true);
        // Add image size for page header
        add_image_size('circle-page-header size', 1920, 600, true);
        // Add image size for full width template
        add_image_size('circle-full-width size', 1600, 450, true);
        // Set Medium Image Sizes
        add_image_size('circle-square-medium size', 480, 480, true);
        add_image_size('circle-portrait-medium size', 340, 480, true);
        add_image_size('circle-landscape-medium size', 480, 340, true);
        add_image_size('circle-posts-thumbnail size', 320, 385, true);
        // Enable support for Post Formats.
        add_theme_support('post-formats', array(
            'aside',
            'gallery',
            'image',
            'link',
            'quote',
            'video',
            'audio',
            'status',
        ));
        //Excerpts in pages
        add_post_type_support('page', 'excerpt');
        // Add stylesheet for the WordPress editor.
        add_editor_style('/assets/css/editor-style.css');
        // Load regular editor styles into the new block-based editor.
        add_theme_support('editor-styles');
        // Add support for full and wide align images.
        add_theme_support('align-wide');
        // Add support for responsive embeds.
        add_theme_support('responsive-embeds');
        // Load default block styles.
        add_theme_support('wp-block-styles');
        // Remove theme support for new widgets block editor
        remove_theme_support('widgets-block-editor');
        //Enable support for header image
        add_theme_support('custom-header', apply_filters('circle_custom_header_args', array( // 'default-image' => '',
            'default-text-color' => '000000',
            'width' => 1920,
            'height' => 800,
            'flex-height' => true,
            'flex-width' => true,
            'random-default' => true,
            'video' => true,
        )));
    }

endif;
add_action('after_setup_theme', 'circle_setup');

/**
 * apple touch icon
 */

function circle__apple_touch_icon_filter($string)
{
    return strpos($string, 'apple-touch-icon') === false;
}

function circle__apple_touch_icon_remove_default($meta_tags)
{
    return array_filter($meta_tags, 'circle__apple_touch_icon_filter');
}

add_filter('site_icon_meta_tags', 'circle__apple_touch_icon_remove_default');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function circle_widgets_init()
{
    // sidebar
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'elementor-circle') ,
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'elementor-circle') ,
        'before_widget' => '<section class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    // footer section one
    register_sidebar(array(
        'name' => esc_html__('Footer section one', 'elementor-circle') ,
        'id' => 'footer-1',
        'description' => esc_html__('Add widgets here.', 'elementor-circle') ,
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<div class="widget-title"><h3>',
        'after_title' => '</h3></div>',
    ));
    // footer section two
    register_sidebar(array(
        'name' => esc_html__('Footer section two', 'elementor-circle') ,
        'id' => 'footer-2',
        'description' => esc_html__('Add widgets here.', 'elementor-circle') ,
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<div class="widget-title"><h3>',
        'after_title' => '</h3></div>',
    ));
    // footer section three
    register_sidebar(array(
        'name' => esc_html__('Footer section three', 'elementor-circle') ,
        'id' => 'footer-3',
        'description' => esc_html__('Add widgets here.', 'elementor-circle') ,
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<div class="widget-title"><h3>',
        'after_title' => '</h3></div>',
    ));
    // footer section four
    register_sidebar(array(
        'name' => esc_html__('Footer section four', 'elementor-circle') ,
        'id' => 'footer-4',
        'description' => esc_html__('Add widgets here.', 'elementor-circle') ,
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<div class="widget-title"><h3>',
        'after_title' => '</h3></div>',
    ));
    // header top left
    register_sidebar(array(
        'name' => esc_html__('Header Top Bar Left', 'elementor-circle') ,
        'id' => 'header-top-left',
        'description' => esc_html__('Add widgets here.', 'elementor-circle') ,
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<div class="widget-title"><h3>',
        'after_title' => '</h3></div>',
    ));
    // header top right
    register_sidebar(array(
        'name' => esc_html__('Header Top Bar Right', 'elementor-circle') ,
        'id' => 'header-top-right',
        'description' => esc_html__('Add widgets here.', 'elementor-circle') ,
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<div class="widget-title"><h3>',
        'after_title' => '</h3></div>',
    ));
}

add_action('widgets_init', 'circle_widgets_init');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */

function circle_content_width()
{
    $GLOBALS['content_width'] = apply_filters('circle_content_width', 1500);
}

add_action('after_setup_theme', 'circle_content_width', 0);
function circle_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    /* check for minified styles */
    if (true === get_theme_mod('circle_enable_minify_styles', true))
    {
        wp_enqueue_style('amazingneo', get_template_directory_uri() . '/assets/third-party/amazing-neo/amazing-neo-2.0.0.css', array() , '1.2.0');
        wp_enqueue_style('circle-blocks-frontend', get_template_directory_uri() . '/assets/css/blocks-frontend.css', array() , wp_get_theme()->get('Version'));
        wp_enqueue_style('circle-style', get_template_directory_uri() . '/assets/css/style.css', array() , wp_get_theme()
            ->get('Version'));
        if (is_singular() && has_blocks())
        {
            wp_enqueue_style('circle-blocks-frontend', get_template_directory_uri() . '/assets/css/blocks-frontend.css', array() , wp_get_theme()
                ->get('Version'));
        }
    }
    else
    {
        wp_enqueue_style('amazingneo', get_template_directory_uri() . '/assets/third-party/amazing-neo/amazing-neo-2.0.0.css', array() , '1.2.0');
        wp_enqueue_style('circle-style', get_template_directory_uri() . '/assets/css/style.css', array() , wp_get_theme()
            ->get('Version'));
        if (is_singular() && has_blocks())
        {
            wp_enqueue_style('circle-blocks-frontend', get_template_directory_uri() . '/assets/css/blocks-frontend.css', array() , wp_get_theme()
                ->get('Version'));
        }
    }
    if (is_singular() && comments_open() && get_option('thread_comments'))
    {
        wp_enqueue_script('comment-reply');
    }
    /* check for minified scripts */
    if (true === get_theme_mod('circle_enable_minify_scripts', true))
    {
        wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array() , wp_get_theme()
            ->get('Version'));
        wp_enqueue_script('circle-script', get_template_directory_uri() . '/assets/js/script.js', array() , wp_get_theme()
            ->get('Version'));
    }
    else
    {
        wp_enqueue_script('circle-script', get_template_directory_uri() . '/assets/js/script.js', array() , wp_get_theme()
            ->get('Version'));
    }
}

add_action('wp_enqueue_scripts', 'circle_scripts');

/**
* Registering block styles
*/

  register_block_style(
    'core/heading',
    array(
      'name'         => 'elementor-circle-block-styles-core-heading-add',
      'label'        => 'Add',
      'style_handle' => 'elementor-circle-block-styles-core-heading',
      // 'inline_style' => '.wp-block-heading.is-style-heading-add , .is-style-heading-add { color: blue; }',
      )
  );

/**
* Registering block pattern
*/

register_block_pattern(
    'elementor-circle/my-awesome-pattern',
    array(
        'title'       => __( 'Two buttons', 'elementor-circle' ),
        'description' => _x( 'Two horizontal buttons, the left button is filled in, and the right button is outlined.', 'Block pattern description', 'elementor-circle' ),
        'content'     => "<!-- wp:buttons {\"align\":\"center\"} -->\n<div class=\"wp-block-buttons aligncenter\"><!-- wp:button {\"backgroundColor\":\"very-dark-gray\",\"borderRadius\":0} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-background has-very-dark-gray-background-color no-border-radius\">" . esc_html__( 'Button One', 'elementor-circle' ) . "</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button {\"textColor\":\"very-dark-gray\",\"borderRadius\":0,\"className\":\"is-style-outline\"} -->\n<div class=\"wp-block-button is-style-outline\"><a class=\"wp-block-button__link has-text-color has-very-dark-gray-color no-border-radius\">" . esc_html__( 'Button Two', 'elementor-circle' ) . "</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->",
    )
);

/**
 * Adds the meta tag to the site header
 */

 function meta_viewport()
{
    // Meta viewport.
    $viewport = '<meta name="viewport" content="width=device-width, initial-scale=1">';
    // Apply filters for child theme tweaking.
    echo apply_filters('circle_meta_viewport', $viewport); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

/**
 * Display Dynamic CSS.
 */

function  circle_dynamic_css_wrap() {

    // require_once( get_parent_theme_file_path( '/assets/css/dynamic.css.php' ) );

    require get_template_directory() . '/assets/css/dynamic.css.php';



  ?>
    <style type="text/css" id="circle-dynamic-style">
        <?php echo circle_dynamic_css_stylesheet(); ?>
    </style>
  <?php }
  add_action( 'wp_head', 'circle_dynamic_css_wrap' );
  
/**
 * Check WooCommerce is active 
 */

if (!function_exists('circle_is_woocommerce_activated')):
    function circle_is_woocommerce_activated()
    {
        if (class_exists('woocommerce'))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

endif;

/**
 * Display Header icon.
 */

if (!function_exists('circle_header_components'))
{
    function circle_header_components()
    {
    ?><?php get_theme_mod('circle_enable_header_components');
    ?><div class="header-components"><?php $enable_search = get_theme_mod('circle_header_component_search', 'true');
        if ($enable_search): ?> <div class="search"> <div class="search-wrapper-toggle"><span><i class="an an-search"></i></span> </div> </div> <!-- .search toggle --> <?php
        endif;
    ?><?php $circle_header_component_cart = get_theme_mod('circle_header_component_cart', 'true');
        if ($circle_header_component_cart): ?><div class="site-header-cart"><?php if (function_exists('circle_woocommerce_cart_link'))
            {
                echo '<a class="header-item wc-account-link" href="' . esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))) . '"
    title="' . esc_html__('Your account', 'elementor-circle') . '"><i class="an an-user">' . '</i></a>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                circle_woocommerce_cart_link();
            }
    ?></div><!-- .WooCommerce show cart and accout icon --><?php
        endif;
    ?></div><?php
    }
}

/**
 * Custom search form
 */

function circle_search_form($form)
{
    $form = '<div class="search-wrapper">
 <form get_search_form() method="get" class="searchform" action="' . esc_url(home_url('/')) . '"><div class="search-form-input-wrap"><input type="text" value="' . get_search_query() . '" class="search" name="s" id="s" placeholder="' . esc_attr__('Search here', 'elementor-circle') . '"><button for="searchsubmit" class="search-icon" type="submit" id="searchsubmit" value="' . esc_attr__('Search', 'elementor-circle') . '"><i class="an an-search"></i></button><span class="search-wrapper-toggle"><i class="an an-times"></i></span></div></form></div>';
    return $form;
}

add_filter('get_search_form', 'circle_search_form', 50);

/**
 * rss avatar
 */

add_filter('the_excerpt_rss', 'circle_feed_post_thumbnail');
add_filter('the_content_feed', 'circle_feed_post_thumbnail');
if (!function_exists('circle_default_avatar'))
{
    function circle_default_avatar($avatar_defaults)
    {
        $circle_avatar = get_template_directory_uri() . '/assets/images/default.png';
        $avatar_defaults[$circle_avatar] = get_bloginfo('name');
        return $avatar_defaults;
    }
}

add_filter('avatar_defaults', 'circle_default_avatar');

/**
 * support for svg
 */
// function enable_svg_upload($upload_mimes) { $upload_mimes['svg'] = 'image/svg+xml';  $upload_mimes['svgz'] = 'image/svg+xml'; return $upload_mimes; } add_filter('upload_mimes', 'enable_svg_upload', 10, 1);

/**
 * support for Elementor
 *
 * @param bool $with_html_content Optional. Whether to return the data with
 *                                HTML content or without. Used for caching.
 *                                Default is false, without HTML.
 *
 * @return array Element raw data.
*/

function get_raw_data($with_html_content = true)
{
    $data = $this->get_data();
    $elements = [];
    foreach ($this->get_children() as $child)
    {
        $elements[] = $child->get_raw_data($with_html_content);
    }
    return ['id' => $this->get_id() , 'elType' => $data['elType'], 'settings' => $data['settings'], 'elements' => $elements, 'isInner' => $data['isInner'], ];
}

/**
 * Get unique selector.
 */

function get_unique_selector()
{
    return '.elementor-element-' . $this->get_id();
}

/**
 * Register the required plugins for this theme.
 */

function circle_register_required_plugins()
{
    $plugins = array(
        array(
            'name' => 'Elementor Page Builder',
            'slug' => 'elementor',
            'source' => '',
            'required' => false,
            'force_activation' => false,
        ) ,
        array(
            'name' => 'Contact Form 7',
            'slug' => 'contact-form-7',
            'source' => '',
            'required' => false,
            'force_activation' => false,
        ) ,
        array(
            'name' => 'one click demo import',
            'slug' => 'one-click-demo-import',
            'source' => '',
            'required' => false,
            'force_activation' => false,
        ) ,
    );
    $config = array(
        'id' => 'elementor-circle',
        'default_path' => '',
        'menu' => 'tgmpa-install-plugins',
        'has_notices' => true,
        'dismissable' => true,
        'dismiss_msg' => '',
        'is_automatic' => false,
        'message' => '',
        'strings' => array()
    );
    tgmpa($plugins, $config);
}

add_action('tgmpa_register', 'circle_register_required_plugins');

function ocdi_register_plugins( $plugins ) {
    $theme_plugins = [
      [ 
        'name'     => 'Elementor Page Builder',                  // Name of the plugin.
        'description' => 'Elementor is the platform web creators choose to build professional WordPress websites',
        'slug'     => 'elementor',                               // Plugin slug - the same as on WordPress.org plugin repository.
        'required' => true,                                      // If the plugin is required or not.
      ],

      [ 
        'name'     => 'Contact Form 7',                           // Name of the plugin.
        'description' => 'Contact Form 7 can manage multiple contact forms',
        'slug'     => 'contact-form-7',                           // Plugin slug - the same as on WordPress.org plugin repository.
        'required' => true,                                      // If the plugin is required or not.
      ],

      [ 
        'name'     => 'WooCommerce',                              // Name of the plugin.
        'description' => 'WooCommerce is a customizable, open-source eCommerce platform built on WordPress',
        'slug'     => 'WooCommerce',                              // Plugin slug - the same as on WordPress.org plugin repository.
        'preselected' => true,                                    // If the plugin is required or not.
        
      ],

      [ 
        'name'     => 'Amazing Neo Icon Font',                    // Name of the plugin.
        'description' => 'Amazing Neo is a Icon Font for elementor',
        'slug'     => 'amazing-neo-icon-font-for-elementor',      // Plugin slug - the same as on WordPress.org plugin repository.
        'required' => true,                                       // If the plugin is required or not.
      ],

      [
        'name'        => 'Circle Light',
        'description' => 'Circle Light is a supported plugin for elementor Circle',
        'slug'        => 'self-hosted-plugin',                   // The slug has to match the extracted folder from the zip.
        'source'      => 'https://circlethemes.com/wp-content/uploads/demo/elementor-circle/plugins/circle-light.zip',
        'required' => true,
      ],
    ];
   
    return array_merge( $plugins, $theme_plugins );
  }
  add_filter( 'ocdi/register_plugins', 'ocdi_register_plugins' );