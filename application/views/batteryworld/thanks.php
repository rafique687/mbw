<?php include("header.php");?>
   <body class="common-home res layout-home1">
      <div id="wrapper" class="wrapper-full banners-effect-7">
         <input type="hidden" class="customer_id" value="<?php echo $user['userid']?>">

<header id="header" class="variantleft type_1" >
  <?php include("topheader.php");?>
<?php include("header-center.php");?>
<?php include("header-bottom.php");?>
		<div class="thankyou-page">
		<div class="container-fluid">
			<div class="row" align="center" style="margin-top: -10em;">
				<div class="col-md-12">
					<img src="https://healthymaster.in/thankyou_img/tick.png" class="tick img-responsive" style="height:300px !important; width: 300px !important;">

				</div>

				<!--<div class="col-md-12">
					<img src="https://healthymaster.in/thankyou_img/order-successful.png" class="order-successful img-responsive">

				</div>-->

				<div class="col-md-12">
					<img src="https://healthymaster.in/thankyou_img/thank-you.png" class="thank-you img-responsive" style="height:100px !important; width: 500px;">

				</div>

				<div class="col-md-12">
					<p class="p-text text-p">We have received your order on Mobile Battery World. It will be delivered soon.</p>
										<!-- <img src="https://healthymaster.in/thankyou_img/conent.png" class="content img-responsive"> -->
									</div>

					<div class="col-md-12">
					<a href="<?php echo base_url()?>"><img src="https://healthymaster.in/thankyou_img/continue shoping.png" class="continue-shoping-img img-responsive" style="height:100px !important;"></a>

				</div>
			</div>
		</div>
	</div>

</body>
</html>

<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	var time = new Date().getTime();
		 $(document.body).bind('mousemove keypress', function(e) {
			 time = new Date().getTime();
		 });
		function refresh() {
			 if(new Date().getTime() - time >= 5000){ 
				 // window.location.href = "https://healthymaster.in";
				 
			 } else {
				 setTimeout(refresh, 1000);
			}
		}

		setTimeout(refresh, 1000);
});
</script>


<!--thankyou -->
<script>(function(){var colombiaPixelURL = 'https://ade.clmbtech.com/cde/eventTracking.htm?pixelId=7828&_w=1&rd='+new Date().getTime();(new Image()).src = colombiaPixelURL;})();</script><noscript><img height='1' width='1' style='display:none' src='https://ade.clmbtech.com/cde/eventTracking.htm?pixelId=7828&_w=1'/></noscript>

