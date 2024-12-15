<!-- <div class="suggesstion-box" style="margin-top: 42px; background: rgb(255, 255, 255); display: none;"> -->
 <ul id="country-list">
 	<?php foreach($searchbar as $suggestion){?>
	<a style="color: #231f20;" href="<?php echo base_url()?>/product/products_details?pid=<?php echo $suggestion['item_id']?>">
		<li><?php echo $suggestion['item_name'];?></li>
	</a>
<?php } ?>
	
 </ul>
<!-- </div> -->