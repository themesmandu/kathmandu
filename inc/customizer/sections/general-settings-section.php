<?php
/**
 * General settings section.
 *
 * @package Kathmandu
 */


/**
 *
 * Add Section
 */
Kirki::add_section(
	'general_options',
	array(
		'title' => __( 'General Settings', 'kathmandu' ),
	)
);

Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'     => 'toggle',
		'settings' => 'mainmenu_cart_toggle',
		'label'    => esc_html__( 'Show Shoping Cart', 'kathmandu' ),
		'section'  => 'general_options',
		'default'  => '1',
	)
);

Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'     => 'toggle',
		'settings' => 'skip_to_content_toggle',
		'label'    => esc_html__( 'Show Skip To Content', 'kathmandu' ),
		'section'  => 'general_options',
		'default'  => '1',
	)
);



Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'     => 'radio-buttonset',
		'settings' => 'menubar_mode',
		'label'    => esc_html__( 'Main Menu Bar Mode', 'kathmandu' ),
		'section'  => 'general_options',
		'default'  => 'standard',
		'choices'  => array(
			'standard' => esc_html__( 'Withought Search', 'kathmandu' ),
			'alt'      => esc_html__( 'With Search', 'kathmandu' ),
		),
	)
);

Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'     => 'radio-buttonset',
		'settings' => 'mainmenu_style',
		'label'    => esc_html__( 'Main Menu: Style', 'kathmandu' ),
		'section'  => 'general_options',
		'default'  => 'regular',
		'choices'  => array(
			'regular' => esc_html__( 'Regular', 'kathmandu' ),
			'fixed'   => esc_html__( 'Fixed', 'kathmandu' ),
		),
	)
);

Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'     => 'radio-image',
		'settings' => 'mainmenu_dropdown_mode',
		'label'    => esc_html__( 'Main Menu: Appearance(small screen)', 'kathmandu' ),
		'section'  => 'general_options',
		'default'  => 'default',
		'choices'  => array(
			'default'   => get_template_directory_uri() . '/assets/images/menu-left.png',
			'bootstrap' => get_template_directory_uri() . '/assets/images/menu-top.png',
		),
	)
);

Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'     => 'radio-image',
		'settings' => 'sidebar_position',
		'label'    => esc_html__( 'Sidebar Displays', 'kathmandu' ),
		'section'  => 'general_options',
		'default'  => 'right',
		'choices'  => array(
			'left'  => get_template_directory_uri() . '/assets/images/sidebar-left.png',
			'none'  => get_template_directory_uri() . '/assets/images/sidebar-none.png',
			'right' => get_template_directory_uri() . '/assets/images/sidebar-right.png',
		),
	)
);

// Setting sidebar bg.
Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'      => 'color',
		'settings'  => 'sidebar_bg',
		'label'     => __( 'Sidebar Background Color', 'kathmandu' ),
		'section'   => 'general_options',
		'default'   => '#ffffff',
		'choices'   => array(
			'alpha' => true,
		),
		'transport' => 'auto',
		'output'    => array(
			array(
				'element'  => '#sidebar .sidebar',
				'property' => 'background-color',
			),
		),
	)
);

// Setting sidebar color.
Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'      => 'color',
		'settings'  => 'sidebar_color',
		'label'     => __( 'Sidebar Color', 'kathmandu' ),
		'section'   => 'general_options',
		'default'   => '#020407',
		'choices'   => array(
			'alpha' => true,
		),
		'transport' => 'auto',
		'output'    => array(
			array(
				'element'  => '#sidebar .sidebar',
				'property' => 'color',
			),
		),
	)
);

Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'     => 'slider',
		'settings' => 'sidebar_bs_blur',
		'label'    => esc_html__( 'Sidebar Box Shadow Blur(px)', 'kathmandu' ),
		'section'  => 'general_options',
		'default'  => 0,
		'choices'  => array(
			'min'  => 0,
			'max'  => 50,
			'step' => 1,
		),
		'output'   => array(
			array(
				'element'         => '#sidebar .sidebar',
				'property'        => 'box-shadow',
				'value_pattern'   => '0px 0px $px shadow_spreadpx shadow_color',
				'pattern_replace' => array(
					'shadow_spread' => 'sidebar_bs_spread',
					'shadow_color'  => 'sidebar_bs_color',
				),
			),
		),
	)
);

Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'     => 'slider',
		'settings' => 'sidebar_bs_spread',
		'label'    => esc_html__( 'Sidebar Box Shadow Spread(px)', 'kathmandu' ),
		'section'  => 'general_options',
		'default'  => 0,
		'choices'  => array(
			'min'  => 0,
			'max'  => 50,
			'step' => 1,
		),
		'output'   => array(
			array(
				'element'         => '#sidebar .sidebar',
				'property'        => 'box-shadow',
				'value_pattern'   => '0px 0px shadow_blurpx $px shadow_color',
				'pattern_replace' => array(
					'shadow_color' => 'sidebar_bs_color',
					'shadow_blur'  => 'sidebar_bs_blur',
				),
			),
		),
	)
);

Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'     => 'color',
		'settings' => 'sidebar_bs_color',
		'label'    => __( 'Sidebar Box Shadow Color', 'kathmandu' ),
		'section'  => 'general_options',
		'default'  => 'rgba(0,0,0,0)',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'         => '#sidebar .sidebar',
				'property'        => 'box-shadow',
				'value_pattern'   => '0px 0px shadow_spreadpx shadow_blurpx $',
				'pattern_replace' => array(
					'shadow_spread' => 'sidebar_bs_spread',
					'shadow_blur'   => 'sidebar_bs_blur',
				),
			),
		),
	)
);

