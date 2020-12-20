<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'page' );

								

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

