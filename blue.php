<?php


if(!empty($_GET) && isset($_GET['redirect'])){
    header("Location: http://192.168.64.2/grazus/red.php");
die();
}

echo "<div style='background-color: blue; width: 100%; height: 100vh'>";
echo '<a href="./blue.php?redirect=true" style="color:black">Eiti i raudona</a><br>';
echo "</div>";