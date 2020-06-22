<?php
//Pirmas uzdavinys
echo "Pirmas uzdavinys";
echo '<br>';
$name = "Ieva";
$surname = "Skyriene";
$yearOfBirth = 1976;
$currentYear = 2020;

$age = intval ($currentYear - $yearOfBirth);
echo "As esu $name $surname. Man yra $age metai.";
echo '<br>';

//Antras uzdavinys 
echo "Antras uzdavinys";
echo '<br>';

$pirmas = rand(0,4);
$antras = rand(0,4);
$result = 0;
if($pirmas == 0 || $antras == 0){
    echo $result = "Dalyba is nulio negalima";
    echo '<br>';
}
if($pirmas >= $antras && $antras != 0){
    $result = $pirmas / $antras;
    echo '<br>';
    $formatedResult = number_format($result, 2, ',', ' ');
    echo "$formatedResult";
    echo '<br>';
}
else  if ($pirmas < $antras && $pirmas != 0){
    $result = $antras / $pirmas;
    $formatedResult = number_format($result, 2, ',', ' ');
    echo '<br>';
    echo "$formatedResult";
    echo '<br>';
}

//Trecias uzdavinys 
echo '<br>';
echo "Trecias uzdavinys";
echo '<br>';

$first = rand(0,25);
//echo $first;
//echo '<br>';
$second = rand(0,25);
//echo $second;
////echo '<br>';
$third = rand(0,25);
//echo $third;
//echo '<br>';

if ($first >= $second && $first < $third || $first < $second && $first >= $third){
    echo $first;
}
else if ($second >= $first && $second < $third || $second == $third){
    echo $second;
}
else if ($second < $first && $second > $third || $second == $third){
    echo $second;
}
else if ($third >= $first && $third < $second || $third < $first && $third >= $second){
    echo $third;
}

echo '<br>';

//ketvirtas uzdavinys
echo '<br>';
echo "Ketvirtas uzdavinys";
echo '<br>';

$a = rand(1,10);
$b = rand(1,10);
$c = rand(1,10);

if(($a+$b)>$c && ($b+$c)>$a && ($c+$a)>$b){
   echo "Trikampį sudaryti galima";
}
else  echo "Trikampio sudaryti negalima";

//penktas uzdavinys. 
echo '<br>';
echo '<br>';
echo "Penktas uzdavinys";
echo '<br>';

echo '<br>';
$d = rand(0,2);
echo $d;
echo '<br>';
$e = rand(0,2);
echo $e;
echo '<br>';
$f = rand(0,2);
echo $f;
echo '<br>';
$g = rand(0,2);
echo $g;
echo '<br>';

$zeroCount = 0;
$oneCount = 0;
$twoCount = 0;

/*if ($d == 0 ){
    $zeroCount++;
}

if ($e == 0 ){
    $zeroCount++;
}

if ($f == 0 ){
    $zeroCount++;
}

if ($d == 1 ){
    $oneCount++;
}
if ($e == 1 ){
    $oneCount++;
}
if ($f == 1 ){
    $oneCount++;
}*/

if ($d == 2){
    $twoCount++;
}
if ( $e == 2 ){
    $twoCount++;
}
if ( $f == 2 ){
    $twoCount++;
}
if ( $g == 2 ){
    $twoCount++;
}

$sum = $d + $e + $f + $g;

$oneCount = $sum - $twoCount*2;
$zeroCount = 4 - $twoCount - $oneCount;

print_r(" nulių yra ".$zeroCount.".");
echo '<br>';
print_r("vienetu yra ".$oneCount.".");
echo '<br>';
print_r("dvejetu yra ".$twoCount.".");
echo '<br>';

//sestas
echo '<br>';
echo '<br>';
echo "Sestas uzdavinys";
echo '<br>';

$number = rand(1,6);
echo "<h".$number.">".$number."</h".$number.">";

//septintas
echo '<br>';
echo '<br>';
echo "Septintas uzdavinys";
echo '<br>';

echo '<br>';
$color = rand(-10,10);

echo '<br>';

if ($color < 0){
    print_r("<p style = 'color:green;'>".$color."</p");
}
else if ($color == 0){
    print_r("<p style = 'color:red;'>".$color."</p");
}
else if ($color > 0){
print_r("<p style = 'color:#0000FF;'> ".$color."</p");
}

//astuntas uzdavinys
echo '<pre>';
echo '<br>';
echo '<br>';
echo "Astuntas uzdavinys";
echo '<br>';
echo '<br>';
$candleQuantity = rand(5,3000);
echo '<br>';
//print_r($candleQuantity);
echo '<br>';

$totalCandlePrice = 0;
if ($candleQuantity <=1000){
    $totalCandlePrice = $candleQuantity;
}
if ($candleQuantity > 1000 && $candleQuantity <= 2000){
    $totalCandlePrice = $candleQuantity - $candleQuantity*0.03;
}
if ($candleQuantity > 2000){
    $totalCandlePrice = $candleQuantity - $candleQuantity*0.04;
}

echo '<pre>';
echo "Perkam ".$candleQuantity." zvakiu. Zvakes kainuoja ".$totalCandlePrice.".";
echo '<pre>';

//devintas uzdavinys
echo '<br>';
$g = rand(0,100);
//print_r($g);
//echo '<br>';
$h = rand(0,100);
///print_r($h);

