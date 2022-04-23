<?php
/**
 * Display Breadcrumb
 *
  * @package Elementor Circle
 */

if ( ! function_exists( 'circle_breadcrumb' ) ) :
	function circle_breadcrumb() {
		// text for the 'Home' link
		$text['home']     = esc_html__( 'Home', 'elementor-circle' );
		// category page
		$text['category'] = esc_html__( '%1$s Archive for %2$s', 'elementor-circle' );
		 // search results page
		$text['search']   = esc_html__( '%1$sSearch results for: %2$s', 'elementor-circle' );
		// tag page
		$text['tag']      = esc_html__( '%1$sPosts tagged %2$s', 'elementor-circle' ); 
		 // author page
		$text['author']   = esc_html__( '%1$sView all posts by %2$s', 'elementor-circle' );
		// 404 page
		$text['404']      = esc_html__( 'Error 404', 'elementor-circle' ); 
		// current post/page title in breadcrumbs, 0 - don't show
		$showCurrent = 1; 
		// tag before the current crumb
		$before      = '<span class="breadcrumb-current">';
		// tag after the current crumb
		$after       = '</span>'; 

		global $post, $paged, $page;
		$homeLink   = home_url( '/' );
		$linkBefore = '<span class="breadcrumb" typeof="Breadcrumb">';
		$linkAfter  = '</span>';
		$linkAttr   = ' rel="url" property="title"';
		$link       = $linkBefore . '<a' . $linkAttr . ' href="%1$s">%2$s</a>' . $linkAfter;

			echo '<div class="breadcrumb-area">
					<div class="breadcrumb-wrapper">
						<div class="entry-breadcrumbs">';

			if ( ! is_home() ) {
			echo sprintf( $link, esc_url( $homeLink ), $text['home'] ); 
			}
			if ( is_category() ) {
				$thisCat = get_category( get_query_var( 'cat' ), false );

				if ( $thisCat->parent != 0 ) {
					$cats = get_category_parents( $thisCat->parent, true, false );
					$cats = str_replace( '<a', $linkBefore . '<a' . $linkAttr, $cats );
					$cats = str_replace( '</a>', '</a>' . $linkAfter, $cats );
					echo $cats; 
				}

				the_archive_title( $before . sprintf( $text['category'], '<span class="archive-text">', '</span>' ), $after );

			} elseif ( is_search() ) {
				echo $before . sprintf( $text['search'], '<span class="search-text">', '</span>' . get_search_query() ) . $after; 

			} elseif ( is_day() ) {
				echo sprintf( $link, esc_url( get_year_link( get_the_time( __( 'Y', 'elementor-circle' ) ) ) ), esc_html( get_the_time( __( 'Y', 'elementor-circle' ) ) ) ) ; 
				echo sprintf( $link, esc_url( get_month_link( get_the_time( __( 'Y', 'elementor-circle' ) ), get_the_time( __( 'n', 'elementor-circle' ) ) ) ), esc_html( get_the_time( __( 'F', 'elementor-circle' ) ) ) ); 
				echo $before . esc_html( get_the_time( __( 'd', 'elementor-circle' ) ) ) . $after; 

			} elseif ( is_month() ) {
				echo sprintf( $link, esc_url( get_year_link( get_the_time( __( 'Y', 'elementor-circle' ) ) ) ), esc_html( get_the_time( __( 'Y', 'elementor-circle' ) ) ) ) ; 
				echo $before . esc_html( get_the_time( __( 'F', 'elementor-circle' ) ) ) . $after; 

			} elseif ( is_year() ) {
				echo $before . esc_html( get_the_time( __( 'Y', 'elementor-circle' ) ) ) . $after; 


			} elseif ( is_single() && !is_attachment() ) {
				if ( get_post_type() != 'post' ) {
					$post_type = get_post_type_object( get_post_type() );
					$post_link = get_post_type_archive_link( $post_type->name );
					printf( $link, esc_url( $post_link ), esc_html( $post_type->labels->singular_name ) ); 
					echo $before . esc_html( get_the_title() ) . $after; 
				}
				else {
					$cat  = get_the_category();
					if ( ! is_wp_error( $cat ) ) {
						$cats = get_category_parents( $cat, true, '' );
						if ( ! is_wp_error( $cats ) ) {
							$cats = preg_replace( "#^(.+)$#", "$1", $cats );
							$cats = str_replace( '<a', $linkBefore . '<a' . $linkAttr, $cats );
							$cats = str_replace( '</a>', '</a>' . $linkAfter, $cats );
							echo $cats;
						}
						echo $before . esc_html( get_the_title() ) . $after;
					}
				}
			} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
				$post_type = get_post_type_object( get_post_type() );
				echo isset( $post_type->labels->singular_name ) ? $before . esc_html( $post_type->labels->singular_name ) . $after : '';  
			} elseif ( is_attachment() ) {
				$parent = get_post( $post->post_parent );
				$cat    = get_the_category( $parent->ID );
				if ( isset( $cat[0] ) ) {
					$cat = $cat[0];
				}
				if ( $cat ) {
					$cats = get_category_parents( $cat, true );
					$cats = str_replace( '<a', $linkBefore . '<a' . $linkAttr, $cats );
					$cats = str_replace( '</a>', '</a>' . $linkAfter, $cats );
					echo $cats; 
				}
				printf( $link, esc_url( get_permalink( $parent ) ), esc_html( $parent->post_title ) ); 
				echo $before . esc_html( get_the_title() ) . $after; 
			} elseif ( is_page() && ! $post->post_parent ) {
				echo $before . esc_html( get_the_title() ) . $after; 
			} elseif ( is_page() && $post->post_parent ) {
				$parent_id   = $post->post_parent;
				$breadcrumbs = array();
				while( $parent_id ) {
					$page_child    = get_post( $parent_id );
					$breadcrumbs[] = sprintf( $link, esc_url( get_permalink( $page_child->ID ) ), esc_html( get_the_title( $page_child->ID ) ) );
					$parent_id     = $page_child->post_parent;
				}
				$breadcrumbs = array_reverse( $breadcrumbs );
				for( $i = 0; $i < count( $breadcrumbs ); $i++ ) {
					echo $breadcrumbs[$i];  
				}
				echo $before . esc_html( get_the_title() ) . $after; 
			} elseif ( is_tag() ) {
				the_archive_title( $before . sprintf( $text['tag'], '<span class="tag-text">', '</span>' ), $after );
			} elseif ( is_author() ) {
				global $author;
				$userdata = get_userdata( $author );
				echo $before . sprintf( $text['author'], '<span class="author-text">', '</span>' . $userdata->display_name ) . $after;  
			} elseif ( is_404() ) {
				echo $before . $text['404'] . $after;  
			}
			if ( get_query_var( 'paged' ) ) {
				if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) {
					echo ' (';
				}
				/* translators: %s: current page number. */
				echo sprintf( esc_html__( 'Page %s', 'elementor-circle' ), absint( max( $paged, $page ) ) );

				if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) {
					echo ')';
				}
			}

			echo '</div><!-- .entry-breadcrumbs -->
			</div><!-- .breadcrumb-wrapper -->
			</div><!-- .breadcrumb-area -->';

	}
endif;
