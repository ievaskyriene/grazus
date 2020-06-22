<?php

require __DIR__ . '/bootstrap.php';
// 1.
$backgroundColor = 'black';
if(!empty($_GET)) {
    if($_GET['color'] == 1){
        $backgroundColor = 'red';
    }
}
$link1 = '<a href="'.$URL.'ieva_skyriene_7.php">Pirmas linkas</a>'.'<br>';
$link2 = '<a href="'.$URL.'ieva_skyriene_7.php?color=1">Antras linkas</a>'.'<br>';
echo '<div style="width: 100%; height: 100vh; background-color:'.$backgroundColor.'">'.$link1.$link2.'</div>';





