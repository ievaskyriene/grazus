<?php

require __DIR__ . '/bootstrap.php';
if(!empty($_POST) ){
   
    header("Location:$URL"."ieva_skyriene_7_7.php");
    die();
}
echo "<pre>";
print_r ($_GET);

echo "<pre>";
print_r ($_POST);

if(!empty($_GET) && isset($_GET['button']) ){
    echo "<div style='background-color: green; width: 100%; height: 100vh'>";
}


?>

<form action="" method="get">
<button type="submit" name = "button" value = "pressed">Zalias</button>
</form>

<form action="" method="post">
<button type="submit" name = "button" value = "pressed">Geltonas</button>
</form>




