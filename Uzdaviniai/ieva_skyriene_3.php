
<?php
//pirmas uzdavinys 

for($i = 1; $i<=400; $i++){
    echo "<p style = 'word-break: break-all;'>*</p";
}
echo '<br>';

for($j = 1; $j<=8; $j++){
    for($i = 1; $i<=50; $i++){
        echo "<p style = 'word-break: break-all;'>*</p"; 
    }
    echo '<br>';
}

//antras uzdavinys
echo '<br>';
echo '<br>';
echo "2 uzdavinys.";
echo '<br>';
$count = 0;
$number = 0;
for($i = 1; $i<=300; $i++){
    $number = rand(0, 300);
    if ($number > 150){
        $count++;
    }
    if ($number > 275){
        echo "<span style = 'color:red; word-break: break-all'> $number </span>";
        continue;
    }
echo $number."\n";  
$i++;  
}
echo '<br>';
echo "Skaiciu, didesniu uz 150, yra $count";
echo '<br>';

//trecias uzdavinys - pataisyti su kintamuoju 3000;
echo '<br>';
echo 'Trecias uzdavinys';
echo '<br>';
$skaicius = 0;
$maxRiba = 3000;
while($skaicius < $maxRiba - 77){
    $skaicius += 77;
    if ((3000 - $skaicius) < 77){
        echo $skaicius." ";
    } else {echo $skaicius.", ";};
}

//ketvirtas uzdavinys
echo '<br>';
echo '<br>';
echo 'Ketvirtas uzdavinys';
echo '<br>';

echo'<br>';
for ($y = 0; $y < 10; $y++) {
    echo '<span style="line-height: 12px">';
    for ($x = 0; $x < 10; $x++) {
        echo ' * ';
    }
    echo'</span>';
    echo '<br>';
}

//penktas uzdavinys
echo '<br>';
echo 'Penktas uzdavinys';
echo'<br>';
for ($y = 0; $y < 10; $y++) {
    echo '<span style="line-height: 12px">';
    for ($x = 0; $x < 10; $x++){
        if ($x == $y || $x + $y == 9) {
            echo "<font color='red'> * </font>";
        }else{
            echo ' * ';
        }
    }
    echo'</span>';
    echo '<br>';
}

// 6 uzdavinys;
echo '<br>';
echo "6 uzdavinys";
echo '<br>';
rand(0,1);

if (rand(0,1) == 0)
{echo "H";}
else echo "S";
echo '<br>';
echo 'Pirmas scenarijus';
echo '<br>';

// 1 scenarijus
$flipCount = 0;
do {
    $i = rand(0,1); 
    $flipCount++;
    if ($i == 1){
        echo 'S';
    }
    else echo 'H';
    echo '<br>';
}
while($i == 0);
echo "Herbas iskrito po $flipCount metimu.";

// 2 scenarijus
echo '<br>';
echo 'Antras scenarijus';
echo '<br>';

$flipCount = 0;
$hCount = 0;
do {
    $i = rand(0, 1); 
    $flipCount++;
    if ($i == 1){
        echo "S";
    }
    else{
        $hCount++;
        echo 'H';  
    } 
    echo '<br>';
}
while($hCount < 3);

echo "Herbas 3 kartus iskrito po $flipCount metimu.";
echo '<br>';
echo 'Trecias scenarijus';
echo '<br>';
$flipCount = 0;
$hCount = 0;
do {
    $i = rand(0,1); 
    $flipCount++;
    if ($i == 1){
        echo "S";
        $hCount = 0;
    }
    else{
        $hCount++;
        echo 'H';  
    } 
    echo '<br>';
}
while($hCount < 3);
echo '<br>';
echo "Herbas 3 kartus is eiles iskrito po $flipCount metimu.";
echo '<br>';

// 7 uzdavinys
echo '<br>';
echo "Septintas uzdavinys";
echo '<br>';

$Petras = 0;
$Kazys = 0;
do{
    $pt = rand(10,20);
    $Petras += $pt;
    $kt = rand(5, 25);
    $Kazys += $kt;
}while($Petras <= 222 || $Kazys <= 222);

