 <!--offer section start-->
    
<?php if( get_theme_mod('show_hide_offer_section', true)):?>

    <section class="space-3 space-adjust">
        <div class="container ">
            <div class="row no-gutters text-center">
                <?php
                  if(class_exists('Redux')){
                       if(!empty(Redux::get_option('ss_demo','shipping_info'))){
                           $shipping_info =  Redux::get_option('ss_demo','shipping_info');
                       }
                   }


                   if(!empty($shipping_info)){
                    foreach ($shipping_info as $s_info) {
                   ?>
                      <div class="col-md-4">
                        <div class="offer-box border p-5">
                            <i class="bi bi-<?php echo $s_info["url"]?>"></i>
                            <h5 class="font-weight-bold mt-3 mb-0"><?php echo $s_info["title"]?></h5>
                            <p class="mb-0"><?php echo $s_info["description"]?></p>
                        </div>
                      </div>

                    <?php } ?>
                  <?php } ?>
                
            </div>
        </div>
    </section>

    <?php endif;?>
    <!--offer section end-->
