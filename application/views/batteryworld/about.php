<?php include("header.php");?>
   <body class="common-home res layout-home1">
      <div id="wrapper" class="wrapper-full banners-effect-7">
         <input type="hidden" class="customer_id" value="1">

<header id="header" class="variantleft type_1" >
  <?php include("topheader.php");?>
<?php include("header-center.php");?>
<?php include("header-bottom.php");?>
    <!--Content Starts-->
    <div class="" id="banner-img">
     
      <img src="<?php echo base_url()?>banner/<?php echo $banner[0]['bannerpic']?>" alt="About Us banner" style="height: 350px">
    </div>

  

    <div class="container">
      <div class="row">

          <div class="col-md-12">
            <div class="heading-text">
               <h2> Meet our founders</h2>
              </div>
              <div class="lead">
                <?php echo $content[2]['field_value'];?>
               
                 <?php echo $content[3]['field_value'];?>
              </div>
          </div>
        
      </div>
    </div>

    <div class="chairman">
      <div class="container" id="section-img-upr">
        <div class="row">
          <!-- <div class="col-md-5 visible-xs">
              <img src="https://healthymaster.in/img/about/portrait.png" alt="Tarun Agrawal (Chairman)" class="section-img">
            </div> -->
            <div class="col-md-7">
              <p><b></b></p>
              
              <div class="lead">
              
              </div>
            </div>          
            <div class="col-md-5 visible-lg">
             <!--  <img src="https://healthymaster.in/img/about/portrait.png" class="section-img" alt="Tarun Agrawal (Chairman)"> -->
            </div>
          
        </div>
      </div>
    </div>  



    <style type="text/css">
      @media only screen and (max-width: 767px){
      .section-img {
          padding-top: 10em;
          width: 21.8em;
      }
    </style>

    



 
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