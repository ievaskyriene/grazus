<?php

//pirmas uzdavinys
echo "Pirmas uzdavinys";
$numberArr = [];
for($i = 0; $i < 30; $i++){
    $n = rand(5,25);
    array_push($numberArr, $n);
}
print_r($numberArr);
echo "<br>";

//antras uzdavinyhs
echo "Antras uzdavinys";
echo "<br>";

$count = 0;
foreach($numberArr as $n){
    if ($n>10){
        $count++;
    }
} 
echo "a) Reiksmiu, didesniu uz 100, yra $count.";
echo "<br>";
$maxValue = 0;
foreach($numberArr as $n){
    if ($n>$maxValue){
        $maxValue = $n;
    }
}
echo "b) Didziausia reiksme yra $maxValue.";

echo "<br>";
$sum = 0;
foreach($numberArr as $n){
   $sum += $n;
}
echo "c) Reiksmiu suma yra $sum.";
echo "<br>";

$numberArrNew = [];
foreach($numberArr as $key => $n){
    $m = $n - $key;
    array_push($numberArrNew, $m);
}
echo "d) ";
print_r($numberArrNew);
echo "<br>";

for($i = 0; $i < 10; $i++){
    $n = rand(5,25);
    array_push($numberArrNew, $n);
 }
 echo "e) ";
 print_r($numberArrNew);
 echo "<br>";

 $oddArray = [];
 $evenArray = [];
 foreach ($numberArrNew as $key => $value){
    if($key%2 == 0){
        array_push($evenArray, $value);
    }
    else { array_push($oddArray, $value);};
 }
 echo "f) ";
 print_r($evenArray);
 echo "<br>";
 print_r($oddArray);
 echo "<br>";

foreach($evenArray as $key => $value){
    if($value > 15){
        $evenArray[$key] = 0;
    }
}
 echo "g) ";
 print_r($evenArray);
 echo "<br>";

foreach($evenArray as $key => $value){
    if($value > 10){
        echo "h) ";
        echo $key;
    break;
    }
}

foreach($evenArray as $key => $value){
    if($key%2 == 0){
        unset($evenArray[$key]);
    }
}
echo "<br>";
echo "i) ";
print_r($evenArray);
echo "<br>";

 //trecias uzdavinyhs
echo "Trecias uzdavinys";
echo "<br>";

$letters = [];
for($i = 0; $i < 200; $i++){
   $n = chr(rand(65, 68));
   array_push($letters, $n);
}
print_r($letters);
$countA = 0;
$countB = 0;
$countC = 0;
$countD = 0;

foreach($letters as $l){
    if ($l == 'A'){
        $countA++;
    }
    if ($l == 'B'){
        $countB++;
    }
    if ($l == 'C'){
        $countC++;
    }
    $countD = 200 - $countA - $countB - $countC;
}
echo "<br>";
echo "Raidziu A yra $countA, raidziu 'B yra $countB, raidziu 'C' yra $countC, raidziu 'D' yra $countD.";
echo "<br>";
echo "<br>";

echo "Ketvirtas uzdavinys";
sort($letters);
echo "<br>";
print_r($letters);

echo "<br>";
echo "<br>";
echo "Penktas uzdavinys";
echo "<br>";

$letters1 = [];
$letters2 = [];
$letters3 = [];
$lettersMerged = [];
for($i = 0; $i < 200; $i++){
   $n = chr(rand(65, 68));
   $m = chr(rand(65, 68));
   $o = chr(rand(65, 68));
   array_push($letters1, $n);
   array_push($letters2, $m);
   array_push($letters3, $o);
   $lettersMerged[$i] = $letters1[$i].$letters2[$i].$letters3[$i];
}

print_r($lettersMerged);
echo "<br>";
$flipped = array_flip($lettersMerged);
echo "Unikalios reiksmes yra ";
print_r(count($flipped));
echo "<br>";

echo "<br>";
echo "Sestas uzdavinys";
echo "<br>";

$numbers2 = [];
while(count($numbers2) < 100){
    $value = rand(100, 999);
    if(!in_array($value, $numbers2)){
        $numbers2[] = $value;
    }
}
print_r($numbers2);
echo "<br>";
$numbers4 = [];
while(count($numbers4) < 100){
    $value = rand(100, 999);
    if(!in_array($value, $numbers4)){
        $numbers4[] = $value;
    }
}
print_r($numbers4);

echo "<br>";
echo "Septintas uzdavinys";
echo "<br>";

$numbers5 = [];
foreach($numbers2 as $key2 => $n2){
    foreach($numbers4 as $key4 => $n4){
        if(!in_array($numbers2[$key2], $numbers4)){
            $numbers5[] = $numbers2[$key2];
        }
    break;
    }
}
print_r($numbers5);
echo "<br>";

echo "<br>";
echo "Astuntas uzdavinys";
echo "<br>";
$numbers6 = [];
foreach($numbers2 as $key2 => $n2){
    foreach($numbers4 as $key4 => $n4){
        if(in_array($numbers2[$key2], $numbers4)){
            $numbers6[] = $numbers2[$key2];
        }
    break;
    }
}
print_r($numbers6);
echo "<br>";

// 9 uzdavinys

echo "<br>";
echo "Devintas uzdavinys";
echo "<br>";
$flipped = array_combine($numbers2, $numbers4);
echo "<pre>";
print_r($flipped);
echo "<br>";

//10 uzduotis
echo "<br>";
echo "Desimtas uzdavinys";
echo "<br>";
$numberArr = [];
for($i = 0; $i < 10; $i++){
    if($i<2){
        $number = rand(5, 25);
    }else if($i>=2){
        $number = ($numberArr[$i-1])+($numberArr[$i-2]);
    }
    array_push($numberArr, $number);
}
echo "<br>";
echo json_encode($numberArr);

echo "<br>";
echo "Vienuoliktas uzdavinys - perrasyti su while";
echo "<br>";

$numbersArr = [];
while(count($numbersArr) <= 100){
    $value = rand(0, 300);
    if(!in_array($value, $numbersArr)){
        $numbersArr[] = $value;
    }
}
echo json_encode($numbersArr);
echo "<br>";

sort($numbersArr);
$reversedArr = array_reverse($numbersArr);
echo json_encode($reversedArr);
$count1 = 0;
$newArr = [];

foreach($reversedArr as $key => $value){
    if ($key % 4 == 0 || ($key+1)  % 4 == 0 ){
        array_push($newArr, $value);
    }else {
        array_unshift($newArr, $value);} 
}

for($i = 0; $i < count($newArr); $i++){
    $firstPart = array_slice($newArr, 0, (count($newArr)-1)/2);
    $firstPartSum = array_sum($firstPart);
    $secondPart = array_slice( $newArr, ( (count($newArr)+1) / 2) );
    $secondPartSum = array_sum($secondPart);
    $count1 = $firstPartSum - $secondPartSum;
    if($count1 > 30){
        $temp = $newArr[$i];
        $newArr[$i] = $newArr[count($newArr)- $i - 1];
        $newArr[count($newArr)- $i - 1] = $temp;
    }else{break;}
}

$firstPart = array_slice($newArr, 0, (count($newArr)-1)/2);
    $firstPartSum = array_sum($firstPart);
    $secondPart = array_slice( $newArr, ( (count($newArr)+1) / 2) );
    $secondPartSum = array_sum($secondPart);
    $count1 = $firstPartSum - $secondPartSum;
    echo "<br>";
    echo "suma pirma".$firstPartSum;
    echo "<br>";
    echo "suma antras".$secondPartSum;
    echo "<br>";
    echo $count1;



