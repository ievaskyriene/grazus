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
    <div class = "menuContainer">
        <h1>Sveiki atvykę į pagrindinį banko puslapį</h1>
        <h2>Pagrindinis meniu</h2>
        <div class = "menulabel">
            <a class= "mainMenu" href="<?=Main\App::URL.'users/list'?>">Peržiūrėti sąskaitų sąrašą <i class="text-icon icon-external-link"></i></a><br>
        </div>
        <div class = "menulabel">
            <a class= "mainMenu" href="<?=Main\App::URL.'users/create/'?>">Sukurti naują sąskaitą</a><br>
        </div>
        <div class = "menulabel">
        <a class= "mainMenu" href="<?=Main\App::URL.'logout'?>">Atsijungti</a><br>
        </div>
    </div>
</div>
</body>
</html>