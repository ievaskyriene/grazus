<?php
// 1.
$backgroundColor = 'yellow';
if(!empty($_GET)) {
    if($_GET['color'] == 1){
        $backgroundColor = 'black';
    }
}
$link = '<a href="/grazus/orange.php">Link to orange</a>'.'<br>';

echo '<div style="width: 100%; height: 100vh; background-color:'.$backgroundColor.'">'.$link.'</div>';