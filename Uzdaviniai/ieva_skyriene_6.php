<?php
//pirmas uzdavinys
echo "Pirmas uzdavinys";
echo '<br>';

function hTag($text){
   return "<h1> $text </h1>" ;
}
echo hTag("Labas rytas");

 //Antras uzdavinys
echo "Antras uzdavinys";
echo '<br>';

function hAnotherTag($text, $number){
    return "<h".$number.">".$text."</h".$number.">"; ;
}
echo hAnotherTag ("labas vakaras", 2);

 //Trecias uzdavinys
 echo "Trecias uzdavinys";
 echo '<br>';

 function tag3($tagH) {
	$number = preg_replace( '/\D/', '', html_entity_decode($tagH) );
  	echo "<h1>H1 $number H1</h1>".'</br>';
}
$a = "taxt1 , text1";
tag3($a = md5(time()));

//ketvirtas uzdavinys
echo '<br>';
echo "Ketvirtas uzdavinys";
echo '<br>';

function intg($number){
    $count = 0;
    for($i = 2; $i<$number; $i++){
        if($number % $i == 0 && is_int($number) == true){
            $count++;
        }
    }
    return $count;
}
echo intg(15);

echo '<br>';
echo "Penktas uzdavinys";
echo '<br>';
echo '<pre>';

$newArray = [];
for($i = 0; $i <= 100; $i++){
    $newArray[$i] = rand(33, 77);
}
function sorting($numberArray){
    $combinedArr = [];
    $withoutResidue = [];
    for($i = 0; $i<count($numberArray); $i++){
        $count = 0;
        for($j=2; $j<$numberArray[$i]; $j++){
            if($numberArray[$i] % $j == 0){
                $count++;
            }
        }  
        array_push($withoutResidue, $count);
    }

    $combinedArr = array_combine($numberArray, $withoutResidue);
    function Descending($a, $b) {   
        if ($a == $b) {        
            return 0;
        }   
            return ($a > $b) ? -1 : 1; 
    }
    
    uasort($combinedArr,"Descending");
  
    return $combinedArr;
}

print_r (sorting($newArray));


echo '<br>';
echo "Sestas uzdavinys";
echo '<br>';

$newArray = [];
for($i = 0; $i <= 100; $i++){
    $newArray[$i] = rand(1, 777);
}
echo '<pre>';
print_r ($newArray);

function primary($array){
  
    for($i = 0; $i<count($array); $i++){
        $count = 0;
        for($j=2; $j<$array[$i]; $j++){
            if($array[$i] % $j == 0){
                $count++;
            }
       }
       if($count == 0){
           unset($array[$i]);
       }       
    }
    echo '<pre>';
    print_r ($array);
    return $array;
}
primary($newArray);

//septintas uzdavinys - rekursija
echo '<br>';
echo "Septintas uzdavinys";
echo '<br>';

$b = rand(10,20);
function recursiveArr($b){
    static $callCount = 0;
    $callCount++;
    $newArray = [];
    $b = rand(10,20);
    for($a = 0; $a < $b; $a++){
       if ( ($a+1) == $b){
            if($callCount >= $b){
                array_push($newArray, 0);
            }else{
                $newArray2 = recursiveArr($b);
                array_push($newArray, $newArray2);
            }
        }else{
            array_push($newArray, rand(0, 10));
        }
    }
    return $newArray;
}
$finalresult = recursiveArr($b);
echo '<pre>';
print_r ($finalresult);

echo '<pre>';
//astuntas uzdavinys
echo '<br>';
echo "Astuntas uzdavinys";
echo '<br>';

function suma($finalresult)
{
    static $suma = 0;
    foreach ($finalresult as $val) {
        if (is_array($val)) {
            suma($val);
        }
        else {
            $suma += $val;
        }
    }
    return $suma;
}

echo suma($finalresult);

//devintas uzdavinys
echo '<br>';
echo "Devintas uzdavinys";
echo '<br>';

$newArray = [];
//$a = rand(1,33);
//function recursion2($a){
for($i = 0; $i<3; $i++){
    $newArray[$i] = rand(1,33);
}

echo '<pre>';
print_r ($newArray);
$primary = false;
while($primary == false){
    $primary = true;
    for($i = count($newArray)-3; $i<count($newArray); $i++){
        for($j=2; $j<$newArray[$i]; $j++){
            if($newArray[$i] % $j == 0){
                $primary = false;
            }
        }
    }
    if ($primary == true){
        break;
    }else{$newArray[$i]=rand(1,33);}
}
echo '<pre>';
print_r ($newArray);

//desimtas uzdavinys
echo '<br>';
echo "Desimtas uzdavinys";
echo '<br>';

$newArray = [];
for($i=0; $i<10; $i++){
    for($j=0; $j<10; $j++){
        $newArray[$i][$j] = rand(1,100);
    }
}

echo '<pre>';
print_r ($newArray);

function primarySum($array){
        $average = 0;
    while($average < 70){
        $sum = 0;
        $primaryNumberCount = 0;
        $firstIndex=0;
        $secondIndex=0;
        foreach($array as $key => $value){
            foreach ($value as $k=>$v){
                $count = 0;
                for($j=2; $j<$value[$k]; $j++){ 
                    if($value[$k] % $j == 0){
                        $count++;
                    }
               }
               if($count == 0){
                $sum += $value[$k];
                $primaryNumberCount++;
               }
                if($array[$firstIndex][$secondIndex] > $value[$k]){
                $firstIndex = $key;
                $secondIndex = $k;
                }
            }     
        }
        $average = $sum/$primaryNumberCount;
        $array[$firstIndex][$secondIndex]+=3;
    }
    echo $average;
    return $array;
}

print_r(primarySum($newArray));
echo '<pre>';