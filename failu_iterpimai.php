<?php

echo 'Labas, as esu failas I.php<br>';
echo __DIR__ . '<br>'; // taip uzrasomas pilnas kelias ir taip rasyti geriau visose programavimo kalbose
//require __DIR__.'i2.php';
include_once 'i2.php';
include_once 'i2.php';
include_once 'i2.php';

//dar gali buti ir require
//reliatyvaus kelio uzrasymas yra bloga praktika

echo 'Viso gero, as esu failas i2.php<br>';

//funkcija get_contents skaito ir stream'us;

//$homepage = file_get_contents('http://www.vz.lt/');
//echo $homepage;

$file = __DIR__ . '/people.txt';
$current = file_get_contents($file);
$current .= "John\n";

file_put_contents($file, $current);


// json bet kokia duomenu struktura, uzrasyta stringu. To reikia tam, kad siusti duomenis stringu, o paskui atvesti juos atgal i ka reikia - i stringa ir t.t. 
// json netinka, kaireikia uzkoduoti ka nors sudetingo.