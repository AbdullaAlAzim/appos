   <?php
	$appos_download_title = '';
	$appos_download_sub_title = '';
	$appos_download_btn = '';
	$appos_download_sec_switcher = '';
	$download_img_bg = '';
	$Download_angular_switch = '';
	
	
  	if( function_exists('cs_get_option')){
		$appos_download_title = cs_get_option('appos_download_title');
		$appos_download_sub_title = cs_get_option('appos_download_sub_title');
		$appos_download_btn = cs_get_option('appos_download_btn_group');
		$appos_download_sec_switcher = cs_get_option('appos_download_sec_switcher');
		$Download_angular_switch = cs_get_option('Download_angular_switch');
		$download_img_bg = cs_get_option('download_img_bg');
		$download_img_bg_url = wp_get_attachment_url( $download_img_bg ,'full');
		
	}
 if( $appos_download_sec_switcher == true ):?>
<?php if( $Download_angular_switch == true ) :?>
<section class="download section-heading angular" id="download" <?php if(!empty($download_img_bg)) :?> style="background-image:url(<?php echo esc_url($download_img_bg_url); ?>)" <?php endif; ?> >
	<div class="angle-top"></div>
<?php else : ?>
	<section class="download section-heading" id="download" <?php if(!empty($download_img_bg)) :?> style="background-image:url(<?php echo esc_url($download_img_bg_url); ?>)" <?php endif; ?> >
<?php endif; ?>

	<div class="container">
		<div class="row">
			<?php if(!empty($appos_download_title)) : ?>
			<div class="section-header">
				<?php echo (!empty($appos_download_title)) ? '<h2>' . esc_html($appos_download_title). '</h2>' : ''; ?>
				<?php echo (!empty($appos_download_sub_title)) ? '<p>' . esc_html($appos_download_sub_title). '</p>' : ''; ?>
			</div>
			<?php endif; ?>
			
			<div class="section-wrapper">
			<?php if($appos_download_btn) : foreach ($appos_download_btn as $appos_download_btn_single) :?>
				<div class="logo-area">
					<div class="logo-img">
						<?php
							$download_btn = $appos_download_btn_single['appos_download_btn_image'] ;
							$download_btn_img = wp_get_attachment_url( $download_btn , 'full'); 
							
							$appos_download_btn_link = isset($appos_download_btn_single['appos_download_btn_link']) ? $appos_download_btn_single['appos_download_btn_link'] : '' ;
						?>
						<?php if(!empty($appos_download_btn_link)):?>
						<a href="<?php echo esc_url( $appos_download_btn_link ); ?>"><img src="<?php echo esc_url( $download_btn_img ); ?>" alt="dl-img"></a>
						<?php endif;?>
					</div>
				</div>
			<?php endforeach; endif;?>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>