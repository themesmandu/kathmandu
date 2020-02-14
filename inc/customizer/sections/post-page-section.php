<?php
/**
 * Post page settings section.
 *
 * @package Kathmandu
 */

$defaults = kathmandu_get_default_theme_options();
/**
 *
 * Add Section
 */
Kirki::add_section(
	'blog_options',
	array(
		'title'    => __( 'Posts Page Settings', 'kathmandu' ),
		'priority' => 170,
	)
);

// Settings.
Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'     => 'radio-image',
		'settings' => 'blog_pagination_mode',
		'label'    => esc_html__( 'Posts page navigation', 'kathmandu' ),
		'section'  => 'blog_options',
		'default'  => 'numeric',
		'choices'  => array(
			'standard' => get_template_directory_uri() . '/assets/images/standard-pagination.png',
			'numeric'  => get_template_directory_uri() . '/assets/images/numeric-pagination.png',
		),
	)
);

Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'        => 'text',
		'settings'    => 'more_link',
		'label'       => __( 'Read More button', 'kathmandu' ),
		'description' => __( 'Enter the button name which is a link to the full post. You can leave this blank if you want to hide the button.', 'kathmandu' ),
		'section'     => 'blog_options',
	)
);


Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'        => 'select',
		'settings'    => 'post_dropdown_setting',
		'label'       => esc_html__( 'Featured Post', 'kathmandu' ),
		'section'     => 'blog_options',
		'placeholder' => esc_html__( 'Select post...', 'kathmandu' ),
		'choices'     => Kirki_Helper::get_posts( array( 'post_type' => 'post' ) ),
	)
);


Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'     => 'slider',
		'settings' => 'post_bs_blur',
		'label'    => esc_html__( 'Post Box Shadow Blur(px)', 'kathmandu' ),
		'section'  => 'blog_options',
		'default'  => 0,
		'choices'  => array(
			'min'  => 0,
			'max'  => 50,
			'step' => 1,
		),
		'output'   => array(
			array(
				'element'         => 'article.post,article.page',
				'property'        => 'box-shadow',
				'value_pattern'   => '0px 0px $px shadow_spreadpx shadow_color',
				'pattern_replace' => array(
					'shadow_spread' => 'post_bs_spread',
					'shadow_color'  => 'post_bs_color',
				),
			),
		),
	)
);

Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'     => 'slider',
		'settings' => 'post_bs_spread',
		'label'    => esc_html__( 'Post Box Shadow Spread(px)', 'kathmandu' ),
		'section'  => 'blog_options',
		'default'  => 0,
		'choices'  => array(
			'min'  => 0,
			'max'  => 50,
			'step' => 1,
		),
		'output'   => array(
			array(
				'element'         => 'article.post,article.page',
				'property'        => 'box-shadow',
				'value_pattern'   => '0px 0px shadow_blurpx $px shadow_color',
				'pattern_replace' => array(
					'shadow_blur'  => 'post_bs_blur',
					'shadow_color' => 'post_bs_color',
				),
			),
		),
	)
);

Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'     => 'color',
		'settings' => 'post_bs_color',
		'label'    => __( 'Post Box Shadow Color', 'kathmandu' ),
		'section'  => 'blog_options',
		'default'  => 'rgba(0,0,0,0)',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'         => 'article.post,article.page',
				'property'        => 'box-shadow',
				'value_pattern'   => '0px 0px shadow_blurpx shadow_spreadpx $',
				'pattern_replace' => array(
					'shadow_blur'   => 'post_bs_blur',
					'shadow_spread' => 'post_bs_spread',
				),
			),
		),
	)
);


Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'     => 'radio-image',
		'settings' => 'blog_layout',
		'label'    => esc_html__( 'Layout Style', 'kathmandu' ),
		'section'  => 'blog_options',
		'default'  => 'standard',
		'choices'  => array(
			'standard' => get_template_directory_uri() . '/assets/images/blog-standard.png',
			'list'     => get_template_directory_uri() . '/assets/images/blog-list.png',
		),
	)
);

