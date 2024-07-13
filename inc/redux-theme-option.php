<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $ss_demo = 'ss_demo';

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'display_name'     => $theme->get( 'Name' ),
        'display_version'  => $theme->get( 'Version' ),
        'menu_title'       => esc_html__( 'SimpleShop', 'simpleshop' ),
        'customizer'       => true,
        'page_priority'    => 100,
        'dev_mode'         => false,
        'display_version'  => false,
        'display_name'     => false,
    );

    Redux::set_args( $ss_demo, $args );


// HEADER INFO //
Redux::set_section(
$ss_demo,
    array(
        'title'  => esc_html__( 'Header', 'simpleshop' ),
        'id'     => 'header-section',
        'desc'   => esc_html__( 'These are really basic fields!', 'simpleshop' ),
        'icon'   => 'el el-dashboard',
    )
);
Redux::set_section(
    $ss_demo,
    array(
        'title'            => esc_html__( 'Header Info', 'simpleshop' ),
        'id'               => 'header-info',
        'subsection'       => true,
        'icon'             => 'el el-th-large',
        'fields'           => array(
            array(
                'id'       => 'site_logo_img',
                'type'     => 'media', 
                'url'      => true,
                'title'    => esc_html__('Logo', 'simpleshop'),
                'subtitle' => esc_html__('Upload Logo', 'simpleshop'),
            ),
            array(
                'id'       => 'site_logo_width',
                'type'     => 'text', 
                'title'    => esc_html__('Width', 'simpleshop'),
                'output' => array('a.navbar-brand img'),
                'default' => '100%',
            ),
            array(
                'id'       => 'site_logo_height',
                'type'     => 'text', 
                'title'    => esc_html__('Height', 'simpleshop'),
                'output' => array('a.navbar-brand img'),
                'default' => 'auto',
            ),
            array(
                'id'       => 'site_logo_text',
                'type'     => 'text', 
                'url'      => true,
                'title'    => esc_html__('Logo Text', 'simpleshop'),
                'default' => esc_html__('simpleShop','simpleshop'),
            ),
            array(
                'id'       => 'site_logo_text_color',
                'type'     => 'color', 
                'title'    => esc_html__('Color', 'simpleshop'),
                'default' => '#242424',
            ),
        ),
));


