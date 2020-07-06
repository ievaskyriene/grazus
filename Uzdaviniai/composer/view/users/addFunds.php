<?php
use App\DB\JsonDb;
use Main\App;
use Main\CE;

$db = new JsonDb;
$user = $db->show(App::$user);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./../../../public/css/reset.css">
    <link rel="stylesheet" href="./../../../public/css/main.css">
    
</head>

<body>
<table>
    <tr>
        <th >Vardas</th>
        <th>Pavarde</th> 
        <th>Saskaita</th>
        <th>Lesos</th>
        <th>Lesos USD</th>
        <th>Veiksmai</th>
    </div>
    <?php

$USD = 0;
$USD = $user['lesos'] * CE::excange();

        ?> 
            <tr>
            <td><?=$user['name']?></td>
            <td><?=$user['surname']?></td>
            <td><?=$user['IBAN']?></td>
            <td><?=$user['lesos']?></td>
            <td><?=$USD?></td>
            <td>
            <?php
    echo '<form action="./../add/'.App::$user.'" method="post">
        <input type="hidden" name="ID" value="'.$user['ID'].'" readonly>
        <input type="number" step="0.01" name="prideti" value="">
        <button type="submit">Prideti</button>
    </form>';
    ?>
    </td>
    </tr>
    </div>
    <?php

    ?> 
</table>

<p class = "message">
<?php  
    if(isset($_SESSION['note'])) {
    echo $_SESSION['note'];
    unset($_SESSION['note']);
}
?></p><br>

<div class="menu">
        <a href="<?=Main\App::URL.'users/list'?>">Peržiūrėti sąskaitų sąrašą <i class="text-icon icon-external-link"></i></a><br>
        <a href="<?=Main\App::URL.'users/create/'?>">Sukurti naują sąskaitą</a><br>
        <a href="<?=Main\App::URL.'logout'?>">Atsijungti</a><br>
    </div>
    </body>
</html>
    

<?php