// sotarble content setting
Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'     => 'sortable',
		'settings' => 'kathmandu_theme_options[blog_sortable_content_sandard]',
		'label'    => esc_html__( 'Blog Content Layout(standard)', 'kathmandu' ),
		'section'  => 'blog_options',
		'default'  => $defaults['blog_sortable_content_sandard'],
		'choices'  => array(
			'title'     => esc_html__( 'Title', 'kathmandu' ),
			'thumbnail' => esc_html__( 'Thumbnail', 'kathmandu' ),
			'meta'      => esc_html__( 'Meta', 'kathmandu' ),
			'content'   => esc_html__( 'Content', 'kathmandu' ),
		),
	)
);

Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'     => 'sortable',
		'settings' => 'kathmandu_theme_options[blog_sortable_content_list]',
		'label'    => esc_html__( 'Blog Content Layout(list)', 'kathmandu' ),
		'section'  => 'blog_options',
		'default'  => $defaults['blog_sortable_content_list'],
		'choices'  => array(
			'image'       => esc_html__( 'Image', 'kathmandu' ),
			'content-all' => esc_html__( 'Other Content', 'kathmandu' ),
		),
	)
);

Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'     => 'sortable',
		'settings' => 'kathmandu_theme_options[blog_sortable_content_list2]',
		'label'    => esc_html__( 'Blog Content Layout(list meta)', 'kathmandu' ),
		'section'  => 'blog_options',
		'default'  => $defaults['blog_sortable_content_list2'],
		'choices'  => array(
			'title'   => esc_html__( 'Title', 'kathmandu' ),
			'meta'    => esc_html__( 'Meta', 'kathmandu' ),
			'content' => esc_html__( 'Content', 'kathmandu' ),

		),
	)
);

// Entry/Post/Page Title Color.
Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'      => 'color',
		'settings'  => 'title_color',
		'label'     => __( 'Entry/Post/Page Title Color', 'kathmandu' ),
		'section'   => 'blog_options',
		'default'   => $defaults['title_color'],
		'choices'   => array(
			'alpha' => true,
		),
		'transport' => 'auto',
		'output'    => array(
			array(
				'element'  => '.entry-title, .entry-title a, .page-title',
				'property' => 'color',
			),
		),
	)
);

// Entry/Post/Page Content Color.
Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'      => 'color',
		'settings'  => 'content_color',
		'label'     => __( 'Entry/Post/Page Content Color', 'kathmandu' ),
		'section'   => 'blog_options',
		'default'   => $defaults['content_color'],
		'choices'   => array(
			'alpha' => true,
		),
		'transport' => 'auto',
		'output'    => array(
			array(
				'element'  => 'article.post,article.page, article.post p, article.page p',
				'property' => 'color',
			),
		),
	)
);

// Blog Post Background.
Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'      => 'color',
		'settings'  => 'entry_bgcolor',
		'label'     => __( 'Blog Post Background', 'kathmandu' ),
		'section'   => 'blog_options',
		'default'   => $defaults['entry_bgcolor'],
		'choices'   => array(
			'alpha' => true,
		),
		'transport' => 'auto',
		'output'    => array(
			array(
				'element'  => 'article.post, article.page',
				'property' => 'background-color',
			),
		),
	)
);

// Blog Post: Footer Background.
Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'      => 'color',
		'settings'  => 'entry_footer_bgcolor',
		'label'     => __( 'Blog Post: Footer Background', 'kathmandu' ),
		'section'   => 'blog_options',
		'default'   => $defaults['entry_footer_bgcolor'],
		'choices'   => array(
			'alpha' => true,
		),
		'transport' => 'auto',
		'output'    => array(
			array(
				'element'  => '.card-footer',
				'property' => 'background-color',
			),
		),
	)
);

// Meta Text Color.
Kirki::add_field(
	'kathmandu_kirki_config',
	array(
		'type'      => 'color',
		'settings'  => 'meta_color',
		'label'     => __( 'Meta Text Color', 'kathmandu' ),
		'section'   => 'blog_options',
		'default'   => $defaults['meta_color'],
		'choices'   => array(
			'alpha' => true,
		),
		'transport' => 'auto',
		'output'    => array(
			array(
				'element'  => '.entry-footer, .entry-meta, .single-post .navigation .column',
				'property' => 'color',
			),
		),
	)
);
