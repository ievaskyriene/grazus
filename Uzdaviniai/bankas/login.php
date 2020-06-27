<?php

require __DIR__ . '/bootstrap.php';

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: ./login.php');
    die();
}

 if (isset($_SESSION['login'])) {
 header('Location: ./login.php');
die();
}

if(!empty($_POST)){
    $data = json_decode(file_get_contents(__DIR__.'/banker.json'),1);
        foreach($data as $value){
            if($_POST['name'] == $value['name']){
                if(md5($_POST["password"]) == $value["password"]){
                    $_SESSION['login'] = 1;
                    header('Location: ./saskaitu_sarasas2.php');
                    die();
                };
            }
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<style>
    .container{
        margin-left: 50px;
        margin-top:50px;
        font-family: 'Montserrat', sans-serif;
    }
    h2{
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
    }
    form{
        font-family: 'Montserrat', sans-serif;
    }
    label{
        font-family: 'Montserrat', sans-serif;
    }
    input{
        font-family: 'Montserrat', sans-serif;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    button{
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
    }
   

</style>
<body>

    <div class="container">
        <div class="form">
        <h2>Prisijungimas</h2>
        <div class="line"></div>
        <form action="" method="post">
        <label for="name"> Vardas <br>
            <input type="text" name="name"> <br>
        </label>
        <label for="password"> Slaptazodis <br>
            <input type="password" name="password"> <br>
        </label>
        <button type="submit">Prisijungti</button>
        </form>
        </div>
    </div>
</body>
</html>