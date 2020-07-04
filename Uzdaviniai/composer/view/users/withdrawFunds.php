<?php
use App\DB\JsonDb;
use Main\App;


_d(App::$user);
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
    
</head>
<style>

table{
  font-family: 'Montserrat', sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-bottom:100px;
}

table td, table th {
 font-family: 'Montserrat', sans-serif;
  border: 1px solid #ddd;
  padding: 8px;
}

table tr:hover {background-color: #ddd;}

table th {
  font-family: 'Montserrat', sans-serif;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #284646;
  color: white;
}

button {
    font-family: 'Montserrat', sans-serif;
    width: 100px;
}

menu{
    font-family: 'Montserrat', sans-serif;
    
}
</style>
<body>
<table>
    <tr>
        <th >Vardas</th>
        <th>Pavarde</th> 
        <th>Saskaita</th>
        <th>Lesos</th>
        <th>Veiksmai</th>
    </div>
    <?php
    
        ?> 
            <tr>
            <td><?=$user['name']?></td>
            <td><?=$user['surname']?></td>
            <td><?=$user['IBAN']?></td>
            <td><?=$user['lesos']?></td>
            <td>
            <?php
    echo '<form action="./../deduct/'.App::$user.'" method="post">
        <input type="hidden" name="ID" value="'.$user['ID'].'" readonly>
        <input type="number" name="atimti" value="">
        <button type="submit">Nuimti</button>
    </form>';
    ?>
    </td>
    </tr>
    </div>
    <?php

    ?> 
</table>

<div class="menu">
<a href="<?=Main\App::URL.'users/list'?>">Perziureti saskaitu sarasa <i class="text-icon icon-external-link"></i></a><br>
        <a href="<?=Main\App::URL.'users/create/'?>">Sukurti nauja saskaita</a><br>
        <a href="<?=Main\App::URL.'logout'?>">Atsijungti</a><br>
    </div>
    </body>
</html>
    

