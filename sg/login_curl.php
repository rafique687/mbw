<?php
//echo "<pre>"; print_r($_POST);exit;
$params=['otp'=>$_POST['otp']);
$defaults = array(
CURLOPT_URL => 'http://localhost/Ecommerce/login/Home/verify',
CURLOPT_POST => true,
CURLOPT_POSTFIELDS => $params,
);
$ch = curl_init();
curl_setopt_array($ch, ($options + $defaults));*/
?>