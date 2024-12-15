<?php include("header.php");?>
   <body class="common-home res layout-home1">
      <div id="wrapper" class="wrapper-full banners-effect-7">
         <input type="hidden" class="customer_id" value="<?php echo $user['userid']?>">

<header id="header" class="variantleft type_1" >
  <?php include("topheader.php");?>
<?php include("header-center.php");?>
<?php include("header-bottom.php");?> 
<?php
  //$razor_api_key="rzp_test_fav4Dtczn6dmMT";
$razor_api_key="rzp_test_YZ7176rotWoLIe";
//echo "string";
?>
<style>
    .razorpay-payment-button{ 
 background-color: #fdd600; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left: 42%;
 margin-top: 8%;
 margin-bottom: 8%;
  cursor: pointer;
  width:200px; 
  border-radius: 10px; }
</style>
<?php  $amt= $grandtotal*100 ;?> 
 <form action="<?php echo base_url()?>mycart/success" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $razor_api_key;?>" 
    data-amount="<?php echo $amt; ?>" 
    data-id="ordermbw786"
    data-buttontext="Pay with Razorpay"
    data-name="Mobile Battery World"
    data-description="Mobile Battery World"
    data-image=""
    data-prefill.name="<?php echo $user['username'];?>"
    data-prefill.email="<?php echo $user['email'];?>"
    data-theme.color="#fdd600"
    data-prefill.contact="<?php echo $user['mobile'];?>"
></script>

<?php $cartdata=$this->session->userdata('cart_item');
                      $gramdtotal=0;
                       foreach($cartdata as $key=>$item)
                            {?>
  <input type="hidden" custom="Hidden Element" name="productname[]" value="<?php echo $item['item_name']?>">
<input type="hidden" custom="Hidden Element" name="qty[]" value="<?php echo $item['quantity']?>">
<input type="hidden" custom="Hidden Element" name="perproductpirce[]" value="<?php echo $item['price']?>">
<input type="hidden" custom="Hidden Element" name="prodtotalpirce[]" value="<?php echo $item['price']?>">

<?php }?>
 <input type="hidden" custom="Hidden Element" name="qnty" value="<?php echo $item['quantity']?>">
<input type="hidden" custom="Hidden Element" name="grandtotal" value="<?php echo $grandtotal;?>">
<input type="hidden" custom="Hidden Element" name="address" value="<?php echo $address;?>">
<input type="hidden" custom="Hidden Element" name="methodd" value="online">

</form>


<?php include("newsletter.php");?>
<?php include("footer.php");?>
<?php include("everythingelse.php");?>
