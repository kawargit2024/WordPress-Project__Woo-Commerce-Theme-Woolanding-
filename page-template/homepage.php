<?php 
 /*
 Template Name:Simpleshop Homepage
 */

get_header();?>
<?php 

get_template_part('template-parts/homepage/banner');?>

<main class="site-main">

   <?php

    get_template_part('template-parts/homepage/shop-category');
    
    get_template_part('template-parts/homepage/new-arrival-product');
   
    get_template_part('template-parts/homepage/promo-section');

    get_template_part('template-parts/homepage/popular-section');

    get_template_part('template-parts/homepage/offer-section');

    get_template_part('template-parts/homepage/flickr-section');

    ?>

</main>

<?php get_footer();?>