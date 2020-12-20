<?php 
	$appos_pricing_title = '';
	$appos_pricing_sub_title = '';
	$appos_pricing_bg = '';
	$Pricing_angular_switch = '';
	if( function_exists('cs_get_option')){
		$appos_pricing_title = cs_get_option('appos_pricing_title');
		$appos_pricing_sub_title = cs_get_option('appos_pricing_sub_title');
		$appos_pricing_bg = cs_get_option('appos_pricing_bg');
		$Pricing_angular_switch = cs_get_option('Pricing_angular_switch');

	}
	//Pricing Query
	$pricing_post = new WP_Query(array(

		'post_type' => 'appos_pricing_table'	,
		'posts_per_page' => 4	
	));
if( $pricing_post->have_posts()) : ?>    <!--  Pricing Start -->
<?php if( $Pricing_angular_switch == true ) :?>
<section class="pricing section-heading angular" id="pricing" style=" background: <?php echo esc_attr($appos_pricing_bg); ?>">
	<div class="angle-top"></div>
<?php else : ?>
	<section class="pricing section-heading" id="pricing" style=" background: <?php echo esc_attr($appos_pricing_bg); ?>">
<?php endif; ?>
    
			<div class="container">
				<div class="row">
					<?php if(!empty($appos_pricing_title)) : ?>
					<div class="section-header">
						<?php echo (!empty($appos_pricing_title)) ? '<h2>' . esc_html($appos_pricing_title). '</h2>' : ''; ?>
						<?php echo (!empty($appos_pricing_sub_title)) ? '<p>' . esc_html($appos_pricing_sub_title). '</p>' : ''; ?>
					</div>
					<?php endif; ?>
					
					<div class="section-wrapper">
					<?php if( $pricing_post->have_posts()) : while( $pricing_post->have_posts()): $pricing_post->the_post(); ?>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="pricing-box">
								<?php if(get_the_title()) : ?>
									<?php the_title('<h6>','</h6>'); ?>
								<?php else :?>
									<h6><?php echo esc_html__('Set type first','appos');?></h6>
								<?php endif;?>
								<!--Meatabox DATA Receiving-->
								<?php 
									$appos_pricing_data = get_post_meta(get_the_ID(),'_custom_pricing_options', true);
									$pricing_url = $appos_pricing_data['appos_pricing_paid_link'];
									
								?>
								<div class="pricing-info">
									<?php 
										$appos_pricing_currency = isset($appos_pricing_data['appos_pricing_currency']) ? $appos_pricing_data['appos_pricing_currency'] : '' ;
										
										$appos_pricing_package_price = isset($appos_pricing_data['appos_pricing_package_price']) ? $appos_pricing_data['appos_pricing_package_price'] : '' ;
										
										$appos_pricing_package_duration = isset($appos_pricing_data['appos_pricing_package_duration']) ? $appos_pricing_data['appos_pricing_package_duration'] : '' ;
									?>
									<div class="pricing-amount">
										<span><i class=" <?php echo esc_html($appos_pricing_currency); ?>"></i><?php echo esc_html($appos_pricing_package_price); ?></span>
										<p><?php echo esc_html( $appos_pricing_package_duration ); ?></p>
									</div>
									
									<div class="pricing-feature">
										<ul>
											<!--RECEIVING PRICING DATA-->
											<?php $appos_pricing_details_datas = isset($appos_pricing_data['appos_pricing_package_info']) ? $appos_pricing_data['appos_pricing_package_info'] : ''?>
											<?php if($appos_pricing_details_datas ): foreach($appos_pricing_details_datas as $appos_pricing_details_data):?>
												<li><?php echo esc_html($appos_pricing_details_data['appos_pricing_package_details']); ?></li>
											<?php endforeach; endif; ?>
										</ul>
										<?php if(!empty($pricing_url)) {?>
										<a href="<?php echo esc_url($pricing_url); ?>" class="pricing-btn"><?php echo esc_html($appos_pricing_data['appos_pricing_paid_link_text']); ?></a>
										<?php } ?>
									</div>
								</div>
								
							</div>
						</div>
						<?php endwhile; endif;?>
					</div>
				</div>
			</div>
		</section> 
<?php endif; ?>	
    <!--  Pricing End -->