

<?php if( get_theme_mod('show_hide_popular_category_section', true)):?>

<section class="space-3">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="section-title text-center">
                        <h2 class="title ">
                            <?php
                             if(class_exists('Redux')){
                                $popular_section_title =  Redux::get_option('ss_demo','popular_sec_title','Popular Product');
                                 echo  esc_html ( $popular_section_title );
                              }
                            ?>
                        </h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <?php echo do_shortcode('[products limit="3" columns="3" orderby="popularity"]');?>
                </div>
            </div>
        </div>
    </section>
    <!-- product section end-->

 <?php endif;?>