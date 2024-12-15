<?php include("header.php");?>
   <body class="common-home res layout-home1">
      <div id="wrapper" class="wrapper-full banners-effect-7">
         <input type="hidden" class="customer_id" value="1">

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

	                                    <li><a href="<?php echo base_url()?>">Home</a></li>

	                                      <li><a href="#">My Account</a></li>
	                                 

	                                </ul> 
	         </div>
					<!-- Product Tabs -->
					<div class="producttab ">
						<?php if($this->session->flashdata('success'))
						{?>
								<div class="alert alert-success" role="alert">
  								<?php echo $this->session->flashdata('success');?>
							    </div>
						<?php }
						if($this->session->flashdata('error')) { ?>
								<div class="alert alert-danger" role="alert">
  										<?php echo $this->session->flashdata('error');?>
								</div>
						<?php } ?>
						<div class="tabsslider  vertical-tabs col-xs-12">
							<ul class="nav nav-tabs col-lg-2 col-sm-3">
										<!-- <li class=""><a data-toggle="tab" href="#tab4">My WishList</a></li> -->
										<li class=""><a data-toggle="tab" href="#tab1">Orders</a></li>
										<li class=""><a data-toggle="tab" href="#tab2">Addresses</a></li> 
								<li class="active"><a data-toggle="tab" href="#tab3">Account Details</a></li>
									<!-- <li class=""><a data-toggle="tab" href="#tab6">My Membership</a></li> -->
									<li class="hidden-lg"> <a href="https://healthymaster.in/logout.php">Logout</a></li>
								<!-- <li class=""><a data-toggle="tab" href="#tab5">Cart</a></li> -->
							
 							</ul>
							<div class="tab-content col-lg-10 col-sm-9 col-xs-12">

								<div id="tab1" class="tab-pane fade  ">
									<div class="page-fullWidthComponent">
										<!-- <legend>Orders</legend> -->

																				<div class="order-details-card">
											<div class="oid-n-date">
												<div class="o-date">
													<span> <i class="far fa-clock"></i> </span>All Order List : <span></span>
												</div>
												<form method="post">
													<div class="odr-control m-hide">
														<!-- <a href="#" class="cancel"><i class="fas fa-plus"></i> as Order</a> -->
														
														<input type="hidden" name="order_id" value="12528" >
															
															<!-- <a href="javascript:void(0);" id="showalert" data-toggle="modal" data-target="#loginModel12528" style="" class="cancel"><i class="fas fa-plus"></i> Cancel Order</a> -->
															
															
																											</div>
													<div class="modal hide_del_pop" id="loginModel12528">
														<div class="modal-dialog">
														  <div class="modal-content">
															<!-- Modal Header -->
															<div class="modal-header">
															  <h4 class="modal-title ioos" style="">Are you sure, you want to cancel order ? </h4>
															 <a href="" class="close" data-dismiss="modal">&times;</a>
															</div>
															<div class="modal-body">
															<button type="submit" name="cancel" class="btn btn-danger submit_pop" title="" data-toggle="tooltip"  data-original-title="Cancel">Submit</button>
															</div>
														  </div>
														</div>
													</div>
												</form>
											</div>
											
											<div class="line-wrap">
												<div class="order-details-inner">
													<table class="table">
											  <thead>
											    <tr>
											      <th scope="col">Order ID</th>
											      <th scope="col">Total Amount</th>
											      <th scope="col">Status</th>
											      <th scope="col">View Order</th>
											    </tr>
											  </thead>
											  <tbody>
											  	<?php foreach($order as $ord)
											  	{?>
											    <tr>
											      <th scope="row"><?php echo  $ord['orderid']?></th>
											      <td><?php echo $ord['total_price']?></td>
											      <td><?php if($ord['delevery_status']==0)
											      		{ echo "Received";}
                             							else
                             								{ echo $ord['status'];}
                             						?>
                             							
                             						</td>
											      <td>
				<a href="<?php echo base_url();?>home/order_detaills?orderid=<?php echo $ord['orderid'];?>" style="color:#000;">Details</a></td>
											    </tr>
											    <?php } ?>
											  </tbody>
											</table>
													
												</div>
											</div>
											<!-- <div class="odr-control l-hide"> -->
												<!-- <a href="#" class="cancel"><i class="fas fa-plus"></i> Cancel Order</a> -->
												<form method="post">
													<div class="odr-control l-hide">
														<!-- <a href="#" class="cancel"><i class="fas fa-plus"></i> as Order</a> -->
														
														<input type="hidden" name="order_id" value="12528" >
															
															<a href="javascript:void(0);" id="showalert" data-toggle="modal" data-target="#loginModel12528" style="" class="cancel"><i class="fas fa-plus"></i> Cancel Order</a>
															
																											</div>
												</form>
											<!-- </div>	 -->
										</div>
									
									
								</div>
								</div>
								
								<div id="tab2" class="tab-pane fade ">
									<div class="page-fullWidthComponent">
										<div class="address-div">
										
											<div class="addAddressBar-card">
												<a href="<?php echo base_url()?>userprofile/address">Add New </a>
											</div>
										</div>
										<div class="address-wrap">
												
											<div class="address-card">
												<div class="default-add">Address 	<a href="address.php?id=5825" style="font-weight:400 !important; color:#fff;" class="button_grey showLoading filter_reset"> <i class="fas fa-edit"></i></a> </div>
												<div class="add-box">
													<div class="add-accordian">
														<div class="add-content">
															<?php echo $user['username'];?>
															
														</div>
															<div>
																Home Address
														   </div>
															<div>
																	<?php if($address['address']){ echo $address['address'];}?>
														   </div>
															<div class="addressAccordian-addressDetails">
																 <div>E-mail:<?php echo $user['email']?></div>
															<div class="addressAccordian-mobile">Mobile:<?php echo $userr['mobile']?></div>
														</div>
													</div>

													 
													<div class="addressAccordian-buttons">
														<form method="post">

															<input type="hidden" name="customer_address_id" value="5825"></td>
															<div class="addressAccordian-button"> 
																<button type="submit" name="deleteAddress" style="font-weight:400 !important; color:#fff;" class="button_grey showLoading"> <i class="fas fa-trash"></i> </button>
															</div>

														</form>
													</div>

												</div> 
											</div> 
																					</div>
									</div>
								</div> 
								
								<div id="tab4" class="tab-pane fade ">
									<div class="page-fullWidthComponent">
											<!-- <legend>Wish List</legend> -->

										<div class="table-responsive">
											<table class="table table-bordered table-hover">
												<thead>
													<tr>
														<td class="text-center">Image</td>
														<td class="text-center">Product Name</td> 
														
														<td class="text-center">Quantity</td>
														<td class="text-center">Price</td>
														<td class="text-center">Action</td>
													</tr>
												</thead>
												<tbody>
													<tr><td class ="text-center" colspan="10">No item found.</td></tr>
															<tr><td class ="text-center" colspan="10"><div class="pull-left">
												<a href="index.php" class="btn btn-primary showLoading" style="padding:10px;">Continue Shopping</a>
											</div></td></tr>
															  
												</tbody>
											</table>  
										</div> 
									</div>
								</div>
								
								<!-- MY CART CODE REMOVED -->
								<!-- add to line 726 -->

