<?php //session_start();
include("header.php");?>
 <?php if(isset($_POST["pqty"])){
 //echo "<pre>"; print_r($_POST);exit();
   $api_cart = $mydata['baseurl']."home/itemdetails?id=".$_POST['item_id'];
   $jsoncart= file_get_contents($api_cart);
   $productByCode = json_decode($jsoncart, true);
$itemArray = array($_POST["item_id"]=>array('item_name'=>$productByCode["item_name"],
                   'item_id'=>$productByCode["item_id"],'quantity'=>$_POST["pqty"],
                   'price'=>$productByCode["price"],'image'=>$productByCode["item_pic"]));

if(!empty($_SESSION["cart_item"]))
 {

    $flag = false;
    $index = "";
    foreach($_SESSION["cart_item"] as $k=>$val){
     if($_POST["item_id"] == $val["item_id"]){
      $flag = true;
      $index = $k;
     }
    }

  
    if($flag){
      $_SESSION["cart_item"][$index]["quantity"] += $_POST["pqty"];
    }
 else {
    $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);

  }
}
else {
      $_SESSION["cart_item"] = $itemArray;
    }

 echo  "<script>window.location = 'cart_page.php'</script>";
  } 

 ?>

    <!-- =====  BREADCRUMB STRAT  ===== -->
