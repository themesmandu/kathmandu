<?php
/**
 * Footer settings section.
 *
 * @package Kathmandu
 */

$defaults = kathmandu_get_default_theme_options();

/**
 *
 * Add Section
 */
Kirki::add_section(
	'footer_options',
	array(
		'title' => __( 'Footer Settings', 'kathmandu' ),
	)
);

// Setting background image
Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'     => 'image',
		'settings' => 'footer_bg',
		'label'    => esc_html__( 'Footer Background Image', 'kathmandu' ),
		'section'  => 'footer_options',
		'output'   => array(
			array(
				'element'  => '#footer',
				'property' => 'background-image',
			),
		),

	)
);



// Setting gradient overlay.
Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'      => 'color',
		'settings'  => 'footer_overlay',
		'label'     => esc_html__( 'Footer Background Overlay', 'kathmandu' ),
		'section'   => 'footer_options',
		'default'   => $defaults['footer_overlay'],
		'choices'   => array(
			'alpha' => true,
		),
		'transport' => 'auto',
		'output'    => array(
			array(
				'element'  => '#footer .overlay',
				'property' => 'background',
			),
		),
	)
);

// Footer Text Color.
Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'      => 'color',
		'settings'  => 'footer_color',
		'label'     => __( 'Footer Text Color', 'kathmandu' ),
		'section'   => 'footer_options',
		'default'   => $defaults['footer_color'],
		'choices'   => array(
			'alpha' => true,
		),
		'transport' => 'auto',
		'output'    => array(
			array(
				'element'  => '#footer',
				'property' => 'color',
			),
		),
	)
);



// Setting heading.
Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'        => 'text',
		'settings'    => 'footer_title',
		'label'       => __( 'Footer Heading', 'kathmandu' ),
		'description' => __( 'Note: If left empty site title will appear.', 'kathmandu' ),
		'section'     => 'footer_options',
	)
);

// Setting copyright.
Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'     => 'editor',
		'settings' => 'footer_copyright',
		'label'    => __( 'Copyright Text', 'kathmandu' ),
		'section'  => 'footer_options',
		'default'  => '',
	)
);

