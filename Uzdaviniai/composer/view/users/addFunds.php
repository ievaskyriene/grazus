<?php
use App\DB\JsonDb;
use Main\App;
use Main\CE;

$db = new JsonDb;
$user = $db->show(App::$user);
_dc($user);

_dc($_POST);

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
        <input type="number" name="prideti" value="">
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

<div class="menu" style="padding-top:200px;">
        <a href="<?=Main\App::URL.'users/list'?>">Perziureti saskaitu sarasa <i class="text-icon icon-external-link"></i></a><br>
        <a href="<?=Main\App::URL.'users/create/'?>">Sukurti nauja saskaita</a><br>
        <a href="<?=Main\App::URL.'logout'?>">Atsijungti</a><br>
    </div>
    </body>
</html>
    

<?php




