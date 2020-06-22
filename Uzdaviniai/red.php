<?php
require __DIR__ . '/bootstrap.php';
if(!empty($_GET) && isset($_GET['redirect'])){
    header("Location:$URL"."blue.php");
die();
}

echo "<div style='background-color: red; width: 100%; height: 100vh'>";
echo '<a href="'.$URL.'red.php?redirect=true" style="color:black">Eiti i melyna</a><br>';
echo "</div>";