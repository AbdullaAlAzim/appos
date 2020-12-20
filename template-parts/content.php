<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package appos
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
	<div class="post-thumb">
		<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
	</div>
	<div class="post-content">
		<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
		<p><?php the_excerpt();?></p>
		<a href="<?php the_permalink(); ?>" class="custom-btn"><?php esc_html_e('Read more', 'appos'); ?></a>
	</div>
	<div class="media-link">
		<ul class="meta-post">
			<?php meta_post(); ?>
		</ul>
		<?php if('post'=== get_post_type()): ?>
			<?php post_social_share(); ?>
		<?php endif; ?>
	</div>
</div>