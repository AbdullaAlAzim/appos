<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => esc_html__('Theme Option','appos'),
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_position'   =>  75,
  'menu_icon'   	=>  'dashicons-admin-generic',
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => true,
  'show_reset_all'  => false,
  'framework_title' => 'Appos Framework <small>by Azim</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
	'name'        => 'appos_general_settings',
	'title'       => esc_html__('General Settings','appos'),
	'icon'        => 'fa fa-cogs',
	'sections'    => array(
		array(
			'name' => 'Preloader',
			'title' => esc_html__('Preloader','appos'),
			'icon' => 'fa fa-spinner',
			'fields' => array(
				array(
				  'type' => 'heading',
				  'content' => esc_html__('Preloader contorl panel','appos'),
				),
				array(
					'type' => 'notice',
					'content' => esc_html__('You can change preloader on and off here'),
					'class' => 'info',
				),
				//breadcrumb_switch
				array(
					'id' => 'Preloader_switch',
					'type' => 'switcher',
					'title' => esc_html__('Preloader switch','appos'),
					'desc' => esc_html__('if you want to oof your Preloader you can select off switch', 'appos'),
					'default' => true,
				),
			),
		),
		//social icons
		array(
			'name' => 'social_option',
			'title' => esc_html__('Social icons','appos'),
			'icon' => 'fa fa-share-alt',
			'fields' => array(
				array(
					'type' => 'heading',
					'content' => esc_html__('Social Icons here','appos'),
				),
				array(
					'type' => 'notice',
					'content' => esc_html__('Your social media icons are globally','appos'),
					'class' => 'info',
				),
				//social icon
				array(
					'id' => 'social_icons',
					'type' => 'group',
					'title' => esc_html('Social icon','appos'),
					'desc' => esc_html('add your social icons','appos'),
					'button_title' => esc_html('Add icon','appos'),
					'accordion_title' => esc_html('Social icon','appos'),
					'fields' => array(
						array(
							'id' => 'icon_title',
							'title' => esc_html__('social icon title', 'appos'),
							'type' => 'text',
						),
						array(
							'id' => 'social_tab_icon',
							'title' => esc_html__('Social tab icon', 'appos'),
							'type' => 'icon',
							'desc' => esc_html__('Icon must be required', 'appos'),
							'default' => 'fa fa-facebook',
						),
						array(
							'id' => 'icon_url',
							'title' => esc_html__('social icon link', 'appos'),
							'type' => 'text',
							'default' => esc_url('https://facebook.com'),
						),
					),
				),
			),
		),
		array(
			'name' => 'Breadcrumb',
			'title' => esc_html__('Breadcrumb','appos'),
			'icon' => 'fa fa-bold',
			'fields' => array(
				array(
				  'type' => 'heading',
				  'content' => esc_html__('Breadcrumb background','appos'),
				),
				array(
					'type' => 'notice',
					'content' => esc_html__('You can change breadcrumb background and upload your image here','appos'),
					'class' => 'info',
				),
				//breadcrumb_image_backgroung
				array(
					'id' => 'breadcrum_img_background',
					'type' => 'image',
					'title' => esc_html__('Breadcrum image background','appos'),
					'desc' => esc_html__('Change Breadcrum image background here','appos'),
				),
				array(
					'id' => 'breadcrum_color_background',
					'title' => esc_html__('Breadcrum color background', 'appos'),
					'type' => 'color_picker',
					'default' => '#9A08B7',
				),
				//breadcrumb_switch
				array(
					'id' => 'breadcrum_switch',
					'type' => 'switcher',
					'title' => esc_html__('Breadcrumb switch','appos'),
					'desc' => esc_html__('if you want to oof your breadcrumb you can select off switch', 'appos'),
					'default' => true,
				),
			),
		),
	),// end: a field
);

