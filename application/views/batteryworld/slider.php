<!-- Block slider  -->
         <section class="so-slideshow ">
            <div id="so-slideshow" data-aos-duration="100" data-aos="fade-in">
               <div class="module slideshow no-margin">
                  <div class="yt-content-slider yt-content-slider--arrow1"  data-autoplay="no" data-autoheight="no" data-delay="2" data-speed="0.3" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                     <?php foreach($banner as $baner)
                     {?>
                     <div class="yt-content-slide" dd="1">
                        <a href="#" target="_blank">
                           <img loading="lazy" src="<?php echo base_url()?>banner/<?php echo $baner['bannerpic']?>" alt="Healthy Snacks" class="img-responsive" style="height:50%px !important;"></a>
                     </div>
                  <?php } ?>
                                        
                          
                          
                                       </div>
                  <!-- <div class="loadeding"></div> -->
               </div>
            </div>
         </section>
         <!-- Block slider  -->
         