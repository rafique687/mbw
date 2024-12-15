<?php include("header.php");?>
   <body class="common-home res layout-home1">
      <div id="wrapper" class="wrapper-full banners-effect-7">
         <input type="hidden" class="customer_id" value="1">

<header id="header" class="variantleft type_1" >
  <?php include("topheader.php");?>
<?php include("header-center.php");?>
<?php include("header-bottom.php");?>  
      
        <!-- Block slider  -->
        <section class="so-slideshow ">
          <div id="so-slideshow">
            <div class="module slideshow no-margin">
              <div class="yt-content-slider yt-content-slider--arrow1"  data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">  
                                  <div class="yt-content-slide">
                    <img src="http://dswexrz9xr8ac.cloudfront.net/banners/60519bff0dbbd.jpg"  class="img-responsive">
                  </div>
                                  <div class="yt-content-slide">
                    <img src="http://dswexrz9xr8ac.cloudfront.net/banners/6052f3fba6e5d.jpg"  class="img-responsive">
                  </div>
                              </div>
              <div class="loadeding"></div>
            </div>
          </div> 
        </section>
         <!-- Block slider  -->
    
    
    <!--Content Start  -->
    <div class="main-container container" style="margin-top:30px;">   
      <div class="row">

        <!--Left Filter -->
        <aside class="col-sm-4 col-md-3" id="column-left">
		<!-- <div class="modcontent clearfix">
							<div class="">
								<div style="margin-bottom: 49px;">
									<a href="#"><img src="img/banner/1.jpg" alt="left-image"></a>
								</div>
							</div>						
						</div>
						<div class="modcontent clearfix">
							<div class="">
								<div>
									<a href="#"><img src="img/banner/3.jpg" alt="left-image"></a>
								</div>
							</div>						
						</div> -->

            <div>
              <div class="modcontent clearfix">
                              <img src="http://dswexrz9xr8ac.cloudfront.net/banners/60f2bef82ece2.jpg" style="margin-bottom:10%;" alt="left-image" class="img-hide">
                              <img src="http://dswexrz9xr8ac.cloudfront.net/banners/616118a74db20.jpg" style="margin-bottom:10%;" alt="left-image" class="img-hide">
                          </div>
            <!-- <div class="modcontent clearfix">
                            <img src="http://dswexrz9xr8ac.cloudfront.net/banners/616118a74db20.jpg" alt="left-image" class="img-hide">
                        </div> -->
            </div>

        </aside>
        <!--Left Filter -->
        
      
        <!--Middle Part Start-->
        <div id="content" class="col-md-9 col-sm-8">
          <div class="products-category">
            
            <!-- Sort Filter -->
            <div class="product-filter filters-panel">
              <div class="row">
                            <div class="breadcrumb li1 " style="margin:0; margin-left:15px;">
                                  <ul class="breadcrumb li1 harrow" style="margin:0;">
                                      <li><a href="index.php">Home</a></li>
                                      <li><a href="offers.php">Offers</a></li>
									  <li><a href="memberships.php">Membership</a></li>
                                  </ul> 
                </div> 
              </div>
            </div>
            <!-- Sort Filter -->

            <!--changed listings-->
            <div class="products-list row grid " id="ItemData">

            </div>
            <div id="loadingShow" widh="100%" align="center"></div>       
              <!--// End Changed listings-->  
                
          </div>
        </div>
      </div>
      <!--Middle Part End-->
    </div>
    <!-- Content End -->  
    <input type="hidden" id="page_no" value="1">
  </div> 
<div id="beforeload" class="hidden" align="center" width="100%">
  <img src="img/loading.gif" style="width:10%">
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