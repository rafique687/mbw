
<?php include("header.php");?>
<?php 
 if(!isset($_SESSION['userid']))
{?>
   <script>window.location="checkouttimelogin.php";</script>
 
<?php }

if(isset($_POST['address']))
{  //echo "<pre>"; print_r($_POST);exit;
    $addressurl =  $mydata['baseurl']."home/inserupdateaddress";
    $updaddress = array(
                       "address"  =>$_POST['address'],
                       "country"  =>$_POST['country'] ,
                       "statid"   =>$_POST['state'],
                       "city"     =>$_POST['city'],
                       "zipcode"     =>$_POST['zipcode'],
                       "user_id"  =>$_POST['userid']
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
          //return $resultt;
         }?>
   
 <script>
    setTimeout(function(){ window.location='view_userprofile.php'; }, 1000);
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
    <h2>Insert Address</h2>
                     <?php
                          $api_user = $mydata['baseurl']."home/update_useaddress?id=".$_GET['id'];
                         // echo $api_user;
                          $jsonuser= file_get_contents($api_user);
                          $user = json_decode($jsonuser, true);
                        //echo "<pre>"; print_r($user);
                        ?>

                      <div id="shipping-new" style="display: block;">
                        <form action="inseraddress.php" method="post">
                          <input type="hidden" value="<?php echo $_SESSION['userid'];?>" name="userid">

                           <div class="form-group row required">
                          <label for="input-shipping-zone" class="col-sm-2 control-label">Address</label>
                          <div class="col-sm-10">
                            
                          <textarea  class="form-control" id="exampleFormControlTextarea5" rows="3" required="" name="address" id="addres">
                          
                          </textarea>
                          
                          </div>
                        </div>  
                        <div class="form-group row required">
                          <label for="input-shipping-country" class="col-sm-2 control-label">Country</label>
                          <div class="col-sm-10">
                            <select  class="form-control selectpicker" id="country" data-live-search="true" name="country" id="country" required="" >
                              <option value=""> --- Select Country--- </option>
                              <?php foreach ($user['country'] as $value) {?>
                               <option value="<?php echo $value['contryid'];?>">
                                 <?php echo $value['contry'];?>
                              </option>
                             <?php  }?>
                             
                           
                            </select>
                          </div>
                        </div>
                        <div class="form-group row required">
                          <label for="input-shipping-zone" class="col-sm-2 control-label">Region / State</label>
                          <div class="col-sm-10">
                            <select class="form-control selectpicker" id="state" data-live-search="true" name="state" required="">
                              <option value=""> --- Select State --- </option>
                          
                             
                              
                            </select>
                          </div>
                        </div>
                        <div class="form-group row required">
                          <label for="input-shipping-zone" class="col-sm-2 control-label">City</label>
                          <div class="col-sm-10">
                            <select class="form-control selectpicker" id="city" data-live-search="true" name="city" required="">
                              <option value=""> --- Select City --- </option>
                           </select>
                          </div>
                        </div>
                          <div class="form-group row required">
                          <label for="input-shipping-zone" class="col-sm-2 control-label">Zip Code</label>
                          <div class="col-sm-10">
                           
                           <input type="text" name="zipcode" class="form-control" required="" value="" placeholder="Enter Zipcode">
                           
                          </div>
                        </div>
                        
                      
                         <div class="form-group row required" style="margin-left:40%;">
                          <input class="btn btn-outline-primary center" type="submit" name="" value="Add Address">
                         </div>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <?php include("footer.php");?>

               <script type="text/javascript">
                var info = $('#addres').val().trim();
              </script>
             <!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

<script>
$(document).ready(function() {
    $('#country').change(function() {
    var country = $('#country').val();
   var url = 'country=' + country ;
    console.log(url);
    $.ajax({
      type: 'POST',
      data: url,
      url: '<?php echo $mydata['baseurl']?>Home/statechange',
      success: function(responseText) {
        $("#state").html(responseText);
      }
    });
    return false;
  });
});
</script>
<script>
$(document).ready(function() {
    $('#state').change(function() {
    var state = $('#state').val();
   var url = 'state=' + state ;
    console.log(url);
    $.ajax({
      type: 'POST',
      data: url,
      url: '<?php echo $mydata['baseurl']?>Home/citychange',
      success: function(responseText) {
        $("#city").html(responseText);
      }
    });
    return false;
  });
});
</script>

