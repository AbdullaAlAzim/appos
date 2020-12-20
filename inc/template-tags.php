<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package appos
 */

if ( ! function_exists( 'meta_post' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time , author and comments.
	 */
	function meta_post() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);
		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( '%s', 'post date', 'appos' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( '%s', 'post author', 'appos' ),
			'<li><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '"><i class="fa fa-user"></i>' . esc_html( get_the_author() ) . '</a></li>'
		);

		echo '<ul><li><i class="fa fa-calendar" aria-hidden="true"></i>' . $posted_on . '</li>' . $byline; // WPCS: XSS OK.

		if (  ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<li><i class="fa fa-comment-o" aria-hidden="true"></i>';
			comments_popup_link(
				__('0 Comment','appos'),
				__('1 Comment','appos'),
				__('% Comments','appos')
			);
			echo '</li>';
		}
		
		echo '</ul>';

	}
endif;


if ( ! function_exists( 'meta_post_one' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time , author and comments.
	 */
	function meta_post_one() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);
		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( '%s', 'post date', 'appos' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

	/*	echo '<ul><li>' . $posted_on . '</li>' . $byline; // WPCS: XSS OK.*/
		echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

		if (  ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<li><i class="fa fa-comment-o" aria-hidden="true"></i>';
			comments_popup_link(
				__('0 Comment','appos'),
				__('1 Comment','appos'),
				__('% Comments','appos')
			);
			echo '</li>';
		}
		
		echo '</ul>';

	}
endif;

if ( ! function_exists( 'appos_post_date' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time , author and comments.
	 */
	function appos_post_date() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);
		echo $time_string;

	}
endif;

if ( ! function_exists( 'appos_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the  tags.
 */
function appos_entry_footer() {
	// Hide tag text for pages.

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list();
		if ( $tags_list ) {
			printf( '<div class="tags-all"><i class="fa fa-tags" aria-hidden="true"></i>' . esc_html__( 'Tags: %1$s', 'appos' ) . '</div>', $tags_list ); // WPCS: XSS OK.
		}
		
}
endif;

if ( ! function_exists( 'appos_edit_post' ) ) :
/**
 * Prints HTML with meta information for the  tags.
 */
function appos_edit_post() {
	// Hide tag text for pages.

		
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				esc_html__( 'Edit %s', 'appos' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			),
			'<div class="edit-post">',
			'</div>'
		);
}
endif;

if ( ! function_exists( 'appos_post_thumbnail' ) ) :
/**
 * Displays an optional post thumbnail.
 *
 * Wraps the post thumbnail in an anchor element on index views, or a div
 * element when on single views.
 */
function appos_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	if ( is_singular() ) :
	?>

	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div><!-- .post-thumbnail -->

	<?php else : ?>

	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
		?>
	</a>

	<?php endif; // End is_singular().
}
endif;



if(!function_exists('post_social_share')):
	/**
	 * Social Share options
	 */	
	function post_social_share(){
		global $post;
	
		// Get current page URL 
		$crunchifyURL = urlencode(get_permalink());
 
		// Get current page title
		$crunchifyTitle = str_replace( ' ', '%20', get_the_title());
		
		// Get Post Thumbnail for pinterest
		$crunchifyThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

 
		// Construct sharing URL without using any script
		$twitterURL = 'https://twitter.com/intent/tweet?text='.$crunchifyTitle.'&amp;url='.$crunchifyURL.'&amp;via=Crunchify';
		$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$crunchifyURL;
		$googleURL = 'https://plus.google.com/share?url='.$crunchifyURL;
		$bufferURL = 'https://bufferapp.com/add?url='.$crunchifyURL.'&amp;text='.$crunchifyTitle;
		$whatsappURL = 'whatsapp://send?text='.$crunchifyTitle . ' ' . $crunchifyURL;
		$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$crunchifyURL.'&amp;title='.$crunchifyTitle;
 
		// Based on popular demand added Pinterest too
		//$pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$crunchifyURL.'&amp;media='.$crunchifyThumbnail[0].'&amp;description='.$crunchifyTitle;
 
		// Add sharing button at the end of page/page content
		$content = '';
		$content .= '<div class="social-link"><ul>';
		$content .= '<li><a class="crunchify-link crunchify-facebook" href="'.$facebookURL.'" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><i class="fa fa-facebook"></i></a></li>';
		$content .= '<li><a class="crunchify-link crunchify-twitter" href="'. $twitterURL .'" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><i class="fa fa-twitter"></i></a></li>';
		$content .= '<li><a class="crunchify-link crunchify-googleplus" href="'.$googleURL.'" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><i class="fa fa-google"></i></a></li>';
		$content .= '<li><a class="crunchify-link crunchify-linkedin" href="'.$linkedInURL.'" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><i class="fa fa-linkedin"></i></a></li>';
		//$content .= '<li><a class="crunchify-link crunchify-pinterest" href="'.$pinterestURL.'" data-pin-custom="true" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>';
		$content .= '</ul></div>';
		
		echo $content;		
	}
endif;

/* ===========================================
Post Views Singe Page
========================================= */

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);




/* ===========================================
Post Views blog Page
========================================= */
function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}


