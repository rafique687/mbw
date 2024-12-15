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
      <div class="container">
<div class="row">
    <div id="content" class="col-sm-9">
      
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <td class="text-right">Order ID</td>
              <td class="text-left">Customer</td>
            <!--   <td class="text-right">No. of Products</td> -->
              <td class="text-left">Status</td>
              <td class="text-right">Total</td>
              <td class="text-left">Date Added</td>
              <td>Details</td>
              <td>Print</td>
            </tr>
          </thead>
          <tbody>
              <?php
                    $trackord = $mydata['baseurl']."home/userorder?id=".$_SESSION['userid'];
                    //echo $trackord;
                    $orderinfo= file_get_contents($trackord);
                    $oreder = json_decode($orderinfo, true);
                  //echo "<pre>"; print_r($oreder);
                    ?>
              <?php foreach ($oreder as $order) {?>
              <tr>
              <td class="text-right"> <?php echo $order['orderid'];?></td>
              <td class="text-left"><?php echo $order['name'];?></td>
             <!--  <td class="text-right"><?php echo $order['total_item'];?></td> -->
              <td class="text-left"><?php if($order['delevery_status']==0){ echo "Received";}
                             else{ echo $order['status'];}?></td>
              <td class="text-right"><i class="fa fa-rupee" style="font-size:12px"></i><?php echo $order['grand_total'];?>/-
              </td>
              <td class="text-left"><?php echo $order['place_date'];?></td>
              <td class="text-right"><a href="order-history-detail.php?id=<?php echo $order['orderid']?>" data-toggle="tooltip" title="" class="btn btn-info" data-original-title="View"><i class="fa fa-eye"></i>
              </a></td>
              <td class="text-right"><a href="printbill.php?id=<?php echo $order['orderid']; ?>" class="btn btn-info" data-original-title="Print"><i class="fa fa-print"></i></a></td>
            </tr>
          <?php } ?>  
         
                      </tbody>
        </table>
      </div>
      <div class="row">
        <div class="col-sm-6 text-left"></div>
        <div class="col-sm-6 text-right">Showing 1 to 2 of 2 (1 Pages)</div>
      </div>
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
              <a href="#" class="list-group-item">My Account</a>
              <a href="#" class="list-group-item">Edit Account</a> 
              <a href="#" class="list-group-item">Password</a>
              <a href="#" class="list-group-item">Address Book</a> 
              <a href="#" class="list-group-item">Wish List</a> 
              <a href="#" class="list-group-item">Order History</a>
              <a href="#" class="list-group-item">Downloads</a>
              <a href="#" class="list-group-item">Recurring payments</a> 
              <a href="#" class="list-group-item">Reward Points</a>
              <a href="#" class="list-group-item">Returns</a> 
              <a href="$" class="list-group-item">Transactions</a> 
              <a href="$" class="list-group-item">Newsletter</a>
              <a href="$" class="list-group-item">Logout</a>
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