<?php include("header.php");?>
        <!-- =====  BREADCRUMB STRAT  ===== -->
    <div class="breadcrumb section pt-60 pb-60 mb-30">
      <div class="container">
        <h1 class="uppercase">Register</h1>
        <ul>
          <li><a href="index.php"><i class="fa fa-home"></i></a></li>
          <li class="active">Register</li>
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
                    
                    <h3>Registration to your account</h3> 

                    <!-- Login Form -->
                   <!--  <form class="my-4" id="form" action="<?php echo $mydata['baseurl']?>Home/registration" method="post"> -->
                     <form class="my-4" id="form" method="post">
                   
                      <div class="form-group">
                        <input type="tel" class="form-control" id="mobile"  placeholder="Enter 10 Digit Mobile Number" required="" name="mobile" pattern="[0-9]{10}">
                      </div>
                   
                      <div id="message" class="message" style="color: red"></div>
                      <button type="submit" class="btn mt-10" id="submit">Register</button>
                    </form>

                    <h4>You have account? please click <a href="login.php">Login</a></h4>
                    
                </div>
            </div>

            
            <!-- Login With Social -->
            <div class="col-md-6 col-12 d-flex">
                
              <div class="account-image">
                    <h3>Register Here</h3>
                    
                    <img src="images/reg.png" alt="Account Image Placeholder" class="image-placeholder" style="height: 250px;">
                    
                    <div class="account-image-upload">
                        <input type="file" name="chooseFile" id="account-image-upload">
                        <!-- <label class="account-image-label" for="account-image-upload">Choose your image</label> -->
                    </div>
                    
                   <!--  <p>jpEG 250x250</p> -->
                    
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

   <script>
$(document).ready(function() {
    $('#submit').click(function() { 
    var mobile = $('#mobile').val();
   /* var password = $('#password').val();
    var cpassword = $('#cpassword').val();
    var mobile    = $('#mobile').val();*/
    
    var message = $('.message');
   /* if (username == '' || mobile == '' || password == '' || cpassword=='')*/ 
    if (mobile == ''){
      
      message.html('<p>All fields are compulsary</p>');
      return false;
    }
   /* var messagge = $('#cpasswordd');
    if(password!== cpassword)
    {
      $("#cpasswordd").show();
      messagge.html('<p>Password Not Match</p>');
       return false;

    }*/
    
       
    var url = 'mobile=' + mobile ;
    console.log(url);
    $.ajax({
      type: 'POST',
      data: url,
      url: '<?php echo $mydata['baseurl']?>Home/registration',
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
         window.location = 'otp.php'; 
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