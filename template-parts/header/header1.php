<?php
/**
 * Template part for displaying the primary navigation menu.
 *
 * @package   elementor circle
 */

?>

<header class="site-header">

<div class="header-wrapper">

	<div class="header-container-flex">

		<?php get_template_part('template-parts/header/branding'); ?>

		<div class="header-nav-wrapper">

			<?php get_template_part('template-parts/header/menu-1'); ?>

			<?php if (true === get_theme_mod('circle_header_components', true))
			{
				circle_header_components();
			} ?>

		</div><!-- .header-nav-wrapper -->

	</div><!-- .header-wrapper -->

</div><!-- .wrapper -->

</header><!-- .site-header -->