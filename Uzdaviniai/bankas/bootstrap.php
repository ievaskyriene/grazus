<?php
session_start();

$data = [
  ['name' => 'Petras', 'surname' => 'Petraitis', 'ID' => '38610290515', 'IBAN' => 'LT107300020405040601', 'Lesos' => 0],
      
];


//file_put_contents(__DIR__ .'/data.json', json_encode($data));

//$data = json_decode(file_get_contents(__DIR__ .'/data.json'),1);

//print_r($data);
$URL = 'http://localhost:8080/grazus/Uzdaviniai/bankas/';
