<?php
define('SIMPLESHOP_CUSTOMIZER_CF', 'simpleshope_theme_panel');
define('SIMPLESHOP_CUSTOMIZER_PANEL', 'simpleshope_theme_panel');


if(class_exists('Kirki')){

Kirki::add_config( 'SIMPLESHOP_CUSTOMIZER_CF' );

Kirki::add_section( 'SIMPLESHOP_SECTION', [
	'title'    => esc_html__( 'SIMPLESHOP THEME', 'simpleshop' ),
    'priority' => 201,
] );


//-------------- TYPOGRAPHY SECTION ---------------- //

// ------------ H1 TYPOGRAPHY --------------//

Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'switch',
	'settings'    => 'typography_h1',
		'label'       => esc_html__( 'Show / Hide H1 TYPOGRAPHY', 'simpleshop' ),
		'description' => esc_html__( 'Show or Hide H1 Typography Section', 'simpleshop' ),
		'section'     => 'SIMPLESHOP_SECTION',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'simpleshop' ),
			'off' => esc_html__( 'Hide', 'simpleshop' ),
		],

] );

Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'typography',
	'settings'  => 'typography_setting',
	'label'       => esc_html__( 'H1 typography', 'simpleshop' ),
		'section'     => 'SIMPLESHOP_SECTION',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
		  'font-family'     => 'Source Sans Pro','sans-serif',
		  'variant'         => '',
		  'font-style'      => '',
		  'color'           => '',
		  'font-size'       => '',
		  'line-height'     => '',
	       'letter-spacing'  => '',
		  'text-transform'  => '',
		  'text-decoration' => '',
		  'text-align'      => '',
		],
	'active_callback'=> [
        [
          'setting'  => 'typography_h1',
          'operator' => '==',
          'value'    => true,
       ]
    ]
] );



// // ------------ H2 TYPOGRAPHY --------------//
// Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
// 	'type'      => 'switch',
// 	'settings'    => 'typography_h2',
// 		'label'       => esc_html__( 'Show / Hide H2 Section', 'simpleshop' ),
// 		'description' => esc_html__( 'Show or Hide H2 Typography Section', 'simpleshop' ),
// 		'section'     => 'SIMPLESHOP_SECTION',
// 		'default'     => 'off',
// 		'choices'     => [
// 			'on'  => esc_html__( 'Show', 'simpleshop' ),
// 			'off' => esc_html__( 'Hide', 'simpleshop' ),
// 		],

// ] );

// Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
// 	'type'      => 'typography',
// 	'settings'  => 'typography_setting_h2',
// 	'label'       => esc_html__( 'H2 typography', 'simpleshop' ),
// 		'section'     => 'SIMPLESHOP_SECTION',
// 		'priority'    => 10,
// 		'transport'   => 'auto',
// 		'default'     => [
// 		  'font-family'     => 'Source Sans Pro','sans-serif',
// 		  'variant'         => '',
// 		  'font-style'      => '',
// 		  'color'           => '',
// 		  'font-size'       => '',
// 		  'line-height'     => '',
// 	       'letter-spacing'  => '',
// 		  'text-transform'  => '',
// 		  'text-decoration' => '',
// 		  'text-align'      => '',
// 		],
// 		'active_callback'=> [
// 	        [
// 	          'setting'  => 'typography_h2',
// 	          'operator' => '==',
// 	          'value'    => true,
// 	       ]
// 	    ]
// ] );



// // ------------ H3 TYPOGRAPHY --------------//
// Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
// 	'type'      => 'switch',
// 	'settings'    => 'typography_h3',
// 		'label'       => esc_html__( 'Show / Hide H3 Section', 'simpleshop' ),
// 		'description' => esc_html__( 'Show or Hide H3 Typography Section', 'simpleshop' ),
// 		'section'     => 'SIMPLESHOP_SECTION',
// 		'default'     => 'off',
// 		'choices'     => [
// 			'on'  => esc_html__( 'Show', 'simpleshop' ),
// 			'off' => esc_html__( 'Hide', 'simpleshop' ),
// 		],

// ] );

// Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
// 	'type'      => 'typography',
// 	'settings'  => 'typography_setting_3',
// 	'label'       => esc_html__( 'H3 typography', 'simpleshop' ),
// 		'section'     => 'SIMPLESHOP_SECTION',
// 		'priority'    => 10,
// 		'transport'   => 'auto',
// 		'default'     => [
// 		  'font-family'     => 'Source Sans Pro','sans-serif',
// 		  'variant'         => '',
// 		  'font-style'      => '',
// 		  'color'           => '',
// 		  'font-size'       => '',
// 		  'line-height'     => '',
// 	       'letter-spacing'  => '',
// 		  'text-transform'  => '',
// 		  'text-decoration' => '',
// 		  'text-align'      => '',
// 		],
// 		'active_callback'=> [
// 	        [
// 	          'setting'  => 'typography_h3',
// 	          'operator' => '==',
// 	          'value'    => true,
// 	       ]
// 	    ]
// ] );


// // ------------ H4 TYPOGRAPHY --------------//
// Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
// 	'type'      => 'switch',
// 	'settings'    => 'typography_h4',
// 		'label'       => esc_html__( 'Show / Hide H4 Section', 'simpleshop' ),
// 		'description' => esc_html__( 'Show or Hide H4 Typography Section', 'simpleshop' ),
// 		'section'     => 'SIMPLESHOP_SECTION',
// 		'default'     => 'off',
// 		'choices'     => [
// 			'on'  => esc_html__( 'Show', 'simpleshop' ),
// 			'off' => esc_html__( 'Hide', 'simpleshop' ),
// 		],

// ] );
// Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
// 	'type'      => 'typography',
// 	'settings'  => 'typography_setting_4',
// 	'label'       => esc_html__( 'H4 typography', 'simpleshop' ),
// 		'section'     => 'SIMPLESHOP_SECTION',
// 		'priority'    => 10,
// 		'transport'   => 'auto',
// 		'default'     => [
// 		  'font-family'     => 'Source Sans Pro','sans-serif',
// 		  'variant'         => '',
// 		  'font-style'      => '',
// 		  'color'           => '',
// 		  'font-size'       => '',
// 		  'line-height'     => '',
// 	       'letter-spacing'  => '',
// 		  'text-transform'  => '',
// 		  'text-decoration' => '',
// 		  'text-align'      => '',
// 		],
// 		'active_callback'=> [
// 	        [
// 	          'setting'  => 'typography_h4',
// 	          'operator' => '==',
// 	          'value'    => true,
// 	        ]
// 	    ]
// ] );



// // ------------ H5 TYPOGRAPHY --------------//
// Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
// 	'type'      => 'switch',
// 	'settings'    => 'typography_h5',
// 		'label'       => esc_html__( 'Show / Hide H5 Section', 'simpleshop' ),
// 		'description' => esc_html__( 'Show or Hide H5 Typography Section', 'simpleshop' ),
// 		'section'     => 'SIMPLESHOP_SECTION',
// 		'default'     => 'off',
// 		'choices'     => [
// 			'on'  => esc_html__( 'Show', 'simpleshop' ),
// 			'off' => esc_html__( 'Hide', 'simpleshop' ),
// 		],

// ] );

// Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
// 	'type'      => 'typography',
// 	'settings'  => 'typography_setting_5',
// 	'label'       => esc_html__( 'H5 typography', 'simpleshop' ),
// 		'section'     => 'SIMPLESHOP_SECTION',
// 		'priority'    => 10,
// 		'transport'   => 'auto',
// 		'default'     => [
// 		  'font-family'     => 'Source Sans Pro','sans-serif',
// 		  'variant'         => '',
// 		  'font-style'      => '',
// 		  'color'           => '',
// 		  'font-size'       => '',
// 		  'line-height'     => '',
// 	       'letter-spacing'  => '',
// 		  'text-transform'  => '',
// 		  'text-decoration' => '',
// 		  'text-align'      => '',
// 		],
// 		'active_callback'=> [
// 	        [
// 	          'setting'  => 'typography_h5',
// 	          'operator' => '==',
// 	          'value'    => true,
// 	       ]
// 	    ]
// ] );


