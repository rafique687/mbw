
	<!-- Header Bottom -->
	<!-- <div class="header-bottom" style="background-color:#1423dd;"> -->
		<div class="header-bottom" style="background-color:#fff;">
		<div class="container">
			<div class="header-bottom__content">
				<div class="row">				
					
					<!-- Main menu -->
					<div class="megamenu-hori col-md-12 col-sm-12 col-xs-12 ">
						<div class="responsive so-megamenu ">
							<nav class="navbar-default">
								<div class=" container-megamenu  horizontal">
		 							<div class="navbar-header">
										<button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle"  style="float: right;">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
												
									</div>

									<div id="sosearchpro" class="col-md-7 col-sm-6 col-xs-8 search-pro visible-xs">
					<form method="get" action="searchResult.php">
						<div id="search0" class="search input-group">
							<input class="autosearch-input form-control autocompleted selectedAutoCompleted" type="text" value="" size="50" autocomplete="off" placeholder="Enter keywords to search..." name="search">
							<div class="suggesstion-box" style="margin-top: 42px;"></div>
							<input type="hidden" name="itemsearch" id="itemsearch" value="">
							<span class="input-group-btn">
							<button type="submit" class="button-search btn btn-primary searchsubmit"><i class="fa fa-search"></i></button>
							</span>
						</div> 
					</form>
				</div>

									<div class="navbar-header" style="display:none;">
										<button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle "  style="float: left;"> <i class="fa fa-user"></i> </button>
									</div>
									<div class="vertical-wrapper" style="display: none;">
										<span id="remove-verticalmenu" class="fa fa-minus-square"></span>
										<div class="megamenu-pattern">
											<div class="container">
												<div class="col-sm-4">
													<div class="row">
														<div class="col-md-12 static-menu">
															<div class="menu">
																<ul>
																	<li>
																		<h3>Welcome User</h3>
																		<ul>
																			<li>
																				<a href="contact.php">Contact Us</a></li><li><a href="javascript:void(0);" data-toggle="modal" data-target="#loginModel" class="mobile_login">Login</a></li>			
																			</ul>
																		</li>					
																   </ul>
															</div>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div> 			
									
									<div class="megamenu-wrapper">
										<span id="remove-megamenu" class="fa fa-times"></span>
										<div class="megamenu-pattern">
											<div class="container">
												<ul class="megamenu header-mega" data-transition="slide" data-animationtime="250">
												<li class="">
												<p class="close-menu"></p>
													<a href="<?php echo base_url()?>" title="Home" class="menuu active">
														<strong>Home</strong>
													</a>
												</li>
												<li class="">
													<p class="close-menu"></p>
													<a href="<?php echo site_url('About')?>" title="About Us" class="menuu">
														<strong>About Us</strong>
													</a>
												</li>


<!--************* START************************************************************************* -->
			
			<li class="dropdown dropdown-large ">
				
									 <!-- data-toggle="dropdown" -->
            <a href="<?php echo base_url('product/offer');?>" class="dropdown-toggle">   
            	<strong> Brand Offerings</strong></a>
            	<ul class="dropdown-menu dropdown-menu-large row">
            		
                	<li>
                		<ul>
                		<?php $k=0;
                		foreach($brand as $brands)
                		{ if($k%7==0) echo "</br>";?>
	           			<li style="float: left; border: margin-left: 5px; width:200px;">
	           		  <a href="<?php echo site_url('product/products?id='.$brands['prod_id'])?>"><?php echo $brands['sucate']?>
	           		  </a>
            			</li>
            	  <?php $k++; } ?>
            	</ul>

	                </li>




				


	           

                 <!--   <li class="coll">
                        <ul>
                            <li><img style="width: 18em;height: 14em;" class="img-responsive" src="<?php echo base_url()?>img/aboutpic.png"/></li>
                        </ul>
                    </li> -->
                </ul> 
            </li>

            
			<li class="">
									<p class="close-menu"></p>
									<!-- <a href="https://healthymaster.in/new-arrivals" title="Offers" class="menuu">
										<strong>New Arrival</strong>
									</a> -->
													</li>
									<!-- <li class="">
									<p class="close-menu"></p>
									<a href="https://healthymaster.in/combo" title="Combo" class="menuu">
										<strong>Combo</strong>
									</a>
									</li> -->

            							<!-- 	<li class="dropdown ">
													<p class="close-menu"></p>
													<a href="#"  class="dropdown-toggle" data-toggle="dropdown" title="About Us" class="menuu">
														<strong>Gift A Smile</strong><b class="caret"></b>
													</a>
													<ul class="dropdown-menu">
														<li></li>
															<li><a href="https://healthymaster.in/occasion">Gift By Occasion</a></li>
															<li><a href="https://healthymaster.in/festival">Gift By Festival</a></li>
														</ul>

												</li> -->

<!-- **************************************************END*********************************************************************************************************************** -->
													<!-- <li class="">
														<p class="close-menu"></p>
														<a href="https://healthymaster.in/bulk_buy" title="B2B" class="menuu">
															<strong>B2B</strong>
														</a>


													</li> -->

													
													<!-- <li class="">
														<p class="close-menu"></p>
														<a href="https://healthymaster.in/testimonial" title="Testimonials" class="menuu">
															<strong>Testimonials</strong>
														</a>
													</li> -->

													<!-- <li class="">
														<p class="close-menu"></p>
														<a href="https://healthymaster.in/memberships" title="Memberships" class="menuu">
															<strong>Memberships</strong>
														</a>
													</li>

													<li class="">
														<p class="close-menu"></p>
														<a href="https://healthymaster.in/blogs/" title="Blogs" class="menuu">
															<strong>Blogs</strong>
														</a>
													</li> -->

													<li class="">
														<p class="close-menu"></p>
														<a href="<?php echo  site_url('contact');?>" title="Contact Us" class="menuu">
															<strong>Contact</strong>
														</a>
													</li>

											
												</ul>
											</div>
										</div>
									</div>

								</div>
							</nav>
						</div>
					</div>
					<!-- //end Main menu -->
				</div>
			</div>
		</div>
	</div>
	</header>