<div id="tab5" class="tab-pane fade ">
								
									<div class="page-fullWidthComponent">
											<!-- <legend>Cart</legend> -->

											<div class="cart-infor-wrap">
												<div class="cart-w-prodt">
													<table class="table text-center cart-items-table">
														<thead class="d-none">
															<th class="text-left">Product Name</th>
															<th>Price</th>
															<th>Quantity</th>
															<th>Subtotal</th>
															<th>Remove</th>
														</thead>

														<tbody>
												
															<tr>

																<td class="text-left "> <div class="img-n-name"><img src="https://dswexrz9xr8ac.cloudfront.net/item_images/166/5f17fbf424919.jpg" alt="" width="60px"> <a href="#"><p> Mixed Dried Berries (250 gm)</p></a></div>

																	<div class="d-lg-none mob-only">
																		<p class="price">₹210.00</p>
																		<div class="incre-decre mob">
																			
																			<button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger removeQty"><i class="fa fa-minus"></i></button>
																			<div class="incre-inputs">
																				<div class=""><input type="hidden" class="item_id" value="24"></div>
							                    			<div>
							                    				<input readonly type="text" name="quantity" value="1" class="form-control newQuantity nQuantity1" />
							                    				<input readonly type="hidden" name="quantity" id="newQuantity_24" value="1" class="form-control newQuantity nQuantity2" />
							                    			</div>
							                    		<input type="hidden" class="item_variation_id" value="46">
																			</div>
																			<button id="add_qty_btn_24"  type="button" data-toggle="tooltip" title="Add" class="btn btn-primary addQty  " ><i class="fa fa-plus"></i></button>

																</div>
																<p class="sb-total">₹210.00</p>
																	</div>

																</td>
																<td class="d-none"><p class="price">₹210.00</p></td>
																<td class="d-none">
																<div class="incre-decre">
																			
																			<button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger removeQty"><i class="fa fa-minus"></i></button>
																			<div class="incre-inputs">
																				<div class=""><input type="hidden" class="item_id" value="24"></div>
							                    			<div>
							                    				<input readonly type="text" name="quantity" value="1" class="form-control newQuantity nQuantity1" />
							                    				<input readonly type="hidden" name="quantity" id="newQuantity_24" value="1" class="form-control newQuantity nQuantity2" />
							                    			</div>
							                    		<input type="hidden" class="item_variation_id" value="46">
																			</div>
																			<button id="add_qty_btn_24"  type="button" data-toggle="tooltip" title="Add" class="btn btn-primary addQty  " ><i class="fa fa-plus"></i></button>

																</div>
															</td>
															<td class="d-none"><p class="sb-total">₹210.00</p></td>
															<td class="d-none">
																<div class="btn-cart-rem">
																<img src="./css/images/cart-delete.svg" alt="" width="30px" />
															</div>
														</td>
															</tr>

															<tr>
													
																<td class="text-left "> <div class="img-n-name"><img src="https://dswexrz9xr8ac.cloudfront.net/item_images/166/5f17fbf424919.jpg" alt="" width="60px"> <a href="#"><p> Mixed Dried Berries (250 gm)</p></a></div>

																	<div class="d-lg-none mob-only">
																		<p class="price">₹210.00</p>
																		<div class="incre-decre mob">
																			
																			<button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger removeQty"><i class="fa fa-minus"></i></button>
																			<div class="incre-inputs">
																				<div class=""><input type="hidden" class="item_id" value="24"></div>
							                    			<div>
							                    				<input readonly type="text" name="quantity" value="1" class="form-control newQuantity nQuantity1" />
							                    				<input readonly type="hidden" name="quantity" id="newQuantity_24" value="1" class="form-control newQuantity nQuantity2" />
							                    			</div>
							                    		<input type="hidden" class="item_variation_id" value="46">
																			</div>
																			<button id="add_qty_btn_24"  type="button" data-toggle="tooltip" title="Add" class="btn btn-primary addQty  " ><i class="fa fa-plus"></i></button>

																</div>
																<p class="sb-total">₹210.00</p>
																	</div>

																</td>
																<td class="d-none"><p class="price">₹210.00</p></td>
																<td class="d-none">
																<div class="incre-decre">
																			
																			<button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger removeQty"><i class="fa fa-minus"></i></button>
																			<div class="incre-inputs">
																				<div class=""><input type="hidden" class="item_id" value="24"></div>
							                    			<div>
							                    				<input readonly type="text" name="quantity" value="1" class="form-control newQuantity nQuantity1" />
							                    				<input readonly type="hidden" name="quantity" id="newQuantity_24" value="1" class="form-control newQuantity nQuantity2" />
							                    			</div>
							                    		<input type="hidden" class="item_variation_id" value="46">
																			</div>
																			<button id="add_qty_btn_24"  type="button" data-toggle="tooltip" title="Add" class="btn btn-primary addQty  " ><i class="fa fa-plus"></i></button>

																</div>
															</td>
															<td class="d-none"><p class="sb-total">₹210.00</p></td>
															<td class="d-none">
																<div class="btn-cart-rem">
																<img src="./css/images/cart-delete.svg" alt="" width="30px" />
															</div>
														</td>
															</tr>

															<tr>
													
																<td class="text-left "> <div class="img-n-name"><img src="https://dswexrz9xr8ac.cloudfront.net/item_images/166/5f17fbf424919.jpg" alt="" width="60px"> <a href="#"><p> Mixed Dried Berries (250 gm)</p></a></div>

																	<div class="d-lg-none mob-only">
																		<p class="price">₹210.00</p>
																		<div class="incre-decre mob">
																			
																			<button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger removeQty"><i class="fa fa-minus"></i></button>
																			<div class="incre-inputs">
																				<div class=""><input type="hidden" class="item_id" value="24"></div>
							                    			<div>
							                    				<input readonly type="text" name="quantity" value="1" class="form-control newQuantity nQuantity1" />
							                    				<input readonly type="hidden" name="quantity" id="newQuantity_24" value="1" class="form-control newQuantity nQuantity2" />
							                    			</div>
							                    		<input type="hidden" class="item_variation_id" value="46">
																			</div>
																			<button id="add_qty_btn_24"  type="button" data-toggle="tooltip" title="Add" class="btn btn-primary addQty  " ><i class="fa fa-plus"></i></button>

																</div>
																<p class="sb-total">₹210.00</p>
																	</div>

																</td>
																<td class="d-none"><p class="price">₹210.00</p></td>
																<td class="d-none">
																<div class="incre-decre">
																			
																			<button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger removeQty"><i class="fa fa-minus"></i></button>
																			<div class="incre-inputs">
																				<div class=""><input type="hidden" class="item_id" value="24"></div>
							                    			<div>
							                    				<input readonly type="text" name="quantity" value="1" class="form-control newQuantity nQuantity1" />
							                    				<input readonly type="hidden" name="quantity" id="newQuantity_24" value="1" class="form-control newQuantity nQuantity2" />
							                    			</div>
							                    		<input type="hidden" class="item_variation_id" value="46">
																			</div>
																			<button id="add_qty_btn_24"  type="button" data-toggle="tooltip" title="Add" class="btn btn-primary addQty  " ><i class="fa fa-plus"></i></button>

																</div>
															</td>
															<td class="d-none"><p class="sb-total">₹210.00</p></td>
															<td class="d-none">
																<div class="btn-cart-rem">
																<img src="./css/images/cart-delete.svg" alt="" width="30px" />
															</div>
														</td>
															</tr>
												
														</tbody>
													</table>
												</div>

												<div class="prm-n-check">
													<div class="prm-discount">
															<div class="input-group">
																				    <input type="hidden" name="active" value="4">
																					<input type="text" name="code" value="" placeholder="Enter Promo Code" id="input-coupon" class="form-control">
																					<span class="input-group-btn"><input type="submit" value="Apply Now" id="button-coupon" data-loading-text="Loading..." class="btn btn-primary showLoading"></span>
																				</div>
													
													<div class="prm-notes">
														<div class="notes"> 
														<textarea class="form-control" name="" id="" cols="30" rows="8" placeholder="Order Notes"></textarea> 
													</div>
													</div>
													 </div>
													<div class="ttl-check">
																<div class="df ttl-price"><p class="ttl-label">Total Price :</p> <p class="num-val">₹1260.00</p></div>
																<div class="df ttl-discount"><p class="ttl-label">Discount :</p> <p class="num-val">₹60.00</p></div>
																<div class="df ttl-wallet"><p class="ttl-label">Wallet Amount :</p> <p class="num-val">₹200.00</p></div>
																<div class="df ttl-payamt"><p class="ttl-label alt">Payable Amount :</p> <p class="num-val alt redd">₹1000.00</p></div>
																<div class="df ttl-cta">
																	<button class="ttl-continue-btn">Keep Shopping</button>
																	<button class="ttl-checkout">Checkout</button>
																</div>

													</div>
												</div>


											</div>

										
							          			
							            <div class="table-responsive form-group">
							              <table class="table table-bordered" id="myCartTable">
							                <thead>
							                  <tr>
							                    <td class="text-center" width="10%">Image</td>
							                    <td class="text-left" width="50%">Product Name</td> 
							                    <td class="text-left" width="18%">Quantity</td>
							                    <td class="text-right"width="10%">Rate</td> 
							                    <td class="text-right" width="15%">Total</td> 
							                  </tr>
							                </thead>
							               <tbody>
						                								                  <tr class="itemclass" id="itemRow_24">
							                    <td class="text-center"><a href="product.php?id=24/makhana-cream-and-onion"><img width="70px" src="https://dswexrz9xr8ac.cloudfront.net/item_images/24/5f180964ea87a.jpg" alt="Makhana Cream and Onion" title="Makhana Cream and Onion" class="img-thumbnail" /></a></td>
							                    <td class="text-left" style="padding-top: 20px;"><a href="product.php?id=24/makhana-cream-and-onion">Makhana Cream and Onion(150 gm)<br/>
							                    	<span style="color:red;" class="itemStcResult">							                    		
							                    	</span>
							                    	<span style="color:red;" id="itemStockResult24"></span></a><br />
							                     </td> 
							                    <td class="text-left" width="200px">
												<div class="input-group btn-block quantity">
							                    	<table width="100%">
							                    		<tr>
							                    			<td width="10%"><button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger removeQty"><i class="fa fa-minus"></i></button></td>
							                    			<td><input type="hidden" class="item_id" value="24"></td>
							                    			<td  width="50%" align="center">
							                    				<input readonly type="text" name="quantity" value="1" class="form-control newQuantity nQuantity1" />
							                    				<input readonly type="hidden" name="quantity" id="newQuantity_24" value="1" class="form-control newQuantity nQuantity2" />
							                    			</td>
							                    			<td><input type="hidden" class="item_variation_id" value="46"></td>
															<td  width="10%">
																<button id="add_qty_btn_24"  type="button" data-toggle="tooltip" title="Add" class="btn btn-primary addQty  " ><i class="fa fa-plus"></i></button>
															</td>
														</tr>
							                    	</table>
												 </div>
							                    </td> 
							                    <td class="text-right" style="padding-top: 21px;">220</td>
							                    <td class="text-right" style="padding-top: 21px;">
							                    	<span class="total_sale_price_one">220							                    	</span>
							                    	<span class="totalPrice" id="total_sale_price_24"></span>
							                    </td>
							                  </tr>
							                 							                <tfoot> 
							                <tr>
							                								                	<td rowspan="4" colspan="2" style="text-align: left; ">
														<div class="row">
															<div class="panel-group col-lg-12" id="accordion">
																<div class="panel panel-default">
																	<div class="panel-heading">
																		<h4 class="panel-title">
																			<a class="accordion-toggle"  data-parent="#accordion" aria-expanded="true">Use Coupon Code
																			</a>
																		</h4>
																	</div>
																	<div id="collapse-coupon" class="panel-collapse collapse in" aria-expanded="true">
																		<form method="get">
																			<div class="panel-body">
																				<div class="input-group">
																				    <input type="hidden" name="active" value="4">
																					<input type="text" name="code" value="" placeholder="Enter Your Coupon Code" id="input-coupon" class="form-control">
																					<span class="input-group-btn"><input type="submit" value="Apply" id="button-coupon" data-loading-text="Loading..." class="btn btn-primary showLoading"></span>
																				</div>
																			</div>
																		</form>
																	</div>
																	<div class="panel-heading">
																																		</div>
																</div>
															</div>
														 														</div>
								                	</td>
								                	<td colspan="2" class="text-right">
														<strong>Sub-Total:</strong>
													</td>
													<td class="text-right">
														<span id="total_bf_mem"></span>
														<span id="total_bf_mem_one">220</span>
													</td>
								              </tr>
								                	
								                <tr>
													<td colspan="2" class="text-right">
														<strong>Coupon Discount:</strong>
													</td>
													<td class="text-right">0</td>
												</tr>
																								<!--<tr>
													<td colspan="2" class="text-right">
														<strong>Delivery Charges:</strong>
													</td>
													<td class="text-right">50</td>
												</tr>-->
												
												<tr>
													<td colspan="2" class="text-right">
														<strong>Wallet Amount:</strong>
													</td>
													<td class="text-right"></td>
												</tr> 
												<tr>
													<td colspan="2" class="text-right">
														<strong>Total:</strong>
													</td>
													<td class="text-right">
														<span id="sub_total_one">220</span>
														<span id="sub_total"></span>
													</td>
												</tr> 
											
												<!--<tr>
													<td colspan="4" class="text-right">
														<strong>Total:</strong>
													</td>
													<td class="text-right">270</td>
												</tr>-->
							                </tfoot>

							                </tbody>
							              </table>
							            	
								        
								 	
											<div class="pull-left">
												<a href="index.php" class="btn btn-primary showLoading">Continue Shopping</a>
											</div>
										 	<div class="buttons">			            	
								            	<div class="pull-right">
								            																													<input type="hidden" name="checkstatus" class="checkstatus" value="true">
														<input type="hidden" name="checkstatus2" class="checkstatus2" value="">
														<a href="checkout.php?pincode=342001&id=5825&mob=9001979342&code=&wallet=&cus_name=rafique" redirecturl="checkout.php?pincode=342001&id=5825&mob=9001979342&code=&wallet=&cus_name=rafique" class="btn btn-primary showLoading checkoutform">Checkout</a>
																										
													
								            	</div>
								          	</div>
								       
								         <br>	
										
									
								</div> 
								  
							</div>
						</div>
						
						<div id="tab3" class="tab-pane fade active in">
									<div class="page-fullWidthComponent">
										<form method="post" enctype="multipart/form-data" class="form-horizontal account-register clearfix">
											<div class="inner-part">
												<fieldset>
													<!-- <legend>Account Details</legend> -->
													<div class="form-group required">
														<label class="col-sm-2 control-label" for="input-address-1">Name</label>
														<div class="col-sm-4">
															<input type="text" name="name" value="<?php echo $user['username']?>" required placeholder="Name" class="form-control">
														</div>

														<label class="col-sm-2 control-label" for="input-telephone">Mobile Number</label>
														<div class="col-sm-4">
															<input type="text" name="mobile" readonly oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" minlength="10" value="<?php echo $userr['mobile']?>" required placeholder="Mobile No." class="form-control">
															
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-2 control-label" for="input-telephone">E-mail</label>
														<div class="col-sm-4">
															<input type="email" name="email" value="<?php echo $userr['email']?>"  placeholder="Email Address" class="form-control">
															<input type="hidden" name="customer_id" value="6705" required>
														</div>
													</div>
													<div class="">
														<button type="submit" name="updateprofile" class="btn btn-primary btn-sb">Submit</button>
													</div>
												</fieldset> 
											</div>
										</form>
									</div>
								</div> 
                               <div id="tab6" class="tab-pane fade ">
									<div class="page-fullWidthComponent">
										<!-- <legend>My Memberships</legend> -->
						<div id="content" class="col-md-12 col-sm-12" style="margin-top:30px;">
								<div>
									<div class="table-responsive">
										<table class="table table-bordered table-hover">
											<thead>
												<tr> 
													<td class="text-center">S. No.</td> 
													<td class="text-center">Memberships No.</td> 
													<td class="text-center">Memberships Date</td>
												<!--<td class="text-center">Delivery Date</td>-->
													<td class="text-center">Memberships Status</td>
													<td class="text-center">Amount</td>
													<td class="text-center">Expire Date</td>
													<!--<td class="text-center">Action</td>-->
												</tr>
											</thead>
											<tbody>
																						</tbody>
										</table>
									</div>
								</div>
								
				</div>
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