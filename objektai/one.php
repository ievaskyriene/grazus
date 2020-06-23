<?php

require __DIR__.'/Singelton.php';

$cart1 = Singleton::make();
//$cart2 = Singleton::make();
$cart2 = unserialize(serialize($cart1));  // is objekto i stringa ir atgal, taip galim  apeiti draudimus sukruti antra objekta. Taip daznai saugomi duomenys duomenu bazeje


var_dump($cart1);
var_dump($cart2);

echo '<br>';
echo Singleton::MESKENAS;