// TYPOGRAPHY //
Redux::set_section(
$ss_demo,
    array(
      'title' => esc_html__( 'Typography', 'simpleshop' ),
      'id'    => 'typo-section',
      'desc'  => esc_html__( 'These are really basic fields!', 'simpleshop' ),
      'icon'  => 'el el-text-height',
    )
);
Redux::set_section(
$ss_demo,
array(
    'title'            => esc_html__( 'Typography Info', 'simpleshop' ),
    'id'               => 'typo-info',
    'subsection'       => true,
    'icon'             => 'el el-th-large',
    'fields'           => array(
        array( 
        'id'          => 'body_p_typo',
        'type'        => 'typography', 
        'title'       => esc_html__('Body Paragraph Typography', 'simpleshop'),
        'google'      => true, 
        'font-backup' => true,
        'output'      => array('p,.p'),
        'units'       =>'px',
        'subtitle'    => esc_html__('Add Paragraph Typography', 'simpleshop'),
        'default'     => array(
            'color'       => '#242424', 
            'font-style'  => '', 
            'font-family' => 'Source Sans Pro, sans-serif', 
            'google'      => true,
            'font-size'   => '', 
            'line-height' => ''
        ),
    ),
    array( 
        'id'          => 'h1_hero_typo',
        'type'        => 'typography', 
        'title'       => esc_html__('H1 / Hero Title Typography', 'simpleshop'),
        'google'      => true, 
        'font-backup' => true,
        'output'      => array('h1,.h1,.hero-content .hero-title'),
        'units'       =>'px',
        'subtitle'    => esc_html__('Add H1 Typography', 'simpleshop'),
        'default'     => array(
            'color'       => '#242424', 
            'font-style'  => '', 
            'font-family' => 'Source Sans Pro, sans-serif', 
            'google'      => true,
            'font-size'   => '', 
            'line-height' => ''
        ),
    ),
    array( 
        'id'          => 'section_title_typo',
        'type'        => 'typography', 
        'title'       => esc_html__('Homepage Section Title Typography', 'simpleshop'),
        'google'      => true, 
        'font-backup' => true,
        'output'      => array('.section-title .title'),
        'units'       =>'px',
        'subtitle'    => esc_html__('Add Homepage Section Title Typography', 'simpleshop'),
        'default'     => array(
            'color'       => '#242424', 
            'font-style'  => '', 
            'font-family' => 'Source Sans Pro, sans-serif', 
            'google'      => true,
            'font-size'   => '', 
            'font-weight' => '',
            'line-height' => ''
        ),
    ),
    array( 
        'id'          => 'h2_typo',
        'type'        => 'typography', 
        'title'       => esc_html__('H2 / Page Header Title Typography', 'simpleshop'),
        'google'      => true, 
        'font-backup' => true,
        'output'      => array('h2,.h2'),
        'units'       =>'px',
        'subtitle'    => esc_html__('Add H2 / Page Header Title Typography', 'simpleshop'),
        'default'     => array(
            'color'       => '#242424', 
            'font-style'  => '', 
            'font-family' => 'Source Sans Pro, sans-serif', 
            'google'      => true,
            'font-size'   => '', 
            'font-weight' => '',
            'line-height' => ''
        ),
    ),
    array( 
        'id'          => 'h3_typo',
        'type'        => 'typography', 
        'title'       => esc_html__('H3 Typography', 'simpleshop'),
        'google'      => true, 
        'font-backup' => true,
        'output'      => array('h3,.h3'),
        'units'       =>'px',
        'subtitle'    => esc_html__('Add H3 Typography', 'simpleshop'),
        'default'     => array(
            'color'       => '#242424', 
            'font-style'  => '', 
            'font-family' => 'Source Sans Pro, sans-serif', 
            'google'      => true,
            'font-size'   => '', 
            'line-height' => ''
        ),
    ),
    array( 
        'id'          => 'h4_typo',
        'type'        => 'typography', 
        'title'       => esc_html__('H4 Typography', 'simpleshop'),
        'google'      => true, 
        'font-backup' => true,
        'output'      => array('h4,.h4'),
        'units'       =>'px',
        'subtitle'    => esc_html__('Add H4 Typography', 'simpleshop'),
        'default'     => array(
            'color'       => '#242424', 
            'font-style'  => '', 
            'font-family' => 'Source Sans Pro, sans-serif', 
            'google'      => true,
            'font-size'   => '', 
            'line-height' => ''
        ),
    ),
    array( 
        'id'          => 'h5_typo',
        'type'        => 'typography', 
        'title'       => esc_html__('H5 Typography', 'simpleshop'),
        'google'      => true, 
        'font-backup' => true,
        'output'      => array('h5,.h5'),
        'units'       =>'px',
        'subtitle'    => esc_html__('Add H5 Typography', 'simpleshop'),
        'default'     => array(
            'color'       => '#242424', 
            'font-style'  => '', 
            'font-family' => 'Source Sans Pro, sans-serif', 
            'google'      => true,
            'font-size'   => '', 
            'line-height' => ''
        ),
    ),
    array( 
        'id'          => 'h6_typo',
        'type'        => 'typography', 
        'title'       => esc_html__('H6 Typography', 'simpleshop'),
        'google'      => true, 
        'font-backup' => true,
        'output'      => array('h6,.h6'),
        'units'       =>'px',
        'subtitle'    => esc_html__('Add H6 Typography', 'simpleshop'),
        'default'     => array(
            'color'       => '#242424', 
            'font-style'  => '', 
            'font-family' => 'Source Sans Pro, sans-serif', 
            'google'      => true,
            'font-size'   => '', 
            'line-height' => ''
        ),
    ),
    ),
));