//=============================
//header section start
//=============================
$options[] = array(
	'name' => 'appos_header_option',
	'title' => esc_html__('Header setting','appos'),
	'icon' => 'fa fa-header',
	'fields' => array(
		array(
			'type' => 'heading',
			'content' => esc_html__('Header settings here','appos'),
		),
		//background
		array(
			'id' => 'header_background',
			'type' => 'color_picker',
			'title' => esc_html__('Header background','appos'),
			'default' => '#8719E8',
		),
		//logo
		array(
			'id' => 'appos_header_logo',
			'type' => 'image',
			'title' => esc_html__('Header Logo','appos'),
			'desc' => esc_html__('You can add header logo here and it must be png format', 'appos'),
		),
		//header download btn text
		array(
			'id'		=> 'header_btn_text',
			'type'		=> 'text',
			'title'		=> esc_html__('Header Download button text', 'appos'),
			'default' => 'download',
		),
		//header download btn link
		array(
			'id'		=> 'header_btn_url',
			'type'		=> 'text',
			'title'		=> esc_html__('Header Download button url', 'appos'),
		),
	),
);
//======================
// template sections controls
//===========================
$options[] = array(
	'name' => 'shorter',
	'title' => esc_html__('Appos Shorter','appos'),
	'icon' => 'fa fa-bars',
	'fields' => array(
		array(
			'type' => 'heading',
			'content' => esc_html__('Home page layout','appos'),
		),
		array(
			'type' => 'notice',
			'class' => 'info',
			'content' => esc_html__('Gentle allows you to enable, disable and re-arrange each section on your homepage. Simply use the drag-and-drop interface below to get the layout you need. Note that any section in the "Disabled" column will not be deleted, just removed from the layout. You can re-add them at any time', 'appos'),
		),
		array(
			'id' => 'home_section_sorter',
			'type' => 'sorter',
			'default' => array(
				'enabled' => array(
					'slider' => esc_html__('Slider', 'appos'),
					'about' => esc_html__('About', 'appos'),
					'feature' => esc_html__('Feature', 'appos'),
					'team' => esc_html__('Team', 'appos'),
					'download' => esc_html__('Download', 'appos'),
					'gallary' => esc_html__('Gallary', 'appos'),
					//'newsletter' => esc_html__('Newsletter', 'appos'),
					'blog' => esc_html__('Recent News', 'appos'),
					'pricing' => esc_html__('Pricing', 'appos'),
					'contact' => esc_html__('Contact', 'appos'),
					'map' => esc_html__('Map', 'appos'),
					
				),
				'disalbed' => array(),
			),
			'enabled_title' => esc_html__('Enable sections', 'appos'),
			'disabled_title' => esc_html__('Disabled sections', 'appos'),
		),
	),
);
//========================
// thumbnails section control
//========================
$options[] = array(
    'name' => 'appos_single_page_option',
    'title' => esc_html__('appos onepage', 'appos'),
    );

