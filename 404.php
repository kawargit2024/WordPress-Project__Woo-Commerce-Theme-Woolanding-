<?php
/*
 Template Name: 404 Page
*/
get_header();
?>
<?php  get_template_part('template-parts/page-header/404-banner');?>

    <section class="site-main">
        <!--product section start-->
        <div class="space-3">
            <div class="container">
                <div class="row text-center">
                	<div class="col-md-12  mb-4 mb-lg-0">
                        <div class="page-content">
                            <h1 class="display-1 font-weight-bold"> 
                                <?php esc_html_e( '404', 'simpleshop' ); ?> 
                            </h1>
                            <h2> 
                            <?php 
                                 $erro_404_title =  Redux::get_option('ss_demo','404_section_title','Oops! Page Not Found.');
                                 echo esc_html($erro_404_title);
                             ?> 
                            </h2>
                            <p> 
                            <?php 
                            $erro_404_desc =  Redux::get_option('ss_demo','404_section_content','Sorry, but the page you are looking for is not found. Please, make sure you have typed the current URL.');
                               echo esc_html($erro_404_desc);
                            ?>
                            </p>
                            <a href="<?php echo site_url('/');?>" class="btn btn-solid-dark">
                            <?php 
                                $erro_404_back_home_text =  Redux::get_option('ss_demo','back_to_home_button_text','Go Home');
                                echo esc_html($erro_404_back_home_text);
                            ?>
                            </a>
                	   </div>
                </div>
            </div>
         </div>
        </div>
    </section>
                 
<?php
get_footer();
?>