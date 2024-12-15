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
                    <form class="my-4" id="form" method="post">
                      <div class="form-group">

                        <input input type="tel" class="form-control" id="mobile"  placeholder="Enter 10 Digit Mobile Number" required="" name="mobile" pattern="[0-9]{10}">
                      </div>
                    
                      <div class="form-check">
                       <!--  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label> -->
                      </div>
                      <button type="submit" class="btn mt-10" id="submit">Login</button>
                    </form>
                    <div id="message" class="message" style="color: red"></div>
                    <h4>Don’t have account? please click <a href="register.html">Register</a></h4>
                    
                </div>
            </div>

            
            <!-- Login With Social -->
            <div class="col-md-6 col-12 d-flex">
                
                <div class="social-login">
                    <h3>Also you can login with SG Maart</h3>
                    <img src="images/login.jpg" width="100%" height="100%">
                   <!--  
                    <a href="#" class="facebook-login">Login with <i class="fab fa-facebook-f"></i></a>
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

    <?php /*if(isset($_POST['mobile']))
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
{?>
  <script>window.location="index.php";</script>
<?php }
}*/ ?>

   <script>
$(document).ready(function() {
    $('#submit').click(function() { 
    var mobile = $('#mobile').val();
    var message = $('.message');
  
    if (mobile == ''){
      
      message.html('<p>Mobile fields is compulsary</p>');
      return false;
    }
  var url = 'mobile=' + mobile ;
    console.log(url);
    $.ajax({
      type: 'POST',
      data: url,
      url: '<?php echo $mydata['baseurl']?>Home/login',
      success: function(responseText) {
        if(responseText === '"101"') {
          message.html('<p>Username already exists</p>');
        }
        else if (responseText === '"102"') { alert("ysss");
          message.html('<p>Email already exists</p>')
        }
        else if (responseText === '"202"') {
          message.html('<p>User created successfullyt! <a href="login.php" target="_blank">Login!</a></p>');
        }
        else {
         // message.html('<p>' + responseText + '</p>');
          if(responseText=='1')
          {
          //alert(responseText);exit;
         window.location = 'otp.php?id='+ mobile ; 
       }
       else
       {
         message.html('<p>' + responseText + '</p>');
       }
        }
      }
    });
    return false;
  });
});
</script>
