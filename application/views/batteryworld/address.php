<?php include("header.php");?>
   <body class="common-home res layout-home1">
      <div id="wrapper" class="wrapper-full banners-effect-7">
         <input type="hidden" class="customer_id" value="1">

<header id="header" class="variantleft type_1" >
  <?php include("topheader.php");?>
<?php include("header-center.php");?>
<?php include("header-bottom.php");?> 

		<div class="main-container container" style="margin-top:30px;">
			<ul class="breadcrumb">
				<li><a href="<?php echo base_url()?>"><i class="fa fa-home"></i></a></li>
				<li><a href="<?php echo base_url()?>mycart/myaccount" style="color:#000">Account</a></li>
				<li><a href="#" style="color:#000">Address</a></li>
			</ul>
			<?php //echo "<pre>"; print_r($user);?>
			<div class="row">
				<div id="content" class="col-sm-12"> 
				</div>
					<form method="post" action="<?php echo base_url()?>userprofile/insertaddress" enctype="multipart/form-data" class="form-horizontal account-register clearfix">

						<div class="col-md-12">
              <fieldset>
              <legend>Your Address</legend>
             
              <input type="hidden" name="userid" value="<?php echo $userr['reg_id'];?>">
							
								
								<label class="col-sm-2 control-label" for="input-address-1">Name</label>
									<div class="col-sm-4">
								<input type="text" name="name" value="<?php echo $userr['name'];?>" required placeholder="Name" class="form-control" >
									</div>
									
									<label class="col-sm-2 control-label" for="input-telephone">Mobile No.</label>
									<div class="col-sm-4">
										<input type="text" name="mobile" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" minlength="10" value="<?php echo $userr['mobile']?>" required placeholder="Mobile No." class="form-control">
									</div>
                    </fieldset> 
								</div>
																
						
						</div>
						<div class="col-md-12" style="margin-top:10px;">
							<fieldset id="address">
								
							<div class="form-group required">
									<label class="col-sm-2 control-label" for="input-address-1">Pincode</label>
									<div class="col-sm-4">
										<input type="text" name="pincode" id="pincode" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" maxlength="6" minlength="6" value="" required placeholder="Pincode "class="form-control">
									</div> 
								
									
								</div> 
								<div class="form-group required"> 
									<label class="col-sm-2 control-label" for="input-city">City</label>
									<div class="col-sm-4">
										<!-- <select class="form-control citySelect select2"  name="city_id"  id="city_id" required>
										<option value="">Select...</option>
                    									</select> -->
                      <input type="city" name="locality" value="" required placeholder="locality "class="form-control">
									</div>
								<label class="col-sm-2 control-label" for="input-zone">Default Address</label>
									<div class="col-sm-4">
										<div class="radio">
										
											<label><input type="radio" checked="checked" value="1" name="default_address">Yes</label>
											<label><input type="radio" value="0" name="default_address">No</label>
										
										</div>
									</div>
									 
								</div>
							</fieldset>	
						</div>

            <div class="col-md-12" style="margin-top:10px;">
              <label class="col-sm-2 control-label" for="input-city">Address</label>
              <fieldset id="address">
                <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Enter Address..." name="address"></textarea>

              </fieldset>
            </div>
						<hr>
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
			</div>
		</div>
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