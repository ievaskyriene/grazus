<?php
//pirmas uzdavinys
echo 'Pirmas uzdavinys.';
$newArray = [];
for($i = 0; $i < 10; $i++){
    for($j = 0; $j < 5; $j++){
        $newArray[$i][$j] = rand(5, 25);
    }
}
echo '<pre>';
print_r($newArray);

//antras uzdavinys
echo 'Antras uzdavinys.';
echo '<br>';
echo 'a';

$count = 0;
foreach($newArray as $key => $value){
    foreach($value as $k=>$v){
        if($v>10){
            $count++;
        }
    }
}
echo $count;

echo '<br>';
echo 'b.';

$maxValue = 0;
foreach($newArray as $key => $value){
    foreach($value as $k=>$v){
        if($v>$maxValue){
            $maxValue = $v;
        }
    }
}
echo $maxValue;

echo '<br>';
echo 'c.';

$count1 = 0;
$count2 = 0;
$count3 = 0;
$count4 = 0;
$count5 = 0;

foreach(range(0,4) as $index){
    foreach($newArray as $k=>$v){
        if($index == 0){
           $count1 +=$newArray[$k][$index];
        }
        if($index == 1){
            $count2 +=$newArray[$k][$index];
        }
        if($index == 2){
            $count3 +=$newArray[$k][$index];
        }
        if($index == 3){
            $count4 +=$newArray[$k][$index];
        }
        if($index == 4){
            $count5 +=$newArray[$k][$index];
        }
    }
}
echo $count1." ".$count2." ".$count3." ".$count4." ".$count5;

foreach($newArray as $key => $value){
    for($i=0; $i<2; $i++){
        $n = rand(5, 25);
        array_push($newArray[$key], $n);
    }
}

echo "<pre>";
echo 'c.';
print_r($newArray);

$newArrSum = [];
$tempSum = 0;
foreach($newArray as $key => $value){
    foreach($value as $k=>$v){
        $tempSum += $value[$k];
    }
    array_push($newArrSum, $tempSum);
}

echo "<pre>";
echo 'd.';
print_r($newArrSum);

//Trecias uzdavinys (dar paziureti))
echo 'Trecias uzdavinys.';
echo '<br>';

$lettersArr = [];
for($i = 0; $i<10; $i++){
    for($j = 0; $j < rand(2, 20); $j++){
        $lettersArr[$i][$j] = chr(rand(65, 90)); 
        sort($lettersArr[$i]);
    }
}
echo "<pre>";

print_r($lettersArr);

//Ketvirtas uzdavinys
echo 'Ketvirtas uzdavinys.';
echo '<br>';
sort($lettersArr);
echo "<pre>";
print_r($lettersArr);

//Penktas uzdavinys
echo 'Penktas uzdavinys.';
echo '<br>';

$newArray = [];
for($i = 0; $i < 30; $i++){
    $newArray[$i]=[
        "user_id" => rand(1, 1000000),
        "place_in_row" => rand(0, 100),
    ];
}
echo '<pre>';
print_r($newArray);

//sestas uzdavinys
echo 'Sestas uzdavinys.';
echo '<br>';
foreach(range(0,30) as $index){
    for($i = 0; $i < count($newArray)-1; $i++){
        if($newArray[$i]["user_id"] > $newArray[$i+1]["user_id"]){
            $temp = $newArray[$i];
            $newArray[$i] = $newArray[$i+1];
            $newArray[$i+1] = $temp;
        }
    }
}

echo '<pre>';
print_r($newArray);
foreach(range(0,30) as $index){
    for($i = 0; $i < count($newArray)-1; $i++){
        if($newArray[$i][ "place_in_row"] < $newArray[$i+1][ "place_in_row"]){
            $temp = $newArray[$i];
            $newArray[$i] = $newArray[$i+1];
            $newArray[$i+1] = $temp;
        }
    }    
}
echo '<pre>';
print_r($newArray);

//septintas uzdavinys
echo 'Septintas uzdavinys.';
echo '<br>';

foreach($newArray as $key => $value){
    $nameLengthArr = [];
    $surnameLengthArr = [];
    $nameLength = rand(5,15);
    $surnameLength = rand(5,15);
    for($n = 0; $n < $nameLength; $n++){
        $a = chr(rand(65,90));
        array_push($nameLengthArr, $a);
        $newArray[$key]["name"] = join($nameLengthArr);
    }
    for($n = 0; $n < $surnameLength; $n++){
        $b = chr(rand(65,90));
        array_push($surnameLengthArr, $b);
        $newArray[$key]["surname"] = join($surnameLengthArr);
    }
}

echo '<pre>';
print_r($newArray);

//astuntas uzdavinys
echo 'Astuntas uzdavinys.';
echo '<br>';

$newArray = [];
for($i = 0; $i < 10; $i++){
    $index = rand(0,5);
    if ($i == 0){
        $newArray[$i] = rand(0,10);
    }else{
        for($j = 0; $j < rand(1,10); $j++){
            $newArray[$i][$j] = rand(0, 10);
        }
    }
}
echo '<pre>';
print_r($newArray);

//9 uzdavinys 
echo 'Devintas uzdavinys.';
echo '<br>';

usort($newArray, 
    function($a, $b){
        return (is_array($a) ? array_sum($a) : $a) <=> (is_array($b) ? array_sum($b) : $b);
    }
);

echo '<pre>';
print_r($newArray);

//10 uzdavinys 
echo 'Desimtas uzdavinys.';
echo '<br>';
$symbolstr = '#%+*@%';
$newArray = [];

for($i = 0; $i < 10; $i++){
    for($j = 0; $j < 10; $j++){
        $symbol = '';
        $index = rand(0, strlen($symbolstr) - 1);
        $symbol .= $symbolstr[$index]; 
        $newArray[$i][$j]['value'] = $symbol;
        $color = substr(md5(rand()), 0, 6);
        $newArray[$i][$j]['color'] = $color;
    }
}
echo '<pre>';
print_r($newArray);

for($i = 0; $i < 10; $i++){
    echo '<span style="line-height: 19px">';
    for($j = 0; $j < 10; $j++){
        $symbol = '';
        $index = rand(0, strlen($symbolstr) - 1);
        $symbol .= $symbolstr[$index]; 
        $newArray[$i][$j]['value'] = $symbol;
        $color = substr(md5(rand()), 0, 6);
        $newArray[$i][$j]['color'] = $color;
        echo  "<span style='color:$color;'> $symbol </span>";   
    }
    echo'</span>';
    echo '<br>';
}

echo '<br>';
//vienuoliktas uzdavinys
echo "Vienuoliktas uzdavinys";
do {
    $a = rand(0, 1000);
    $b = rand(0, 1000);
}while ($a == $b);
$long = rand(10,30);
$sk1 = $sk2 = 0;
echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
$c = [];
for ($i=0; $i<$long; $i++) {
    $c[] = array_rand(array_flip([$a, $b]));
}
$sum = array_sum($c);
echo $sum;
echo '<br>';
$sk2 = ($sum - $long * $a)/($b-$a);
$sk1 = $long - $sk2;
echo $sk2;
echo '<h4>Masyvas:</h4>';
echo '<pre>';
print_r($c);
echo '</pre>';
echo '<h3>Skaičius '.$a.'  yra pakartotas '.$sk1.' kartų, o skaičius '.$b.' - '.$sk2.' kartų.</h3>';




