<div class="feature-area">
<div class="container d-center">
               <div class="row"align="center">
                  <div class="col-lg-12 icon-section mobile-section-icon">
                     <?php  foreach($topbrand as $tbrand)
                     {?>
                     <div class="single-feature col-xs-3 mobile-section-bottom" data-aos-duration="600" data-aos="zoom-in" data-aos-duration="600" data-aos-duration="500">
                        <div class="desc-wrap" align="center">
                           <?php $tpic=explode(",",$tbrand['product_pic']);?>
                           <img src="<?php echo base_url()?>products/<?php echo $tpic[0]?>" alt="<?php echo $tbrand['sucate']?>" class="img-responsive preseratives" style="height: auto; width:auto;"> 
                           <hr class="hr-line">
                           <h3 class="NoPreseratives"><?php echo $tbrand['sucate']?></h3>
                        </div>
                     </div>
                  <?php } ?>
                   
                  </div>
               </div>
            </div>
         </div>