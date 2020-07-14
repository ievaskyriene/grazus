<?php
Use Main\User;

$data1 = new App\DB\JsonDb;

$data = $data1->showAll();
$data = $data1->sortData($data);

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
<table>
    <tr>
        <th >Vardas</th>
        <th>Pavarde</th> 
        <th>Saskaita</th>
        <th>Asmens kodas</th>
        <!-- <th>Profilio nuotrauka</th>  -->
        <th>Veiksmai</th>
    <div>
        <?php
            // function surnameSort($a, $b) {
            //     $aLast = $a['surname'];
            //     $bLast = $b['surname'];
            //     return strcasecmp($aLast, $bLast);
            // }
            // uasort($data, 'surnameSort');
       
                //reikia surasyti ka norim updatinti, visos eilutes neisiena updatint
                //isvedimas fetchall() ir tada echo;

        foreach ($data as $key => $user) {
           
            ?>
                <tr>
                    <td><?=$user['firstname']?></td>
                    <td><?=$user['surname']?></td>
                    <td><?=$user['IBAN']?></td>
                    <td><?=$user['ID']?></td>
                    <!-- <td><img style = "width: 200px; height: 200px; object-fit: cover;" src="<?=$user['img']?>"> -->
                    <td>
                        <?php 
                        echo '
                        <form action="'.Main\App::URL.'users/delete/'.$user['ID'].'" method="post"> 
                        <button type="submit" name="delete" value="'.$user['IBAN'].'">Trinti</button> 
                        </form>
                        <form action="'.Main\App::URL.'users/addFunds/'.$user['ID'].'" method="post">
                            <input type="hidden" name="ID" value="'.$user['ID'].'"readonly>    
                            <button type="submit" name="inesti">Inesti</button>
                        </form>
                        <form action="'.Main\App::URL.'users/withdrawFunds/'.$user['ID'].'" method="post">
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

<div class = "message">
<?php  
    if(isset($_SESSION['note'])) {
    echo $_SESSION['note'];
    unset($_SESSION['note']);
}
?></div><br>

</table>
    <div class="menu">
        <a href="<?=Main\App::URL.'users/create/'?>">Sukurti naują saskaitą</a><br>
        <a href="<?=Main\App::URL.'logout'?>">Atsijungti</a><br>
    </div>
</body>
</html>
<?php

?>
