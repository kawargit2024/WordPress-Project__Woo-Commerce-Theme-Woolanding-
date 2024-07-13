<!--page title start-->
<?php
global $ss_demo;
?>
<section class="page-title page-title-bg" style="background-image: url('<?php 

if(!empty($error_404_hero_banner = Redux::get_option('ss_demo','404_hero_banner');)){
    echo esc_url ( $error_404_hero_banner);
}elseif(has_post_thumbnail()){
  the_post_thumbnail(get_the_ID(),'full');
}elseif(!empty($error_404_hero_banner)){
    //var_dump($error_404_hero_banner);
  echo $error_404_hero_banner["url"];
}else{
  echo get_template_directory_uri(). '/assets/img/404.jpg';
}

?>');">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="font-weight-bold"><?php the_title();?></h2>
            <nav class="woocommerce-breadcrumb">

                <?php woocommerce_breadcrumb(); ?>
                
            </nav>
        </div>
    </div>
</div>
</section>
    <!--page title end-->

   