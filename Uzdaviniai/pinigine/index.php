<?php

require __DIR__.'/Pinigine.php';

$pinigine1 = new Pinigine;


$pinigine1->ideti(5);
$pinigine1->ideti(1,88);
$pinigine1->skaiciuoti();


// $coins = array(200, 100, 50, 20, 10, 5, 2, 1); 
// $m = sizeof($coins); 
// $V = ($pinigine1->metaliniaiPinigai)*100; 
// echo $V;
// echo '<br>';
// echo "Minimum coins required is ";
// print_r($pinigine1 -> monetos($coins, $m, $V)); 