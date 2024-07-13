<?php
/*
 Template Name: Checkout Page
*/
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
                <div class="<?php if(is_active_sidebar('shop-sidebar')){echo "col-md-8";} else{ echo "col-md-12";}?> mb-4 mb-lg-0">

                     <div class="woocommerce-form-coupon-toggle">
                        <?php wc_print_notice( apply_filters( 'woocommerce_checkout_coupon_message', esc_html__( 'Have a coupon?', 'woocommerce' ) . ' <a href="#" class="showcoupon">' . esc_html__( 'Click here to enter your code', 'woocommerce' ) . '</a>' ), 'notice' ); ?>
                    </div>

                    <form class="checkout_coupon woocommerce-form-coupon" method="post" style="display:none">

                        <p><?php esc_html_e( 'If you have a coupon code, please apply it below.', 'woocommerce' ); ?></p>

                        <p class="form-row form-row-first">
                            <label for="coupon_code" class="screen-reader-text"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label>
                            <input type="text" name="coupon_code" class="input-text" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" id="coupon_code" value="" />
                        </p>

                        <p class="form-row form-row-last">
                            <button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_html_e( 'Apply coupon', 'woocommerce' ); ?></button>
                        </p>

                        <div class="clear"></div>
                    </form>

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