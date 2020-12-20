<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package appos
 */

 $footer_bg = '';
 $footer_text = '';
 $company_text = '';
 $company_url = '';
 $social_icons = '';
if(function_exists('cs_get_option')):
	$footer_bottom_bg = cs_get_option('footer_bottom_bg');
	$footer_text = cs_get_option('footer_text');
	$company_text = cs_get_option('company_text');
	$company_url = cs_get_option('company_url');
	$social_icons = cs_get_option('social_icons');
 endif;
 
?>

	<section class="footer" style="background-color:<?php echo $footer_bg;?>;">
			<div class="container">
				<div class="row">
					<?php if(!empty($company_url)) : ?>
					<span><?php echo $footer_text; ?><a href="<?php echo esc_url($company_url); ?>"><?php echo esc_html($company_text); ?></a></span>
					<?php else :?>
						<span><?php echo $footer_text; ?><a><?php esc_html_e('Appos','appos');?></a> </span>
					<?php endif;?>
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
		</section>
		
		
		<section class="scroll-top">
			<div class="scrollToTop">
				<span><i class="fa fa-arrow-up"></i></span>
			</div>
		</section>
	
	<?php wp_footer(); ?>
	
	</body>
</html>

