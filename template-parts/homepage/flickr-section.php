<!--flickr section start-->
<?php
 global $ss_demo;
?>
<?php if( get_theme_mod('show_hide_flickr_section', true)):?>
    <section class="">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="section-title text-center">
                        <h2 class="title ">
                            <?php echo esc_html ( get_theme_mod('flickr_section_title',__('Simple Shop on Flickr','simpleshop')) );?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="flickr-list text-center"></div>
    </section>
<?php endif;?>
    <!-- flickr section end-->

<?php

function flickr_feed_script(){ ?>

<script>
(function($){
'use strict';
    jQuery(window).on("load", function($){
      var fancyboxImage = jQuery('.fancybox').attr('rel', 'gallery');
        fancyboxImage.fancybox({
            'speedIn': 600,
            'speedOut': 200,
            'transitionIn': 'elastic',
            'transitionOut': 'elastic',

        });

    });

    var flickerPhotoGal = $('.flickr-list');       
    flickerPhotoGal.jflickrfeed({
     limit:<?php
     if(class_exists('Kirki')){
            if( get_theme_mod('flickr_gallery_image_num') != '' ){ 
                echo get_theme_mod('flickr_gallery_image_num');
            } else {
                echo "18";
            }
      } elseif(class_exists('Redux') ){
            $flicrk_img_num =  Redux::get_option('ss_demo','flicrk_gallery_image_number');
            // var_dump($flicrk_img_num);
            // echo $flicrk_img_num;

            if(!empty( Redux::get_option('ss_demo','flicrk_gallery_image_number') ) ){
                echo $flicrk_img_num;
            }else{
                echo "18"; 
            }
      }
        
     ?>,
     qstrings: {id:'<?php 
     if(class_exists('Kirki')){
       if(get_theme_mod('flickr_gallery_id') != ''){ 
        echo get_theme_mod('flickr_gallery_id');
       } else{ 
        echo "199342056@N05"; 
       }
      } elseif(class_exists('Redux') ){
        $flicrk_gallery_id =  Redux::get_option('ss_demo','flicrk_gallery_id');
        if(!empty(Redux::get_option('ss_demo','flicrk_gallery_id'))){
            echo $flicrk_gallery_id;
        }else{
            echo "199342056@N05"; 
        }
      }
    
     ?>'},
     itemTemplate:'<a class="fancybox" style="background-image:url({{image_s}});" rel="gallery" href="{{image_b}}"></a>'
   });
    
})(jQuery);
</script>
<?php } 
add_action('wp_footer','flickr_feed_script', 100);
    
