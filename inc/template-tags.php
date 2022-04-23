<?php
/**
 * Custom template tags for this theme
 *
 * @package   elementor circle
 */

if ( ! function_exists( 'wp_body_open' ) ) :
	/* Shim for sites older than 5.2.  * @link https://core.trac.wordpress.org/ticket/12563 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	} 
endif;
add_action( 'wp_body_open', 'circle_preloader' );

if ( ! function_exists( 'circle_the_custom_logo' ) ) :
/**
 * Output the custom logo if it exists.
 */
function circle_the_custom_logo() {

	if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
		the_custom_logo();
	}

} endif;

if ( ! function_exists( 'circle_posted_on' ) ) {

	/* Prints HTML with meta information for the current post-date/time. */
	function circle_posted_on( $default = false ) {
		if ( $default ) {

			$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
			if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
				$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
			}
			$time_string = sprintf( $time_string,
				esc_attr( get_the_date( DATE_W3C ) ),
				esc_html( get_the_date() ),
				esc_attr( get_the_modified_date( DATE_W3C ) ),
				esc_html( get_the_modified_date() )
			);

		} else {
			$time_string = '<time class="entry-date published updated" datetime="%1$s">' .
				'<span class="entry-date__month-day">%2$s</span>' .
				'<span class="entry-date__month">%3$s</span></time>';

			if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
				$time_string = '<time class="entry-date published" datetime="%1$s">' .
				'<span class="entry-date__month-day">%2$s</span>' .
				'<span class="entry-date__month">%3$s</span>' .
				'</time><time class="updated" datetime="%4$s">%5$s</time>';
			}
			$time_string = sprintf( $time_string,
				esc_attr( get_the_date( DATE_W3C ) ),
				esc_html( get_the_date( 'd' ) ),
				esc_html( get_the_date( 'M' ) ),
				esc_attr( get_the_modified_date( DATE_W3C ) ),
				esc_html( get_the_modified_date() )
			);
		}
		$posted_on = sprintf(
			esc_html_x( 'Posted %s', 'post date', 'elementor-circle' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);
		echo '<li class="meta-date">' . html_entity_decode( esc_html( $time_string ) ) . '</li>';
	}
}

if ( ! function_exists( 'circle_meta_comments' ) ) {
	/* Post comments meta */
	function circle_meta_comments() {

		$comments_num = get_comments_number();
		$output = '';

		if ( comments_open() ) {
			if( $comments_num == 0 ) {
				$comments = esc_html__( '0 Comments', 'elementor-circle' );
			} elseif ( $comments_num > 1 ) {
				$comments = $comments_num . esc_html__(' Comments', 'elementor-circle');
			} else {
				$comments = esc_html__('1 Comment', 'elementor-circle');
			}
			$comments = sprintf('<a href="%1$s">%2$s</a>', get_comments_link(), $comments );
		} else {
			$comments = esc_html__('Comments are closed', 'elementor-circle');
		}
		$output .= '<li class="meta-comments">' . $comments . '</li>';
		echo html_entity_decode( esc_html( $output ) );
	}
}

if ( ! function_exists( 'circle_posted_by' ) ) :
	/*  Prints HTML with meta information for the current author.  */
	function circle_posted_by() {
		$meta_author = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'elementor-circle' ),
			'<li class="meta-author"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></li>'
		);
		echo '<li class="meta-from"> ' . $meta_author . '</li> ';
	}
endif;

if ( ! function_exists( 'circle_entry_footer' ) ) :
/* Prints HTML with meta information for the categories, tags and comments. */
function circle_entry_footer() {

	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '' );
		if ( $tags_list ) {
			/* translators: 1: list of tags. */
			printf( '<span class="meta-tags">' . esc_html__( 'Tags %1$s', 'elementor-circle' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}
	}
	/* Leave a comment */
	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">' . esc_html__( 'Discussion:', 'elementor-circle' );
		comments_popup_link( esc_html__( 'Leave a comment', 'elementor-circle' ), esc_html__( '1 Comment', 'elementor-circle' ), esc_html_x( '% Comments', 'number of comments', 'elementor-circle' ), 'comments-link' );
		echo '</span>';
	}
} endif;

if ( ! function_exists( 'circle_the_post_navigation' ) ) :
/* Display navigation to next/previous post when applicable. */
function circle_the_post_navigation() {
	$args = array(
		'prev_text' => __( '<i class="an an-angle-double-left"></i> Previous <span>%title</span>', 'elementor-circle' ),
		'next_text' => __( 'Next <i class="an an-angle-double-right"></i> <span>%title</span>', 'elementor-circle' ),
	);
	the_post_navigation( $args );
} endif;

if ( ! function_exists( 'circle_the_posts_navigation' ) ) :
/* Displays the navigation to next/previous set of posts, when applicable. */
function circle_the_posts_navigation() {
	$args = array(
		'prev_text'          => esc_html__( '&larr; Older Posts', 'elementor-circle' ),
		'next_text'          => esc_html__( 'Newer Posts &rarr;', 'elementor-circle' ),
		'screen_reader_text' => esc_html__( 'Posts Navigation', 'elementor-circle' ),
	);
	the_posts_navigation( $args );
} endif;

if ( ! function_exists( 'circle_posts_category' ) ) :
/* Displays the category to next/previous set of posts, when applicable. */
function circle_posts_category() {
	if ( 'post' === get_post_type() ) {
		$categories_list = get_the_category_list( esc_html__( ', ', 'elementor-circle' ) );
		if ( $categories_list ) {
			echo '<li class="meta-cat">' . $categories_list . '</li>';
		}
	}
} endif;

if ( ! function_exists( 'circle_thumbnail' ) ) :
/*  Output the thumbnail if it exists. */
function circle_thumbnail( $size = '' ) { 
	if ( has_post_thumbnail() ) { ?>
		<div class="post-thumbnail">

			<?php if ( ! is_single() ) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail( $size ); ?>
				</a>
			<?php else : ?>
				<?php the_post_thumbnail( $size ); ?>
			<?php endif; ?>

		</div><!-- .post-thumbnail -->
		<?php
	}
} endif;

if ( ! function_exists( 'circle_preloader' ) ) {
	/* circle preloader */
	function circle_preloader() {
		$class = 'circle-entry-site';

		if ( get_theme_mod( 'circle_preloader_show' ) == 'show' ) {
			switch ( get_theme_mod( 'preloader_style' ) ) {
				case 'cube': echo '<div class="circle-preloader"><div class="circle-preloader__inner"><div class="cube"><span></span><span></span><span></span><span></span></div></div></div>';
				break;
				case 'signal': echo '<div class="circle-preloader"><div class="circle-preloader__inner"><div class="signal"><span></span><span></span><span></span><span></span><span></span></div></div></div>';
				break;
				case 'spinner': echo '<div class="circle-preloader"><div class="circle-preloader__inner"><div class="spinner"><span></span></span></div></div></div>';
				break;
				case 'elementor-circle': echo '<div class="circle-preloader"><div class="circle-preloader__inner"><div class="circle"><span></span></span></div></div></div>';
				break;
			}
		}
	}
}

function circle_pingback_header() {
	/* Add a pingback url auto-discovery header for singularly identifiable articles. */
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'circle_pingback_header' );

function new_excerpt_more() {
	/* Replaces the excerpt "Read More" */
	global $post;
	return '&hellip; <p><a class="read-more" href="' . get_permalink( $post->ID ) . '">' . esc_html__( 'Read more', 'elementor-circle' ) . ' <i class="an an-long-arrow-right"></i></a></p>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );