<form action="" method="get">
<button type="submit" name = "button" value = "pressed">Zalias</button>
</form>

<form action="" method="post">
<button type="submit" name = "button" value = "pressed">Geltonas</button>
</form>

<?php
require __DIR__ . '/bootstrap.php';

if(!empty($_GET) && isset($_GET['button']) ){
    echo "<div style='background-color: green; width: 100%; height: 100vh'></div>";
}

if( !empty($_POST) && isset($_POST['button']) ){
    echo "<div style='background-color: yellow; width: 100%; height: 100vh'></div>";
}

