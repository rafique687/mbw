<?php include("header.php");?>
   <body class="common-home res layout-home1">
      <div id="wrapper" class="wrapper-full banners-effect-7">
         <input type="hidden" class="customer_id" value="1">

<header id="header" class="variantleft type_1" >
  <?php include("topheader.php");?>
<?php include("header-center.php");?>
<?php include("header-bottom.php");?>
	<!-- Content Starts  -->
	<div class="main-container container">
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-md-12 col-sm-12" style="margin-top:30px;">
				<div class="product-view row">
					<div class="left-content-product col-lg-12 col-xs-12">
						<div class="row">
							<div class="content-product-left class-honizol col-sm-6 col-xs-12 ">
	<div class="large-image "> 
    <?php $pic=explode(",",$itemdetails['item_pic']);?>
		<img id="img-t" class="change" src="<?php echo base_url()?>item/<?php echo $pic[0];?>" data-zoom-image="<?php echo base_url()?>item/<?php echo $pic[0];?>" style="width:100% !important;height:350px;" />
</div>
 <div id="thumb-slider" class="owl-theme owl-loaded owl-drag full_slider cp">
  <?php for($i=0;$i<count($pic); $i++)
        {?>
<a data-index="<?php echo $i;?>" class="img thumbnail " data-image="<?php echo base_url()?>item/<?php echo $pic[$i]?>" data-zoom-image="<?php echo base_url()?>item/<?php echo $pic[$i]?>" style="height:100%;width:100%;">
<img id="img-t" class="pr" src="<?php echo base_url()?>item/<?php echo $pic[$i];?>" style="height: 150px !important; width: 100% !important;"/>
</a> 		
  <?php  } ?>

                            
								</div>
															
							</div>
											      	    <form method="post">
								<div class="content-product-right col-sm-5  product-layout">
								
									<div id="product">	
										<div class="title-product">
										<h1 class="custom-heading-color"><?php echo $itemdetails['item_name'];?></h1>
									</div>								
										<p class="block-ellipsis"><?php //echo $itemdetails['description'];?></p> 
										<div class="product-label form-group">
											<div class="product_page_price price" itemprop="offerDetails" itemscope="">

												<span class="price-new" itemprop="price">₹<?php echo $itemdetails['price'];?></span>
																							</div>
										</div>
										<div>
                      <div class="form-group">
                        <label>Quantity</label>
											<input type="number" class="form-control btn btn-mega" required="" min="1" max="50" value="1" id="qnt<?php echo $itemdetails['item_id']?>" style="width:100px !important; color: #000 !important;">
                       
											<!-- <button type="button" max_purchase="50" sales_rate="220" value="32" item_id="2" customer_id="1" print_rate="220" quantity_variation="150 gm" style="margin-right: 15px;" class="btn onchangeitemvariation item_variation_id quantiy-select-button">150 gm</button>
                      <button type="button" max_purchase="50" sales_rate="350" value="33" item_id="2" customer_id="1" print_rate="350" quantity_variation="250 gm" style="margin-right: 15px;" class="btn onchangeitemvariation item_variation_id quantiy-select-button">250 gm</button> -->										</div>
                    </div>

										<div class="form-group box-info-product">								
		                                    <!-- <div class="div">
		                                    	<select class="no-border changeValue item_variation_id" name="item_variation_id" >
		                                             		                                    	</select>
		                                    </div> -->   
		                                    												<div class="add-to-links wish_comp">
												<ul class="blank list-inline">
													<li class="wishlist">
														<a class="icon wishlist-icon-change" href="javascript:void(0)" data-toggle="modal" data-target="#loginModel" > <i class="fa fa-heart custom-heart"></i>
														</a>
													</li>
												</ul>
											</div>
																						

											<div class="cart">

												<!-- <a href="javascript:void(0);" data-toggle="modal" data-original-title="Add to Cart" class="btn btn-mega btn-lg add-to-cart-button" data-target="#loginModel" style="color: #fff; font-weight:400 !important; font-size: 14px;padding: 9px 30px;"><i class="fa fa-shopping-cart"></i>Add to Cart</a>		 -->
	<?php if(!isset($user['username']))
   {?>
   <a href="javascript:void(0);" data-toggle="modal" data-original-title="Add to Cart" id="AddtoCartt" class="btn btn-mega btn-lg" data-target="#loginModel" style="color: #fff; font-weight:400 !important">Add to Cart</a> 
<?php } ?>
   <?php if(isset($user['username']))
   {?>
   <button type="button" name="addtoCart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg showLoading button-cart" data-original-title="Add to Cart" data-key="<?php echo $itemdetails['item_id']?>">Add to Cart</button>
<?php } ?>									
										</div>


											<div class="input-group AddtoCart addCTA"  style="display:none;" >
														
															  <span class="input-group-btn">
																  <button type="button" class="btn btn-danger btn-number" customer_id="1" item_id='2' item_variation_id="32" data-type="minus" data-field="quant[2]">
																	<span class="glyphicon glyphicon-minus"></span>
																  </button>
															  </span>
															  <input type="text" name="quant[2]" class="form-control input-number" style="height: 35px;margin-top: 7px;" item_id='2' customer_id="1"  value="" item_variation_id="32" min="1" max="50">
															  <span class="input-group-btn">
																  <button type="button" customer_id="1" item_id='2' item_variation_id="32" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
																	  <span class="glyphicon glyphicon-plus"></span>
																  </button>
															  </span>
														</div>
											<!--											<div class="add-to-links wish_comp">
												<ul class="blank list-inline">
													<li class="wishlist">
														<a class="icon" href="javascript:void(0)" data-toggle="modal" data-target="#loginModel"><i class="fa fa-heart"></i> WISHLIST
														</a>
													</li>
												</ul>
											</div>
											-->
											
										</div>

										<div class="resp-added" id="added_to_cart_2" style="display:none">
											<p class="product-page-left-cart"><i class="fas fa-check fa-sm"></i><span> Added to Cart!</span><a href="cart_final.php?active=4"> view cart</a></p>
										</div>


				<div><hr class="hr-new-line top-line-hr" align="left">
					<div class="modcontent social-icon-top-spacing">
                            <div class="ul-wrap-social bottom-no-space">
                              <ul class="ul-b-social">
                              		<!-- <li class="bottom-social">Share On :</li>
                              	<li class="bottom-social">
                                  <a href="http://twitter.com/share?url=https://twitter.com/urhealthymaster" target="_blank" class="twitter tr-icon-color color-change-twitter"><i class="fa fa-twitter"></i></a> </li>
                                  <li class="bottom-social">
                                 <a href="https://www.instagram.com/healthy__master/" target="_blank" class="google insta-color-icon color-change-twitter instagram-hover"><i class="fa fa-instagram"></i></a> </li>

                                <li class="bottom-social">
                                  <a href="http://www.facebook.com/sharer.php?u=https://www.facebook.com/urhealthymaster" target="_blank" class="facebook fb-icon-color color-change-twitter facebook-hover"><i class="fa fa-facebook"></i></a></li>

                                  <li class="bottom-social">
                                   <a href="http://www.linkedin.com/shareArticle?mini=true&url=https://in.linkedin.com/company/healthy-master4u" target="_blank" class="linkedin ld-color-icon color-change-twitter linkedin-hover"><i class="fa fa-linkedin"></i></a></li> -->
                                 
                              </ul>
                              <hr class="hr-new-line top-line-hr" style="margin-top: 8px;" align="left">
                              	<div class="more-reviews">
						            <!-- <span id="review_click" style="font-size: 18px;font-weight: 800;cursor:pointer;">27 Reviews</span> -->
						            <div style="margin-left: 1rem;"><h3>Short Description</h3>
						            <?php echo $itemdetails['shortdescription']?>
						              	<!-- <span class="lash">|</span> -->
						              	<!-- <a id="-review-box" data-toggle="modal" data-target="#myModal" style="margin-left: 1rem;color:black">
						              	<span class="write-a-reviews">Write a Reviews</span>
						              	</a> -->
						            </div>
						        </div>

                            </div>
                          </div>
                          
				</div>
