<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="<?php echo base_url(); ?>/css/dropzone.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>/js/dropzone.js"></script>
 
<script>
$(document).ready(function(){ 
    $("#pcate").change(function () {
        var gender = $("#pcate").val();
            jQuery.ajax({
            url: "<?php echo site_url()?>/product/jquerysubcate?id="+gender,
            type: "GET",
            data: "id = "+ gender,
            dataType: "html",
            success: function(data)
            { 
             $("#subcate").html(data);
            }               
        });
    });
});
</script> 
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">Manage Product</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Add Product</h4>
							
						</div>
						<div class="form-body">
<form  action="<?php echo site_url()?>/product/iteninsert" method="post" enctype="multipart/form-data"> 
	<div class="form-group"> 
		<label for="exampleInputEmail1">Product Name</label> 
		<input type="text" class="form-control" id="" name="product_name" placeholder="Product Name" required="" value="<?php echo set_value('product_name'); ?>" > 
		<?php if(form_error('product_name'))
			{?>
			<div class="custom"> <?php echo strip_tags(form_error('product_name'));?></div>
	 <?php  };?>
	</div> 
	<div class="form-group"> 
		<label>Select Parent Category</label>
    		<select class="form-control" name="p_cate"  id="pcate">
    		<?php foreach ($parent_cate as $pr) {?>
				<option <?php if(set_value('p_cate')==$pr['prod_id']){ echo "selected";}?>value="<?php echo $pr['prod_id']?>">
					<?php echo $pr['product_name']?>
				</option>
					<?php } ?>
			</select>
	</div>

	<div class="form-group"> 
		<label>Select Sub Category</label>
    	<select class="form-control" name="subcate" id="subcate">
    		<option value="0">Select Sub Category</option>  
		</select>
	</div>
	<div class="form-group"> 
		<label for="exampleInputEmail1">MRP.</label> 
		<input type="text" class="form-control" id="" name="mrp" placeholder="Product MRP" required="" value="<?php echo set_value('mrp'); ?>" > 
		<?php if(form_error('mrp'))
			{?>
			<div class="custom"> <?php echo strip_tags(form_error('price'));?></div>
	 <?php  };?>
	</div>
	<div class="form-group"> 
		<label for="exampleInputEmail1">Price</label> 
		<input type="text" class="form-control" id="" name="price" placeholder="Product Price" required="" value="<?php echo set_value('price'); ?>" > 
		<?php if(form_error('price'))
			{?>
			<div class="custom"> <?php echo strip_tags(form_error('price'));?></div>
	 <?php  };?>
	</div>
	<div class="form-group"> 
		<label>Select Unit</label>
    		<select class="form-control" name="unit">
    		
				<option <?php if(set_value('unit')=="Kg"){ echo "selected";}?> value="Kg">
					Kg
				</option>
				<option <?php if(set_value('unit')=="Litter"){ echo "selected";}?> value="Litter">
					Litter
				</option>
				<option <?php if(set_value('unit')=="Piece "){ echo "selected";}?> value="Piece">
					Piece
				</option>
					
			</select>
	</div>
	<div class="form-group"> 
	 <label>Status</label>
		<select class="form-control" name="stockstatus" required="">
            <option <?php if(set_value('stockstatus')==1){ echo "selected";}?> value="1">Active</option>
			<option <?php if(set_value('stockstatus')==2){ echo "selected";}?>  value="2">Inactive</option>
		</select>
			<?php if(isset($error))
			{?>
			<div class="custom"> <?php echo strip_tags(form_error($imgerror['error']));?></div>
		<?php } ?>
	</div>	
	<div class="form-group"> 
	<label>Offer</label>
	<select class="form-control" name="offer" required="">
        <option <?php if(set_value('offer')=='yes'){ echo "selected";}?> value="yes">
        Yes
    	</option>
		<option <?php if(set_value('offer')=='no'){ echo "selected";}?>  value="no">
		No
		</option>
	</select>
	<?php if(isset($error))
		{?>
		<div class="custom"> <?php echo strip_tags(form_error($imgerror['offer']));?></div>
	<?php } ?>
	</div>
	<div class="row">
		<div class="row">
	<!-- textarea -->
	<div class="form-group">
		<label>Short Description</label>
		<textarea class="form-control" rows="3" placeholder="Enter Short  Description" required="" name="sdes" value="<?php echo set_value('sdes'); ?>"></textarea>
		<?php if(form_error('sdes'))
				{?>
					<div class="custom"> <?php echo strip_tags(form_error('sdes'));?></div>
		 <?php  };?>
	</div>
	</div>
	<div class="row">
	<!-- textarea -->
	<div class="form-group">
		<label>Product Description</label>
		<textarea class="form-control" rows="10"  placeholder="Enter Product  Description" required="" name="des" value="<?php echo set_value('des'); ?>"></textarea>
		<?php if(form_error('des'))
				{?>
					<div class="custom"> <?php echo strip_tags(form_error('des'));?></div>
		 <?php  };?>
	</div>
	</div>
		 <input type="hidden" value="" name="cateimg" id="cateimg">
	<?php if(isset($error))
		{?>
			<div class="custom"> <?php echo strip_tags(form_error($error['error']));?></div>
	  <?php } ?>
</div>
	<div class="form-group col-12">
<div id="dropzonewidget" class="dropzone" data-url="<?php echo site_url(); ?>product/uploadfiles">
</div> 
</div>
<button type="submit" class="btn btn-default" id="submit" value="submit">Submit</button> 	
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
$(document).ready(function() {
	$('#submi').on('click', function() {
		var p_cate 		= $('#main').val();
		var cateimg 	= $('#cateimg').val();
		var catename 	= $('#catename').val();
		var stock 		= $('#stock').val();
		var des 	= $('#des').val();
		if(p_cate!="" && cateimg!="" && catename!="" && stock!="" && des!="")
		{
			$("#submit").attr("disabled", "disabled");
			$.ajax({
				url: "<?php echo base_url("Product/ajaxiteninsert");?>",
				type: "POST",
				data: {
						type: 1,
						p_cate: p_cate,
						product_name: catename,
						des: des,
						stockstatus: stock,
						cateimg:cateimg
					 },
				cache: false,
				success: function(dataResult)
				{
				
				 window.location.href = "<?php echo site_url();?>product/view_product?sucess=Product Successfully Uploaded";	
				 	
				 			
				}
					
			});
		}
		else{
			alert('Please fill all the field !');
			/*if(p_cate=='NULL'|| p_cate=="")
			{
				$("#errmsg").show();
				var errName = document.getElementByID("errmsg");
				errName.innerHTML += "Category Name required";
				errName.innerHTML += ".red {color:red;}";
				document.getElementByID("name").val = errName;					
								
			}*/
		}
	});
});
</script>