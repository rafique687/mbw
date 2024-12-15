	 <option value=""> --- Select State --- </option>
<?php
		foreach ($product as  $cat) {?>
			<option value="<?php echo $cat['stateid']?>"><?php echo $cat['state']?></option>
<?php	}
?>