<hr class="hr-new-line top-line-hr" align="left">

						
										<input type="hidden" name="quantity" class="quantityVariation" value="150 gm">
							        	<input type="hidden" name="sales_rate" class="rate" value="220"> 
							      	</div>
							      <input type="hidden" class="item_id" name="item_id" value="2">
							      <input type="hidden" clas="customer_id" name="customer_id" value="1">
									<!-- end box info product -->
								</div>
								
							        
															</form>

						</div>
						<!-- <div class="row">
							<div class="container">
								<div class="row" style="margin-top:40px;">
									<div class="col-md-6">
										<div class="well well-sm">
							            <div class="row" id="post-review-box">
							                <div class="col-md-12">
							        
																							<div><span>Name:</span>PUNITA</div>
												<div><span>Review:</span><p>I follow the KETO diet and was looking for some snacks option that is when I found it. It is amazing</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>Soumya Iyer</div>
												<div><span>Review:</span><p>My favorite from healthy master.</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>Jayalakshmi H</div>
												<div><span>Review:</span><p>Good product</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>Soumya </div>
												<div><span>Review:</span><p>I love this product! Great to snack on while you are watching your calories.</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>shobana</div>
												<div><span>Review:</span><p>Amazing taste and keto tolerant</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>Hari</div>
												<div><span>Review:</span><p>Very tasty and filling</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>Ankit Sisodiya</div>
												<div><span>Review:</span><p>Has a tangy taste and is healthy. In love with this product.</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>Subbu</div>
												<div><span>Review:</span><p>It’s a relief to snack while in keto Will recommend it</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>Rajeshsn</div>
												<div><span>Review:</span><p>This is a great tasting snack for those who prefer gluten-free snacks</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>VINNI BANSAL</div>
												<div><span>Review:</span><p>It is so tasty! Worth buying it. </p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>Dimpal Jain</div>
												<div><span>Review:</span><p>They are awesome and tasty.</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>Tanmay dwivedi</div>
												<div><span>Review:</span><p>Very good in taste.</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>Riya Chohan</div>
												<div><span>Review:</span><p>Quality healthy product. Good taste.</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>Vishal Suthar</div>
												<div><span>Review:</span><p>Nice flavor. Very well packaged. </p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>Tanishq Shrivastav</div>
												<div><span>Review:</span><p>Amazing quality and quantity</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>Riya Agarwal</div>
												<div><span>Review:</span><p>These are really excellent low-carb snacks.</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>Intesham</div>
												<div><span>Review:</span><p>If you are looking for a snack to satisfy your taste buds and keeping your carb intake low, it is th</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>Divya Solanki</div>
												<div><span>Review:</span><p>My kids loved it! They no more ask for outside snacks.</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>Krishna Veer Singh</div>
												<div><span>Review:</span><p>More Tasty and Crunchy! Totally recommended!</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>Rohit</div>
												<div><span>Review:</span><p>Amazing, Never expected healthy can taste so good.</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>Vaibhav Purohit</div>
												<div><span>Review:</span><p>Liked the taste and flavor.  And guess what, after eating one you want to eat more</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>Chandmal Dhakar</div>
												<div><span>Review:</span><p>Fresh snacks, crispy, good one.</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>Rajveer Singh</div>
												<div><span>Review:</span><p>Excellent product! It seems like they have used good quality ingredients.</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>Prince Soni</div>
												<div><span>Review:</span><p>Very healthy and tasty</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>Prashant Sharma</div>
												<div><span>Review:</span><p>One of the best snacks I have ever tasted. I liked the product very much. It is very healthy compare</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>vineet agarwal</div>
												<div><span>Review:</span><p>super healthy and super  tasty</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																							<div><span>Name:</span>Hari</div>
												<div><span>Review:</span><p>One of the best calcium rich snack. Very rare to find the calcium rich food or snack. Glad I found this</p></div>
												<div class="stars starrr" data-rating="5"></div>
											</hr>
																				
										</div>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						-->

						<!-- MODAL START -->





						<!-- MODAL END -->
						<div class="">
							
							<div class="container">
								<div class="row" >
								<!-- 	<div class="col-md-2 center-box" >

							    	<div class=" sm-props btn-props">
																		
									   <a class="btn btn-success btn-green" id="-review-box" data-toggle="modal" data-target="#loginModel">Write a Review</a>
																	</div>
							</div> -->
							        <!-- START -->
							            <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      	<h3 class="text-center" style="margin: 0;">Write a Review</h3>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      </div>
      <div class="modal-body">
            <div class="row" id="post-review-box">

                              <div class="col-md-12">
                                  <form accept-charset="UTF-8" method="post">
                                    <input id="customer_id" type="hidden" clas="customer_id" name="customer_id" value="1">
                
                                    <input id="item_id" type="hidden" class="item_id" name="item_id" value="2">
                              <input id="item_name" type="hidden" class="item_name" name="ititem_nameem_id" value="Makhana Peri Peri">
                              <input id="mobile_nos" type="hidden" class="mobile_nos" name="mobile_nos" value="">
                              <input id="name_of_user" type="hidden" class="name_of_user" name="name_of_user" value="">
                    
                                      <input id="ratings-hidden" name="rating" type="hidden"> 

                                       <div class="stars starrr bg-star"  data-rating="0" style="text-align: center; visibility: visible !important;"></div>
                                          <div id="star_error"></div>
                                     <!--  <input class="form-control animated" type="text" name="name_of_user" id="name_of_user" placeholder="Name Of User">
                                      <div id="name_of_user_error"></div>
                                      <br>
                                      <input onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control animated" type="text" name="mobile_no" id="mobile_no" placeholder="Mobile Number">
                                       <div id="mobile_error"></div>
                                      <br> -->
                                      <textarea class="form-control animated" style="visibility: visible;" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5" style="height: 10em;"></textarea>
                              <div id="review_error"></div>
                                      
                                      <div class="text-center">
                                         
                                      
                                         <!--  <a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="margin-right: 10px;">
                                          <span class="glyphicon glyphicon-remove" data-dismiss="modal"></span>Cancel</a> -->
                                          <button class="btn btn-success btn-lg add_review btn-for-save" type="button">Save</button>
                                      </div>
                                  </form>
                              </div>
         <!--                  </div>
      </div> -->
     <!--  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
							            <!-- END -->
							        </div> 
							         
									</div>

									<div class="tab_description">
									 	<ul id="myTabs" class="nav nav-pills nav-justified custom-css" role="tablist" data-tabs="tabs">
										 										        <li class="active"><a href="#description" data-toggle="tab" class="color-change-tabs">Description</a></li>
									    										        <!-- <li><a href="#benefits" data-toggle="tab" class="color-change-tabs">Benefits</a></li> -->
									        									      <!--   <li><a href="#ingrediente" data-toggle="tab" class="color-change-tabs">Ingredients</a></li>
									        									        <li><a href="#review" id="review_tab_open" data-toggle="tab" class="color-change-tabs">Reviews</a></li>
									        									        <li><a href="#faqs" data-toggle="tab" class="color-change-tabs">FAQ</a></li> -->
									        								      	</ul>
