<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){  
    $("#cnt").change(function () {
        var gender = $("#cnt").val();
            jQuery.ajax({
            url: "<?php echo site_url()?>/Location/jquerysubcate?id="+gender,
            type: "GET",
            data: "id = "+ gender,
            dataType: "html",
            success: function(data)
            { 
             $("#std").html(data);
            }               
        });
    });
});
</script>
<link href="<?php echo base_url(); ?>/css/dropzone.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>/js/dropzone.js"></script>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">Manage Location</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Add City</h4>
						</div>
						<div class="form-body">
							<form  action="<?php echo site_url()?>/Location/insetcity" method="post" enctype="multipart/form-data"> 
								<div class="form-group">
									<label for="exampleInputEmail1">Select Country</label>
									<select name="cntid" class="form-control" id="cnt" >
										<?php foreach ($country as $cnt) {?>
											<option value="<?php echo $cnt['contryid'];?>"><?php echo $cnt['contry'];?></option>
										<?php } ?>
										
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Select state</label>
									<select  class="form-control" id="std" name="state">
									<option value="0">Select State</option>
										
										
									</select>
								</div>
								
								<div class="form-group"> 
									<label for="exampleInputEmail1">City Name</label> 
									<input type="text" class="form-control" name="city" value="<?php echo set_value('product_name'); ?>" placeholder="Enter City"> 
									<?php if(form_error('product_name'))
										  {?>
										   <div class="custom"> <?php echo strip_tags(form_error('product_name'));?></div>
											
									<?php  };?>
								</div>
								
								<div class="form-group">  
								 <label>Status</label>
                        				<select class="form-control" name="status" required="">
                                        	<option value="1">Active</option>
                           					<option value="2">Inactive</option>
                           					
                        				</select>
                        			</div>
                        	
								
								
								<button type="submit" class="btn btn-default">Submit</button> 
							</form> 
						</div>
					</div>
					
				

				</div>
			</div>
		</div>
		