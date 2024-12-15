<?php include("header.php");
//echo "<pre>"; print_r($_SESSION['cart_item'][1])?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$(document).on("click", ".upd", function()
  {
      var idd=$(this).attr('data-key');
      var qnt = $("#qnt"+idd).val();
      var pic= $("#img"+idd).val();
    $.ajax({ 
            type: "POST",
            url: "qty_increase.php",
            data:{key:idd, qty:qnt,img:pic},
           // data: 'key='+idd & 'qty=' + qnt,
            success:function(res){
             $("#tb").html(res);
            }

        })
  });
        
      });

   </script>
<?php 
if(isset($_GET['del']))
{
  foreach($_SESSION['cart_item'] as $key => $value)
    {
     if($key==$_GET['del'])
      {
        unset($_SESSION['cart_item'][$key]);
      }
    }
}
if(isset($_GET['alldel']))
  {
    unset($_SESSION['cart_item']);
  }?>
 
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
    <!-- =====  HEADER END  ===== -->
    <div class="page-cart section">
    <!-- =====  CONTAINER START  ===== -->
    <form action="checkout_page.php" method="post">
      <div class="container">
        <div class="row ">
          <div class="col-12 mt-20 mb-20">
            <!-- <form enctype="multipart/form-data" method="post" action="#"> -->
              <a href="?alldel">Remove All</a>
              <div class="table-responsive" id="tableid">
                <table class="table table-bordered">
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
                  <tbody id="tb">
                 
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
                        </a>
                      </td>
                     <!--  <td class="text-left">product 11</td> -->
                      <td class="text-left">
                        <div style="max-width: 200px;" class="input-group btn-block">
                         <!--  <form id="frm<?php echo $key?>"> -->
                          <input type="number" min="1" class="form-control quantity" size="1" value="<?php echo $cart['quantity'];?>" name="quantity" id="qnt<?php echo $key ;?>">
                        
                        <input type="hidden" value="<?php echo $mydata['baseurl']?>" id="img<?php echo $key ;?>">
                          <span class="input-group-btn">
                       <button class="upd btn" title=""  data-toggle="tooltip" type="button" data-original-title="Update"  data-key="<?php echo $key ;?>"><i class="fa fa-refresh"></i>
                        </button>
                        <button  class="btn btn-danger" title="" data-toggle="tooltip" type="button" data-original-title="Remove">
                          <a href="?del=<?php echo $key ;?>"><i class="fa fa-times-circle"></i></a></button>
                        </span>
                      </div>
                      </td>
                      <td class="text-right">
                        <img src="https://www.flaticon.com/svg/static/icons/svg/25/25473.svg" height="15" width="12">
                        <?php echo $cart['price'];?>
                      </td>
                      <td class="text-right">
                        <img src="https://www.flaticon.com/svg/static/icons/svg/25/25473.svg" height="15" width="12">
                        <?php echo $total=$cart['price']*$cart['quantity'];?>
                      </td>
                    </tr>
                    
                   
              <?php   $gradtotal += $total;
                      $totalitem += $cart['quantity'];
                      $i++;
                  } ?>
          <tr>
            <td class="text-right"></td>
            <td class="text-right">Total Product</td>
            <td class="text-left"><?php echo $totalitem;?></td>
            <td class="text-right">Grand Total</td>
            <td class="text-right"><img src="https://www.flaticon.com/svg/static/icons/svg/25/25473.svg" height="15" width="12"><?php echo $gradtotal ;?></td>
        </tr>

            
                    
              
                  </tbody>
                </table>
              </div>
           <!--  </form> -->
            <h3 class="mtb_10">What would you like to do next?</h3>
            <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
            <div id="accordion">
              
          
              <div class="card my-1" aria-expanded="true">
                <div class="card-header" id="headingThree">
                  <h4 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Select Shipping Address <i class="fa fa-caret-down"></i></a>
                  </h4>
                </div>
                <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    <div class="align-items-center">
                    <p>Enter your destination to get a shipping estimate.</p>
                    <form class="form-horizontal">
                      <div class="form-group required row">
                        <label for="input-country" class="col-sm-2 control-label">Country</label>
                        <div class="col-sm-10">
                          <?php
                  $address = $mydata['baseurl']."home/alladdress?id=".$_SESSION['userid'];
                // echo $address;
                  $useraddress= file_get_contents($address);
                  $alladdress = json_decode($useraddress, true);
                  //echo "<pre>"; print_r($alladdress);
                   
                    ?>

                          <select class="form-control" id="input-country" name="address" required="">

                            <option value=""> --- Please Select --- </option>
                            <?php foreach ($alladdress as $addrress) {?>
                               <option value="<?php echo $addrress['address']?>"><?php echo $addrress['address']?></option>
                           <?php }?>
                          
                            
                          </select>
                        </div>
                      </div>
                  <button class="btn pull-right" data-loading-text="Loading..." id="button-quote" value=""><a href="inseraddress.php?id=<?php echo $_SESSION['userid']?>">Add Address</a></button>
                   
                  </div>
                  </div>
                </div>
              </div>
            </div>
       
             <a href="index.php"  class="btn pull-left mt_30">
             <!--  <button class="btn pull-left mt_30" /> -->
              Continue Shopping
           <!--  </button> -->
          </a>
          
            
              <input class="btn pull-right mt_30" type="submit" value="Checkout" />
            </form>
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
    <!-- =====  FOOTER START  ===== -->
    <div class="footer section pt-40">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 footer-block">
            <h4 class="footer-title py-2">Information</h4>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Delivery Information</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms & Conditions</a></li>
              <li><a href="about.html">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-lg-3 footer-block">
            <h4 class="footer-title py-2">Services</h4>
            <ul>
              <li><a href="#">Returns</a></li>
              <li><a href="#">Site Map</a></li>
              <li><a href="#">Wish List</a></li>
              <li><a href="#">My Account</a></li>
              <li><a href="#">Order History</a></li>
            </ul>
          </div>
          <div class="col-lg-3 footer-block">
            <h4 class="footer-title py-2">Extras</h4>
            <ul>
              <li><a href="#">Brands</a></li>
              <li><a href="#">Gift Certificates</a></li>
              <li><a href="#">Affiliates</a></li>
              <li><a href="#">Specials</a></li>
              <li><a href="#">Newsletter</a></li>
            </ul>
          </div>
          <div class="col-lg-3 footer-block">
            <h4 class="footer-title py-2">Contacts</h4>
            <ul>
              <li class="add">Warehouse & Offices, 12345 Street name, California USA</li>
              <li class="phone">(+123) 456 789
                <br> (+024) 666 888</li>
              <li class="email">Contact@yourcompany.com</li>
            </ul>
          </div>
        </div>
        <!-- =====  Newslatter ===== -->
        <div class="newsletters mt-30">
          <div class="news-head pull-left">
            <h2>Subscribe for our offer news</h2>
          </div>
          <div class="news-form pull-right">
            <form onsubmit="return validatemail();" method="post">
              <div class="form-group required">
                <input name="email" id="email" placeholder="Enter Your Email" class="form-control input-lg" required="" type="email">
                <button type="submit" class="btn btn-default btn-lg">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
        <!-- =====  Newslatter End ===== -->
      </div>

      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-4 mt-20">
              <div class="section_title">payment option </div>
              <div class="payment-icon text-center">
                <ul>
                  <li><i class="fab fa-cc-paypal"></i></li>
                  <li><i class="fab fa-cc-visa"></i></li>
                  <li><i class="fab fa-cc-discover"></i></li>
                  <li><i class="fab fa-cc-mastercard"></i></li>
                  <li><i class="fab fa-cc-amex"></i></li>
                </ul>
              </div>
            </div>

            <div class="col-12 col-lg-4 mt-20">
              <div class="section_title">download app</div>
              <div class="app-download text-center">
                <ul class="app-icon">
                  <li><a href="#" title="playstore"><img src="images/play-store.png" alt="playstore" class="img-responsive"></a></li>
                  <li><a href="#" title="appstore"><img src="images/app-store.png" alt="appstore" class="img-responsive"></a></li>
                </ul>
              </div>
            </div>
            <div class="col-12 col-lg-4 mt-20">
              <div class="section_title">Social media</div>
              <div class="social_icon text-center">
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fas fa-rss"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-12 ">
              <div class="copyright-part text-center pt-10 pb-10 mt-30">@ 2019 All Rights Reserved Bigmarket</div>
            </div>
          </div>
        </div>
      </div>
    </div>
   <?php include("footer.php");?>}
