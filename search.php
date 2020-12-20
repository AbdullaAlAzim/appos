<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
		if ( have_posts() ) : ?>


			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

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
