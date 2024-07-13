<?php
get_header();
?>
<div class="col-md-12 text-left">
    <?php get_template_part('template-parts/shop/breadcum'); ?>
</div>

    <section class="site-main">
        <!--product section start-->
        <div class="space-3">
            <div class="container">
                <div class="row">
                	<div class="<?php if(is_shop() && (is_active_sidebar('shop-sidebar'))){echo "col-md-8";} else{ echo "col-md-12";}?> mb-4 mb-lg-0">
                    <?php
                        while ( have_posts() ): the_post();
                            the_content();
                        endwhile; 
                    ?> 
                	</div>
                    <?php if(is_shop() && (is_active_sidebar('shop-sidebar'))){ ?>

                    <div class="col-md-4">
                        <?php get_sidebar('shop-sidebar');?>
                    </div>

                    <?php } ?>

                </div>
            </div>
         </div>
    </section>
                 
<?php
get_footer();
?>