<?php
/**
 * Template part for displaying the primary navigation menu.
 *
 * @package   elementor circle
 */

?>
<nav id="site-navigation" class="menu-1">
	<div class="nav-wrapper">
		<button class="menu-toggle" aria-controls="site-menu" aria-expanded="false">
			<i class="an an-menu"></i>
		</button>

		<!-- <button type="button" class="menu-toggle" aria-controls="site-menu" aria-expanded="false">
			<i class="an an-menu"></i></button> -->

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'site-menu',
				'depth'          => 3,
			)
		); 
		?>
	</div> <!-- .wrapper -->
</nav> <!-- .menu-1 -->