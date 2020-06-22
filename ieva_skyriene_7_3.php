<form action="" method="get">
    Background color: <input type="text" name="color"><br>
    <button type="submit">Vykdyti</button>
</form>

<?php
if (!empty($_GET) && isset($_GET['color'])){
$color = $_GET['color'];}
else {$color = 'black';}
echo "<div style='background-color: $color; width: 100%; height: 100vh'>";