<div class="tab-content" style="padding-bottom:10px;border: 1px solid #e6e6e6;">
<div role="tabpanel" class="tab-pane fade in active" id="description">
		<div>
			<p>
				<p style="text-align:justify"><span style="font-size:11pt">
					<span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">Our <strong><?php echo $itemdetails['item_name'];?></strong><?php echo $itemdetails['description'];?> 
					<a href="#" title="<?php echo $itemdetails['item_name'];?>">
						<strong><?php echo $itemdetails['item_name'];?></strong></a>,
						 <a href="#" title="Buy <?php echo $itemdetails['item_name'];?>">
						 	<strong><?php echo $itemdetails['item_name'];?></strong></a>,
						 	 <a href="#" title="">
						 	 	<strong><?php echo $itemdetails['item_name'];?></strong>
						 	 </a> <?php echo $itemdetails['item_name'];?>.</span></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">><?php echo $itemdetails['description'];?> 
 <a href="#" style="color:blue; text-decoration:underline" title="><?php echo $itemdetails['item_name'];?> "><strong>Buy Best ><?php echo $itemdetails['item_name'];?>  Online</strong></a><strong> </strong>and avail of maximum offers from Mobilebatteryworld.</span></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif"><a href="https://healthymaster.in/category.php?id=45/roasted-makhana-" style="color:blue; text-decoration:underline" title="Order Best Roasted Makhana Online"><strong></strong></a> <a href="#" style="color:blue; text-decoration:underline" title="">
	<strong></strong></a></span></span></span></p>

