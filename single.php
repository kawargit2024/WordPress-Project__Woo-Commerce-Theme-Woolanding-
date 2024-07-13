<?php
get_header();
?>

    <section class="site-main">
        <!--product section start-->
        <div class="space-3">
            <div class="container">
                <div class="row">
                	<div class="col-md-8 mb-4 mb-lg-0">
                         <?php
                               while ( have_posts() ): the_post();
                          
                                 the_content();

                            endwhile; 
                         ?> 
                	</div>

                    <div class="col-md-4">
                        <?php get_sidebar('sidebar-1');?>
                    </div>

                </div>
            </div>
         </div>
    </section>
                 
<?php
get_footer();
?>