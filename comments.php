<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link       https://codex.wordpress.org/Template_Hierarchy
 *
 * @package   elementor circle
 */

if ( post_password_required() ) {
	return;
} ?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h4 class="comments-title">
			<?php
				$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				// translators: %s: post title.
				printf( esc_html_x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'elementor-circle' ), get_the_title() );
			} else {
				printf(
					esc_html(
						/* translators: 1: number of comments, 2: post title */
						_nx(
							'%1$s Reply to &ldquo;%2$s&rdquo;',
							'%1$s Replies to &ldquo;%2$s&rdquo;',
							$comments_number,
							'comments title',
							'elementor-circle' 
						)
					),
					esc_html( number_format_i18n( $comments_number ) ),
					get_the_title()
				);
			}
			?>
		</h2><!-- .comments-title -->

		<ol class="comment-list">
			<?php wp_list_comments(); ?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>

			<nav id="comment-nav-below" class="navigation comment-navigation clear">
				<div class="nav-links">

					<div class="nav-previous">
						<?php previous_comments_link( esc_html__( '&larr; Older Comments', 'elementor-circle' ) ); ?>
					</div>
					<div class="nav-next">
						<?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'elementor-circle' ) ); ?>
					</div>

				</div><!-- .nav-links -->
			</nav><!-- #comment-nav-below -->

		<?php endif; // Check for comment navigation. ?>

		<?php if ( ! comments_open() ) : // If comments are closed and there are comments, output a message? ?>

			<p class="no-comments">
				<?php esc_html_e( 'Comments are closed.', 'elementor-circle' ); ?>
			</p>

			<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
?>

</div><!-- #comments -->