// // ------------ H6 TYPOGRAPHY --------------//
// Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
// 	'type'      => 'switch',
// 	'settings'    => 'typography_h6',
// 		'label'       => esc_html__( 'Show / Hide H6 Section', 'simpleshop' ),
// 		'description' => esc_html__( 'Show or Hide H6 Typography Section', 'simpleshop' ),
// 		'section'     => 'SIMPLESHOP_SECTION',
// 		'default'     => 'off',
// 		'choices'     => [
// 			'on'  => esc_html__( 'Show', 'simpleshop' ),
// 			'off' => esc_html__( 'Hide', 'simpleshop' ),
// 		],


// ] );
// Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
// 	'type'      => 'typography',
// 	'settings'  => 'typography_setting_6',
// 	'label'       => esc_html__( 'H6 typography', 'simpleshop' ),
// 		'section'     => 'SIMPLESHOP_SECTION',
// 		'priority'    => 10,
// 		'transport'   => 'auto',
// 		'default'     => [
// 		  'font-family'     => 'Source Sans Pro','sans-serif',
// 		  'variant'         => '',
// 		  'font-style'      => '',
// 		  'color'           => '',
// 		  'font-size'       => '',
// 		  'line-height'     => '',
// 	       'letter-spacing'  => '',
// 		  'text-transform'  => '',
// 		  'text-decoration' => '',
// 		  'text-align'      => '',
// 		],
// 		'active_callback'=> [
// 	        [
// 	          'setting'  => 'typography_h6',
// 	          'operator' => '==',
// 	          'value'    => true,
// 	       ]
// 	    ]
// ] );



Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'       => 'color',
	'settings'   => 'color_setting_hex',
	'label'      => __( 'H1 - H6 Color', 'simpleshop' ),
	'section'    => 'SIMPLESHOP_SECTION',
	'default'    => '#242424',
	'priority'   => 10,

] );



//--------------SITE LOGO ---------------- //

Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'image',
	'settings'  => 'site_logo',
	'label'     => esc_html__( 'Add Site Logo', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
    'default'    => get_template_directory_uri().'/assets/img/logo.png',
    'priority'   => 10,

] );



//--------------HERO SECTION---------------- //

Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'switch',
	'settings'    => 'show_hero',
		'label'       => esc_html__( 'HERO SECTION', 'simpleshop' ),
		'description' => esc_html__( 'Show or Hide Hero Section', 'simpleshop' ),
		'section'     => 'SIMPLESHOP_SECTION',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'simpleshop' ),
			'off' => esc_html__( 'Hide', 'simpleshop' ),
		],

] );

Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'image',
	'settings'  => 'image_setting_url',
	'label'     => esc_html__( 'Upload Hero Image', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
    'default'     => get_template_directory_uri().'/assets/img/hero.jpg',
	'priority'  => 10,
	'active_callback'=> [
        [
          'setting'  => 'show_hero',
          'operator' => '==',
          'value'    => true,
       ]
	]
] );


Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'text',
	'settings'  => 'hero_heading',
	'label'     => esc_html__( 'Add Hero Heading', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
	'default'   => 'Olive color winter jacket for ladies',
	'priority'  => 10,
	'active_callback'=> [
          [
            'setting'  => 'show_hero',
            'operator' => '==',
            'value'    => true,
          ]
	  ]
] );


Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'text',
	'settings'  => 'hero_link_text',
	'label'     => esc_html__( 'Add Link Text', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
	'default'     => esc_html__( 'Winter Fashion', 'simpleshop' ),
	'priority'  => 10,
	'active_callback'=> [
     
             [

              'setting'  => 'show_hero',
              'operator' => '==',
              'value'    => true,
 
             ]

		]
] );

Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'url',
	'settings'  => 'hero_link_address',
	'label'     => esc_html__( 'Add Link', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
	'default'   => 'https://mysite.com',
	'priority'  => 10,
	'active_callback'=> [
             [
              'setting'  => 'show_hero',
              'operator' => '==',
              'value'    => true,
             ]
		]
] );



