<link href="<?php echo base_url(); ?>/css/dropzone.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>/js/dropzone.js"></script>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">Manage Location</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Edit State</h4>
						</div>
						<div class="form-body">
							<form  action="<?php echo site_url()?>/Location/stateupdate" method="post" enctype="multipart/form-data"> 
								<input type="hidden" name="gett" value="<?php echo $editid; ?>">
								<div class="form-group">
									<label for="exampleInputEmail1">Select Country</label>
									<select name="cntid" class="form-control">
										<?php foreach ($country as $cnt) {?>
											<option <?php if($state['contery_id']==$cnt['contryid']){ echo "selected";}?> value="<?php echo $cnt['contryid'];?>"><?php echo $cnt['contry'];?></option>
										<?php } ?>
										
									</select>
								</div>
								<div class="form-group"> 
									<label for="exampleInputEmail1">state Name</label> 
									<input type="text" class="form-control" name="product_name" value="<?php echo $state['state']; ?>" placeholder="Enter Country"> 
									<?php if(form_error('product_name'))
										  {?>
										   <div class="custom"> <?php echo strip_tags(form_error('product_name'));?></div>
											
									<?php  };?>
								</div>
								
								<div class="form-group">  
								 <label>Status</label>
                        				<select class="form-control" name="status" required="">
                                        	<option <?php if($state['state_status']==1){ echo "selected";}?> value="1">Active</option>
                           					<option <?php if($state['state_status']==2) { echo "selected";}?> value="2">Inactive</option>
                           					
                        				</select>
                        			</div>
                        	
								
								
								<button type="submit" class="btn btn-default">Submit</button> 
							</form> 
						</div>
					</div>
					
				

				</div>
			</div>
		</div>
		