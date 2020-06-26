<?php
require __DIR__ . '/bootstrap.php';

$data = json_decode(file_get_contents(__DIR__ .'/data.json'),1);

if(isset($_POST['ID'])){
$id= $_POST['ID'];  
}

if(!isset($_POST['ID'])){ 
    $id=$_GET['ID'];
}

foreach ($data as $user) {
    if($user['ID']== $id){
        _dc($user);
        echo $user['name'];
    echo $user['surname'];
    echo'<br>';
    echo $user['ID'];
    echo'<br>';
    echo $user['IBAN'];
    echo'<br>';
    echo $user['lesos'];
    echo'<br>';
   
    echo '<form action="./nuimti_lesas.php" method="post">
    <input type="hidden" name="ID" value="'.$user['ID'].'" readonly>
    <input type="number" name="nuimti" value="">
    <button type="submit">Nuimti</button>
    </form>';
    }
}

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