<!--page title start-->
<?php
global $ss_demo;
?>

<section class="page-title page-title-bg" style="background-image: url('<?php 

if( !empty( $contact_hero_banner = get_theme_mod('contact_hero_banner')) ){
    echo esc_url ( $contact_hero_banner );
} elseif ( has_post_thumbnail() ) {
   the_post_thumbnail( get_the_ID(),'full' );
} elseif(!empty( $contact_banner = Redux::get_option('ss_demo','contact_hero_banner') ) ){
     echo esc_url( $contact_banner['url'] );
} else{
    echo get_template_directory_uri() . '/assets/img/contact.jpg';
};

?>');">
    <div class="hero-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-white px-5 py-4 rounded d-inline-block p">
                        <h2 class="font-weight-bold"><?php the_title();?></h2>
                        <nav class="woocommerce-breadcrumb">

                            <?php woocommerce_breadcrumb(); ?>
                            
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--page title end-->