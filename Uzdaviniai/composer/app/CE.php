<?php
namespace Main;

Class CE{

    public static function excange(){
        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, ("http://data.fixer.io/api/latest?access_key=9ea702abb102fd3e8635dc263d8dac5d"));
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
        $buffer = curl_exec($curl_handle); 
        curl_close($curl_handle);
        $result = json_decode($buffer, 1);
        $USDrate = $result['rates']['USD'];
        return $USDrate;
    }

    //     if (!file_exists('/opt/lampp/htdocs/grazus/Uzdaviniai/composer/app/data.json')) {
    //         file_put_contents('/opt/lampp/htdocs/grazus/Uzdaviniai/composer/app/data.json', json_encode([]));
    //     }
    //     $data = json_decode(file_get_contents('/opt/lampp/htdocs/grazus/Uzdaviniai/composer/app/data.json'), 1);

    //     _dc($data);
    //     if ($data['time'] + 60 < time()) {
    //     unset($data['time']);
    //     }
    
    //     if (isset($data)) {
    //         $_SESSION['USDrate'] = $data['USDrate'];
    //         $_SESSION['cache'] = 'YES';    
    //     }

    //     $curl_handle = curl_init();
    //     curl_setopt($curl_handle,CURLOPT_URL,'https://api.exchangeratesapi.io/latest?symbols=USD');
    //     curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
    //     curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);

    //     $buffer = curl_exec($curl_handle);
    //     _dc ($buffer);
    //     curl_close($curl_handle);
    //         if (empty($buffer)) {
    //             echo "nothing returned from buffer";
    //         }else{
    //             $buffer = json_decode ($buffer);
    //             $data = ['USDrate'=>$buffer ->rates->USD,'time'=>time()];
    //             file_put_contents('/opt/lampp/htdocs/grazus/Uzdaviniai/composer/app/data.json', json_encode($data));
    //             $_SESSION['USDrate'] = $buffer ->rates->USD;
    //             $_SESSION['cache'] = 'No';
    //         }
    //     echo $_SESSION['cache'];
        
    // return $_SESSION['USDrate'];
    // }

    
}   