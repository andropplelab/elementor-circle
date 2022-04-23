
<?php
/**
 * Theme information
 *
  * @package Elementor Circle
 */
define('CIRCLE_THEME_URL','https://elementorcircle.circlethemes.com/');
define('CIRCLE_THEME_DOC_URL','https://circlethemes.com/elementor-circle/circle-documentation/');
define('CIRCLE_THEME_SUPPORT_URL','https://wordpress.org/support/theme/elementor-circle/');
define('CIRCLE_THEME_RATINGS_URL','https://wordpress.org/support/theme/elementor-circle/reviews/');

/**
 *  Adding a About circle Theme 
 */
add_action('admin_menu', 'circle_add_menu');

function circle_add_menu() {
     add_theme_page(esc_html__('About Elementor Circle','elementor-circle'), esc_html__('About Elementor Circle','elementor-circle'),'manage_options', 
	 esc_html__('circle-theme-info','elementor-circle'), esc_html__('circle_theme_info','elementor-circle'));
}

/**
* Admin Scripts
*/
if ( ! function_exists( 'circle_admin_scripts' ) ) :
	function circle_admin_scripts($hook) {
	  if('appearance_page_circle-theme-info' != $hook)
		return;  
	  wp_enqueue_style( 'circle-info-css', get_template_directory_uri() . '/inc/admin/theme-info.css', false );  
	}
	endif;
	add_action( 'admin_enqueue_scripts', 'circle_admin_scripts' );

/**
 *  Callback
 */
