<?php include("header.php");?>
   <body class="common-home res layout-home1">
      <div id="wrapper" class="wrapper-full banners-effect-7">
         <input type="hidden" class="customer_id" value="<?php echo $user['userid']?>">

<header id="header" class="variantleft type_1" >
  <?php include("topheader.php");?>
<?php include("header-center.php");?>
<?php include("header-bottom.php");?> 
		<!--Content Starts-->
		<div class="main-container container">
			<ul class="breadcrumb" style="margin:0;text-transform: capitalize;">
				<li><a href="<?php echo base_url()?>" style="color:#000;">Home</a></li>
				<li><a href="cart_final.php?active=4" style="color:#000;">Cart</a></li>
				<li><a href="#">Checkout</a></li>				
			</ul>
			
			<div class="row">
				<!--Middle Part Start-->
				<div id="content" class="col-sm-12">
				  	<div class="row mobile-row-change">
				  		<div class="col-left col-sm-5">
				  			<div class="ship-n-pay">
			  							  			<div class="panel panel-default oldAdd">
									<div class="panel-heading">
									  <h4 class="panel-title"><img src="./css/images/address-icon.svg" alt=""><!-- <i class="fa fa-book"></i> --> Address 
									  </h4> 
									</div>
								  	<div class="panel-body">
										<fieldset id="account">
											<label for="input-payment-firstname" class="control-label"> Name:</label> <?php echo $user['username'];?></br>	 										
											<label for="input-payment-firstname" class="control-label"> Mobile No.:</label> <?php echo $userr['mobile'];?></br>										
											<label for="input-payment-firstname" class="control-label"> Address:</label>
											 <p id="addr"><?php if($address['address']){ echo $address['address'];}?></p></br> 	
											<div style="margin-top: 30px;">  
										  		<a href="javascript:void(0);" class="btn btn-primary changeAddress" style="color:#fff; font-weight:100 !important;" 
									  		>Change</a>
										  		<a href="javascript:void(0);" class="btn btn-primary editAddress" style="color:#fff; font-weight:100 !important;" 
										  		aname="<?php echo $user['username'];?>" 
										  		amobile="<?php echo $userr['mobile'];?>"
										  		alocality="paota"
												alandmark="<?php echo $address['address'];?>">Add Address</a> 
										  	</div>
										</fieldset>
									</div>
								</div>
				  							  			<div class="panel panel-default oldAdd" style="display:none">
								<div class="panel-heading">
								  
								  </h4> 
								</div>
							  	<div class="panel-body">
									<fieldset id="account">
										<label for="input-payment-firstname" class="control-label"> Name:</label> <?php echo $user['username'];?></br>	 										
										<label for="input-payment-firstname" class="control-label"> Mobile No.:</label> <?php echo $userr['mobile'];?></br>										
										<label for="input-payment-firstname" class="control-label"> Address:</label><?php echo $address['address'];?></br> 	
                      
										<div style="margin-top: 30px;">
											<form method="get">
											<!-- <input type="hidden" value="342001" name="pincode"> -->
											<input type="hidden" value="<?php $address['user_id']; ?>" name="id">
											<input type="hidden" value="<?php $userr['mobile']; ?>" name="mob">
											<input type="hidden" value="<?php echo $user['username']?>" name="cus_name">
											<input type="hidden" value="" name="code">
											<input id="wallet" type="hidden" value="" name="wallet">
											<input type="hidden" value="" name="payment_option" class="payment_option">
									  		<input type="submit" class="btn btn-primary showLoading" id="button-confirm" value="Select">
									  		<a href="javascript:void(0);" class="btn btn-primary editAddress" style="color:#fff; font-weight:100 !important;" 
									  		aname="<?php echo $user['username']?>" 
									  		amobile="<?php $userr['mobile']; ?>"
									  		
									  		alandmark="<?php echo $address['address']?>"
									  		alocality="<?php echo $address['address']?>"
									  		
									  		>Edit</a> 
									  		</form>
									  	</div>	
									</fieldset>
								</div>
							</div>
				  		  
					
					
										
			  			<form method="post" id="xyr" style="display:none">
							<div class="panel panel-default newAdd">
								<div class="panel-heading">
								  <h4 class="panel-title"><i class="fa fa-user"></i> Deliver Address Details</h4>
								</div>
							  	<div class="panel-body">
									<fieldset id="account">
										<div class="form-group col-md-6 col-xs-12">
											<label for="input-payment-firstname" class="control-label"> Name</label>
											<input type="text" class="form-control" id="name" placeholder="Name" required name="name" value="<?php echo $user['username']?>">
										</div>
										<div class="form-group col-md-6 col-xs-12">
											<label for="input-payment-lastname" class="control-label">Mobile</label>
											<input type="text" class="form-control" id="mobile" placeholder="Mobile" value="<?php echo $userr['mobile']?>" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" minlength="10" required name="mobile">
										</div> 										
									</fieldset> 
									<fieldset id="address" class="">
										
										<div class="form-group required col-md-12 col-xs-12">
											<label for="input-payment-address-2" class="control-label">Street/Locality/Area</label>
											<input type="text" class="form-control" id="locality" placeholder="Street/Locality/Area " value="<?php echo $address['address'];?>" required name="locality">
										</div>
										 <div class="form-group col-md-6 col-xs-12">
											<label for="input-payment-address-2" class="control-label">Landmark</label>
											<input type="text" class="form-control" id="landmark" placeholder="Landmark " value="<?php echo $address['address'];?>"  name="Landmark">
										</div>
										 
										
										<div class="form-group required col-md-6 col-xs-12">
											<label for="input-payment-postcode" class="control-label">Address Type</label>
											<select class="form-control" name="address_type" id="address_type">
												<option>Office Address</option>
												<option>Home Address</option>
												<option>Other Address</option>
											</select>
										</div>
										<div class="form-group required col-md-6 col-xs-12">
											<label for="input-payment-address-2" class="control-label">City</label>
											<select class="form-control citySelect select2" name="city_id" id="city_id" required>
												<option value="">Select...</option>
												<option  value="477" state_name="Andaman and Nico.In." state_id="1">NICOBAR</option>
                      </select>
										</div> 
										<div class="form-group required col-md-6 col-xs-12">
											<!-- <label for="input-payment-postcode" class="control-label">State</label>
											<input type="text" value="" readonly class="form-control"  name="state_name" id="state_name" placeholder="State Name">
											<input type="hidden" value="" name="state_id" id="state_id"> -->
											<input type="hidden" name="customer_id" value="<?php echo $user['userid']?>">
											<input type="hidden" name="customer_address_id" id="customer_address_id" value="<?php echo $address['address']?>">
											<!-- <input type="hidden" name="tag" id="tag" value="add"> -->
										</div>
										<div class="form-group required col-md-6 col-xs-12">
											<label for="input-payment-postcode" class="control-label">Default Address</label> 
											<div class="radio">
											 <!--  <label><input type="radio" checked="checked" value="1" name="default_address">Yes</label>
										 
											  <label><input type="radio" value="0" name="default_address">No</label> -->
											</div>
										</div> 
										<div style="margin-top: 30px;"> 
											<input type="hidden" value="" name="code">
									  		<input type="submit" class="btn btn-primary" id="button-confirm" name="newAddress" value="Add address">
									  	</div>

									</fieldset>
								</div>
						  	</div>
						</form> 

									<div class="panel panel-default"  style="border:none;"> 
										<div class="col-sm-12  checkout-payment-methods">
											<div class="panel-heading">
											  <h4 class="panel-title"> <img src="./css/images/pay-icon.svg" alt=""> <!-- <i class="fa fa-credit-card"></i> --></h4>
											</div>
					<div class="panel-body">
						<form id="ordmethod" method="post">
					<!-- 	<p>Please select the payment method for this order.</p>
							<div class="radio" style="">
							<label>
								<input  type="radio" value="COD" class="payment_method" name="order_type" class="form-control" id="order_type" required="" >Cash On Delivery (30 Rs. extra)</label>
							</div>
												 
							<div class="radio">
							<label>
							<input type="radio" value="online" class="payment_method" name="order_type"  id="order_type">Other Payment Options</label>
							<input type="hidden" name="ordertype" value="" id="ordertype" class="form-control" required="">
							</div> -->
						</form>
					</div>
										</div>
									</div>

					
					</div>


					</div> 
					



										<form method="post" class="place">
										
						<textarea type="hidden" name="order_notes" id="order_notes" value="" style="display: none;"></textarea>
						<input type='hidden' id='customer_address_id' name='customer_address_id' value='<?php echo $address['address']?>'>						
            <input type='hidden' name='mobile' value='<?php echo $userr['mobile']?>'>						
            <input type='hidden' name='customer_name' value='<?php echo $user['username']?>'>						
            					
            <div class="col-right col-md-7">
							<div class="row">
							
									<!-- START -->
												
																			<!-- END -->
								
								
								<div class="col-sm-12">
									<div class="panel panel-default order-summ">
									<div class="panel-heading">
									  <h4 class="panel-title" id="tesrt"> Order Summary</h4>

									</div>
									<div class="panel-body">
									

										<div>
											<table class="table table-bordered">
										 		<thead>
                          <?php //echo "<pre>"; print_r($user);?>
								                  <tr>
								                    <td class="text-center">Image</td>
								                    <td class="text-left">Product Name</td> 
								                    <td class="text-left">Quantity</td>
								                    <td class="text-right">Price</td> 
								                    <td class="text-right">Total</td> 
								                  </tr>
								                </thead>
												<tbody>
                      <?php $cartdata=$this->session->userdata('cart_item');
                      $gramdtotal=0;
                       foreach($cartdata as $key=>$item)
                            {?>
												<tr class="itemclass">
										    <td class="text-center hidden-xs">
                          <a href="product/wheat-puff-masala">
                             <?php $itempic=explode(",",$item['image']);?>
                            <img width="70px" src="<?php echo base_url()?>item/<?php echo $itempic[0]?>" alt="<?php echo $item['item_name']?>" title=""<?php echo $item['item_name']?>" class="img-thumbnail" />
                          </a>
                        </td>
										    <td class="text-left">
                          <a href="product/wheat-puff-masala">"<?php echo $item['item_name']?><br/><span style="color:red;"></span>
                          </a>
                          <br />
										    </td> 
										    <td class="text-left" style="width:100px"><div class="input-group btn-block quantity">
										    <input readonly type="text" name="quantity" value="<?php echo $item['quantity']?>" class="form-control newQuantity" />
										    </td> 
										    <td class="text-right">₹<?php echo $item['price']?> </td>
										    <td class="text-right">₹<?php echo $item['quantity']*$item['price']?></td>
										  </tr>
                    <?php  $gramdtotal += $item['quantity']*$item['price'];
                 } 
                    ?>
										 </tbody>
												
											</table>

											<div class="pricing-struct">
												<p>Pricing Details (<span><?php echo count($cartdata);?> Items</span>)</p>
												<div class="bg-lgreen">
													<div class="sb-total">
														<p class="t-color">Sub Total:</p> 
														<p class="t-color">Rs. <?php echo $gramdtotal;?></p>
													</div>
													<div class="sb-total">
														<p class="t-color">Coupon Discount:</p> 
														<p class="t-color">Rs. 0</p>
													</div>
													<div class="sb-total">
														<p class="t-color">Delivery Charges:</p>
														<p class="green devcharges">₹50</p>
                            <input type="hidden" value="50" name="defvalue" id="defvalue">
													</div>
																											
													
									<div class="total">
									<p class="t-color">Total</p>												
									<p class="t-color grandtotal">₹ <?php echo $gramdtotal;?></p> 
									<input type="hidden" value="<?php echo $gramdtotal; ?>" id="grandtotalval2">
                           <input type="hidden" name="" value="<?php echo $user['userid']?>" id="useridd">

									</div>
	<input type="radio" value="COD" checked="" name="order_typpe"  id="order_typpe">Cash On Delivery</label>
	<input type="radio" value="online"  name="order_typpe"  id="order_typpe">Other Payment Options</label> |
							


												</div>
											</div>

										</div>
									</div>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="buttons">
										<div class="pull-right">
											<input type="hidden" name="checkstatus" class="checkstatus" value="true">
												<a href="javascript:void(0);" id="showalert12" data-toggle="modal" data-target="#loginModell" style="" class="btn btn-primary">placeOrder</a>
										</div>
									</div>
								</div>
								<div class="modal" id="loginModell">
									<div class="modal-dialog">
									  <div class="modal-content">
										<!-- Modal Header -->
										<div class="modal-header">
										  <h4 class="modal-title ioos" style="">Order Above Rs. 999 and enjoy free delivery </h4>
										 <a href="" class="close" data-dismiss="modal">&times;</a>
										</div>
										<div class="modal-body" align="center">
										<a href="<?php echo base_url()?>" class="btn btn-primary" style="color:white;font-weight: 500;">Continue Shopping</a>
										<input type="submit" class="btn btn-primary showLoading placeOrder modal_place button_place_order" id="button-confirmk" name="placeOrder" value="Place Order">										
										</div>
									  </div>
									</div>
								</div>
																	
			<form id="myform"  method="post" action="<?php echo base_url()?>mycart/placeorder">
				 <input type="hidden" name="customer_address_id" id="customer_address_id" value="<?php echo $address['address']?>">
					
					<input type="hidden" id="" value="<?php echo $user['userid']?>" name="customer_id">
					
					<input type="hidden" id="total_amount" value="<?php echo $gramdtotal;?>" name="total_amount" class="checkdata" data_title="">
					
				</form>
															
							</div>
						</div>
						</form>
				  	</div>
				</div>
				<!--Middle Part End -->				
			</div>
		</div>
					
						<div class="container">
 		  <div class="modal fade" id="myModal_show_data" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        
	        <div class="modal-body">
			<button type="button" class="close" data-dismiss="modal" style="position: absolute;right: 22px; font-size: 30px; opacity: 1;">&times;</button>
						<img src="http://dswexrz9xr8ac.cloudfront.net/banners/6137350bb10c4.jpg" style="height: 400px;"/>
			 
	        </div>
	      <!--   <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div> -->
	      </div>
	      
	    </div>
	  </div>
	  
	  
