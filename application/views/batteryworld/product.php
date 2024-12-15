<?php include("header.php");?>
   <body class="common-home res layout-home1">
      <div id="wrapper" class="wrapper-full banners-effect-7">
         <input type="hidden" class="customer_id" value="1">

<header id="header" class="variantleft type_1" >
  <?php include("topheader.php");?>
<?php include("header-center.php");?>
<?php include("header-bottom.php");?>  

		<!--Content Start  -->

		<div class="main-container container" style="margin-top:30px;">		

			<div class="row">


<?php include('filter.php');?>

<!--Middle Part Start-->

				<div id="content" class="col-md-9 col-sm-8">

					<div class="products-category">

						

						<!-- Sort Filter -->

						<div class="product-filter filters-panel">

							<div class="row">

	                        	<div class="col-md-5 visible-lg module" style="margin:0; width: 70%;">

	                                <ul class="breadcrumb" style="margin:0;background-color:#1423dd;padding-bottom:#000;">

	                                    <li><a href="<?php echo base_url()?>">Home</a></li>

	                                    <li><a href="#"><?php echo $catename['product_name'];?> </a></li>

	                                </ul> 

								</div>

	                            

								<!-- <div class="short-by-show form-inline text-right col-md-7 col-sm-8 col-xs-12 text-right">

									<div class="short-by">

										<label class="control-label" for="input-sort">Sort By:</label>

										<select id="input-sort" name="sort" class="form-control sortFilter">

											<option value="" selected="selected">Default</option>

											<option value="name_A2Z">Name (A - Z)</option>

											<option value="name_Z2A">Name (Z - A)</option>

										</select>

									</div>

								</div> -->

							</div>

						</div>

						<!-- Sort Filter -->



						<!--changed listings-->
 