function circle_theme_info() {
?>
	<div class="circle-info">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="title">
						<h2><?php esc_html_e( 'Thank you for using Elementor Circle WordPress theme', 'elementor-circle' ); ?></h2>
						<div class="title-content">
							<p><?php esc_html_e( 'Elementor Circle is a WordPress theme built for popular drag and drop Elementor page builder. Compatible with WooCommerce. Circle is Search Engine Optimized (SEO) friendly, mobile responsive, translation ready theme and is compatible with most of the popular plugins. Circle is a fast, simple and easy to customize!', 'elementor-circle' ); ?></p>
						</div>
					</div>
			</div>
			</div>
			<div class="row">
				<div class="col-3">
					<div class="section-box">
						<div class="icon">
							<span class="dashicons dashicons-visibility"></span>
						</div>
						<div class="heading">
							<h3><a href="<?php echo esc_url(CIRCLE_THEME_URL); ?>" target="_blank"><?php esc_html_e( 'VIEW DEMO', 'elementor-circle' ); ?></a></h3>
						</div>						
					</div>
				</div>
				<div class="col-3">
					<div class="section-box">
						<div class="icon">
							<span class="dashicons dashicons-format-aside"></span>
						</div>
						<div class="heading">
							<h3><a href="<?php echo esc_url(CIRCLE_THEME_DOC_URL); ?>" target="_blank"><?php esc_html_e( 'VIEW DOCUMENTATION', 'elementor-circle' ); ?></a></h3>
						</div>						
					</div>
				</div>
				
				<div class="col-3">
					<div class="section-box">
						<div class="icon">
							<span class="dashicons dashicons-sos"></span>
						</div>
						<div class="heading">
							<h3><a href="<?php echo esc_url(CIRCLE_THEME_SUPPORT_URL); ?>" target="_blank"><?php esc_html_e( 'ASK FOR SUPPORT', 'elementor-circle' ); ?></a></h3>
						</div>						
					</div>
				</div>
			
				<div class="col-3">
					<div class="section-box">
						<div class="icon">
							<span class="dashicons dashicons-star-filled"></span>
						</div>
						<div class="heading">
							<h3><a href="<?php echo esc_url(CIRCLE_THEME_RATINGS_URL); ?>" target="_blank"><?php esc_html_e( 'RATE OUR THEME', 'elementor-circle' ); ?></a></h3>
						</div>						
					</div>
				</div>
			</div>	

			<div class="row">
				<div class="col-12">
					<div class="comp-box">
						<h2 class="table-heading text-center"><?php esc_html_e( 'Circle Feature', 'elementor-circle' ); ?></h2>
						<div class="comp-table">
							<table>
								<thead> 
									<tr> 
										<td class="thead-column1"><strong><h4><?php esc_html_e( 'Feature', 'elementor-circle' ); ?></h4></strong></td>
										<td class="thead-column2"><strong><h4><?php esc_html_e( 'elementor-circle', 'elementor-circle' ); ?></h4></strong></td>
									</tr> 
								</thead>
								<tbody>
									<tr> 
										<td class="tbody-column1"><?php esc_html_e( 'Favicon, Logo, Title and Tagline Customization', 'elementor-circle' ); ?></td>
										<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr> 
										<td class="tbody-column1"><?php esc_html_e( 'Customizer Theme Options', 'elementor-circle' ); ?></td>
										<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr> 
										<td class="tbody-column1"><?php esc_html_e( 'Sidebar Options (Full, and Right)', 'elementor-circle' ); ?></td>
										<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr> 
										<td class="tbody-column1"><?php esc_html_e( 'Customizable Header', 'elementor-circle' ); ?></td>
										<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr> 
										<td class="tbody-column1"><?php esc_html_e( 'Color Option', 'elementor-circle' ); ?></td>
										<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr> 
										<td class="tbody-column1"><?php esc_html_e( 'Footer Options', 'elementor-circle' ); ?></td>
										<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr> 
										<td class="tbody-column1"><?php esc_html_e( 'Scroll To Top', 'elementor-circle' ); ?></td>
										<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr> 
										<td class="tbody-column1"><?php esc_html_e( 'Page Header', 'elementor-circle' ); ?></td>
										<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr> 
										<td class="tbody-column1"><?php esc_html_e( 'Breadcrumb Display', 'elementor-circle' ); ?></td>
										<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr> 
										<td class="tbody-column1"><?php esc_html_e( 'Header Search', 'elementor-circle' ); ?></td>
										<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr> 
										<td class="tbody-column1"><?php esc_html_e( 'Typography Option', 'elementor-circle' ); ?></td>
										<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr> 
										<td class="tbody-column1"><?php esc_html_e( 'WooCommerce Ready', 'elementor-circle' ); ?></td>
										<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr> 
										<td class="tbody-column1"><?php esc_html_e( 'Additional JS Option', 'elementor-circle' ); ?></td>
										<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr> 
										<td class="tbody-column1"><?php esc_html_e( 'Preloader', 'elementor-circle' ); ?></td>
										<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
									<tr> 
										<td class="tbody-column1"><?php esc_html_e( 'Customizing Responsive Option', 'elementor-circle' ); ?></td>
										<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr> 
										<td class="tbody-column1"><?php esc_html_e( 'Contact Form', 'elementor-circle' ); ?></td>
										<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr> 
										<td class="tbody-column1"><?php esc_html_e( 'Elementor Page Builder', 'elementor-circle' ); ?></td>
										<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
									</tr>
									<tr class="last-row"> 
										<td class="tbody-column1"></td>
										<td class="tbody-column3"><a class="button button-primary button-large" href="<?php echo esc_url(CIRCLE_THEME_URL); ?>" target="_blank"><?php esc_html_e( 'View Demo', 'elementor-circle' ); ?></a></td>
									</tr> 
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>	
						
		</div>
		</div>		
	</div>
<?php
}

/**
 * Display the admin notice.
 */
function circle_admin_notice() {
	global $current_user;
	$user_id = $current_user->ID;

	if ( ! get_user_meta( $user_id, 'circle_ignore_admin_notice' ) ) {
		?>
		<div class="notice notice-info">
			<p>
				<strong>New!</strong> Easily customize Elementor Circle theme design with settings - <a target="_blank" href="https://circlethemes.com/elementor-circle/circle-documentation/">Learn More</a> 
				<span style="float:right">
					<a href="?circle_ignore_admin_notice=0"><?php esc_html_e( 'Hide Notice', 'elementor-circle' ); ?></a>
				</span>
			</p>
		</div>

		<?php
	}
}
add_action( 'admin_notices', 'circle_admin_notice' );

/**
 * Dismiss the admin notice.
 */
function circle_dismiss_admin_notice() {
	global $current_user;
	$user_id = $current_user->ID;
	/* If user clicks to ignore the notice, add that to their user meta */
	if ( isset( $_GET['circle_ignore_admin_notice'] ) && '0' === $_GET['circle_ignore_admin_notice'] ) {
		add_user_meta( $user_id, 'circle_ignore_admin_notice', 'true', true );
	}
}
add_action( 'admin_init', 'circle_dismiss_admin_notice' );