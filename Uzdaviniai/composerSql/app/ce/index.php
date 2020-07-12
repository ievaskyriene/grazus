<?php

session_start();
if (!file_exists('data.json')) {
    file_put_contents('data.json', json_encode([]));
}
$data = json_decode(file_get_contents('data.json'), 1);

    _dc($data['time']);
    if ($data['time'] + 60 < time()) {
      unset($data['time']);
    }
 
if (isset($data)) {
    $_SESSION['USDrate'] = $data['USDrate'];
    $_SESSION['cache'] = 'YES';   
}

$curl_handle = curl_init();
curl_setopt($curl_handle,CURLOPT_URL,'https://api.exchangeratesapi.io/latest?symbols=USD');
curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);

$buffer = curl_exec($curl_handle);

curl_close($curl_handle);
$USDrate = 0;

if (empty($buffer)) {
    throw new Exception;
}
else{
    $buffer = json_decode ($buffer);
  
    $data= ['USDrate'=>$buffer ->rates->USD,'time'=>time()];

    file_put_contents('data.json', json_encode($data));
    
    $_SESSION['USDrate'] = $buffer ->rates->USD;
    $_SESSION['cache'] = 'NO';

}
echo  $_SESSION['cache'];



    