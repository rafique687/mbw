<?php include("header.php");?>
   <body class="common-home res layout-home1">
      <div id="wrapper" class="wrapper-full banners-effect-7">
         <input type="hidden" class="customer_id" value="1">

<header id="header" class="variantleft type_1" >
  <?php include("topheader.php");?>
<?php include("header-center.php");?>
<?php include("header-bottom.php");?>

		<!--Content Starts-->
		<div class="main-container container">
			<ul class="breadcrumb">
				<li><a href="#"><i class="fa fa-home"></i></a></li>
				<li><a href="#">Contact us</a></li>			
			</ul>
		<div class="row">
				<iframe src="<?php echo $contact[6]['field_value'];?>" frameborder="0" style="border:0; width: 100%; height: 350px !important" allowfullscreen >
					
				</iframe><br />
		</div>
			<div class="row">
				<div id="content" class="col-sm-12">

					<div class="info-contact clearfix">
						<div class="col-lg-4 col-sm-4 col-xs-12 info-store">
							<div class="row">
								<div class="name-store">
									<h3><?php echo $contact[5]['field_value'];?></h3>
								</div>
								<address>
									
									<div class="phone form-group">
										<div class="icon">
											<i class="fa fa-phone"></i>
										</div>
										<div class="text"> +91-<?php echo $contact[1]['field_value'];?></div>
									</div>
									<div class="email form-group">
										<div class="icon">
											<i class="fa fa-envelope"></i>
										</div>
										<div class="text"><a href="https://mail.google.com/mail/" target="_blank" style="color: #555555;"><?php echo $contact[2]['field_value'];?></a></div>
									</div>
									<div class="address clearfix form-group">
										<div class="icon">
											<i class="fa fa-home"></i>
										</div>
										<div class="text"><?php echo $contact[5]['field_value'];?></div>
									</div>
									
								</address>
							</div>
						</div> 
						<div class="col-lg-8 col-sm-8 col-xs-12 contact-form">
							<form  method="post" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url();?>/contact/inquery">
								<fieldset>
									<legend>Contact Form</legend>
									<?php if($this->session->flashdata('success'))
									{?>
										<div class="alert alert-success">
 											 <strong>Success!</strong>
 											 <?php echo $this->session->flashdata('success');?>
											</div>
									
									<?php } ?>
								
									<div class="form-group required">
										<label class="col-sm-3 control-label" for="input-name">Your Name</label>
										<div class="col-sm-9">
											<input type="text" name="name" value="" maxlength="50" id="input-name" class="form-control" required>
										</div>
									</div>
									<div class="form-group required">
										<label class="col-sm-3 control-label" for="input-email">E-Mail</label>
										<div class="col-sm-9">
											<input type="email" name="email" value="" maxlength="50" id="input-email" class="form-control" required>
										</div>
									</div>
									<div class="form-group required">
										<label class="col-sm-3 control-label" for="input-enquiry">Enquiry</label>
										<div class="col-sm-9">
											<textarea name="enquiry" rows="3" id="input-enquiry" class="form-control" required></textarea>
										</div>
									</div>
								</fieldset>
								<div class="buttons">
									<div class="pull-right">
										<input class="btn btn-primary" type="submit" value="submit" name="submit">
											
									</div>
								</div>
							</form>
						</div>i
					</div>
				</div>
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