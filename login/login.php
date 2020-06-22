<?php
require __DIR__. '/bootstrap.php';

if(!empty($_POST)){
    foreach ($data as $user){
        if($user['name'] === $_POST['user'] && 
        md5($user['pass']) === $_POST['password']) {
            $_SESSION['login'] =1;
            header('Location: http://192.168.64.2/grazus/login/locked/login.php');
            die();
        }
    }
}

if(isset($_GET['logout'])){
    sesion_destroy();
    header('Location: http://192.168.64.2/grazus/login/login.php');
    die();
}

?>
<form action = "http://192.168.64.2/grazus/login/login.php" method = "post">
<input type="text" name="user"> User Name <br>
<input type="password" name="password"> User Password <br>
<button type='submit'>Jungtis</button>
</form>