<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package appos
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

<div class="comment-block" id="comments">
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		
		<div class="comment-title">
		 <h4>
			<?php
				$coments_count = '% Comments';
				if($coments_count<1){
				comments_number('No Comments', '01 comment', ''.$coments_count);
				}
				else comments_number('No Comments', '01 comment', $coments_count);
			?>
		</h4>
		</div>
		<?php the_comments_navigation(); ?>
		<div class="comments-wrapper">
			<ul>
				<?php
					wp_list_comments( array(
						'style'      => 'ul',
						'short_ping' => true,
						'callback'	=> 'appos_comments_list'
					) );
				?>
			</ul><!-- .comment-list -->
		</div>
		<?php the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'appos' ); ?></p>
		<?php
		endif;

	endif; // Check for have_comments().
	?>
</div>
<div class="contact-block">
<?php
	$comments_args = array(
		// Change the title of send button
		'label_submit' => __( 'submit comment', 'appos' ),
		
		// Change the title of the reply section
		'fields'	=>array(
			'author'	=> '<div class="form-group row"><div class="col-md-4 col-sm-12"><input type="text" name="author" id="author" placeholder="Name"></div>',
			'email'		=> '<div class="col-md-4 col-sm-12"><input type="email" name="email" id="email" placeholder="Email"></div>',
			'url'		=> '<div class="col-md-4 col-sm-12"><input type="text" name="website" id="url" placeholder="Website"></div></div>',
			
			
		),
		// Change the title of the reply section
		'title_reply' => __( 'Leave a reply', 'appos' ),
		// Remove "Text or HTML to be displayed after the set of comment fields".
		'comment_notes_after' => '',
		'class_form' => 'contact-form',
		// Redefine your own textarea (the comment body).
		'comment_field' => '<div class="form-group"><textarea id="comment" name="comment" placeholder="Type Your message"></textarea></div>',
	);
	comment_form( $comments_args );
	?>
</div>
<!-- #comments -->
