<?php
include("header.php");?>

    <!-- =====  BREADCRUMB STRAT  ===== -->
    <div class="breadcrumb section pt-60 pb-60">
      <div class="container">
        <h1 class="uppercase">Login</h1>
        <ul>
          <li><a href="index.html"><i class="fa fa-home"></i></a></li>
          <li class="active">Login</li>
        </ul>
      </div>
    </div>
    <!-- =====  BREADCRUMB END===== -->
    <div class="page-login section">
    <!-- =====  CONTAINER START  ===== -->
    <div class="container">
      <div class="row ">
        <div class="col-12 my-3">
          <div class="row">
            
            <!-- Login -->
            <div class="col-md-6 col-12 d-flex">

                <div class="login">
                    
                    <h3>Login to your account</h3>                   
                    <!-- Login Form -->
                    <form class="my-4" action="" method="post">
                      <div class="form-group">

                        <input input type="tel" class="form-control" id="mobile"  placeholder="Enter 10 Digit Mobile Number" required="" name="mobile" pattern="[0-9]{10}">
                      </div>
                    
                      <div class="form-check">
                       <!--  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label> -->
                      </div>
                      <button type="submit" class="btn mt-10">Login</button>
                    </form>

                    <h4>Don’t have account? please click <a href="register.html">Register</a></h4>
                    
                </div>
            </div>

            
            <!-- Login With Social -->
            <div class="col-md-6 col-12 d-flex">
                
                <div class="social-login">
                    <h3>Also you can login with..</h3>
                    <img src="images/login.jpg" width="100%" height="100%">
                    
                    <!-- <a href="#" class="facebook-login">Login with <i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="twitter-login">Login with <i class="fab fa-twitter"></i></a>
                    <a href="#" class="google-plus-login">Login with <i class="fab fa-google-plus"></i></a> -->
                    
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

    <?php if(isset($_POST['mobile']))
{
 //echo "string";exit; 
 $api_login = $mydata['baseurl']."home/login?otp=".$_POST['mobile'];
 //echo $api_login;exit;
 $login= file_get_contents($api_login);
 $logindetails = json_decode($login, true);
//echo "<pre>"; print_r($logindetails['mobile']);exit;
 $_SESSION['mobile']=$logindetails['mobile'];
 $_SESSION['userid']=$logindetails['use_id'];
 $_SESSION['username']=$logindetails['name'];
if(isset($_SESSION['mobile']))
{ //echo  $_SESSION['mobile'];exit;?>
 <script>window.location="checkout_page.php";</script>*/
<?php }
}?>
