<?php include("header.php");?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

<?php if(isset($_POST['otp'])&& isset($_POST['submit']))
{
    $url = $mydata['baseurl']."Home/verify";
    $postinfo = array("otp"=>$_POST['otp']);
    
          $curl = curl_init();
         curl_setopt_array($curl, [
         CURLOPT_PORT => "80",
         CURLOPT_URL => $url,
         CURLOPT_RETURNTRANSFER => 1,
         CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "POST", // OR GET
         CURLOPT_POSTFIELDS => $postinfo,
         //CURLOPT_HTTPHEADER => [],
         ]);
         $response = curl_exec($curl);
         $err = curl_error($curl);
         curl_close($curl);
    

      if ($err) {
            return "cURL Error #:" . $err;
         } 
         else
         {
          $resultt = json_decode($response, true);
          ///print_r($resultt);
          $_SESSION['mobile']=$resultt['mobile'];
          $_SESSION['userid']=$resultt['reg_id'];
          $_SESSION['username']=$resultt['name'];
        if(isset($_SESSION['mobile']) && isset($_SESSION['cart_item']))
         {
         
          echo "<script>window.location='cart_page.php'</script>";
         }
		 elseif(isset($_SESSION['mobile']) && !isset($_SESSION['cart_item']))
		 {
		echo "<script>window.location='view_userprofile.php'</script>";	 
		 }
         }
  }

   ?>

        <!-- =====  BREADCRUMB STRAT  ===== -->
    <div class="breadcrumb section pt-60 pb-60 mb-30">
      <div class="container">
        <h1 class="uppercase">Enter OTP</h1>
        <ul>
          <li><a href="index.php"><i class="fa fa-home"></i></a></li>
          <li class="active">OTP</li>
        </ul>
      </div>
    </div>
    <!-- =====  BREADCRUMB END===== -->
    <div class="page-login section">
    <!-- =====  CONTAINER START  ===== -->
    <div class="container">
      <div class="row ">
        <div class="col-12 my-4">
          <div class="row">
            
            <!-- Login -->
            <div class="col-md-6 col-12 d-flex">

                <div class="register">
                    
                    <h3>Enter OTP Which Sent to your Registered Mobile Number</h3> 

                    <!-- Login Form -->
                    <form class="my-4" id="form" action="" method="post" enctype="multipart/form-data">
                      <?php
                          if(isset($_GET['id']))
                          {
                          $api_vegi = $mydata['baseurl']."home/getotplogintime?mobile=".$_GET['id'];
                          } 
                          else
                          {
                            $api_vegi = $mydata['baseurl']."home/showotp";
                          }
                           // echo $api_vegi;
                            $jsonvg= file_get_contents($api_vegi);
                            $vegetable = json_decode($jsonvg, true);
                              ?>
                      <div class="form-group">
                        <h4>OTP : <?php if(isset($vegetable['otp'][0]['otp']))
                        {         echo $vegetable['otp'][0]['otp'] ;}
                        else{
                                echo $vegetable['otp'];
                              }?></h4>
                        <input type="" class="form-control" id="mobile"  placeholder="Enter OTP Here"  name="otp" id="otp" pattern="(?=.*[0-9]).{4,}" required="required">
                      </div>
                     
                     
                      <button type="submit" class="btn mt-10" id="submit" name="submit">Verify</button>
                    </form>

                    <h4>You have account? please click <a href="login.html">Login</a></h4>
                    
                </div>
            </div>

            
            <!-- Login With Social -->
            <div class="col-md-6 col-12 d-flex">
                
              <div class="account-image">
                    <h3>Upload your Image</h3>
                    
                    <img src="images/account-image-placeholder.png" alt="Account Image Placeholder" class="image-placeholder">
                    
                    <div class="account-image-upload">
                        <input type="file" name="chooseFile" id="account-image-upload">
                        <label class="account-image-label" for="account-image-upload">Choose your image</label>
                    </div>
                    
                    <p>jpEG 250x250</p>
                    
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

 