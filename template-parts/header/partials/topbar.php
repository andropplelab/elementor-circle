<?php
/**
 * Template part for displaying the topbar.
 *
 * @package   elementor circle
 */
?>

<div class="top-bar">
		<div class="topbar-inner">

		<!-- topbar widget left -->
			<?php if ( is_active_sidebar( 'header-top-left' ) ) : ?>
				<ul id="header-top-left">
					<?php dynamic_sidebar( 'header-top-left' ); ?>
				</ul>
			<?php endif; ?>
			
			<!-- topbar widget right -->
			<?php if ( is_active_sidebar( 'header-top-right' ) ) : ?>
				<ul id="header-top-right">
					<?php dynamic_sidebar( 'header-top-right' ); ?>
				</ul>	

				<ul class="social-icon">
					<?php do_action('circle_topbar_social'); ?>
				</ul>

			<?php endif; ?>

		</div>
</div> 