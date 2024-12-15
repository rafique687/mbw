<?php  //session_start();
include("header.php");
if($_POST['methodd']=="cod")
{
   //echo "<pre>"; print_r($_POST);exit;

     $date=date("yy-m-d");
      $user=$_SESSION['userid'];
      //$reqUrl = "http://localhost/Ecommerce/login/Home/place_order";
      $reqUrl = $mydata['baseurl']."Home/place_order";
     // $request    =  '{"otp":"' . $_POST['otp'] . '"}';
      $request    =  array("customer_id" => $user,
                            "total_item" => $_POST['totalitem'],
                            "grand_total"=> $_POST['grandtotal'],
                            "place_date" => $date,
                            "paid_method" => $_POST['methodd'],
                            "address"=>$_POST['address']
                          );
         $curl = curl_init();
         curl_setopt_array($curl, [
         CURLOPT_PORT => "80",
         CURLOPT_URL => $reqUrl,
         CURLOPT_RETURNTRANSFER => 1,
         CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "POST", // OR GET
         CURLOPT_POSTFIELDS => $request,
         //CURLOPT_HTTPHEADER => [],
         ]);
         
         $response = curl_exec($curl);
         $err = curl_error($curl);
        // print_r($response);exit;
         curl_close($curl);
         
         if ($err) {
            return "cURL Error #:" . $err;
         } else {
           
            $result = json_decode($response, true);
           if($result)
           {
        $prodUrl = $mydata['baseurl']."Home/place_product";
               // echo "<pre>"; print_r($_POST);exit;
                foreach ($_POST['productname'] as $key => $value) 
                {
                    $order = array("prod_name" =>$_POST['productname'][$key] ,
                                   "prod_qty"  =>$_POST['qty'][$key] ,
                                   "fnorder_id"=>$result,
                                   "unit_price"=>$_POST['perproductpirce'][$key],
                                   "total_price"=>$_POST['prodtotalpirce'][$key],
                                   "ord_date"   =>$date
                               );
                 //echo "<pre>"; print_r($order);exit;

         $curl = curl_init();
         curl_setopt_array($curl, [
         CURLOPT_PORT => "80",
         CURLOPT_URL => $prodUrl,
         CURLOPT_RETURNTRANSFER => false,
         CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "POST", // OR GET
         CURLOPT_POSTFIELDS => $order,
         //CURLOPT_HTTPHEADER => [],
         ]);
         
         $responsse = curl_exec($curl);
         $err = curl_error($curl);
         
         curl_close($curl);
         
         if ($err) {
            return "cURL Error #:" . $err;
         } else {
            // header("Content-Type:application/json");
            $resultt = json_decode($responsse, true);
            print_r($resultt);
           ///($response);exit;
            if($resultt)
            {
                echo "<script>window.location='destoyedsession.php'</script>";
            }
            
        }

    }
    return $resultt;

            }
            
 
}
}
else
{
include("config.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>SG Maart Pay</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <form action="purchase" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $razor_api_key;?>" 
    data-amount="5000" 
    data-order_id="order_CgmcjRh9ti2lP7"
    data-buttontext="Pay with Razorpay"
    data-name="Demo"
    data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami"
    data-image="https://example.com/your_logo.jpg"
    data-prefill.name="Rafique"
    data-prefill.email="khan.arbani@gmail.com"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

</body>
</html>
<?php } ?>