$options[] = array(
	'name' => 'appos_single_page_option',
	'title' => esc_html__('Home page sections','appos'),
	'icon' => 'fa fa-puzle-piece',
	'sections' => array(
		//========================
		// Slider section
		//========================
		array(
			'name'     => 'slider_setting',
			'title'    => esc_html__('Slider Settings', 'appos'),
			'icon'     => 'fa fa-sliders',
			'fields'   => array(
				//Slider Warning
				array(
				  'type'    => 'notice',
				  'class'   => 'warning',
				  'content' => esc_html__('Do not delete the first slider. If you want to delete it then restore it and add from begining', 'appos')
				),
				//Slider Switcher
				array(
					'id'		=> 'appos_slider_switch',
					'type'		=> 'switcher',
					'title'		=> esc_html__('Slider ON/OFF', 'appos'),
					'label'		=> esc_html__('ON/OFF switch for Slider', 'appos'),
					'default'	=>true,
				),
				array(
					'id'			=> 'appos_sliders_settings',
					'type'			=> 'group',
					'title'			=> esc_html__('Slider Sections', 'appos'),
					'button_title'	=> esc_html__('Add Slider', 'appos'),
					'dependency'	=> array('appos_slider_switch', '==', true),
					'fields'		=> array(
						//Slider Image
						array(
							'id'		=> 'appos_slider_image',
							'type'		=> 'image',
							'title'		=> esc_html__('Slider Image', 'appos'),
						),
						//Slider title
						array(
							'id'		=> 'appos_slider_title',
							'type'		=> 'text',
							'title'		=> esc_html__('Slider Title', 'appos'),
						),
						//Slider Details
						array(
							'id'		=> 'appos_slider_sub_title',
							'type'		=> 'textarea',
							'title'		=> esc_html__('Slider Details', 'appos'),
						),
						//Slider button
						array(
							'id'		=> 'appos_slider_button_text',
							'type'		=> 'text',
							'title'		=> esc_html__('Slider Download Button Text', 'appos'),
						),
						//Slider button URL
						array(
							'id'		=> 'appos_slider_button_url',
							'type'		=> 'text',
							'title'		=> esc_html__('Slider Download Button URL', 'appos'),
						),
						//Slider button
						array(
							'id'		=> 'appos_slider_button_text1',
							'type'		=> 'text',
							'title'		=> esc_html__('Slider learn more Button Text', 'appos'),
						),
						//Slider button URL
						array(
							'id'		=> 'appos_slider_button_url1',
							'type'		=> 'text',
							'title'		=> esc_html__('Slider learn more Button URL', 'appos'),
						),
						//Slider Image
						array(
							'id'		=> 'appos_slider_right_image',
							'type'		=> 'image',
							'title'		=> esc_html__('Slider right side Image', 'appos'),
						),
					),
				),
			),
		),
		//========================
		// about section control
		//========================
		array(
			'name'		=> 'appos_about',
			'title'		=> esc_html__('About', 'appos'),
			'icon'			=> 'fa fa-info-circle',
			'fields'	=> array(
				//about Section
				array(
					'name'		=> 'appos_about_section',
					'type'		=> 'heading',
					'content'	=> esc_html__( 'About Section', 'appos')
				),
				//angular switcher
				array(
					'id' => 'about_angular_switch',
					'type' => 'switcher',
					'title' => esc_html__('About Angular switch','appos'),
					'desc' => esc_html__('if you want to oof your Angular style you can select off switch', 'appos'),
					'default' => true,
				),
				//Section Switcher
				array(
					'id'		=> 'appos_about_switcher',
					'type'		=> 'switcher',
					'title'		=> esc_html__( 'About ON/OFF', 'appos'),
					'label'		=> esc_html__( 'On this for about section', 'appos'),
				),
				//Section Title
				array(
					'id'		=> 'appos_about_title',
					'type'		=> 'text',
					'title'		=> esc_html__('Section Title', 'appos'),
					'dependency'   => array( 'appos_about_switcher', '==', true ),
				),
				//Section subTitle
				array(
					'id'		=> 'appos_about_sub_title',
					'type'		=> 'textarea',
					'title'		=> esc_html__('Section Sub Title', 'appos'),
					'dependency'   => array( 'appos_about_switcher', '==', true ),
				),
				//about Group Field
				array(
					'id'		=> 'appos_about_group',
					'type'		=> 'group',
					'title'		=> esc_html__('about Field', 'appos'),
					'desc'		=> esc_html__('Add about from here', 'appos'),
					'button_title'		=> esc_html__('Add about', 'appos'),
					'dependency'   => array( 'appos_about_switcher', '==', true ),
					'fields'		=> array(
						//ICON Setup
						array(
							'id'		=> 'appos_about_icon',
							'type'		=> 'icon',
							'title'		=> esc_html__('about Icon', 'appos'),
							'default'		=> 'fa fa-lightbulb-o',
						),
						//ICON as Image
						array(
							'id'			=> 'appos_about_icon_image',
							'type'			=> 'image',
							'desc'			=> esc_html__('Icon will replaced with Image. Size: 32px x 32px', 'appos'),
							'title'			=> esc_html__('about Icon as Image', 'appos'),
						),
						
						//about HEADING
						array(
							'id'			=> 'appos_about_heading',
							'type'			=> 'text',
							'title'			=> esc_html__('about Heading', 'appos'),
						),
						//about DETAILS
						array(
							'id'			=> 'appos_about_details',
							'type'			=> 'textarea',
							'title'			=> esc_html__('about Details', 'appos'),
						),
					),

				),
			),
		),
		//========================
		// feature section control
		//========================
		array(
			'name'		=> 'appos_feature',
			'title'		=> esc_html__('feature', 'appos'),
			'icon'			=> 'fa fa-leaf',
			'fields'	=> array(
				//feature Section
				array(
					'name'		=> 'appos_feature_section',
					'type'		=> 'heading',
					'content'	=> esc_html__( 'Feature Section', 'appos')
				),
				//angular switcher
				array(
					'id' => 'Feature_angular_switch',
					'type' => 'switcher',
					'title' => esc_html__('Feature Angular switch','appos'),
					'desc' => esc_html__('if you want to oof your Angular style you can select off switch', 'appos'),
					'default' => true,
				),
				//Section Switcher
				array(
					'id'		=> 'appos_feature_switcher',
					'type'		=> 'switcher',
					'title'		=> esc_html__( 'Feature section ON/OFF', 'appos'),
					'label'		=> esc_html__( 'On this for feature section', 'appos'),
				),
				//color background
				 array(
					'id'        => 'feature_color_bg',
					'type'      => 'color_picker',
					'default'   => '#fff',
					'title'     => esc_html__('feature Section Background Color', 'appos'),
				),
				//Image background
				array(
					'id'			=> 'feature_img_bg',
					'type'			=> 'image',
					'title'			=> esc_html__('feature backgoround Image', 'appos'),
				),
				//Section Title
				array(
					'id'		=> 'appos_feature_title',
					'type'		=> 'text',
					'title'		=> esc_html__('Section Title', 'appos'),
					'dependency'   => array( 'appos_feature_switcher', '==', true ),
				),
				//Section subTitle
				array(
					'id'		=> 'appos_feature_sub_title',
					'type'		=> 'textarea',
					'title'		=> esc_html__('Section Sub Title', 'appos'),
					'dependency'   => array( 'appos_feature_switcher', '==', true ),
				),
				//feature left Group Field
				array(
					'id'		=> 'appos_feature_left_group',
					'type'		=> 'group',
					'title'		=> esc_html__('feature left Field', 'appos'),
					'desc'		=> esc_html__('Add feature from here', 'appos'),
					'button_title'		=> esc_html__('Add feature', 'appos'),
					'dependency'   => array( 'appos_feature_switcher', '==', true ),
					'fields'		=> array(
						//ICON Setup
						array(
							'id'		=> 'appos_feature_icon',
							'type'		=> 'icon',
							'title'		=> esc_html__('feature Icon', 'appos'),
							'default'		=> 'fa fa-lightbulb-o',
						),
						//ICON as Image
						array(
							'id'			=> 'appos_feature_icon_image',
							'type'			=> 'image',
							'desc'			=> esc_html__('Icon will replaced with Image. Size: 32px x 32px', 'appos'),
							'title'			=> esc_html__('feature Icon as Image', 'appos'),
						),
						
						//feature HEADING
						array(
							'id'			=> 'appos_feature_heading',
							'type'			=> 'text',
							'title'			=> esc_html__('feature Heading', 'appos'),
						),
						//feature DETAILS
						array(
							'id'			=> 'appos_feature_details',
							'type'			=> 'textarea',
							'title'			=> esc_html__('about Details', 'appos'),
						),
					),
				),
				//feature Image
				array(
					'id'			=> 'appos_feature_middle_image',
					'type'			=> 'image',
					'title'			=> esc_html__('feature middle Image', 'appos'),
				),
				//feature right Group Field
				array(
					'id'		=> 'appos_feature_right_group',
					'type'		=> 'group',
					'title'		=> esc_html__('feature right Field', 'appos'),
					'desc'		=> esc_html__('Add feature from here', 'appos'),
					'button_title'		=> esc_html__('Add feature', 'appos'),
					'dependency'   => array( 'appos_feature_switcher', '==', true ),
					'fields'		=> array(
						//ICON Setup
						array(
							'id'		=> 'appos_feature_icon',
							'type'		=> 'icon',
							'title'		=> esc_html__('feature Icon', 'appos'),
							'default'		=> 'fa fa-lightbulb-o',
						),
						//ICON as Image
						array(
							'id'			=> 'appos_feature_icon_image',
							'type'			=> 'image',
							'desc'			=> esc_html__('Icon will replaced with Image. Size: 32px x 32px', 'appos'),
							'title'			=> esc_html__('feature Icon as Image', 'appos'),
						),
						
						//feature HEADING
						array(
							'id'			=> 'appos_feature_heading',
							'type'			=> 'text',
							'title'			=> esc_html__('feature Heading', 'appos'),
						),
						//feature DETAILS
						array(
							'id'			=> 'appos_feature_details',
							'type'			=> 'textarea',
							'title'			=> esc_html__('about Details', 'appos'),
						),
					),
				),
			),
		),
		//========================
		// Team section control
		//========================
		array(
			'name'		=> 'appos_team',
			'title'		=> esc_html__('Team', 'appos'),
			'icon'		=> 'fa fa-group',
			'fields'	=> array(
				//Team Section Heading
				array(
					'name'		=> 'appos_team_head',
					'type'		=> 'heading',
					'content'		=> esc_html__('Team Section', 'appos'),
				),
				//angular switcher
				array(
					'id' => 'Team_angular_switch',
					'type' => 'switcher',
					'title' => esc_html__('Team Angular switch','appos'),
					'desc' => esc_html__('if you want to oof your Angular style you can select off switch', 'appos'),
					'default' => true,
				),
				//Team Section title
				array(
					'id'		=> 'appos_team_heading',
					'type'		=> 'text',
					'title'		=> esc_html__('Section Title', 'appos'),
				),
				//Team Section subTitle
				array(
					'id'		=> 'appos_team_subheading',
					'type'		=> 'textarea',
					'title'		=> esc_html__('Section Sub Title', 'appos'),
				),
			),
		),
		//========================
		// download section control
		//========================
		array(
			'name'		=> 'appos_download',
			'title'		=> esc_html__('Download', 'appos'),
			'icon'		=> 'fa fa-download',
			'fields'	=> array(
				//download Section Heading
				array(
					'name'		=> 'appos_download_head',
					'type'		=> 'heading',
					'content'		=> esc_html__('Download Section', 'appos'),
				),
				//Section Switcher
				array(
					'id'		=> 'appos_download_sec_switcher',
					'type'		=> 'switcher',
					'title'		=> esc_html__( 'Download section ON/OFF', 'appos'),
					'label'		=> esc_html__( 'On this for feature section', 'appos'),
					
				),
				//angular switcher
				array(
					'id' => 'Download_angular_switch',
					'type' => 'switcher',
					'title' => esc_html__('Download Angular switch','appos'),
					'desc' => esc_html__('if you want to oof your Angular style you can select off switch', 'appos'),
					'default' => true,
				),
				//download Section title
				array(
					'id'		=> 'appos_download_title',
					'type'		=> 'text',
					'title'		=> esc_html__('Section Title', 'appos'),
				),
				//download Section subTitle
				array(
					'id'		=> 'appos_download_sub_title',
					'type'		=> 'textarea',
					'title'		=> esc_html__('Section Sub Title', 'appos'),
				),
				//Image background
				array(
					'id'			=> 'download_img_bg',
					'type'			=> 'image',
					'title'			=> esc_html__('Download backgoround Image', 'appos'),
				),
				
				//download Group Field
				array(
					'id'		=> 'appos_download_btn_group',
					'type'		=> 'group',
					'title'		=> esc_html__('Download Button Field', 'appos'),
					'desc'		=> esc_html__('Add Download button form hare', 'appos'),
					'button_title'		=> esc_html__('Add button', 'appos'),
					'dependency'   => array( 'appos_download_sec_switcher', '==', true ),
					'fields'		=> array(
						//button as Image
						array(
							'id'			=> 'appos_download_btn_image',
							'type'			=> 'image',
							'title'			=> esc_html__('Download Button as Image', 'appos'),
						),
						
						//download link
						array(
							'id'			=> 'appos_download_btn_link',
							'type'			=> 'text',
							'title'			=> esc_html__('Download Button link', 'appos'),
						),
					),
				),
			),
		),
		//========================
		// Gallary section control
		//========================
		array(
			'name'		=> 'appos_gallary',
			'title'		=> esc_html__('Gallary', 'appos'),
			'icon'		=> 'fa fa-picture-o',
			'fields'	=> array(
				//Gallary Section Heading
				array(
					'name'		=> 'appos_gallary_head',
					'type'		=> 'heading',
					'content'		=> esc_html__('Gallary Section', 'appos'),
				),
				//angular switcher
				array(
					'id' => 'Gallary_angular_switch',
					'type' => 'switcher',
					'title' => esc_html__('Gallary Angular switch','appos'),
					'desc' => esc_html__('if you want to oof your Angular style you can select off switch', 'appos'),
					'default' => true,
				),
				//Section Switcher
				array(
					'id'		=> 'appos_gallary_sec_switcher',
					'type'		=> 'switcher',
					'title'		=> esc_html__( 'Gallary section ON/OFF', 'appos'),
					'label'		=> esc_html__( 'On this for feature section', 'appos'),
					
				),
				//Gallary Section title
				array(
					'id'		=> 'appos_gallary_title',
					'type'		=> 'text',
					'title'		=> esc_html__('Section Title', 'appos'),
				),
				//Gallary Section subTitle
				array(
					'id'		=> 'appos_gallary_sub_title',
					'type'		=> 'textarea',
					'title'		=> esc_html__('Section Sub Title', 'appos'),
				),
				//color background
				 array(
					'id'        => 'Gallary_color_bg',
					'type'      => 'color_picker',
					'default'   => '#fff',
					'title'     => esc_html__('Gallary Section Background Color', 'appos'),
				),
				array(
			  		'id'          => 'gallery_field',
				 	'type'        => 'gallery',
			 		'title'       => 'Gallery Section',
				  	'add_title'   => 'Add Images',
				  	'edit_title'  => 'Edit Images',
				 	'clear_title' => 'Remove Images',
				),
			),
		),
		//========================
		// newsletter section control
		//========================
		array(
			'name'		=> 'appos_newsletter',
			'title'		=> esc_html__('Newsletter', 'appos'),
			'icon'		=> 'fa fa-newspaper-o',
			'fields'	=> array(
				//newsletter Section Heading
				array(
					'name'		=> 'appos_newsletter_head',
					'type'		=> 'heading',
					'content'		=> esc_html__('Newsletter Section', 'appos'),
				),
				//angular switcher
				array(
					'id' => 'Newsletter_angular_switch',
					'type' => 'switcher',
					'title' => esc_html__('Newsletter Angular switch','appos'),
					'desc' => esc_html__('if you want to oof your Angular style you can select off switch', 'appos'),
					'default' => true,
				),
				//newsletter Section title
				array(
					'id'		=> 'appos_newsletter_title',
					'type'		=> 'text',
					'title'		=> esc_html__('Section Title', 'appos'),
				),
				//newsletter Section subTitle
				array(
					'id'		=> 'appos_newsletter_sub_title',
					'type'		=> 'textarea',
					'title'		=> esc_html__('Section Sub Title', 'appos'),
				),
				//Image background
				array(
					'id'			=> 'newsletter_sec_bg',
					'type'			=> 'image',
					'title'			=> esc_html__('Newsletter backgoround Image', 'appos'),
				),
			),
		),
		//========================
		// Blog section control
		//========================
		array(
			'name' => 'blog_section_option',
			'title' => esc_html__('Blog section', 'appos'),
			'icon' => 'fa fa-stop',
			'fields' => array(
				array(
					'type' => 'heading',
					'content' => esc_html__('Blog section settings', 'appos'),
				),
				array(
					'type' => 'notice',
					'content' => esc_html__('Blog section are direct show from your theme blog', 'appos'),
					'class' => 'info',
				),
				//angular switcher
				array(
					'id' => 'Blog_angular_switch',
					'type' => 'switcher',
					'title' => esc_html__('Blog Angular switch','appos'),
					'desc' => esc_html__('if you want to oof your Angular style you can select off switch', 'appos'),
					'default' => true,
				),
				array(
					'id' => 'blog_section_background',
					'type' => 'color_picker',
					'title' => esc_html__('Blog section background', 'appos'),
					'desc' => esc_html__('you have to change your backgoround color with match your font color', 'appos'),
					'default' => '#F9F9F9',
				),
				array(
					'id' => 'blog_section_title',
					'type' => 'text',
					'title' => esc_html__('your blog section title', 'appos'),
					'default' => esc_html__('Popular Tutorials', 'appos'),
				),
				array(
					'id' => 'blog_section_subtitle',
					'type' => 'wysiwyg',
					'title' => esc_html__('your blog section subtitle', 'appos'),
					'settings' => array(
						'textarea_rows' => 3,
						'tinymce'       => true,
						'media_buttons' => false,
					),
				),
				array(
					'id' => 'blog_per_page',
					'type' => 'number',
					'title' => esc_html__('Blog per page', 'appos'),
					'default' => '3'
				),
				array(
				  	'id'         => 'layout_option',
				  	'type'       => 'radio',
			 	 	'title'      => 'Blog page sidebar layout',
				  	'options'    => array(
					    'left_sidebar'    => 'Left-sidebar',
					    'right_sidebar'     => 'Rigth-sidebar',
					    'fullwidth'   => 'Fullwidth',
				  	),
				  	'default'    => 'left_sidebar'
				),
			),
		),
		//pricing Section
		array(
			'name'		=> 'appos_pricing',
			'title'		=> esc_html__('Pricing', 'appos'),
			'icon'		=> 'fa fa-gg',
			'fields'	=> array(
				//Section Heading
				array(
					'name'		=> 'appos_pricing_heading',
					'type'		=> 'heading',
					'content'		=> esc_html__('Pricing Table', 'appos'),
				),
				//angular switcher
				array(
					'id' => 'Pricing_angular_switch',
					'type' => 'switcher',
					'title' => esc_html__('Pricing Angular switch','appos'),
					'desc' => esc_html__('if you want to oof your Angular style you can select off switch', 'appos'),
					'default' => true,
				),
				//Section Title
				array(
					'id'		=> 'appos_pricing_title',
					'type'		=> 'text',
					'title'		=> esc_html__('Section Title', 'appos'),
				),
				//Section subTitle
				array(
					'id'		=> 'appos_pricing_sub_title',
					'type'		=> 'textarea',
					'title'		=> esc_html__('Section Sub Title', 'appos'),
				),
				//Section Background
				array(
				'id' => 'appos_pricing_bg',
				'type' => 'color_picker',
				'title' => esc_html__('Pricing section background', 'appos'),
				'desc' => esc_html__('you have to change your backgoround color with match your font color', 'appos'),
				'default' => '#141817',
			),
			),
		),
		//========================
		// Contact section control
		//========================
		array(
			'name' => 'contact_section_option',
			'title' => esc_html__('Contact section', 'appos'),
			'icon' => 'fa fa-phone',
			'fields' => array(
				array(
				  	'type' => 'heading',
				  	'content' => esc_html__('Contact section settings', 'appos'),
			  	),
				array(
					'type' => 'notice',
					'class' => 'success',
					'content' => esc_html__('your contact sefction sections all settings here', 'appos'),
				),
				//angular switcher
				array(
					'id' => 'contact_angular_switch',
					'type' => 'switcher',
					'title' => esc_html__('Contact Angular switch','appos'),
					'desc' => esc_html__('if you want to oof your Angular style you can select off switch', 'appos'),
					'default' => true,
				),
				array(
				  	'id' => 'contact_section_background',
				  	'type' => 'color_picker',
			 	 	'title' => esc_html__('your contact section background', 'appos'),
			 	 	'desc' => esc_html__('you can change your sections background here', 'appos'),
				 	'default' => '#fff',
				 	'rgba' => true,
			  	),
				array(
					'id' => 'contact_section_title',
					'type' => 'text',
					'title' => esc_html__('your contact section title', 'appos'),
					'desc' => esc_html__('your contact section title here', 'appos'),
					'default' => esc_html__('CONTACT US', 'appos'),
				),
				array(
					'id' => 'contact_section_desc',
					'type' => 'wysiwyg',
					'title' => esc_html__('your contact description', 'appos'),
					'desc' => esc_html__('your contact section description here', 'appos'),
					'settings' => array(
				  		'textarea_rows' => 3,
			 		 	'tinymce'       => true,
			 		 	'media_buttons' => false,
				  	),
				),
				array(
				  	'type' => 'heading',
				  	'content' => esc_html__('contact information', 'appos'),
			  	),
				array(
				  	'id' => 'contact_section_title_left',
				  	'type' => 'text',
				  	'title' => esc_html__('contact info title', 'appos'),
			  	),
				array(
				  	'id'              => 'contact_info_group',
				  	'type'            => 'group',
				  	'title'           => esc_html__('Add contact tabs', 'appos'),
				  	'desc'            => esc_html__('You can add your contact  sections tabs here', 'appos'),
				  	'button_title'    => esc_html__('Add new tab', 'appos'),
				  	'accordion_title' => esc_html__('contact tab', 'appos'),
				  	'fields'          => array(
					  	array(
					    	'id'          => 'contact_tab_icon',
					    	'type'        => 'icon',
					    	'title'       => esc_html__('contact info icon', 'appos'),
					    	'desc' => esc_html__('You have to add icon on your info', 'appos'),
					    	'default' => 'fa fa-phone',
				  		),

					  	array(
					    	'id'          => 'contact_tab_info',
					    	'type'        => 'text',
					    	'title'       => esc_html__('Add contact info', 'appos'),
					    	'desc' => esc_html__('If you add contacct info and add a logo', 'appos'),
					  	),
					),
			  	),
				  
				array(
				  	'type' => 'heading',
				  	'content' => esc_html__('contact form 7', 'appos'),
			 	),
		 	 	array(
			    	'id' => 'contact_form_shortcode',
				  	'type' => 'wysiwyg',
				  	'title' => esc_html__('contact form 7 shortcode', 'appos'),
				  	'settings' => array(
					  	'textarea_rows' => 3,
					  	'tinymce'       => true,
					  	'media_buttons' => false,
				  	),
			  	),
			),
		),
		//Map Section
		array(
			'name'		=> 'appos_map',
			'title'		=> esc_html__('Map', 'appos'),
			'icon'		=> 'fa fa-map',
			'fields'	=> array(
				//Map Title
				array(
					'id'		=> 'appos_map_embed_code',
					'type'		=> 'textarea',
					'title'		=> esc_html__('Google Embed code', 'appos'),
				),
				
			),
		),
		
	),
);

