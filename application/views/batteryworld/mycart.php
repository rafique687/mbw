<?php include("header.php");?>
   <body class="common-home res layout-home1">
      <div id="wrapper" class="wrapper-full banners-effect-7">
         <input type="hidden" class="customer_id" value="<?php if(isset($user['userid'])){echo $user['userid'];}?>">

<header id="header" class="variantleft type_1" >
  <?php include("topheader.php");?>
<?php include("header-center.php");?>
<?php include("header-bottom.php");?> 
      
  
		<!--Content Starts-->
		<div class="main-container container sp-bspace">
			<div class="row">
				<div id="content" class="col-md-12 col-sm-12" style="margin-top:30px;">
								<div class="product-filter filters-panel mobile-panel">
								<ul class="breadcrumb" style="margin:0;text-transform: capitalize;">
									<li><a href="<?php echo base_url()?>" style="color:#000;">Home</a></li>
									<li><a href="<?php echo site_url('mycart/final_cart')?>" style="color:#000">Cart</a></li>
	              </ul> 
	         </div>
					<!-- Product Tabs -->
					<div class="producttab ">
						<div class="tabsslider vertical-tabs col-xs-12">
							<div class="tab-content col-lg-12 col-sm-12 col-xs-12" style="padding:0px;">
								
								<!-- MY CART CODE REMOVED -->
								<!-- add to line 726 -->

								<div id="tab5" class="tab-pane fade active in">
								
									<div class="page-fullWidthComponent" style="display: block;">

										<!-- // New cart section design & development -->
																							
<div class="cart-infor-wrap" id="cartwraper">
<div class="cart-w-prodt">
	<table class="table text-center cart-items-table" id="myCartTable">
	<thead class="d-none">
		<th class="text-left">Product Name</th>
		<th>
      <div class="col-md-3"><span>Price</span></div>
      <div class="col-md-5">
			<span>Quantity</span>
			</div>
      <div class="col-md-3">
			<span>Subtotal</span>
			</div>
      <div class="col-md-1">
				<span>Remove</span>
			</div>
		</th>
	</thead>
		<tbody>
<?php $cartdata=$this->session->userdata('cart_item');
	
   $gramdtotal=0;
  // $total="";
   if($cartdata){
   foreach($cartdata as $key=>$item)
    { //echo "<pre>" ; print_r($item);?>
<tr class="itemclass" id="itemRow_24">
<td class="text-left ">
<div class="img-n-name">
  <?php $itempic=explode(",",$item['image']);?>
<img width="70px" src="<?php echo base_url()?>item/<?php echo $itempic[0]?>" alt="<?php echo $item['item_name']?>" title="<?php echo $item['item_name']?>" class="img-thumbnail" />
<a href="#">
	<p style="margin: 18px 0px 10px 15px;"> <?php echo $item['item_name']?> (<?php echo $item['quantity']?> Pc.)</p>
</a>
<span style="color:red;" class="itemStcResult"></span>
<span style="color:red;" id="itemStockResult24"></span><br />
</div>
</td>
<td style="display: flex;align-items: baseline;" class="box-shift">
<div class="col-md-3">
	<p class="price">₹<?php echo $item['price']?> Pc.</p>
</div>
<div class="col-md-5">
<div class="incre-decre mobile-incre-decre">
<button type="button" data-toggle="tooltip" title="Dcrease" class="btn btn-danger removeQty">
  <i class="fa fa-minus"></i>
</button>
<div class="incre-inputs">
	<div class=""><input type="hidden" class="item_id" value="<?php echo $item['item_id']?>"></div>
	<div>
		<input readonly type="text" name="quantity" value="<?php echo $item['quantity']?>" class="form-control newQuantity nQuantity1" />
		<input readonly type="hidden" name="quantity" id="newQuantity_24" value="<?php echo $item['quantity']?>" class="form-control newQuantity nQuantity2" />
	</div>
   <input type="hidden" class="item_variation_id" value="46">
</div>
<button id="add_qty_btn_24"  type="button" data-toggle="tooltip" title="Add" class="btn btn-primary addQty" >
  <i class="fa fa-plus"></i>
</button>
</div>
</div>
<div class="col-md-3">
<p class="sb-total">
	<span class="total_sale_price_one">₹<?php echo $total= $item['quantity'] * $item['price']?></span>
		<span class="totalPrice" id="total_sale_price_24"></span>
</p>
</div>
<div class="col-md-1">
	<div class="btn-cart-rem">
		<span><i class="fa fa-trash deleteCartItem" data-key="<?php echo $item['item_id']?>"></i></span>
	</div>
</div>
</td>
</tr>
<?php 

  $gramdtotal += $total;

 } }
 ?>
</tbody>
</table>
</div>
											   <div class="prm-n-check">
											      	<div class="prm-discount">
												    
<!-- 
												     	<form method="get" style="margin-top:3%">
												     														         	<div class="input-group">
													            <input type="hidden" name="active" value="4">
																<input type="number" name="wallet" value="" placeholder="Enter Your Wallet Amount" id="wallet" class="form-control"  max="50">
																<span class="input-group-btn"><input type="submit" value="Apply" id="button-coupon" data-loading-text="Loading..." class="btn btn-primary showLoading"></span>
												         	</div>
												     	</form>
											         	<div class="prm-notes">
												            <div class="notes"> 
												               <textarea class="form-control" name="order_notes" id="order_notes" cols="30" rows="8" placeholder="Order Notes"></textarea> 
												            </div>
											         	</div> -->
											      	</div>
											      	<div class="ttl-check">
											         	<div class="df ttl-price">
												            <p class="ttl-label">Sub-Total :</p>
												            <p class="num-val">
												            	<span id="total_bf_mem"></span>
																<span id="total_bf_mem_one">₹<?php echo $gramdtotal;?></span>
															</p>
											         	</div>
											         	<div class="df ttl-discount">
												            <p class="ttl-label">Coupon Discount :</p>
												            <p class="num-val">₹0.00</p>
											         	</div>
											         												         	<div class="df ttl-wallet">
												            <p class="ttl-label">Wallet Amount :</p>
												            <p class="num-val">₹0.00</p>
											         	</div>
											         	<div class="df ttl-payamt">
												            <p class="ttl-label alt">Payable Amount :</p>
												            <p class="num-val alt redd">₹
												            	<span id="sub_total_one"><?php echo $gramdtotal;?></span>
																<span id="sub_total"></span>
															</p>
											         	</div>
    <div class="df ttl-cta">
			<a href="<?php echo base_url()?>" style="color: #fda300;" class="ttl-continue-btn">Keep Shopping</a>
					<input type="hidden" name="checkstatus" class="checkstatus" value="true">
					<input type="hidden" name="checkstatus2" class="checkstatus2" value="">
					<a href="<?php echo base_url()?>userprofile/checkout" class="btn btn-primary showLoading checkoutform">Checkout
      </a>
		</div>
									      	</div>
											   	</div>
											</div> <!----End cart info-->


																				<!-- // New cart section design & development -->

									</div>
								</div>
							</div>
						</div>
					<!-- //Product Tabs -->
					</div>			
				</div>
			</div>
		</div>
		<!--Content End-->
 
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