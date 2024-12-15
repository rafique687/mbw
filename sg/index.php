<?php include("header.php");?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script> 

<style type="text/css">
  #mask {
  position:absolute;
  left:0;
  top:0;
  z-index:9000;
  background-color:#26262c;
  display:none;
}  
#boxes .window {
  position:absolute;
  left:0;
  top:0;
  width:440px;
  height:850px;
  display:none;
  z-index:9999;
  padding:20px;
  border-radius: 5px;
  text-align: center;
}
#boxes #dialog {
  width:450px; 
  height:auto;
  padding: 10px 10px 10px 10px;
  background-color:#ffffff;
  font-size: 15pt;
}

.agree:hover{
  background-color: #D1D1D1;
}
.popupoption:hover{
 background-color:#D1D1D1;
 color: green;
}
.popupoption2:hover{
 color: red;
}
</style>

      <?php if(isset($_GET['success']))
          {?>
           <div class="maintext">
<h2></h2>
</div>
<div id="boxes">
<div style="top: 50%; left: 50%; display: none;" id="dialog" class="window"> 
<div id="san">
<a href="#" class="close agree">X
  <!-- <img width="25" style="float:right; margin-right: -25px; margin-top: -20px;" alt="X"> --></a>
<h1 style="color:Green">Your Order Succesfully Placed</h1>
</div>
</div>
<div style="width: 2478px; font-size: 32pt; color:white; height: 1202px; display: none; opacity: 0.4;" id="mask"></div>
</div>

         <?php }?>

    <!-- =====  BANNER STRAT  ===== -->
    <div class="banner section">
      <div class="main-banner owl-carousel">
  <?php
    $api_banner = $mydata['baseurl']."home/banner";
    $jsonbanner= file_get_contents($api_banner);
    $banner = json_decode($jsonbanner, true);
    //echo "<pre>"; print_r($banner);exit;
  foreach ($banner as  $baner) {?> 
        <div class="item">
          <a href="#"><img src="<?php echo $mydata['baseurl']."banner/".$baner['bannerpic'];?>" alt="Main Banner" class="img-responsive" / height="350">
          </a>
    
        </div>
      <?php } ?>
        
      </div>
    </div>
    <!-- =====  BANNER END  ===== -->

    <!-- =====  CONTAINER START  ===== -->
    <div class="container">
      <!-- =====  SUB BANNER  STRAT ===== -->
      <div class="subbanner-section section mt-20">
        <div class="owl-carousel banner-carousel">
    <?php
        $api_scate = $mydata['baseurl']."home/offer";
        $jsonscate= file_get_contents($api_scate);
        $scategory = json_decode($jsonscate, true);
       //echo "<pre>"; print_r($scategory);
        foreach ($scategory as $prod) { if(!empty($prod['item_name'])){?>
          <div class="home-subbanner">
            <?php $pic=explode(",", $prod['item_pic']);?>
            <div class="home-img">
              <a href="product_detail_page.php?id=<?php echo $prod['item_id']?>&folder=item&pic=<?php echo $prod['item_pic'];?>&rid=<?php echo $prod['root_cate']?>">
                <img class="leftbanner" src="<?php echo $mydata['baseurl'].'item/'.$pic[0];?>" alt="sub-banner1" style="width: 550px !important; height: 350px !important">
              </a>
            </div>
            
                       
            <div class="cms-desc">
              <div class="cms-text1">Get <b><?php echo $prod['item_name'];?></b></div>
              <div class="cms-text2">@ Rs.<?php echo $prod['price'];?>/-</div>
              <div class="cms-text3"></div>
            </div>
          </div>
        <?php  } }?>
       
        </div>
      </div>
      <!-- =====  SUB BANNER END  ===== --> 

      <!-- =====  SEARVICES START  ===== -->
      <div class="shipping-outer section">
        <div class="shipping-inner row">
          <div class="heading col-lg-3 col-12 text-center text-lg-left">
            <h2>Why choose us?</h2>
          </div>
          <div class="subtitle-part subtitle-part1 col-lg-3 col-4 text-center text-lg-left">
            <div class="subtitle-part-inner">
              <div class="subtitile">
                <div class="subtitle-part-image"></div>
                <div class="subtitile1">On time delivery</div>
                <div class="subtitile2">15% back if not able</div>
              </div>
            </div>
          </div>
          <div class="subtitle-part subtitle-part2 col-lg-3 col-4 text-center text-lg-left">
            <div class="subtitle-part-inner">
              <div class="subtitile">
                <div class="subtitle-part-image"></div>
                <div class="subtitile1">Free delivery</div>
                <div class="subtitile2">Order over Rs 200/-</div>
              </div>
            </div>
          </div>
          <div class="subtitle-part subtitle-part3 col-lg-3 col-4 text-center text-lg-left">
            <div class="subtitle-part-inner">
              <div class="subtitile">
                <div class="subtitle-part-image"></div>
                <div class="subtitile1">Quality assurance</div>
                <div class="subtitile2">You can trust us</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- =====  SEARVICES END  ===== -->

      <!-- =====  PRODUCT CATEGORY START  ===== -->
      <div class="category-banner-block">
        <div class="section_title">top categories</div>
        <div class="row">
          <?php
           $api_prod = $mydata['baseurl']."home/category";
           $jsonprod= file_get_contents($api_prod);
           $product = json_decode($jsonprod, true);
              //echo "<pre>"; print_r($product);exit;
            foreach ($product as  $prod) {
               if(!empty($prod['product_pic']))
                  { $pic=explode(",",$prod['product_pic']);?>

          <div class="product-layout col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="product-thumb transition text-center">
              <div class="caption categoryname">
                <h4><a href="subcategory.php?id=<?php echo $prod['prod_id'];?>&folder=products"><?php echo substr($prod['product_name'], 0, 17);?></a></h4>
              </div>
              <div class="image">
                <a href="subcategory.php?id=<?php echo $prod['prod_id'];?>&folder=products">
                <img src="<?php echo $mydata['baseurl'].'products/'.$pic[0];?>" alt="Del Monte Beets" title="Del Monte Beets" class="img-responsive">
                </a>
              </div>
            </div>
          </div>
        <?php } } ?>
       
        </div>
      </div>
      <!-- =====  PRODUCT CATEGORY END  ===== -->

      <!-- =====  PRODUCT section  ===== -->
 
            

      <!-- =====  featured section  ===== -->
      <div class="featured_product section mt-30">
        <div class="row">
          <div class="col-12">
            <div class="section_title">Offered Products</div>
          </div>
          <div class="section-product grid section">
    <?php
      
        foreach ($scategory as $prod) { 
          if(!empty($prod['item_name'])){?>
            <div class=" product-items col-6 col-sm-4 col-md-4 col-lg-3">
              <form action="product_detail_page.php" method="post">
              <div class="product-thumb transition">
               <div class="image">
                 <?php $pic=explode(",", $prod['item_pic']);?>
                  <div class="first_image"> 
                    <img src="<?php echo $mydata['baseurl'].'item/'.$pic[0];?>" alt="pure-spice-3" title="pure-spice-3" class="img-responsive" style="height: 150px !important"> </div>
                  <div class="swap_image"> 
                   
                    <img src="<?php echo $mydata['baseurl'].'item/'.$pic[0];?>" alt="pure-spice-3" title="pure-spice-3" class="img-responsive" style="height: 150px !important"></div>
                </div>
                <div class="product-details">
                  <div class="caption">
                    <h4><?php echo $prod['item_name'];?></h4>
                    <div class="product_option">
                    <div class="qty mt-30 form-group">
                    Qty
                    <input name="pqty" min="1" value="1" type="number" style="width: 70px; height: 20px;">
                    
                         
                          <?php echo $prod['perunit'].$pode['unit'];?>KG
                     
                  </div>
                       <div class="form-group required ">
                       <!--  <select name="unit" id="input-option230" class="form-control">
                         
                          <option><?php echo $prod['perunit'];?>Kg.</option>
                         
                        </select> -->
                         <!-- <label class="control-label"><img src="https://www.flaticon.com/svg/static/icons/svg/25/25473.svg" height="15" width="12">
                        <?php echo $prod['price'];?></label> -->
                      </div>
                      <div class="input-group button-group">
                       <!--  <label class="control-label"><img src="https://www.flaticon.com/svg/static/icons/svg/25/25473.svg" height="15" width="12">
                        <?php echo $prod['price'];?></label> -->
                       <!--  <p class="price">/-<span class="price-tax"></span></p> -->
                       <label class="control-label"><img src="https://www.flaticon.com/svg/static/icons/svg/25/25473.svg" height="15" width="12">
                        <?php echo $prod['price'];?>/-</label>
                        <input type="submit"  value="Add" class="addtocart pull-right">
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <input type="hidden" name="item_id" value="<?php echo $prod['item_id'] ?>">
              <input type="hidden" name="item_name" value="<?php echo $prod['item_name'] ?>">
               <input type="hidden" name="pic" value="<?php echo $prod['item_pic'] ?>">
                <input type="hidden" name="pprice" value="<?php echo $prod['price'] ?>">
            </form>
            </div>
          <?php  } } ?>
           
          </div>

        </div>
      </div>
      <!-- =====  featured section end ===== -->



      <!-- =====  PRODUCT section  END ===== -->

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
      <!-- =====  Brand end ===== -->



    </div>
    <!-- =====  CONTAINER END  ===== -->
  <?php include("footer.php");?>
  <script type="text/javascript">
    $(document).ready(function() { 
  var id = '#dialog';
  var maskHeight = $(document).height();
  var maskWidth = $(window).width();
  $('#mask').css({'width':maskWidth,'height':maskHeight}); 
  $('#mask').fadeIn(500); 
  $('#mask').fadeTo("slow",0.9); 
        var winH = $(window).height();
  var winW = $(window).width();
        $(id).css('top',  winH/2-$(id).height()/2);
  $(id).css('left', winW/2-$(id).width()/2);
     $(id).fadeIn(2000);  
     $('.window .close').click(function (e) {
  e.preventDefault();
  $('#mask').hide();
  $('.window').hide();
     });  
     $('#mask').click(function () {
  $(this).hide();
  $('.window').hide();
 });  
 
});
  </script>