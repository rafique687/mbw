<?php include("header.php");?>
    <!-- =====  BREADCRUMB STRAT  ===== -->
    <div class="breadcrumb section pt-60 pb-60">
      <div class="container">
        <h1 class="uppercase">Contact</h1>
        <ul>
          <li><a href="index.html"><i class="fa fa-home"></i></a></li>
          <li class="active">Contact</li>
        </ul>
      </div>
    </div>
    <!-- =====  BREADCRUMB END===== -->
    <div class="page-contact section">
    <!-- =====  CONTAINER START  ===== -->
    <div class="container">
      <div class="row ">
        <div id="column-left" class="col-lg-4 col-xl-3">
          <div id="category-menu" class="mb-30">
            <div class="nav-responsive">
              <div class="heading-part">
                <h3 class="section_title">Top category</h3>
              </div>
              <ul>
                   <?php
          $api_prod = $mydata['baseurl']."home/category";
          $jsonprod= file_get_contents($api_prod);
          $product = json_decode($jsonprod, true);
          foreach ($product as  $prod)
           {?>
                <li>
                  <a href="category_page.php?id=<?php echo $prod['prod_id']?>">
                  <?php echo $prod['product_name']?>
                  </a>
                </li>
    <?php  }  ?> 
               
              </ul>
            </div>
          </div>

          <div class="left_banner left-sidebar-widget mb-50"><!--  <a href="#"><img src="images/left1.jpg" alt="Left Banner" class="img-responsive" /></a> --> </div>
        </div>
        <div class="col-lg-8 col-xl-9">
          <!-- contact  -->
          <div class="row">
            <div class="col-md-4 col-xs-12 contact">
              <div class="location mb-50">
                <h4 class="capitalize mb-20"><strong>Our Location</strong></h4>
                <div class="address">Office address
                  <br><?php echo $mydata['basic'][5]['field_value'];?></div>
                <div class="call mt-10"><i class="fas fa-mobile-alt"></i> +91-<?php echo $mydata['basic'][1]['field_value'];?></div>
              </div>
              <div class="Career mb-50">
                <h4 class="capitalize mb-20"><strong>Careers</strong></h4>
                <div class="address"></div>
                <div class="email mt-10"><i class="far fa-envelope"></i> <a href="mailto: <?php echo $mydata['basic'][2]['field_value'];?>" target="_top">  <?php echo $mydata['basic'][2]['field_value'];?></a></div>
              </div>
              <div class="Hello mb-50">
                <h4 class="capitalize mb-20"><strong>Say Hello</strong></h4>
                <div class="address"></div>
                <div class="email mt-10"><i class="far fa-envelope"></i> <a href="mailto: <?php echo $mydata['basic'][2]['field_value'];?>" target="_top">  <?php echo $mydata['basic'][2]['field_value'];?></a></div>
              </div>
            </div>
            <div class="col-md-8 col-xs-12 contact-form mb_50">
              <!-- Contact FORM -->
              <div id="contact_form">
              <form id="contact_body" method="post" action="contact_me.php">
                <div class="form-group required">
                  <input type="text" name="name" class="form-control" id="exampleInputName" data-required="true" placeholder="Enter Name">
                </div>
                <div class="form-group required mt-30">
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" data-required="true" aria-describedby="exampleInputEmail1" placeholder="Email Address">
                </div>
                <div class="form-group required mt-30">
                  <input type="text" name="phone1" class="form-control" id="exampleInputPhone" data-required="true" aria-describedby="exampleInputPhone" placeholder="Phone number">
                </div>
                <div class="form-group required mt-30">
                  <input type="text" name="subject" class="form-control" id="exampleInputSubject" data-required="true" placeholder="Subject">
                </div>
                <div class="form-group required mt-30">
                  <textarea class="form-control"  name="message" placeholder="Message" data-required="true"></textarea>
                </div>
                
                <button type="submit" class="btn mt-30 mb-20">Send Message</button>
              </form>


                <div id="contact_results"></div>
              </div>
              <!-- END Contact FORM -->
            </div>
          </div>
          <!--Google map-->
          <div id="map-container-google-1" class="z-depth-1-half map-container mb-40">
           <!--  <iframe src="<?php echo  $mydata['footer'][5]['field_value'];?>" allowfullscreen></iframe> -->
          </div>

          <!--Google Maps-->

        </div>
      </div>
    </div>
  </div>
  <!-- =====  CONTAINER END  ===== -->
</div>
    <!-- =====  FOOTER START  ===== -->
    <div class="footer section pt-40">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 footer-block">
            <h4 class="footer-title py-2">Information</h4>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Delivery Information</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms & Conditions</a></li>
              <li><a href="about.html">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-lg-3 footer-block">
            <h4 class="footer-title py-2">Services</h4>
            <ul>
              <li><a href="#">Returns</a></li>
              <li><a href="#">Site Map</a></li>
              <li><a href="#">Wish List</a></li>
              <li><a href="#">My Account</a></li>
              <li><a href="#">Order History</a></li>
            </ul>
          </div>
          <div class="col-lg-3 footer-block">
            <h4 class="footer-title py-2">Extras</h4>
            <ul>
              <li><a href="#">Brands</a></li>
              <li><a href="#">Gift Certificates</a></li>
              <li><a href="#">Affiliates</a></li>
              <li><a href="#">Specials</a></li>
              <li><a href="#">Newsletter</a></li>
            </ul>
          </div>
          <div class="col-lg-3 footer-block">
            <h4 class="footer-title py-2">Contacts</h4>
            <ul>
              <li class="add">Warehouse & Offices, 12345 Street name, California USA</li>
              <li class="phone">(+123) 456 789
                <br> (+024) 666 888</li>
              <li class="email">Contact@yourcompany.com</li>
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
                  <li><a href="#" title="playstore"><img src="images/play-store.png" alt="playstore" class="img-responsive"></a></li>
                  <li><a href="#" title="appstore"><img src="images/app-store.png" alt="appstore" class="img-responsive"></a></li>
                </ul>
              </div>
            </div>
            <div class="col-12 col-lg-4 mt-20">
              <div class="section_title">Social media</div>
              <div class="social_icon text-center">
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fas fa-rss"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-12 ">
              <div class="copyright-part text-center pt-10 pb-10 mt-30">@ 2019 All Rights Reserved Bigmarket</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include("footer.php");?>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT3mI0RI16q19Oxv93gSxN0cF0wfxWN6w">
  </script>
  <script src="js/mail.js"></script>
</body>

</html>