<?php include("header.php");?>
<?php if(isset($_POST['totalitem']))
{
  //echo "rafique";
  //echo "<pre>"; print_r($_POST);
}?>
<?php 
 if(!isset($_SESSION['userid']))
{?>
   <script>window.location=" checkouttimelogin.php";</script>
 
<?php } ?>
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
        <div class="row ">

          <div class="col-12 my-3">
            <div id="accordion">
          
              <div class="card my-1">
                <div class="card-header" id="headingSix">
                  <h4 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Confirm Order <i class="fa fa-caret-down"></i></a>
                  </h4>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    <div class="table-responsive">
                      <form action="place_order.php" method="post">
                      <table class="table table-bordered table-hover">
                        <thead>
                          <tr>
                             <td class="text-center">Image</td>
                            <td class="text-left">Name</td>
                            <!-- <td class="text-left">Model</td> -->
                            <td class="text-left">Quantity</td>
                            <td class="text-right">Unit Price</td>
                           <td class="text-right">Total</td>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                 $totalitem=0;
                 $gradtotal=0;
                 $i=0;
               foreach ($_SESSION['cart_item'] as $key => $cart) {?>
                          <tr>
                               <td class="text-center">
                       <?php  $pic=explode(",",$cart['image'])?>
                        <a href="#">
                          <img src="<?php   echo $mydata['baseurl'].'item/'.$pic[0];?>" alt="<?php echo $cart['item_name'];?>" title="iPod Classic" width="50" height="50">
                        </a>
                      </td>
                      <td class="text-left">
                        <a href="product.html">
                          <?php echo $cart['item_name'];?>
                          <input type="hidden" name="productname[]" value="<?php echo $cart['item_name'];?>">
                        </a>
                      </td>
                     <!--  <td class="text-left">product 11</td> -->
                      <td class="text-left">
                        <div style="max-width: 200px;" class="input-group btn-block">
                         <span class="input-group-btn">
                          <?php echo $cart['quantity'];?>
                          <input type="hidden" name="qty[]" value="<?php echo $cart['quantity'];?>">
                        </span>
                      </div>
                      </td>
                      <td class="text-right">
                        <img src="https://www.flaticon.com/svg/static/icons/svg/25/25473.svg" height="15" width="12">
                        <?php echo $cart['price'];?>
                         <input type="hidden" name="perproductpirce[]" value="<?php echo $cart['price'];?>">
                      </td>
                      <td class="text-right">
                        <img src="https://www.flaticon.com/svg/static/icons/svg/25/25473.svg" height="15" width="12">
                        <?php echo $total=$cart['price']*$cart['quantity'];?>
                        <input type="hidden" name="prodtotalpirce[]" value="<?php echo $total;?>">
                      </td>
                    <?php 

                    $gradtotal += $total;
                      $totalitem += $cart['quantity'];

                      $i++; } ?>
                      <input type="hidden" name="totalitem" value="<?php echo $totalitem;?>">
                       <input type="hidden" name="grandtotal" value="<?php echo $gradtotal;?>">
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td class="text-right" colspan="4"><strong>Grand-Total:</strong></td>
                            <td class="text-right"><img src="https://www.flaticon.com/svg/static/icons/svg/25/25473.svg" height="15" width="12"><?php echo $gradtotal; ?></td>

                          </tr>
                          
                          <tr>
                            <td class="text-left" colspan="4"><strong>Shipping Address:</strong>
                              <?php echo $_POST['address'];?></td>
                            <td class="text-left"></td>
                            <input type="hidden" value="<?php echo $_POST['address'];?>" name="address">
                            <input type="hidden" name="grandtotal" value="<?php echo $gradtotal; ?>">
                            <input type="hidden" name="totalitem" value="<?php echo $totalitem; ?>">
                          </tr>
                        </tfoot>

                      </table>

                    </div>
                    <div class="buttons">
                      <div class="pull-right">
                        <!-- <input type="button" data-loading-text="Loading..." class="btn" id="button-confirmm" value="Confirm Order"> -->
                        <input type="radio" id="cod" name="methodd" value="cod" required="">
                        <label for="COD">CASH ON DELEVERY</label>
                        <!-- <input type="radio" id="razor" name="methodd" value="razor" required=""> -->
                        <!-- <label for="RAZOR">RAZOR</label> -->
                        <input type="submit" data-loading-text="Loading..." class="btn"  value="Confirm Order">
                         </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>           
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
              <?php
             $api_client = $mydata['baseurl']."home/clientlist";
             $jsonclient= file_get_contents($api_client);
             $client = json_decode($jsonclient, true);
           //echo "<pre>"; print_r($client);exit;
            foreach ($client as $ct) {
              if(!empty($ct['logo'])){?>
              <div class="product-thumb">
                  <div class="item text-center">
                   <a href="#">
                    <img src="<?php echo $mydata['baseurl'].'/client/'.$ct['logo'];?>" alt="Disney" class="img-responsive"  height="50" />
                  </a> 
                  </div>
              </div>
            <?php } }?>
             
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