//--------------SHOP CATEGORY SECTION---------------- //

Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'switch',
	'settings'    => 'show_hide_shop_category_section',
		'label'       => esc_html__( 'SHOP CATEGORY SECTION', 'simpleshop' ),
		'description' => esc_html__( 'Show or Hide Shop Category Section', 'simpleshop' ),
		'section'     => 'SIMPLESHOP_SECTION',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'simpleshop' ),
			'off' => esc_html__( 'Hide', 'simpleshop' ),
		],
] );


Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'text',
	'settings'  => 'shop_section_title',
	'label'     => esc_html__( 'Add Section Title', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
	'default'     => esc_html__ ( 'Shop By Category','simpleshop'),
	'priority'  => 10,
	'active_callback'=> [
     
             [

              'setting'  => 'show_hide_shop_category_section',
              'operator' => '==',
              'value'    => true,
 
             ]

		]
] );



Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'select',
	'settings'  => 'num_of_col',
	'label'     => esc_html__( 'Number of column', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
	'priority'  => 10,
	'default'     => 3,
	'choices'     => [
			2 => esc_html__( '2', 'simpleshop' ),
			3 => esc_html__( 'Default', 'simpleshop' ),
			4 => esc_html__( '4', 'simpleshop' ),
			5 => esc_html__( '5', 'simpleshop' ),
		],
	
	'active_callback'=> [
     
             [

              'setting'  => 'show_hide_shop_category_section',
              'operator' => '==',
              'value'    => true,
 
             ]

		]
] );


Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'switch',
	'settings'    => 'show_hide_cat_count_number',
		'label'       => esc_html__( 'Show / Hide Category Count Number', 'simpleshop' ),
		'section'     => 'SIMPLESHOP_SECTION',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'simpleshop' ),
			'off' => esc_html__( 'Hide', 'simpleshop' ),
		],
] );


Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'text',
	'settings'  => 'display_cat_count_num',
	'section'   => 'SIMPLESHOP_SECTION',
	'default'     => '1',
	'priority'  => 10,
	'active_callback'=> [
             [
              'setting'  => 'show_hide_cat_count_number',
              'operator' => '==',
              'value'    => true,
             ]
		]
] );


//--------------NEW ARRIVAL SECTION---------------- //

Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'switch',
	'settings'    => 'show_hide_new_arrival_product_section',
		'label'       => esc_html__( 'NEW ARRIVAL SECTION', 'simpleshop' ),
		'description' => esc_html__( 'Show or Hide New Arrival Product Section', 'simpleshop' ),
		'section'     => 'SIMPLESHOP_SECTION',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'simpleshop' ),
			'off' => esc_html__( 'Hide', 'simpleshop' ),
		],
] );


Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'text',
	'settings'  => 'new_arrival_product_title',
	'label'     => esc_html__( 'Add Arrival Section Title', 'simpleshop' ),
	'default'     => 'New Arrival',
	'section'   => 'SIMPLESHOP_SECTION',
	'priority'  => 10,
	'active_callback'=> [
     
             [

              'setting'  => 'show_hide_new_arrival_product_section',
              'operator' => '==',
              'value'    => true,
 
             ]

		]
] );

Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'text',
	'settings'  => 'new_arrival_product_sub_title',
	'label'     => esc_html__( 'Add Section Sub Title', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
	'priority'  => 10,
	'active_callback'=> [
     
         [

          'setting'  => 'show_hide_new_arrival_product_section',
          'operator' => '==',
          'value'    => true,

         ]
	]
] );


