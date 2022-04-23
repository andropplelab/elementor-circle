<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
  * @package Elementor Circle
 */

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */

function circle_woocommerce_setup() {
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'circle_woocommerce_setup');

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
// add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
function circle_woocommerce_scripts()
{
    wp_enqueue_style('circle-woocommerce', get_template_directory_uri() . '/inc/woocommerce/woocommerce-min.css', array() , wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'circle_woocommerce_scripts');

/**
 * Products per page.
 *
 * @return integer number of products.
 */
function circle_woocommerce_products_per_page()
{
    return 16;
}
add_filter('loop_shop_per_page', 'circle_woocommerce_products_per_page');

/**
 * Product gallery thumnbail columns.
 *
 * @return integer number of columns.
 */
function circle_woocommerce_thumbnail_columns()
{
    return 4;
}
add_filter('woocommerce_product_thumbnails_columns', 'circle_woocommerce_thumbnail_columns');

/**
 * Default loop columns on product archives.
 *
 * @return integer products per row.
 */
function circle_woocommerce_loop_columns()
{
    return 4;
}
add_filter('loop_shop_columns', 'circle_woocommerce_loop_columns');

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function circle_woocommerce_related_products_args($args)
{
    $defaults = array(
        'posts_per_page' => 5,
        'columns' => 5,
    );

    $args = wp_parse_args($defaults, $args);

    return $args;
}
add_filter('woocommerce_output_related_products_args', 'circle_woocommerce_related_products_args');

/**
 * Product columns wrapper.
 *
 * @return  void
 */
if (!function_exists('circle_woocommerce_product_columns_wrapper'))
{
    function circle_woocommerce_product_columns_wrapper()
    {
        $columns = circle_woocommerce_loop_columns();
        echo '<div class="columns-' . absint($columns) . '">';
    }
}
add_action('woocommerce_before_shop_loop', 'circle_woocommerce_product_columns_wrapper', 40);

/**
 * Product columns wrapper close.
 *
 * @return  void
 */
if (!function_exists('circle_woocommerce_product_columns_wrapper_close'))
{
    function circle_woocommerce_product_columns_wrapper_close()
    {
        echo '</div>';
    }
}
add_action('woocommerce_after_shop_loop', 'circle_woocommerce_product_columns_wrapper_close', 40);

/**
 * Remove default WooCommerce wrapper.
 */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

/**
 * Before Content.
 *
 * Wraps all WooCommerce content in wrappers which match the theme markup.
 *
 * @return void
 */
if (!function_exists('circle_woocommerce_wrapper_before')) {
    function circle_woocommerce_wrapper_before()
    {
?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			<?php
    }
}
add_action('woocommerce_before_main_content', 'circle_woocommerce_wrapper_before');

/**
 * After Content.
 *
 * Closes the wrapping divs.
 *
 * @return void
 */
if (!function_exists('circle_woocommerce_wrapper_after')) {
    function circle_woocommerce_wrapper_after()
    {
?>
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php
    }
}
add_action('woocommerce_after_main_content', 'circle_woocommerce_wrapper_after');

/**
 * Returns true if current page is shop, product archive or product tag
 */
function circle_wc_archive_check() {
    if (is_shop() || is_product_category() || is_product_tag()) {
        return true;
    } 
    else {
        return false;
    }
}

/**
 * Remove sidebar
 */
function circle_remove_wc_sidebar_archives()
{
    $archive_check = circle_wc_archive_check();
    $shop_layout = get_theme_mod('shop_layout', 'shop-grid');

    if (($shop_layout == 'shop-grid' && $archive_check) || (is_product()))
    {
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
    }
}
add_action('wp', 'circle_remove_wc_sidebar_archives');

/**
 * Remove page title from archives
 */
add_filter('woocommerce_show_page_title', '__return_false');

/**
 * Remove headings from single product tabs
 */
add_filter('woocommerce_product_description_heading', '__return_false');
add_filter('woocommerce_product_additional_information_heading', '__return_false');

/**
 * Change breadcrumb separator and remove non-breaking spaces
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'circle_change_wc_breadcrumb_sep' );
function circle_change_wc_breadcrumb_sep( $defaults ) {
	$defaults['delimiter'] = ' &gt; ';
	return $defaults;
}

/**
 * quantity
 */
// quantity plus
add_action('woocommerce_after_add_to_cart_quantity', 'circle_quantity_plus_sign');
function circle_quantity_plus_sign() {
    echo '<button type="button" class="plus" >+</button>';
}
// quantity minus
add_action('woocommerce_before_add_to_cart_quantity', 'circle_quantity_minus_sign');
function circle_quantity_minus_sign()
{
    echo '<button type="button" class="minus" >-</button>';
}
add_action('wp_footer', 'circle_quantity_plus_minus');

function circle_quantity_plus_minus()
{
    // To run this on the single product page
    if (!is_product()) return;
}

/**
 * woocommece blocks
 */
function circle_wc_has_blocks() {
    // Check if page has woocommece blocks
    global $post;
    if ($post)
    {
        if (has_blocks($post))
        {
            $post_blocks = parse_blocks($post->post_content);
            foreach ($post_blocks as $block)
            {
                if (strpos($block['blockName'], 'woocommerce/') !== false)
                {
                    return true;
                }
            }
        }
    }
    return false;
}

/**
 * Checkout wrapper
 */
function circle_wrap_order_review_before()
{
    // Checkout wrapper
    echo '<div class="checkout-wrapper">';
}
add_action('woocommerce_checkout_before_order_review_heading', 'circle_wrap_order_review_before', 5);

function circle_wrap_order_review_after()
{
    // close Checkout wrapper
    echo '</div>';
}
add_action('woocommerce_checkout_after_order_review', 'circle_wrap_order_review_after', 15);

/**
 * cart Fragments.
 *
 * Ensure cart contents update when products are added to the cart via AJAX.
 *
 * @param array $fragments Fragments to refresh via AJAX.
 * @return array Fragments to refresh via AJAX.
 */
if (!function_exists('circle_woocommerce_cart_link_fragment'))
{
    function circle_woocommerce_cart_link_fragment($fragments)
    {
        ob_start();
        circle_woocommerce_cart_link();
        $fragments['a.cart-contents'] = ob_get_clean();

        return $fragments;
    }
}
add_filter('woocommerce_add_to_cart_fragments', 'circle_woocommerce_cart_link_fragment');

/**
 * cart Link.
 *
 * Displayed a link to the cart including the number of items present and the cart total.
 *
 * @return void
 */
if (!function_exists('circle_woocommerce_cart_link'))
{
    function circle_woocommerce_cart_link()
    {
	?>
		<a class="cart-contents" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr_e('View your shopping cart', 'elementor-circle'); ?>">
			<i class="an an-shopping-bag"></i><span class="iteam-count"><?php echo esc_html(WC() ->cart ->get_cart_contents_count()); ?></span>
		</a>
		<?php
    }
} 