// HOME PAGE //
Redux::set_section(
$ss_demo,
array(
        'title' => esc_html__( 'HomePage', 'simpleshop' ),
        'id'    => 'home-page',
        'desc'  => esc_html__( 'These are really basic fields!', 'simpleshop' ),
        'icon'  => 'el el-home',
    )
);

Redux::set_section(
    $ss_demo,
    array(
        'title'            => esc_html__( 'Home Page Info', 'simpleshop' ),
        'id'               => 'home-page-info',
        'subsection'       => true,
        'fields'           => array( 
            array(         
                'id'       => 'home_hero_banner',
                'type'     => 'background',
                'title'    => esc_html__('Hero Banner Setting', 'simpleshop'),
                'output'      => array('.hero'),
                'default'  => array(
                    'background-size' => 'cover',
                    'background-repeat' => 'no-repeat',
                    'background-attachment' => 'fixed',
                    'background-position' => 'center center',
                ),
            ),
            array(
                'id'       => 'home_hero_banner_overlay_color',
                'type'     => 'color', 
                'title'    => esc_html__('Banner Overlay', 'simpleshop'),
                'subtitle' => esc_html__('Add Banner Overlay Color', 'simpleshop'),
                 'default'  => '',
            ),
            array(
                'id'       => 'home_hero_banner_overlay_opacity',
                'type'     => 'slider', 
                'title'    => esc_html__('Banner Opacity', 'simpleshop'),
                'subtitle' => esc_html__('Add hero Banner Opacity', 'simpleshop'),
                 "default"   => .5,
                 "min"       => 0,
                 "step"      => .1,
                 "max"       => 1,
                 'resolution' => 0.1,
            ),
            array(
                'id'       => 'home_banner_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Banner Title', 'simpleshop' ),
                'default'  => 'Olive color winter jacket for ladies',
            ),
            array(

                'id'       => 'home_banner_button_text',
                'type'     => 'text',
                'title'    => esc_html__('Button Text', 'simpleshop'),
                'default'  => 'Winter Fashion',
            ),
            array(

                'id'       => 'home_banner_button_text_color',
                'type'     => 'color',
                'title'    => esc_html__('Button Color', 'simpleshop'),
                'output'      => array('.hero .hero-content .hero-link'),
                'default'  => '#242424',
            ),
            array(

                'id'       => 'home_banner_button_border_color',
                'type'     => 'color',
                'title'    => esc_html__('Button Border Color', 'simpleshop'),
                'default'  => '#8c8c8c',
            ),

            array(

                'id'       => 'home_banner_button_link',
                'type'     => 'text',
                'title'    => esc_html__('Link Address', 'simpleshop'),
                'default'  => 'http://simpleshop.com',
            ),
            array(
                'id'       => 'shop_cat_sec_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Shop Category Section', 'simpleshop' ),
                'subtitle'     => esc_html__( 'Shop Category Section Info', 'simpleshop' ),
            ),
            array(
                'id'       => 'new_arrival_sec_title',
                'type'     => 'text',
                'title'    => esc_html__( 'New Arrival Section', 'simpleshop' ),
                'subtitle'     => esc_html__( 'New Arrival Section Info', 'simpleshop' ),
            ),
            array(
                'id'       => 'new_arrival_sec_content',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Section Content', 'simpleshop' ),
                'default'  => '37 New fashion products arrived recently in our showroom for this winter',
            ),
            array(

                'id'       => 'new_arrival_button_text',
                'type'     => 'text',
                'title'    => esc_html__('Button Text', 'simpleshop'),
                'default'  => 'View All Products',
            ),
            array(

                'id'       => 'new_arrival_button_link',
                'type'     => 'text',
                'title'    => esc_html__('Button Link', 'simpleshop'),
                'default'  => esc_html__('http://simpleshop.com', 'simpleshop'),
            ),
             array(
                'id'       => 'promo_sec_banner',
                'type'     => 'media', 
                'title'    => esc_html__('Promo Section Banner', 'simpleshop'),
                'subtitle'     => esc_html__('Promo Section Info', 'simpleshop'),
            ), 
            array(
                'id'       => 'promo_sec_banner_overlay_color',
                'type'     => 'color', 
                'title'    => esc_html__('Overlay Color', 'simpleshop'),
                'subtitle' => esc_html__('Add Banner Overlay', 'simpleshop'),
                'default'  => '#242424',
            ), 
            array(
                'id'       => 'promo_sec_banner_overlay_color_opacity',
                'type'     => 'slider', 
                'title'    => esc_html__('Opacity', 'simpleshop'),
                'subtitle' => esc_html__('Add Banner Opacity', 'simpleshop'),
                 "default"   => .1,
                 "min"       => 0,
                 "step"      => .1,
                 "max"       => 1,
                 'resolution' => 0.1,
            ), 
            array(
                'id'       => 'promo_sec_big_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Big Text', 'simpleshop' ),
                'default'  => 'Sale',
            ),
             array(
                'id'       => 'promo_sec_big_title_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Color', 'simpleshop' ),
                'default'  => '#ffffff',
            ),
            array(
                'id'       => 'promo_sec_sub_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Small Text', 'simpleshop' ),
                'default'  => 'Up to 50% off',
            ),
            array(
                'id'       => 'promo_sec_sub_title_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Color', 'simpleshop' ),
                'default'  => '#ffffff',
            ),
            array(

                'id'       => 'promo_sec_button_text',
                'type'     => 'text',
                'title'    => esc_html__('Button Text', 'simpleshop'),
                'default'  => 'in store and online',
            ),
            array(

                'id'       => 'promo_sec_button_text_color',
                'type'     => 'color',
                'title'    => esc_html__('Color', 'simpleshop'),
                'default'  => '#ffffff',
            ),
            array(

                'id'       => 'promo_sec_button_link',
                'type'     => 'text',
                'title'    => esc_html__('Button Link', 'simpleshop'),
                'default'  => esc_html__('http://simpleshop.com', 'simpleshop'),
            ),
            array(

                'id'       => 'promo_sec_button_link_border_color',
                'type'     => 'color',
                'title'    => esc_html__('Link Border Color', 'simpleshop'),
                'default'  => '#ffffff', 
            ),
            array(
                'id'       => 'popular_sec_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Popular Section Title', 'simpleshop' ),
                'subtitle' => esc_html__( 'Popular Section Info', 'simpleshop' ),
                'default'  => esc_html__('Popular Product', 'simpleshop'),
            ),
            array(
                'id'          => 'shipping_info',
                'type'        => 'slides',
                'title'       => esc_html__('Shipping Info', 'simpleshop'),
                'subtitle'    => esc_html__('Add Shipping Info', 'simpleshop'),
                'placeholder' => array(
                    'url'         => esc_html__('Icon', 'simpleshop'),
                    'title'       => esc_html__('Free Shipping', 'simpleshop'),
                    'description' => esc_html__('On all order over $39.00', 'simpleshop'),
                    
                ),
            ),

         ),
   ));

   
