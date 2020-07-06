
<?php 

Use Main\App;

if(isset($_SESSION['note'])) {
    echo '<br>', $_SESSION['note'];
    unset($_SESSION['note']);
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="./../public/css/reset.css">
    <link rel="stylesheet" href="./../public/css/main.css">
</head>
<body>
<div class="container">
    <div class="form">
    <h2>Įveskite prisijungimo duomenis</h2>
        <form action="<?= Main\App::URL ?>doLogin" method="post">
            <div class = "input">
                <label for="name"> Įveskite vardą: <br>
                    <input type="text" name="user"><br>
                </label>
            </div>
            <div class = "input">
                <label for="name"> Įveskite slaptažodį: <br>
                    <input type="password" name="password"><br>
                </label>
            </div>   
            <button type="submit">Jungtis</button>
        </form>
    </div>
</div>



</body>
</html>