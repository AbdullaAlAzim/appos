<?php
	$appos_slider_switch = '';
	$appos_sliders_settings = '';
	if( function_exists('cs_get_option')){
		$appos_slider_switch = cs_get_option('appos_slider_switch');
		$appos_sliders_settings = cs_get_option('appos_sliders_settings');
	}
	
if( isset($appos_sliders_settings) && $appos_slider_switch==true) : ?>   <!--  Banner Start -->
    <section class="banner">
			<div class="swiper-container02">
				<div class="swiper-wrapper">
				<?php
					if($appos_sliders_settings) : foreach( $appos_sliders_settings as $key => $appos_slider_settings) :  
					$image_bg_url_atch =  $appos_slider_settings['appos_slider_image'];
					$image_bg_url =  wp_get_attachment_url($image_bg_url_atch, 'full');
					$image_rt_url_atch =  $appos_slider_settings['appos_slider_right_image'];
					$image_rt_url =  wp_get_attachment_url($image_rt_url_atch, 'full')
				?>
					<div class="swiper-slide">
						<div class="banner-item" style=" background-image: url(<?php echo esc_url($image_bg_url); ?> ); ">
							<div class="banner-content-area">
								<div class="container">
									<div class="row">
										<div class="banner-content">
											<?php 
												$appos_slider_title = isset($appos_slider_settings['appos_slider_title']) ? $appos_slider_settings['appos_slider_title'] : '' ;
											?>
											<h1><?php echo esc_html( $appos_slider_title ); ?></h1>
											<?php 
												$appos_slider_sub_title = isset($appos_slider_settings['appos_slider_sub_title']) ? $appos_slider_settings['appos_slider_sub_title'] : '' ;
											?>
											<p><?php echo esc_html( $appos_slider_sub_title ); ?></p>
											<?php 
												$appos_slider_button_url = isset($appos_slider_settings['appos_slider_button_url']) ? $appos_slider_settings['appos_slider_button_url'] : '' ;
												$appos_slider_button_text = isset($appos_slider_settings['appos_slider_button_text']) ? $appos_slider_settings['appos_slider_button_text'] : '' ;
												$appos_slider_button_url1 = isset($appos_slider_settings['appos_slider_button_url1']) ? $appos_slider_settings['appos_slider_button_url1'] : '' ;
												$appos_slider_button_text1 = isset($appos_slider_settings['appos_slider_button_text1']) ? $appos_slider_settings['appos_slider_button_text1'] : '' ;
											?>
											<ul>
												<?php if(!empty($appos_slider_button_url)) { ?>
												<li><a href="<?php echo esc_url( $appos_slider_button_url ); ?>" class="button"><?php echo esc_html( $appos_slider_button_text); ?></a></li>
												<?php } ?>
												<?php if(!empty($appos_slider_button_url1)) { ?>
												<li><a href="<?php echo esc_url( $appos_slider_button_url1 ); ?>" class="button"><?php echo esc_html( $appos_slider_button_text1); ?></a></li>
												<?php } ?>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="banner-content-img">
								<img src="<?php echo esc_url($image_rt_url); ?> " alt="mbl">
							</div>
						</div>
					</div>
					<?php endforeach; endif; ?>
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
				<!-- Add Arrows -->
				<div class="swiper-next">
					<i class="fa fa-angle-right"></i>
				</div>
				<div class="swiper-prev">
					<i class="fa fa-angle-left"></i>
				</div>
			</div>
		</section>
<?php endif; ?>