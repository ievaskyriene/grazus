<?php

require __DIR__.'/Barsukas.php';
require __DIR__.'MiskoTevas.php';

$barsukas1 = new Barsukas;
$barsukas2 = new Barsukas;
$barsukas3 = new Barsukas;
$barsukas4 = new Barsukas;

$barsukas1->kojuSkaicius = 4;

echo '<pre>';
var_dump($barsukas1);
var_dump($barsukas2);
var_dump($barsukas3);
var_dump($barsukas4);

$barsukoKailioSpalvosSavybe = 'kailis';

echo $barsukas1 -> $barsukoKailioSpalvosSavybe;
echo $barsukas1 -> kailis;
//echo $barsukas1 -> akiuSkaicius;

$barsukas2 //jeigu kuris nors metodas naudoja ta pati metoda, naudoti galim tokia sintakse
->balsas()->
balsas();

$barsukas2->setAkiuSkaicius(3);

var_dump($barsukas2);