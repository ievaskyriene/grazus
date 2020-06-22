<?php
require __DIR__ . '/bootstrap.php';

$backgroundColor = 'yellow';
if(!empty($_GET)) {
    if($_GET['color'] == 1){
        $backgroundColor = 'black';
    }
}
$link = '<a href="'.$URL.'orange.php">Link to orange</a>'.'<br>';

echo '<div style="width: 100%; height: 100vh; background-color:'.$backgroundColor.'">'.$link.'</div>';