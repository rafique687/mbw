<!-- Footer Center Container -->
<footer class ="footer-container type_footer1 custom-footer">
    <section class="footer-center footer-top-spacing" style="background: #0a1429; /*background-image: url(img/footer-bg.png) ; */   background-repeat: no-repeat;background-position: center;padding-bottom: 20px; background-color: #000;">
        <div class="container content">
            <div class="row hidden-xs hidden-sm ">
                <div class="col-sm-6 col-md-3 box-service">
                    <div class="module clearfix">
                        <h3 class="modtitle liner-line">We care for you </h3>
                        <div class="modcontent" style="line-height: 2.5;">
                            <ul class="menu quick-links">
                             <li><a href="<?php echo base_url()?>About" target="_blank">About Us</a></li>
                                 <li><a href="<?php echo base_url()?>contact" target="_blank">Contact Us</a></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-md-3 box-account">
                    <div class="module clearfix">
                        <h3 class="modtitle liner-line">Policy </h3>
                        <div class="modcontent" style="line-height: 2.5;">
                            <ul class="menu quick-links"> 
                                <li><a href="<?php echo base_url()?>Privacy" target="_blank">Privacy Policy</a></li>
                                <li><a href="<?php echo base_url()?>Termsncondition" target="_blank">Terms & Conditions</a></li>
                              <!--   <li><a href="#" target="_blank">Return and Cancellation</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-md-3 collapsed-block ">
                    <div class="module clearfix">
                        <h3 class="modtitle liner-line">Contact Us </h3>
                        <div class="modcontent" style="line-height: 2.5;">
                            <ul class="menu quick-links"> 

                                <li><a href="tel:<?php echo $contact[1]['field_value'];?>">
                                    <i class="fa fa-phone"></i>&nbsp;&nbsp;+91 <?php echo $contact[1]['field_value'];?></a>
                                </li>
                                <li><a href="mailto:<?php $contact[2]['field_value'];?>">
                                    <i class="fa fa-envelope"></i>&nbsp;&nbsp;<?php echo $contact[2]['field_value'];?></a>
                                </li>
                                <li><a><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Jodhpur</a></li>
                            </ul>
                        </div>    
        
                        </div>
                    </div>

                    <div class="col-md-6 col-md-3 box-information">
                      <div class="module clearfix" style="margin-bottom: 0px !important;">
                          <h3 class="modtitle liner-line">Available On The</h3>
                          <div class="modcontent">
                            <div class="menu">
                              <ul class="left">
                                <li class="play" style="height: 47px !important;width: 120px !important;border-radius: 8px;margin-bottom: 3px;">
                                  <a href="#">
                                  <img src="#" title="Your Store" style="margin-top: -2px;" alt="Your Store">
                                  </a>
                                </li>
                                <li class="play" style="height: 47px !important;width: 120px !important;border-radius: 8px;margin-bottom: 15px;">
                                  <a href="#">
                                  <img src="#" class="appstorenewimg" title="Your Store" style="margin-top: 1px;border: 1px solid #7c7c7c;border-radius: 4px;" alt="Your Store">
                                  </a>
                                </li>                              
                              </ul>
                            </div>
                          </div>
                      </div>

                      <div class="module clearfix ">
                          <!--<h3 class="modtitle">Social Media</h3>-->
                          <div class="modcontent">
                            <div class="ul-wrap-social">
                          
                                 <ul class="ul-b-social">
                               <?php if(!empty($media[0]['field_value']))
                               {?>
                                <li class="bottom-social">
                                  <a href="<?php echo $media[0]['field_value'];?>" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                              </li>
                          <?php } ?>
                            <?php if(!empty($media[3]['field_value']))
                                 {?>
                                  <li class="bottom-social">
                                  <a href="<?php echo $media[3]['field_value'];?>" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a> </li>
                            <?php } ?>
                           
                                <?php if(!empty($media[1]['field_value']))
                                {?>
                                  <li class="bottom-social">
                                 <a href="<?php echo $media[1]['field_value'];?>" target="_blank" class="google"><i class="fa fa-instagram"></i></a> </li>
                          <?php } ?>
                          <?php if(!empty($media[2]['field_value']))
                                {?>
                                  <li class=bottom-social" target="_blank" class="linkedin">
                                <a href="<?php echo $media[2]['field_value'];?>" target="_blank" class="linkedin">
                                    <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                        <?php   } ?>
                            <?php if(!empty($media[4]['field_value']))
                               {?>
                                  <li class="bottom-social">
                                  <a href="<?php echo $media[4]['field_value'];?>" target="_blank" class="google+"><i class="fa fa-google-plus"></i></a></li>
                        <?php  } ?>
                              </ul>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>