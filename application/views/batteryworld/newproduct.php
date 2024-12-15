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
         <img loading="lazy" src="<?php echo base_url()?>banner/containerbanner.jpg" alt="banner1" style="height: 150px;">
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
            <?php foreach($range as $ran){?>
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
                                      <span class="ltabs-tab-label" style="text-transform: capitalize;font-weight: normal;font-size: 14px;"><?php echo $ran['product_name']?></span> 
                                    </li>
                                    <li class="ltabs-tab tab-sel new-shape-green" data-category-id="20" data-active-content=".items-category-20"> 
                                      <span class="ltabs-tab-label hidden-xs" style="color:#000;text-transform: capitalize;vertical-align: bottom;"> 
                                        <?php echo $ran['total'];?> Products</span> 
                                      <span class="ltabs-tab-label hidden-lg hidden-sm" >
                                        <a href="#" target="_blank" class="" style="color:#000;text-transform: capitalize;font-size: 14px;"> <?php echo $ran['total'];?> Products <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                      </span>
                                    </li>
                                    <li class="ltabs-ta" data-category-id="20" data-active-content=".items-category-20" style="float: right;"> <span class="ltabs-tab-label" >
                                           <a href="<?php echo base_url()?>product/products?id=<?php echo $ran['prod_id']?>" target="_blank" style="color:#1715c3;text-transform: capitalize;font-size: 14px; "> 
                                             View All 
                                          </a></span> 
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <!-- 
                           <div class="cp-border">
                           <h3 class="modtitle"><span>Khakhra</span>
                           </h3>
                                                      <a href="category.php?id=63">(View All)</a>
                                                      
                           </div> -->
 <div class="ltabs-items-container">
     <div id="ltabs-items " class="ltabs-items-loaded ltabs-items-selected items-category-20 grid" >
                              <!-- Begin extraslider-inner -->
     <div class="products-list grid product-style__5 g-cards">
<?php 
      
      $where=array("sub_cate"=>$ran['sub_cate']);
      $item = $this->Product_Model->fviewitemm("item",$where);
      ///echo "<pre>"; print_r($itemm);exit;
      foreach ($item as $prod) { $ipic = explode(",",$prod['item_pic']);?>
                               
<form method="post">
<div class="product-layout ltabs-item" data-aos-duration="600" data-aos="fade-left" >
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
<p class="block-ellipsis"><?php echo $prod['decd']?>...</p>
<div class="price pull-left">
<span class="price-new" style="color: #000">MRP. ₹<del style="color:red"><?php echo $prod['mrp']?></del></span>
</div>
<div class="price pull-right">
<span class="price-new" style="margin-bottom: 15px !important; color: #000">OUR PRICE₹<?php echo $prod['price']?></span>
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

</span>
</div>
</div>
<div class="description item-desc hidden">
<p><p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"> <strong><a href="<?php echo site_url('product/products_details?pid='.$prod['item_id'])?>" style="color:blue; text-decoration:underline"></a></strong></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"> <strong><a href="<?php echo site_url('product/products_details?pid='.$prod['item_id'])?>" style="color:blue; text-decoration:underline">Quinoa coin Khakhra</a></strong><strong>. <a href="<?php echo site_url('product/products_details?pid='.$prod['item_id'])?>" style="color:blue; text-decoration:underline"></a></strong></span></span></p>

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
<!-- <input type="hidden" name="quantity" class="quantityVariation" value="10 Piece"> -->
<input type="hidden" name="sales_rate" class="rate" value="<?php echo $prod['price']?>"> 
</div>
<input type="hidden" name="item_id" value="<?php echo $prod['item_id']?>">
<?php if(isset($user['userid']))
{?>
 <input type="hidden" name="customer_id" value="<?php echo $user['userid']?>">
<?php } ?>
</form>
<?php } ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php } ?>



</div>
</div>