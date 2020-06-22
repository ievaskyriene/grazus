<?php

$vardas;

//yra juokas, kad sita php progarmuotojai naudoja vietoje for

foreach(range(1,5)as $val){
    echo 'Reiksme: '.$value.'<br>';
}

$masyvas = ['vienas', 'du', 'trys', 'keturi'];

foreach($masyvas as &$value){
    echo 'Reiksme: '.$value.'<br>';
}

unset($value); //gera praktika panaudojus rodykl1 (nuorod1), ja "uzmuzti"

foreach($masyvas as $value){
    echo 'Reiksme: '.$value.'<br>';
}


$masyvas = range(1,20);

//du variantai kaip keisti masyvo reiksme - per key arba per value, kuri perduoda pagal reference 
foreach($masyvas as $key => $val){
   // $val = 'A';
    $masyvas[$key] = 'A';
}
print_r($masyvas);

foreach($masyvas as &$val){
    $val = 'A';
   
 }

 //Indekso tiesiog pervadinti I raide negalima, bet jeigu norim tada galim pakeisti.
 $tmp = $masyvas[9];
 unset($masyvas[9]);
$masyvas['B'] = $tmp;

foreach($masyvas as &$val){
    $val = range(1, rand(2,4));
}

foreach($masyvas as &$val1){
    foreach ($val1 as &$val){
        $val2 = 'A';
    }
}

/*foreach($masyvas as $key1 => $val1){
    foreach ($masyvas as $key2 => $val1){
       $masyvas[$key1][$key2] = 'A;
    }
}*/

foreach(range(0,3) as $index){
    foreach ($masyvas as $key1 => $val1){
       $masyvas[$key1][$index]= 'B';
    }
}
echo '<pre>';

print_r($masyvas);

foreach($masyvas as $value){
    // pries foreach pasitikrinam ar is_array. Jeigu ne masyvas, tiesiog priskiram kaip atskiram elementui.
}

$masyvas = range('A', 'F');
$rezultatas = '';
$pirmas = true;
foreach($masyvas as $raide){
    if(!$pirmas){
        $rezultatas .= ', '.$raide;
    }else{
        $rezultatas = $raide;
        $pirmas = false;
    }
}
echo $rezultatas;

//