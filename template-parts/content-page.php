<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package appos
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class('entry-single'); ?>>
	<div class="post-thumb">
		<?php the_post_thumbnail(); ?>
	</div>
	<div class="post-content">
		<h3><?php the_title(); ?></h3>
		<?php the_content();?>
	    <?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'appos' ),
			'after'  => '</div>',
		) );
		?>
		<div class="post-footer">
			<?php appos_entry_footer(); ?>
			<?php if('post'=== get_post_type()): ?>
				<?php post_social_share(); ?>
			<?php endif; ?>
		</div>

	</div>
	<footer><?php appos_edit_post(); ?></footer>
</div>