// ABOUT PAGE  //
Redux::set_section(
    $ss_demo,
    array(
        'title'            => esc_html__( 'AboutPage', 'simpleshop' ),
        'id'               => 'about-section',
        'desc'             => esc_html__( 'These are really basic fields!', 'simpleshop' ),
        'icon'             => 'el el-folder',
    )
);

Redux::set_section(
    $ss_demo,
    array(
        'title'            => esc_html__( 'About Page Info', 'simpleshop' ),
        'id'               => 'about-page-info',
        'subsection'       => true,
        'fields'           => array(
          array(
                'id'       => 'abt_hero_banner',
                'type'     => 'media', 
                'url'      => true,
                'title'    => esc_html__('About Header Banner', 'simpleshop'),
                'subtitle' => esc_html__('Upload Header Banner', 'simpleshop'),
                'output' => array('.page-title page-title-bg'),
            ), 
            array(
                'id'       => 'abt_section_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Section Title', 'simpleshop' ),
                'default'  => 'We are Simple Shop We create Woo-Commerce Solution',
            ),
             array(
                'id'       => 'abt_section_content',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Section Content', 'simpleshop' ),
                'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid asperiores, blanditiis cum eveniet ipsum itaque magni minus odio qui quibusdam quod.',
            ),
            array(
                'id'          => 'abt_company_info',
                'type'        => 'slides',
                'title'       => esc_html__('Company Info', 'simpleshop'),
                'subtitle'    => esc_html__('Add Company Info Here i.e ( Our Mission, Our Vission, Why Us )', 'simpleshop'),
                
                'placeholder' => array(
                    'title'       => esc_html__('Our Mission', 'simpleshop'),
                    'description' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid asperiores, blanditiis cum eveniet ipsum itaque magni minus odio qui.', 'simpleshop'),
                     'url'         => esc_html__('Give us a link!', 'simpleshop'),
                ),
                // 'show'        => array( 'description' => false ),
            ),
             array(
                'id'       => 'team_sec_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Team Section Title', 'simpleshop' ),
                'default'  => 'Meet The Teams',
            ),
             array(
                'id'       => 'team_sec_content',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Team Section Content', 'simpleshop' ),
                'default'  => 'Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet',
            ),
            
            array(
                'id'          => 'team_info',
                'type'        => 'slides',
                'title'       => esc_html__('Team Members Info', 'simpleshop'),
                'subtitle'    => esc_html__('Add Team Info Here i.e ( Image, Name, Designation )', 'simpleshop'),
                'placeholder' => array(
                    'title'       => esc_html__('Luther Frankil', 'simpleshop'),
                    'description' => esc_html__('Fashion Designer', 'simpleshop'),
                    'url'         => esc_html__('', 'simpleshop'),
                ),
               
            ),

    ),
));


