<?php
$sk = rand(0,10);
$ciklai = 0;
while ($sk <9){
    echo $sk.'<br>';
    $sk = rand(1,10);
    $ciklai++;
}
echo $sk.' sitas nutraukia <br>';
echo "Ciklu $ciklai";
echo "------";
$ciklai = 0;
do {
    echo $sk.'<br>';
    $sk = rand(1,10);
    $ciklai++;
}
while ($sk <9);
echo $sk.' sitas nutraukia <br>';
echo "Ciklu $ciklai";

for($x=1; $x<=5; $x++){
    echo "Numeris: $x <br>";

}

for ($a = 1; $a <= 3; $a++) {
    echo '<b>Didžiojo ciklo Numeris: '.$a.' </b><br>';
    for ($x = 1; $x <= 4; $x++) {
        echo 'Mažojo Ciklo Numeris: '.$x.' <br>';
    }
 }

 echo '<br>';
 $i = 0;
for ($i = 0;$i <= 5;$i++){
   if ($i%2 == 1){
       continue;
   }
   echo $i;
   echo '<br>';
}
echo 'Ciklo pabaiga';
 