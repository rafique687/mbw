<?php include("header.php");?>
    <!-- =====  BREADCRUMB STRAT  ===== -->
    <div class="breadcrumb section pt-60 pb-60">
      <div class="container">
        <h1 class="uppercase">Shopping Cart</h1>
        <ul>
          <li><a href="index.html"><i class="fa fa-home"></i></a></li>
          <li class="active">Shopping Cart</li>
        </ul>
      </div>
    </div>
    <!-- =====  BREADCRUMB END===== -->
    <div class="page-checkout section">
      <!-- =====  CONTAINER START  ===== -->
      <?php
          $trackord = $mydata['baseurl']."home/order_detaills?orderid=".$_GET['id'];
         // echo $trackord;
          $orderinfo= file_get_contents($trackord);
          $oreder = json_decode($orderinfo, true);
        //echo "<pre>"; print_r($oreder['orderdetails']);
      ?>
      <div class="container">
        <div class="row">
        <div id="content" class="col-sm-9">
          <h2>Order History</h2>
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <td class="text-left" colspan="2">Order Details</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-left" style="width: 50%;"> <b>Order ID:</b>
                  <?php echo $oreder['orderdetails'][0]['orderid'];?><br>
                <b>Date Added:</b><?php echo $oreder['orderdetails'][0]['ord_date'];?></td>
                <td class="text-left" style="width: 50%;"> <b>Payment Method:</b><?php echo $oreder['orderdetails']['paid_method'];?><br>
                <b>Shipping Method:</b> Free Shipping </td>
              </tr>
            </tbody>
          </table>
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <td class="text-left" style="width: 50%; vertical-align: top;">Payment Address</td>
                <td class="text-left" style="width: 50%; vertical-align: top;">Shipping Address</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-left"><?php echo $oreder['orderdetails'][0]['addressid'] ?></td>
                <td class="text-left"><?php echo $oreder['orderdetails'][0]['addressid'] ?></td>
              </tr>
            </tbody>
          </table>
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <td class="text-left">Product Name</td>
                 <!--  <td class="text-left">Model</td> -->
                  <td class="text-right">Quantity</td>
                  <td class="text-right">Price</td>
                   <td class="text-right">Per Unit</td>
                  <td class="text-right">Total</td>
                  <td style="width: 20px;"></td>
                </tr>
              </thead>
              <tbody>
              <?php $grandtotal=0;
              foreach ($oreder['orderdetails'] as $ord_details) 
              {?>             
              <tr>
                <td class="text-left"><?php echo $ord_details['prod_name']?></small> </td>
              <!--   <td class="text-left">Product 14</td> -->
                <td class="text-right"><?php echo $ord_details['prod_qty']?></td>
                <td class="text-right"><i class="fa fa-rupee" style="font-size:12px"></i><?php echo $ord_details['unit_price']?>/-</td>
                <td class="text-right"><?php echo $ord_details['unit']?></td>
                <td class="text-right"><i class="fa fa-rupee" style="font-size:12px"></i><?php echo $ord_details['total_price']?>/-</td>
                <td class="text-right" style="white-space: nowrap;"> <a href="#" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Reorder"><i class="fa fa-shopping-cart"></i></a>  <a href="#" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="Return"><i class="fa fa-reply"></i></a></td>
              </tr>
              <?php $grandtotal += $ord_details['total_price']?>
        <?php } ?>
             
            </tbody>
              <tfoot>
                <tr>
                  <td colspan="3"></td>
                  <td class="text-right"><b>Sub-Total</b></td>
                  <td class="text-right"><i class="fa fa-rupee"></i><?php echo $grandtotal; ?>/-</td>
                </tr>
                <tr>
                  <td colspan="3"></td>
                  <td class="text-right"><b>Free Shipping</b></td>
                  <td class="text-right"><i class="fa fa-rupee"></i>0.00/-</td>
                </tr>
                <tr>
                  <td colspan="3"></td>
                  <td class="text-right"><b>GST(0%)</b></td>
                  <td class="text-right"><i class="fa fa-rupee"></i>0.00/-</td>
                </tr>
                <tr>
                  <td colspan="3"></td>
                  <td class="text-right"><b>Total</b></td>
                  <td class="text-right"><i class="fa fa-rupee"></i><?php echo $grandtotal; ?>/-</td>
                </tr>
              </tfoot>
            </table>
          </div>
          <h3>Order History</h3>
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <td class="text-left">Date Added</td>
                <td class="text-left">Status</td>
                <td class="text-left">Comment</td>
              </tr>
            </thead>
            <tbody>
            
            <tr>
              <td class="text-left"><?php echo $oreder['orderdetails'][0]['ord_date']?></td>
              <td class="text-left"><?php if( $oreder['orderdetails'][0]['delevery_status']==0){ echo "Received";}
                             else{ echo  $oreder['orderdetails'][0]['status'];}?></td>
              <td class="text-left"></td>
            </tr>
          </tbody>
        
      </table>
          <div class="buttons clearfix">
            <div class="pull-right"><a href="#" class="btn btn-primary">Continue</a></div>
          </div>
          </div>              
            <aside id="column-right" class="col-sm-3 hidden-xs">
              <div class="section sidebar">
                  <div class="heading-part">
                    <h3 class="section_title">Account</h3>
                  </div>   
                  <div class="list-group">
                      <a href="view_userprofile.php" class="list-group-item">My Account</a>
                      <a href="view_userprofile.php" class="list-group-item">Edit Account</a> 
                       
                      <a href="wish-list.php" class="list-group-item">Wish List</a> 
                      <a href="order-history.php" class="list-group-item">Order History</a>
                     
                      <a href="Logout.php" class="list-group-item">Logout</a>
                  </div>
                </div>
            </aside>
        </div>
      <!-- =====  Brand start ===== -->
      <div id="brand_carouse" class="section text-center my-5">
        <div class="type-01">
          <div class="heading-part mb-10 ">
            <h3 class="section_title">Our Brand</h3>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="brand owl-carousel py-3">
                 <?php
             $api_client = $mydata['baseurl']."home/clientlist";
             $jsonclient= file_get_contents($api_client);
             $client = json_decode($jsonclient, true);
           //echo "<pre>"; print_r($client);exit;
            foreach ($client as $ct) {
              if(!empty($ct['logo'])){?>
              <div class="product-thumb">
                <div class="item text-center"> <a href="#">
                  <img src="<?php echo $mydata['baseurl'].'/client/'.$ct['logo'];?>" alt="Disney" class="img-responsive" height="50" /></a>
                 </div>
              </div>
            <?php } } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
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
</body>

</html>