<?php
/**
 * Typography headings settings section.
 *
 * @package Kathmandu
 */


/**
 *
 * Add Section
 */

Kirki::add_section(
	'typography_headings_options',
	array(
		'title' => __( 'Headings', 'kathmandu' ),
		'panel' => 'typography_options',
	)
);

Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'      => 'typography',
		'settings'  => 'typography_headings_h1',
		'label'     => esc_html__( 'H1', 'kathmandu' ),
		'section'   => 'typography_headings_options',
		'default'   => array(
			'font-family'    => 'Nunito',
			'variant'        => 'regular',
			'font-size'      => '48px',
			'line-height'    => '1.3',
			'letter-spacing' => '0',
		),
		'output'    => array(
			array(
				'element' => 'h1',
			),
		),
		'transport' => 'auto',

	)
);

Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'      => 'typography',
		'settings'  => 'typography_headings_h2',
		'label'     => esc_html__( 'H2', 'kathmandu' ),
		'section'   => 'typography_headings_options',
		'default'   => array(
			'font-family'    => 'Nunito',
			'variant'        => 'regular',
			'font-size'      => '36px',
			'line-height'    => '1.3',
			'letter-spacing' => '0',
		),
		'output'    => array(
			array(
				'element' => 'h2',
			),
		),
		'transport' => 'auto',

	)
);

Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'      => 'typography',
		'settings'  => 'typography_headings_h3',
		'label'     => esc_html__( 'H3', 'kathmandu' ),
		'section'   => 'typography_headings_options',
		'default'   => array(
			'font-family'    => 'Nunito',
			'variant'        => 'regular',
			'font-size'      => '32px',
			'line-height'    => '1.3',
			'letter-spacing' => '0',
		),
		'output'    => array(
			array(
				'element' => 'h3',
			),
		),
		'transport' => 'auto',

	)
);

Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'      => 'typography',
		'settings'  => 'typography_headings_h4',
		'label'     => esc_html__( 'H4', 'kathmandu' ),
		'section'   => 'typography_headings_options',
		'default'   => array(
			'font-family'    => 'Nunito',
			'variant'        => 'regular',
			'font-size'      => '28px',
			'line-height'    => '1.3',
			'letter-spacing' => '0',
		),
		'output'    => array(
			array(
				'element' => 'h4',
			),
		),
		'transport' => 'auto',

	)
);


Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'      => 'typography',
		'settings'  => 'typography_headings_h5',
		'label'     => esc_html__( 'H5', 'kathmandu' ),
		'section'   => 'typography_headings_options',
		'default'   => array(
			'font-family'    => 'Nunito',
			'variant'        => 'regular',
			'font-size'      => '24px',
			'line-height'    => '1.3',
			'letter-spacing' => '0',
		),
		'output'    => array(
			array(
				'element' => 'h5',
			),
		),
		'transport' => 'auto',

	)
);


Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'      => 'typography',
		'settings'  => 'typography_headings_h6',
		'label'     => esc_html__( 'H6', 'kathmandu' ),
		'section'   => 'typography_headings_options',
		'default'   => array(
			'font-family'    => 'Nunito',
			'variant'        => 'regular',
			'font-size'      => '18px',
			'line-height'    => '1.3',
			'letter-spacing' => '0',
		),
		'output'    => array(
			array(
				'element' => 'h6',
			),
		),
		'transport' => 'auto',

	)
);
