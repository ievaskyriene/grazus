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
   
    echo '<form action="http://localhost:8080/grazus/Uzdaviniai/bankas/inesti_lesas.php" method="post">
  
    <input type="hidden" name="ID" value="'.$user['ID'].'" readonly>
    <input type="number" name="inesti" value="">
 
    <button type="submit">Prideti</button>
</form>';
        
    }
}

if(array_key_exists('prideti', $_POST)){
    foreach ($data as &$user) {
   
        if($user['ID']== $_POST['ID']){
            _dc($user);
            $user['lesos']+=(int)$_POST['prideti'];   
            _d($user['lesos']);
            _d((int)$_POST['prideti']);
        }
    }

    file_put_contents(__DIR__ .'/data.json', json_encode($data));

header('Location: http://localhost:8080/grazus/Uzdaviniai/bankas/inesti_lesas.php?ID='.$_POST['ID']); // GET
       die();
}







