<?php

require __DIR__ . '/bootstrap.php';

if (!isset($_SESSION['login']) || $_SESSION['login'] != 1) {
    header('Location: ./login.php');
    die();
}
$data = json_decode(file_get_contents(__DIR__ .'/data.json'),1);

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
        <th>Asmens kodas</th>
        <th>Veiksmai</th>
    </div>
    <?php
    function sortdata($arr){
        for ($i=0; $i<count($arr)-1; $i++){
          
                for($j=$i+1; $j<count($arr); $j++){
                    if($arr[$i]['surname'] > $arr[$j]['surname']){
                        $temp = $arr[$i];
                        $arr[$i] = $arr[$j];
                        $arr[$j] = $temp;
                    }
                }

        }
        return $arr;
    }
    $data =sortdata($data);
    ?>
   
    <?php
    foreach ($data as $user) {
        ?>
            <tr>
                <td><?=$user['name']?></td>
                <td><?=$user['surname']?></td>
                <td><?=$user['IBAN']?></td>
                <td><?=$user['ID']?></td>
                <td>
                    <?php

                    echo '
                    <form action="" method="post">
                    <button type="submit" name="delete" value="'.$user['IBAN'].'">Trinti</button> 
                    </form>

                    <form action="./inesti_lesas.php" method="post">
                        <input type="hidden" name="ID" value="'.$user['ID'].'"readonly>    
                        <button type="submit" name="inesti">Inesti</button>
                    </form>
                    <form action="./nuimti_lesas.php" method="post">
                        <input type="hidden" name="ID" value="'.$user['ID'].'"readonly>    
                        <button type="submit" name="nuimti">Nuimti</button>
                    </form>';
                    ?>
                </td>
            </tr>
        </div>
        <?php
    }
    ?> 

</table>

<div class="menu" style="padding-top:200px;">
        <a href="./nauja_saskaita.php">Sukurti nauja saskaita</a><br>
        <a href="./saskaitu_sarasas2.php">Perziureti saskaitu sarasa <i class="text-icon icon-external-link"></i></a><br>
        <a href="./login.php?logout">Atsijungti</a><br>
</div>


    </body>
</html>

<?php

if(array_key_exists('delete', $_POST)){
    foreach($data as $key => $value){
        if($_POST['delete'] == $value['IBAN']){
            if($value['lesos'] > 0){
                $_SESSION['note'] = 'Istrinti ne tuscios saskaitos negalima';
            }else{
                array_splice($data, $key, 1);
                $_SESSION['note'] = 'Saskaita istrinta';
                file_put_contents(__DIR__ .'/data.json', json_encode($data));
                header('Location: http://localhost:8080/grazus/Uzdaviniai/bankas/saskaitu_sarasas2.php'); // GET
                die();
            }
        }
    }
}


?>
<div style="color:red">
<?php
if(isset($_SESSION['note'])) {
    echo $_SESSION['note'];
    unset($_SESSION['note']);
}

