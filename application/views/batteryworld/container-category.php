                  <!--Content Start  -->
<div class="main-container container">
<div class="row" >
   <div id="content">
      <div class="module" style="margin-top:0;">
      </div>
                                     
   <!--banner horizontal-->
   <div class="col-xs-12 module--4x clearfix mb-spc">
      <div class="" data-aos-duration="600" data-aos="fade-up">
         <a class="showLoading" href="#" target="_blank">
         <img loading="lazy" src="<?php echo base_url()?>banner/containerbanner.jpg" alt="banner1" style="height: 200px;">
         </a>
      </div>
   </div>
   <!--END banner horizontal--> 
               </div>
</div>
</div>
<div class="category">
   <!-- Content End -->  
</div>
                        <!--Content Start  -->
         <div class="main-container container">
          
            <div class="row" >
               <div id="content">
                  <div class="module" style="margin-top:0;">
                  </div>
                  
                      
<!-- new arrival -->
<div class=" module tab-slider titleLine col-xs-12 ">
<div id="so_listing_tabs_1" class="so-listing-tabs first-load module">
<div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="4" data-sm="2" data-xs="2" data-margin="30">
   <div class="ltabs-tabs-wrap">
   <div class="item-sub-cat item-sub-cat__divided">
      <ul class="ltabs-tabs cf">
       <li class="ltabs-tab tab-sel " data-category-id="20" data-active-content=".items-category-20"> 
         <span class="ltabs-tab-label" style="text-transform: capitalize;font-weight: normal;font-size: 14px;">TOP BATTERIES
         </span> 
      </li>
      <li class="ltabs-tab tab-sel new-shape-green" data-category-id="20" data-active-content=".items-category-20"> 
      <span class="ltabs-tab-label hidden-xs" style="color:#000;text-transform: capitalize;vertical-align: bottom;"> 
         WILD RANGE OF PRODUTS
      </span> 
      <span class="ltabs-tab-label hidden-lg hidden-sm" >
         <a href="#" target="_blank" class="" style="color:#5dbf02;text-transform: capitalize;font-size: 14px;">  5 Products <i class="fas fa-long-arrow-alt-right"></i>
         </a>
      </span>
      </li>
      <li class="ltabs-ta" data-category-id="20" data-active-content=".items-category-20" style="float: right;"> <span class="ltabs-tab-label" >
         <a href="#" target="_blank" style="color:#5dbf02;text-transform: capitalize;font-size: 14px; "> 
         </a>
      </span> 
      </li>
   </ul>
</div>
</div>
</div>
         
 <div class="ltabs-items-container">
     <div id="ltabs-items " class="ltabs-items-loaded ltabs-items-selected items-category-20 grid" >
                              <!-- Begin extraslider-inner -->
     <div class="products-list grid product-style__5 g-cards">
