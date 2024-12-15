<?php include("header.php");?>
   <body class="common-home res layout-home1">
      <div id="wrapper" class="wrapper-full banners-effect-7">
         <input type="hidden" class="customer_id" value="1">

<header id="header" class="variantleft type_1" >
  <?php include("topheader.php");?>
<?php include("header-center.php");?>
<?php include("header-bottom.php");?> 
			
	

		<div class="main-container container cwp-0" style="margin-bottom: 130px;"><br>
		<div class="col-md-3">
              <img src="<?php echo base_url()?>img/b1.jpg" alt="left-image" style="margin-bottom:10%;" class="img-hide">
              <img src="<?php echo base_url()?>img/b2.jpg" alt="refer and earn" style="margin-bottom:10%;" class="img-hide">
              <img src="<?php echo base_url()?>img/b3.jpg" alt="shop with us" style="margin-bottom:10%;" class="img-hide">
              <img src="<?php echo base_url()?>img/b1.jpg" alt="complimentary" style="margin-bottom:10%;" class="img-hide">
              <img src="<?php echo base_url()?>img/b2.jpg" alt="Membership Banner" style="margin-bottom:10%;" class="img-hide">
        </div>


			<div class="col-md-9">
				<div class="product-filter filters-panel mobile-panel">

              <ul class="breadcrumb" style="margin:0;text-transform: capitalize;">

                  <li><a href="<?php echo base_url()?>">Home</a></li>

                    <li><a href="#">Offers</a></li>
               
              </ul> 
	         </div>

<?php foreach($brandoffer as $brands)
                    { $pic=explode(",",$brands['product_pic']);?>
       
<div class="col-md-4 col-xs-6">
  <div class="border-box mobile-top-space-box">
    <div class="content">
      <div class="content-overlay" onclick="window.location = '"></div>
        <img class="content-image" src="<?php echo base_url()?>/products/<?php echo $pic[0]?>" height="180">

        <a href="<?php echo site_url('product/products?id='.$brands['sub_cate'])?>" class="content-details fadeIn-top">
          <p style="padding-top: 15px;margin: 0px;">
            <h3> <?php echo $brands['product_name']?></h3>
            <?php echo $brands['description'];?>                                 	
        </p>
<hr class="offering-img-line">
<p class="t-prods"> <?php echo $brands['total'];?></p>
</a>
</div>
<p class="text-center offering-heading "><?php echo $brands['product_name']?></p>
</div>
</div>
<?php } ?>


           
           </div>


	         	</div>




	         	
	</div>
		<!--Content End-->
</div>
</div>
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