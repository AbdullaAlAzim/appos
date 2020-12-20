<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package appos
 */

$header_bg ='';
$header_logo ='';
$header_btn_text ='';
$header_btn_url ='';
$breadcrum_color_background ='';
$breadcrum_img_background ='';
$breadcrum_switch ='true';
$Preloader_switch ='true';
 
if(function_exists('cs_get_option')):
$header_bg = cs_get_option('header_background');
$appos_header_logo = cs_get_option('appos_header_logo');
$header_logo = wp_get_attachment_url($appos_header_logo, 'full');
$header_btn_text = cs_get_option('header_btn_text');
$header_btn_url = cs_get_option('header_btn_url');
$breadcrum_color_background = cs_get_option('breadcrum_color_background');
$breadcrum_img_background = cs_get_option('breadcrum_img_background');
$bread_background = wp_get_attachment_url($breadcrum_img_background, 'full');
$breadcrum_switch = cs_get_option('breadcrum_switch');
$Preloader_switch = cs_get_option('Preloader_switch');
 endif;
 
 
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/title-img.png"/> -->
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if($Preloader_switch == true): ?>
		<div class="wrapper">
			<div id="preloader_2">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	<?php endif; ?>

		<header>
			<div class="main-menu"  style="background-color:<?php echo esc_attr($header_bg) ?>;">
				<div class="container">
					<div class="row">
						<div class="desktop-menu">
							<?php 
								if (!empty($header_logo)){
									?>
									
									<a  class="menu-logo" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url($header_logo); ?>" alt="Logo"></a>
									<?php
								}
								else {
									echo '<h2 class="menu-logo"><a href="'.esc_url(home_url()).'">';
										bloginfo('title');
									echo "</a></h2>";
								}
							  ?>
							
							<div class="menu-list">
								<?php 
								    if ( has_nav_menu( 'main_menu' ) ) {
                                         wp_nav_menu(array(
    									  'theme_location' => 'main_menu',
    									  'menu_class' => 'menu-list',
    									  'container' => ' ',
    									  'depth' => 1
    									  ));
                                    }
								  ?>
							</div>
							<?php if(!empty($header_btn_url)) : ?>
							<div class="download-btn">
								<span><a href="<?php echo esc_url($header_btn_url); ?>"><?php echo esc_html($header_btn_text);?></a></span>
							</div>
							<?php endif;?>
						</div>

						<div class="mobile-menu">
							<div class="menu-header">
								<span class="menu-icon"><i class="fa fa-bars"></i></span>
								<div class="mobile-menu-logo">
									<?php 
										if (!empty($header_logo)){
											?>
											
											<a  class="menu-logo" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url($header_logo); ?>" alt="Logo"></a>
											<?php
										}
										else {
											echo '<h2 class="menu-logo"><a href="'.esc_url(home_url()).'">';
												bloginfo('title');
											echo "</a></h2>";
										}
									?>
								</div>
							</div>
							
							<div class="mob-menu-content">
								<span class="mob-menu-close">
									<span class="bar"></span>
									<span class="bar"></span>
								</span>
								
									<?php 
								    if ( has_nav_menu( 'main_menu' ) ) {
                                         wp_nav_menu(array(
    									  'theme_location' => 'main_menu',
    									  'menu_class' => 'menu-list',
    									  'container' => ' ',
    									  'depth' => 1
    									  ));
                                    }
								  ?>
							</div>
							<?php if(!empty($header_btn_url)) : ?>
							<div class="download-btn">
								<span><a href="<?php echo esc_url($header_btn_url); ?>"><?php echo esc_html($header_btn_text);?></a></span>
							</div>
							<?php endif;?>
						</div>	
					</div>
				</div>
			</div>
			<?php if(!is_page_template('page-templates/front-page.php') && !is_404() && !is_front_page()) : ?>
			<?php if($breadcrum_switch == true):  ?>
			<div class="blog-banner">
				<div class="breadcrumb" <?php if(!empty($bread_background)) :?>  style="background-image:url(<?php echo esc_attr($bread_background) ?>);" <?php else :?> style="background-color:<?php echo esc_attr($breadcrum_color_background) ?>;" <?php endif;?>>
					<div class="container">
						<div class="breadcrumb-area">
							<?php 
								  if(is_search()){
									?>
										<h2 class="breadcrumb-title">
										  <?php
											echo esc_html__('Search Results For : ', 'appos') .get_search_query();
										   ?>
										</h2>
									<?php
								  }	
								  elseif (is_archive()) {
								   the_archive_title( '<h2 class="breadcrumb-title">', '</h2>' );
								  }
								  elseif (!is_single() || is_page()) {
								   the_title('<h2 class="breadcrumb-title">', '</h2>');
								  }
								   elseif(!is_home()){
								   ?><h2 class="breadcrumb-title"><?php echo apply_filters( 'the_title', get_the_title( get_option( 'page_for_posts' ) ) ); ?></h2><?php
								  }
							?>
							<?php  if(function_exists('appos_breadcrumbs') && !is_search()) :appos_breadcrumbs(); endif; ?>
							
							
						</div>
					</div>
				</div>
			</div>
			<?php endif; endif;?>
		</header>
		
		
		