
    <?php

    function wpdocs_styles_method() {

    if(!empty ( $heading_color = get_theme_mod( 'color_setting_hex' ))){
       $heading_color = get_theme_mod( 'color_setting_hex' );
    }

    if(!empty ( Redux::get_option('ss_demo','home_hero_banner_overlay_color'))){
         $home_hero_banner_overlay_color = Redux::get_option('ss_demo','home_hero_banner_overlay_color');
    }

    if(!empty(Redux::get_option('ss_demo','home_hero_banner_overlay_opacity'))){
         $home_hero_banner_overlay_opacity = Redux::get_option('ss_demo','home_hero_banner_overlay_opacity');
    }

    if(!empty(Redux::get_option('ss_demo','home_banner_button_text_color'))){
         $home_banner_button_text_color = Redux::get_option('ss_demo','home_banner_button_text_color');
    }

    if(!empty(Redux::get_option('ss_demo','home_banner_button_border_color'))){
         $home_banner_button_border_color = Redux::get_option('ss_demo','home_banner_button_border_color');
    }

    if(!empty(Redux::get_option('ss_demo','promo_sec_big_title_color'))){
         $promo_sec_big_title_color = Redux::get_option('ss_demo','promo_sec_big_title_color');
    }

    if(!empty(Redux::get_option('ss_demo','promo_sec_sub_title_color'))){
         $promo_sec_sub_title_color = Redux::get_option('ss_demo','promo_sec_sub_title_color');
    }

    if(!empty(Redux::get_option('ss_demo','promo_sec_button_text_color'))){
         $promo_sec_button_text_color = Redux::get_option('ss_demo','promo_sec_button_text_color');
    }

    if(!empty(Redux::get_option('ss_demo','promo_sec_button_link_border_color'))){
         $promo_sec_button_link_border_color = Redux::get_option('ss_demo','promo_sec_button_link_border_color');
    }

    if(!empty(Redux::get_option('ss_demo','promo_sec_banner_overlay_color'))){
         $promo_sec_banner_overlay_color = Redux::get_option('ss_demo','promo_sec_banner_overlay_color');
    }

    if(!empty(Redux::get_option('ss_demo','promo_sec_banner_overlay_color_opacity'))){
         $promo_sec_banner_overlay_color_opacity = Redux::get_option('ss_demo','promo_sec_banner_overlay_color_opacity');
    }

   if(!empty(Redux::get_option('ss_demo','page_hero_overlay_color'))){
         $page_hero_overlay_color = Redux::get_option('ss_demo','page_hero_overlay_color');
    }

    if(!empty(Redux::get_option('ss_demo','page_hero_overlay_opacity'))){
         $page_hero_overlay_opacity = Redux::get_option('ss_demo','page_hero_overlay_opacity');
    }



    $element_css ="

    body{

    }

    .banner_overlay{
        background:{$home_hero_banner_overlay_color};
        opacity:{$home_hero_banner_overlay_opacity};
    }

    .hero .hero-content .hero-link{
        border-bottom:1px solid {$home_banner_button_border_color};
    }

    .hero .hero-content .hero-link{
        color:{$home_banner_button_text_color};
        border-bottom:1px solid {$home_banner_button_border_color};
    }

    .promo-box .promo-title {
        color: {$promo_sec_big_title_color}!important;
    }

    .promo-box .promo-sub-title {
        color: {$promo_sec_sub_title_color}!important;
    }

    .promo-box .promo-link{
        color: {$promo_sec_button_text_color}!important;
        border-bottom:1px solid {$promo_sec_button_link_border_color}!important;
    }

    .bg-overlay:before {
      background-color: {$promo_sec_banner_overlay_color}!important;
    }

    [data-overlay='1']::before {
      opacity:{$promo_sec_banner_overlay_color_opacity}!important;
    }


    .page-title.page-title-bg:after {
      background:{$page_hero_overlay_color};
      opacity: {$page_hero_overlay_opacity};
     }


    ";

    wp_enqueue_style(
         'element-style',get_template_directory_uri() . '/assets/css/custom.css',
    );

    wp_add_inline_style( 'element-style', $element_css );

}
add_action( 'wp_enqueue_scripts', 'wpdocs_styles_method' );