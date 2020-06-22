<?php
require __DIR__ . '/bootstrap.php';
$backgroundColor = 'orange';
if(!empty($_GET)) {
    if($_GET['color'] == 1){
        $backgroundColor = 'black';
    }
}

echo '<div style="width: 100%; height: 100vh; background-color:'.$backgroundColor.'"></div>';