//--------------PROMO SECTION---------------- //

Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'switch',
	'settings'    => 'show_hide_promo_section',
		'label'       => esc_html__( 'PROMO SECTION', 'simpleshop' ),
		'description' => esc_html__( 'Show or Hide Promo Section', 'simpleshop' ),
		'section'     => 'SIMPLESHOP_SECTION',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'simpleshop' ),
			'off' => esc_html__( 'Hide', 'simpleshop' ),
		],
] );



Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'image',
	'settings'  => 'image_setting_id',
	'label'     => esc_html__( 'Upload Promo Image', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
    'default'     => get_template_directory_uri().'/assets/img/sb.jpg',
    'priority'  => 10,
    'active_callback'=> [
         [
          'setting'  => 'show_hide_promo_section',
          'operator' => '==',
          'value'    => true,
         ]
	]

] );

Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'color',
	'settings'  => 'color_setting_hex',
	'label'       => __( 'Overlay Color', 'simpleshop' ),
		'section'     => 'SIMPLESHOP_SECTION',
		'default'     => '#242424',
    'priority'  => 10,
    'active_callback'=> [
         [
          'setting'  => 'show_hide_promo_section',
          'operator' => '==',
          'value'    => true,
         ]
	],

] );


Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'slider',
	'settings'  => 'slider_setting',
		'section'     => 'SIMPLESHOP_SECTION',
		'default'     => 0.1,
		'choices'     => [
			'min'  => 0.5,
			'max'  => 1,
			'step' => 5,
		],
		'active_callback'=> [
         [
          'setting'  => 'show_hide_promo_section',
          'operator' => '==',
          'value'    => true,
         ]
	],

] );




Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'text',
	'settings'  => 'promo_section_title',
	'label'     => esc_html__( 'Add Promo Title', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
	'priority'  => 10,
	'default'     => esc_html__('Sale','simpleshop'),
	'active_callback'=> [
         [
          'setting'  => 'show_hide_promo_section',
          'operator' => '==',
          'value'    => true,
         ]
	  ]
] );



Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'text',
	'settings'  => 'promo_sub_title',
	'label'     => esc_html__( 'Add Promo Sub Title', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
	'priority'  => 10,
	'default'     => esc_html__('Up to 50% off','simpleshop'),
	'active_callback'=> [
         [
          'setting'  => 'show_hide_promo_section',
          'operator' => '==',
          'value'    => true,
         ]
	  ]
] );


Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'text',
	'settings'  => 'promo_link_text',
	'label'     => esc_html__( 'Button Link Text', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
	'priority'  => 10,
	'default'     => esc_html__('in store and online','simpleshop'),
	'active_callback'=> [
         [
          'setting'  => 'show_hide_promo_section',
          'operator' => '==',
          'value'    => true,
         ]
	  ]
] );


Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'url',
	'settings'  => 'promo_link_url',
	'label'     => esc_html__( 'Button Link', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
	'priority'  => 10,
	'default'     => esc_html__('#','simpleshop'),
	'active_callback'=> [
         [
          'setting'  => 'show_hide_promo_section',
          'operator' => '==',
          'value'    => true,
         ]
	  ]
] );




//--------------POPULAR SECTION---------------- //

Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'switch',
	'settings'    => 'show_hide_popular_category_section',
		'label'       => esc_html__( 'POPULAR SECTION', 'simpleshop' ),
		'description' => esc_html__( 'Show or Hide Popular Section', 'simpleshop' ),
		'section'     => 'SIMPLESHOP_SECTION',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'simpleshop' ),
			'off' => esc_html__( 'Hide', 'simpleshop' ),
		],
] );


Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'text',
	'settings'  => 'popular_section_title',
	'label'     => esc_html__( 'Add Section Title', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
	'default'     => esc_html__ ( 'Popular Product','simpleshop'),
	'priority'  => 10,
	'active_callback'=> [
     
         [

          'setting'  => 'popular_section_title',
          'operator' => '==',
          'value'    => true,

         ]
	]
] );



//--------------OFFER SECTION---------------- //

Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'switch',
	'settings'    => 'show_hide_offer_section',
		'label'       => esc_html__( 'OFFER SECTION', 'simpleshop' ),
		'description' => esc_html__( 'Show or Hide Offter Section', 'simpleshop' ),
		'section'     => 'SIMPLESHOP_SECTION',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'simpleshop' ),
			'off' => esc_html__( 'Hide', 'simpleshop' ),
		],
] );




//--------------FLICKR SECTION---------------- //

Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'switch',
	'settings'    => 'show_hide_flickr_section',
		'label'       => esc_html__( 'FLICKR SECTION', 'simpleshop' ),
		'description' => esc_html__( 'Show or Hide Flickr Section', 'simpleshop' ),
		'section'     => 'SIMPLESHOP_SECTION',
		'priority'  => 10,
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'simpleshop' ),
			'off' => esc_html__( 'Hide', 'simpleshop' ),
		],
] );


Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'text',
	'settings'  => 'flickr_section_title',
	'label'     => esc_html__( 'Add Section Title', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
	'default'     => esc_html__ ( 'Simple Shop on Flickr','simpleshop'),
	'priority'  => 10,
	'active_callback'=> [
     
         [

          'setting'  => 'show_hide_flickr_section',
          'operator' => '==',
          'value'    => true,

         ]
	]
] );


Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'text',
	'settings'  => 'flickr_gallery_image_num',
	'label'     => esc_html__( 'Numbeor of Photo', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
	'default'     => esc_html__ ( '8','simpleshop'),
	'priority'  => 10,
	'active_callback'=> [
     
         [

          'setting'  => 'show_hide_flickr_section',
          'operator' => '==',
          'value'    => true,

         ]
	]
] );


Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'text',
	'settings'  => 'flickr_gallery_id',
	'label'     => esc_html__( 'Photo Gallery ID', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
	'default'     => esc_html__ ( '199342056@N05','simpleshop'),
	'priority'  => 10,
	'active_callback'=> [
     
         [

          'setting'  => 'show_hide_flickr_section',
          'operator' => '==',
          'value'    => true,

         ]
	]
] );