<p style="text-align:justify">&nbsp;</p>

<table border="0" cellpadding="0" cellspacing="0" style="height:100px; width:300px">
	<tbody>
		<tr>
		<!-- 	<td><img alt="" src="https://healthymaster.in/admins/webroot/uploadImages/images/Images%202/Images4/hand%20picked.jpg" style="height:85px; width:80px" /></td>
			<td><img alt="" src="https://healthymaster.in/admins/webroot/uploadImages/images/Images%202/Images4/ageing.jpg" style="height:85px; width:80px" /></td>
			<td><img alt="" src="https://healthymaster.in/admins/webroot/uploadImages/images/Images%203/aid%20in%20weightloss.jpg" style="height:85px; width:80px" /></td>
			<td><img alt="" src="https://healthymaster.in/admins/webroot/uploadImages/images/Images%202/rich%20in%20vitamin.jpg" style="height:85px; width:80px" /></td> -->
		</tr>
		<tr>
		<!-- 	<td>&nbsp;&nbsp;Hand<br />
			&nbsp; Picked</td>
			<td style="text-align:center">Delay<br />
			Aging</td>
			<td>&nbsp; &nbsp; &nbsp;Weight<br />
			&nbsp; &nbsp; &nbsp; Loss</td>
			<td style="text-align:center">&nbsp;Rich in&nbsp; &nbsp;Vitamin&nbsp;</td>
			<td>&nbsp;</td> -->
		</tr>
	</tbody>
</table>

<p>&nbsp;&nbsp;</p>
</p>
									        	</div>
									        </div>
<!-- <div role="tabpanel" class="tab-pane fade" id="benefits">
									        	<div>
									        		<p><p><span style="font-size:18px"><strong>&nbsp; &nbsp;H<u>ealth Benefits Of Makhana Peri-Per</u>i:</strong></span></p>

<p>&nbsp;</p>

<ul>
	<li><span style="font-size:16px"><strong>Makhanas are rich in calcium, zinc</strong></span></li>
	<li><span style="font-size:16px"><strong>Magnesium and phosphorous. </strong></span></li>
	<li><span style="font-size:16px"><strong>Its high calcium content is good for bone and teeth health. </strong></span></li>
	<li><span style="font-size:16px"><strong>Excellent source of plant protein that builds muscles mass and helps in cells growth. </strong></span></li>
	<li><span style="font-size:16px"><strong>Rich in folate which is a key nutrient for pregnant women and good for people with Diabetes, Arthritis and Blood pressure. </strong></span></li>
	<li><span style="font-size:16px"><strong>Good for weight loss </strong></span></li>
	<li><span style="font-size:16px"><strong>It has anti-ageing and anti-inflammatory properties. </strong></span></li>
	<li><span style="font-size:16px"><strong>Rich in Iron and has low GI Index.</strong></span></li>
