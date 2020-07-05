<?php


  $curl_handle=curl_init();
  curl_setopt($curl_handle,CURLOPT_URL,'https://api.exchangeratesapi.io/latest?symbols=USD');
  curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
  curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);

  $buffer = curl_exec($curl_handle);

  curl_close($curl_handle);
  if (empty($buffer)){
      print "Nothing returned from url";
  }
  else{
      _dc($buffer = json_decode ($buffer));
      _dc($buffer ->rates->USD);
        
    }
          
    
  


