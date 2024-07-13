<!--hero section start-->
    <section style="background-image:url(<?php  if(has_post_thumbnail()){
         the_post_thumbnail(get_the_ID(),'full');
        } else{
           echo get_template_directory_uri() . '/assets/img/hero.jpg';
        }
    ?>);"class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <nav class="woocommerce-breadcrumb">
                         <h2 class="title font-weight-bold d-block text-left-sm"><?php the_title();?></h2>
                       <?php woocommerce_breadcrumb(); ?>

                    </nav>
                </div>
            </div>
        </div>
    </section>
<!--hero section end-->