</ul>

<table border="0" cellpadding="0" cellspacing="0" style="height:100px; width:100px">
	<tbody>
		<tr>
			<td>
			<table border="0" cellpadding="0" cellspacing="0" style="height:100px; width:300px">
				<tbody>
					<tr>
						<td><img alt="" src="https://healthymaster.in/admins/webroot/uploadImages/images/Images%202/Images4/hand%20picked.jpg" style="height:85px; width:80px" /></td>
						<td><img alt="" src="https://healthymaster.in/admins/webroot/uploadImages/images/Images%202/Images4/ageing.jpg" style="height:85px; width:80px" /></td>
						<td><img alt="" src="https://healthymaster.in/admins/webroot/uploadImages/images/Images%203/aid%20in%20weightloss.jpg" style="height:85px; width:80px" /></td>
						<td><img alt="" src="https://healthymaster.in/admins/webroot/uploadImages/images/Images%202/rich%20in%20vitamin.jpg" style="height:85px; width:80px" /></td>
					</tr>
					<tr>
						<td style="text-align:center">Hand<br />
						Picked</td>
						<td style="text-align:center">Delays<br />
						Aging</td>
						<td style="text-align:center">Weight<br />
						Loss</td>
						<td style="text-align:center">Rich in<br />
						Vitamins</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>
</p>
									        	</div>
									          
									        </div> -->
									<!--        <div role="tabpanel" class="tab-pane fade" id="ingrediente">
									        	<div>
									        		<p><p><span style="font-size:18px"><span style="color:#2c3e50"><u><strong>Ingredients&nbsp;:</strong></u></span></span></p>

<ul>
	<li><a href="https://healthymaster.in/product.php?id=81/makhana-plain" title="Buy plain makhana online"><span style="font-size:16px"><strong>Plain Makhana</strong></span></a></li>
	<li><span style="font-size:16px"><strong>Salt</strong></span></li>
	<li><span style="font-size:16px"><strong>Other spices and&nbsp;</strong></span></li>
	<li><span style="font-size:16px"><strong>Condiments.</strong></span></li>
</ul>

<p>&nbsp;</p>

<p><span style="color:#27ae60"><span style="font-size:18px"><strong>&nbsp; &nbsp; &nbsp; &nbsp;N<u>utritional Values:</u></strong></span><u><span style="font-size:14px"><strong>&nbsp;</strong></span></u><span style="font-size:18px"><strong><u>Per 100g</u></strong></span></span></p>

<table border="1" cellpadding="0" cellspacing="0" style="width:350px">
	<tbody>
		<tr>
			<td style="text-align:center"><span style="font-size:16px"><strong>&nbsp;Energy</strong></span></td>
			<td style="text-align:center"><span style="font-size:16px"><strong>&nbsp;498Kcal&nbsp; &nbsp; &nbsp;&nbsp;</strong></span></td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:16px"><strong>&nbsp;Protein</strong></span></td>
			<td style="text-align:center"><span style="font-size:16px"><strong>&nbsp;7.5g</strong></span></td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:16px"><strong>&nbsp;Carbohydrate&nbsp;</strong></span></td>
			<td style="text-align:center"><span style="font-size:16px"><strong>&nbsp;60g</strong></span></td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:16px"><strong>&nbsp;Sugar&nbsp;</strong></span></td>
			<td style="text-align:center"><span style="font-size:16px"><strong>&nbsp;10.3g</strong></span></td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:16px"><strong>&nbsp;Fat&nbsp;</strong></span></td>
			<td style="text-align:center"><span style="font-size:16px"><strong>&nbsp;25.3g</strong></span></td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:16px"><strong>&nbsp;Saturated&nbsp;Fat&nbsp;</strong></span></td>
			<td style="text-align:center"><span style="font-size:16px"><strong>&nbsp;9.4g</strong></span></td>
		</tr>
		<tr>
			<td style="text-align:center"><span style="font-size:16px"><strong>&nbsp;Trans Fat&nbsp;</strong></span></td>
			<td style="text-align:center"><span style="font-size:16px"><strong>&nbsp;0.00g</strong></span></td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>
</p>
									        	</div>
									          
									        </div> -->

							<!-- 		         <div role="tabpanel" class="tab-pane fade" id="faqs">
								        		<div>
									        		<p><p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif"><strong>1</strong></span><span style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif"><strong>)What is the storage and shelf life of&nbsp;Makhana Peri Peri?</strong></span></span></p>