<div class="products-list row grid " id="ItemData"> 
	<?php foreach($itemdetails as $itemm){  $pic=explode(",",$itemm['item_pic']);?>
			<form method="post">
				<div class="product-layout col-md-4 col-sm-6 col-xs-12 ">
            <div class="product-item-container slowmo-animate aos-init aos-animate" data-aos-duration="600" data-aos="fade-up">
 <div class="left-block redirect showLoading" redirecturl="<?php echo site_url('detailspage')?>">
     <div class="product-image-container second_img ">
       <a href="<?php echo site_url('product/products_details?pid='.$itemm['item_id'])?>" class="showLoading"> 
       <img alt="Mixed Dried Berries" class="img-responsive lazy" src="<?php echo base_url()?>item/<?php echo $pic[0]?>" style="display: block;">
       </a>
                           </div> 
 </div>
                                <div class="right-block">
                    <div class="caption">
                        <h4>
                        	<a href="<?php echo site_url('product/products_details?pid='.$itemm['item_id'])?>" class="showLoading">
                        	<?php echo $itemm['item_name']?>
                        	</a>
                        </h4>	
                        <p class="block-ellipsis"><?php echo substr($itemm['decd'],0,50);?>...</p>
                         <div class="price pull-left">
                            <span class="price-new"  style="color: #000">MRP.<del style="color:red"><?php echo '₹'.$itemm['mrp'];?></del></span> 
                        </div>
                        <div class="price pull-right">
                            <span class="price-new" style="color:#000">OUR PRICE<?php echo '₹'.$itemm['price'];?></span> 
                        </div>

                        
                        <div class="" style="margin-top: 10px;">
                            <div class="row">
                              <div class="col-xs-6 col-md-5">
                                  <div class="div" style="">
      <select class="no-border changeValue" name="item_variation_id" id="qnt<?php echo $itemm['item_id']?>">
      <option sales_rate="<?php echo $itemm['price']?>" value="1">1 Piece</option>
      <option sales_rate="<?php echo $itemm['price']?>" value="2">2 Piece</option>
      <option sales_rate="<?php echo $itemm['price']?>" value="3">3 Piece</option>
      <option sales_rate="<?php echo $itemm['price']?>" value="4">4 Piece</option>
      <option sales_rate="<?php echo $itemm['price']?>" value="5">5 Piece</option>
</select>
                                  </div> 
                              </div>
                              
                              <div class="col-xs-6 col-md-6">
                                  <div class="cart">
   <?php if(!isset($user['username']))
   {?>
   <a href="javascript:void(0);" data-toggle="modal" data-original-title="Add to Cart" id="AddtoCartt" class="btn btn-mega btn-lg" data-target="#loginModel" style="color: #fff; font-weight:400 !important">Add to Cart</a> 
<?php } ?>
   <?php if(isset($user['username']))
   {?>
   <button type="button" name="addtoCart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg showLoading button-cart" data-original-title="Add to Cart" data-key="<?php echo $itemm['item_id']?>">Add to Cart</button>
<?php } ?> 
                                  </div>
                                     <div class="input-group AddtoCart" style="display:none;">
                                      <span class="input-group-btn">
                                        <button type="button" class="btn btn-danger btn-number" customer_id="1" item_id="131" item_variation_id="450" data-type="minus" data-field="quant[2]">
                                        <span class="glyphicon glyphicon-minus"></span>
                                        </button>
                                      </span>
                                      <input type="text" name="quant[2]" style="text-align: center;" class="form-control input-number" item_id="131" customer_id="1" value="" item_variation_id="450" min="1" max="50">
                                      <span class="input-group-btn">
                                        <button type="button" customer_id="1" item_id="131" item_variation_id="450" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
                                          <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                      </span>
                                  </div>
                              </div>
                              
                            </div>
                        </div>

                        <div class="description item-desc hidden">
                            <p></p><p>Made from deliciously sweet, fresh sun-<strong><a href="https://healthymaster.in/category.php?id=40" title="Buy Dried Berries Online">dried berries</a></strong>, this mix is a combination of <a href="https://healthymaster.in/product.php?id=22/blue-berry" title="buy blueberries"><strong>blueberries</strong></a>, <a href="https://healthymaster.in/product.php?id=21/black-berry" title="buy black berries online "><strong>blackberries </strong></a>and <strong><a href="https://healthymaster.in/product.php?id=23/cranberry-full" title="buy Cranberries online ">cranberries</a></strong>. This mix is the perfect healthy snack at any time of day. Healthy Master's <strong>mixed dried berries</strong> are packed with antioxidants and phytonutrients which is highly recommended by nutritionists to include in our daily diet. They lower the risk of heart disease, cancer. They are low in calories, loaded with vitamins, minerals, fibre and several essential nutrients. Besides these nutritional properties, berries have attractive colour and sweet tangy flavours which makes them a delicious addition to shakes, smoothie bowls or various dessert recipes.</p>

<table border="0" cellpadding="0" cellspacing="0" style="height:100px; width:300px">
	<tbody>
		<tr>
			<td><img alt="" src="https://healthymaster.in/admins/webroot/uploadImages/images/Images%202/Images4/rich%20auxidant.jpg" style="height:85px; width:80px"></td>
			<td><img alt="" src="https://healthymaster.in/admins/webroot/uploadImages/images/Images%202/Images4/Fiber%20Rich.jpeg" style="height:85px; width:80px"></td>
			<td><img alt="" src="https://healthymaster.in/admins/webroot/uploadImages/images/image%203/rich%20in%20vitamin.jpg" style="height:85px; width:80px"></td>
			<td><img alt="" src="https://healthymaster.in/admins/webroot/uploadImages/images/Images%202/boost%20immunity.jpg" style="height:85px; width:80px"></td>
		</tr>
		<tr>
			<td style="text-align:center">Anti-<br>
			Oxidants</td>
			<td>
			<p style="text-align:center">Fiber<br>
			Rich</p>
			</td>
			<td style="text-align:center">Rich in<br>
			Vitamin C</td>
			<td style="text-align:center">Boost<br>
			Immunity</td>
		</tr>
	</tbody>
</table>
<p></p>
                        </div>
                    </div>
                </div>                    
            </div>
			   <!--         -->
           <input type="hidden" name="quantity" class="quantityVariation" value="200 gm">
          <input type="hidden" name="sales_rate" class="rate" value="320"> 
        </div>

        <input type="hidden" name="item_id" value="131">
        <input type="hidden" name="customer_id" value="1">
      </form>


   <?php } ?>
						</div>

						<div id="loadingShow" widh="100%" align="center"></div>				

	    				<!--// End Changed listings-->

	    				<input type="hidden" id="page_no" value="1">	

	    				<input type="hidden" id="categoryId" value="42">	

	    				<input type="hidden" id="searchbox" value=""> 

	    				<input type="hidden" id="s_price" value=""> 

	    				<input type="hidden" id="e_price" value="">   

					</div>

										
					<div class="dis" style="font-size:14px;font-family:'Poppins','sans-serif'!important;">
				
					</div>

				</div>

			</div>

			<!--Middle Part End-->

		</div>

		<!-- Content End -->  

	</div> 

<div id="beforeload" class="hidden" align="center" width="100%">

	<img src="https://healthymaster.in/img/loading.gif" style="width:10%">

</div>

<style type="text/css">
  .box-script {
     
    /*box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)
; */
     -moz-box-shadow: 0 0 5px 10px #e3dede;
  -webkit-box-shadow: 0 0 5px 10px #e3dede;
          box-shadow: 0 0 5px 1px #e3dede;

    min-height: 90px;
    width: 97.5%;
    vertical-align: middle;
    margin: 10px auto;
    background: white;
    border-radius: 9px;
  }
  .footer_top{
    margin-top: -1% !important;
    background: transparent;
  }
  .box-script{
    margin-bottom: -2%;
  }

  .spacing-div{
    margin-top: 8%; 
  }
  @media(max-width: 767px){
    img.appstorenewimg{
      margin-top: -2px !important;
      margin-left: 9px;
    }
  }


.liner-line::after {
    display: inline-block;
    content: "";
    border-top: .2rem solid #5CB02F;
    width: 4rem;
    margin: -5px 1rem;
    transform: translateY(-1rem);
}

</style>
<?php include("newsletter.php");?>
<?php include("footer.php");?>
<?php include("everythingelse.php");?>