<?php 
      // echo "<pre>"; print_r($range);
      foreach ($range as $prod) { $ipic = explode(",",$prod['item_pic']);?>
                               
<form method="post">
<div class="product-layout col-sm-4 ltabs-item" data-aos-duration="600" data-aos="fade-left" >
<div class="product-item-container product-css slowmo-animate">
<div class="left-block redirect showLoading" redirectUrl="#">
<div class="product-image-container second_img img-bottom-space">
<a href="<?php echo site_url('product/products_details?pid='.$prod['item_id'])?>" class="showLoading">
<!-- <img loading="lazy" style="width: 68px;position: absolute;top: 0px;left: -2px;z-index: 1;" class="img-ico" src="<?php echo base_url()?>item/<?php echo $ipic[0]?>"> -->
<img loading="lazy" data-src="<?php echo base_url()?>item/<?php echo $ipic[0]?>"  alt="" class="img-responsive lazy" />
</a>
</div>
</div>
<div class="right-block">
<div class="caption">
<h4><a href="<?php echo site_url('product/products_details?pid='.$prod['item_id'])?>" class="showLoading"><?php echo $prod['item_name'];?></a></h4>
<p class="block-ellipsis" style="height: 30px !important;"><?php echo $prod['description']?>...</p>
<div class="price pull-left">
<span class="price-new strik" style="color: #000">MRP.₹ <del style="color:red"><?php echo $prod['mrp'];?></del></span>
</div>
<div class="price pull-right">
<span class="price-new" style="margin-bottom: 15px !important; color: #000">OUR PRICE₹<?php echo $prod['price'];?></span>
</div>
<div class="variation" style="margin-top: 10px;">
<div class="div" style="">
   <select class="no-border changeValue" name="item_variation_id" id="qnt<?php echo $prod['item_id']?>">
      <option sales_rate="<?php echo $prod['price']?>" value="1">1 Piece</option>
      <option sales_rate="<?php echo $prod['price']?>" value="2">2 Piece</option>
      <option sales_rate="<?php echo $prod['price']?>" value="3">3 Piece</option>
      <option sales_rate="<?php echo $prod['price']?>" value="4">4 Piece</option>
      <option sales_rate="<?php echo $prod['price']?>" value="5">5 Piece</option>
</select>

</div>
<div class="cart">
    <?php if(!isset($user['username']))
   {?>
   <a href="javascript:void(0);" data-toggle="modal" data-original-title="Add to Cart" id="AddtoCartt" class="btn btn-mega btn-lg" data-target="#loginModel" style="color: #fff; font-weight:400 !important">Add to Cart</a> 
<?php } ?>
   <?php if(isset($user['username']))
   {?>
   <button type="button" name="addtoCart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg showLoading button-cart" data-original-title="Add to Cart" data-key="<?php echo $prod['item_id']?>">Add to Cart</button>
<?php } ?>
</div>
<div class="input-group AddtoCart"  style="display:none;" >
<span class="input-group-btn">
<button type="button" class="btn btn-danger btn-number" customer_id="1" item_id='279' item_variation_id="1263" data-type="minus" data-field="quant[2]">
<span class="glyphicon glyphicon-minus"></span>
</button>
</span>
<input type="text" name="quant[2]" class="form-control input-number" item_id='279' customer_id="1"  value="" item_variation_id="1263" min="1" max="50">
<span class="input-group-btn">
<button type="button" customer_id="1" item_id='279' item_variation_id="1263" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
<span class="glyphicon glyphicon-plus"></span>
</button>
</span>
</div>
</div>
<div class="description item-desc hidden">
<p><p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"> <strong><a href="<?php echo site_url('product/products_details?pid='.$prod['item_id'])?>" style="color:blue; text-decoration:underline"></a></strong></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><a href="<?php echo site_url('product/products_details?pid='.$prod['item_id'])?>" style="color:blue; text-decoration:underline"></a></strong><strong>. <a href="<?php echo site_url('product/products_details?pid='.$prod['item_id'])?>" style="color:blue; text-decoration:underline"></a></strong> </span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"></span></span></p>

<table border="0" cellpadding="0" cellspacing="0" style="height:100px; width:300px">
<tbody>
<tr>
<td><img alt="" src="<?php echo base_url()?>item/<?php echo $ipic[0]?>" style="height:85px; width:80px" /></td>
<td><img alt="" src="<?php echo base_url()?>item/<?php echo $ipic[0]?>" style="height:85px; width:80px" /></td>
<td><img alt="" src="<?php echo base_url()?>item/<?php echo $ipic[0]?>" style="height:85px; width:80px" /></td>
<td><img alt="" src="<?php echo base_url()?>item/<?php echo $ipic[0]?>" style="height:85px; width:80px" /></td>
</tr>
<tr>
<td style="text-align:center">Bone&nbsp;<br />
Health</td>
<td style="text-align:center">Righ in<br />
Fiber</td>
<td style="text-align:center">Boost<br />
Immunity</td>
<td style="text-align:center">Weight<br />
Loss</td>
</tr>
</tbody>
</table>

<p>&nbsp;&nbsp;</p>
</p>
</div>
</div>
<div class="resp-added" id="added_to_cart_279" style="display:none">
<p><i class="fas fa-check fa-sm"></i><span> Added to Cart!</span> <a href="cart_final.php?active=4">View Cart</a></p>
</div>
</div>

</div>
<input type="hidden" name="quantity" class="quantityVariation" value="170 gm">
<input type="hidden" name="sales_rate" class="rate" value="115"> 
</div>
<input type="hidden" name="item_id" value="279">
<input type="hidden" name="customer_id" value="1">
</form>
<?php } ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>




</div>
</div>