<?php include("header.php");?>
<?php 
 if(!isset($_SESSION['userid']))
{?>
   <script>window.location="checkouttimelogin.php";</script>
 
<?php } ?>
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

      <?php
          $api_user = $mydata['baseurl']."home/view_userprofile?id=".$_SESSION['userid'];
          //echo $api_user;
          $jsonuser= file_get_contents($api_user);
          $user = json_decode($jsonuser, true);
         //echo "<pre>"; print_r($user);
          ?>
      <div class="container">
        <div class="row ">

          <div class="col-12 my-3">
            <div id="accordion">
           <div class="card my-1">
             <a href="order-history.php" style="float:right;"><button class="btn btn-success pull-right">Track Order</button></a>
                <div class="card-header" id="headingOne">

                  <h4 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Personal Details <i class="fa fa-caret-down"></i></a>

                    


                  </h4>
                </div>
 
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12">
                        <h3>Customer Details</h3>
                        <table class="table">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email Address</th>
                            <th>Action</th>
                          </tr>
                          <tr>
                             <th><?php echo $user[0]['name'];?></th>
                            <th><?php echo $user[0]['mobile'];?></th>
                            <th><?php echo $user[0]['email'];?></th>
                           <th><a href="insertuserdetails.php"><button class="btn btn-info">Edit Details</button></a></th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                          
                          <!--   <th><button class="btn btn-info">Update Details</button></th>
                          </tr> -->
                          
                        </tbody>
                      </table>
                      
                      </div>
                 
                    </div>
                  </div>
                </div> 
              </div> 
              </div>
              <div class="card my-1">
                <div class="card-header" id="headingThree">
                  <h4 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> Address Details<i class="fa fa-caret-down"></i></a>
                  </h4>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                        <table class="table">
                        <thead>
                          <tr>
                            <th>Country</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Zip Code</th>
                            <th>Address</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                    <?php foreach ($user as $addr) {?>
                      
               
                        <tr>
                          <th><?php echo $addr['contry'];?></th>
                          <th><?php echo $addr['state'];?></th>
                          <th><?php echo $addr['city'];?></th>
                          <th><?php echo $addr['zipcode'];?></th>
                          <th><p style="width: 400px;"><?php echo $addr['address'];?><p></th>
                          <th>
              <?php if(isset($addr['address']))
              {?>
                            <a href="update_userprofile.php?id=<?php echo $addr['adr_id']?>">
                            <button class="btn btn-secondary float-right">Edit Address</button></a>
              <?php  }?>
                        </th>
                      </tr>  
                       
                    <?php  } ?>
                    <tr>
                      <td>
                    <a href="inseraddress.php?id=<?php echo $_SESSION['userid']?>">
                      <button class="btn btn-info">Add Address</button>
                    </a>
                  </td>
                  </tr>
                     </tbody>
                      </table>
                  </div>
                </div>
              </div>
        <!-- 
         <div class="card my-1">
                <div class="card-header" id="headingThree">
                  <h4 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Track Order<i class="fa fa-caret-down"></i></a>
                  </h4>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                   <?php
                    $trackord = $mydata['baseurl']."home/userorder?id=".$_SESSION['userid'];
                    //echo $trackord;
                    $orderinfo= file_get_contents($trackord);
                    $oreder = json_decode($orderinfo, true);
                  //echo "<pre>"; print_r($oreder);
                    ?>
                      
                   <table class="table">
                        <thead>
                          <tr>
                            <th>Order Id</th>
                            <th>Order Date</th>
                            <th>Order Status</th>
                            <th>Order Information</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($oreder as $order) {?>
                        
                        <tr>
                          <th> <?php echo $order['orderid'];?></th>
                          <th> <?php echo $order['place_date'];?></th>
                          <th> <?php if($order['delevery_status']==0){ echo "Received";}
                             else{ echo $order['status'];}?></th>
                          <th> <a href="orderdetails.php?id=<?php echo $order['orderid'];?>">
                                Info
                              </a>
                            </th>
                          
                         
                      </tr>  
                    <?php  } ?>
                        </tbody>
                      </table>
                   
                  </div>
                </div>
              </div> -->
                        
            </div>

          </div>
        </div>
      <!-- =====  Brand start ===== -->
      
      <!-- =====  Brand end ===== -->
      </div>
      <!-- =====  CONTAINER END  ===== -->
    </div>
   <?php include("footer.php");?>
  <script>
  $('input[name=\'payment_address\']').on('change', function() {
    if (this.value == 'new') {
      $('#payment-existing').hide();
      $('#payment-new').show();
    } else {
      $('#payment-existing').show();
      $('#payment-new').hide();
    }
  });
  $('input[name=\'shipping_address\']').on('change', function() {
    if (this.value == 'new') {
      $('#shipping-existing').hide();
      $('#shipping-new').show();
    } else {
      $('#shipping-existing').show();
      $('#shipping-new').hide();
    }
  });
  </script>

    <script>
           var info = $('#address').val().trim();
           var info = $('#address1').val().trim();
           var info = $('#address2').val().trim();
    </script>
</body>

</html>