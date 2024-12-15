<link href="<?php echo base_url(); ?>/css/dropzone.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>/js/dropzone.js"></script>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">Manage Location</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Edit Country</h4>
						</div>
						<div class="form-body">
							<form  action="<?php echo site_url()?>/Location/add_maiandsubcate" method="post" enctype="multipart/form-data"> 
								
								<div class="form-group"> 
									<label for="exampleInputEmail1">Country Name</label> 
									<input type="text" class="form-control" name="product_name" value="<?php echo set_value('product_name'); ?>" placeholder="Enter Country"> 
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
		