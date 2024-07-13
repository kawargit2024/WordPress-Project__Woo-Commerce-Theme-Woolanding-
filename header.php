<?php
 global $woocommerce;
 global $ss_demo;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Mosaddek">
   
</head>

<?php 
  wp_head();
?>

<body <?php echo body_class();?>class="archive  woocommerce">

<!--header start-->
<header class="app-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg mainmenu">
                    <!--logo-->
                   
                        <?php if( !empty ( get_theme_mod( 'site_logo' ) ) ) { ?>
                            <a class="navbar-brand mr-5 text-dark float-left" href="<?php echo esc_url ( site_url('/') );?>">
                                <img class="site-logo site-logo1" src="<?php  echo esc_url ( get_theme_mod( 'site_logo' ) ); ?>">
                            </a>
                        <?php } elseif( !empty ( Redux::get_option( 'ss_demo','site_logo_img' ) ) ) {
                                if(class_exists('Redux')){ ?>
                                    <a class="navbar-brand mr-5 text-dark float-left" 
                                                                              href="<?php echo esc_url ( site_url('/') );?>">
                                        <img class="site-logo site-logo2" src="<?php  
                                        $site_logo_img  =  Redux::get_option( 'ss_demo','site_logo_img' );
                                           echo esc_url( $site_logo_img["url"] );
                                        ?>">
                                    </a>
                                <?php } 
                            } else{
                            echo '<a href="'.site_url('/').'">'. bloginfo('name').'</a>';
                          }
                         ?>

                    <!--logo-->

                    <!--responsive toggle icon-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <i class="fa fa-bars"> </i>
                            </span>
                    </button>
                    <!--responsive toggle icon-->

                    <!--search start-->
                    <div id="form-search" class="form-search">
                        <div id="home-search" class="input-group">
                            <!-- <input type="search" class="form-control" placeholder="Search for..."> -->
                            <?php echo get_search_form();?>
                            <span class="input-group-btn">
                                <button id="form-search-close-btn" class="btn" type="button">
                                    <span class="svg svg--cross">
                                        <svg class="svg__icon" width="32px" height="32px" viewBox="0 0 32 32">
                                            <path d="M16.7,16L31.9,0.9c0.2-0.2,0.2-0.5,0-0.7s-0.5-0.2-0.7,0L16,15.3L0.9,0.1C0.7,0,0.3,0,0.1,0.1S0,0.7,0.1,0.9L15.3,16
                                            L0.1,31.1c-0.2,0.2-0.2,0.5,0,0.7C0.2,32,0.4,32,0.5,32s0.3,0,0.4-0.1L16,16.7l15.1,15.1c0.1,0.1,0.2,0.1,0.4,0.1s0.3,0,0.4-0.1
                                            c0.2-0.2,0.2-0.5,0-0.7L16.7,16z"/>
                                        </svg>
                                    </span>
                                </button>
                            </span>
                        </div>
                    </div>
                    <!--search end-->
                    <!--nav link-->

                     
                    <div class="collapse navbar-collapse" id="navbarsExampleDefault"> 
                        <?php
                          $mainMenu = array(
                             'theme_location'  =>'menu',
                             'container'      => '',
                             'menu_class'      => 'navbar-nav ml-auto',
                            );

                            wp_nav_menu($mainMenu);
                            ?>
                            <li>
                                <a href="#" class="" id="search-icon"><i class="fa fa-search"></i></a>
                            </li>
                                <?php 
                                
                                 $cart_item_count = WC()->cart->cart_contents_count;
                                 if ( $cart_item_count > 0):

                                ?>

                                <li class="dropdown mini-cart">
                                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-shopping-basket"></i>
                                           <span  class="cart-quantity-highlighter">
                                           <?php echo sprintf( _n( '%s', '%s', $cart_item_count ), $cart_item_count );?>
                                           </span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right widget_shopping_cart_content woocommerce-mini-cart cart_list product_list_widget show">
                                        <?php                                      
                                         foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
                                            $product = $cart_item['data'];
                                               $cart_url = WC()->cart->get_cart_url();
                                               $checkout_url = WC()->cart->get_checkout_url();
                                            $cart_quantity = $cart_item['quantity'];  
                                            

                                            if ( $product && $product->exists() && $cart_quantity > 0 && apply_filters( 
                                                'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                                            $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', 
                                                $product->is_visible() ? $product->get_permalink( $cart_item ) : '', $cart_item, 
                                                $cart_item_key );

                                        ?>

                                       <li class="woocommerce-mini-cart-item mini_cart_item">
                                        <?php

                                        // product remove link  //
                                            $product_name = apply_filters( 'woocommerce_cart_item_name', $product->get_name(), $cart_item, $cart_item_key );
                                            $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
                                            echo apply_filters( 
                                                'woocommerce_cart_item_remove_link',
                                                sprintf(
                                                    '<a href="%s" class="remove remove_from_cart_button remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
                                                    esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                                    esc_attr( sprintf( __( 'Remove %s from cart', 'simpleshop' ), wp_strip_all_tags( $product_name ) ) ),
                                                    esc_attr( $product_id ),
                                                    esc_attr( $product->get_sku() )
                                                ),
                                               $cart_item_key
                                            );
                                             

                                            // product thumbnail image //
                                            $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $product->get_image(), 
                                                $cart_item, $cart_item_key );

                                            if ( ! $product_permalink ) {
                                                echo $thumbnail; 
                                            } else {
                                                printf( '<a class="mini_cart_item-image" href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); 
                                            }
                                            ?>                     

                                         </a>

                                          <div class="mini_cart_item-desc">
                                            <a class="font-titles" href="<?php echo esc_url( $product_permalink );?>">
                                                <?php echo $product_name;?></a>
                                             <span class="woo-c_product_category">
                                                <a href="<?php echo esc_url( $product_permalink );?>">
                                                    <?php 
                                                   //product category name
                                                   echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( '', ':', count( $product->get_category_ids() ), 'simpleshop' ) . ' ', '</span>' );
                                                    ?>
                                                </a>
                                             </span>

                                             <span class="quantity">
                                                <?php 
                                                 // product quantity //
                                                 echo $cart_quantity;?> × 
                                                <span class="woocs_special_price_code">
                                                   <span class="woocommerce-Price-amount amount">
                                                       <?php 
                                                        // product price amount //
                                                        echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $product ), $cart_item, $cart_item_key ); 
                                                       ?>
                                                    <!-- <span class="woocommerce-Price-currencySymbol">$</span> -->
                                                </span></span>
                                            </span>
                                          </div>
                                        </li>
                                       <?php  } ?>
                                        <?php endforeach;?>


                                        <li class="woocommerce-mini-cart-item mini_cart_item">
                                            <div class="woocomerce-mini-cart__container">
                                                <p class="woocommerce-mini-cart__total total">
                                                    <strong><?php esc_attr_e( 'Subtotal', 'simpleshop' ); ?>:</strong> 
                                                    <span class="woocs_special_price_code"><span class="woocommerce-Price-amount amount">
                                                        <?php 
                                                           // product subtotal //
                                                          echo WC()->cart->get_cart_subtotal();
                                                        ?>
                                                    <!-- <span class="woocommerce-Price-currencySymbol">$</span> -->
                                                </span></span>
                                                </p>
                                                <p class="woocommerce-mini-cart__buttons buttons">
                                                    <a href="<?php 
                                                    // cart button
                                                       echo esc_url( $cart_url );?>" class="button wc-forward">
                                                        <?php esc_html_e('View Cart');
                                                        ?>
                                                    </a>
                                                    <a href="<?php 
                                                    // chekout button
                                                        echo esc_url( $checkout_url );?>" class="button checkout wc-forward">
                                                        <?php esc_html_e('Checkout');
                                                        ?>
                                                    </a>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                            <?php endif;?> 
                        </ul>
                    </div>
                    <!--nav link-->
                </nav>
            </div>
        </div>
    </div>
</header>
<!--header end-->


