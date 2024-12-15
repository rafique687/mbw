<div class="category">
                  <div class="grdnt_p_head-img" style="background-image: url(<?php echo base_url()?>banner/containerbanner.jpg);">
            <h2 class="hw-underline"> Mobile's Battery For</h2>
         </div>
         <div class="container rdm-pad">
            <div class="row">
                  <div class="module"> 
                     <div class="modcontent clearfix">
                        <ul class="blank" style="text-align: center;">
                        <?php $i=0; 
                         foreach($lazy as $ran){ $removspace= trim($ran['product_pic']);
                          $pic=explode(",",$removspace); if($i>8){ $i=0;}?>
                          <li class="col-lg-3 col-md-4 col-sm-4 col-xs-4 grdnt-cat" style="margin-bottom: 10px;" data-aos-duration="600" data-aos="fade-up"  data-aos-easing="ease-in-sine">
                              <div class="grdnt-wrap gcolor<?php echo $i;?>"> </div>
                                 <a class="showLoading" href="<?php echo site_url('product/products?id='.$ran['prod_id'])?>" target="_blank">
                                 <div class="grdnt-box">
                                    <div class="the-img">
                                       <img loading="lazy" src="<?php echo base_url()?>/products/<?php echo $pic[0]?>" alt="<?php echo $ran['product_name']?>" height="" style="border:2px solid #000" >
                                 <!--<span></span>-->
                                 <p class="prod-name"><?php echo $ran['product_name']?></p>
                                 <p class="prod-count"><?php echo $ran['total'];?> Products</p>
                                    </div>
                                 </div>
                                 </a>
                           </li>
                        <?php $i++; } ?>
                        </ul>
                  </div>
               </div>
            </div>
         </div>
                           <!-- Content End -->  
      </div>