//===========================
// Start footer section
//===========================
$options[] =array(
	'name' => 'appos_footer_option',
	'title' => esc_html__('Footer setting','appos'),
	'icon' => 'fa fa-chevron-down',
	'fields' => array(
		array(
			'type' => 'heading',
			'content' => esc_html__('Footer settings here','appos'),
		),
		array(
			'type' => 'notice',
			'content' => esc_html__('Your footer section settings here you can change your copyright text and social setting here','appos'),
			'class' => 'info',
		),
		//background
		array(
			'id' => 'footer_bg',
			'type' => 'color_picker',
			'title' => esc_html__('Footer section background','appos'),
			'desc' => esc_html__('Yoy can change footer background color', 'appos'),
			'default' => '#fff',
		),
		//copyright text
		array(
			'id' => 'footer_text',
			'type' => 'wysiwyg',
			'title' => esc_html__('Footer Text','appos'),
			'desc' => esc_html__('You can add footer text here', 'appos'),
			'default' => esc_html__('Copyright &copy; 2017 All rights reserved', 'appos'),
			'settings' => array(
			  'textarea_rows' => 3,
			  'tinymce'       => true,
			  'media_buttons' => false,
			),
		),
		//company name
		array(
			'id' => 'company_text',
			'type' => 'text',
			'title' => esc_html__('Company name', 'appos'),
			'content' => esc_html__('Your Company name', 'appos'),
			'default' => esc_html__('Russell Azim', 'appos'),
		),
		//company link
		 array(
			'id' => 'company_url',
			'type' => 'text',
			'title' => esc_html__('Company link', 'appos'),
			'content' => esc_html__('Your Company link', 'appos'),
		),
	),
);
// ------------------------------
// backup                       -
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => 'Backup',
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => 'You can save your current options. Download a Backup and Import.',
    ),

    array(
      'type'    => 'backup',
    ),

  )
);









CSFramework::instance( $settings, $options );
