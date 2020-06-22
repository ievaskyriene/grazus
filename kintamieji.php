<?php
$trecias = 5;
/*$rezultatas = $trecias%2;
echo $rezultatas;
echo '<br>';

$trecias = 5;
//echo $trecias++;
echo '<br>';
echo$trecias;
echo '<br>';

//echo ++$trecias +  ++$trecias;
//echo '<br>';
//echo $trecias++ +  $trecias++;

$rezultatas = ++$trecias +  ++$trecias;
echo $rezultatas;
echo '<br>';
echo $trecias;*/

//kai pliusia pabaigoje, prisiskaiciuoja tik tada, kai baigima kreipimasi i kintamaji;

//pazaisti su tokiais namie, nes bus egzamine;

$ketvirtas += 5;
echo $ketvirtas;

$pirmas = 'bla bla';
$antras = "ku $pirmas KU";
//$trecias = $pirmas +$antras;

echo $antras; // automatinis php kovertavimas stringo i skaicius

//var_dump(0=='');

echo '<br>';
$pirmas = 'antras';
$antras = 'bla_bla';
$bla_bla = 'vovere';

echo '<br>';
echo $$$pirmas;

$drambliai = 3;
if($drambliai){
    echo 'yra drambliu';
}

$drambliai = 0;
if($drambliai)
echo 'yra drambiu';
echo 'labas';

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

$vienas = 1;
echo '<br>';
echo $rezultatas = (1 == $vienas) ? 'yes' : 'no';
echo '<br>';
echo $rezultatas = (3 == $vienas) ? 'yes' : 'no';

echo $rezultatas = (true) ? 'A' :((false)? 'B':'C');

$rezultatas = $vienas ?? 8; //grazina 8
var_dump($rezultatas); 
$vienas = 1;

$rezultatas = $vienas ?? 8; //grazina 8
var_dump($rezultatas); 

function get_strings($city) {
    $city = strtolower($city);
    $city = str_split($city);
    print_r ($city);
    $pasikartojantys = [];
    $pasikartoja = false;
    for($i = 0; $i<strlen($city); $i++){
        for ($k = 0; $k < strlen($pasikartojantys); $k++) {
            if ( $city[i] == $pasikartojantys[k]) {
            $pasikartoja = true;
            break;
            }
        }
        if ( $pasikartoja == false) {
            for ($j = 0; $j < strlen($city); $j++) {
            if ($j != $i && $city[i] == $city[j]) {
                $pasikartojantys.push($city[i]);
                break;
            }
            }
        }

        $pasikartoja = false;
    }
    return $pasikartojantys;
}

print_r($pasikartojantys);
get_strings("Vilnius");

