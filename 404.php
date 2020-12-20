<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package appos
 */

get_header(); ?>

	<!-- main-section start -->
<section class="main-section">
	<div class="container">
		<div class="row">
			<div class="row">
				<div class="main-content">
					<div class="section-wrapper">

					<div class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'appos' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'appos' ); ?></p>

							<?php get_search_form(); ?>
							<a href="<?php echo home_url(); ?>" class="custom-btn"><?php esc_html_e('back to home','appos'); ?></a>
						</div><!-- .page-content -->
					</div><!-- .error-404 -->

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