//--------------ABOUT SECTION---------------- //

Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'switch',
	'settings'    => 'show_hide_about_section',
		'label'       => esc_html__( 'ABOUT SECTION', 'simpleshop' ),
		'description' => esc_html__( 'Show or Hide About Section', 'simpleshop' ),
		'section'     => 'SIMPLESHOP_SECTION',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'simpleshop' ),
			'off' => esc_html__( 'Hide', 'simpleshop' ),
		],
] );


Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'image',
	'settings'  => 'about_hero_banner',
	'label'     => esc_html__( 'ABOUT SECTION', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
    'default'     => get_template_directory_uri().'/assets/img/about.jpg',
    'active_callback'=> [
     
         [

          'setting'  => 'show_hide_about_section',
          'operator' => '==',
          'value'    => true,

         ]
	]
] );


Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'text',
	'settings'  => 'about_team_title',
	'label'     => esc_html__( 'Team Section Title', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
	'default'     => esc_html__('Meet The Teams'),
	'active_callback'=> [
     
         [

          'setting'  => 'show_hide_about_section',
          'operator' => '==',
          'value'    => true,

         ]
	]
] );


//-------------- TEAM SECTION ( IN ABOUT PAGE )---------------- //

Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'textarea',
	'settings'  => 'about_team_desc',
	'label'     => esc_html__( 'Team Section Description', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
	'default'     => esc_html__('Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet'),
	'active_callback'=> [
     
         [

          'setting'  => 'show_hide_about_section',
          'operator' => '==',
          'value'    => true,

         ]
	]
] );

Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'        => 'repeater',
	'settings'    => 'team_repeater_box',
	'label'    => esc_html__( 'Team Members', 'simpleshop' ),
	'section'  => 'SIMPLESHOP_SECTION',
	'default'  => [
			'image'   => [
				'type'        => 'image',
				'settings'  => 'team_img',
				'label'       => esc_html__( 'Upload Team Image', 'simpleshop' ),
				'default'     => get_template_directory_uri().'/assets/img/p1.jpg',
				'priority'  => 10,
			],
			'text'    => [
				'type'        => 'text',
				'settings'  => 'team_memeber_title',
				'label'       => esc_html__( 'Title', 'simpleshop' ),
				'default'     => 'Luther Frankil',
				'priority'  => 10,
			],
			'textarea'    => [
				'type'        => 'textarea',
				'settings'  => 'team_memeber_pos',
				'label'       => esc_html__( 'Member Designation', 'simpleshop' ),
				'default'     => 'Fashion Designer',
				'priority'  => 11,
			],

		],
	'fields'   => [
			'image'   => [
				'type'        => 'image',
				'settings'    => 'team_img',
				'label'       => esc_html__( 'Upload Team Image', 'simpleshop' ),
				'default'     => '',
				'priority'  => 10,
			],
			'text'    => [
				'type'        => 'text',
				'settings'    => 'team_title',
				'label'       => esc_html__( 'Title', 'simpleshop' ),
				'default'     => 'Luther Frankil',
				'priority'  => 10,
			],
			'textarea'    => [
				'type'        => 'textarea',
				'settings'    => 'team_memeber_pos',
				'label'       => esc_html__( 'Member Designation', 'simpleshop' ),
				'default'     => 'Fashion Designer',
				'priority'  => 11,
			],

		],
	'active_callback'=> [
         [
          'setting'  => 'show_hide_about_section',
          'operator' => '==',
          'value'    => true,
         ]
	]

] );


Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'select',
	'settings'  => 'team_col',
	'label'     => esc_html__( 'Team Number of column', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
	'priority'  => 10,
	'default'     => 3,
	'choices'     => [
		 2 => esc_html__( '2 Columns', 'simpleshop' ),
		 3 => esc_html__( 'Default ( 3 Columns )', 'simpleshop' ),
		 4 => esc_html__( '4 Columns', 'simpleshop' ),
		],
	
	'active_callback'=> [
         [

          'setting'  => 'show_hide_about_section',
          'operator' => '==',
          'value'    => true,
         ]
	]
] );




