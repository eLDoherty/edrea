<?php
/**
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Edrea
 * 
 * @version 1.0.0
 * @copyright  Copyright (c) 2023, Leonardo Doherty
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * 
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

<div id="comments" class="edrea-comments-area">

	<?php

	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$edrea_comment_count = get_comments_number();
			if ( '1' === $edrea_comment_count ) { 
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'edrea' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $edrea_comment_count, 'comments title', 'edrea' ) ),
					number_format_i18n( $edrea_comment_count ), 
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol>

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note
		if ( ! comments_open() ) :
			?>
				<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'edrea' ); ?></p>
			<?php
		endif;

	endif; 

	comment_form();
	?>

</div>
