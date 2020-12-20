<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();
// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------

// -----------------------------------------
// Member Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_custom_member_options',
  'title'     => 'Member Options',
  'post_type' => 'appos_team',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(
	//Member Metabox
    array(
      'name'   => 'appos_member_info',
      'fields' => array(
		//Member Designation
        array(
            'id'        => 'appos_member_desi',
            'type'      => 'text',
            'title'     => esc_html__('Member Designation', 'appos'),
            'default'   => esc_html__('Founder', 'appos'),
        ),
		//member Social Area
		array(
			'id'		=> 'appos_team_social_prifile',
			'title'		=> esc_html__('Member Social Profile', 'appos'),
			'type'		=> 'group',
			'button_title'		=> esc_html__('ADD Profile', 'appos'),
			'fields'		=> array(
				//Social Icon
				array(
					'id'		=> 'appos_team_social_icon',
					'type'		=> 'icon',
					'title'		=> esc_html__('Social Icon', 'appos'),
					'default'		=> 'fa fa-facebook',
				),
				//Social Link
				array(
					'id'		=> 'appos_team_social_link',
					'type'		=> 'text',
					'title'		=> esc_html__('Social Link', 'appos'),
					'default'		=> 'www.fb.com/user',
				),
			),
		),
		
      ),
    ),
  ),
);
// -----------------------------------------
// Pricing Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_custom_pricing_options',
  'title'     => 'Pricing Options',
  'post_type' => 'appos_pricing_table',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(
		array(
			'name'		=> 'appos_pricing_info',
			'fields'	=> array(
				//Currency Setting
				array(
					'id'		=> 'appos_pricing_currency',
					'type'		=> 'icon',
					'title'		=> esc_html__('Currency Icon', 'appos'),
				),
				//Price Setting
				array(
					'id'		=> 'appos_pricing_package_price',
					'type'		=> 'text',
					'title'		=> esc_html__('Package Price', 'appos'),
				),
				//Price duration
				array(
					'id'		=> 'appos_pricing_package_duration',
					'type'		=> 'text',
					'title'		=> esc_html__('Package Duration', 'appos'),
				),
				//Price info
				array(
					'id'				=> 'appos_pricing_package_info',
					'type'				=> 'group',
					'title'				=> esc_html__('Package Information', 'appos'),
					'button_title'		=> esc_html__('Add Pricing Details', 'appos'),
					'fields'			=> array(
						//Pricing Details
						array(
							'id'			=> 'appos_pricing_package_details',
							'type'			=> 'text',
							'title'			=> esc_html__('Package Details', 'appos'),
						),
					),
				),
				//Pricing Link Text
				array(
					'id'		=> 'appos_pricing_paid_link_text',
					'type'		=> 'text',
					'title'		=> esc_html__('Button Title', 'appos'),
				),
				//Pricing Link
				array(
					'id'		=> 'appos_pricing_paid_link',
					'type'		=> 'text',
					'title'		=> esc_html__('Payment URL', 'appos'),
				),
			),
		),
	),
);
CSFramework_Metabox::instance( $options );