//--------------CONTACT SECTION---------------- //

Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'image',
	'settings'  => 'contact_hero_banner',
	'label'     => esc_html__( 'CONTACT SECTION', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
    'default'     => get_template_directory_uri().'/assets/img/contact.jpg',
    'priority'  => 12,
] );




//--------------FOOTER SECTION---------------- //

Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'switch',
	'settings'    => 'show_hide_footer_section',
		'label'       => esc_html__( 'FOOTER SECTION', 'simpleshop' ),
		'description' => esc_html__( 'Show or Hide Footer Section', 'simpleshop' ),
		'section'     => 'SIMPLESHOP_SECTION',
		'priority'  => 16,
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'simpleshop' ),
			'off' => esc_html__( 'Hide', 'simpleshop' ),
		],
] );

Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'select',
	'settings'  => 'footer_logo_style',
	'label'     => esc_html__( 'Select Footer Style', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
	'priority'  => 17,
	'default'     => 'default',
	'choices'     => [
		 'default' => esc_html__( 'Default Footer', 'simpleshop' ),
		 'style_2' => esc_html__( 'Footer Style Two', 'simpleshop' ),
		],
	'active_callback'=> [
         [
          'setting'  => 'show_hide_footer_section',
          'operator' => '==',
          'value'    => true,
         ]
	]
] );


Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'image',
	'settings'  => 'footer_logo',
	'label'     => esc_html__( 'Add Footer Logo', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
    'default'     => get_template_directory_uri().'/assets/img/logo.png',
    'priority'  => 18,
    'active_callback'=> [
         [
          'setting'  => 'show_hide_footer_section',
          'operator' => '==',
          'value'    => true,
         ]
	]

] );


Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'        => 'multicheck',
	'settings'    => 'footer_social_box',
	'label'    => esc_html__( 'Social Icons', 'simpleshop' ),
	'section'  => 'SIMPLESHOP_SECTION',
	'priority'  => 19,
    'default'  => [ 'facebook','twitter','pinterest' ],
		'choices'     => [
		  'facebook'   => esc_html__( 'Facebook', 'simpleshop' ),
		  'twitter' => esc_html__( 'Twitter', 'simpleshop' ),
		  'linkedin'  => esc_html__( 'LinkedIn', 'simpleshop' ),
		  'pinterest'  => esc_html__( 'Pinterest', 'simpleshop' ),
		  'instagram'  => esc_html__( 'Instagram', 'simpleshop' ),
		],
	'active_callback'=> [
         [
          'setting'  => 'show_hide_footer_section',
          'operator' => '==',
          'value'    => true,
         ]
	]

] );



// Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
// 	'type'      => 'dimensions',
// 	'settings'  => 'footer_logo_padding',
// 	'label'       => esc_html__( 'Padding', 'simpleshop' ),
// 		'section'     => 'SIMPLESHOP_SECTION',
// 		'priority'  => 19,
// 		'default'     => [
// 			'padding-top'    => '15px',
// 			'padding-bottom' => '15px',
// 			'padding-left'   => '0px',
// 			'padding-right'  => '0px',
// 		],

// ] );


Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CF', [
	'type'      => 'editor',
	'settings'  => 'footer_text',
	'label'     => esc_html__( 'Footer Text', 'simpleshop' ),
	'section'   => 'SIMPLESHOP_SECTION',
	'default'     => esc_html__('Built with Simple Shop & WooCommerce</br>© YourCompany 2019'),
	'priority'  => 20,
	'active_callback'=> [
         [
          'setting'  => 'show_hide_footer_section',
          'operator' => '==',
          'value'    => true,
         ]
	]
] );


}