// CONTACT PAGE //
Redux::set_section(
    $ss_demo,
    array(
        'title'            => esc_html__( 'ContactPage', 'simpleshop' ),
        'id'               => 'contact-page',
        'desc'             => esc_html__( 'These are really basic fields!', 'simpleshop' ),
        'icon'             => 'el el-phone',
    )
);

Redux::set_section(
    $ss_demo,
    array(
        'title'            => esc_html__( 'Contact Page Info', 'simpleshop' ),
        'id'               => 'contact-page-info',
        'subsection'       => true,
        'fields'           => array(
          array(
                'id'       => 'contact_hero_banner',
                'type'     => 'media', 
                'url'      => true,
                'title'    => esc_html__('Contact Header Banner', 'simpleshop'),
                'subtitle' => esc_html__('Upload Banner Image', 'simpleshop'), 
                'default'  => 'http://localhost/simpleshop/wp-content/uploads/2024/01/contact.jpg',
                'output'   => array('.page-title page-title-bg'),
            ), 
            array(
                'id'       => 'contact_section_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Section Title', 'simpleshop' ),
                'default'  => 'Have you a question?',
            ),
            array(
                'id'       => 'contact_section_content',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Section Content', 'simpleshop' ),
                'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid asperiores, blanditiis cum eveniet ipsum itaque magni minus odio qui quibusdam quod.',
            ),
            array(
                'id'=>'contact_form_info',
                'type'     => 'multi_text',
                'title'    => __('Contact Info', 'simpleshop'),
                'default'  => 'Location, Upper Level, Overseas Passenger Terminal, The Rocks, Sydney 2000',

            ), 
            // array(
            //     'id'       => 'google_map',
            //     'type'     => 'text',
            //     'title'    => esc_html__( 'Google Map ID', 'simpleshop' ),
            //     'default'  => 'map',
            // ),
            // array(
            //     'id'       => 'g_map_lat',
            //     'type'     => 'text',
            //     'title'    => esc_html__( 'Map Latiture', 'simpleshop' ),
            //     'default'  => '40.6700',
            // ),
            // array(
            //     'id'       => 'g_map_lon',
            //     'type'     => 'text',
            //     'title'    => esc_html__( 'Map Longitude', 'simpleshop' ),
            //     'default'  => '-73.9400',
            // ),
            array(
            'id'               => 'gmap',
            'type'             => 'editor',
            'title'            => esc_html__('Google Map', 'simpleshop'), 
            'subtitle'         => esc_html__('Add Shortcode For GoogleMap, 
            i.e [google_map width="100%" height="500" place="Uttara, Dhaka" zoom="16"]', 'simpleshop'),
            'default'          => esc_html__(''),
            'args'   => array(
                'teeny'            => true,
                'textarea_rows'    => 10
            )
           ),
           array(
            'id'               => 'cform_7',
            'type'             => 'editor',
            'title'            => esc_html__('Contact Form 7', 'simpleshop'), 
            'subtitle'         => esc_html__('Add Shortcode For ContactForm, 
            i.e [contact-form-7 id="0d8934f" title="Contact form 1"]', 'simpleshop'),
            'default'          => esc_html__(''),
            'args'   => array(
                'teeny'            => true,
                'textarea_rows'    => 10
            )
          ),
        ),
    ));

// 404 PAGE //
Redux::set_section(
    $ss_demo,
    array(
        'title'            => esc_html__( 'Error 404Page', 'simpleshop' ),
        'id'               => 'error-404-page',
        'desc'             => esc_html__( 'These are really basic fields!', 'simpleshop' ),
        'icon'             => 'el el-bullhorn',
    )
);

Redux::set_section(
    $ss_demo,
    array(
        'title'            => esc_html__( '404 Page Info', 'simpleshop' ),
        'id'               => '404-page-info',
        'subsection'       => true,
        'fields'           => array(
          array(
                'id'       => '404_hero_banner',
                'type'     => 'media', 
                'url'      => true,
                'title'    => esc_html__('404 Page Banner', 'simpleshop'),
                'subtitle' => esc_html__('Upload 404 Page Banner', 'simpleshop'), 
                'default'  => 'http://localhost/eshop/wp-content/uploads/2024/01/contact.jpg',
                'output'   => array('.page-title page-title-bg'),
            ), 
            array(
                'id'       => '404_section_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Section Title', 'simpleshop' ),
                'default'  => 'Oops! Page Not Found',
            ),
            array(
                'id'       => '404_section_content',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Section Content', 'simpleshop' ),
                'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid asperiores, blanditiis cum eveniet ipsum itaque magni minus odio qui quibusdam quod.',
            ),
            array(

                'id'       => 'back_to_home_button_text',
                'type'     => 'text',
                'title'    => esc_html__('Button Text', 'simpleshop'),
                'default'  => 'in store and online',
            ),

        ),
    ));


