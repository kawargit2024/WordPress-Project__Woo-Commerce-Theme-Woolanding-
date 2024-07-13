<?php
get_header();
?>

    <section class="site-main">
        <!--product section start-->
        <div class="space-3">
            <div class="container">
                <div class="row">
                	<div class="col-md-12 mb-4 mb-lg-0 text-center">
                        <div class="space-3">
                         <?php

                            if ( have_posts() ) {
                                    _e("<h1> Search Results for: <strong style=color:#eb5c6a>". get_query_var('s') ."</strong></h1>");
                                     echo '<hr>';
                                     echo '<div class="space-1"></div>';
                                    while ( have_posts() ) {
                                       the_post();
                                             ?>
                                              <div class="alert alert-success">
                                                <li>
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </li>
                                                </div>
                                             <?php
                                    }
                                }else{
                         
                                    echo '<h1> Nothing Found </h1>';
                                    echo '<hr>';
                                    echo '<div class="space-1"></div>';
                                    echo '<div class="alert alert-info">
                                     <h5>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</h5>
                                    </div>';
                             } ?>
                        
                        </div>
                </div>
            </div>
         </div>
    </section>
                 
<?php
get_footer();
?>