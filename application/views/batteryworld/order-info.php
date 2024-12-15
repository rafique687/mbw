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
      <li><a href="<?php echo base_url()?>"><i class="fa fa-home"></i></a></li>
      <li><a href="#">Order Infomation</a></li>
    </ul>
    <?php //echo "<pre>"; print_r($orderdetails);?>
    <div class="row">
      <!--Middle Part Start-->
      <div id="content" class="col-sm-12">
        <h2 class="title">Order Information</h2>

        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <td colspan="2" class="text-left">Order Details</td>
            </tr>
          </thead>
          <tbody> 
            <tr>
              <td style="width: 50%;" class="text-left"> <b>Order ID:</b> #ORD-<?php echo $orderplacedetails['orderid'];?>              <br>
                <b>Order Date:</b>  <?php echo $orderplacedetails['place_date'];?>                   <br>
                <b>Order Status:</b> <?php if($orderplacedetails['delevery_status']==0)
                                { echo "Received";}
                                          else
                                            { echo $orderplacedetails['status'];}
                                        ?>            </td>
              <td style="width: 50%;" class="text-left"> <b>Payment Method:</b> 
                <?php echo $orderplacedetails['paid_method'];?><br>
               <!--  <b>Delivery By:</b>  -->            
              </td>
              
            </tr>
          </tbody>
        </table>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <td style="width: 50%; vertical-align: top;" class="text-left">Address Details</td> 
            </tr>
          </thead>
          <tbody> 
            <tr><td class="text-left"><b>Name:</b><?php echo $orderplacedetails['name']?></td></tr>
            <tr><td class="text-left"><b>Mobile:</b> <?php echo $orderplacedetails['mobile']?></td></tr>
            <tr><td class="text-left"><b>Address:</b><?php echo $orderplacedetails['address']?></td></tr>
          </tbody>
        </table>
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <!-- <td class="text-center">Image</td> --> 
                <td class="text-left">Product Name</td> 
                <td class="text-right">Quantity</td>
                <td class="text-right">Rate</td>
                <td class="text-right">Total</td> 
                 <!--<td></td>  -->             
              </tr>
            </thead>
            <tbody>
              <?php 
             // echo "<pre>"; print_r($orderdetails);exit;
              $grandtotal=0;
              foreach($orderdetails as $ord){?>
                <tr>
                <!-- <td class="text-center"><img width="40px" src="https://dswexrz9xr8ac.cloudfront.net/item_images/24/5f180964ea87a.jpg"></td> --> 
                <td class="text-left"><?php echo $ord['prod_name']?></td> 
                <td class="text-right"><?php echo $ord['prod_qty']?></td>  
                <td class="text-right">₹ <?php echo $ord['unit_price']?></td>
                <td class="text-right">₹<?php echo $ord['total_price']?></td> 
                
              </tr>
            <?php 
           $grandtotal += $ord['total_price']; } ?>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="3"></td>
                <td class="text-right"><b>Sub-Total</b>
                </td>
                <td class="text-right">₹<?php echo $grandtotal; ?></td>  
              </tr>
              <tr>
                <td colspan="3"></td>
                <td class="text-right"><b>Delivery Charges</b>
                </td>
                <td class="text-right">₹0</td> 
              </tr>  
              <tr>
                <td colspan="3"></td>
                <td class="text-right"><b>Discount</b>
                </td>
                <td class="text-right">₹0</td> 
              </tr>
              <tr>
                <td colspan="3"></td>
                <td class="text-right"><b>Membership Discount</b>
                </td>
                <td class="text-right">₹0</td> 
              </tr>
              <tr>
                <td colspan="3"></td>
                <td class="text-right"><b>Wallet</b>
                </td>
                <td class="text-right">₹0</td> 
              </tr>
              <tr>
                <td colspan="3"></td>
                <td class="text-right"><b>Grand Total</b>
                </td>
                <td class="text-right">₹<?php echo $grandtotal; ?>/-</td> 
              </tr>
            </tfoot>
          </table>
        </div> 
      </div>
      <!--Middle Part End-->
    </div>
    <br>
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