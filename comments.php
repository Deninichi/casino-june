<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package loans
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h3 class="comments-title">
			<?php
			$comment_count = intval( get_comments_number() );

			if ( 1 === $comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html_e( '1 comment', 'loans' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s comment', '%1$s comments', $comment_count, 'comments title', 'loans' ) ),
					number_format_i18n( $comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h3><!-- .comments-title -->

		<?php comment_form( array (
			'logged_in_as'  => false,
			'title_reply'	=> '',
			'fields'		=> array(
									'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
												'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' required /></p>'
								),
			'comment_field' => '<p class="comment-form-comment"><img src="' . get_avatar_url( get_current_user_id() ) . '" alt="" /><input type="text" id="comment" name="comment" aria-required="true" placeholder="Leave a message..." required></p>',
			'label_submit'  => 'Submit'
		)); ?>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( 'type=comment&callback=bear_comment&avatar_size=40' );
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'loans' ); ?></p>
		<?php
		endif;

	endif; // Check for have_comments().

	?>

</div><!-- #comments -->
