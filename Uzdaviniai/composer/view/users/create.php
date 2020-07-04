<?php

use Main\Generate;
_dc ($_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/main.css">
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
    .message{
        margin-top:20px;
        margin-bottom:20px;
        font-family: 'Montserrat', sans-serif;
    }

</style>
<body>
    <div class="container">
        <div class="form">
            <h2>Iveskite duomenis</h2>
                <p class = "message"><?php  
                   if(isset($_SESSION['note'])) {
                    echo $_SESSION['note'];
                    unset($_SESSION['note']);
                }
                ?></p><br>
           <form action="<?= Main\App::URL ?>users/addUser" method="post">
                <label for="name"> Vardas: <br>
                    <input type="text" name="vardas" required> <br>
                </label> 
                <label for="surname"> Pavarde: <br>
                    <input type="text" name="pavarde" required> <br>
                </label>
                <label for="ID"> Asmens kodas:  <br>
                    <input type="number" name="asmenskodas" required><br>
                </label>
              
                <button type="submit" name = "action">Sukurti saskaita</button>
                <!-- <label for="IBAN"> saskaita:  <br>
                    <input type="number" name="asmenskodas" value = "<?=Generate::generateIBAN()?>"><br>
                </label> -->
            </form>
        </div>
    </div>

    <div class="menu"  style="padding-top:200px;">
    <a href="<?=Main\App::URL.'users/list'?>">Perziureti saskaitu sarasa <i class="text-icon icon-external-link"></i></a><br>
    <a href="<?=Main\App::URL.'logout'?>">Atsijungti</a><br>
    </div>
</body>
</html>
