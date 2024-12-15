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
       $trackord = $mydata['baseurl']."home/print_bill?orderid=".$_GET['id'];
                    //echo $trackord;
                    $orderinfo= file_get_contents($trackord);
                    $oreder = json_decode($orderinfo, true);
                  //echo "<pre>"; print_r($oreder);
                    ?>
      <div class="container">
<div class="row">
    <div id="content" class="col-sm-9">
      
      <div class="table-responsive" id="bill">
        <h3 style="text-align:center">SG Maart</h3>
             <h4>
              Order Id : <?php echo $oreder['order']['orderid'];?></h4>
             <h4> Customer Name : <?php echo $oreder['order']['name'];?>
               </h4>
               <h4>Payment Method : <?php echo $oreder['order']['paid_method'];?></h4>
               <h4> Delivery Address: <?php echo $oreder['order']['address'];?></h4>
               <h4> Contact: <?php echo $oreder['order']['mobile'];?></h4>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
               <th>Sr.No</th>
                  <th>Item Name</th>
                  <th>Qauntity</th>
                  <th>Unit Price</th>
                  <th>Sub Total</th>
            </tr>
          </thead>
          <tbody>
             
              <?php  $i=1;
               foreach($oreder['product'] as $ord){?> 
              <tr>
              <td class="text-right"> <?php echo $i ; ?></td>
              <td class="text-left"><?php echo $ord['name'];?></td>
              <td class="text-right"><?php echo $ord['prod_qty']?> <?php echo $ord['unit']?></td>
              <td class="text-left"><?php echo $ord['unit_price']?>  <?php echo $ord['unit']?></td>
              <td class="text-right"><i class="fa fa-rupee" style="font-size:12px"></i><?php echo $ord['total_price'];?>/-</td>
             <!--  <td class="text-left"><?php echo $ord['place_date'];?></td> -->
             <!--  <td class="text-right"><i class="fa fa-rupee" style="font-size:15px;"></i> <?php echo $ord['total_price']?>/-</td> -->
              <!-- <td class="text-right"><a href="printbill.php" class="btn btn-info" data-original-title="Print"><i class="fa fa-print"></i></a></td> -->
            </tr>
          <?php
          $i++; } ?>  
         
                      </tbody>
        </table>
      </div>
      <div class="row">
        <div class="col-sm-6 text-left"></div>
        <!-- <div class="col-sm-6 text-right">Showing 1 to 2 of 2 (1 Pages)</div> -->
      </div>
            <div class="buttons clearfix">
        <div class="pull-right">
          <input type="button" value="print Bill" / class="btn btn-primary"  onclick="printDiv('bill')"></div>
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
            <h3 class="section_title">Brand Logo</h3>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="brand owl-carousel py-3">
                <div class="item text-center"> <a href="#"><img src="images/brand/brand1.png" alt="Disney" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand2.png" alt="Dell" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand3.png" alt="Harley" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand4.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand5.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand6.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand7.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand8.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand9.png" alt="Canon" class="img-responsive" /></a> </div>
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

  <script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
</body>

</html>