<?php

  $api_prod = $mydata['baseurl']."home/productdetails?id=".$_GET['id'].'&table='.$_GET['folder'];

       $jsonprod= file_get_contents($api_prod);
       $product = json_decode($jsonprod, true);
     
       ?>
    <div class="breadcrumb section pt-60 pb-60 mb-30">
      <div class="container">
        <h1 class="uppercase"><?php echo $product['item_name'];?></h1>
        <ul>
          <li><a href="index.php"><i class="fa fa-home"></i></a></li>
          <li class="active"><?php echo $product['item_name'];?></li>
        </ul>
      </div>
    </div>

    <!-- =====  BREADCRUMB END===== -->

    <div class="product-section section">
    <!-- =====  CONTAINER START  ===== -->
      <div class="container">
        <div class="row">
          <div class="col-12 mb-20">
            <div class="row mt_10 ">
              <div class="col-md-5">
                <div>
                  <a class="thumbnails"> 
                    <?php $pic=explode(",",$_GET['pic']);?>
                    <img data-name="product_image" src="<?php   echo $mydata['baseurl'].$_GET['folder'].'/'.$pic[0];?>" alt="" /></a>
                </div>


                <div id="product-thumbnail" class="owl-carousel">
                  <?php $pic=explode(",",$_GET['pic']);
                           foreach ($pic as $key => $img) {?>
                  <div class="item" style="height: 90px !important; width: 90px !important">
                    <div class="image-additional">
                      <a class="thumbnail" href="<?php   echo $mydata['baseurl'].$_GET['folder'].'/'.$pic[$key];?>" data-fancybox="group1"> <img src="<?php   echo $mydata['baseurl'].$_GET['folder'].'/'.$pic[$key];?>" style="height:50px !important;"/>
                      </a></div>
                 </div>
               <?php } ?>
                
                </div>
              </div>
          
              <div class="col-md-7 prodetail caption">
                <h4 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">
                  <?php if(isset($product['item_id']))
                     {
                        echo $product['item_name'];
                     }
                     else
                     { 
                        echo $product['product_name']; 
                     } ?></a></h4>
                  <div class="rating mt-5 mb-5"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-x"></i></span> </div>
                <span class="price mb-20"><span class="amount"><span class="currencySymbol"><img src="https://www.flaticon.com/svg/static/icons/svg/25/25473.svg" height="15" width="12"></span> <?php echo $product['price'];?>  /-</span>
                </span>
                <hr>
                <ul class="list-unstyled product_info my-3">
                  <li>
                    <label>Brand:</label>
                    <span> <a href="#"> <?php echo $product['item_name'];?> </a></span></li>
                  <li>
                    <label>Product Code:</label>
                    <span><?php echo $product['item_id'];?><?php echo $product['item_name'];?></span></li>
                  <li>
                    <label>Availability:</label>
                    <span> In Stock</span></li>
                </ul>
                <hr>
                <p class="product-desc mt-20"> <?php echo $product['description'];?></p>
                <div id="product">
                  <div class="form-group">
                    <div class="row">
                      <div class="Sort-by col-lg-6 col-12 mt-20">
                       <!--  <label>Qty.</label> -->
                        Qty.
                    <input name="pqty" min="1" value="1" type="number"  style="width: 70px; height: 20px;"><?php echo $product['perunit'].  $product['unit'];?>
                      </div>
                      <div class="Color col-lg-6 col-12 mt-20">
                       <!--  <label>Color</label>
                        <select name="product_color" id="select-by-color" class="selectpicker form-control">
                          <option>Blue</option>
                          <option>Green</option>
                          <option>Orange</option>
                          <option>White</option>
                        </select> -->
                      </div>
                    </div>
                  </div>
            <form action="product_detail_page.php" method="post">
            <input type="hidden" name="item_id" value="<?php echo $product['item_id']?>">
            <input type="hidden" name="item_id" value="<?php echo $product['item_id']?>">
            <input type="hidden" name="pic" value=" <?php echo $mydata['baseurl'].$_GET['folder'].'/'.$pic[0];?>">
            <input type="hidden" name="pname" value="<?php echo $product['item_name']?>">
            <input type="hidden" name="pprice" value="<?php echo $product['price']?>">
              <div class="col-md-7 prodetail caption">
                 <!--  <div class="qty mt-30 form-group">
                    <label>Qty</label>
                    <input name="pqty" min="1" value="1" type="number">
                  </div> -->
                  <input name="pqty" min="1" value="1" type="hidden">
                  <div class="button-group mt-30">
                    <button class="btn-success" style="background-color: #84c225 !important;">
                 <div class="add-to-cart" data-toggle="tooltip" title="" data-original-title="Add to cart"><span>Add</span> 
                  <!--   <input class="add-to-cart" type="submit" name="submit" value="Add" style="padding: 4px 20px; margin-top: -10px !important;"> -->
                   </div></button>
              </form>
                    <div class="wishlist" data-toggle="tooltip" title="" data-original-title="Wish list"><a href="#"><span><i class="fa fa-heart"></i></span></a></div><div class="compare" data-toggle="tooltip" title="" data-original-title="Compare"><a href="#"><span><i class="fas fa-exchange-alt"></i></span></a></div>
                  </div>
                  <div class="prodbottominfo">
                    <ul class="list-unstyled">                    
                      <li data-toggle="tooltip" title="" data-original-title="Worldwide Shipping">
                        <img src="images/world.png" alt=""> 
                      </li>
                      <li data-toggle="tooltip" title="" data-original-title="100% Original Product">
                        <img src="images/original.png" alt=""> 
                      </li>
                      <li data-toggle="tooltip" title="" data-original-title="Best Price Guaranteed">
                        <img src="images/inquire.png" alt=""> 
                      </li>
                       <li data-toggle="tooltip" title="" data-original-title="COD Available in India">
                         <img src="images/cod.png" alt=""> 
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 my-5">
                <ul class="nav nav-tabs mb-30" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#Overview" role="tab" aria-controls="Overview" aria-selected="true">Overview</a>
                  </li>
                <!--   <li class="nav-item">
                    <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#Reviews" role="tab" aria-controls="reviews-tab" aria-selected="false">Reviews (1)</a>
                  </li> -->
                <!--   <li class="nav-item">
                    <a class="nav-link" id="solution-tab" data-toggle="tab" href="#Solution" role="tab" aria-controls="solution-tab" aria-selected="false">Solution</a>
                  </li> -->
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="Overview" role="tabpanel" aria-labelledby="Overview"><p>CLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis malesuada mi id tristique. Sed ipsum nisi, dapibus at faucibus non, dictum a diam. Nunc vitae interdum diam. Sed finibus, justo vel maximus facilisis, sapien turpis euismod tellus, vulputate semper diam ipsum vel tellus.</p></div>
                  <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews">
                    <form>
                      <div id="review"></div>
                      <h4 class="mt-5 mb-10">Write a review</h4>
                      <div class="form-group required">
                        <label for="formGroupExampleInput">Your Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Name">
                      </div>
                      <div class="form-group required">
                        <label for="formGroupExampleInput2">Your Review</label>
                        <textarea class="form-control" id="formGroupExampleInput2" placeholder="Your Review"></textarea>
                        <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                      </div>
                      <div class="form-group row align-items-center">
                        <div class="col-8 col-md-9">
                          <label class="control-label">Rating</label>
                          <div class="rates"> <span class="ml-10"> Bad</span>
                          <input type="radio" name="rating" value="1">
                          <input type="radio" name="rating" value="2">
                          <input type="radio" name="rating" value="3">
                          <input type="radio" name="rating" value="4">
                          <input type="radio" name="rating" value="5">
                          <span>Good</span></div>
                        </div>
                        <div class="col-4 col-md-3">
                          <div class="buttons pull-right">
                              <button type="submit" class="btn">Continue</button>
                          </div>
                        </div>
                      </div>
                    </form>

                  </div>
                  <div class="tab-pane fade" id="Solution" role="tabpanel" aria-labelledby="Solution"><p></p></div>
                </div>

              </div>
            </div>
       
            <!-----------New add code-------------->
            <div class="row">
              <div class="col-md-12">
                <div class="heading-part text-center mb-10">
                  <h3 class="section_title mt-50">Related Products</h3>
                </div>
                <div class="related_pro">
                  <div class="product-layout related-pro  owl-carousel mb-50 ">
                    
              <?php
                $api_prod = $mydata['baseurl']."home/relatedproduct?id=".$_GET['rid'];
                $jsonprod= file_get_contents($api_prod);
                $product = json_decode($jsonprod, true);
               // echo "<pre>";print_r($product);
                foreach ($product as  $prod) {
                  if(!empty($prod['item_pic']))
                    { 
                      $pic=explode(",",$prod['item_pic']);?>
                   <div class="product-grid">
                      <div class="item">
                         <div class="product-thumb transition">
                            <div class="image">
                              <div class="first_image"> 
                                <a href="product_detail_page.php?pic=<?php echo $prod['item_pic'];?>&folder=item&id=<?php echo $prod['item_id'];?>&rid=<?php echo $_GET['rid']?>"> 
                                  <img src="<?php echo $mydata['baseurl'].'item'.'/'.$pic[0];?>" alt="pure-spice-3" title="<?php echo $prod['item_name'];?>" class="img-responsive" style="height:200px !important;"> 
                                </a> 
                              </div>
                              <div class="swap_image">
                              <a href="product_detail_page.php?pic=<?php echo $prod['item_pic'];?>&folder=item&id=<?php echo $prod['item_id'];?>&rid=<?php echo $_GET['rid']?>"> 
                                <img src="<?php   echo $mydata['baseurl'].'item'.'/'.$pic[0];?>" alt="pure-spice-3" title="<?php echo $prod['item_name'];?>" class="img-responsive" style="height:200px !important;">
                                </a>
                              </div>
                            </div>


          <form action="" method="post">
          <div class="product-details">
          <div class="caption">
            <h4>
              <a href="product_detail_page.php?pic=<?php echo $prod['item_pic'];?>&folder=item&id=<?php echo $prod['item_id'];?>&rid=<?php echo $_GET['rid']?>"><?php echo $prod['item_name'];?>
              </a>
            </h4>
            <p class="price">Rs.<?php echo $prod['price'];?>
            <!-- <span class="price-tax">Ex Tax: $7.25</span> --></p>
            <p class="desc"><?php echo $prod['description'];?></p>
            <div class="product_option">
              <div class="form-group required ">
                <select name="option[239]" id="input-option231" class="form-control">
                  <option value=""> --- Please Select --- </option>
                  <option value="<?php echo $prod['price'];?>">1kg(+Rs.<?php echo $prod['price'];?>)</option>
                  <!-- <option value="46">5kg(+$0.22)</option>
                  <option value="47">10kg(+$0.44)</option> -->
                </select>
              </div>
              <div class="input-group button-group">
                <label class="control-label">Qty</label>
                <input type="number" name="quantity" min="1" value="1"  step="1" class="qty form-control">
                <button type="button" class="addtocart pull-right">Add</button>
              </div>
            </div>
          </div>
        </div>
      </form>





                        </div>
                      </div>
                    </div>
                  <?php  } }?>
                    
                  
                   
                  </div>
                </div>
              </div>
            </div>
            <!-----------End New add Code----------->
          </div>
        </div>

      <!-- =====  Brand start ===== -->
      <div id="brand_carouse" class="section text-center mt-30 pb-15">
        <div class="row">
          <div class="col-12">
            <div class="section_title">Our Popular Brands</div>
          </div>
          <div class="col-sm-12">
            <div class="brand owl-carousel">
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
      <!-- =====  Brand end ===== -->

      </div>
    <!-- =====  CONTAINER END  ===== -->
    </div>
   <?php include("footer.php");?>}
