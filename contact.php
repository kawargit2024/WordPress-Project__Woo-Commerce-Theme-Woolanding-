<?php

/*
Template Name: Contact Us
*/

get_header();
global $ss_demo;
?>
<?php get_template_part('template-parts/page-header/contact-banner');?>

    <section class="site-main">
        <!--product section start-->
        <div class="space-3">
            <div class="container">
                 <div class="row justify-content-center mb-4 mb-lg-5">
                    <div class="col-md-8 text-center">
                        <h2 class="font-weight-bold"><?php echo Redux::get_option('ss_demo','contact_section_title');?></h2>
                        <p><?php echo Redux::get_option('ss_demo','contact_section_content');?>
                    </div>
                </div>
                <div class="row mb-lg-5 mb-4">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <h3 class="font-weight-bold mb-2">
                               <?php
                                   $contact_info = Redux::get_option( 'ss_demo','contact_form_info' );
                                   if(!empty( $contact_info [0]) ){
                                      echo  $contact_info[0];
                                   }
                               ?>
                            </h3>
                            <p>
                              <?php 
                                if(!empty( $contact_info[1] ) ){
                                     echo $contact_info[1];
                                }
                              ?>
                            </p>
                        </div>
                        <div class=" mb-0">
                            <h3 class="font-weight-bold mb-2">
                                <?php
                                   if(!empty( $contact_info [2]) ){
                                     echo  $contact_info[2];
                                  }
                                ?>
                            </h3>
                            <p>
                                <?php  
                                  if(!empty( $contact_info [3]) ){
                                    echo  $contact_info[3];
                                  }
                                ?>
                            </p>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <!--maps start-->
                        
                        <?php

                             if(class_exists('Redux')){

                             $google_map = Redux::get_option('ss_demo','gmap');
                             if(!empty( $google_map)){
                                echo  do_shortcode( $google_map );
                             }

                            }
                      

                        ?>
                        
                        <!--maps end-->
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <?php 

                            if(class_exists('Redux')){
                                 $cform_7 = Redux::get_option('ss_demo','cform_7');
                                 if(!empty( $cform_7)){
                                    echo  do_shortcode( $cform_7 );
                                 }
                            }

                        ?>
                    </div>
                </div>
            </div>
         </div>
 </section>

<?php
get_footer();
?>