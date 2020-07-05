<?php
Use Main\User;

$data = new App\DB\JsonDb;
$data = $data->showAll();
//sort($data);
// //$data = $db->save();
// _dc($data);

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
    <div>
        <?php
        // function sortdata($arr){
        //     for ($i=0; $i<count($arr)-1; $i++){
            
        //             for($j=$i+1; $j<count($arr); $j++){
        //                 if($arr[$i]['surname'] > $arr[$j]['surname']){
        //                     $temp = $arr[$i];
        //                     $arr[$i] = $arr[$j];
        //                     $arr[$j] = $temp;
        //                 }
        //             }

        //     }
        //     return $arr;
        // }
        // $data =sortdata($data);
        
        foreach ($data as $key => $user) {
           
            ?>
                <tr>
                    <td><?=$user['name']?></td>
                    <td><?=$user['surname']?></td>
                    <td><?=$user['IBAN']?></td>
                    <td><?=$user['ID']?></td>
                    <td>
                        <?php 
                        echo '
                        <form action="'.Main\App::URL.'users/delete/'.$key.'" method="post"> 
                        <button type="submit" name="delete" value="'.$user['IBAN'].'">Trinti</button> 
                        </form>
                        <form action="'.Main\App::URL.'users/addFunds/'.$key.'" method="post">
                            <input type="hidden" name="ID" value="'.$user['ID'].'"readonly>    
                            <button type="submit" name="inesti">Inesti</button>
                        </form>
                        <form action="'.Main\App::URL.'users/withdrawFunds/'.$key.'" method="post">
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

<p class = "message">
<?php  
    if(isset($_SESSION['note'])) {
    echo $_SESSION['note'];
    unset($_SESSION['note']);
}
?></p><br>
?></p><br>

</table>
    <div class="menu" style="padding-top:200px;">
        <a href="<?=Main\App::URL.'users/create/'?>">Sukurti nauja saskaita</a><br>
        <a href="<?=Main\App::URL.'logout'?>">Atsijungti</a><br>
    </div>
</body>
</html>
<?php


?>
<div style="color:red">
<?php
if(isset($_SESSION['note'])) {
    echo $_SESSION['note'];
    unset($_SESSION['note']);
}
?>
</div>