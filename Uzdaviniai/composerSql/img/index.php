<?php

$image = json_decode(file_get_contents('/opt/lampp/htdocs/grazus/Uzdaviniai/composer/img/kaciuku.json'),1);
_dc($image );
$imageback = $image;
?>

<img src="<?=$imageback?>">