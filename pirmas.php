<h2>pirmas</h2>

<?php

echo '<h3>KODAS</h3>';

?>

 <h2>pirmas vel</h2>

 <?php

 echo 2+3;
$masyvas = ["Pirmadienis", "Antradienis", "Treciadienis"];

 function dump($data){
    echo "<pre>";
    print_r($data);
    echo "</pre";

 }

 dump ($masyvas);

 $skaiciuMasyvas = [1,3,6];

 function sumaIrVidurkis($skaiciai){
    $rezultatas = ["suma"=>0, "sandauga" =>1];
    foreach($skaiciai as $value){
        $rezultatas["suma"] +=$value;
        $suma = $rezultatas["suma"];
        $rezultatas["sandauga"] *= $value;
    }     
   
   $vidurkisIlgas = $suma/sizeof($skaiciai);

   $rezultatas ["vidurkis"] = number_format($vidurkisIlgas, 2);
  
   dump($rezultatas); 

   return $rezultatas;

 }

 $atsakymas = sumaIrVidurkis($skaiciuMasyvas);
    foreach($atsakymas as $key => $value){
    echo "<p>".$key.":".$value."</p>";
}



function expressionMatter($a, $b, $c) {
  
   echo $a;
    echo "<pre>";
   echo $b; 
    echo "<pre>";
   echo $c;
    echo "<pre>";
      $result = 0;
   
      if ($a == 1 && $c ==1){
         $result = $a + $b + $c;
      } 
       if ($a == 1 && $b ==1 && $c!=1){
         $result = ($a + $b) * $c;
      } 
        if ($c == 1 && $b ==1 && $a!=1){
         $result = $a * ($b + $c);
      } 
      
      if ($a == 1 && $b!=1 && $c!=1) {
         $result = ($a + $b) * $c;
      } 
   
      if ($b == 1 && $c!=1 && $a != 1 && $a>=$c) {
         $result = $a * ($b + $c);
      } 
   
      if ($b == 1 && $c!=1 && $a != 1 && $a<$c) {
         $result = ($a + $b) * $c;
      } 
   
      if ($c == 1 && $b!=1 && $a != 1) {
         $result = $a * ($b + $c);
      } 
   
      if($c != 1 && $b!=1 && $a != 1){
         $result = $a * $b * $c;
   
      }
     
   
   return $result;
   }

 print_r(expressionMatter(1,1,10));

 /*Count the number of occurrences of each character and return it as a list of tuples in order of appearance. For empty output return an empty list.

 Example:
 
 orderedCount("abracadabra") == [['a', 5], ['b', 2], ['r', 2], ['c', 1], ['d', 1]]*/

 function orderedCount($text) {
   $textSplit = str_split($text);
   print_r($textSplit);
   $count = 0;
   $finalArr = [];
   $i = 0;
   $j = 1;
   for($i = 0; $i < count($textSplit); $i++){
      for($j = 1; $j < count(($textSplit))-1; $j++){
         if($textSplit[$i] == $textSplit[$j] && $i!=$j){
            $count++;
           // array_push($finalArr, $textSplit[$i]);
           
         }
        
    }
   

   }
   print_r ($count);

   var_dump(count($textSplit));

   return count($textSplit);
 }

 orderedCount("abrakadabra");

   $petras = rand (10,20);
   $jonas = rand(5,25);
echo "Jonas $jonas Petras $petras";

if ($petras > $jonas){
echo "Laimejo: Petras";
}
if ($petras > $jonas){
 echo "Laimejo: Jonas";
}
else echo "lygiosios";

echo "---------------";
$v1 = rand(1000, 9999);
    $v2 = rand(1000, 9999);
    $v3 = rand(1000, 9999);
    $v4 = rand(1000, 9999);
    $v5 = rand(1000, 9999);
    $v6 = rand(1000, 9999);
    if($v1 > $v2){
        $temporary = $v1;
        $v1 = $v2;
        $v2 = $temporary;
    }
    if($v1 > $v3){
        $temporary = $v1;
        $v1 = $v3;
        $v3 = $temporary;
    }
    if($v1 > $v4){
        $temporary = $v1;
        $v1 = $v4;
        $v4 = $temporary;
    }
    if($v1 > $v5){
        $temporary = $v1;
        $v1 = $v5;
        $v5 = $temporary;
    }
    if($v1 > $v6){
        $temporary = $v1;
        $v1 = $v6;
        $v6 = $temporary;
    }
    if($v2 > $v3){
        $temporary = $v2;
        $v2 = $v3;
        $v3 = $temporary;
    }
    if($v2 > $v4){
        $temporary = $v2;
        $v2 = $v4;
        $v4 = $temporary;
    }
    if($v2 > $v5){
        $temporary = $v2;
        $v2 = $v5;
        $v5 = $temporary;
    }
    if($v2 > $v6){
        $temporary = $v2;
        $v2 = $v6;
        $v6 = $temporary;
    }
    if($v3 > $v4){
        $temporary = $v3;
        $v3 = $v4;
        $v4 = $temporary;
    }
    if($v3 > $v5){
        $temporary = $v3;
        $v3 = $v5;
        $v5 = $temporary;
    }
    if($v3 > $v6){
        $temporary = $v3;
        $v3 = $v6;
        $v6 = $temporary;
    }
    if($v4 > $v5){
        $temporary = $v4;
        $v4 = $v5;
        $v5 = $temporary;
    }
    if($v4 > $v6){
        $temporary = $v4;
        $v4 = $v6;
        $v6 = $temporary;
    }
    if($v5 > $v6){
        $temporary = $v5;
        $v5 = $v6;
        $v6 = $temporary;
    }
    echo "$v1 $v2 $v3 $v4 $v5 $v6";



