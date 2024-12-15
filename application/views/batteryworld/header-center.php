<style type="text/css">
	@media (max-width: 767px){
#sosearchpro.search-pro {
    width: 84%;
    float: left;
    padding: 0;
    margin-top: -48px !important;
  } 
}
</style>
	<!-- Header center -->
	<div class="header-center" style="background-color:#fff; height: 110px;">
		
		<div class="container">
			<div class="row">
				<!-- Logo -->
				<div class="navbar-logo col-md-3 col-sm-12 col-xs-5">
				<!-- lgo-udef -->	<a class="h-logo " href="<?php echo base_url()?>">
               <img src="<?php echo base_url()?>settingpic/<?php echo $logo[0]['field_value'];?>" style="height: 105px;" title="Your Store" alt="ZILIQ" class="hm-logo "></a>
				</div>
				<!-- end Logo -->
				
				<!-- Search -->
				<div id="sosearchpro" class="col-md-6 col-sm-6 search-pro visible-md visible-lg search-pro-custom" style="margin-top:15px;">
					<form method="get" action="<?php echo base_url()?>product/productbybrand">
						<div id="search0" class="search input-group">
							<input class="autosearch-input form-control autocompleted selectedAutoCompleted" type="text" value="" size="50" autocomplete="off" placeholder="Enter keywords to search..." name="search">
							<div class="suggesstion-box" style="margin-top: 42px;"></div>
							<input type="hidden" name="itemsearch" id="itemsearch" value="">
							<span class="input-group-btn" style="background-color:#0c0d12;">
							<button type="submit" class="button-search btn btn-primary searchsubmit"><i class="fa fa-search"></i></button>
							</span>
						</div> 
					</form> 
				</div>
				<!-- //Search -->
				
				<div class=" col-xs-7 moblie-cart-wish">
				    
                    <div class="cart-top">
						<a href="javascript:void(0);" data-toggle="modal" data-target="#loginModel" class="top_cart" data-toggle="dropdown">
									<div class="shopcart">
										<span class="handle pull-left"></span>
										<span class="title sp-pdding"><i class="shopping-cart-svg"> <img src="<?php echo base_url()?>img/cart.svg"> </i></span>
									</div>
								</a>	 
					</div>					
					<div class="wish visible-lg visible-md">
						<div id="wislist" class="btn-group btn-wishlist"><a href="javascript:void(0);" data-toggle="modal" data-target="#loginModel" class="top_cart" data-toggle="dropdown">
									<div class="wishlist">
										<span class="handle pull-left"></span>
										<span class="title"><i class="far fa-heart"></i></i></span>
									</div>
								</a></div>				
					</div>	

					<div class="wish visible-xs">
						<div id="wislist" class="btn-group btn-wishlist"><a href="javascript:void(0);" data-toggle="modal" data-target="#loginModel" class="top_cart">
									<div class="wishlist">
										<span class="handle pull-left"></span>
										<span class="title">
										<strong style="color:#1423dd !important;">LOGIN/SIGNUP</strong>
										</span>
																			
									</div>
									
								</a>
					</div>				
					</div>   
				</div>
				
				<div class="modcontent1 login-name col-md-3">
					<div class="menu new-menu">
					<ul class="left ds-flx ul-menu">
	<?php
	if(!isset($user['username']))
		{?>
			<li class="">
			<p class="close-menu"></p>
			<a class="cstm-m mobile_login menuu login-button-name" href="javascript:void(0);" title="login" data-toggle="modal" data-target="#loginModel"  style="color: #1423dd;">
			<strong>LOGIN/SIGNUP</strong>
			</a>
			</li>
<?php } 
else
	{?>

	<li class="dropdown menu-bar cstm-m mobile_login menuu custom-box new-class">
		<a href="#" class="dropdown-toggle custom-dropwodwn-menu" data-toggle="dropdown" style="color: #1423dd;font-weight:600;font-size: 13px;">
			<?php echo $user['username'];?>
			<i class="fa fa-chevron-down iconchevron"></i>
	</a>
	<ul class="dropdown-menu custom-menu1 login-dropdown-menu" role="menu">
			<a href="#" class="dropdown-toggle custom-dropwodwn-menu" data-toggle="dropdown" style="color: #5dbf02;font-weight:600;font-size: 13px;">
			</a>
			<li>
			<a href="#" class="dropdown-toggle custom-dropwodwn-menu" data-toggle="dropdown" style="color: #1423dd;font-weight:600;font-size: 13px;"></a><a href="<?php echo base_url()?>userprofile/myaccount" class="my-account">My Account
			</a>
			</li>
														<!-- 	<li><a href="#" class="my-account">My Wishlist</a></li>
															<li><a href="#" class="my-account">My Cart</a></li>
															<li><a href="#" class="my-account">My Order</a></li>
															<li><a href="#" class="my-account">My Membership</a></li> -->
															
															
															<li><a href="<?php echo base_url()?>mycart/userlogout" class="my-account">Logout</a></li>  		 	 </ul>
													
												</li>


<?php } ?>

<li class="cart-top shopping-cart-button">
 <a href="javascript:void(0);" data-toggle="modal" data-target="#loginModel" class="top_cart" data-toggle="dropdown">
   <div class="shopcart" style="color:#fff;">
     <span class="handle pull-left"></span>
        <span class="title sp-pdding"><i class="shopping-cart-svg"> 
        	<img src="<?php echo base_url();?>settingpic/cartt.png" width="50" height="50"></i>
        	<span class="label-success itemCount" id="itemCount">
        		<?php if(!empty($this->session->userdata('cart_item')))
        			{
        				echo count($this->session->userdata('cart_item'));
        			} 
        			else {
        			 echo 0 ;
        			  }?>
        			</span>
        </span>
                        											</div>
                        										</a>	 
                        							</li>


         <li class="shopping-cart-button wishlist-button create-custom-wishlist-icon new-class">
         <div id="wislist" class="btn-group btn-wishlist"><a href="javascript:void(0);" data-toggle="modal" data-target="#loginModel" class="top_cart" data-toggle="dropdown">
            <div class="wishlist">
              <span class="handle pull-left"></span>
              <span class="title" style="color:#000">
              	<i class="far fa-heart"></i></span>
            </div>
         </a>
 <!-------------------------------------shoping Cart----------------------------------------------------------->
        <ul class="tab-content content dropdown-menu pull-right shoppingcart-box new-button-css-2" role="menu" >
         <li id="mycart">
        </li>
				<li>
					<div>
						<div class="cart" style="width:100%;"> 
							<a class="btn view-cart showLoading" href="<?php echo base_url()?>mycart/cart">
								 <i class="fa fa-shopping-cart"></i>View Cart
							</a>
							<button class="btn view-cart hidediv" href="#">
								 <i class="fa fa-eye"></i>Hide Cart
							</button>
					 </div>
					</div>
			</li>
		</ul>
 <!!---------------------------------------End Cart------------------------------------------------------------->
  </div>				
  </li>
	</ul>
	</div>
	</div>
	</div>
	</div>
	</div>
	<!-- //Header center -->