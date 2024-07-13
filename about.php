<?php
/*
Template Name: About Us
*/

get_header();

?>
<?php 
 global $ss_demo;
get_template_part('template-parts/page-header/about-banner');?>

    <section class="site-main">
        <!--product section start-->
        <div class="space-3">
            <div class="container">
            	<div class="row justify-content-center mb-4 mb-lg-5">
                    <div class="col-md-8 text-center">
                        <h2 class="font-weight-bold">
                        <?php 
                          $abt_section_title = Redux::get_option( 'ss_demo','abt_section_title' );
                          if($abt_section_title){
                             echo $abt_section_title;
                          }
                        ?>
                        </h2>
                        <p>
                         <?php  
                             $abt_section_content = Redux::get_option( 'ss_demo','abt_section_content' );
                             if($abt_section_content){
                                 echo Redux::get_option( 'ss_demo','abt_section_content' );
                             }
                         ?>
                        </p>
                    </div>
                </div>
                <div class="row">
                <?php 
                $companyInfo = Redux::get_option('ss_demo','abt_company_info');
                if(!empty($companyInfo)){
                foreach( $companyInfo as $Info): ?>

                <div class="col-md-4">
                    <h4 class="font-weight-bold"><?php echo $Info['title']; ?></h4>
                    <p><?php echo $Info['description']; ?></p>
                </div>

                <?php endforeach; } ?>
            </div>
            </div>
         </div>
    </section>

    <!--MEET THE TEAM -->

    <section class="section-gray space-3 mb-5">
        <div class="container">
            <div class="row justify-content-center mb-4 mb-lg-5">
                <div class="col-md-8 text-center mb">
                    <h2 class="font-weight-bold"><?php 

                    if(get_theme_mod( 'about_team_title',__('Meet The Teams','woopress'))){
                        echo get_theme_mod( 'about_team_title',__('Meet The Teams','woopress')); 
                    } elseif(Redux::get_option('ss_demo','team_sec_title')){
                        echo Redux::get_option('ss_demo','team_sec_title');
                    }


                    
                ?></h2>
                    <p><?php echo get_theme_mod(' about_team_desc ',__('Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet','woopress'));?></p>
                </div>
            </div>
            <div class="row justify-content-center">
            <?php
                 $teamInfo  = Redux::get_option('ss_demo','team_info');
                if(!empty($teamInfo)){   
                     foreach( $teamInfo as $team ){ ?>
                        
                        <div class="col-md-4 text-center">
                            <img class="mb-3" src="<?php echo esc_url($team['image']);?>" alt="<?php esc_html__('team image','simpleshop');?>">
                            <h5 class="mb-0 font-weight-bold"><?php echo esc_html($team['title']);?></h5>
                            <p><?php echo esc_html($team['description']);?></p>
                        </div>

                       <?php } ?>
                   <?php } elseif( !empty ( get_theme_mod('team_repeater_box') ) ){
                      $team_box  = get_theme_mod('team_repeater_box');
                        foreach( $team_box as  $team ): ?>
                        <?php 
                            $team_col =  get_theme_mod('team_col');
                        ?>
                        <div class="<?php if( $team_col == '2' ){ echo 'col-md-6'; } elseif( $team_col == '3' ){ echo 'col-md-4'; } elseif( 
                            $team_col == '4' ){ echo 'col-md-3'; }?> text-center">
                            <img class="mb-3" src="<?php
                                if($team['image']){
                                    echo esc_url  ( $team['image'] );
                            } else{
                                echo get_template_directory_uri() . '/assets/img/p1.jpg';
                            } 
                            ?>" alt="">
                            <h5 class="mb-0 font-weight-bold"><?php echo esc_html ( $team['text'] );?></h5>
                            <p><?php echo esc_html( $team['textarea'] );?></p>
                        </div>
                    <?php 
                     endforeach;
                } else {
                  echo " ";
                } 
              ?>
                
            </div>
        </div>
    </section>
                 
<?php
get_footer();
?>