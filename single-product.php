<?php
get_header();
?>

<?php get_template_part('template-parts/single-product/breadcum');?>

    <section class="site-main">
        <!--product section start-->
        <div class="space-3">
            <div class="container">
                <div class="row">
                	  <div class="col-md-12">
                        <?php
                        while(have_posts()): the_post();
                           
                           the_content();

                        endwhile;

                        ?>
                      </div>
                </div>
            </div>
         </div>
    </section>
                 
<?php
get_footer();
?>