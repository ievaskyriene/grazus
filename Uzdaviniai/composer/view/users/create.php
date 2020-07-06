<?php

use Main\Generate;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="./../../public/css/reset.css">
    <link rel="stylesheet" href="./../../public/css/main.css">
</head>
<body>
    <div class="container">
        <div class="form">
            <h2>Įveskite duomenis</h2>
            <form action="<?= Main\App::URL ?>users/addUser" method="post">
                <div class = "input">
                    <label for="name"> Vardas: <br>
                        <input type="text" name="vardas" required> <br>
                    </label> 
                </div>
                <div class = "input">
                    <label for="surname"> Pavardė: <br>
                        <input type="text" name="pavarde" required> <br>
                    </label>
                </div>  
                <div class = "input">
                <label for="ID"> Asmens kodas:  <br>
                    <input type="number" name="asmenskodas" required><br>
                </label>
                </div>  
                <button type="submit" name = "action">Sukurti saskaitą</button>
            </form>

            <!-- <label for="img"> Įkelkite profilio nuotrauką:  <br>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="file" name="cat_photo"><br><br>
                    <button type="submit">Įkelti</button>
                </label>
                </form> -->
            <div class = "message"><?php  
                if(isset($_SESSION['note'])) {
                echo $_SESSION['note'];
                unset($_SESSION['note']);
            }
                ?></div><br>
            </div>  
            <div class="menu">
                <a href="<?=Main\App::URL.'users/list'?>">Peržiūrėti saskaitų sarasą <i class="text-icon icon-external-link"></i></a><br>
                <a href="<?=Main\App::URL.'logout'?>">Atsijungti</a><br>
            </div>
    </div> 
</body>
</html>

<?php
// $target_file = basename($_FILES["cat_photo"]["name"]);
// move_uploaded_file($_FILES["cat_photo"]["tmp_name"], '/opt/lampp/htdocs/grazus/Uzdaviniai/composer/img/kaciukas1.jpeg');

// $cat = file_get_contents('/opt/lampp/htdocs/grazus/Uzdaviniai/composer/img/kaciukas1.jpeg');

// // header('Content-type: image/png');

// $cat1 = base64_encode($cat);
// $catData = ['img'=>$cat1];
// _dc($catData);

// file_put_contents('/opt/lampp/htdocs/grazus/Uzdaviniai/composer/img/kaciuku.json', $catData);
// _dc($_FILES);