if ($Petras > $Kazys){
    echo "Laimejo Petras ir surinko $Petras tasku";
}else{
    echo "Laimejo Kazys ir surinko $Kazys tasku";
}

if ($Kazys == $Petras){
    do{
        $pt = rand(10,20);
        $Petras += $pt;
        $kt = rand(5,25);
        $Kazys += $kt;
    }while($Kazys > $Petras || $Petras > $Kazys);
}

//8 uzdavinys Anos variantas
echo '<br>';
echo '<br>';
echo "Astuntas uzdavinys";
echo '<br>';

echo "<pre>";
$n = 11;
for ($i = 1; $i < $n; $i++) {
    for ($j = $i; $j < $n; $j++){
        echo "&nbsp;&nbsp;";
    }
    for ($j = 2 * $i - 1; $j > 0; $j--){
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b  = rand(0, 255);
        $color = "rgb($r, $g, $b)";
        echo  "&nbsp;<span style='color:$color;'>*</span>";
    }
    echo "<br>";
}

for ($i = $n; $i > 0; $i--) {
    for ($j = $n - $i; $j > 0; $j--){
        echo "&nbsp;&nbsp;";
    }
    for ($j = 2 * $i - 1; $j > 0; $j--){
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b  = rand(0, 255);
        $color = "rgb($r, $g, $b)";
        echo  "&nbsp;<span style='color:$color;'>*</span>";
    }
    echo "<br>";
}
echo "</pre>";


//9 uzdavinys
echo '<br>';
echo "Devintas uzdavinys";
echo '<br>';

$timeEndDouble = 0;
$timeStartDouble = microtime(true);
for($i = 0; $i < 1000000; $i++){
    $c = "10 bezdzioniu suvalge 20 bananu.";
}
$timeEndDouble = microtime(true);

$timeEndSingle = 0;
$timeStartSingle = microtime(true);
for($i = 0; $i < 1000000; $i++){
    $c = '10 bezdzioniu suvalge 20 bananu.';
}
$timeEndSingle = microtime(true);

$singleTime = $timeEndSingle - $timeStartSingle;
$timeDouble = $timeEndDouble - $timeStartDouble;

echo "Viengubose kabutese: ". ($singleTime) ." seconds";
echo '<br>';
echo "Dvigubose kabutese: ". ($timeDouble) ." seconds";

echo '<br>';
//10 uzdavinys
echo '<br>';
echo "10 uzdavinys";
echo '<br>';
echo "A dalis - mazi smugiai";
$smugiuCount=0;

for($i=1; $i<=5; $i++){
    $vinis = 0;
    while($vinis < 85){
        $vinisSmugis = rand(5, 20);
        $vinis += $vinisSmugis;
        $smugiuCount++;
    }
}
echo '<br>';
echo "a. Penkis vinis ikalti mazais smugiais prireike $smugiuCount smugiu.";
echo '<br>';

echo "B dalis - dideli smugiai";
$smugiuCount=0;

for($i=1; $i<=5; $i++){
    $vinis = 0;
    while($vinis < 85){
        if (rand(0,1) == 1){
            $vinisSmugis = rand(20, 30);
            $vinis += $vinisSmugis;
            $smugiuCount++;
        }else{$smugiuCount++;}
    }
}
echo '<br>';
echo "b. Penkis vinis ikalti dideliais smugiais prireike $smugiuCount smugiu.";
echo '<br>';

//vienuoliktas uzdavinys


function randomGen($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    $arr2 = array_slice($numbers, 0, $quantity);
   return join(" ", $arr2);
}
print_r(randomGen(1,2000,50)); 

    $numbers = range(0, 2000);
    shuffle($numbers);
    $numbers2 = array_slice($numbers, 0, 50);
    echo '<br>';
   $string1 = join(" ", $numbers2);
   echo $string1;

$arrPrimary = [];

function primeCheck($number){ 
    if ($number == 1) 
    return 0; 
    for ($i = 2; $i <= $number-1; $i++){ 
        if ($number % $i == 0) 
            return 0; 
    } 
    return 1; 
} 
  
foreach($numbers2 as $number){
$flag = primeCheck($number); 
if ($flag == 1) {
    array_push($arrPrimary, $number);}
}
echo '<br>';   
echo(join(" ", $arrPrimary));

















