<?php
/*
require __DIR__ . '/bootstrap.php';
$data = json_decode(file_get_contents(__DIR__ .'/data.json'),1);

?>
<div style="width: 100%; height: 100vh;">
<form action="" method="post">
<?php
echo '<pre>';

print_r($_POST);
foreach ($data as $user) {
    echo '<div style="display: flex;">';

    echo $user['name'];
    echo $user['surname'];
    echo'<br>';
    echo $user['ID'];
    echo'<br>';
    echo $user['IBAN'];
    echo'<br>';
    echo $user['lesos'];
    echo'<br>';
    echo '<button type="submit" name="delete" value="'.$user['IBAN'].'">Trinti</button>';

    echo '<form action="./inesti_lesas.php" method="post">
    <input type="hidden" name="ID" value="'.$user['ID'].'" readonly>    
    <button type="submit" name="inesti">Inesti</button>
    </form>';
    echo '<form action="./nuimti_lesas.php" method="post">
    <input type="hidden" name="ID" value="'.$user['ID'].'" readonly>    
    <button type="submit" name="nuimti">Nuimti</button>
    </form>';
    echo '</div>';

}



if(array_key_exists('delete', $_POST)){
    foreach($data as $key => $value){
        if($_POST['delete'] == $value['IBAN']){
            if($value['lesos'] > 0){
                $_SESSION['note'] = 'Istrinti ne tuscios saskaitos negalima';
            }else{
                array_splice($data, $key, 1);
                $_SESSION['note'] = 'Saskaita istrinta';
            }
        }
        
    }

}

echo '<pre>';

//print_r($data);

file_put_contents(__DIR__ .'/data.json', json_encode($data));
//print_r($data);



?>
<div style="color:red">
<?php
if(isset($_SESSION['note'])) {
    echo $_SESSION['note'];
    unset($_SESSION['note']);
}

/*
?>
</div>
</form>
</div>
<!-- 
<form action="./inesti_lesas.php" method="post">
  
    <input type="hidden" name="ID" value="<?=$data['ID']?>" readonly>
 
    <button type="submit" name="inesti"></button>
</form>

<form action="./nuimti_lesas.php" method="post">
  
    <input type="hidden" name="ID" value="<?=$data['ID']?>" readonly>
 
    <button type="submit" name="nuimti"></button>
</form> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/table.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <h2>Saskaitu sarasas</h2>
        </div>
        <div class="row">
            <div class="table">
                <div class="table-head">
                    <div class="cell">Vardas</div>
                    <div class="cell">Pavarde</div>
                    <div class="cell">Asmens kodas</div>
                    <div class="cell">Išlaidos</div>
                    <div class="cell">Lesu saskaitoje</div>
                    <div class="cell">Veiksmai</div>
                </div>
                <div class="table-content">
                    <div class = "row"> 
                    <div class="cell">Vardas</div>
                    <div class="cell">Pavarde</div>
                    <div class="cell">Asmens kodas</div>
                    <div class="cell">Išlaidos</div>
                    <div class="cell">Lesu saskaitoje</div>
                    <div class="cell">Veiksmai</div>
                    </div>
                </div>
                <div class="table-footer"></div>
            </div>
        </div>
    
    </div>

</body>
</html>

*/
