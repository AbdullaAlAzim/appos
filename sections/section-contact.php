<?php
	$contact_section_title = ''; 
	$contact_section_desc = ''; 
	$contact_form_shortcode = ''; 
	$contact_section_title_left = ''; 
	$contact_info_group = ''; 
	$social_icons = ''; 
	$contact_angular_switch = ''; 

	if( function_exists('cs_get_option')){
		$contact_section_title = cs_get_option('contact_section_title');
		$contact_section_desc = cs_get_option('contact_section_desc');
		$contact_form_shortcode = cs_get_option('contact_form_shortcode');
		$contact_section_title_left = cs_get_option('contact_section_title_left');
		 // contact info group
  		$contact_info_group = cs_get_option('contact_info_group');
  		$social_icons = cs_get_option('social_icons');
  		$contact_angular_switch = cs_get_option('contact_angular_switch');
	}
  if( isset($contact_form_shortcode)) :

?>   <!--  get touch Start -->
<?php if( $contact_angular_switch == true ) :?>
<section class="contact section-heading angular" id="contact">
	<div class="angle-top"></div>
<?php else : ?>
	<section class="contact section-heading" id="contact">
<?php endif; ?>

	<div class="container">
		<div class="row">
			<?php if(!empty($contact_section_title)) : ?>
			<div class="section-header">
				<?php echo (!empty($contact_section_title)) ? '<h2>' . esc_html($contact_section_title). '</h2>' : ''; ?>
				<?php echo (!empty($contact_section_desc)) ? '<p>' . esc_html($contact_section_desc). '</p>' : ''; ?>
			</div>
			<?php endif; ?>
			
			<div class="section-wrapper">
				<div class="col-md-4">
					<div class="contact-item">
						<div class="contact-details">
							<h3><?php if($contact_section_title_left) : echo $contact_section_title_left; else : echo "contact info"; endif; ?></h3>
							<ul class="contact-list">
								<?php if($contact_info_group) : foreach($contact_info_group as $single_contact_info_group) : ?>
								<li><i class="<?php echo esc_attr($single_contact_info_group['contact_tab_icon']); ?>"></i><span><?php echo esc_html($single_contact_info_group['contact_tab_info']); ?></span></li>
								<?php endforeach; endif; ?>
							</ul>
							
							<ul class="social-link">
								<?php 
									if(!empty($social_icons)){
										foreach ($social_icons as  $single_icon) {
											if(!empty($single_icon['icon_url'])){
											?>
											<li><a title="<?php echo esc_attr($single_icon['icon_title']); ?>" href="<?php echo esc_url($single_icon['icon_url']); ?>"><i class="<?php echo esc_attr($single_icon['social_tab_icon']); ?>"></i></a></li>
											<?php
											}
										}									
									}
								 ?>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-md-8">
					 <?php echo do_shortcode($contact_form_shortcode); ?>
				</div>
			</div>
		</div>
	</div>
</section>	
<?php endif; ?>
    <!--  get touch End -->