   <?php
	$appos_about_title = '';
	$appos_about_sub_title = '';
	$appos_about = '';
	$appos_about_switcher = 'true';
	$about_angular_switch = 'false';
	
	
  	if( function_exists('cs_get_option')){
		$appos_about_title = cs_get_option('appos_about_title');
		$appos_about_sub_title = cs_get_option('appos_about_sub_title');
		$appos_about = cs_get_option('appos_about_group');
		$appos_about_switcher = cs_get_option('appos_about_switcher');
		$about_angular_switch = cs_get_option('about_angular_switch');
		
	}
   ?> <!--  About Start -->
<?php if( $appos_about_switcher == true ):?>
<?php if( $about_angular_switch == true ) :?>
<section class="about section-heading angular">
	<div class="angle-top"></div>
<?php else : ?>
	<section class="about section-heading">
<?php endif; ?>
	<div class="container">
		<div class="row">
			<?php if(!empty($appos_about_title)) : ?>
			<div class="section-header">
				<?php echo (!empty($appos_about_title)) ? '<h2>' . esc_html($appos_about_title). '</h2>' : ''; ?>
				<?php echo (!empty($appos_about_sub_title)) ? '<p>' . esc_html($appos_about_sub_title). '</p>' : ''; ?>
			</div>
			<?php endif; ?>
			<div class="section-wrapper">
			
				<?php if($appos_about) : foreach( $appos_about as $appos_about_single): ?>
				<div class="col-md-3 col-sm-6 col-xs-12">
					
					<div class="about-item">
						<?php
							$about_icon_img = $appos_about_single['appos_about_icon_image'] ;
							$about_icon_url = wp_get_attachment_url( $about_icon_img , 'full'); 
						?>
						<div class="about-icon">
						<?php if($about_icon_img):?>
							<img class="about_icon_img" src="<?php echo esc_url( $about_icon_url ); ?>" />
						<?php else : ?>
							<?php 
								$appos_about_icon = isset($appos_about_single['appos_about_icon']) ? $appos_about_single['appos_about_icon'] : '' ;
							?>
							<span><i class="<?php echo esc_html($appos_about_icon);?>"></i></span>
						<?php endif; ?>	
						</div>
						
						<div class="about-content">
							<?php 
								$appos_about_heading = isset($appos_about_single['appos_about_heading']) ? $appos_about_single['appos_about_heading'] : '' ;
								
								$appos_about_details = isset($appos_about_single['appos_about_details']) ? $appos_about_single['appos_about_details'] : '' ;
							?>
							<h4><?php echo esc_html($appos_about_heading);?></h4>
							<p><?php echo wp_kses_post($appos_about_details);?></p>
						</div>
					</div>
				</div>
				<?php endforeach; endif;?>
				
			</div>
		</div>
	</div>
</section>
<?php endif; ?>