</div>
</body>
</html>
<div style="display:none;" id="beforeload" class="" align="center" width="100%"><img src="img/loading.gif" style="width:50%"></div>
<style type="text/css">
	#beforeload {
    /*
    opacity: 0.2;
    background: url('spinner.gif') no-repeat center center;*/
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    z-index: 9999999;
}
</style>

		<a href="javascript:void(0);" id="showalert1" data-toggle="modal" data-target="#loginModel3" style="display:none;">LOGIN</a>  
		
		<button type="button" style="display:none;" class="btn btn-info btn-lg attention" data-toggle="modal" data-target="#myModal99">Open Modal</button>
		
		<div id="checkout_script"></div>

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

<script>
 $(document).ready(function() { 
    $("#button-confirmk").click(function(){ //alert("yssk");
        var url = "<?php echo base_url()?>Mycart/placeorder";
        var customer_id = $("#customer_id").val();
        var total_amount = $("#total_amount").val();
        //var order_type = $("#order_typpe").val();
       var order_type= document.querySelector('input[name="order_typpe"]:checked').value;
        var address=$("#addr").html();
        var customer_address_id = $("#customer_address_id").val();
        //alert(customer_address_id);
        if(customer_address_id=='')
        {
        	alert('Insert Your Delivery Address');
        	
        	window.location.href = "<?php echo base_url()?>userprofile/address";
        	return false;
       // alert(order_type);
        }
      
        $.ajax({
                        type: "POST",
                        url: "<?php echo base_url()?>Mycart/placeorder",
                        data: "order_type=" + order_type+ "&customer_id=" + customer_id+ "&customer_address_id="+customer_address_id+ "&total_amount="+total_amount+ "&address="+address,
                        success: function(response)
                         { var okay=response.replace(/[^a-zA-Z ]/g, "")
                         	//alert(okay);
                         		if(okay=='online')
                         		{
                         			window.location.href ="<?php echo base_url()?>mycart/razarpay";
                         		} 
                         		else{                    	
                         	  window.location.href ="<?php echo base_url()?>mycart/add_orderproduct";
                         	}
                           
                         }
    
  });
  
 

 
  });
 });


$('#subscription_order_form').submit(function(e)
{
    $.ajax({
     url: $(this).attr('action'),
     data : $(this).serialize(),
     success : function (data){

      }
   });
    e.preventDefault();
});
  </script>
