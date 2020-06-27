<?php
session_start();

$data = [
  ['name' => 'Liepa', 'password' => md5('123')]
      
];


//file_put_contents(__DIR__ .'/banker.json', json_encode($data));

//$data = json_decode(file_get_contents(__DIR__ .'/data.json'),1);

//print_r($data);
$URL = 'http://localhost:8080/grazus/Uzdaviniai/bankas/';
