<?php
require __DIR__ . '/bootstrap.php';

if(!empty($_GET) && isset($_GET['redirect'])){
    header("Location:$URL"."red.php");
die();
}

echo "<div style='background-color: blue; width: 100%; height: 100vh'>";
echo '<a href="'.$URL.'blue.php?redirect=true" style="color:black">Eiti i raudona</a><br>';
echo "</div>";