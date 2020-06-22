
<?php

//sitas parasymas yra blogas, nes default turi buti desineje;
/*function sudeti($vienas = 2, $du){
    return $vienas + $du;
}

echo sudeti(),'<br>';
echo sudeti(1),'<br>';
echo sudeti(1, 2),'<br>';*/

//sitas parasymas yra geras
/*function sudeti($vienas, $du = 15){
    return $vienas + $du;
}

echo sudeti(),'<br>';
echo sudeti(1),'<br>';
echo sudeti(1, 2),'<br>';*/

$x = 0;
  while($x<5){
    echo "The number is: $x <br>";
    if ($x>5){
        while($x>0){
        $x--;
        echo "The number is: $x <br>";
    }
    }
}