$j = rand(0,100);
//print_r($j);
//echo '<br>';
$arithmeticMean = ($g + $h + $j)/3;
if($g <10 || $g> 90) {
    $arithmeticMean2 = ($h + $j)/2;
}
if($h <10 || $h> 90) {
    $arithmeticMean2 = ($g + $j)/2;
}
if($j <10 || $j> 90) {
    $arithmeticMean2 = ($g + $h)/2;
}
else $arithmeticMean2 = ($g + $h + $j)/3;

echo "9 uzdavinys";
echo '<pre>';
echo intval($arithmeticMean);
echo '<pre>';
echo intval($arithmeticMean2);
echo '<pre>';

//desimtas uzdavinys
echo "10 uzdavinys";
echo '<pre>';

$val = rand(0,23);
//print_r($val);
echo '<pre>';
$min = rand(0,59);
//print_r($min);
echo '<pre>';
$sek = rand(0,59);
//print_r($sek);
echo '<pre>';

$sekPapildomos = rand(0,300);
print_r($sekPapildomos);
echo '<pre>';

print_r($val.":".$min.":".$sek);
echo '<pre>';
if($sekPapildomos>60){
$minPo = $min + intval($sekPapildomos/60);
$sekPo = $sek + $sekPapildomos%60;
}
else {$sekPo = $sek + $sekPapildomos;
$minPo = $min;
}

print_r($val.":".$minPo.":".$sekPo);
echo '<pre>';

//vienuoliktas uzdavinys
echo "11 uzdavinys";
echo '<pre>';

$k = rand(1000,9999);
print_r($k);
echo '<pre>';
$l = rand(1000,9999);
print_r($l);
echo '<pre>';
$m = rand(1000,9999);
print_r($m);
echo '<pre>';
$n = rand(1000,9999);
print_r($n);
echo '<pre>';
$o = rand(1000,9999);
print_r($o);
echo '<pre>';
$p = rand(1000,9999);
print_r($p);
echo '<pre>';
print_r("--------");
echo '<pre>';

$c1 = ($k <=> $l) + ($k <=> $m) + ($k <=> $n) + ($k <=> $o) +($k <=> $p);
//print_r($c1);
echo '<pre>';

$c2 = ($l <=> $k) + ($l <=> $m) + ($l <=> $n) + ($l <=> $o) + ($l <=> $p);
////print_r($c2);
echo '<pre>';
$c3 = ($m <=> $k) + ($m <=> $l) + ($m <=> $n) + ($m <=> $o) + ($m <=> $p);
//////print_r($c3);
echo '<pre>';
$c4 = ($n <=> $k) + ($n <=> $l) + ($n <=> $m) + ($n <=> $o) + ($n <=> $p);
//print_r($c4);
echo '<pre>';
$c5 = ($o <=> $k) + ($o <=> $l) + ($o <=> $n) + ($o <=> $m) + ($o <=> $p);
//print_r($c5);
echo '<pre>';
$c6 = ($p <=> $k) + ($p <=> $l) + ($p <=> $n) + ($p <=> $o) + ($p <=> $m);
////print_r($c6);
echo '<pre>';

if($c1==-5){
    $first =$k;
}
else if ($c2==-5){
    $first =$l;
}
else if ($c3==-5){
    $first =$m;
}
else if ($c4==-5){
    $first =$n;
}
else if ($c5==-5){
    $first =$o;
}
else if ($c6==-5){
    $first =$p;
}
//print_r($first);
echo '<pre>';

if($c1==-3){
    $second =$k;
}
else if ($c2==-3){
    $second =$l;
}
else if ($c3==-3){
    $second =$m;
}
else if ($c4==-3){
    $second =$n;
}
else if ($c5==-3){
    $second =$o;
}
else if ($c6==-3){
    $second =$p;
}
//print_r($second);
echo '<pre>';

if($c1==-1){
    $third =$k;
}
else if ($c2==-1){
    $third =$l;
}
else if ($c3==-1){
    $third =$m;
}
else if ($c4==-1){
    $third =$n;
}
else if ($c5==-1){
    $third =$o;
}
else if ($c6==-1){
    $third =$p;
}
//print_r($third);
echo '<pre>';

if($c1==1){
    $fourth =$k;
}
else if ($c2==1){
    $fourth =$l;
}
else if ($c3==1){
    $fourth =$m;
}
else if ($c4==1){
    $fourth =$n;
}
else if ($c5==1){
    $fourth =$o;
}
else if ($c6==1){
    $fourth =$p;
}
//print_r($fourth);
echo '<pre>';

if($c1==3){
    $fifth =$k;
}
else if ($c2==3){
    $fifth =$l;
}
else if ($c3==3){
    $fifth =$m;
}
else if ($c4==3){
    $fifth =$n;
}
else if ($c5==3){
    $fifth =$o;
}
else if ($c6==3){
    $fifth =$p;
}
//print_r($fifth);
echo '<pre>';

if($c1==5){
    $sixth =$k;
}
else if ($c2==5){
    $sixth =$l;
}
else if ($c3==5){
    $sixth =$m;
}
else if ($c4==5){
    $sixth =$n;
}
else if ($c5==5){
    $sixth =$o;
}
else if ($c6==5){
    $sixth =$p;
}
//print_r($sixth);
echo '<pre>';

print_r($first." ".$second." ".$third." ".$fourth." ".$fifth." ".$sixth.".");

echo '<pre>';
