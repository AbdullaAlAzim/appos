    <!--  feature Start -->
<?php 
	$appos_gallary_title = '';
	$appos_gallary_sub_title = '';
	$Gallary_color_bg = '';
	$Gallary_angular_switch = '';
	$Newsletter_angular_switch = '';
	$appos_gallary_sec_switcher = '';
	$gallery_field = '';

	$appos_newsletter_title = '';
	$appos_newsletter_sub_title = '';
	$newsletter_sec_bg = '';

  	if( function_exists('cs_get_option')){
		$appos_gallary_title = cs_get_option('appos_gallary_title');
		$appos_gallary_sub_title = cs_get_option('appos_gallary_sub_title');
		$Gallary_color_bg = cs_get_option('Gallary_color_bg');
		$Newsletter_angular_switch = cs_get_option('Newsletter_angular_switch');
		$Gallary_angular_switch = cs_get_option('Gallary_angular_switch');
		$appos_gallary_sec_switcher = cs_get_option('appos_gallary_sec_switcher');
		$gallery_field = cs_get_option('gallery_field');
		
		//gallary Images explode
		$gallery_img = explode(",", $gallery_field);


		$appos_newsletter_title = cs_get_option('appos_newsletter_title');
		$appos_newsletter_sub_title = cs_get_option('appos_newsletter_sub_title');
		$newsletter_sec_bg = cs_get_option('newsletter_sec_bg');
		$newsletter_sec_bg_img = wp_get_attachment_url( $newsletter_sec_bg ,'full');

		}	

		if ( ! is_active_sidebar( 'sidebar-2' ) ) {
					return;
					
		}
if( $appos_gallary_sec_switcher == true ):?>
<?php if( $Gallary_angular_switch == true ) :?>
<section class="screenshot section-heading angular"  id="screenshot" style="background:<?php echo esc_attr($Gallary_color_bg); ?>">
	<div class="angle-top"></div>
<?php else : ?>
	<section class="screenshot section-heading"  id="screenshot" style="background:<?php echo esc_attr($Gallary_color_bg); ?>">
<?php endif; ?>

	<div class="container">
		<div class="row">
			<?php if(!empty($appos_gallary_title)) : ?>
			<div class="section-header">
				<?php echo (!empty($appos_gallary_title)) ? '<h2>' . esc_html($appos_gallary_title). '</h2>' : ''; ?>
				<?php echo (!empty($appos_gallary_sub_title)) ? '<p>' . esc_html($appos_gallary_sub_title). '</p>' : ''; ?>
			</div>
			<?php endif; ?>
			
			<div class="section-wrapper">
				<div class="swiper-container">					
					<div class="thumb">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider01.png">
					</div>
					<div class="swiper-wrapper">
						<?php foreach ($gallery_img as $single_image_attributes) { 
							$image_attributes = wp_get_attachment_image_src( $single_image_attributes, $size = 'appos-268-476');
							?>
							<?php if(!empty($image_attributes)):?>
						<div class="swiper-slide">
							<img src=" <?php echo esc_url($image_attributes[0]); ?>" alt="slider-img">
						</div>
						<?php endif; ?>
						<?php } ?>
					</div>
					<!-- Add Pagination -->
					<div class="swiper-pagination"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>


<?php if( $Newsletter_angular_switch == true ) :?>
<?php if(!empty($newsletter_sec_bg_img)):?>
<section class="newsletter section-heading angular" <?php if(!empty($newsletter_sec_bg)) :?> style="background-image:url(<?php echo esc_url($newsletter_sec_bg_img); ?>)" <?php endif; ?>>
	<div class="angle-top"></div>
<?php else : ?>
	<section class="newsletter section-heading" <?php if(!empty($newsletter_sec_bg)) :?> style="background-image:url(<?php echo esc_url($newsletter_sec_bg_img); ?>)" <?php endif; ?>>
<?php endif; ?>

	<div class="container">
		<div class="row">
			<div class="section-header">
				<?php echo (!empty($appos_newsletter_title)) ? '<h2>' . esc_html($appos_newsletter_title). '</h2>' : ''; ?>
			</div>

			<div class="section-wrapper">
				<?php if(!empty($appos_newsletter_sub_title)):?>
					<div class="newsletter-area">
						<?php echo (!empty($appos_newsletter_sub_title)) ? '<p>' . esc_html($appos_newsletter_sub_title). '</p>' : ''; ?>
						<?php dynamic_sidebar('sidebar-2'); ?>
					</div>
				<?php endif;?>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>