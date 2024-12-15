<?php 

      $reqUrl = "http://localhost/Ecommerce/login/Home/verify";
     // $request    =  '{"otp":"' . $_POST['otp'] . '"}';
      $request    =  array("otp"=> $_POST['otp']);
      $curl = curl_init();
      
      curl_setopt_array($curl, [
         CURLOPT_PORT => "80",
         CURLOPT_URL => $reqUrl,
         CURLOPT_RETURNTRANSFER => false,
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
         
         curl_close($curl);
         
         if ($err) {
            return "cURL Error #:" . $err;
         } else {
            // header("Content-Type:application/json");
            $result = json_decode($response, true);
            print_r($response);exit;
            return $result;
            
         }
?>