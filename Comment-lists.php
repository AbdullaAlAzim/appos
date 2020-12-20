<?php 

function appos_comments_list($comment, $args, $depth){
	$GLOBALS['comment'] = $comment;

  switch ( $comment->comment_type ) :
    case 'pingback' :
    case 'trackback' :
        // Display trackbacks differently than normal comments.
    ?>
	<li class="comment-item">
		<div class="comment">
			<div class="cmnt-media">
				<p><?php esc_html_e('pingback : ', 'appos'); ?></p>
			</div>
			<div class="cmnt-body">
				<div class="cmnt-heading">
					<h5><?php echo get_comment_author(); ?><span>-</span><span><?php echo sprintf( esc_html__( '%1$s At %2$s', 'appos' ), get_comment_date(), get_comment_time());?></span></h5>
				</div>
				<div class="cmnt-content">
					<?php comment_text(); ?>
				</div>
			</div>
		</div>
	</li>

    <?php
    break;
default :
    // Proceed with normal comments.
    global $post;
?>
  
<li class="comment-item">
	<div class="comment">
		<div class="cmnt-media">
			<?php echo get_avatar( $comment->comment_author_email, 60 ); ?>
		</div>
		<div class="cmnt-body">
			<div class="cmnt-heading">
				<h5><?php echo get_comment_author(); ?><span>-</span><span><?php echo sprintf( esc_html__( '%1$s At %2$s', 'appos' ), get_comment_date(), get_comment_time() ) ; ?></span></h5>
					<?php
					 comment_reply_link( array_merge($args, array(
					  'reply_text'  => '<i class="fa fa-reply"></i> Reply',
					  'depth'    => $depth,
					  'max_depth'   => $args['max_depth'],
					 ))); 
					?>
				
			</div>
			<div class="cmnt-content">
				<?php comment_text(); ?>
			</div>
		</div>
	</div>
</li>
  
 
<?php
break;endswitch;
}
 ?>