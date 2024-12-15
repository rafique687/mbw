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
							<form  action="<?php echo site_url()?>/Location/edit_insert" method="post" enctype="multipart/form-data"> 
								<input type="hidden" name="gett" value="<?php echo $editid?>" id="idd">
								<?php if(isset($_GET['category']))
								{?>
								<input type="hidden" name="category" value="<?php echo $_GET['category']?>">
						 <?php  } ?>
								<div class="form-group"> 
									<label for="exampleInputEmail1">Country Name</label> 
									<input type="text" class="form-control" name="product_name" value="<?php echo $product['contry']?>"> 
									<?php if(form_error('product_name'))
										  {?>
										   <div class="custom"> <?php echo strip_tags(form_error('product_name'));?></div>
											
									<?php  };?>
								</div> 
								<div class="form-group">  
								 <label>Status</label>
                        				<select class="form-control" name="status" required="">
                                        	<option <?php if($product['country_status']==1)?>value="1">Active</option>
                           					<option <?php if($product['country_status']==2)?>value="2">Inactive</option>
                           					
                        				</select>
                        			</div>
                        	
								
								
								<button type="submit" class="btn btn-default">Submit</button> 
							</form> 
						</div>
					</div>
					
				

				</div>
			</div>
		</div>
		<script>
	Dropzone.autoDiscover = false;
		$(".dropzone").dropzone({
			url: $("#dropzonewidget").data("url"),
			addRemoveLinks: true,
			success: function (file, response) {
				var nm = $("#cateimg").val();
				nm = nm.split(",");
				nm.push(response.replace(/"/g, ''));
				nm = nm.filter(ele=>ele!="");
				nm.join(",");
				$("#cateimg").val(nm)
				file.previewElement.classList.add("dz-success");
			},
			error: function (file, response) {
				file.previewElement.classList.add("dz-error");
			}
		});
</script>
<script>
$(document).ready(function(){
 
	var info = $('#des').val().trim();
	$("#des").val(info);
	

});
</script>



<script>
$(document).ready(function(){ 
$('.idd').on("click",function(){
 	var imgname =  $(this).attr("id");
	var cateid  = $("#idd").val();
	
  	 var confirmalert = confirm("Are you sure want to delete this image?");
  if (confirmalert == true) {
	 // AJAX Request
	 $.ajax({
				url: "<?php echo base_url("Category/delimage");?>",
				type: "POST",
				data: {
						type: 1,
						cateid: cateid,
						imgnam: imgname,
					},
				cache: false,
				success: function(dataResult)
				{
					location.reload();				
				}
	 });
  }

});

});
</script>