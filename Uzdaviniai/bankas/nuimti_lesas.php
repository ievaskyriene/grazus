<?php
require __DIR__ . '/bootstrap.php';

$data = json_decode(file_get_contents(__DIR__ .'/data.json'),1);

if(isset($_POST['ID'])){
$id= $_POST['ID'];  
}

if(!isset($_POST['ID'])){ 
    $id=$_GET['ID'];
}

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
    foreach ($data as $user) {
        if($user['ID']== $id){
        ?> 
            <tr>
            <td><?=$user['name']?></td>
            <td><?=$user['surname']?></td>
            <td><?=$user['IBAN']?></td>
            <td><?=$user['lesos']?></td>
            <td>
            <?php
    echo '<form action="./nuimti_lesas.php" method="post">
    <input type="hidden" name="ID" value="'.$user['ID'].'" readonly>
    <input type="number" name="nuimti" value="">
    <button type="submit">Nuimti</button>
    </form>';
    ?>
    </td>
    </tr>
    </div>
    <?php
    }
}
    ?> 
</table>

<div class="menu">
        <a href="./nauja_saskaita.php">Sukurti nauja saskaita</a><br>
        <a href="./saskaitu_sarasas2.php">Perziureti saskaitu sarasa <i class="text-icon icon-external-link"></i></a><br>
        <!-- <a href="./login.php?logout">Atsijungti <i class="icon-signout text-icon"></i> </a><br> -->
    </div>
    </body>
</html>

<?php


if(array_key_exists('nuimti', $_POST)){
    foreach ($data as &$user) {
        if($user['ID']== $_POST['ID'] &&  $user['lesos'] > 0){
            $user['lesos']-=(int)$_POST['nuimti'];   
            if ($user['lesos'] < 0){
                $_SESSION['note'] = 'Suma negali buti mazesne uz nuli';
                header('Location: http://localhost:8080/grazus/Uzdaviniai/bankas/nuimti_lesas.php'); // GET
             die();
            }
           
        }
    }

    file_put_contents(__DIR__ .'/data.json', json_encode($data));

header('Location: http://localhost:8080/grazus/Uzdaviniai/bankas/nuimti_lesas.php?ID='.$_POST['ID']); // GET
       die();
}


if(isset($_SESSION['note'])) {
    echo $_SESSION['note'];
    unset($_SESSION['note']);
}

