<?php include("header.php");?>
    <!-- =====  BREADCRUMB STRAT  ===== -->
    <div class="breadcrumb section pt-60 pb-60">
      <div class="container">
        <h1 class="uppercase">Delivery Information</h1>
        <ul>
          <li><a href="index.php"><i class="fa fa-home"></i></a></li>
          <li class="active">Delivery Information</li>
        </ul>
      </div>
    </div>
    <!-- =====  BREADCRUMB END===== -->
    <div class="page-about section">
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
           <?php
                $api_about = $mydata['baseurl']."home/aboutt?id=2";
                $jsonabout= file_get_contents($api_about);
                $about = json_decode($jsonabout, true);
               // echo "<pre>"; print_r($about);
                ?>

          <div class="left_banner left-sidebar-widget mb-50"> <a href="#"><img src="<?php echo $mydata['baseurl']."/banner/".$about['banner'][0]['bannerpic']?>" alt="Left Banner" class="img-responsive" /></a> </div>
        </div>
        <div class="col-lg-8 col-xl-9 mb-20">
          <!-- about  -->
          <div class="row">
            <div class="col-md-12">
              <figure> <img src="<?php echo $mydata['baseurl']."/banner/".$about['banner'][0]['bannerpic']?>" alt="#"> </figure>
            </div>
            <div class="col-md-12">
              <div class="about-text">
                <div class="about-heading-wrap">
                  <h2 class="about-heading mb-20 mt-20 py-2">Delivery of Cost<span> </span></h2>
                </div>
                <p><?php //echo $about['about'][3]['field_value']?>
                  Cost of delivery

Extra Rs.50 will be charged if the shopping cart value is below Rs.567.


Time of delivery

Order will be processed (including shipment) within 2 working days if the product is available in stock. For further query please contact our Customer Service Helpline Number: +91-6377200325 (Timings: 08:00 AM-08:00 PM).
                </p>
              </div>
            </div>
          </div>
          <!-- =====  What We Do? ===== -->
          <div class="row">
           <!--  <div class="col-md-6">
              <div class="heading-part mb-20 mt-40">
                <h3 class="section_title">What We Do?</h3>
              </div>
                <div id="accordion">
                <div class="card my-1">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1. What is HTML?</a>

                    </h5>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body"><p>HTML is a computer language devised to can then b the Internet. It is relatively easy to learn, with the basics being accessible.</p>
                    </div>
                  </div>
                </div>
                <div class="card my-1">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. What is Bootstrap?</a>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body"><p>Bootstrap is the most popular HTML, CSS, and JS frameen I discovered Bootstrap a few was still gaining in popularity, addition to HTML, CSS and JS.</p>
                    </div>
                  </div>
                </div>
                <div class="card my-1">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">3. What is CSS?</a>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body"><p>Cascading Style Sheets, fondly referred to as CSS, is a simple design language intended to simplify the procrt of a web page. Using CSS.</p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-md-6">
              <div class="heading-part mb-20 mt-40 ">
                <h3 class="section_title">Skills</h3>
              </div>
              <div id="p_line">
                <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                  <span class="progress-type">HTML / HTML5</span> <span class="progress-completed">60%</span>
                </div>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  <span class="progress-type">ASP.Net</span> <span class="progress-completed">40%</span>
                </div>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 20%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  <span class="progress-type">Java</span> <span class="progress-completed">20%</span>
                </div>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 60%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  <span class="progress-type">JavaScript / jQuery</span> <span class="progress-completed">60%</span>
                </div>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  <span class="progress-type">CSS / CSS3</span> <span class="progress-completed">80%</span>
                </div>
              </div>
            </div> -->
          </div>
          <!-- =====  end  ===== -->
          <div class="team-section section mt-40">
          <!--Team Carousel -->
          <!-- <div class="heading-part mb-10">
            <h3 class="section_title mt-50">Our Creative Team</h3>
          </div>
          <div class="team_grid row-10">
            <div class="team3col  owl-carousel">
              <div class="item team-detail">
                <div class="team-item-img"> <img src="images/tm1.jpg" alt="" /> </div>
                <div class="team-designation mt-20">php Developer</div>
                <h4 class="team-title  my-2">joseph Lui </h4>
                <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>
                <ul class="social mt-20 mb-80">
                  <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="https://www.dribbble.com/" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                  <li><a href="https://www.pinterest.com/" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                  <li><a href="https://www.behance.net/" target="_blank"><i class="fab fa-behance"></i></a></li>
                </ul>
              </div>
              <div class="item team-detail">
                <div class="team-item-img"> <img src="images/tm2.jpg" alt="" /> </div>
                <div class="team-designation mt-20">php Developer</div>
                <h4 class="team-title  my-2">joseph Lui </h4>
                <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>
                <ul class="social mt-20 mb-80">
                  <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="https://www.dribbble.com/" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                  <li><a href="https://www.pinterest.com/" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                  <li><a href="https://www.behance.net/" target="_blank"><i class="fab fa-behance"></i></a></li>
                </ul>
              </div>
              <div class="item team-detail">
                <div class="team-item-img"> <img src="images/tm3.jpg" alt="" /> </div>
                <div class="team-designation mt-20">php Developer</div>
                <h4 class="team-title  my-2">joseph Lui </h4>
                <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>
                <ul class="social mt-20 mb-80">
                  <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="https://www.dribbble.com/" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                  <li><a href="https://www.pinterest.com/" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                  <li><a href="https://www.behance.net/" target="_blank"><i class="fab fa-behance"></i></a></li>
                </ul>
              </div>
              <div class="item team-detail">
                <div class="team-item-img"> <img src="images/tm4.jpg" alt="" /> </div>
                <div class="team-designation mt-20">php Developer</div>
                <h4 class="team-title  my-2">joseph Lui </h4>
                <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>
                <ul class="social mt-20 mb-80">
                  <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="https://www.dribbble.com/" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                  <li><a href="https://www.pinterest.com/" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                  <li><a href="https://www.behance.net/" target="_blank"><i class="fab fa-behance"></i></a></li>
                </ul>
              </div>
              <div class="item team-detail">
                <div class="team-item-img"> <img src="images/tm5.jpg" alt="" /> </div>
                <div class="team-designation mt-20">php Developer</div>
                <h4 class="team-title  my-2">joseph Lui </h4>
                <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>
                <ul class="social mt-20 mb-80">
                  <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="https://www.dribbble.com/" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                  <li><a href="https://www.pinterest.com/" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                  <li><a href="https://www.behance.net/" target="_blank"><i class="fab fa-behance"></i></a></li>
                </ul>
              </div>
            </div>
           
          </div> -->
        </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- =====  CONTAINER END  ===== -->
    <?php include("footer.php");?>