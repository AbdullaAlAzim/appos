    <!--  feature Start -->
<?php 
	$Feature_angular_switch = '';
	$appos_feature_title = '';
	$appos_feature_sub_title = '';
	$feature_color_bg = '';
	$appos_feature_left = '';
	$appos_feature_right = '';
	$appos_feature_switcher = 'true';
	$feature_middle_img = '';
	$feature_img_bg = '';
	
	
  	if( function_exists('cs_get_option')){
		$Feature_angular_switch = cs_get_option('Feature_angular_switch');
		$appos_feature_title = cs_get_option('appos_feature_title');
		$appos_feature_sub_title = cs_get_option('appos_feature_sub_title');
		$feature_color_bg = cs_get_option('feature_color_bg');
		$appos_feature_left = cs_get_option('appos_feature_left_group');
		$appos_feature_right = cs_get_option('appos_feature_right_group');
		$appos_feature_switcher = cs_get_option('appos_feature_switcher');
		$feature_middle_img = cs_get_option('appos_feature_middle_image');
		$feature_middle_img_url = wp_get_attachment_url( $feature_middle_img ,'full');
		$feature_img_bg = cs_get_option('feature_img_bg');
		$feature_img_bg_url = wp_get_attachment_url( $feature_img_bg ,'full');
		
	}	
if( $appos_feature_switcher == true ):?>
<?php if( $Feature_angular_switch == true ) :?>
<section class="features section-heading angular" id="features"<?php if(!empty($feature_img_bg)) :?> style="background-image:url(<?php echo esc_url($feature_img_bg_url); ?>)" <?php else : ?> style="background:<?php echo esc_attr($feature_color_bg); ?>" <?php endif; ?> >
	<div class="angle-top"></div>
<?php else : ?>
	<section class="features section-heading" id="features"<?php if(!empty($feature_img_bg)) :?> style="background-image:url(<?php echo esc_url($feature_img_bg_url); ?>)" <?php else : ?> style="background:<?php echo esc_attr($feature_color_bg); ?>" <?php endif; ?> >
<?php endif; ?>

	<div class="container">
		<div class="row">
			<?php if(!empty($appos_feature_title)) : ?>
			<div class="section-header">
				<?php echo (!empty($appos_feature_title)) ? '<h2>' . esc_html($appos_feature_title). '</h2>' : ''; ?>
				<?php echo (!empty($appos_feature_sub_title)) ? '<p>' . esc_html($appos_feature_sub_title). '</p>' : ''; ?>
			</div>
			<?php endif; ?>
			<div class="section-wrapper">
				<div class="col-md-4">
					<div class="features-content-left">
					<?php if($appos_feature_left) : foreach( $appos_feature_left as $appos_feature_single): ?>
						<div class="features-item">
							<?php
								$feature_icon_img = $appos_feature_single['appos_feature_icon_image'] ;
								$feature_icon_url = wp_get_attachment_url( $feature_icon_img , 'full'); 
							?>
							<div class="features-icon">
							<?php if($feature_icon_img):?>
								<img class="feature_icon_img" src="<?php echo esc_url( $feature_icon_url ); ?>" />
							<?php else : ?>
								<?php 
									$appos_feature_icon = isset($appos_feature_single['appos_feature_icon'])  ? $appos_feature_single['appos_feature_icon'] : '' ;
								?>
								<span><i class="<?php echo esc_html($appos_feature_icon);?>"></i></span>
							<?php endif; ?>	
							</div>
							<div class="features-content">
								<?php 
									$appos_feature_heading = isset($appos_feature_single['appos_feature_heading']) ? $appos_feature_single['appos_feature_heading'] : '' ;
									
									$appos_feature_details = isset($appos_feature_single['appos_feature_details']) ? $appos_feature_single['appos_feature_details'] : '' ;
								?>
								<h5><?php echo esc_html($appos_feature_heading);?></h5>
								<p><?php echo wp_kses_post($appos_feature_details);?></p>
							</div>
						</div>
					<?php endforeach; endif;?>
					</div>
				</div>
				
				<div class="col-md-4">
					<?php if(!empty($feature_middle_img)): ?>
					<div class="features-img">
						<img src="<?php echo esc_url( $feature_middle_img_url );?>" alt="features-img">
					</div>
					<?php endif; ?>
				</div>
				
				<div class="col-md-4">
					<div class="features-content-right">
					<?php if($appos_feature_right) : foreach( $appos_feature_right as $appos_feature_single): ?>
						<div class="features-item">
							<?php
								$feature_icon_img = $appos_feature_single['appos_feature_icon_image'] ;
								$feature_icon_url = wp_get_attachment_url( $feature_icon_img , 'full'); 
							?>
							<div class="features-icon">
							<?php if($feature_icon_img):?>
								<img class="feature_icon_img" src="<?php echo esc_url( $feature_icon_url ); ?>" />
							<?php else : ?>
								<?php 
									$appos_feature_icon = isset($appos_feature_single['appos_feature_icon'])  ? $appos_feature_single['appos_feature_icon'] : '' ;
								?>
								<span><i class="<?php echo esc_html($appos_feature_icon);?>"></i></span>
							<?php endif; ?>	
							</div>
							<div class="features-content">
								<?php 
									$appos_feature_heading = isset($appos_feature_single['appos_feature_heading']) ? $appos_feature_single['appos_feature_heading'] : '' ;
									
									$appos_feature_details = isset($appos_feature_single['appos_feature_details']) ? $appos_feature_single['appos_feature_details'] : '' ;
								?>
								<h5><?php echo esc_html($appos_feature_heading);?></h5>
								<p><?php echo wp_kses_post($appos_feature_details);?></p>
							</div>
						</div>
						<?php endforeach; endif;?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
    <!--  feature End -->