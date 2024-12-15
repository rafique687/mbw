  <!-- =====  FOOTER START  ===== -->
    <div class="footer section pt-40">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 footer-block">
            <h4 class="footer-title py-2">Information</h4>
            <ul>
              <li><a href="about.php">About Us</a></li>
              <li><a href="deliveryinfo.php">Delivery Information</a></li>
              <li><a href="privacy.php">Privacy Policy</a></li>
              <li><a href="terms.php">Terms & Conditions</a></li>
              <li><a href="contact_us.php">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-lg-3 footer-block">
            <h4 class="footer-title py-2">Services</h4>
            <ul>
              <li><a href="return.php">Returns</a></li>
           <!--    <li><a href="#">Site Map</a></li> -->
              <li><a href="#">Wish List</a></li>
              <li><a href="view_userprofile.php">My Account</a></li>
              <li><a href="#">Order History</a></li>
            </ul>
          </div>
          <div class="col-lg-3 footer-block">
            <h4 class="footer-title py-2">Category</h4>
            <ul>
              <?php
                 $api_prod = $mydata['baseurl']."home/category";
                 //echo $api_prod;
                    $jsonprod= file_get_contents($api_prod);
                    $Rootcate = json_decode($jsonprod, true);
                    //echo "<pre>"; print_r($Rootcate);
                  foreach($Rootcate as  $rootcate) {?>
              <li>
                <a href="subcategory.php?id=<?php echo $rootcate['prod_id'];?>&folder=products"> <?php echo $rootcate['product_name']; ?>
                   </a>
              </li>
            <?php  }?>
             
            </ul>
          </div>
          <div class="col-lg-3 footer-block">
            <h4 class="footer-title py-2">Contacts</h4>
            <ul>
              <li class="add"><?php echo $mydata['basic'][5]['field_value'];?></li>
             
              <li class="email"><a href="mailto: <?php echo $mydata['basic'][2]['field_value'];?>" target="_top">  <?php echo $mydata['basic'][2]['field_value'];?></a></li>
            </ul>
          </div>
        </div>
        <!-- =====  Newslatter ===== -->
        <div class="newsletters mt-30">
          <div class="news-head pull-left">
            <h2>Subscribe for our offer news</h2>
          </div>
          <div class="news-form pull-right">
            <form onsubmit="return validatemail();" method="post">
              <div class="form-group required">
                <input name="email" id="email" placeholder="Enter Your Email" class="form-control input-lg" required="" type="email">
                <button type="submit" class="btn btn-default btn-lg">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
        <!-- =====  Newslatter End ===== -->
      </div>

      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-4 mt-20">
              <div class="section_title">payment option </div>
              <div class="payment-icon text-center">
                <ul>
                  <li><i class="fab fa-cc-paypal"></i></li>
                  <li><i class="fab fa-cc-visa"></i></li>
                  <li><i class="fab fa-cc-discover"></i></li>
                  <li><i class="fab fa-cc-mastercard"></i></li>
                  <li><i class="fab fa-cc-amex"></i></li>
                </ul>
              </div>
            </div>

            <div class="col-12 col-lg-4 mt-20">
              <div class="section_title">download app</div>
              <div class="app-download text-center">
                <ul class="app-icon">
                 <?php
                  if(!empty($mydata['footer'][5]['field_value'])){?>
                  <li>
                    <a href="<?php echo $mydata['footer'][5]['field_value']?>" title="playstore" target="_blank">
                    <img src="images/play-store.png" alt="playstore" class="img-responsive">
                  </a>
                </li>
              <?php } ?>
              <?php
              if(!empty($mydata['footer'][6]['field_value'])){?>
                  <li>
                    <a href="<?php echo $mydata['footer'][6]['field_value']?>" title="appstore" target="_blank">
                      <img src="images/app-store.png" alt="appstore" class="img-responsive">
                    </a>
                  </li>
                <?php } ?>
                </ul>
              </div>
            </div>
            <div class="col-12 col-lg-4 mt-20">
              <div class="section_title">Social media</div>
              <div class="social_icon text-center">
                <ul>
                  <?php if(!empty($mydata['footer'][0]['field_value']))
                  {?>
                      <li><a href="<?php echo $mydata['footer'][0]['field_value'];?>"><i class="fab fa-facebook-f"></i></a></li>
            <?php  }
                if(!empty($mydata['footer'][4]['field_value']))
                   {?>
                  <li><a href="<?php echo $mydata['footer'][4]['field_value'];?>"><i class="fab fa-google-plus-g"></i></a></li>
             <?php } 
                if(!empty($mydata['footer'][2]['field_value']))
                   {?>
                  <li><a href="<?php echo $mydata['footer'][2]['field_value']?>"><i class="fab fa-linkedin-in"></i></a></li>
             <?php }
                if(!empty($mydata['footer'][3]['field_value']))
                  {?>
                  <li><a href="<?php echo $mydata['footer'][3]['field_value']?>"><i class="fab fa-twitter"></i></a></li>
            <?php } ?>
                  <!-- <li><a href="#"><i class="fas fa-rss"></i></a></li> -->
                </ul>
              </div>
            </div>
            <div class="col-12 ">
              <div class="copyright-part text-center pt-10 pb-10 mt-30">&copy<?php echo date("Y");?> All Rights Reserved SG Maart</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =====  FOOTER END  ===== -->
  </div>
  <a id="scrollup"></a>
  <script src="js/modernizr.js"></script>
  <script src="js/jQuery_v3.1.1.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.magnific-popup.js"></script>
  <script src="js/jquery.firstVisitPopup.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>