  <?php session_start();
        error_reporting(0);
      
      $api_url = "http://adiyogitechnosoft.com/sg/admin/home/basic";
     //echo $api_url;exit;
     $json= file_get_contents($api_url);
     $mydata = json_decode($json, true);
     // echo "<pre>"; print_r($mydata);exit

 ?>
<!doctype html>
<html class="no-js" lang="en">
<head>

  <!-- =====  BASIC PAGE NEEDS  ===== -->
  <meta charset="utf-8">
  <title><?php echo $mydata['basic'][0]['field_value'];?></title>

  <!-- =====  SEO MATE  ===== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="distribution" content="global">
  <meta name="revisit-after" content="2 Days">
  <meta name="robots" content="ALL">
  <meta name="rating mt-5 mb-5" content="8 YEARS">
  <meta name="GOOGLEBOT" content="NOARCHIVE">

  <!-- =====  MOBILE SPECIFICATION  ===== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- =====  CSS  ===== -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="css/meanmenu.css">
  <link rel="stylesheet" href="css/style.css">  
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="shortcut icon" href="<?php echo $mydata['baseurl'];?>settingpic/<?php echo $mydata['basic'][4]['field_value'];?>">
  <link rel="apple-touch-icon" href="<?php echo $mydata['baseurl'];?>settingpic/<?php echo $mydata['basic'][4]['field_value'];?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $mydata['baseurl'];?>settingpic/<?php echo $mydata['basic'][4]['field_value'];?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $mydata['baseurl'];?>settingpic/<?php echo $mydata['basic'][4]['field_value'];?>">

</head>

<body>
  <!-- =====  LODER  ===== -->
  <div class="loder"></div>
  <div class="wrapper">

    <!-- Modal -->
    <div id="subscribe-me-" class="modal animated" role="dialog" data-keyboard="true" tabindex="-1">
      <div class="newsletter-popup row align-items-center py-4  px-2"> 
        <img src="images/newsbg.jpg" alt="offer" class="offer col d-none d-sm-block">
        <div class="col-auto newsletter-popup-static newsletter-popup-top">
          <div class="popup-text">
            <div class="popup-title">50% <span>off</span></div>
            <div class="popup-desc mb-30">
              <div>Sign up and get 50% off your next Order</div>
            </div>
          </div>
          <form onsubmit="return  validatpopupemail();" method="post">
            <div class="form-group required">
              <input type="email" name="email-popup" id="email-popup" placeholder="Enter Your Email" class="form-control input-lg" required="">
            </div>
            <div class="form-group required">
              <button type="submit" class="btn" id="email-popup-submit">Subscribe</button>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="checkme">
              <label class="form-check-label" for="checkme">Dont show again</label>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal End -->

   

    <!-- =====  HEADER START  ===== -->
    <header id="header" class="section">
      <div class="container">
        <div class="header-top py-1">
          <div class="row align-items-center">
            <div class="col-md-6">
           <ul class="header-top-left pull-left">              
              <li class="telephone">
                <a href="tel:+91 <?php echo $mydata['basic'][1]['field_value'];?>">
                    <i class="fa fa-phone"></i>
                    (+91) <?php echo $mydata['basic'][1]['field_value'];?>
                </a>
              </li>
              </ul> 
            </div>
            <div class="col-md-6">
              <ul class="header-top-right pull-right">
                <li class="telephone">
                 
                </li>
                
                <li class="login">
                  <?php if(isset($_SESSION['mobile']))
                  { //echo $_SESSION['userid'];?>
                  
                    <a href="logout.php"><i class="fa fa-user"></i></a>
                     <a href="view_userprofile.php">
                    <?php if(isset($_SESSION['name'])){ echo $_SESSION['name']; } else{ echo $_SESSION['mobile'];} ?></a>
                <?php } 
                else{ ?>
                        <a href="login.php">Login</a>
                <?php }?>
                </li>
                <li class="register">
                   <?php if(isset($_SESSION['mobile']))
                  {?>
                      <a href="logout.php"></i>LogOut</a>
                <?php }
                else
                {?>
                  <!-- <a href="login.php">Login</a> -->
                  <a href="register.php">Signup</a>
               <?php } ?>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    <?php include("nav.php");?>
      <div class="header-static-block">
        <div class="container">
          <div class="row">
            <div class="icon-block">
              <div class="home_icon">
              <a href="index.php"><i class="fa fa-home"></i>Home</a>
              </div>
              <div class="search_icon">
              <a href="#"><i class="fa fa-search"></i>Search</a>
              </div>
              <div class="cart_icon">
              </div>
              <div class="login_icon">
                <a href="login.php"><i class="fa fa-user"></i>Login</a>
              </div>
              <div class="telephone_icon">
                <a href="contact_us.php"><i class="fa fa-phone"></i>Contact</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- =====  HEADER END  ===== -->