<p><span style="font-size:14px"><span style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif">It can be stored in an airtight container for up to 3months.&nbsp;</span></span></p>

<p><span style="font-size:14px"><span style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif"><strong>2)What is special about Healthy Master&#39;s Makhana?</strong></span></span></p>

<p><span style="font-size:14px"><span style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif">It is natural without any preservatives.</span></span></p>

<p><span style="font-size:14px"><span style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif"><strong>3)Is it gluten-free?</strong></span></span></p>

<p><span style="font-size:14px"><span style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif">Yes</span></span></p>

<p><span style="font-size:14px"><span style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif"><strong>4)Is it Vegan?</strong></span></span></p>

<p><span style="font-size:14px"><span style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif">Yes</span></span></p>

<p><span style="font-size:14px"><span style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif"><strong>5)Is it Diabetic Friendly?</strong></span></span></p>

<p><span style="font-size:14px"><span style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif">YES, It regulates sugar levels</span></span></p>

<p><span style="font-size:14px"><span style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif"><strong>6)Is it good for weight loss?</strong></span></span></p>

<p><span style="font-size:14px"><span style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif">It is the perfect snack for those who are in a diet and is best for all age groups.</span></span></p>

<p><span style="font-size:14px"><span style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif"><strong>7)Is Makhana Peri-Peri a spicy one?</strong></span></span></p>

<p><span style="font-size:14px"><span style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif">YES, It is hot and spicy</span></span></p>
</p>
									        	</div>
									        </div> -->
									     <!--  <div role="tabpanel" class="tab-pane" id="review">
									       
									          									          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">P</p>
									      
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">PUNITA</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>I follow the KETO diet and was looking for some snacks option that is when I found it. It is amazing									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">S</p>
									         
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">Soumya Iyer</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>My favorite from healthy master.									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">J</p>
									        
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">Jayalakshmi H</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>Good product									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">S</p>
									          
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">Soumya </h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>I love this product! Great to snack on while you are watching your calories.									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">s</p>
									            <!-- <img src="https://healthymaster.in/img/testimonial/Deepshikha.jpg" class="tabs-img mobile-tabs-img"> -->
