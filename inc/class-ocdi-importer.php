<?php
	if (!defined('ABSPATH')) exit;
	
	class OCDI_Demo_Importer {
	
		 public function __construct() {
	
			  add_filter('pt-ocdi/import_files', array(
					$this,
					'import_files_config'
			  ));
			  add_filter('pt-ocdi/after_import', array(
					$this,
					'ocdi_after_import_setup'
			  ));
			  add_filter('pt-ocdi/disable_pt_branding', '__return_true');
			  add_action('init', array(
					$this,
					'bdevs_toolkit_rewrite_flush'
			  ));
		 }
	
		 public function import_files_config() {

			return [
				[
				   'import_file_name'           => 'Elementor Circle',
					'import_file_url'            => 'https://circlethemes.com/wp-content/uploads/demo/elementor-circle/demo-content-new/contents-demo.xml',
					'import_widget_file_url'     => 'https://circlethemes.com/wp-content/uploads/demo/elementor-circle/demo-content-new/widget-settings.json',
					'import_widget_file_url'     => 'https://circlethemes.com/wp-content/uploads/demo/elementor-circle/demo-content-new/widgets.wie',
					'import_customizer_file_url' => 'https://circlethemes.com/wp-content/uploads/demo/elementor-circle/demo-content-new/customizer-data.dat',
					'import_preview_image_url'   => 'https://circlethemes.com/wp-content/uploads/demo/elementor-circle/demo-content-new/demo1.jpg',
					'preview_url'                => 'https://elementorcircle.circlethemes.com/',
				],
			 ];
		}

		 public function ocdi_after_import_setup($selected_file) {
			  $this->assign_frontpage_id($selected_file);
			  $this->update_permalinks();
			  update_option('basa_ocdi_importer_flash', true);
	
			  // Assign menus to their locations.
			  $primary_menu = get_term_by('name', 'Primary Menu', 'menu-1');
			  $topbar_menu = get_term_by('name', 'Top Bar', 'topbar_menu');
			  $footer_menu = get_term_by('name', 'Footer Menu', 'footer_menu');
	
			  set_theme_mod('nav_menu_locations', ['Primary Menu' => $primary_menu->term_id, 'Top Bar' => $topbar_menu->term_id, 'Footer Menu' => $footer_menu->term_id, ]);
	
			  // Assign front page and posts page (blog page).
			  $front_page_id = get_page_by_title('Home');
			  $blog_page_id = get_page_by_title('Blog');
	
			  update_option('show_on_front', 'page');
			  update_option('page_on_front', $front_page_id->ID);
			  update_option('page_for_posts', $blog_page_id->ID);
		 }
	
		 private function assign_frontpage_id($selected_import) {
	
			  $front_page = get_page_by_title($selected_import['import_page_name']);
			  $blog_page = get_page_by_title('Blog');
	
			  update_option('show_on_front', 'page');
			  update_option('page_on_front', $front_page->ID);
			  update_option('page_for_posts', $blog_page->ID);
		 }
	
		 private function update_permalinks() {
			  update_option('permalink_structure', '/%postname%/');
		 }
	
		 public function bdevs_toolkit_rewrite_flush() {
	
			  if (get_option('basa_ocdi_importer_flash') == true)
			  {
					flush_rewrite_rules();
					delete_option('basa_ocdi_importer_flash');
			  }
		 }
	}
new OCDI_Demo_Importer;