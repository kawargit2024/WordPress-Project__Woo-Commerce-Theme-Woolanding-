 <!--shop category start-->

<?php if( get_theme_mod('show_hide_shop_category_section', true)):?>

<section class="space-3">
        <div class="container sm-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="title"> <?php echo get_theme_mod('shop_section_title',__('Shop By Category','simpleshop'));?> </h2>
                    </div>
                </div>

                <div class="col-md-12">
                    <?php 
                       $simpleshop_col_num = get_theme_mod('num_of_col', 3);
                       echo do_shortcode("[product_categories limit = 3,   columns='{$simpleshop_col_num}']");
                    ?>
                </div>
            </div>
        </div>
    </section>

     <!--shop category end-->


<?php endif;?>