// PAGE Header OVERLAY //
Redux::set_section(
$ss_demo,
    array(
        'title'  => esc_html__( 'Page Header Overlay', 'simpleshop' ),
        'id'     => 'page-hero-overlay',
        'desc'   => esc_html__( 'Add page hero overlay color if needed', 'simpleshop' ),
        'icon'   => 'el el-cog',
    )
);
Redux::set_section(
    $ss_demo,
    array(
        'title'            => esc_html__( 'Page Header Overlay', 'simpleshop' ),
        'id'               => 'page-header-overlay',
        'subsection'       => true,
        'icon'             => 'el el-cog',
        'fields'           => array(
            array(
                'id'       => 'page_hero_overlay_color',
                'type'     => 'color', 
                'title'    => esc_html__('Overlay Color', 'simpleshop'),
                'subtitle' => esc_html__('Add Page Hero Overlay', 'simpleshop'),
                'output' => array('.page-title.page-title-bg:after'),
                'default' => '#242424',
            ),
            array(
                'id'       => 'page_hero_overlay_opacity',
                'type'     => 'slider', 
                'title'    => esc_html__('Opacity', 'simpleshop'),
                'subtitle' => esc_html__('Add Page Hero Opacity', 'simpleshop'),
                 "default"   => .2,
                 "min"       => 0,
                 "step"      => .1,
                 "max"       => 1,
                 'resolution' => 0.1,
            ),

        ),
));
    
