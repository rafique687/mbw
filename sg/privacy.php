<?php include("header.php");?>
    <!-- =====  BREADCRUMB STRAT  ===== -->
    <div class="breadcrumb section pt-60 pb-60">
      <div class="container">
        <h1 class="uppercase">PRIVACY POLICY</h1>
        <ul>
          <li><a href="index.php"><i class="fa fa-home"></i></a></li>
          <li class="active">PRIVACY POLICY</li>
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
                $api_about = $mydata['baseurl']."home/aboutt?id=4";
                $jsonabout= file_get_contents($api_about);
                $about = json_decode($jsonabout, true);
               // echo "<pre>"; print_r($about);
                ?>

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
                  <h2 class="about-heading mb-20 mt-20 py-2">Privacy Policy <span> </span></h2>
                </div>
                <p><?php echo $about['about'][3]['field_value']?></p>
              </div>
            </div>
          </div>
                   </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- =====  CONTAINER END  ===== -->
    <?php include("footer.php");?>