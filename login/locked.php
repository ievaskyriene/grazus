<?php

require __DIR__. '/bootstrap.php';

if(!isset($_SESSION['login']) || $_SESSION['login']!=1){
    header('Location: http://192.168.64.2/grazus/login/login.php');
    die();
}

?>
<a href="http://192.168.64.2/grazus/login/login.php?logout">Atsikabinti</a><br>;
<?php

echo 'slaptas';