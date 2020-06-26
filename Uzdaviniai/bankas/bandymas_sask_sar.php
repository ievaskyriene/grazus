<?php
session_start();

//if (!isset($_SESSION['login']) || $_SESSION['login'] != 1) {
 //   header('Location: /login.php');
  ////  die();

$data = json_decode(file_get_contents(__DIR__ .'/data.json'),1);

$table = '';
/*
function sort($dataArr){
    $keisti;
    do{
        $keisti = false;
        for($i = 0; $i < count($array) - 1; $i++){
            $first = $array[$i]['surname'][0];
            $second = $array[$i+1]['surname'][0];
            if($array[$i]['surname'][0] > $array[$i+1]['surname'][0]){
                $temp = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $temp;
                $keisti = true;
            }
        }
    }while($keisti);
    return $dataArr;
}

$surusiuota = sort($data);
*/
function inesti ($name, $surename, $saskaita, $asmensKodas, $lesos){

    return '<form action="'.$URL.'inesti_lesas.php" method="post">
            <input type="hidden" name="name" value="'.$name.'">
            <input type="hidden" name="surname" value="'.$surname.'">
            <input type="hidden" name="IBAN" value="'.$saskaita.'">
            <input type="hidden" name="ID" value="'.$asmensKodas.'">
            <input type="hidden" name="lesos" value="'.$lesos.'">
            <button style="background-color: grey" type="submit">Inesti lesas</button>
            </form>';
}

function nuimti ($name, $surename, $saskaita, $asmensKodas, $lesos){

    return '<form action="/nuimti-lesas.php" method="post">
            <input type="hidden" name="name" value="'.$name.'">
            <input type="hidden" name="surname" value="'.$surename.'">
            <input type="hidden" name="IBAN" value="'.$saskaita.'">
            <input type="hidden" name="ID" value="'.$asmensKodas.'">
            <input type="hidden" name="lesos" value="'.$lesos.'">
            <button style="background-color: grey" type="submit">Nuimti lesu</button>
            </form>';
}

function istrinti ($saskaita){
    return '<form action="/istrinti.php" method="post">
            <input type="hidden" name="delete" value="'.$saskaita.'">
            <button style="background-color: grey" type="submit">Istrinti saskaita</button>
            </form>';

}

foreach($data as $value){
    $row = "<tr>
            <td>".$value['name']."</td>
            <td>".$value['surname']."</td>
            <td>".$value['IBAN']."</td>
            <td>".$value['ID']."</td>
            <td>".istrinti ($value['IBAN'])." ".nuimti($value['name'], $value['surname'], $value['IBAN'], $value['ID'], $value['lesos'])." ".inesti($value['name'], $value['surname'], $value['IBAN'], $value['ID'], $value['lesos'])." </td>
            </tr>";

    $table .= $row;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saskaitu sarasas</title>
    <style>
        table, th, td {
        border: 1px solid grey;
        background: rgb(220,220,220);
        }
    </style>    
</head>
<body>

    <p><?php  
        
        if(isset($_SESSION['note'])) {
            echo $_SESSION['note'];
            unset($_SESSION['note']);
        }

    ?></p><br>

    <div style="width 90%; border: solid 1px grey">
    <table style="width:100%">

        <tr>
        <th>Vardas</th>
        <th>Pavarde</th> 
        <th>Saskaita</th>
        <th>Asmens kodas</th>
        <th>Veiksmai</th>
        </tr>

        <?=$table?>

        </table>
    </div>

    <a href="/nauja_saskaita.php" style="color: rgb(47,79,79); padding-top: 40px;">Sukurti nauja saskaita</a><br>


</body>
</html>