// // HomePage Section Sorter //
// Redux::set_section(
//         $ss_demo,
//         array(
//             'title'            => esc_html__( 'HomePage Section Sorter', 'simpleshop' ),
//             'id'               => 'homepage-sorter-section',
//             'icon'             => 'el el-gallery',
//         )
//     );

//     Redux::set_section(
//     $ss_demo,
//     array(
//         'title'            => esc_html__( 'HomeaPage Section Sorter', 'simpleshop' ),
//         'id'               => 'homepage-section-sorter',
//         'subsection'       => true,
//         'fields'           => array(
//              array(
//                 'id'      => 'homepage_blocks_sorter',
//                 'type'    => 'sorter',
//                 'title'   => 'Homepage Layout Sorter',
//                 'desc'    => 'Organize how you want the layout to appear on the homepage',
//                 'options' => array(
//                     'enabled'  => array(
//                         'banner_block' => 'Banner Section',
//                         'shop_cat_block' => 'Shop Category Section',
//                         'new_arrival_block'   => 'New Arrival Section',
//                         'popular_bloc'   => 'Popular Section',
//                         'offer_block'   => 'Offer Section',
//                         'promo_block'   => 'Promo Section',
//                         'flickr_block' => 'Flickr Section'
//                     ),
//                     'disabled' => array(
//                     )
//                 ),
//             ) 
            
//         ),
//     ));


    // Flickr Section //
    Redux::set_section(
        $ss_demo,
        array(
            'title'            => esc_html__( 'Flickr Section', 'simpleshop' ),
            'id'               => 'flicrk-section',
            'icon'             => 'el el-gallery',
        )
    );

    Redux::set_section(
    $ss_demo,
    array(
        'title'            => esc_html__( 'Flickr Gallery Info', 'simpleshop' ),
        'id'               => 'flicrk-gallery-info',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'       => 'flicrk_gallery_id',
                'type'     => 'text',
                'title'    => esc_html__( 'Flickr Gallery ID', 'simpleshop' ),
                'default'  => '199342056@N05',
            ),
            array(
                'id'       => 'flicrk_gallery_image_number',
                'type'     => 'text',
                'title'    => esc_html__( 'Flickr Image Number', 'simpleshop' ),
                'default'  => '18',
            ),
            
        ),
    ));



    // FOOTER INFO //
    Redux::set_section(
    $ss_demo,
        array(
            'title'            => esc_html__( 'Footer', 'simpleshop' ),
            'id'               => 'footer-section',
            'desc'             => esc_html__( 'These are really basic fields!', 'simpleshop' ),
            'icon'             => 'el el-cog',
        )
   );
Redux::set_section(
    $ss_demo,
    array(
        'title'            => esc_html__( 'Footer Info', 'simpleshop' ),
        'id'               => 'footer-info',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'       => 'site_footer_logo',
                'type'     => 'media', 
                'url'      => true,
                'title'    => esc_html__('Footer Logo', 'simpleshop'),
                'subtitle' => esc_html__('Upload Logo', 'simpleshop'),
                'default'  => array(
                    'url'=> get_template_directory_uri() . '/assets/img/logo.png',
                ),
            ),
            array(
                'id'             => 'social_icons',
                'type'           => 'repeater',
                'title'          => esc_html__( 'Social Icons', 'simpleshop' ),
                'subtitle'       => esc_html__( 'Add Social Icons', 'simpleshop' ),
                'fields'         => array(
                    array(
                        'id'          => 'icon_text',
                        'type'        => 'text',
                        'default'  => esc_html__('facebook', 'simpleshop' ),
                    ),
                    array(
                        'id'          => 'icon_link',
                        'type'        => 'text',
                        'default'  => esc_html__('http://facebook.com', 'simpleshop' ),
                    ),
                )
            ),
            array(
                'id'       => 'footer_copyright_text',
                'type'     => 'editor',
                'title'    => esc_html__( 'Footer Text', 'simpleshop' ),
                'default'  => 'Built with Simple Shop & WooCommerce © YourCompany',
            ),
        ),
    ));







