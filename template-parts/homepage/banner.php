    <!--hero section start-->
         
    <?php 
    global $ss_demo;

    if( get_theme_mod('show_hero', true)):?>
   
    <div id="home">
       
      <section class="hero js_full_height base-gradient-" style="background-image: url('<?php 
      if(class_exists('Redux')){
             $home_hero_banner = Redux::get_option('ss_demo','home_hero_banner');
            if( Redux::get_option('ss_demo','home_hero_banner') ){
             echo esc_url ( $home_hero_banner["background-image"] );
            } elseif ( get_theme_mod( 'image_setting_url') ){
               echo esc_url ( get_theme_mod('image_setting_url','full') ); 
            } else {
               echo get_template_directory_uri() . '/assets/img/hero.jpg';
            }   
        }

    ?>');">

    <span class="banner_overlay"></span>
    <div class="hero-content">
        <div class="container">
                    <div class="row">
                        <div class="col-md-6" data-wow-duration="2s" data-wow-delay="1s">
                            <h1 class="hero-title">
                                <?php
                                if(class_exists('Redux')){
                                    if(!empty(Redux::get_option('ss_demo','home_banner_title'))){
                                        echo esc_html( Redux::get_option('ss_demo','home_banner_title') );
                                    } else {
                                      echo  get_theme_mod('hero_heading', __('Olive color winter jacket for ladies','simpleshop'));
                                    }
                                }
                                ?>
                            </h1>
                            <a href="
                                  <?php 
                                    if(class_exists('Redux')){   
                                      if( !empty(Redux::get_option('ss_demo','home_banner_button_link') ) ){
                                        echo Redux::get_option('ss_demo','home_banner_button_link');
                                      }else{
                                        echo esc_url ( get_theme_mod('hero_link_address') );
                                      };
                                    }

                                  ?>" class="hero-link">

                                <?php 
                                    if(class_exists('Redux')){

                                      if(!empty( Redux::get_option('ss_demo','home_banner_button_text'))){
                                         echo ( Redux::get_option('ss_demo','home_banner_button_text') );
                                      }else{
                                        echo get_theme_mod('hero_link_text', __('Winter Fashion','simpleshop') ); 
                                      };
                                    }
                                 ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

   <?php endif;?>

   <!--hero section end-->