<?php

if(!empty($_GET) && isset($_GET['redirect'])){
    header("Location: http://192.168.64.2/grazus/blue.php");
die();
}

echo "<div style='background-color: red; width: 100%; height: 100vh'>";
echo '<a href="./red.php?redirect=true" style="color:black">Eiti i melyna</a><br>';
echo "</div>";