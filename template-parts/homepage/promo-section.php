<!--promo section start-->
<?php 
 $bg_overlay_color ='';
 $opacity_color ='';
 $bg_overlay_color  = get_theme_mod('color_setting_hex','#242424');
 $opacity_color  = get_theme_mod('slider_setting','0.7');
?>;


<?php if( get_theme_mod('show_hide_promo_section', true) ): ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="promo-box space-3">
                          <?php
                            if(class_exists('Redux')){
                              $promo_banner_image = get_theme_mod('image_setting_id');
                              $promo_sec_banner = Redux::get_option('ss_demo','promo_sec_banner');
                              }
                           ?>
                        <div class="promo-img rounded bg-overlay" data-overlay="1" style="background-image: url(<?php 
                            if(class_exists('Redux')){
                                if(!empty( $promo_banner_image ) ){
                                    echo esc_url ( $promo_banner_image );
                                } elseif( Redux::get_option('ss_demo','promo_sec_banner') ) {
                                    echo esc_url ( $promo_sec_banner['url'] );
                                } else {
                                    echo get_template_directory_uri() . '/assets/img/sb.jpg';
                                };
                            }
                            
                           ?>);">
                        </div>
                        <div class="container">
                            <div class="row justify-content-center align-items-center text-center">
                                <div class="col-md-8">
                                    <!-- heading -->
                                    <h2 class="text-white mb-0 promo-title">
                                        <?php echo get_theme_mod('promo_section_title',__('Sale','simpleshop'));?>
                                    </h2>
                                    <h3 class="text-white promo-sub-title mt-0">
                                        <?php echo get_theme_mod('promo_sub_title',__('Up to 50% off','simpleshop'));?>
                                    </h3>
                                    <a href="<?php echo esc_attr(get_theme_mod('promo_link_url'));?>" class="promo-link">
                                        <?php echo get_theme_mod('promo_link_text',__('in store and online','simpleshop'));?> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif;?>
    <!--promo section end-->
