<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package appos
 */

	$layout_option = 'right_sidebar';
	
  	if( function_exists('cs_get_option')){
		$layout_option = cs_get_option('layout_option');
	}

get_header(); ?>

<!-- main-section start -->
<section class="main-section">
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
						if ( have_posts() ) :

							if ( is_home() && ! is_front_page() ) : ?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>

							<?php
							endif;

							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'blog' );

							endwhile;
							?>
							<?php if((get_previous_posts_link())||(get_next_posts_link())): ?>
							<div class="page-numb">
								<?php 
									the_posts_pagination(array(
										'prev_text' => esc_html__('Prev','appos'),
										'next_text' => esc_html__('Next','appos')
									));
								 ?>
							</div>
							<?php endif; 
						else :
							get_template_part( 'template-parts/content', 'none' );

						endif; ?>
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