<!--<div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">shobana</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>Amazing taste and keto tolerant									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">H</p>
									          
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">Hari</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>Very tasty and filling									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">A</p>
									           
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">Ankit Sisodiya</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>Has a tangy taste and is healthy. In love with this product.									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">S</p>
									       
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">Subbu</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>It’s a relief to snack while in keto Will recommend it									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">R</p>
									          
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">Rajeshsn</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>This is a great tasting snack for those who prefer gluten-free snacks									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">V</p>
									          
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">VINNI BANSAL</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>It is so tasty! Worth buying it. 									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">D</p>
									        
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">Dimpal Jain</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>They are awesome and tasty.									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">T</p>
									    
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">Tanmay dwivedi</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>Very good in taste.									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">R</p>
									         
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">Riya Chohan</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>Quality healthy product. Good taste.									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">V</p>
									         
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">Vishal Suthar</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>Nice flavor. Very well packaged. 									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">T</p>
									          
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">Tanishq Shrivastav</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>Amazing quality and quantity									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">R</p>
									       
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">Riya Agarwal</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>These are really excellent low-carb snacks.									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">I</p>
									           
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">Intesham</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>If you are looking for a snack to satisfy your taste buds and keeping your carb intake low, it is th									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">D</p>
									           
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">Divya Solanki</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>My kids loved it! They no more ask for outside snacks.									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">K</p>
									          
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">Krishna Veer Singh</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>More Tasty and Crunchy! Totally recommended!									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">R</p>
									         
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">Rohit</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>Amazing, Never expected healthy can taste so good.									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">V</p>
									           
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">Vaibhav Purohit</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>Liked the taste and flavor.  And guess what, after eating one you want to eat more									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">C</p>
									          
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">Chandmal Dhakar</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>Fresh snacks, crispy, good one.									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">R</p>
									            
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">Rajveer Singh</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>Excellent product! It seems like they have used good quality ingredients.									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">P</p>
									            
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">Prince Soni</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>Very healthy and tasty									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">P</p>
									            
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">Prashant Sharma</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>One of the best snacks I have ever tasted. I liked the product very much. It is very healthy compare									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">v</p>
									           
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">vineet agarwal</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>super healthy and super  tasty									            </p>
									          </div>
									           <hr class="hr-new-line">
									        										          <hr class="hr-new-line">
									          <div class="wrapper-box">
									          	<p class="rating_img">H</p>
									           
									            <div class="img-box no-left">
									              <div class="wrapper-box">
									              										              	<span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span><span class="star"><i class="fa fa-star star-color" aria-hidden="true"></i></span>									                									              </div>
									              <div class="wrapper-box">
									                <h5 class="rahul-sharma">Hari</h5>
									                <h5 class="text-left january"></h5>
									              </div>
									            </div>
									          </div>
									          <div class="review-spacing-p">
									            <p>One of the best calcium rich snack. Very rare to find the calcium rich food or snack. Glad I found this									            </p>
									          </div>
									           <hr class="hr-new-line">
									        	
									          
									          </div>
									         
									        </div>-->
									      </div> 
										
									</div>


								</div>
							</div>
						</div>
					</div>					
				</div>
				
			
				 
				
				<!-- Related Products -->
				<div class="container clearfix" style="margin-bottom: 10px;">
					<div class="module extraslider-home5 titleLine">
					<h3 class="modtitle related-products">Related Products</h3>
					<hr class="our-vision-hr" align="center" style="margin-top: 7px;">
					<div id="so_extraslider_1" >
							<!-- Begin extraslider-inner -->
							<div class="so-extraslider products-list grid product-style__5"  data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="35" data-items_column0="4" data-items_column1="3" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
					 
              <?php foreach($relatedproduct as $related){?>
							<form method="post">
						        <div class="product-layout ltabs-item">
						            <div class="product-item-container product-css product-box-border owl-prod">

						                <div class="left-block redirect showLoading" redirectUrl="?pid=<?php echo $related['item_id']?>">
                              <?php $relatedpic=explode(',',$related['item_pic']);?>
						                    <div class="product-image-container second_img img-bottom-space">
						                      	<a href="?pid=<?php echo $related['item_id']?>" class="showLoading">  
						                        <img data-src="<?php echo base_url()?>item/<?php echo $relatedpic[0]?>"  alt="<?php echo $related['item_name'];?>" class="img-responsive lazy" />
						                        
						                    	</a>
						                    		
						                    </div> 
						                </div>
						                						                <div class="right-block">
						                    <div class="caption">
						                        <h4><a href="?pid=<?php echo $related['item_id']?>" class="showLoading product-heading-color-change"><?php echo $related['item_name']; ?></a></h4>	
						                        <p class="block-ellipsis"><?php echo $related['description']?>.
</p>
						                        <div class="price">
                <span class="price-new product-price pull-left" style="color:#000"><del style="color:red">MRP. ₹ <?php echo  $related['mrp']?>
                	
                </span> 
                <span class="price-new product-price pull-right" style="color: #000;">OUR PRICE₹ <?php echo  $related['price']?>
                	
                </span> 

						                            						                        </div>
												<div class="variation" style="margin-top: 10px;">
							              <div class="div">
							                <select class="no-border changeValue new-color-border" name="item_variation_id" >
							                 <option selected max_purchase="5" value="1" sales_rate="<?php echo $related['price']?>" print_rate="<?php echo $related['price'];?>" quantity_variation="1">1 Piece</option>
                                <option  max_purchase="5" value="2" sales_rate="" print_rate="<?php echo $related['price']?>" quantity_variation="250 gm">2 Piece</option>	
                                <option  max_purchase="5" value="3" sales_rate="<?php echo $related['price']?>" print_rate="<?php echo $related['price']?>" quantity_variation="250 gm">3 Piece</option>
                                <option  max_purchase="5" value="4" sales_rate="<?php echo $related['price']?>" print_rate="<?php echo $related['price']?>" quantity_variation="250 gm">4 Piece</option>
                                <option  max_purchase="5" value="5" sales_rate="<?php echo $related['price']?>" print_rate="<?php echo $related['price']?>" quantity_variation="250 gm">5 Piece</option>						
                              </select>
							              </div>                                        
						                				<div class="cart">
						                          <a href="javascript:void(0);" data-toggle="modal" data-original-title="Add to Cart" class="btn btn-mega btn-lg add-to-cart-button" data-target="#loginModel" style="color: #fff; font-weight:400 !important">Add to Cart</a> 
						                				</div>

														<div class="input-group AddtoCart"  style="display:none;" >
														
															  <span class="input-group-btn">
																  <button type="button" class="btn btn-danger btn-number" customer_id="1" item_id='2' item_variation_id="32" data-type="minus" data-field="quant[2]">
																	<span class="glyphicon glyphicon-minus"></span>
																  </button>
															  </span>
															  <input type="text" name="quant[2]" class="form-control input-number" style="height: 35px;margin-top: 7px;" item_id='2' customer_id="1"  value="" item_variation_id="32" min="1" max="50">
															  <span class="input-group-btn">
																  <button type="button" customer_id="1" item_id='2' item_variation_id="32" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
																	  <span class="glyphicon glyphicon-plus"></span>
																  </button>

															  </span>

                                 <span class="input-group-btn">
                                  <button type="button" customer_id="1" item_id='2' item_variation_id="34" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
                                    <span class="glyphicon glyphicon-plus"></span>
                                  </button>
                                   
                                </span>
														</div>
						                			</div>
						                        <div class="description item-desc hidden" >
						                            <p><p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">Our <strong>makhana peri peri</strong> or roasted makhana is a perfect way to use it as a snack, renched in a spicy peri peri seasoning with a crunchy texture. Makhana / Fox Nut/Lotus Seeds are nutritional foods that are enriched with nature&rsquo;s goodness that ensure adequate nutrient intake. These Fox Nuts are <a href="https://healthymaster.in/category.php?id=27/gluten-free" title="Buy Gluten free product online"><strong>Gluten Free</strong></a>, <a href="https://healthymaster.in/category.php?id=26/keto-diet" title="Buy keto friendly online"><strong>Keto Friendly</strong></a>, <a href="https://healthymaster.in/category.php?id=17/diabetes" title="Buy Diabetic Friendly"><strong>Diabetic Friendly</strong></a> with a hint of salt, is your best snack partner.</span></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">Experience the delicious taste of makhana. It&#39;s a light, flavor-dense snack that adds great crunch and texture to any time of day. Properly harvested, makhana is completely free of pollutants. It is naturally sweet, with low glycemic index and caloric values, making it ideal in a variety of recipes as a substitute for nuts or as a topping on desserts. This wholesome and healthy snack contains magnesium, iron, phosphorus, carbohydrates,&nbsp; protein, potassium, fiber, and zinc. <a href="https://healthymaster.in/category.php?id=45/roasted-makhana-" style="color:blue; text-decoration:underline" title="Buy Best Roasted Makhana Online"><strong>Buy Best Roasted Makhana Online</strong></a><strong> </strong>and avail of maximum offers from Healthy Master.</span></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif"><a href="https://healthymaster.in/category.php?id=45/roasted-makhana-" style="color:blue; text-decoration:underline" title="Order Best Roasted Makhana Online"><strong>Order Best Roasted Makhana Online</strong></a> from Healthy Master. There are many health benefits of eating makhana that kept this delicacy being a part of the traditional diet. This tiny, mild-tasting nut (or seed) has a strange resemblance to the brain of the human. High in heart-healthy Omega-3s, this makes a great addition to your plate or your supplements. It also includes three types of protein and a bundle of vitamins. Get <a href="https://healthymaster.in/category.php?id=45/roasted-makhana-" style="color:blue; text-decoration:underline" title="Roasted Makhana at the Best Price in India"><strong>Roasted Makhana at the Best Price in India</strong></a> and enrich healthy nutritional values.</span></span></span></p>

<p style="text-align:justify">&nbsp;</p>

<table border="0" cellpadding="0" cellspacing="0" style="height:100px; width:300px">
	<tbody>
		<tr>
			<td><img alt="" src="https://healthymaster.in/admins/webroot/uploadImages/images/Images%202/Images4/hand%20picked.jpg" style="height:85px; width:80px" /></td>
			<td><img alt="" src="https://healthymaster.in/admins/webroot/uploadImages/images/Images%202/Images4/ageing.jpg" style="height:85px; width:80px" /></td>
			<td><img alt="" src="https://healthymaster.in/admins/webroot/uploadImages/images/Images%203/aid%20in%20weightloss.jpg" style="height:85px; width:80px" /></td>
			<td><img alt="" src="https://healthymaster.in/admins/webroot/uploadImages/images/Images%202/rich%20in%20vitamin.jpg" style="height:85px; width:80px" /></td>
		</tr>
		<tr>
			<td>&nbsp;&nbsp;Hand<br />
			&nbsp; Picked</td>
			<td style="text-align:center">Delay<br />
			Aging</td>
			<td>&nbsp; &nbsp; &nbsp;Weight<br />
			&nbsp; &nbsp; &nbsp; Loss</td>
			<td style="text-align:center">&nbsp;Rich in&nbsp; &nbsp;Vitamin&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;&nbsp;</p>
</p>
						                        </div>
						                    </div>
						                </div>  
						                <div class="resp-added" id="added_to_cart_2"  style="display:none;" >
								          	<p><i class="fas fa-check fa-sm"></i><span> Added to Cart!</span> <a href="cart_final.php?active=4"> view cart</a></p>
							          	</div> 
						            </div>
						            
						            
									<!--  -->
							      <input type="hidden" name="quantity" class="quantityVariation" value="150 gm">
						          <input type="hidden" name="sales_rate" class="rate" value="220"> 
						        </div>
						        <input type="hidden" name="item_id" value="2">
						        <input type="hidden" name="customer_id" value="1">
						        <input type="hidden" name="mobile_no" value="">
						    </form>
              <?php } ?>
	 						 
	 						 
	 											</div>
				</div>
				</div>
			</div>

				<!-- end Related  Products-->
			</div>			
			<!--Middle Part End-->
		</div>
	</div>
	<!-- Content End --> 
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