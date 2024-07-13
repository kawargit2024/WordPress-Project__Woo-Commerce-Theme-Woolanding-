 <!--product section start-->
   
   <?php if( get_theme_mod('show_hide_new_arrival_product_section', true) ):?>

    <section class="space-3 space-adjust">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="section-title text-center">
                        <h2 class="title ">
                            <?php echo get_theme_mod('new_arrival_product_title',__('New Arrival','simpleshop') );?>
                        </h2>
                        <div class="sub-title"> 
                            <?php echo get_theme_mod('new_arrival_product_sub_title',__('37 New fashion products arrived recently in our showroom for this winter','simpleshop') );
                            ?> 
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="new-products">
                       <?php echo do_shortcode('[recent_products limit=7 columns=3]');?>
                       <a href="<?php echo site_url('/');?>shop" class="view-all-product mt-md-5">
                          <?php esc_html_e('View All Products','simpleshop');?>
                      </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product section end-->
    
    <?php endif;?>