<?php include("header.php");?>
<?php 
 if(!isset($_SESSION['userid']))
{?>
   <script>window.location="checkouttimelogin.php";</script>
 
<?php }

if(isset($_POST['name']))
{  //echo "<pre>"; print_r($_POST);exit;
    $addressurl =  $mydata['baseurl']."home/inseriusername";
        $updaddress = array(
                       "name"  =>$_POST['name'],
                       "reg_id"  =>$_POST['userid'],
                        "email"  =>$_POST['email'] 
                   );
         $curl = curl_init();
         curl_setopt_array($curl, [
         CURLOPT_PORT => "80",
         CURLOPT_URL =>$addressurl,
         CURLOPT_RETURNTRANSFER => false,
         CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "POST", // OR GET
         CURLOPT_POSTFIELDS => $updaddress,
         //CURLOPT_HTTPHEADER => [],
         ]);
         $responsse = curl_exec($curl);
          $err = curl_error($curl);
         curl_close($curl);
    

      if ($err) {
            return "cURL Error #:" . $err;
         } 
         else
         {
          $resultt = json_decode($responsse, true);
         
           echo "<script>window.location='view_userprofile.php'</script>";
         }
         
          ?>
 <script>
    //setTimeout(function(){ window.location='view_userprofile.php'; }, 1000);
</script>
<?php }
 ?>
    <!-- =====  BREADCRUMB STRAT  ===== -->
    <div class="breadcrumb section pt-60 pb-60">
      <div class="container">
        <h1 class="uppercase">User Profile</h1>
        <ul>
          <li><a href="index.php"><i class="fa fa-home"></i></a></li>
          <li class="active">User Profile</li>
        </ul>
      </div>
    </div>
    <!-- =====  BREADCRUMB END===== -->
    <div class="page-checkout section">
      <!-- =====  CONTAINER START  ===== -->

      <div class="container" >
       
        <div class="row ">
          <div class="col-sm-3">
          </div>
  <div class="col-sm-6" style="border:1px solid #ccc; padding: 5%" >
    <h2>Insert Details</h2>
     <?php
                        $api_user = $mydata['baseurl']."home/getuserdetails?id=".$_SESSION['userid'];
                          //echo $api_user;
                          $jsonuser= file_get_contents($api_user);
                          $user = json_decode($jsonuser, true);
                       // echo "<pre>"; print_r($user);exit;
                        ?>
                        <div id="shipping-new" style="display: block;">
                        <form action="insertuserdetails.php" method="post">
                          <input type="hidden" value="<?php echo $_SESSION['userid'];?>" name="userid">
                    
                          <div class="form-group row required">
                          <label for="input-shipping-zone" class="col-sm-2 control-label">Name</label>
                          <div class="col-sm-10">
                           <input type="text" name="name" class="form-control" required="" value="<?php echo $user['name']?>" >
                          </div>
                          </div>

                           <div class="form-group row required">
                          <label for="input-shipping-zone" class="col-sm-2 control-label">Email Address</label>
                          <div class="col-sm-10">
                           <input type="text" name="email" class="form-control" required="" value="<?php echo $user['email']?>" id="email">
                          </div>
                          </div>
                        </div>
                          
                       
                         <!-- <div class="form-group row required"> -->
                          <input class="btn btn-outline-primary pull center" type="submit" name="" value="Update" style="margin-left: 20% !important">
                           <a href="view_userprofile.php" class="btn btn-danger">
                            Cancel
                           </a>
                       <!--   </div> -->
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php include("footer.php");?>
             