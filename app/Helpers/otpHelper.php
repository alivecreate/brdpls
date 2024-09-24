<?php
use App\Models\User;
use App\Models\City;
use App\Models\Business;
use App\Models\Category;
use App\Models\State;
use Carbon\Carbon;


function sendOTP($var1, $otp, $phone){
   

        $fields = array(
            "sender_id" => "BARDPL",
            "message" => "172265",
            "variables_values" => "{$var1}|{$otp}",
            "route" => "dlt",
            "numbers" => $phone,
        );
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode($fields),
          CURLOPT_HTTPHEADER => array(
            "authorization: sAtFlOcISUrQ6jduxTk1ehBK7iWG5J4pmCDYZNzy2XaPHgfq38Nro35zuDj1QyPfgWbkImp8Eqwt2eVY",
            "accept: */*",
            "cache-control: no-cache",
            "content-type: application/json"
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
            return $err;
          echo "cURL Error #:" . $err;
        } else {
            return $response;
        }
}

function sendForgotPwOTP($var1, $otp, $phone){
  // dd($var1);

  //  $name = "testing manual";
  $fields = array(
      "sender_id" => "BARDPL",
      "message" => "173566",
      "variables_values" => "{$var1}|{$otp}",
      "route" => "dlt",
      "numbers" => $phone,
  );
  
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_SSL_VERIFYHOST => 0,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode($fields),
    CURLOPT_HTTPHEADER => array(
      "authorization: sAtFlOcISUrQ6jduxTk1ehBK7iWG5J4pmCDYZNzy2XaPHgfq38Nro35zuDj1QyPfgWbkImp8Eqwt2eVY",
      "accept: */*",
      "cache-control: no-cache",
      "content-type: application/json"
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  
  curl_close($curl);
  
  if ($err) {
      return $err;
    echo "cURL Error #:" . $err;
  } else {
      return $response;
  }
}
