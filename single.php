<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package appos
 */

	$layout_option = 'right_sidebar';
	
  	if( function_exists('cs_get_option')){
		$layout_option = cs_get_option('layout_option');
	}

get_header(); ?>

<!-- main-section start -->
	<section class="main-section single-main">
		<div class="container">
			<div class="row">
				<div class="row">
					<?php if (($layout_option == 'left_sidebar')): ?>
						<?php get_sidebar(); ?>
					<?php endif ?>
					<div class="<?php $class = ($layout_option== 'fullwidth') ? 'col-md-8 middle_layout' : 'col-md-8'; echo esc_attr($class); ?>">
						<div class="main-content">
							<div class="section-wrapper">
							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'single' ); ?>

								<!-- Post Pagination -->
								<div class="post-pagination">
									<?php previous_post_link( '%link', '<i class="fa fa-arrow-left"></i>'. __( 'Previous Post','appos' )); ?>
									<?php next_post_link( '%link',  __( 'Next Post','appos' ).'<i class="fa fa-arrow-right"></i>' ); ?>
								</div>
								<?php

								wpb_set_post_views(get_the_ID());

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
							?>
							</div>
						</div>
					</div>
					<?php if (($layout_option == 'right_sidebar')): ?>
						<?php get_sidebar(); ?>
					<?php endif ?>
				</div>
			</div>
		</div>
	</section>
		

<?php

get_footer();
