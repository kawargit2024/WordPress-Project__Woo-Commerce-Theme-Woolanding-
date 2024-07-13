<?php 
  global $ss_demo;
?>
<footer class="space-2 ">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-4 mb-md-0 mb-4">
                <img class="footer-logo" src="<?php 
                if(class_exists('Redux')){
                   if( !empty ( Redux::get_option( 'ss_demo','site_footer_logo') ) ) { 
                        $footer_logo  =  Redux::get_option('ss_demo','site_footer_logo');
                        echo esc_url ( $footer_logo['url'] ); 
                   }
                }
            ?>">
            </div>

            <div class="col-md-4  mb-md-0 mb-4">
                <div class="social-links">
                    <div class="social-links">
                       <?php

                       if( !empty( Redux::get_option('ss_demo','social_icons') ) ){
                           $s_icons = Redux::get_option('ss_demo','icon_text');
                           foreach($s_icons as $s_icon){ ?>
                              <a href="<?php echo esc_url ( $s_icon ); ?>">
                                <i class="fa fa-<?php echo $s_icon; ?>"></i>
                              </a>
                            <?php } ?>
                        <?php } elseif(get_theme_mod( 'footer_social_box')){

                            $social_icons = get_theme_mod( 'footer_social_box');
                              if( !empty( $social_icons ) ):
                              foreach($social_icons as $social_icon):
                            ?>
                            <a href="#">
                                <i class="fa fa-<?php echo esc_attr( $social_icon );?>"></i>
                            </a>
                            <?php endforeach;
                              endif;
                        } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <p class="mb-0">
                    <?php 
                     if(get_theme_mod('footer_text')){
                         $footer_text = get_theme_mod('footer_text');
                         echo $footer_text;
                      } elseif(class_exists('Redux')){
                          $footer_text = Redux::get_option('ss_demo','footer_copyright_text');
                          echo $footer_text." ".date('Y');
                      }
                    ?>
                </p>
            </div>
            <div class="col-md-12">
                <a class="scrollTotop sttop-btn"><i class="fa fa-chevron-up"></i></a>
            </div>
        </div>
    </div>
</footer>


<?php 
    wp_footer();
?>

</body>
</html>
