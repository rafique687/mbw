<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
<script>
$(document).ready(function(){ 
    $("#contry").change(function () {
        var contry = $("#contry").val();
            jQuery.ajax({
            url: "<?php echo site_url()?>/product/jquerystate?id="+contry,
            type: "GET",
            data: "id = "+ contry,
            dataType: "html",
            success: function(data)
            { 
             $("#state").html(data);
            }               
        });
    });
});
</script>
<script>
$(document).ready(function(){ 
    $("#state").change(function () {
        var state = $("#state").val();
            jQuery.ajax({
            url: "<?php echo site_url()?>/product/jquerycity?id="+state,
            type: "GET",
            data: "id = "+ state,
            dataType: "html",
            success: function(data)
            { 
             $("#city").html(data);
            }               
        });
    });
});
</script>
<?php //echo "<pre>"; print_r($customer);exit;?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">Manage Customer</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Edit Customer :</h4>
						</div>
						<div class="form-body">
							<form action="<?php echo site_url()?>/customer/updatecustomer" method="post" enctype="multipart/form-data"> 
							<input type="hidden" value="<?php echo $editid ;?>" name="regi_id">
							<div class="form-group"> 
								<label for="exampleInputEmail1">Name</label> 
								<input type="text" class="form-control" placeholder="Enter First Name" name="name" required="" value="<?php echo $customer['name']; ?>"> 
								<?php if(form_error('name')){?>
									<div class="custom"> <?php echo strip_tags(form_error('name'));?></div> 
								<?php  };?>
							</div> 
						
						
							<div class="form-group"> 
								<label for="exampleInputPassword1">Email</label> 
								<input type="email" name="email" class="form-control" placeholder="Enter Email" required="" value="<?php echo $customer['email']; ?>"> 
								<?php if(form_error('email')){?>
									<div class="custom"> <?php echo strip_tags(form_error('email'));?></div> 
								<?php  };?>
							</div> 
								<div class="form-group"> 
									<label for="exampleInputPassword1">Mobile</label> 
									<input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number" required="" value="<?php echo $customer['mobile']; ?>"> 
									<?php if(form_error('mobile')){?>
										<div class="custom"> <?php echo strip_tags(form_error('mobile'));?></div> 
									<?php  };?>
								</div>
								<div class="form-group"> 
									<label for="exampleInputPassword1">Status</label> 
									<select name="Status" class="form-control">
										<option <?php if($customer['status']==0) { echo "selected";}?> value="<?php echo $customer['status'];?>">
											Not Verifyed
										</option>
										<option <?php if($customer['status']==1) { echo "selected";}?> value="<?php echo $customer['status'];?>">
											Verifyed/Enable
										</option>
										<option <?php if($customer['status']==100) { echo "selected";}?> value="<?php echo $customer['status'];?>">
											Block
										</option>
									</select>
								</div>
							
							
							</div> 
								 <button type="submit" class="btn btn-default">Submit</button> </form> 
						</div>
					</div>
					
					
					
				</div>
			</div>
		</div>
		<script>
$(document).ready(function(){
 
 var info = $('#des').val().trim();
 $("#des").val(info);
});
</script>