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
          <div id="content" class="col-sm-12 mt-30">
        
        <p>Your order has been successfully processed!</p><p>You can view your order history by going to the <a href="#">my account</a> page and by clicking on <a href="order-history.html">history</a>.</p><p>If your purchase has an associated download, you can go to the account <a href="#">downloads</a> page to view them.</p><p>Please direct any questions you have to the <a href="contact_us.html">store owner</a>.</p><p>Thanks for shopping with us online!</p>
        <div class="buttons">
          <div class="pull-right"><a href="index.html" class="btn btn-primary">Continue</a></div>
        </div>
        </div>

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
</body>

</html>